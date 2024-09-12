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

/* @bundles/WebhookBundle/Event/WebhookEvent.php */
class __TwigTemplate_faeb718f827e7c265106e6275f54f45a extends Template
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

class WebhookEvent extends CommonEvent
{
    /**
     * @var Webhook
     */
    protected \$entity;

    /**
     * @param bool   \$isNew
     * @param string \$reason
     */
    public function __construct(
        Webhook \$webhook,
        protected \$isNew = false,
        private \$reason = ''
    ) {
        \$this->entity = \$webhook;
    }

    /**
     * Returns the Webhook entity.
     *
     * @return Webhook
     */
    public function getWebhook()
    {
        return \$this->entity;
    }

    /**
     * Sets the Webhook entity.
     */
    public function setWebhook(Webhook \$webhook): void
    {
        \$this->entity = \$webhook;
    }

    public function setReason(\$reason): void
    {
        \$this->reason = \$reason;
    }

    public function getReason(): string
    {
        return \$this->reason;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Event/WebhookEvent.php";
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
        return new Source("", "@bundles/WebhookBundle/Event/WebhookEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\WebhookBundle\\Event\\WebhookEvent.php");
    }
}
