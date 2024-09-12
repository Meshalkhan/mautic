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

/* @bundles/IntegrationsBundle/Integration/BC/BcIntegrationSettingsTrait.php */
class __TwigTemplate_129cd2301c132fc00e62af7d7d502e72 extends Template
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

namespace Mautic\\IntegrationsBundle\\Integration\\BC;

use Mautic\\PluginBundle\\Entity\\Integration;

trait BcIntegrationSettingsTrait
{
    /**
     * @deprecated Use setIntegrationConfiguration
     */
    public function setIntegrationSettings(Integration \$integration): void
    {
        \$this->setIntegrationConfiguration(\$integration);
    }

    /**
     * @deprecated Use getIntegrationConfiguration
     */
    public function getIntegrationSettings(): ?Integration
    {
        return \$this->hasIntegrationConfiguration() ? \$this->getIntegrationConfiguration() : null;
    }

    /**
     * @deprecated Implement ConfigFormFeaturesInterface instead
     */
    public function getSupportedFeatures(): array
    {
        return [];
    }

    /**
     * @deprecated Required by Mautic\\PluginBundle\\Helper\\IntegrationHelper
     */
    public function getPriority(): int
    {
        return 1;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Integration/BC/BcIntegrationSettingsTrait.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Integration/BC/BcIntegrationSettingsTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Integration\\BC\\BcIntegrationSettingsTrait.php");
    }
}
