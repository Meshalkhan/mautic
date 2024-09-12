<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/IntegrationsBundle/Auth/Provider/Oauth2TwoLegged/Credentials/PasswordCredentialsGrantInterface.php */
class __TwigTemplate_b5b5fb46df1e4a32729e2977af99ff9f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\Auth\\Provider\\Oauth2TwoLegged\\Credentials;

use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthCredentialsInterface;

interface PasswordCredentialsGrantInterface extends AuthCredentialsInterface
{
    public function getAuthorizationUrl(): string;

    public function getClientId(): ?string;

    public function getClientSecret(): ?string;

    public function getUsername(): ?string;

    public function getPassword(): ?string;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Auth/Provider/Oauth2TwoLegged/Credentials/PasswordCredentialsGrantInterface.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/IntegrationsBundle/Auth/Provider/Oauth2TwoLegged/Credentials/PasswordCredentialsGrantInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Auth\\Provider\\Oauth2TwoLegged\\Credentials\\PasswordCredentialsGrantInterface.php");
    }
}
