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

/* @MauticLead/Field/form.html.twig */
class __TwigTemplate_98a4818f16927d98e7f948b1d20fbcb8 extends Template
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

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 6
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Field/form.html.twig", 6);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "leadfield";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "data", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)) {
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.header.edit", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "data", [], "any", false, false, false, 12), "label", [], "any", false, false, false, 12)]), "html", null, true);
        } else {
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.header.new"), "html", null, true);
        }
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        $context["textareaTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "properties_textarea_template", [], "array", false, false, false, 20), 'row');
        // line 21
        $context["selectTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "properties_select_template", [], "array", false, false, false, 21), 'row');
        // line 22
        $context["lookupTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "properties_lookup_template", [], "array", false, false, false, 22), 'row');
        // line 23
        $context["defaultTextTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "default_template_text", [], "array", false, false, false, 23), 'widget');
        // line 24
        $context["defaultTextareaTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "default_template_textarea", [], "array", false, false, false, 24), 'widget');
        // line 25
        $context["defaultLocaleTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "default_template_locale", [], "array", false, false, false, 25), 'widget');
        // line 26
        $context["defaultSelectTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "default_template_select", [], "array", false, false, false, 26), 'widget');
        // line 27
        $context["defaultBoolTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "default_template_boolean", [], "array", false, false, false, 27), 'widget');
        // line 28
        $context["defaultCountryTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "default_template_country", [], "array", false, false, false, 28), 'widget');
        // line 29
        $context["defaultRegionTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "default_template_region", [], "array", false, false, false, 29), 'widget');
        // line 30
        $context["defaultTimezoneTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "default_template_timezone", [], "array", false, false, false, 30), 'widget');
        // line 31
        yield "
";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_start');
        yield "
<div class=\"box-layout\">
    <!-- container -->
    <div class=\"col-md-8 height-auto bdr-r\">
        <div class=\"pa-md\">
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "label", [], "any", false, false, false, 38), 'row');
        yield "</div>
                <div class=\"col-md-6\">";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "alias", [], "any", false, false, false, 39), 'row');
        yield "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "object", [], "any", false, false, false, 42), 'row');
        yield "</div>
                <div class=\"col-md-6\">";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "group", [], "any", false, false, false, 43), 'row');
        yield "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "type", [], "any", false, false, false, 46), 'row');
        yield "</div>
                <div class=\"col-md-6\">";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "defaultValue", [], "any", false, false, false, 47), 'row');
        yield "</div>
            </div>

            ";
        // line 50
        $context["type"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "type", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "data", [], "any", false, false, false, 50);
        // line 51
        yield "            ";
        $context["properties"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "properties", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "data", [], "any", false, false, false, 51);
        // line 52
        yield "            ";
        $context["errors"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "properties", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "errors", [], "any", false, false, false, 52));
        // line 53
        yield "            <div class=\"row\">
                <div class=\"form-group col-md-6 ";
        // line 54
        if (((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 54, $this->source); })()) > 0)) {
            yield "has-error";
        }
        yield "\">
                    <div id=\"leadfield_properties\">
                        ";
        // line 56
        if (("boolean" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 56, $this->source); })()))) {
            // line 57
            yield "                            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_boolean.html.twig", ["yes" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 58
($context["properties"] ?? null), "yes", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "yes", [], "any", false, false, false, 58), "")) : ("")), "no" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 59
($context["properties"] ?? null), "no", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "no", [], "any", false, false, false, 59), "")) : (""))]);
            // line 60
            yield "
                        ";
        } elseif (("number" ==         // line 61
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 61, $this->source); })()))) {
            // line 62
            yield "                            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_number.html.twig", ["roundMode" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 63
($context["properties"] ?? null), "roundmode", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "roundmode", [], "any", false, false, false, 63), "")) : ("")), "scale" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 64
($context["properties"] ?? null), "scale", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "scale", [], "any", false, false, false, 64), "")) : (""))]);
            // line 65
            yield "
                        ";
        } elseif ((("select" ==         // line 66
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 66, $this->source); })())) || ("multiselect" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 66, $this->source); })())))) {
            // line 67
            yield "                            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_select.html.twig", ["form" => CoreExtension::getAttribute($this->env, $this->source,             // line 68
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "properties", [], "any", false, false, false, 68), "selectTemplate" =>             // line 69
(isset($context["selectTemplate"]) || array_key_exists("selectTemplate", $context) ? $context["selectTemplate"] : (function () { throw new RuntimeError('Variable "selectTemplate" does not exist.', 69, $this->source); })()), "type" => "select"]);
            // line 71
            yield "
                        ";
        } elseif (("lookup" ==         // line 72
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 72, $this->source); })()))) {
            // line 73
            yield "                            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_select.html.twig", ["form" => CoreExtension::getAttribute($this->env, $this->source,             // line 74
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "properties", [], "any", false, false, false, 74), "selectTemplate" =>             // line 75
(isset($context["lookupTemplate"]) || array_key_exists("lookupTemplate", $context) ? $context["lookupTemplate"] : (function () { throw new RuntimeError('Variable "lookupTemplate" does not exist.', 75, $this->source); })()), "type" => "lookup"]);
            // line 77
            yield "
                        ";
        } elseif (("textarea" ==         // line 78
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 78, $this->source); })()))) {
            // line 79
            yield "                            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_textarea.html.twig", ["form" => CoreExtension::getAttribute($this->env, $this->source,             // line 80
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "properties", [], "any", false, false, false, 80), "textareaTemplate" =>             // line 81
(isset($context["textareaTemplate"]) || array_key_exists("textareaTemplate", $context) ? $context["textareaTemplate"] : (function () { throw new RuntimeError('Variable "textareaTemplate" does not exist.', 81, $this->source); })())]);
            // line 82
            yield "
                        ";
        }
        // line 84
        yield "                    </div>
                    ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "properties", [], "any", false, false, false, 85), 'errors');
        yield "
                </div>
            </div>
            ";
        // line 88
        CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "properties", [], "any", false, false, false, 88), "setRendered", [], "method", false, false, false, 88);
        // line 89
        yield "        </div>
    </div>
    <div class=\"col-md-4 height-auto\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            <div class=\"row\">
                <div class=\"col-md-12\">";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "order", [], "any", false, false, false, 94), 'row');
        yield "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "isPublished", [], "any", false, false, false, 97), 'row');
        yield "</div>
                <div class=\"col-md-6\">";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "isRequired", [], "any", false, false, false, 98), 'row');
        yield "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "isVisible", [], "any", false, false, false, 101), 'row');
        yield "</div>
                <div class=\"col-md-6\">";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "isShortVisible", [], "any", false, false, false, 102), 'row');
        yield "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "isListable", [], "any", false, false, false, 105), 'row');
        yield "</div>
                <div class=\"col-md-6\">";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "isPubliclyUpdatable", [], "any", false, false, false, 106), 'row');
        yield "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "isIndex", [], "any", false, false, false, 109), 'row');
        yield "</div>
                <div class=\"col-md-6\">
                    ";
        // line 111
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "charLengthLimit", [], "any", true, true, false, 111)) {
            // line 112
            yield "                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "charLengthLimit", [], "any", false, false, false, 112), 'row');
            yield "
                    ";
        }
        // line 114
        yield "                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "isUniqueIdentifer", [], "any", false, false, false, 117), 'row');
        yield "</div>
            </div>
            <div class=\"row unique-identifier-warning\" style=\"";
        // line 119
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "isUniqueIdentifer", [], "any", false, false, false, 119), "vars", [], "any", false, false, false, 119), "data", [], "any", false, false, false, 119)) {
            yield "display:none;";
        }
        yield "\">
                <div class=\"col-md-12\">
                    <div class=\"alert alert-danger\">";
        // line 121
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.form.isuniqueidentifer.warning"));
        yield "</div>
                </div>
            </div>
            ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), 'rest');
        yield "
        </div>
    </div>
</div>
";
        // line 128
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'form_end');
        yield "

";
        // line 130
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "vars", [], "any", false, false, false, 130), "data", [], "any", false, false, false, 130), "id", [], "any", false, false, false, 130))) {
            // line 131
            yield "  <div id=\"field-templates\" class=\"hide\">
      <div class=\"default_template_text\">";
            // line 132
            yield (isset($context["defaultTextTemplate"]) || array_key_exists("defaultTextTemplate", $context) ? $context["defaultTextTemplate"] : (function () { throw new RuntimeError('Variable "defaultTextTemplate" does not exist.', 132, $this->source); })());
            yield "</div>
      <div class=\"default_template_textarea\">";
            // line 133
            yield (isset($context["defaultTextareaTemplate"]) || array_key_exists("defaultTextareaTemplate", $context) ? $context["defaultTextareaTemplate"] : (function () { throw new RuntimeError('Variable "defaultTextareaTemplate" does not exist.', 133, $this->source); })());
            yield "</div>
      <div class=\"default_template_boolean\">";
            // line 134
            yield (isset($context["defaultBoolTemplate"]) || array_key_exists("defaultBoolTemplate", $context) ? $context["defaultBoolTemplate"] : (function () { throw new RuntimeError('Variable "defaultBoolTemplate" does not exist.', 134, $this->source); })());
            yield "</div>
      <div class=\"default_template_country\">";
            // line 135
            yield (isset($context["defaultCountryTemplate"]) || array_key_exists("defaultCountryTemplate", $context) ? $context["defaultCountryTemplate"] : (function () { throw new RuntimeError('Variable "defaultCountryTemplate" does not exist.', 135, $this->source); })());
            yield "</div>
      <div class=\"default_template_region\">";
            // line 136
            yield (isset($context["defaultRegionTemplate"]) || array_key_exists("defaultRegionTemplate", $context) ? $context["defaultRegionTemplate"] : (function () { throw new RuntimeError('Variable "defaultRegionTemplate" does not exist.', 136, $this->source); })());
            yield "</div>
      <div class=\"default_template_locale\">";
            // line 137
            yield (isset($context["defaultLocaleTemplate"]) || array_key_exists("defaultLocaleTemplate", $context) ? $context["defaultLocaleTemplate"] : (function () { throw new RuntimeError('Variable "defaultLocaleTemplate" does not exist.', 137, $this->source); })());
            yield "</div>
      <div class=\"default_template_timezone\">";
            // line 138
            yield (isset($context["defaultTimezoneTemplate"]) || array_key_exists("defaultTimezoneTemplate", $context) ? $context["defaultTimezoneTemplate"] : (function () { throw new RuntimeError('Variable "defaultTimezoneTemplate" does not exist.', 138, $this->source); })());
            yield "</div>
      <div class=\"default_template_select\">";
            // line 139
            yield (isset($context["defaultSelectTemplate"]) || array_key_exists("defaultSelectTemplate", $context) ? $context["defaultSelectTemplate"] : (function () { throw new RuntimeError('Variable "defaultSelectTemplate" does not exist.', 139, $this->source); })());
            yield "</div>
      ";
            // line 140
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_number.html.twig");
            yield "
      ";
            // line 141
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_boolean.html.twig");
            yield "
      ";
            // line 142
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_select.html.twig", ["form" => null, "selectTemplate" =>             // line 144
(isset($context["selectTemplate"]) || array_key_exists("selectTemplate", $context) ? $context["selectTemplate"] : (function () { throw new RuntimeError('Variable "selectTemplate" does not exist.', 144, $this->source); })()), "type" => "select"]);
            // line 146
            yield "

      ";
            // line 148
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_select.html.twig", ["form" => null, "selectTemplate" =>             // line 150
(isset($context["selectTemplate"]) || array_key_exists("selectTemplate", $context) ? $context["selectTemplate"] : (function () { throw new RuntimeError('Variable "selectTemplate" does not exist.', 150, $this->source); })()), "type" => "multiselect"]);
            // line 152
            yield "

      ";
            // line 154
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_select.html.twig", ["form" => null, "selectTemplate" =>             // line 156
(isset($context["selectTemplate"]) || array_key_exists("selectTemplate", $context) ? $context["selectTemplate"] : (function () { throw new RuntimeError('Variable "selectTemplate" does not exist.', 156, $this->source); })()), "type" => "lookup"]);
            // line 158
            yield "

      ";
            // line 160
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_textarea.html.twig", ["textareaTemplate" =>             // line 161
(isset($context["textareaTemplate"]) || array_key_exists("textareaTemplate", $context) ? $context["textareaTemplate"] : (function () { throw new RuntimeError('Variable "textareaTemplate" does not exist.', 161, $this->source); })())]);
            // line 162
            yield "
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Field/form.html.twig";
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
        return array (  393 => 162,  391 => 161,  390 => 160,  386 => 158,  384 => 156,  383 => 154,  379 => 152,  377 => 150,  376 => 148,  372 => 146,  370 => 144,  369 => 142,  365 => 141,  361 => 140,  357 => 139,  353 => 138,  349 => 137,  345 => 136,  341 => 135,  337 => 134,  333 => 133,  329 => 132,  326 => 131,  324 => 130,  319 => 128,  312 => 124,  306 => 121,  299 => 119,  294 => 117,  289 => 114,  283 => 112,  281 => 111,  276 => 109,  270 => 106,  266 => 105,  260 => 102,  256 => 101,  250 => 98,  246 => 97,  240 => 94,  233 => 89,  231 => 88,  225 => 85,  222 => 84,  218 => 82,  216 => 81,  215 => 80,  213 => 79,  211 => 78,  208 => 77,  206 => 75,  205 => 74,  203 => 73,  201 => 72,  198 => 71,  196 => 69,  195 => 68,  193 => 67,  191 => 66,  188 => 65,  186 => 64,  185 => 63,  183 => 62,  181 => 61,  178 => 60,  176 => 59,  175 => 58,  173 => 57,  171 => 56,  164 => 54,  161 => 53,  158 => 52,  155 => 51,  153 => 50,  147 => 47,  143 => 46,  137 => 43,  133 => 42,  127 => 39,  123 => 38,  114 => 32,  111 => 31,  109 => 30,  107 => 29,  105 => 28,  103 => 27,  101 => 26,  99 => 25,  97 => 24,  95 => 23,  93 => 22,  91 => 21,  89 => 20,  82 => 18,  76 => 14,  73 => 12,  71 => 11,  64 => 10,  53 => 8,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Field/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Field\\form.html.twig");
    }
}
