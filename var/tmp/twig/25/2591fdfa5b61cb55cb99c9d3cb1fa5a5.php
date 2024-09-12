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

/* @bundles/PointBundle/Event/TriggerEvent.php */
class __TwigTemplate_a63037774b3d59de8cf61a0a0f2b6741 extends Template
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

namespace Mautic\\PointBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\PointBundle\\Entity\\Trigger;

class TriggerEvent extends CommonEvent
{
    /**
     * @var Trigger
     */
    protected \$entity;

    /**
     * @param bool \$isNew
     */
    public function __construct(
        Trigger &\$trigger,
        protected \$isNew = false
    ) {
        \$this->entity = &\$trigger;
    }

    /**
     * @return Trigger
     */
    public function getTrigger()
    {
        return \$this->entity;
    }

    public function setTrigger(Trigger \$trigger): void
    {
        \$this->entity = \$trigger;
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PointBundle/Event/TriggerEvent.php";
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
        return new Source("", "@bundles/PointBundle/Event/TriggerEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Event\\TriggerEvent.php");
    }
}
