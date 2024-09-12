<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @MauticForm/Field/freetext.html.twig */
class __TwigTemplate_b0c88bf8721bf2d2696742f1352c965f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["defaultInputClass"] = "freetext";
        // line 2
        $context["containerType"] = (isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 2, $this->source); })());
        // line 3
        yield "
";
        // line 5
        $context["defaultInputFormClass"] = ((array_key_exists("defaultInputFormClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 5, $this->source); })()), "")) : (""));
        // line 6
        $context["defaultLabelClass"] = ((array_key_exists("defaultLabelClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 6, $this->source); })()), "label")) : ("label"));
        // line 7
        $context["formName"] = ((array_key_exists("formName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 7, $this->source); })()), "")) : (""));
        // line 8
        $context["defaultInputClass"] = ("mauticform-" . (isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 8, $this->source); })()));
        // line 9
        $context["defaultLabelClass"] = ("mauticform-" . (isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 9, $this->source); })()));
        // line 10
        $context["containerClass"] = ((array_key_exists("containerClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 10, $this->source); })()), (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 10, $this->source); })()))) : ((isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 10, $this->source); })())));
        // line 11
        $context["order"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", false, false, false, 11), 0)) : (0));
        // line 12
        $context["validationMessage"] = "";
        // line 13
        $context["inputAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", false, false, false, 13), "")) : ("")));
        // line 14
        $context["labelAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", false, false, false, 14), "")) : ("")));
        // line 15
        $context["containerAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", false, false, false, 15), "")) : ("")));
        // line 16
        if (( !array_key_exists("ignoreName", $context) || (array_key_exists("ignoreName", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreName"]) || array_key_exists("ignoreName", $context) ? $context["ignoreName"] : (function () { throw new RuntimeError('Variable "ignoreName" does not exist.', 16, $this->source); })()))))) {
            // line 17
            yield "  ";
            $context["inputName"] = (("mauticform[" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 17, $this->source); })()), "alias", [], "any", false, false, false, 17)) . "]");
            // line 18
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 18), "multiple", [], "any", true, true, false, 18)) {
                // line 19
                yield "    ";
                $context["inputName"] = ((isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 19, $this->source); })()) . "[]");
                // line 20
                yield "  ";
            }
            // line 21
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 21, $this->source); })()), ["name" =>             // line 22
(isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 22, $this->source); })())]);
        }
        // line 25
        yield "
";
        // line 26
        if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 26, $this->source); })()), "type", [], "any", false, false, false, 26), ["checkboxgrp", "radiogrp", "textarea"])) {
            // line 27
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 27, $this->source); })()), ["value" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 28
($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", false, false, false, 28), "")) : (""))]);
        }
        // line 31
        yield "
";
        // line 32
        if (( !array_key_exists("ignoreId", $context) || (array_key_exists("ignoreId", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreId"]) || array_key_exists("ignoreId", $context) ? $context["ignoreId"] : (function () { throw new RuntimeError('Variable "ignoreId" does not exist.', 32, $this->source); })()))))) {
            // line 33
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 33, $this->source); })()), ["id" => ((("mauticform_input" .             // line 34
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 34, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 34, $this->source); })()), "alias", [], "any", false, false, false, 34))]);
            // line 36
            yield "  ";
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 36, $this->source); })()), ["id" => ((("mauticform_label" .             // line 37
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 37, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 37, $this->source); })()), "alias", [], "any", false, false, false, 37)), "for" => ((("mauticform_input" .             // line 38
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 38, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 38, $this->source); })()), "alias", [], "any", false, false, false, 38))]);
        }
        // line 41
        yield "
";
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 42), "placeholder", [], "any", true, true, false, 42) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 42, $this->source); })()), "properties", [], "any", false, false, false, 42), "placeholder", [], "any", false, false, false, 42)))) {
            // line 43
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 43, $this->source); })()), ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 44
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 44, $this->source); })()), "properties", [], "any", false, false, false, 44), "placeholder", [], "any", false, false, false, 44)]);
        }
        // line 47
        if ((array_key_exists("inForm", $context) && ((true == (isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 47, $this->source); })())) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 47, $this->source); })()))))) {
            // line 48
            yield "  ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 48, $this->source); })()), "type", [], "any", false, false, false, 48), ["button", "pagebreak"])) {
                // line 49
                yield "    ";
                $context["defaultInputFormClass"] = ((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 49, $this->source); })()) . " btn btn-default");
                // line 50
                yield "  ";
            }
            // line 51
            yield "
  ";
            // line 52
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 52, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 53
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 53), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 53, $this->source); })())])]);
            // line 55
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 55, $this->source); })()), ["disabled" => "disabled", "class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 57
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 57), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 57, $this->source); })()), (isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 57, $this->source); })())])]);
        } else {
            // line 60
            yield "  ";
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 60, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 61
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 61), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 61, $this->source); })())])]);
            // line 63
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 63, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 64
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 64), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 64, $this->source); })())])]);
        }
        // line 67
        $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 67, $this->source); })()), ["id" => ((("mauticform" . ((        // line 68
array_key_exists("formName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 68, $this->source); })()), "")) : (""))) . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 68, $this->source); })())), "class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 69)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 69), [])) : ([])), ["mauticform-row", ("mauticform-" .         // line 71
(isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 71, $this->source); })())), ("mauticform-field-" .         // line 72
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 72, $this->source); })()))])]);
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 75, $this->source); })()), "parent", [], "any", false, false, false, 75) && CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 75, $this->source); })()), "parent", [], "any", false, false, false, 75), [], "array", true, true, false, 75))) {
            // line 76
            yield "  ";
            $context["values"] = Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 76, $this->source); })()), "conditions", [], "any", false, false, false, 76), "values", [], "any", false, false, false, 76), "|");
            // line 78
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 78, $this->source); })()), "conditions", [], "any", false, false, false, 78), "any", [], "any", false, false, false, 78) != false) && ("notIn" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 78, $this->source); })()), "conditions", [], "any", false, false, false, 78), "expr", [], "any", false, false, false, 78)))) {
                // line 79
                $context["values"] = "*";
                // line 80
                yield "  ";
            }
            // line 81
            yield "
  ";
            // line 82
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 82, $this->source); })()), ["data-mautic-form-show-on" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 83
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 83, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 83, $this->source); })()), "parent", [], "any", false, false, false, 83), [], "array", false, false, false, 83), "alias", [], "any", false, false, false, 83) . ":") . (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 83, $this->source); })())), "data-mautic-form-expr" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 84
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 84, $this->source); })()), "conditions", [], "any", false, false, false, 84), "expr", [], "any", false, false, false, 84), "class" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source,             // line 85
(isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 85, $this->source); })()), "class", [], "any", false, false, false, 85), ["mauticform-field-hidden"])]);
        }
        // line 90
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "any", true, true, false, 90) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 90, $this->source); })()), "isRequired", [], "any", false, false, false, 90))) {
            // line 91
            yield "  ";
            $context["required"] = true;
            // line 92
            yield "  ";
            $context["validationMessage"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 92, $this->source); })()), "validationMessage", [], "any", false, false, false, 92);
            // line 93
            yield "  ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 93, $this->source); })()))) {
                // line 94
                yield "        ";
                $context["validationMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.generic.required", [], "validators", ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 94, $this->source); })()), null)) : (null)));
                // line 95
                yield "  ";
            }
            // line 96
            yield "  ";
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 96, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 97
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 97)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 97), [])) : ([])), ["mauticform-required"]), "data-validate" => CoreExtension::getAttribute($this->env, $this->source,             // line 100
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 100, $this->source); })()), "alias", [], "any", false, false, false, 100), "data-validation-type" => CoreExtension::getAttribute($this->env, $this->source,             // line 101
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 101, $this->source); })()), "type", [], "any", false, false, false, 101)]);
            // line 103
            yield "  ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 103, $this->source); })()), "properties", [], "any", false, false, false, 103), "multiple", [], "any", false, false, false, 103))) {
                // line 104
                yield "    ";
                $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 104, $this->source); })()), ["data-validate-multiple" => "true"]);
                // line 107
                yield "  ";
            }
        } elseif ((        // line 108
array_key_exists("required", $context) && (true == (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 108, $this->source); })())))) {
            // line 109
            yield "  ";
            // line 110
            yield "  ";
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 110, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 111
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 111)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 111), [])) : ([])), ["mauticform-required"])]);
        }
        // line 116
        if ((((array_key_exists("list", $context) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 116), "syncList", [], "any", true, true, false, 116)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 116), "list", [], "any", true, true, false, 116)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 116), "optionList", [], "any", true, true, false, 116))) {
            // line 117
            yield "  ";
            $context["parseList"] = [];
            // line 118
            yield "  ";
            $context["isBooleanList"] = false;
            // line 119
            yield "  ";
            $context["contactFields"] = ((array_key_exists("contactFields", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["contactFields"]) || array_key_exists("contactFields", $context) ? $context["contactFields"] : (function () { throw new RuntimeError('Variable "contactFields" does not exist.', 119, $this->source); })()), [])) : ([]));
            // line 120
            yield "  ";
            $context["companyFields"] = ((array_key_exists("companyFields", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["companyFields"]) || array_key_exists("companyFields", $context) ? $context["companyFields"] : (function () { throw new RuntimeError('Variable "companyFields" does not exist.', 120, $this->source); })()), [])) : ([]));
            // line 121
            yield "  ";
            $context["formFields"] = Twig\Extension\CoreExtension::merge((isset($context["contactFields"]) || array_key_exists("contactFields", $context) ? $context["contactFields"] : (function () { throw new RuntimeError('Variable "contactFields" does not exist.', 121, $this->source); })()), (isset($context["companyFields"]) || array_key_exists("companyFields", $context) ? $context["companyFields"] : (function () { throw new RuntimeError('Variable "companyFields" does not exist.', 121, $this->source); })()));
            // line 122
            yield "
  ";
            // line 123
            if (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 124
($context["field"] ?? null), "properties", [], "any", false, true, false, 124), "syncList", [], "any", true, true, false, 124) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 124, $this->source); })()), "properties", [], "any", false, false, false, 124), "syncList", [], "any", false, false, false, 124))) && CoreExtension::getAttribute($this->env, $this->source,             // line 125
($context["field"] ?? null), "leadField", [], "any", true, true, false, 125)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 125, $this->source); })()), "leadField", [], "any", false, false, false, 125))) && CoreExtension::getAttribute($this->env, $this->source,             // line 126
($context["formFields"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 126, $this->source); })()), "leadField", [], "any", false, false, false, 126), [], "array", true, true, false, 126))) {
                // line 128
                yield "    ";
                $context["leadFieldType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 128, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 128, $this->source); })()), "leadField", [], "any", false, false, false, 128), [], "array", false, false, false, 128), "type", [], "any", false, false, false, 128);
                // line 129
                yield "    ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 129, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 129, $this->source); })()), "leadField", [], "any", false, false, false, 129), [], "array", false, false, false, 129), "properties", [], "any", false, false, false, 129), "list", [], "any", false, false, false, 129))) {
                    // line 130
                    yield "      ";
                    $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 130, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 130, $this->source); })()), "leadField", [], "any", false, false, false, 130), [], "array", false, false, false, 130), "properties", [], "any", false, false, false, 130), "list", [], "any", false, false, false, 130);
                    // line 131
                    yield "    ";
                } elseif (("boolean" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 131, $this->source); })()))) {
                    // line 132
                    yield "      ";
                    $context["parseList"] = ["0" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 133
(isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 133, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 133, $this->source); })()), "leadField", [], "any", false, false, false, 133), [], "array", false, false, false, 133), "properties", [], "any", false, false, false, 133), "no", [], "any", false, false, false, 133), "1" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 134
(isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 134, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 134, $this->source); })()), "leadField", [], "any", false, false, false, 134), [], "array", false, false, false, 134), "properties", [], "any", false, false, false, 134), "yes", [], "any", false, false, false, 134)];
                    // line 136
                    yield "    ";
                } elseif (("country" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 136, $this->source); })()))) {
                    // line 137
                    yield "      ";
                    $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getCountryChoices();
                    // line 138
                    yield "    ";
                } elseif (("region" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 138, $this->source); })()))) {
                    // line 139
                    yield "      ";
                    $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getRegionChoices();
                    // line 140
                    yield "    ";
                } elseif (("timezone" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 140, $this->source); })()))) {
                    // line 141
                    yield "      ";
                    $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getTimezonesChoices();
                    // line 142
                    yield "    ";
                } elseif (("locale" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 142, $this->source); })()))) {
                    // line 143
                    yield "      ";
                    $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getLocaleChoices();
                    // line 144
                    yield "    ";
                }
                // line 145
                yield "  ";
            }
            // line 146
            yield "
  ";
            // line 147
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 147, $this->source); })()))) {
                // line 148
                yield "    ";
                if (array_key_exists("list", $context)) {
                    // line 149
                    yield "      ";
                    $context["parseList"] = (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 149, $this->source); })());
                    // line 150
                    yield "    ";
                } elseif ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 150, $this->source); })()), "properties", [], "any", false, false, false, 150), "optionlist", [], "any", false, false, false, 150))) {
                    // line 151
                    yield "      ";
                    $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 151, $this->source); })()), "properties", [], "any", false, false, false, 151), "optionlist", [], "any", false, false, false, 151);
                    // line 152
                    yield "    ";
                } elseif ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 152, $this->source); })()), "properties", [], "any", false, false, false, 152), "list", [], "any", false, false, false, 152))) {
                    // line 153
                    yield "      ";
                    $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 153, $this->source); })()), "properties", [], "any", false, false, false, 153), "list", [], "any", false, false, false, 153);
                    // line 154
                    yield "    ";
                }
                // line 155
                yield "
    ";
                // line 156
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["parseList"] ?? null), "list", [], "any", true, true, false, 156)) {
                    // line 157
                    yield "      ";
                    $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 157, $this->source); })()), "list", [], "any", false, false, false, 157);
                    // line 158
                    yield "    ";
                }
                // line 159
                yield "  ";
            }
            // line 160
            yield "
  ";
            // line 161
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 161, $this->source); })()), "leadField", [], "any", false, false, false, 161) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 161, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 161, $this->source); })()), "leadField", [], "any", false, false, false, 161), [], "array", false, false, false, 161), "type", [], "any", false, false, false, 161))) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 161, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 161, $this->source); })()), "leadField", [], "any", false, false, false, 161), [], "array", false, false, false, 161), "type", [], "any", false, false, false, 161), ["datetime", "date"]))) {
                // line 162
                yield "    ";
                $context["tempLeadFieldType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 162, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 162, $this->source); })()), "leadField", [], "any", false, false, false, 162), [], "array", false, false, false, 162), "type", [], "any", false, false, false, 162);
                // line 163
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 163, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["aTemp"]) {
                    // line 164
                    yield "      ";
                    $context["date"] = ((("datetime" == (isset($context["tempLeadFieldType"]) || array_key_exists("tempLeadFieldType", $context) ? $context["tempLeadFieldType"] : (function () { throw new RuntimeError('Variable "tempLeadFieldType" does not exist.', 164, $this->source); })()))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["aTemp"], "label", [], "any", false, false, false, 164))) : ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["aTemp"], "label", [], "any", false, false, false, 164))));
                    // line 165
                    yield "      ";
                    if ((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 165, $this->source); })())) {
                        // line 166
                        yield "          ";
                        $context["parseList"] = Twig\Extension\CoreExtension::merge((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 166, $this->source); })()), [                        // line 167
$context["key"] => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 167, $this->source); })()), $context["key"], [], "array", false, false, false, 167), ["label" =>                         // line 168
(isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 168, $this->source); })())])]);
                        // line 171
                        yield "      ";
                    }
                    // line 172
                    yield "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['aTemp'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                yield "  ";
            }
            // line 174
            yield "
  ";
            // line 175
            if ((isset($context["isBooleanList"]) || array_key_exists("isBooleanList", $context) ? $context["isBooleanList"] : (function () { throw new RuntimeError('Variable "isBooleanList" does not exist.', 175, $this->source); })())) {
                // line 176
                yield "    ";
                $context["list"] = Mautic\FormBundle\Helper\FormFieldHelper::parseBooleanList((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 176, $this->source); })()));
                // line 177
                yield "  ";
            } else {
                // line 178
                yield "    ";
                $context["list"] = Mautic\FormBundle\Helper\FormFieldHelper::parseList((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 178, $this->source); })()));
                // line 179
                yield "  ";
            }
            // line 180
            yield "
  ";
            // line 181
            $context["firstListValue"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 181, $this->source); })()));
        }
        // line 184
        yield "
<div ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 185, $this->source); })()));
        foreach ($context['_seq'] as $context["attrName"] => $context["attrValue"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrName"], "html", null, true);
            yield "=\"";
            if (is_iterable($context["attrValue"])) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($context["attrValue"], " "), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrValue"], "html", null, true);
            }
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrName'], $context['attrValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ">
  ";
        // line 186
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 186, $this->source); })()), "showLabel", [], "any", false, false, false, 186)) {
            yield "<h3 ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 186, $this->source); })()));
            foreach ($context['_seq'] as $context["attrName"] => $context["attrValue"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrName"], "html", null, true);
                yield "=\"";
                if (is_iterable($context["attrValue"])) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($context["attrValue"], " "), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrValue"], "html", null, true);
                }
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attrName'], $context['attrValue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 186, $this->source); })()), "label", [], "any", false, false, false, 186), "html", null, true);
            yield "</h3>";
        }
        // line 187
        yield "  <div ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 187, $this->source); })()));
        foreach ($context['_seq'] as $context["attrName"] => $context["attrValue"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrName"], "html", null, true);
            yield "=\"";
            if (is_iterable($context["attrValue"])) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($context["attrValue"], " "), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrValue"], "html", null, true);
            }
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrName'], $context['attrValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ">
    ";
        // line 188
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 188, $this->source); })()), "properties", [], "any", false, false, false, 188), "text", [], "any", false, false, false, 188);
        yield "
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Field/freetext.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  457 => 188,  438 => 187,  416 => 186,  398 => 185,  395 => 184,  392 => 181,  389 => 180,  386 => 179,  383 => 178,  380 => 177,  377 => 176,  375 => 175,  372 => 174,  369 => 173,  363 => 172,  360 => 171,  358 => 168,  357 => 167,  355 => 166,  352 => 165,  349 => 164,  344 => 163,  341 => 162,  339 => 161,  336 => 160,  333 => 159,  330 => 158,  327 => 157,  325 => 156,  322 => 155,  319 => 154,  316 => 153,  313 => 152,  310 => 151,  307 => 150,  304 => 149,  301 => 148,  299 => 147,  296 => 146,  293 => 145,  290 => 144,  287 => 143,  284 => 142,  281 => 141,  278 => 140,  275 => 139,  272 => 138,  269 => 137,  266 => 136,  264 => 134,  263 => 133,  261 => 132,  258 => 131,  255 => 130,  252 => 129,  249 => 128,  247 => 126,  246 => 125,  245 => 124,  244 => 123,  241 => 122,  238 => 121,  235 => 120,  232 => 119,  229 => 118,  226 => 117,  224 => 116,  221 => 111,  219 => 110,  217 => 109,  215 => 108,  212 => 107,  209 => 104,  206 => 103,  204 => 101,  203 => 100,  202 => 97,  200 => 96,  197 => 95,  194 => 94,  191 => 93,  188 => 92,  185 => 91,  183 => 90,  180 => 85,  179 => 84,  178 => 83,  177 => 82,  174 => 81,  171 => 80,  169 => 79,  167 => 78,  164 => 76,  162 => 75,  160 => 72,  159 => 71,  158 => 69,  157 => 68,  156 => 67,  153 => 64,  151 => 63,  149 => 61,  147 => 60,  144 => 57,  142 => 55,  140 => 53,  139 => 52,  136 => 51,  133 => 50,  130 => 49,  127 => 48,  125 => 47,  122 => 44,  120 => 43,  118 => 42,  115 => 41,  112 => 38,  111 => 37,  109 => 36,  107 => 34,  105 => 33,  103 => 32,  100 => 31,  97 => 28,  95 => 27,  93 => 26,  90 => 25,  87 => 22,  85 => 21,  82 => 20,  79 => 19,  76 => 18,  73 => 17,  71 => 16,  69 => 15,  67 => 14,  65 => 13,  63 => 12,  61 => 11,  59 => 10,  57 => 9,  55 => 8,  53 => 7,  51 => 6,  49 => 5,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Field/freetext.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Field\\freetext.html.twig");
    }
}
