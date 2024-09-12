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

/* @bundles/FormBundle/Event/ObjectCollectEvent.php */
class __TwigTemplate_c4440cd7895c98c2e189cf484727a2f5 extends Template
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

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\FormBundle\\Collection\\ObjectCollection;
use Mautic\\FormBundle\\Crate\\ObjectCrate;

final class ObjectCollectEvent extends CommonEvent
{
    private ObjectCollection \$objects;

    public function __construct()
    {
        \$this->objects = new ObjectCollection();
    }

    public function appendObject(ObjectCrate \$object): void
    {
        \$this->objects->append(\$object);
    }

    public function getObjects(): ObjectCollection
    {
        return \$this->objects;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Event/ObjectCollectEvent.php";
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
        return new Source("", "@bundles/FormBundle/Event/ObjectCollectEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Event\\ObjectCollectEvent.php");
    }
}
