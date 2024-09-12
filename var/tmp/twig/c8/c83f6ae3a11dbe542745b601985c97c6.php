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

/* @bundles/IntegrationsBundle/Auth/Support/Oauth2/ConfigAccess/ConfigTokenFactoryInterface.php */
class __TwigTemplate_84648f9cef66742584f15aedda8125c3 extends Template
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

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\ConfigAccess;

use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthConfigInterface;
use Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\Token\\TokenFactoryInterface;

interface ConfigTokenFactoryInterface extends AuthConfigInterface
{
    public function getTokenFactory(): TokenFactoryInterface;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Auth/Support/Oauth2/ConfigAccess/ConfigTokenFactoryInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Auth/Support/Oauth2/ConfigAccess/ConfigTokenFactoryInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Auth\\Support\\Oauth2\\ConfigAccess\\ConfigTokenFactoryInterface.php");
    }
}
