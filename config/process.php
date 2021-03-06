<?php

return [
    // 文件更新检测
    'monitor' => [
        'handler' => \App\Process\FileMonitor::class,
        'reloadable'  => false,
        'constructor' => [
            // 监控这些目录
            'monitor_dir' => [
                app_path(),
                config_path(),
                base_path() . '/bootstrap',
                base_path() . '/resources',
                base_path() . '/.env',
            ],
            // 监控这些后缀的文件
            'monitor_extensions' => [
                'php', 'html', 'htm', 'env'
            ]
        ]
    ],
    'task'  => [
        'handler'  => \App\Process\Task::class
    ],
    // 其它进程
    /*'websocket'  => [
        'handler'  => \App\Process\Websocket::class,
        'listen' => 'websocket://0.0.0.0:8888',
        'count'  => 10,
    ],*/
];
