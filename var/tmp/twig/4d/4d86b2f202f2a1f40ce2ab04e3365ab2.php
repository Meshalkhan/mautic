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

/* @bundles/LeadBundle/Segment/Decorator/Date/Other/DateAnniversary.php */
class __TwigTemplate_137965581dbf69409759c0c9cbd6814c extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other;

use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionParameters;
use Mautic\\LeadBundle\\Segment\\Decorator\\DateDecorator;
use Mautic\\LeadBundle\\Segment\\Decorator\\FilterDecoratorInterface;

class DateAnniversary implements FilterDecoratorInterface
{
    public function __construct(
        private DateDecorator \$dateDecorator,
        private DateOptionParameters \$dateOptionParameters
    ) {
    }

    /**
     * @return string|null
     */
    public function getField(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        return \$this->dateDecorator->getField(\$contactSegmentFilterCrate);
    }

    public function getTable(ContactSegmentFilterCrate \$contactSegmentFilterCrate): string
    {
        return \$this->dateDecorator->getTable(\$contactSegmentFilterCrate);
    }

    public function getOperator(ContactSegmentFilterCrate \$contactSegmentFilterCrate): string
    {
        return 'like';
    }

    /**
     * @param array|string \$argument
     *
     * @return array|string
     */
    public function getParameterHolder(ContactSegmentFilterCrate \$contactSegmentFilterCrate, \$argument)
    {
        return \$this->dateDecorator->getParameterHolder(\$contactSegmentFilterCrate, \$argument);
    }

    /**
     * @return array|bool|float|string|null
     */
    public function getParameterValue(ContactSegmentFilterCrate \$contactSegmentFilterCrate): mixed
    {
        \$date           = \$this->dateOptionParameters->getDefaultDate();
        \$filter         = \$contactSegmentFilterCrate->getFilter();
        \$relativeFilter = is_string(\$filter) ? trim(str_replace(['anniversary', 'birthday'], '', \$filter)) : \$filter;

        if (\$relativeFilter) {
            \$date->modify(\$relativeFilter);
        }

        return \$date->toLocalString('%-m-d');
    }

    public function getQueryType(ContactSegmentFilterCrate \$contactSegmentFilterCrate): string
    {
        return \$this->dateDecorator->getQueryType(\$contactSegmentFilterCrate);
    }

    public function getAggregateFunc(ContactSegmentFilterCrate \$contactSegmentFilterCrate): string|bool
    {
        return \$this->dateDecorator->getAggregateFunc(\$contactSegmentFilterCrate);
    }

    /**
     * @return \\Doctrine\\DBAL\\Query\\Expression\\CompositeExpression|string|null
     */
    public function getWhere(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        return \$this->dateDecorator->getWhere(\$contactSegmentFilterCrate);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Decorator/Date/Other/DateAnniversary.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Decorator/Date/Other/DateAnniversary.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateAnniversary.php");
    }
}
