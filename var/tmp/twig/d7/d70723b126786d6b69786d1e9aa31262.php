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

/* @bundles/CoreBundle/DependencyInjection/Compiler/TwigPass.php */
class __TwigTemplate_dc22b7a3de632bb454a9c43d5598fef1 extends Template
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

namespace Mautic\\CoreBundle\\DependencyInjection\\Compiler;

use Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper;
use Mautic\\CoreBundle\\Twig\\Helper\\SlotsHelper;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class TwigPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container): void
    {
        if (\$container->hasDefinition(AssetsHelper::class)) {
            \$container->getDefinition(AssetsHelper::class)
                ->addMethodCall('setPathsHelper', [new Reference('mautic.helper.paths')])
                ->addMethodCall('setAssetHelper', [new Reference('mautic.helper.assetgeneration')])
                ->addMethodCall('setBuilderIntegrationsHelper', [new Reference('mautic.integrations.helper.builder_integrations')])
                ->addMethodCall('setInstallService', [new Reference('mautic.install.service')])
                ->addMethodCall('setSiteUrl', ['%mautic.site_url%'])
                ->addMethodCall('setVersion', ['%mautic.secret_key%', MAUTIC_VERSION]);
        }

        if (\$container->hasDefinition('twig.helper.slots')) {
            \$container->getDefinition('twig.helper.slots')
                ->setClass(SlotsHelper::class)
                ->setPublic(true);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/DependencyInjection/Compiler/TwigPass.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/Compiler/TwigPass.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\DependencyInjection\\Compiler\\TwigPass.php");
    }
}
