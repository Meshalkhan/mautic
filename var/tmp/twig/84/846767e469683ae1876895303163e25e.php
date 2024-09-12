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

/* @bundles/AssetBundle/EventListener/CampaignSubscriber.php */
class __TwigTemplate_03e2a0050ae9c21cb0b82ea5b64dea84 extends Template
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

use Mautic\\AssetBundle\\AssetEvents;
use Mautic\\AssetBundle\\Event\\AssetLoadEvent;
use Mautic\\AssetBundle\\Form\\Type\\CampaignEventAssetDownloadType;
use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Event\\CampaignBuilderEvent;
use Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent;
use Mautic\\CampaignBundle\\Executioner\\RealTimeExecutioner;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class CampaignSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private RealTimeExecutioner \$realTimeExecutioner
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CampaignEvents::CAMPAIGN_ON_BUILD         => ['onCampaignBuild', 0],
            AssetEvents::ASSET_ON_LOAD                => ['onAssetDownload', 0],
            AssetEvents::ON_CAMPAIGN_TRIGGER_DECISION => ['onCampaignTriggerDecision', 0],
        ];
    }

    public function onCampaignBuild(CampaignBuilderEvent \$event): void
    {
        \$trigger = [
            'label'          => 'mautic.asset.campaign.event.download',
            'description'    => 'mautic.asset.campaign.event.download_descr',
            'eventName'      => AssetEvents::ON_CAMPAIGN_TRIGGER_DECISION,
            'formType'       => CampaignEventAssetDownloadType::class,
            'channel'        => 'asset',
            'channelIdField' => 'assets',
        ];

        \$event->addDecision('asset.download', \$trigger);
    }

    /**
     * Trigger point actions for asset download.
     */
    public function onAssetDownload(AssetLoadEvent \$event): void
    {
        \$asset = \$event->getRecord()->getAsset();

        if (null !== \$asset) {
            \$this->realTimeExecutioner->execute('asset.download', \$asset, 'asset', \$asset->getId());
        }
    }

    public function onCampaignTriggerDecision(CampaignExecutionEvent \$event)
    {
        \$eventDetails = \$event->getEventDetails();

        if (null == \$eventDetails) {
            return \$event->setResult(true);
        }

        \$assetId       = \$eventDetails->getId();
        \$limitToAssets = \$event->getConfig()['assets'];

        if (!empty(\$limitToAssets) && !in_array(\$assetId, \$limitToAssets)) {
            // no points change
            return \$event->setResult(false);
        }

        \$event->setResult(true);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/EventListener/CampaignSubscriber.php";
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
        return new Source("", "@bundles/AssetBundle/EventListener/CampaignSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\EventListener\\CampaignSubscriber.php");
    }
}
