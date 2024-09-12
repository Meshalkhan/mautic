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

/* @MauticForm/Field/text.html.twig */
class __TwigTemplate_3df53d46ed3c56256bfb5bb58400714c extends Template
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
        // line 12
        $context["containerType"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 12, $this->source); })()), "text")) : ("text"));
        // line 13
        $context["defaultInputClass"] = ((array_key_exists("inputClass", $context)) ? (_twig_default_filter((isset($context["inputClass"]) || array_key_exists("inputClass", $context) ? $context["inputClass"] : (function () { throw new RuntimeError('Variable "inputClass" does not exist.', 13, $this->source); })()), "input")) : ("input"));
        // line 14
        echo "
";
        // line 16
        $context["defaultInputFormClass"] = ((array_key_exists("defaultInputFormClass", $context)) ? (_twig_default_filter((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 16, $this->source); })()), "")) : (""));
        // line 17
        $context["defaultLabelClass"] = ((array_key_exists("defaultLabelClass", $context)) ? (_twig_default_filter((isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 17, $this->source); })()), "label")) : ("label"));
        // line 18
        $context["formName"] = ((array_key_exists("formName", $context)) ? (_twig_default_filter((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 18, $this->source); })()), "")) : (""));
        // line 19
        $context["defaultInputClass"] = ("mauticform-" . (isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 19, $this->source); })()));
        // line 20
        $context["defaultLabelClass"] = ("mauticform-" . (isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 20, $this->source); })()));
        // line 21
        $context["containerClass"] = ((array_key_exists("containerClass", $context)) ? (_twig_default_filter((isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 21, $this->source); })()), (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 21, $this->source); })()))) : ((isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 21, $this->source); })())));
        // line 22
        $context["order"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", false, false, false, 22), 0)) : (0));
        // line 23
        $context["validationMessage"] = "";
        // line 24
        echo "
";
        // line 25
        $context["inputAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", false, false, false, 25), "")) : ("")));
        // line 26
        $context["labelAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", false, false, false, 26), "")) : ("")));
        // line 27
        $context["containerAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", false, false, false, 27), "")) : ("")));
        // line 28
        echo "
";
        // line 29
        if (( !array_key_exists("ignoreName", $context) || (array_key_exists("ignoreName", $context) && twig_test_empty((isset($context["ignoreName"]) || array_key_exists("ignoreName", $context) ? $context["ignoreName"] : (function () { throw new RuntimeError('Variable "ignoreName" does not exist.', 29, $this->source); })()))))) {
            // line 30
            echo "  ";
            $context["inputName"] = (("mauticform[" . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 30, $this->source); })()), "alias", [], "any", false, false, false, 30)) . "]");
            // line 31
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 31), "multiple", [], "any", true, true, false, 31)) {
                // line 32
                echo "    ";
                $context["inputName"] = ((isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 32, $this->source); })()) . "[]");
                // line 33
                echo "  ";
            }
            // line 34
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 34, $this->source); })()), ["name" =>             // line 35
(isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 35, $this->source); })())]);
        }
        // line 38
        echo "
";
        // line 39
        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 39, $this->source); })()), "type", [], "any", false, false, false, 39), ["checkboxgrp", "radiogrp", "textarea"])) {
            // line 40
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 40, $this->source); })()), ["value" => ((twig_get_attribute($this->env, $this->source,             // line 41
($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", false, false, false, 41), "")) : (""))]);
        }
        // line 44
        echo "
";
        // line 45
        if (( !array_key_exists("ignoreId", $context) || (array_key_exists("ignoreId", $context) && twig_test_empty((isset($context["ignoreId"]) || array_key_exists("ignoreId", $context) ? $context["ignoreId"] : (function () { throw new RuntimeError('Variable "ignoreId" does not exist.', 45, $this->source); })()))))) {
            // line 46
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 46, $this->source); })()), ["id" => ((("mauticform_input" .             // line 47
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 47, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 47, $this->source); })()), "alias", [], "any", false, false, false, 47))]);
            // line 49
            echo "  ";
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 49, $this->source); })()), ["id" => ((("mauticform_label" .             // line 50
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 50, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 50, $this->source); })()), "alias", [], "any", false, false, false, 50)), "for" => ((("mauticform_input" .             // line 51
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 51, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 51, $this->source); })()), "alias", [], "any", false, false, false, 51))]);
        }
        // line 54
        echo "
";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 55), "placeholder", [], "any", true, true, false, 55) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 55, $this->source); })()), "properties", [], "any", false, false, false, 55), "placeholder", [], "any", false, false, false, 55)))) {
            // line 56
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 56, $this->source); })()), ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 57
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 57, $this->source); })()), "properties", [], "any", false, false, false, 57), "placeholder", [], "any", false, false, false, 57)]);
        }
        // line 60
        echo "

";
        // line 63
        if ((array_key_exists("inForm", $context) && ((true == (isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 63, $this->source); })())) ||  !twig_test_empty((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 63, $this->source); })()))))) {
            // line 64
            echo "  ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 64, $this->source); })()), "type", [], "any", false, false, false, 64), ["button", "pagebreak"])) {
                // line 65
                echo "    ";
                $context["defaultInputFormClass"] = ((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 65, $this->source); })()) . " btn btn-default");
                // line 66
                echo "  ";
            }
            // line 67
            echo "
  ";
            // line 68
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 68, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 69
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 69)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 69), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 69, $this->source); })())])]);
            // line 71
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 71, $this->source); })()), ["disabled" => "disabled", "class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 73
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 73), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 73, $this->source); })()), (isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 73, $this->source); })())])]);
        } else {
            // line 76
            echo "  ";
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 76, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 77
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 77)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 77), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 77, $this->source); })())])]);
            // line 79
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 79, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 80
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 80)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 80), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 80, $this->source); })())])]);
        }
        // line 83
        echo "
";
        // line 85
        $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 85, $this->source); })()), ["id" => ((("mauticform" . ((        // line 86
array_key_exists("formName", $context)) ? (_twig_default_filter((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 86, $this->source); })()), "")) : (""))) . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 86, $this->source); })())), "class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,         // line 87
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 87)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 87), [])) : ([])), ["mauticform-row", ("mauticform-" .         // line 89
(isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 89, $this->source); })())), ("mauticform-field-" .         // line 90
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 90, $this->source); })()))])]);
        // line 93
        if ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 93, $this->source); })()), "parent", [], "any", false, false, false, 93) && twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 93, $this->source); })()), "parent", [], "any", false, false, false, 93), [], "array", true, true, false, 93))) {
            // line 94
            echo "  ";
            $context["values"] = twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 94, $this->source); })()), "conditions", [], "any", false, false, false, 94), "values", [], "any", false, false, false, 94), "|");
            // line 95
            echo "
  ";
            // line 96
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 96, $this->source); })()), "conditions", [], "any", false, false, false, 96), "any", [], "any", false, false, false, 96) != false) && ("notIn" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 96, $this->source); })()), "conditions", [], "any", false, false, false, 96), "expr", [], "any", false, false, false, 96)))) {
                // line 97
                echo "    ";
                $context["values"] = "*";
                // line 98
                echo "  ";
            }
            // line 99
            echo "
  ";
            // line 100
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 100, $this->source); })()), ["data-mautic-form-show-on" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 101
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 101, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 101, $this->source); })()), "parent", [], "any", false, false, false, 101), [], "array", false, false, false, 101), "alias", [], "any", false, false, false, 101) . ":") . (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 101, $this->source); })())), "data-mautic-form-expr" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 102
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 102, $this->source); })()), "conditions", [], "any", false, false, false, 102), "expr", [], "any", false, false, false, 102), "class" => twig_array_merge(twig_get_attribute($this->env, $this->source,             // line 103
(isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 103, $this->source); })()), "class", [], "any", false, false, false, 103), ["mauticform-field-hidden"])]);
        }
        // line 108
        echo "
";
        // line 110
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "any", true, true, false, 110) && twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 110, $this->source); })()), "isRequired", [], "any", false, false, false, 110))) {
            // line 111
            echo "  ";
            $context["required"] = true;
            // line 112
            echo "  ";
            $context["validationMessage"] = twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 112, $this->source); })()), "validationMessage", [], "any", false, false, false, 112);
            // line 113
            echo "  ";
            if (twig_test_empty((isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 113, $this->source); })()))) {
                // line 114
                echo "        ";
                $context["validationMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.generic.required", [], "validators", ((array_key_exists("language", $context)) ? (_twig_default_filter((isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 114, $this->source); })()), null)) : (null)));
                // line 115
                echo "  ";
            }
            // line 116
            echo "  ";
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 116, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 117
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 117)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 117), [])) : ([])), ["mauticform-required"]), "data-validate" => twig_get_attribute($this->env, $this->source,             // line 120
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 120, $this->source); })()), "alias", [], "any", false, false, false, 120), "data-validation-type" => twig_get_attribute($this->env, $this->source,             // line 121
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 121, $this->source); })()), "type", [], "any", false, false, false, 121)]);
            // line 123
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 123), "multiple", [], "any", true, true, false, 123) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 123, $this->source); })()), "properties", [], "any", false, false, false, 123), "multiple", [], "any", false, false, false, 123)))) {
                // line 124
                echo "    ";
                $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 124, $this->source); })()), ["data-validate-multiple" => "true"]);
                // line 127
                echo "  ";
            }
        } elseif ((        // line 128
array_key_exists("required", $context) && (true == (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 128, $this->source); })())))) {
            // line 129
            echo "  ";
            // line 130
            echo "  ";
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 130, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 131
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 131)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 131), [])) : ([])), ["mauticform-required"])]);
        }
        // line 137
        echo "
<div ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 138, $this->source); })()));
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
        // line 139
        if (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 139, $this->source); })()), "showLabel", [], "any", false, false, false, 139)) {
            echo "<label ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 139, $this->source); })()));
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 139, $this->source); })()), "label", [], "any", false, false, false, 139), "html", null, true);
            echo "</label>";
        }
        // line 140
        echo "
  ";
        // line 141
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 141, $this->source); })()), "helpMessage", [], "any", false, false, false, 141))) {
            echo "<span class=\"mauticform-helpmessage\">";
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 141, $this->source); })()), "helpMessage", [], "any", false, false, false, 141));
            echo "</span>";
        }
        // line 142
        echo "
  ";
        // line 143
        if (("textarea" == twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 143, $this->source); })()), "type", [], "any", false, false, false, 143))) {
            // line 144
            echo "    <textarea ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 144, $this->source); })()));
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 144, $this->source); })()), "defaultValue", [], "any", false, false, false, 144), "html", null, true);
            echo "</textarea>
  ";
        } elseif (("number" == twig_get_attribute($this->env, $this->source,         // line 145
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 145, $this->source); })()), "type", [], "any", false, false, false, 145))) {
            // line 146
            echo "      <input type=\"";
            echo twig_escape_filter($this->env, (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 146, $this->source); })()), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 146, $this->source); })()));
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
            echo " step=\"";
            echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 146, $this->source); })()), "html", null, true);
            echo "\"/>
  ";
        } else {
            // line 148
            echo "    <input type=\"";
            echo twig_escape_filter($this->env, (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 148, $this->source); })()), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 148, $this->source); })()));
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
        }
        // line 150
        echo "
  <span class=\"mauticform-errormsg\" style=\"display:none;\">";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 151, $this->source); })()), "html", null, true);
        echo "</span>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Field/text.html.twig";
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
        return array (  368 => 151,  365 => 150,  343 => 148,  319 => 146,  317 => 145,  296 => 144,  294 => 143,  291 => 142,  285 => 141,  282 => 140,  260 => 139,  242 => 138,  239 => 137,  236 => 131,  234 => 130,  232 => 129,  230 => 128,  227 => 127,  224 => 124,  221 => 123,  219 => 121,  218 => 120,  217 => 117,  215 => 116,  212 => 115,  209 => 114,  206 => 113,  203 => 112,  200 => 111,  198 => 110,  195 => 108,  192 => 103,  191 => 102,  190 => 101,  189 => 100,  186 => 99,  183 => 98,  180 => 97,  178 => 96,  175 => 95,  172 => 94,  170 => 93,  168 => 90,  167 => 89,  166 => 87,  165 => 86,  164 => 85,  161 => 83,  158 => 80,  156 => 79,  154 => 77,  152 => 76,  149 => 73,  147 => 71,  145 => 69,  144 => 68,  141 => 67,  138 => 66,  135 => 65,  132 => 64,  130 => 63,  126 => 60,  123 => 57,  121 => 56,  119 => 55,  116 => 54,  113 => 51,  112 => 50,  110 => 49,  108 => 47,  106 => 46,  104 => 45,  101 => 44,  98 => 41,  96 => 40,  94 => 39,  91 => 38,  88 => 35,  86 => 34,  83 => 33,  80 => 32,  77 => 31,  74 => 30,  72 => 29,  69 => 28,  67 => 27,  65 => 26,  63 => 25,  60 => 24,  58 => 23,  56 => 22,  54 => 21,  52 => 20,  50 => 19,  48 => 18,  46 => 17,  44 => 16,  41 => 14,  39 => 13,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Field/text.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Field\\text.html.twig");
    }
}
