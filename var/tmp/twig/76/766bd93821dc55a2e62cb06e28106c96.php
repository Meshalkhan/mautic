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

/* @bundles/PluginBundle/Event/PluginIntegrationAuthRedirectEvent.php */
class __TwigTemplate_31bab1c55e499429b48d80546c08ce69 extends Template
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

class PluginIntegrationAuthRedirectEvent extends AbstractPluginIntegrationEvent
{
    /**
     * @param string \$authUrl
     */
    public function __construct(
        UnifiedIntegrationInterface \$integration,
        private \$authUrl
    ) {
        \$this->integration = \$integration;
    }

    /**
     * @return string
     */
    public function getAuthUrl()
    {
        return \$this->authUrl;
    }

    /**
     * @param string \$authUrl
     */
    public function setAuthUrl(\$authUrl): void
    {
        \$this->authUrl = \$authUrl;

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
        return "@bundles/PluginBundle/Event/PluginIntegrationAuthRedirectEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/PluginIntegrationAuthRedirectEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Event\\PluginIntegrationAuthRedirectEvent.php");
    }
}
