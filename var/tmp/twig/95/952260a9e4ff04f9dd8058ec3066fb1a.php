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

/* @bundles/PluginBundle/Event/PluginIntegrationAuthCallbackUrlEvent.php */
class __TwigTemplate_5c0b0ab6e8b7ac123d11a3ab9231368e extends Template
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

class PluginIntegrationAuthCallbackUrlEvent extends AbstractPluginIntegrationEvent
{
    /**
     * @param string \$callbackUrl
     */
    public function __construct(
        UnifiedIntegrationInterface \$integration,
        private \$callbackUrl
    ) {
        \$this->integration = \$integration;
    }

    /**
     * @return string
     */
    public function getCallbackUrl()
    {
        return \$this->callbackUrl;
    }

    /**
     * @param string \$callbackUrl
     */
    public function setCallbackUrl(\$callbackUrl): void
    {
        \$this->callbackUrl = \$callbackUrl;

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
        return "@bundles/PluginBundle/Event/PluginIntegrationAuthCallbackUrlEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/PluginIntegrationAuthCallbackUrlEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Event\\PluginIntegrationAuthCallbackUrlEvent.php");
    }
}
