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

/* @MauticDynamicContent/DynamicContent/form.html.twig */
class __TwigTemplate_b5b481ad47cd5d3c67d9c163bc847b39 extends Template
{
    private $source;
    private $macros = [];

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

    protected function doGetParent(array $context)
    {
        // line 4
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), ["@MauticDynamicContent/FormTheme/Filter/layout.html.twig"], true);
        // line 4
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticDynamicContent/DynamicContent/form.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "dynamicContent";
    }

    // line 8
    public function block_translationBase($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "mautic.dynamicContent";
    }

    // line 10
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "  ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "data", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11))) {
            // line 12
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.header.new"), "html", null, true);
            echo "
  ";
        } else {
            // line 14
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.header.edit", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "vars", [], "any", false, false, false, 14), "data", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14)]), "html", null, true);
            echo "
  ";
        }
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        $context["fields"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "vars", [], "any", false, false, false, 19), "fields", [], "any", false, false, false, 19);
        // line 20
        $context["index"] = twig_length_filter($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "filters", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20)));
        // line 21
        $context["hasMainErrors"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), ["filters"]);
        // line 22
        $context["hasFilterErrors"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "filters", [], "any", false, false, false, 22));
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
<div class=\"box-layout\">
    <div class=\"col-md-9 height-auto\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <ul class=\"nav nav-tabs pr-md pl-md\">
                    <li class=\"active\">
                        <a href=\"#details\" role=\"tab\" data-toggle=\"tab\" class=\"";
        // line 31
        if ((isset($context["hasMainErrors"]) || array_key_exists("hasMainErrors", $context) ? $context["hasMainErrors"] : (function () { throw new RuntimeError('Variable "hasMainErrors" does not exist.', 31, $this->source); })())) {
            echo "text-danger";
        }
        echo "\">
                            ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "
                            ";
        // line 33
        if ((isset($context["hasMainErrors"]) || array_key_exists("hasMainErrors", $context) ? $context["hasMainErrors"] : (function () { throw new RuntimeError('Variable "hasMainErrors" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "                                <i class=\"ri-alert-line\"></i>
                            ";
        }
        // line 36
        echo "                        </a>
                    </li>
                    <li class=\"";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "vars", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38), "isCampaignBased", [], "any", false, false, false, 38) || twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "updateSelect", [], "any", true, true, false, 38))) {
            echo "hide";
        }
        echo "\" id=\"dwcFiltersTab\">
                        <a href=\"#filters\" role=\"tab\" data-toggle=\"tab\" class=\"";
        // line 39
        if ((isset($context["hasFilterErrors"]) || array_key_exists("hasFilterErrors", $context) ? $context["hasFilterErrors"] : (function () { throw new RuntimeError('Variable "hasFilterErrors" does not exist.', 39, $this->source); })())) {
            echo "text-danger";
        }
        echo "\">
                            ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.filters"), "html", null, true);
        echo "
                            ";
        // line 41
        if ((isset($context["hasFilterErrors"]) || array_key_exists("hasFilterErrors", $context) ? $context["hasFilterErrors"] : (function () { throw new RuntimeError('Variable "hasFilterErrors" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "                                <i class=\"ri-alert-line\"></i>
                            ";
        }
        // line 44
        echo "                        </a>
                    </li>
                </ul>

                <!-- start: tab-content -->
                <div class=\"tab-content pa-md\">
                    <div class=\"tab-pane fade in active bdr-w-0\" id=\"details\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "content", [], "any", false, false, false, 58), 'row');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade bdr-w-0\" id=\"filters\">
                        ";
        // line 63
        if (((isset($context["hasFilterErrors"]) || array_key_exists("hasFilterErrors", $context) ? $context["hasFilterErrors"] : (function () { throw new RuntimeError('Variable "hasFilterErrors" does not exist.', 63, $this->source); })()) &&  !("" === $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "filters", [], "any", false, false, false, 63), 'errors')))) {
            // line 64
            echo "                            <div class=\"has-error alert alert-danger\" role=\"alert\" style=\"padding:5px 10px 0 10px;\">
                                ";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "filters", [], "any", false, false, false, 65), 'errors');
            echo "
                            </div>
                        ";
        }
        // line 68
        echo "                        <div class=\"dwc-filter bdr-w-0\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "vars", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
        echo "\">
                            <div class=\"row\">
                                <div class=\"col-xs-7\">
                                    <label>";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filters"), "html", null, true);
        echo "</label>
                                </div>
                                <div class=\"col-xs-5\">
                                    <div class=\"form-group\">
                                        <div class=\"available-filters mb-md pl-0\"
                                             data-prototype=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "filters", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "prototype", [], "any", false, false, false, 76), 'widget'));
        echo "\"
                                             data-index=\"";
        // line 77
        echo twig_escape_filter($this->env, ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 77, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                            <select class=\"chosen form-control\" id=\"available_filters\">
                                                <option value=\"\"></option>
                                                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["object"] => $context["field"]) {
            // line 81
            echo "                                                    ";
            $context["icon"] = ((("company" == $context["object"])) ? ("building") : ("user"));
            // line 82
            echo "                                                    <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead." . $context["object"])), "html", null, true);
            echo "\">
                                                        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["field"]);
            foreach ($context['_seq'] as $context["value"] => $context["params"]) {
                // line 84
                echo "                                                            ";
                $context["list"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 84), "list", [], "any", true, true, false, 84)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 84), "list", [], "any", false, false, false, 84), [])) : ([]));
                // line 85
                echo "                                                            ";
                if (("boolean" === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["params"], "properties", [], "any", false, false, false, 85), "type", [], "any", false, false, false, 85))) {
                    // line 86
                    echo "                                                              ";
                    $context["choices"] = twig_reverse_filter($this->env, Mautic\FormBundle\Helper\FormFieldHelper::parseBooleanList((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 86, $this->source); })())));
                    // line 87
                    echo "                                                            ";
                } else {
                    // line 88
                    echo "                                                              ";
                    $context["choices"] = Mautic\LeadBundle\Helper\FormFieldHelper::parseListForChoices((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 88, $this->source); })()));
                    // line 89
                    echo "                                                            ";
                }
                // line 90
                echo "                                                            ";
                $context["callback"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 90), "callback", [], "any", true, true, false, 90)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 90), "callback", [], "any", false, false, false, 90), "")) : (""));
                // line 91
                echo "                                                            ";
                $context["operators"] = twig_get_attribute($this->env, $this->source, $context["params"], "operators", [], "any", false, false, false, 91);
                // line 92
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, $context["value"]);
                echo "\"
                                                                    id=\"available_";
                // line 93
                echo twig_escape_filter($this->env, $context["object"], "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
                                                                    data-field-object=\"";
                // line 94
                echo twig_escape_filter($this->env, $context["object"], "html", null, true);
                echo "\"
                                                                    data-field-type=\"";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["params"], "properties", [], "any", false, false, false, 95), "type", [], "any", false, false, false, 95), "html", null, true);
                echo "\"
                                                                    data-field-list=\"";
                // line 96
                echo twig_escape_filter($this->env, json_encode((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 96, $this->source); })())), "html", null, true);
                echo "\"
                                                                    data-field-callback=\"";
                // line 97
                echo twig_escape_filter($this->env, (isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 97, $this->source); })()), "html", null, true);
                echo "\"
                                                                    data-field-operators=\"";
                // line 98
                echo twig_escape_filter($this->env, json_encode((isset($context["operators"]) || array_key_exists("operators", $context) ? $context["operators"] : (function () { throw new RuntimeError('Variable "operators" does not exist.', 98, $this->source); })())), "html", null, true);
                echo "\"
                                                                    class=\"segment-filter ";
                // line 99
                echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 99, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["params"], "label", [], "any", false, false, false, 99)), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['params'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                                                    </optgroup>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['object'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                                            </select>
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "filters", [], "any", false, false, false, 112), 'widget');
        echo "
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "category", [], "any", false, false, false, 124), 'row');
        echo "
            ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "language", [], "any", false, false, false, 125), 'row');
        echo "
            ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "translationParent", [], "any", false, false, false, 126), 'row');
        echo "
            <div id=\"publishStatus\">
                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "isPublished", [], "any", false, false, false, 128), 'row');
        echo "
            </div>
            ";
        // line 130
        if ( !twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "updateSelect", [], "any", true, true, false, 130)) {
            // line 131
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "isCampaignBased", [], "any", false, false, false, 131), 'row');
            echo "
            ";
        }
        // line 133
        echo "            <div id=\"slotNameDiv\" class=\"";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "vars", [], "any", false, false, false, 133), "value", [], "any", false, false, false, 133), "isCampaignBased", [], "any", false, false, false, 133)) {
            echo "hide";
        }
        echo "\">
                ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "slotName", [], "any", false, false, false, 134), 'row');
        echo "
            </div>
            <hr/>
            <h5>";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.utm_tags"), "html", null, true);
        echo "</h5>
            <br/>
            ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "utmTags", [], "any", false, false, false, 139));
        foreach ($context['_seq'] as $context["_key"] => $context["utmTag"]) {
            // line 140
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["utmTag"], 'row');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utmTag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "            <div class=\"hide\">
                ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "publishUp", [], "any", false, false, false, 143), 'row');
        echo "
                ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "publishDown", [], "any", false, false, false, 144), 'row');
        echo "
                ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), 'rest');
        echo "
            </div>
        </div>
    </div>
</div>
";
        // line 150
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), 'form_end');
        // line 152
        $context["templates"] = ["countries" => "country-template", "regions" => "region-template", "timezones" => "timezone-template", "select" => "select-template", "lists" => "leadlist-template", "campaign" => "campaign-template", "deviceTypes" => "device_type-template", "deviceBrands" => "device_brand-template", "deviceOs" => "device_os-template", "emails" => "lead_email_received-template", "tags" => "tags-template", "stage" => "stage-template", "locales" => "locale-template", "globalcategory" => "globalcategory-template"];
        // line 168
        echo "<div class=\"hide\" id=\"templates\">
    ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 169, $this->source); })()));
        foreach ($context['_seq'] as $context["dataKey"] => $context["template"]) {
            // line 170
            echo "        <select class=\"form-control not-chosen ";
            echo twig_escape_filter($this->env, $context["template"], "html", null, true);
            echo "\"
                ";
            // line 171
            if (("tags" == $context["dataKey"])) {
                echo "data-placeholder=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.tags.select_or_create"), "html", null, true);
                echo "\"";
            }
            // line 172
            echo "                ";
            if (("tags" == $context["dataKey"])) {
                echo "data-no-results-text=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.tags.enter_to_create"), "html", null, true);
                echo "\"";
            }
            // line 173
            echo "                ";
            if (("tags" == $context["dataKey"])) {
                echo "data-allow-add=\"true\"";
            }
            // line 174
            echo "                ";
            if (("tags" == $context["dataKey"])) {
                echo "onchange=\"Mautic.createLeadTag(this)\"";
            }
            // line 175
            echo "                name=\"dwc[filters][__name__][filter]\"
                id=\"dwc_filters___name___filter\">
            ";
            // line 177
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 177), $context["dataKey"], [], "array", true, true, false, 177)) {
                // line 178
                echo "                ";
                $context["index"] = 0;
                // line 179
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "vars", [], "any", false, false, false, 179), $context["dataKey"], [], "array", false, false, false, 179));
                foreach ($context['_seq'] as $context["label"] => $context["value"]) {
                    // line 180
                    echo "                    ";
                    if (is_iterable($context["value"])) {
                        // line 181
                        echo "                        <optgroup label=\"";
                        echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                        echo "\">
                        ";
                        // line 182
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["value"]);
                        foreach ($context['_seq'] as $context["optionLabel"] => $context["optionValue"]) {
                            // line 183
                            echo "                            ";
                            if (($context["dataKey"] == "regions")) {
                                // line 184
                                echo "                                ";
                                $context["optionValue"] = (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 184, $this->source); })());
                                // line 185
                                echo "                                ";
                                $context["index"] = ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 185, $this->source); })()) + 1);
                                // line 186
                                echo "                            ";
                            }
                            // line 187
                            echo "                            <option value=\"";
                            echo twig_escape_filter($this->env, $context["optionValue"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["optionLabel"], "html", null, true);
                            echo "</option>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['optionLabel'], $context['optionValue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 189
                        echo "                        </optgroup>
                    ";
                    } elseif ((("lists" !=                     // line 190
$context["dataKey"]) || (array_key_exists("currentListId", $context) && ($context["value"] != (isset($context["currentListId"]) || array_key_exists("currentListId", $context) ? $context["currentListId"] : (function () { throw new RuntimeError('Variable "currentListId" does not exist.', 190, $this->source); })()))))) {
                        // line 191
                        echo "                        <option value=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                        echo "</option>
                    ";
                    }
                    // line 193
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                echo "            ";
            }
            // line 195
            echo "        </select>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['dataKey'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticDynamicContent/DynamicContent/form.html.twig";
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
        return array (  521 => 197,  514 => 195,  511 => 194,  505 => 193,  497 => 191,  495 => 190,  492 => 189,  481 => 187,  478 => 186,  475 => 185,  472 => 184,  469 => 183,  465 => 182,  460 => 181,  457 => 180,  452 => 179,  449 => 178,  447 => 177,  443 => 175,  438 => 174,  433 => 173,  426 => 172,  420 => 171,  415 => 170,  411 => 169,  408 => 168,  406 => 152,  404 => 150,  396 => 145,  392 => 144,  388 => 143,  385 => 142,  376 => 140,  372 => 139,  367 => 137,  361 => 134,  354 => 133,  348 => 131,  346 => 130,  341 => 128,  336 => 126,  332 => 125,  328 => 124,  313 => 112,  302 => 103,  295 => 101,  285 => 99,  281 => 98,  277 => 97,  273 => 96,  269 => 95,  265 => 94,  259 => 93,  254 => 92,  251 => 91,  248 => 90,  245 => 89,  242 => 88,  239 => 87,  236 => 86,  233 => 85,  230 => 84,  226 => 83,  221 => 82,  218 => 81,  214 => 80,  208 => 77,  204 => 76,  196 => 71,  189 => 68,  183 => 65,  180 => 64,  178 => 63,  170 => 58,  162 => 53,  151 => 44,  147 => 42,  145 => 41,  141 => 40,  135 => 39,  129 => 38,  125 => 36,  121 => 34,  119 => 33,  115 => 32,  109 => 31,  99 => 24,  97 => 22,  95 => 21,  93 => 20,  91 => 19,  87 => 18,  79 => 14,  73 => 12,  70 => 11,  66 => 10,  59 => 8,  52 => 7,  47 => 4,  45 => 5,  38 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticDynamicContent/DynamicContent/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DynamicContentBundle\\Resources\\views\\DynamicContent\\form.html.twig");
    }
}
