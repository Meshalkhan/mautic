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

/* @bundles/CampaignBundle/Membership/EventDispatcher.php */
class __TwigTemplate_c1a2155102d2a92641bfb8c6d11c6eea extends Template
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

namespace Mautic\\CampaignBundle\\Membership;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Event\\CampaignLeadChangeEvent;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class EventDispatcher
{
    public function __construct(
        private EventDispatcherInterface \$dispatcher
    ) {
    }

    /**
     * @param string \$action
     */
    public function dispatchMembershipChange(Lead \$contact, Campaign \$campaign, \$action): void
    {
        \$this->dispatcher->dispatch(
            new CampaignLeadChangeEvent(\$campaign, \$contact, \$action),
            CampaignEvents::CAMPAIGN_ON_LEADCHANGE
        );
    }

    public function dispatchBatchMembershipChange(array \$contacts, Campaign \$campaign, \$action): void
    {
        \$this->dispatcher->dispatch(
            new CampaignLeadChangeEvent(\$campaign, \$contacts, \$action),
            CampaignEvents::LEAD_CAMPAIGN_BATCH_CHANGE
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
        return "@bundles/CampaignBundle/Membership/EventDispatcher.php";
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
        return new Source("", "@bundles/CampaignBundle/Membership/EventDispatcher.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Membership\\EventDispatcher.php");
    }
}
