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

/* @bundles/FormBundle/Collector/ObjectCollector.php */
class __TwigTemplate_ea27d53900ee34bc9b5459843798ab4f extends Template
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

declare(strict_types=1);

namespace Mautic\\FormBundle\\Collector;

use Mautic\\FormBundle\\Collection\\ObjectCollection;
use Mautic\\FormBundle\\Event\\ObjectCollectEvent;
use Mautic\\FormBundle\\FormEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

final class ObjectCollector implements ObjectCollectorInterface
{
    private ?ObjectCollection \$objects = null;

    public function __construct(
        private EventDispatcherInterface \$dispatcher
    ) {
    }

    public function getObjects(): ObjectCollection
    {
        if (null === \$this->objects) {
            \$this->collect();
        }

        return \$this->objects;
    }

    private function collect(): void
    {
        \$event = new ObjectCollectEvent();
        \$this->dispatcher->dispatch(\$event, FormEvents::ON_OBJECT_COLLECT);
        \$this->objects = \$event->getObjects();
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
        return "@bundles/FormBundle/Collector/ObjectCollector.php";
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
        return new Source("", "@bundles/FormBundle/Collector/ObjectCollector.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Collector\\ObjectCollector.php");
    }
}
