<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/LeadBundle/Segment/Decorator/FilterDecoratorInterface.php */
class __TwigTemplate_a4e585634d8fba6add24617daedc64bd extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\LeadBundle\\Segment\\Decorator;

use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;

interface FilterDecoratorInterface
{
    /**
     * Returns filter's field (usually a column name in DB).
     *
     * @return string|null
     */
    public function getField(ContactSegmentFilterCrate \$contactSegmentFilterCrate);

    /**
     * Returns DB table.
     *
     * @return string
     */
    public function getTable(ContactSegmentFilterCrate \$contactSegmentFilterCrate);

    /**
     * Returns a string operator (like, eq, neq, ...).
     *
     * @return string
     */
    public function getOperator(ContactSegmentFilterCrate \$contactSegmentFilterCrate);

    /**
     * Returns an argument for QueryBuilder (usually ':arg' in case that \$argument is equal to 'arg' string.
     *
     * @param array|string \$argument
     *
     * @return array|string
     */
    public function getParameterHolder(ContactSegmentFilterCrate \$contactSegmentFilterCrate, \$argument);

    /**
     * Returns formatted value for QueryBuilder ('%value%' for 'like', '%value' for 'Ends with', SQL-formatted date etc.).
     *
     * @return array|bool|float|string|null
     */
    public function getParameterValue(ContactSegmentFilterCrate \$contactSegmentFilterCrate);

    /**
     * Returns QueryBuilder's service name from the container.
     *
     * @return string
     */
    public function getQueryType(ContactSegmentFilterCrate \$contactSegmentFilterCrate);

    /**
     * Returns a name of aggregation function for SQL (SUM, COUNT etc.)
     * Returns false if no aggregation function is needed.
     *
     * @return string|bool if no func needed
     */
    public function getAggregateFunc(ContactSegmentFilterCrate \$contactSegmentFilterCrate): string|bool;

    /**
     * Returns a special where condition which is needed to be added to QueryBuilder (like email_stats.is_read = 1 for 'Read emails')
     * Returns null if no special condition is needed.
     *
     * @return \\Doctrine\\DBAL\\Query\\Expression\\CompositeExpression|string|null
     */
    public function getWhere(ContactSegmentFilterCrate \$contactSegmentFilterCrate);
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/Segment/Decorator/FilterDecoratorInterface.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/LeadBundle/Segment/Decorator/FilterDecoratorInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Segment\\Decorator\\FilterDecoratorInterface.php");
    }
}
