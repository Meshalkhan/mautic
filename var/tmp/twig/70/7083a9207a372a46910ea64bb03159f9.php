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

/* @bundles/LeadBundle/Segment/Query/Filter/BaseFilterQueryBuilder.php */
class __TwigTemplate_cfeeb2c8bcb5c1ebfbd983795ce10f25 extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Query\\Filter;

use Mautic\\LeadBundle\\Event\\SegmentOperatorQueryBuilderEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilter;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;
use Mautic\\LeadBundle\\Segment\\RandomParameterName;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class BaseFilterQueryBuilder implements FilterQueryBuilderInterface
{
    public function __construct(
        private RandomParameterName \$parameterNameGenerator,
        private EventDispatcherInterface \$dispatcher
    ) {
    }

    public static function getServiceId(): string
    {
        return 'mautic.lead.query.builder.basic';
    }

    public function applyQuery(QueryBuilder \$queryBuilder, ContactSegmentFilter \$filter): QueryBuilder
    {
        // Check if the column exists in the table
        \$filter->getColumn();

        \$filterParameters = \$filter->getParameterValue();

        if (is_array(\$filterParameters)) {
            \$parameters = [];
            foreach (\$filterParameters as \$filterParameter) {
                \$parameters[] = \$this->generateRandomParameterName();
            }
        } else {
            \$parameters = \$this->generateRandomParameterName();
        }

        \$event = new SegmentOperatorQueryBuilderEvent(\$queryBuilder, \$filter, \$filter->getParameterHolder(\$parameters));
        \$this->dispatcher->dispatch(\$event, LeadEvents::LIST_FILTERS_OPERATOR_QUERYBUILDER_ON_GENERATE);

        if (!\$event->wasOperatorHandled()) {
            throw new \\Exception('Dunno how to handle operator \"'.\$filter->getOperator().'\"');
        }

        \$queryBuilder->setParametersPairs(\$parameters, \$filterParameters);

        return \$queryBuilder;
    }

    /**
     * @param RandomParameterName \$parameterNameGenerator
     *
     * @return BaseFilterQueryBuilder
     */
    public function setParameterNameGenerator(\$parameterNameGenerator)
    {
        \$this->parameterNameGenerator = \$parameterNameGenerator;

        return \$this;
    }

    protected function generateRandomParameterName(): string
    {
        return \$this->parameterNameGenerator->generateRandomParameterName();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Query/Filter/BaseFilterQueryBuilder.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Query/Filter/BaseFilterQueryBuilder.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Segment\\Query\\Filter\\BaseFilterQueryBuilder.php");
    }
}
