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

/* @bundles/EmailBundle/Command/ProcessFetchEmailCommand.php */
class __TwigTemplate_c9fe7d32fab1d258eec5249be561002d extends Template
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

namespace Mautic\\EmailBundle\\Command;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\EmailBundle\\MonitoredEmail\\Fetcher;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * CLI command to check for messages.
 */
class ProcessFetchEmailCommand extends Command
{
    public function __construct(
        private CoreParametersHelper \$parametersHelper,
        private Fetcher \$fetcher
    ) {
        parent::__construct();
    }

    protected function configure()
    {
        \$this
            ->setName('mautic:email:fetch')
            ->setAliases(
                [
                    'mautic:emails:fetch',
                ]
            )
            ->addOption('--message-limit', '-m', InputOption::VALUE_OPTIONAL, 'Limit number of messages to process at a time.')
            ->setHelp(
                <<<'EOT'
                The <info>%command.name%</info> command is used to fetch and process messages such as bounces and unsubscribe requests. Configure the Monitored Email settings in Mautic's Configuration.

<info>php %command.full_name%</info>
EOT
            );
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$limit     = \$input->getOption('message-limit');
        \$mailboxes = \$this->parametersHelper->get('monitored_email');
        unset(\$mailboxes['general']);
        \$mailboxes = array_keys(\$mailboxes);

        \$this->fetcher->setMailboxes(\$mailboxes)
            ->fetch(\$limit);

        foreach (\$this->fetcher->getLog() as \$log) {
            \$output->writeln(\$log);
        }

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Fetch and process monitored email.';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Command/ProcessFetchEmailCommand.php";
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
        return new Source("", "@bundles/EmailBundle/Command/ProcessFetchEmailCommand.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Command\\ProcessFetchEmailCommand.php");
    }
}
