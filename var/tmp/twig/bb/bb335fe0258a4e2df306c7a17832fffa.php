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

/* @bundles/EmailBundle/DependencyInjection/Compiler/StatHelperPass.php */
class __TwigTemplate_9d0113de1adc34775d605a5a3ce89a9c extends Template
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

namespace Mautic\\EmailBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class StatHelperPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container): void
    {
        \$definition     = \$container->getDefinition('mautic.email.stats.helper_container');
        \$taggedServices = \$container->findTaggedServiceIds('mautic.email_stat_helper');
        foreach (\$taggedServices as \$id => \$tags) {
            \$definition->addMethodCall('addHelper', [
                new Reference(\$id),
            ]);
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
        return "@bundles/EmailBundle/DependencyInjection/Compiler/StatHelperPass.php";
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
        return new Source("", "@bundles/EmailBundle/DependencyInjection/Compiler/StatHelperPass.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\DependencyInjection\\Compiler\\StatHelperPass.php");
    }
}
