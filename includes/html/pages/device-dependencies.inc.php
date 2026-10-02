<?php
/*
 * LibreNMS
 *
 * Copyright (c) 2017 Aldemir Akpinar <https://github.com/aldemira>
 *
 * This program is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the
 * Free Software Foundation, either version 3 of the License, or (at your
 * option) any later version.  Please see LICENSE.txt at the top level of
 * the source code distribution for details.
 */

use Illuminate\Support\Facades\Gate;

$no_refresh = true;

$pagetitle[] = __('Device Dependencies');

require_once 'includes/html/modal/delete_host_dependency.inc.php';
require_once 'includes/html/modal/edit_host_dependency.inc.php';
require_once 'includes/html/modal/manage_host_dependencies.inc.php';
?>
<div class="row">
    <div class="col-sm-12">
        <span id="message"></span>
    </div>
</div>

<div class="table-responsive">
    <table id="hostdeps" class="table table-hover table-condensed table-striped">
        <thead>
            <tr>
                <th data-column-id="id" data-type="int" data-formatter="id" data-sortable="true" data-visible="true"><?php echo e(__('Id')); ?></th>
                <th data-column-id="hostname" data-type="string" data-css-class="childhost" data-formatter="hostname"><?php echo e(__('Hostname')); ?></th>
                <th data-column-id="sysname" data-type="string" data-visible="false"><?php echo e(__('Sysname')); ?></th>
                <th data-column-id="parent" data-type="string" data-css-class="parenthost" data-formatter="parent"><?php echo e(__('Parent Device(s)')); ?></th>
                <th data-column-id="parentid" data-visible="false"><?php echo e(__('Parent ID')); ?></th>
                <th data-column-id="actions" data-sortable="false" data-searchable="false" data-formatter="actions"><?php echo e(__('Actions')); ?></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<script>
var dependencyLabels = <?php echo json_encode([
    'manage' => __('Manage Device Dependencies'),
    'edit' => __('Edit'),
    'delete' => __('Delete'),
    'none' => __('None'),
    'loadError' => __('Device dependencies could not be retrieved from the database'),
    'bootgrid' => [
        'all' => __('All'),
        'infos' => __('Showing {{ctx.start}} to {{ctx.end}} of {{ctx.total}} entries'),
        'loading' => __('Loading...'),
        'noResults' => __('No results found!'),
        'refresh' => __('Refresh'),
        'search' => __('Search'),
    ],
], JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>;
var grid = $("#hostdeps").bootgrid({
    rowCount: [50, 100, 250, -1],
    ajax: true,
    labels: dependencyLabels.bootgrid,
    post: function() {
        return {
            type: "get-host-dependencies",
            viewtype: "fulllist",
            format: "mainpage"
        };
    },
    url: "ajax_form.php",
    templates: {
        header: '<div id="{{ctx.id}}" class="{{css.header}}"> \
                    <div class="row"> \
<?php if (Gate::allows('update', DeviceCache::getPrimary())) { ?>
                        <div class="col-sm-8 actionBar"> \
                            <span class="pull-left"> \
                            <button type="button" class="btn btn-primary btn-sm command-manage" data-toggle="modal" data-target="#manage-dependencies" data-template_id="">' + dependencyLabels.manage + '</button> \
                            </span> \
                        </div> \
                <div class="col-sm-4 actionBar"><p class="{{css.search}}"></p><p class="{{css.actions}}"></p></div></div></div>'
<?php } else { ?>
                <div class="actionBar"><p class="{{css.search}}"></p><p class="{{css.actions}}"></p></div></div></div>'

<?php } ?>
    },
    formatters: {
        "actions": function(column, row) {
            var content = document.createElement('div');
            content.style.whiteSpace = "nowrap";

            <?php if (Gate::allows('device.update')) { ?>
            var edit_button = document.createElement('button');
            edit_button.setAttribute('type', 'button');
            edit_button.setAttribute('class', 'btn btn-primary btn-sm command-edit');
            edit_button.setAttribute('aria-label', dependencyLabels.edit);
            edit_button.setAttribute('data-toggle', 'modal');
            edit_button.setAttribute('data-target', '#edit-dependency');
            edit_button.setAttribute('name', 'edit-host-dependency');
            edit_button.setAttribute('data-device_id', row.deviceid);
            edit_button.setAttribute('data-host_name', row.hostname);
            edit_button.setAttribute('data-parent_id', row.parentid);
            var edit_button_label = document.createElement('i');
            edit_button_label.setAttribute('class', 'fa fa-pencil');
            edit_button_label.setAttribute('aria-hidden', 'true');
            edit_button.appendChild(edit_button_label);
            content.appendChild(edit_button);

            content.appendChild(document.createTextNode(' '))
            <?php } ?>

            <?php if (Gate::allows('device.delete')) { ?>
            var delete_button = document.createElement('button');
            delete_button.setAttribute('type', 'button');
            delete_button.setAttribute('class', 'btn btn-danger btn-sm command-delete');
            delete_button.setAttribute('aria-label', dependencyLabels.delete);
            delete_button.setAttribute('data-toggle', 'modal');
            delete_button.setAttribute('data-target', '#confirm-delete');
            delete_button.setAttribute('name', 'delete-host-dependency');
            delete_button.setAttribute('data-device_id', row.deviceid);
            delete_button.setAttribute('data-host_name', row.hostname);
            delete_button.setAttribute('data-device_parent', row.parentid);
            delete_button.disabled = row.parent == 'None';
            var delete_button_label = document.createElement('i');
            delete_button_label.setAttribute('class', 'fa fa-trash');
            delete_button_label.setAttribute('aria-hidden', 'true');
            delete_button.appendChild(delete_button_label);
            content.appendChild(delete_button)
            <?php } ?>

            return content.outerHTML;
        },
        "id": function(column, row) {
            return row.deviceid;
        },
        "hostname": function(column, row) {
            var content = document.createElement('div');
            var link = document.createElement('a');
            link.setAttribute('href', '<?php echo route('device', ['device' => ':device_id']) ?>'.replace(':device_id', row.deviceid));
            link.setAttribute('class', 'list-device');
            link.appendChild(document.createTextNode(row.hostname));
            content.appendChild(link);
            content.appendChild(document.createElement('br'));
            content.appendChild(document.createTextNode(row.sysname));

            return content.innerHTML;
        },
        "parent": function(column, row) {
            if (row.parent == 'None') {
                return dependencyLabels.none;
            }

            var temp = row.parent.split(',');
            var tempids = row.parentid.split(',');
            var retstr = '';
            for (i=0; i < temp.length; i++) {
                var link = document.createElement('a');
                link.setAttribute('href', '<?php echo route('device', ['device' => ':device_id']) ?>'.replace(':device_id', tempids[i]));
                link.setAttribute('class', 'list-device');
                link.appendChild(document.createTextNode(temp[i]));
                retstr = retstr + link.outerHTML + ', ';
            }
            return retstr.slice(0, -2);
        }
    },
}).on("loaded.rs.jquery.bootgrid", function(e) {
    e.preventDefault();
        /* Executes after data is loaded and rendered */
    grid.find(".command-edit").on("click", function(e) {
        $('#edit-row_id').val($(this).parent().parent().parent().data('row-id'));
        $("#edit-device_id").val($(this).data("device_id"));
        $("#edit-parent_id").val($(this).data("parent_id"));
        $('#edit-dependency').modal('show');
        $('.modalhostname').text($(this).data("host_name"));
    }).end().find(".command-delete").on("click", function(e) {
        $('#delete-row_id').val($(this).parent().parent().parent().data('row-id'));
        $("#delete-device_id").val($(this).data("device_id"));
        $("#delete-parent_id").val($(this).data("device_parent"));
        $('#confirm-delete').modal('show');
        $('.modalhostname').text($(this).data("host_name"));
    }).end().find(".command-manage").on("click", function(e) {
        $('#manage-dependencies').modal('show');
    });
});

$(document).ready(function() {
    var editSelect = $('#availableparents').select2({
        dropdownParent: $('#edit-dependency'),
        width: 'resolve'

    });

    var manParentDevstoClr = $('#manclearchildren').select2({
        dropdownParent: $('#manage-dependencies'),
        width: 'resolve'
    });

    var manParentDevs = $('#manavailableparents').select2({
        dropdownParent: $('#manage-dependencies'),
        width: 'resolve'
    });

    var manAllDevs = $('#manalldevices').select2({
        dropdownParent: $('#manage-dependencies'),
        width: 'resolve'
    });

    $.ajax({
        type: "POST",
        url: 'ajax_form.php',
        data: {type: 'get-host-dependencies', "viewtype": 'fulllist' },
        dataType: "json",
        success: function(output) {
            if (output.status == 0) {
                manParentDevs.append($('<option>', { value: 0, text: dependencyLabels.none}));
                editSelect.append($('<option>', { value: 0, text: dependencyLabels.none}));
                manParentDevstoClr.append($('<option>', { value: 0, text: dependencyLabels.none}));
                $.each(output.deps, function (i,elem) {
                    var devtext = elem.hostname + ' (' + elem.sysName + ')';
                    manParentDevs.append($('<option>',{value:elem.id, text:devtext}));
                    editSelect.append($('<option>',{value:elem.id, text:devtext}));
                    manAllDevs.append($('<option>',{value:elem.id, text:devtext}));
                    manParentDevstoClr.append($('<option>',{value:elem.id, text:devtext}));
                });
            } else {
                toastr.error(dependencyLabels.loadError);
            }
        },
        error: function() {
            toastr.error(dependencyLabels.loadError);
        }
    });
});
</script>
