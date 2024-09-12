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

/* @bundles/IntegrationsBundle/Event/ConfigAuthUrlEvent.php */
class __TwigTemplate_908cb5e6e22d83ae7914f42b7ca8f17d extends Template
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

namespace Mautic\\IntegrationsBundle\\Event;

use Mautic\\PluginBundle\\Entity\\Integration;
use Symfony\\Contracts\\EventDispatcher\\Event;

final class ConfigAuthUrlEvent extends Event
{
    public function __construct(private Integration \$integrationConfiguration, private string \$authUrl)
    {
    }

    public function getIntegrationConfiguration(): Integration
    {
        return \$this->integrationConfiguration;
    }

    public function getIntegration(): string
    {
        return \$this->integrationConfiguration->getName();
    }

    public function getAuthUrl(): string
    {
        return \$this->authUrl;
    }

    public function setAuthUrl(string \$authUrl): void
    {
        \$this->authUrl = \$authUrl;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Event/ConfigAuthUrlEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/ConfigAuthUrlEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Event\\ConfigAuthUrlEvent.php");
    }
}
