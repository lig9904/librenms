<?php

return [
    'maintenance' => [
        'maintenance' => '维护',
        'behavior' => [
            'options' => [
                'skip_alerts' => '跳过告警',
                'mute_alerts' => '静默告警',
                'run_alerts' => '正常运行告警',
            ],
            'tooltip' => '- 跳过告警：不创建新告警，也不将现有告警标记为已恢复。
        - 静默告警：照常创建和恢复告警，但不发送邮件等用户通知。
        - 正常运行告警：照常处理告警并通知用户；维护状态仅作标记。',
        ],
        'title' => '标题',
    ],
];
