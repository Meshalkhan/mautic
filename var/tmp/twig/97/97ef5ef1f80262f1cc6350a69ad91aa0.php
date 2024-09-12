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

/* @bundles/DynamicContentBundle/Event/DynamicContentEvent.php */
class __TwigTemplate_9eeac8bda79137144a503d44b797257e extends Template
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

namespace Mautic\\DynamicContentBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\DynamicContentBundle\\Entity\\DynamicContent;

class DynamicContentEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(DynamicContent \$entity, \$isNew = false)
    {
        \$this->entity = \$entity;
        \$this->isNew  = \$isNew;
    }

    /**
     * @return DynamicContent
     */
    public function getDynamicContent()
    {
        return \$this->entity;
    }

    public function setDynamicContent(DynamicContent \$entity): void
    {
        \$this->entity = \$entity;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DynamicContentBundle/Event/DynamicContentEvent.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Event/DynamicContentEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DynamicContentBundle\\Event\\DynamicContentEvent.php");
    }
}
