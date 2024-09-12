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

/* @MauticForm/Field/pagebreak.html.twig */
class __TwigTemplate_c7c967f40fb3b437e4346926915b379b extends Template
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
        $context["containerType"] = "pagebreak-wrapper";
        // line 2
        $context["defaultInputClass"] = "pagebreak";
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
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "any", true, true, false, 90) && twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 90, $this->source); })()), "isRequired", [], "any", false, false, false, 90))) {
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
        // line 116
        if ((((array_key_exists("list", $context) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 116), "syncList", [], "any", true, true, false, 116)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 116), "list", [], "any", true, true, false, 116)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 116), "optionList", [], "any", true, true, false, 116))) {
            // line 117
            echo "  ";
            $context["parseList"] = [];
            // line 118
            echo "  ";
            $context["isBooleanList"] = false;
            // line 119
            echo "  ";
            $context["contactFields"] = ((array_key_exists("contactFields", $context)) ? (_twig_default_filter((isset($context["contactFields"]) || array_key_exists("contactFields", $context) ? $context["contactFields"] : (function () { throw new RuntimeError('Variable "contactFields" does not exist.', 119, $this->source); })()), [])) : ([]));
            // line 120
            echo "  ";
            $context["companyFields"] = ((array_key_exists("companyFields", $context)) ? (_twig_default_filter((isset($context["companyFields"]) || array_key_exists("companyFields", $context) ? $context["companyFields"] : (function () { throw new RuntimeError('Variable "companyFields" does not exist.', 120, $this->source); })()), [])) : ([]));
            // line 121
            echo "  ";
            $context["formFields"] = twig_array_merge((isset($context["contactFields"]) || array_key_exists("contactFields", $context) ? $context["contactFields"] : (function () { throw new RuntimeError('Variable "contactFields" does not exist.', 121, $this->source); })()), (isset($context["companyFields"]) || array_key_exists("companyFields", $context) ? $context["companyFields"] : (function () { throw new RuntimeError('Variable "companyFields" does not exist.', 121, $this->source); })()));
            // line 122
            echo "
  ";
            // line 123
            if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 124
($context["field"] ?? null), "properties", [], "any", false, true, false, 124), "syncList", [], "any", true, true, false, 124) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 124, $this->source); })()), "properties", [], "any", false, false, false, 124), "syncList", [], "any", false, false, false, 124))) && twig_get_attribute($this->env, $this->source,             // line 125
($context["field"] ?? null), "leadField", [], "any", true, true, false, 125)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 125, $this->source); })()), "leadField", [], "any", false, false, false, 125))) && twig_get_attribute($this->env, $this->source,             // line 126
($context["formFields"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 126, $this->source); })()), "leadField", [], "any", false, false, false, 126), [], "array", true, true, false, 126))) {
                // line 128
                echo "    ";
                $context["leadFieldType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 128, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 128, $this->source); })()), "leadField", [], "any", false, false, false, 128), [], "array", false, false, false, 128), "type", [], "any", false, false, false, 128);
                // line 129
                echo "    ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 129, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 129, $this->source); })()), "leadField", [], "any", false, false, false, 129), [], "array", false, false, false, 129), "properties", [], "any", false, false, false, 129), "list", [], "any", false, false, false, 129))) {
                    // line 130
                    echo "      ";
                    $context["parseList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 130, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 130, $this->source); })()), "leadField", [], "any", false, false, false, 130), [], "array", false, false, false, 130), "properties", [], "any", false, false, false, 130), "list", [], "any", false, false, false, 130);
                    // line 131
                    echo "    ";
                } elseif (("boolean" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 131, $this->source); })()))) {
                    // line 132
                    echo "      ";
                    $context["parseList"] = ["0" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 133
(isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 133, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 133, $this->source); })()), "leadField", [], "any", false, false, false, 133), [], "array", false, false, false, 133), "properties", [], "any", false, false, false, 133), "no", [], "any", false, false, false, 133), "1" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 134
(isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 134, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 134, $this->source); })()), "leadField", [], "any", false, false, false, 134), [], "array", false, false, false, 134), "properties", [], "any", false, false, false, 134), "yes", [], "any", false, false, false, 134)];
                    // line 136
                    echo "    ";
                } elseif (("country" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 136, $this->source); })()))) {
                    // line 137
                    echo "      ";
                    $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getCountryChoices();
                    // line 138
                    echo "    ";
                } elseif (("region" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 138, $this->source); })()))) {
                    // line 139
                    echo "      ";
                    $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getRegionChoices();
                    // line 140
                    echo "    ";
                } elseif (("timezone" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 140, $this->source); })()))) {
                    // line 141
                    echo "      ";
                    $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getTimezonesChoices();
                    // line 142
                    echo "    ";
                } elseif (("locale" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 142, $this->source); })()))) {
                    // line 143
                    echo "      ";
                    $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getLocaleChoices();
                    // line 144
                    echo "    ";
                }
                // line 145
                echo "  ";
            }
            // line 146
            echo "
  ";
            // line 147
            if (twig_test_empty((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 147, $this->source); })()))) {
                // line 148
                echo "    ";
                if (array_key_exists("list", $context)) {
                    // line 149
                    echo "      ";
                    $context["parseList"] = (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 149, $this->source); })());
                    // line 150
                    echo "    ";
                } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 150, $this->source); })()), "properties", [], "any", false, false, false, 150), "optionlist", [], "any", false, false, false, 150))) {
                    // line 151
                    echo "      ";
                    $context["parseList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 151, $this->source); })()), "properties", [], "any", false, false, false, 151), "optionlist", [], "any", false, false, false, 151);
                    // line 152
                    echo "    ";
                } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 152, $this->source); })()), "properties", [], "any", false, false, false, 152), "list", [], "any", false, false, false, 152))) {
                    // line 153
                    echo "      ";
                    $context["parseList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 153, $this->source); })()), "properties", [], "any", false, false, false, 153), "list", [], "any", false, false, false, 153);
                    // line 154
                    echo "    ";
                }
                // line 155
                echo "
    ";
                // line 156
                if (twig_get_attribute($this->env, $this->source, ($context["parseList"] ?? null), "list", [], "any", true, true, false, 156)) {
                    // line 157
                    echo "      ";
                    $context["parseList"] = twig_get_attribute($this->env, $this->source, (isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 157, $this->source); })()), "list", [], "any", false, false, false, 157);
                    // line 158
                    echo "    ";
                }
                // line 159
                echo "  ";
            }
            // line 160
            echo "
  ";
            // line 161
            if (((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 161, $this->source); })()), "leadField", [], "any", false, false, false, 161) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 161, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 161, $this->source); })()), "leadField", [], "any", false, false, false, 161), [], "array", false, false, false, 161), "type", [], "any", false, false, false, 161))) && twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 161, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 161, $this->source); })()), "leadField", [], "any", false, false, false, 161), [], "array", false, false, false, 161), "type", [], "any", false, false, false, 161), ["datetime", "date"]))) {
                // line 162
                echo "    ";
                $context["tempLeadFieldType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 162, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 162, $this->source); })()), "leadField", [], "any", false, false, false, 162), [], "array", false, false, false, 162), "type", [], "any", false, false, false, 162);
                // line 163
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 163, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["aTemp"]) {
                    // line 164
                    echo "      ";
                    $context["date"] = ((("datetime" == (isset($context["tempLeadFieldType"]) || array_key_exists("tempLeadFieldType", $context) ? $context["tempLeadFieldType"] : (function () { throw new RuntimeError('Variable "tempLeadFieldType" does not exist.', 164, $this->source); })()))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, $context["aTemp"], "label", [], "any", false, false, false, 164))) : ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, $context["aTemp"], "label", [], "any", false, false, false, 164))));
                    // line 165
                    echo "      ";
                    if ((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 165, $this->source); })())) {
                        // line 166
                        echo "          ";
                        $context["parseList"] = twig_array_merge((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 166, $this->source); })()), [                        // line 167
$context["key"] => twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 167, $this->source); })()), $context["key"], [], "array", false, false, false, 167), ["label" =>                         // line 168
(isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 168, $this->source); })())])]);
                        // line 171
                        echo "      ";
                    }
                    // line 172
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['aTemp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "  ";
            }
            // line 174
            echo "
  ";
            // line 175
            if ((isset($context["isBooleanList"]) || array_key_exists("isBooleanList", $context) ? $context["isBooleanList"] : (function () { throw new RuntimeError('Variable "isBooleanList" does not exist.', 175, $this->source); })())) {
                // line 176
                echo "    ";
                $context["list"] = Mautic\FormBundle\Helper\FormFieldHelper::parseBooleanList((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 176, $this->source); })()));
                // line 177
                echo "  ";
            } else {
                // line 178
                echo "    ";
                $context["list"] = Mautic\FormBundle\Helper\FormFieldHelper::parseList((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 178, $this->source); })()));
                // line 179
                echo "  ";
            }
            // line 180
            echo "
  ";
            // line 181
            $context["firstListValue"] = twig_first($this->env, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 181, $this->source); })()));
        }
        // line 184
        echo "
";
        // line 185
        $context["backButtonAttr"] = (isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 185, $this->source); })());
        // line 186
        $context["nextButtonAttr"] = (isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 186, $this->source); })());
        // line 187
        echo "
";
        // line 188
        $context["backButtonAttr"] = twig_array_merge((isset($context["backButtonAttr"]) || array_key_exists("backButtonAttr", $context) ? $context["backButtonAttr"] : (function () { throw new RuntimeError('Variable "backButtonAttr" does not exist.', 188, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,         // line 189
($context["backButtonAttr"] ?? null), "class", [], "any", true, true, false, 189)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["backButtonAttr"] ?? null), "class", [], "any", false, false, false, 189), [])) : ([])), ["btn", "btn-default", "mautic-pagebreak-back"]), "type" => "button", "data-mautic-form-pagebreak-button" => "prev"]);
        // line 193
        $context["nextButtonAttr"] = twig_array_merge((isset($context["nextButtonAttr"]) || array_key_exists("nextButtonAttr", $context) ? $context["nextButtonAttr"] : (function () { throw new RuntimeError('Variable "nextButtonAttr" does not exist.', 193, $this->source); })()), ["class" => twig_array_merge(((twig_get_attribute($this->env, $this->source,         // line 194
($context["nextButtonAttr"] ?? null), "class", [], "any", true, true, false, 194)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["nextButtonAttr"] ?? null), "class", [], "any", false, false, false, 194), [])) : ([])), ["btn", "btn-default", "mautic-pagebreak-next"]), "type" => "button", "data-mautic-form-pagebreak-button" => "next"]);
        // line 198
        echo "
";
        // line 199
        if (( !array_key_exists("inForm", $context) || (array_key_exists("inForm", $context) && twig_test_empty((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 199, $this->source); })()))))) {
            // line 200
            echo "
    ";
            // line 202
            echo "    ";
            $context["containerAttributes"] = twig_array_merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 202, $this->source); })()), ["data-mautic-form-pagebreak" =>             // line 203
(isset($context["fieldPage"]) || array_key_exists("fieldPage", $context) ? $context["fieldPage"] : (function () { throw new RuntimeError('Variable "fieldPage" does not exist.', 203, $this->source); })()), "style" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 204
($context["containerAttributes"] ?? null), "style", [], "any", true, true, false, 204)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "style", [], "any", false, false, false, 204), [])) : ([])), ["display:none;"])]);
        }
        // line 207
        echo "
";
        // line 208
        $context["prevPageLabel"] = twig_trim_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 208), "prev_page_label", [], "any", true, true, false, 208)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 208), "prev_page_label", [], "any", false, false, false, 208), "")) : ("")));
        // line 209
        if (twig_test_empty((isset($context["prevPageLabel"]) || array_key_exists("prevPageLabel", $context) ? $context["prevPageLabel"] : (function () { throw new RuntimeError('Variable "prevPageLabel" does not exist.', 209, $this->source); })()))) {
            // line 210
            echo "    ";
            $context["backButtonAttr"] = twig_array_merge((isset($context["backButtonAttr"]) || array_key_exists("backButtonAttr", $context) ? $context["backButtonAttr"] : (function () { throw new RuntimeError('Variable "backButtonAttr" does not exist.', 210, $this->source); })()), ["style" => twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 211
($context["backButtonAttr"] ?? null), "style", [], "any", true, true, false, 211)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["backButtonAttr"] ?? null), "style", [], "any", false, false, false, 211), [])) : ([])), ["display:none;"])]);
        }
        // line 214
        echo "
<div ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 215, $this->source); })()));
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
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["backButtonAttr"]) || array_key_exists("backButtonAttr", $context) ? $context["backButtonAttr"] : (function () { throw new RuntimeError('Variable "backButtonAttr" does not exist.', 216, $this->source); })()));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 216, $this->source); })()), "properties", [], "any", false, false, false, 216), "prev_page_label", [], "any", false, false, false, 216), "html", null, true);
        echo "</button>
  <button ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nextButtonAttr"]) || array_key_exists("nextButtonAttr", $context) ? $context["nextButtonAttr"] : (function () { throw new RuntimeError('Variable "nextButtonAttr" does not exist.', 217, $this->source); })()));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 217, $this->source); })()), "properties", [], "any", false, false, false, 217), "next_page_label", [], "any", false, false, false, 217), "html", null, true);
        echo "</button>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Field/pagebreak.html.twig";
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
        return array (  473 => 217,  453 => 216,  435 => 215,  432 => 214,  429 => 211,  427 => 210,  425 => 209,  423 => 208,  420 => 207,  417 => 204,  416 => 203,  414 => 202,  411 => 200,  409 => 199,  406 => 198,  404 => 194,  403 => 193,  401 => 189,  400 => 188,  397 => 187,  395 => 186,  393 => 185,  390 => 184,  387 => 181,  384 => 180,  381 => 179,  378 => 178,  375 => 177,  372 => 176,  370 => 175,  367 => 174,  364 => 173,  358 => 172,  355 => 171,  353 => 168,  352 => 167,  350 => 166,  347 => 165,  344 => 164,  339 => 163,  336 => 162,  334 => 161,  331 => 160,  328 => 159,  325 => 158,  322 => 157,  320 => 156,  317 => 155,  314 => 154,  311 => 153,  308 => 152,  305 => 151,  302 => 150,  299 => 149,  296 => 148,  294 => 147,  291 => 146,  288 => 145,  285 => 144,  282 => 143,  279 => 142,  276 => 141,  273 => 140,  270 => 139,  267 => 138,  264 => 137,  261 => 136,  259 => 134,  258 => 133,  256 => 132,  253 => 131,  250 => 130,  247 => 129,  244 => 128,  242 => 126,  241 => 125,  240 => 124,  239 => 123,  236 => 122,  233 => 121,  230 => 120,  227 => 119,  224 => 118,  221 => 117,  219 => 116,  216 => 111,  214 => 110,  212 => 109,  210 => 108,  207 => 107,  204 => 104,  201 => 103,  199 => 101,  198 => 100,  197 => 97,  195 => 96,  192 => 95,  189 => 94,  186 => 93,  183 => 92,  180 => 91,  178 => 90,  175 => 85,  174 => 84,  173 => 83,  172 => 82,  169 => 81,  166 => 80,  164 => 79,  162 => 78,  159 => 76,  157 => 75,  155 => 72,  154 => 71,  153 => 69,  152 => 68,  151 => 67,  148 => 64,  146 => 63,  144 => 61,  142 => 60,  139 => 57,  137 => 55,  135 => 53,  134 => 52,  131 => 51,  128 => 50,  125 => 49,  122 => 48,  120 => 47,  117 => 44,  115 => 43,  113 => 42,  110 => 41,  107 => 38,  106 => 37,  104 => 36,  102 => 34,  100 => 33,  98 => 32,  95 => 31,  92 => 28,  90 => 27,  88 => 26,  85 => 25,  82 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  66 => 16,  64 => 15,  62 => 14,  60 => 13,  58 => 12,  56 => 11,  54 => 10,  52 => 9,  50 => 8,  48 => 7,  46 => 6,  44 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Field/pagebreak.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Field\\pagebreak.html.twig");
    }
}
