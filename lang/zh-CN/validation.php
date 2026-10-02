<?php

return [

    'array_keys_not_empty' => ':attribute 包含空的数组键。',

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute 字段必须被接受。',
    'accepted_if' => '当 :other 为 :value 时，:attribute 字段必须被接受。',
    'active_url' => ':attribute 字段必须是一个有效的网址。',
    'after' => ':attribute 字段必须是一个在 :date 之后的日期。',
    'after_or_equal' => ':attribute 字段必须是一个在 :date 之后或等于 :date 的日期。',
    'alpha' => ':attribute 字段只能包含字母。',
    'alpha_dash' => ':attribute 字段只能包含字母、数字、破折号和下划线。',
    'alpha_num' => ':attribute 字段只能包含字母和数字。',
    'array' => ':attribute 字段必须是一个数组。',
    'ascii' => ':attribute 字段只能包含单字节的字母数字字符和符号。',
    'before' => ':attribute 字段必须是一个在 :date 之前的日期。',
    'before_or_equal' => ':attribute 字段必须是一个在 :date 之前或等于 :date 的日期。',
    'between' => [
        'array' => ':attribute 字段必须有 :min 到 :max 项。',
        'file' => ':attribute 字段必须在 :min 到 :max 千字节之间。',
        'numeric' => ':attribute 字段必须在 :min 和 :max 之间。',
        'string' => ':attribute 字段必须在 :min 和 :max 个字符之间。',
    ],
    'boolean' => ':attribute 字段必须是真或假。',
    'confirmed' => ':attribute 字段的确认不匹配。',
    'current_password' => '密码不正确。',
    'date' => ':attribute 字段必须是一个有效的日期。',
    'date_equals' => ':attribute 字段必须是一个与 :date 相同的日期。',
    'date_format' => ':attribute 字段必须符合 :format 格式。',
    'decimal' => ':attribute 字段必须有 :decimal 位小数。',
    'declined' => ':attribute 字段必须被拒绝。',
    'declined_if' => '当 :other 为 :value 时，:attribute 字段必须被拒绝。',
    'different' => ':attribute 字段和 :other 必须不同。',
    'digits' => ':attribute 字段必须是 :digits 位数字。',
    'digits_between' => ':attribute 字段必须在 :min 和 :max 位数字之间。',
    'dimensions' => ':attribute 字段的图片尺寸无效。',
    'distinct' => ':attribute 字段有重复的值。',
    'doesnt_end_with' => ':attribute 字段不能以以下之一结束：:values。',
    'doesnt_start_with' => ':attribute 字段不能以以下之一开始：:values。',
    'email' => ':attribute 字段必须是一个有效的电子邮件地址。',
    'ends_with' => ':attribute 字段必须以以下之一结束：:values。',
    'enum' => '所选的 :attribute 无效。',
    'exists' => '所选的 :attribute 无效。',
    'file' => ':attribute 字段必须是一个文件。',
    'filled' => ':attribute 字段必须有值。',
    'gt' => [
        'array' => ':attribute 字段必须有超过 :value 项。',
        'file' => ':attribute 字段必须大于 :value 千字节。',
        'numeric' => ':attribute 字段必须大于 :value。',
        'string' => ':attribute 字段必须大于 :value 个字符。',
    ],
    'gte' => [
        'array' => ':attribute 字段必须有 :value 项或更多。',
        'file' => ':attribute 字段必须大于或等于 :value 千字节。',
        'numeric' => ':attribute 字段必须大于或等于 :value。',
        'string' => ':attribute 字段必须大于或等于 :value 个字符。',
    ],
    'image' => ':attribute 字段必须是一张图片。',
    'in' => '所选的 :attribute 无效。',
    'in_array' => ':attribute 字段必须存在于 :other 中。',
    'integer' => ':attribute 字段必须是一个整数。',
    'ip' => ':attribute 字段必须是一个有效的IP地址。',
    'ipv4' => ':attribute 字段必须是一个有效的IPv4地址。',
    'ipv6' => ':attribute 字段必须是一个有效的IPv6地址。',
    'json' => ':attribute 字段必须是一个有效的JSON字符串。',
    'lowercase' => ':attribute 字段必须是小写。',
    'lt' => [
        'array' => ':attribute 字段必须少于 :value 项。',
        'file' => ':attribute 字段必须小于 :value 千字节。',
        'numeric' => ':attribute 字段必须小于 :value。',
        'string' => ':attribute 字段必须小于 :value 个字符。',
    ],
    'lte' => [
        'array' => ':attribute 字段不能多于 :value 项。',
        'file' => ':attribute 字段必须小于或等于 :value 千字节。',
        'numeric' => ':attribute 字段必须小于或等于 :value。',
        'string' => ':attribute 字段必须小于或等于 :value 个字符。',
    ],
    'mac_address' => ':attribute 字段必须是一个有效的MAC地址。',
    'max' => [
        'array' => ':attribute 字段不能多于 :max 项。',
        'file' => ':attribute 字段不能大于 :max 千字节。',
        'numeric' => ':attribute 字段不能大于 :max。',
        'string' => ':attribute 字段不能大于 :max 个字符。',
    ],
    'max_digits' => ':attribute 字段不能多于 :max 位数字。',
    'mimes' => ':attribute 字段必须是以下类型的文件：:values。',
    'mimetypes' => ':attribute 字段必须是以下类型的文件：:values。',
    'min' => [
        'array' => ':attribute 字段必须至少有 :min 项。',
        'file' => ':attribute 字段必须至少为 :min 千字节。',
        'numeric' => ':attribute 字段必须至少为 :min。',
        'string' => ':attribute 字段必须至少为 :min 个字符。',
    ],
    'min_digits' => ':attribute 字段必须至少有 :min 位数字。',
    'missing' => ':attribute 字段必须缺失。',
    'missing_if' => '当 :other 为 :value 时，:attribute 字段必须缺失。',
    'missing_unless' => '除非 :other 为 :value，否则 :attribute 字段必须缺失。',
    'missing_with' => '当 :values 存在时，:attribute 字段必须缺失。',
    'missing_with_all' => '当 :values 全部存在时，:attribute 字段必须缺失。',
    'multiple_of' => ':attribute 字段必须是 :value 的倍数。',
    'not_in' => '所选的 :attribute 无效。',
    'not_regex' => ':attribute 字段的格式无效。',
    'numeric' => ':attribute 字段必须是一个数字。',
    'password' => [
        'letters' => ':attribute 字段必须至少包含一个字母。',
        'mixed' => ':attribute 字段必须至少包含一个大写字母和一个小写字母。',
        'numbers' => ':attribute 字段必须至少包含一个数字。',
        'symbols' => ':attribute 字段必须至少包含一个符号。',
        'uncompromised' => '给定的 :attribute 出现在数据泄露中，请选择一个不同的 :attribute。',
    ],
    'present' => ':attribute 字段必须存在。',
    'prohibited' => ':attribute 字段被禁止。',
    'prohibited_if' => '当 :other 为 :value 时，:attribute 字段被禁止。',
    'prohibited_unless' => '除非 :other 为 :values 中的值，否则 :attribute 字段被禁止。',
    'prohibits' => ':attribute 字段禁止 :other 出现。',
    'regex' => ':attribute 字段的格式无效。',
    'required' => ':attribute 字段是必需的。',
    'required_array_keys' => ':attribute 字段必须包含以下条目：:values。',
    'required_if' => '当 :other 为 :value 时，:attribute 字段是必需的。',
    'required_if_accepted' => '当 :other 被接受时，:attribute 字段是必需的。',
    'required_unless' => '除非 :other 为 :values 中的值，否则 :attribute 字段是必需的。',
    'required_with' => '当 :values 存在时，:attribute 字段是必需的。',
    'required_with_all' => '当 :values 全部存在时，:attribute 字段是必需的。',
    'required_without' => '当 :values 不存在时，:attribute 字段是必需的。',
    'required_without_all' => '当 :values 全都不在时，:attribute 字段是必需的。',
    'same' => ':attribute 字段必须与 :other 匹配。',
    'size' => [
        'array' => ':attribute 字段必须包含 :size 项。',
        'file' => ':attribute 字段必须是 :size 千字节。',
        'numeric' => ':attribute 字段必须是 :size。',
        'string' => ':attribute 字段必须是 :size 个字符。',
    ],
    'starts_with' => ':attribute 字段必须以以下之一开头：:values。',
    'string' => ':attribute 字段必须是一个字符串。',
    'timezone' => ':attribute 字段必须是一个有效的时区。',
    'unique' => ':attribute 已经被占用。',
    'uploaded' => ':attribute 上传失败。',
    'uppercase' => ':attribute 字段必须是大写的。',
    'url' => ':attribute 字段必须是一个有效的URL。',
    'ulid' => ':attribute 字段必须是一个有效的ULID。',
    'uuid' => ':attribute 字段必须是一个有效的UUID。',

    // Librenms specific

    'alpha_space' => ':attribute 只能包含字母、数字、下划线和空格。',
    'ip_or_hostname' => ':attribute 必须是一个有效的IP地址/网络或主机名。',
    'is_regex' => ':attribute 不是一个有效的正则表达式',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => '自定义消息',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

    'results' => [
        'autofix' => '尝试自动修复',
        'fix' => '修复',
        'fixed' => '修复已完成，请刷新以重新运行验证。',
        'fetch_failed' => '未能获取验证结果',
        'backend_failed' => '未能从后端加载数据，请检查控制台错误。',
        'invalid_fixer' => '无效的修复器',
        'show_all' => '显示全部',
        'show_less' => '显示较少',
        'validate' => '验证',
        'validating' => '正在验证',
        'skipped' => '已跳过',
        'run' => '运行',
    ],
    'validations' => [
        'groups' => [
            'configuration' => '配置',
            'database' => '数据库',
            'dependencies' => '依赖项',
            'disk' => '磁盘',
            'distributedpoller' => '分布式轮询器',
            'mail' => '邮件',
            'php' => 'PHP',
            'poller' => '轮询器',
            'programs' => '程序',
            'python' => 'Python',
            'rrd' => 'RRD',
            'scheduler' => '调度器',
            'system' => '系统',
            'updates' => '更新',
            'user' => '用户',
            'webserver' => 'Web 服务器',
        ],
        'rrd' => [
            'CheckRrdVersion' => [
                'fail' => 'rrdtool 版本 :installed_version 太旧，LibreNMS 需要最低版本为 1.5.5',
                'fail_config' => '您指定的 rrdtool_version :config_version 太旧，LibreNMS 需要最低版本为 1.5.5',
                'fix' => '请在您的 config.php 文件中注释或删除 $config[\'rrdtool_version\'] = \':version\';',
                'ok' => 'rrdtool 版本正常',
            ],
            'CheckRrdcachedConnectivity' => [
                'fail_socket' => ':socket 似乎不存在，rrdcached连接性测试失败',
                'fail_port' => '无法连接到 rrdcached 服务器 :server 端口 :port',
                'ok' => '已连接到rrdcached',
            ],
            'CheckRrdDirPermissions' => [
                'fail_root' => '您的RRD目录归root所有，请考虑更改为非root用户',
                'fail_mode' => '您的RRD目录权限未设置为0775',
                'ok' => 'rrd_dir可写',
            ],
            'CheckRrdStep' => [
                'fail' => '部分 RRD 文件的步长不正确。:bad/:total',
                'fail_bad_files' => '读取 RRD 文件时出错。:bad/:total',
                'list_bad_step_title' => '步长不正确的 RRD 文件',
                'list_bad_files_title' => '运行 rrdinfo 时出错的文件',
                'list_bad_step_item' => ':file：步长为 :step，但应为 :target',
                'ok' => '全部 :total 个 RRD 文件的步长均正确。',
                'timeout' => 'RRD 文件检查耗时过长，已跳过。请运行 :command 检查并修复所有 RRD 文件。',
            ],
        ],
        'database' => [
            'CheckDatabaseConnected' => [
                'fail' => '无法连接数据库',
                'fail_connect' => '无法连接数据库。请确认数据库服务器正在运行，且连接信息正确。请检查环境变量或 :env_file 中的 DB_HOST、DB_PORT 和 DB_NAME。',
                'fail_access' => '已连接数据库，但当前用户没有访问权限。请运行 SQL 查询授予权限。如果数据库位于远程主机，请将 localhost 改为本地主机名。',
                'fail_auth' => '数据库凭据不正确。请检查环境变量或 :env_file 中的 DB_USERNAME 和 DB_PASSWORD。',
                'ok' => '数据库已连接',
            ],
            'CheckDatabaseTableNamesCase' => [
                'fail' => '您在mysql配置中将lower_case_table_names设置为1或true。',
                'fix' => '在您的mysql配置文件的[mysqld]部分设置lower_case_table_names=0。',
                'ok' => 'lower_case_table_names已启用',
            ],
            'CheckDatabaseServerVersion' => [
                'fail' => ':server 版本 :min 是自:date以来支持的最低版本。',
                'fix' => '更新:server到受支持的版本，建议使用:suggested。',
                'ok' => 'SQL服务器满足最低要求',
            ],
            'CheckMysqlEngine' => [
                'fail' => '某些表没有使用推荐的InnoDB引擎，这可能会给您带来问题。',
                'tables' => '表',
                'ok' => 'MySQL引擎是最优的',
            ],
            'CheckSqlServerTime' => [
                'fail' => "此服务器与mysql数据库之间的时间不一致\n Mysql时间: :mysql_time\n PHP时间: :php_time",
                'ok' => 'MySQL和PHP时间匹配',
            ],
            'CheckSchemaVersion' => [
                'fail_outdated' => '您的数据库已过时！',
                'fail_legacy_outdated' => '您的数据库架构(:current)比最新版(:latest)旧。',
                'fix_legacy_outdated' => '手动运行./daily.sh，并检查任何错误。',
                'warn_extra_migrations' => '您的数据库架构有额外的迁移(:migrations)。如果您刚刚从每日发布切换到稳定发布，您的数据库正处于两个发布之间，这将在下一个发布中得到解决。',
                'warn_legacy_newer' => '您的数据库架构(:current)比预期的新(:latest)。如果您刚刚从每日发布切换到稳定发布，您的数据库正处于两个发布之间，这将在下一个发布中得到解决。',
                'ok' => '数据库架构当前',
            ],
            'CheckSchemaCollation' => [
                'ok' => '数据库和列排序规则正确',
            ],
        ],
        'distributedpoller' => [
            'CheckDistributedPollerEnabled' => [
                'ok' => '分布式轮询设置已全局启用',
                'not_enabled' => '您尚未启用distributed_poller',
                'not_enabled_globally' => '您尚未全局启用distributed_poller',
            ],
            'CheckMemcached' => [
                'not_configured_host' => '您尚未配置分布式_poller_memcached_host',
                'not_configured_port' => '您尚未配置分布式_poller_memcached_port',
                'could_not_connect' => '无法连接到memcached服务器',
                'ok' => '与memcached的连接正常',
            ],
            'CheckRrdcached' => [
                'fail' => '您尚未启用rrdcached',
            ],
        ],
        'poller' => [
            'CheckActivePoller' => [
                'fail' => '轮询器未运行。  过去 :interval 秒内没有运行任何轮询器。',
                'both_fail' => '调度程序服务和Python包装器最近都处于活动状态，这可能导致双重轮询',
                'ok' => '找到活动的轮询器',
            ],
            'CheckDispatcherService' => [
                'fail' => '未找到活动的调度程序节点',
                'ok' => '调度程序服务已启用',
                'nodes_down' => '一些调度程序节点最近没有检查',
                'not_detected' => '未检测到调度程序服务',
                'warn' => '调度程序服务已被使用，但最近没有',
            ],
            'CheckLocking' => [
                'fail' => '锁定服务器问题: :message',
                'ok' => '锁定功能正常',
            ],
            'CheckPythonWrapper' => [
                'fail' => '未找到活动的python包装器轮询器',
                'no_pollers' => '未找到python包装器轮询器',
                'cron_unread' => '无法读取cron文件',
                'ok' => 'Python轮询器包装器正在进行轮询',
                'nodes_down' => '一些轮询节点最近没有检查',
                'not_detected' => 'Python包装器cron条目不存在',
            ],
            'CheckRedis' => [
                'bad_driver' => '使用:driver进行锁定，您应设置CACHE_STORE=redis',
                'ok' => 'Redis功能正常',
                'unavailable' => 'Redis不可用',
            ],
            'CheckSchedules' => [
                'dispatcher_poll_fast' => '调度服务的轮询频率高于 RRD 步长。如果未将数据保存到其他时序数据库，这会增加服务器负载，因为 RRD 文件无法存储如此细粒度的轮询数据。',
                'dispatcher_poll_slow' => '调度服务的轮询频率低于 RRD 步长。RRD 文件要求更频繁地接收数据，因此图表可能出错。建议将 service_poller_frequency 设为 null，使轮询频率与 RRD 步长一致。',
                'no_errors' => '轮询频率未发现错误。',
            ],
        ],
    ],
];
