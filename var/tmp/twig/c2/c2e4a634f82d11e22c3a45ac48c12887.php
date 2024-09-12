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

/* @bundles/AssetBundle/Config/config.php */
class __TwigTemplate_8ea720f18a8a626f6b9e0d81e25086e3 extends Template
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
            'mautic_asset_index' => [
                'path'       => '/assets/{page}',
                'controller' => 'Mautic\\AssetBundle\\Controller\\AssetController::indexAction',
            ],
            'mautic_asset_remote' => [
                'path'       => '/assets/remote',
                'controller' => 'Mautic\\AssetBundle\\Controller\\AssetController::remoteAction',
            ],
            'mautic_asset_action' => [
                'path'       => '/assets/{objectAction}/{objectId}',
                'controller' => 'Mautic\\AssetBundle\\Controller\\AssetController::executeAction',
            ],
        ],
        'api' => [
            'mautic_api_assetsstandard' => [
                'standard_entity' => true,
                'name'            => 'assets',
                'path'            => '/assets',
                'controller'      => Mautic\\AssetBundle\\Controller\\Api\\AssetApiController::class,
            ],
        ],
        'public' => [
            'mautic_asset_download' => [
                'path'       => '/asset/{slug}',
                'controller' => 'Mautic\\AssetBundle\\Controller\\PublicController::downloadAction',
                'defaults'   => [
                    'slug' => '',
                ],
            ],
        ],
    ],

    'menu' => [
        'main' => [
            'items' => [
                'mautic.asset.assets' => [
                    'route'    => 'mautic_asset_index',
                    'access'   => ['asset:assets:viewown', 'asset:assets:viewother'],
                    'parent'   => 'mautic.core.components',
                    'priority' => 300,
                ],
            ],
        ],
    ],

    'categories' => [
        'asset' => null,
    ],

    'services' => [
        'permissions' => [
            'mautic.asset.permissions' => [
                'class'     => Mautic\\AssetBundle\\Security\\Permissions\\AssetPermissions::class,
                'arguments' => [
                    'mautic.helper.core_parameters',
                ],
            ],
        ],
        'others' => [
            'mautic.asset.upload.error.handler' => [
                'class'     => Mautic\\AssetBundle\\ErrorHandler\\DropzoneErrorHandler::class,
                'arguments' => 'mautic.factory',
            ],
            // Override the DropzoneController
            'oneup_uploader.controller.dropzone.class' => Mautic\\AssetBundle\\Controller\\UploadController::class,
        ],
        'fixtures' => [
            'mautic.asset.fixture.asset' => [
                'class'     => Mautic\\AssetBundle\\DataFixtures\\ORM\\LoadAssetData::class,
                'tag'       => Doctrine\\Bundle\\FixturesBundle\\DependencyInjection\\CompilerPass\\FixturesCompilerPass::FIXTURE_TAG,
            ],
        ],
    ],

    'parameters' => [
        'upload_dir'          => '%mautic.application_dir%/media/files',
        'max_size'            => '6',
        'allowed_extensions'  => ['csv', 'doc', 'docx', 'epub', 'gif', 'jpg', 'jpeg', 'mpg', 'mpeg', 'mp3', 'odt', 'odp', 'ods', 'pdf', 'png', 'ppt', 'pptx', 'tif', 'tiff', 'txt', 'xls', 'xlsx', 'wav'],
        'streamed_extensions' => ['gif', 'jpg', 'jpeg', 'mpg', 'mpeg', 'mp3', 'pdf', 'png', 'wav'],
    ],
];
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Config/config.php";
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
        return new Source("", "@bundles/AssetBundle/Config/config.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Config\\config.php");
    }
}
