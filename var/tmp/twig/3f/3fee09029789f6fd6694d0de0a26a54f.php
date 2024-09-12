<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @bundles/ReportBundle/Config/services.php */
class __TwigTemplate_51cc49cc61cb42f8dfdf0836e92fb42d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php

declare(strict_types=1);

use Mautic\\CoreBundle\\DependencyInjection\\MauticCoreExtension;
use Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator;

return function (ContainerConfigurator \$configurator): void {
    \$services = \$configurator->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
        ->public();

    \$excludes = [
        'Generator',
        'Builder/MauticReportBuilder.php',
        'Form/DataTransformer/ReportFilterDataTransformer.php',
        'Scheduler/Entity',
        'Scheduler/Option',
    ];

    \$services->load('Mautic\\\\ReportBundle\\\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, \$excludes)).'}');

    \$services->load('Mautic\\\\ReportBundle\\\\Entity\\\\', '../Entity/*Repository.php');

    \$services->alias('mautic.report.model.report', Mautic\\ReportBundle\\Model\\ReportModel::class);
    \$services->alias('mautic.report.model.csv_exporter', Mautic\\ReportBundle\\Model\\CsvExporter::class);
    \$services->alias('mautic.report.model.excel_exporter', Mautic\\ReportBundle\\Model\\ExcelExporter::class);
    \$services->alias('mautic.report.model.report_exporter', Mautic\\ReportBundle\\Model\\ReportExporter::class);
    \$services->alias('mautic.report.model.schedule_model', Mautic\\ReportBundle\\Model\\ScheduleModel::class);
    \$services->alias('mautic.report.model.report_export_options', Mautic\\ReportBundle\\Model\\ReportExportOptions::class);
    \$services->alias('mautic.report.model.report_file_writer', Mautic\\ReportBundle\\Model\\ReportFileWriter::class);
    \$services->alias('mautic.report.model.export_handler', Mautic\\ReportBundle\\Model\\ExportHandler::class);
};
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Config/services.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/ReportBundle/Config/services.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Config\\services.php");
    }
}
