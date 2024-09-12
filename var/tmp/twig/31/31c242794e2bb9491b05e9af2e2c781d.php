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

/* @bundles/PageBundle/EventListener/WebhookSubscriber.php */
class __TwigTemplate_8a7e39596fa07a0076a86f916a5cd316 extends Template
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

namespace Mautic\\PageBundle\\EventListener;

use Mautic\\PageBundle\\Event\\PageHitEvent;
use Mautic\\PageBundle\\PageEvents;
use Mautic\\WebhookBundle\\Event\\WebhookBuilderEvent;
use Mautic\\WebhookBundle\\Model\\WebhookModel;
use Mautic\\WebhookBundle\\WebhookEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class WebhookSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private WebhookModel \$webhookModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            WebhookEvents::WEBHOOK_ON_BUILD => ['onWebhookBuild', 0],
            PageEvents::PAGE_ON_HIT         => ['onPageHit', 0],
        ];
    }

    /**
     * Add event triggers and actions.
     */
    public function onWebhookBuild(WebhookBuilderEvent \$event): void
    {
        // add checkbox to the webhook form for new leads
        \$pageHit = [
            'label'       => 'mautic.page.webhook.event.hit',
            'description' => 'mautic.page.webhook.event.hit_desc',
        ];

        // add it to the list
        \$event->addEvent(PageEvents::PAGE_ON_HIT, \$pageHit);
    }

    public function onPageHit(PageHitEvent \$event): void
    {
        \$this->webhookModel->queueWebhooksByType(
            PageEvents::PAGE_ON_HIT,
            [
                'hit' => \$event->getHit(),
            ],
            [
                'hitDetails',
                'emailDetails',
                'pageList',
                'leadList',
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
        return "@bundles/PageBundle/EventListener/WebhookSubscriber.php";
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
        return new Source("", "@bundles/PageBundle/EventListener/WebhookSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\EventListener\\WebhookSubscriber.php");
    }
}
