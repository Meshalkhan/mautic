<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFailedLeadEventLogRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Entity\FailedLeadEventLogRepository' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Entity\FailedLeadEventLogRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Entity\\FailedLeadEventLogRepository'] = new \Mautic\CampaignBundle\Entity\FailedLeadEventLogRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
