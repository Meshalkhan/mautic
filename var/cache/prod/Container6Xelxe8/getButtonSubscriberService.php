<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getButtonSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticClearbitBundle\EventListener\ButtonSubscriber' shared autowired service.
     *
     * @return \MauticPlugin\MauticClearbitBundle\EventListener\ButtonSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService());

        if (isset($container->services['MauticPlugin\\MauticClearbitBundle\\EventListener\\ButtonSubscriber'])) {
            return $container->services['MauticPlugin\\MauticClearbitBundle\\EventListener\\ButtonSubscriber'];
        }
        $b = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['MauticPlugin\\MauticClearbitBundle\\EventListener\\ButtonSubscriber'])) {
            return $container->services['MauticPlugin\\MauticClearbitBundle\\EventListener\\ButtonSubscriber'];
        }

        return $container->services['MauticPlugin\\MauticClearbitBundle\\EventListener\\ButtonSubscriber'] = new \MauticPlugin\MauticClearbitBundle\EventListener\ButtonSubscriber($a, ($container->services['translator'] ?? $container->getTranslator2Service()), $b);
    }
}
