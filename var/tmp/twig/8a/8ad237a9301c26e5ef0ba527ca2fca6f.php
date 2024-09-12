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

/* @bundles/CampaignBundle/Event/CampaignTriggerEvent.php */
class __TwigTemplate_d5886096efcca7ece31e07557ea5e8f6 extends Template
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
use Symfony\\Contracts\\EventDispatcher\\Event;

class CampaignTriggerEvent extends Event
{
    /**
     * @var bool
     */
    protected \$triggerCampaign = true;

    public function __construct(
        protected Campaign \$campaign
    ) {
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
     * @return bool
     */
    public function shouldTrigger()
    {
        return \$this->triggerCampaign;
    }

    /**
     * Do not trigger this campaign.
     */
    public function doNotTrigger(): void
    {
        \$this->triggerCampaign = false;

        \$this->stopPropagation();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Event/CampaignTriggerEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/CampaignTriggerEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Event\\CampaignTriggerEvent.php");
    }
}
