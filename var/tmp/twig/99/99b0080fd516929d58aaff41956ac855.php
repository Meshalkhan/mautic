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

/* @bundles/LeadBundle/Event/LeadListQueryBuilderGeneratedEvent.php */
class __TwigTemplate_ee4fb602d46bae17e25ce78a3e56508e extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;
use Symfony\\Contracts\\EventDispatcher\\Event;

class LeadListQueryBuilderGeneratedEvent extends Event
{
    public function __construct(
        private LeadList \$segment,
        private QueryBuilder \$queryBuilder
    ) {
    }

    /**
     * @return LeadList
     */
    public function getSegment()
    {
        return \$this->segment;
    }

    /**
     * @return QueryBuilder
     */
    public function getQueryBuilder()
    {
        return \$this->queryBuilder;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/LeadListQueryBuilderGeneratedEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadListQueryBuilderGeneratedEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\LeadListQueryBuilderGeneratedEvent.php");
    }
}
