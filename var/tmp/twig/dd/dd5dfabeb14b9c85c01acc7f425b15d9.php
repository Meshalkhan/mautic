<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/EmailBundle/DependencyInjection/Compiler/StatHelperPass.php */
class __TwigTemplate_f5da564a09fd9caf88f0e45e803360df extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/EmailBundle/DependencyInjection/Compiler/StatHelperPass.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/EmailBundle/DependencyInjection/Compiler/StatHelperPass.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\DependencyInjection\\Compiler\\StatHelperPass.php");
    }
}
