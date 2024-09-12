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

/* @bundles/CampaignBundle/Service/CampaignAuditService.php */
class __TwigTemplate_93d5f100ed21373e9115bb4e15e933de extends Template
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

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\CampaignRepository;
use Mautic\\CoreBundle\\Service\\FlashBag;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\EmailRepository;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;

class CampaignAuditService
{
    public function __construct(
        private FlashBag \$flashBag,
        private UrlGeneratorInterface \$urlGenerator,
        private CampaignRepository \$campaignRepository,
        private EmailRepository \$emailRepository
    ) {
    }

    public function addWarningForUnpublishedEmails(Campaign \$campaign): void
    {
        \$emailIds = \$this->campaignRepository->fetchEmailIdsById(\$campaign->getId());
        \$emails   = \$this->emailRepository->findBy(['id' => \$emailIds]);

        foreach (\$emails as \$email) {
            if (!\$email->isPublished()) {
                \$this->setEmailWarningFlashMessage(\$email);
            }
        }
    }

    private function setEmailWarningFlashMessage(Email \$email): void
    {
        \$this->flashBag->add(
            'mautic.core.notice.campaign.unpublished.email',
            [
                '%name%'      => \$email->getName(),
                '%menu_link%' => 'mautic_email_index',
                '%url%'       => \$this->urlGenerator->generate('mautic_email_action', [
                    'objectAction' => 'edit',
                    'objectId'     => \$email->getId(),
                ]),
            ],
            FlashBag::LEVEL_WARNING,
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
        return "@bundles/CampaignBundle/Service/CampaignAuditService.php";
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
        return new Source("", "@bundles/CampaignBundle/Service/CampaignAuditService.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Service\\CampaignAuditService.php");
    }
}
