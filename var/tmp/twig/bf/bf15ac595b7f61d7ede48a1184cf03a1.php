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

/* @GrapesJsBuilder/Builder/template.html.twig */
class __TwigTemplate_f3003c523e073c6e4b3a0054189576d5 extends Template
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
        echo "    ";
        $context["templateObject"] = ["templateHtml" =>         // line 2
(isset($context["templateHtml"]) || array_key_exists("templateHtml", $context) ? $context["templateHtml"] : (function () { throw new RuntimeError('Variable "templateHtml" does not exist.', 2, $this->source); })()), "templateMjml" =>         // line 3
(isset($context["templateMjml"]) || array_key_exists("templateMjml", $context) ? $context["templateMjml"] : (function () { throw new RuntimeError('Variable "templateMjml" does not exist.', 3, $this->source); })())];
        // line 5
        echo "    ";
        echo json_encode((isset($context["templateObject"]) || array_key_exists("templateObject", $context) ? $context["templateObject"] : (function () { throw new RuntimeError('Variable "templateObject" does not exist.', 5, $this->source); })()));
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@GrapesJsBuilder/Builder/template.html.twig";
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
        return array (  42 => 5,  40 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@GrapesJsBuilder/Builder/template.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\GrapesJsBuilderBundle\\Resources\\views\\Builder\\template.html.twig");
    }
}
