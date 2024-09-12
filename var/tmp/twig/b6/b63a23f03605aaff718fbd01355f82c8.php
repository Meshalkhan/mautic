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

/* @bundles/CoreBundle/Helper/BundleHelper.php */
class __TwigTemplate_6834756b6d24866cef761f7ff081ba5a extends Template
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

namespace Mautic\\CoreBundle\\Helper;

class BundleHelper
{
    /**
     * @var mixed[]
     */
    private array \$allBundles;

    /**
     * @param mixed[] \$coreBundles
     * @param mixed[] \$pluginBundles
     */
    public function __construct(
        private array \$coreBundles,
        private array \$pluginBundles
    ) {
        \$this->allBundles    = array_merge(\$coreBundles, \$pluginBundles);
    }

    /**
     * @param bool \$includePlugins
     *
     * @return mixed[]
     */
    public function getMauticBundles(\$includePlugins = true): array
    {
        return \$includePlugins ? \$this->allBundles : \$this->coreBundles;
    }

    /**
     * Get's an array of details for enabled Mautic plugins.
     *
     * @return array
     */
    public function getPluginBundles()
    {
        return \$this->pluginBundles;
    }

    /**
     * Gets an array of a specific bundle's config settings.
     *
     * @param string \$configKey
     * @param bool   \$includePlugins
     *
     * @return mixed
     *
     * @throws \\Exception
     */
    public function getBundleConfig(\$bundleName, \$configKey = '', \$includePlugins = false)
    {
        // get the configs
        \$configFiles = \$this->getMauticBundles(\$includePlugins);

        // if no bundle name specified we throw
        if (!\$bundleName) {
            throw new \\Exception('Bundle name not supplied');
        }

        // check for the bundle config requested actually exists
        if (!array_key_exists(\$bundleName, \$configFiles)) {
            throw new \\Exception('Bundle '.\$bundleName.' does not exist');
        }

        // get the specific bundle's configurations
        \$bundleConfig = \$configFiles[\$bundleName]['config'];

        // no config key supplied so just return the bundle's config
        if (!\$configKey) {
            return \$bundleConfig;
        }

        // check that the key exists
        if (!array_key_exists(\$configKey, \$bundleConfig)) {
            throw new \\Exception('Key '.\$configKey.' does not exist in bundle '.\$bundleName);
        }

        // we didn't throw so we can send the key value
        return \$bundleConfig[\$configKey];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/BundleHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/BundleHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\BundleHelper.php");
    }
}
