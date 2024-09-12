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

/* @bundles/SmsBundle/EventListener/WebhookSubscriber.php */
class __TwigTemplate_f5691aa76b92fae9bb7da142ed95afc7 extends Template
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

declare(strict_types=1);

namespace Mautic\\SmsBundle\\EventListener;

use Mautic\\SmsBundle\\Event\\SmsSendEvent;
use Mautic\\SmsBundle\\SmsEvents;
use Mautic\\WebhookBundle\\Event\\WebhookBuilderEvent;
use Mautic\\WebhookBundle\\Model\\WebhookModel;
use Mautic\\WebhookBundle\\WebhookEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

final class WebhookSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private WebhookModel \$webhookModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            SmsEvents::SMS_ON_SEND          => 'onSend',
            WebhookEvents::WEBHOOK_ON_BUILD => 'onWebhookBuild',
        ];
    }

    /**
     * Add event triggers and actions.
     */
    public function onWebhookBuild(WebhookBuilderEvent \$event): void
    {
        \$event->addEvent(
            SmsEvents::SMS_ON_SEND,
            [
                'label'       => 'mautic.sms.webhook.event.send',
                'description' => 'mautic.sms.webhook.event.send_desc',
            ]
        );
    }

    public function onSend(SmsSendEvent \$event): void
    {
        \$this->webhookModel->queueWebhooksByType(
            SmsEvents::SMS_ON_SEND,
            [
                'smsId'   => \$event->getSmsId(),
                'contact' => \$event->getLead(),
                'content' => \$event->getContent(),
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
        return "@bundles/SmsBundle/EventListener/WebhookSubscriber.php";
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
        return new Source("", "@bundles/SmsBundle/EventListener/WebhookSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\EventListener\\WebhookSubscriber.php");
    }
}
