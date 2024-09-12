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

/* @bundles/CampaignBundle/EventListener/ConfigSubscriber.php */
class __TwigTemplate_5f95ced40de65ccb7c48750d32c68b1a extends Template
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

namespace Mautic\\CampaignBundle\\EventListener;

use Mautic\\CampaignBundle\\Form\\Type\\ConfigType;
use Mautic\\ConfigBundle\\ConfigEvents;
use Mautic\\ConfigBundle\\Event\\ConfigBuilderEvent;
use Mautic\\ConfigBundle\\Event\\ConfigEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ConfigSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            ConfigEvents::CONFIG_ON_GENERATE => ['onConfigGenerate', 0],
            ConfigEvents::CONFIG_PRE_SAVE    => ['onConfigSave', 0],
        ];
    }

    public function onConfigGenerate(ConfigBuilderEvent \$event): void
    {
        \$event->addForm(
            [
                'bundle'     => 'CampaignBundle',
                'formAlias'  => 'campaignconfig',
                'formType'   => ConfigType::class,
                'formTheme'  => '@MauticCampaign/FormTheme/Config/_config_campaignconfig_widget.html.twig',
                'parameters' => \$event->getParametersFromConfig('MauticCampaignBundle'),
            ]
        );
    }

    public function onConfigSave(ConfigEvent \$event): void
    {
        /** @var array \$values */
        \$values = \$event->getConfig();

        // Manipulate the values
        if (!empty(\$values['campaignconfig']['campaign_time_wait_on_event_false'])) {
            \$values['campaignconfig']['campaign_time_wait_on_event_false'] = htmlspecialchars(\$values['campaignconfig']['campaign_time_wait_on_event_false']);
        }

        // Set updated values
        \$event->setConfig(\$values);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/EventListener/ConfigSubscriber.php";
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
        return new Source("", "@bundles/CampaignBundle/EventListener/ConfigSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\EventListener\\ConfigSubscriber.php");
    }
}
