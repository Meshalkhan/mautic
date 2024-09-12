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

/* @MauticEmail/FormTheme/Email/layout.html.twig */
class __TwigTemplate_3cab4d17a8b5ec0d883b2a8f4942504a extends Template
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
            '_email_abtest_settings_properties_row' => [$this, 'block__email_abtest_settings_properties_row'],
            '_email_variantSettings_properties_row' => [$this, 'block__email_variantSettings_properties_row'],
            '_emailform_dynamicContent_entry_content_row' => [$this, 'block__emailform_dynamicContent_entry_content_row'],
            '_emailform_dynamicContent_entry_filters_entry_filters_entry_widget' => [$this, 'block__emailform_dynamicContent_entry_filters_entry_filters_entry_widget'],
            'dynamic_content_filter_entry_widget' => [$this, 'block_dynamic_content_filter_entry_widget'],
            'dynamic_content_filter_widget' => [$this, 'block_dynamic_content_filter_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_email_abtest_settings_properties_row', $context, $blocks);
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('_email_variantSettings_properties_row', $context, $blocks);
        // line 8
        yield "
";
        // line 9
        yield from $this->unwrap()->yieldBlock('_emailform_dynamicContent_entry_content_row', $context, $blocks);
        // line 26
        yield "
";
        // line 27
        yield from $this->unwrap()->yieldBlock('_emailform_dynamicContent_entry_filters_entry_filters_entry_widget', $context, $blocks);
        // line 63
        yield "
";
        // line 64
        yield from $this->unwrap()->yieldBlock('dynamic_content_filter_entry_widget', $context, $blocks);
        // line 130
        yield "
";
        // line 131
        yield from $this->unwrap()->yieldBlock('dynamic_content_filter_widget', $context, $blocks);
        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__email_abtest_settings_properties_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'widget');
        yield "
";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__email_variantSettings_properties_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'widget');
        yield "
";
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__emailform_dynamicContent_entry_content_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "    <div class=\"row form-group\">
        <div class=\"col-xs-10\">
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'label');
        yield "
        </div>
        <div class=\"col-xs-2\">
            ";
        // line 15
        if ( !("emailform_dynamicContent_0_content" === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })()))) {
            // line 16
            yield "                <a class=\"remove-item btn btn-default text-danger\"><i class=\"ri-delete-bin-line\"></i></a>
            ";
        }
        // line 18
        yield "        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col-xs-12\">
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'widget');
        yield "
        </div>
    </div>
";
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__emailform_dynamicContent_entry_filters_entry_filters_entry_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        $context["isPrototype"] = ("__name__" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28));
        // line 29
        $context["filterType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "field", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29);
        // line 30
        $context["filterGroup"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "object", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30);
        // line 31
        $context["inGroup"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 31), "data", [], "any", false, true, false, 31), "glue", [], "any", true, true, false, 31) && ("and" === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "data", [], "any", false, false, false, 31), "glue", [], "any", false, false, false, 31)));
        // line 32
        $context["objectIcon"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 32), "data", [], "any", false, true, false, 32), "object", [], "any", true, true, false, 32) && ("company" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "vars", [], "any", false, false, false, 32), "data", [], "any", false, false, false, 32), "object", [], "any", false, false, false, 32)))) ? ("ri-building-2-line") : ("ri-user-6-fill"));
        // line 33
        yield "  <div class=\"panel ";
        if (((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 33, $this->source); })()) || ((isset($context["inGroup"]) || array_key_exists("inGroup", $context) ? $context["inGroup"] : (function () { throw new RuntimeError('Variable "inGroup" does not exist.', 33, $this->source); })()) &&  !(isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 33, $this->source); })())))) {
            yield "in-group";
        }
        yield "\">
      <div class=\"panel-footer ";
        // line 34
        if (( !(isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 34, $this->source); })()) && ("0" === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34)))) {
            yield "hide";
        }
        yield "\">
          <div class=\"col-sm-2 pl-0\">
              ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "glue", [], "any", false, false, false, 36), 'widget');
        yield "
          </div>
      </div>
      <div class=\"panel-body\">
          <div class=\"col-xs-6 col-sm-3 field-name\">
              <i class=\"object-icon fa ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["objectIcon"]) || array_key_exists("objectIcon", $context) ? $context["objectIcon"] : (function () { throw new RuntimeError('Variable "objectIcon" does not exist.', 41, $this->source); })()), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
              <span>";
        // line 42
        if ((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 42, $this->source); })())) {
            yield "__label__";
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "parent", [], "any", false, false, false, 42), "parent", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "fields", [], "any", false, false, false, 42), (isset($context["filterGroup"]) || array_key_exists("filterGroup", $context) ? $context["filterGroup"] : (function () { throw new RuntimeError('Variable "filterGroup" does not exist.', 42, $this->source); })()), [], "array", false, false, false, 42), (isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 42, $this->source); })()), [], "array", false, false, false, 42), "label", [], "any", false, false, false, 42), "html", null, true);
        }
        yield "</span>
          </div>
          <div class=\"col-xs-6 col-sm-3 padding-none\">
              ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "operator", [], "any", false, false, false, 45), 'widget');
        yield "
          </div>
          ";
        // line 47
        $context["hasErrors"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "filter", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "display", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47)) > 0));
        // line 48
        yield "          <div class=\"col-xs-10 col-sm-5 padding-none ";
        if ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 48, $this->source); })())) {
            yield "has-error";
        }
        yield "\">
            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "filter", [], "any", false, false, false, 49), 'widget');
        yield "
            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "filter", [], "any", false, false, false, 50), 'errors');
        yield "
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "display", [], "any", false, false, false, 51), 'widget');
        yield "
            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "display", [], "any", false, false, false, 52), 'errors');
        yield "
          </div>
          <div class=\"col-xs-2 col-sm-1\">
              <a href=\"javascript: void(0);\" class=\"remove-selected btn btn-default text-danger pull-right\"><i class=\"ri-delete-bin-line\"></i></a>
          </div>
          ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "field", [], "any", false, false, false, 57), 'widget');
        yield "
          ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "type", [], "any", false, false, false, 58), 'widget');
        yield "
          ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "object", [], "any", false, false, false, 59), 'widget');
        yield "
      </div>
  </div>
";
        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dynamic_content_filter_entry_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 65
        yield "    <div class=\"tab-pane dynamic-content-filter bdr-w-0\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "vars", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
        yield "\">
        <div class=\"row form-group\">
            <div class=\"col-xs-10\">
                ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "content", [], "any", false, false, false, 68), 'label');
        yield "
            </div>
            <div class=\"col-xs-2\">
                ";
        // line 71
        if ( !((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 71, $this->source); })()) === "emailform_dynamicContent_0_filters_0")) {
            // line 72
            yield "                    <a class=\"remove-item remove-filter btn btn-default text-danger\"><i class=\"ri-delete-bin-line\"></i></a>
                ";
        }
        // line 74
        yield "            </div>
        </div>

        <div class=\"row form-group\">
            <div class=\"col-xs-12\">
                ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "content", [], "any", false, false, false, 79), 'widget');
        yield "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-7\">
                <label>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filters"), "html", null, true);
        yield "</label>
            </div>
            <div class=\"col-xs-5\">
                <div class=\"form-group\">
                    <div class=\"available-filters pl-0\">
                        <select class=\"chosen form-control\" data-mautic=\"available_filters\">
                            <option value=\"\"></option>
                            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 92, $this->source); })()));
        foreach ($context['_seq'] as $context["object"] => $context["field"]) {
            // line 93
            yield "                                ";
            $context["icon"] = ((("company" == $context["object"])) ? ("ri-building-2-line") : ("ri-user-6-fill"));
            // line 94
            yield "                                <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead." . $context["object"])), "html", null, true);
            yield "\">
                                    ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["field"]);
            foreach ($context['_seq'] as $context["value"] => $context["params"]) {
                // line 96
                yield "                                        ";
                $context["list"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 96), "list", [], "any", true, true, false, 96)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 96), "list", [], "any", false, false, false, 96), [])) : ([]));
                // line 97
                yield "                                        ";
                $context["choices"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, false, false, 97), "type", [], "any", false, false, false, 97) === "boolean")) ? (Mautic\FormBundle\Helper\FormFieldHelper::parseBooleanList((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 97, $this->source); })()))) : (Mautic\FormBundle\Helper\FormFieldHelper::parseListForChoices((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 97, $this->source); })()))));
                // line 98
                yield "                                        ";
                $context["list"] = json_encode((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 98, $this->source); })()));
                // line 99
                yield "                                        ";
                $context["callback"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 99), "callback", [], "any", true, true, false, 99)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 99), "callback", [], "any", false, false, false, 99), "")) : (""));
                // line 100
                yield "                                        ";
                $context["operators"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["params"], "operators", [], "any", true, true, false, 100) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["params"], "operators", [], "any", false, false, false, 100)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["params"], "operators", [], "any", false, false, false, 100)))) : ("{}"));
                // line 101
                yield "
                                        <option value=\"";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"]);
                yield "\"
                                                data-mautic=\"available_";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"
                                                data-field-object=\"";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["object"], "html", null, true);
                yield "\"
                                                data-field-type=\"";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, false, false, 105), "type", [], "any", false, false, false, 105), "html", null, true);
                yield "\"
                                                data-field-list=\"";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 106, $this->source); })()));
                yield "\"
                                                data-field-callback=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 107, $this->source); })()), "html", null, true);
                yield "\"
                                                data-field-operators=\"";
                // line 108
                yield (isset($context["operators"]) || array_key_exists("operators", $context) ? $context["operators"] : (function () { throw new RuntimeError('Variable "operators" does not exist.', 108, $this->source); })());
                yield "\"
                                                class=\"segment-filter fa ";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 109, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["params"], "label", [], "any", false, false, false, 109)), "html", null, true);
                yield "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['value'], $context['params'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            yield "                                </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['object'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "                        </select>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>

        <div data-filter-container data-index=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "filters", [], "any", false, false, false, 120)), "html", null, true);
        yield "\">
            ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "filters", [], "any", false, false, false, 121));
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
            yield "                ";
            $context["isPrototype"] = ("__name__" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "vars", [], "any", false, false, false, 122), "name", [], "any", false, false, false, 122));
            // line 123
            yield "                ";
            if (((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 123, $this->source); })()) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 123), "fields", [], "any", false, true, false, 123), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "vars", [], "any", false, false, false, 123), "value", [], "any", false, false, false, 123), "object", [], "any", false, false, false, 123), [], "array", false, true, false, 123), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "vars", [], "any", false, false, false, 123), "value", [], "any", false, false, false, 123), "field", [], "any", false, false, false, 123), [], "array", true, true, false, 123))) {
                // line 124
                yield "                    ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["filter"], 'widget', ["first" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 124)]);
                yield "
                ";
            }
            // line 126
            yield "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['i'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "        </div>
    </div>
";
        yield from [];
    }

    // line 131
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dynamic_content_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 132
        yield "    <div class=\"tab-pane dynamic-content bdr-w-0 ";
        yield ((("0" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "vars", [], "any", false, false, false, 132), "name", [], "any", false, false, false, 132))) ? ("active") : ("fade"));
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "vars", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132), "html", null, true);
        yield "\">
        <div class=\"panel\">
            <ul class=\"nav nav-tabs pr-md pl-md\" id=\"dynamicContentFilterTabs_";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "vars", [], "any", false, false, false, 134), "name", [], "any", false, false, false, 134), "html", null, true);
        yield "\">
              <li>
                <a role=\"tab\" class=\"addNewDynamicContentFilter\" data-index=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "vars", [], "any", false, false, false, 136), "name", [], "any", false, false, false, 136), "html", null, true);
        yield "\"><i class=\"ri-add-line text-success\"></i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.new"), "html", null, true);
        yield "</a>
              </li>
              <li class=\"active\">
                <a data-toggle=\"tab\" href=\"#emailform_dynamicContent_";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "vars", [], "any", false, false, false, 139), "name", [], "any", false, false, false, 139), "html", null, true);
        yield "_default\" role=\"tab\">Default</a>
              </li>
              ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "filters", [], "array", false, false, false, 141));
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
            yield "                <li><a role=\"tab\" data-toggle=\"tab\" href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "vars", [], "any", false, false, false, 142), "id", [], "any", false, false, false, 142), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.dynamicContent.tab"), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 142), "html", null, true);
            yield "</a></li>
              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['i'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        yield "            </ul>

            <div class=\"tab-content pa-md\">
              <div class=\"tab-pane bdr-w-0 active\" id=\"emailform_dynamicContent_";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "vars", [], "any", false, false, false, 147), "name", [], "any", false, false, false, 147), "html", null, true);
        yield "_default\">
                <div class=\"row hidden\">
                  <div class=\"col-xs-10\">";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "tokenName", [], "any", false, false, false, 149), 'row');
        yield "</div>
                </div>
                ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "content", [], "any", false, false, false, 151), 'row');
        yield "
              </div>
              ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "filters", [], "any", false, false, false, 153));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 154
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["filter"], 'widget');
            yield "
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "            </div>
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
        return "@MauticEmail/FormTheme/Email/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  548 => 156,  539 => 154,  535 => 153,  530 => 151,  525 => 149,  520 => 147,  515 => 144,  494 => 142,  477 => 141,  472 => 139,  464 => 136,  459 => 134,  451 => 132,  444 => 131,  437 => 127,  423 => 126,  417 => 124,  414 => 123,  411 => 122,  394 => 121,  390 => 120,  381 => 113,  374 => 111,  364 => 109,  360 => 108,  356 => 107,  352 => 106,  348 => 105,  344 => 104,  340 => 103,  336 => 102,  333 => 101,  330 => 100,  327 => 99,  324 => 98,  321 => 97,  318 => 96,  314 => 95,  309 => 94,  306 => 93,  302 => 92,  292 => 85,  283 => 79,  276 => 74,  272 => 72,  270 => 71,  264 => 68,  257 => 65,  250 => 64,  241 => 59,  237 => 58,  233 => 57,  225 => 52,  221 => 51,  217 => 50,  213 => 49,  206 => 48,  204 => 47,  199 => 45,  189 => 42,  185 => 41,  177 => 36,  170 => 34,  163 => 33,  161 => 32,  159 => 31,  157 => 30,  155 => 29,  153 => 28,  146 => 27,  137 => 22,  131 => 18,  127 => 16,  125 => 15,  119 => 12,  115 => 10,  108 => 9,  100 => 6,  93 => 5,  85 => 2,  78 => 1,  73 => 131,  70 => 130,  68 => 64,  65 => 63,  63 => 27,  60 => 26,  58 => 9,  55 => 8,  53 => 5,  50 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/FormTheme/Email/layout.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\FormTheme\\Email\\layout.html.twig");
    }
}
