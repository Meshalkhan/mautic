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

/* @bundles/LeadBundle/EventListener/PointSubscriber.php */
class __TwigTemplate_42753ca54f6660d09a3a39bd8bb1a35f extends Template
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

use Mautic\\LeadBundle\\Form\\Type\\ListActionType;
use Mautic\\LeadBundle\\Form\\Type\\ModifyLeadTagsType;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\PointBundle\\Event\\TriggerBuilderEvent;
use Mautic\\PointBundle\\Event\\TriggerExecutedEvent;
use Mautic\\PointBundle\\PointEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class PointSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private LeadModel \$leadModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            PointEvents::TRIGGER_ON_BUILD                => ['onTriggerBuild', 0],
            PointEvents::TRIGGER_ON_EVENT_EXECUTE        => ['onTriggerExecute', 0],
            PointEvents::TRIGGER_ON_LEAD_SEGMENTS_CHANGE => ['onLeadSegmentsChange', 0],
        ];
    }

    public function onTriggerBuild(TriggerBuilderEvent \$event): void
    {
        \$event->addEvent(
            'lead.changelists',
            [
                'group'       => 'mautic.lead.point.trigger',
                'label'       => 'mautic.lead.point.trigger.changelists',
                'eventName'   => PointEvents::TRIGGER_ON_LEAD_SEGMENTS_CHANGE,
                'formType'    => ListActionType::class,
            ]
        );

        \$event->addEvent(
            'lead.changetags',
            [
                'group'     => 'mautic.lead.point.trigger',
                'label'     => 'mautic.lead.lead.events.changetags',
                'formType'  => ModifyLeadTagsType::class,
                'eventName' => PointEvents::TRIGGER_ON_EVENT_EXECUTE,
            ]
        );
    }

    public function onTriggerExecute(TriggerExecutedEvent \$event): void
    {
        if ('lead.changetags' !== \$event->getTriggerEvent()->getType()) {
            return;
        }

        \$properties = \$event->getTriggerEvent()->getProperties();
        \$addTags    = \$properties['add_tags'] ?: [];
        \$removeTags = \$properties['remove_tags'] ?: [];

        if (\$this->leadModel->modifyTags(\$event->getLead(), \$addTags, \$removeTags)) {
            \$event->setSucceded();
        }
    }

    public function onLeadSegmentsChange(TriggerExecutedEvent \$event): void
    {
        \$lead = \$event->getLead();

        \$properties = \$event->getTriggerEvent()->getProperties();
        \$addTo      = \$properties['addToLists'];
        \$removeFrom = \$properties['removeFromLists'];

        if (!empty(\$addTo)) {
            \$this->leadModel->addToLists(\$lead, \$addTo);
        }

        if (!empty(\$removeFrom)) {
            \$this->leadModel->removeFromLists(\$lead, \$removeFrom);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/EventListener/PointSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/PointSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\EventListener\\PointSubscriber.php");
    }
}
