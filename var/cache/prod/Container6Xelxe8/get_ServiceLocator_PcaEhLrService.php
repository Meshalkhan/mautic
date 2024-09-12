<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PcaEhLrService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.PcaEhLr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PcaEhLr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dateBuilder' => ['services', 'mautic.report.model.scheduler_date_builder', 'getMautic_Report_Model_SchedulerDateBuilderService', true],
        ], [
            'dateBuilder' => '?',
        ]);
    }
}
