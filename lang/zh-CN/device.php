<?php

return [
    'all_devices' => '所有设备',
    'attributes' => [
        'hostname' => '主机名',
        'features' => '操作系统特性',
        'hardware' => '硬件',
        'icon' => '图标',
        'ip' => 'IP地址',
        'location' => '位置',
        'os' => '设备操作系统',
        'serial' => '序列号',
        'sysDescr' => '系统描述',
        'sysName' => '系统名称',
        'sysObjectID' => '系统对象 ID',
        'version' => '操作系统版本',
        'type' => '设备类型',
    ],

    'never_polled' => '从未轮询',
    'vm_host' => '虚拟机宿主机',
    'scheduled_maintenance' => '计划维护',
    'delete_device' => '删除设备',
    'delete' => '删除 :name',
    'confirm_delete' => '确定要删除设备 :name 吗？',
    'deleted' => '已删除设备 :hostname。',
    'please_select' => '请选择',
    'warning_monitored' => '警告！删除后将不再监控该设备。',
    'warning_data' => '该设备的历史数据也会被删除，例如：',
    'device_group' => '设备组',
    'show_filter' => '显示筛选条件',
    'show_header' => '显示表头',
    'os' => '操作系统',
    'status' => '状态',
    'status_up' => '在线',
    'status_down' => '离线',
    'device_type' => '设备类型',
    'alerts_disabled' => '已禁用告警',

    'edit' => [
        'delete_device' => '删除设备',
        'rediscover_title' => '安排轮询器立即重新发现此设备',
        'rediscover' => '重新发现设备',

        'hostname_title' => '修改用于名称解析的主机名',
        'hostname_ip' => '主机名 / IP 地址',

        'display_title' => '此设备的显示名称，请保持简短。可用占位符：hostname、sysName、sysName_fallback、ip（例如 ":sysName"）',
        'display_name' => '显示名称',
        'system_default' => '系统默认',

        'overwrite_ip_title' => '轮询时使用此 IP 地址代替解析得到的地址',
        'overwrite_ip' => '覆盖 IP 地址（请勿使用）',

        'description' => '描述',
        'type' => '类型',
        'static_groups' => '静态设备组',

        'override_sysLocation' => '覆盖 sysLocation',
        'coordinates_title' => '设置坐标时，请填写 [纬度,经度]',

        'override_sysContact' => '覆盖 sysContact',

        'depends_on' => '此设备依赖于',
        'none' => '无',

        'poller_group' => '轮询器组',
        'poller_group_general' => '通用',
        'default_poller' => '（默认轮询器）',

        'disable_polling_alerting' => '禁用轮询和告警',
        'disable_alerting' => '禁用告警',

        'ignore_alert_tag' => '忽略告警标记',
        'ignore_alert_tag_title' => "为设备设置忽略告警标记。告警检查仍会运行。\n告警规则可以读取此标记。\n启用忽略告警标记后，告警规则将不匹配条件 `devices.ignore = 0` 或 `macros.device = 1`。",

        'ignore_device_status' => '忽略设备状态',
        'ignore_device_status_title' => '将设备标记为忽略状态，设备将始终显示为在线。',

        'save' => '保存',

        'last_polled' => '上次轮询时间',
        'last_discovered' => '上次发现时间',

        'rediscover_error' => '无法安排此设备重新发现',
    ],

    'oxidized' => [
        'connection_error' => '无法从 Oxidized 获取设备信息',
    ],
];
