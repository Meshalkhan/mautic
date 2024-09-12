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

/* @bundles/FormBundle/Event/FieldCollectEvent.php */
class __TwigTemplate_354d2e6b656f3ff2a761936900a08d42 extends Template
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

namespace Mautic\\FormBundle\\Event;

use Mautic\\FormBundle\\Collection\\FieldCollection;
use Mautic\\FormBundle\\Crate\\FieldCrate;
use Symfony\\Contracts\\EventDispatcher\\Event;

final class FieldCollectEvent extends Event
{
    private FieldCollection \$fields;

    public function __construct(
        private string \$object
    ) {
        \$this->fields = new FieldCollection();
    }

    public function getObject(): string
    {
        return \$this->object;
    }

    public function appendField(FieldCrate \$field): void
    {
        \$this->fields->append(\$field);
    }

    public function getFields(): FieldCollection
    {
        return \$this->fields;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Event/FieldCollectEvent.php";
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
        return new Source("", "@bundles/FormBundle/Event/FieldCollectEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Event\\FieldCollectEvent.php");
    }
}
