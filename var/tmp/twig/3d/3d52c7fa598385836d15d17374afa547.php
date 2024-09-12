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

/* @bundles/CoreBundle/DependencyInjection/Compiler/ORMPurgerPass.php */
class __TwigTemplate_322247507093ef224a77614f826553fe extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\DependencyInjection\\Compiler;

use Mautic\\CoreBundle\\Doctrine\\Common\\DataFixtures\\Purger\\ORMPurgerFactory;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class ORMPurgerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container): void
    {
        if (!\$container->hasDefinition('doctrine.fixtures.purger.orm_purger_factory')) {
            return;
        }

        \$definition = \$container->getDefinition('doctrine.fixtures.purger.orm_purger_factory');
        \$definition->setClass(ORMPurgerFactory::class);
        \$definition->setArgument('\$eventDispatcher', new Reference('event_dispatcher'));
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
        return "@bundles/CoreBundle/DependencyInjection/Compiler/ORMPurgerPass.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/Compiler/ORMPurgerPass.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\DependencyInjection\\Compiler\\ORMPurgerPass.php");
    }
}
