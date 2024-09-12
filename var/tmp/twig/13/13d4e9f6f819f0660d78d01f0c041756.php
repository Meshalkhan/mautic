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

/* @bundles/PluginBundle/Integration/AbstractSsoServiceIntegration.php */
class __TwigTemplate_a642b6ce8ed3a558d514ed927b57eb4b extends Template
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

namespace Mautic\\PluginBundle\\Integration;

use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\UserBundle\\Entity\\Role;
use Mautic\\UserBundle\\Form\\Type\\RoleListType;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;

/**
 * Used by SSO auth plugins that use OAuth2, etc means of logins.
 */
abstract class AbstractSsoServiceIntegration extends AbstractIntegration
{
    /**
     * Called after the user is authenticated with the 3rd party service to obtain the users
     * details.
     *
     * @param \$response mixed Typically the response from request to authenticating service
     *
     * @return mixed
     */
    abstract public function getUser(\$response);

    /**
     * Get the user role for new users.
     *
     * @return bool|\\Doctrine\\Common\\Proxy\\Proxy|object|null
     *
     * @throws \\Doctrine\\ORM\\ORMException
     */
    public function getUserRole()
    {
        \$featureSettings = \$this->settings->getFeatureSettings();

        \$role = \$featureSettings['new_user_role'] ?? false;

        if (\$role) {
            return \$this->em->getReference(Role::class, \$role);
        }

        throw new AuthenticationException('mautic.integration.sso.error.no_role');
    }

    /**
     * Returns if a new user should be created if authenticated and not found locally.
     */
    public function shouldAutoCreateNewUser(): bool
    {
        \$featureSettings = \$this->settings->getFeatureSettings();

        return isset(\$featureSettings['auto_create_user']) && (bool) \$featureSettings['auto_create_user'];
    }

    /**
     * Set the callback URL to sso_login.
     */
    public function getAuthCallbackUrl()
    {
        return \$this->router->generate('mautic_sso_login_check',
            ['integration' => \$this->getName()],
            \\Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface::ABSOLUTE_URL // absolute
        );
    }

    /**
     * @param array \$settings
     * @param array \$parameters
     *
     * @return bool|string
     */
    public function ssoAuthCallback(\$settings = [], \$parameters = [])
    {
        \$response = \$this->authCallback(\$settings, \$parameters);

        // Get user data
        return \$this->getUser(\$response);
    }

    /**
     * Don't save the keys as they are only used to validate user login.
     *
     * @return array
     */
    public function extractAuthKeys(\$data, \$tokenOverride = null)
    {
        // Prepare the keys for extraction such as renaming, setting expiry, etc
        \$data = \$this->prepareResponseForExtraction(\$data);

        // parse the response
        \$authTokenKey = \$tokenOverride ?: \$this->getAuthTokenKey();
        if (is_array(\$data) && isset(\$data[\$authTokenKey])) {
            return \$data;
        }

        \$error = \$this->getErrorsFromResponse(\$data);
        if (empty(\$error)) {
            \$error = \$this->translator->trans('mautic.integration.error.genericerror', [], 'flashes');
        }

        throw new AuthenticationException(\$error);
    }

    /**
     * @return array
     */
    public function getSupportedFeatures()
    {
        return [
            'sso_service',
        ];
    }

    /**
     * Get form settings; authorization is not needed since it is done when a user logs in.
     *
     * @return array<string, mixed>
     */
    public function getFormSettings(): array
    {
        return [
            'requires_callback'      => true,
            'requires_authorization' => false,
        ];
    }

    /**
     * @param Form|\\Symfony\\Component\\Form\\FormBuilder \$builder
     * @param array                                    \$data
     * @param string                                   \$formArea
     */
    public function appendToForm(&\$builder, \$data, \$formArea): void
    {
        if ('features' == \$formArea) {
            \$builder->add('auto_create_user',
                YesNoButtonGroupType::class,
                [
                    'label' => 'mautic.integration.sso.auto_create_user',
                    'data'  => isset(\$data['auto_create_user']) && (bool) \$data['auto_create_user'],
                    'attr'  => [
                        'tooltip' => 'mautic.integration.sso.auto_create_user.tooltip',
                    ],
                ]
            );

            \$builder->add(
                'new_user_role',
                RoleListType::class,
                [
                    'label'      => 'mautic.integration.sso.new_user_role',
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'   => 'form-control',
                        'tooltip' => 'mautic.integration.sso.new_user_role.tooltip',
                    ],
                ]
            );
        }
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
        return "@bundles/PluginBundle/Integration/AbstractSsoServiceIntegration.php";
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
        return new Source("", "@bundles/PluginBundle/Integration/AbstractSsoServiceIntegration.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Integration\\AbstractSsoServiceIntegration.php");
    }
}
