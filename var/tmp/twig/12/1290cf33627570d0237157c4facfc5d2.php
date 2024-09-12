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

/* @bundles/DashboardBundle/Factory/WidgetDetailEventFactory.php */
class __TwigTemplate_3707157ed3b695d07f0527cfa85699a2 extends Template
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

namespace Mautic\\DashboardBundle\\Factory;

use Mautic\\CacheBundle\\Cache\\CacheProvider;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\DashboardBundle\\Entity\\Widget;
use Mautic\\DashboardBundle\\Event\\WidgetDetailEvent;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class WidgetDetailEventFactory
{
    public function __construct(
        private TranslatorInterface \$translator,
        private CacheProvider \$cacheProvider,
        private CorePermissions \$corePermissions,
        private UserHelper \$userHelper,
        private CoreParametersHelper \$coreParametersHelper,
        private PathsHelper \$pathsHelper,
    ) {
    }

    public function create(Widget \$widget): WidgetDetailEvent
    {
        \$cacheDir = \$this->coreParametersHelper->get('cached_data_dir', \$this->pathsHelper->getSystemPath('cache', true));
        \$event    = new WidgetDetailEvent(\$this->translator, \$this->corePermissions, \$widget, \$this->cacheProvider);
        \$event->setCacheDir(\$cacheDir, \$this->userHelper->getUser()->getId());

        return \$event;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Factory/WidgetDetailEventFactory.php";
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
        return new Source("", "@bundles/DashboardBundle/Factory/WidgetDetailEventFactory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DashboardBundle\\Factory\\WidgetDetailEventFactory.php");
    }
}
