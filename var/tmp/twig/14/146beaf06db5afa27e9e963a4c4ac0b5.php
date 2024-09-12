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

/* @MauticSocial/Integration/login.html.twig */
class __TwigTemplate_a7806bed0f3315b64a9d6f971ec1d7d9 extends Template
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
        // line 13
        $context["defaultInputClass"] = "button";
        // line 14
        $context["containerType"] = "div-wrapper";
        // line 15
        echo "
";
        // line 17
        $context["defaultInputFormClass"] = ((array_key_exists("defaultInputFormClass", $context)) ? (_twig_default_filter((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 17, $this->source); })()), "")) : (""));
        // line 18
        $context["defaultLabelClass"] = ((array_key_exists("defaultLabelClass", $context)) ? (_twig_default_filter((isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 18, $this->source); })()), "label")) : ("label"));
        // line 19
        $context["formName"] = ((array_key_exists("formName", $context)) ? (_twig_default_filter((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 19, $this->source); })()), "")) : (""));
        // line 20
        $context["defaultInputClass"] = ("mauticform-" . (isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 20, $this->source); })()));
        // line 21
        $context["defaultLabelClass"] = ("mauticform-" . (isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 21, $this->source); })()));
        // line 22
        $context["containerClass"] = ((array_key_exists("containerClass", $context)) ? (_twig_default_filter((isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 22, $this->source); })()), (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 22, $this->source); })()))) : ((isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 22, $this->source); })())));
        // line 23
        $context["order"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", false, false, false, 23), 0)) : (0));
        // line 24
        $context["validationMessage"] = "";
        // line 25
        echo "
";
        // line 26
        $context["inputAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", false, false, false, 26), "")) : ("")));
        // line 27
        $context["labelAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", false, false, false, 27), "")) : ("")));
        // line 28
        $context["containerAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", false, false, false, 28), "")) : ("")));
        // line 29
        echo "
";
        // line 30
        if (( !array_key_exists("ignoreName", $context) || (array_key_exists("ignoreName", $context) && twig_test_empty((isset($context["ignoreName"]) || array_key_exists("ignoreName", $context) ? $context["ignoreName"] : (function () { throw new RuntimeError('Variable "ignoreName" does not exist.', 30, $this->source); })()))))) {
            // line 31
            echo "  ";
            $context["inputName"] = (("mauticform[" . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 31, $this->source); })()), "alias", [], "any", false, false, false, 31)) . "]");
            // line 32
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 32), "multiple", [], "any", true, true, false, 32)) {
                // line 33
                echo "    ";
                $context["inputName"] = ((isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 33, $this->source); })()) . "[]");
                // line 34
                echo "  ";
            }
            // line 35
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 35, $this->source); })()), ["name" =>             // line 36
(isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 36, $this->source); })())]);
        }
        // line 39
        echo "
";
        // line 40
        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 40, $this->source); })()), "type", [], "any", false, false, false, 40), ["checkboxgrp", "radiogrp", "textarea"])) {
            // line 41
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 41, $this->source); })()), ["value" => ((twig_get_attribute($this->env, $this->source,             // line 42
($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", false, false, false, 42), "")) : (""))]);
        }
        // line 45
        echo "
";
        // line 46
        if (( !array_key_exists("ignoreId", $context) || (array_key_exists("ignoreId", $context) && twig_test_empty((isset($context["ignoreId"]) || array_key_exists("ignoreId", $context) ? $context["ignoreId"] : (function () { throw new RuntimeError('Variable "ignoreId" does not exist.', 46, $this->source); })()))))) {
            // line 47
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 47, $this->source); })()), ["id" => ((("mauticform_input" .             // line 48
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 48, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 48, $this->source); })()), "alias", [], "any", false, false, false, 48))]);
            // line 50
            echo "  ";
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 50, $this->source); })()), ["id" => ((("mauticform_label" .             // line 51
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 51, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 51, $this->source); })()), "alias", [], "any", false, false, false, 51)), "for" => ((("mauticform_input" .             // line 52
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 52, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 52, $this->source); })()), "alias", [], "any", false, false, false, 52))]);
        }
        // line 55
        echo "
";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 56), "placeholder", [], "any", true, true, false, 56) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 56, $this->source); })()), "properties", [], "any", false, false, false, 56), "placeholder", [], "any", false, false, false, 56)))) {
            // line 57
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 57, $this->source); })()), ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 58
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 58, $this->source); })()), "properties", [], "any", false, false, false, 58), "placeholder", [], "any", false, false, false, 58)]);
        }
        // line 61
        echo "

";
        // line 64
        if ((array_key_exists("inForm", $context) && ((true == (isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 64, $this->source); })())) ||  !twig_test_empty((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 64, $this->source); })()))))) {
            // line 65
            echo "  ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 65, $this->source); })()), "type", [], "any", false, false, false, 65), ["button", "pagebreak"])) {
                // line 66
                echo "    ";
                $context["defaultInputFormClass"] = ((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 66, $this->source); })()) . " btn btn-default");
                // line 67
                echo "  ";
            }
            // line 68
            echo "
  ";
            // line 69
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 69, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 70
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 70), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 70, $this->source); })())])]);
            // line 72
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 72, $this->source); })()), ["disabled" => "disabled", "class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 74
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 74)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 74), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 74, $this->source); })()), (isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 74, $this->source); })())])]);
        } else {
            // line 77
            echo "  ";
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 77, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 78
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 78), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 78, $this->source); })())])]);
            // line 80
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 80, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 81
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 81)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 81), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 81, $this->source); })())])]);
        }
        // line 84
        echo "
";
        // line 86
        $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 86, $this->source); })()), ["id" => ((("mauticform" . ((        // line 87
array_key_exists("formName", $context)) ? (_twig_default_filter((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 87, $this->source); })()), "")) : (""))) . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 87, $this->source); })())), "class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,         // line 88
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 88)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 88), [])) : ([])), ["mauticform-row", ("mauticform-" .         // line 90
(isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 90, $this->source); })())), ("mauticform-field-" .         // line 91
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 91, $this->source); })()))])]);
        // line 94
        if ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 94, $this->source); })()), "parent", [], "any", false, false, false, 94) && twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 94, $this->source); })()), "parent", [], "any", false, false, false, 94), [], "array", true, true, false, 94))) {
            // line 95
            echo "  ";
            $context["values"] = twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 95, $this->source); })()), "conditions", [], "any", false, false, false, 95), "values", [], "any", false, false, false, 95), "|");
            // line 96
            echo "
  ";
            // line 97
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 97, $this->source); })()), "conditions", [], "any", false, false, false, 97), "any", [], "any", false, false, false, 97)) && ("notIn" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 97, $this->source); })()), "conditions", [], "any", false, false, false, 97), "expr", [], "any", false, false, false, 97)))) {
                // line 98
                echo "    ";
                $context["values"] = "*";
                // line 99
                echo "  ";
            }
            // line 100
            echo "
  ";
            // line 101
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 101, $this->source); })()), ["data-mautic-form-show-on" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 102
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 102, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 102, $this->source); })()), "parent", [], "any", false, false, false, 102), [], "array", false, false, false, 102), "alias", [], "any", false, false, false, 102) . ":") . (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 102, $this->source); })())), "data-mautic-form-expr" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 103
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 103, $this->source); })()), "conditions", [], "any", false, false, false, 103), "expr", [], "any", false, false, false, 103), "class" => twig_array_merge(twig_get_attribute($this->env, $this->source,             // line 104
(isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 104, $this->source); })()), "class", [], "any", false, false, false, 104), ["mauticform-field-hidden"])]);
        }
        // line 109
        echo "

";
        // line 112
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "any", true, true, false, 112) && twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 112, $this->source); })()), "isRequired", [], "any", false, false, false, 112))) {
            // line 113
            echo "  ";
            $context["required"] = true;
            // line 114
            echo "  ";
            $context["validationMessage"] = twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 114, $this->source); })()), "validationMessage", [], "any", false, false, false, 114);
            // line 115
            echo "  ";
            if (twig_test_empty((isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 115, $this->source); })()))) {
                // line 116
                echo "        ";
                $context["validationMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.generic.required", [], "validators");
                // line 117
                echo "  ";
            }
            // line 118
            echo "  ";
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 118, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 119
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 119)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 119), [])) : ([])), ["mauticform-required"]), "data-validate" => twig_get_attribute($this->env, $this->source,             // line 122
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 122, $this->source); })()), "alias", [], "any", false, false, false, 122), "data-validation-type" => twig_get_attribute($this->env, $this->source,             // line 123
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 123, $this->source); })()), "type", [], "any", false, false, false, 123)]);
            // line 125
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 125), "multiple", [], "any", true, true, false, 125) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 125, $this->source); })()), "properties", [], "any", false, false, false, 125), "multiple", [], "any", false, false, false, 125)))) {
                // line 126
                echo "    ";
                $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 126, $this->source); })()), ["data-validate-multiple" => "true"]);
                // line 129
                echo "  ";
            }
        } elseif ((        // line 130
array_key_exists("required", $context) && (true == (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 130, $this->source); })())))) {
            // line 131
            echo "  ";
            // line 132
            echo "  ";
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 132, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 133
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 133)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 133), [])) : ([])), ["mauticform-required"])]);
        }
        // line 139
        echo "
";
        // line 140
        $context["action"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "request", [], "any", false, false, false, 140), "get", ["objectAction"], "method", false, false, false, 140);
        // line 141
        $context["settings"] = twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 141, $this->source); })()), "properties", [], "any", false, false, false, 141);
        // line 142
        echo "
";
        // line 143
        $context["integrations"] = [];
        // line 144
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "integrations", [], "any", true, true, false, 144) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 144, $this->source); })()), "integrations", [], "any", false, false, false, 144)))) {
            // line 145
            echo "  ";
            $context["integrations"] = twig_split_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 145, $this->source); })()), "integrations", [], "any", false, false, false, 145), 0,  -1), ",");
        }
        // line 147
        echo "
";
        // line 148
        $context["formName"] = _twig_default_filter(twig_replace_filter((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 148, $this->source); })()), ["_" => ""]), "mauticform");
        // line 149
        echo "
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_social_js_generate", ["formName" => (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 150, $this->source); })())]), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\" async=\"async\"></script>
<div ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 151, $this->source); })()));
        foreach ($context['_seq'] as $context["attrName"] => $context["attrValue"]) {
            echo twig_escape_filter($this->env, $context["attrName"], "html", null, true);
            echo "=\"";
            if (is_iterable($context["attrValue"])) {
                echo twig_escape_filter($this->env, twig_join_filter($context["attrValue"], " "), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $context["attrValue"], "html", null, true);
            }
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrName'], $context['attrValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
  ";
        // line 152
        if ((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 152, $this->source); })())) {
            // line 153
            echo "      ";
            echo twig_include($this->env, $context, "@MauticForm/Builder/_actions.html.twig", ["deleted" => false, "id" =>             // line 155
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 155, $this->source); })()), "formId" =>             // line 156
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 156, $this->source); })()), "formName" =>             // line 157
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 157, $this->source); })()), "disallowDelete" => false], false);
            // line 159
            echo "
  ";
        }
        // line 161
        echo "
  ";
        // line 162
        if (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 162, $this->source); })()), "showLabel", [], "any", false, false, false, 162)) {
            echo "<label ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 162, $this->source); })()));
            foreach ($context['_seq'] as $context["attrName"] => $context["attrValue"]) {
                echo twig_escape_filter($this->env, $context["attrName"], "html", null, true);
                echo "=\"";
                if (is_iterable($context["attrValue"])) {
                    echo twig_escape_filter($this->env, twig_join_filter($context["attrValue"], " "), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $context["attrValue"], "html", null, true);
                }
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrName'], $context['attrValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 162, $this->source); })()), "label", [], "any", false, false, false, 162), "html", null, true);
            echo "</label>";
        }
        // line 163
        echo "
  ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 164, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["integration"]) {
            // line 165
            echo "      ";
            if (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "buttonImageUrl", [], "any", true, true, false, 165) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 165, $this->source); })()), "buttonImageUrl", [], "any", false, false, false, 165))) &&  !twig_test_empty($context["integration"]))) {
                // line 166
                echo "          <a href=\"#\" onclick=\"openOAuthWindow('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 166, $this->source); })()), (("authUrl_" . $context["integration"]) . ""), [], "array", false, false, false, 166), "html", null, true);
                echo "')\"><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 166, $this->source); })()), "buttonImageUrl", [], "array", false, false, false, 166), "html", null, true);
                echo "btn_";
                echo twig_escape_filter($this->env, $context["integration"], "html", null, true);
                echo ".png\"></a>
      ";
            }
            // line 168
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['integration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticSocial/Integration/login.html.twig";
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
        return array (  351 => 169,  345 => 168,  335 => 166,  332 => 165,  328 => 164,  325 => 163,  303 => 162,  300 => 161,  296 => 159,  294 => 157,  293 => 156,  292 => 155,  290 => 153,  288 => 152,  270 => 151,  266 => 150,  263 => 149,  261 => 148,  258 => 147,  254 => 145,  252 => 144,  250 => 143,  247 => 142,  245 => 141,  243 => 140,  240 => 139,  237 => 133,  235 => 132,  233 => 131,  231 => 130,  228 => 129,  225 => 126,  222 => 125,  220 => 123,  219 => 122,  218 => 119,  216 => 118,  213 => 117,  210 => 116,  207 => 115,  204 => 114,  201 => 113,  199 => 112,  195 => 109,  192 => 104,  191 => 103,  190 => 102,  189 => 101,  186 => 100,  183 => 99,  180 => 98,  178 => 97,  175 => 96,  172 => 95,  170 => 94,  168 => 91,  167 => 90,  166 => 88,  165 => 87,  164 => 86,  161 => 84,  158 => 81,  156 => 80,  154 => 78,  152 => 77,  149 => 74,  147 => 72,  145 => 70,  144 => 69,  141 => 68,  138 => 67,  135 => 66,  132 => 65,  130 => 64,  126 => 61,  123 => 58,  121 => 57,  119 => 56,  116 => 55,  113 => 52,  112 => 51,  110 => 50,  108 => 48,  106 => 47,  104 => 46,  101 => 45,  98 => 42,  96 => 41,  94 => 40,  91 => 39,  88 => 36,  86 => 35,  83 => 34,  80 => 33,  77 => 32,  74 => 31,  72 => 30,  69 => 29,  67 => 28,  65 => 27,  63 => 26,  60 => 25,  58 => 24,  56 => 23,  54 => 22,  52 => 21,  50 => 20,  48 => 19,  46 => 18,  44 => 17,  41 => 15,  39 => 14,  37 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSocial/Integration/login.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticSocialBundle\\Resources\\views\\Integration\\login.html.twig");
    }
}
