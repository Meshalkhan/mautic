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

/* @MauticEmail/FormTheme/Email/layout.html.twig */
class __TwigTemplate_d348df30d0c677a2084ebca0034d1157 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_email_abtest_settings_properties_row' => [$this, 'block__email_abtest_settings_properties_row'],
            '_email_variantSettings_properties_row' => [$this, 'block__email_variantSettings_properties_row'],
            '_emailform_dynamicContent_entry_content_row' => [$this, 'block__emailform_dynamicContent_entry_content_row'],
            '_emailform_dynamicContent_entry_filters_entry_filters_entry_widget' => [$this, 'block__emailform_dynamicContent_entry_filters_entry_filters_entry_widget'],
            'dynamic_content_filter_entry_widget' => [$this, 'block_dynamic_content_filter_entry_widget'],
            'dynamic_content_filter_widget' => [$this, 'block_dynamic_content_filter_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_email_abtest_settings_properties_row', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('_email_variantSettings_properties_row', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('_emailform_dynamicContent_entry_content_row', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('_emailform_dynamicContent_entry_filters_entry_filters_entry_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('dynamic_content_filter_entry_widget', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('dynamic_content_filter_widget', $context, $blocks);
    }

    // line 1
    public function block__email_abtest_settings_properties_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'widget');
        echo "
";
    }

    // line 5
    public function block__email_variantSettings_properties_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'widget');
        echo "
";
    }

    // line 9
    public function block__emailform_dynamicContent_entry_content_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div class=\"row form-group\">
        <div class=\"col-xs-10\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'label');
        echo "
        </div>
        <div class=\"col-xs-2\">
            ";
        // line 15
        if ( !("emailform_dynamicContent_0_content" === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "                <a class=\"remove-item btn btn-default text-danger\"><i class=\"ri-delete-bin-line\"></i></a>
            ";
        }
        // line 18
        echo "        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col-xs-12\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'widget');
        echo "
        </div>
    </div>
";
    }

    // line 27
    public function block__emailform_dynamicContent_entry_filters_entry_filters_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        $context["isPrototype"] = ("__name__" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28));
        // line 29
        $context["filterType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "field", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29);
        // line 30
        $context["filterGroup"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "object", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30);
        // line 31
        $context["inGroup"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 31), "data", [], "any", false, true, false, 31), "glue", [], "any", true, true, false, 31) && ("and" === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "data", [], "any", false, false, false, 31), "glue", [], "any", false, false, false, 31)));
        // line 32
        $context["objectIcon"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 32), "data", [], "any", false, true, false, 32), "object", [], "any", true, true, false, 32) && ("company" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "vars", [], "any", false, false, false, 32), "data", [], "any", false, false, false, 32), "object", [], "any", false, false, false, 32)))) ? ("ri-building-2-line") : ("ri-user-6-fill"));
        // line 33
        echo "  <div class=\"panel ";
        if (((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 33, $this->source); })()) || ((isset($context["inGroup"]) || array_key_exists("inGroup", $context) ? $context["inGroup"] : (function () { throw new RuntimeError('Variable "inGroup" does not exist.', 33, $this->source); })()) &&  !(isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 33, $this->source); })())))) {
            echo "in-group";
        }
        echo "\">
      <div class=\"panel-footer ";
        // line 34
        if (( !(isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 34, $this->source); })()) && ("0" === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34)))) {
            echo "hide";
        }
        echo "\">
          <div class=\"col-sm-2 pl-0\">
              ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "glue", [], "any", false, false, false, 36), 'widget');
        echo "
          </div>
      </div>
      <div class=\"panel-body\">
          <div class=\"col-xs-6 col-sm-3 field-name\">
              <i class=\"object-icon fa ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["objectIcon"]) || array_key_exists("objectIcon", $context) ? $context["objectIcon"] : (function () { throw new RuntimeError('Variable "objectIcon" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
              <span>";
        // line 42
        if ((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 42, $this->source); })())) {
            echo "__label__";
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "parent", [], "any", false, false, false, 42), "parent", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "fields", [], "any", false, false, false, 42), (isset($context["filterGroup"]) || array_key_exists("filterGroup", $context) ? $context["filterGroup"] : (function () { throw new RuntimeError('Variable "filterGroup" does not exist.', 42, $this->source); })()), [], "array", false, false, false, 42), (isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 42, $this->source); })()), [], "array", false, false, false, 42), "label", [], "any", false, false, false, 42), "html", null, true);
        }
        echo "</span>
          </div>
          <div class=\"col-xs-6 col-sm-3 padding-none\">
              ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "operator", [], "any", false, false, false, 45), 'widget');
        echo "
          </div>
          ";
        // line 47
        $context["hasErrors"] = ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "filter", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47)) > 0) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "display", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47)) > 0));
        // line 48
        echo "          <div class=\"col-xs-10 col-sm-5 padding-none ";
        if ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 48, $this->source); })())) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "filter", [], "any", false, false, false, 49), 'widget');
        echo "
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "filter", [], "any", false, false, false, 50), 'errors');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "display", [], "any", false, false, false, 51), 'widget');
        echo "
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "display", [], "any", false, false, false, 52), 'errors');
        echo "
          </div>
          <div class=\"col-xs-2 col-sm-1\">
              <a href=\"javascript: void(0);\" class=\"remove-selected btn btn-default text-danger pull-right\"><i class=\"ri-delete-bin-line\"></i></a>
          </div>
          ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "field", [], "any", false, false, false, 57), 'widget');
        echo "
          ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "type", [], "any", false, false, false, 58), 'widget');
        echo "
          ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "object", [], "any", false, false, false, 59), 'widget');
        echo "
      </div>
  </div>
";
    }

    // line 64
    public function block_dynamic_content_filter_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "    <div class=\"tab-pane dynamic-content-filter bdr-w-0\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "vars", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
        echo "\">
        <div class=\"row form-group\">
            <div class=\"col-xs-10\">
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "content", [], "any", false, false, false, 68), 'label');
        echo "
            </div>
            <div class=\"col-xs-2\">
                ";
        // line 71
        if ( !((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 71, $this->source); })()) === "emailform_dynamicContent_0_filters_0")) {
            // line 72
            echo "                    <a class=\"remove-item remove-filter btn btn-default text-danger\"><i class=\"ri-delete-bin-line\"></i></a>
                ";
        }
        // line 74
        echo "            </div>
        </div>

        <div class=\"row form-group\">
            <div class=\"col-xs-12\">
                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "content", [], "any", false, false, false, 79), 'widget');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-7\">
                <label>";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filters"), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-xs-5\">
                <div class=\"form-group\">
                    <div class=\"available-filters pl-0\">
                        <select class=\"chosen form-control\" data-mautic=\"available_filters\">
                            <option value=\"\"></option>
                            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 92, $this->source); })()));
        foreach ($context['_seq'] as $context["object"] => $context["field"]) {
            // line 93
            echo "                                ";
            $context["icon"] = ((("company" == $context["object"])) ? ("ri-building-2-line") : ("ri-user-6-fill"));
            // line 94
            echo "                                <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead." . $context["object"])), "html", null, true);
            echo "\">
                                    ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["field"]);
            foreach ($context['_seq'] as $context["value"] => $context["params"]) {
                // line 96
                echo "                                        ";
                $context["list"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 96), "list", [], "any", true, true, false, 96)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 96), "list", [], "any", false, false, false, 96), [])) : ([]));
                // line 97
                echo "                                        ";
                $context["choices"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["params"], "properties", [], "any", false, false, false, 97), "type", [], "any", false, false, false, 97) === "boolean")) ? (Mautic\FormBundle\Helper\FormFieldHelper::parseBooleanList((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 97, $this->source); })()))) : (Mautic\FormBundle\Helper\FormFieldHelper::parseListForChoices((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 97, $this->source); })()))));
                // line 98
                echo "                                        ";
                $context["list"] = json_encode((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 98, $this->source); })()));
                // line 99
                echo "                                        ";
                $context["callback"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 99), "callback", [], "any", true, true, false, 99)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 99), "callback", [], "any", false, false, false, 99), "")) : (""));
                // line 100
                echo "                                        ";
                $context["operators"] = (((twig_get_attribute($this->env, $this->source, $context["params"], "operators", [], "any", true, true, false, 100) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["params"], "operators", [], "any", false, false, false, 100)))) ? (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["params"], "operators", [], "any", false, false, false, 100)))) : ("{}"));
                // line 101
                echo "
                                        <option value=\"";
                // line 102
                echo twig_escape_filter($this->env, $context["value"]);
                echo "\"
                                                data-mautic=\"available_";
                // line 103
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
                                                data-field-object=\"";
                // line 104
                echo twig_escape_filter($this->env, $context["object"], "html", null, true);
                echo "\"
                                                data-field-type=\"";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["params"], "properties", [], "any", false, false, false, 105), "type", [], "any", false, false, false, 105), "html", null, true);
                echo "\"
                                                data-field-list=\"";
                // line 106
                echo twig_escape_filter($this->env, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 106, $this->source); })()));
                echo "\"
                                                data-field-callback=\"";
                // line 107
                echo twig_escape_filter($this->env, (isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 107, $this->source); })()), "html", null, true);
                echo "\"
                                                data-field-operators=\"";
                // line 108
                echo (isset($context["operators"]) || array_key_exists("operators", $context) ? $context["operators"] : (function () { throw new RuntimeError('Variable "operators" does not exist.', 108, $this->source); })());
                echo "\"
                                                class=\"segment-filter fa ";
                // line 109
                echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 109, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["params"], "label", [], "any", false, false, false, 109)), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['params'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                                </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['object'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                        </select>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>

        <div data-filter-container data-index=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "filters", [], "any", false, false, false, 120)), "html", null, true);
        echo "\">
            ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "filters", [], "any", false, false, false, 121));
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
        foreach ($context['_seq'] as $context["i"] => $context["filter"]) {
            // line 122
            echo "                ";
            $context["isPrototype"] = ("__name__" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["filter"], "vars", [], "any", false, false, false, 122), "name", [], "any", false, false, false, 122));
            // line 123
            echo "                ";
            if (((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 123, $this->source); })()) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 123), "fields", [], "any", false, true, false, 123), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["filter"], "vars", [], "any", false, false, false, 123), "value", [], "any", false, false, false, 123), "object", [], "any", false, false, false, 123), [], "array", false, true, false, 123), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["filter"], "vars", [], "any", false, false, false, 123), "value", [], "any", false, false, false, 123), "field", [], "any", false, false, false, 123), [], "array", true, true, false, 123))) {
                // line 124
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["filter"], 'widget', ["first" => twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 124)]);
                echo "
                ";
            }
            // line 126
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "        </div>
    </div>
";
    }

    // line 131
    public function block_dynamic_content_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "    <div class=\"tab-pane dynamic-content bdr-w-0 ";
        echo ((("0" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "vars", [], "any", false, false, false, 132), "name", [], "any", false, false, false, 132))) ? ("active") : ("fade"));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "vars", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132), "html", null, true);
        echo "\">
        <div class=\"panel\">
            <ul class=\"nav nav-tabs pr-md pl-md\" id=\"dynamicContentFilterTabs_";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "vars", [], "any", false, false, false, 134), "name", [], "any", false, false, false, 134), "html", null, true);
        echo "\">
              <li>
                <a role=\"tab\" class=\"addNewDynamicContentFilter\" data-index=\"";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "vars", [], "any", false, false, false, 136), "name", [], "any", false, false, false, 136), "html", null, true);
        echo "\"><i class=\"ri-add-line text-success\"></i>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.new"), "html", null, true);
        echo "</a>
              </li>
              <li class=\"active\">
                <a data-toggle=\"tab\" href=\"#emailform_dynamicContent_";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "vars", [], "any", false, false, false, 139), "name", [], "any", false, false, false, 139), "html", null, true);
        echo "_default\" role=\"tab\">Default</a>
              </li>
              ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "filters", [], "array", false, false, false, 141));
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
        foreach ($context['_seq'] as $context["i"] => $context["filter"]) {
            // line 142
            echo "                <li><a role=\"tab\" data-toggle=\"tab\" href=\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["filter"], "vars", [], "any", false, false, false, 142), "id", [], "any", false, false, false, 142), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.dynamicContent.tab"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 142), "html", null, true);
            echo "</a></li>
              ";
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
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "            </ul>

            <div class=\"tab-content pa-md\">
              <div class=\"tab-pane bdr-w-0 active\" id=\"emailform_dynamicContent_";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "vars", [], "any", false, false, false, 147), "name", [], "any", false, false, false, 147), "html", null, true);
        echo "_default\">
                <div class=\"row hidden\">
                  <div class=\"col-xs-10\">";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "tokenName", [], "any", false, false, false, 149), 'row');
        echo "</div>
                </div>
                ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "content", [], "any", false, false, false, 151), 'row');
        echo "
              </div>
              ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "filters", [], "any", false, false, false, 153));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 154
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["filter"], 'widget');
            echo "
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "            </div>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticEmail/FormTheme/Email/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  519 => 156,  510 => 154,  506 => 153,  501 => 151,  496 => 149,  491 => 147,  486 => 144,  465 => 142,  448 => 141,  443 => 139,  435 => 136,  430 => 134,  422 => 132,  418 => 131,  412 => 127,  398 => 126,  392 => 124,  389 => 123,  386 => 122,  369 => 121,  365 => 120,  356 => 113,  349 => 111,  339 => 109,  335 => 108,  331 => 107,  327 => 106,  323 => 105,  319 => 104,  315 => 103,  311 => 102,  308 => 101,  305 => 100,  302 => 99,  299 => 98,  296 => 97,  293 => 96,  289 => 95,  284 => 94,  281 => 93,  277 => 92,  267 => 85,  258 => 79,  251 => 74,  247 => 72,  245 => 71,  239 => 68,  232 => 65,  228 => 64,  220 => 59,  216 => 58,  212 => 57,  204 => 52,  200 => 51,  196 => 50,  192 => 49,  185 => 48,  183 => 47,  178 => 45,  168 => 42,  164 => 41,  156 => 36,  149 => 34,  142 => 33,  140 => 32,  138 => 31,  136 => 30,  134 => 29,  132 => 28,  128 => 27,  120 => 22,  114 => 18,  110 => 16,  108 => 15,  102 => 12,  98 => 10,  94 => 9,  87 => 6,  83 => 5,  76 => 2,  72 => 1,  68 => 131,  65 => 130,  63 => 64,  60 => 63,  58 => 27,  55 => 26,  53 => 9,  50 => 8,  48 => 5,  45 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmail/FormTheme/Email/layout.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\FormTheme\\Email\\layout.html.twig");
    }
}
