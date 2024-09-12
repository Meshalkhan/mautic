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

/* @bundles/CoreBundle/DependencyInjection/Compiler/ModelPass.php */
class __TwigTemplate_a4adb9a17c9965d792752f27333a6101 extends Template
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

use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class ModelPass implements CompilerPassInterface
{
    public const TAG = 'mautic.model';

    public function process(ContainerBuilder \$container): void
    {
        \$modelServices = [];
        foreach (\$container->findTaggedServiceIds(self::TAG) as \$id => \$tags) {
            \$modelServices[\$id] = new Reference(\$id);

            // because aliases are not tagged we need to inject them too.
            // @see https://github.com/symfony/symfony/issues/17256
            foreach (\$container->getAliases() as \$aliasId => \$alias) {
                \$aliasedId = (string) \$alias;
                if (\$aliasedId !== \$id) {
                    continue;
                }

                \$modelServices[\$aliasId] = new Reference(\$aliasedId);
            }
        }

        \$myService = \$container->findDefinition(ModelFactory::class);

        \$myService->addArgument(ServiceLocatorTagPass::register(\$container, \$modelServices));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/DependencyInjection/Compiler/ModelPass.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/Compiler/ModelPass.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\DependencyInjection\\Compiler\\ModelPass.php");
    }
}
