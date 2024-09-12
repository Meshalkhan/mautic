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

/* @bundles/PluginBundle/Event/PluginIntegrationEvent.php */
class __TwigTemplate_646e51fe55e4a400812964434dc46125 extends Template
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

namespace Mautic\\PluginBundle\\Event;

use Mautic\\PluginBundle\\Entity\\Integration;
use Mautic\\PluginBundle\\Integration\\UnifiedIntegrationInterface;

class PluginIntegrationEvent extends AbstractPluginIntegrationEvent
{
    public function __construct(UnifiedIntegrationInterface \$integration)
    {
        \$this->integration = \$integration;
    }

    /**
     * @return Integration
     */
    public function getEntity()
    {
        return \$this->integration->getIntegrationSettings();
    }

    public function setEntity(Integration \$integration): void
    {
        \$this->integration->setIntegrationSettings(\$integration);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Event/PluginIntegrationEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/PluginIntegrationEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Event\\PluginIntegrationEvent.php");
    }
}
