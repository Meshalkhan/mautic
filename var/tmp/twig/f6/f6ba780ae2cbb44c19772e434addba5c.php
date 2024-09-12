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

/* @bundles/IntegrationsBundle/Integration/Interfaces/IntegrationInterface.php */
class __TwigTemplate_f0d3c5a7405870fef5c300f397890f1e extends Template
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

namespace Mautic\\IntegrationsBundle\\Integration\\Interfaces;

use Mautic\\PluginBundle\\Entity\\Integration;
use Mautic\\PluginBundle\\Integration\\UnifiedIntegrationInterface;

interface IntegrationInterface extends UnifiedIntegrationInterface
{
    /**
     * Return the integration's name.
     */
    public function getName(): string;

    public function getDisplayName(): string;

    public function hasIntegrationConfiguration(): bool;

    public function getIntegrationConfiguration(): Integration;

    /**
     * @return mixed
     */
    public function setIntegrationConfiguration(Integration \$integration);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Integration/Interfaces/IntegrationInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Integration/Interfaces/IntegrationInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Integration\\Interfaces\\IntegrationInterface.php");
    }
}
