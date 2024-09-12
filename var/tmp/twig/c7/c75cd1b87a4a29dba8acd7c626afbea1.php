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

/* @MauticForm/Field/select.html.twig */
class __TwigTemplate_f2f3571436539cfcb1a5df2f371ce81c extends Template
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
        // line 5
        $context["defaultInputFormClass"] = "not-chosen";
        // line 6
        $context["defaultInputClass"] = "selectbox";
        // line 7
        $context["containerType"] = "select";
        // line 10
        $context["defaultInputFormClass"] = ((array_key_exists("defaultInputFormClass", $context)) ? (_twig_default_filter((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 10, $this->source); })()), "")) : (""));
        // line 11
        $context["defaultLabelClass"] = ((array_key_exists("defaultLabelClass", $context)) ? (_twig_default_filter((isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 11, $this->source); })()), "label")) : ("label"));
        // line 12
        $context["formName"] = ((array_key_exists("formName", $context)) ? (_twig_default_filter((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 12, $this->source); })()), "")) : (""));
        // line 13
        $context["defaultInputClass"] = ("mauticform-" . (isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 13, $this->source); })()));
        // line 14
        $context["defaultLabelClass"] = ("mauticform-" . (isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 14, $this->source); })()));
        // line 15
        $context["containerClass"] = ((array_key_exists("containerClass", $context)) ? (_twig_default_filter((isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 15, $this->source); })()), (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 15, $this->source); })()))) : ((isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 15, $this->source); })())));
        // line 16
        $context["order"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", false, false, false, 16), 0)) : (0));
        // line 17
        $context["validationMessage"] = "";
        // line 19
        $context["inputAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", false, false, false, 19), "")) : ("")));
        // line 20
        $context["labelAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", false, false, false, 20), "")) : ("")));
        // line 21
        $context["containerAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", false, false, false, 21), "")) : ("")));
        // line 23
        if (( !array_key_exists("ignoreName", $context) || (array_key_exists("ignoreName", $context) && twig_test_empty((isset($context["ignoreName"]) || array_key_exists("ignoreName", $context) ? $context["ignoreName"] : (function () { throw new RuntimeError('Variable "ignoreName" does not exist.', 23, $this->source); })()))))) {
            // line 24
            $context["inputName"] = (("mauticform[" . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 24, $this->source); })()), "alias", [], "any", false, false, false, 24)) . "]");
            // line 25
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 25), "multiple", [], "any", true, true, false, 25) && (true == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 25, $this->source); })()), "properties", [], "any", false, false, false, 25), "multiple", [], "any", false, false, false, 25)))) {
                // line 26
                $context["inputName"] = ((isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 26, $this->source); })()) . "[]");
            }
            // line 28
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 28, $this->source); })()), ["name" =>             // line 29
(isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 29, $this->source); })())]);
        }
        // line 33
        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 33, $this->source); })()), "type", [], "any", false, false, false, 33), ["checkboxgrp", "radiogrp", "textarea"])) {
            // line 34
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 34, $this->source); })()), ["value" => ((twig_get_attribute($this->env, $this->source,             // line 35
($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", false, false, false, 35), "")) : (""))]);
        }
        // line 39
        if (( !array_key_exists("ignoreId", $context) || (array_key_exists("ignoreId", $context) && twig_test_empty((isset($context["ignoreId"]) || array_key_exists("ignoreId", $context) ? $context["ignoreId"] : (function () { throw new RuntimeError('Variable "ignoreId" does not exist.', 39, $this->source); })()))))) {
            // line 40
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 40, $this->source); })()), ["id" => ((("mauticform_input" .             // line 41
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 41, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 41, $this->source); })()), "alias", [], "any", false, false, false, 41))]);
            // line 43
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 43, $this->source); })()), ["id" => ((("mauticform_label" .             // line 44
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 44, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 44, $this->source); })()), "alias", [], "any", false, false, false, 44)), "for" => ((("mauticform_input" .             // line 45
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 45, $this->source); })())) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 45, $this->source); })()), "alias", [], "any", false, false, false, 45))]);
        }
        // line 49
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 49), "placeholder", [], "any", true, true, false, 49) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 49, $this->source); })()), "properties", [], "any", false, false, false, 49), "placeholder", [], "any", false, false, false, 49)))) {
            // line 50
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 50, $this->source); })()), ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 51
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 51, $this->source); })()), "properties", [], "any", false, false, false, 51), "placeholder", [], "any", false, false, false, 51)]);
        }
        // line 55
        if ((array_key_exists("inForm", $context) && ((true == (isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 55, $this->source); })())) ||  !twig_test_empty((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 55, $this->source); })()))))) {
            // line 56
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 56, $this->source); })()), "type", [], "any", false, false, false, 56), ["button", "pagebreak"])) {
                // line 57
                $context["defaultInputFormClass"] = ((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 57, $this->source); })()) . " btn btn-default");
            }
            // line 60
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 60, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 61
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 61), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 61, $this->source); })())])]);
            // line 63
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 63, $this->source); })()), ["disabled" => "disabled", "class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 65
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 65)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 65), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 65, $this->source); })()), (isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 65, $this->source); })())])]);
        } else {
            // line 68
            $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 68, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 69
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 69)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 69), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 69, $this->source); })())])]);
            // line 71
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 71, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 72
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 72)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 72), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 72, $this->source); })())])]);
        }
        // line 76
        $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 76, $this->source); })()), ["id" => ((("mauticform" .         // line 77
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 77, $this->source); })())) . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 77, $this->source); })())), "class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,         // line 78
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 78), [])) : ([])), ["mauticform-row", ("mauticform-" .         // line 80
(isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 80, $this->source); })())), ("mauticform-field-" .         // line 81
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 81, $this->source); })()))])]);
        // line 84
        if ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 84, $this->source); })()), "parent", [], "any", false, false, false, 84) && twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 84, $this->source); })()), "parent", [], "any", false, false, false, 84), [], "array", true, true, false, 84))) {
            // line 85
            $context["values"] = twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 85, $this->source); })()), "conditions", [], "any", false, false, false, 85), "values", [], "any", false, false, false, 85), "|");
            // line 87
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 87, $this->source); })()), "conditions", [], "any", false, false, false, 87), "any", [], "any", false, false, false, 87) != false) && ("notIn" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 87, $this->source); })()), "conditions", [], "any", false, false, false, 87), "expr", [], "any", false, false, false, 87)))) {
                // line 88
                $context["values"] = "*";
            }
            // line 91
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 91, $this->source); })()), ["data-mautic-form-show-on" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 92
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 92, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 92, $this->source); })()), "parent", [], "any", false, false, false, 92), [], "array", false, false, false, 92), "alias", [], "any", false, false, false, 92) . ":") . (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 92, $this->source); })())), "data-mautic-form-expr" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 93
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 93, $this->source); })()), "conditions", [], "any", false, false, false, 93), "expr", [], "any", false, false, false, 93), "class" => twig_array_merge(twig_get_attribute($this->env, $this->source,             // line 94
(isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 94, $this->source); })()), "class", [], "any", false, false, false, 94), ["mauticform-field-hidden"])]);
        }
        // line 100
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "any", true, true, false, 100) && twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 100, $this->source); })()), "isRequired", [], "any", false, false, false, 100))) {
            // line 101
            $context["required"] = true;
            // line 102
            $context["validationMessage"] = twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 102, $this->source); })()), "validationMessage", [], "any", false, false, false, 102);
            // line 103
            if (twig_test_empty((isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 103, $this->source); })()))) {
                // line 104
                $context["validationMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.generic.required", [], "validators", ((array_key_exists("language", $context)) ? (_twig_default_filter((isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 104, $this->source); })()), null)) : (null)));
            }
            // line 106
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 106, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 107
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 107)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 107), [])) : ([])), ["mauticform-required"]), "data-validate" => twig_get_attribute($this->env, $this->source,             // line 110
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 110, $this->source); })()), "alias", [], "any", false, false, false, 110), "data-validation-type" => twig_get_attribute($this->env, $this->source,             // line 111
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 111, $this->source); })()), "type", [], "any", false, false, false, 111)]);
            // line 113
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 113), "multiple", [], "any", true, true, false, 113) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 113, $this->source); })()), "properties", [], "any", false, false, false, 113), "multiple", [], "any", false, false, false, 113) != false))) {
                // line 114
                $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 114, $this->source); })()), ["data-validate-multiple" => "true"]);
            }
        } elseif ((        // line 118
array_key_exists("required", $context) && (true == (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 118, $this->source); })())))) {
            // line 120
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 120, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 121
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 121)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 121), [])) : ([])), ["mauticform-required"])]);
        }
        // line 128
        if ((((array_key_exists("list", $context) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 128), "syncList", [], "any", true, true, false, 128)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 128), "list", [], "any", true, true, false, 128)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 128), "optionList", [], "any", true, true, false, 128))) {
            // line 129
            $context["parseList"] = [];
            // line 130
            $context["isBooleanList"] = false;
            // line 132
            if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 133
($context["field"] ?? null), "properties", [], "any", false, true, false, 133), "syncList", [], "any", true, true, false, 133) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 133, $this->source); })()), "properties", [], "any", false, false, false, 133), "syncList", [], "any", false, false, false, 133))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 134
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 134, $this->source); })()), "mappedField", [], "any", false, false, false, 134))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 135
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 135, $this->source); })()), "mappedObject", [], "any", false, false, false, 135))) && twig_get_attribute($this->env, $this->source,             // line 136
($context["mappedFields"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 136, $this->source); })()), "mappedObject", [], "any", false, false, false, 136), [], "array", true, true, false, 136))) {
                // line 139
                echo "    ";
                $context["fieldCollection"] = twig_get_attribute($this->env, $this->source, (isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 139, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 139, $this->source); })()), "mappedObject", [], "any", false, false, false, 139), [], "array", false, false, false, 139);
                // line 140
                echo "    ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["fieldCollection"]) || array_key_exists("fieldCollection", $context) ? $context["fieldCollection"] : (function () { throw new RuntimeError('Variable "fieldCollection" does not exist.', 140, $this->source); })()), "getFieldByKey", [twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 140, $this->source); })()), "mappedField", [], "any", false, false, false, 140), false], "method", false, false, false, 140))) {
                    // line 141
                    echo "      ";
                    $context["mappedField"] = twig_get_attribute($this->env, $this->source, (isset($context["fieldCollection"]) || array_key_exists("fieldCollection", $context) ? $context["fieldCollection"] : (function () { throw new RuntimeError('Variable "fieldCollection" does not exist.', 141, $this->source); })()), "getFieldByKey", [twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 141, $this->source); })()), "mappedField", [], "any", false, false, false, 141)], "method", false, false, false, 141);
                    // line 142
                    echo "      ";
                    $context["mappedFieldType"] = twig_get_attribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 142, $this->source); })()), "type", [], "any", false, false, false, 142);
                    // line 144
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mappedField"] ?? null), "properties", [], "any", false, true, false, 144), "list", [], "any", true, true, false, 144) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 144, $this->source); })()), "properties", [], "any", false, false, false, 144), "list", [], "any", false, false, false, 144)))) {
                        // line 145
                        $context["parseList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 145, $this->source); })()), "properties", [], "any", false, false, false, 145), "list", [], "any", false, false, false, 145);
                    } elseif (("boolean" ==                     // line 146
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 146, $this->source); })()))) {
                        // line 147
                        $context["parseList"] = ["0" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 148
(isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 148, $this->source); })()), "properties", [], "any", false, false, false, 148), "no", [], "any", false, false, false, 148), "1" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 149
(isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 149, $this->source); })()), "properties", [], "any", false, false, false, 149), "yes", [], "any", false, false, false, 149)];
                    } elseif (("country" ==                     // line 151
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 151, $this->source); })()))) {
                        // line 152
                        $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getCountryChoices();
                    } elseif (("region" ==                     // line 153
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 153, $this->source); })()))) {
                        // line 154
                        $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getRegionChoices();
                    } elseif (("timezone" ==                     // line 155
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 155, $this->source); })()))) {
                        // line 156
                        $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getTimezonesChoices();
                    } elseif (("locale" ==                     // line 157
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 157, $this->source); })()))) {
                        // line 158
                        $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getLocaleChoices();
                    }
                }
            }
            // line 163
            if (twig_test_empty((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 163, $this->source); })()))) {
                // line 164
                if (array_key_exists("list", $context)) {
                    // line 165
                    $context["parseList"] = (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 165, $this->source); })());
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 166
($context["field"] ?? null), "properties", [], "any", false, true, false, 166), "optionList", [], "any", true, true, false, 166) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 166, $this->source); })()), "properties", [], "any", false, false, false, 166), "optionList", [], "any", false, false, false, 166)))) {
                    // line 167
                    $context["parseList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 167, $this->source); })()), "properties", [], "any", false, false, false, 167), "optionList", [], "any", false, false, false, 167);
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 168
($context["field"] ?? null), "properties", [], "any", false, true, false, 168), "list", [], "any", true, true, false, 168) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 168, $this->source); })()), "properties", [], "any", false, false, false, 168), "list", [], "any", false, false, false, 168)))) {
                    // line 169
                    $context["parseList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 169, $this->source); })()), "properties", [], "any", false, false, false, 169), "list", [], "any", false, false, false, 169);
                }
                // line 172
                if (twig_get_attribute($this->env, $this->source, ($context["parseList"] ?? null), "list", [], "any", true, true, false, 172)) {
                    // line 173
                    $context["parseList"] = twig_get_attribute($this->env, $this->source, (isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 173, $this->source); })()), "list", [], "any", false, false, false, 173);
                }
            }
            // line 177
            if ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 177, $this->source); })()), "mappedField", [], "any", false, false, false, 177) && twig_get_attribute($this->env, $this->source, ($context["mappedFields"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 177, $this->source); })()), "mappedObject", [], "any", false, false, false, 177), [], "array", true, true, false, 177))) {
                // line 179
                echo "    ";
                $context["fieldCollection"] = twig_get_attribute($this->env, $this->source, (isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 179, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 179, $this->source); })()), "mappedObject", [], "any", false, false, false, 179), [], "array", false, false, false, 179);
                // line 180
                echo "
    ";
                // line 181
                if (twig_get_attribute($this->env, $this->source, ($context["fieldCollection"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 181, $this->source); })()), "mappedField", [], "any", false, false, false, 181), [], "array", true, true, false, 181)) {
                    // line 182
                    echo "      ";
                    $context["mappedField"] = twig_get_attribute($this->env, $this->source, (isset($context["fieldCollection"]) || array_key_exists("fieldCollection", $context) ? $context["fieldCollection"] : (function () { throw new RuntimeError('Variable "fieldCollection" does not exist.', 182, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 182, $this->source); })()), "mappedField", [], "any", false, false, false, 182), [], "array", false, false, false, 182);
                    // line 183
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 183, $this->source); })()), "type", [], "any", false, false, false, 183), ["datetime", "date"])) {
                        // line 184
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 184, $this->source); })()));
                        foreach ($context['_seq'] as $context["key"] => $context["aTemp"]) {
                            // line 185
                            $context["date"] = ((("datetime" == twig_get_attribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 185, $this->source); })()), "type", [], "any", false, false, false, 185))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, $context["aTemp"], "label", [], "any", false, false, false, 185))) : ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, $context["aTemp"], "label", [], "any", false, false, false, 185))));
                            // line 186
                            if ((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 186, $this->source); })())) {
                                // line 187
                                $context["parseList"] = twig_array_merge((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 187, $this->source); })()), [                                // line 188
$context["key"] => twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 188, $this->source); })()), $context["key"], [], "array", false, false, false, 188), ["label" =>                                 // line 189
(isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 189, $this->source); })())])]);
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['aTemp'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                }
            }
            // line 198
            if ((isset($context["isBooleanList"]) || array_key_exists("isBooleanList", $context) ? $context["isBooleanList"] : (function () { throw new RuntimeError('Variable "isBooleanList" does not exist.', 198, $this->source); })())) {
                // line 199
                $context["list"] = Mautic\FormBundle\Helper\FormFieldHelper::parseBooleanList((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 199, $this->source); })()));
            } else {
                // line 201
                $context["list"] = Mautic\FormBundle\Helper\FormFieldHelper::parseList((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 201, $this->source); })()));
            }
            // line 204
            $context["firstListValue"] = twig_first($this->env, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 204, $this->source); })()));
        }
        // line 208
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 208), "multiple", [], "any", true, true, false, 208) && (true == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 208, $this->source); })()), "properties", [], "any", false, false, false, 208), "multiple", [], "any", false, false, false, 208)))) {
            // line 209
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 209, $this->source); })()), ["multiple" => "multiple"]);
        }
        // line 227
        echo "<div ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 227, $this->source); })()));
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
        // line 228
        if (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 228, $this->source); })()), "showLabel", [], "any", false, false, false, 228)) {
            echo "<label ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 228, $this->source); })()));
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 228, $this->source); })()), "label", [], "any", false, false, false, 228), "html", null, true);
            echo "</label>";
        }
        // line 229
        echo "  ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 229, $this->source); })()), "helpMessage", [], "any", false, false, false, 229))) {
            echo "<span class=\"mauticform-helpmessage\">";
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 229, $this->source); })()), "helpMessage", [], "any", false, false, false, 229));
            echo "</span>";
        }
        // line 230
        echo "
  <select ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 231, $this->source); })()));
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
        // line 233
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 235
($context["field"] ?? null), "properties", [], "any", false, true, false, 235), "placeholder", [], "any", true, true, false, 235) || ( !twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 235) || (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 235) && (false == twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 235, $this->source); })()), "defaultValue", [], "any", false, false, false, 235))))) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 237
($context["field"] ?? null), "properties", [], "any", false, true, false, 237), "multiple", [], "any", true, true, false, 237) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 237), "multiple", [], "any", true, true, false, 237) && (false == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 237, $this->source); })()), "properties", [], "any", false, false, false, 237), "multiple", [], "any", false, false, false, 237)))))) {
            // line 239
            $context["placeholder"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 239), "placeholder", [], "any", true, true, false, 239)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 239), "placeholder", [], "any", false, false, false, 239), "")) : (""));
            // line 240
            echo "<option value=\"\">";
            echo twig_escape_filter($this->env, (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 240, $this->source); })()), "html", null, true);
            echo "</option>";
        }
        // line 242
        echo twig_call_macro($macros["_self"], "macro_print_options", [(isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 242, $this->source); })()), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 242, $this->source); })())], 242, $context, $this->getSourceContext());
        echo "
  </select>
  <span class=\"mauticform-errormsg\" style=\"display:none;\">";
        // line 244
        echo twig_escape_filter($this->env, (isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 244, $this->source); })()), "html", null, true);
        echo "</span>
</div>";
    }

    // line 214
    public function macro_print_options($__list__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "list" => $__list__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 215
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 215, $this->source); })()));
            foreach ($context['_seq'] as $context["listValue"] => $context["listLabel"]) {
                // line 216
                echo "    ";
                if (is_iterable($context["listLabel"])) {
                    // line 217
                    echo "      ";
                    // line 218
                    echo "      <optgroup label=\"";
                    echo twig_escape_filter($this->env, $context["listValue"], "html", null, true);
                    echo "\">
        ";
                    // line 219
                    echo twig_call_macro($macros["_self"], "macro_print_options", [$context["listLabel"], (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 219, $this->source); })())], 219, $context, $this->getSourceContext());
                    echo "
      </optgroup>
    ";
                } else {
                    // line 222
                    echo "<option value=\"";
                    echo twig_escape_filter($this->env, $context["listValue"]);
                    echo "\" ";
                    if (($context["listValue"] == twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 222, $this->source); })()), "defaultValue", [], "any", false, false, false, 222))) {
                        echo "selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["listLabel"], "html", null, true);
                    echo "</option>";
                }
                // line 224
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['listValue'], $context['listLabel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

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
        return "@MauticForm/Field/select.html.twig";
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
        return array (  431 => 224,  420 => 222,  414 => 219,  409 => 218,  407 => 217,  404 => 216,  400 => 215,  386 => 214,  380 => 244,  375 => 242,  370 => 240,  368 => 239,  366 => 237,  365 => 235,  364 => 233,  346 => 231,  343 => 230,  336 => 229,  314 => 228,  295 => 227,  292 => 209,  290 => 208,  287 => 204,  284 => 201,  281 => 199,  279 => 198,  269 => 189,  268 => 188,  267 => 187,  265 => 186,  263 => 185,  259 => 184,  257 => 183,  254 => 182,  252 => 181,  249 => 180,  246 => 179,  244 => 177,  240 => 173,  238 => 172,  235 => 169,  233 => 168,  231 => 167,  229 => 166,  227 => 165,  225 => 164,  223 => 163,  218 => 158,  216 => 157,  214 => 156,  212 => 155,  210 => 154,  208 => 153,  206 => 152,  204 => 151,  202 => 149,  201 => 148,  200 => 147,  198 => 146,  196 => 145,  194 => 144,  191 => 142,  188 => 141,  185 => 140,  182 => 139,  180 => 136,  179 => 135,  178 => 134,  177 => 133,  176 => 132,  174 => 130,  172 => 129,  170 => 128,  167 => 121,  166 => 120,  164 => 118,  161 => 114,  159 => 113,  157 => 111,  156 => 110,  155 => 107,  154 => 106,  151 => 104,  149 => 103,  147 => 102,  145 => 101,  143 => 100,  140 => 94,  139 => 93,  138 => 92,  137 => 91,  134 => 88,  132 => 87,  130 => 85,  128 => 84,  126 => 81,  125 => 80,  124 => 78,  123 => 77,  122 => 76,  119 => 72,  118 => 71,  116 => 69,  115 => 68,  112 => 65,  111 => 63,  109 => 61,  108 => 60,  105 => 57,  103 => 56,  101 => 55,  98 => 51,  97 => 50,  95 => 49,  92 => 45,  91 => 44,  90 => 43,  88 => 41,  87 => 40,  85 => 39,  82 => 35,  81 => 34,  79 => 33,  76 => 29,  75 => 28,  72 => 26,  70 => 25,  68 => 24,  66 => 23,  64 => 21,  62 => 20,  60 => 19,  58 => 17,  56 => 16,  54 => 15,  52 => 14,  50 => 13,  48 => 12,  46 => 11,  44 => 10,  42 => 7,  40 => 6,  38 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Field/select.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Field\\select.html.twig");
    }
}
