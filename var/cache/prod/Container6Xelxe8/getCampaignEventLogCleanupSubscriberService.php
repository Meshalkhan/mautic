<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignEventLogCleanupSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\EventListener\CampaignEventLogCleanupSubscriber' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\EventListener\CampaignEventLogCleanupSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\EventListener\\CampaignEventLogCleanupSubscriber'] = new \Mautic\CampaignBundle\EventListener\CampaignEventLogCleanupSubscriber(($container->services['Mautic\\CampaignBundle\\Entity\\FailedLeadEventLogRepository'] ?? $container->load('getFailedLeadEventLogRepositoryService')));
    }
}
