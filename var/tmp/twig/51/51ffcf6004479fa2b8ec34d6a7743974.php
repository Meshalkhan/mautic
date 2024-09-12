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

/* @bundles/ReportBundle/Model/ReportFileWriter.php */
class __TwigTemplate_36842c7b3c2e14e9312fce58e5a8a811 extends Template
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

namespace Mautic\\ReportBundle\\Model;

use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\ReportBundle\\Crate\\ReportDataResult;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Exception\\FileIOException;

class ReportFileWriter
{
    public function __construct(
        private CsvExporter \$csvExporter,
        private ExportHandler \$exportHandler
    ) {
    }

    /**
     * @throws FileIOException
     */
    public function writeReportData(Scheduler \$scheduler, ReportDataResult \$reportDataResult, ReportExportOptions \$reportExportOptions): void
    {
        \$fileName = \$this->getFileName(\$scheduler);
        \$handler  = \$this->exportHandler->getHandler(\$fileName);
        \$this->csvExporter->export(\$reportDataResult, \$handler, \$reportExportOptions->getPage());
        \$this->exportHandler->closeHandler(\$handler);
    }

    public function clear(Scheduler \$scheduler): void
    {
        \$fileName = \$this->getFileName(\$scheduler);
        \$this->exportHandler->removeFile(\$fileName);
    }

    /**
     * @throws FileIOException
     */
    public function getFilePath(Scheduler \$scheduler): string
    {
        \$fileName = \$this->getFileName(\$scheduler);

        return \$this->exportHandler->getPath(\$fileName);
    }

    private function getFileName(Scheduler \$scheduler): string
    {
        \$date       = \$scheduler->getScheduleDate();
        \$dateString = \$date->format('Y-m-d');
        \$reportName = \$scheduler->getReport()->getName();

        return \$dateString.'_'.InputHelper::alphanum(\$reportName, false, '-');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Model/ReportFileWriter.php";
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
        return new Source("", "@bundles/ReportBundle/Model/ReportFileWriter.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Model\\ReportFileWriter.php");
    }
}
