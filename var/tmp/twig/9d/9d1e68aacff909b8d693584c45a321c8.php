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

/* @bundles/CoreBundle/DependencyInjection/Compiler/ShortenerServicePass.php */
class __TwigTemplate_f5492ad4b9ee86098673f8e607677e32 extends Template
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

use Mautic\\CoreBundle\\Shortener\\Shortener;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class ShortenerServicePass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container): void
    {
        if (!\$container->hasDefinition(Shortener::class)) {
            return;
        }

        \$storageDef = \$container->findDefinition(Shortener::class);
        foreach (\$container->findTaggedServiceIds('mautic.shortener.service') as \$id => \$tags) {
            \$storageDef->addMethodCall('addService', [new Reference(\$id)]);
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
        return "@bundles/CoreBundle/DependencyInjection/Compiler/ShortenerServicePass.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/Compiler/ShortenerServicePass.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\DependencyInjection\\Compiler\\ShortenerServicePass.php");
    }
}
