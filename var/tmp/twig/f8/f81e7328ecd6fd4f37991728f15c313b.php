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

/* @bundles/PluginBundle/Event/PluginIntegrationFormDisplayEvent.php */
class __TwigTemplate_982865254593aa21d695be89ca788680 extends Template
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

use Mautic\\PluginBundle\\Integration\\UnifiedIntegrationInterface;

class PluginIntegrationFormDisplayEvent extends AbstractPluginIntegrationEvent
{
    /**
     * @param array<string, mixed> \$settings
     */
    public function __construct(
        UnifiedIntegrationInterface \$integration,
        private array \$settings
    ) {
        \$this->integration = \$integration;
    }

    /**
     * @return array
     */
    public function getSettings()
    {
        return \$this->settings;
    }

    public function setSettings(array \$settings): void
    {
        \$this->settings = \$settings;

        \$this->stopPropagation();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Event/PluginIntegrationFormDisplayEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/PluginIntegrationFormDisplayEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Event\\PluginIntegrationFormDisplayEvent.php");
    }
}
