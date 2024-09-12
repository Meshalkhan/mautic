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

/* @bundles/IntegrationsBundle/Helper/ConfigIntegrationsHelper.php */
class __TwigTemplate_274f82466689442e0c9ce99c0e6d4fb9 extends Template
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

namespace Mautic\\IntegrationsBundle\\Helper;

use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormInterface;
use Mautic\\PluginBundle\\Entity\\Integration;

class ConfigIntegrationsHelper
{
    /**
     * @var ConfigFormInterface[]
     */
    private array \$integrations = [];

    public function __construct(
        private IntegrationsHelper \$integrationsHelper
    ) {
    }

    public function addIntegration(ConfigFormInterface \$integration): void
    {
        \$this->integrations[\$integration->getName()] = \$integration;
    }

    /**
     * @return ConfigFormInterface
     *
     * @throws IntegrationNotFoundException
     */
    public function getIntegration(string \$integration)
    {
        if (!isset(\$this->integrations[\$integration])) {
            throw new IntegrationNotFoundException(\"\$integration either doesn't exist or has not been tagged with mautic.config_integration\");
        }

        // Ensure the configuration is hydrated
        \$this->integrationsHelper->getIntegrationConfiguration(\$this->integrations[\$integration]);

        return \$this->integrations[\$integration];
    }

    public function saveIntegrationConfiguration(Integration \$integrationConfiguration): void
    {
        \$this->integrationsHelper->saveIntegrationConfiguration(\$integrationConfiguration);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Helper/ConfigIntegrationsHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Helper/ConfigIntegrationsHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Helper\\ConfigIntegrationsHelper.php");
    }
}
