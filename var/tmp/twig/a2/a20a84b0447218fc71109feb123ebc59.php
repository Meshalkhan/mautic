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

/* @bundles/FormBundle/EventListener/WebhookSubscriber.php */
class __TwigTemplate_122f795718dd1ebe30288ad260dc8817 extends Template
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

namespace Mautic\\FormBundle\\EventListener;

use Mautic\\FormBundle\\Event\\SubmissionEvent;
use Mautic\\FormBundle\\FormEvents;
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
            FormEvents::FORM_ON_SUBMIT      => ['onFormSubmit', 0],
        ];
    }

    /**
     * Add event triggers and actions.
     */
    public function onWebhookBuild(WebhookBuilderEvent \$event): void
    {
        // add checkbox to the webhook form for new leads
        \$formSubmit = [
            'label'       => 'mautic.form.webhook.event.form.submit',
            'description' => 'mautic.form.webhook.event.form.submit_desc',
        ];

        // add it to the list
        \$event->addEvent(FormEvents::FORM_ON_SUBMIT, \$formSubmit);
    }

    public function onFormSubmit(SubmissionEvent \$event): void
    {
        \$this->webhookModel->queueWebhooksByType(
            FormEvents::FORM_ON_SUBMIT,
            [
                'submission' => \$event->getSubmission(),
            ],
            [
                'submissionDetails',
                'ipAddress',
                'leadList',
                'pageList',
                'formList',
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
        return "@bundles/FormBundle/EventListener/WebhookSubscriber.php";
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
        return new Source("", "@bundles/FormBundle/EventListener/WebhookSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\EventListener\\WebhookSubscriber.php");
    }
}
