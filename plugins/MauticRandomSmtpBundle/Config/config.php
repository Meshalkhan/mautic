<?php

return [
    'name'        => 'Mautic Random Smtp Bundle',
    'description' => 'Random Smtp integration for Mautic',
    'author'      => 'metaklonesolutions.com',
    'version'     => '1.0.0',
    'routes' => [
    'main' => [
        'mautic_random_smtp_action' => [
            'path'       => '/random-smtp/preview',
            'controller' => \MauticPlugin\MauticRandomSmtpBundle\Controller\RandomSmtpController::class . '::previewAction',
        ],
    ],
],
    'services' => [
        'forms'   => [],
        'helpers' => [],
        'other'   => [
            'mautic.transport.random' => [
                'class'        => \MauticPlugin\MauticRandomSmtpBundle\Swiftmailer\Transport\RandomSmtpTransport::class,
                'arguments' => [
                    'mautic.random.smtp.randomizer',
                    'monolog.logger.mautic',
                ],
                'tag'          => 'mautic.email_transport',
                'tagArguments' => [
                    'alias' => 'mautic.email.config.mailer_transport.random_smtp', // Use a string instead of TransportType::TRANSPORT_ALIAS
                ],
            ],
            'mautic.random.smtp.randomizer' => [
                'class'        => \MauticPlugin\MauticRandomSmtpBundle\Randomizer\SmtpRandomizer::class,
                'arguments' => [
                    'mautic.helper.integration',
                ],
            ],
        ],
        'models'       => [],
        'integrations' => [
            'mautic.integration.random_smtp' => [
                'class' => \MauticPlugin\MauticRandomSmtpBundle\Integration\RandomSmtpIntegration::class,
            ],
        ],
    ],
    'menu'       => [],
    'parameters' => [],
];
