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

/* @MauticCore/FormTheme/form_simple.html.twig */
class __TwigTemplate_ab9d47019bfb2da08d4546a6ab427e50 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mainFormContent' => [$this, 'block_mainFormContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MauticCore/FormTheme/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["hasRightColumn"] =         $this->hasBlock("rightFormContent", $context, $blocks);
        // line 3
        $context["modalView"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "getRequest", [], "method", false, false, false, 3), "get", ["modal", false], "method", false, false, false, 3) ||         $this->hasBlock("inModal", $context, $blocks));
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/FormTheme/form.html.twig", "@MauticCore/FormTheme/form_simple.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_mainFormContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"box-layout\">
    <div class=\"col-md-";
        // line 6
        echo ((((isset($context["hasRightColumn"]) || array_key_exists("hasRightColumn", $context) ? $context["hasRightColumn"] : (function () { throw new RuntimeError('Variable "hasRightColumn" does not exist.', 6, $this->source); })()) &&  !(isset($context["modalView"]) || array_key_exists("modalView", $context) ? $context["modalView"] : (function () { throw new RuntimeError('Variable "modalView" does not exist.', 6, $this->source); })()))) ? (9) : (12));
        echo " height-auto bdr-r\">
        <div class=\"pa-md\">
            ";
        // line 8
        $this->displayBlock("primaryFormContent", $context, $blocks);
        echo "
        </div>
    </div>
    ";
        // line 11
        if ((isset($context["hasRightColumn"]) || array_key_exists("hasRightColumn", $context) ? $context["hasRightColumn"] : (function () { throw new RuntimeError('Variable "hasRightColumn" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "    <div class=\"col-md-";
            echo (((isset($context["modalView"]) || array_key_exists("modalView", $context) ? $context["modalView"] : (function () { throw new RuntimeError('Variable "modalView" does not exist.', 12, $this->source); })())) ? (12) : (3));
            echo " height-auto\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            ";
            // line 14
            $this->displayBlock("rightFormContent", $context, $blocks);
            echo "
        </div>
    </div>
    ";
        }
        // line 18
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/FormTheme/form_simple.html.twig";
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
        return array (  84 => 18,  77 => 14,  71 => 12,  69 => 11,  63 => 8,  58 => 6,  55 => 5,  51 => 4,  46 => 1,  44 => 3,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/FormTheme/form_simple.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\FormTheme\\form_simple.html.twig");
    }
}
