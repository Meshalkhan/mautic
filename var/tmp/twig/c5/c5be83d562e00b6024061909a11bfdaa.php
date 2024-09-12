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

/* @bundles/FormBundle/Collector/FieldCollector.php */
class __TwigTemplate_e12ec7f882f9f6f04c204ff66d6a9207 extends Template
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

namespace Mautic\\FormBundle\\Collector;

use Mautic\\FormBundle\\Collection\\FieldCollection;
use Mautic\\FormBundle\\Event\\FieldCollectEvent;
use Mautic\\FormBundle\\FormEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

final class FieldCollector implements FieldCollectorInterface
{
    /**
     * @var FieldCollection[]
     */
    private array \$fieldCollections = [];

    public function __construct(
        private EventDispatcherInterface \$dispatcher
    ) {
    }

    public function getFields(string \$object): FieldCollection
    {
        if (!isset(\$this->fieldCollections[\$object])) {
            \$this->collect(\$object);
        }

        return \$this->fieldCollections[\$object];
    }

    private function collect(string \$object): void
    {
        \$event = new FieldCollectEvent(\$object);
        \$this->dispatcher->dispatch(\$event, FormEvents::ON_FIELD_COLLECT);
        \$this->fieldCollections[\$object] = \$event->getFields();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Collector/FieldCollector.php";
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
        return new Source("", "@bundles/FormBundle/Collector/FieldCollector.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Collector\\FieldCollector.php");
    }
}
