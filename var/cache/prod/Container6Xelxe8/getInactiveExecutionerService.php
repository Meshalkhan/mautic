<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInactiveExecutionerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Executioner\InactiveExecutioner' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Executioner\InactiveExecutioner
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Executioner\\InactiveExecutioner'] = new \Mautic\CampaignBundle\Executioner\InactiveExecutioner(($container->services['mautic.campaign.contact_finder.inactive'] ?? $container->load('getMautic_Campaign_ContactFinder_InactiveService')), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.campaign.scheduler'] ?? $container->load('getMautic_Campaign_SchedulerService')), ($container->services['mautic.campaign.helper.inactivity'] ?? $container->load('getMautic_Campaign_Helper_InactivityService')), ($container->services['mautic.campaign.event_executioner'] ?? $container->load('getMautic_Campaign_EventExecutionerService')));
    }
}
