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

/* @bundles/CampaignBundle/Executioner/Dispatcher/ConditionDispatcher.php */
class __TwigTemplate_48c9d4544aaf294a41a3364e24cddfb9 extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Dispatcher;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Event\\ConditionEvent;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ConditionAccessor;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class ConditionDispatcher
{
    public function __construct(
        private EventDispatcherInterface \$dispatcher
    ) {
    }

    public function dispatchEvent(ConditionAccessor \$config, LeadEventLog \$log): ConditionEvent
    {
        \$event = new ConditionEvent(\$config, \$log);
        \$this->dispatcher->dispatch(\$event, \$config->getEventName());
        \$this->dispatcher->dispatch(\$event, CampaignEvents::ON_EVENT_CONDITION_EVALUATION);

        return \$event;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/Dispatcher/ConditionDispatcher.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Dispatcher/ConditionDispatcher.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Executioner\\Dispatcher\\ConditionDispatcher.php");
    }
}
