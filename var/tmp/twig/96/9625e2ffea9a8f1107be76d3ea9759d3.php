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

/* @bundles/CampaignBundle/Executioner/ContactFinder/KickoffContactFinder.php */
class __TwigTemplate_afa796828e1181b8ceaabfbb0a2be711 extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\ContactFinder;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\Common\\Collections\\Collection;
use Mautic\\CampaignBundle\\Entity\\CampaignRepository;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;
use Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Psr\\Log\\LoggerInterface;

class KickoffContactFinder
{
    public function __construct(
        private LeadRepository \$leadRepository,
        private CampaignRepository \$campaignRepository,
        private LoggerInterface \$logger
    ) {
    }

    /**
     * @param int \$campaignId
     *
     * @return ArrayCollection
     *
     * @throws NoContactsFoundException
     */
    public function getContacts(\$campaignId, ContactLimiter \$limiter)
    {
        // Get list of all campaign leads; start is always zero in practice because of \$pendingOnly
        \$campaignContacts = \$this->campaignRepository->getPendingContactIds(\$campaignId, \$limiter);

        if (empty(\$campaignContacts)) {
            // No new contacts found in the campaign

            throw new NoContactsFoundException();
        }

        \$this->logger->debug('CAMPAIGN: Processing the following contacts: '.implode(', ', \$campaignContacts));

        // Fetch entity objects for the found contacts
        \$contacts = \$this->leadRepository->getContactCollection(\$campaignContacts);

        if (!count(\$contacts)) {
            // Just a precaution in case non-existent contacts are lingering in the campaign leads table
            \$this->logger->debug('CAMPAIGN: No contact entities found.');

            throw new NoContactsFoundException();
        }

        return \$contacts;
    }

    /**
     * @param int \$campaignId
     */
    public function getContactCount(\$campaignId, array \$eventIds, ContactLimiter \$limiter): int
    {
        \$countResult = \$this->campaignRepository->getCountsForPendingContacts(\$campaignId, \$eventIds, \$limiter);

        return \$countResult->getCount();
    }

    /**
     * Clear Lead entities from memory.
     *
     * @param Collection<int, Lead> \$contacts
     */
    public function clear(Collection \$contacts): void
    {
        \$this->leadRepository->detachEntities(\$contacts->toArray());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/ContactFinder/KickoffContactFinder.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/ContactFinder/KickoffContactFinder.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Executioner\\ContactFinder\\KickoffContactFinder.php");
    }
}
