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

/* @bundles/CoreBundle/EventListener/ConfigThemeSubscriber.php */
class __TwigTemplate_eb2af00d1c776a7f54b3ef1086d183be extends Template
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

namespace Mautic\\CoreBundle\\EventListener;

use Mautic\\ConfigBundle\\ConfigEvents;
use Mautic\\ConfigBundle\\Event\\ConfigBuilderEvent;
use Mautic\\CoreBundle\\Form\\Type\\ConfigThemeType;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ConfigThemeSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            ConfigEvents::CONFIG_ON_GENERATE => ['onConfigGenerate', 0],
        ];
    }

    public function onConfigGenerate(ConfigBuilderEvent \$event): void
    {
        \$event->addForm(
            [
                'bundle'     => 'CoreBundle',
                'formAlias'  => 'themeconfig',
                'formType'   => ConfigThemeType::class,
                'formTheme'  => '@MauticCore/FormTheme/Config/_config_themeconfig_widget.html.twig',
                'parameters' => [
                    'theme'                           => \$event->getParametersFromConfig('MauticCoreBundle')['theme'],
                    'theme_import_allowed_extensions' => \$event->getParametersFromConfig('MauticCoreBundle')['theme_import_allowed_extensions'],
                ],
            ]
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/EventListener/ConfigThemeSubscriber.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/ConfigThemeSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\EventListener\\ConfigThemeSubscriber.php");
    }
}
