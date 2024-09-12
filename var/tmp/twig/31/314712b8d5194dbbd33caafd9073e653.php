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

/* @bundles/IntegrationsBundle/Auth/Provider/BasicAuth/HttpFactory.php */
class __TwigTemplate_4f9e3ed03c3c1d25b2f0925bf6162ced extends Template
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

namespace Mautic\\IntegrationsBundle\\Auth\\Provider\\BasicAuth;

use GuzzleHttp\\Client;
use GuzzleHttp\\ClientInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthConfigInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthCredentialsInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthProviderInterface;
use Mautic\\IntegrationsBundle\\Exception\\PluginNotConfiguredException;

/**
 * Factory for building HTTP clients using basic auth.
 */
class HttpFactory implements AuthProviderInterface
{
    public const NAME = 'basic_auth';

    /**
     * Cache of initialized clients.
     *
     * @var Client[]
     */
    private array \$initializedClients = [];

    public function getAuthType(): string
    {
        return self::NAME;
    }

    /**
     * @param CredentialsInterface|AuthCredentialsInterface \$credentials
     *
     * @throws PluginNotConfiguredException
     */
    public function getClient(AuthCredentialsInterface \$credentials, ?AuthConfigInterface \$config = null): ClientInterface
    {
        if (!\$this->credentialsAreConfigured(\$credentials)) {
            throw new PluginNotConfiguredException('Username and/or password is missing');
        }

        // Return cached initialized client if there is one.
        if (!empty(\$this->initializedClients[\$credentials->getUsername()])) {
            return \$this->initializedClients[\$credentials->getUsername()];
        }

        \$this->initializedClients[\$credentials->getUsername()] = new Client(
            [
                'auth' => [
                    \$credentials->getUsername(),
                    \$credentials->getPassword(),
                ],
            ]
        );

        return \$this->initializedClients[\$credentials->getUsername()];
    }

    protected function credentialsAreConfigured(CredentialsInterface \$credentials): bool
    {
        return \$credentials->getUsername() && \$credentials->getPassword();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Auth/Provider/BasicAuth/HttpFactory.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Auth/Provider/BasicAuth/HttpFactory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Auth\\Provider\\BasicAuth\\HttpFactory.php");
    }
}
