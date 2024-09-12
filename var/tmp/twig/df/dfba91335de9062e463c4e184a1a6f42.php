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

/* @bundles/LeadBundle/Command/DeduplicateIdsCommand.php */
class __TwigTemplate_002a2866ce24a392fc1ea83eac6f3bdb extends Template
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

namespace Mautic\\LeadBundle\\Command;

use Mautic\\LeadBundle\\Deduplicate\\ContactDeduper;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Stopwatch\\Stopwatch;

class DeduplicateIdsCommand extends Command
{
    public const NAME = 'mautic:contacts:deduplicate:ids';

    public function __construct(
        private ContactDeduper \$contactDeduper
    ) {
        parent::__construct();
    }

    public function configure(): void
    {
        parent::configure();

        \$this->setName(self::NAME)
            ->addOption(
                '--newer-into-older',
                null,
                InputOption::VALUE_NONE,
                'By default, this command will merge older contacts and activity into the newer. Use this flag to reverse that behavior.'
            )
            ->addOption(
                '--contact-ids',
                null,
                InputOption::VALUE_REQUIRED,
                'Comma separated list of contact IDs to deduplicate. If not provided, all contacts will be deduplicated. Example: --contact-ids=23,3,11'
            )
            ->setHelp(
                <<<'EOT'
The <info>%command.name%</info> command will dedpulicate contacts based on unique identifier values. 

<info>php %command.full_name%</info>
EOT
            );
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$newerIntoOlder = (bool) \$input->getOption('newer-into-older');
        \$contactIds     = array_filter(explode(',', \$input->getOption('contact-ids')));
        \$duplicateCount = count(\$contactIds);
        \$progressBar    = new ProgressBar(\$output, \$duplicateCount);
        \$stopwatch      = new Stopwatch();

        if (!\$contactIds) {
            \$output->writeln('<error>No contacts to deduplicate.</error>');

            return Command::FAILURE;
        }

        \$output->writeln(\"{\$duplicateCount} contacts passed to deduplicate\");

        \$progressBar->setFormat('debug');
        \$progressBar->start();
        \$stopwatch->start('deduplicate');

        \$contacts = \$this->contactDeduper->getContactsByIds(\$contactIds);
        \$this->contactDeduper->deduplicateContactBatch(\$contacts, \$newerIntoOlder, fn () => \$progressBar->advance());

        \$progressBar->finish();

        \$event = \$stopwatch->stop('deduplicate');
        \$output->writeln(\"Duration: {\$event->getDuration()} ms, Memory: {\$event->getMemory()} bytes\");

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Merge contacts based on same unique identifiers';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Command/DeduplicateIdsCommand.php";
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
        return new Source("", "@bundles/LeadBundle/Command/DeduplicateIdsCommand.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Command\\DeduplicateIdsCommand.php");
    }
}
