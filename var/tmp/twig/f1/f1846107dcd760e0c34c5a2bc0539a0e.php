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

/* @bundles/CampaignBundle/Helper/RemovedContactTracker.php */
class __TwigTemplate_9d22297122847110ad74b39f0dafe580 extends Template
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

namespace Mautic\\CampaignBundle\\Helper;

class RemovedContactTracker
{
    private array \$removedContacts = [];

    /**
     * @param int \$campaignId
     * @param int \$contactId
     */
    public function addRemovedContact(\$campaignId, \$contactId): void
    {
        if (!isset(\$this->removedContacts[\$campaignId])) {
            \$this->removedContacts[\$campaignId] = [];
        }

        \$this->removedContacts[\$campaignId][\$contactId] = \$contactId;
    }

    /**
     * @param int \$campaignId
     */
    public function addRemovedContacts(\$campaignId, array \$contactIds): void
    {
        foreach (\$contactIds as \$contactId) {
            \$this->addRemovedContact(\$campaignId, \$contactId);
        }
    }

    /**
     * @param int \$campaignId
     */
    public function clearRemovedContact(\$campaignId, \$contactId): void
    {
        unset(\$this->removedContacts[\$campaignId][\$contactId]);
    }

    /**
     * @param int \$campaignId
     */
    public function wasContactRemoved(\$campaignId, \$contactId): bool
    {
        return !empty(\$this->removedContacts[\$campaignId][\$contactId]);
    }

    /**
     * @return array
     */
    public function getRemovedContacts()
    {
        return \$this->removedContacts;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Helper/RemovedContactTracker.php";
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
        return new Source("", "@bundles/CampaignBundle/Helper/RemovedContactTracker.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Helper\\RemovedContactTracker.php");
    }
}
