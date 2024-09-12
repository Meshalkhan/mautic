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

/* @bundles/PointBundle/Event/TriggerEvent.php */
class __TwigTemplate_d61461bb67b9bd36fc673f923adba5c3 extends Template
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
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Event/TriggerEvent.php";
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
        return new Source("", "@bundles/PointBundle/Event/TriggerEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Event\\TriggerEvent.php");
    }
}
