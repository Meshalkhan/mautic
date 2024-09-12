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

/* @bundles/CampaignBundle/Event/CampaignLeadChangeEvent.php */
class __TwigTemplate_20e489ea786ac035c1519d9a14562734 extends Template
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

namespace Mautic\\CampaignBundle\\Event;

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Contracts\\EventDispatcher\\Event;

class CampaignLeadChangeEvent extends Event
{
    /**
     * @var ?Lead
     */
    private \$lead;

    /**
     * @var Lead[]
     */
    private array \$leads = [];

    /**
     * @param Lead|Lead[] \$leads
     * @param ?string     \$action
     */
    public function __construct(
        private Campaign \$campaign,
        \$leads,
        private \$action
    ) {
        if (is_array(\$leads)) {
            \$this->leads = \$leads;
        } else {
            \$this->lead = \$leads;
        }
    }

    /**
     * Returns the Campaign entity.
     *
     * @return Campaign
     */
    public function getCampaign()
    {
        return \$this->campaign;
    }

    /**
     * Returns the Lead entity.
     *
     * @return Lead|null
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * If this is a batch event, return array of leads.
     *
     * @return Lead[]|null
     */
    public function getLeads()
    {
        return \$this->leads;
    }

    /**
     * Returns added or removed.
     *
     * @return string|null
     */
    public function getAction()
    {
        return \$this->action;
    }

    /**
     * Lead was removed from the campaign.
     */
    public function wasRemoved(): bool
    {
        return 'removed' === \$this->action;
    }

    /**
     * Lead was added to the campaign.
     */
    public function wasAdded(): bool
    {
        return 'added' === \$this->action;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Event/CampaignLeadChangeEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/CampaignLeadChangeEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Event\\CampaignLeadChangeEvent.php");
    }
}
