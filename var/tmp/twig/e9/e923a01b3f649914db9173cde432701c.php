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

/* @bundles/CampaignBundle/Executioner/KickoffExecutioner.php */
class __TwigTemplate_dab7dbf95a66d2744bae413843ecff1f extends Template
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

namespace Mautic\\CampaignBundle\\Executioner;

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\KickoffContactFinder;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;
use Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException;
use Mautic\\CampaignBundle\\Executioner\\Exception\\NoEventsFoundException;
use Mautic\\CampaignBundle\\Executioner\\Result\\Counter;
use Mautic\\CampaignBundle\\Executioner\\Scheduler\\EventScheduler;
use Mautic\\CampaignBundle\\Executioner\\Scheduler\\Exception\\NotSchedulableException;
use Mautic\\CoreBundle\\Helper\\ProgressBarHelper;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\Output\\NullOutput;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class KickoffExecutioner implements ExecutionerInterface
{
    private ?ContactLimiter \$limiter = null;

    private ?Campaign \$campaign = null;

    private ?OutputInterface \$output = null;

    private ?\\Symfony\\Component\\Console\\Helper\\ProgressBar \$progressBar = null;

    private ?\\Doctrine\\Common\\Collections\\ArrayCollection \$rootEvents = null;

    private ?Counter \$counter = null;

    public function __construct(
        private LoggerInterface \$logger,
        private KickoffContactFinder \$kickoffContactFinder,
        private TranslatorInterface \$translator,
        private EventExecutioner \$executioner,
        private EventScheduler \$scheduler
    ) {
    }

    /**
     * @return Counter
     *
     * @throws Dispatcher\\Exception\\LogNotProcessedException
     * @throws Dispatcher\\Exception\\LogPassedAndFailedException
     * @throws Exception\\CannotProcessEventException
     * @throws NotSchedulableException
     */
    public function execute(Campaign \$campaign, ContactLimiter \$limiter, OutputInterface \$output = null)
    {
        \$this->campaign = \$campaign;
        \$this->limiter  = \$limiter;
        \$this->output   = \$output ?: new NullOutput();
        \$this->counter  = new Counter();

        try {
            \$this->prepareForExecution();
            \$this->executeOrScheduleEvent();
        } catch (NoContactsFoundException) {
            \$this->logger->debug('CAMPAIGN: No more contacts to process');
        } catch (NoEventsFoundException) {
            \$this->logger->debug('CAMPAIGN: No events to process');
        } finally {
            if (\$this->progressBar) {
                \$this->progressBar->finish();
            }
            \$this->executioner->persistSummaries();
        }

        return \$this->counter;
    }

    /**
     * @throws NoEventsFoundException
     */
    private function prepareForExecution(): void
    {
        \$this->logger->debug('CAMPAIGN: Triggering kickoff events');

        \$this->rootEvents = \$this->campaign->getRootEvents();
        \$totalRootEvents  = \$this->rootEvents->count();
        if (!\$totalRootEvents) {
            throw new NoEventsFoundException();
        }
        \$this->logger->debug('CAMPAIGN: Processing the following events: '.implode(', ', \$this->rootEvents->getKeys()));
        \$totalKickoffEvents = 0;
        if (!(\$this->output instanceof NullOutput)) {
            \$totalContacts      = \$this->kickoffContactFinder->getContactCount(\$this->campaign->getId(), \$this->rootEvents->getKeys(), \$this->limiter);
            \$totalKickoffEvents = \$totalRootEvents * \$totalContacts;

            \$this->output->writeln(
                \$this->translator->trans(
                    'mautic.campaign.trigger.event_count',
                    [
                        '%events%' => \$totalKickoffEvents,
                        '%batch%'  => \$this->limiter->getBatchLimit(),
                    ]
                )
            );

            if (!\$totalKickoffEvents) {
                throw new NoEventsFoundException();
            }
        }

        \$this->progressBar = ProgressBarHelper::init(\$this->output, \$totalKickoffEvents);
        \$this->progressBar->start();
    }

    /**
     * @throws Dispatcher\\Exception\\LogNotProcessedException
     * @throws Dispatcher\\Exception\\LogPassedAndFailedException
     * @throws Exception\\CannotProcessEventException
     * @throws NoContactsFoundException
     * @throws NotSchedulableException
     */
    private function executeOrScheduleEvent(): void
    {
        // Use the same timestamp across all contacts processed
        \$now = new \\DateTime();
        \$this->counter->advanceEventCount(\$this->rootEvents->count());

        // Loop over contacts until the entire campaign is executed
        \$contacts = \$this->kickoffContactFinder->getContacts(\$this->campaign->getId(), \$this->limiter);
        while (\$contacts && \$contacts->count()) {
            \$batchMinContactId = max(\$contacts->getKeys()) + 1;
            \$rootEvents        = clone \$this->rootEvents;

            /** @var Event \$event */
            foreach (\$rootEvents as \$key => \$event) {
                \$this->progressBar->advance(\$contacts->count());
                \$this->counter->advanceEvaluated(\$contacts->count());

                try {
                    // Get the date the event would be executed on as if it was based on days only
                    \$executionDate = \$this->scheduler->getExecutionDateTime(\$event, \$now);
                    \$this->logger->debug(
                        'CAMPAIGN: Event ID# '.\$event->getId().
                        ' to be executed on '.\$executionDate->format('Y-m-d H:i:s e').
                        ' compared to '.\$now->format('Y-m-d H:i:s e')
                    );

                    // Adjust the hour based on contact timezone if applicable
                    \$this->scheduler->validateAndScheduleEventForContacts(\$event, \$executionDate, \$contacts, \$now);

                    \$this->counter->advanceTotalScheduled(\$contacts->count());
                    \$rootEvents->remove(\$key);

                    continue;
                } catch (NotSchedulableException) {
                    // Execute the event
                }
            }

            if (\$rootEvents->count()) {
                // Execute the events for the batch of contacts
                \$this->executioner->executeEventsForContacts(\$rootEvents, \$contacts, \$this->counter);
            }

            \$this->kickoffContactFinder->clear(\$contacts);

            if (\$this->limiter->getContactId()) {
                // No use making another call
                break;
            }

            \$this->logger->debug('CAMPAIGN: Fetching the next batch of kickoff contacts starting with contact ID '.\$batchMinContactId);
            \$this->limiter->setBatchMinContactId(\$batchMinContactId);

            // Get the next batch
            \$contacts = \$this->kickoffContactFinder->getContacts(\$this->campaign->getId(), \$this->limiter);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/KickoffExecutioner.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/KickoffExecutioner.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Executioner\\KickoffExecutioner.php");
    }
}
