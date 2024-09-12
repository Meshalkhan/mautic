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

/* @bundles/EmailBundle/MonitoredEmail/Organizer/MailboxOrganizer.php */
class __TwigTemplate_dc9d645ac7d7cd0f896c1c4eb12487ba extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Organizer;

use Mautic\\EmailBundle\\Event\\ParseEmailEvent;
use Mautic\\EmailBundle\\MonitoredEmail\\Accessor\\ConfigAccessor;
use Mautic\\EmailBundle\\MonitoredEmail\\Mailbox;

class MailboxOrganizer
{
    /**
     * @var MailboxContainer[]
     */
    protected \$containers = [];

    public function __construct(
        protected ParseEmailEvent \$event,
        protected array \$mailboxes
    ) {
    }

    /**
     * Organize the mailboxes into containers by IMAP connection and criteria.
     */
    public function organize(): void
    {
        \$criteriaRequested      = \$this->event->getCriteriaRequests();
        \$markAsSeenInstructions = \$this->event->getMarkAsSeenInstructions();

        /**
         * @var string         \$name
         * @var ConfigAccessor \$config
         */
        foreach (\$this->mailboxes as \$name => \$config) {
            // Switch mailbox to get information
            if (!\$config->isConfigured()) {
                // Not configured so continue
                continue;
            }

            \$criteria   = \$criteriaRequested[\$name] ?? Mailbox::CRITERIA_UNSEEN;
            \$markAsSeen = \$markAsSeenInstructions[\$name] ?? true;

            \$container = \$this->getContainer(\$config);
            if (!\$markAsSeen) {
                // Keep all the messages fetched from this folder as unseen
                \$container->keepAsUnseen();
            }

            \$container->addCriteria(\$criteria, \$name);
        }
    }

    /**
     * @return MailboxContainer[]
     */
    public function getContainers()
    {
        return \$this->containers;
    }

    /**
     * @return MailboxContainer
     */
    protected function getContainer(ConfigAccessor \$config)
    {
        \$key = \$config->getKey();
        if (!isset(\$this->containers[\$key])) {
            \$this->containers[\$key] = new MailboxContainer(\$config);
        }

        return \$this->containers[\$key];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Organizer/MailboxOrganizer.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Organizer/MailboxOrganizer.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\MonitoredEmail\\Organizer\\MailboxOrganizer.php");
    }
}
