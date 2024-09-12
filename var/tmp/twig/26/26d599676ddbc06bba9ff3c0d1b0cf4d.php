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

/* @bundles/PluginBundle/Facade/ReloadFacade.php */
class __TwigTemplate_7b7e915481cb08277106fe0636d96b93 extends Template
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

namespace Mautic\\PluginBundle\\Facade;

use Mautic\\PluginBundle\\Helper\\ReloadHelper;
use Mautic\\PluginBundle\\Model\\PluginModel;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ReloadFacade
{
    public function __construct(
        private PluginModel \$pluginModel,
        private ReloadHelper \$reloadHelper,
        private TranslatorInterface \$translator
    ) {
    }

    /**
     * This method finds all plguins that needs to be enabled, disabled, installed and updated
     * and do all those actions.
     *
     * Returns humanly understandable message about its doings.
     *
     * @return string
     */
    public function reloadPlugins()
    {
        \$plugins                 = \$this->pluginModel->getAllPluginsConfig();
        \$pluginMetadata          = \$this->pluginModel->getPluginsMetadata();
        \$installedPlugins        = \$this->pluginModel->getInstalledPlugins();
        \$installedPluginTables   = \$this->pluginModel->getInstalledPluginTables(\$pluginMetadata);
        \$installedPluginsSchemas = \$this->pluginModel->createPluginSchemas(\$installedPluginTables);
        \$disabledPlugins         = \$this->reloadHelper->disableMissingPlugins(\$plugins, \$installedPlugins);
        \$enabledPlugins          = \$this->reloadHelper->enableFoundPlugins(\$plugins, \$installedPlugins);
        \$updatedPlugins          = \$this->reloadHelper->updatePlugins(\$plugins, \$installedPlugins, \$pluginMetadata, \$installedPluginsSchemas);
        \$installedPlugins        = \$this->reloadHelper->installPlugins(\$plugins, \$installedPlugins, \$pluginMetadata, \$installedPluginsSchemas);
        \$persist                 = array_values((array) (\$disabledPlugins + \$enabledPlugins + \$updatedPlugins + \$installedPlugins));

        \$this->pluginModel->saveEntities(\$persist);

        // Alert the user to the number of additions
        return \$this->translator->trans(
            'mautic.plugin.notice.reloaded',
            [
                '%added%'    => count(\$installedPlugins),
                '%disabled%' => count(\$disabledPlugins),
                '%updated%'  => count(\$updatedPlugins),
            ],
            'flashes'
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
        return "@bundles/PluginBundle/Facade/ReloadFacade.php";
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
        return new Source("", "@bundles/PluginBundle/Facade/ReloadFacade.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Facade\\ReloadFacade.php");
    }
}
