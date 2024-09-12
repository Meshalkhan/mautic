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

/* @bundles/CoreBundle/EventListener/ConfigSubscriber.php */
class __TwigTemplate_add675c7f4eb8252dddde711309ee5ff extends Template
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
use Mautic\\ConfigBundle\\Event\\ConfigEvent;
use Mautic\\CoreBundle\\Form\\Type\\ConfigType;
use Mautic\\CoreBundle\\Helper\\LanguageHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ConfigSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private LanguageHelper \$languageHelper
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ConfigEvents::CONFIG_ON_GENERATE => ['onConfigGenerate', 0],
            ConfigEvents::CONFIG_PRE_SAVE    => ['onConfigBeforeSave', 0],
        ];
    }

    public function onConfigGenerate(ConfigBuilderEvent \$event): void
    {
        \$coreParams = \$event->getParametersFromConfig('MauticCoreBundle');
        unset(\$coreParams['theme']);
        unset(\$coreParams['theme_import_allowed_extensions']);
        \$event->addForm([
            'bundle'     => 'CoreBundle',
            'formType'   => ConfigType::class,
            'formAlias'  => 'coreconfig',
            'formTheme'  => '@MauticCore/FormTheme/Config/config_layout.html.twig',
            'parameters' => \$coreParams,
        ]);
    }

    public function onConfigBeforeSave(ConfigEvent \$event): void
    {
        \$values = \$event->getConfig();

        // Preserve existing value
        \$event->unsetIfEmpty('transifex_password');

        // Check if the selected locale has been downloaded already, fetch it if not
        if (!array_key_exists(\$values['coreconfig']['locale'], \$this->languageHelper->getSupportedLanguages())) {
            \$fetchLanguage = \$this->languageHelper->extractLanguagePackage(\$values['coreconfig']['locale']);

            // If there is an error, fall back to 'en_US' as it is our system default
            if (\$fetchLanguage['error']) {
                \$values['coreconfig']['locale'] = 'en_US';
                \$message                        = 'mautic.core.could.not.set.language';
                \$messageVars                    = [];

                if (isset(\$fetchLanguage['message'])) {
                    \$message = \$fetchLanguage['message'];
                }

                if (isset(\$fetchLanguage['vars'])) {
                    \$messageVars = \$fetchLanguage['vars'];
                }

                \$event->setError(\$message, \$messageVars);
            }
        }

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
        return "@bundles/CoreBundle/EventListener/ConfigSubscriber.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/ConfigSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\EventListener\\ConfigSubscriber.php");
    }
}
