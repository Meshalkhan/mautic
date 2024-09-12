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

/* @bundles/CampaignBundle/Executioner/ContactFinder/InactiveContactFinder.php */
class __TwigTemplate_e22e212fdb3deacc2f6ba182e1da6c50 extends Template
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
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadRepository as CampaignLeadRepository;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;
use Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Psr\\Log\\LoggerInterface;

class InactiveContactFinder
{
    /**
     * @var array<string, \\DateTimeInterface>|null
     */
    private ?array \$campaignMemberDatesAdded = null;

    public function __construct(
        private LeadRepository \$leadRepository,
        private CampaignLeadRepository \$campaignLeadRepository,
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
    public function getContacts(\$campaignId, Event \$decisionEvent, ContactLimiter \$limiter)
    {
        if (\$limiter->hasCampaignLimit() && 0 === \$limiter->getCampaignLimitRemaining()) {
            // Limit was reached but do not trigger the NoContactsFoundException
            return new ArrayCollection();
        }

        // Get list of all campaign leads
        \$decisionParentEvent            = \$decisionEvent->getParent();
        \$this->campaignMemberDatesAdded = \$this->campaignLeadRepository->getInactiveContacts(
            \$campaignId,
            \$decisionEvent->getId(),
            (\$decisionParentEvent) ? \$decisionParentEvent->getId() : null,
            \$limiter
        );

        if (empty(\$this->campaignMemberDatesAdded)) {
            // No new contacts found in the campaign
            throw new NoContactsFoundException();
        }

        \$campaignContacts = array_keys(\$this->campaignMemberDatesAdded);
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
     * @return array<string, \\DateTimeInterface>|null
     */
    public function getDatesAdded(): ?array
    {
        return \$this->campaignMemberDatesAdded;
    }

    /**
     * @param int \$campaignId
     */
    public function getContactCount(\$campaignId, array \$decisionEvents, ContactLimiter \$limiter): int
    {
        return \$this->campaignLeadRepository->getInactiveContactCount(\$campaignId, \$decisionEvents, \$limiter);
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
        return "@bundles/CampaignBundle/Executioner/ContactFinder/InactiveContactFinder.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/ContactFinder/InactiveContactFinder.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Executioner\\ContactFinder\\InactiveContactFinder.php");
    }
}
