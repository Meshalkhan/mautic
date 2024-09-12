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

/* @bundles/ChannelBundle/Command/ProcessMarketingMessagesQueueCommand.php */
class __TwigTemplate_a41abc01da53af429d8f7fc8a7ec086e extends Template
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

namespace Mautic\\ChannelBundle\\Command;

use Mautic\\ChannelBundle\\Model\\MessageQueueModel;
use Mautic\\CoreBundle\\Command\\ModeratedCommand;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ProcessMarketingMessagesQueueCommand extends ModeratedCommand
{
    public function __construct(
        private TranslatorInterface \$translator,
        private MessageQueueModel \$messageQueueModel,
        PathsHelper \$pathsHelper,
        CoreParametersHelper \$coreParametersHelper
    ) {
        parent::__construct(\$pathsHelper, \$coreParametersHelper);
    }

    protected function configure()
    {
        \$this
            ->setName('mautic:messages:send')
            ->setAliases(
                [
                    'mautic:campaigns:messagequeue',
                    'mautic:campaigns:messages',
                ]
            )
            ->addOption(
                '--channel',
                '-c',
                InputOption::VALUE_OPTIONAL,
                'Channel to use for sending messages i.e. email, sms.',
                null
            )
            ->addOption('--channel-id', '-i', InputOption::VALUE_REQUIRED, 'The ID of the message i.e. email ID, sms ID.')
            ->addOption('--message-id', '-m', InputOption::VALUE_REQUIRED, 'ID of a specific queued message');

        parent::configure();
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$processed  = 0;
        \$channel    = \$input->getOption('channel');
        \$channelId  = \$input->getOption('channel-id');
        \$messageId  = \$input->getOption('message-id');
        \$key        = \$channel.\$channelId.\$messageId;

        if (!\$this->checkRunStatus(\$input, \$output, \$key)) {
            return \\Symfony\\Component\\Console\\Command\\Command::SUCCESS;
        }

        \$output->writeln('<info>'.\$this->translator->trans('mautic.campaign.command.process.messages').'</info>');

        if (\$messageId) {
            if (\$message = \$this->messageQueueModel->getEntity(\$messageId)) {
                \$processed = intval(\$this->messageQueueModel->processMessageQueue(\$message));
            }
        } else {
            \$processed = intval(\$this->messageQueueModel->sendMessages(\$channel, \$channelId));
        }

        \$output->writeln('<comment>'.\$this->translator->trans('mautic.campaign.command.messages.sent', ['%events%' => \$processed]).'</comment>'.\"\\n\");

        \$this->completeRun();

        return \\Symfony\\Component\\Console\\Command\\Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Process sending of messages queue.';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Command/ProcessMarketingMessagesQueueCommand.php";
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
        return new Source("", "@bundles/ChannelBundle/Command/ProcessMarketingMessagesQueueCommand.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Command\\ProcessMarketingMessagesQueueCommand.php");
    }
}
