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

/* @bundles/PluginBundle/Event/PluginIntegrationKeyEvent.php */
class __TwigTemplate_8e10936268bf21dfd8e58ce4e8a61350 extends Template
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

class PluginIntegrationKeyEvent extends AbstractPluginIntegrationEvent
{
    public function __construct(
        UnifiedIntegrationInterface \$integration,
        private ?array \$keys = null
    ) {
        \$this->integration = \$integration;
    }

    /**
     * Get the keys array.
     */
    public function getKeys()
    {
        return \$this->keys;
    }

    /**
     * Set new keys array.
     */
    public function setKeys(array \$keys): void
    {
        \$this->keys = \$keys;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Event/PluginIntegrationKeyEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/PluginIntegrationKeyEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Event\\PluginIntegrationKeyEvent.php");
    }
}
