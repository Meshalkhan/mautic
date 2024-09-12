<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosOauthServer_CreateClientCommandService extends AppKernelProdContainer
{
    /*
     * Gets the private 'fos_oauth_server.create_client_command' shared service.
     *
     * @return \FOS\OAuthServerBundle\Command\CreateClientCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['fos_oauth_server.create_client_command'] = $instance = new \FOS\OAuthServerBundle\Command\CreateClientCommand(($container->privates['fos_oauth_server.client_manager.default'] ?? $container->load('getFosOauthServer_ClientManager_DefaultService')));

        $instance->setName('fos:oauth-server:create-client');

        return $instance;
    }
}
