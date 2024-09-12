<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReportModelService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Model\ReportModel' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Model\ReportModel
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());

        if (isset($container->services['Mautic\\ReportBundle\\Model\\ReportModel'])) {
            return $container->services['Mautic\\ReportBundle\\Model\\ReportModel'];
        }
        $b = ($container->services['mautic.channel.helper.channel_list'] ?? $container->getMautic_Channel_Helper_ChannelListService());

        if (isset($container->services['Mautic\\ReportBundle\\Model\\ReportModel'])) {
            return $container->services['Mautic\\ReportBundle\\Model\\ReportModel'];
        }
        $c = ($container->services['Mautic\\LeadBundle\\Model\\FieldModel'] ?? $container->getFieldModel2Service());

        if (isset($container->services['Mautic\\ReportBundle\\Model\\ReportModel'])) {
            return $container->services['Mautic\\ReportBundle\\Model\\ReportModel'];
        }
        $d = ($container->services['mautic.report.helper.report'] ?? $container->load('getMautic_Report_Helper_ReportService'));

        if (isset($container->services['Mautic\\ReportBundle\\Model\\ReportModel'])) {
            return $container->services['Mautic\\ReportBundle\\Model\\ReportModel'];
        }
        $e = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['Mautic\\ReportBundle\\Model\\ReportModel'])) {
            return $container->services['Mautic\\ReportBundle\\Model\\ReportModel'];
        }
        $f = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['Mautic\\ReportBundle\\Model\\ReportModel'])) {
            return $container->services['Mautic\\ReportBundle\\Model\\ReportModel'];
        }
        $g = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\ReportBundle\\Model\\ReportModel'])) {
            return $container->services['Mautic\\ReportBundle\\Model\\ReportModel'];
        }

        return $container->services['Mautic\\ReportBundle\\Model\\ReportModel'] = new \Mautic\ReportBundle\Model\ReportModel(($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), $a, $b, $c, $d, ($container->services['Mautic\\ReportBundle\\Model\\CsvExporter'] ?? $container->load('getCsvExporterService')), ($container->services['Mautic\\ReportBundle\\Model\\ExcelExporter'] ?? $container->load('getExcelExporterService')), $e, ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $f, $g, ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()), ($container->services['monolog.logger.mautic'] ?? $container->getMonolog_Logger_MauticService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
