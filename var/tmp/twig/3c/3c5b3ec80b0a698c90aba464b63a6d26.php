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

/* @bundles/CampaignBundle/EventListener/CampaignEventLogCleanupSubscriber.php */
class __TwigTemplate_fb1579d900c58fc49e49227df71ca8bf extends Template
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

namespace Mautic\\CampaignBundle\\EventListener;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\FailedLeadEventLogRepository;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Event\\ExecutedBatchEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

final class CampaignEventLogCleanupSubscriber implements EventSubscriberInterface
{
    public function __construct(private FailedLeadEventLogRepository \$failedLeadEventLogRepository)
    {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CampaignEvents::ON_EVENT_EXECUTED_BATCH => ['onEventBatchExecuted', -100],
        ];
    }

    /**
     * Deletes failed log entries for all successful event logs.
     */
    public function onEventBatchExecuted(ExecutedBatchEvent \$event): void
    {
        \$ids = \$event->getExecuted()
            ->map(fn (LeadEventLog \$eventLog) => \$eventLog->getId())
            ->getValues();

        if (!\$ids) {
            return;
        }

        \$this->failedLeadEventLogRepository->deleteByIds(\$ids);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/EventListener/CampaignEventLogCleanupSubscriber.php";
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
        return new Source("", "@bundles/CampaignBundle/EventListener/CampaignEventLogCleanupSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\EventListener\\CampaignEventLogCleanupSubscriber.php");
    }
}
