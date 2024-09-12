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

/* @bundles/PointBundle/Event/TriggerExecutedEvent.php */
class __TwigTemplate_65c7a55c1dd9d5bca82c8f6acb76a258 extends Template
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

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PointBundle\\Entity\\TriggerEvent as TriggerEventEntity;
use Symfony\\Contracts\\EventDispatcher\\Event;

class TriggerExecutedEvent extends Event
{
    private ?bool \$result = null;

    public function __construct(
        private TriggerEventEntity \$triggerEvent,
        private Lead \$lead
    ) {
    }

    /**
     * @return TriggerEventEntity
     */
    public function getTriggerEvent()
    {
        return \$this->triggerEvent;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return bool
     */
    public function getResult()
    {
        return \$this->result;
    }

    public function setSucceded(): void
    {
        \$this->result = true;
    }

    public function setFailed(): void
    {
        \$this->result = false;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Event/TriggerExecutedEvent.php";
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
        return new Source("", "@bundles/PointBundle/Event/TriggerExecutedEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Event\\TriggerExecutedEvent.php");
    }
}
