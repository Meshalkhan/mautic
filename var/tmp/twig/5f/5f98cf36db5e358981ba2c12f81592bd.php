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

/* @bundles/IntegrationsBundle/Auth/Provider/ApiKey/HttpFactory.php */
class __TwigTemplate_b46bc87d6efbd687e28209422a3eabf8 extends Template
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

namespace Mautic\\IntegrationsBundle\\Auth\\Provider\\ApiKey;

use GuzzleHttp\\Client;
use GuzzleHttp\\ClientInterface;
use GuzzleHttp\\Handler\\CurlHandler;
use GuzzleHttp\\HandlerStack;
use GuzzleHttp\\Middleware;
use GuzzleHttp\\Psr7\\Request;
use GuzzleHttp\\Psr7\\Uri;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\ApiKey\\Credentials\\HeaderCredentialsInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\ApiKey\\Credentials\\ParameterCredentialsInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthConfigInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthCredentialsInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthProviderInterface;
use Mautic\\IntegrationsBundle\\Exception\\InvalidCredentialsException;
use Mautic\\IntegrationsBundle\\Exception\\PluginNotConfiguredException;

/**
 * Factory for building HTTP clients using basic auth.
 */
class HttpFactory implements AuthProviderInterface
{
    public const NAME = 'api_key';

    /**
     * Cache of initialized clients.
     *
     * @var Client[]
     */
    private array \$initializedClients = [];

    private HeaderCredentialsInterface|ParameterCredentialsInterface|null \$credentials = null;

    public function getAuthType(): string
    {
        return self::NAME;
    }

    /**
     * @param HeaderCredentialsInterface|ParameterCredentialsInterface \$credentials
     *
     * @throws PluginNotConfiguredException
     * @throws InvalidCredentialsException
     */
    public function getClient(AuthCredentialsInterface \$credentials, ?AuthConfigInterface \$config = null): ClientInterface
    {
        if (!\$this->credentialsAreValid(\$credentials)) {
            throw new InvalidCredentialsException(sprintf('Credentials must implement either the %s or %s interfaces', HeaderCredentialsInterface::class, ParameterCredentialsInterface::class));
        }

        if (!\$this->credentialsAreConfigured(\$credentials)) {
            throw new PluginNotConfiguredException('API key is missing');
        }

        // Return cached initialized client if there is one.
        if (!empty(\$this->initializedClients[\$credentials->getKeyName()])) {
            return \$this->initializedClients[\$credentials->getKeyName()];
        }

        \$this->credentials = \$credentials;

        if (\$credentials instanceof HeaderCredentialsInterface) {
            \$this->initializedClients[\$credentials->getKeyName()] = \$this->getHeaderClient();

            return \$this->initializedClients[\$credentials->getKeyName()];
        }

        \$this->initializedClients[\$credentials->getKeyName()] = \$this->getParameterClient();

        return \$this->initializedClients[\$credentials->getKeyName()];
    }

    private function credentialsAreValid(AuthCredentialsInterface \$credentials): bool
    {
        return \$credentials instanceof HeaderCredentialsInterface || \$credentials instanceof ParameterCredentialsInterface;
    }

    /**
     * @param HeaderCredentialsInterface|ParameterCredentialsInterface|AuthCredentialsInterface \$credentials
     */
    private function credentialsAreConfigured(AuthCredentialsInterface \$credentials): bool
    {
        return !empty(\$credentials->getApiKey());
    }

    private function getHeaderClient(): ClientInterface
    {
        return new Client(
            [
                'headers' => [\$this->credentials->getKeyName() => \$this->credentials->getApiKey()],
            ]
        );
    }

    private function getParameterClient(): ClientInterface
    {
        \$handler = new HandlerStack();
        \$handler->setHandler(new CurlHandler());

        \$handler->unshift(
            Middleware::mapRequest(
                fn (Request \$request) => \$request->withUri(
                    Uri::withQueryValue(\$request->getUri(), \$this->credentials->getKeyName(), \$this->credentials->getApiKey())
                )
            )
        );

        return new Client(
            [
                'handler' => \$handler,
            ]
        );
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Auth/Provider/ApiKey/HttpFactory.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Auth/Provider/ApiKey/HttpFactory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Auth\\Provider\\ApiKey\\HttpFactory.php");
    }
}
