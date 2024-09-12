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

/* @bundles/IntegrationsBundle/Auth/Provider/Oauth2ThreeLegged/Credentials/CredentialsInterface.php */
class __TwigTemplate_1dde4c0dbe406d7ab535651eb798491d extends Template
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

namespace Mautic\\IntegrationsBundle\\Auth\\Provider\\Oauth2ThreeLegged\\Credentials;

use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthCredentialsInterface;

interface CredentialsInterface extends AuthCredentialsInterface
{
    public function getAuthorizationUrl(): string;

    public function getTokenUrl(): string;

    public function getClientId(): ?string;

    public function getClientSecret(): ?string;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Auth/Provider/Oauth2ThreeLegged/Credentials/CredentialsInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Auth/Provider/Oauth2ThreeLegged/Credentials/CredentialsInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Auth\\Provider\\Oauth2ThreeLegged\\Credentials\\CredentialsInterface.php");
    }
}
