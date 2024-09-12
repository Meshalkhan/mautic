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

/* @bundles/InstallBundle/DependencyInjection/Compiler/InstallCommandPass.php */
class __TwigTemplate_1b69505a18bf6193b71052b761a28d8e extends Template
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

namespace Mautic\\InstallBundle\\DependencyInjection\\Compiler;

use Mautic\\InstallBundle\\Command\\InstallCommand;
use Symfony\\Component\\Console\\Input\\ArgvInput;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class InstallCommandPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container): void
    {
        \$args = \$_SERVER['argv'] ?? [];

        if (!in_array(InstallCommand::COMMAND, \$args, true)) {
            return;
        }

        \$input       = new ArgvInput(\$args);
        \$tablePrefix = \$input->hasOption('db_table_prefix')
            ? \$input->getOption('db_table_prefix')
            : MAUTIC_TABLE_PREFIX;

        if (!\$tablePrefix) {
            return;
        }

        \$container->setParameter('mautic.db_table_prefix', \$tablePrefix);
        \$container->getDefinition('mautic.tblprefix_subscriber')->setArgument('\$tablePrefix', \$tablePrefix);
        \$container->getDefinition('mautic.schema.helper.column')->setArgument('\$prefix', \$tablePrefix);
        \$container->getDefinition('mautic.schema.helper.index')->setArgument('\$prefix', \$tablePrefix);
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
        return "@bundles/InstallBundle/DependencyInjection/Compiler/InstallCommandPass.php";
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
        return new Source("", "@bundles/InstallBundle/DependencyInjection/Compiler/InstallCommandPass.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\InstallBundle\\DependencyInjection\\Compiler\\InstallCommandPass.php");
    }
}
