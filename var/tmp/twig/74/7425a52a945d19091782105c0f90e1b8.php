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

/* @bundles/CampaignBundle/Event/AbstractLogCollectionEvent.php */
class __TwigTemplate_05697a5686267c7e0a429dd8fd5a0e72 extends Template
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

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;
use Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException;
use Mautic\\LeadBundle\\Entity\\Lead;

abstract class AbstractLogCollectionEvent extends \\Symfony\\Contracts\\EventDispatcher\\Event
{
    /**
     * @var ArrayCollection
     */
    protected \$logs;

    /**
     * @var ArrayCollection|Lead[]
     */
    private ArrayCollection \$contacts;

    private array \$logContactXref = [];

    public function __construct(
        protected AbstractEventAccessor \$config,
        protected Event \$event,
        ArrayCollection \$logs
    ) {
        \$this->logs     = \$logs;
        \$this->contacts = new ArrayCollection();

        \$this->extractContacts();
    }

    /**
     * @return AbstractEventAccessor
     */
    public function getConfig()
    {
        return \$this->config;
    }

    /**
     * @return Event
     */
    public function getEvent()
    {
        return \$this->event;
    }

    /**
     * Return an array of Lead entities keyed by LeadEventLog ID.
     *
     * @return Lead[]|ArrayCollection
     */
    public function getContacts()
    {
        return \$this->contacts;
    }

    /**
     * @return ArrayCollection
     */
    public function getContactsKeyedById()
    {
        \$contacts = new ArrayCollection();

        /** @var Lead \$contact */
        foreach (\$this->contacts as \$contact) {
            \$contacts->set(\$contact->getId(), \$contact);
        }

        return \$contacts;
    }

    /**
     * Get the IDs of all contacts affected by this event.
     *
     * @return array
     */
    public function getContactIds()
    {
        \$contactIds = array_keys(\$this->logContactXref);

        return array_combine(\$contactIds, \$contactIds);
    }

    /**
     * @param int \$id
     *
     * @return LeadEventLog
     *
     * @throws NoContactsFoundException
     */
    public function findLogByContactId(\$id)
    {
        if (!isset(\$this->logContactXref[\$id])) {
            throw new NoContactsFoundException(\"\$id not found\");
        }

        if (!\$this->logs->offsetExists(\$this->logContactXref[\$id])) {
            throw new NoContactsFoundException(\"\$id was found in the xref table but no log was found\");
        }

        return \$this->logs->get(\$this->logContactXref[\$id]);
    }

    private function extractContacts(): void
    {
        /** @var LeadEventLog \$log */
        foreach (\$this->logs as \$log) {
            \$contact                                 = \$log->getLead();
            \$this->logContactXref[\$contact->getId()] = \$log->getId();

            \$this->contacts->set(\$log->getId(), \$contact);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Event/AbstractLogCollectionEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/AbstractLogCollectionEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Event\\AbstractLogCollectionEvent.php");
    }
}
