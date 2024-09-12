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

/* @bundles/IntegrationsBundle/DependencyInjection/IntegrationsExtension.php */
class __TwigTemplate_7e9a427dd44b380ef4fe063224c0b611 extends Template
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

namespace Mautic\\IntegrationsBundle\\DependencyInjection;

use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\BasicInterface;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\BuilderInterface;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormInterface;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\IntegrationInterface;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\Extension;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;

class IntegrationsExtension extends Extension
{
    /**
     * @param mixed[] \$configs
     */
    public function load(array \$configs, ContainerBuilder \$container): void
    {
        \$loader = new PhpFileLoader(\$container, new FileLocator(__DIR__.'/../Config'));
        \$loader->load('services.php');

        \$container->registerForAutoconfiguration(IntegrationInterface::class)
            ->addTag('mautic.integration');
        \$container->registerForAutoconfiguration(BasicInterface::class)
            ->addTag('mautic.basic_integration');
        \$container->registerForAutoconfiguration(ConfigFormInterface::class)
            ->addTag('mautic.config_integration');
        \$container->registerForAutoconfiguration(BuilderInterface::class)
            ->addTag('mautic.builder_integration');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/DependencyInjection/IntegrationsExtension.php";
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
        return new Source("", "@bundles/IntegrationsBundle/DependencyInjection/IntegrationsExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\DependencyInjection\\IntegrationsExtension.php");
    }
}
