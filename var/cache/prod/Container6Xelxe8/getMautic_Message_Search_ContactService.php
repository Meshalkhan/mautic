<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Message_Search_ContactService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.message.search.contact' shared service.
     *
     * @return \Mautic\EmailBundle\MonitoredEmail\Search\ContactFinder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.message.search.contact'] = new \Mautic\EmailBundle\MonitoredEmail\Search\ContactFinder(($container->services['Mautic\\EmailBundle\\Entity\\StatRepository'] ?? $container->load('getStatRepository3Service')), ($container->services['Mautic\\LeadBundle\\Entity\\LeadRepository'] ?? $container->getLeadRepository2Service()), ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()));
    }
}
