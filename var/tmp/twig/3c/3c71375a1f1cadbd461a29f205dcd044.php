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

/* @MauticDynamicContent/FormTheme/Filter/layout.html.twig */
class __TwigTemplate_d9844d3146e8fad475bb527e8ff85b12 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 51
        $_trait_0 = $this->loadTemplate("@MauticLead/FormTheme/Filter/_leadlist_filters_widget.html.twig", "@MauticDynamicContent/FormTheme/Filter/layout.html.twig", 51);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@MauticLead/FormTheme/Filter/_leadlist_filters_widget.html.twig".'" cannot be used as a trait.', 51, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                '_dwc_filters_entry_widget' => [$this, 'block__dwc_filters_entry_widget'],
                '_dwc_filters_widget' => [$this, 'block__dwc_filters_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_dwc_filters_entry_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('_dwc_filters_widget', $context, $blocks);
    }

    // line 1
    public function block__dwc_filters_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["isPrototype"] = ("__name__" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "vars", [], "any", false, false, false, 2), "name", [], "any", false, false, false, 2));
        // line 3
        $context["filterType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "field", [], "any", false, false, false, 3), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3);
        // line 4
        $context["inGroup"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 4), "data", [], "any", false, true, false, 4), "glue", [], "any", true, true, false, 4) && ("and" === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "data", [], "any", false, false, false, 4), "glue", [], "any", false, false, false, 4)));
        // line 5
        $context["isBehavior"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "behaviors", [], "any", false, true, false, 5), (isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 5, $this->source); })()), [], "array", false, true, false, 5), "label", [], "any", true, true, false, 5);
        // line 6
        $context["icon"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 6), "data", [], "any", false, true, false, 6), "object", [], "any", true, true, false, 6) && ("company" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "data", [], "any", false, false, false, 6), "object", [], "any", false, false, false, 6)))) ? ("ri-building-2-line") : ("ri-user-6-fill"));
        // line 8
        if ((isset($context["isBehavior"]) || array_key_exists("isBehavior", $context) ? $context["isBehavior"] : (function () { throw new RuntimeError('Variable "isBehavior" does not exist.', 8, $this->source); })())) {
            // line 9
            $context["object"] = "behaviors";
        } else {
            // line 11
            $context["object"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 11), "data", [], "any", false, true, false, 11), "object", [], "any", true, true, false, 11)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "data", [], "any", false, false, false, 11), "object", [], "any", false, false, false, 11)) : ("lead"));
        }
        // line 14
        if (((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 14, $this->source); })()) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 14, $this->source); })()), [], "array", false, true, false, 14), (isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 14, $this->source); })()), [], "array", false, true, false, 14), "label", [], "any", true, true, false, 14))) {
            // line 15
            echo "<div class=\"panel ";
            if (((isset($context["inGroup"]) || array_key_exists("inGroup", $context) ? $context["inGroup"] : (function () { throw new RuntimeError('Variable "inGroup" does not exist.', 15, $this->source); })()) && (false === (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 15, $this->source); })())))) {
                echo "in-group";
            }
            echo "\">
    <div class=\"panel-heading ";
            // line 16
            if (( !(isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 16, $this->source); })()) && ("0" === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16)))) {
                echo "hide";
            }
            echo "\">
        <div class=\"panel-glue col-sm-2 pl-0 \">
            ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "glue", [], "any", false, false, false, 18), 'widget');
            echo "
        </div>
    </div>
    <div class=\"panel-body\">
        <div class=\"col-xs-6 col-sm-3 field-name\">
            <i class=\"object-icon fa ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>
            <span>";
            // line 24
            (((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 24, $this->source); })())) ? (print ("__label__")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 24, $this->source); })()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 24, $this->source); })()), [], "array", false, false, false, 24), (isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 24, $this->source); })()), [], "array", false, false, false, 24), "label", [], "any", false, false, false, 24), "html", null, true))));
            echo "</span>
        </div>

        <div class=\"col-xs-6 col-sm-3 padding-none\">
            ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "operator", [], "any", false, false, false, 28), 'widget');
            echo "
        </div>";
            // line 31
            $context["hasErrors"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "filter", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31)) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "display", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31)));
            // line 32
            echo "<div class=\"col-xs-10 col-sm-5 padding-none ";
            if ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 32, $this->source); })())) {
                echo "has-error";
            }
            echo "\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "filter", [], "any", false, false, false, 33), 'widget');
            echo "
            ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "display", [], "any", false, false, false, 34), 'widget');
            echo "
            ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "filter", [], "any", false, false, false, 35), 'errors');
            echo "
            ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "display", [], "any", false, false, false, 36), 'errors');
            echo "
        </div>

        <div class=\"col-xs-2 col-sm-1\">
            <a href=\"javascript: void(0);\" class=\"remove-selected btn btn-default text-danger pull-right\"><i class=\"ri-delete-bin-line\"></i></a>
        </div>
        ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "field", [], "any", false, false, false, 42), 'widget');
            echo "
        ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "type", [], "any", false, false, false, 43), 'widget');
            echo "
        ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "object", [], "any", false, false, false, 44), 'widget');
            echo "
    </div>
</div>";
        }
    }

    // line 50
    public function block__dwc_filters_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "  ";
        // line 52
        echo "  ";
        $this->displayBlock("_leadlist_filters_widget", $context, $blocks);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticDynamicContent/FormTheme/Filter/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  173 => 52,  171 => 51,  167 => 50,  159 => 44,  155 => 43,  151 => 42,  142 => 36,  138 => 35,  134 => 34,  130 => 33,  123 => 32,  121 => 31,  117 => 28,  110 => 24,  106 => 23,  98 => 18,  91 => 16,  84 => 15,  82 => 14,  79 => 11,  76 => 9,  74 => 8,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  60 => 1,  56 => 50,  53 => 49,  51 => 1,  30 => 51,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticDynamicContent/FormTheme/Filter/layout.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DynamicContentBundle\\Resources\\views\\FormTheme\\Filter\\layout.html.twig");
    }
}
