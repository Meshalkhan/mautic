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

/* @bundles/EmailBundle/Stat/Reference.php */
class __TwigTemplate_3ff04c08a610ad17ba702a4d95eb0f6e extends Template
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

namespace Mautic\\EmailBundle\\Stat;

use Mautic\\EmailBundle\\Entity\\Stat;

class Reference
{
    private ?int \$emailId;

    /**
     * @var int
     */
    private \$leadId = 0;

    private ?int \$statId;

    public function __construct(Stat \$stat)
    {
        \$this->statId  = \$stat->getId();
        \$this->emailId = \$stat->getEmail()->getId();
        if (\$lead = \$stat->getLead()) {
            \$this->leadId = \$lead->getId();
        }
    }

    /**
     * @return int
     */
    public function getEmailId()
    {
        return \$this->emailId;
    }

    /**
     * @return int
     */
    public function getLeadId()
    {
        return \$this->leadId;
    }

    /**
     * @return mixed
     */
    public function getStatId()
    {
        return \$this->statId;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Stat/Reference.php";
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
        return new Source("", "@bundles/EmailBundle/Stat/Reference.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Stat\\Reference.php");
    }
}
