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

/* @bundles/WebhookBundle/Event/WebhookQueueEvent.php */
class __TwigTemplate_bfa9319b07012f05e687ba72ce31e059 extends Template
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

namespace Mautic\\WebhookBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\WebhookBundle\\Entity\\Webhook;
use Mautic\\WebhookBundle\\Entity\\WebhookQueue;

class WebhookQueueEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(
        WebhookQueue \$webhookQueue,
        protected Webhook \$webhook,
        \$isNew = false
    ) {
        \$this->entity  = \$webhookQueue;
        \$this->isNew   = \$isNew;
    }

    /**
     * Returns the WebhookQueue entity.
     *
     * @return WebhookQueue
     */
    public function getWebhookQueue()
    {
        return \$this->entity;
    }

    /**
     * Sets the WebhookQueue entity.
     */
    public function setWebhookQueue(WebhookQueue \$webhookQueue): void
    {
        \$this->entity = \$webhookQueue;
    }

    /**
     * Returns the Webhook entity.
     *
     * @return Webhook
     */
    public function getWebhook()
    {
        return \$this->webhook;
    }

    /**
     * Sets the Webhook entity.
     */
    public function setWebhook(Webhook \$webhook): void
    {
        \$this->webhook = \$webhook;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Event/WebhookQueueEvent.php";
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
        return new Source("", "@bundles/WebhookBundle/Event/WebhookQueueEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\WebhookBundle\\Event\\WebhookQueueEvent.php");
    }
}
