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

/* @MauticForm/Builder/form.html.twig */
class __TwigTemplate_7f85f5fa347ec056c24b7b34528aff7a extends Template
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
        // line 17
        $context["formName"] = (("_" . twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "generateFormName", [], "method", false, false, false, 17)) . ((array_key_exists("suffix", $context)) ? (_twig_default_filter((isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 17, $this->source); })()), "")) : ("")));
        // line 18
        $context["fields"] = ((array_key_exists("fields", $context)) ? (_twig_default_filter((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 18, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "fields", [], "any", false, false, false, 18))) : (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "fields", [], "any", false, false, false, 18)));
        // line 19
        $context["pageCount"] = 1;
        // line 20
        $context["inBuilder"] = ((array_key_exists("inBuilder", $context)) ? (_twig_default_filter((isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 20, $this->source); })()), false)) : (false));
        // line 21
        $context["action"] = ((array_key_exists("action", $context)) ? (_twig_default_filter((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 21, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_form_postresults", ["formId" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_form_postresults", ["formId" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)])));
        // line 22
        $context["theme"] = ((array_key_exists("theme", $context)) ? (_twig_default_filter((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 22, $this->source); })()), "")) : (""));
        // line 23
        $context["mappedFields"] = ((array_key_exists("mappedFields", $context)) ? (_twig_default_filter((isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 23, $this->source); })()), [])) : ([]));
        // line 24
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 24, $this->source); })()), "")) : (""));
        // line 25
        $context["isAjax"] = ((array_key_exists("isAjax", $context)) ? (_twig_default_filter((isset($context["isAjax"]) || array_key_exists("isAjax", $context) ? $context["isAjax"] : (function () { throw new RuntimeError('Variable "isAjax" does not exist.', 25, $this->source); })()), true)) : (true));
        // line 26
        $context["submissions"] = ((array_key_exists("submissions", $context)) ? (_twig_default_filter((isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 26, $this->source); })()), null)) : (null));
        // line 27
        $context["lead"] = ((array_key_exists("lead", $context)) ? (_twig_default_filter((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 27, $this->source); })()), null)) : (null));
        // line 28
        $context["successfulSubmitAction"] = ((array_key_exists("successfulSubmitAction", $context)) ? (_twig_default_filter((isset($context["successfulSubmitAction"]) || array_key_exists("successfulSubmitAction", $context) ? $context["successfulSubmitAction"] : (function () { throw new RuntimeError('Variable "successfulSubmitAction" does not exist.', 28, $this->source); })()), "")) : (""));
        // line 29
        echo "
";
        // line 30
        echo (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 30, $this->source); })());
        echo "
<style type=\"text/css\" scoped>
    .mauticform-field-hidden { display:none }
</style>
<div id=\"mauticform_wrapper";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\" class=\"mauticform_wrapper\">
    <form autocomplete=\"false\" role=\"form\" method=\"post\" action=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\" id=\"mauticform";
        echo twig_escape_filter($this->env, (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\" ";
        if ((isset($context["isAjax"]) || array_key_exists("isAjax", $context) ? $context["isAjax"] : (function () { throw new RuntimeError('Variable "isAjax" does not exist.', 35, $this->source); })())) {
            echo "data-mautic-form=\"";
            echo twig_escape_filter($this->env, twig_trim_filter((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 35, $this->source); })()), "_", "left"), "html", null, true);
            echo "\"";
        }
        echo " enctype=\"multipart/form-data\" ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "formAttributes", [], "any", false, false, false, 35);
        echo ">";
        // line 36
        if (((isset($context["successfulSubmitAction"]) || array_key_exists("successfulSubmitAction", $context) ? $context["successfulSubmitAction"] : (function () { throw new RuntimeError('Variable "successfulSubmitAction" does not exist.', 36, $this->source); })()) == "top")) {
            // line 37
            echo "<div class=\"mauticform-error\" id=\"mauticform";
            echo twig_escape_filter($this->env, (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "_error\"></div>
            <div class=\"mauticform-message\" id=\"mauticform";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "_message\"></div>";
        }
        // line 40
        echo "<div class=\"mauticform-innerform\">
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 42, $this->source); })()));
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
        foreach ($context['_seq'] as $context["fieldId"] => $context["f"]) {
            // line 43
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formPages"] ?? null), "open", [], "array", false, true, false, 43), $context["fieldId"], [], "array", true, true, false, 43)) {
                // line 45
                $context["lastFieldAttribute"] = ((((isset($context["lastFormPage"]) || array_key_exists("lastFormPage", $context) ? $context["lastFormPage"] : (function () { throw new RuntimeError('Variable "lastFormPage" does not exist.', 45, $this->source); })()) == $context["fieldId"])) ? ("data-mautic-form-pagebreak-lastpage=\"true\"") : (""));
                // line 46
                echo "<div class=\"mauticform-page-wrapper mauticform-page-";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 46, $this->source); })()), "html", null, true);
                echo "\" data-mautic-form-page=\"";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 46, $this->source); })()), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, (isset($context["lastFieldAttribute"]) || array_key_exists("lastFieldAttribute", $context) ? $context["lastFieldAttribute"] : (function () { throw new RuntimeError('Variable "lastFieldAttribute" does not exist.', 46, $this->source); })()), "html", null, true);
                echo ">";
            }
            // line 48
            if (( !twig_get_attribute($this->env, $this->source, $context["f"], "parent", [], "any", false, false, false, 48) && twig_get_attribute($this->env, $this->source, $context["f"], "showForContact", [(isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 48, $this->source); })()), (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 48, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), (isset($context["displayManager"]) || array_key_exists("displayManager", $context) ? $context["displayManager"] : (function () { throw new RuntimeError('Variable "displayManager" does not exist.', 48, $this->source); })())], "method", false, false, false, 48))) {
                // line 49
                if (twig_get_attribute($this->env, $this->source, $context["f"], "isCustom", [], "any", false, false, false, 49)) {
                    // line 50
                    $context["params"] = twig_get_attribute($this->env, $this->source, (isset($context["fieldSettings"]) || array_key_exists("fieldSettings", $context) ? $context["fieldSettings"] : (function () { throw new RuntimeError('Variable "fieldSettings" does not exist.', 50, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 50), [], "array", false, false, false, 50);
                    // line 51
                    twig_get_attribute($this->env, $this->source, $context["f"], "setCustomParameters", [(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 51, $this->source); })())], "method", false, false, false, 51);
                    // line 52
                    $context["template"] = twig_get_attribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 52, $this->source); })()), "template", [], "any", false, false, false, 52);
                } else {
                    // line 54
                    if (((((( !twig_get_attribute($this->env, $this->source,                     // line 55
$context["f"], "isAlwaysDisplay", [], "any", false, false, false, 55) &&  !twig_get_attribute($this->env, $this->source,                     // line 56
$context["f"], "showWhenValueExists", [], "any", false, false, false, 56)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source,                     // line 57
$context["f"], "mappedField", [], "any", false, false, false, 57))) && ("contact" === twig_get_attribute($this->env, $this->source,                     // line 58
$context["f"], "mappedObject", [], "any", false, false, false, 58))) && twig_get_attribute($this->env, $this->source,                     // line 59
$context["f"], "isAutoFill", [], "any", false, false, false, 59)) && ((                    // line 60
array_key_exists("lead", $context) &&  !twig_test_empty((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 60, $this->source); })()))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 60, $this->source); })()), "getFieldValue", [twig_get_attribute($this->env, $this->source, $context["f"], "mappedField", [], "any", false, false, false, 60)], "method", false, false, false, 60))))) {
                        // line 62
                        twig_get_attribute($this->env, $this->source, $context["f"], "setType", ["hidden"], "method", false, false, false, 62);
                    } else {
                        // line 64
                        twig_get_attribute($this->env, $this->source, (isset($context["displayManager"]) || array_key_exists("displayManager", $context) ? $context["displayManager"] : (function () { throw new RuntimeError('Variable "displayManager" does not exist.', 64, $this->source); })()), "increaseDisplayedFields", [$context["f"]], "method", false, false, false, 64);
                    }
                    // line 66
                    $context["template"] = (("@MauticForm/Field/" . twig_get_attribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 66)) . ".html.twig");
                }
                // line 68
                echo "
                  ";
                // line 70
                echo twig_include($this->env, $context, [(((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 70, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 70)) . ".html.twig"), (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 70, $this->source); })())], ["theme" =>                 // line 71
(isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 71, $this->source); })()), "field" => twig_get_attribute($this->env, $this->source,                 // line 72
$context["f"], "convertToArray", [], "any", false, false, false, 72), "id" => twig_get_attribute($this->env, $this->source,                 // line 73
$context["f"], "alias", [], "any", false, false, false, 73), "formName" =>                 // line 74
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 74, $this->source); })()), "fieldPage" => (                // line 75
(isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 75, $this->source); })()) - 1), "mappedFields" =>                 // line 76
(isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 76, $this->source); })()), "inBuilder" =>                 // line 77
(isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 77, $this->source); })()), "fields" =>                 // line 78
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 78, $this->source); })()), "language" => twig_get_attribute($this->env, $this->source,                 // line 79
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "getLanguage", [], "method", false, false, false, 79)]);
            }
            // line 83
            $context["parentField"] = $context["f"];
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 84, $this->source); })()));
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
            foreach ($context['_seq'] as $context["fieldId2"] => $context["f"]) {
                // line 85
                if ((("hidden" != twig_get_attribute($this->env, $this->source, (isset($context["parentField"]) || array_key_exists("parentField", $context) ? $context["parentField"] : (function () { throw new RuntimeError('Variable "parentField" does not exist.', 85, $this->source); })()), "type", [], "any", false, false, false, 85)) && (twig_get_attribute($this->env, $this->source, $context["f"], "parent", [], "any", false, false, false, 85) == twig_get_attribute($this->env, $this->source, (isset($context["parentField"]) || array_key_exists("parentField", $context) ? $context["parentField"] : (function () { throw new RuntimeError('Variable "parentField" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)))) {
                    // line 86
                    if (twig_get_attribute($this->env, $this->source, $context["f"], "isCustom", [], "any", false, false, false, 86)) {
                        // line 87
                        $context["params"] = twig_get_attribute($this->env, $this->source, (isset($context["fieldSettings"]) || array_key_exists("fieldSettings", $context) ? $context["fieldSettings"] : (function () { throw new RuntimeError('Variable "fieldSettings" does not exist.', 87, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 87), [], "array", false, false, false, 87);
                        // line 88
                        twig_get_attribute($this->env, $this->source, $context["f"], "setCustomParameters", [(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 88, $this->source); })())], "method", false, false, false, 88);
                        // line 89
                        $context["template"] = twig_get_attribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 89, $this->source); })()), "template", [], "any", false, false, false, 89);
                    } else {
                        // line 91
                        if ((((( !twig_get_attribute($this->env, $this->source,                         // line 92
$context["f"], "showWhenValueExists", [], "any", false, false, false, 92) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source,                         // line 93
$context["f"], "mappedField", [], "any", false, false, false, 93))) && ("contact" === twig_get_attribute($this->env, $this->source,                         // line 94
$context["f"], "mappedObject", [], "any", false, false, false, 94))) && twig_get_attribute($this->env, $this->source,                         // line 95
$context["f"], "isAutoFill", [], "any", false, false, false, 95)) && ((                        // line 96
array_key_exists("lead", $context) &&  !twig_test_empty((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 96, $this->source); })()))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 96, $this->source); })()), "getFieldValue", [twig_get_attribute($this->env, $this->source, $context["f"], "mappedField", [], "any", false, false, false, 96)], "method", false, false, false, 96))))) {
                            // line 98
                            twig_get_attribute($this->env, $this->source, $context["f"], "setType", ["hidden"], "method", false, false, false, 98);
                        }
                        // line 100
                        $context["template"] = (("@MauticForm/Field/" . twig_get_attribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 100)) . ".html.twig");
                    }
                    // line 103
                    echo "<!-- start: \"";
                    echo twig_escape_filter($this->env, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 103, $this->source); })()), "html", null, true);
                    echo twig_escape_filter($this->env, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 103, $this->source); })()), "html", null, true);
                    echo "\" -->";
                    // line 104
                    echo twig_include($this->env, $context, [(((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 104, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 104)) . ".html.twig"), (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 104, $this->source); })())], ["field" => twig_get_attribute($this->env, $this->source,                     // line 105
$context["f"], "convertToArray", [], "any", false, false, false, 105), "id" => twig_get_attribute($this->env, $this->source,                     // line 106
$context["f"], "alias", [], "any", false, false, false, 106), "formName" =>                     // line 107
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 107, $this->source); })()), "fieldPage" => (                    // line 108
(isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 108, $this->source); })()) - 1), "mappedFields" =>                     // line 109
(isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 109, $this->source); })()), "inBuilder" =>                     // line 110
(isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 110, $this->source); })()), "fields" =>                     // line 111
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 111, $this->source); })()), "language" => twig_get_attribute($this->env, $this->source,                     // line 112
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "getLanguage", [], "method", false, false, false, 112)]);
                    // line 114
                    echo "<!-- end: \"";
                    echo twig_escape_filter($this->env, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 114, $this->source); })()), "html", null, true);
                    echo twig_escape_filter($this->env, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 114, $this->source); })()), "html", null, true);
                    echo "\" -->";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['fieldId2'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            if ((array_key_exists("formPages", $context) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formPages"] ?? null), "close", [], "array", false, true, false, 118), $context["fieldId"], [], "array", true, true, false, 118))) {
                // line 120
                echo "                  </div>";
                // line 121
                $context["pageCount"] = ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 121, $this->source); })()) + 1);
            }
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
        unset($context['_seq'], $context['_iterated'], $context['fieldId'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "</div>";
        // line 126
        if (((isset($context["successfulSubmitAction"]) || array_key_exists("successfulSubmitAction", $context) ? $context["successfulSubmitAction"] : (function () { throw new RuntimeError('Variable "successfulSubmitAction" does not exist.', 126, $this->source); })()) == "bottom")) {
            // line 127
            echo "<div class=\"mauticform-error\" id=\"mauticform";
            echo twig_escape_filter($this->env, (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 127, $this->source); })()), "html", null, true);
            echo "_error\"></div>
            <div class=\"mauticform-message\" id=\"mauticform";
            // line 128
            echo twig_escape_filter($this->env, (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 128, $this->source); })()), "html", null, true);
            echo "_message\"></div>";
        }
        // line 131
        echo "<input type=\"hidden\" name=\"mauticform[formId]\" id=\"mauticform";
        echo twig_escape_filter($this->env, (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 131, $this->source); })()), "html", null, true);
        echo "_id\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "id", [], "any", false, false, false, 131));
        echo "\"/>
        <input type=\"hidden\" name=\"mauticform[return]\" id=\"mauticform";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "_return\" value=\"\"/>
        <input type=\"hidden\" name=\"mauticform[formName]\" id=\"mauticform";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 133, $this->source); })()), "html", null, true);
        echo "_name\" value=\"";
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 133, $this->source); })()), "_", "left"));
        echo "\"/>
        ";
        // line 134
        echo twig_escape_filter($this->env, ((array_key_exists("formExtra", $context)) ? (_twig_default_filter((isset($context["formExtra"]) || array_key_exists("formExtra", $context) ? $context["formExtra"] : (function () { throw new RuntimeError('Variable "formExtra" does not exist.', 134, $this->source); })()), "")) : ("")), "html", null, true);
        echo "
    </form>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Builder/form.html.twig";
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
        return array (  300 => 134,  294 => 133,  290 => 132,  283 => 131,  279 => 128,  274 => 127,  272 => 126,  270 => 124,  255 => 121,  253 => 120,  251 => 118,  233 => 114,  231 => 112,  230 => 111,  229 => 110,  228 => 109,  227 => 108,  226 => 107,  225 => 106,  224 => 105,  223 => 104,  218 => 103,  215 => 100,  212 => 98,  210 => 96,  209 => 95,  208 => 94,  207 => 93,  206 => 92,  205 => 91,  202 => 89,  200 => 88,  198 => 87,  196 => 86,  194 => 85,  177 => 84,  175 => 83,  172 => 79,  171 => 78,  170 => 77,  169 => 76,  168 => 75,  167 => 74,  166 => 73,  165 => 72,  164 => 71,  163 => 70,  160 => 68,  157 => 66,  154 => 64,  151 => 62,  149 => 60,  148 => 59,  147 => 58,  146 => 57,  145 => 56,  144 => 55,  143 => 54,  140 => 52,  138 => 51,  136 => 50,  134 => 49,  132 => 48,  123 => 46,  121 => 45,  119 => 43,  102 => 42,  99 => 40,  95 => 38,  90 => 37,  88 => 36,  75 => 35,  71 => 34,  64 => 30,  61 => 29,  59 => 28,  57 => 27,  55 => 26,  53 => 25,  51 => 24,  49 => 23,  47 => 22,  45 => 21,  43 => 20,  41 => 19,  39 => 18,  37 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Builder/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Builder\\form.html.twig");
    }
}
