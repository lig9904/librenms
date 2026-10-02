<?php

return [
    'errors' => [
        'db_connect' => '连接数据库失败。请检查数据库服务是否正在运行以及连接设置。',
        'db_auth' => '连接数据库失败。请检查凭据：:error',
        'no_devices' => '找不到匹配您给出的设备规范的设备。',
        'no_new_devices' => '没有新设备',
        'unknown_reason' => '原因未知',
    ],
    'api:token-create' => [
        'description' => '为用户创建新的 API 令牌',
        'arguments' => [
            'username' => '要为其创建令牌的用户',
        ],
        'options' => [
            'name' => '令牌名称',
        ],
        'created' => '令牌创建成功。',
        'save-warning' => '请保存此令牌，之后将不会再次显示。',
        'user-not-found' => '未找到用户 ":username"。',
    ],
    'api:token-list' => [
        'description' => '列出用户的 API 令牌',
        'arguments' => [
            'username' => '要列出其令牌的用户',
        ],
        'no-tokens' => '未找到用户 ":username" 的令牌。',
        'user-not-found' => '未找到用户 ":username"。',
    ],
    'api:token-revoke' => [
        'description' => '撤销用户的 API 令牌',
        'arguments' => [
            'username' => '令牌所属用户',
            'token-id' => '要撤销的令牌 ID（参见 api:token-list）',
        ],
        'revoked' => '已撤销令牌 ":name"（ID：:id）。',
        'token-not-found' => '未找到用户 ":username" 的令牌 ID :id。',
        'user-not-found' => '未找到用户 ":username"。',
    ],
    'config:clear' => [
        'description' => '清除配置缓存。随后加载的配置将包含上次完整加载以来的所有更改。',
    ],
    'config:get' => [
        'description' => '获取配置值',
        'arguments' => [
            'setting' => '以点号表示法获取值的设置（示例：snmp.community.0）',
        ],
        'options' => [
            'dump' => '以JSON格式输出整个配置',
        ],
    ],
    'config:list' => [
        'description' => '列出并搜索配置项',
        'arguments' => [
            'search' => '按配置名称或说明搜索配置项',
        ],
        'not_found' => '未找到匹配 ":search" 的配置项',
    ],
    'config:set' => [
        'description' => '设置配置值（或删除）',
        'arguments' => [
            'setting' => '以点号表示法设置的设置（示例：snmp.community.0）。要附加到数组，请在末尾加上.+',
            'value' => '要设置的值，如果忽略此值则删除设置',
        ],
        'options' => [
            'ignore-checks' => '忽略所有安全检查',
        ],
        'confirm' => '重置:setting为默认值吗？',
        'forget_from' => '从:parent中忘记:path吗？',
        'errors' => [
            'append' => '无法向非数组设置追加',
            'failed' => '设置:setting失败',
            'invalid' => '这不是有效的设置。请检查您的输入',
            'invalid_os' => '指定的OS(:os)不存在',
            'nodb' => '数据库未连接',
            'no-validation' => '无法设置:setting，缺少验证定义。',
        ],
    ],
    'db:seed' => [
        'existing_config' => '数据库中存在现有设置。继续吗？',
    ],
    'dev:check' => [
        'description' => 'LibreNMS代码检查。不带选项运行时运行所有检查',
        'arguments' => [
            'check' => '运行指定的检查:checks',
        ],
        'options' => [
            'commands' => '仅打印将要运行的命令，不执行检查',
            'db' => '运行需要数据库连接的单元测试',
            'fail-fast' => '遇到任何失败时停止检查',
            'full' => '运行完整检查，忽略已更改文件过滤',
            'module' => '要运行测试的具体模块。意味着unit, --db, --snmpsim',
            'os' => '要运行测试的特定操作系统。可以是正则表达式或逗号分隔的列表。意味着unit, --db, --snmpsim',
            'os-modules-only' => '在指定特定操作系统时跳过OS检测测试。当检查非检测更改时，可以加快测试时间。',
            'quiet' => '除非有错误，否则隐藏输出',
            'snmpsim' => '用于单元测试的snmpsim',
        ],
    ],
    'dev:collect-snmprec' => [
        'description' => '从设备采集 SNMP 数据，用于生成 snmpsim 测试文件',
        'help' => "将发现和轮询使用的 OID 采集到 snmprec 测试数据文件。\n\n" .
            "示例：\n  lnms dev:collect-snmprec 123 --variant=crs317 --modules=ports,sensors\n\n" .
            '使用 -v 显示采集的 OID，-vv 显示 LibreNMS 调试输出，-vvv 显示完整的详细调试和 SNMP 输出。',
        'arguments' => [
            'device' => '要采集数据的设备 ID、IP 地址或主机名',
        ],
        'options' => [
            'variant' => '必填的测试数据变体，通常为设备型号；传入空值可明确选择基础测试数据',
            'modules' => '要采集数据的发现或轮询模块，以逗号分隔',
            'prefer-collected' => 'OID 已存在时使用新采集的值（保留其他现有 OID）',
            'os' => '保存测试数据时使用的操作系统名称（仅用于通用设备）',
            'output' => '写入指定的 snmprec 文件，而不是标准测试数据路径',
            'full' => '遍历整个设备，而不是运行发现和轮询模块',
        ],
        'device_not_found' => '未找到设备 ":device"。',
        'variant_required' => '必须指定 --variant (-r)，以免意外更新基础测试数据；使用 --variant= 可明确选择基础测试数据。',
        'variant_underscore' => '变体名称不能包含下划线（_）。',
        'variant_single' => '每次只能采集一个变体。',
        'os_required' => '该设备是通用设备，必须指定操作系统（-o、--os）。',
        'capturing_data' => '正在采集 SNMP 数据...',
        'saved_snmprec' => '已保存 snmprec 数据：:file',
        'no_data' => ':file 没有数据',
        'verify_private_data' => '共享这些文件前，请检查其中是否包含私有数据。',
    ],
    'dev:generate-test-data' => [
        'description' => '根据 snmpsim 记录生成 JSON 测试数据',
        'help' => "重新生成现有 JSON 测试数据，或使用 --variant 明确重建测试数据。\n\n" .
            "示例：\n  lnms dev:generate-test-data routeros\n  lnms dev:generate-test-data all\n  lnms dev:generate-test-data routeros --variant=crs317,wifi --modules=ports,sensors\n\n" .
            '使用 -v 显示发现和轮询输出，-vv 显示 LibreNMS 调试输出，-vvv 显示完整的详细调试和 SNMP 输出。',
        'arguments' => [
            'os' => '处理此操作系统的现有 JSON 测试数据及其变体，或指定 "all" 处理所有操作系统的测试数据',
        ],
        'options' => [
            'variant' => '要处理或重建的操作系统变体，以逗号分隔（必须指定操作系统；使用空值选择基础测试数据）',
            'modules' => '要重新生成的模块，以逗号分隔（默认使用现有测试数据中的模块；指定 --variant 时使用配置的默认模块）',
            'output' => '将单份测试数据写入此文件，或使用 - 输出到标准输出',
        ],
        'scope_required' => '请指定操作系统（或 all）。',
        'variant_requires_os' => '--variant 需要指定操作系统。',
        'invalid_module' => '无效的模块名称：:module',
        'no_fixtures' => '未找到匹配的 JSON 测试数据文件。',
        'no_fixtures_for_os' => '未找到操作系统 ":os" 的匹配 JSON 测试数据文件。',
        'fixture_selection_note' => '选择某个操作系统的所有测试数据时，以现有 tests/data/*.json 文件为准，因此不会包含仅用于检测的 snmprec 文件。',
        'recreate_hint' => '要重建已删除的测试数据，请使用 --variant 明确指定其变体（基础操作系统测试数据使用 --variant=）。',
        'output_single' => '--output 只能用于一个操作系统与变体的组合。',
        'combinations_found' => '找到多个组合（:count 个）。',
        'labels' => [
            'os' => '操作系统：:os',
            'variant' => '变体：:variant',
            'base' => '（基础）',
            'modules' => '模块：:modules',
            'configured_defaults' => '配置的默认值',
        ],
        'progress' => [
            'generating' => '正在生成测试数据',
            'generated' => '已生成测试数据',
            'fixtures' => '{1} :count 份测试数据|[2,*] :count 份测试数据',
            'discovering_module' => ':fixture：正在发现 :module',
            'discovered_module' => ':fixture：已发现 :module',
            'polling_module' => ':fixture：正在轮询 :module',
            'polled_module' => ':fixture：已轮询 :module',
            'discovery_complete' => ':fixture：发现完成',
            'polling_complete' => ':fixture：轮询完成',
        ],
        'saved_to' => '已保存至 :file',
        'generated_count' => '{1} 已生成 :count 份测试数据。|[2,*] 已生成 :count 份测试数据。',
        'ready' => '可以开始测试！',
        'waiting_for_snmpsim' => '正在等待 snmpsim 初始化...',
        'snmpsim_failed' => "无法启动 snmpsim。请确认它已安装且正常运行，并检查 snmprec 文件是否有效。\n:error",
    ],
    'dev:simulate' => [
        'description' => '使用测试数据模拟设备',
        'arguments' => [
            'file' => '要更新或添加到LibreNMS的snmprec文件的基本文件名。如果没有指定文件，则不会添加或更新设备。',
        ],
        'options' => [
            'multiple' => '使用社区名称作为主机名，而不是snmpsim',
            'remove' => '停止后删除设备',
        ],
        'added' => '设备:hostname (:id) 已添加',
        'exit' => '按Ctrl-C停止',
        'removed' => '设备:id 已移除',
        'updated' => '设备:hostname (:id) 已更新',
        'setup' => '正在 :dir 中设置 snmpsim 虚拟环境',
    ],
    'device:add' => [
        'description' => '添加新设备',
        'arguments' => [
            'device spec' => '要添加的主机名或IP',
        ],
        'options' => [
            'v1' => '使用SNMP v1',
            'v2c' => '使用SNMP v2c',
            'v3' => '使用SNMP v3',
            'display-name' => "用于显示此设备名称的字符串，默认为主机名。\n可以使用替换模板：{{ \$hostname }}, {{ \$sysName }}, {{ \$sysName_fallback }}, {{ \$ip }}",
            'force' => '直接添加设备，不进行任何安全性检查',
            'group' => '分布式轮询的轮询组',
            'ping-fallback' => '如果设备不响应SNMP，则将其添加为ping仅设备',
            'port-association-mode' => '设置端口映射方式。对于Linux/Unix建议使用ifName',
            'community' => 'SNMP v1或v2社区',
            'transport' => '连接到设备的传输',
            'port' => 'SNMP传输端口',
            'security-name' => 'SNMPv3安全用户名',
            'auth-password' => 'SNMPv3认证密码',
            'auth-protocol' => 'SNMPv3认证协议',
            'privacy-protocol' => 'SNMPv3隐私协议',
            'privacy-password' => 'SNMPv3隐私密码',
            'ping-only' => '添加ping仅设备',
            'os' => 'ping仅设备：指定操作系统',
            'hardware' => 'ping仅设备：指定硬件',
            'sysName' => 'ping仅设备：指定sysName',
        ],
        'validation-errors' => [
            'port.between' => '端口应为1-65535',
            'poller-group.in' => '给定的轮询组不存在',
        ],
        'messages' => [
            'save_failed' => '保存设备:hostname失败',
            'try_force' => '您可以尝试使用--force选项跳过安全性检查',
            'added' => '添加了设备:hostname (:device_id)',
        ],
    ],
    'device:discover' => [
        'description' => '发现现有设备的信息，并确定要轮询的内容。',
        'arguments' => [
            'device spec' => '要发现的设备：device_id、主机名、通配符 (*)、odd、even 或 all',
        ],
        'options' => [
            'modules' => '指定要运行的模块。使用 / 添加子模块。可指定多个值。',
            'os' => '仅发现指定操作系统的设备',
            'type' => '仅发现指定类型的设备',
        ],
        'errors' => [
            'none_up' => '设备已离线（:reason），无法发现。|所有设备均已离线，无法发现。',
            'none_actioned' => '没有发现任何设备。',
        ],
        'actioned' => '在 :time 内完成 :count 台设备的发现',
        'starting' => '开始发现：',
    ],
    'device:ping' => [
        'description' => 'ping设备并记录响应数据',
        'arguments' => [
            'device spec' => '要执行 ping 的设备：<设备 ID>、<主机名/IP>、all 或 fast（fast 会对所有设备执行 ping，并更新图表和状态）',
        ],
        'options' => [
            'groups' => '要执行 ping 的组 ID。指定多个组时可重复使用此选项。（仅适用于 fast）',
        ],
        'errors' => [
            'groups_without_fast' => '--groups (-g) 选项仅支持设备参数 "fast"。',
        ],
    ],
    'device:poll' => [
        'description' => '根据发现从设备(s)中获取数据',
        'arguments' => [
            'device spec' => '要轮询的设备规范：device_id，hostname，通配符(*)，奇数，偶数，all',
        ],
        'options' => [
            'modules' => '指定要运行的单个模块。用逗号分隔模块，可以添加子模块/',
            'no-data' => '不更新数据存储（RRD，InfluxDB等）',
            'os' => '仅轮询指定操作系统的设备',
            'type' => '仅轮询指定类型的设备',
        ],
        'errors' => [
            'none_up' => '设备已离线（:reason），无法轮询。|所有设备都处于离线状态，无法轮询。',
            'none_actioned' => '没有设备被轮询。',
        ],
        'actioned' => '在:time内轮询了:count台设备',
        'starting' => '开始轮询：',
    ],
    'device:remove' => [
        'doesnt_exists' => '设备不存在：:device',
    ],
    'key:rotate' => [
        'description' => '旋转APP_KEY，此操作会使用给定的旧密钥解密所有加密数据，并使用新密钥存储在APP_KEY中。',
        'arguments' => [
            'old_key' => '适用于加密数据的有效旧APP_KEY',
        ],
        'options' => [
            'generate-new-key' => '如果您没有在.env中设置新密钥，请使用.env中的APP_KEY解密数据并生成新密钥并设置到.env中',
            'forgot-key' => '如果您没有旧密钥，您必须删除所有加密数据才能继续使用LibreNMS的某些功能',
        ],
        'destroy' => '是否销毁所有加密的配置数据？',
        'destroy_confirm' => '仅在找不到旧APP_KEY时才销毁所有加密数据！',
        'cleared-cache' => '配置已缓存，已清除缓存以确保APP_KEY正确。请重新运行lnms key:rotate',
        'backup_keys' => '请记录这两个密钥！一旦出现问题，请在.env中设置新密钥，并将旧密钥作为参数传递给此命令',
        'backup_key' => '请记录此密钥！此密钥用于访问加密数据',
        'backups' => '此命令可能导致数据不可逆丢失，并使所有浏览器会话失效。请确保您有备份。',
        'confirm' => '我有备份并希望继续',
        'decrypt-failed' => '未能解密:item，跳过',
        'failed' => '未能解密项目。设置新密钥为APP_KEY并再次运行此命令，同时将旧密钥作为参数',
        'current_key' => '当前APP_KEY: :key',
        'new_key' => '新APP_KEY: :key',
        'old_key' => '旧APP_KEY: :key',
        'save_key' => '是否将新密钥保存到.env？',
        'success' => '密钥旋转成功！',
        'validation-errors' => [
            'not_in' => ':attribute不能与当前APP_KEY匹配',
            'required' => '需要旧密钥或--generate-new-key选项之一',
        ],
    ],
    'lnms' => [
        'validation-errors' => [
            'optionValue' => '所选:option无效。应为以下之一: :values',
        ],
    ],
    'maintenance:cleanup-database' => [
        'description' => '清理数据库中的孤立数据项。',
    ],
    'maintenance:cleanup-networks' => [
        'delete' => '正在删除 :count 个未使用的网络',
    ],
    'maintenance:fetch-ouis' => [
        'description' => '获取MAC OUI并将其缓存以显示MAC地址的供应商名称',
        'options' => [
            'force' => '忽略任何阻止命令运行的设置或锁定',
            'wait' => '等待随机时间，调度器使用此功能防止服务器负载',
        ],
        'disabled' => 'MAC OUI集成已禁用(:setting)',
        'enable_question' => '启用MAC OUI集成及定期获取？',
        'recently_fetched' => 'MAC OUI数据库最近已获取，跳过更新。',
        'waiting' => '等待:minutes分钟后尝试MAC OUI更新|等待:minutes分钟后尝试MAC OUI更新',
        'starting' => '正在存储Mac OUI至数据库',
        'downloading' => '下载中',
        'processing' => '处理CSV',
        'saving' => '保存结果',
        'success' => '成功更新OUI/供应商映射。:count个修改的OUI|成功更新。:count个修改的OUIs',
        'error' => '处理Mac OUI时出错:',
        'vendor_update' => '为:vendor添加OUI :oui',
    ],
    'maintenance:rrd-step' => [
        'description' => '转换 RRD 文件，使其符合配置的步长和心跳间隔',
        'arguments' => [
            'device' => '主机名、设备 ID 或 all',
        ],
        'options' => [
            'confirm' => '确认已备份 RRD 文件。',
        ],
        'errors' => [
            'invalid' => '指定的主机名或设备 ID 无效',
        ],
        'confirm_backup' => '继续前，请确认已备份 RRD 文件。',
        'mismatched_heartbeat' => ':file：心跳间隔不匹配。:ds != :hb',
        'skipping' => '已跳过 :file。步长已为 :step。',
        'converting' => '正在转换 :file：',
        'summary' => '已转换：:converted  失败：:failed  已跳过：:skipped',
    ],
    'maintenance:cleanup-syslog' => [
        'description' => '清理早于指定天数的系统日志记录',
        'arguments' => [
            'days' => '要保留系统日志记录的天数（默认使用 syslog_purge 配置值）',
        ],
        'bad_days_input' => '天数必须是数字',
        'bad_days_setting' => 'syslog_purge 设置无效，系统日志清理已禁用',
        'delete' => '已清理早于 :days 天的系统日志记录（:count 行）',
        'disabled' => '天数小于或等于 0，系统日志清理已禁用',
    ],
    'maintenance:discover-ssl-certificates' => [
        'description' => '发现设备上的 SSL 证书（HTTPS 端口 443）',
        'options' => [
            'device' => '要发现的设备：device_id、主机名或 all',
        ],
        'no_devices' => '未找到设备',
        'summary' => '已创建：:created，已更新：:updated，失败：:failed',
    ],
    'maintenance:refresh-ssl-certificates' => [
        'description' => '刷新已保存 SSL 证书的证书数据',
        'options' => [
            'id' => '要刷新的证书 ID（省略时刷新所有已启用的证书）',
        ],
        'none' => '没有可刷新的已启用证书',
        'summary' => '已刷新：:refreshed，失败：:failed',
    ],
    'plugin:disable' => [
        'description' => '禁用给定名称的所有插件',
        'arguments' => [
            'plugin' => '要禁用的插件名称，或"all"以禁用所有插件',
        ],
        'already_disabled' => '插件已被禁用',
        'disabled' => ':count个插件被禁用|:count个插件被禁用',
        'failed' => '未能禁用插件',
    ],
    'plugin:enable' => [
        'description' => '启用具有给定名称的最新插件',
        'arguments' => [
            'plugin' => '要启用的插件名称，或"all"以启用所有插件',
        ],
        'already_enabled' => '插件已启用',
        'enabled' => ':count个插件已启用|:count个插件已启用',
        'failed' => '未能启用插件',
    ],
    'port:tune' => [
        'description' => '根据 ifSpeed 调整端口 RRD 文件，以限制最大传输速率',
        'arguments' => [
            'device spec' => '要调整的设备：device_id、主机名、通配符 (*)、odd、even 或 all',
            'ifname' => '要匹配的端口 ifName。使用 all 或 * 匹配所有端口',
        ],
        'device' => '设备 :device：',
        'port' => '正在调整端口 :port',
    ],
    'report:devices' => [
        'description' => '输出设备数据',
        'columns' => '数据库列:',
        'synthetic' => '附加字段:',
        'counts' => '关系计数:',
        'arguments' => [
            'device spec' => '要查询的设备规格：device_id, hostname, 通配符(*), 奇数, 偶数, 全部',
        ],
        'options' => [
            'list-fields' => '打印有效字段列表',
            'fields' => '逗号分隔的要显示的字段列表。有效选项：设备数据库列名，关系计数(ports_count)，以及displayName',
            'output' => '用于显示数据的输出格式:types',
            'no-header' => '不添加表头',
            'relationships' => '要包含的关系，以逗号分隔。仅用于 JSON 输出。',
            'list-relationships' => '列出关系及其说明',
            'all-relationships' => '包含所有关系。-r、--relationships 优先。',
            'devices-as-array' => '将输出作为 JSON 数组返回，而不是每台设备各占一行的 JSON 记录',
        ],
    ],
    'smokeping:generate' => [
        'args-nonsense' => '请使用 --probes 和 --targets 中的一个',
        'config-insufficient' => '为了生成smokeping配置文件，您必须在配置中设置 "smokeping.probes"、"fping" 和 "fping6"',
        'dns-fail' => '无法解析，已从配置中省略',
        'description' => '生成适用于smokeping的配置文件',
        'header-first' => '此文件由 "lnms smokeping:generate" 自动生成',
        'header-second' => '本地更改可能会在未通知或未备份的情况下被覆盖',
        'header-third' => '更多信息请参见 https://docs.librenms.org/Extensions/Smokeping/"',
        'no-devices' => '未找到符合条件的设备 - 设备不能被禁用。',
        'no-probes' => '至少需要一个探测器。',
        'options' => [
            'probes' => '生成探测器列表 - 用于将smokeping配置分割成多个文件。与 "--targets" 冲突',
            'targets' => '生成目标列表 - 用于将smokeping配置分割成多个文件。与 "--probes" 冲突',
            'no-header' => '不在生成的文件开头添加模板注释',
            'no-dns' => '跳过DNS查询',
            'single-process' => '仅使用单个进程运行smokeping',
            'compat' => '[已弃用] 模仿gen_smokeping.php的行为',
        ],
    ],
    'snmp:fetch' => [
        'description' => '针对设备运行SNMP查询',
        'arguments' => [
            'device spec' => '要轮询的设备规格：device_id, hostname, 通配符(*), 奇数, 偶数, 全部',
            'oid(s)' => '一个或多个要获取的SNMP OID。应为MIB::oid或数字oid',
        ],
        'failed' => 'SNMP命令执行失败！',
        'numeric' => '数字形式',
        'oid' => 'OID',
        'options' => [
            'output' => '指定输出格式 :formats',
            'numeric' => '数字OID',
            'depth' => 'SNMP表分组的深度。通常与表索引中的项目数量相同',
        ],
        'not_found' => '设备未找到',
        'textual' => '文本形式',
        'value' => '值',
    ],
    'translation:generate' => [
        'description' => '生成更新后的json语言文件，供Web前端使用',
    ],
    'user:add' => [
        'description' => '添加本地用户，仅当auth设置为mysql时，您才能使用此用户登录',
        'arguments' => [
            'username' => '用户登录使用的用户名',
        ],
        'options' => [
            'descr' => '用户描述',
            'email' => '用户的电子邮件地址',
            'password' => '用户的密码，如果不提供，系统会提示输入',
            'full-name' => '用户的全名',
            'role' => '将用户设置为所需角色 :roles',
        ],
        'form' => [
            'username' => '用户名',
            'password' => '密码',
            'roles' => '选择用户角色',
            'email' => '电子邮箱（可选）',
            'full-name' => '全名（可选）',
            'descr' => '描述（可选）',
        ],
        'password-request' => '请输入用户的密码',
        'success' => '成功添加用户: :username',
        'wrong-auth' => '警告！由于您未使用MySQL身份验证，您将无法使用此用户登录',
    ],
];
