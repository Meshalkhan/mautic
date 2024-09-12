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

/* @bundles/LeadBundle/Segment/Decorator/DecoratorFactory.php */
class __TwigTemplate_48b14cfcc73134f0632573f90a95b400 extends Template
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

use Mautic\\LeadBundle\\Event\\LeadListFiltersDecoratorDelegateEvent;
use Mautic\\LeadBundle\\Exception\\FilterNotFoundException;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory;
use Mautic\\LeadBundle\\Services\\ContactSegmentFilterDictionary;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class DecoratorFactory
{
    public function __construct(
        private ContactSegmentFilterDictionary \$contactSegmentFilterDictionary,
        private BaseDecorator \$baseDecorator,
        private CustomMappedDecorator \$customMappedDecorator,
        private DateOptionFactory \$dateOptionFactory,
        private CompanyDecorator \$companyDecorator,
        private EventDispatcherInterface \$eventDispatcher
    ) {
    }

    /**
     * @return FilterDecoratorInterface
     */
    public function getDecoratorForFilter(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        \$decoratorEvent = new LeadListFiltersDecoratorDelegateEvent(\$contactSegmentFilterCrate);

        \$this->eventDispatcher->dispatch(\$decoratorEvent, LeadEvents::SEGMENT_ON_DECORATOR_DELEGATE);
        if (\$decorator = \$decoratorEvent->getDecorator()) {
            return \$decorator;
        }

        if (\$contactSegmentFilterCrate->isDateType()) {
            \$dateDecorator = \$this->dateOptionFactory->getDateOption(\$contactSegmentFilterCrate);

            if (\$contactSegmentFilterCrate->isCompanyType()) {
                return new DateCompanyDecorator(\$dateDecorator);
            }

            return \$dateDecorator;
        }

        \$originalField = \$contactSegmentFilterCrate->getField();

        try {
            \$this->contactSegmentFilterDictionary->getFilter(\$originalField);

            return \$this->customMappedDecorator;
        } catch (FilterNotFoundException) {
            if (\$contactSegmentFilterCrate->isCompanyType()) {
                return \$this->companyDecorator;
            }

            return \$this->baseDecorator;
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
        return "@bundles/LeadBundle/Segment/Decorator/DecoratorFactory.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Decorator/DecoratorFactory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Segment\\Decorator\\DecoratorFactory.php");
    }
}
