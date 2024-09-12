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

/* @bundles/IntegrationsBundle/Bundle/AbstractPluginBundle.php */
class __TwigTemplate_be1c3cc05a16418fb0add5d6a89afea2 extends Template
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

namespace Mautic\\IntegrationsBundle\\Bundle;

use Doctrine\\DBAL\\Schema\\Schema;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\IntegrationsBundle\\Migration\\Engine;
use Mautic\\PluginBundle\\Bundle\\PluginBundleBase;
use Mautic\\PluginBundle\\Entity\\Plugin;

/**
 * Base Bundle class which should be extended by addon bundles.
 */
abstract class AbstractPluginBundle extends PluginBundleBase
{
    /**
     * @param array|null \$metadata
     *
     * @throws \\Exception
     */
    public static function onPluginUpdate(Plugin \$plugin, MauticFactory \$factory, \$metadata = null, ?Schema \$installedSchema = null): void
    {
        \$entityManager = \$factory->getEntityManager();
        \$tablePrefix   = (string) \$factory->getParameter('mautic.db_table_prefix');

        \$migrationEngine = new Engine(
            \$entityManager,
            \$tablePrefix,
            __DIR__.'/../../../../plugins/'.\$plugin->getBundle(),
            \$plugin->getBundle()
        );

        \$migrationEngine->up();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Bundle/AbstractPluginBundle.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Bundle/AbstractPluginBundle.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Bundle\\AbstractPluginBundle.php");
    }
}
