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

/* @bundles/PluginBundle/Integration/UnifiedIntegrationInterface.php */
class __TwigTemplate_83296d628720dae67d41b7772f2eeca9 extends Template
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
 * Interface UnifiedIntegrationInterface is used for type hinting.
 */
interface UnifiedIntegrationInterface
{
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Integration/UnifiedIntegrationInterface.php";
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
        return new Source("", "@bundles/PluginBundle/Integration/UnifiedIntegrationInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Integration\\UnifiedIntegrationInterface.php");
    }
}
