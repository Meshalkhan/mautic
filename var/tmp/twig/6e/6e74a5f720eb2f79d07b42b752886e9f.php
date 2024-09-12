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

/* @bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/TokenPersistence.php */
class __TwigTemplate_390ad235291279c044e2bb0f18010662 extends Template
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

namespace Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\Token;

use kamermans\\OAuth2\\Persistence\\TokenPersistenceInterface;
use kamermans\\OAuth2\\Token\\TokenInterface;
use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotSetException;
use Mautic\\IntegrationsBundle\\Helper\\IntegrationsHelper;
use Mautic\\PluginBundle\\Entity\\Integration;

class TokenPersistence implements TokenPersistenceInterface
{
    private ?Integration \$integration = null;

    public function __construct(
        private IntegrationsHelper \$integrationsHelper
    ) {
    }

    /**
     * Restore the token data into the give token.
     *
     * @param TokenInterface|IntegrationToken \$token
     *
     * @return TokenInterface|IntegrationToken Restored token
     */
    public function restoreToken(TokenInterface \$token): TokenInterface
    {
        \$apiKeys               = \$this->getIntegration()->getApiKeys();
        \$apiKeys['expires_at'] ??= null;

        return new IntegrationToken(
            empty(\$apiKeys['access_token']) ? null : \$apiKeys['access_token'],
            empty(\$apiKeys['refresh_token']) ? null : \$apiKeys['refresh_token'],
            \$apiKeys['expires_at'] ?? null
        );
    }

    /**
     * Save the token data.
     *
     * @param TokenInterface|IntegrationToken \$token
     */
    public function saveToken(TokenInterface \$token): void
    {
        \$integration = \$this->getIntegration();
        \$oldApiKeys  = \$integration->getApiKeys();

        if (null === \$oldApiKeys) {
            \$oldApiKeys = [];
        }

        \$newApiKeys = [
            'access_token'  => \$token->getAccessToken(),
            'refresh_token' => \$token->getRefreshToken(),
            'expires_at'    => \$token->getExpiresAt(),
        ];

        \$extraData  = \$token instanceof IntegrationToken ? \$token->getExtraData() : [];
        \$newApiKeys = array_merge(\$oldApiKeys, \$extraData, \$newApiKeys);

        \$integration->setApiKeys(\$newApiKeys);
        \$this->integrationsHelper->saveIntegrationConfiguration(\$integration);
    }

    /**
     * Delete the saved token data.
     */
    public function deleteToken(): void
    {
        \$integration = \$this->getIntegration();

        \$apiKeys = \$integration->getApiKeys();

        // Must delete both the access token and the expiration in order for the middleware to refresh
        unset(\$apiKeys['access_token'], \$apiKeys['expires_at']);

        \$integration->setApiKeys(\$apiKeys);

        \$this->integrationsHelper->saveIntegrationConfiguration(\$integration);
    }

    /**
     * Returns true if a token exists (although it may not be valid).
     */
    public function hasToken(): bool
    {
        return !empty(\$this->getIntegration()->getApiKeys()['access_token']);
    }

    public function setIntegration(Integration \$integration): void
    {
        \$this->integration = \$integration;
    }

    /**
     * @throws IntegrationNotSetException
     */
    private function getIntegration(): Integration
    {
        if (\$this->integration) {
            return \$this->integration;
        }

        throw new IntegrationNotSetException('Integration not set');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/TokenPersistence.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/TokenPersistence.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Auth\\Support\\Oauth2\\Token\\TokenPersistence.php");
    }
}
