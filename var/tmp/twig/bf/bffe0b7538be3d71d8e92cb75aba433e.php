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

/* @bundles/LeadBundle/Segment/Decorator/BaseDecorator.php */
class __TwigTemplate_1bf9e8568c63b2d1356a473e1a32c470 extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Decorator;

use Doctrine\\DBAL\\Query\\Expression\\CompositeExpression;
use Mautic\\LeadBundle\\Entity\\RegexTrait;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterOperator;
use Mautic\\LeadBundle\\Segment\\Query\\Filter\\BaseFilterQueryBuilder;

class BaseDecorator implements FilterDecoratorInterface
{
    use RegexTrait;

    public function __construct(
        protected ContactSegmentFilterOperator \$contactSegmentFilterOperator
    ) {
    }

    /**
     * @return string|null
     */
    public function getField(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        return \$contactSegmentFilterCrate->getField();
    }

    public function getTable(ContactSegmentFilterCrate \$contactSegmentFilterCrate): string
    {
        if (\$contactSegmentFilterCrate->isContactType()) {
            return MAUTIC_TABLE_PREFIX.'leads';
        }

        if (\$contactSegmentFilterCrate->isCompanyType()) {
            return MAUTIC_TABLE_PREFIX.'companies';
        }

        return '';
    }

    /**
     * @return string
     */
    public function getOperator(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        \$operator = \$this->contactSegmentFilterOperator->fixOperator(\$contactSegmentFilterCrate->getOperator());

        return match (\$operator) {
            'startsWith', 'endsWith', 'contains' => 'like',
            default => \$operator,
        };
    }

    public function getQueryType(ContactSegmentFilterCrate \$contactSegmentFilterCrate): string
    {
        return BaseFilterQueryBuilder::getServiceId();
    }

    /**
     * @param array|string \$argument
     *
     * @return array|string
     */
    public function getParameterHolder(ContactSegmentFilterCrate \$contactSegmentFilterCrate, \$argument)
    {
        if (is_array(\$argument)) {
            \$result = [];
            foreach (\$argument as \$arg) {
                \$result[] = \$this->getParameterHolder(\$contactSegmentFilterCrate, \$arg);
            }

            return \$result;
        }

        return ':'.\$argument;
    }

    /**
     * @return array|bool|float|string|null
     */
    public function getParameterValue(ContactSegmentFilterCrate \$contactSegmentFilterCrate): mixed
    {
        \$filter = \$contactSegmentFilterCrate->getFilter();

        if (\$contactSegmentFilterCrate->filterValueDoNotNeedAdjustment()) {
            return \$filter;
        }

        switch (\$contactSegmentFilterCrate->getOperator()) {
            case 'in':
            case '!in':
                return !is_array(\$filter) ? explode('|', \$filter) : \$filter;
            case 'like':
            case '!like':
                return !str_contains(\$filter, '%') ? '%'.\$filter.'%' : \$filter;
            case 'contains':
                return '%'.\$filter.'%';
            case 'startsWith':
                return \$filter.'%';
            case 'endsWith':
                return '%'.\$filter;
            case 'regexp':
            case '!regexp':
                return \$this->prepareRegex(\$filter);
            case 'multiselect':
            case '!multiselect':
                \$filter = (array) \$filter;

                foreach (\$filter as \$key => \$value) {
                    \$filter[\$key] = sprintf('(([|]|^)%s([|]|\$))', preg_quote(\$value, '/'));
                }

                return \$filter;
        }

        return \$filter;
    }

    public function getAggregateFunc(ContactSegmentFilterCrate \$contactSegmentFilterCrate): bool|string
    {
        return false;
    }

    /**
     * @return CompositeExpression|string|null
     */
    public function getWhere(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        return null;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Decorator/BaseDecorator.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Decorator/BaseDecorator.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Segment\\Decorator\\BaseDecorator.php");
    }
}
