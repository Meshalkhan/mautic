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

/* @bundles/ReportBundle/Event/ReportDataEvent.php */
class __TwigTemplate_78d0abc1ce27ca86022f553205c12629 extends Template
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

namespace Mautic\\ReportBundle\\Event;

use Mautic\\ReportBundle\\Entity\\Report;

class ReportDataEvent extends AbstractReportEvent
{
    private int \$totalResults;

    public function __construct(
        Report \$report,
        private array \$data,
        \$totalResults,
        private array \$options
    ) {
        \$this->context      = \$report->getSource();
        \$this->report       = \$report;
        \$this->totalResults = (int) \$totalResults;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return \$this->data;
    }

    /**
     * @param array \$data
     */
    public function setData(\$data): void
    {
        \$this->data = \$data;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return \$this->options;
    }

    public function getTotalResults(): int
    {
        return \$this->totalResults;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Event/ReportDataEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/ReportDataEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Event\\ReportDataEvent.php");
    }
}
