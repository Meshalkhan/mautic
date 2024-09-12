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

/* @bundles/MarketplaceBundle/Command/ListCommand.php */
class __TwigTemplate_bb759d26dabc188fce4a703b24e37ca3 extends Template
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

namespace Mautic\\MarketplaceBundle\\Command;

use Mautic\\MarketplaceBundle\\DTO\\PackageBase;
use Mautic\\MarketplaceBundle\\Service\\PluginCollector;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Helper\\Table;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\Stopwatch\\Stopwatch;

class ListCommand extends Command
{
    public const NAME = 'mautic:marketplace:list';

    public function __construct(
        private PluginCollector \$pluginCollector
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        \$this->setName(self::NAME);
        \$this->addOption('page', 'p', InputOption::VALUE_OPTIONAL, 'Page number', 1);
        \$this->addOption('limit', 'l', InputOption::VALUE_OPTIONAL, 'Packages per page', 15);
        \$this->addOption('filter', 'f', InputOption::VALUE_OPTIONAL, 'Filter the packages', '');
        parent::configure();
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$io        = new SymfonyStyle(\$input, \$output);
        \$stopwatch = new Stopwatch();
        \$stopwatch->start('command');

        \$table = new Table(\$output);
        \$table->setHeaders(['name', 'downloads', 'favers']);

        \$plugins = \$this->pluginCollector->collectPackages(\$input->getOption('page'), \$input->getOption('limit'), \$input->getOption('filter'));

        /** @var PackageBase \$plugin */
        foreach (\$plugins as \$plugin) {
            \$color       = 'white';
            \$delimiter   = \"\\n    \";
            \$description = \$plugin->description ? \$delimiter.wordwrap(\$plugin->description, 50, \$delimiter) : '';
            \$table->addRow([
                \"<fg={\$color}>{\$plugin->name}{\$description}</>\",
                \"<fg={\$color}>{\$plugin->downloads}</>\",
                \"<fg={\$color}>{\$plugin->favers}</>\",
            ]);
        }

        \$table->render();

        \$event = \$stopwatch->stop('command');

        \$io->writeln(\"<fg=green>Total packages: {\$this->pluginCollector->getTotal()}</>\");
        \$io->writeln(\"<fg=green>Execution time: {\$event->getDuration()} ms</>\");

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Lists plugins that are available at Packagist.org';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Command/ListCommand.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Command/ListCommand.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MarketplaceBundle\\Command\\ListCommand.php");
    }
}
