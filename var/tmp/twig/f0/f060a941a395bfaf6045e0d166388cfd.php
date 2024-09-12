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

/* @bundles/CampaignBundle/Executioner/Dispatcher/Exception/LogPassedAndFailedException.php */
class __TwigTemplate_d38e5afa7375e4fdd8d9d3b344619e90 extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Dispatcher\\Exception;

use Mautic\\CampaignBundle\\Entity\\LeadEventLog;

class LogPassedAndFailedException extends \\Exception
{
    public function __construct(LeadEventLog \$log)
    {
        parent::__construct(\"LeadEventLog ID # {\$log->getId()} was passed to both pass() or fail(). Pass or fail the log, not both.\", 0, null);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/Dispatcher/Exception/LogPassedAndFailedException.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Dispatcher/Exception/LogPassedAndFailedException.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Executioner\\Dispatcher\\Exception\\LogPassedAndFailedException.php");
    }
}
