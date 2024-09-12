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

/* @bundles/LeadBundle/EventListener/TimelineEventLogTrait.php */
class __TwigTemplate_05d77a71f6df77e769ce939e078fa5e7 extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Entity\\LeadEventLogRepository;
use Mautic\\LeadBundle\\Event\\LeadTimelineEvent;

trait TimelineEventLogTrait
{
    /**
     * @var Translator
     */
    private \$translator;

    /**
     * @var LeadEventLogRepository
     */
    private \$eventLogRepository;

    private function addEvents(LeadTimelineEvent \$event, \$eventType, \$eventTypeName, \$icon, \$bundle = null, \$object = null, \$action = null, \$contentTemplate = null): void
    {
        \$eventTypeName = \$this->translator->trans(\$eventTypeName);
        \$event->addEventType(\$eventType, \$eventTypeName);

        if (!\$event->isApplicable(\$eventType)) {
            return;
        }

        \$events = \$this->eventLogRepository->getEvents(\$event->getLead(), \$bundle, \$object, \$action, \$event->getQueryOptions());

        // Add to counter
        \$event->addToCounter(\$eventType, \$events);

        if (\$event->isEngagementCount()) {
            return;
        }

        // Add the logs to the event array
        foreach (\$events['results'] as \$log) {
            \$event->addEvent(
                \$this->getEventEntry(\$log, \$eventType, \$eventTypeName, \$icon, \$contentTemplate)
            );
        }
    }

    private function getEventEntry(array \$log, \$eventType, \$eventTypeName, \$icon, \$contentTemplate): array
    {
        \$properties = json_decode(\$log['properties'], true);

        \$entry = [
            'event'      => \$eventType,
            'eventId'    => \$eventType.\$log['id'],
            'eventType'  => \$eventTypeName,
            'eventLabel' => \$this->getSourceName(\$log, \$eventType),
            'timestamp'  => \$log['date_added'],
            'icon'       => \$icon,
            'contactId'  => \$log['lead_id'],
            'extra'      => \$properties,
        ];

        if (\$contentTemplate) {
            \$entry['contentTemplate'] = \$contentTemplate;
        }

        return \$entry;
    }

    /**
     * @return string
     */
    private function getSourceName(array \$log, \$eventType)
    {
        \$properties = json_decode(\$log['properties'], true);

        if (!empty(\$properties['object_description'])) {
            \$customString = 'mautic.lead.timeline.'.\$eventType.'_by_object';
            if (\$this->translator->hasId(\$customString)) {
                return \$this->translator->trans(
                    \$customString,
                    [
                        '%name%' => \$properties['object_description'],
                    ]
                );
            }

            \$customString = 'mautic.lead.timeline.'.\$eventType.'_'.\$log['action'].'_by_object';
            if (\$this->translator->hasId(\$customString)) {
                return \$this->translator->trans(
                    \$customString,
                    [
                        '%name%' => \$properties['object_description'],
                    ]
                );
            }
        }

        \$customString = 'mautic.lead.timeline.'.\$log['bundle'].'.'.\$log['object'];
        if (\$this->translator->hasId(\$customString)) {
            return \$this->translator->trans(\$customString);
        }

        \$customString = 'mautic.lead.timeline.'.\$log['bundle'].'.'.\$log['object'].'.'.\$log['action'];
        if (\$this->translator->hasId(\$customString)) {
            return \$this->translator->trans(\$customString);
        }

        return \$this->translator->trans(
            'mautic.lead.timeline.'.\$eventType,
            [
                '%bundle%' => \$log['bundle'],
                '%object%' => \$log['object'],
                '%action%' => \$log['action'],
            ]
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
        return "@bundles/LeadBundle/EventListener/TimelineEventLogTrait.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/TimelineEventLogTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\EventListener\\TimelineEventLogTrait.php");
    }
}
