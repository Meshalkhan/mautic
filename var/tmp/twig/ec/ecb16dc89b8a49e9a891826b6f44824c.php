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

/* @bundles/PageBundle/EventListener/ConfigSubscriber.php */
class __TwigTemplate_665b0e1a6d68fd52a35412a5d70db98e extends Template
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

namespace Mautic\\PageBundle\\EventListener;

use Mautic\\ConfigBundle\\ConfigEvents;
use Mautic\\ConfigBundle\\Event\\ConfigBuilderEvent;
use Mautic\\ConfigBundle\\Event\\ConfigEvent;
use Mautic\\PageBundle\\Form\\Type\\ConfigTrackingPageType;
use Mautic\\PageBundle\\Form\\Type\\ConfigType;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ConfigSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            ConfigEvents::CONFIG_ON_GENERATE => [
                ['onConfigGenerate', 0],
                ['onConfigGenerateTracking', 0],
            ],
            ConfigEvents::CONFIG_PRE_SAVE => ['onConfigSave', 0],
        ];
    }

    public function onConfigGenerate(ConfigBuilderEvent \$event): void
    {
        \$event->addForm([
            'bundle'     => 'PageBundle',
            'formAlias'  => 'pageconfig',
            'formType'   => ConfigType::class,
            'formTheme'  => '@MauticPage/FormTheme/Config/_config_pageconfig_widget.html.twig',
            // parameters must be defined directly in case there are 2 config forms per bundle.
            // \$event->getParametersFromConfig('MauticPageBundle') would return all params for PageBundle
            // and trackingconfig form would overwrote values in the pageconfig form. See #5559.
            'parameters' => [
                'cat_in_page_url'  => false,
                'google_analytics' => false,
            ],
        ]);
    }

    public function onConfigGenerateTracking(ConfigBuilderEvent \$event): void
    {
        \$event->addForm([
            'bundle'     => 'PageBundle',
            'formAlias'  => 'trackingconfig',
            'formType'   => ConfigTrackingPageType::class,
            'formTheme'  => '@MauticPage/FormTheme/Config/_config_trackingconfig_widget.html.twig',
            // parameters defined this way because of the reason as above.
            'parameters' => [
                'anonymize_ip'                          => false,
                'track_contact_by_ip'                   => false,
                'track_by_tracking_url'                 => false,
                'facebook_pixel_id'                     => null,
                'facebook_pixel_trackingpage_enabled'   => false,
                'facebook_pixel_landingpage_enabled'    => false,
                'google_analytics_id'                   => null,
                'google_analytics_trackingpage_enabled' => false,
                'google_analytics_landingpage_enabled'  => false,
                'google_analytics_anonymize_ip'         => false,
                'do_not_track_404_anonymous'            => false,
            ],
        ]);
    }

    public function onConfigSave(ConfigEvent \$event): void
    {
        \$values = \$event->getConfig();

        if (!empty(\$values['pageconfig']['google_analytics'])) {
            \$values['pageconfig']['google_analytics'] = htmlspecialchars(\$values['pageconfig']['google_analytics']);
            \$event->setConfig(\$values);
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
        return "@bundles/PageBundle/EventListener/ConfigSubscriber.php";
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
        return new Source("", "@bundles/PageBundle/EventListener/ConfigSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\EventListener\\ConfigSubscriber.php");
    }
}
