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

/* @bundles/ConfigBundle/Controller/SysinfoController.php */
class __TwigTemplate_de119340a6caf39415dd0ba96f0af9bc extends Template
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

namespace Mautic\\ConfigBundle\\Controller;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\ConfigBundle\\Model\\SysinfoModel;
use Mautic\\CoreBundle\\Controller\\FormController;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Service\\FlashBag;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\FormBundle\\Helper\\FormFieldHelper;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class SysinfoController extends FormController
{
    public function __construct(
        FormFactoryInterface \$formFactory,
        FormFieldHelper \$fieldHelper,
        private SysinfoModel \$sysinfoModel,
        ManagerRegistry \$doctrine,
        MauticFactory \$factory,
        ModelFactory \$modelFactory,
        UserHelper \$userHelper,
        CoreParametersHelper \$coreParametersHelper,
        EventDispatcherInterface \$dispatcher,
        Translator \$translator,
        FlashBag \$flashBag,
        RequestStack \$requestStack,
        CorePermissions \$security
    ) {
        parent::__construct(\$formFactory, \$fieldHelper, \$doctrine, \$factory, \$modelFactory, \$userHelper, \$coreParametersHelper, \$dispatcher, \$translator, \$flashBag, \$requestStack, \$security);
    }

    /**
     * @return JsonResponse|\\Symfony\\Component\\HttpFoundation\\Response
     */
    public function indexAction()
    {
        if (!\$this->user->isAdmin() || \$this->coreParametersHelper->get('sysinfo_disabled')) {
            return \$this->accessDenied();
        }

        return \$this->delegateView([
            'viewParameters' => [
                'phpInfo'         => \$this->sysinfoModel->getPhpInfo(),
                'requirements'    => \$this->sysinfoModel->getRequirements(),
                'recommendations' => \$this->sysinfoModel->getRecommendations(),
                'folders'         => \$this->sysinfoModel->getFolders(),
                'log'             => \$this->sysinfoModel->getLogTail(200),
                'dbInfo'          => \$this->sysinfoModel->getDbInfo(),
            ],
            'contentTemplate' => '@MauticConfig/Sysinfo/index.html.twig',
            'passthroughVars' => [
                'activeLink'    => '#mautic_sysinfo_index',
                'mauticContent' => 'sysinfo',
                'route'         => \$this->generateUrl('mautic_sysinfo_index'),
            ],
        ]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ConfigBundle/Controller/SysinfoController.php";
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
        return new Source("", "@bundles/ConfigBundle/Controller/SysinfoController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ConfigBundle\\Controller\\SysinfoController.php");
    }
}
