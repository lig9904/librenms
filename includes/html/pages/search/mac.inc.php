<div class="panel panel-default panel-condensed">
    <div class="panel-heading">
        <strong><?php echo e(__('MAC Addresses')); ?></strong>
    </div>
    <table id="mac-search" class="table table-hover table-condensed table-striped">
        <thead>
            <tr>
                <th data-column-id="hostname" data-order="asc"><?php echo e(__('Device')); ?></th>
                <th data-column-id="interface"><?php echo e(__('Interface')); ?></th>
                <th data-column-id="address" data-formatter="tooltip"><?php echo e(__('MAC Address')); ?></th>
                <th data-column-id="mac_oui" data-sortable="false" data-width="150px" data-visible="<?php echo \App\Facades\LibrenmsConfig::get('mac_oui.enabled') ? 'true' : 'false' ?>" data-formatter="tooltip"><?php echo e(__('Vendor')); ?></th>
                <th data-column-id="description" data-formatter="tooltip"><?php echo e(__('Description')); ?></th></tr>
            </tr>
        </thead>
    </table>
</div>

<script>
var searchLabels = <?php echo json_encode([
    'allDevices' => __('All Devices'),
    'allInterfaces' => __('All Interfaces'),
    'loopbacks' => __('Loopbacks'),
    'vlans' => __('VLANs'),
    'addressPlaceholder' => __('MAC Address'),
    'search' => __('Search'),
    'bootgrid' => [
        'all' => __('All'),
        'infos' => __('Showing {{ctx.start}} to {{ctx.end}} of {{ctx.total}} entries'),
        'loading' => __('Loading...'),
        'noResults' => __('No results found!'),
        'refresh' => __('Refresh'),
        'search' => __('Search'),
    ],
], JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>;

var grid = $("#mac-search").bootgrid({
    ajax: true,
    labels: searchLabels.bootgrid,
    rowCount: [50, 100, 250, -1],
    templates: {
        header: "<div id=\"{{ctx.id}}\" class=\"{{css.header}}\"><div class=\"row\">"+
                "<div class=\"col-sm-9 actionBar\"><span class=\"pull-left\">"+
                "<form method=\"post\" action=\"\" class=\"form-inline\" role=\"form\">"+
                "<?php echo addslashes(csrf_field()) ?>"+
                "<div class=\"form-group\">"+
                "<select name=\"device_id\" id=\"device_id\" class=\"form-control input-sm\">"+
                "<option value=\"\">" + searchLabels.allDevices + "</option>"+
<?php

$sql = 'SELECT `devices`.`device_id`,`hostname`, `sysName` FROM `devices`';
$param = [];
$where = '';

$device_id = (int) ($_POST['device_id'] ?? 0);
$interface = $_POST['interface'] ?? '';
$address = $_POST['address'] ?? '';

if (Gate::denies('viewAll', \App\Models\Device::class)) {
    $device_ids = Permissions::devicesForUser()->toArray() ?: [0];
    $where .= ' WHERE `devices`.`device_id` IN ' . dbGenPlaceholders(count($device_ids));
    $param = array_merge($param, $device_ids);
}

$sql .= " $where ORDER BY `hostname`";
foreach (dbFetchRows($sql, $param) as $data) {
    echo '"<option value=\"' . $data['device_id'] . '\""+';
    if ($data['device_id'] == $device_id) {
        echo '" selected "+';
    }

    echo '">' . str_replace(['"', '\''], '', htmlentities(format_hostname($data))) . '</option>"+';
}
?>
               "</select>"+
               "</div>"+
               "<div class=\"form-group\">"+
               "<select name=\"interface\" id=\"interface\" class=\"form-control input-sm\">"+
               "<option value=\"\">" + searchLabels.allInterfaces + "</option>"+
               "<option value=\"Loopback%\" "+
<?php
if ($interface == 'Loopback%') {
    echo '" selected "+';
}
?>
               ">" + searchLabels.loopbacks + "</option>"+
               "<option value=\"Vlan%\""+
<?php
if ($interface == 'Vlan%') {
    echo '" selected "+';
}
?>

               ">" + searchLabels.vlans + "</option>"+
               "</select>"+
               "</div>"+
               "<div class=\"form-group\">"+
               "<input type=\"text\" name=\"address\" id=\"address\" value=\""+
<?php
echo '"' . htmlspecialchars((string) $address) . '"+';
?>

               "\" class=\"form-control input-sm\" placeholder=\"" + searchLabels.addressPlaceholder + "\"/>"+
               "</div>"+
               "<button type=\"submit\" class=\"btn btn-default input-sm\">" + searchLabels.search + "</button>"+
               "</form></span></div>"+
               "<div class=\"col-sm-3 actionBar\"><p class=\"{{css.actions}}\"></p></div></div></div>"
    },
    post: function ()
    {
        return {
            device_id: '<?php echo $device_id ?: ''; ?>',
            interface: '<?php echo htmlspecialchars((string) $interface); ?>',
            address: '<?php echo htmlspecialchars((string) $address); ?>'
        };
    },
    url: "<?php echo route('search.mac'); ?>",
    formatters: {
        "tooltip": function (column, row) {
                var value = row[column.id];
                var vendor = '';
                if (column.id == 'address' && ((vendor = row['mac_oui']) != '' )) {
                    return "<span title=\'" + value + " (" + vendor + ")\' data-toggle=\'tooltip\'>" + value + "</span>";
                }
                return "<span title=\'" + value + "\' data-toggle=\'tooltip\'>" + value + "</span>";
            },
    },
});

</script>
