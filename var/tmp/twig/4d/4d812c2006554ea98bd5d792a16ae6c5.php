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

/* @bundles/LeadBundle/Segment/Decorator/CustomMappedDecorator.php */
class __TwigTemplate_74b788fc935bc6f9644afca3c45885db extends Template
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

use Mautic\\LeadBundle\\Exception\\FilterNotFoundException;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterOperator;
use Mautic\\LeadBundle\\Services\\ContactSegmentFilterDictionary;

class CustomMappedDecorator extends BaseDecorator implements ContactDecoratorForeignInterface
{
    public function __construct(
        ContactSegmentFilterOperator \$contactSegmentFilterOperator,
        protected ContactSegmentFilterDictionary \$dictionary
    ) {
        parent::__construct(\$contactSegmentFilterOperator);
    }

    /**
     * @return string|null
     */
    public function getField(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        \$originalField = \$contactSegmentFilterCrate->getField();

        try {
            return \$this->dictionary->getFilterProperty(\$originalField, 'field');
        } catch (FilterNotFoundException) {
            return parent::getField(\$contactSegmentFilterCrate);
        }
    }

    public function getTable(ContactSegmentFilterCrate \$contactSegmentFilterCrate): string
    {
        \$originalField = \$contactSegmentFilterCrate->getField();

        try {
            return MAUTIC_TABLE_PREFIX.\$this->dictionary->getFilterProperty(\$originalField, 'foreign_table');
        } catch (FilterNotFoundException) {
            return parent::getTable(\$contactSegmentFilterCrate);
        }
    }

    public function getQueryType(ContactSegmentFilterCrate \$contactSegmentFilterCrate): string
    {
        \$originalField = \$contactSegmentFilterCrate->getField();

        try {
            return \$this->dictionary->getFilterProperty(\$originalField, 'type');
        } catch (FilterNotFoundException) {
            return parent::getQueryType(\$contactSegmentFilterCrate);
        }
    }

    public function getAggregateFunc(ContactSegmentFilterCrate \$contactSegmentFilterCrate): string|bool
    {
        \$originalField = \$contactSegmentFilterCrate->getField();

        try {
            return \$this->dictionary->getFilterProperty(\$originalField, 'func');
        } catch (FilterNotFoundException) {
            return false;
        }
    }

    /**
     * @return \\Doctrine\\DBAL\\Query\\Expression\\CompositeExpression|string|null
     */
    public function getWhere(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        \$originalField = \$contactSegmentFilterCrate->getField();

        try {
            return \$this->dictionary->getFilterProperty(\$originalField, 'where');
        } catch (FilterNotFoundException) {
            return parent::getWhere(\$contactSegmentFilterCrate);
        }
    }

    /**
     * Get foreign table field used in JOIN condition.
     */
    public function getForeignContactColumn(ContactSegmentFilterCrate \$contactSegmentFilterCrate): string
    {
        \$originalField = \$contactSegmentFilterCrate->getField();

        try {
            return \$this->dictionary->getFilterProperty(\$originalField, 'foreign_table_field');
        } catch (FilterNotFoundException) {
            return 'lead_id';
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Decorator/CustomMappedDecorator.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Decorator/CustomMappedDecorator.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Segment\\Decorator\\CustomMappedDecorator.php");
    }
}
