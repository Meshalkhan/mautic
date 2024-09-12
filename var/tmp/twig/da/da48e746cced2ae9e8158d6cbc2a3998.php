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

/* @bundles/CampaignBundle/Command/CampaignDeleteEventLogsCommand.php */
class __TwigTemplate_c490af0cc2bba4b01687d7faa764f0cb extends Template
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

namespace Mautic\\CampaignBundle\\Command;

use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CampaignBundle\\Model\\CampaignModel;
use Mautic\\CampaignBundle\\Model\\EventModel;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class CampaignDeleteEventLogsCommand extends Command
{
    /**
     * @var string
     */
    public const COMMAND_NAME = 'mautic:campaign:delete-event-logs';

    public function __construct(private LeadEventLogRepository \$leadEventLogRepository, private CampaignModel \$campaignModel, private EventModel \$eventModel)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        \$this->setName(self::COMMAND_NAME)
            ->setDescription('Delete campaign event logs')
            ->addArgument(
                'campaign_event_ids',
                InputArgument::IS_ARRAY | InputArgument::OPTIONAL,
                'Campaign event ids to delete event logs.'
            )
            ->addOption(
                '--campaign-id',
                '-i',
                InputOption::VALUE_OPTIONAL,
                'Delete campaign also otherwise will delete event and event log only.'
            );
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$eventIds   = \$input->getArgument('campaign_event_ids');
        \$campaignId = (int) \$input->getOption('campaign-id');

        if (!empty(\$campaignId)) {
            \$this->leadEventLogRepository->removeEventLogsByCampaignId(\$campaignId);
            \$this->eventModel->deleteEventsByCampaignId(\$campaignId);
            \$campaign = \$this->campaignModel->getEntity(\$campaignId);
            \$this->campaignModel->deleteCampaign(\$campaign);
        } elseif (!empty(\$eventIds)) {
            \$this->leadEventLogRepository->removeEventLogs(\$eventIds);
            \$this->eventModel->deleteEventsByEventIds(\$eventIds);
        }

        return 0;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Command/CampaignDeleteEventLogsCommand.php";
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
        return new Source("", "@bundles/CampaignBundle/Command/CampaignDeleteEventLogsCommand.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Command\\CampaignDeleteEventLogsCommand.php");
    }
}
