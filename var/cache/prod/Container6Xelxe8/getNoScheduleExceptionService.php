<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNoScheduleExceptionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Scheduler\Exception\NoScheduleException' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Scheduler\Exception\NoScheduleException
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ReportBundle\\Scheduler\\Exception\\NoScheduleException'] = new \Mautic\ReportBundle\Scheduler\Exception\NoScheduleException();
    }
}
