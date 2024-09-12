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

/* @bundles/NotificationBundle/EventListener/ChannelSubscriber.php */
class __TwigTemplate_2706e94489e49c546f9e73cd6df70c06 extends Template
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

namespace Mautic\\NotificationBundle\\EventListener;

use Mautic\\ChannelBundle\\ChannelEvents;
use Mautic\\ChannelBundle\\Event\\ChannelEvent;
use Mautic\\ChannelBundle\\Model\\MessageModel;
use Mautic\\NotificationBundle\\Form\\Type\\NotificationListType;
use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Mautic\\ReportBundle\\Model\\ReportModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ChannelSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private IntegrationHelper \$integrationHelper
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ChannelEvents::ADD_CHANNEL => ['onAddChannel', 70],
        ];
    }

    public function onAddChannel(ChannelEvent \$event): void
    {
        \$integration = \$this->integrationHelper->getIntegrationObject('OneSignal');

        if (\$integration && \$integration->getIntegrationSettings()->getIsPublished()) {
            \$event->addChannel(
                'notification',
                [
                    MessageModel::CHANNEL_FEATURE => [
                        'campaignAction'             => CampaignSubscriber::EVENT_ACTION_SEND_NOTIFICATION,
                        'campaignDecisionsSupported' => [
                            'page.pagehit',
                            'asset.download',
                            'form.submit',
                        ],
                        'lookupFormType' => NotificationListType::class,
                        'repository'     => \\Mautic\\NotificationBundle\\Entity\\Notification::class,
                        'lookupOptions'  => [
                            'mobile'  => false,
                            'desktop' => true,
                        ],
                    ],
                    ReportModel::CHANNEL_FEATURE => [
                        'table' => 'push_notifications',
                    ],
                ]
            );

            \$supportedFeatures = \$integration->getSupportedFeatures();

            if (in_array('mobile', \$supportedFeatures)) {
                \$event->addChannel(
                    'mobile_notification',
                    [
                        MessageModel::CHANNEL_FEATURE => [
                            'campaignAction'             => CampaignSubscriber::EVENT_ACTION_SEND_MOBILE_NOTIFICATION,
                            'campaignDecisionsSupported' => [
                                'page.pagehit',
                                'asset.download',
                                'form.submit',
                            ],
                            'lookupFormType'             => NotificationListType::class,
                            'repository'                 => \\Mautic\\NotificationBundle\\Entity\\Notification::class,
                            'lookupOptions'              => [
                                'mobile'  => true,
                                'desktop' => false,
                            ],
                        ],
                    ]
                );
            }
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
        return "@bundles/NotificationBundle/EventListener/ChannelSubscriber.php";
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
        return new Source("", "@bundles/NotificationBundle/EventListener/ChannelSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\NotificationBundle\\EventListener\\ChannelSubscriber.php");
    }
}
