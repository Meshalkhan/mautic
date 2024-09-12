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

/* @MauticForm/Field/group.html.twig */
class __TwigTemplate_8131798c2c669f1af5b7363277012dd8 extends Template
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
        // line 5
        $context["containerType"] = ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 5, $this->source); })()) . "grp");
        // line 6
        $context["defaultInputClass"] = (((isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 6, $this->source); })()) . "-") . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 6, $this->source); })()));
        // line 7
        $context["ignoreId"] = true;
        // line 8
        $context["ignoreName"] = ("checkbox" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 8, $this->source); })()));
        // line 9
        echo "
";
        // line 11
        $context["defaultInputFormClass"] = ((array_key_exists("defaultInputFormClass", $context)) ? (_twig_default_filter((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 11, $this->source); })()), "")) : (""));
        // line 12
        $context["defaultLabelClass"] = ((array_key_exists("defaultLabelClass", $context)) ? (_twig_default_filter((isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 12, $this->source); })()), "label")) : ("label"));
        // line 13
        $context["formName"] = ((array_key_exists("formName", $context)) ? (_twig_default_filter((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 13, $this->source); })()), "")) : (""));
        // line 14
        $context["defaultInputClass"] = ("mauticform-" . (isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 14, $this->source); })()));
        // line 15
        $context["defaultLabelClass"] = ("mauticform-" . (isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 15, $this->source); })()));
        // line 16
        $context["containerClass"] = ((array_key_exists("containerClass", $context)) ? (_twig_default_filter((isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 16, $this->source); })()), (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 16, $this->source); })()))) : ((isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 16, $this->source); })())));
        // line 17
        $context["order"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", false, false, false, 17), 0)) : (0));
        // line 18
        $context["validationMessage"] = "";
        // line 19
        echo "
";
        // line 20
        $context["inputAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", false, false, false, 20), "")) : ("")));
        // line 21
        $context["labelAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", false, false, false, 21), "")) : ("")));
        // line 22
        $context["containerAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", false, false, false, 22), "")) : ("")));
        // line 23
        echo "
";
        // line 24
        if (( !array_key_exists("ignoreName", $context) || (array_key_exists("ignoreName", $context) && twig_test_empty((isset($context["ignoreName"]) || array_key_exists("ignoreName", $context) ? $context["ignoreName"] : (function () { throw new RuntimeError('Variable "ignoreName" does not exist.', 24, $this->source); })()))))) {
            // line 25
            echo "  ";
            $context["inputName"] = (("mauticform[" . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 25, $this->source); })()), "alias", [], "any", false, false, false, 25)) . "]");
            // line 26
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 26), "multiple", [], "any", true, true, false, 26)) {
                // line 27
                echo "    ";
                $context["inputName"] = ((isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 27, $this->source); })()) . "[]");
                // line 28
                echo "  ";
            }
            // line 29
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 29, $this->source); })()), ["name" =>             // line 30
(isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 30, $this->source); })())]);
        }
        // line 33
        echo "
";
        // line 34
        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 34, $this->source); })()), "type", [], "any", false, false, false, 34), ["checkboxgrp", "radiogrp", "textarea"])) {
            // line 35
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 35, $this->source); })()), ["value" => ((twig_get_attribute($this->env, $this->source,             // line 36
($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", false, false, false, 36), "")) : (""))]);
        }
        // line 39
        echo "
";
        // line 40
        if (( !array_key_exists("ignoreId", $context) || (array_key_exists("ignoreId", $context) && twig_test_empty((isset($context["ignoreId"]) || array_key_exists("ignoreId", $context) ? $context["ignoreId"] : (function () { throw new RuntimeError('Variable "ignoreId" does not exist.', 40, $this->source); })()))))) {
            // line 41
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 41, $this->source); })()), ["id" => ((("mauticform_input" .             // line 42
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 42, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 42, $this->source); })()), "alias", [], "any", false, false, false, 42))]);
            // line 44
            echo "  ";
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 44, $this->source); })()), ["id" => ((("mauticform_label" .             // line 45
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 45, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 45, $this->source); })()), "alias", [], "any", false, false, false, 45)), "for" => ((("mauticform_input" .             // line 46
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 46, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 46, $this->source); })()), "alias", [], "any", false, false, false, 46))]);
        }
        // line 49
        echo "
";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 50), "placeholder", [], "any", true, true, false, 50) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 50, $this->source); })()), "properties", [], "any", false, false, false, 50), "placeholder", [], "any", false, false, false, 50)))) {
            // line 51
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 51, $this->source); })()), ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 52
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 52, $this->source); })()), "properties", [], "any", false, false, false, 52), "placeholder", [], "any", false, false, false, 52)]);
        }
        // line 55
        echo "
";
        // line 56
        if ((array_key_exists("inForm", $context) && ((true == (isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 56, $this->source); })())) ||  !twig_test_empty((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 56, $this->source); })()))))) {
            // line 57
            echo "  ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 57, $this->source); })()), "type", [], "any", false, false, false, 57), ["button", "pagebreak"])) {
                // line 58
                echo "    ";
                $context["defaultInputFormClass"] = ((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 58, $this->source); })()) . " btn btn-default");
                // line 59
                echo "  ";
            }
            // line 60
            echo "
  ";
            // line 61
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 61, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 62
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 62)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 62), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 62, $this->source); })())])]);
            // line 64
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 64, $this->source); })()), ["disabled" => "disabled", "class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 66
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 66)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 66), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 66, $this->source); })()), (isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 66, $this->source); })())])]);
        } else {
            // line 69
            echo "  ";
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 69, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 70
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 70), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 70, $this->source); })())])]);
            // line 72
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 72, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 73
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 73), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 73, $this->source); })())])]);
        }
        // line 76
        echo "
";
        // line 77
        $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 77, $this->source); })()), ["id" => ((("mauticform" . ((        // line 78
array_key_exists("formName", $context)) ? (_twig_default_filter((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 78, $this->source); })()), "")) : (""))) . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 78, $this->source); })())), "class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,         // line 79
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 79)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 79), [])) : ([])), ["mauticform-row", ("mauticform-" .         // line 81
(isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 81, $this->source); })())), ("mauticform-field-" .         // line 82
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 82, $this->source); })()))])]);
        // line 85
        if ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 85, $this->source); })()), "parent", [], "any", false, false, false, 85) && twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 85, $this->source); })()), "parent", [], "any", false, false, false, 85), [], "array", true, true, false, 85))) {
            // line 86
            echo "  ";
            $context["values"] = twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 86, $this->source); })()), "conditions", [], "any", false, false, false, 86), "values", [], "any", false, false, false, 86), "|");
            // line 88
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 88, $this->source); })()), "conditions", [], "any", false, false, false, 88), "any", [], "any", false, false, false, 88) != false) && ("notIn" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 88, $this->source); })()), "conditions", [], "any", false, false, false, 88), "expr", [], "any", false, false, false, 88)))) {
                // line 89
                $context["values"] = "*";
                // line 90
                echo "  ";
            }
            // line 91
            echo "
  ";
            // line 92
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 92, $this->source); })()), ["data-mautic-form-show-on" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 93
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 93, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 93, $this->source); })()), "parent", [], "any", false, false, false, 93), [], "array", false, false, false, 93), "alias", [], "any", false, false, false, 93) . ":") . (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 93, $this->source); })())), "data-mautic-form-expr" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 94
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 94, $this->source); })()), "conditions", [], "any", false, false, false, 94), "expr", [], "any", false, false, false, 94), "class" => twig_array_merge(twig_get_attribute($this->env, $this->source,             // line 95
(isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 95, $this->source); })()), "class", [], "any", false, false, false, 95), ["mauticform-field-hidden"])]);
        }
        // line 100
        echo "
";
        // line 101
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "any", true, true, false, 101) && twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 101, $this->source); })()), "isRequired", [], "any", false, false, false, 101))) {
            // line 102
            echo "  ";
            $context["required"] = true;
            // line 103
            echo "  ";
            $context["validationMessage"] = twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 103, $this->source); })()), "validationMessage", [], "any", false, false, false, 103);
            // line 104
            echo "  ";
            if (twig_test_empty((isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 104, $this->source); })()))) {
                // line 105
                echo "        ";
                $context["validationMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.generic.required", [], "validators", ((array_key_exists("language", $context)) ? (_twig_default_filter((isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 105, $this->source); })()), null)) : (null)));
                // line 106
                echo "  ";
            }
            // line 107
            echo "  ";
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 107, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 108
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 108)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 108), [])) : ([])), ["mauticform-required"]), "data-validate" => twig_get_attribute($this->env, $this->source,             // line 111
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 111, $this->source); })()), "alias", [], "any", false, false, false, 111), "data-validation-type" => twig_get_attribute($this->env, $this->source,             // line 112
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 112, $this->source); })()), "type", [], "any", false, false, false, 112)]);
            // line 114
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 114), "multiple", [], "any", true, true, false, 114) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 114, $this->source); })()), "properties", [], "any", false, false, false, 114), "multiple", [], "any", false, false, false, 114)))) {
                // line 115
                echo "    ";
                $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 115, $this->source); })()), ["data-validate-multiple" => "true"]);
                // line 118
                echo "  ";
            }
        } elseif ((        // line 119
array_key_exists("required", $context) && (true == (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 119, $this->source); })())))) {
            // line 120
            echo "  ";
            // line 121
            echo "  ";
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 121, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 122
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 122)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 122), [])) : ([])), ["mauticform-required"])]);
        }
        // line 127
        echo "
";
        // line 129
        if ((((array_key_exists("list", $context) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 129), "syncList", [], "any", true, true, false, 129)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 129), "list", [], "any", true, true, false, 129)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 129), "optionList", [], "any", true, true, false, 129))) {
            // line 130
            $context["parseList"] = [];
            // line 131
            $context["isBooleanList"] = false;
            // line 133
            if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 134
($context["field"] ?? null), "properties", [], "any", false, true, false, 134), "syncList", [], "any", true, true, false, 134) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 134, $this->source); })()), "properties", [], "any", false, false, false, 134), "syncList", [], "any", false, false, false, 134))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 135
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 135, $this->source); })()), "mappedField", [], "any", false, false, false, 135))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 136
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 136, $this->source); })()), "mappedObject", [], "any", false, false, false, 136))) && twig_get_attribute($this->env, $this->source,             // line 137
($context["mappedFields"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 137, $this->source); })()), "mappedObject", [], "any", false, false, false, 137), [], "array", true, true, false, 137))) {
                // line 140
                echo "    ";
                $context["fieldCollection"] = twig_get_attribute($this->env, $this->source, (isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 140, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 140, $this->source); })()), "mappedObject", [], "any", false, false, false, 140), [], "array", false, false, false, 140);
                // line 141
                echo "    ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["fieldCollection"]) || array_key_exists("fieldCollection", $context) ? $context["fieldCollection"] : (function () { throw new RuntimeError('Variable "fieldCollection" does not exist.', 141, $this->source); })()), "getFieldByKey", [twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 141, $this->source); })()), "mappedField", [], "any", false, false, false, 141), false], "method", false, false, false, 141))) {
                    // line 142
                    echo "      ";
                    $context["mappedField"] = twig_get_attribute($this->env, $this->source, (isset($context["fieldCollection"]) || array_key_exists("fieldCollection", $context) ? $context["fieldCollection"] : (function () { throw new RuntimeError('Variable "fieldCollection" does not exist.', 142, $this->source); })()), "getFieldByKey", [twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 142, $this->source); })()), "mappedField", [], "any", false, false, false, 142)], "method", false, false, false, 142);
                    // line 143
                    echo "      ";
                    $context["mappedFieldType"] = twig_get_attribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 143, $this->source); })()), "type", [], "any", false, false, false, 143);
                    // line 145
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mappedField"] ?? null), "properties", [], "any", false, true, false, 145), "list", [], "any", true, true, false, 145) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 145, $this->source); })()), "properties", [], "any", false, false, false, 145), "list", [], "any", false, false, false, 145)))) {
                        // line 146
                        $context["parseList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 146, $this->source); })()), "properties", [], "any", false, false, false, 146), "list", [], "any", false, false, false, 146);
                    } elseif (("boolean" ==                     // line 147
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 147, $this->source); })()))) {
                        // line 148
                        $context["parseList"] = ["0" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 149
(isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 149, $this->source); })()), "properties", [], "any", false, false, false, 149), "no", [], "any", false, false, false, 149), "1" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 150
(isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 150, $this->source); })()), "properties", [], "any", false, false, false, 150), "yes", [], "any", false, false, false, 150)];
                    } elseif (("country" ==                     // line 152
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 152, $this->source); })()))) {
                        // line 153
                        $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getCountryChoices();
                    } elseif (("region" ==                     // line 154
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 154, $this->source); })()))) {
                        // line 155
                        $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getRegionChoices();
                    } elseif (("timezone" ==                     // line 156
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 156, $this->source); })()))) {
                        // line 157
                        $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getTimezonesChoices();
                    } elseif (("locale" ==                     // line 158
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 158, $this->source); })()))) {
                        // line 159
                        $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getLocaleChoices();
                    }
                }
            }
            // line 164
            if (twig_test_empty((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 164, $this->source); })()))) {
                // line 165
                if (array_key_exists("list", $context)) {
                    // line 166
                    $context["parseList"] = (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 166, $this->source); })());
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 167
($context["field"] ?? null), "properties", [], "any", false, true, false, 167), "optionlist", [], "any", true, true, false, 167) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 167, $this->source); })()), "properties", [], "any", false, false, false, 167), "optionlist", [], "any", false, false, false, 167)))) {
                    // line 168
                    $context["parseList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 168, $this->source); })()), "properties", [], "any", false, false, false, 168), "optionlist", [], "any", false, false, false, 168);
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 169
($context["field"] ?? null), "properties", [], "any", false, true, false, 169), "list", [], "any", true, true, false, 169) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 169, $this->source); })()), "properties", [], "any", false, false, false, 169), "list", [], "any", false, false, false, 169)))) {
                    // line 170
                    $context["parseList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 170, $this->source); })()), "properties", [], "any", false, false, false, 170), "list", [], "any", false, false, false, 170);
                }
                // line 173
                if (twig_get_attribute($this->env, $this->source, ($context["parseList"] ?? null), "list", [], "any", true, true, false, 173)) {
                    // line 174
                    $context["parseList"] = twig_get_attribute($this->env, $this->source, (isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 174, $this->source); })()), "list", [], "any", false, false, false, 174);
                }
            }
            // line 178
            if ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 178, $this->source); })()), "mappedField", [], "any", false, false, false, 178) && twig_get_attribute($this->env, $this->source, ($context["mappedFields"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 178, $this->source); })()), "mappedObject", [], "any", false, false, false, 178), [], "array", true, true, false, 178))) {
                // line 180
                echo "    ";
                $context["fieldCollection"] = twig_get_attribute($this->env, $this->source, (isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 180, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 180, $this->source); })()), "mappedObject", [], "any", false, false, false, 180), [], "array", false, false, false, 180);
                // line 181
                echo "
    ";
                // line 182
                if (twig_get_attribute($this->env, $this->source, ($context["fieldCollection"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 182, $this->source); })()), "mappedField", [], "any", false, false, false, 182), [], "array", true, true, false, 182)) {
                    // line 183
                    echo "      ";
                    $context["mappedField"] = twig_get_attribute($this->env, $this->source, (isset($context["fieldCollection"]) || array_key_exists("fieldCollection", $context) ? $context["fieldCollection"] : (function () { throw new RuntimeError('Variable "fieldCollection" does not exist.', 183, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 183, $this->source); })()), "mappedField", [], "any", false, false, false, 183), [], "array", false, false, false, 183);
                    // line 184
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 184, $this->source); })()), "type", [], "any", false, false, false, 184), ["datetime", "date"])) {
                        // line 185
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 185, $this->source); })()));
                        foreach ($context['_seq'] as $context["key"] => $context["aTemp"]) {
                            // line 186
                            $context["date"] = ((("datetime" == twig_get_attribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 186, $this->source); })()), "type", [], "any", false, false, false, 186))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, $context["aTemp"], "label", [], "any", false, false, false, 186))) : ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, $context["aTemp"], "label", [], "any", false, false, false, 186))));
                            // line 187
                            if ((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 187, $this->source); })())) {
                                // line 188
                                $context["parseList"] = twig_array_merge((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 188, $this->source); })()), [                                // line 189
$context["key"] => twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 189, $this->source); })()), $context["key"], [], "array", false, false, false, 189), ["label" =>                                 // line 190
(isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 190, $this->source); })())])]);
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['aTemp'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                }
            }
            // line 199
            if ((isset($context["isBooleanList"]) || array_key_exists("isBooleanList", $context) ? $context["isBooleanList"] : (function () { throw new RuntimeError('Variable "isBooleanList" does not exist.', 199, $this->source); })())) {
                // line 200
                $context["list"] = Mautic\FormBundle\Helper\FormFieldHelper::parseBooleanList((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 200, $this->source); })()));
            } else {
                // line 202
                $context["list"] = Mautic\FormBundle\Helper\FormFieldHelper::parseList((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 202, $this->source); })()));
            }
            // line 205
            $context["firstListValue"] = twig_first($this->env, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 205, $this->source); })()));
        }
        // line 208
        echo "
";
        // line 209
        $context["optionLabelAttr"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 209), "labelAttributes", [], "any", true, true, false, 209)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 209), "labelAttributes", [], "any", false, false, false, 209), "")) : ("")));
        // line 210
        $context["wrapDiv"] = true;
        // line 211
        $context["defaultOptionLabelClass"] = (("mauticform-" . (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 211, $this->source); })())) . "-label");
        // line 212
        $context["optionLabelAttr"] = twig_array_merge((isset($context["optionLabelAttr"]) || array_key_exists("optionLabelAttr", $context) ? $context["optionLabelAttr"] : (function () { throw new RuntimeError('Variable "optionLabelAttr" does not exist.', 212, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,         // line 213
($context["optionLabelAttr"] ?? null), "class", [], "any", true, true, false, 213)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["optionLabelAttr"] ?? null), "class", [], "any", false, false, false, 213), [])) : ([])), [(isset($context["defaultOptionLabelClass"]) || array_key_exists("defaultOptionLabelClass", $context) ? $context["defaultOptionLabelClass"] : (function () { throw new RuntimeError('Variable "defaultOptionLabelClass" does not exist.', 213, $this->source); })())])]);
        // line 215
        if (twig_in_filter("class", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 215), "labelAttributes", [], "any", true, true, false, 215)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 215), "labelAttributes", [], "any", false, false, false, 215), "")) : ("")))) {
            // line 216
            echo "  ";
            $context["wrapDiv"] = false;
        }
        // line 218
        $context["firstId"] = (((((((("mauticform_" . (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 218, $this->source); })())) . "_") . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 218, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 218, $this->source); })()), "alias", [], "any", false, false, false, 218)) . "_") . Mautic\CoreBundle\Helper\InputHelper::alphanum(Mautic\CoreBundle\Helper\InputHelper::transliterate(((array_key_exists("firstListValue", $context)) ? (_twig_default_filter((isset($context["firstListValue"]) || array_key_exists("firstListValue", $context) ? $context["firstListValue"] : (function () { throw new RuntimeError('Variable "firstListValue" does not exist.', 218, $this->source); })()), null)) : (null))))) . "1");
        // line 219
        echo "
<div ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 220, $this->source); })()));
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
        // line 221
        if (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 221, $this->source); })()), "showLabel", [], "any", false, false, false, 221)) {
            // line 222
            echo "    ";
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 222, $this->source); })()), ["for" =>             // line 223
(isset($context["firstId"]) || array_key_exists("firstId", $context) ? $context["firstId"] : (function () { throw new RuntimeError('Variable "firstId" does not exist.', 223, $this->source); })())]);
            // line 225
            echo "    <label ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 225, $this->source); })()));
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 225, $this->source); })()), "label", [], "any", false, false, false, 225), "html", null, true);
            echo "</label>
  ";
        }
        // line 227
        echo "  ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 227, $this->source); })()), "helpMessage", [], "any", false, false, false, 227))) {
            echo "<span class=\"mauticform-helpmessage\">";
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 227, $this->source); })()), "helpMessage", [], "any", false, false, false, 227));
            echo "</span>";
        }
        // line 228
        echo "
  ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("list", $context)) ? (_twig_default_filter((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 229, $this->source); })()), [])) : ([])));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["listValue"] => $context["listLabel"]) {
            // line 230
            echo "    ";
            $context["id"] = (((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 230, $this->source); })()), "alias", [], "any", false, false, false, 230) . "_") . Mautic\CoreBundle\Helper\InputHelper::alphanum(Mautic\CoreBundle\Helper\InputHelper::transliterate($context["listValue"]))) . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 230));
            // line 231
            echo "    ";
            $context["checkboxBrackets"] = ((("checkbox" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 231, $this->source); })()))) ? ("[]") : (""));
            // line 232
            echo "    ";
            $context["listInputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 232, $this->source); })()), ["name" => ((("mauticform[" . twig_get_attribute($this->env, $this->source,             // line 233
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 233, $this->source); })()), "alias", [], "any", false, false, false, 233)) . "]") . (isset($context["checkboxBrackets"]) || array_key_exists("checkboxBrackets", $context) ? $context["checkboxBrackets"] : (function () { throw new RuntimeError('Variable "checkboxBrackets" does not exist.', 233, $this->source); })())), "id" => ((((("mauticform_" .             // line 234
(isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 234, $this->source); })())) . "_") . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 234, $this->source); })())) . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 234, $this->source); })())), "type" =>             // line 235
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 235, $this->source); })()), "value" => twig_escape_filter($this->env,             // line 236
$context["listValue"])]);
            // line 238
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 238, $this->source); })()), "defaultValue", [], "any", false, false, false, 238) == $context["listValue"])) {
                // line 239
                echo "      ";
                $context["listInputAttributes"] = twig_array_merge((isset($context["listInputAttributes"]) || array_key_exists("listInputAttributes", $context) ? $context["listInputAttributes"] : (function () { throw new RuntimeError('Variable "listInputAttributes" does not exist.', 239, $this->source); })()), ["checked" => "checked"]);
                // line 242
                echo "    ";
            }
            // line 243
            echo "
    ";
            // line 244
            if ((isset($context["wrapDiv"]) || array_key_exists("wrapDiv", $context) ? $context["wrapDiv"] : (function () { throw new RuntimeError('Variable "wrapDiv" does not exist.', 244, $this->source); })())) {
                echo "<div class=\"mauticform-";
                echo twig_escape_filter($this->env, (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 244, $this->source); })()), "html", null, true);
                echo "-row\">";
            }
            // line 245
            echo "
    <input ";
            // line 246
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listInputAttributes"]) || array_key_exists("listInputAttributes", $context) ? $context["listInputAttributes"] : (function () { throw new RuntimeError('Variable "listInputAttributes" does not exist.', 246, $this->source); })()));
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
            echo " />
    ";
            // line 247
            $context["optionLabelAttr"] = twig_array_merge((isset($context["optionLabelAttr"]) || array_key_exists("optionLabelAttr", $context) ? $context["optionLabelAttr"] : (function () { throw new RuntimeError('Variable "optionLabelAttr" does not exist.', 247, $this->source); })()), ["id" => ((("mauticform_" .             // line 248
(isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 248, $this->source); })())) . "_label_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 248, $this->source); })())), "for" => ((((("mauticform_" .             // line 249
(isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 249, $this->source); })())) . "_") . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 249, $this->source); })())) . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 249, $this->source); })()))]);
            // line 251
            echo "    <label ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["optionLabelAttr"]) || array_key_exists("optionLabelAttr", $context) ? $context["optionLabelAttr"] : (function () { throw new RuntimeError('Variable "optionLabelAttr" does not exist.', 251, $this->source); })()));
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
            echo twig_escape_filter($this->env, $context["listLabel"], "html", null, true);
            echo "</label>

    ";
            // line 253
            if ((isset($context["wrapDiv"]) || array_key_exists("wrapDiv", $context) ? $context["wrapDiv"] : (function () { throw new RuntimeError('Variable "wrapDiv" does not exist.', 253, $this->source); })())) {
                echo "</div>";
            }
            // line 254
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['listValue'], $context['listLabel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "
  <span class=\"mauticform-errormsg\" style=\"display:none;\">";
        // line 256
        echo twig_escape_filter($this->env, (isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 256, $this->source); })()), "html", null, true);
        echo "</span>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Field/group.html.twig";
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
        return array (  556 => 256,  553 => 255,  539 => 254,  535 => 253,  513 => 251,  511 => 249,  510 => 248,  509 => 247,  491 => 246,  488 => 245,  482 => 244,  479 => 243,  476 => 242,  473 => 239,  470 => 238,  468 => 236,  467 => 235,  466 => 234,  465 => 233,  463 => 232,  460 => 231,  457 => 230,  440 => 229,  437 => 228,  430 => 227,  408 => 225,  406 => 223,  404 => 222,  402 => 221,  384 => 220,  381 => 219,  379 => 218,  375 => 216,  373 => 215,  371 => 213,  370 => 212,  368 => 211,  366 => 210,  364 => 209,  361 => 208,  358 => 205,  355 => 202,  352 => 200,  350 => 199,  340 => 190,  339 => 189,  338 => 188,  336 => 187,  334 => 186,  330 => 185,  328 => 184,  325 => 183,  323 => 182,  320 => 181,  317 => 180,  315 => 178,  311 => 174,  309 => 173,  306 => 170,  304 => 169,  302 => 168,  300 => 167,  298 => 166,  296 => 165,  294 => 164,  289 => 159,  287 => 158,  285 => 157,  283 => 156,  281 => 155,  279 => 154,  277 => 153,  275 => 152,  273 => 150,  272 => 149,  271 => 148,  269 => 147,  267 => 146,  265 => 145,  262 => 143,  259 => 142,  256 => 141,  253 => 140,  251 => 137,  250 => 136,  249 => 135,  248 => 134,  247 => 133,  245 => 131,  243 => 130,  241 => 129,  238 => 127,  235 => 122,  233 => 121,  231 => 120,  229 => 119,  226 => 118,  223 => 115,  220 => 114,  218 => 112,  217 => 111,  216 => 108,  214 => 107,  211 => 106,  208 => 105,  205 => 104,  202 => 103,  199 => 102,  197 => 101,  194 => 100,  191 => 95,  190 => 94,  189 => 93,  188 => 92,  185 => 91,  182 => 90,  180 => 89,  178 => 88,  175 => 86,  173 => 85,  171 => 82,  170 => 81,  169 => 79,  168 => 78,  167 => 77,  164 => 76,  161 => 73,  159 => 72,  157 => 70,  155 => 69,  152 => 66,  150 => 64,  148 => 62,  147 => 61,  144 => 60,  141 => 59,  138 => 58,  135 => 57,  133 => 56,  130 => 55,  127 => 52,  125 => 51,  123 => 50,  120 => 49,  117 => 46,  116 => 45,  114 => 44,  112 => 42,  110 => 41,  108 => 40,  105 => 39,  102 => 36,  100 => 35,  98 => 34,  95 => 33,  92 => 30,  90 => 29,  87 => 28,  84 => 27,  81 => 26,  78 => 25,  76 => 24,  73 => 23,  71 => 22,  69 => 21,  67 => 20,  64 => 19,  62 => 18,  60 => 17,  58 => 16,  56 => 15,  54 => 14,  52 => 13,  50 => 12,  48 => 11,  45 => 9,  43 => 8,  41 => 7,  39 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Field/group.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Field\\group.html.twig");
    }
}
