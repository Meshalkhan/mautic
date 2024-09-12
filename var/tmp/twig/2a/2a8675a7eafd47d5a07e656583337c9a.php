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

/* @bundles/AssetBundle/EventListener/LeadSubscriber.php */
class __TwigTemplate_15c5043edefaea4111c8490169f1d0f9 extends Template
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

namespace Mautic\\AssetBundle\\EventListener;

use Mautic\\AssetBundle\\Entity\\DownloadRepository;
use Mautic\\AssetBundle\\Model\\AssetModel;
use Mautic\\LeadBundle\\Event\\LeadChangeEvent;
use Mautic\\LeadBundle\\Event\\LeadMergeEvent;
use Mautic\\LeadBundle\\Event\\LeadTimelineEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class LeadSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private AssetModel \$assetModel,
        private TranslatorInterface \$translator,
        private RouterInterface \$router,
        private DownloadRepository \$downloadRepository
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::TIMELINE_ON_GENERATE => ['onTimelineGenerate', 0],
            LeadEvents::CURRENT_LEAD_CHANGED => ['onLeadChange', 0],
            LeadEvents::LEAD_POST_MERGE      => ['onLeadMerge', 0],
        ];
    }

    /**
     * Compile events for the lead timeline.
     */
    public function onTimelineGenerate(LeadTimelineEvent \$event): void
    {
        // Set available event types
        \$eventTypeKey  = 'asset.download';
        \$eventTypeName = \$this->translator->trans('mautic.asset.event.download');
        \$event->addEventType(\$eventTypeKey, \$eventTypeName);
        \$event->addSerializerGroup('assetList');

        // Decide if those events are filtered
        if (!\$event->isApplicable(\$eventTypeKey)) {
            return;
        }

        \$downloads = \$this->downloadRepository->getLeadDownloads(\$event->getLeadId(), \$event->getQueryOptions());

        // Add total number to counter
        \$event->addToCounter(\$eventTypeKey, \$downloads);

        if (!\$event->isEngagementCount()) {
            // Add the downloads to the event array
            foreach (\$downloads['results'] as \$download) {
                \$asset = \$this->assetModel->getEntity(\$download['asset_id']);
                \$event->addEvent(
                    [
                        'event'      => \$eventTypeKey,
                        'eventId'    => \$eventTypeKey.\$download['download_id'],
                        'eventLabel' => [
                            'label' => \$download['title'],
                            'href'  => \$this->router->generate('mautic_asset_action', ['objectAction' => 'view', 'objectId' => \$download['asset_id']]),
                        ],
                        'extra' => [
                            'asset'            => \$asset,
                            'assetDownloadUrl' => \$this->assetModel->generateUrl(\$asset),
                        ],
                        'eventType'       => \$eventTypeName,
                        'timestamp'       => \$download['dateDownload'],
                        'icon'            => 'ri-download-line',
                        'contentTemplate' => '@MauticAsset/SubscribedEvents/Timeline/index.html.twig',
                        'contactId'       => \$download['lead_id'],
                    ]
                );
            }
        }
    }

    public function onLeadChange(LeadChangeEvent \$event): void
    {
        \$this->assetModel->getDownloadRepository()->updateLeadByTrackingId(
            \$event->getNewLead()->getId(),
            \$event->getNewTrackingId(),
            \$event->getOldTrackingId()
        );
    }

    public function onLeadMerge(LeadMergeEvent \$event): void
    {
        \$this->assetModel->getDownloadRepository()->updateLead(\$event->getLoser()->getId(), \$event->getVictor()->getId());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/EventListener/LeadSubscriber.php";
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
        return new Source("", "@bundles/AssetBundle/EventListener/LeadSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\EventListener\\LeadSubscriber.php");
    }
}
