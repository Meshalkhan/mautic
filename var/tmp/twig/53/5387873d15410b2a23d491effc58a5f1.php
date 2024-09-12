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

/* @bundles/ReportBundle/Event/ReportQueryEvent.php */
class __TwigTemplate_8960eb578002f29400d78d2d1aa9c0d9 extends Template
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

use Doctrine\\DBAL\\Query\\QueryBuilder;
use Mautic\\ReportBundle\\Entity\\Report;

class ReportQueryEvent extends AbstractReportEvent
{
    private int \$totalResults;

    public function __construct(
        Report \$report,
        private QueryBuilder \$query,
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
    public function getQuery()
    {
        return \$this->query;
    }

    /**
     * @param QueryBuilder \$query
     */
    public function setQuery(\$query): void
    {
        \$this->query = \$query;
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
        return "@bundles/ReportBundle/Event/ReportQueryEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/ReportQueryEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Event\\ReportQueryEvent.php");
    }
}
