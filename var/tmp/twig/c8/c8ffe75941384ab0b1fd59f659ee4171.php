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

/* @bundles/CampaignBundle/Command/UpdateLeadCampaignsCommand.php */
class __TwigTemplate_445596c714d9a9356bbcf78f14b31d38 extends Template
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

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\CampaignRepository;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;
use Mautic\\CampaignBundle\\Membership\\MembershipBuilder;
use Mautic\\CoreBundle\\Command\\ModeratedCommand;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Twig\\Helper\\FormatterHelper;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\NullOutput;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class UpdateLeadCampaignsCommand extends ModeratedCommand
{
    private int \$runLimit = 0;

    private ContactLimiter \$contactLimiter;

    private bool \$quiet = false;

    public function __construct(
        private CampaignRepository \$campaignRepository,
        private TranslatorInterface \$translator,
        private MembershipBuilder \$membershipBuilder,
        private LoggerInterface \$logger,
        private FormatterHelper \$formatterHelper,
        PathsHelper \$pathsHelper,
        CoreParametersHelper \$coreParametersHelper
    ) {
        parent::__construct(\$pathsHelper, \$coreParametersHelper);
    }

    protected function configure()
    {
        \$this
            ->setName('mautic:campaigns:rebuild')
            ->setAliases(['mautic:campaigns:update'])
            ->addOption('--batch-limit', '-l', InputOption::VALUE_OPTIONAL, 'Set batch size of contacts to process per round. Defaults to 300.', 300)
            ->addOption(
                '--max-contacts',
                '-m',
                InputOption::VALUE_OPTIONAL,
                'Set max number of contacts to process per campaign for this script execution. Defaults to all.',
                0
            )
            ->addOption(
                '--campaign-id',
                '-i',
                InputOption::VALUE_OPTIONAL,
                'Build membership for a specific campaign.  Otherwise, all campaigns will be rebuilt.',
                null
            )
            ->addOption(
                '--contact-id',
                null,
                InputOption::VALUE_OPTIONAL,
                'Build membership for a specific contact.',
                null
            )
            ->addOption(
                '--contact-ids',
                null,
                InputOption::VALUE_OPTIONAL,
                'CSV of contact IDs to evaluate.'
            )
            ->addOption(
                '--min-contact-id',
                null,
                InputOption::VALUE_OPTIONAL,
                'Build membership starting at a specific contact ID.',
                null
            )
            ->addOption(
                '--max-contact-id',
                null,
                InputOption::VALUE_OPTIONAL,
                'Build membership up to a specific contact ID.',
                null
            )
            ->addOption(
                '--thread-id',
                null,
                InputOption::VALUE_OPTIONAL,
                'The number of this current process if running multiple in parallel.'
            )
            ->addOption(
                '--max-threads',
                null,
                InputOption::VALUE_OPTIONAL,
                'The maximum number of processes you intend to run in parallel.'
            )
            ->addOption(
                'exclude',
                'd',
                InputOption::VALUE_IS_ARRAY | InputOption::VALUE_OPTIONAL,
                'Exclude a specific campaign from being rebuilt. Otherwise, all campaigns will be rebuilt.',
                []
            );

        parent::configure();
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$id               = \$input->getOption('campaign-id');
        \$batchLimit       = \$input->getOption('batch-limit');
        \$contactMinId     = \$input->getOption('min-contact-id');
        \$contactMaxId     = \$input->getOption('max-contact-id');
        \$contactId        = \$input->getOption('contact-id');
        \$contactIds       = \$this->formatterHelper->simpleCsvToArray(\$input->getOption('contact-ids'), 'int');
        \$threadId         = \$input->getOption('thread-id');
        \$maxThreads       = \$input->getOption('max-threads');
        \$this->runLimit   = \$input->getOption('max-contacts');
        \$this->quiet      = (bool) \$input->getOption('quiet');
        \$this->output     = (\$this->quiet) ? new NullOutput() : \$output;
        \$excludeCampaigns = \$input->getOption('exclude');

        if (\$threadId && \$maxThreads && (int) \$threadId > (int) \$maxThreads) {
            \$this->output->writeln('--thread-id cannot be larger than --max-thread');

            return \\Symfony\\Component\\Console\\Command\\Command::FAILURE;
        }

        if (!\$this->checkRunStatus(\$input, \$output, \$id)) {
            return \\Symfony\\Component\\Console\\Command\\Command::SUCCESS;
        }

        \$this->contactLimiter = new ContactLimiter(\$batchLimit, \$contactId, \$contactMinId, \$contactMaxId, \$contactIds, \$threadId, \$maxThreads);

        if (\$id) {
            \$campaign = \$this->campaignRepository->getEntity(\$id);
            if (null === \$campaign) {
                \$output->writeln('<error>'.\$this->translator->trans('mautic.campaign.rebuild.not_found', ['%id%' => \$id]).'</error>');

                return \\Symfony\\Component\\Console\\Command\\Command::FAILURE;
            }

            \$this->updateCampaign(\$campaign);
        } else {
            \$filter = [
                'iterable_mode' => true,
            ];

            if (is_array(\$excludeCampaigns) && count(\$excludeCampaigns) > 0) {
                \$filter['filter'] = [
                    'force' => [
                        [
                            'expr'   => 'notIn',
                            'column' => \$this->campaignRepository->getTableAlias().'.id',
                            'value'  => \$excludeCampaigns,
                        ],
                    ],
                ];
            }
            \$campaigns = \$this->campaignRepository->getEntities(\$filter);

            foreach (\$campaigns as \$campaign) {
                \$this->updateCampaign(\$campaign);

                unset(\$campaign);
            }
        }

        \$this->completeRun();

        return \\Symfony\\Component\\Console\\Command\\Command::SUCCESS;
    }

    /**
     * @throws \\Exception
     */
    private function updateCampaign(Campaign \$campaign): void
    {
        if (!\$campaign->isPublished()) {
            return;
        }

        try {
            \$this->output->writeln(
                '<info>'.\$this->translator->trans('mautic.campaign.rebuild.rebuilding', ['%id%' => \$campaign->getId()]).'</info>'
            );

            // Reset batch limiter
            \$this->contactLimiter->resetBatchMinContactId();

            \$this->membershipBuilder->build(\$campaign, \$this->contactLimiter, \$this->runLimit, (\$this->quiet) ? null : \$this->output);
        } catch (\\Exception \$exception) {
            if ('prod' !== MAUTIC_ENV) {
                // Throw the exception for dev/test mode
                throw \$exception;
            }

            \$this->logger->error('CAMPAIGN: '.\$exception->getMessage());
        }

        // Don't detach in tests since this command will be ran multiple times in the same process
        if ('test' !== MAUTIC_ENV) {
            \$this->campaignRepository->detachEntity(\$campaign);
        }

        \$this->output->writeln('');
    }

    protected static \$defaultDescription = 'Rebuild campaigns based on contact segments.';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Command/UpdateLeadCampaignsCommand.php";
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
        return new Source("", "@bundles/CampaignBundle/Command/UpdateLeadCampaignsCommand.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Command\\UpdateLeadCampaignsCommand.php");
    }
}
