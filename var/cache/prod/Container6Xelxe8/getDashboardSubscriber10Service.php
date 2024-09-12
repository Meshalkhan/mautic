<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardSubscriber10Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\EventListener\DashboardSubscriber' shared autowired service.
     *
     * @return \Mautic\ReportBundle\EventListener\DashboardSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\ReportBundle\\Model\\ReportModel'] ?? $container->load('getReportModelService'));

        if (isset($container->services['Mautic\\ReportBundle\\EventListener\\DashboardSubscriber'])) {
            return $container->services['Mautic\\ReportBundle\\EventListener\\DashboardSubscriber'];
        }

        return $container->services['Mautic\\ReportBundle\\EventListener\\DashboardSubscriber'] = new \Mautic\ReportBundle\EventListener\DashboardSubscriber($a, ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()));
    }
}
