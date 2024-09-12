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

/* @bundles/CampaignBundle/Membership/Exception/RunLimitReachedException.php */
class __TwigTemplate_13b3d0b1e87e809e4c7966cc19bd0e9d extends Template
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

namespace Mautic\\CampaignBundle\\Membership\\Exception;

class RunLimitReachedException extends \\Exception
{
    private int \$contactsProcessed;

    public function __construct(\$contactsProcessed)
    {
        \$this->contactsProcessed = (int) \$contactsProcessed;

        parent::__construct();
    }

    public function getContactsProcessed(): int
    {
        return \$this->contactsProcessed;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Membership/Exception/RunLimitReachedException.php";
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
        return new Source("", "@bundles/CampaignBundle/Membership/Exception/RunLimitReachedException.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Membership\\Exception\\RunLimitReachedException.php");
    }
}
