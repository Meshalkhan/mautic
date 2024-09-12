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

/* @bundles/LeadBundle/Segment/IntegrationCampaign/IntegrationCampaignParts.php */
class __TwigTemplate_905b704ea8af8386bafa0a2e3363533e extends Template
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

namespace Mautic\\LeadBundle\\Segment\\IntegrationCampaign;

class IntegrationCampaignParts
{
    private string \$integrationName;

    private string \$campaignId;

    /**
     * @param string \$field
     */
    public function __construct(\$field)
    {
        if (str_contains(\$field, '::')) {
            [\$integrationName, \$campaignId] = explode('::', \$field);
        } else {
            // Assuming this is a Salesforce integration for BC with pre 2.11.0
            \$integrationName = 'Salesforce';
            \$campaignId      = \$field;
        }
        \$this->integrationName = \$integrationName;
        \$this->campaignId      = \$campaignId;
    }

    public function getIntegrationName(): string
    {
        return \$this->integrationName;
    }

    public function getCampaignId(): string
    {
        return \$this->campaignId;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/IntegrationCampaign/IntegrationCampaignParts.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/IntegrationCampaign/IntegrationCampaignParts.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Segment\\IntegrationCampaign\\IntegrationCampaignParts.php");
    }
}
