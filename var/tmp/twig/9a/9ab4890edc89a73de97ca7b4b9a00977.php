<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/WebhookBundle/Translations/en_US/messages.ini */
class __TwigTemplate_1d165fcb97233af0401027ed6d3daa91 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "mautic.config.tab.webhookconfig=\"Webhook Settings\"
mautic.webhook.config.cron_process=\"Queue Events Only - Process Via CLI Command\"
mautic.webhook.config.form.queue.mode.tooltip=\"Select how to process webhook events. Process immediately will execute the webhook event. Queue mode will only add the event the queue and it must be processed by a cron command.\"
mautic.webhook.config.form.queue.mode=\"Queue Mode\"
mautic.webhook.config.immediate_process=\"Process Events Immediately\"
mautic.webhook.error.notfound=\"Webhook Not Found\"
mautic.webhook.form.confirmbatchdelete=\"Delete the selected Webhooks?\"
mautic.webhook.form.confirmdelete=\"Delete the Webhook, %name%?\"
mautic.webhook.form.description=\"Webhook Description\"
mautic.webhook.form.webhook.events=\"Webhook Events\"
mautic.webhook.form.webhook_url=\"Webhook POST Url\"
mautic.webhook.form.secret=\"Secret\"
mautic.webhook.secret.tooltip=\"This field will autogenerate if no value is provided. Use this secret hash to verify authenticity of the webhook payload on the target server.\"
mautic.webhook.label.success=\"Success!\"
mautic.webhook.label.warning=\"Error Detected!\"
mautic.webhook.label.no.url=\"No URL specified\"
mautic.webhook.no.logs=\"No Webhooks Logs\"
mautic.webhook.no.logs_desc=\"This webhook hasn't been executed yet so there aren't any logs available\"
mautic.webhook.permissions.header=\"Webhook Permissions\"
mautic.webhook.permissions.webhooks=\"Webhooks - User has access to\"
mautic.webhook.send.test.payload=\"Send Test Payload\"
mautic.webhook.status=\"Response\"
mautic.webhook.webhook.header.edit=\"Edit Webhook\"
mautic.webhook.webhook.header.new=\"Create New Webhook\"
mautic.webhook.webhook.logs.desc=\"These are the logs for this hook. Each time an event triggers this hook to be activated we record the HTTP response header. A successful response should be a 200 header. All other responses are considered an error.\"
mautic.webhook.webhook.logs.title=\"Webhook Response Log\"
mautic.webhook.webhook.logs.empty.response=\"Empty response body received\"
mautic.webhook.webhook.menu.index=\"Webhooks\"
mautic.webhook.webhook_url=\"Webhook Url\"
mautic.webhook.webhooks=\"Webhooks\"
mautic.webhook.stopped=\"Webhook has been stopped\"
mautic.webhook.stopped.details=\"%webhook% has been stopped because %reason%\"
mautic.webhook.stopped.reason=\"the responses were not successful for some time\"
mautic.webhook.stopped.reason.410=\"the response HTTP code was 410, which means the receiver doesn't want us to send more requests.\"
mautic.webhook.note=\"Note\"
mautic.webhook.runtime=\"Request Runtime\"
mautic.webhook.killed=\"Webhook was automatically deactivated, because the response has errored out %limit% times in a row.\"
mautic.webhook.config.event.orderby=\"Order of the queued events\"
mautic.webhook.config.event.orderby.tooltip=\"One webhook request can contain several events if queue is used. The default value is defined in settings.\"
mautic.webhook.config.event.orderby.chronological=\"Chronological\"
mautic.webhook.config.event.orderby.reverse.chronological=\"Reverse Chronological\"
mautic.webhook.event.sendwebhook=\"Send a webhook\"
mautic.webhook.event.sendwebhook_desc=\"Send a webhook (only for experienced users)\"
mautic.campaign.campaign.sendwebhook=\"Send a webhook\"
mautic.webhook.event.sendwebhook.url=\"Url\"
mautic.webhook.event.sendwebhook.method=\"Method\"
mautic.webhook.event.sendwebhook.data=\"Data\"
mautic.webhook.event.sendwebhook.headers=\"Headers\"
mautic.webhook.event.sendwebhook.timeout=\"Timeout\"
mautic.webhook.config.email.details=\"Send email details\"
mautic.webhook.config.email.details.tooltip=\"If enabled, email related webhooks send detailed data.\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/WebhookBundle/Translations/en_US/messages.ini";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/WebhookBundle/Translations/en_US/messages.ini", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\WebhookBundle\\Translations\\en_US\\messages.ini");
    }
}
