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

/* @MauticDynamicContent/DynamicContent/form.html.twig */
class __TwigTemplate_0f542887dea63f5477c4f35469372ead extends Template
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
            'translationBase' => [$this, 'block_translationBase'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), ["@MauticDynamicContent/FormTheme/Filter/layout.html.twig"], true);
        // line 4
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticDynamicContent/DynamicContent/form.html.twig", 4);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "dynamicContent";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translationBase(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "mautic.dynamicContent";
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
        yield "  ";
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "data", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11))) {
            // line 12
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.header.new"), "html", null, true);
            yield "
  ";
        } else {
            // line 14
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.header.edit", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "vars", [], "any", false, false, false, 14), "data", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14)]), "html", null, true);
            yield "
  ";
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
        // line 19
        $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "vars", [], "any", false, false, false, 19), "fields", [], "any", false, false, false, 19);
        // line 20
        $context["index"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "filters", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20)));
        // line 21
        $context["hasMainErrors"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), ["filters"]);
        // line 22
        $context["hasFilterErrors"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "filters", [], "any", false, false, false, 22));
        // line 24
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        yield "
<div class=\"box-layout\">
    <div class=\"col-md-9 height-auto\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <ul class=\"nav nav-tabs pr-md pl-md\">
                    <li class=\"active\">
                        <a href=\"#details\" role=\"tab\" data-toggle=\"tab\" class=\"";
        // line 31
        if ((isset($context["hasMainErrors"]) || array_key_exists("hasMainErrors", $context) ? $context["hasMainErrors"] : (function () { throw new RuntimeError('Variable "hasMainErrors" does not exist.', 31, $this->source); })())) {
            yield "text-danger";
        }
        yield "\">
                            ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
                            ";
        // line 33
        if ((isset($context["hasMainErrors"]) || array_key_exists("hasMainErrors", $context) ? $context["hasMainErrors"] : (function () { throw new RuntimeError('Variable "hasMainErrors" does not exist.', 33, $this->source); })())) {
            // line 34
            yield "                                <i class=\"ri-alert-line\"></i>
                            ";
        }
        // line 36
        yield "                        </a>
                    </li>
                    <li class=\"";
        // line 38
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "vars", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38), "isCampaignBased", [], "any", false, false, false, 38) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "updateSelect", [], "any", true, true, false, 38))) {
            yield "hide";
        }
        yield "\" id=\"dwcFiltersTab\">
                        <a href=\"#filters\" role=\"tab\" data-toggle=\"tab\" class=\"";
        // line 39
        if ((isset($context["hasFilterErrors"]) || array_key_exists("hasFilterErrors", $context) ? $context["hasFilterErrors"] : (function () { throw new RuntimeError('Variable "hasFilterErrors" does not exist.', 39, $this->source); })())) {
            yield "text-danger";
        }
        yield "\">
                            ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.filters"), "html", null, true);
        yield "
                            ";
        // line 41
        if ((isset($context["hasFilterErrors"]) || array_key_exists("hasFilterErrors", $context) ? $context["hasFilterErrors"] : (function () { throw new RuntimeError('Variable "hasFilterErrors" does not exist.', 41, $this->source); })())) {
            // line 42
            yield "                                <i class=\"ri-alert-line\"></i>
                            ";
        }
        // line 44
        yield "                        </a>
                    </li>
                </ul>

                <!-- start: tab-content -->
                <div class=\"tab-content pa-md\">
                    <div class=\"tab-pane fade in active bdr-w-0\" id=\"details\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), 'row');
        yield "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "content", [], "any", false, false, false, 58), 'row');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade bdr-w-0\" id=\"filters\">
                        ";
        // line 63
        if (((isset($context["hasFilterErrors"]) || array_key_exists("hasFilterErrors", $context) ? $context["hasFilterErrors"] : (function () { throw new RuntimeError('Variable "hasFilterErrors" does not exist.', 63, $this->source); })()) &&  !("" === $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "filters", [], "any", false, false, false, 63), 'errors')))) {
            // line 64
            yield "                            <div class=\"has-error alert alert-danger\" role=\"alert\" style=\"padding:5px 10px 0 10px;\">
                                ";
            // line 65
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "filters", [], "any", false, false, false, 65), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 68
        yield "                        <div class=\"dwc-filter bdr-w-0\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "vars", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
        yield "\">
                            <div class=\"row\">
                                <div class=\"col-xs-7\">
                                    <label>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filters"), "html", null, true);
        yield "</label>
                                </div>
                                <div class=\"col-xs-5\">
                                    <div class=\"form-group\">
                                        <div class=\"available-filters mb-md pl-0\"
                                             data-prototype=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "filters", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "prototype", [], "any", false, false, false, 76), 'widget'));
        yield "\"
                                             data-index=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 77, $this->source); })()) + 1), "html", null, true);
        yield "\">
                                            <select class=\"chosen form-control\" id=\"available_filters\">
                                                <option value=\"\"></option>
                                                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["object"] => $context["field"]) {
            // line 81
            yield "                                                    ";
            $context["icon"] = ((("company" == $context["object"])) ? ("building") : ("user"));
            // line 82
            yield "                                                    <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead." . $context["object"])), "html", null, true);
            yield "\">
                                                        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["field"]);
            foreach ($context['_seq'] as $context["value"] => $context["params"]) {
                // line 84
                yield "                                                            ";
                $context["list"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 84), "list", [], "any", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 84), "list", [], "any", false, false, false, 84), [])) : ([]));
                // line 85
                yield "                                                            ";
                if (("boolean" === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, false, false, 85), "type", [], "any", false, false, false, 85))) {
                    // line 86
                    yield "                                                              ";
                    $context["choices"] = Twig\Extension\CoreExtension::reverse($this->env->getCharset(), Mautic\FormBundle\Helper\FormFieldHelper::parseBooleanList((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 86, $this->source); })())));
                    // line 87
                    yield "                                                            ";
                } else {
                    // line 88
                    yield "                                                              ";
                    $context["choices"] = Mautic\LeadBundle\Helper\FormFieldHelper::parseListForChoices((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 88, $this->source); })()));
                    // line 89
                    yield "                                                            ";
                }
                // line 90
                yield "                                                            ";
                $context["callback"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 90), "callback", [], "any", true, true, false, 90)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 90), "callback", [], "any", false, false, false, 90), "")) : (""));
                // line 91
                yield "                                                            ";
                $context["operators"] = CoreExtension::getAttribute($this->env, $this->source, $context["params"], "operators", [], "any", false, false, false, 91);
                // line 92
                yield "                                                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"]);
                yield "\"
                                                                    id=\"available_";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["object"], "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"
                                                                    data-field-object=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["object"], "html", null, true);
                yield "\"
                                                                    data-field-type=\"";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, false, false, 95), "type", [], "any", false, false, false, 95), "html", null, true);
                yield "\"
                                                                    data-field-list=\"";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 96, $this->source); })())), "html", null, true);
                yield "\"
                                                                    data-field-callback=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 97, $this->source); })()), "html", null, true);
                yield "\"
                                                                    data-field-operators=\"";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["operators"]) || array_key_exists("operators", $context) ? $context["operators"] : (function () { throw new RuntimeError('Variable "operators" does not exist.', 98, $this->source); })())), "html", null, true);
                yield "\"
                                                                    class=\"segment-filter ";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 99, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["params"], "label", [], "any", false, false, false, 99)), "html", null, true);
                yield "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['value'], $context['params'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            yield "                                                    </optgroup>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['object'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "                                            </select>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"selected-filters\" id=\"dwc_filters\" data-filter-container>
                                        ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "filters", [], "any", false, false, false, 112), 'widget');
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-3 height-auto bdr-l\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "category", [], "any", false, false, false, 124), 'row');
        yield "
            ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "language", [], "any", false, false, false, 125), 'row');
        yield "
            ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "translationParent", [], "any", false, false, false, 126), 'row');
        yield "
            <div id=\"publishStatus\">
                ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "isPublished", [], "any", false, false, false, 128), 'row');
        yield "
            </div>
            ";
        // line 130
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "updateSelect", [], "any", true, true, false, 130)) {
            // line 131
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "isCampaignBased", [], "any", false, false, false, 131), 'row');
            yield "
            ";
        }
        // line 133
        yield "            <div id=\"slotNameDiv\" class=\"";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "vars", [], "any", false, false, false, 133), "value", [], "any", false, false, false, 133), "isCampaignBased", [], "any", false, false, false, 133)) {
            yield "hide";
        }
        yield "\">
                ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "slotName", [], "any", false, false, false, 134), 'row');
        yield "
            </div>
            <hr/>
            <h5>";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.utm_tags"), "html", null, true);
        yield "</h5>
            <br/>
            ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "utmTags", [], "any", false, false, false, 139));
        foreach ($context['_seq'] as $context["_key"] => $context["utmTag"]) {
            // line 140
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["utmTag"], 'row');
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['utmTag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "            <div class=\"hide\">
                ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "publishUp", [], "any", false, false, false, 143), 'row');
        yield "
                ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "publishDown", [], "any", false, false, false, 144), 'row');
        yield "
                ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), 'rest');
        yield "
            </div>
        </div>
    </div>
</div>
";
        // line 150
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), 'form_end');
        // line 152
        $context["templates"] = ["countries" => "country-template", "regions" => "region-template", "timezones" => "timezone-template", "select" => "select-template", "lists" => "leadlist-template", "campaign" => "campaign-template", "deviceTypes" => "device_type-template", "deviceBrands" => "device_brand-template", "deviceOs" => "device_os-template", "emails" => "lead_email_received-template", "tags" => "tags-template", "stage" => "stage-template", "locales" => "locale-template", "globalcategory" => "globalcategory-template"];
        // line 168
        yield "<div class=\"hide\" id=\"templates\">
    ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 169, $this->source); })()));
        foreach ($context['_seq'] as $context["dataKey"] => $context["template"]) {
            // line 170
            yield "        <select class=\"form-control not-chosen ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["template"], "html", null, true);
            yield "\"
                ";
            // line 171
            if (("tags" == $context["dataKey"])) {
                yield "data-placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.tags.select_or_create"), "html", null, true);
                yield "\"";
            }
            // line 172
            yield "                ";
            if (("tags" == $context["dataKey"])) {
                yield "data-no-results-text=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.tags.enter_to_create"), "html", null, true);
                yield "\"";
            }
            // line 173
            yield "                ";
            if (("tags" == $context["dataKey"])) {
                yield "data-allow-add=\"true\"";
            }
            // line 174
            yield "                ";
            if (("tags" == $context["dataKey"])) {
                yield "onchange=\"Mautic.createLeadTag(this)\"";
            }
            // line 175
            yield "                name=\"dwc[filters][__name__][filter]\"
                id=\"dwc_filters___name___filter\">
            ";
            // line 177
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 177), $context["dataKey"], [], "array", true, true, false, 177)) {
                // line 178
                yield "                ";
                $context["index"] = 0;
                // line 179
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "vars", [], "any", false, false, false, 179), $context["dataKey"], [], "array", false, false, false, 179));
                foreach ($context['_seq'] as $context["label"] => $context["value"]) {
                    // line 180
                    yield "                    ";
                    if (is_iterable($context["value"])) {
                        // line 181
                        yield "                        <optgroup label=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                        yield "\">
                        ";
                        // line 182
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($context["value"]);
                        foreach ($context['_seq'] as $context["optionLabel"] => $context["optionValue"]) {
                            // line 183
                            yield "                            ";
                            if (($context["dataKey"] == "regions")) {
                                // line 184
                                yield "                                ";
                                $context["optionValue"] = (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 184, $this->source); })());
                                // line 185
                                yield "                                ";
                                $context["index"] = ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 185, $this->source); })()) + 1);
                                // line 186
                                yield "                            ";
                            }
                            // line 187
                            yield "                            <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["optionValue"], "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["optionLabel"], "html", null, true);
                            yield "</option>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['optionLabel'], $context['optionValue'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 189
                        yield "                        </optgroup>
                    ";
                    } elseif ((("lists" !=                     // line 190
$context["dataKey"]) || (array_key_exists("currentListId", $context) && ($context["value"] != (isset($context["currentListId"]) || array_key_exists("currentListId", $context) ? $context["currentListId"] : (function () { throw new RuntimeError('Variable "currentListId" does not exist.', 190, $this->source); })()))))) {
                        // line 191
                        yield "                        <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                        yield "</option>
                    ";
                    }
                    // line 193
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                yield "            ";
            }
            // line 195
            yield "        </select>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['dataKey'], $context['template'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticDynamicContent/DynamicContent/form.html.twig";
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
        return array (  541 => 197,  534 => 195,  531 => 194,  525 => 193,  517 => 191,  515 => 190,  512 => 189,  501 => 187,  498 => 186,  495 => 185,  492 => 184,  489 => 183,  485 => 182,  480 => 181,  477 => 180,  472 => 179,  469 => 178,  467 => 177,  463 => 175,  458 => 174,  453 => 173,  446 => 172,  440 => 171,  435 => 170,  431 => 169,  428 => 168,  426 => 152,  424 => 150,  416 => 145,  412 => 144,  408 => 143,  405 => 142,  396 => 140,  392 => 139,  387 => 137,  381 => 134,  374 => 133,  368 => 131,  366 => 130,  361 => 128,  356 => 126,  352 => 125,  348 => 124,  333 => 112,  322 => 103,  315 => 101,  305 => 99,  301 => 98,  297 => 97,  293 => 96,  289 => 95,  285 => 94,  279 => 93,  274 => 92,  271 => 91,  268 => 90,  265 => 89,  262 => 88,  259 => 87,  256 => 86,  253 => 85,  250 => 84,  246 => 83,  241 => 82,  238 => 81,  234 => 80,  228 => 77,  224 => 76,  216 => 71,  209 => 68,  203 => 65,  200 => 64,  198 => 63,  190 => 58,  182 => 53,  171 => 44,  167 => 42,  165 => 41,  161 => 40,  155 => 39,  149 => 38,  145 => 36,  141 => 34,  139 => 33,  135 => 32,  129 => 31,  119 => 24,  117 => 22,  115 => 21,  113 => 20,  111 => 19,  104 => 18,  95 => 14,  89 => 12,  86 => 11,  79 => 10,  68 => 8,  57 => 7,  52 => 4,  50 => 5,  43 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDynamicContent/DynamicContent/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DynamicContentBundle\\Resources\\views\\DynamicContent\\form.html.twig");
    }
}
