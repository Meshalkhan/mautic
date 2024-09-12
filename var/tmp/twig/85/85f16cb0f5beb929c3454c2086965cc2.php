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

/* @MauticForm/Field/button.html.twig */
class __TwigTemplate_72f0591f469798e930df368b3cd8ff4f extends Template
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
        $context["defaultInputClass"] = "button";
        // line 2
        $context["containerType"] = "button-wrapper";
        // line 3
        echo "
";
        // line 5
        $context["defaultInputFormClass"] = ((array_key_exists("defaultInputFormClass", $context)) ? (_twig_default_filter((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 5, $this->source); })()), "")) : (""));
        // line 6
        $context["defaultLabelClass"] = ((array_key_exists("defaultLabelClass", $context)) ? (_twig_default_filter((isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 6, $this->source); })()), "label")) : ("label"));
        // line 7
        $context["formName"] = ((array_key_exists("formName", $context)) ? (_twig_default_filter((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 7, $this->source); })()), "")) : (""));
        // line 8
        $context["defaultInputClass"] = ("mauticform-" . (isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 8, $this->source); })()));
        // line 9
        $context["defaultLabelClass"] = ("mauticform-" . (isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 9, $this->source); })()));
        // line 10
        $context["containerClass"] = ((array_key_exists("containerClass", $context)) ? (_twig_default_filter((isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 10, $this->source); })()), (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 10, $this->source); })()))) : ((isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 10, $this->source); })())));
        // line 11
        $context["order"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", false, false, false, 11), 0)) : (0));
        // line 12
        $context["validationMessage"] = "";
        // line 13
        $context["inputAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", false, false, false, 13), "")) : ("")));
        // line 14
        $context["labelAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", false, false, false, 14), "")) : ("")));
        // line 15
        $context["containerAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", false, false, false, 15), "")) : ("")));
        // line 16
        if (( !array_key_exists("ignoreName", $context) || (array_key_exists("ignoreName", $context) && twig_test_empty((isset($context["ignoreName"]) || array_key_exists("ignoreName", $context) ? $context["ignoreName"] : (function () { throw new RuntimeError('Variable "ignoreName" does not exist.', 16, $this->source); })()))))) {
            // line 17
            echo "  ";
            $context["inputName"] = (("mauticform[" . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 17, $this->source); })()), "alias", [], "any", false, false, false, 17)) . "]");
            // line 18
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 18), "multiple", [], "any", true, true, false, 18)) {
                // line 19
                echo "    ";
                $context["inputName"] = ((isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 19, $this->source); })()) . "[]");
                // line 20
                echo "  ";
            }
            // line 21
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 21, $this->source); })()), ["name" =>             // line 22
(isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 22, $this->source); })())]);
        }
        // line 25
        echo "
";
        // line 26
        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 26, $this->source); })()), "type", [], "any", false, false, false, 26), ["checkboxgrp", "radiogrp", "textarea"])) {
            // line 27
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 27, $this->source); })()), ["value" => ((twig_get_attribute($this->env, $this->source,             // line 28
($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", false, false, false, 28), "")) : (""))]);
        }
        // line 31
        echo "
";
        // line 32
        if (( !array_key_exists("ignoreId", $context) || (array_key_exists("ignoreId", $context) && twig_test_empty((isset($context["ignoreId"]) || array_key_exists("ignoreId", $context) ? $context["ignoreId"] : (function () { throw new RuntimeError('Variable "ignoreId" does not exist.', 32, $this->source); })()))))) {
            // line 33
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 33, $this->source); })()), ["id" => ((("mauticform_input" .             // line 34
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 34, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 34, $this->source); })()), "alias", [], "any", false, false, false, 34))]);
            // line 36
            echo "  ";
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 36, $this->source); })()), ["id" => ((("mauticform_label" .             // line 37
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 37, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 37, $this->source); })()), "alias", [], "any", false, false, false, 37)), "for" => ((("mauticform_input" .             // line 38
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 38, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 38, $this->source); })()), "alias", [], "any", false, false, false, 38))]);
        }
        // line 41
        echo "
";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 42), "placeholder", [], "any", true, true, false, 42) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 42, $this->source); })()), "properties", [], "any", false, false, false, 42), "placeholder", [], "any", false, false, false, 42)))) {
            // line 43
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 43, $this->source); })()), ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 44
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 44, $this->source); })()), "properties", [], "any", false, false, false, 44), "placeholder", [], "any", false, false, false, 44)]);
        }
        // line 47
        if ((array_key_exists("inForm", $context) && ((true == (isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 47, $this->source); })())) ||  !twig_test_empty((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 47, $this->source); })()))))) {
            // line 48
            echo "  ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 48, $this->source); })()), "type", [], "any", false, false, false, 48), ["button", "pagebreak"])) {
                // line 49
                echo "    ";
                $context["defaultInputFormClass"] = ((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 49, $this->source); })()) . " btn btn-default");
                // line 50
                echo "  ";
            }
            // line 51
            echo "
  ";
            // line 52
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 52, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 53
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 53)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 53), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 53, $this->source); })())])]);
            // line 55
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 55, $this->source); })()), ["disabled" => "disabled", "class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 57
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 57)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 57), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 57, $this->source); })()), (isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 57, $this->source); })())])]);
        } else {
            // line 60
            echo "  ";
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 60, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 61
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 61), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 61, $this->source); })())])]);
            // line 63
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 63, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 64
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 64)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 64), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 64, $this->source); })())])]);
        }
        // line 67
        $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 67, $this->source); })()), ["id" => ((("mauticform" . ((        // line 68
array_key_exists("formName", $context)) ? (_twig_default_filter((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 68, $this->source); })()), "")) : (""))) . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 68, $this->source); })())), "class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,         // line 69
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 69)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 69), [])) : ([])), ["mauticform-row", ("mauticform-" .         // line 71
(isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 71, $this->source); })())), ("mauticform-field-" .         // line 72
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 72, $this->source); })()))])]);
        // line 75
        if ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 75, $this->source); })()), "parent", [], "any", false, false, false, 75) && twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 75, $this->source); })()), "parent", [], "any", false, false, false, 75), [], "array", true, true, false, 75))) {
            // line 76
            echo "  ";
            $context["values"] = twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 76, $this->source); })()), "conditions", [], "any", false, false, false, 76), "values", [], "any", false, false, false, 76), "|");
            // line 78
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 78, $this->source); })()), "conditions", [], "any", false, false, false, 78), "any", [], "any", false, false, false, 78) != false) && ("notIn" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 78, $this->source); })()), "conditions", [], "any", false, false, false, 78), "expr", [], "any", false, false, false, 78)))) {
                // line 79
                $context["values"] = "*";
                // line 80
                echo "  ";
            }
            // line 81
            echo "
  ";
            // line 82
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 82, $this->source); })()), ["data-mautic-form-show-on" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 83
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 83, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 83, $this->source); })()), "parent", [], "any", false, false, false, 83), [], "array", false, false, false, 83), "alias", [], "any", false, false, false, 83) . ":") . (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 83, $this->source); })())), "data-mautic-form-expr" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 84
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 84, $this->source); })()), "conditions", [], "any", false, false, false, 84), "expr", [], "any", false, false, false, 84), "class" => twig_array_merge(twig_get_attribute($this->env, $this->source,             // line 85
(isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 85, $this->source); })()), "class", [], "any", false, false, false, 85), ["mauticform-field-hidden"])]);
        }
        // line 90
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "any", true, true, false, 90) && (true == twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 90, $this->source); })()), "isRequired", [], "any", false, false, false, 90)))) {
            // line 91
            echo "  ";
            $context["required"] = true;
            // line 92
            echo "  ";
            $context["validationMessage"] = twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 92, $this->source); })()), "validationMessage", [], "any", false, false, false, 92);
            // line 93
            echo "  ";
            if (twig_test_empty((isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 93, $this->source); })()))) {
                // line 94
                echo "        ";
                $context["validationMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.generic.required", [], "validators", ((array_key_exists("language", $context)) ? (_twig_default_filter((isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 94, $this->source); })()), null)) : (null)));
                // line 95
                echo "  ";
            }
            // line 96
            echo "  ";
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 96, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 97
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 97)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 97), [])) : ([])), ["mauticform-required"]), "data-validate" => twig_get_attribute($this->env, $this->source,             // line 100
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 100, $this->source); })()), "alias", [], "any", false, false, false, 100), "data-validation-type" => twig_get_attribute($this->env, $this->source,             // line 101
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 101, $this->source); })()), "type", [], "any", false, false, false, 101)]);
            // line 103
            echo "  ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 103, $this->source); })()), "properties", [], "any", false, false, false, 103), "multiple", [], "any", false, false, false, 103))) {
                // line 104
                echo "    ";
                $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 104, $this->source); })()), ["data-validate-multiple" => "true"]);
                // line 107
                echo "  ";
            }
        } elseif ((        // line 108
array_key_exists("required", $context) && (true == (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 108, $this->source); })())))) {
            // line 109
            echo "  ";
            // line 110
            echo "  ";
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 110, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 111
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 111)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 111), [])) : ([])), ["mauticform-required"])]);
        }
        // line 117
        echo "
";
        // line 118
        $context["buttonType"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 118), "type", [], "any", true, true, false, 118)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 118), "type", [], "any", false, false, false, 118), "submit")) : ("submit"));
        // line 119
        $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 119, $this->source); })()), ["type" =>         // line 120
(isset($context["buttonType"]) || array_key_exists("buttonType", $context) ? $context["buttonType"] : (function () { throw new RuntimeError('Variable "buttonType" does not exist.', 120, $this->source); })()), "name" => (("mauticform[" . twig_get_attribute($this->env, $this->source,         // line 121
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 121, $this->source); })()), "alias", [], "any", false, false, false, 121)) . "]"), "value" => "1"]);
        // line 124
        echo "<div ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 124, $this->source); })()));
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
  <button ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 125, $this->source); })()));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 125, $this->source); })()), "label", [], "any", false, false, false, 125), "html", null, true);
        echo "</button>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Field/button.html.twig";
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
        return array (  247 => 125,  228 => 124,  226 => 121,  225 => 120,  224 => 119,  222 => 118,  219 => 117,  216 => 111,  214 => 110,  212 => 109,  210 => 108,  207 => 107,  204 => 104,  201 => 103,  199 => 101,  198 => 100,  197 => 97,  195 => 96,  192 => 95,  189 => 94,  186 => 93,  183 => 92,  180 => 91,  178 => 90,  175 => 85,  174 => 84,  173 => 83,  172 => 82,  169 => 81,  166 => 80,  164 => 79,  162 => 78,  159 => 76,  157 => 75,  155 => 72,  154 => 71,  153 => 69,  152 => 68,  151 => 67,  148 => 64,  146 => 63,  144 => 61,  142 => 60,  139 => 57,  137 => 55,  135 => 53,  134 => 52,  131 => 51,  128 => 50,  125 => 49,  122 => 48,  120 => 47,  117 => 44,  115 => 43,  113 => 42,  110 => 41,  107 => 38,  106 => 37,  104 => 36,  102 => 34,  100 => 33,  98 => 32,  95 => 31,  92 => 28,  90 => 27,  88 => 26,  85 => 25,  82 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  66 => 16,  64 => 15,  62 => 14,  60 => 13,  58 => 12,  56 => 11,  54 => 10,  52 => 9,  50 => 8,  48 => 7,  46 => 6,  44 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Field/button.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Field\\button.html.twig");
    }
}
