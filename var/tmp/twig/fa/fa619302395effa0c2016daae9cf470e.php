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

/* @bundles/DashboardBundle/Config/config.php */
class __TwigTemplate_209c80ba2412662da1fb49957c2d3d55 extends Template
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
            'mautic_dashboard_index' => [
                'path'       => '/dashboard',
                'controller' => 'Mautic\\DashboardBundle\\Controller\\DashboardController::indexAction',
            ],
            'mautic_dashboard_widget' => [
                'path'       => '/dashboard/widget/{widgetId}',
                'controller' => 'Mautic\\DashboardBundle\\Controller\\DashboardController::widgetAction',
            ],
            'mautic_dashboard_action' => [
                'path'       => '/dashboard/{objectAction}/{objectId}',
                'controller' => 'Mautic\\DashboardBundle\\Controller\\DashboardController::executeAction',
            ],
        ],
        'api' => [
            'mautic_widget_types' => [
                'path'       => '/data',
                'controller' => 'Mautic\\DashboardBundle\\Controller\\Api\\WidgetApiController::getTypesAction',
            ],
            'mautic_widget_data' => [
                'path'       => '/data/{type}',
                'controller' => 'Mautic\\DashboardBundle\\Controller\\Api\\WidgetApiController::getDataAction',
            ],
        ],
    ],

    'menu' => [
        'main' => [
            'priority' => 100,
            'items'    => [
                'mautic.dashboard.menu.index' => [
                    'route'     => 'mautic_dashboard_index',
                    'iconClass' => 'ri-funds-fill',
                ],
            ],
        ],
    ],
    'services' => [
        'other' => [
            'mautic.dashboard.widget' => [
                'class'     => Mautic\\DashboardBundle\\Dashboard\\Widget::class,
                'arguments' => [
                    'mautic.dashboard.model.dashboard',
                    'mautic.helper.user',
                    'session',
                ],
            ],
        ],
    ],
    'parameters' => [
        'dashboard_import_dir'      => '%mautic.application_dir%/app/assets/dashboards',
        'dashboard_import_user_dir' => '%mautic.application_dir%/media/dashboards',
    ],
];
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Config/config.php";
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
        return new Source("", "@bundles/DashboardBundle/Config/config.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DashboardBundle\\Config\\config.php");
    }
}
