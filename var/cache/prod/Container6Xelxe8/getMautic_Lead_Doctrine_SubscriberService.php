<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Lead_Doctrine_SubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.lead.doctrine.subscriber' shared service.
     *
     * @return \Mautic\LeadBundle\EventListener\DoctrineSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.lead.doctrine.subscriber'] = new \Mautic\LeadBundle\EventListener\DoctrineSubscriber(($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()));
    }
}
