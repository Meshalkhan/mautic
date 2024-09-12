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

/* @bundles/CampaignBundle/EventListener/CampaignEventDeleteSubscriber.php */
class __TwigTemplate_8a30d1085b38a5c5416f0bedd6efbb2a extends Template
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
use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CampaignBundle\\Event\\DeleteCampaign;
use Mautic\\CampaignBundle\\Event\\DeleteEvent;
use Mautic\\CampaignBundle\\Helper\\CampaignConfig;
use Mautic\\CampaignBundle\\Model\\CampaignModel;
use Mautic\\CampaignBundle\\Model\\EventModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class CampaignEventDeleteSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private LeadEventLogRepository \$leadEventLogRepository,
        private CampaignConfig \$campaignConfig,
        private CampaignModel \$campaignModel,
        private EventModel \$eventModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CampaignEvents::ON_CAMPAIGN_DELETE => ['onCampaignDelete', 0],
            CampaignEvents::ON_EVENT_DELETE    => ['onEventDelete', 0],
        ];
    }

    public function onCampaignDelete(DeleteCampaign \$event): void
    {
        if (\$this->campaignConfig->shouldDeleteEventLogInBackground()) {
            return;
        }

        \$campaignId = \$event->getCampaign()->getId();
        \$this->leadEventLogRepository->removeEventLogsByCampaignId(\$campaignId);
        \$this->eventModel->deleteEventsByCampaignId(\$campaignId);
        \$this->campaignModel->deleteCampaign(\$event->getCampaign());
    }

    public function onEventDelete(DeleteEvent \$event): void
    {
        if (\$this->campaignConfig->shouldDeleteEventLogInBackground()) {
            return;
        }
        \$eventIds   = \$event->getEventIds();
        \$this->leadEventLogRepository->removeEventLogs(\$eventIds);
        \$this->eventModel->deleteEventsByEventIds(\$eventIds);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/EventListener/CampaignEventDeleteSubscriber.php";
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
        return new Source("", "@bundles/CampaignBundle/EventListener/CampaignEventDeleteSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\EventListener\\CampaignEventDeleteSubscriber.php");
    }
}
