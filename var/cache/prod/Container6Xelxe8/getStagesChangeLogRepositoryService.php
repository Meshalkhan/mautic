<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStagesChangeLogRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Entity\StagesChangeLogRepository' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Entity\StagesChangeLogRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Entity\\StagesChangeLogRepository'] = new \Mautic\LeadBundle\Entity\StagesChangeLogRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
