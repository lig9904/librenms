<?php

$no_refresh = true;

$pagetitle[] = __('Search');

$sections = [
    'ipv4' => __('IPv4 Address'),
    'ipv6' => __('IPv6 Address'),
    'mac' => __('MAC Address'),
    'arp' => __('ARP Table'),
    'fdb' => __('FDB Table'),
];

if (dbFetchCell('SELECT 1 from `packages` LIMIT 1')) {
    $sections['packages'] = __('Packages');
}

$search_type = basename($vars['search'] ?? 'ipv4');

print_optionbar_start('', '');

echo '<span style="font-weight: bold;">' . e(__('Search')) . '</span> &#187; ';

$sep = '';
foreach ($sections as $type => $texttype) {
    echo $sep;
    if ($vars['search'] == $type) {
        echo "<span class='pagemenu-selected'>";
    }

    // echo('<a href="search/' . $type . ($_GET['optb'] ? '/' . $_GET['optb'] : ''). '/">' . $texttype .'</a>');
    echo generate_link($texttype, ['page' => 'search', 'search' => $type]);

    if ($vars['search'] == $type) {
        echo '</span>';
    }

    $sep = ' | ';
}

print_optionbar_end();

if (file_exists("includes/html/pages/search/$search_type.inc.php")) {
    include "includes/html/pages/search/$search_type.inc.php";
} else {
    echo e(__('Unknown search type'));
}
