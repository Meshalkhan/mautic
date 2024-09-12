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

/* @MauticLead/FormTheme/Filter/_leadlist_filters_entry_widget.html.twig */
class __TwigTemplate_0a1a7a0bdaec4a9b9a1fb1e5a8530a07 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_leadlist_filters_entry_widget' => [$this, 'block__leadlist_filters_entry_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        $this->displayBlock('_leadlist_filters_entry_widget', $context, $blocks);
    }

    public function block__leadlist_filters_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "  ";
        $context["isPrototype"] = ("__name__" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "vars", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8));
        // line 9
        echo "  ";
        $context["filterType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "field", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "value", [], "any", false, false, false, 9);
        // line 10
        echo "  ";
        $context["inGroup"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 10), "data", [], "any", true, true, false, 10) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 10), "data", [], "any", false, true, false, 10), "glue", [], "any", true, true, false, 10)) && ("and" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "data", [], "any", false, false, false, 10), "glue", [], "any", false, false, false, 10)));
        // line 11
        echo "  ";
        $context["isBehavior"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "behaviors", [], "any", false, true, false, 11), (isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 11, $this->source); })()), [], "array", false, true, false, 11), "label", [], "any", true, true, false, 11);
        // line 12
        echo "  ";
        $context["class"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 12), "data", [], "any", false, true, false, 12), "object", [], "any", true, true, false, 12) && ("company" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "data", [], "any", false, false, false, 12), "object", [], "any", false, false, false, 12)))) ? ("ri-building-2-line") : ("ri-user-6-fill"));
        // line 13
        echo "
  ";
        // line 14
        if ((isset($context["isBehavior"]) || array_key_exists("isBehavior", $context) ? $context["isBehavior"] : (function () { throw new RuntimeError('Variable "isBehavior" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "      ";
            $context["object"] = "behaviors";
            // line 16
            echo "  ";
        } else {
            // line 17
            echo "      ";
            $context["object"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 17), "data", [], "any", false, true, false, 17), "object", [], "any", true, true, false, 17)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "data", [], "any", false, false, false, 17), "object", [], "any", false, false, false, 17)) : ("lead"));
            // line 18
            echo "  ";
        }
        // line 19
        echo "
  ";
        // line 20
        if (((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 20, $this->source); })()) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 20, $this->source); })()), [], "array", false, true, false, 20), (isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 20, $this->source); })()), [], "array", false, true, false, 20), "label", [], "any", true, true, false, 20))) {
            // line 21
            echo "    <div class=\"panel ";
            if (((isset($context["inGroup"]) || array_key_exists("inGroup", $context) ? $context["inGroup"] : (function () { throw new RuntimeError('Variable "inGroup" does not exist.', 21, $this->source); })()) && (false == (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 21, $this->source); })())))) {
                echo "in-group";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\">
        <div class=\"panel-heading ";
            // line 22
            if (( !(isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 22, $this->source); })()) && ("0" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "vars", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22)))) {
                echo "hide";
            }
            echo "\">
            <div class=\"panel-glue col-sm-2 pl-0 \">
                ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "glue", [], "any", false, false, false, 24), 'widget');
            echo "
            </div>
        </div>
        <div class=\"panel-body\">
            <div class=\"col-xs-6 col-sm-3 field-name\">
                <i class=\"object-icon fa ";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "\" aria-hidden=\"true\"></i> <span>";
            if ((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 29, $this->source); })())) {
                echo "__label__";
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 29, $this->source); })()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 29, $this->source); })()), [], "array", false, false, false, 29), (isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 29, $this->source); })()), [], "array", false, false, false, 29), "label", [], "array", false, false, false, 29), "html", null, true);
            }
            echo "</span>
            </div>

            <div class=\"col-xs-6 col-sm-3 padding-none\">
                ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "operator", [], "any", false, false, false, 33), 'widget');
            echo "
            </div>

            ";
            // line 36
            $context["hasErrors"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "properties", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "errors", [], "any", false, false, false, 36)) > 0);
            // line 37
            echo "            <div class=\"col-xs-10 col-sm-5 padding-none ";
            if ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 37, $this->source); })())) {
                echo "has-error";
            }
            echo "\">
                <div class=\"properties-form\">
                    ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "properties", [], "any", false, false, false, 39), 'widget');
            echo "
                </div>
                ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "properties", [], "any", false, false, false, 41), 'errors');
            echo "
            </div>

            <div class=\"col-xs-2 col-sm-1\">
                <a href=\"javascript: void(0);\" class=\"remove-selected btn btn-default text-danger pull-right\"><i class=\"ri-delete-bin-line\"></i></a>
            </div>
            ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "field", [], "any", false, false, false, 47), 'widget');
            echo "
            ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "type", [], "any", false, false, false, 48), 'widget');
            echo "
            ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "object", [], "any", false, false, false, 49), 'widget');
            echo "
        </div>
    </div>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/FormTheme/Filter/_leadlist_filters_entry_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  157 => 49,  153 => 48,  149 => 47,  140 => 41,  135 => 39,  127 => 37,  125 => 36,  119 => 33,  106 => 29,  98 => 24,  91 => 22,  82 => 21,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  63 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  45 => 8,  38 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/FormTheme/Filter/_leadlist_filters_entry_widget.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\FormTheme\\Filter\\_leadlist_filters_entry_widget.html.twig");
    }
}
