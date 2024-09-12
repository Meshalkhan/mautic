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

/* @bundles/DynamicContentBundle/Config/config.php */
class __TwigTemplate_11695aa7669751539fcdcc7b43b4c9db extends Template
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
    'menu' => [
        'main' => [
            'items' => [
                'mautic.dynamicContent.dynamicContent' => [
                    'route'    => 'mautic_dynamicContent_index',
                    'access'   => ['dynamiccontent:dynamiccontents:viewown', 'dynamiccontent:dynamiccontents:viewother'],
                    'parent'   => 'mautic.core.components',
                    'priority' => 90,
                ],
            ],
        ],
    ],
    'routes' => [
        'main' => [
            'mautic_dynamicContent_index' => [
                'path'       => '/dwc/{page}',
                'controller' => 'Mautic\\DynamicContentBundle\\Controller\\DynamicContentController::indexAction',
            ],
            'mautic_dynamicContent_action' => [
                'path'       => '/dwc/{objectAction}/{objectId}',
                'controller' => 'Mautic\\DynamicContentBundle\\Controller\\DynamicContentController::executeAction',
            ],
        ],
        'public' => [
            'mautic_api_dynamicContent_index' => [
                'path'       => '/dwc',
                'controller' => 'Mautic\\DynamicContentBundle\\Controller\\DynamicContentApiController::getAction',
            ],
            'mautic_api_dynamicContent_action' => [
                'path'       => '/dwc/{objectAlias}',
                'controller' => 'Mautic\\DynamicContentBundle\\Controller\\DynamicContentApiController::processAction',
            ],
        ],
        'api' => [
            'mautic_api_dynamicContent_standard' => [
                'standard_entity' => true,
                'name'            => 'dynamicContents',
                'path'            => '/dynamiccontents',
                'controller'      => Mautic\\DynamicContentBundle\\Controller\\Api\\DynamicContentApiController::class,
            ],
        ],
    ],
    'services' => [
        'forms' => [
            'mautic.form.type.dwc_entry_filters' => [
                'class'     => Mautic\\DynamicContentBundle\\Form\\Type\\DwcEntryFiltersType::class,
                'arguments' => [
                    'translator',
                    'mautic.lead.model.list',
                ],
                'methodCalls' => [
                    'setConnection' => [
                        'database_connection',
                    ],
                ],
            ],
        ],
        'other' => [
            'mautic.helper.dynamicContent' => [
                'class'     => Mautic\\DynamicContentBundle\\Helper\\DynamicContentHelper::class,
                'arguments' => [
                    'mautic.dynamicContent.model.dynamicContent',
                    'mautic.campaign.executioner.realtime',
                    'event_dispatcher',
                    'mautic.lead.model.lead',
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
        return "@bundles/DynamicContentBundle/Config/config.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Config/config.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DynamicContentBundle\\Config\\config.php");
    }
}
