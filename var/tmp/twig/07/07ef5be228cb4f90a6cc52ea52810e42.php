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

/* @bundles/LeadBundle/Provider/TypeOperatorProvider.php */
class __TwigTemplate_f1c479b937484864541765acec813219 extends Template
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

namespace Mautic\\LeadBundle\\Provider;

use Mautic\\LeadBundle\\Entity\\OperatorListTrait;
use Mautic\\LeadBundle\\Event\\FieldOperatorsEvent;
use Mautic\\LeadBundle\\Event\\TypeOperatorsEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

final class TypeOperatorProvider implements TypeOperatorProviderInterface
{
    use OperatorListTrait;

    /**
     * @var array<string,mixed[]>
     */
    private array \$cachedTypeOperators = [];

    /**
     * @var array<string,mixed[]>
     */
    private array \$cachedTypeOperatorsChoices = [];

    public function __construct(
        private EventDispatcherInterface \$dispatcher,
        private FilterOperatorProviderInterface \$filterOperatorProvider
    ) {
    }

    public function getOperatorsIncluding(array \$operators): array
    {
        return \$this->getOperatorChoiceList(['include' => \$operators]);
    }

    public function getOperatorsExcluding(array \$operators): array
    {
        return \$this->getOperatorChoiceList(['exclude' => \$operators]);
    }

    public function getOperatorsForFieldType(string \$fieldType): array
    {
        // If we already processed this
        if (isset(\$this->cachedTypeOperatorsChoices[\$fieldType])) {
            return \$this->cachedTypeOperatorsChoices[\$fieldType];
        }

        \$typeOperators = \$this->getAllTypeOperators();

        if (array_key_exists(\$fieldType, \$typeOperators)) {
            \$this->cachedTypeOperatorsChoices[\$fieldType] = \$this->getOperatorChoiceList(\$typeOperators[\$fieldType]);
        } else {
            \$this->cachedTypeOperatorsChoices[\$fieldType] = \$this->getOperatorChoiceList(\$typeOperators['default']);
        }

        return \$this->cachedTypeOperatorsChoices[\$fieldType];
    }

    public function getAllTypeOperators(): array
    {
        if (empty(\$this->cachedTypeOperators)) {
            \$event = new TypeOperatorsEvent();

            \$this->dispatcher->dispatch(\$event, LeadEvents::COLLECT_OPERATORS_FOR_FIELD_TYPE);

            \$this->cachedTypeOperators = \$event->getOperatorsForAllFieldTypes();
        }

        return \$this->cachedTypeOperators;
    }

    /**
     * This method will add the default operators for the \$type like the getOperatorsForFieldType() method
     * but also allows plugins to add more operators.
     *
     * @return array<string,string>
     */
    public function getOperatorsForField(string \$type, string \$field): array
    {
        \$event = new FieldOperatorsEvent(
            \$type,
            \$field,
            \$this->filterOperatorProvider->getAllOperators(),
            \$this->getOperatorsForFieldType(\$type)
        );

        \$this->dispatcher->dispatch(\$event, LeadEvents::COLLECT_OPERATORS_FOR_FIELD);

        return \$event->getOperators();
    }

    /**
     * Overwriting deprecated method from OperatorListTrait.
     *
     * @param string \$operator
     *
     * @return array<string,mixed[]>
     */
    public function getFilterExpressionFunctions(\$operator = null)
    {
        \$operatorOptions = \$this->filterOperatorProvider->getAllOperators();

        return (null === \$operator) ? \$operatorOptions : \$operatorOptions[\$operator];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Provider/TypeOperatorProvider.php";
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
        return new Source("", "@bundles/LeadBundle/Provider/TypeOperatorProvider.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Provider\\TypeOperatorProvider.php");
    }
}
