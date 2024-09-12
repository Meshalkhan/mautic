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

/* @bundles/ReportBundle/Event/ReportEvent.php */
class __TwigTemplate_2b2f5280fbec535772d3d88989cd7fc7 extends Template
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

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\ReportBundle\\Entity\\Report;

class ReportEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Report \$report, \$isNew = false)
    {
        \$this->entity = \$report;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Report entity.
     *
     * @return Report
     */
    public function getReport()
    {
        return \$this->entity;
    }

    /**
     * Sets the Report entity.
     */
    public function setReport(Report \$report): void
    {
        \$this->entity = \$report;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Event/ReportEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/ReportEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Event\\ReportEvent.php");
    }
}
