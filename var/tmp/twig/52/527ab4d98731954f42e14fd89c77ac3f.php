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

/* @bundles/PageBundle/Controller/Api/PageApiController.php */
class __TwigTemplate_3fd96d6aa6a2715666051379eef5cd24 extends Template
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

namespace Mautic\\PageBundle\\Controller\\Api;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\ApiBundle\\Helper\\EntityResultHelper;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\AppVersion;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\PageBundle\\Entity\\Page;
use Mautic\\PageBundle\\Model\\PageModel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<Page>
 */
class PageApiController extends CommonApiController
{
    /**
     * @var PageModel|null
     */
    protected \$model;

    public function __construct(CorePermissions \$security, Translator \$translator, EntityResultHelper \$entityResultHelper, RouterInterface \$router, FormFactoryInterface \$formFactory, AppVersion \$appVersion, RequestStack \$requestStack, ManagerRegistry \$doctrine, ModelFactory \$modelFactory, EventDispatcherInterface \$dispatcher, CoreParametersHelper \$coreParametersHelper, MauticFactory \$factory)
    {
        \$pageModel = \$modelFactory->getModel('page');
        \\assert(\$pageModel instanceof PageModel);

        \$this->model            = \$pageModel;
        \$this->entityClass      = Page::class;
        \$this->entityNameOne    = 'page';
        \$this->entityNameMulti  = 'pages';
        \$this->serializerGroups = ['pageDetails', 'categoryList', 'publishDetails'];
        \$this->dataInputMasks   = ['customHtml' => 'html'];

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    /**
     * Obtains a list of pages.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function getEntitiesAction(Request \$request, UserHelper \$userHelper)
    {
        // get parent level only
        \$this->listFilters[] = [
            'column' => 'p.variantParent',
            'expr'   => 'isNull',
        ];

        \$this->listFilters[] = [
            'column' => 'p.translationParent',
            'expr'   => 'isNull',
        ];

        return parent::getEntitiesAction(\$request, \$userHelper);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Controller/Api/PageApiController.php";
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
        return new Source("", "@bundles/PageBundle/Controller/Api/PageApiController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Controller\\Api\\PageApiController.php");
    }
}
