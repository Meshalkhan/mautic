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

/* @bundles/IntegrationsBundle/Helper/AuthIntegrationsHelper.php */
class __TwigTemplate_ef162a884b0001a3ac51d980b21ad39d extends Template
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
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\AuthenticationInterface;
use Mautic\\PluginBundle\\Entity\\Integration;

class AuthIntegrationsHelper
{
    /**
     * @var AuthenticationInterface[]
     */
    private array \$integrations = [];

    public function __construct(
        private IntegrationsHelper \$integrationsHelper
    ) {
    }

    public function addIntegration(AuthenticationInterface \$integration): void
    {
        \$this->integrations[\$integration->getName()] = \$integration;
    }

    /**
     * @throws IntegrationNotFoundException
     */
    public function getIntegration(string \$integration): AuthenticationInterface
    {
        if (!isset(\$this->integrations[\$integration])) {
            throw new IntegrationNotFoundException(\"\$integration either doesn't exist or has not been tagged with mautic.authentication_integration\");
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
        return "@bundles/IntegrationsBundle/Helper/AuthIntegrationsHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Helper/AuthIntegrationsHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Helper\\AuthIntegrationsHelper.php");
    }
}
