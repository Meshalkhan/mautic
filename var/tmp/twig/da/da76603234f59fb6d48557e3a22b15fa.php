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

/* @bundles/MarketplaceBundle/Controller/CacheController.php */
class __TwigTemplate_5c3a37a3c13840cd90440218791b7196 extends Template
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

declare(strict_types=1);

namespace Mautic\\MarketplaceBundle\\Controller;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\CoreBundle\\Controller\\CommonController;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Service\\FlashBag;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\MarketplaceBundle\\Security\\Permissions\\MarketplacePermissions;
use Mautic\\MarketplaceBundle\\Service\\Allowlist;
use Mautic\\MarketplaceBundle\\Service\\Config;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;

class CacheController extends CommonController
{
    public function __construct(
        private Config \$config,
        private Allowlist \$allowlist,
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
        parent::__construct(\$doctrine, \$factory, \$modelFactory, \$userHelper, \$coreParametersHelper, \$dispatcher, \$translator, \$flashBag, \$requestStack, \$security);
    }

    public function clearAction(): Response
    {
        if (!\$this->config->marketplaceIsEnabled()) {
            return \$this->notFound();
        }

        if (!\$this->security->isGranted(MarketplacePermissions::CAN_VIEW_PACKAGES)) {
            return \$this->accessDenied();
        }

        \$this->allowlist->clearCache();

        return \$this->forward(
            'Mautic\\MarketplaceBundle\\Controller\\Package\\ListController::listAction'
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Controller/CacheController.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Controller/CacheController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MarketplaceBundle\\Controller\\CacheController.php");
    }
}
