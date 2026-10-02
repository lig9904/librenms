<?php

return [
    'device' => [
        'title' => '设备',
        'viewAll' => ['label' => '查看所有设备', 'description' => '查看所有设备'],
        'view' => ['label' => '查看设备详情', 'description' => '查看用户有权访问的设备'],
        'create' => ['label' => '添加设备', 'description' => '将新设备添加到 LibreNMS'],
        'update' => ['label' => '编辑设备', 'description' => '修改设备设置'],
        'delete' => ['label' => '删除设备', 'description' => '从 LibreNMS 中移除设备'],
        'debug' => ['label' => '调试设备', 'description' => '在设备上运行 snmpwalk 等调试命令'],
        'updateNotes' => ['label' => '更新设备备注', 'description' => '更新设备备注'],
    ],

    'config-backup' => [
        'title' => '配置备份',
        'view' => ['label' => '查看设备配置', 'description' => '查看设备配置备份'],
        'refresh' => ['label' => '刷新设备配置', 'description' => '按需触发设备配置备份'],
    ],

    'alert' => [
        'title' => '告警',
        'viewAll' => ['label' => '查看所有告警', 'description' => '查看所有告警'],
        'view' => ['label' => '查看告警详情', 'description' => '查看用户有权访问的设备的告警'],
        'detail' => ['label' => '查看告警详情', 'description' => '查看告警详细信息'],
        'update' => ['label' => '编辑告警', 'description' => '确认或修改告警'],
        'delete' => ['label' => '删除告警', 'description' => '删除告警历史记录'],
    ],

    'alert-rule' => [
        'title' => '告警规则',
        'viewAll' => ['label' => '查看所有告警规则', 'description' => '查看所有告警规则'],
        'view' => ['label' => '查看告警规则', 'description' => '查看用户有权访问的设备所关联的告警规则详情'],
        'create' => ['label' => '创建告警规则', 'description' => '创建新的告警规则'],
        'update' => ['label' => '编辑告警规则', 'description' => '修改现有告警规则'],
        'delete' => ['label' => '删除告警规则', 'description' => '删除告警规则'],
    ],

    'alert-schedule' => [
        'title' => '告警计划',
        'view' => ['label' => '查看告警计划', 'description' => '查看告警计划详情'],
        'create' => ['label' => '创建告警计划', 'description' => '创建新的告警计划'],
        'update' => ['label' => '编辑告警计划', 'description' => '修改现有告警计划'],
        'delete' => ['label' => '删除告警计划', 'description' => '删除告警计划'],
    ],

    'alert-template' => [
        'title' => '告警模板',
        'view' => ['label' => '查看告警模板', 'description' => '查看告警模板'],
        'create' => ['label' => '创建告警模板', 'description' => '创建新的告警模板'],
        'update' => ['label' => '编辑告警模板', 'description' => '修改现有告警模板'],
        'delete' => ['label' => '删除告警模板', 'description' => '删除告警模板'],
    ],

    'alert-transport' => [
        'title' => '告警通知渠道',
        'view' => ['label' => '查看告警通知渠道', 'description' => '查看告警通知渠道'],
        'create' => ['label' => '创建告警通知渠道', 'description' => '创建新的告警通知渠道'],
        'update' => ['label' => '编辑告警通知渠道', 'description' => '修改现有告警通知渠道'],
        'delete' => ['label' => '删除告警通知渠道', 'description' => '删除告警通知渠道'],
    ],

    'api' => [
        'title' => 'API 访问',
        'access' => ['label' => 'API 访问', 'description' => '访问 LibreNMS REST API'],
    ],

    'application' => [
        'title' => '应用',
        'update' => ['label' => '更新应用', 'description' => '更新应用数据'],
    ],

    'auth-log' => [
        'title' => '身份验证日志',
        'view' => ['label' => '查看身份验证日志', 'description' => '查看身份验证日志'],
    ],

    'bill' => [
        'title' => '计费记录',
        'viewAll' => ['label' => '查看所有计费记录', 'description' => '查看所有计费记录'],
        'view' => ['label' => '查看计费详情', 'description' => '查看用户有权访问的计费记录的详情和图表'],
        'create' => ['label' => '创建计费记录', 'description' => '创建新的计费记录'],
        'update' => ['label' => '编辑计费记录', 'description' => '修改计费设置'],
        'delete' => ['label' => '删除计费记录', 'description' => '移除计费记录'],
    ],

    'component' => [
        'title' => '组件',
        'update' => ['label' => '更新组件', 'description' => '更新组件数据'],
    ],

    'custom-map' => [
        'title' => '网络地图',
        'viewAll' => ['label' => '查看所有网络地图', 'description' => '查看所有网络地图'],
        'view' => ['label' => '查看网络地图', 'description' => '查看包含用户有权访问设备的网络地图'],
        'create' => ['label' => '创建网络地图', 'description' => '创建新的网络地图'],
        'update' => ['label' => '编辑网络地图', 'description' => '修改现有网络地图'],
        'delete' => ['label' => '删除网络地图', 'description' => '删除网络地图'],
    ],

    'dashboard' => [
        'title' => '仪表板',
        'copy' => ['label' => '复制仪表板', 'description' => '复制其他用户的仪表板'],
    ],

    'device-group' => [
        'title' => '设备组',
        'viewAll' => ['label' => '查看所有设备组', 'description' => '查看所有设备组'],
        'view' => ['label' => '查看设备组', 'description' => '查看包含用户有权访问设备的设备组'],
        'create' => ['label' => '创建设备组', 'description' => '创建新的设备组'],
        'update' => ['label' => '编辑设备组', 'description' => '修改现有设备组'],
        'delete' => ['label' => '删除设备组', 'description' => '删除设备组'],
    ],

    'link' => [
        'title' => '链路',
        'viewAll' => ['label' => '查看所有链路', 'description' => '查看网络链路信息'],
    ],

    'location' => [
        'title' => '位置',
        'viewAll' => ['label' => '查看所有位置', 'description' => '查看所有位置'],
        'view' => ['label' => '查看位置', 'description' => '查看与用户有权访问设备相关的位置'],
        'create' => ['label' => '创建位置', 'description' => '创建新的位置'],
        'update' => ['label' => '编辑位置', 'description' => '修改现有位置'],
        'delete' => ['label' => '删除位置', 'description' => '删除位置'],
    ],

    'mempool' => [
        'title' => '内存池',
        'update' => ['label' => '更新内存池', 'description' => '更新内存池数据'],
    ],

    'notification' => [
        'title' => '通知',
        'create' => ['label' => '创建通知', 'description' => '创建新的通知'],
        'update' => ['label' => '编辑通知', 'description' => '修改现有通知'],
    ],

    'oxidized' => [
        'title' => 'Oxidized',
        'list' => ['label' => '为 Oxidized 列出设备', 'description' => '允许 Oxidized 通过 API 获取设备列表'],
        'search' => ['label' => '搜索 Oxidized', 'description' => '搜索 Oxidized 配置备份'],
    ],

    'peering-db' => [
        'title' => 'PeeringDB',
        'view' => ['label' => '查看 PeeringDB', 'description' => '查看 PeeringDB 信息'],
    ],

    'plugin' => [
        'title' => '插件',
        'admin' => ['label' => '管理插件', 'description' => '管理插件设置和状态'],
    ],

    'poller' => [
        'title' => '轮询器',
        'view' => ['label' => '查看轮询器', 'description' => '查看轮询器信息与状态'],
        'update' => ['label' => '编辑轮询器', 'description' => '修改轮询器设置'],
        'delete' => ['label' => '删除轮询器', 'description' => '从 LibreNMS 中移除轮询器'],
    ],

    'poller-group' => [
        'title' => '轮询器组',
        'create' => ['label' => '创建轮询器组', 'description' => '创建新的轮询器组'],
        'update' => ['label' => '编辑轮询器组', 'description' => '修改现有轮询器组'],
        'delete' => ['label' => '删除轮询器组', 'description' => '删除轮询器组'],
    ],

    'port' => [
        'title' => '端口',
        'viewAll' => ['label' => '查看所有端口', 'description' => '查看所有端口'],
        'view' => ['label' => '查看端口详情', 'description' => '查看用户有权访问的设备或端口'],
        'update' => ['label' => '编辑端口', 'description' => '修改端口描述和设置'],
        'delete' => ['label' => '删除端口', 'description' => '永久删除端口及其数据'],
    ],

    'port-group' => [
        'title' => '端口组',
        'viewAll' => ['label' => '查看所有端口组', 'description' => '查看所有端口组'],
        'view' => ['label' => '查看端口组', 'description' => '查看包含用户有权访问端口的端口组'],
        'create' => ['label' => '创建端口组', 'description' => '创建新的端口组'],
        'update' => ['label' => '编辑端口组', 'description' => '修改现有端口组'],
        'delete' => ['label' => '删除端口组', 'description' => '删除端口组'],
    ],

    'processor' => [
        'title' => '处理器',
        'viewAll' => ['label' => '查看所有处理器', 'description' => '查看所有处理器'],
        'view' => ['label' => '查看处理器', 'description' => '查看用户有权访问设备的处理器'],
        'update' => ['label' => '更新处理器', 'description' => '更新处理器数据'],
    ],

    'reporting' => [
        'title' => '报表',
        'update' => ['label' => '更新报表', 'description' => '更新报表设置'],
    ],

    'role' => [
        'title' => '角色',
        'update' => ['label' => '编辑角色', 'description' => '修改角色权限和设置'],
    ],

    'routing' => [
        'title' => '路由',
        'viewAll' => ['label' => '查看所有路由', 'description' => '查看所有路由信息'],
        'view' => ['label' => '查看路由', 'description' => '查看特定路由详情'],
        'update' => ['label' => '更新路由', 'description' => '更新路由数据'],
    ],

    'service' => [
        'title' => '服务',
        'viewAll' => ['label' => '查看所有服务', 'description' => '查看所有服务'],
        'view' => ['label' => '查看服务', 'description' => '查看用户有权访问设备的服务'],
        'create' => ['label' => '添加服务', 'description' => '为设备添加新服务'],
        'update' => ['label' => '编辑服务', 'description' => '修改服务检查设置'],
        'delete' => ['label' => '删除服务', 'description' => '从设备中移除服务'],
    ],

    'service-template' => [
        'title' => '服务模板',
        'view' => ['label' => '查看服务模板', 'description' => '查看服务模板'],
        'create' => ['label' => '创建服务模板', 'description' => '创建新的服务模板'],
        'update' => ['label' => '编辑服务模板', 'description' => '修改现有服务模板'],
        'delete' => ['label' => '删除服务模板', 'description' => '删除服务模板'],
    ],

    'settings' => [
        'title' => '设置',
        'view' => ['label' => '查看设置', 'description' => '查看 LibreNMS 全局设置'],
        'update' => ['label' => '编辑设置', 'description' => '修改 LibreNMS 全局设置'],
    ],

    'syslog' => [
        'title' => '系统日志',
        'delete' => ['label' => '删除系统日志', 'description' => '删除系统日志历史记录'],
    ],

    'user' => [
        'title' => '用户',
        'view' => ['label' => '查看用户', 'description' => '查看用户账户详情'],
        'create' => ['label' => '创建用户', 'description' => '创建新的用户账户'],
        'update' => ['label' => '编辑用户', 'description' => '修改用户账户、角色和权限'],
        'delete' => ['label' => '删除用户', 'description' => '删除用户账户'],
        'manage' => ['label' => '管理权限', 'description' => '管理用户权限'],
        'updatePassword' => ['label' => '更新密码', 'description' => '更新用户密码'],
    ],

    'vlan' => [
        'title' => 'VLAN',
        'viewAll' => ['label' => '查看所有 VLAN', 'description' => '查看所有 VLAN 信息'],
    ],

    'vminfo' => [
        'title' => '虚拟机',
        'viewAll' => ['label' => '查看所有虚拟机', 'description' => '查看所有虚拟机信息'],
        'view' => ['label' => '查看虚拟机', 'description' => '查看用户有权访问设备的虚拟机详情'],
        'update' => ['label' => '更新虚拟机', 'description' => '更新虚拟机数据'],
    ],

    'wireless-sensor' => [
        'title' => '无线传感器',
        'update' => ['label' => '更新无线传感器', 'description' => '更新无线传感器数据'],
        'delete' => ['label' => '删除无线传感器', 'description' => '删除无线传感器数据'],
    ],

    'customoid' => [
        'title' => '自定义 OID',
        'view' => ['label' => '查看自定义 OID', 'description' => '查看自定义 OID 数据'],
        'create' => ['label' => '创建自定义 OID', 'description' => '创建新的自定义 OID'],
        'update' => ['label' => '编辑自定义 OID', 'description' => '修改现有自定义 OID'],
        'delete' => ['label' => '删除自定义 OID', 'description' => '删除自定义 OID'],
    ],

    'rbac' => [
        'title' => '角色与权限',
        'beta_warning_title' => '测试版功能',
        'beta_warning_message' => '此功能仍处于测试阶段，权限可能应用不正确。如发现问题，请及时反馈。',
        'manage_users' => '管理用户',
        'manage_roles' => '管理角色',
        'add_role' => '添加角色',
        'create_role' => '创建角色',
        'create_new_role' => '创建新角色',
        'edit_role' => '编辑角色',
        'delete_role' => '删除角色',
        'role_name' => '角色名称',
        'permissions' => '权限',
        'actions' => '操作',
        'all_permissions' => '所有权限',
        'view_all_permissions' => '查看所有权限',
        'view_permissions' => '查看权限',
        'no_permissions' => '未分配权限',
        'confirm_delete' => '确定要删除此角色吗？',
        'role_name_placeholder' => '例如：network-engineer',
        'search_permissions' => '搜索权限...',
        'select_all' => '全选',
        'clear_all' => '清空选择',
        'save_role' => '保存角色',
        'update_role' => '更新角色',
        'created' => '角色 :name 创建成功',
        'updated' => '角色 :name 更新成功',
        'deleted' => '角色 :name 删除成功',
        'role_name_regex' => '角色名称只能包含小写字母和连字符（-）。',
    ],
    'permissions' => [
        'user_permissons' => ':name 的权限',
        'bill_access' => '计费记录访问权限（:count）',
        'device_access' => '设备访问权限（:count）',
        'device_group_access' => '设备组访问权限（:count）',
        'port_access' => '端口访问权限（:count）',
        'bill_all' => '所有计费记录',
        'device_all' => '所有设备',
        'device_group_all' => '所有设备组',
        'port_all' => '所有端口',
        'none_configured' => '未配置',
    ],
];
