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

/* @bundles/FormBundle/Event/FormEvent.php */
class __TwigTemplate_a59271d604d97ed5e42fe7ba0ff8c939 extends Template
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

namespace Mautic\\FormBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\FormBundle\\Entity\\Form;

class FormEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Form &\$form, \$isNew = false)
    {
        \$this->entity = &\$form;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Form entity.
     *
     * @return Form
     */
    public function getForm()
    {
        return \$this->entity;
    }

    /**
     * Sets the Form entity.
     */
    public function setForm(Form \$form): void
    {
        \$this->entity = \$form;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Event/FormEvent.php";
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
        return new Source("", "@bundles/FormBundle/Event/FormEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Event\\FormEvent.php");
    }
}
