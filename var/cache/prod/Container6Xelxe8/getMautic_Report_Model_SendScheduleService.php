<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Report_Model_SendScheduleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.report.model.send_schedule' shared service.
     *
     * @return \Mautic\ReportBundle\Scheduler\Model\SendSchedule
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\EmailBundle\\Helper\\MailHelper'] ?? $container->getMailHelperService());

        if (isset($container->services['mautic.report.model.send_schedule'])) {
            return $container->services['mautic.report.model.send_schedule'];
        }
        $b = ($container->services['mautic.report.model.message_schedule'] ?? $container->load('getMautic_Report_Model_MessageScheduleService'));

        if (isset($container->services['mautic.report.model.send_schedule'])) {
            return $container->services['mautic.report.model.send_schedule'];
        }
        $c = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['mautic.report.model.send_schedule'])) {
            return $container->services['mautic.report.model.send_schedule'];
        }

        return $container->services['mautic.report.model.send_schedule'] = new \Mautic\ReportBundle\Scheduler\Model\SendSchedule($a, $b, ($container->services['mautic.report.model.file_handler'] ?? $container->load('getMautic_Report_Model_FileHandlerService')), $c);
    }
}
