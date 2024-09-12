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

/* @MauticForm/Builder/field.html.twig */
class __TwigTemplate_bb6bb431d15a10aad4b4b7fd952a7df3 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
";
        // line 19
        $context["template"] = "<div class=\"col-md-6\">{content}</div>";
        // line 20
        $context["properties"] = ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "properties", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "properties", [], "any", false, false, false, 20), [])) : ([]));
        // line 21
        $context["validation"] = ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "validation", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "validation", [], "any", false, false, false, 21), [])) : ([]));
        // line 22
        echo "
";
        // line 23
        $context["showAttributes"] = ((((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "labelAttributes", [], "any", true, true, false, 23) || twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "inputAttributes", [], "any", true, true, false, 23)) || twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "containerAttributes", [], "any", true, true, false, 23)) || twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "labelAttributes", [], "any", true, true, false, 23)) || twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "alias", [], "any", true, true, false, 23));
        // line 24
        $context["showBehavior"] = (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "showWhenValueExists", [], "any", true, true, false, 24) || twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "showWhenValueExists", [], "any", true, true, false, 24));
        // line 25
        $context["showConditions"] = ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", true, true, false, 25)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "parent", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "value", [], "any", false, false, false, 25)) : (null));
        // line 26
        echo "
";
        // line 27
        $context["placeholder"] = "";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "placeholder", [], "any", true, true, false, 28)) {
            // line 29
            echo "    ";
            $context["placeholder"] = twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 29, $this->source); })()), "placeholder"], 29, $context, $this->getSourceContext());
            // line 30
            echo "    ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 30, $this->source); })()), "placeholder", [], "any", false, false, false, 30), "setRendered", [], "method", false, false, false, 30);
            // line 31
            echo "    ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "properties", [], "any", false, false, false, 31), "placeholder", [], "any", false, false, false, 31), "setRendered", [], "method", false, false, false, 31);
        }
        // line 33
        echo "
";
        // line 34
        $context["customAttributes"] = "";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "labelAttributes", [], "any", true, true, false, 35)) {
            // line 36
            echo "    ";
            $context["customAttributes"] = twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 36, $this->source); })()), "labelAttributes"], 36, $context, $this->getSourceContext());
            // line 37
            echo "    ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 37, $this->source); })()), "labelAttributes", [], "any", false, false, false, 37), "setRendered", [], "method", false, false, false, 37);
            // line 38
            echo "    ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "properties", [], "any", false, false, false, 38), "labelAttributes", [], "any", false, false, false, 38), "setRendered", [], "method", false, false, false, 38);
        }
        // line 40
        echo "
";
        // line 41
        $context["showProperties"] = false;
        // line 42
        if ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "properties", [], "any", true, true, false, 42) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "properties", [], "any", false, false, false, 42)) > 0))) {
            // line 43
            echo "    ";
            // line 44
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "properties", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 45
                echo "        ";
                if ((("hidden" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["property"], "vars", [], "any", false, false, false, 45), "block_prefixes", [], "any", false, false, false, 45), 1, [], "array", false, false, false, 45)) && (false === twig_get_attribute($this->env, $this->source, $context["property"], "isRendered", [], "any", false, false, false, 45)))) {
                    // line 46
                    echo "            ";
                    $context["showProperties"] = true;
                    // line 47
                    echo "        ";
                }
                // line 48
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 50
        echo "
";
        // line 52
        $context["generalTabError"] = (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "label", [], "any", true, true, false, 52) && $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "label", [], "any", false, false, false, 52)));
        // line 53
        $context["propertiesTabError"] = (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "properties", [], "any", true, true, false, 53) && $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "properties", [], "any", false, false, false, 53)));
        // line 54
        $context["conditionsTabError"] = (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "conditions", [], "any", true, true, false, 54) && $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "conditions", [], "any", false, false, false, 54)));
        // line 55
        echo "

<div class=\"bundle-form\">
    <div class=\"bundle-form-header\">
        <h3 class=\"mb-lg\">";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["fieldHeader"]) || array_key_exists("fieldHeader", $context) ? $context["fieldHeader"] : (function () { throw new RuntimeError('Variable "fieldHeader" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "</h3>
    </div>

    ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_start');
        echo "

    <div role=\"tabpanel\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li role=\"presentation\" class=\"active\">
                <a class=\"";
        // line 67
        if ((isset($context["generalTabError"]) || array_key_exists("generalTabError", $context) ? $context["generalTabError"] : (function () { throw new RuntimeError('Variable "generalTabError" does not exist.', 67, $this->source); })())) {
            echo "text-danger";
        }
        echo "\" href=\"#general\" aria-controls=\"general\" role=\"tab\" data-toggle=\"tab\">
                    ";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.section.general"), "html", null, true);
        echo "
                    ";
        // line 69
        if ((isset($context["generalTabError"]) || array_key_exists("generalTabError", $context) ? $context["generalTabError"] : (function () { throw new RuntimeError('Variable "generalTabError" does not exist.', 69, $this->source); })())) {
            // line 70
            echo "                        <i class=\"ri-alert-line\"></i>
                    ";
        }
        // line 72
        echo "                </a>
            </li>

            ";
        // line 75
        if ((isset($context["showConditions"]) || array_key_exists("showConditions", $context) ? $context["showConditions"] : (function () { throw new RuntimeError('Variable "showConditions" does not exist.', 75, $this->source); })())) {
            // line 76
            echo "                <li role=\"presentation\">
                    <a class=\"";
            // line 77
            if ((isset($context["conditionsTabError"]) || array_key_exists("conditionsTabError", $context) ? $context["conditionsTabError"] : (function () { throw new RuntimeError('Variable "conditionsTabError" does not exist.', 77, $this->source); })())) {
                echo "text-danger";
            }
            echo "\" href=\"#conditions\" aria-controls=\"conditions\" role=\"tab\" data-toggle=\"tab\">
                        ";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.form.condition"), "html", null, true);
            echo "
                        ";
            // line 79
            if ((isset($context["conditionsTabError"]) || array_key_exists("conditionsTabError", $context) ? $context["conditionsTabError"] : (function () { throw new RuntimeError('Variable "conditionsTabError" does not exist.', 79, $this->source); })())) {
                // line 80
                echo "                            <i class=\"ri-alert-line\"></i>
                        ";
            }
            // line 82
            echo "                    </a>
                </li>
            ";
        }
        // line 85
        echo "
            ";
        // line 86
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mappedField", [], "any", true, true, false, 86)) {
            // line 87
            echo "              <li role=\"presentation\">
                  <a href=\"#mappedfields\" aria-controls=\"mappedfields\" role=\"tab\" data-toggle=\"tab\">
                      ";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.section.mappedfield"), "html", null, true);
            echo "
                  </a>
              </li>
            ";
        }
        // line 93
        echo "
            ";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "isRequired", [], "any", true, true, false, 94)) {
            // line 95
            echo "              <li role=\"presentation\">
                  <a href=\"#required\" aria-controls=\"required\" role=\"tab\" data-toggle=\"tab\">
                      ";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.section.validation"), "html", null, true);
            echo "
                  </a>
              </li>
            ";
        }
        // line 101
        echo "
            ";
        // line 102
        if ((isset($context["showProperties"]) || array_key_exists("showProperties", $context) ? $context["showProperties"] : (function () { throw new RuntimeError('Variable "showProperties" does not exist.', 102, $this->source); })())) {
            // line 103
            echo "              <li role=\"presentation\">
                  <a class=\"";
            // line 104
            if ((isset($context["propertiesTabError"]) || array_key_exists("propertiesTabError", $context) ? $context["propertiesTabError"] : (function () { throw new RuntimeError('Variable "propertiesTabError" does not exist.', 104, $this->source); })())) {
                echo "text-danger";
            }
            echo "\" href=\"#properties\" aria-controls=\"properties\" role=\"tab\" data-toggle=\"tab\">
                      ";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.section.properties"), "html", null, true);
            echo "
                      ";
            // line 106
            if ((isset($context["propertiesTabError"]) || array_key_exists("propertiesTabError", $context) ? $context["propertiesTabError"] : (function () { throw new RuntimeError('Variable "propertiesTabError" does not exist.', 106, $this->source); })())) {
                // line 107
                echo "                          <i class=\"ri-alert-line\"></i>
                      ";
            }
            // line 109
            echo "                  </a>
              </li>
            ";
        }
        // line 112
        echo "
            ";
        // line 113
        if ((isset($context["showAttributes"]) || array_key_exists("showAttributes", $context) ? $context["showAttributes"] : (function () { throw new RuntimeError('Variable "showAttributes" does not exist.', 113, $this->source); })())) {
            // line 114
            echo "              <li role=\"presentation\">
                  <a href=\"#attributes\" aria-controls=\"attributes\" role=\"tab\" data-toggle=\"tab\">
                      ";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.section.attributes"), "html", null, true);
            echo "
                  </a>
              </li>
            ";
        }
        // line 120
        echo "
            ";
        // line 121
        if ((isset($context["showBehavior"]) || array_key_exists("showBehavior", $context) ? $context["showBehavior"] : (function () { throw new RuntimeError('Variable "showBehavior" does not exist.', 121, $this->source); })())) {
            // line 122
            echo "              <li role=\"progressive-profiling\">
                  <a href=\"#progressive-profiling\" aria-controls=\"progressive-profiling\" role=\"tab\" data-toggle=\"tab\">
                      ";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.section.progressive.profiling"), "html", null, true);
            echo "
                  </a>
              </li>
            ";
        }
        // line 128
        echo "        </ul>

        <!-- Tab panes -->
        <div class=\"tab-content pa-lg\">
            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"general\">
                <div class=\"row\">
                    ";
        // line 134
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "label"], 134, $context, $this->getSourceContext());
        echo "
                    ";
        // line 135
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "showLabel"], 135, $context, $this->getSourceContext());
        echo "
                    ";
        // line 136
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "saveResult"], 136, $context, $this->getSourceContext());
        echo "
                    ";
        // line 137
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "defaultValue"], 137, $context, $this->getSourceContext());
        echo "
                    ";
        // line 138
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "helpMessage"], 138, $context, $this->getSourceContext());
        echo "
                    ";
        // line 139
        echo (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 139, $this->source); })());
        echo "
                </div>
            </div>

            ";
        // line 143
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mappedField", [], "any", true, true, false, 143)) {
            // line 144
            echo "              <div role=\"tabpanel\" class=\"tab-pane\" id=\"mappedfields\">
                  <div class=\"row\">
                      ";
            // line 146
            echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "mappedObject"], 146, $context, $this->getSourceContext());
            echo "
                      ";
            // line 147
            echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "mappedField"], 147, $context, $this->getSourceContext());
            echo "
                  </div>
              </div>
            ";
        }
        // line 151
        echo "
            ";
        // line 152
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "isRequired", [], "any", true, true, false, 152)) {
            // line 153
            echo "              <div role=\"tabpanel\" class=\"tab-pane\" id=\"required\">
                      <div class=\"row\">";
            // line 155
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "isRequired", [], "any", true, true, false, 155)) {
                echo "<div class=\"col-md-4\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "isRequired", [], "any", false, false, false, 155), 'row');
                echo "</div>";
            }
            // line 156
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "validationMessage", [], "any", true, true, false, 156)) {
                echo "<div class=\"col-md-8\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "validationMessage", [], "any", false, false, false, 156), 'row');
                echo "</div>";
            }
            // line 157
            echo "                      </div>
                  <div class=\"row\">
                      ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["validation"]) || array_key_exists("validation", $context) ? $context["validation"] : (function () { throw new RuntimeError('Variable "validation" does not exist.', 159, $this->source); })()));
            foreach ($context['_seq'] as $context["name"] => $context["property"]) {
                // line 160
                echo "                          ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "validation", [], "any", false, false, false, 160), $context["name"], [], "array", false, false, false, 160), "isRendered", [], "any", false, false, false, 160) && ("labelAttributes" != $context["name"]))) {
                    // line 161
                    echo "                            ";
                    if (("hiddin" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "validation", [], "any", false, false, false, 161), $context["name"], [], "array", false, false, false, 161), "vars", [], "any", false, false, false, 161), "block_prefixes", [], "any", false, false, false, 161), 1, [], "array", false, false, false, 161))) {
                        // line 162
                        echo "                                ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "validation", [], "any", false, false, false, 162), $context["name"], [], "array", false, false, false, 162), 'row');
                        echo "
                            ";
                    } else {
                        // line 164
                        echo "                                ";
                        $context["col"] = 8;
                        // line 165
                        echo "                                ";
                        if (("chocie" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "validation", [], "any", false, false, false, 165), $context["name"], [], "array", false, false, false, 165), "vars", [], "any", false, false, false, 165), "block_prefixes", [], "any", false, false, false, 165), 1, [], "array", false, false, false, 165))) {
                            // line 166
                            echo "                                    ";
                            $context["col"] = 4;
                            // line 167
                            echo "                                ";
                        }
                        // line 168
                        echo "                                <div class=\"col-md-";
                        echo twig_escape_filter($this->env, (isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 168, $this->source); })()), "html", null, true);
                        echo "\">
                                    ";
                        // line 169
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "validation", [], "any", false, false, false, 169), $context["name"], [], "array", false, false, false, 169), 'row');
                        echo "
                                </div>
                            ";
                    }
                    // line 172
                    echo "                          ";
                }
                // line 173
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "                  </div>
              </div>
            ";
        }
        // line 177
        echo "
            ";
        // line 178
        if ((isset($context["showProperties"]) || array_key_exists("showProperties", $context) ? $context["showProperties"] : (function () { throw new RuntimeError('Variable "showProperties" does not exist.', 178, $this->source); })())) {
            // line 179
            echo "              <div role=\"tabpanel\" class=\"tab-pane\" id=\"properties\">
                  ";
            // line 180
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "properties", [], "any", false, false, false, 180), 'errors');
            echo "
                  ";
            // line 181
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "properties", [], "any", false, true, false, 181), "syncList", [], "any", true, true, false, 181)) {
                // line 182
                echo "                      <div class=\"row\">
                          <div class=\"col-md-12\">
                              ";
                // line 184
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "properties", [], "any", false, false, false, 184), "syncList", [], "any", false, false, false, 184), 'row');
                echo "
                          </div>
                      </div>
                  ";
            }
            // line 188
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "properties", [], "any", false, true, false, 188), "list", [], "any", true, true, false, 188)) {
                // line 189
                echo "                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
                // line 191
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "properties", [], "any", false, false, false, 191), "list", [], "any", false, false, false, 191), 'row');
                echo "
                        </div>
                    </div>
                  ";
            }
            // line 195
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "properties", [], "any", false, true, false, 195), "optionlist", [], "any", true, true, false, 195)) {
                // line 196
                echo "                      <div class=\"row\">
                          <div class=\"col-md-12\">
                              ";
                // line 198
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "properties", [], "any", false, false, false, 198), "optionlist", [], "any", false, false, false, 198), 'row');
                echo "
                          </div>
                      </div>
                  ";
            }
            // line 202
            echo "                  <div class=\"row\">
                      ";
            // line 203
            $context["i"] = 0;
            // line 204
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 204, $this->source); })()));
            foreach ($context['_seq'] as $context["name"] => $context["property"]) {
                // line 205
                echo "                        ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "properties", [], "any", false, false, false, 205), $context["name"], [], "array", false, false, false, 205), "isRendered", [], "any", false, false, false, 205) && !twig_in_filter($context["name"], ["labelAttributes", "placeholder"]))) {
                    // line 206
                    echo "                          ";
                    if (("hidden" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "properties", [], "any", false, false, false, 206), $context["name"], [], "array", false, false, false, 206), "vars", [], "any", false, false, false, 206), "block_prefixes", [], "any", false, false, false, 206), 1, [], "array", false, false, false, 206))) {
                        // line 207
                        echo "                              ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "properties", [], "any", false, false, false, 207), $context["name"], [], "array", false, false, false, 207), 'row');
                        echo "
                          ";
                    } else {
                        // line 209
                        echo "                              ";
                        $context["col"] = ((("text" == $context["name"])) ? (12) : (6));
                        // line 210
                        echo "                              <div class=\"col-md-";
                        echo twig_escape_filter($this->env, (isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 210, $this->source); })()), "html", null, true);
                        echo "\">
                                  ";
                        // line 211
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "properties", [], "any", false, false, false, 211), $context["name"], [], "array", false, false, false, 211), 'row');
                        echo "
                              </div>
                              ";
                        // line 213
                        if ((6 == (isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 213, $this->source); })()))) {
                            // line 214
                            echo "                                  ";
                            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 214, $this->source); })()) + 1);
                            // line 215
                            echo "                                  ";
                            if ((0 == (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 215, $this->source); })()) % 2)) {
                                // line 216
                                echo "                                    <div class=\"clearfix\"></div>
                                  ";
                            }
                            // line 218
                            echo "                              ";
                        }
                        // line 219
                        echo "                          ";
                    }
                    // line 220
                    echo "                        ";
                }
                // line 221
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "                  </div>
              </div>
            ";
        }
        // line 225
        echo "
            ";
        // line 226
        if ((isset($context["showAttributes"]) || array_key_exists("showAttributes", $context) ? $context["showAttributes"] : (function () { throw new RuntimeError('Variable "showAttributes" does not exist.', 226, $this->source); })())) {
            // line 227
            echo "              <div role=\"tabpanel\" class=\"tab-pane\" id=\"attributes\">
                  <div class=\"row\">
                      ";
            // line 229
            echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "alias"], 229, $context, $this->getSourceContext());
            echo "
                      ";
            // line 230
            echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "labelAttributes"], 230, $context, $this->getSourceContext());
            echo "
                      ";
            // line 231
            echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "inputAttributes"], 231, $context, $this->getSourceContext());
            echo "
                      ";
            // line 232
            echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "containerAttributes"], 232, $context, $this->getSourceContext());
            echo "
                      ";
            // line 233
            echo (isset($context["customAttributes"]) || array_key_exists("customAttributes", $context) ? $context["customAttributes"] : (function () { throw new RuntimeError('Variable "customAttributes" does not exist.', 233, $this->source); })());
            echo "
                  </div>
              </div>
            ";
        }
        // line 237
        echo "
            ";
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "parent", [], "any", false, false, false, 238), 'row');
        echo "

            ";
        // line 240
        if ((isset($context["showConditions"]) || array_key_exists("showConditions", $context) ? $context["showConditions"] : (function () { throw new RuntimeError('Variable "showConditions" does not exist.', 240, $this->source); })())) {
            // line 241
            echo "                <div role=\"tabpanel\" class=\"tab-pane\" id=\"conditions\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <label data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" data-original-title=\"";
            // line 244
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.form.condition.show.only.tooltip"), "html", null, true);
            echo "\">
                                ";
            // line 245
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.form.condition.show.only"), "html", null, true);
            echo "
                                <i class=\"ri-question-line\"></i>
                            </label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <label>&nbsp;</label>
                            ";
            // line 253
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), "conditions", [], "any", false, false, false, 253), "expr", [], "any", false, false, false, 253), 'row');
            echo "
                        </div>
                        <div class=\"col-md-5\">
                            <label>&nbsp;</label>
                            ";
            // line 257
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "conditions", [], "any", false, false, false, 257), "values", [], "any", false, false, false, 257), 'row');
            echo "
                        </div>
                        <div class=\"col-md-4\">
                            ";
            // line 260
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), "conditions", [], "any", false, false, false, 260), "any", [], "any", false, false, false, 260), 'row');
            echo "
                        </div>
                    </div>
                </div>
            ";
        }
        // line 265
        echo "
            ";
        // line 266
        if ((isset($context["showBehavior"]) || array_key_exists("showBehavior", $context) ? $context["showBehavior"] : (function () { throw new RuntimeError('Variable "showBehavior" does not exist.', 266, $this->source); })())) {
            // line 267
            echo "              <div role=\"tabpanel\" class=\"tab-pane\" id=\"progressive-profiling\">
                  <div class=\"row\">
                      ";
            // line 269
            echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 269, $this->source); })()), "alwaysDisplay"], 269, $context, $this->getSourceContext());
            echo "
                      ";
            // line 270
            echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "isAutoFill"], 270, $context, $this->getSourceContext());
            echo "
                      ";
            // line 271
            echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "showWhenValueExists"], 271, $context, $this->getSourceContext());
            echo "
                      ";
            // line 272
            echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 272, $this->source); })()), "showAfterXSubmissions"], 272, $context, $this->getSourceContext());
            echo "
                  </div>
              </div>
            ";
        }
        // line 276
        echo "        </div>
    </div>
    ";
        // line 278
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), 'form_end');
        echo "
</div>
";
    }

    // line 11
    public function macro_row_if_exists($__form__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 12
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 12, $this->source); })()), [], "array", true, true, false, 12)) {
                // line 13
                echo "    <div class=\"col-md-6\">
      ";
                // line 14
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 14, $this->source); })()), [], "array", false, false, false, 14), 'row');
                echo "
    </div>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Builder/field.html.twig";
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
        return array (  680 => 14,  677 => 13,  674 => 12,  660 => 11,  653 => 278,  649 => 276,  642 => 272,  638 => 271,  634 => 270,  630 => 269,  626 => 267,  624 => 266,  621 => 265,  613 => 260,  607 => 257,  600 => 253,  589 => 245,  585 => 244,  580 => 241,  578 => 240,  573 => 238,  570 => 237,  563 => 233,  559 => 232,  555 => 231,  551 => 230,  547 => 229,  543 => 227,  541 => 226,  538 => 225,  533 => 222,  527 => 221,  524 => 220,  521 => 219,  518 => 218,  514 => 216,  511 => 215,  508 => 214,  506 => 213,  501 => 211,  496 => 210,  493 => 209,  487 => 207,  484 => 206,  481 => 205,  476 => 204,  474 => 203,  471 => 202,  464 => 198,  460 => 196,  457 => 195,  450 => 191,  446 => 189,  443 => 188,  436 => 184,  432 => 182,  430 => 181,  426 => 180,  423 => 179,  421 => 178,  418 => 177,  413 => 174,  407 => 173,  404 => 172,  398 => 169,  393 => 168,  390 => 167,  387 => 166,  384 => 165,  381 => 164,  375 => 162,  372 => 161,  369 => 160,  365 => 159,  361 => 157,  355 => 156,  349 => 155,  346 => 153,  344 => 152,  341 => 151,  334 => 147,  330 => 146,  326 => 144,  324 => 143,  317 => 139,  313 => 138,  309 => 137,  305 => 136,  301 => 135,  297 => 134,  289 => 128,  282 => 124,  278 => 122,  276 => 121,  273 => 120,  266 => 116,  262 => 114,  260 => 113,  257 => 112,  252 => 109,  248 => 107,  246 => 106,  242 => 105,  236 => 104,  233 => 103,  231 => 102,  228 => 101,  221 => 97,  217 => 95,  215 => 94,  212 => 93,  205 => 89,  201 => 87,  199 => 86,  196 => 85,  191 => 82,  187 => 80,  185 => 79,  181 => 78,  175 => 77,  172 => 76,  170 => 75,  165 => 72,  161 => 70,  159 => 69,  155 => 68,  149 => 67,  141 => 62,  135 => 59,  129 => 55,  127 => 54,  125 => 53,  123 => 52,  120 => 50,  113 => 48,  110 => 47,  107 => 46,  104 => 45,  99 => 44,  97 => 43,  95 => 42,  93 => 41,  90 => 40,  86 => 38,  83 => 37,  80 => 36,  78 => 35,  76 => 34,  73 => 33,  69 => 31,  66 => 30,  63 => 29,  61 => 28,  59 => 27,  56 => 26,  54 => 25,  52 => 24,  50 => 23,  47 => 22,  45 => 21,  43 => 20,  41 => 19,  38 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Builder/field.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Builder\\field.html.twig");
    }
}
