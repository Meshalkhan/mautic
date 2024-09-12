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

/* @bundles/StageBundle/Config/config.php */
class __TwigTemplate_34b5dace54ec4a264e785a823b09a59a extends Template
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
            'mautic_stage_index' => [
                'path'       => '/stages/{page}',
                'controller' => 'Mautic\\StageBundle\\Controller\\StageController::indexAction',
            ],
            'mautic_stage_action' => [
                'path'       => '/stages/{objectAction}/{objectId}',
                'controller' => 'Mautic\\StageBundle\\Controller\\StageController::executeAction',
            ],
        ],
        'api' => [
            'mautic_api_stagesstandard' => [
                'standard_entity' => true,
                'name'            => 'stages',
                'path'            => '/stages',
                'controller'      => Mautic\\StageBundle\\Controller\\Api\\StageApiController::class,
            ],
            'mautic_api_stageddcontact' => [
                'path'       => '/stages/{id}/contact/{contactId}/add',
                'controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::addContactAction',
                'method'     => 'POST',
            ],
            'mautic_api_stageremovecontact' => [
                'path'       => '/stages/{id}/contact/{contactId}/remove',
                'controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::removeContactAction',
                'method'     => 'POST',
            ],
        ],
    ],

    'menu' => [
        'main' => [
            'mautic.stages.menu.index' => [
                'route'     => 'mautic_stage_index',
                'iconClass' => 'ri-barricade-fill flip-vertically',
                'access'    => ['stage:stages:view'],
                'priority'  => 25,
            ],
        ],
    ],

    'categories' => [
        'stage' => null,
    ],
];
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StageBundle/Config/config.php";
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
        return new Source("", "@bundles/StageBundle/Config/config.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\StageBundle\\Config\\config.php");
    }
}
