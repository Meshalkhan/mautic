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

/* @bundles/CampaignBundle/Executioner/Scheduler/Mode/DAO/GroupExecutionDateDAO.php */
class __TwigTemplate_f49af4084d363fffda7a1d0080fe17fe extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Scheduler\\Mode\\DAO;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\LeadBundle\\Entity\\Lead;

class GroupExecutionDateDAO
{
    private ArrayCollection \$contacts;

    public function __construct(
        private \\DateTimeInterface \$executionDate
    ) {
        \$this->contacts      = new ArrayCollection();
    }

    public function addContact(Lead \$contact): void
    {
        \$this->contacts->set(\$contact->getId(), \$contact);
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getExecutionDate()
    {
        return \$this->executionDate;
    }

    /**
     * @return ArrayCollection
     */
    public function getContacts()
    {
        return \$this->contacts;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/Scheduler/Mode/DAO/GroupExecutionDateDAO.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Scheduler/Mode/DAO/GroupExecutionDateDAO.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Executioner\\Scheduler\\Mode\\DAO\\GroupExecutionDateDAO.php");
    }
}
