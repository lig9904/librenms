<?php

return [
    'title' => '设置',
    'readonly' => '在 config.php 里被设置成只读，请由 config.php 移除它来启用。',
    'groups' => [
        'alerting' => '告警',
        'api' => 'API',
        'apps' => '应用程序',
        'auth' => '身份认证',
        'authorization' => '权限管理',
        'external' => '外部集成',
        'global' => '全局',
        'os' => '操作系统',
        'discovery' => '发现',
        'graphing' => '图表',
        'poller' => '轮询器',
        'system' => '系统',
        'webui' => '网页界面',
    ],
    'sections' => [
        'alerting' => [
            'general' => ['name' => '常规告警设置'],
            'email' => ['name' => '邮件设置'],
            'rules' => ['name' => '告警规则默认设置'],
            'scheduled-maintenance' => ['name' => '计划维护'],
        ],
        'api' => [
            'cors' => ['name' => '跨域资源共享（CORS）'],
            'v1' => ['name' => 'API v1（测试版）'],
        ],
        'apps' => [
            'powerdns-recursor' => ['name' => 'PowerDNS Recursor'],
            'oslv_monitor' => ['name' => 'OSLV 监控'],
            'sneck' => ['name' => 'Sneck'],
            'ssl-certificates' => ['name' => 'SSL 证书'],
        ],
        'auth' => [
            'general' => ['name' => '常规身份认证设置'],
            'ad' => ['name' => 'Active Directory 设置'],
            'ldap' => ['name' => 'LDAP 设置'],
            'radius' => ['name' => 'RADIUS 设置'],
            'socialite' => ['name' => '社交账号登录设置'],
            'http' => ['name' => 'HTTP 身份认证设置'],
            'sso' => ['name' => '单点登录'],
        ],
        'authorization' => [
            'device-group' => ['name' => '设备组设置'],
        ],
        'discovery' => [
            'general' => ['name' => '常规发现设置'],
            'route' => ['name' => '路由发现模块'],
            'discovery_modules' => ['name' => '发现模块'],
            'autodiscovery' => ['name' => '网络自动发现'],
            'ports' => ['name' => '端口模块'],
            'storage' => ['name' => '存储模块'],
            'processor' => ['name' => '处理器模块'],
            'ipmi' => ['name' => 'IPMI 模块'],
            'sensors' => ['name' => '传感器模块'],
            'virtualization' => ['name' => '虚拟化模块'],
        ],
        'external' => [
            'binaries' => ['name' => '可执行文件位置'],
            'location' => ['name' => '地理位置设置'],
            'graylog' => ['name' => 'Graylog 集成'],
            'oxidized' => ['name' => 'Oxidized 集成'],
            'mac_oui' => ['name' => 'MAC 厂商查询集成'],
            'peeringdb' => ['name' => 'PeeringDB 集成'],
            'nfsen' => ['name' => 'NfSen 集成'],
            'unix-agent' => ['name' => 'Unix-Agent 集成'],
            'smokeping' => ['name' => 'Smokeping 集成'],
            'snmptrapd' => ['name' => 'SNMP Trap 集成'],
            'rancid' => ['name' => 'RANCID 集成'],
            'collectd' => ['name' => 'Collectd 集成'],
            'unimus' => ['name' => 'Unimus 集成'],
        ],
        'poller' => [
            'availability' => ['name' => '设备可用性'],
            'distributed' => ['name' => '分布式轮询器'],
            'graphite' => ['name' => '数据存储：Graphite'],
            'influxdb' => ['name' => '数据存储：InfluxDB'],
            'influxdbv2' => ['name' => '数据存储：InfluxDBv2'],
            'kafka' => ['name' => '数据存储：Kafka'],
            'mtu' => ['name' => 'MTU 检查'],
            'opentsdb' => ['name' => '数据存储：OpenTSDB'],
            'ping' => ['name' => 'Ping'],
            'prometheus' => ['name' => '数据存储：Prometheus'],
            'rrdtool' => ['name' => '数据存储：RRDTool'],
            'snmp' => ['name' => 'SNMP'],
            'dispatcherservice' => ['name' => '调度服务'],
            'poller_modules' => ['name' => '轮询模块'],
            'ports' => ['name' => '端口轮询模块'],
        ],
        'system' => [
            'billing' => ['name' => '计费'],
            'cleanup' => ['name' => '清理'],
            'proxy' => ['name' => '代理'],
            'updates' => ['name' => '更新'],
            'scheduledtasks' => ['name' => '计划任务'],
            'server' => ['name' => '服务器'],
            'reporting' => ['name' => '报表'],
        ],
        'webui' => [
            'availability-map' => ['name' => '可用性地图设置'],
            'custom-map' => ['name' => '自定义地图设置'],
            'graph' => ['name' => '图表设置'],
            'dashboard' => ['name' => '仪表板设置'],
            'port-descr' => ['name' => '端口描述解析'],
            'search' => ['name' => '搜索设置'],
            'style' => ['name' => '样式'],
            'device' => ['name' => '设备设置'],
            'worldmap' => ['name' => '世界地图设置'],
            'general' => ['name' => '网页界面常规设置'],
            'front-page' => ['name' => '首页设置'],
            'menu' => ['name' => '菜单设置'],
            'scheduled-maintenance' => ['name' => '计划维护'],
            'alert-map' => ['name' => '告警地图设置'],
        ],
    ],
    'settings' => [
        'active_directory' => [
            'users_purge' => [
                'description' => '保留未登录用户于',
                'help' => '设置用户超过几天没有登录后，将会被 LibreNMS 自动删除。设为 0 表示不会删除，若用户重新登录，将会重新建立账户。',
            ],
        ],
        'addhost_alwayscheckip' => [
            'description' => '新增设备时检察是否 IP 重复',
            'help' => '以 IP 加入主机时，会先检查此 IP 是否已存在于系统上，若有则不予加入。若是以主机名称方式加入时，则不会做此检查。若设置为 True 时，则以主机名称方式加入时亦做此检查，以避免加入重复主机的意外发生。',
        ],
        'alert_rule' => [
            'acknowledged_alerts' => [
                'description' => '已确认的告警',
                'help' => '用户确认告警时发送通知。',
            ],
            'severity' => [
                'description' => '严重级别',
                'help' => '告警的严重级别。',
            ],
            'default_operation_steps_to' => [
                'description' => '默认操作：结束步骤',
                'help' => '新建操作行的默认升级结束步骤（-1 表示不限制）。',
            ],
            'default_operation_start_in' => [
                'description' => '默认操作：开始延迟',
                'help' => '发送操作通知前的默认延迟时间。',
            ],
            'default_operation_step_duration' => [
                'description' => '默认操作：步骤时长',
                'help' => '每个操作步骤的默认时长，单位为分钟。',
            ],
            'default_operation_notifications_suppressed' => [
                'description' => '默认操作：抑制通知',
                'help' => '新建操作行时默认抑制通知。',
            ],
            'invert_rule_match' => [
                'description' => '反转规则匹配',
                'help' => '仅当规则不匹配时触发告警。',
            ],
            'recovery_alerts' => [
                'description' => '恢复通知',
                'help' => '告警恢复时发送通知。',
            ],
            'acknowledgement_alerts' => [
                'description' => '确认通知',
                'help' => '用户确认告警时发送通知。',
            ],
            'invert_map' => [
                'description' => '排除列表中的所有设备',
                'help' => '仅对不在列表中的设备触发告警。',
            ],
        ],
        'alert' => [
            'ack_until_clear' => [
                'description' => '预设认可值到告警解除选项',
                'help' => '预设认可值到告警解除',
            ],
            'admins' => [
                'description' => '向管理员发送告警（已弃用）',
                'help' => '已弃用，请改用邮件告警通知渠道。',
            ],
            'default_copy' => [
                'description' => '抄送所有邮件告警给默认联系人（已弃用）',
                'help' => '已弃用，请改用邮件告警通知渠道。',
            ],
            'default_if_none' => [
                'description' => '无其他联系人时使用默认联系人（已弃用）',
                'help' => '已弃用，请改用邮件告警通知渠道。',
            ],
            'default_mail' => [
                'description' => '默认联系人（已弃用）',
                'help' => '已弃用，请改用邮件告警通知渠道。',
            ],
            'default_only' => [
                'description' => '仅向默认联系人发送告警（已弃用）',
                'help' => '已弃用，请改用邮件告警通知渠道。',
            ],
            'disable' => [
                'description' => '停用告警',
                'help' => '停止产生告警',
            ],
            'acknowledged' => [
                'description' => '发送已确认告警通知',
                'help' => '用户确认告警时发送通知。',
            ],
            'fixed-contacts' => [
                'description' => '活动告警期间固定联系人',
                'help' => '启用后，告警处于活动状态期间，对 sysContact 或用户邮箱的修改不会影响该告警的联系人。',
            ],
            'globals' => [
                'description' => '向只读用户发送告警（已弃用）',
                'help' => '已弃用，请改用邮件告警通知渠道。',
            ],
            'scheduled_maintenance_default_behavior' => [
                'description' => '计划维护的默认行为',
                'help' => '计划维护期间的默认告警处理方式。',
                'options' => [
                    '1' => '跳过告警',
                    '2' => '静默告警',
                    '3' => '照常运行告警',
                ],
            ],
            'syscontact' => [
                'description' => '向 sysContact 发送告警（已弃用）',
                'help' => '已弃用，请改用邮件告警通知渠道。',
            ],
            'transports' => [
                'mail' => [
                    'description' => '启用邮件告警',
                    'help' => '启用以邮件传输告警',
                ],
            ],
            'tolerance_window' => [
                'description' => 'cron 容错范围',
                'help' => 'cron 容错时间窗口，单位为秒。',
            ],
            'users' => [
                'description' => '向普通用户发送告警（已弃用）',
                'help' => '已弃用，请改用邮件告警通知渠道。',
            ],
        ],
        'alert_log_purge' => [
            'description' => '告警记录项目大于',
            'help' => '由 daily.sh 执行清理。',
        ],
        'discovery_on_reboot' => [
            'description' => '设备重启后执行发现',
            'help' => '设备重启后重新执行设备发现。',
        ],
        'api' => [
            'cors' => [
                'allowheaders' => [
                    'description' => '允许的请求头',
                    'help' => '设置响应头 Access-Control-Allow-Headers。',
                ],
                'allowcredentials' => [
                    'description' => '允许携带凭据',
                    'help' => '设置响应头 Access-Control-Allow-Credentials。',
                ],
                'allowmethods' => [
                    'description' => '允许的请求方法',
                    'help' => '匹配请求使用的 HTTP 方法。',
                ],
                'enabled' => [
                    'description' => '为 API 启用 CORS',
                    'help' => '允许网页客户端跨域加载 API 资源。',
                ],
                'exposeheaders' => [
                    'description' => '向客户端开放的响应头',
                    'help' => '设置响应头 Access-Control-Expose-Headers。',
                ],
                'maxage' => [
                    'description' => '预检结果缓存时长',
                    'help' => '设置响应头 Access-Control-Max-Age。',
                ],
                'origin' => [
                    'description' => '允许的请求来源',
                    'help' => '匹配请求来源；可使用通配符，例如 *.mydomain.com。',
                ],
            ],
            'v1' => [
                'enabled' => [
                    'description' => '启用 v1 API（测试版）',
                    'help' => '选择启用新的 v1 REST API。禁用后，所有 /api/v1 端点返回 404，网页界面也会隐藏 v1 令牌管理。',
                ],
            ],
        ],
        'allow_duplicate_sysName' => [
            'description' => '允许重复 sysName',
            'help' => '默认情况下，禁止添加重复的sysName，以防止具有多个接口的设备被多次添加',
        ],
        'allow_unauth_graphs' => [
            'description' => '允许未登录访问图表',
            'help' => '允许在不登录情况下访问图表',
        ],
        'allow_unauth_graphs_cidr' => [
            'description' => '允许指定网络访问图表',
            'help' => '允许指定网段无需登录即可查看图表。若已启用“允许未登录访问图表”，则对所有来源开放，此网段限制不生效。',
        ],
        'apps' => [
            'powerdns-recursor' => [
                'api-key' => [
                    'description' => 'PowerDNS 解析器的 API 密钥',
                    'help' => '直接连接时，PowerDNS 解析器应用的 API 密钥',
                ],
                'https' => [
                    'description' => 'PowerDNS 解析器是否使用 HTTPS？',
                    'help' => '直接连接时，对于 PowerDNS 解析器应用，是否使用 HTTPS 而非 HTTP',
                ],
                'port' => [
                    'description' => 'PowerDNS 解析器端口',
                    'help' => '直接连接时，用于 PowerDNS 解析器应用的 TCP 端口',
                ],
            ],
            'oslv_monitor' => [
                'seen_age' => [
                    'description' => '可见时间阈值',
                    'help' => '经过多少秒后项目视为过期',
                ],
                'linux_pg_memory_stats' => [
                    'description' => 'Linux 页内存统计',
                    'help' => '启用 Linux 页内存统计收集',
                ],
                'misc_linux_memory_stats' => [
                    'description' => '其他 Linux 内存统计',
                    'help' => '启用其他 Linux 内存统计收集',
                ],
                'zswap_size' => [
                    'description' => 'ZSwap 大小统计',
                    'help' => '启用 ZSwap 大小统计收集',
                ],
                'zswap_activity' => [
                    'description' => 'ZSwap 活动统计',
                    'help' => '启用 ZSwap 活动统计收集',
                ],
                'workingset_stats' => [
                    'description' => '工作集统计',
                    'help' => '启用工作集统计收集',
                ],
                'thp_activity' => [
                    'description' => 'THP 活动统计',
                    'help' => '启用透明大页（THP）活动统计数据采集。',
                ],
            ],
            'sneck' => [
                'polling_time_diff' => [
                    'description' => '轮询时间差',
                    'help' => '为 Sneck 启用轮询时间差追踪',
                ],
            ],
        ],
        'astext' => [
            'description' => '用于存储自治系统描述的缓存的密钥',
        ],
        'auth_ad_base_dn' => [
            'description' => '基础 DN',
            'help' => '组和用户必须位于此 DN 下。例如：dc=example,dc=com',
        ],
        'auth_ad_check_certificates' => [
            'description' => '验证服务器证书',
            'help' => '检查证书的有效性。一些服务器使用自签名证书，禁用此选项可允许此类证书。',
        ],
        'auth_ad_group_filter' => [
            'description' => 'LDAP 群组筛选器',
            'help' => '用于选择组的 Active Directory LDAP 过滤器',
        ],
        'auth_ad_groups' => [
            'description' => '群组访问权限',
            'help' => '定义群组具有的访问权限与等级',
        ],
        'auth_ad_user_filter' => [
            'description' => 'LDAP 用户筛选',
            'help' => '用于选择用户的 Active Directory LDAP 过滤器',
        ],
        'auth_ldap_attr' => [
            'uid' => [
                'description' => '用于核对用户名的属性',
                'help' => '用于通过用户名标识用户的属性',
            ],
        ],
        'auth_ldap_binddn' => [
            'description' => '绑定 DN (覆写绑定用户名称)',
            'help' => '绑定用户的完整 DN',
        ],
        'auth_ldap_bindpassword' => [
            'description' => '绑定密码',
            'help' => '绑定用户的密码',
        ],
        'auth_ldap_binduser' => [
            'description' => '绑定用户',
            'help' => '当没有用户登录时（如告警、API等），用于查询LDAP服务器',
        ],
        'auth_ad_binddn' => [
            'description' => '绑定 DN (覆写绑定用户名称)',
            'help' => '绑定用户的完整DN',
        ],
        'auth_ad_bindpassword' => [
            'description' => '绑定密码',
            'help' => '绑定用户的密码',
        ],
        'auth_ad_binduser' => [
            'description' => '绑定用户名称',
            'help' => '当没有用户登录时（例如，告警、API等），用于查询AD服务器',
        ],
        'auth_ad_starttls' => [
            'description' => '使用 STARTTLS',
            'help' => '使用STARTTLS来加密连接。这是LDAPS的替代方案。',
            'options' => [
                'disabled' => '停用',
                'optional' => '选用',
                'required' => '必要',
            ],
        ],
        'auth_ldap_cache_ttl' => [
            'description' => 'LDAP 缓存有效期',
            'help' => '临时存储LDAP查询结果。可以提高速度，但数据可能不是最新的。',
        ],
        'auth_ldap_debug' => [
            'description' => '显示侦错信息',
            'help' => '显示调试信息。可能会暴露私人信息，不要保持启用状态。',
        ],
        'auth_ldap_emailattr' => [
            'description' => '邮件属性',
        ],
        'auth_ldap_group' => [
            'description' => '访问群组 DN',
            'help' => '授予普通级别访问权限的组的专有名称。示例：cn=groupname,ou=groups,dc=example,dc=com',
        ],
        'auth_ldap_groupbase' => [
            'description' => '群组基础 DN',
            'help' => '搜索组的专有名称 示例：ou=group,dc=example,dc=com',
        ],
        'auth_ldap_groupmemberattr' => [
            'description' => '组成员属性',
        ],
        'auth_ldap_groupmembertype' => [
            'description' => '以下列方式寻找群组成员',
            'options' => [
                'username' => '用户名称',
                'fulldn' => 'Full DN (使用前缀和后缀)',
                'puredn' => 'DN 搜寻 (使用 uid 属性搜寻)',
            ],
        ],
        'auth_ldap_groups' => [
            'description' => '群体访问',
            'help' => '定义具有访问权限和级别的群体',
        ],
        'auth_ldap_port' => [
            'description' => 'LDAP 连接端口',
            'help' => '用于连接服务器的端口。对于LDAP，端口应为389，对于LDAPS，端口应为636。',
        ],
        'auth_ldap_prefix' => [
            'description' => '用户前缀',
            'help' => '用于将用户名转换为可分辨名称（Distinguished Name）',
        ],
        'auth_ldap_server' => [
            'description' => 'LDAP 服务器',
            'help' => '设置服务器（如果有多个，用空格分隔）。若使用SSL，请在服务器地址前加上ldaps://前缀。',
        ],
        'auth_ldap_starttls' => [
            'description' => '使用 STARTTLS',
            'help' => '使用STARTTLS来加密连接。这是LDAPS的替代方案。',
            'options' => [
                'disabled' => '停用',
                'optional' => '选用',
                'required' => '必要',
            ],
        ],
        'auth_ldap_suffix' => [
            'description' => '用户后缀',
            'help' => '用于将用户名转换为可分辨名称（Distinguished Name）',
        ],
        'auth_ldap_timeout' => [
            'description' => '联机超时',
            'help' => '如果一个或多个服务器无响应，较高的超时时间会导致访问速度变慢。而设置得太低，在某些情况下可能导致连接失败。',
        ],
        'auth_ldap_uid_attribute' => [
            'description' => '唯一 ID 属性',
            'help' => '用于标识用户的LDAP属性，必须是数字类型。',
        ],
        'auth_ldap_userdn' => [
            'description' => '使用全名 DN',
            'help' => '使用用户的完整DN作为群组中成员属性的值，而非采用前缀和后缀的方式（如member: uid=username,ou=groups,dc=domain,dc=com）。',
        ],
        'auth_ldap_version' => [
            'description' => 'LDAP 版本',
            'help' => '用来与 LDAP Server 进行连接的版本，通常应是 v3',
            'options' => [
                '2' => '2',
                '3' => '3',
            ],
        ],
        'auth_mechanism' => [
            'description' => '授权方法 (慎选!)',
            'help' => "授权方法。注意，若设置错误将导致您无法登录系统。若真的发生，您可以手动将 config.php 的设置改回 \$config['auth_mechanism'] = 'mysql';",
            'options' => [
                'mysql' => 'MySQL (预设)',
                'active_directory' => 'Active Directory',
                'ldap' => 'LDAP',
                'radius' => 'Radius',
                'http-auth' => 'HTTP 验证',
                'ad-authorization' => '外部 AD 验证',
                'ldap-authorization' => '外部 LDAP 验证',
                'sso' => '单一签入 SSO',
            ],
        ],
        'auth_remember' => [
            'description' => '记住我的期限',
            'help' => '当用户登录时勾选“记住我”复选框后，保持用户登录状态的天数。',
        ],
        'authlog_purge' => [
            'description' => '验证记录项目大于',
            'help' => '由daily.sh脚本执行的清理任务',
        ],
        'base_url' => [
            'description' => '指定 URL',
            'help' => '此设置仅在您需要*强制*使用特定主机名/端口时才应设置。它将阻止从任何其他主机名访问Web界面。',
        ],
        'distributed_poller' => [
            'description' => '启用分布式轮询 (需要额外设置)',
            'help' => '启用全系统分布式轮询功能。此功能旨在实现负载分担，而非远程轮询。您必须阅读以下文档以获取启用步骤：https://docs.librenms.org/Extensions/Distributed-Poller/',
        ],
        'distributed_poller_group' => [
            'description' => '预设轮询器群组',
            'help' => '如果在config.php文件中没有设置，默认的轮询器组应所有轮询器进行轮询。',
        ],
        'distributed_poller_memcached_host' => [
            'description' => 'Memcached 主机',
            'help' => 'Memcached服务器的主机名或IP地址。这是poller_wrapper.py和daily.sh锁定所需的。',
        ],
        'distributed_poller_memcached_port' => [
            'description' => 'Memcached 连接端口',
            'help' => 'Memcached服务器的端口。默认是11211',
        ],
        'email_auto_tls' => [
            'description' => '启用 / 停用自动 TLS 支持',
            'options' => [
                'true' => '是',
                'false' => '否',
            ],
            'help' => '在退回未加密连接前，先尝试使用 TLS',
        ],
        'email_backend' => [
            'description' => '寄送邮件方式',
            'help' => '用于发送邮件的后端，可以是mail、sendmail或SMTP。',
            'options' => [
                'mail' => 'mail',
                'sendmail' => 'sendmail',
                'smtp' => 'SMTP',
            ],
        ],
        'email_from' => [
            'description' => '寄件者信箱地址',
            'help' => '用于发送电子邮件的电子邮件地址（发件人）',
        ],
        'email_html' => [
            'description' => '使用 HTML 格式',
            'help' => '寄送 HTML 格式的邮件',
        ],
        'email_sendmail_path' => [
            'description' => '若启用此选项，sendmail 所在的位置',
        ],
        'email_smtp_auth' => [
            'description' => '启用 / 停用 SMTP 验证',
            'help' => '若您的 SMTP 服务器需要验证，请启用此项',
        ],
        'email_smtp_host' => [
            'description' => '指定寄信用的 SMTP 主机',
            'help' => '要投递邮件的 SMTP 服务器 IP 或 DNS 名称',
        ],
        'email_smtp_password' => [
            'description' => 'SMTP 验证密码',
        ],
        'email_smtp_port' => [
            'description' => 'SMTP 连接端口设置',
        ],
        'email_smtp_secure' => [
            'description' => '启用 / 停用加密 (使用 TLS 或 SSL)',
            'options' => [
                '' => '停用',
                'tls' => 'TLS',
                'ssl' => 'SSL',
            ],
        ],
        'email_smtp_timeout' => [
            'description' => 'SMTP 超时设置',
        ],
        'email_smtp_username' => [
            'description' => 'SMTP 验证用户名称',
        ],
        'email_user' => [
            'description' => '寄件者名称',
            'help' => '作为发件人地址一部分使用的名称',
        ],
        'eventlog_purge' => [
            'description' => '事件记录大于',
            'help' => '由 daily.sh 进行清理作业',
        ],
        'favicon' => [
            'description' => 'Favicon',
            'help' => '取代预设 Favicon.',
        ],
        'fping' => [
            'description' => 'fping 路径',
        ],
        'fping6' => [
            'description' => 'fping6 路径',
        ],
        'fping_options' => [
            'count' => [
                'description' => 'fping 次数',
                'help' => '当通过icmp检查主机是否在线或离线时发送的ping次数',
            ],
            'interval' => [
                'description' => 'fping 间隔',
                'help' => '每次ping之间等待的毫秒数',
            ],
            'timeout' => [
                'description' => 'fping 超时',
                'help' => '在放弃之前等待回显响应的毫秒数',
            ],
        ],
        'geoloc' => [
            'api_key' => [
                'description' => '地理编码 API 密钥',
                'help' => '地理编码API密钥（功能所需）',
            ],
            'engine' => [
                'description' => '地理编码引擎',
                'options' => [
                    'google' => '谷歌地图',
                    'openstreetmap' => '开放式街图（OpenStreetMap）',
                    'mapquest' => 'MapQuest地图',
                    'bing' => '必应地图',
                    'esri' => 'ESRI ArcGIS',
                ],
            ],
            'dns' => [
                'description' => '使用 DNS Location 记录',
                'help' => '使用 DNS 服务器的 LOC 记录取得主机名的地理坐标',
            ],
            'latlng' => [
                'description' => '尝试对位置进行地理编码',
                'help' => '轮询期间尝试通过地理编码 API 查找经纬度',
            ],
            'layer' => [
                'description' => '初始地图图层',
                'help' => '要显示的初始地图图层。*并非所有图层都适用于所有地图引擎。',
                'options' => [
                    'Streets' => '街道',
                    'Sattelite' => '卫星',
                    'Topography' => '地形',
                ],
            ],
        ],
        'graylog' => [
            'base_uri' => [
                'description' => 'Base URI',
                'help' => '如果您已修改了Graylog的默认设置，此选项可覆盖基本URI。',
            ],
            'device-page' => [
                'loglevel' => [
                    'description' => '设备概观记录等级',
                    'help' => '设置设备概览页面上显示的最大日志级别。',
                ],
                'rowCount' => [
                    'description' => '设备概观数据笔数',
                    'help' => '设置设备概览页面上显示的行数。',
                ],
            ],
            'password' => [
                'description' => '密码',
                'help' => '访问Graylog API的密码。',
            ],
            'port' => [
                'description' => '连接端口',
                'help' => '用于访问Graylog API的端口。如果不指定，默认情况下http使用80端口，https使用443端口。',
            ],
            'server' => [
                'description' => '服务器',
                'help' => 'Graylog服务器API端点的IP或主机名。',
            ],
            'timezone' => [
                'description' => '显示时区',
                'help' => 'Graylog中的时间以GMT存储，此设置将更改显示的时区。值必须为有效的PHP时区。',
            ],
            'username' => [
                'description' => '用户名称',
                'help' => '用户名，用于访问Graylog API。',
            ],
            'version' => [
                'description' => '版本',
                'help' => '此设置用于自动生成Graylog API的基本URI。如果您已从默认设置修改了API URI，请将其设置为“其他”并指定您的基本URI。',
            ],
            'query' => [
                'field' => [
                    'description' => '查找 API 字段',
                    'help' => '变更查找 Graylog API 的默认字段。',
                ],
            ],
            'match-any-address' => [
                'description' => '匹配任一地址',
                'help' => '用于将设备的任一地址匹配到 graylog 记录消息的来源；默认仅使用主要地址',
            ],
        ],
        'http_proxy' => [
            'description' => 'HTTP 代理',
            'help' => '当 http_proxy 环境变量不可用时，使用此设置作为 HTTP 代理。HTTPS 代理请单独设置。',
        ],
        'ipmitool' => [
            'description' => 'ipmtool 路径',
        ],
        'login_message' => [
            'description' => '登录讯息',
            'help' => '显示于登录页面',
        ],
        'mono_font' => [
            'description' => 'Monospaced 字型',
        ],
        'mtr' => [
            'description' => 'mtr 路径',
        ],
        'mydomain' => [
            'description' => '主要网域',
            'help' => '此域名用于网络自动发现和其他进程。LibreNMS将尝试将其附加到未完全限定的主机名上。',
        ],
        'nfsen_enable' => [
            'description' => '启用 NfSen',
            'help' => '启用 NfSen 整合',
        ],
        'nfsen_rrds' => [
            'description' => 'NfSen RRD 目录',
            'help' => '此值指定您的NFSen RRD文件存放的位置。',
        ],
        'nfsen_subdirlayout' => [
            'description' => '设置 NfSen 子目录配置',
            'help' => '这必须与您在NfSen中设置的子目录结构相匹配。默认值为1。',
        ],
        'nfsen_last_max' => [
            'description' => 'Last Max',
        ],
        'nfsen_top_max' => [
            'description' => 'Top Max',
            'help' => '最大统计数据的TopN值',
        ],
        'nfsen_top_N' => [
            'description' => 'Top N',
        ],
        'nfsen_top_default' => [
            'description' => '默认 Top N',
        ],
        'nfsen_stats_default' => [
            'description' => '默认统计',
        ],
        'nfsen_order_default' => [
            'description' => '默认排序方式',
        ],
        'nfsen_last_default' => [
            'description' => '默认最后一个',
        ],
        'nfsen_lasts' => [
            'description' => '默认最后选项',
        ],
        'nfsen_split_char' => [
            'description' => '分隔字符',
            'help' => '此值告诉我们用什么来替换设备主机名中的句点`.`。通常使用：`_`',
        ],
        'nfsen_suffix' => [
            'description' => '文件名称前缀',
            'help' => '这是非常关键的一点，因为在NfSen中，设备名称被限制为21个字符。这意味着设备的完整域名可能很难压缩进去，因此通常会移除这一部分。',
        ],
        'own_hostname' => [
            'description' => 'LibreNMS 主机名称',
            'help' => '应设置为librenms服务器添加时使用的主机名/IP地址',
        ],
        'oxidized' => [
            'default_group' => [
                'description' => '设置返回的默认分组',
            ],
            'enabled' => [
                'description' => '启用 Oxidized 支援',
            ],
            'features' => [
                'versioning' => [
                    'description' => '启用组态版本访问',
                    'help' => '启用Oxidized配置版本控制（需要git后端支持）',
                ],
            ],
            'group_support' => [
                'description' => '启用向 Oxidized 返回分组的功能',
            ],
            'reload_nodes' => [
                'description' => '在每次新增设备后，重新加载 Oxidized 节点清单',
            ],
            'url' => [
                'description' => '您的 Oxidized API URL',
                'help' => 'Oxidized API 的网址（例如：http://127.0.0.1:8888）',
            ],
            'ignore_groups' => [
                'description' => '不要备份这些 Oxidized 组',
                'help' => '排除不发送至 Oxidized 的组（通过变量对应设置）',
            ],
            'ignore_os' => [
                'description' => '不要备份这些 OS',
                'help' => '不要使用 Oxidized 备份所列的 OS。OS 必须与 LibreNMS 的 OS 名称相符（皆为小写且无空格）。仅允许既有的 OS。',
            ],
            'ignore_types' => [
                'description' => '不要备份这些设备类型',
                'help' => '不要使用 Oxidized 备份所列的设备类型。仅允许既有的类型。',
            ],
            'maps' => [
                'description' => '变量对应',
                'help' => '用于设置组或其他变量，或对应名称不同的 OS。',
            ],
        ],
        'password' => [
            'min_length' => [
                'description' => '密码最小长度',
                'help' => '低于指定长度的密码将会被拒绝',
            ],
            'uncompromised' => [
                'description' => '要求密码未遭外泄',
                'help' => '使用 k-anonymity 匹配 HaveIBeenPwned 数据库检查密码',
            ],
        ],
        'peeringdb' => [
            'enabled' => [
                'description' => '启用 PeeringDB 反查',
                'help' => '起用 PeeringDB lookup (资料将于由 daily.sh 进行下载)',
            ],
        ],
        'ports_fdb_purge' => [
            'description' => '连接端口 FDB 项目大于',
            'help' => '由 daily.sh 脚本完成的日常清理工作',
        ],
        'ports_purge' => [
            'description' => '清除端口已删除',
            'help' => '由 daily.sh 脚本执行的日常清理操作',
        ],
        'public_status' => [
            'description' => '公开状态显示',
            'help' => '允许不登录的情况下，显示设备的状态信息。',
        ],
        'routes_max_number' => [
            'description' => '允许探索路由的最大路由数',
            'help' => '如果路由表的大小超过此数值，将不会发现任何路由信息',
        ],
        'route_purge' => [
            'description' => '路由记录大于',
            'help' => '由 daily.sh 脚本执行的日常清理任务',
        ],
        'rrd' => [
            'heartbeat' => [
                'description' => '变更 rrd 活动讯号值 (预设 600)',
            ],
            'step' => [
                'description' => '变更 rrd 间距值 (预设 300)',
                'help' => '警告：若未同时修复现有 RRD 文件并调整轮询计划，修改此值将导致图表损坏。详情请参阅文档。',
            ],
        ],
        'rrd_dir' => [
            'description' => 'RRD 位置',
            'help' => 'RRD 文件的存储位置。默认位置是 LibreNMS 目录内的 rrd 文件夹。更改此设置不会移动现有的 RRD 文件。',
        ],
        'rrd_purge' => [
            'description' => 'RRD 档案项目大于',
            'help' => '由 daily.sh 脚本完成的日常清理任务',
        ],
        'rrd_rra' => [
            'description' => 'RRD 格式设置',
            'help' => '这些设置无法在不删除现有 RRD 文件的情况下更改。但是，如果遇到性能问题，或者拥有非常快速的 I/O 系统且无需担心性能，理论上可以通过增加或减少每个 RRA 的大小来进行调整。',
        ],
        'rrdcached' => [
            'description' => '启用 rrdcached (socket)',
            'help' => '通过设置 rrdcached 套接字的位置来启用 rrdcached。可以是 unix 套接字或网络套接字（unix:/run/rrdcached.sock 或 localhost:42217）',
        ],
        'rrdtool' => [
            'description' => 'rrdtool 路径',
        ],
        'rrdtool_tune' => [
            'description' => '调整所有 rrd 连接端口档案使用最大值',
            'help' => '自动调整 rrd 连接端口档案的最大值',
        ],
        'shorthost_target_length' => [
            'description' => '缩短后的主机名最大长度',
            'help' => '缩短主机名至最大长度，但始终保留完整的子域名部分',
        ],
        'site_style' => [
            'description' => '设置站点 css 样式',
            'options' => [
                'blue' => '蓝色',
                'dark' => '深色',
                'light' => '浅色',
                'mono' => '单色',
                'device' => '设备',
            ],
        ],
        'snmp' => [
            'transports' => [
                'description' => '传输 (优先级)',
                'help' => '选择启用的传输方式，并按您希望尝试的顺序排列它们。',
            ],
            'version' => [
                'description' => '版本 (优先级)',
                'help' => '选择启用的版本，并按您希望尝试的顺序排列它们。',
            ],
            'community' => [
                'description' => '社群 (优先级)',
                'help' => '输入 v1 和 v2c 的团体字符串，并按您希望尝试的顺序排列它们',
            ],
            'max_oid' => [
                'description' => '每次查询的最大 OID 数',
                'help' => '每次查询可包含的最大 OID 数。可在操作系统或设备级别覆盖此设置。',
            ],
            'oids' => [
                'no_bulk' => [
                    'description' => '对指定 OID 禁用 SNMP 批量查询',
                    'help' => '对指定 OID 禁用 SNMP 批量操作。通常应在操作系统级别设置。格式为 MIB::OID。',
                ],
                'unordered' => [
                    'description' => '允许指定 OID 的 SNMP 响应乱序',
                    'help' => '忽略指定 OID 的 SNMP 响应顺序。乱序的 OID 可能导致 snmpwalk 陷入 OID 循环。通常应在操作系统级别设置。格式为 MIB::OID。',
                ],
            ],
            'max_repeaters' => [
                'description' => '重复撷取最多次数',
                'help' => '设置用于 SNMP 批量请求的中继器',
            ],
            'port' => [
                'description' => '连接端口',
                'help' => '设置用于 SNMP 的 TCP/UDP 端口',
            ],
            'timeout' => [
                'description' => '超时时间',
                'help' => 'SNMP 查询的超时时间，单位为秒。',
            ],
            'retries' => [
                'description' => '重试次数',
                'help' => '查询失败后重试的次数。',
            ],
            'v3' => [
                'description' => 'SNMP v3 验证 (优先级)',
                'help' => '设置 v3 认证变量，并按您希望尝试的顺序排列它们',
                'auth' => '验证',
                'crypto' => '加密',
                'fields' => [
                    'authalgo' => '算法',
                    'authlevel' => '邓级',
                    'authname' => '用户名称',
                    'authpass' => '密码',
                    'cryptoalgo' => '算法',
                    'cryptopass' => '算法密码',
                ],
                'level' => [
                    'noAuthNoPriv' => '无认证，无隐私保护',
                    'authNoPriv' => '认证，无隐私保护',
                    'authPriv' => '认证与隐私',
                ],
            ],
        ],
        'snmpbulkwalk' => [
            'description' => 'snmpbulkwalk 路径',
        ],
        'snmpget' => [
            'description' => 'snmpget 路径',
        ],
        'snmpgetnext' => [
            'description' => 'snmpgetnext 路径',
        ],
        'snmptranslate' => [
            'description' => 'snmptranslate 路径',
        ],
        'snmpwalk' => [
            'description' => 'snmpwalk 路径',
        ],
        'syslog_filter' => [
            'description' => '过滤包含在内的 syslog 消息',
        ],
        'syslog_purge' => [
            'description' => 'Syslog 项目大于',
            'help' => '由 daily.sh 完成的清理工作',
        ],
        'title_image' => [
            'description' => '标题图片',
            'help' => '覆盖默认的标题图像。',
        ],
        'traceroute' => [
            'description' => 'traceroute 路径',
        ],
        'unix-agent' => [
            'connection-timeout' => [
                'description' => 'Unix-agent 联机超时',
            ],
            'port' => [
                'description' => '预设 unix-agent 连接端口',
                'help' => 'unix-agent (check_mk) 预设连接端口号码',
            ],
            'read-timeout' => [
                'description' => 'Unix-agent 读取超时',
            ],
        ],
        'update' => [
            'description' => '启用更新 ./daily.sh',
        ],
        'update_channel' => [
            'description' => '设置更新频道',
            'options' => [
                'master' => '每日',
                'release' => '每月',
            ],
        ],
        'virsh' => [
            'description' => 'virsh 路径',
        ],
        'webui' => [
            'scheduled_maintenance_default_behavior' => [
                'description' => '默认行为',
                'help' => '管理计划维护时，“行为”字段的默认选项。',
            ],
            'alert_map_compact' => [
                'description' => '告警地图精简视图',
                'help' => '在告警地图上使用较小的状态指示器。',
            ],
            'alert_map_sort_status' => [
                'description' => '按状态排序',
                'help' => '按状态对告警排序。',
            ],
            'alert_map_use_device_groups' => [
                'description' => '使用设备组筛选器',
                'help' => '启用设备组筛选器。',
            ],
            'alert_map_box_size' => [
                'description' => '告警方块宽度',
                'help' => '完整视图中告警方块的宽度，单位为像素。',
            ],
            'availability_map_box_size' => [
                'description' => '可用性区块宽度',
                'help' => '输入全视图中盒子大小所需的瓦片宽度（像素）',
            ],
            'availability_map_compact' => [
                'description' => '可用性地图精简模式',
                'help' => '带有小指示符的可用性地图视图',
            ],
            'availability_map_sort_status' => [
                'description' => '依状态排序',
                'help' => '以状态做为设备与服务的排序',
            ],
            'availability_map_use_device_groups' => [
                'description' => '使用设备群组筛选器',
                'help' => '启用设备群组筛选器',
            ],
            'custom_css' => [
                'description' => '自定义 CSS',
                'help' => '为网页界面添加自定义 CSS。',
            ],
            'default_dashboard_id' => [
                'description' => '预设仪表板',
                'help' => '对于没有设置预设仪表板的用户，所要显示的预设仪表板',
            ],
            'dynamic_graphs' => [
                'description' => '启用动态群组',
                'help' => '启用动态图表，允许在图表上进行缩放和平移',
            ],
            'global_search_result_limit' => [
                'description' => '设置搜寻结果笔数上限',
                'help' => '全域搜寻结果限制',
            ],
            'global_search.arp' => [
                'description' => '全局搜索 ARP',
                'help' => '搜索设备的 ARP 缓存，查找设备连接的位置。',
            ],
            'global_search.fdb' => [
                'description' => '全局搜索 FDB 条目',
                'help' => '搜索设备的网桥转发表，查找设备连接的位置。',
            ],
            'global_search.eventlogs' => [
                'description' => '全局搜索事件日志',
                'help' => '在全局搜索结果中显示匹配的事件日志。',
            ],
            'global_search.health' => [
                'description' => '全局搜索健康传感器',
                'help' => '在全局搜索结果中显示匹配的健康传感器。',
            ],
            'global_search.ports' => [
                'description' => '全局搜索端口',
                'help' => '在全局搜索结果中显示匹配的端口。',
            ],
            'global_search.routing' => [
                'description' => '全局搜索路由对等体',
                'help' => '在全局搜索结果中显示匹配的路由对等体。',
            ],
            'graph_stacked' => [
                'description' => '使用堆栈图表',
                'help' => '显示堆叠图而不是倒置图',
            ],
            'graph_type' => [
                'description' => '设置图表类型',
                'help' => '设置预设图表类型',
                'options' => [
                    'png' => 'PNG',
                    'svg' => 'SVG',
                ],
            ],
            'min_graph_height' => [
                'description' => '设置图表最小高度',
                'help' => '图表最小高度 (预设: 300)',
            ],
            'graph_stat_percentile_disable' => [
                'description' => '全局禁用统计图表百分位数',
                'help' => '隐藏显示百分位数的图表中的百分位数数值和参考线。',
            ],
        ],
        'device_display_default' => [
            'description' => '默认设备显示名称模板',
            'help' => '设置所有设备的默认显示名称，也可为单台设备单独覆盖。主机名/IP 为添加设备时使用的主机名或 IP；sysName 为通过 SNMP 获取的 sysName；主机名或 sysName 在主机名为 IP 时显示 sysName。',
            'options' => [
                'hostname' => '主机名 / IP',
                'sysName_fallback' => '主机名；若为 IP 则使用 sysName',
                'sysName' => 'sysName',
                'ip' => 'IP（取自主机名或 DNS 解析结果）',
            ],
        ],
        'device_location_map_open' => [
            'description' => '默认展开位置地图',
            'help' => '默认显示位置地图。',
        ],
        'device_location_map_show_devices' => [
            'description' => '在位置地图上显示设备',
            'help' => '位置地图可见时显示所有设备。',
        ],
        'device_location_map_show_device_dependencies' => [
            'description' => '在位置地图上显示设备依赖关系',
            'help' => '根据设备的父级依赖关系，在位置地图上显示设备之间的连接线。',
        ],
        'device_stats_avg_factor' => [
            'description' => '平均值计算系数',
            'help' => '移动平均值采用指数加权移动平均算法计算。此系数控制当前值对平均值的影响；越接近 1，平均值变化越快。',
        ],
        'default_port_group' => [
            'description' => '默认端口组',
            'help' => '新发现的端口会加入此端口组。',
        ],
        'nets' => [
            'description' => '自动发现网络',
            'help' => '可自动发现设备的网络范围。',
        ],
        'autodiscovery' => [
            'bgp' => [
                'description' => '启用 BGP 邻居发现',
                'help' => '根据 BGP 对等体添加链路和邻居。',
            ],
            'cdp_exclude' => [
                'platform_regexp' => [
                    'description' => 'CDP 平台排除正则表达式',
                    'help' => '若 CDP 发现的设备 sysName 匹配此正则表达式，则不添加该设备。',
                ],
            ],
            'nets-exclude' => [
                'description' => '忽略的网络和 IP',
                'help' => '不自动发现的网络和 IP；同时从“自动发现网络”中排除这些 IP。',
            ],
            'ospf' => [
                'description' => '启用 OSPF 邻居发现',
                'help' => '根据 OSPF 对等体添加链路和邻居。',
            ],
            'ospfv3' => [
                'description' => '启用 OSPFv3 邻居发现',
                'help' => '根据 OSPFv3 对等体添加链路和邻居。',
            ],
            'xdp' => [
                'description' => '启用 xDP 发现协议',
                'help' => '使用 LLDP、CDP 等协议发现网络拓扑及邻居，并将其添加到 LibreNMS。',
            ],
            'xdp_exclude' => [
                'sysname_regexp' => [
                    'description' => 'xDP sysName 排除正则表达式',
                    'help' => '若设备的 sysName 匹配此正则表达式，则不添加该设备。',
                ],
                'sysdesc_regexp' => [
                    'description' => 'xDP sysDescr 排除正则表达式',
                    'help' => '若设备的 sysDescr 匹配此正则表达式，则不添加该设备。',
                ],
            ],
        ],
        'default_poller_group' => [
            'description' => '默认轮询器组',
            'help' => '当 config.php 未指定时，所有轮询器使用的默认轮询器组。',
        ],
        'device_traffic_iftype' => [
            'description' => '设备流量接口类型',
            'help' => '从设备流量图表中排除的接口类型。',
        ],
        'enable_ports_etherlike' => [
            'description' => '启用端口的以太网特性图表',
        ],
        'icmp_check' => [
            'description' => 'ICMP 检查',
            'help' => '对所有设备执行 ICMP 检查，通过 Ping 判断设备是否在线。禁用后，轮询可能无法按时完成。',
        ],
        'bad_if' => [
            'description' => '忽略的接口 ifDescr',
            'help' => '要忽略的网络接口 IF-MIB::ifDescr。',
        ],
        'bad_if_regexp' => [
            'description' => '忽略接口 ifDescr 的正则表达式',
            'help' => '用正则表达式指定要忽略的网络接口 IF-MIB::ifDescr。',
        ],
        'bad_ifalias_regexp' => [
            'description' => '忽略接口 ifAlias 的正则表达式',
            'help' => '用正则表达式指定要忽略的网络接口 IF-MIB::ifAlias。',
        ],
        'bad_ifname_regexp' => [
            'description' => '忽略接口 ifName 的正则表达式',
            'help' => '用正则表达式指定要忽略的网络接口 IF-MIB::ifName。',
        ],
        'bad_ifoperstatus' => [
            'description' => '忽略的接口 ifOperStatus 状态',
            'help' => '要忽略的网络接口 IF-MIB::ifOperStatus。',
        ],
        'bad_iftype' => [
            'description' => '忽略的接口 ifType',
            'help' => '要忽略的网络接口 IF-MIB::ifType。',
        ],
        'polling.selected_ports' => [
            'description' => '仅轮询选定端口',
            'help' => '仅轮询已启用且处于在线状态的端口。',
        ],
        'ports_ipv4_neighbours' => [
            'description' => '端口 IPv4 邻居查找方式',
            'help' => '查看端口详情时查找 IPv4 邻居的方法。ARP 通过 ARP 表查找 IP 和 MAC 地址匹配的设备；子网方式查找同一子网内的设备。',
        ],
        'ports_nac_purge' => [
            'description' => '清理早于指定时间的端口 NAC 条目',
            'help' => '由 daily.sh 执行清理。',
        ],
        'ports_page_default' => [
            'description' => '默认端口标签页',
            'help' => '在设备页面查看端口时默认打开的标签页。',
        ],
        'processor.default_perc_warn' => [
            'description' => '默认处理器使用率告警阈值',
            'help' => '处理器使用率达到此百分比时发出警告。',
        ],
        'storage_perc_warn' => [
            'description' => '默认存储使用率告警阈值',
            'help' => '存储使用率达到此百分比时发出警告；设为 0 可禁用警告。',
        ],
        'snmptraps' => [
            'eventlog' => [
                'description' => '为 SNMP Trap 创建事件日志',
                'help' => '无论该 Trap 映射到什么操作，都创建事件日志。',
            ],
            'eventlog_detailed' => [
                'description' => '启用详细日志',
                'help' => '将 Trap 中收到的所有 OID 记录到事件日志。',
            ],
        ],
        'web_mouseover' => [
            'description' => '启用鼠标悬停预览',
            'help' => '在网页界面中启用鼠标悬停图表。',
        ],
        'uptime_warning' => [
            'description' => '设备运行时间低于阈值时显示警告（秒）',
            'help' => '设备运行时间低于此值时显示警告；自定义地图的状态也使用此设置。设为 0 可禁用警告。默认值为 24 小时。',
        ],
        'service_master_timeout' => [
            'description' => '主调度器超时时间',
            'help' => '主锁过期前的等待时间。主节点停止后，其他节点将在此时间后接管。如果任务分派耗时超过超时时间，可能出现多个主节点。',
        ],
        'service_ping_frequency' => [
            'description' => '快速 Ping 频率',
            'help' => '对所有设备执行快速 Ping 的频率。',
        ],
        'service_poller_workers' => [
            'description' => '轮询工作进程数',
            'help' => '启动的轮询工作进程数量；为所有节点设置默认值。',
        ],
        'service_poller_frequency' => [
            'description' => '轮询频率（警告）',
            'help' => '设备轮询频率，为所有节点设置默认值。通常应留空，使其与 RRD 步长一致；否则图表可能损坏。详情请参阅文档。',
        ],
        'service_poller_down_retry' => [
            'description' => '离线设备重试间隔',
            'help' => '轮询时设备离线，重试前等待的时间；为所有节点设置默认值。',
        ],
        'service_discovery_workers' => [
            'description' => '发现工作进程数',
            'help' => '执行设备发现的工作进程数量。数值过高可能导致系统过载；为所有节点设置默认值。',
        ],
        'service_discovery_frequency' => [
            'description' => '设备发现频率',
            'help' => '执行设备发现的频率；为所有节点设置默认值。默认每天执行四次。',
        ],
        'service_services_workers' => [
            'description' => '服务检查工作进程数',
            'help' => '执行服务检查的工作进程数量；为所有节点设置默认值。',
        ],
        'service_services_frequency' => [
            'description' => '服务检查频率',
            'help' => '执行服务检查的频率，必须与轮询频率一致；为所有节点设置默认值。',
        ],
        'service_billing_frequency' => [
            'description' => '计费采集频率',
            'help' => '采集计费数据的频率；为所有节点设置默认值。',
        ],
        'service_billing_calculate_frequency' => [
            'description' => '计费用量计算频率',
            'help' => '计算计费用量的频率；为所有节点设置默认值。',
        ],
        'service_alerting_frequency' => [
            'description' => '告警检查频率',
            'help' => '检查告警规则的频率。数据仅按轮询频率更新；为所有节点设置默认值。',
        ],
        'service_update_enabled' => [
            'description' => '启用每日维护',
            'help' => '运行 daily.sh 维护脚本，随后重启调度服务；为所有节点设置默认值。',
        ],
        'service_update_frequency' => [
            'description' => '维护频率',
            'help' => '每日维护的执行频率。默认值为一天，请勿更改；为所有节点设置默认值。',
        ],
        'service_loglevel' => [
            'description' => '日志级别',
            'help' => '调度服务的日志级别；为所有节点设置默认值。',
        ],
        'service_watchdog_enabled' => [
            'description' => '启用看门狗',
            'help' => '看门狗监视日志文件；如果日志不再更新，则重启服务。为所有节点设置默认值。',
        ],
        'service_watchdog_log' => [
            'description' => '监视的日志文件',
            'help' => '默认监视 LibreNMS 日志文件；为所有节点设置默认值。',
        ],
        'service_health_file' => [
            'description' => '服务健康状态文件',
            'help' => '用于确认调度服务正在运行的健康状态文件路径。',
        ],
        'show_locations' => [
            'description' => '在导航栏显示位置',
            'help' => '在导航栏中显示位置。',
        ],
        'show_locations_dropdown' => [
            'description' => '在下拉菜单显示位置',
            'help' => '在下拉菜单中显示位置。',
        ],
        'show_services' => [
            'description' => '在导航栏显示服务',
            'help' => '在导航栏中显示服务。',
        ],
        'discovery_modules' => [
            'arp-table' => ['description' => 'ARP 表'],
            'applications' => ['description' => '应用程序'],
            'bgp-peers' => ['description' => 'BGP 对等体'],
            'cisco-cef' => ['description' => 'Cisco CEF'],
            'mac-accounting' => ['description' => 'MAC 流量统计'],
            'cisco-otv' => ['description' => 'Cisco OTV'],
            'cisco-qfp' => ['description' => 'Cisco QFP'],
            'slas' => ['description' => '服务级别协议跟踪'],
            'cisco-pw' => ['description' => 'Cisco 伪线'],
            'cisco-vrf-lite' => ['description' => 'Cisco VRF Lite'],
            'discovery-arp' => ['description' => 'ARP 发现'],
            'discovery-protocols' => ['description' => '发现协议'],
            'entity-physical' => ['description' => '物理实体'],
            'entity-state' => ['description' => '实体状态'],
            'fdb-table' => ['description' => 'FDB 表'],
            'hr-device' => ['description' => '主机资源设备'],
            'ipv4-addresses' => ['description' => 'IPv4 地址'],
            'ipv6-addresses' => ['description' => 'IPv6 地址'],
            'isis' => ['description' => 'IS-IS'],
            'junose-atm-vp' => ['description' => 'Junose ATM 虚拟路径'],
            'loadbalancers' => ['description' => '负载均衡器'],
            'mef' => ['description' => 'MEF'],
            'mempools' => ['description' => '内存池'],
            'mpls' => ['description' => 'MPLS'],
            'ntp' => ['description' => 'NTP'],
            'os' => ['description' => '操作系统'],
            'ports' => ['description' => '端口'],
            'ports-stack' => ['description' => '端口堆叠'],
            'processors' => ['description' => '处理器'],
            'qos' => ['description' => '服务质量（QoS）'],
            'route' => ['description' => '路由'],
            'ipmi' => ['description' => 'IPMI'],
            'sensors' => ['description' => '传感器'],
            'services' => ['description' => '服务'],
            'storage' => ['description' => '存储'],
            'stp' => ['description' => '生成树协议（STP）'],
            'ucd-diskio' => ['description' => 'UCD 磁盘 I/O'],
            'vlans' => ['description' => 'VLAN'],
            'vminfo' => ['description' => '虚拟机监控器中的虚拟机信息'],
            'vrf' => ['description' => 'VRF'],
            'wireless' => ['description' => '无线网络'],
            'xdsl' => ['description' => 'xDSL'],
            'printer-supplies' => ['description' => '打印机耗材'],
        ],
        'poller_modules' => [
            'unix-agent' => ['description' => 'Unix Agent'],
            'os' => ['description' => '操作系统'],
            'ipmi' => ['description' => 'IPMI'],
            'qos' => ['description' => '服务质量（QoS）'],
            'sensors' => ['description' => '传感器'],
            'processors' => ['description' => '处理器'],
            'mempools' => ['description' => '内存池'],
            'storage' => ['description' => '存储'],
            'netstats' => ['description' => '网络统计'],
            'hr-mib' => ['description' => '主机资源 MIB'],
            'ucd-mib' => ['description' => 'UCD MIB'],
            'ipSystemStats' => ['description' => 'IP 系统统计'],
            'ports' => ['description' => '端口'],
            'ports-stack' => ['description' => '端口堆叠'],
            'bgp-peers' => ['description' => 'BGP 对等体'],
            'vlans' => ['description' => 'VLAN'],
            'junose-atm-vp' => ['description' => 'JunOS ATM 虚拟路径'],
            'ucd-diskio' => ['description' => 'UCD 磁盘 I/O'],
            'wireless' => ['description' => '无线网络'],
            'ospf' => ['description' => 'OSPF'],
            'ospfv3' => ['description' => 'OSPFv3'],
            'isis' => ['description' => 'IS-IS'],
            'cisco-ipsec-flow-monitor' => ['description' => 'Cisco IPSec 流量监控'],
            'cisco-remote-access-monitor' => ['description' => 'Cisco 远程访问监控'],
            'cisco-cef' => ['description' => 'Cisco CEF'],
            'slas' => ['description' => '服务级别协议跟踪'],
            'mac-accounting' => ['description' => 'Cisco MAC 流量统计'],
            'cipsec-tunnels' => ['description' => 'Cisco IPSec 隧道'],
            'cisco-ace-loadbalancer' => ['description' => 'Cisco ACE 负载均衡器'],
            'cisco-ace-serverfarms' => ['description' => 'Cisco ACE 服务器集群'],
            'cisco-otv' => ['description' => 'Cisco OTV'],
            'cisco-qfp' => ['description' => 'Cisco QFP'],
            'cisco-vpdn' => ['description' => 'Cisco VPDN'],
            'nac' => ['description' => '网络准入控制（NAC）'],
            'netscaler-vsvr' => ['description' => 'NetScaler 虚拟服务器'],
            'aruba-controller' => ['description' => 'Aruba 控制器'],
            'availability' => ['description' => '可用性'],
            'entity-physical' => ['description' => '物理实体'],
            'entity-state' => ['description' => '实体状态'],
            'applications' => ['description' => '应用程序'],
            'stp' => ['description' => '生成树协议（STP）'],
            'vminfo' => ['description' => '虚拟机监控器中的虚拟机信息'],
            'ntp' => ['description' => 'NTP'],
            'loadbalancers' => ['description' => '负载均衡器'],
            'mef' => ['description' => 'MEF'],
            'mpls' => ['description' => 'MPLS'],
            'xdsl' => ['description' => 'xDSL'],
            'printer-supplies' => ['description' => '打印机耗材'],
            'port-security' => ['description' => '端口安全'],
        ],
        'front_page' => [
            'description' => '首页',
            'help' => '设置自定义首页，即登录后首先显示的页面。例如，创建 `resources/views/overview/custom/foobar.blade.php` 后，可将 `front_page` 设为 `foobar`。',
        ],
        'front_page_down_box_limit' => [
            'description' => '离线设备显示数量',
            'help' => '首页离线设备区域中显示的设备数量。',
        ],
        'front_page_settings' => [
            'top_devices' => [
                'description' => '热门设备',
                'help' => '首页显示的热门设备数量。',
            ],
            'top_ports' => [
                'description' => '热门端口',
                'help' => '首页显示的热门端口数量。',
            ],
        ],
        'graphing' => [
            'availability' => [
                'description' => '统计时长',
                'help' => '按列出的时长计算设备可用性；时长以秒为单位。',
            ],
            'availability_consider_maintenance' => [
                'description' => '计划维护不影响可用性',
                'help' => '处于维护模式的设备不会因此产生中断记录或降低可用性。',
            ],
        ],
        'graphs' => [
            'row' => [
                'normal' => [
                    'options' => [
                        'sixhour' => '6 小时',
                        'day' => '24 小时',
                        'twoday' => '48 小时',
                        'week' => '1 周',
                        'twoweek' => '2 周',
                        'month' => '1 个月',
                        'twomonth' => '2 个月',
                        'year' => '1 年',
                        'twoyear' => '2 年',
                    ],
                ],
            ],
            'port_speed_zoom' => [
                'description' => '按端口速率缩放端口图表',
                'help' => '使端口图表的纵轴最大值始终为端口速率；禁用时则根据流量自动缩放。',
            ],
        ],
        'location_map' => [
            'description' => '位置名称映射',
            'help' => '将一个 sysLocation 值映射为另一个值。',
        ],
        'location_map_regex' => [
            'description' => '使用正则表达式映射位置名称',
            'help' => '通过正则表达式将 sysLocation 值映射为另一个值。',
        ],
        'location_map_regex_sub' => [
            'description' => '使用正则表达式替换位置名称',
            'help' => '通过正则表达式替换 sysLocation 的内容。',
        ],
        'network_map_show_on_worldmap' => [
            'description' => '在地图上显示网络链路',
            'help' => '在世界地图上显示不同位置之间的网络链路，类似网络拓扑图。',
        ],
        'network_map_worldmap_show_disabled_alerts' => [
            'description' => '显示已禁用告警的设备',
            'help' => '在网络地图上显示已禁用告警的设备。',
        ],
        'network_map_worldmap_link_type' => [
            'description' => '网络地图数据来源',
            'help' => '选择网络地图中链路数据的来源。',
        ],
        'overview_show_sysDescr' => [
            'description' => '在设备概览页显示 sysDescr',
            'help' => '在设备概览页显示设备的 sysDescr。',
        ],
        'page_refresh' => [
            'description' => '页面刷新间隔',
            'help' => '页面自动刷新的间隔，单位为秒；设为 0 可禁用自动刷新。',
        ],
        'auth' => [
            'allow_get_login' => [
                'description' => '允许 GET 登录（不安全）',
                'help' => '允许将用户名与密码变量放在 URL 的 GET 请求中登录，适用于无法交互式登录的显示系统。此方式视为不安全，因为密码会显示在记录中，且登录没有速率限制，可能让您遭受暴力破解攻击。',
            ],
            'socialite' => [
                'redirect' => [
                    'description' => '重定向登录页面',
                    'help' => '登录页面应立即重定向至第一个已定义的提供者。<br><br>提示：您可以在 URL 后附加 ?redirect=0 来避免此行为',
                ],
                'register' => [
                    'description' => '允许通过提供者注册',
                ],
                'configs' => [
                    'description' => '提供者配置',
                ],
                'scopes' => [
                    'description' => '验证请求中应包含的范围（scopes）',
                    'help' => '请参阅 https://laravel.com/docs/10.x/socialite#access-scopes',
                ],
                'default_role' => [
                    'description' => '默认角色',
                ],
                'claims' => [
                    'description' => '身份声明（Claims）',
                    'help' => '将组对应到角色',
                ],
            ],
        ],
        'auth_ad_debug' => [
            'description' => '调试',
            'help' => '显示详细的错误消息，请勿持续启用，因为可能泄漏数据。',
        ],
        'auth_ad_domain' => [
            'description' => 'Active Directory 域名',
            'help' => 'Active Directory 域名，例如：example.com',
        ],
        'auth_ad_global_read' => [
            'description' => '全域只读',
            'help' => '允许所有用户全域只读访问',
        ],
        'auth_ad_group' => [
            'description' => '访问组 DN',
            'help' => '授予一般层级访问权的组可分辨名称。例如：cn=groupname,ou=groups,dc=example,dc=com',
        ],
        'auth_ad_require_groupmembership' => [
            'description' => '要求组成员资格',
            'help' => '仅允许属于指定组的用户登录',
        ],
        'auth_ad_timeout' => [
            'description' => '连接超时',
            'help' => '如果一台或多台服务器没有响应，较长的超时时间会导致登录缓慢；设置过短则可能导致连接失败。',
        ],
        'auth_ad_url' => [
            'description' => 'Active Directory 服务器',
            'help' => '设置服务器，以空格分隔。在前面加上 ldaps:// 以使用 SSL。例如：ldaps://dc1.example.com ldaps://dc2.example.com',
        ],
        'auth_ldap_cacertfile' => [
            'description' => '覆盖系统 TLS CA 证书',
            'help' => '为 LDAPS 使用所提供的 CA 证书。',
        ],
        'auth_ldap_ignorecert' => [
            'description' => '不要求有效证书',
            'help' => 'LDAPS 不要求有效的 TLS 证书。',
        ],
        'auth_ldap_require_groupmembership' => [
            'description' => 'LDAP 组成员资格验证',
            'help' => '当提供者允许（或不允许）Compare 动作时，运行（或跳过）ldap_compare。',
        ],
        'auth_ldap_userlist_filter' => [
            'description' => '自定义 LDAP 用户筛选器',
            'help' => '自定义 LDAP 过滤器。LDAP 目录包含数千名用户时，可用它限制返回结果的数量。',
        ],
        'auth_ldap_wildcard_ou' => [
            'description' => '通配符用户 OU',
            'help' => '搜索符合用户名的用户，不受用户后缀中所设 OU 的限制。若您的用户分散在不同 OU 时很有用。Bind 用户名若有设置，仍使用用户后缀',
        ],
        'availablity' => [
            'threshold_ok' => [
                'description' => '可用性正常阈值',
                'help' => '绿色的阈值',
            ],
            'threshold_warning' => [
                'description' => '可用性警告阈值',
                'help' => '橙色的阈值',
            ],
        ],
        'bad_entity_sensor_regex' => [
            'description' => '不良 Entity 传感器 Regex',
            'help' => '用于匹配不良 entity 传感器的正则表达式，这些传感器不会显示在 Web 界面中。',
        ],
        'billing' => [
            '95th_default_agg' => [
                'description' => '默认 95 百分位汇总',
                'help' => '将 95 百分位计算的默认选项设为汇总。',
            ],
        ],
        'enable_billing' => [
            'description' => '启用计费',
            'help' => '启用计费模块，让您可以监控端口用量。',
        ],
        'peering_descr' => [
            'description' => 'Peering 端口类型',
            'help' => '所列描述类型的端口会显示在 peering ports 菜单项目下。详情请参阅「接口描述解析」文档。',
        ],
        'transit_descr' => [
            'description' => 'Transit 端口类型',
            'help' => '所列描述类型的端口会显示在 transit ports 菜单项目下。详情请参阅「接口描述解析」文档。',
        ],
        'collectd_dir' => [
            'description' => 'Collectd 目录',
            'help' => 'Collectd 保存其 RRD 文件的目录。用于在 LibreNMS 中显示来自 collectd 的数据。',
        ],
        'collectd_sock' => [
            'description' => 'Collectd 套接字',
            'help' => 'Collectd 监听的 socket。用于在 LibreNMS 中显示来自 collectd 的数据。',
        ],
        'core_descr' => [
            'description' => 'Core 端口类型',
            'help' => '所列描述类型的端口会显示在 core ports 菜单项目下。详情请参阅「接口描述解析」文档。',
        ],
        'custom_descr' => [
            'description' => '自定义端口类型',
            'help' => '所列描述类型的端口会显示在 custom ports 菜单项目下。详情请参阅「接口描述解析」文档。',
        ],
        'custom_map' => [
            'background_type' => [
                'description' => '背景类型',
                'help' => '新地图的默认背景类型。需要设置背景数据。',
            ],
            'background_data' => [
                'color' => [
                    'description' => '背景颜色',
                    'help' => '地图背景的初始颜色',
                ],
                'lat' => [
                    'description' => '背景地图纬度',
                    'help' => '背景地理地图的初始纬度',
                ],
                'lng' => [
                    'description' => '背景地图经度',
                    'help' => '背景地理地图的初始经度',
                ],
                'layer' => [
                    'description' => '背景地图图层',
                    'help' => '背景地理地图的初始图层',
                ],
                'zoom' => [
                    'description' => '背景地图缩放',
                    'help' => '背景地理地图的初始缩放',
                ],
            ],
            'edge_font_color' => [
                'description' => '连接文本颜色',
                'help' => '连接标签的默认字体颜色',
            ],
            'edge_font_face' => [
                'description' => '连接字体',
                'help' => '连接标签的默认字体',
            ],
            'edge_font_size' => [
                'description' => '连接文本大小',
                'help' => '连接标签的默认字体大小',
            ],
            'edge_seperation' => [
                'description' => '连接间距',
                'help' => '新地图的默认连接间距',
            ],
            'height' => [
                'description' => '地图高度',
                'help' => '新地图的默认地图高度',
            ],
            'node_align' => [
                'description' => '节点对齐',
                'help' => '新地图的默认节点对齐方式',
            ],
            'node_background' => [
                'description' => '节点背景',
                'help' => '节点标签的默认背景颜色',
            ],
            'node_border' => [
                'description' => '节点边框',
                'help' => '节点标签的默认边框颜色',
            ],
            'node_font_color' => [
                'description' => '节点文本颜色',
                'help' => '节点标签的默认字体颜色',
            ],
            'node_font_face' => [
                'description' => '节点字体',
                'help' => '节点标签的默认字体',
            ],
            'node_font_size' => [
                'description' => '节点文本大小',
                'help' => '节点标签的默认字体大小',
            ],
            'node_size' => [
                'description' => '节点大小',
                'help' => '节点的默认大小',
            ],
            'node_type' => [
                'description' => '节点显示类型',
                'help' => '节点的默认显示类型',
            ],
            'reverse_arrows' => [
                'description' => '反转连接箭头',
                'help' => '默认箭头方向。朝向中心（默认）或朝向两端',
            ],
            'width' => [
                'description' => '地图宽度',
                'help' => '新地图的默认地图宽度',
            ],
        ],
        'customers_descr' => [
            'description' => 'Customer 端口类型',
            'help' => '所列描述类型的端口会显示在 customers ports 菜单项目下。详情请参阅「接口描述解析」文档。',
        ],
        'disabled_sensors' => [
            'description' => '已停用的传感器',
            'help' => '不应轮询或显示于 Web 界面中的传感器。',
        ],
        'disabled_sensors_regex' => [
            'description' => '已停用传感器 Regex',
            'help' => '符合此正则表达式的传感器将不会被轮询或显示于 Web 界面中。',
        ],
        'email_smtp_verifypeer' => [
            'description' => '验证对端证书',
            'help' => '通过 TLS 连接 SMTP 服务器时验证对端证书。',
        ],
        'email_smtp_allowselfsigned' => [
            'description' => '允许自签名证书',
            'help' => '通过 TLS 连接到 SMTP 服务器时允许自签名证书',
        ],
        'email_attach_graphs' => [
            'description' => '附加图表影像',
            'help' => '这会在告警触发时产生图表，并附加及内嵌于电子邮件中。',
        ],
        'enable_clear_discovery' => [
            'description' => '启用清除发现',
            'help' => '启用清除设备发现日期与时间的功能。这会强制重新发现该设备。',
        ],
        'enable_inventory' => [
            'description' => '启用库存',
            'help' => '启用库存页面，显示设备的硬件库存。',
        ],
        'enable_lazy_load' => [
            'description' => '启用延迟加载',
            'help' => '延迟加载仅在当下加载所需数据，借此加快页面加载速度。若您遇到问题，可停用此项。',
        ],
        'enable_libvirt' => [
            'description' => '启用 Libvirt',
            'help' => '启用 libvirt 页面，显示设备的虚拟机。',
        ],
        'enable_proxmox' => [
            'description' => '启用 Proxmox',
            'help' => '启用 Proxmox 页面，显示设备的虚拟机。',
        ],
        'enable_pseudowires' => [
            'description' => '启用 Pseudowires',
            'help' => '启用 pseudowires 页面，显示设备的 pseudowires。',
        ],
        'enable_syslog' => [
            'description' => '启用 Syslog',
            'help' => '在 WebUI 中启用 syslog 的可见性。',
        ],
        'graphite' => [
            'enable' => [
                'description' => '启用',
                'help' => '将指标导出至 Graphite',
            ],
            'host' => [
                'description' => '服务器',
                'help' => '要发送数据的 Graphite 服务器 IP 或主机名',
            ],
            'port' => [
                'description' => '端口',
                'help' => '用于连接 Graphite 服务器的端口',
            ],
            'prefix' => [
                'description' => '前缀 (选填)',
                'help' => '会将前缀加到所有指标的开头。必须为以点分隔的字母或数字',
            ],
        ],
        'html' => [
            'device' => [
                'primary_link' => [
                    'description' => '主要下拉链接',
                    'help' => '设置设备下拉列表中的主要链接',
                ],
            ],
        ],
        'http_auth_header' => [
            'description' => '包含用户名的字段名称',
            'help' => '可以是环境变量或 HTTP 请求头字段，例如 REMOTE_USER、PHP_AUTH_USER，或自定义的字段。',
        ],
        'http_auth_guest' => [
            'description' => 'HTTP 验证访客用户',
            'help' => '若设置，允许所有 HTTP 用户验证，并将未知用户指派为指定的本机用户名',
        ],
        'https_proxy' => [
            'description' => 'HTTPS 代理',
            'help' => '若 https_proxy 环境变量无法使用，将此设为备用。',
        ],
        'ignore_mount' => [
            'description' => '忽略挂接点',
            'help' => '不要监控这些挂载点的磁盘使用量',
        ],
        'ignore_mount_network' => [
            'description' => '忽略网络挂接点',
            'help' => '不要监控网络挂载点的磁盘使用量',
        ],
        'ignore_mount_optical' => [
            'description' => '忽略光驱',
            'help' => '不要监控光驱的磁盘使用量',
        ],
        'ignore_mount_removable' => [
            'description' => '忽略卸除式磁盘机',
            'help' => '不要监控卸除式设备的磁盘使用量',
        ],
        'ignore_mount_regexp' => [
            'description' => '以 Regex 设置要忽略的挂接点',
            'help' => '不要监控符合至少一个这些正则表达式的挂载点的磁盘使用量',
        ],
        'ignore_mount_string' => [
            'description' => '以内含字符串设置要忽略的挂接点',
            'help' => '不要监控包含至少一个这些字符串的挂载点的磁盘使用量',
        ],
        'influxdb' => [
            'db' => [
                'description' => '数据库',
                'help' => '用于保存指标的 InfluxDB 数据库名称',
            ],
            'enable' => [
                'description' => '启用',
                'help' => '将指标导出至 InfluxDB',
            ],
            'host' => [
                'description' => '服务器',
                'help' => '要发送数据的 InfluxDB 服务器 IP 或主机名',
            ],
            'password' => [
                'description' => '密码',
                'help' => '连接 InfluxDB 的密码（如有需要）',
            ],
            'port' => [
                'description' => '端口',
                'help' => '用于连接 InfluxDB 服务器的端口',
            ],
            'timeout' => [
                'description' => '超时',
                'help' => '等待 InfluxDB 服务器的时间，0 表示默认超时',
            ],
            'transport' => [
                'description' => '传输方式',
                'help' => '用于连接 InfluxDB 服务器的传输协议。',
                'options' => [
                    'http' => 'HTTP',
                    'https' => 'HTTPS',
                    'udp' => 'UDP',
                ],
            ],
            'username' => [
                'description' => '用户名',
                'help' => '连接 InfluxDB 的用户名（如有需要）',
            ],
            'batch_size' => [
                'description' => '批量大小',
                'help' => '单一批量要发送的指标数量，0 表示不分批',
            ],
            'measurements' => [
                'description' => '测量项',
                'help' => '要发送至 InfluxDB 的 measurement 列表，留空则全部发送',
            ],
            'verifySSL' => [
                'description' => '验证 SSL',
                'help' => '验证 SSL 证书是否有效且受信任',
            ],
            'debug' => [
                'description' => '调试',
                'help' => '启用或停用对 CLI 的详细输出',
            ],
        ],
        'influxdbv2' => [
            'bucket' => [
                'description' => '存储桶',
                'help' => '用于保存指标的 InfluxDB Bucket 名称',
            ],
            'enable' => [
                'description' => '启用',
                'help' => '使用 InfluxDBv2 API 将指标导出至 InfluxDB',
            ],
            'host' => [
                'description' => '服务器',
                'help' => '要发送数据的 InfluxDB 服务器 IP 或主机名',
            ],
            'token' => [
                'description' => '令牌',
                'help' => '连接 InfluxDB 的令牌（如有需要）',
            ],
            'port' => [
                'description' => '端口',
                'help' => '用于连接 InfluxDB 服务器的端口',
            ],
            'transport' => [
                'description' => '传输方式',
                'help' => '用于连接 InfluxDB 服务器的传输协议。',
                'options' => [
                    'http' => 'HTTP',
                    'https' => 'HTTPS',
                ],
            ],
            'organization' => [
                'description' => '组织',
                'help' => 'InfluxDB 服务器上包含该 bucket 的组织',
            ],
            'allow_redirects' => [
                'description' => '允许重定向',
                'help' => '允许来自 InfluxDB 服务器的重定向',
            ],
            'debug' => [
                'description' => '调试',
                'help' => '启用或停用对 CLI 的详细输出',
            ],
            'log_file' => [
                'description' => '日志文件',
                'help' => '若需要，可为调试定义另一个日志文件',
            ],
            'groups-exclude' => [
                'description' => '排除的设备组',
                'help' => '排除不发送数据至 InfluxDBv2 的设备组',
            ],
            'timeout' => [
                'description' => '超时',
                'help' => '超时（秒）',
            ],
            'verify' => [
                'description' => '验证',
                'help' => '验证证书',
            ],
            'batch_size' => [
                'description' => '批量大小',
                'help' => '发送前应捆绑多少指标',
            ],
            'max_retry' => [
                'description' => '最大重试次数',
                'help' => '应重试多少次',
            ],
        ],
        'kafka' => [
            'enable' => [
                'description' => '启用',
                'help' => '使用 idealo/php-rdkafka-ffi 将指标导出至 Kafka',
            ],
            'groups-exclude' => [
                'description' => '排除的设备组 ID',
                'help' => '排除不发送数据至 Kafka 的设备组 ID',
            ],
            'measurement-exclude' => [
                'description' => '排除的 measurement',
                'help' => '排除不发送至 Kafka 的发现模块',
            ],
            'debug' => [
                'description' => '调试',
                'help' => '启用 Kafka 内部保存进程的详细记录',
            ],
            'security' => [
                'debug' => [
                    'description' => '安全性调试',
                    'help' => '显示与 Kafka broker 之间安全性通信的更详细信息',
                ],
            ],
            'broker' => [
                'list' => [
                    'description' => 'Kafka Broker 服务器列表，格式为 host!:port',
                    'help' => 'Kafka broker 列表，格式为 host!:port。https://github.com/confluentinc/librdkafka/blob/master/CONFIGURATION.md',
                ],
            ],
            'idempotence' => [
                'description' => '幂等性',
                'help' => '设为 true 时，生产者会确保消息恰好成功产生一次，并维持原始的产生顺序',
            ],
            'topic' => [
                'description' => '主题',
                'help' => '用于组织消息的类别',
            ],
            'ssl' => [
                'enable' => [
                    'description' => '启用 SSL',
                    'help' => '在 Kafka 中启用 SSL 支持',
                ],
                'protocol' => [
                    'description' => 'SSL 协议',
                    'help' => '与 broker 通信所用的协议',
                ],
                'ca' => [
                    'location' => [
                        'description' => 'SSL CA 证书位置',
                        'help' => '用于验证 Kafka Broker 证书的 CA 证书文件或目录路径。',
                    ],
                ],
                'certificate' => [
                    'location' => [
                        'description' => 'SSL 证书位置',
                        'help' => '用于客户端认证的公钥证书（PEM）路径。',
                    ],
                ],
                'key' => [
                    'location' => [
                        'description' => 'SSL 证书密钥位置',
                        'help' => '用于客户端认证的私钥（PEM）路径。',
                    ],
                    'password' => [
                        'description' => 'SSL 证书密钥密码',
                        'help' => '私钥口令（与 kafka.ssl.key.location 配合使用）。',
                    ],
                ],
                'keystore' => [
                    'location' => [
                        'description' => 'SSL Keystore 证书位置',
                        'help' => '用于验证的客户端 keystore（PKCS#12）路径。',
                    ],
                    'password' => [
                        'description' => 'SSL Keystore 密钥密码',
                        'help' => '客户端 keystore（PKCS#12）密码。',
                    ],
                ],
            ],
            'flush' => [
                'timeout' => [
                    'description' => 'Kafka Flush 超时',
                    'help' => 'Kafka 等待此超时时间以清空队列中的消息',
                ],
            ],
            'buffer' => [
                'max' => [
                    'message' => [
                        'description' => 'Kafka 缓冲区保留于轮询器内存中的最大消息数',
                        'help' => 'Kafka 缓冲区允许保留于轮询器内存中的最大消息数',
                    ],
                ],
            ],
            'batch' => [
                'max' => [
                    'message' => [
                        'description' => 'Kafka 每次调用 Kafka 服务器所发送的最大消息数',
                        'help' => 'Kafka 每次调用 Kafka 服务器所发送的最大消息数',
                    ],
                ],
            ],
            'linger' => [
                'ms' => [
                    'description' => 'Kafka 在发送批量前于轮询器内存中累积消息的等待时间（毫秒）',
                    'help' => 'Kafka 在发送批量前于轮询器内存中累积消息的等待时间（毫秒）',
                ],
            ],
            'request' => [
                'required' => [
                    'acks' => [
                        'description' => 'Kafka 要求的必要 acks',
                        'help' => 'Kafka 要求的必要 acks',
                    ],
                ],
            ],
        ],
        'int_core' => [
            'description' => '启用 Core 端口菜单',
            'help' => '在 Web 界面中启用 core ports 菜单',
        ],
        'int_customers' => [
            'description' => '启用 Customers 端口菜单',
            'help' => '在 Web 界面中启用 customers ports 菜单',
        ],
        'int_peering' => [
            'description' => '启用 Peering 端口菜单',
            'help' => '在 Web 界面中启用 peering ports 菜单',
        ],
        'int_transit' => [
            'description' => '启用 Transit 端口菜单',
            'help' => '在 Web 界面中启用 transit ports 菜单',
        ],
        'int_l2tp' => [
            'description' => '启用 L2TP 端口菜单',
            'help' => '在 Web 界面中启用 L2TP ports 菜单',
        ],
        'ipmi.type' => [
            'description' => 'IPMI 类型',
            'help' => '要使用的 IPMI 类型，可为 `lan`、`lanplus`、`open`、`sol`、`raw` 或 `shell`',
        ],
        'ipmi_unit' => [
            'description' => 'IPMI 单位',
            'help' => '可发现的 IPMI 单位类型。',
        ],
        'libvirt_protocols' => [
            'description' => 'Libvirt 协议',
            'help' => '用于 libvirt 连接的协议。',
        ],
        'libvirt_username' => [
            'description' => 'Libvirt 用户名',
            'help' => '用于 libvirt 连接的用户名。',
        ],
        'mac_oui' => [
            'enabled' => [
                'description' => '启用 MAC OUI 查找',
                'help' => '启用 MAC 地址厂商（OUI）查找（数据由 daily.sh 下载）',
            ],
        ],
        'mtu_options' => [
            'bytes' => [
                'description' => 'MTU 测试封包大小',
                'help' => 'MTU 测试封包的大小（字节）（留空以停用 MTU 测试）',
            ],
        ],
        'nfsen_base' => [
            'description' => 'NFSen 基础目录',
            'help' => '用于定位设备专属的图表',
        ],
        'no_proxy' => [
            'description' => 'Proxy 例外',
            'help' => '若 no_proxy 环境变量无法使用，将此设为备用。以逗号分隔要忽略的 IP、主机或域名列表。',
        ],
        'opentsdb' => [
            'enable' => [
                'description' => '启用',
                'help' => '将指标导出至 OpenTSDB',
            ],
            'host' => [
                'description' => '服务器',
                'help' => '要发送数据的 OpenTSDB 服务器 IP 或主机名',
            ],
            'port' => [
                'description' => '端口',
                'help' => '用于连接 OpenTSDB 服务器的端口',
            ],
        ],
        'percentile_value' => [
            'description' => '百分位值',
            'help' => '用于流量图表的百分位值。0 表示停用。',
        ],
        'permission' => [
            'device_group' => [
                'allow_dynamic' => [
                    'description' => '启用用户存限可取用动态设备组',
                ],
            ],
        ],
        'ping' => [
            'description' => 'ping 路径',
        ],
        'prometheus' => [
            'enable' => [
                'description' => '启用',
                'help' => '导出指标数据至 Prometheus Push Gateway',
            ],
            'url' => [
                'description' => '网址',
                'help' => '要发送数据至 Prometheus Push Gateway 的主机网址。',
            ],
            'Job' => [
                'description' => 'Job',
                'help' => '导出指标的 Job 标签',
            ],
            'attach_sysname' => [
                'description' => '附加 sysName',
                'help' => '附加设备的 sysName 信息至 Prometheus Push Gateway。',
            ],
            'prefix' => [
                'description' => '前缀',
                'help' => '选择性附加到导出指标名称前的文本',
            ],
        ],
        'radius' => [
            'default_roles' => [
                'description' => '默认用户角色',
                'help' => '设置指派给用户的角色，除非 Radius 发送了指定角色的属性',
            ],
            'enforce_roles' => [
                'description' => '登录时强制应用角色',
                'help' => '若启用，登录时角色会被设为 Filter-ID 属性或 radius.default_roles 所指定的角色。否则，角色会在用户创建时设置，之后不再变更。',
            ],
        ],
        'rancid_configs' => [
            'description' => 'RANCID 配置',
            'help' => 'RANCID 配置目录，用于在设备页面显示配置差异',
        ],
        'rancid_repo_type' => [
            'description' => 'RANCID 保存库类型',
            'help' => 'RANCID 使用的保存库类型，用于在设备页面显示配置差异',
        ],
        'rancid_repo_url' => [
            'description' => 'RANCID 保存库 URL',
            'help' => 'RANCID 保存库 URL，用于指向可视化 bare Git 保存库的 GitWeb',
        ],
        'rancid_ignorecomments' => [
            'description' => 'RANCID 忽略注解',
            'help' => '比较 RANCID 配置时忽略注解，用于在设备页面显示配置差异',
        ],
        'reporting' => [
            'error' => [
                'description' => '发送错误报告',
                'help' => '将部分错误发送给 LibreNMS 以供分析与修正',
            ],
            'usage' => [
                'description' => '发送使用情况报告',
                'help' => '向 LibreNMS 报告使用情况与版本。若要删除匿名统计，请造访 about 页面。您可于 https://stats.librenms.org 查看统计',
            ],
            'dump_errors' => [
                'description' => '倾印调试错误（将破坏您的安装）',
                'help' => '倾印通常隐藏的错误，让您身为开发人员能找出并修正可能的问题。',
            ],
            'throttle' => [
                'description' => '限制错误报告频率',
                'help' => '报告仅会每隔指定秒数发送一次。若无此项，当常用代码出现错误时，报告可能会失控。设为 0 以停用节流。',
            ],
        ],
        'rewrite_if' => [
            'description' => '重写 ifDescr',
            'help' => '重写 ifDescr 以移除接口类型与编号，例如 GigabitEthernet0/1 变成 GigabitEthernet',
        ],
        'rrdtool_version' => [
            'description' => '设置您服务器上 rrdtool 的版本',
            'help' => '1.5.5 以上的任何版本皆支持 LibreNMS 使用的所有功能，请勿设得高于您已安装的版本',
        ],
        'schedule_type' => [
            'alerting' => [
                'description' => '告警',
                'help' => '告警任务调度方法。旧版模式 会在 crontab 项目存在时使用 cron，并在 旧版配置项 service_billing_enabled 设为 true 时使用 调度服务。',
                'options' => [
                    'legacy' => '旧版模式（不限制）',
                    'cron' => 'Cron（alerts.php）',
                    'dispatcher' => '调度服务',
                ],
            ],
            'billing' => [
                'description' => '计费',
                'help' => '计费任务调度方法。旧版模式 会在 crontab 项目存在时使用 cron，并在 旧版配置项 service_billing_enabled 设为 true 时使用 调度服务。',
                'options' => [
                    'legacy' => '旧版模式（不限制）',
                    'cron' => 'Cron（poll-billing.php 与 billing-calculate.php）',
                    'dispatcher' => '调度服务',
                ],
            ],
            'discovery' => [
                'description' => '发现',
                'help' => '发现任务调度方法。旧版模式 会在 crontab 项目存在时使用 cron，并在 旧版配置项 service_discovery_enabled 设为 true 时使用 调度服务。',
                'options' => [
                    'legacy' => '旧版模式（不限制）',
                    'cron' => 'Cron（lnms device:discover）',
                    'dispatcher' => '调度服务',
                ],
            ],
            'ping' => [
                'description' => '快速 Ping',
                'help' => '快速 Ping 任务调度方法。旧版模式 会在 crontab 项目存在时使用 cron，并在 旧版配置项 service_ping_enabled 设为 true 时使用 调度服务。',
                'options' => [
                    'legacy' => '旧版模式（不限制）',
                    'disabled' => '停用（仅在轮询时 ping）',
                    'cron' => 'Cron（ping.php）',
                    'dispatcher' => '调度服务',
                ],
            ],
            'poller' => [
                'description' => '轮询器',
                'help' => '轮询器任务调度方法。旧版模式 会在 crontab 项目存在时使用 cron，并在 旧版配置项 service_poller_enabled 设为 true 时使用 调度服务。',
                'options' => [
                    'legacy' => '旧版模式（不限制）',
                    'cron' => 'Cron（poller.php）',
                    'dispatcher' => '调度服务',
                ],
            ],
            'services' => [
                'description' => '服务',
                'help' => '服务任务调度方法。旧版模式 会在 crontab 项目存在时使用 cron，并在 旧版配置项 service_services_enabled 设为 true 时使用 调度服务。',
                'options' => [
                    'legacy' => '旧版模式（不限制）',
                    'cron' => 'Cron（check-services.php）',
                    'dispatcher' => '调度服务',
                ],
            ],
        ],
        'sensors' => [
            'guess_limits' => [
                'description' => '推测传感器限制',
                'help' => '若启用，LibreNMS 会尝试根据传感器类型与数值推测传感器限制。这并非总是准确，可能导致不正确的限制。',
            ],
        ],
        'ssl_certificates' => [
            'auto_discover' => [
                'description' => '自动发现 SSL 证书',
                'help' => '自动发现 SSL 证书',
            ],
            'skip_hosts' => [
                'description' => '跳过主机',
                'help' => '从 SSL 证书发现中跳过的主机',
            ],
            'days_until_expiry_warning' => [
                'description' => '警告阈值（天）',
                'help' => '证书距离到期还有多少天时触发警告。',
            ],
            'days_until_expiry_danger' => [
                'description' => '严重告警阈值（天）',
                'help' => '证书距离到期还有多少天时触发严重告警。',
            ],
        ],
        'sso' => [
            'create_users' => [
                'description' => '创建用户',
                'help' => '是否应在登录时创建新用户。',
            ],
            'descr_attr' => [
                'description' => '用户描述属性',
                'help' => '包含用户描述的属性。',
            ],
            'email_attr' => [
                'description' => '电子邮件属性',
                'help' => '包含用户电子邮件地址的属性。',
            ],
            'group_attr' => [
                'description' => '组属性',
                'help' => '使用组映射时，包含组信息的属性。',
            ],
            'group_delimiter' => [
                'description' => '组信息分隔符',
                'help' => '使用组映射策略时，分隔组信息的字符。',
            ],
            'group_filter' => [
                'description' => '组过滤正则表达式',
                'help' => '使用组映射策略时，用于过滤组信息的正则表达式。',
            ],
            'group_level_map' => [
                'description' => '组与角色映射',
                'help' => '设置组到角色的映射关系。',
            ],
            'group_strategy' => [
                'description' => '组映射策略',
                'help' => '设置组映射的处理方式。',
            ],
            'level_attr' => [
                'description' => '层级属性',
                'help' => '使用属性组策略时要使用的属性。',
            ],
            'mode' => [
                'description' => '模式',
                'help' => '选择使用环境变量或 HTTP 请求头。',
            ],
            'realname_attr' => [
                'description' => '真实姓名属性',
                'help' => '包含用户真实姓名的属性。',
            ],
            'static_level' => [
                'description' => '静态层级',
                'help' => '若使用静态方式，应用给每位具有访问权者的角色层级值。',
            ],
            'trusted_proxies' => [
                'description' => '受信任的 Proxy',
                'help' => '受信任的 proxy 列表。',
            ],
            'update_users' => [
                'description' => '更新用户',
                'help' => '是否应在登录时更新用户。',
            ],
            'user_attr' => [
                'description' => '用户属性',
                'help' => '包含用户名的属性。',
            ],
        ],
        'twofactor' => [
            'description' => '双因素验证',
            'help' => '允许用户启用基于时间 (TOTP) 或基于哈希消息验证 (HOTP) 的一次性密码 (OTP)',
        ],
        'twofactor_lock' => [
            'description' => '双因素验证码有效时间 (秒)',
            'help' => '双因素认证连续失败 3 次后，账号被锁定的秒数，用户会收到等待提示。设为 0 将永久锁定账号，并提示联系管理员。',
        ],
        'unimus' => [
            'api_version' => [
                'description' => 'Unimus API 版本',
            ],
            'enabled' => [
                'description' => '启用 Unimus 支持',
                'help' => '在设备的“配置”标签页显示来自 Unimus 的配置备份。',
            ],
            'token' => [
                'description' => 'Unimus API 令牌',
                'help' => '在 Unimus 中创建的 API 令牌 (Basic / 只读权限即足够)',
            ],
            'url' => [
                'description' => 'Unimus URL',
                'help' => '您的 Unimus 服务器基础 URL，例如：http://unimus.example.com:8085',
            ],
        ],
        'update_on_days' => [
            'description' => '仅在这些日子运行更新',
            'help' => '若有设置（非空），daily.sh 仅会在今天符合以下其中一个值时运行代码更新：monday-sunday 或 mon-sun。留空则允许每天更新。',
        ],
        'smokeping.integration' => [
            'description' => '启用',
            'help' => '启用 Smokeping 集成',
        ],
        'smokeping.dir' => [
            'description' => 'RRD 存放路径',
            'help' => 'Smokeping RRD 的完整路径',
        ],
        'smokeping.pings' => [
            'description' => 'Ping 数量',
            'help' => 'Smokeping 中设置的 ping 次数',
        ],
        'smokeping.url' => [
            'description' => 'Smokeping URL 地址',
            'help' => 'Smokeping GUI 的完整 URL',
        ],
    ],
    'twofactor' => [
        'description' => '启用双因素验证',
        'help' => '启用内置的双因素认证。您必须为每个账户设置以使其激活。',
    ],
    'units' => [
        'days' => '日',
        'ms' => '毫秒',
        'seconds' => '秒',
        'percent' => '%',
    ],
    'validate' => [
        'boolean' => ':value 不是有效的布尔值',
        'color' => ':value 不是有效的十六进制颜色代码',
        'email' => ':value 不是有效的电子邮件地址',
        'float' => ':value 不是浮点数',
        'integer' => ':value 不是整数',
        'password' => '密码不正确',
        'select' => ':value 不是允许的值',
        'text' => ':value 不允许使用',
        'array' => '格式无效',
        'password-array' => '格式无效',
        'executable' => ':value 不是有效的可执行文件',
        'directory' => ':value 不是有效的目录',
    ],
];
