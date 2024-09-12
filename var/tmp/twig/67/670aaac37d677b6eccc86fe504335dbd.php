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

/* @bundles/ReportBundle/Scheduler/Command/ExportSchedulerCommand.php */
class __TwigTemplate_fad852d2dae4c2b6abc1a5b8f1187598 extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Command;

use Mautic\\ReportBundle\\Exception\\FileIOException;
use Mautic\\ReportBundle\\Model\\ReportCleanup;
use Mautic\\ReportBundle\\Model\\ReportExporter;
use Mautic\\ReportBundle\\Scheduler\\Option\\ExportOption;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ExportSchedulerCommand extends Command
{
    public function __construct(
        private ReportExporter \$reportExporter,
        private ReportCleanup \$reportCleanup,
        private TranslatorInterface \$translator
    ) {
        parent::__construct();
    }

    protected function configure()
    {
        \$this
            ->setName('mautic:reports:scheduler')
            ->addOption('--report', 'report', InputOption::VALUE_OPTIONAL, 'ID of report. Process all reports if not set.');
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$report = \$input->getOption('report');

        try {
            \$exportOption = new ExportOption(\$report);
        } catch (\\InvalidArgumentException \$e) {
            \$output->writeln('<error>'.\$this->translator->trans('mautic.report.schedule.command.invalid_parameter').'</error>');

            return Command::SUCCESS;
        }

        try {
            if (\$exportOption->getReportId()) {
                \$this->reportCleanup->cleanup(\$exportOption->getReportId());
            } else {
                \$this->reportCleanup->cleanupAll();
            }

            \$this->reportExporter->processExport(\$exportOption);

            \$output->writeln('<info>'.\$this->translator->trans('mautic.report.schedule.command.finished').'</info>');
        } catch (FileIOException \$e) {
            \$output->writeln('<error>'.\$e->getMessage().'</error>');
        }

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Processes scheduler for report\\'s export';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Scheduler/Command/ExportSchedulerCommand.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Command/ExportSchedulerCommand.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Scheduler\\Command\\ExportSchedulerCommand.php");
    }
}
