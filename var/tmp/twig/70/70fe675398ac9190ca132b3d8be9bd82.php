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

/* @MauticForm/Builder/index.html.twig */
class __TwigTemplate_86be155cd48f1199f6e4a1e926ec5404 extends Template
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
            'modal' => [$this, 'block_modal'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 17
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticForm/Builder/index.html.twig", 17);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "form";
    }

    // line 21
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)) {
            // line 23
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.header.edit", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23))]), "html", null, true);
            echo "
  ";
        } else {
            // line 25
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.header.new"), "html", null, true);
            echo "
  ";
        }
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        $context["formId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "sessionId", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "data", [], "any", false, false, false, 30);
        // line 31
        echo "  ";
        $context["inBuilder"] = ((array_key_exists("inBuilder", $context)) ? (_twig_default_filter((isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 31, $this->source); })()), false)) : (false));
        // line 32
        echo "  ";
        $context["fieldsTabError"] = false;
        // line 33
        echo "  ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "progressiveProfilingLimit", [], "any", false, false, false, 33), 'errors')) {
            // line 34
            echo "    ";
            $context["fieldsTabError"] = true;
            // line 35
            echo "  ";
        }
        // line 36
        echo "
  ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_start');
        echo "
  <div class=\"box-layout\">
      <div class=\"col-md-9 height-auto\">
          <div class=\"row\">
              <div class=\"col-xs-12\">

                  <!-- tabs controls -->
                  <ul class=\"nav nav-tabs pr-md pl-md\">
                      <li class=\"active\"><a href=\"#details-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "</a></li>
                      <li id=\"fields-tab\" class=\"text-danger\">
                          <a class=\"";
        // line 47
        if ((isset($context["fieldsTabError"]) || array_key_exists("fieldsTabError", $context) ? $context["fieldsTabError"] : (function () { throw new RuntimeError('Variable "fieldsTabError" does not exist.', 47, $this->source); })())) {
            echo "text-danger";
        }
        echo "\" href=\"#fields-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.tab.fields"), "html", null, true);
        echo "
                            ";
        // line 49
        if ((isset($context["fieldsTabError"]) || array_key_exists("fieldsTabError", $context) ? $context["fieldsTabError"] : (function () { throw new RuntimeError('Variable "fieldsTabError" does not exist.', 49, $this->source); })())) {
            echo "<i class=\"ri-alert-line\"></i>";
        }
        // line 50
        echo "</a>
                      </li>
                      <li id=\"actions-tab\"><a href=\"#actions-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.tab.actions"), "html", null, true);
        echo "</a></li>
                  </ul>
                  <!--/ tabs controls -->

                  <div class=\"tab-content pa-md\">
                      <div class=\"tab-pane fade in active bdr-w-0\" id=\"details-container\">
                          <div class=\"row\">
                              <div class=\"col-md-6\">
                                  ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "name", [], "any", false, false, false, 60), 'row');
        echo "
                                  ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "formAttributes", [], "any", false, false, false, 61), 'row');
        echo "
                                  ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "description", [], "any", false, false, false, 62), 'row');
        echo "
                              </div>
                              <div class=\"col-md-6\">
                                  ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "postAction", [], "any", false, false, false, 65), 'row');
        echo "
                                  ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "postActionProperty", [], "any", false, false, false, 66), 'row');
        echo "
                              </div>
                          </div>
                      </div>
                      <div class=\"tab-pane fade bdr-w-0\" id=\"fields-container\">
                          <div id=\"mauticforms_fields\">
                              <div class=\"row\">
                                  <div class=\"available-fields mb-md col-sm-4\">
                                      <select class=\"chosen form-builder-new-component\" data-placeholder=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.component.fields"), "html", null, true);
        echo "\">
                                          <option value=\"\"></option>
                                          ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["field"] => $context["fieldType"]) {
            // line 77
            echo "                                              <option data-toggle=\"ajaxmodal\"
                                                      data-target=\"#formComponentModal\"
                                                      data-href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_formfield_action", ["objectAction" => "new", "type" => $context["fieldType"], "tmpl" => "field", "formId" => (isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 79, $this->source); })()), "inBuilder" => (isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 79, $this->source); })())]), "html", null, true);
            echo "\">
                                                  ";
            // line 80
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "
                                              </option>
                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['fieldType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                                      </select>
                                  </div>
                              </div>
                              <div class=\"row\">
                                  <div class=\"col-sm-12 mb-10\">
                                      ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "progressiveProfilingLimit", [], "any", false, false, false, 88), 'label');
        echo "
                                      <div class=\"ml-5 mr-5\" style=\"display:inline-block;\">
                                          ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "progressiveProfilingLimit", [], "any", false, false, false, 90), 'widget');
        echo "
                                      </div>
                                      <div class=\"has-error\" style=\"display:inline-block;\">
                                          ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "progressiveProfilingLimit", [], "any", false, false, false, 93), 'errors');
        echo "
                                      </div>
                                  </div>
                              </div>
                              <div class=\"drop-here\">
                                ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 99
            echo "                                    ";
            if ((null === twig_get_attribute($this->env, $this->source, $context["field"], "parent", [], "any", false, false, false, 99))) {
                // line 100
                echo "                                      ";
                if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 100), (isset($context["deletedFields"]) || array_key_exists("deletedFields", $context) ? $context["deletedFields"] : (function () { throw new RuntimeError('Variable "deletedFields" does not exist.', 100, $this->source); })()))) {
                    // line 101
                    echo "                                          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["field"], "isCustom", [], "any", true, true, false, 101) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field"], "isCustom", [], "any", false, false, false, 101)))) {
                        // line 102
                        echo "                                              ";
                        $context["params"] = twig_get_attribute($this->env, $this->source, $context["field"], "customParameters", [], "any", false, false, false, 102);
                        // line 103
                        echo "                                              ";
                        $context["template"] = twig_get_attribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 103, $this->source); })()), "template", [], "any", false, false, false, 103);
                        // line 104
                        echo "                                          ";
                    } else {
                        // line 105
                        echo "                                              ";
                        $context["template"] = (("@MauticForm/Field/" . twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 105)) . ".html.twig");
                        // line 106
                        echo "                                          ";
                    }
                    // line 107
                    echo "                                          ";
                    echo twig_include($this->env, $context, "@MauticForm/Builder/_field_wrapper.html.twig", ["template" =>                     // line 108
(isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 108, $this->source); })()), "field" =>                     // line 109
$context["field"], "viewOnlyFields" =>                     // line 110
(isset($context["viewOnlyFields"]) || array_key_exists("viewOnlyFields", $context) ? $context["viewOnlyFields"] : (function () { throw new RuntimeError('Variable "viewOnlyFields" does not exist.', 110, $this->source); })()), "inForm" => true, "id" => twig_get_attribute($this->env, $this->source,                     // line 112
$context["field"], "id", [], "any", false, false, false, 112), "formId" =>                     // line 113
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 113, $this->source); })()), "formName" => twig_get_attribute($this->env, $this->source,                     // line 114
(isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 114, $this->source); })()), "generateFormName", [], "any", false, false, false, 114), "mappedFields" =>                     // line 115
(isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 115, $this->source); })()), "inBuilder" =>                     // line 116
(isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 116, $this->source); })()), "fields" =>                     // line 117
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 117, $this->source); })()), "formFields" =>                     // line 118
(isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 118, $this->source); })())], false);
                    // line 119
                    echo "
                                      ";
                }
                // line 121
                echo "                                    ";
            }
            // line 122
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                              </div>
                              ";
        // line 124
        if ((0 == twig_length_filter($this->env, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 124, $this->source); })())))) {
            // line 125
            echo "                                <div class=\"alert alert-info\" id=\"form-field-placeholder\">
                                    <p>";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.addfield"), "html", null, true);
            echo "</p>
                                </div>
                              ";
        }
        // line 129
        echo "                          </div>
                      </div>
                      <div class=\"tab-pane fade bdr-w-0\" id=\"actions-container\">
                          <div id=\"mauticforms_actions\">
                              <div class=\"row\">
                                  <div class=\"available-actions mb-md col-sm-4\">
                                      <select class=\"chosen form-builder-new-component\" data-placeholder=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.component.submitactions"), "html", null, true);
        echo "\">
                                          <option value=\"\"></option>
                                          ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 137, $this->source); })()));
        foreach ($context['_seq'] as $context["group"] => $context["groupActions"]) {
            // line 138
            echo "                                                  ";
            $context["campaignActionFound"] = false;
            // line 139
            echo "                                                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["groupActions"]);
            foreach ($context['_seq'] as $context["k"] => $context["e"]) {
                // line 140
                echo "                                                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["e"], "allowCampaignForm", [], "any", true, true, false, 140) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["e"], "allowCampaignForm", [], "any", false, false, false, 140)))) {
                    // line 141
                    echo "                                                          ";
                    $context["campaignActionFound"] = true;
                    // line 142
                    echo "                                                      ";
                }
                // line 143
                echo "                                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                                                  ";
            $context["class"] = ((twig_test_empty((isset($context["campaignActionFound"]) || array_key_exists("campaignActionFound", $context) ? $context["campaignActionFound"] : (function () { throw new RuntimeError('Variable "campaignActionFound" does not exist.', 144, $this->source); })()))) ? ("action-standalone-only") : (""));
            // line 145
            echo "                                                  ";
            if (( !(isset($context["campaignActionFound"]) || array_key_exists("campaignActionFound", $context) ? $context["campaignActionFound"] : (function () { throw new RuntimeError('Variable "campaignActionFound" does not exist.', 145, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 145, $this->source); })()), "isStandalone", [], "any", false, false, false, 145))) {
                // line 146
                echo "                                                      ";
                $context["class"] = ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 146, $this->source); })()) . " hide");
                // line 147
                echo "                                                  ";
            }
            // line 148
            echo "                                                  <optgroup class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 148, $this->source); })()), "html", null, true);
            echo "\" label=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group"]), "html", null, true);
            echo "\"></optgroup>
                                                  ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["groupActions"]);
            foreach ($context['_seq'] as $context["k"] => $context["e"]) {
                // line 150
                echo "                                                      ";
                echo twig_include($this->env, $context, "@MauticForm/Action/_option.html.twig", ["action" =>                 // line 151
$context["e"], "type" =>                 // line 152
$context["k"], "isStandalone" => twig_get_attribute($this->env, $this->source,                 // line 153
(isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 153, $this->source); })()), "isStandalone", [], "any", false, false, false, 153), "formId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 154
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "sessionId", [], "array", false, false, false, 154), "vars", [], "any", false, false, false, 154), "data", [], "array", false, false, false, 154)], false);
                // line 155
                echo "
                                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group'], $context['groupActions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                                      </select>
                                  </div>
                              </div>
                              <div class=\"drop-here\">
                                ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formActions"]) || array_key_exists("formActions", $context) ? $context["formActions"] : (function () { throw new RuntimeError('Variable "formActions" does not exist.', 162, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 163
            echo "                                    ";
            if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 163), (isset($context["deletedActions"]) || array_key_exists("deletedActions", $context) ? $context["deletedActions"] : (function () { throw new RuntimeError('Variable "deletedActions" does not exist.', 163, $this->source); })()))) {
                // line 164
                echo "                                        ";
                $context["template"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["actionSettings"] ?? null), twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 164), [], "array", false, true, false, 164), "template", [], "any", true, true, false, 164)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["actionSettings"] ?? null), twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 164), [], "array", false, true, false, 164), "template", [], "any", false, false, false, 164), "@MauticForm/Action/_generic.html.twig")) : ("@MauticForm/Action/_generic.html.twig"));
                // line 165
                echo "                                        ";
                $context["action"] = twig_array_merge($context["action"], ["settings" => twig_get_attribute($this->env, $this->source,                 // line 166
(isset($context["actionSettings"]) || array_key_exists("actionSettings", $context) ? $context["actionSettings"] : (function () { throw new RuntimeError('Variable "actionSettings" does not exist.', 166, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 166), [], "array", false, false, false, 166)]);
                // line 168
                echo "                                        ";
                echo twig_include($this->env, $context, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 168, $this->source); })()), ["action" =>                 // line 169
$context["action"], "inForm" => true, "id" => twig_get_attribute($this->env, $this->source,                 // line 171
$context["action"], "id", [], "any", false, false, false, 171), "formId" =>                 // line 172
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 172, $this->source); })())], false);
                // line 173
                echo "
                                    ";
            }
            // line 175
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                              </div>
                              ";
        // line 177
        if ((0 == twig_length_filter($this->env, (isset($context["formActions"]) || array_key_exists("formActions", $context) ? $context["formActions"] : (function () { throw new RuntimeError('Variable "formActions" does not exist.', 177, $this->source); })())))) {
            // line 178
            echo "                                <div class=\"alert alert-info\" id=\"form-action-placeholder\">
                                    <p>";
            // line 179
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.addaction"), "html", null, true);
            echo "</p>
                                </div>
                              ";
        }
        // line 182
        echo "                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class=\"col-md-3 height-auto bdr-l\">
          <div class=\"pr-lg pl-lg pt-md pb-md\">
              ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "category", [], "any", false, false, false, 190), 'row');
        echo "
              ";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "isPublished", [], "any", false, false, false, 191), 'row');
        echo "
              ";
        // line 192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "publishUp", [], "any", false, false, false, 192), 'row');
        echo "
              ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "publishDown", [], "any", false, false, false, 193), 'row');
        echo "
              ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "noIndex", [], "any", false, false, false, 194), 'row');
        echo "
              ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "inKioskMode", [], "any", false, false, false, 195), 'row');
        echo "
              ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "renderStyle", [], "any", false, false, false, 196), 'row');
        echo "
              ";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "template", [], "any", false, false, false, 197), 'row');
        echo "
              ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "language", [], "any", false, false, false, 198), 'row');
        echo "
          </div>
      </div>
  </div>
  ";
        // line 202
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), 'form_end');
        echo "

  ";
        // line 204
        $context["typeOneDifferences"] = ["mautic.form.type.one.differences.1st", "mautic.form.type.one.differences.2nd", "mautic.form.type.one.differences.3rd"];
        // line 205
        echo "  ";
        $context["typeTwoDifferences"] = ["mautic.form.type.two.differences.1st", "mautic.form.type.two.differences.2nd", "mautic.form.type.two.differences.3rd"];
        // line 206
        echo "
  ";
        // line 207
        if (((null === twig_get_attribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 207, $this->source); })()), "formType", [], "any", false, false, false, 207)) || (array_key_exists("forceTypeSelection", $context) &&  !twig_test_empty((isset($context["forceTypeSelection"]) || array_key_exists("forceTypeSelection", $context) ? $context["forceTypeSelection"] : (function () { throw new RuntimeError('Variable "forceTypeSelection" does not exist.', 207, $this->source); })()))))) {
            // line 208
            echo "      ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/form_selecttype.html.twig", ["item" =>             // line 209
(isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 209, $this->source); })()), "mauticLang" => ["newStandaloneForm" => "mautic.form.type.standalone.header", "newCampaignForm" => "mautic.form.type.campaign.header"], "typePrefix" => "form", "cancelUrl" => "mautic_form_index", "header" => "mautic.form.type.header", "typeOneHeader" => "mautic.form.type.campaign.header", "typeOneIconClass" => "ri-megaphone-fill", "typeOneDifferences" =>             // line 219
(isset($context["typeOneDifferences"]) || array_key_exists("typeOneDifferences", $context) ? $context["typeOneDifferences"] : (function () { throw new RuntimeError('Variable "typeOneDifferences" does not exist.', 219, $this->source); })()), "typeOneOnClick" => "Mautic.selectFormType('campaign');", "typeTwoHeader" => "mautic.form.type.standalone.header", "typeTwoIconClass" => "ri-survey-fill", "typeTwoDifferences" =>             // line 223
(isset($context["typeTwoDifferences"]) || array_key_exists("typeTwoDifferences", $context) ? $context["typeTwoDifferences"] : (function () { throw new RuntimeError('Variable "typeTwoDifferences" does not exist.', 223, $this->source); })()), "typeTwoOnClick" => "Mautic.selectFormType('standalone');"], false);
            // line 225
            echo "
  ";
        }
    }

    // line 229
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 230
        echo "    ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "formComponentModal", "header" => false, "footerButtons" => true]);
        // line 234
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Builder/index.html.twig";
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
        return array (  511 => 234,  508 => 230,  504 => 229,  498 => 225,  496 => 223,  495 => 219,  494 => 209,  492 => 208,  490 => 207,  487 => 206,  484 => 205,  482 => 204,  477 => 202,  470 => 198,  466 => 197,  462 => 196,  458 => 195,  454 => 194,  450 => 193,  446 => 192,  442 => 191,  438 => 190,  428 => 182,  422 => 179,  419 => 178,  417 => 177,  414 => 176,  408 => 175,  404 => 173,  402 => 172,  401 => 171,  400 => 169,  398 => 168,  396 => 166,  394 => 165,  391 => 164,  388 => 163,  384 => 162,  378 => 158,  372 => 157,  365 => 155,  363 => 154,  362 => 153,  361 => 152,  360 => 151,  358 => 150,  354 => 149,  347 => 148,  344 => 147,  341 => 146,  338 => 145,  335 => 144,  329 => 143,  326 => 142,  323 => 141,  320 => 140,  315 => 139,  312 => 138,  308 => 137,  303 => 135,  295 => 129,  289 => 126,  286 => 125,  284 => 124,  281 => 123,  275 => 122,  272 => 121,  268 => 119,  266 => 118,  265 => 117,  264 => 116,  263 => 115,  262 => 114,  261 => 113,  260 => 112,  259 => 110,  258 => 109,  257 => 108,  255 => 107,  252 => 106,  249 => 105,  246 => 104,  243 => 103,  240 => 102,  237 => 101,  234 => 100,  231 => 99,  227 => 98,  219 => 93,  213 => 90,  208 => 88,  201 => 83,  192 => 80,  188 => 79,  184 => 77,  180 => 76,  175 => 74,  164 => 66,  160 => 65,  154 => 62,  150 => 61,  146 => 60,  135 => 52,  131 => 50,  127 => 49,  123 => 48,  118 => 47,  113 => 45,  102 => 37,  99 => 36,  96 => 35,  93 => 34,  90 => 33,  87 => 32,  84 => 31,  81 => 30,  77 => 29,  69 => 25,  63 => 23,  60 => 22,  56 => 21,  49 => 19,  38 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Builder/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Builder\\index.html.twig");
    }
}
