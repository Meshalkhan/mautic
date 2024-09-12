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

/* @bundles/PluginBundle/Integration/AbstractSsoFormIntegration.php */
class __TwigTemplate_85de6fdfcf2e2f1567acddbae4d41cc0 extends Template
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

namespace Mautic\\PluginBundle\\Integration;

/**
 * Used by SSO auth plugins that use credentials from the login form to authenticate.
 */
abstract class AbstractSsoFormIntegration extends AbstractSsoServiceIntegration
{
    /**
     * @return array
     */
    public function getSupportedFeatures()
    {
        return [
            'sso_form',
        ];
    }

    /**
     * Get form settings; authorization is not needed since it is done when a user logs in.
     *
     * @return array<string, mixed>
     */
    public function getFormSettings(): array
    {
        return [
            'requires_callback'      => false,
            'requires_authorization' => false,
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Integration/AbstractSsoFormIntegration.php";
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
        return new Source("", "@bundles/PluginBundle/Integration/AbstractSsoFormIntegration.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Integration\\AbstractSsoFormIntegration.php");
    }
}
