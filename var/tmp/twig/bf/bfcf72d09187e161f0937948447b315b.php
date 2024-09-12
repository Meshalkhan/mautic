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

/* @MauticLead/Field/form.html.twig */
class __TwigTemplate_0b473ac81d02b71afd6000ea78a5bbef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Field/form.html.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "leadfield";
    }

    // line 10
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "data", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)) {
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.header.edit", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "data", [], "any", false, false, false, 12), "label", [], "any", false, false, false, 12)]), "html", null, true);
        } else {
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.header.new"), "html", null, true);
        }
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["textareaTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "properties_textarea_template", [], "array", false, false, false, 20), 'row');
        // line 21
        $context["selectTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "properties_select_template", [], "array", false, false, false, 21), 'row');
        // line 22
        $context["lookupTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "properties_lookup_template", [], "array", false, false, false, 22), 'row');
        // line 23
        $context["defaultTextTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "default_template_text", [], "array", false, false, false, 23), 'widget');
        // line 24
        $context["defaultTextareaTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "default_template_textarea", [], "array", false, false, false, 24), 'widget');
        // line 25
        $context["defaultLocaleTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "default_template_locale", [], "array", false, false, false, 25), 'widget');
        // line 26
        $context["defaultSelectTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "default_template_select", [], "array", false, false, false, 26), 'widget');
        // line 27
        $context["defaultBoolTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "default_template_boolean", [], "array", false, false, false, 27), 'widget');
        // line 28
        $context["defaultCountryTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "default_template_country", [], "array", false, false, false, 28), 'widget');
        // line 29
        $context["defaultRegionTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "default_template_region", [], "array", false, false, false, 29), 'widget');
        // line 30
        $context["defaultTimezoneTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "default_template_timezone", [], "array", false, false, false, 30), 'widget');
        // line 31
        echo "
";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_start');
        echo "
<div class=\"box-layout\">
    <!-- container -->
    <div class=\"col-md-8 height-auto bdr-r\">
        <div class=\"pa-md\">
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "label", [], "any", false, false, false, 38), 'row');
        echo "</div>
                <div class=\"col-md-6\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "alias", [], "any", false, false, false, 39), 'row');
        echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "object", [], "any", false, false, false, 42), 'row');
        echo "</div>
                <div class=\"col-md-6\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "group", [], "any", false, false, false, 43), 'row');
        echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "type", [], "any", false, false, false, 46), 'row');
        echo "</div>
                <div class=\"col-md-6\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "defaultValue", [], "any", false, false, false, 47), 'row');
        echo "</div>
            </div>

            ";
        // line 50
        $context["type"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "type", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "data", [], "any", false, false, false, 50);
        // line 51
        echo "            ";
        $context["properties"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "properties", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "data", [], "any", false, false, false, 51);
        // line 52
        echo "            ";
        $context["errors"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "properties", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "errors", [], "any", false, false, false, 52));
        // line 53
        echo "            <div class=\"row\">
                <div class=\"form-group col-md-6 ";
        // line 54
        if (((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 54, $this->source); })()) > 0)) {
            echo "has-error";
        }
        echo "\">
                    <div id=\"leadfield_properties\">
                        ";
        // line 56
        if (("boolean" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 56, $this->source); })()))) {
            // line 57
            echo "                            ";
            echo twig_include($this->env, $context, "@MauticLead/Field/properties_boolean.html.twig", ["yes" => ((twig_get_attribute($this->env, $this->source,             // line 58
($context["properties"] ?? null), "yes", [], "any", true, true, false, 58)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "yes", [], "any", false, false, false, 58), "")) : ("")), "no" => ((twig_get_attribute($this->env, $this->source,             // line 59
($context["properties"] ?? null), "no", [], "any", true, true, false, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "no", [], "any", false, false, false, 59), "")) : (""))]);
            // line 60
            echo "
                        ";
        } elseif (("number" ==         // line 61
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 61, $this->source); })()))) {
            // line 62
            echo "                            ";
            echo twig_include($this->env, $context, "@MauticLead/Field/properties_number.html.twig", ["roundMode" => ((twig_get_attribute($this->env, $this->source,             // line 63
($context["properties"] ?? null), "roundmode", [], "any", true, true, false, 63)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "roundmode", [], "any", false, false, false, 63), "")) : ("")), "scale" => ((twig_get_attribute($this->env, $this->source,             // line 64
($context["properties"] ?? null), "scale", [], "any", true, true, false, 64)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "scale", [], "any", false, false, false, 64), "")) : (""))]);
            // line 65
            echo "
                        ";
        } elseif ((("select" ==         // line 66
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 66, $this->source); })())) || ("multiselect" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 66, $this->source); })())))) {
            // line 67
            echo "                            ";
            echo twig_include($this->env, $context, "@MauticLead/Field/properties_select.html.twig", ["form" => twig_get_attribute($this->env, $this->source,             // line 68
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "properties", [], "any", false, false, false, 68), "selectTemplate" =>             // line 69
(isset($context["selectTemplate"]) || array_key_exists("selectTemplate", $context) ? $context["selectTemplate"] : (function () { throw new RuntimeError('Variable "selectTemplate" does not exist.', 69, $this->source); })()), "type" => "select"]);
            // line 71
            echo "
                        ";
        } elseif (("lookup" ==         // line 72
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 72, $this->source); })()))) {
            // line 73
            echo "                            ";
            echo twig_include($this->env, $context, "@MauticLead/Field/properties_select.html.twig", ["form" => twig_get_attribute($this->env, $this->source,             // line 74
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "properties", [], "any", false, false, false, 74), "selectTemplate" =>             // line 75
(isset($context["lookupTemplate"]) || array_key_exists("lookupTemplate", $context) ? $context["lookupTemplate"] : (function () { throw new RuntimeError('Variable "lookupTemplate" does not exist.', 75, $this->source); })()), "type" => "lookup"]);
            // line 77
            echo "
                        ";
        } elseif (("textarea" ==         // line 78
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 78, $this->source); })()))) {
            // line 79
            echo "                            ";
            echo twig_include($this->env, $context, "@MauticLead/Field/properties_textarea.html.twig", ["form" => twig_get_attribute($this->env, $this->source,             // line 80
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "properties", [], "any", false, false, false, 80), "textareaTemplate" =>             // line 81
(isset($context["textareaTemplate"]) || array_key_exists("textareaTemplate", $context) ? $context["textareaTemplate"] : (function () { throw new RuntimeError('Variable "textareaTemplate" does not exist.', 81, $this->source); })())]);
            // line 82
            echo "
                        ";
        }
        // line 84
        echo "                    </div>
                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "properties", [], "any", false, false, false, 85), 'errors');
        echo "
                </div>
            </div>
            ";
        // line 88
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "properties", [], "any", false, false, false, 88), "setRendered", [], "method", false, false, false, 88);
        // line 89
        echo "        </div>
    </div>
    <div class=\"col-md-4 height-auto\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            <div class=\"row\">
                <div class=\"col-md-12\">";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "order", [], "any", false, false, false, 94), 'row');
        echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "isPublished", [], "any", false, false, false, 97), 'row');
        echo "</div>
                <div class=\"col-md-6\">";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "isRequired", [], "any", false, false, false, 98), 'row');
        echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "isVisible", [], "any", false, false, false, 101), 'row');
        echo "</div>
                <div class=\"col-md-6\">";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "isShortVisible", [], "any", false, false, false, 102), 'row');
        echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "isListable", [], "any", false, false, false, 105), 'row');
        echo "</div>
                <div class=\"col-md-6\">";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "isPubliclyUpdatable", [], "any", false, false, false, 106), 'row');
        echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "isIndex", [], "any", false, false, false, 109), 'row');
        echo "</div>
                <div class=\"col-md-6\">
                    ";
        // line 111
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "charLengthLimit", [], "any", true, true, false, 111)) {
            // line 112
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "charLengthLimit", [], "any", false, false, false, 112), 'row');
            echo "
                    ";
        }
        // line 114
        echo "                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "isUniqueIdentifer", [], "any", false, false, false, 117), 'row');
        echo "</div>
            </div>
            <div class=\"row unique-identifier-warning\" style=\"";
        // line 119
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "isUniqueIdentifer", [], "any", false, false, false, 119), "vars", [], "any", false, false, false, 119), "data", [], "any", false, false, false, 119)) {
            echo "display:none;";
        }
        echo "\">
                <div class=\"col-md-12\">
                    <div class=\"alert alert-danger\">";
        // line 121
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.form.isuniqueidentifer.warning"));
        echo "</div>
                </div>
            </div>
            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), 'rest');
        echo "
        </div>
    </div>
</div>
";
        // line 128
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'form_end');
        echo "

";
        // line 130
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "vars", [], "any", false, false, false, 130), "data", [], "any", false, false, false, 130), "id", [], "any", false, false, false, 130))) {
            // line 131
            echo "  <div id=\"field-templates\" class=\"hide\">
      <div class=\"default_template_text\">";
            // line 132
            echo (isset($context["defaultTextTemplate"]) || array_key_exists("defaultTextTemplate", $context) ? $context["defaultTextTemplate"] : (function () { throw new RuntimeError('Variable "defaultTextTemplate" does not exist.', 132, $this->source); })());
            echo "</div>
      <div class=\"default_template_textarea\">";
            // line 133
            echo (isset($context["defaultTextareaTemplate"]) || array_key_exists("defaultTextareaTemplate", $context) ? $context["defaultTextareaTemplate"] : (function () { throw new RuntimeError('Variable "defaultTextareaTemplate" does not exist.', 133, $this->source); })());
            echo "</div>
      <div class=\"default_template_boolean\">";
            // line 134
            echo (isset($context["defaultBoolTemplate"]) || array_key_exists("defaultBoolTemplate", $context) ? $context["defaultBoolTemplate"] : (function () { throw new RuntimeError('Variable "defaultBoolTemplate" does not exist.', 134, $this->source); })());
            echo "</div>
      <div class=\"default_template_country\">";
            // line 135
            echo (isset($context["defaultCountryTemplate"]) || array_key_exists("defaultCountryTemplate", $context) ? $context["defaultCountryTemplate"] : (function () { throw new RuntimeError('Variable "defaultCountryTemplate" does not exist.', 135, $this->source); })());
            echo "</div>
      <div class=\"default_template_region\">";
            // line 136
            echo (isset($context["defaultRegionTemplate"]) || array_key_exists("defaultRegionTemplate", $context) ? $context["defaultRegionTemplate"] : (function () { throw new RuntimeError('Variable "defaultRegionTemplate" does not exist.', 136, $this->source); })());
            echo "</div>
      <div class=\"default_template_locale\">";
            // line 137
            echo (isset($context["defaultLocaleTemplate"]) || array_key_exists("defaultLocaleTemplate", $context) ? $context["defaultLocaleTemplate"] : (function () { throw new RuntimeError('Variable "defaultLocaleTemplate" does not exist.', 137, $this->source); })());
            echo "</div>
      <div class=\"default_template_timezone\">";
            // line 138
            echo (isset($context["defaultTimezoneTemplate"]) || array_key_exists("defaultTimezoneTemplate", $context) ? $context["defaultTimezoneTemplate"] : (function () { throw new RuntimeError('Variable "defaultTimezoneTemplate" does not exist.', 138, $this->source); })());
            echo "</div>
      <div class=\"default_template_select\">";
            // line 139
            echo (isset($context["defaultSelectTemplate"]) || array_key_exists("defaultSelectTemplate", $context) ? $context["defaultSelectTemplate"] : (function () { throw new RuntimeError('Variable "defaultSelectTemplate" does not exist.', 139, $this->source); })());
            echo "</div>
      ";
            // line 140
            echo twig_include($this->env, $context, "@MauticLead/Field/properties_number.html.twig");
            echo "
      ";
            // line 141
            echo twig_include($this->env, $context, "@MauticLead/Field/properties_boolean.html.twig");
            echo "
      ";
            // line 142
            echo twig_include($this->env, $context, "@MauticLead/Field/properties_select.html.twig", ["form" => null, "selectTemplate" =>             // line 144
(isset($context["selectTemplate"]) || array_key_exists("selectTemplate", $context) ? $context["selectTemplate"] : (function () { throw new RuntimeError('Variable "selectTemplate" does not exist.', 144, $this->source); })()), "type" => "select"]);
            // line 146
            echo "

      ";
            // line 148
            echo twig_include($this->env, $context, "@MauticLead/Field/properties_select.html.twig", ["form" => null, "selectTemplate" =>             // line 150
(isset($context["selectTemplate"]) || array_key_exists("selectTemplate", $context) ? $context["selectTemplate"] : (function () { throw new RuntimeError('Variable "selectTemplate" does not exist.', 150, $this->source); })()), "type" => "multiselect"]);
            // line 152
            echo "

      ";
            // line 154
            echo twig_include($this->env, $context, "@MauticLead/Field/properties_select.html.twig", ["form" => null, "selectTemplate" =>             // line 156
(isset($context["selectTemplate"]) || array_key_exists("selectTemplate", $context) ? $context["selectTemplate"] : (function () { throw new RuntimeError('Variable "selectTemplate" does not exist.', 156, $this->source); })()), "type" => "lookup"]);
            // line 158
            echo "

      ";
            // line 160
            echo twig_include($this->env, $context, "@MauticLead/Field/properties_textarea.html.twig", ["textareaTemplate" =>             // line 161
(isset($context["textareaTemplate"]) || array_key_exists("textareaTemplate", $context) ? $context["textareaTemplate"] : (function () { throw new RuntimeError('Variable "textareaTemplate" does not exist.', 161, $this->source); })())]);
            // line 162
            echo "
  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Field/form.html.twig";
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
        return array (  377 => 162,  375 => 161,  374 => 160,  370 => 158,  368 => 156,  367 => 154,  363 => 152,  361 => 150,  360 => 148,  356 => 146,  354 => 144,  353 => 142,  349 => 141,  345 => 140,  341 => 139,  337 => 138,  333 => 137,  329 => 136,  325 => 135,  321 => 134,  317 => 133,  313 => 132,  310 => 131,  308 => 130,  303 => 128,  296 => 124,  290 => 121,  283 => 119,  278 => 117,  273 => 114,  267 => 112,  265 => 111,  260 => 109,  254 => 106,  250 => 105,  244 => 102,  240 => 101,  234 => 98,  230 => 97,  224 => 94,  217 => 89,  215 => 88,  209 => 85,  206 => 84,  202 => 82,  200 => 81,  199 => 80,  197 => 79,  195 => 78,  192 => 77,  190 => 75,  189 => 74,  187 => 73,  185 => 72,  182 => 71,  180 => 69,  179 => 68,  177 => 67,  175 => 66,  172 => 65,  170 => 64,  169 => 63,  167 => 62,  165 => 61,  162 => 60,  160 => 59,  159 => 58,  157 => 57,  155 => 56,  148 => 54,  145 => 53,  142 => 52,  139 => 51,  137 => 50,  131 => 47,  127 => 46,  121 => 43,  117 => 42,  111 => 39,  107 => 38,  98 => 32,  95 => 31,  93 => 30,  91 => 29,  89 => 28,  87 => 27,  85 => 26,  83 => 25,  81 => 24,  79 => 23,  77 => 22,  75 => 21,  73 => 20,  69 => 18,  64 => 14,  61 => 12,  59 => 11,  55 => 10,  48 => 8,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Field/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Field\\form.html.twig");
    }
}
