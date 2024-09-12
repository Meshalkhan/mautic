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

/* @bundles/EmailBundle/MonitoredEmail/Search/Result.php */
class __TwigTemplate_d930d7c92b47d575e38530eef6ba76a3 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Search;

use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\LeadBundle\\Entity\\Lead;

class Result
{
    private ?Stat \$stat = null;

    /**
     * @var Lead[]
     */
    private array \$contacts = [];

    /**
     * @var string
     */
    private \$email;

    /**
     * @return Stat
     */
    public function getStat()
    {
        return \$this->stat;
    }

    /**
     * @return Result
     */
    public function setStat(Stat \$stat)
    {
        \$this->stat = \$stat;

        if (\$contact = \$stat->getLead()) {
            \$this->contacts[] = \$contact;
        }

        return \$this;
    }

    /**
     * @return Lead[]
     */
    public function getContacts()
    {
        return \$this->contacts;
    }

    /**
     * @return Result
     */
    public function addContact(Lead \$contact)
    {
        \$this->contacts[] = \$contact;

        return \$this;
    }

    /**
     * @param Lead[] \$contacts
     */
    public function setContacts(array \$contacts): void
    {
        \$this->contacts = \$contacts;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return \$this->email;
    }

    /**
     * @param mixed \$email
     *
     * @return Result
     */
    public function setEmail(\$email)
    {
        \$this->email = \$email;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Search/Result.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Search/Result.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\MonitoredEmail\\Search\\Result.php");
    }
}
