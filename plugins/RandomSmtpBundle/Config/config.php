<?php

return [
    'routes' => [
        'main' => [
            'plugin_randomsmtp_index' => [
                'path'       => '/randomsmtp',
                'controller' => 'RandomSmtpBundle:Smtp:index',
            ],
        ],
    ],
];
