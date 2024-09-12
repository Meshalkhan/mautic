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

/* @MauticPlugin/FormTheme/Integration/layout.html.twig */
class __TwigTemplate_4da2354148690db0b66e48a64ffe2725 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'integration_company_fields_row' => [$this, 'block_integration_company_fields_row'],
            'integration_fields_row' => [$this, 'block_integration_fields_row'],
            '_integration_details_supportedFeatures_row' => [$this, 'block__integration_details_supportedFeatures_row'],
            '_integration_details_featureSettings_row' => [$this, 'block__integration_details_featureSettings_row'],
            'fields_row' => [$this, 'block_fields_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('integration_company_fields_row', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('integration_fields_row', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('_integration_details_supportedFeatures_row', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('_integration_details_featureSettings_row', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('fields_row', $context, $blocks);
    }

    // line 1
    public function block_integration_company_fields_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["containerId"] = "companyFieldsContainer";
        // line 3
        $context["numberOfFields"] = ((twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "offsetExists", ["update_mautic_company1"], "method", false, false, false, 3)) ? (5) : (4));
        // line 4
        $context["object"] = "company";
        // line 5
        $this->displayBlock("fields_row", $context, $blocks);
    }

    // line 8
    public function block_integration_fields_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $context["containerId"] = "leadFieldsContainer";
        // line 10
        $context["numberOfFields"] = ((twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "offsetExists", ["update_mautic1"], "method", false, false, false, 10)) ? (5) : (4));
        // line 11
        $context["object"] = "lead";
        // line 12
        $this->displayBlock("fields_row", $context, $blocks);
    }

    // line 15
    public function block__integration_details_supportedFeatures_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "  ";
        $context["attr"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "attr", [], "any", false, false, false, 16);
        // line 17
        echo "  ";
        $context["builtin"] = ((twig_get_attribute($this->env, $this->source, ($context["formSettings"] ?? null), "builtin_features", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["formSettings"] ?? null), "builtin_features", [], "any", false, false, false, 17), [])) : ([]));
        // line 18
        echo "  ";
        $context["showLabel"] = (twig_length_filter($this->env, (isset($context["builtin"]) || array_key_exists("builtin", $context) ? $context["builtin"] : (function () { throw new RuntimeError('Variable "builtin" does not exist.', 18, $this->source); })())) != twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "children", [], "any", false, false, false, 18)));
        // line 19
        echo "  <div class=\"row\">
      <div class=\"col-sm-12\">
          ";
        // line 21
        if ((isset($context["showLabel"]) || array_key_exists("showLabel", $context) ? $context["showLabel"] : (function () { throw new RuntimeError('Variable "showLabel" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "              <h4 class=\"mb-sm\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "vars", [], "any", false, false, false, 22), "label", [], "array", false, false, false, 22)), "html", null, true);
            echo "</h4>
          ";
        }
        // line 24
        echo "          ";
        if ((twig_get_attribute($this->env, $this->source, ($context["formNotes"] ?? null), "supported_features", [], "any", true, true, false, 24) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 24, $this->source); })()), "supported_features", [], "any", false, false, false, 24)))) {
            // line 25
            echo "              <div class=\"alert alert-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 25, $this->source); })()), "supported_features", [], "array", false, false, false, 25), "type", [], "array", false, false, false, 25), "html", null, true);
            echo "\">
                  ";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 26, $this->source); })()), "supported_features", [], "array", false, false, false, 26), "note", [], "array", false, false, false, 26)), "html", null, true);
            echo "
              </div>
          ";
        }
        // line 29
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "children", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 30
            echo "              ";
            if (!twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), (isset($context["builtin"]) || array_key_exists("builtin", $context) ? $context["builtin"] : (function () { throw new RuntimeError('Variable "builtin" does not exist.', 30, $this->source); })()))) {
                // line 31
                echo "                <div class=\"checkbox\" >
                    <label>
                        ";
                // line 33
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 33, $this->source); })())]);
                echo "
                        ";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 34), "label", [], "any", false, false, false, 34)), "html", null, true);
                echo "
                    </label>
                </div>
              ";
            } else {
                // line 38
                echo "                  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "isRendered", [], "method", false, false, false, 38), "html", null, true);
                echo "
                  <input type=\"hidden\" id=\"";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 39), "id", [], "array", false, false, false, 39), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 39), "full_name", [], "array", false, false, false, 39), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 39), "value", [], "array", false, false, false, 39));
                echo "\" />
              ";
            }
            // line 41
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "      </div>
  </div>
";
    }

    // line 46
    public function block__integration_details_featureSettings_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "<div class=\"row\">
    <div class=\"col-sm-12\">
        <h4 class=\"mb-sm mt-lg\">
            ";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "vars", [], "any", false, false, false, 50), "label", [], "array", false, false, false, 50)), "html", null, true);
        echo "
        </h4>
        ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["formNotes"] ?? null), "features", [], "any", true, true, false, 52) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 52, $this->source); })()), "features", [], "any", false, false, false, 52)))) {
            // line 53
            echo "            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 53, $this->source); })()), "features", [], "array", false, false, false, 53), "type", [], "array", false, false, false, 53), "html", null, true);
            echo "\">
                ";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 54, $this->source); })()), "features", [], "array", false, false, false, 54), "note", [], "array", false, false, false, 54)), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 57
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'widget');
        echo "
    </div>
</div>
";
    }

    // line 62
    public function block_fields_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        $context["rowCount"] = 0;
        // line 75
        $context["indexCount"] = 1;
        // line 76
        echo "<div class=\"row fields-container\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["containerId"]) || array_key_exists("containerId", $context) ? $context["containerId"] : (function () { throw new RuntimeError('Variable "containerId" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "\">

    ";
        // line 78
        if ((array_key_exists("specialInstructions", $context) &&  !twig_test_empty((isset($context["specialInstructions"]) || array_key_exists("specialInstructions", $context) ? $context["specialInstructions"] : (function () { throw new RuntimeError('Variable "specialInstructions" does not exist.', 78, $this->source); })())))) {
            // line 79
            echo "      <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["alertType"]) || array_key_exists("alertType", $context) ? $context["alertType"] : (function () { throw new RuntimeError('Variable "alertType" does not exist.', 79, $this->source); })()), "html", null, true);
            echo "\">";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["specialInstructions"]) || array_key_exists("specialInstructions", $context) ? $context["specialInstructions"] : (function () { throw new RuntimeError('Variable "specialInstructions" does not exist.', 80, $this->source); })())), "html", null, true);
            // line 81
            echo "</div>
    ";
        }
        // line 83
        echo "
    ";
        // line 84
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "vars", [], "any", false, false, false, 84), "errors", [], "any", false, false, false, 84)) > 0)) {
            // line 85
            echo "      <div class=\"alert alert-danger\">
        ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "vars", [], "any", false, false, false, 86), "errors", [], "any", false, false, false, 86));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 87
                echo "          <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 87), "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "      </div>
    ";
        }
        // line 91
        echo "
    <div class=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "-field form-group col-xs-12\">
      <div class=\"row\">
        <div class=\"mb-xs col-sm-";
        // line 94
        echo (((5 == (isset($context["numberOfFields"]) || array_key_exists("numberOfFields", $context) ? $context["numberOfFields"] : (function () { throw new RuntimeError('Variable "numberOfFields" does not exist.', 94, $this->source); })()))) ? (5) : (6));
        echo " text-center\"><h4>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugins.integration.fields"), "html", null, true);
        echo "</h4></div>
        ";
        // line 95
        if ((5 == (isset($context["numberOfFields"]) || array_key_exists("numberOfFields", $context) ? $context["numberOfFields"] : (function () { throw new RuntimeError('Variable "numberOfFields" does not exist.', 95, $this->source); })()))) {
            // line 96
            echo "<div class=\"col-sm-2\"></div>";
        }
        // line 98
        echo "        <div class=\"mb-xs col-sm-";
        echo (((5 == (isset($context["numberOfFields"]) || array_key_exists("numberOfFields", $context) ? $context["numberOfFields"] : (function () { throw new RuntimeError('Variable "numberOfFields" does not exist.', 98, $this->source); })()))) ? (5) : (6));
        echo " text-center\"><h4>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugins.mautic.fields"), "html", null, true);
        echo "</h4></div>
      </div>
      ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "children", [], "any", false, false, false, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 101
            echo "          ";
            $context["selected"] = false;
            // line 102
            echo "          ";
            $context["isRequired"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 102), "attr", [], "any", false, true, false, 102), "data-required", [], "array", true, true, false, 102) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 102), "attr", [], "any", false, false, false, 102), "data-required", [], "array", false, false, false, 102) === 0));
            // line 103
            echo "          ";
            if ((0 == (isset($context["rowCount"]) || array_key_exists("rowCount", $context) ? $context["rowCount"] : (function () { throw new RuntimeError('Variable "rowCount" does not exist.', 103, $this->source); })()) % (isset($context["numberOfFields"]) || array_key_exists("numberOfFields", $context) ? $context["numberOfFields"] : (function () { throw new RuntimeError('Variable "numberOfFields" does not exist.', 103, $this->source); })()))) {
                // line 104
                echo "            <div id=\"";
                echo twig_escape_filter($this->env, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 104, $this->source); })()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, (isset($context["rowCount"]) || array_key_exists("rowCount", $context) ? $context["rowCount"] : (function () { throw new RuntimeError('Variable "rowCount" does not exist.', 104, $this->source); })()), "html", null, true);
                echo "\" class=\"field-container row ";
                if ((5 != (isset($context["numberOfFields"]) || array_key_exists("numberOfFields", $context) ? $context["numberOfFields"] : (function () { throw new RuntimeError('Variable "numberOfFields" does not exist.', 104, $this->source); })()))) {
                    echo "pb-md";
                }
                echo "\">
          ";
            }
            // line 106
            echo "          ";
            $context["rowCount"] = ((isset($context["rowCount"]) || array_key_exists("rowCount", $context) ? $context["rowCount"] : (function () { throw new RuntimeError('Variable "rowCount" does not exist.', 106, $this->source); })()) + 1);
            // line 107
            echo "          ";
            if (("hidden" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 107), "block_prefixes", [], "any", false, false, false, 107), 1, [], "array", false, false, false, 107))) {
                // line 108
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
                echo "
          ";
            } else {
                // line 110
                echo "            ";
                $context["class"] = "";
                // line 111
                echo "            ";
                $context["remainder"] = ((isset($context["rowCount"]) || array_key_exists("rowCount", $context) ? $context["rowCount"] : (function () { throw new RuntimeError('Variable "rowCount" does not exist.', 111, $this->source); })()) % (isset($context["numberOfFields"]) || array_key_exists("numberOfFields", $context) ? $context["numberOfFields"] : (function () { throw new RuntimeError('Variable "numberOfFields" does not exist.', 111, $this->source); })()));
                // line 112
                echo "            ";
                if (((1 == (isset($context["remainder"]) || array_key_exists("remainder", $context) ? $context["remainder"] : (function () { throw new RuntimeError('Variable "remainder" does not exist.', 112, $this->source); })())) || (3 == (isset($context["remainder"]) || array_key_exists("remainder", $context) ? $context["remainder"] : (function () { throw new RuntimeError('Variable "remainder" does not exist.', 112, $this->source); })())))) {
                    // line 113
                    echo "              ";
                    $context["class"] = (((5 == (isset($context["numberOfFields"]) || array_key_exists("numberOfFields", $context) ? $context["numberOfFields"] : (function () { throw new RuntimeError('Variable "numberOfFields" does not exist.', 113, $this->source); })()))) ? ("col-sm-5") : ("col-sm-6"));
                    // line 114
                    echo "            ";
                } elseif ((2 == (isset($context["remainder"]) || array_key_exists("remainder", $context) ? $context["remainder"] : (function () { throw new RuntimeError('Variable "remainder" does not exist.', 114, $this->source); })()))) {
                    // line 115
                    echo "              ";
                    $context["class"] = (((5 == (isset($context["numberOfFields"]) || array_key_exists("numberOfFields", $context) ? $context["numberOfFields"] : (function () { throw new RuntimeError('Variable "numberOfFields" does not exist.', 115, $this->source); })()))) ? ("col-sm-2") : ("col-sm-6"));
                    // line 116
                    echo "            ";
                }
                // line 117
                echo "          ";
            }
            // line 118
            echo "          ";
            if ((("label_" . (isset($context["indexCount"]) || array_key_exists("indexCount", $context) ? $context["indexCount"] : (function () { throw new RuntimeError('Variable "indexCount" does not exist.', 118, $this->source); })())) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 118), "name", [], "any", false, false, false, 118))) {
                // line 119
                echo "            ";
                if ((isset($context["isRequired"]) || array_key_exists("isRequired", $context) ? $context["isRequired"] : (function () { throw new RuntimeError('Variable "isRequired" does not exist.', 119, $this->source); })())) {
                    // line 120
                    echo "              ";
                    $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 120), "full_name", [], "any", false, false, false, 120);
                    // line 121
                    echo "              <input type=\"hidden\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 121), "attr", [], "array", false, false, false, 121), "data-label", [], "array", false, false, false, 121), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 121, $this->source); })()), "html", null, true);
                    echo "\" />
            ";
                }
                // line 123
                echo "            <div class=\"pl-xs pr-xs ";
                echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 123, $this->source); })()), "html", null, true);
                echo " ";
                if ((isset($context["isRequired"]) || array_key_exists("isRequired", $context) ? $context["isRequired"] : (function () { throw new RuntimeError('Variable "isRequired" does not exist.', 123, $this->source); })())) {
                    echo "has-error";
                }
                echo "\">
              <div class=\"placeholder\" data-placeholder=\"";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 124), "attr", [], "any", false, false, false, 124), "placeholder", [], "any", false, false, false, 124), "html", null, true);
                echo "\">
                <input type=\"text\"
                       id=\"";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 126), "id", [], "any", false, false, false, 126), "html", null, true);
                echo "\"
                       name=\"";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 127), "full_name", [], "any", false, false, false, 127), "html", null, true);
                echo "\"
                       class=\"";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 128), "attr", [], "any", false, false, false, 128), "class", [], "any", false, false, false, 128), "html", null, true);
                echo "\"
                       value=\"";
                // line 129
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 129), "attr", [], "any", false, true, false, 129), "data-label", [], "array", true, true, false, 129)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 129), "attr", [], "any", false, true, false, 129), "data-label", [], "array", false, false, false, 129), "")) : ("")));
                echo "\" readonly />
              </div>
            </div>
          ";
            }
            // line 134
            if (twig_in_filter("update_mautic", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 134), "name", [], "any", false, false, false, 134))) {
                // line 135
                echo "<div class=\"pr-xs ";
                echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 135, $this->source); })()), "html", null, true);
                echo "\" style=\"padding-left: 8px;\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.direction.data.update"), "html", null, true);
                echo "\">
              <div class=\"row\">
                <div class=\"form-group col-xs-12 \">
                  <div class=\"choice-wrapper\">
                    <div class=\"btn-group btn-block\" data-toggle=\"buttons\" ";
                // line 139
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 139), "attr", [], "array", false, false, false, 139), "forceDirection", [], "array", false, false, false, 139)) {
                    echo "data-force-direction=\"1\"";
                }
                echo ">
                      ";
                // line 140
                $context["checked"] = ("0" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 140), "value", [], "any", false, false, false, 140));
                // line 141
                echo "                      <label class=\"btn-arrow";
                echo twig_escape_filter($this->env, (isset($context["indexCount"]) || array_key_exists("indexCount", $context) ? $context["indexCount"] : (function () { throw new RuntimeError('Variable "indexCount" does not exist.', 141, $this->source); })()), "html", null, true);
                echo " btn btn-default ";
                if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 141, $this->source); })())) {
                    echo "active";
                }
                echo " ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 141), "attr", [], "array", false, false, false, 141), "disabled", [], "array", false, false, false, 141)) {
                    echo "disabled";
                }
                echo "\">
                        <input type=\"radio\"
                               id=\"";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 143), "id", [], "array", false, false, false, 143), "html", null, true);
                echo "_0\"
                               name=\"";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 144), "full_name", [], "array", false, false, false, 144), "html", null, true);
                echo "\"
                               title=\"\"
                               autocomplete=\"false\"
                               value=\"0\"
                               onchange=\"Mautic.matchedFields(";
                // line 148
                echo twig_escape_filter($this->env, (isset($context["indexCount"]) || array_key_exists("indexCount", $context) ? $context["indexCount"] : (function () { throw new RuntimeError('Variable "indexCount" does not exist.', 148, $this->source); })()), "html", null, true);
                echo ", '";
                echo twig_escape_filter($this->env, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 148, $this->source); })()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 148, $this->source); })()), "html", null, true);
                echo "')\"
                               ";
                // line 149
                if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 149, $this->source); })())) {
                    echo "checked=\"checked\"";
                }
                // line 150
                echo "                               ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 150), "attr", [], "array", false, false, false, 150), "disabled", [], "array", false, false, false, 150)) {
                    echo "disabled";
                }
                echo ">
                        <btn class=\"btn-nospin fa fa-arrow-circle-left\"></btn>
                      </label>
                      ";
                // line 153
                $context["checked"] = ("1" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 153), "value", [], "any", false, false, false, 153));
                // line 154
                echo "                      <label class=\"btn-arrow";
                echo twig_escape_filter($this->env, (isset($context["indexCount"]) || array_key_exists("indexCount", $context) ? $context["indexCount"] : (function () { throw new RuntimeError('Variable "indexCount" does not exist.', 154, $this->source); })()), "html", null, true);
                echo " btn btn-default ";
                if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 154, $this->source); })())) {
                    echo "active";
                }
                echo " ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 154), "attr", [], "array", false, false, false, 154), "disabled", [], "array", false, false, false, 154)) {
                    echo "disabled";
                }
                echo "\">
                        <input type=\"radio\" id=\"";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 155), "id", [], "array", false, false, false, 155), "html", null, true);
                echo "_1\"
                               name=\"";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 156), "full_name", [], "array", false, false, false, 156), "html", null, true);
                echo "\"
                               title=\"\"
                               autocomplete=\"false\"
                               value=\"1\"
                               onchange=\"Mautic.matchedFields(";
                // line 160
                echo twig_escape_filter($this->env, (isset($context["indexCount"]) || array_key_exists("indexCount", $context) ? $context["indexCount"] : (function () { throw new RuntimeError('Variable "indexCount" does not exist.', 160, $this->source); })()), "html", null, true);
                echo ", '";
                echo twig_escape_filter($this->env, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 160, $this->source); })()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 160, $this->source); })()), "html", null, true);
                echo "')\"
                               ";
                // line 161
                if (("1" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 161), "value", [], "array", false, false, false, 161))) {
                    echo "checked=\"checked\"";
                }
                // line 162
                echo "                               ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 162), "attr", [], "array", false, false, false, 162), "disabled", [], "array", false, false, false, 162)) {
                    echo "disabled";
                }
                echo ">
                        <btn class=\"btn-nospin ri-arrow-right-circle-line\"></btn>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>";
            }
            // line 172
            if ((("m_" . (isset($context["indexCount"]) || array_key_exists("indexCount", $context) ? $context["indexCount"] : (function () { throw new RuntimeError('Variable "indexCount" does not exist.', 172, $this->source); })())) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 172), "name", [], "any", false, false, false, 172))) {
                // line 173
                echo "            <div class=\"pl-xs pr-xs ";
                echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 173, $this->source); })()), "html", null, true);
                echo "\">
              ";
                // line 174
                if ((isset($context["isRequired"]) || array_key_exists("isRequired", $context) ? $context["isRequired"] : (function () { throw new RuntimeError('Variable "isRequired" does not exist.', 174, $this->source); })())) {
                    echo "<div class=\"has-errors\">";
                }
                // line 175
                echo "              <select id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 175), "id", [], "any", false, false, false, 175), "html", null, true);
                echo "\"
                      name=\"";
                // line 176
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 176), "full_name", [], "any", false, false, false, 176), "html", null, true);
                echo "\"
                      class=\"";
                // line 177
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 177), "attr", [], "any", false, false, false, 177), "class", [], "any", false, false, false, 177), "html", null, true);
                echo "\"
                      data-placeholder=\"\"
                      autocomplete=\"false\" onchange=\"Mautic.matchedFields(";
                // line 179
                echo twig_escape_filter($this->env, (isset($context["indexCount"]) || array_key_exists("indexCount", $context) ? $context["indexCount"] : (function () { throw new RuntimeError('Variable "indexCount" does not exist.', 179, $this->source); })()), "html", null, true);
                echo ", '";
                echo twig_escape_filter($this->env, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 179, $this->source); })()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 179, $this->source); })()), "html", null, true);
                echo "')\">
                <option value=\"\"></option>";
                // line 181
                $context["mauticChoices"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 181), "attr", [], "any", false, false, false, 181), "data-choices", [], "array", false, false, false, 181);
                // line 182
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["mauticChoices"]) || array_key_exists("mauticChoices", $context) ? $context["mauticChoices"] : (function () { throw new RuntimeError('Variable "mauticChoices" does not exist.', 182, $this->source); })()));
                foreach ($context['_seq'] as $context["keyLabel"] => $context["options"]) {
                    // line 183
                    echo "                  ";
                    if (is_iterable($context["options"])) {
                        // line 184
                        echo "                    <optgroup label=\"";
                        echo twig_escape_filter($this->env, $context["keyLabel"], "html", null, true);
                        echo "\">
                        ";
                        // line 185
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["options"]);
                        foreach ($context['_seq'] as $context["optionLabel"] => $context["keyValue"]) {
                            // line 186
                            echo "                          <option value=\"";
                            echo twig_escape_filter($this->env, $context["keyValue"]);
                            echo "\" ";
                            if (($context["keyValue"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 186), "data", [], "any", false, false, false, 186))) {
                                echo "selected";
                                $context["selected"] = true;
                            } elseif (((array_key_exists("selected", $context) && twig_test_empty((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 186, $this->source); })()))) && ("-1" == $context["keyValue"]))) {
                                echo "selected";
                            }
                            echo ">";
                            // line 187
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["optionLabel"]), "html", null, true);
                            // line 188
                            echo "</option>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['optionLabel'], $context['keyValue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 190
                        echo "                    </optgroup>
                  ";
                    } else {
                        // line 192
                        echo "                    <option value=\"";
                        echo twig_escape_filter($this->env, $context["options"]);
                        echo "\"";
                        if (($context["options"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 192), "data", [], "any", false, false, false, 192))) {
                            echo "selected";
                            $context["selected"] = true;
                        } elseif (((array_key_exists("selected", $context) && twig_test_empty((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 192, $this->source); })()))) && ("-1" == $context["options"]))) {
                            echo "selected";
                        }
                        echo ">";
                        // line 193
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["keyLabel"]), "html", null, true);
                        // line 194
                        echo "</option>
                  ";
                    }
                    // line 196
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['keyLabel'], $context['options'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 197
                echo "              </select>
              ";
                // line 198
                if ((isset($context["isRequired"]) || array_key_exists("isRequired", $context) ? $context["isRequired"] : (function () { throw new RuntimeError('Variable "isRequired" does not exist.', 198, $this->source); })())) {
                    echo "</div>";
                }
                // line 199
                echo "            </div>
          ";
            }
            // line 201
            echo "          ";
            if ((0 == (isset($context["rowCount"]) || array_key_exists("rowCount", $context) ? $context["rowCount"] : (function () { throw new RuntimeError('Variable "rowCount" does not exist.', 201, $this->source); })()) % (isset($context["numberOfFields"]) || array_key_exists("numberOfFields", $context) ? $context["numberOfFields"] : (function () { throw new RuntimeError('Variable "numberOfFields" does not exist.', 201, $this->source); })()))) {
                // line 202
                echo "              </div>
              ";
                // line 203
                $context["indexCount"] = ((isset($context["indexCount"]) || array_key_exists("indexCount", $context) ? $context["indexCount"] : (function () { throw new RuntimeError('Variable "indexCount" does not exist.', 203, $this->source); })()) + 1);
                // line 204
                echo "          ";
            }
            // line 205
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "    </div>
    ";
        // line 207
        if ((((isset($context["indexCount"]) || array_key_exists("indexCount", $context) ? $context["indexCount"] : (function () { throw new RuntimeError('Variable "indexCount" does not exist.', 207, $this->source); })()) - 1) < (isset($context["totalFields"]) || array_key_exists("totalFields", $context) ? $context["totalFields"] : (function () { throw new RuntimeError('Variable "totalFields" does not exist.', 207, $this->source); })()))) {
            // line 208
            echo "      <div class=\"panel-footer\">
          ";
            // line 209
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["page" =>             // line 210
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 210, $this->source); })()), "fixedPages" =>             // line 211
(isset($context["fixedPageNum"]) || array_key_exists("fixedPageNum", $context) ? $context["fixedPageNum"] : (function () { throw new RuntimeError('Variable "fixedPageNum" does not exist.', 211, $this->source); })()), "fixedLimit" => true, "target" => "#IntegrationEditModal", "totalItems" =>             // line 214
(isset($context["totalFields"]) || array_key_exists("totalFields", $context) ? $context["totalFields"] : (function () { throw new RuntimeError('Variable "totalFields" does not exist.', 214, $this->source); })()), "jsCallback" => "Mautic.getIntegrationFields", "jsArguments" => [["object" =>             // line 218
(isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 218, $this->source); })()), "integration" =>             // line 219
(isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 219, $this->source); })())]]]);
            // line 222
            echo "
      </div>
    ";
        }
        // line 225
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPlugin/FormTheme/Integration/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  671 => 225,  666 => 222,  664 => 219,  663 => 218,  662 => 214,  661 => 211,  660 => 210,  659 => 209,  656 => 208,  654 => 207,  651 => 206,  645 => 205,  642 => 204,  640 => 203,  637 => 202,  634 => 201,  630 => 199,  626 => 198,  623 => 197,  617 => 196,  613 => 194,  611 => 193,  600 => 192,  596 => 190,  589 => 188,  587 => 187,  576 => 186,  572 => 185,  567 => 184,  564 => 183,  560 => 182,  558 => 181,  550 => 179,  545 => 177,  541 => 176,  536 => 175,  532 => 174,  527 => 173,  525 => 172,  511 => 162,  507 => 161,  499 => 160,  492 => 156,  488 => 155,  475 => 154,  473 => 153,  464 => 150,  460 => 149,  452 => 148,  445 => 144,  441 => 143,  427 => 141,  425 => 140,  419 => 139,  409 => 135,  407 => 134,  400 => 129,  396 => 128,  392 => 127,  388 => 126,  383 => 124,  374 => 123,  366 => 121,  363 => 120,  360 => 119,  357 => 118,  354 => 117,  351 => 116,  348 => 115,  345 => 114,  342 => 113,  339 => 112,  336 => 111,  333 => 110,  327 => 108,  324 => 107,  321 => 106,  309 => 104,  306 => 103,  303 => 102,  300 => 101,  296 => 100,  288 => 98,  285 => 96,  283 => 95,  277 => 94,  272 => 92,  269 => 91,  265 => 89,  256 => 87,  252 => 86,  249 => 85,  247 => 84,  244 => 83,  240 => 81,  238 => 80,  234 => 79,  232 => 78,  226 => 76,  224 => 75,  222 => 74,  218 => 62,  209 => 57,  203 => 54,  198 => 53,  196 => 52,  191 => 50,  186 => 47,  182 => 46,  176 => 42,  170 => 41,  161 => 39,  156 => 38,  149 => 34,  145 => 33,  141 => 31,  138 => 30,  133 => 29,  127 => 26,  122 => 25,  119 => 24,  113 => 22,  111 => 21,  107 => 19,  104 => 18,  101 => 17,  98 => 16,  94 => 15,  90 => 12,  88 => 11,  86 => 10,  84 => 9,  80 => 8,  76 => 5,  74 => 4,  72 => 3,  70 => 2,  66 => 1,  62 => 62,  59 => 61,  57 => 46,  54 => 45,  52 => 15,  49 => 14,  47 => 8,  44 => 7,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPlugin/FormTheme/Integration/layout.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Resources\\views\\FormTheme\\Integration\\layout.html.twig");
    }
}
