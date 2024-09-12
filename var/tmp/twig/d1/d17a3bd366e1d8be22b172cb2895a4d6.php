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

/* @bundles/SmsBundle/EventListener/CampaignReplySubscriber.php */
class __TwigTemplate_3ed4085a19e345f2c8a4e01c6887b229 extends Template
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

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Event\\CampaignBuilderEvent;
use Mautic\\CampaignBundle\\Event\\DecisionEvent;
use Mautic\\CampaignBundle\\Executioner\\RealTimeExecutioner;
use Mautic\\SmsBundle\\Event\\ReplyEvent;
use Mautic\\SmsBundle\\Form\\Type\\CampaignReplyType;
use Mautic\\SmsBundle\\Helper\\ReplyHelper;
use Mautic\\SmsBundle\\Sms\\TransportChain;
use Mautic\\SmsBundle\\SmsEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class CampaignReplySubscriber implements EventSubscriberInterface
{
    public const TYPE = 'sms.reply';

    public function __construct(
        private TransportChain \$transportChain,
        private RealTimeExecutioner \$realTimeExecutioner
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CampaignEvents::CAMPAIGN_ON_BUILD => ['onCampaignBuild', 0],
            SmsEvents::ON_CAMPAIGN_REPLY      => ['onCampaignReply', 0],
            SmsEvents::ON_REPLY               => ['onReply', 0],
        ];
    }

    public function onCampaignBuild(CampaignBuilderEvent \$event): void
    {
        if (0 === count(\$this->transportChain->getEnabledTransports())) {
            return;
        }

        \$event->addDecision(
            self::TYPE,
            [
                'label'       => 'mautic.campaign.sms.reply',
                'description' => 'mautic.campaign.sms.reply.tooltip',
                'eventName'   => SmsEvents::ON_CAMPAIGN_REPLY,
                'formType'    => CampaignReplyType::class,
            ]
        );
    }

    public function onCampaignReply(DecisionEvent \$decisionEvent): void
    {
        /** @var ReplyEvent \$replyEvent */
        \$replyEvent = \$decisionEvent->getPassthrough();
        \$pattern    = \$decisionEvent->getLog()->getEvent()->getProperties()['pattern'];

        if (empty(\$pattern)) {
            // Assume any reply
            \$decisionEvent->setAsApplicable();

            return;
        }

        if (!ReplyHelper::matches(\$pattern, \$replyEvent->getMessage())) {
            // It does not match so ignore

            return;
        }

        \$decisionEvent->setChannel('sms');
        \$decisionEvent->setAsApplicable();
    }

    /**
     * @throws \\Mautic\\CampaignBundle\\Executioner\\Dispatcher\\Exception\\LogNotProcessedException
     * @throws \\Mautic\\CampaignBundle\\Executioner\\Dispatcher\\Exception\\LogPassedAndFailedException
     * @throws \\Mautic\\CampaignBundle\\Executioner\\Exception\\CannotProcessEventException
     * @throws \\Mautic\\CampaignBundle\\Executioner\\Scheduler\\Exception\\NotSchedulableException
     */
    public function onReply(ReplyEvent \$event): void
    {
        \$this->realTimeExecutioner->execute(self::TYPE, \$event, 'sms');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/EventListener/CampaignReplySubscriber.php";
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
        return new Source("", "@bundles/SmsBundle/EventListener/CampaignReplySubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\EventListener\\CampaignReplySubscriber.php");
    }
}
