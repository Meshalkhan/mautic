<?php
return [
    'name'        => 'Random SMTP Plugin',
    'description' => 'A plugin that provides random SMTP selection for sending emails in Mautic.',
    'version'     => '1.0.0',
    'author'      => 'Your Name',
    'routes'      => [
        'main' => [
            'plugin_randomsmtp_index' => [
                'path'       => '/randomsmtp',
                'controller' => 'MauticPlugin\RandomSmtpBundle\Controller\SmtpController::index',
            ],
        ],
    ],
    'services' => [
        'models' => [
            'mautic.plugin.randomsmtp.model.random_smtp' => [
                'class' => MauticPlugin\RandomSmtpBundle\Model\RandomSmtpModel::class,
            ],
        ],
        'other' => [
            'mautic.plugin.randomsmtp.service.random_smtp' => [
                'class' => MauticPlugin\RandomSmtpBundle\Service\RandomSmtpService::class,
                'arguments' => [
                    '@doctrine.orm.entity_manager',
                    '%smtp_configs%',
                ],
            ],
        ],
        'controllers' => [
            'mautic.plugin.randomsmtp.controller.smtp' => [
                'class' => MauticPlugin\RandomSmtpBundle\Controller\SmtpController::class,
                'arguments' => [
                    '@mautic.plugin.randomsmtp.service.random_smtp',
                ],
            ],
        ],
    ],
];
