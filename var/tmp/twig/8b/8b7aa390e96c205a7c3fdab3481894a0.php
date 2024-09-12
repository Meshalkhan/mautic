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

/* @bundles/CoreBundle/DependencyInjection/MauticCoreExtension.php */
class __TwigTemplate_749240c88ee58f3156870d193096bb7e extends Template
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

namespace Mautic\\CoreBundle\\DependencyInjection;

use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;

class MauticCoreExtension extends Extension
{
    public const DEFAULT_EXCLUDES = [
        'Config',
        'Crate',
        'DataObject',
        'DependencyInjection',
        'DTO',
        'Entity',
        'Event',
        'Exception',
        'Migration',
        'Migrations',
        'Security',
        'Test',
        'Tests',
        'Views',
    ];

    /**
     * @param mixed[] \$configs
     */
    public function load(array \$configs, ContainerBuilder \$container): void
    {
        // For the project:
        \$loader = new PhpFileLoader(\$container, new FileLocator(__DIR__.'/../../../config'));
        \$loader->load('services.php');

        // For the CoreBundle
        \$loader = new PhpFileLoader(\$container, new FileLocator(__DIR__.'/../Config'));
        \$loader->load('services.php');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/DependencyInjection/MauticCoreExtension.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/MauticCoreExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\DependencyInjection\\MauticCoreExtension.php");
    }
}
