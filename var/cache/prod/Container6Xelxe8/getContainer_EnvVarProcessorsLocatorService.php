<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContainer_EnvVarProcessorsLocatorService extends AppKernelProdContainer
{
    /*
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'intNullable' => ['services', 'mautic.di.env_processor.int_nullable', 'getMautic_Di_EnvProcessor_IntNullableService', true],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'mailer' => ['services', 'mautic.di.env_processor.mailerdsn', 'getMautic_Di_EnvProcessor_MailerdsnService', true],
            'mauticconst' => ['services', 'mautic.di.env_processor.mauticconst', 'getMautic_Di_EnvProcessor_MauticconstService', true],
            'messenger-nullable' => ['privates', 'Mautic\\MessengerBundle\\DependencyInjection\\EnvProcessor\\MessengerNullableEnvVarProcessor', 'getMessengerNullableEnvVarProcessorService', true],
            'not' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'nullable' => ['services', 'mautic.di.env_processor.nullable', 'getMautic_Di_EnvProcessor_NullableService', true],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', true],
            'urlencoded-dsn' => ['services', 'mautic.di.env_processor.mailerdsn', 'getMautic_Di_EnvProcessor_MailerdsnService', true],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'intNullable' => '?',
            'json' => '?',
            'key' => '?',
            'mailer' => '?',
            'mauticconst' => '?',
            'messenger-nullable' => '?',
            'not' => '?',
            'nullable' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
            'urlencoded-dsn' => '?',
        ]);
    }
}
