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

/* @bundles/CampaignBundle/Service/Campaign.php */
class __TwigTemplate_442b20400bb2f89e031113c346c3fcb9 extends Template
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

namespace Mautic\\CampaignBundle\\Service;

use Mautic\\CampaignBundle\\Entity\\CampaignRepository;
use Mautic\\EmailBundle\\Entity\\EmailRepository;

/**
 * @deprecated to be removed in 6.0; use CampaignAuditService instead
 */
class Campaign
{
    public function __construct(
        private CampaignRepository \$campaignRepository,
        private EmailRepository \$emailRepository
    ) {
    }

    /**
     * Has campaign at least one unpublished e-mail?
     *
     * @param int \$id
     */
    public function hasUnpublishedEmail(\$id): bool
    {
        \$emailIds = \$this->campaignRepository->fetchEmailIdsById(\$id);

        if (!\$emailIds) {
            return false;
        }

        return \$this->emailRepository->isOneUnpublished(\$emailIds);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Service/Campaign.php";
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
        return new Source("", "@bundles/CampaignBundle/Service/Campaign.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Service\\Campaign.php");
    }
}
