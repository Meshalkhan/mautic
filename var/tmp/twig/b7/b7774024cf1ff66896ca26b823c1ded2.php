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

/* @bundles/WebhookBundle/EventListener/CampaignSubscriber.php */
class __TwigTemplate_250109deb7dbf33834594a932541c94a extends Template
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

namespace Mautic\\WebhookBundle\\EventListener;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Event as Events;
use Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent;
use Mautic\\WebhookBundle\\Form\\Type\\CampaignEventSendWebhookType;
use Mautic\\WebhookBundle\\Helper\\CampaignHelper;
use Mautic\\WebhookBundle\\WebhookEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class CampaignSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private CampaignHelper \$campaignHelper
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CampaignEvents::CAMPAIGN_ON_BUILD         => ['onCampaignBuild', 0],
            WebhookEvents::ON_CAMPAIGN_TRIGGER_ACTION => ['onCampaignTriggerAction', 0],
        ];
    }

    public function onCampaignTriggerAction(CampaignExecutionEvent \$event): void
    {
        if (\$event->checkContext('campaign.sendwebhook')) {
            try {
                \$this->campaignHelper->fireWebhook(\$event->getConfig(), \$event->getLead());
                \$event->setResult(true);
            } catch (\\Exception \$e) {
                \$event->setFailed(\$e->getMessage());
            }
        }
    }

    /**
     * Add event triggers and actions.
     */
    public function onCampaignBuild(Events\\CampaignBuilderEvent \$event): void
    {
        \$sendWebhookAction = [
            'label'              => 'mautic.webhook.event.sendwebhook',
            'description'        => 'mautic.webhook.event.sendwebhook_desc',
            'formType'           => CampaignEventSendWebhookType::class,
            'formTypeCleanMasks' => 'clean',
            'eventName'          => WebhookEvents::ON_CAMPAIGN_TRIGGER_ACTION,
        ];
        \$event->addAction('campaign.sendwebhook', \$sendWebhookAction);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/EventListener/CampaignSubscriber.php";
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
        return new Source("", "@bundles/WebhookBundle/EventListener/CampaignSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\WebhookBundle\\EventListener\\CampaignSubscriber.php");
    }
}
