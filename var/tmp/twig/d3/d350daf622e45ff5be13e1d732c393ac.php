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

/* @bundles/ReportBundle/Adapter/ReportDataAdapter.php */
class __TwigTemplate_0ab11f1c97679663167d72088f1ca2f2 extends Template
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

namespace Mautic\\ReportBundle\\Adapter;

use Mautic\\ReportBundle\\Crate\\ReportDataResult;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Model\\ReportExportOptions;
use Mautic\\ReportBundle\\Model\\ReportModel;

class ReportDataAdapter
{
    public function __construct(
        private ReportModel \$reportModel
    ) {
    }

    public function getReportData(Report \$report, ReportExportOptions \$reportExportOptions): ReportDataResult
    {
        \$options                    = [];
        \$options['paginate']        = true;
        \$options['limit']           = \$reportExportOptions->getBatchSize();
        \$options['ignoreGraphData'] = true;
        \$options['page']            = \$reportExportOptions->getPage();
        \$options['dateTo']          = \$reportExportOptions->getDateTo();
        \$options['dateFrom']        = \$reportExportOptions->getDateFrom();

        \$data = \$this->reportModel->getReportData(\$report, null, \$options);

        return new ReportDataResult(\$data);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Adapter/ReportDataAdapter.php";
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
        return new Source("", "@bundles/ReportBundle/Adapter/ReportDataAdapter.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Adapter\\ReportDataAdapter.php");
    }
}
