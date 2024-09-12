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

/* @bundles/LeadBundle/Event/LeadListFiltersOperatorsEvent.php */
class __TwigTemplate_8a152cb70d0f5501cf967b14b5903e15 extends Template
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

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class LeadListFiltersOperatorsEvent extends CommonEvent
{
    /**
     * @deprecated to be removed in Mautic 3
     *
     * @param array               \$operators  @deprecated to be removed in Mautic 3. Subscribe operators instead.
     * @param TranslatorInterface \$translator @deprecated to be removed in Mautic 3
     */
    public function __construct(
        protected \$operators,
        protected TranslatorInterface \$translator
    ) {
    }

    /**
     * @return array
     */
    public function getOperators()
    {
        return \$this->operators;
    }

    /**
     * @deprecated to be removed in Mautic 3. Use DI instead.
     *
     * @return TranslatorInterface
     */
    public function getTranslator()
    {
        return \$this->translator;
    }

    /**
     * Add a new operator for list filters
     * Please refer to OperatorListTrait.php, inside getFilterExpressionFunctions method, for examples of operators.
     *
     * @see OperatorListTrait
     *
     * @param string \$operatorKey
     * @param array  \$operatorConfig
     */
    public function addOperator(\$operatorKey, \$operatorConfig): void
    {
        if (!array_key_exists(\$operatorKey, \$this->operators)) {
            \$this->operators[\$operatorKey] = \$operatorConfig;
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
        return "@bundles/LeadBundle/Event/LeadListFiltersOperatorsEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadListFiltersOperatorsEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\LeadListFiltersOperatorsEvent.php");
    }
}
