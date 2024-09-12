<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ApiBundle\Model\ClientModel' shared autowired service.
     *
     * @return \Mautic\ApiBundle\Model\ClientModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['Mautic\\ApiBundle\\Model\\ClientModel'])) {
            return $container->services['Mautic\\ApiBundle\\Model\\ClientModel'];
        }
        $b = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\ApiBundle\\Model\\ClientModel'])) {
            return $container->services['Mautic\\ApiBundle\\Model\\ClientModel'];
        }

        return $container->services['Mautic\\ApiBundle\\Model\\ClientModel'] = new \Mautic\ApiBundle\Model\ClientModel(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['mautic.permission.manager'] ?? $container->getMautic_Permission_ManagerService()), ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $a, $b, ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
