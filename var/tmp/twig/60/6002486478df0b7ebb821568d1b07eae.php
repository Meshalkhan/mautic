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

/* @bundles/IntegrationsBundle/Auth/Provider/Oauth2ThreeLegged/AuthorizatorInterface.php */
class __TwigTemplate_55d2b204ba165eaefbe47f30cadf885e extends Template
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

namespace Mautic\\IntegrationsBundle\\Auth\\Provider\\Oauth2ThreeLegged;

use Symfony\\Component\\HttpFoundation\\Request;

/**
 * @deprecated; Use Credentials\\CredentialsInterface and \\Mautic\\IntegrationsBundle\\Integration\\Interfaces\\AuthenticationInterface instead
 */
interface AuthorizatorInterface
{
    public function isAuthorized(): bool;

    public function getAccessToken(): string;

    public function getAuthorizationUri(CredentialsInterface \$credentials): string;

    public function handleCallback(Request \$request): void;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Auth/Provider/Oauth2ThreeLegged/AuthorizatorInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Auth/Provider/Oauth2ThreeLegged/AuthorizatorInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Auth\\Provider\\Oauth2ThreeLegged\\AuthorizatorInterface.php");
    }
}
