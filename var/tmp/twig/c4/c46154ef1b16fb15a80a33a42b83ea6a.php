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

/* @bundles/DashboardBundle/Event/WidgetFormEvent.php */
class __TwigTemplate_bfc539da10560b32a18d211b7a701bcf extends Template
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

namespace Mautic\\DashboardBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\DashboardBundle\\Entity\\Widget;

class WidgetFormEvent extends CommonEvent
{
    protected \$form;

    protected \$type;

    /**
     * Set the widget type.
     *
     * @param string \$type
     */
    public function setType(\$type): void
    {
        \$this->type = \$type;
    }

    /**
     * Get the widget type.
     *
     * @return string \$type
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Set the widget form.
     *
     * @param string \$form
     */
    public function setForm(\$form): void
    {
        \$this->form = \$form;
    }

    /**
     * Returns the widget edit form.
     */
    public function getForm()
    {
        return \$this->form;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Event/WidgetFormEvent.php";
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
        return new Source("", "@bundles/DashboardBundle/Event/WidgetFormEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DashboardBundle\\Event\\WidgetFormEvent.php");
    }
}
