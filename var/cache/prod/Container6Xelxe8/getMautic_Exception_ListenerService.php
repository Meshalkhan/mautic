<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Exception_ListenerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.exception.listener' shared service.
     *
     * @return \Mautic\CoreBundle\EventListener\ExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['mautic.exception.listener'])) {
            return $container->services['mautic.exception.listener'];
        }

        return $container->services['mautic.exception.listener'] = new \Mautic\CoreBundle\EventListener\ExceptionListener($a, 'Mautic\\CoreBundle\\Controller\\ExceptionController::showAction', ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()));
    }
}
