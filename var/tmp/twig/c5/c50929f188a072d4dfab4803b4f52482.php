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

/* @bundles/PluginBundle/Command/PushLeadActivityCommand.php */
class __TwigTemplate_2a23e43e0b0424edbe6d37b46360add5 extends Template
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

namespace Mautic\\PluginBundle\\Command;

use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class PushLeadActivityCommand extends Command
{
    public function __construct(
        private TranslatorInterface \$translator,
        private IntegrationHelper \$integrationHelper
    ) {
        parent::__construct();
    }

    protected function configure()
    {
        \$this
            ->setName('mautic:integration:pushleadactivity')
            ->setAliases(
                [
                    'mautic:integration:pushactivity',
                ]
            )
            ->addOption(
                '--integration',
                '-i',
                InputOption::VALUE_REQUIRED,
                'Integration name. Integration must be enabled and authorised.',
                null
            )
            ->addOption('--start-date', '-d', InputOption::VALUE_REQUIRED, 'Set start date for updated values.')
            ->addOption(
                '--end-date',
                '-t',
                InputOption::VALUE_REQUIRED,
                'Set end date for updated values.'
            )
            ->addOption(
                '--time-interval',
                '-a',
                InputOption::VALUE_OPTIONAL,
                'Send time interval to check updates on Salesforce, it should be a correct php formatted time interval in the past eg:(-10 minutes)'
            )
            ->addOption('--force', '-f', InputOption::VALUE_NONE, 'Force execution even if another process is assumed running.');

        parent::configure();
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$integration = \$input->getOption('integration');
        \$startDate   = \$input->getOption('start-date');
        \$endDate     = \$input->getOption('end-date');
        \$interval    = \$input->getOption('time-interval');

        if (!\$interval) {
            \$interval = '15 minutes';
        }
        if (!\$startDate) {
            \$startDate = date('c', strtotime('-'.\$interval));
        }

        if (!\$endDate) {
            \$endDate = date('c');
        }

        if (\$integration) {
            \$integrationObject = \$this->integrationHelper->getIntegrationObject(\$integration);

            if (null !== \$integrationObject && method_exists(\$integrationObject, 'pushLeadActivity')) {
                \$output->writeln('<info>'.\$this->translator->trans('mautic.plugin.command.push.leads.activity', ['%integration%' => \$integration]).'</info>');

                \$params['start'] = \$startDate;
                \$params['end']   = \$endDate;

                \$processed = intval(\$integrationObject->pushLeadActivity(\$params));

                \$output->writeln('<comment>'.\$this->translator->trans('mautic.plugin.command.push.leads.events_executed', ['%events%' => \$processed]).'</comment>'.\"\\n\");
            }
        }

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Push lead activity to integration.';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Command/PushLeadActivityCommand.php";
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
        return new Source("", "@bundles/PluginBundle/Command/PushLeadActivityCommand.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Command\\PushLeadActivityCommand.php");
    }
}
