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

/* @bundles/FormBundle/Event/FormFieldEvent.php */
class __TwigTemplate_3227f253f116a548149f4c76fc640979 extends Template
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

use Mautic\\FormBundle\\Entity\\Field;
use Symfony\\Contracts\\EventDispatcher\\Event;

final class FormFieldEvent extends Event
{
    public function __construct(
        private Field \$entity,
        private bool \$isNew = false
    ) {
    }

    public function getField(): Field
    {
        return \$this->entity;
    }

    public function isNew(): bool
    {
        return \$this->isNew;
    }

    public function setField(Field \$field): void
    {
        \$this->entity = \$field;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Event/FormFieldEvent.php";
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
        return new Source("", "@bundles/FormBundle/Event/FormFieldEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Event\\FormFieldEvent.php");
    }
}
