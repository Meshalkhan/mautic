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

/* @bundles/SmsBundle/EventListener/ReplySubscriber.php */
class __TwigTemplate_6fae4ef16eb8bd845e1863c5987f3542 extends Template
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

namespace Mautic\\SmsBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Entity\\LeadEventLog;
use Mautic\\LeadBundle\\Entity\\LeadEventLogRepository;
use Mautic\\LeadBundle\\Event\\LeadTimelineEvent;
use Mautic\\LeadBundle\\EventListener\\TimelineEventLogTrait;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\SmsBundle\\Event\\ReplyEvent;
use Mautic\\SmsBundle\\SmsEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ReplySubscriber implements EventSubscriberInterface
{
    use TimelineEventLogTrait;

    public function __construct(Translator \$translator, LeadEventLogRepository \$eventLogRepository)
    {
        \$this->translator         = \$translator;
        \$this->eventLogRepository = \$eventLogRepository;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            SmsEvents::ON_REPLY              => ['onReply', 0],
            LeadEvents::TIMELINE_ON_GENERATE => 'onTimelineGenerate',
        ];
    }

    public function onReply(ReplyEvent \$event): void
    {
        \$message = \$event->getMessage();
        \$contact = \$event->getContact();

        \$log = new LeadEventLog();
        \$log
            ->setLead(\$contact)
            ->setBundle('sms')
            ->setObject('sms')
            ->setAction('reply')
            ->setProperties(
                [
                    'message' => InputHelper::clean(\$message),
                ]
            );

        \$this->eventLogRepository->saveEntity(\$log);
        \$this->eventLogRepository->detachEntity(\$log);
        \$event->setEventLog(\$log);
    }

    public function onTimelineGenerate(LeadTimelineEvent \$event): void
    {
        \$this->addEvents(
            \$event,
            'sms_reply',
            'mautic.sms.timeline.reply',
            'fa-mobile',
            'sms',
            'sms',
            'reply',
            '@MauticSms/SubscribedEvents/Timeline/reply.html.twig'
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
        return "@bundles/SmsBundle/EventListener/ReplySubscriber.php";
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
        return new Source("", "@bundles/SmsBundle/EventListener/ReplySubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\EventListener\\ReplySubscriber.php");
    }
}
