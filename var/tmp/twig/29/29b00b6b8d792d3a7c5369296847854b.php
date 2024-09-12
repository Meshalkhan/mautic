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

/* @bundles/CampaignBundle/Executioner/Event/ActionExecutioner.php */
class __TwigTemplate_2b56778a42463b3e44460837acba65e7 extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Event;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ActionAccessor;
use Mautic\\CampaignBundle\\Executioner\\Dispatcher\\ActionDispatcher;
use Mautic\\CampaignBundle\\Executioner\\Exception\\CannotProcessEventException;
use Mautic\\CampaignBundle\\Executioner\\Logger\\EventLogger;
use Mautic\\CampaignBundle\\Executioner\\Result\\EvaluatedContacts;

class ActionExecutioner implements EventInterface
{
    public const TYPE = 'action';

    public function __construct(
        private ActionDispatcher \$dispatcher,
        private EventLogger \$eventLogger
    ) {
    }

    /**
     * @throws CannotProcessEventException
     * @throws \\Mautic\\CampaignBundle\\Executioner\\Dispatcher\\Exception\\LogNotProcessedException
     * @throws \\Mautic\\CampaignBundle\\Executioner\\Dispatcher\\Exception\\LogPassedAndFailedException
     */
    public function execute(AbstractEventAccessor \$config, ArrayCollection \$logs): EvaluatedContacts
    {
        \\assert(\$config instanceof ActionAccessor);

        /** @var LeadEventLog \$firstLog */
        if (!\$firstLog = \$logs->first()) {
            return new EvaluatedContacts();
        }

        \$event = \$firstLog->getEvent();

        if (Event::TYPE_ACTION !== \$event->getEventType()) {
            throw new CannotProcessEventException('Cannot process event ID '.\$event->getId().' as an action.');
        }

        // Execute to process the batch of contacts
        \$pendingEvent = \$this->dispatcher->dispatchEvent(\$config, \$event, \$logs);

        \$passed = \$this->eventLogger->extractContactsFromLogs(\$pendingEvent->getSuccessful());
        \$failed = \$this->eventLogger->extractContactsFromLogs(\$pendingEvent->getFailures());

        return new EvaluatedContacts(\$passed, \$failed);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/Event/ActionExecutioner.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Event/ActionExecutioner.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Executioner\\Event\\ActionExecutioner.php");
    }
}
