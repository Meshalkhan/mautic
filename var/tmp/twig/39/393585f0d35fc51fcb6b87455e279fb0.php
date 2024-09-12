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

/* @bundles/ConfigBundle/Config/config.php */
class __TwigTemplate_bfb1d5aae4e51bc14a74b4b980abbe95 extends Template
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
            'mautic_config_action' => [
                'path'       => '/config/{objectAction}/{objectId}',
                'controller' => 'Mautic\\ConfigBundle\\Controller\\ConfigController::executeAction',
            ],
            'mautic_sysinfo_index' => [
                'path'       => '/sysinfo',
                'controller' => 'Mautic\\ConfigBundle\\Controller\\SysinfoController::indexAction',
            ],
        ],
    ],

    'menu' => [
        'admin' => [
            'mautic.config.menu.index' => [
                'route'           => 'mautic_config_action',
                'routeParameters' => ['objectAction' => 'edit'],
                'iconClass'       => 'ri-settings-5-line',
                'id'              => 'mautic_config_index',
                'access'          => 'admin',
                'priority'        => 16,
            ],
            'mautic.sysinfo.menu.index' => [
                'route'     => 'mautic_sysinfo_index',
                'iconClass' => 'ri-information-2-fill',
                'id'        => 'mautic_sysinfo_index',
                'access'    => 'admin',
                'priority'  => 04,
                'checks'    => [
                    'parameters' => [
                        'sysinfo_disabled' => false,
                    ],
                ],
            ],
        ],
    ],

    'parameters' => [
        'config_allowed_parameters' => [
            'kernel.project_dir',
            'kernel.logs_dir',
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
        return "@bundles/ConfigBundle/Config/config.php";
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
        return new Source("", "@bundles/ConfigBundle/Config/config.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ConfigBundle\\Config\\config.php");
    }
}
