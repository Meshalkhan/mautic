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

/* @bundles/LeadBundle/Event/ChannelSubscriptionChange.php */
class __TwigTemplate_938e9db103709cb1d22389a0f930e1e8 extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Contracts\\EventDispatcher\\Event;

class ChannelSubscriptionChange extends Event
{
    /**
     * @param string \$channel
     */
    public function __construct(
        private Lead \$lead,
        private \$channel,
        private int \$oldStatus,
        private int \$newStatus
    ) {
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return \$this->channel;
    }

    public function getOldStatus(): int
    {
        return \$this->oldStatus;
    }

    public function getOldStatusVerb(): string
    {
        return \$this->getDncReasonVerb(\$this->oldStatus);
    }

    public function getNewStatus(): int
    {
        return \$this->newStatus;
    }

    public function getNewStatusVerb(): string
    {
        return \$this->getDncReasonVerb(\$this->newStatus);
    }

    private function getDncReasonVerb(\$reason): string
    {
        return match (true) {
            DoNotContact::IS_CONTACTABLE === \$reason => 'contactable',
            DoNotContact::BOUNCED === \$reason        => 'bounced',
            DoNotContact::MANUAL === \$reason         => 'manual',
            default                                  => 'unsubscribed',
        };
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/ChannelSubscriptionChange.php";
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
        return new Source("", "@bundles/LeadBundle/Event/ChannelSubscriptionChange.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\ChannelSubscriptionChange.php");
    }
}
