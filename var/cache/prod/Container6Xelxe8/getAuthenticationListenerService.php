<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthenticationListenerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\Security\Firewall\AuthenticationListener' shared service.
     *
     * @return \Mautic\UserBundle\Security\Firewall\AuthenticationListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\UserBundle\\Security\\Firewall\\AuthenticationListener'] = new \Mautic\UserBundle\Security\Firewall\AuthenticationListener(($container->services['mautic.security.authentication_handler'] ?? $container->load('getMautic_Security_AuthenticationHandlerService')), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['security.authentication.manager'] ?? $container->load('getSecurity_Authentication_ManagerService')), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), '', ($container->services['Mautic\\UserBundle\\Entity\\PermissionRepository'] ?? $container->getPermissionRepositoryService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
