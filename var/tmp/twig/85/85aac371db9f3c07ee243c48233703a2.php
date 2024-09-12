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

/* @bundles/IntegrationsBundle/Auth/Support/Oauth2/ConfigAccess/ConfigTokenSignerInterface.php */
class __TwigTemplate_de3b521ac590cf7f3978cc2b8e2b9415 extends Template
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

use kamermans\\OAuth2\\Signer\\AccessToken\\SignerInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthConfigInterface;

interface ConfigTokenSignerInterface extends AuthConfigInterface
{
    public function getTokenSigner(): SignerInterface;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Auth/Support/Oauth2/ConfigAccess/ConfigTokenSignerInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Auth/Support/Oauth2/ConfigAccess/ConfigTokenSignerInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Auth\\Support\\Oauth2\\ConfigAccess\\ConfigTokenSignerInterface.php");
    }
}
