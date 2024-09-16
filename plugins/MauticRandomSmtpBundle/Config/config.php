<?php

return [
    'name'        => 'Mautic Random Smtp Bundle',
    'description' => 'Random Smtp integration for Mautic',
    'author'      => 'metaklonesolutions.com',
    'version'     => '1.0.0',
    'routes' => [
        'main' => [
            'mautic_random_smtp_preview' => [
                'path'       => '/random-smtp/preview',
                'controller' => \MauticPlugin\MauticRandomSmtpBundle\Controller\RandomSmtpController::class . '::previewAction',
            ],
        ],
    ],
    'services' => [
        'forms' => [
            'MauticPlugin\MauticRandomSmtpBundle\Form\Type\SmtpPreviewType' => [
                'arguments' => [
                    '@Mautic\PluginBundle\Helper\IntegrationHelper',
                ],
            ],
        ],
        'helpers' => [],
        'other'   => [
            'mautic.transport.random' => [
                'class'        => \MauticPlugin\MauticRandomSmtpBundle\Swiftmailer\Transport\RandomSmtpTransport::class,
                'arguments'    => [
                    '@mautic.random.smtp.randomizer',
                    '@monolog.logger.mautic',
                ],
                'tags'         => [
                    [
                        'name' => 'mautic.email_transport',
                        'alias' => 'mautic.email.config.mailer_transport.random_smtp',
                    ],
                ],
            ],
            'mautic.random.smtp.randomizer' => [
                'class'        => \MauticPlugin\MauticRandomSmtpBundle\Randomizer\SmtpRandomizer::class,
                'arguments'    => [
                    '@mautic.helper.integration',
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

