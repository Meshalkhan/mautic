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

/* @bundles/ReportBundle/Event/ReportGraphEvent.php */
class __TwigTemplate_dec7fb5faea02a80ea287db971d3277f extends Template
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

class ReportGraphEvent extends AbstractReportEvent
{
    /**
     * @param mixed[] \$requestedGraphs
     */
    public function __construct(
        Report \$report,
        private array \$requestedGraphs,
        private QueryBuilder \$queryBuilder
    ) {
        \$this->report          = \$report;
        \$this->context         = \$report->getSource();
    }

    /**
     * Fetch the graphs.
     *
     * @return array
     */
    public function getGraphs()
    {
        return \$this->requestedGraphs;
    }

    /**
     * Set the graph array.
     *
     * @param string \$graph
     * @param array  \$data  prepared for this chart
     */
    public function setGraph(\$graph, \$data): void
    {
        if (!isset(\$this->requestedGraphs[\$graph]['data'])) {
            \$this->requestedGraphs[\$graph]['data'] = [];
        }
        \$this->requestedGraphs[\$graph]['data'] = \$data;
    }

    /**
     * Fetch the options array for the graph.
     *
     * @return array
     */
    public function getOptions(\$graph)
    {
        return \$this->requestedGraphs[\$graph]['options'] ?? [];
    }

    /**
     * Set an option for the graph.
     *
     * @param string \$graph
     * @param string \$key
     * @param string \$value
     */
    public function setOption(\$graph, \$key, \$value): void
    {
        if (!isset(\$this->requestedGraphs[\$graph]['options'])) {
            \$this->requestedGraphs[\$graph]['options'] = [];
        }
        \$this->requestedGraphs[\$graph]['options'][\$key] = \$value;
    }

    /**
     * Set the options for a graph.
     *
     * @param string \$graph
     * @param array  \$options
     */
    public function setOptions(\$graph, \$options): void
    {
        \$this->requestedGraphs[\$graph]['options'] = \$options;
    }

    /**
     * Get graphs that are requested.
     */
    public function getRequestedGraphs(): array
    {
        return array_keys(\$this->requestedGraphs);
    }

    /**
     * @return QueryBuilder
     */
    public function getQueryBuilder()
    {
        return \$this->queryBuilder;
    }

    public function setQueryBuilder(QueryBuilder \$queryBuilder): void
    {
        \$this->queryBuilder = \$queryBuilder;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Event/ReportGraphEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/ReportGraphEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Event\\ReportGraphEvent.php");
    }
}
