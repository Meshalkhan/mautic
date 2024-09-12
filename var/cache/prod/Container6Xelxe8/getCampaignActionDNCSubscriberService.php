<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCampaignActionDNCSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\CampaignActionDNCSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\CampaignActionDNCSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\CampaignActionDNCSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\CampaignActionDNCSubscriber'];
        }

        return $container->services['Mautic\\LeadBundle\\EventListener\\CampaignActionDNCSubscriber'] = new \Mautic\LeadBundle\EventListener\CampaignActionDNCSubscriber(($container->services['Mautic\\LeadBundle\\Model\\DoNotContact'] ?? $container->getDoNotContactService()), $a);
    }
}
