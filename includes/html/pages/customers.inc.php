<?php

$pagetitle[] = __('Customers');
$no_refresh = true;

?>

<div class="table-responsive">
    <table id="customers" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th data-column-id="port_descr_descr" data-order="asc" data-formatter="customer"><?php echo e(__('Customer')); ?></th>
                <th data-column-id="hostname"><?php echo e(__('Device')); ?></th>
                <th data-column-id="ifDescr"><?php echo e(__('Interface')); ?></th>
                <th data-column-id="port_descr_speed"><?php echo e(__('Speed')); ?></th>
                <th data-column-id="port_descr_circuit"><?php echo e(__('Circuit')); ?></th>
                <th data-column-id="port_descr_notes"><?php echo e(__('Notes')); ?></th>
            </tr>
        </thead>
    </table>
</div>

<script>

    var grid = $("#customers").bootgrid({
        ajax: true,
        labels: <?php echo json_encode([
            'all' => __('All'),
            'infos' => __('Showing {{ctx.start}} to {{ctx.end}} of {{ctx.total}} entries'),
            'loading' => __('Loading...'),
            'noResults' => __('No results found!'),
            'refresh' => __('Refresh'),
            'search' => __('Search'),
        ], JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>,
        rowCount: [50, 100, 250, -1],
        url: "<?php echo url('/ajax/table/customers'); ?>",
        formatters: {
            customer: function (column, row) {
                return '<strong>' + row[column.id] + '</strong>';
            }
        }
    });
</script>
