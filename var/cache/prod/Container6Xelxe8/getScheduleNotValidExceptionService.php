<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScheduleNotValidExceptionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Scheduler\Exception\ScheduleNotValidException' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Scheduler\Exception\ScheduleNotValidException
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ReportBundle\\Scheduler\\Exception\\ScheduleNotValidException'] = new \Mautic\ReportBundle\Scheduler\Exception\ScheduleNotValidException();
    }
}
