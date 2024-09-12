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

/* @bundles/CoreBundle/EventListener/MigrationCommandSubscriber.php */
class __TwigTemplate_ad950091759e173c54fedb30f008b010 extends Template
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

namespace Mautic\\CoreBundle\\EventListener;

use Doctrine\\DBAL\\Connection;
use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumn;
use Mautic\\CoreBundle\\Doctrine\\Provider\\GeneratedColumnsProviderInterface;
use Mautic\\CoreBundle\\Doctrine\\Provider\\VersionProviderInterface;
use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Stopwatch\\Stopwatch;

class MigrationCommandSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private VersionProviderInterface \$versionProvider,
        private GeneratedColumnsProviderInterface \$generatedColumnsProvider,
        private Connection \$connection
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ConsoleEvents::TERMINATE => ['addGeneratedColumns'],
        ];
    }

    public function addGeneratedColumns(ConsoleTerminateEvent \$event): void
    {
        \$command = \$event->getCommand();
        \$output  = \$event->getOutput();

        if ('doctrine:migrations:migrate' !== \$command->getName()) {
            return;
        }

        if (!\$this->generatedColumnsProvider->generatedColumnsAreSupported()) {
            \$output->writeln('');
            \$output->writeln(\"<comment>Your database version ({\$this->versionProvider->getVersion()}) does not support generated columns. Upgrade at least to {\$this->generatedColumnsProvider->getMinimalSupportedVersion()} to get the speed improvements.</comment>\");
            \$output->writeln('');

            return;
        }

        \$stopwatch        = new Stopwatch();
        \$generatedColumns = \$this->generatedColumnsProvider->getGeneratedColumns();

        foreach (\$generatedColumns as \$generatedColumn) {
            if (\$this->generatedColumnExistsInSchema(\$generatedColumn)) {
                continue;
            }

            \$stopwatch->start(\$generatedColumn->getColumnName(), 'generated columns');

            \$output->writeln('');
            \$output->writeln(\"<info>++</info> adding generated column <comment>{\$generatedColumn->getColumnName()}</comment>\");
            \$output->writeln(\"<comment>-></comment> {\$generatedColumn->getAlterTableSql()}\");

            \$this->connection->executeQuery(\$generatedColumn->getAlterTableSql());

            \$duration = (string) \$stopwatch->stop(\$generatedColumn->getColumnName());
            \$output->writeln(\"<info>++</info> generated column added ({\$duration})\");
            \$output->writeln('');
        }
    }

    private function generatedColumnExistsInSchema(GeneratedColumn \$generatedColumn): bool
    {
        \$tableColumns = \$this->connection->createSchemaManager()->listTableColumns(\$generatedColumn->getTableName());

        if (isset(\$tableColumns[\$generatedColumn->getColumnName()])) {
            return true;
        }

        return false;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/EventListener/MigrationCommandSubscriber.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/MigrationCommandSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\EventListener\\MigrationCommandSubscriber.php");
    }
}
