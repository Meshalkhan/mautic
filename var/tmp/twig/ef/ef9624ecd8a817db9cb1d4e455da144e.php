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

/* @bundles/PointBundle/EventListener/LeadSubscriber.php */
class __TwigTemplate_cff6668ff7774b6312270da30b4f61c3 extends Template
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

namespace Mautic\\PointBundle\\EventListener;

use Mautic\\LeadBundle\\Entity\\PointsChangeLogRepository;
use Mautic\\LeadBundle\\Event\\LeadEvent;
use Mautic\\LeadBundle\\Event\\LeadMergeEvent;
use Mautic\\LeadBundle\\Event\\LeadTimelineEvent;
use Mautic\\LeadBundle\\Event\\PointsChangeEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\PointBundle\\Entity\\LeadPointLogRepository;
use Mautic\\PointBundle\\Entity\\LeadTriggerLogRepository;
use Mautic\\PointBundle\\Model\\TriggerModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class LeadSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private TriggerModel \$triggerModel,
        private TranslatorInterface \$translator,
        private PointsChangeLogRepository \$pointsChangeLogRepository,
        private LeadPointLogRepository \$leadPointLogRepository,
        private LeadTriggerLogRepository \$leadTriggerLogRepository
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::LEAD_POINTS_CHANGE   => ['onLeadPointsChange', 0],
            LeadEvents::TIMELINE_ON_GENERATE => ['onTimelineGenerate', 0],
            LeadEvents::LEAD_POST_MERGE      => ['onLeadMerge', 0],
            LeadEvents::LEAD_POST_SAVE       => ['onLeadSave', -1],
        ];
    }

    /**
     * Trigger applicable events for the lead.
     */
    public function onLeadPointsChange(PointsChangeEvent \$event): void
    {
        \$this->triggerModel->triggerEvents(\$event->getLead());
    }

    /**
     * Handle point triggers for new leads (including 0 point triggers).
     */
    public function onLeadSave(LeadEvent \$event): void
    {
        if (\$event->isNew()) {
            \$this->triggerModel->triggerEvents(\$event->getLead());
        }
    }

    /**
     * Compile events for the lead timeline.
     */
    public function onTimelineGenerate(LeadTimelineEvent \$event): void
    {
        // Set available event types
        \$eventTypeKey  = 'point.gained';
        \$eventTypeName = \$this->translator->trans('mautic.point.event.gained');
        \$event->addEventType(\$eventTypeKey, \$eventTypeName);
        \$event->addSerializerGroup('pointList');

        if (!\$event->isApplicable(\$eventTypeKey)) {
            return;
        }

        \$logs = \$this->pointsChangeLogRepository->getLeadTimelineEvents(\$event->getLeadId(), \$event->getQueryOptions());

        // Add to counter
        \$event->addToCounter(\$eventTypeKey, \$logs);

        if (!\$event->isEngagementCount()) {
            // Add the logs to the event array
            foreach (\$logs['results'] as \$log) {
                \$eventLabel = \$log['eventName'].' / '.\$log['delta'];
                if (!empty(\$log['groupName'])) {
                    \$eventLabel .= ' ('.\$log['groupName'].')';
                }

                \$event->addEvent(
                    [
                        'event'      => \$eventTypeKey,
                        'eventId'    => \$eventTypeKey.\$log['id'],
                        'eventLabel' => \$eventLabel,
                        'eventType'  => \$eventTypeName,
                        'timestamp'  => \$log['dateAdded'],
                        'extra'      => [
                            'log' => \$log,
                        ],
                        'icon'      => 'fa-calculator',
                        'contactId' => \$log['lead_id'],
                    ]
                );
            }
        }
    }

    public function onLeadMerge(LeadMergeEvent \$event): void
    {
        \$this->leadPointLogRepository->updateLead(
            \$event->getLoser()->getId(),
            \$event->getVictor()->getId()
        );

        \$this->leadTriggerLogRepository->updateLead(
            \$event->getLoser()->getId(),
            \$event->getVictor()->getId()
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
        return "@bundles/PointBundle/EventListener/LeadSubscriber.php";
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
        return new Source("", "@bundles/PointBundle/EventListener/LeadSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\EventListener\\LeadSubscriber.php");
    }
}
