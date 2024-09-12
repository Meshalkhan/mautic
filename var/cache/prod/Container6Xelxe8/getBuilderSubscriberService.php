<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuilderSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\AssetBundle\EventListener\BuilderSubscriber' shared autowired service.
     *
     * @return \Mautic\AssetBundle\EventListener\BuilderSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\AssetBundle\\Helper\\TokenHelper'] ?? $container->getTokenHelperService());

        if (isset($container->services['Mautic\\AssetBundle\\EventListener\\BuilderSubscriber'])) {
            return $container->services['Mautic\\AssetBundle\\EventListener\\BuilderSubscriber'];
        }
        $b = ($container->services['mautic.tracker.contact'] ?? $container->getMautic_Tracker_ContactService());

        if (isset($container->services['Mautic\\AssetBundle\\EventListener\\BuilderSubscriber'])) {
            return $container->services['Mautic\\AssetBundle\\EventListener\\BuilderSubscriber'];
        }
        $c = ($container->services['mautic.helper.token_builder.factory'] ?? $container->load('getMautic_Helper_TokenBuilder_FactoryService'));

        if (isset($container->services['Mautic\\AssetBundle\\EventListener\\BuilderSubscriber'])) {
            return $container->services['Mautic\\AssetBundle\\EventListener\\BuilderSubscriber'];
        }

        return $container->services['Mautic\\AssetBundle\\EventListener\\BuilderSubscriber'] = new \Mautic\AssetBundle\EventListener\BuilderSubscriber(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $a, $b, $c);
    }
}
