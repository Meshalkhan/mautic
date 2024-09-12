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

/* @MauticForm/Field/freehtml.html.twig */
class __TwigTemplate_da2731735efd3a90c963ca209c89a8d9 extends Template
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
        $context["defaultInputClass"] = "freehtml";
        // line 2
        $context["containerType"] = (isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 2, $this->source); })());
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
        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 25, $this->source); })()), "type", [], "any", false, false, false, 25), ["checkboxgrp", "radiogrp", "textarea"])) {
            // line 26
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 26, $this->source); })()), ["value" => ((twig_get_attribute($this->env, $this->source,             // line 27
($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", false, false, false, 27), "")) : (""))]);
        }
        // line 30
        if (( !array_key_exists("ignoreId", $context) || (array_key_exists("ignoreId", $context) && twig_test_empty((isset($context["ignoreId"]) || array_key_exists("ignoreId", $context) ? $context["ignoreId"] : (function () { throw new RuntimeError('Variable "ignoreId" does not exist.', 30, $this->source); })()))))) {
            // line 31
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 31, $this->source); })()), ["id" => ((("mauticform_input" .             // line 32
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 32, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 32, $this->source); })()), "alias", [], "any", false, false, false, 32))]);
            // line 34
            echo "  ";
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 34, $this->source); })()), ["id" => ((("mauticform_label" .             // line 35
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 35, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 35, $this->source); })()), "alias", [], "any", false, false, false, 35)), "for" => ((("mauticform_input" .             // line 36
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 36, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 36, $this->source); })()), "alias", [], "any", false, false, false, 36))]);
        }
        // line 39
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 39), "placeholder", [], "any", true, true, false, 39) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 39, $this->source); })()), "properties", [], "any", false, false, false, 39), "placeholder", [], "any", false, false, false, 39)))) {
            // line 40
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 40, $this->source); })()), ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 41
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 41, $this->source); })()), "properties", [], "any", false, false, false, 41), "placeholder", [], "any", false, false, false, 41)]);
        }
        // line 44
        if ((array_key_exists("inForm", $context) && ((true == (isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 44, $this->source); })())) ||  !twig_test_empty((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 44, $this->source); })()))))) {
            // line 45
            echo "  ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 45, $this->source); })()), "type", [], "any", false, false, false, 45), ["button", "pagebreak"])) {
                // line 46
                echo "    ";
                $context["defaultInputFormClass"] = ((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 46, $this->source); })()) . " btn btn-default");
                // line 47
                echo "  ";
            }
            // line 48
            echo "
  ";
            // line 49
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 49, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 50
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 50)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 50), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 50, $this->source); })())])]);
            // line 52
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 52, $this->source); })()), ["disabled" => "disabled", "class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 54
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 54)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 54), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 54, $this->source); })()), (isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 54, $this->source); })())])]);
        } else {
            // line 57
            echo "  ";
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 57, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 58
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 58)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 58), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 58, $this->source); })())])]);
            // line 60
            echo "  ";
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 60, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 61
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 61), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 61, $this->source); })())])]);
        }
        // line 64
        $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 64, $this->source); })()), ["id" => ((("mauticform" . ((        // line 65
array_key_exists("formName", $context)) ? (_twig_default_filter((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 65, $this->source); })()), "")) : (""))) . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 65, $this->source); })())), "class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,         // line 66
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 66)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 66), [])) : ([])), ["mauticform-row", ("mauticform-" .         // line 68
(isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 68, $this->source); })())), ("mauticform-field-" .         // line 69
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 69, $this->source); })()))])]);
        // line 72
        if ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 72, $this->source); })()), "parent", [], "any", false, false, false, 72) && twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 72, $this->source); })()), "parent", [], "any", false, false, false, 72), [], "array", true, true, false, 72))) {
            // line 73
            echo "  ";
            $context["values"] = twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 73, $this->source); })()), "conditions", [], "any", false, false, false, 73), "values", [], "any", false, false, false, 73), "|");
            // line 75
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 75, $this->source); })()), "conditions", [], "any", false, false, false, 75), "any", [], "any", false, false, false, 75) != false) && ("notIn" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 75, $this->source); })()), "conditions", [], "any", false, false, false, 75), "expr", [], "any", false, false, false, 75)))) {
                // line 76
                $context["values"] = "*";
                // line 77
                echo "  ";
            }
            // line 78
            echo "
  ";
            // line 79
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 79, $this->source); })()), ["data-mautic-form-show-on" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 80
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 80, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 80, $this->source); })()), "parent", [], "any", false, false, false, 80), [], "array", false, false, false, 80), "alias", [], "any", false, false, false, 80) . ":") . (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 80, $this->source); })())), "data-mautic-form-expr" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 81
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 81, $this->source); })()), "conditions", [], "any", false, false, false, 81), "expr", [], "any", false, false, false, 81), "class" => twig_array_merge(twig_get_attribute($this->env, $this->source,             // line 82
(isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 82, $this->source); })()), "class", [], "any", false, false, false, 82), ["mauticform-field-hidden"])]);
        }
        // line 87
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "any", true, true, false, 87) && twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 87, $this->source); })()), "isRequired", [], "any", false, false, false, 87))) {
            // line 88
            echo "  ";
            $context["required"] = true;
            // line 89
            echo "  ";
            $context["validationMessage"] = twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 89, $this->source); })()), "validationMessage", [], "any", false, false, false, 89);
            // line 90
            echo "  ";
            if (twig_test_empty((isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 90, $this->source); })()))) {
                // line 91
                echo "        ";
                $context["validationMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.generic.required", [], "validators", ((array_key_exists("language", $context)) ? (_twig_default_filter((isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 91, $this->source); })()), null)) : (null)));
                // line 92
                echo "  ";
            }
            // line 93
            echo "  ";
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 93, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 94
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 94)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 94), [])) : ([])), ["mauticform-required"]), "data-validate" => twig_get_attribute($this->env, $this->source,             // line 97
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 97, $this->source); })()), "alias", [], "any", false, false, false, 97), "data-validation-type" => twig_get_attribute($this->env, $this->source,             // line 98
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 98, $this->source); })()), "type", [], "any", false, false, false, 98)]);
            // line 100
            echo "  ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 100, $this->source); })()), "properties", [], "any", false, false, false, 100), "multiple", [], "any", false, false, false, 100))) {
                // line 101
                echo "    ";
                $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 101, $this->source); })()), ["data-validate-multiple" => "true"]);
                // line 104
                echo "  ";
            }
        } elseif ((        // line 105
array_key_exists("required", $context) && (true == (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 105, $this->source); })())))) {
            // line 106
            echo "  ";
            // line 107
            echo "  ";
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 107, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 108
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 108)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 108), [])) : ([])), ["mauticform-required"])]);
        }
        // line 113
        if ((((array_key_exists("list", $context) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 113), "syncList", [], "any", true, true, false, 113)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 113), "list", [], "any", true, true, false, 113)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 113), "optionList", [], "any", true, true, false, 113))) {
            // line 114
            echo "  ";
            $context["parseList"] = [];
            // line 115
            echo "  ";
            $context["isBooleanList"] = false;
            // line 116
            echo "  ";
            $context["contactFields"] = ((array_key_exists("contactFields", $context)) ? (_twig_default_filter((isset($context["contactFields"]) || array_key_exists("contactFields", $context) ? $context["contactFields"] : (function () { throw new RuntimeError('Variable "contactFields" does not exist.', 116, $this->source); })()), [])) : ([]));
            // line 117
            echo "  ";
            $context["companyFields"] = ((array_key_exists("companyFields", $context)) ? (_twig_default_filter((isset($context["companyFields"]) || array_key_exists("companyFields", $context) ? $context["companyFields"] : (function () { throw new RuntimeError('Variable "companyFields" does not exist.', 117, $this->source); })()), [])) : ([]));
            // line 118
            echo "  ";
            $context["formFields"] = twig_array_merge((isset($context["contactFields"]) || array_key_exists("contactFields", $context) ? $context["contactFields"] : (function () { throw new RuntimeError('Variable "contactFields" does not exist.', 118, $this->source); })()), (isset($context["companyFields"]) || array_key_exists("companyFields", $context) ? $context["companyFields"] : (function () { throw new RuntimeError('Variable "companyFields" does not exist.', 118, $this->source); })()));
            // line 119
            echo "
  ";
            // line 120
            if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 121
($context["field"] ?? null), "properties", [], "any", false, true, false, 121), "syncList", [], "any", true, true, false, 121) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 121, $this->source); })()), "properties", [], "any", false, false, false, 121), "syncList", [], "any", false, false, false, 121))) && twig_get_attribute($this->env, $this->source,             // line 122
($context["field"] ?? null), "leadField", [], "any", true, true, false, 122)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 122, $this->source); })()), "leadField", [], "any", false, false, false, 122))) && twig_get_attribute($this->env, $this->source,             // line 123
($context["formFields"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 123, $this->source); })()), "leadField", [], "any", false, false, false, 123), [], "array", true, true, false, 123))) {
                // line 125
                echo "    ";
                $context["leadFieldType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 125, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 125, $this->source); })()), "leadField", [], "any", false, false, false, 125), [], "array", false, false, false, 125), "type", [], "any", false, false, false, 125);
                // line 126
                echo "    ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 126, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 126, $this->source); })()), "leadField", [], "any", false, false, false, 126), [], "array", false, false, false, 126), "properties", [], "any", false, false, false, 126), "list", [], "any", false, false, false, 126))) {
                    // line 127
                    echo "      ";
                    $context["parseList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 127, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 127, $this->source); })()), "leadField", [], "any", false, false, false, 127), [], "array", false, false, false, 127), "properties", [], "any", false, false, false, 127), "list", [], "any", false, false, false, 127);
                    // line 128
                    echo "    ";
                } elseif (("boolean" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 128, $this->source); })()))) {
                    // line 129
                    echo "      ";
                    $context["parseList"] = ["0" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 130
(isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 130, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 130, $this->source); })()), "leadField", [], "any", false, false, false, 130), [], "array", false, false, false, 130), "properties", [], "any", false, false, false, 130), "no", [], "any", false, false, false, 130), "1" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 131
(isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 131, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 131, $this->source); })()), "leadField", [], "any", false, false, false, 131), [], "array", false, false, false, 131), "properties", [], "any", false, false, false, 131), "yes", [], "any", false, false, false, 131)];
                    // line 133
                    echo "    ";
                } elseif (("country" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 133, $this->source); })()))) {
                    // line 134
                    echo "      ";
                    $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getCountryChoices();
                    // line 135
                    echo "    ";
                } elseif (("region" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 135, $this->source); })()))) {
                    // line 136
                    echo "      ";
                    $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getRegionChoices();
                    // line 137
                    echo "    ";
                } elseif (("timezone" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 137, $this->source); })()))) {
                    // line 138
                    echo "      ";
                    $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getTimezonesChoices();
                    // line 139
                    echo "    ";
                } elseif (("locale" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 139, $this->source); })()))) {
                    // line 140
                    echo "      ";
                    $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getLocaleChoices();
                    // line 141
                    echo "    ";
                }
                // line 142
                echo "  ";
            }
            // line 143
            echo "
  ";
            // line 144
            if (twig_test_empty((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 144, $this->source); })()))) {
                // line 145
                echo "    ";
                if (array_key_exists("list", $context)) {
                    // line 146
                    echo "      ";
                    $context["parseList"] = (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 146, $this->source); })());
                    // line 147
                    echo "    ";
                } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 147, $this->source); })()), "properties", [], "any", false, false, false, 147), "optionlist", [], "any", false, false, false, 147))) {
                    // line 148
                    echo "      ";
                    $context["parseList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 148, $this->source); })()), "properties", [], "any", false, false, false, 148), "optionlist", [], "any", false, false, false, 148);
                    // line 149
                    echo "    ";
                } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 149, $this->source); })()), "properties", [], "any", false, false, false, 149), "list", [], "any", false, false, false, 149))) {
                    // line 150
                    echo "      ";
                    $context["parseList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 150, $this->source); })()), "properties", [], "any", false, false, false, 150), "list", [], "any", false, false, false, 150);
                    // line 151
                    echo "    ";
                }
                // line 152
                echo "
    ";
                // line 153
                if (twig_get_attribute($this->env, $this->source, ($context["parseList"] ?? null), "list", [], "any", true, true, false, 153)) {
                    // line 154
                    echo "      ";
                    $context["parseList"] = twig_get_attribute($this->env, $this->source, (isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 154, $this->source); })()), "list", [], "any", false, false, false, 154);
                    // line 155
                    echo "    ";
                }
                // line 156
                echo "  ";
            }
            // line 157
            echo "
  ";
            // line 158
            if (((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 158, $this->source); })()), "leadField", [], "any", false, false, false, 158) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 158, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 158, $this->source); })()), "leadField", [], "any", false, false, false, 158), [], "array", false, false, false, 158), "type", [], "any", false, false, false, 158))) && twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 158, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 158, $this->source); })()), "leadField", [], "any", false, false, false, 158), [], "array", false, false, false, 158), "type", [], "any", false, false, false, 158), ["datetime", "date"]))) {
                // line 159
                echo "    ";
                $context["tempLeadFieldType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 159, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 159, $this->source); })()), "leadField", [], "any", false, false, false, 159), [], "array", false, false, false, 159), "type", [], "any", false, false, false, 159);
                // line 160
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 160, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["aTemp"]) {
                    // line 161
                    echo "      ";
                    $context["date"] = ((("datetime" == (isset($context["tempLeadFieldType"]) || array_key_exists("tempLeadFieldType", $context) ? $context["tempLeadFieldType"] : (function () { throw new RuntimeError('Variable "tempLeadFieldType" does not exist.', 161, $this->source); })()))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, $context["aTemp"], "label", [], "any", false, false, false, 161))) : ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, $context["aTemp"], "label", [], "any", false, false, false, 161))));
                    // line 162
                    echo "      ";
                    if ((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 162, $this->source); })())) {
                        // line 163
                        echo "          ";
                        $context["parseList"] = twig_array_merge((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 163, $this->source); })()), [                        // line 164
$context["key"] => twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 164, $this->source); })()), $context["key"], [], "array", false, false, false, 164), ["label" =>                         // line 165
(isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 165, $this->source); })())])]);
                        // line 168
                        echo "      ";
                    }
                    // line 169
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['aTemp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 170
                echo "  ";
            }
            // line 171
            echo "
  ";
            // line 172
            if ((isset($context["isBooleanList"]) || array_key_exists("isBooleanList", $context) ? $context["isBooleanList"] : (function () { throw new RuntimeError('Variable "isBooleanList" does not exist.', 172, $this->source); })())) {
                // line 173
                echo "    ";
                $context["list"] = Mautic\FormBundle\Helper\FormFieldHelper::parseBooleanList((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 173, $this->source); })()));
                // line 174
                echo "  ";
            } else {
                // line 175
                echo "    ";
                $context["list"] = Mautic\FormBundle\Helper\FormFieldHelper::parseList((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 175, $this->source); })()));
                // line 176
                echo "  ";
            }
            // line 177
            echo "
  ";
            // line 178
            $context["firstListValue"] = twig_first($this->env, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 178, $this->source); })()));
        }
        // line 181
        echo "
<div ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 182, $this->source); })()));
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
        // line 183
        if (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 183, $this->source); })()), "showLabel", [], "any", false, false, false, 183)) {
            echo "<h3 ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 183, $this->source); })()));
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 183, $this->source); })()), "label", [], "any", false, false, false, 183), "html", null, true);
            echo "</h3>";
        }
        // line 184
        echo "  <div ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 184, $this->source); })()));
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
        // line 185
        if ((isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 185, $this->source); })())) {
            // line 186
            echo "      ";
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->showScriptTags(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 186), "text", [], "any", true, true, false, 186)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 186), "text", [], "any", false, false, false, 186), "")) : ("")));
            echo "
    ";
        } else {
            // line 188
            echo "      ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 188, $this->source); })()), "properties", [], "any", false, false, false, 188), "text", [], "any", false, false, false, 188);
            echo "
    ";
        }
        // line 190
        echo "  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Field/freehtml.html.twig";
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
        return array (  457 => 190,  451 => 188,  445 => 186,  443 => 185,  424 => 184,  402 => 183,  384 => 182,  381 => 181,  378 => 178,  375 => 177,  372 => 176,  369 => 175,  366 => 174,  363 => 173,  361 => 172,  358 => 171,  355 => 170,  349 => 169,  346 => 168,  344 => 165,  343 => 164,  341 => 163,  338 => 162,  335 => 161,  330 => 160,  327 => 159,  325 => 158,  322 => 157,  319 => 156,  316 => 155,  313 => 154,  311 => 153,  308 => 152,  305 => 151,  302 => 150,  299 => 149,  296 => 148,  293 => 147,  290 => 146,  287 => 145,  285 => 144,  282 => 143,  279 => 142,  276 => 141,  273 => 140,  270 => 139,  267 => 138,  264 => 137,  261 => 136,  258 => 135,  255 => 134,  252 => 133,  250 => 131,  249 => 130,  247 => 129,  244 => 128,  241 => 127,  238 => 126,  235 => 125,  233 => 123,  232 => 122,  231 => 121,  230 => 120,  227 => 119,  224 => 118,  221 => 117,  218 => 116,  215 => 115,  212 => 114,  210 => 113,  207 => 108,  205 => 107,  203 => 106,  201 => 105,  198 => 104,  195 => 101,  192 => 100,  190 => 98,  189 => 97,  188 => 94,  186 => 93,  183 => 92,  180 => 91,  177 => 90,  174 => 89,  171 => 88,  169 => 87,  166 => 82,  165 => 81,  164 => 80,  163 => 79,  160 => 78,  157 => 77,  155 => 76,  153 => 75,  150 => 73,  148 => 72,  146 => 69,  145 => 68,  144 => 66,  143 => 65,  142 => 64,  139 => 61,  137 => 60,  135 => 58,  133 => 57,  130 => 54,  128 => 52,  126 => 50,  125 => 49,  122 => 48,  119 => 47,  116 => 46,  113 => 45,  111 => 44,  108 => 41,  106 => 40,  104 => 39,  101 => 36,  100 => 35,  98 => 34,  96 => 32,  94 => 31,  92 => 30,  89 => 27,  87 => 26,  85 => 25,  82 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  66 => 16,  64 => 15,  62 => 14,  60 => 13,  58 => 12,  56 => 11,  54 => 10,  52 => 9,  50 => 8,  48 => 7,  46 => 6,  44 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Field/freehtml.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Field\\freehtml.html.twig");
    }
}
