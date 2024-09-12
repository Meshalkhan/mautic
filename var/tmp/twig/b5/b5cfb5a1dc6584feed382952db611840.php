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

/* @bundles/PluginBundle/Config/config.php */
class __TwigTemplate_5e9fa53c004f5fa707f2ef5f8026a290 extends Template
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

return [
    'routes' => [
        'main' => [
            'mautic_integration_auth_callback_secure' => [
                'path'       => '/plugins/integrations/authcallback/{integration}',
                'controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authCallbackAction',
            ],
            'mautic_integration_auth_postauth_secure' => [
                'path'       => '/plugins/integrations/authstatus/{integration}',
                'controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authStatusAction',
            ],
            'mautic_plugin_index' => [
                'path'       => '/plugins',
                'controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::indexAction',
            ],
            'mautic_plugin_config' => [
                'path'       => '/plugins/config/{name}/{page}',
                'controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::configAction',
            ],
            'mautic_plugin_info' => [
                'path'       => '/plugins/info/{name}',
                'controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::infoAction',
            ],
            'mautic_plugin_reload' => [
                'path'       => '/plugins/reload',
                'controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::reloadAction',
            ],
        ],
        'public' => [
            'mautic_integration_auth_user' => [
                'path'       => '/plugins/integrations/authuser/{integration}',
                'controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authUserAction',
            ],
            'mautic_integration_auth_callback' => [
                'path'       => '/plugins/integrations/authcallback/{integration}',
                'controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authCallbackAction',
            ],
            'mautic_integration_auth_postauth' => [
                'path'       => '/plugins/integrations/authstatus/{integration}',
                'controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authStatusAction',
            ],
        ],
    ],
    'menu' => [
        'admin' => [
            'priority' => 50,
            'items'    => [
                'mautic.plugin.plugins' => [
                    'id'        => 'mautic_plugin_root',
                    'access'    => 'plugin:plugins:manage',
                    'route'     => 'mautic_plugin_index',
                    'parent'    => 'mautic.core.integrations',
                ],
            ],
        ],
    ],

    'services' => [
        'other' => [
            'mautic.helper.integration' => [
                'class'     => Mautic\\PluginBundle\\Helper\\IntegrationHelper::class,
                'arguments' => [
                    'service_container',
                    'doctrine.orm.entity_manager',
                    'mautic.helper.paths',
                    'mautic.helper.bundle',
                    'mautic.helper.core_parameters',
                    'twig',
                    'mautic.plugin.model.plugin',
                ],
            ],
            'mautic.plugin.helper.reload' => [
                'class'     => Mautic\\PluginBundle\\Helper\\ReloadHelper::class,
                'arguments' => [
                    'event_dispatcher',
                    'mautic.factory',
                ],
            ],
        ],
        'facades' => [
            'mautic.plugin.facade.reload' => [
                'class'     => Mautic\\PluginBundle\\Facade\\ReloadFacade::class,
                'arguments' => [
                    'mautic.plugin.model.plugin',
                    'mautic.plugin.helper.reload',
                    'translator',
                ],
            ],
        ],
    ],
];
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Config/config.php";
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
        return new Source("", "@bundles/PluginBundle/Config/config.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Config\\config.php");
    }
}
