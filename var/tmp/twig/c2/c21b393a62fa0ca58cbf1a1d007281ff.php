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

/* @bundles/CategoryBundle/Controller/Api/CategoryApiController.php */
class __TwigTemplate_187fe9e35944fee5865d07323123bcf5 extends Template
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

namespace Mautic\\CategoryBundle\\Controller\\Api;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\ApiBundle\\Helper\\EntityResultHelper;
use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CategoryBundle\\Model\\CategoryModel;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\AppVersion;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<Category>
 */
class CategoryApiController extends CommonApiController
{
    public function __construct(CorePermissions \$security, Translator \$translator, EntityResultHelper \$entityResultHelper, RouterInterface \$router, FormFactoryInterface \$formFactory, AppVersion \$appVersion, RequestStack \$requestStack, ManagerRegistry \$doctrine, ModelFactory \$modelFactory, EventDispatcherInterface \$dispatcher, CoreParametersHelper \$coreParametersHelper, MauticFactory \$factory)
    {
        \$categoryModel = \$modelFactory->getModel('category');
        \\assert(\$categoryModel instanceof CategoryModel);

        \$this->model            = \$categoryModel;
        \$this->entityClass      = Category::class;
        \$this->entityNameOne    = 'category';
        \$this->entityNameMulti  = 'categories';
        \$this->serializerGroups = ['categoryDetails'];

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    /**
     * Checks if user has permission to access retrieved entity.
     *
     * @param Category \$entity
     * @param string   \$action view|create|edit|publish|delete
     *
     * @return bool
     */
    protected function checkEntityAccess(\$entity, \$action = 'view')
    {
        if (!\$bundle = \$entity->getBundle()) {
            \$bundle = 'category';
        }

        \$permissionBase = \$this->permissionBase;

        if (\$this->security->checkPermissionExists(\$bundle.':categories:'.\$action)) {
            // An entity specific category permission rule exists
            \$permissionBase = \$bundle.':categories';
        }

        if ('create' != \$action) {
            \$ownPerm   = \"\$permissionBase:{\$action}own\";
            \$otherPerm = \"\$permissionBase:{\$action}other\";

            return \$this->security->hasEntityAccess(\$ownPerm, \$otherPerm, \$entity->getCreatedBy());
        }

        return \$this->security->isGranted(\"\$permissionBase:create\");
    }

    /**
     * @return array<string, mixed>
     */
    protected function getEntityFormOptions(): array
    {
        return ['show_bundle_select' => true];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Controller/Api/CategoryApiController.php";
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
        return new Source("", "@bundles/CategoryBundle/Controller/Api/CategoryApiController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CategoryBundle\\Controller\\Api\\CategoryApiController.php");
    }
}
