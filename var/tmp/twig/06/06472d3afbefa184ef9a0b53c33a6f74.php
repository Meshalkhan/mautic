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

/* @bundles/LeadBundle/Provider/FilterOperatorProvider.php */
class __TwigTemplate_c4abea7a6cfad361b60393dd2df12785 extends Template
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

use Mautic\\LeadBundle\\Event\\LeadListFiltersOperatorsEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

final class FilterOperatorProvider implements FilterOperatorProviderInterface
{
    /**
     * @var mixed[]
     */
    private array \$cachedOperators = [];

    public function __construct(
        private EventDispatcherInterface \$dispatcher,
        private TranslatorInterface \$translator
    ) {
    }

    /**
     * @return mixed[]
     */
    public function getAllOperators(): array
    {
        if (empty(\$this->cachedOperators)) {
            \$event = new LeadListFiltersOperatorsEvent([], \$this->translator);

            \$this->dispatcher->dispatch(\$event, LeadEvents::LIST_FILTERS_OPERATORS_ON_GENERATE);

            \$this->cachedOperators = \$this->translateOperatorLabels(\$event->getOperators());
        }

        return \$this->cachedOperators;
    }

    /**
     * @param mixed[] \$operators
     *
     * @return mixed[]
     */
    private function translateOperatorLabels(array \$operators): array
    {
        foreach (\$operators as \$key => \$operatorSettings) {
            \$operators[\$key]['label'] = \$this->translator->trans(\$operatorSettings['label']);
        }

        return \$operators;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Provider/FilterOperatorProvider.php";
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
        return new Source("", "@bundles/LeadBundle/Provider/FilterOperatorProvider.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Provider\\FilterOperatorProvider.php");
    }
}
