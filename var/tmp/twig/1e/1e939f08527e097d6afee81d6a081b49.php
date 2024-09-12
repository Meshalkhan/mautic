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

/* @bundles/ApiBundle/Translations/en_US/messages.ini */
class __TwigTemplate_4fe4d4fd51f2e128e60ae30623ac3122 extends Template
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
        yield "mautic.api.auth.error.accessdenied=\"API authorization denied.\"
mautic.api.auth.error.apidisabled=\"API access has been disabled. Please contact the system administrator\"
mautic.api.auth.error.parameter_absent=\"The request has a missing parameter. If all parameters are present, a common reason for this error is typos in the Authorization header. Check for spelling errors, misplaced single/double quotes. etc. Remember that each OAuth Protocol parameter value must to be enclosed double quotes.\"
mautic.api.auth.error.timestamp_refused=\"The timestamp provided is invalid (either it doesn't have the right format, or it's out of the acceptable window).\"
mautic.api.auth.error.nonce_used=\"The nonce received is not acceptable.\"
mautic.api.auth.error.signature_method_rejected=\"The signature method used is unsupported.\"
mautic.api.auth.error.signature_invalid=\"The signature provided does not match the one calculated by the service.\"
mautic.api.auth.error.consumer_key_unknown=\"The consumer key provided is unsupported.\"
mautic.api.auth.error.token_expired=\"The access token provided is valid, but has expired.\"
mautic.api.auth.error.token_rejected=\"The token provided does not have the right format.\"
mautic.api.auth.error.additional_authorization_required=\"The access token does not have the correct access scopes.\"
permission_denied=\"The access session handle (ASH) has expired or is invalid.\"
mautic.api.call.notfound=\"Object not found.\"
mautic.api.call.batch_exception=\"A max of %limit% entities are supported at a time.\"
mautic.api.call.id_missing=\"ID is missing from the payload.\"
mautic.api.client.form.auth_protocol=\"Authorization Protocol\"
mautic.api.client.form.clientid=\"Client ID\"
mautic.api.client.form.clientsecret=\"Client Secret\"
mautic.api.client.form.confirmdelete=\"Delete the API client, %name%? Applications using this client will no longer have access to Mautic's API.\"
mautic.api.client.form.confirmrevoke=\"Revoke access for %name%?\"
mautic.api.client.form.help.callback=\"Specify a callback URI that is allowed. Leave blank to restrict callbacks.\"
mautic.api.client.form.help.requesturis=\"Specify the URI(s) that are allowed API access. You can submit multiple URIs by separating them with commas.\"
mautic.api.client.form.name=\"Client Name\"
mautic.api.client.form.revoke=\"Revoke Access\"
mautic.api.client.header.edit=\"Credentials - Edit %name%\"
mautic.api.client.header.index=\"API Credentials (Applications)\"
mautic.api.client.header.new=\"Credentials - New Credential\"
mautic.api.client.help.searchcommands=\"<strong>Search commands</strong><br />name:*<br />ids:ID1,ID2 (comma separated IDs, no spaces)<br />callback:* (OAuth 1.0a)<br />redirecturi:* (OAuth 2)\"
mautic.api.client.menu.index=\"API Credentials\"
mautic.api.client.redirecturis=\"Redirect URI\"
mautic.api.client.searchcommand.callback=\"callback\"
mautic.api.client.searchcommand.redirecturi=\"redirecturi\"
mautic.api.client.thead.publicid=\"Public Key\"
mautic.api.client.thead.secret=\"Secret Key\"
mautic.api.config.form.api.enabled=\"API enabled?\"
mautic.api.config.form.api.basic_auth_enabled=\"Enable HTTP basic auth?\"
mautic.api.config.form.api.basic_auth.tooltip=\"Enable HTTP basic authentication for Mautic's API. It is highly recommended to only use this with secure sites (HTTPS).\"
mautic.api.config.form.api.enabled.tooltip=\"Enable Mautic's API?\"
mautic.api.config.form.api.oauth2_access_token_lifetime=\"Access token lifetime (in minutes)\"
mautic.api.config.form.api.oauth2_access_token_lifetime.tooltip=\"If using OAuth2, set the lifetime of the access tokens used to authorize the request. Defaults to 60 minutes.\"
mautic.api.config.form.api.oauth2_refresh_token_lifetime=\"Refresh token lifetime (in days)\"
mautic.api.config.form.api.oauth2_refresh_token_lifetime.tooltip=\"If using OAuth2, set the lifetime of the refresh tokens which is used to request a new access token once expired. Once the refresh token expires, reauthorization is required. Defaults to 14 days.\"
mautic.api.config.oauth2=\"OAuth2\"
mautic.api.oauth.accept=\"Accept\"
mautic.api.oauth.auth.failed=\"OAuth authentication failed!\"
mautic.api.oauth.clientnoname=\"An application would like to connect to your account.\"
mautic.api.oauth.clientwithname=\"The application <strong>%name%</strong> would like to connect to your account.\"
mautic.api.oauth.deny=\"Deny\"
mautic.api.oauth.header=\"OAuth Authorization\"
mautic.api.permissions.apiaccess=\"API Access\"
mautic.api.permissions.clients=\"Clients (Applications) - User has access to\"
mautic.api.permissions.granted=\"Granted\"
mautic.api.permissions.header=\"API Permissions\"
mautic.config.tab.apiconfig=\"API Settings\"
mautic.core.error.badrequest=\"Bad request.\"
mautic.api.error.api.disabled=\"API disabled. You need to enable the API in the API settings of Mautic's Configuration.\"
mautic.api.error.basic.auth.disabled=\"Basic Auth disabled. You need to enable HTTP basic auth in the API settings of Mautic's Configuration.\"
mautic.api.error.basic.auth.invalid.credentials=\"Authorization denied, invalid credentials.\"";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ApiBundle/Translations/en_US/messages.ini";
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
        return new Source("", "@bundles/ApiBundle/Translations/en_US/messages.ini", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Translations\\en_US\\messages.ini");
    }
}
