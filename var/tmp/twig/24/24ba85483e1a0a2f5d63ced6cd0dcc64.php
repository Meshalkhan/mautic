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

/* @bundles/LeadBundle/Event/LeadListFiltersDecoratorDelegateEvent.php */
class __TwigTemplate_f8da1f2e95febef0cf4976f12a2e84bc extends Template
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

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\Decorator\\FilterDecoratorInterface;

final class LeadListFiltersDecoratorDelegateEvent extends CommonEvent
{
    private ?FilterDecoratorInterface \$decorator = null;

    public function __construct(
        private ContactSegmentFilterCrate \$crate
    ) {
    }

    public function getDecorator(): ?FilterDecoratorInterface
    {
        return \$this->decorator;
    }

    public function setDecorator(FilterDecoratorInterface \$decorator): self
    {
        \$this->decorator = \$decorator;

        return \$this;
    }

    public function getCrate(): ContactSegmentFilterCrate
    {
        return \$this->crate;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/LeadListFiltersDecoratorDelegateEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadListFiltersDecoratorDelegateEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\LeadListFiltersDecoratorDelegateEvent.php");
    }
}
