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

/* @GrapesJsBuilder/Setting/vars.html.twig */
class __TwigTemplate_2d1495d018f6f036969f254ca75e2ee6 extends Template
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
        echo "<div id=\"grapesjsbuilder_assets\" class=\"hide\" data-assets=\"";
        echo twig_escape_filter($this->env, (isset($context["dataAssets"]) || array_key_exists("dataAssets", $context) ? $context["dataAssets"] : (function () { throw new RuntimeError('Variable "dataAssets" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" data-upload=\"";
        echo twig_escape_filter($this->env, (isset($context["dataUpload"]) || array_key_exists("dataUpload", $context) ? $context["dataUpload"] : (function () { throw new RuntimeError('Variable "dataUpload" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" data-delete=\"";
        echo twig_escape_filter($this->env, (isset($context["dataDelete"]) || array_key_exists("dataDelete", $context) ? $context["dataDelete"] : (function () { throw new RuntimeError('Variable "dataDelete" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@GrapesJsBuilder/Setting/vars.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
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
        return new Source("", "@GrapesJsBuilder/Setting/vars.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\GrapesJsBuilderBundle\\Resources\\views\\Setting\\vars.html.twig");
    }
}
