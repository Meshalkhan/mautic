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

/* @bundles/LeadBundle/Event/FieldOperatorsEvent.php */
class __TwigTemplate_ff7b451de518cc709b7bc638f67dc72d extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Event;

use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * Event that collects operators for a specific field.
 */
final class FieldOperatorsEvent extends Event
{
    /**
     * \$allOperators example:
     * [
     *      '=' => [
     *          'label' => 'equals',
     *          'expr' => 'eq',
     *          'negate_expr' => 'neq',
     *      ],
     *      '!=' => [
     *          'label' => 'not equal',
     *          'expr' => 'neq',
     *          'negate_expr' => 'eq',
     *      ],
     *  ];.
     *
     * \$defaultOperators example:
     * [
     *      'equals' => '=',
     *      'not equal' => '!='
     * ]
     *
     * @param array<string, string>              \$operators
     * @param array<string,array<string,string>> \$allOperators
     */
    public function __construct(
        private string \$type,
        private string \$field,
        private array \$allOperators,
        private array \$operators
    ) {
    }

    /**
     * @return array<string,string>
     */
    public function getOperators(): array
    {
        return \$this->operators;
    }

    public function getField(): string
    {
        return \$this->field;
    }

    public function getType(): string
    {
        return \$this->type;
    }

    public function addOperator(string \$operator): void
    {
        if (isset(\$this->allOperators[\$operator])) {
            \$this->operators[\$this->allOperators[\$operator]['label']] = \$operator;
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
        return "@bundles/LeadBundle/Event/FieldOperatorsEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/FieldOperatorsEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\FieldOperatorsEvent.php");
    }
}
