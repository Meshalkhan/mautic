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

/* @bundles/CampaignBundle/Membership/Exception/ContactAlreadyRemovedFromCampaignException.php */
class __TwigTemplate_5ec748e8707c0df816986ce659a9e804 extends Template
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

use Mautic\\CoreBundle\\Exception\\FlattenableException;

class ContactAlreadyRemovedFromCampaignException extends FlattenableException
{
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Membership/Exception/ContactAlreadyRemovedFromCampaignException.php";
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
        return new Source("", "@bundles/CampaignBundle/Membership/Exception/ContactAlreadyRemovedFromCampaignException.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Membership\\Exception\\ContactAlreadyRemovedFromCampaignException.php");
    }
}
