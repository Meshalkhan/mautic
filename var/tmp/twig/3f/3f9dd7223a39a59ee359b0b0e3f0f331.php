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

/* @bundles/CampaignBundle/Executioner/Dispatcher/DecisionDispatcher.php */
class __TwigTemplate_0c4168f66551cbf1494e615367e53e9e extends Template
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

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Event\\DecisionEvent;
use Mautic\\CampaignBundle\\Event\\DecisionResultsEvent;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\DecisionAccessor;
use Mautic\\CampaignBundle\\Executioner\\Result\\EvaluatedContacts;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class DecisionDispatcher
{
    public function __construct(
        private EventDispatcherInterface \$dispatcher,
        private LegacyEventDispatcher \$legacyDispatcher
    ) {
    }

    /**
     * @param mixed \$passthrough
     */
    public function dispatchRealTimeEvent(DecisionAccessor \$config, LeadEventLog \$log, \$passthrough): DecisionEvent
    {
        \$event = new DecisionEvent(\$config, \$log, \$passthrough);
        \$this->dispatcher->dispatch(\$event, \$config->getEventName());

        return \$event;
    }

    public function dispatchEvaluationEvent(DecisionAccessor \$config, LeadEventLog \$log): DecisionEvent
    {
        \$event = new DecisionEvent(\$config, \$log);

        \$this->dispatcher->dispatch(\$event, CampaignEvents::ON_EVENT_DECISION_EVALUATION);
        \$this->legacyDispatcher->dispatchDecisionEvent(\$event);

        return \$event;
    }

    public function dispatchDecisionResultsEvent(DecisionAccessor \$config, ArrayCollection \$logs, EvaluatedContacts \$evaluatedContacts): void
    {
        if (!\$logs->count()) {
            return;
        }

        \$this->dispatcher->dispatch(
            new DecisionResultsEvent(\$config, \$logs, \$evaluatedContacts),
            CampaignEvents::ON_EVENT_DECISION_EVALUATION_RESULTS
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/Dispatcher/DecisionDispatcher.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Dispatcher/DecisionDispatcher.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Executioner\\Dispatcher\\DecisionDispatcher.php");
    }
}
