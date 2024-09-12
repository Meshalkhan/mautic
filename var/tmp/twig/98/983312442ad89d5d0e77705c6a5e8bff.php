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

/* @bundles/CampaignBundle/Command/ExecuteEventCommand.php */
class __TwigTemplate_42e324c550a66ff007ac39291ffe860d extends Template
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

namespace Mautic\\CampaignBundle\\Command;

use Mautic\\CampaignBundle\\Executioner\\ScheduledExecutioner;
use Mautic\\CoreBundle\\Twig\\Helper\\FormatterHelper;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ExecuteEventCommand extends Command
{
    use WriteCountTrait;

    public function __construct(
        private ScheduledExecutioner \$scheduledExecutioner,
        private TranslatorInterface \$translator,
        private FormatterHelper \$formatterHelper
    ) {
        parent::__construct();
    }

    protected function configure()
    {
        \$this
            ->setName('mautic:campaigns:execute')
            ->addOption(
                '--scheduled-log-ids',
                null,
                InputOption::VALUE_REQUIRED,
                'CSV of specific scheduled log IDs to execute.'
            )
            ->addOption(
                '--execution-time',
                null,
                InputOption::VALUE_REQUIRED,
                'Scheduled execution time of event log'
            );

        parent::configure();
    }

    /**
     * @throws \\Exception
     */
    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        defined('MAUTIC_CAMPAIGN_SYSTEM_TRIGGERED') or define('MAUTIC_CAMPAIGN_SYSTEM_TRIGGERED', 1);

        \$now     = empty(\$input->getOption('execution-time')) ? null : new \\DateTime(\$input->getOption('execution-time'));
        \$ids     = \$this->formatterHelper->simpleCsvToArray(\$input->getOption('scheduled-log-ids'), 'int');
        \$counter = \$this->scheduledExecutioner->executeByIds(\$ids, \$output, \$now);

        \$this->writeCounts(\$output, \$this->translator, \$counter);

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Execute specific scheduled events.';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Command/ExecuteEventCommand.php";
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
        return new Source("", "@bundles/CampaignBundle/Command/ExecuteEventCommand.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Command\\ExecuteEventCommand.php");
    }
}
