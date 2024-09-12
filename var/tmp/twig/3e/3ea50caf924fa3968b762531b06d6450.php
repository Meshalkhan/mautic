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

/* @bundles/LeadBundle/Entity/ExpressionHelperTrait.php */
class __TwigTemplate_3f2ab530c3f9f74f11db809c463c9cb0 extends Template
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

namespace Mautic\\LeadBundle\\Entity;

use Doctrine\\DBAL\\Query\\Expression\\CompositeExpression;
use Doctrine\\DBAL\\Query\\QueryBuilder;

trait ExpressionHelperTrait
{
    /**
     * @param QueryBuilder|\\Doctrine\\ORM\\QueryBuilder \$q
     * @param                                         \$includeIsNull true/false or null to auto determine based on operator
     *
     * @return mixed
     */
    public function generateFilterExpression(\$q, \$column, \$operator, \$parameter, \$includeIsNull, CompositeExpression \$appendTo = null)
    {
        // in/notIn for dbal will use a raw array
        if (!is_array(\$parameter) && !str_starts_with(\$parameter, ':')) {
            \$parameter = \":\$parameter\";
        }

        if (null === \$includeIsNull) {
            // Auto determine based on negate operators
            \$includeIsNull = in_array(\$operator, ['neq', 'notLike', 'notIn']);
        }

        if (\$includeIsNull) {
            \$expr = \$q->expr()->or(
                \$q->expr()->\$operator(\$column, \$parameter),
                \$q->expr()->isNull(\$column)
            );
        } else {
            \$expr = \$q->expr()->\$operator(\$column, \$parameter);
        }

        if (\$appendTo) {
            return \$appendTo->with(\$expr);
        }

        return \$expr;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Entity/ExpressionHelperTrait.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/ExpressionHelperTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Entity\\ExpressionHelperTrait.php");
    }
}
