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

/* @MauticReport/FormTheme/Report/layout.html.twig */
class __TwigTemplate_6d08ac13056ff7a84fc7e9e00d3a837b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_report_aggregators_entry_column_row' => [$this, 'block__report_aggregators_entry_column_row'],
            '_report_aggregators_entry_function_row' => [$this, 'block__report_aggregators_entry_function_row'],
            '_report_aggregators_row' => [$this, 'block__report_aggregators_row'],
            '_report_filters_entry_column_row' => [$this, 'block__report_filters_entry_column_row'],
            '_report_filters_entry_condition_row' => [$this, 'block__report_filters_entry_condition_row'],
            '_report_filters_entry_value_row' => [$this, 'block__report_filters_entry_value_row'],
            '_report_filters_row' => [$this, 'block__report_filters_row'],
            '_report_tableOrder_entry_column_row' => [$this, 'block__report_tableOrder_entry_column_row'],
            '_report_tableOrder_entry_direction_row' => [$this, 'block__report_tableOrder_entry_direction_row'],
            '_report_tableOrder_row' => [$this, 'block__report_tableOrder_row'],
            'aggregator_row' => [$this, 'block_aggregator_row'],
            'filter_selector_row' => [$this, 'block_filter_selector_row'],
            'table_order_row' => [$this, 'block_table_order_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_report_aggregators_entry_column_row', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('_report_aggregators_entry_function_row', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('_report_aggregators_row', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('_report_filters_entry_column_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('_report_filters_entry_condition_row', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('_report_filters_entry_value_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('_report_filters_row', $context, $blocks);
        // line 91
        echo "
";
        // line 92
        $this->displayBlock('_report_tableOrder_entry_column_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('_report_tableOrder_entry_direction_row', $context, $blocks);
        // line 117
        echo "
";
        // line 118
        $this->displayBlock('_report_tableOrder_row', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('aggregator_row', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('filter_selector_row', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('table_order_row', $context, $blocks);
    }

    // line 1
    public function block__report_aggregators_entry_column_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div class=\"choice-wrapper col-xs-6\" data-form-block=\"_report_aggregators_entry_column_row\">
    <label class=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "label_attr", [], "any", false, false, false, 3), "class", [], "any", false, false, false, 3), "html", null, true);
        echo "\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "label", [], "any", false, false, false, 3)), "html", null, true);
        echo "</label>
    <select id=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "full_name", [], "any", false, false, false, 4), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "attr", [], "any", false, false, false, 4), "class", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "choices", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 6
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "value", [], "any", false, false, false, 6));
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["column"], "value", [], "any", false, false, false, 6) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "data", [], "any", false, false, false, 6))) {
                echo "selected";
            }
            echo ">
                ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 7), "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </select>
</div>
";
    }

    // line 14
    public function block__report_aggregators_entry_function_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "<div class=\"choice-wrapper col-xs-4\" data-form-block=\"_report_aggregators_entry_function_row\">
    <label class=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "label_attr", [], "any", false, false, false, 16), "class", [], "any", false, false, false, 16), "html", null, true);
        echo "\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "label", [], "any", false, false, false, 16)), "html", null, true);
        echo "</label>
    <select id=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "\"
            name=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "vars", [], "any", false, false, false, 18), "full_name", [], "any", false, false, false, 18), "html", null, true);
        echo "\"
            class=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "vars", [], "any", false, false, false, 19), "attr", [], "any", false, false, false, 19), "class", [], "any", false, false, false, 19), "html", null, true);
        echo "\"
            onchange=\"Mautic.checkReportCondition('";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "')\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "choices", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["function"]) {
            // line 22
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["function"], "value", [], "any", false, false, false, 22));
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["function"], "value", [], "any", false, false, false, 22) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "vars", [], "any", false, false, false, 22), "data", [], "any", false, false, false, 22))) {
                echo "selected";
            }
            echo ">
                ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["function"], "label", [], "any", false, false, false, 23), "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['function'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </select>
</div>
";
    }

    // line 30
    public function block__report_aggregators_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        $context["hasErrors"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31)) > 0);
        // line 32
        echo "<div id=\"aggregatorsContainer\" class=\"row\" data-form-block=\"_report_aggregators_row\">
    <div class=\"form-group col-md-12 ";
        // line 33
        if ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 33, $this->source); })())) {
            echo "has-error";
        }
        echo "\">
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'widget');
        echo "
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'errors');
        echo "
    </div>
    <div class=\"col-xs-12\">
        <button id=\"aggregators-button\"
                disabled
                type=\"button\"
                class=\"btn btn-primary\"
                onclick=\"Mautic.addReportRow('report_aggregators');\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.label.function"), "html", null, true);
        echo "</button>
    </div>
</div>
";
    }

    // line 47
    public function block__report_filters_entry_column_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "<label class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "vars", [], "any", false, false, false, 48), "label_attr", [], "any", false, false, false, 48), "class", [], "any", false, false, false, 48), "html", null, true);
        echo "\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "vars", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "vars", [], "any", false, false, false, 48), "label", [], "any", false, false, false, 48)), "html", null, true);
        echo "</label>
<select id=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "vars", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "vars", [], "any", false, false, false, 49), "full_name", [], "any", false, false, false, 49), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "vars", [], "any", false, false, false, 49), "attr", [], "any", false, false, false, 49), "class", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "vars", [], "any", false, false, false, 50), "choices", [], "any", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 51
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "value", [], "any", false, false, false, 51));
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["column"], "value", [], "any", false, false, false, 51) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "vars", [], "any", false, false, false, 51), "data", [], "any", false, false, false, 51))) {
                echo "selected";
            }
            echo ">
          ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 52), "html", null, true);
            echo "
      </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</select>
";
    }

    // line 58
    public function block__report_filters_entry_condition_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "<label class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "vars", [], "any", false, false, false, 59), "label_attr", [], "any", false, false, false, 59), "class", [], "any", false, false, false, 59), "html", null, true);
        echo "\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "vars", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "vars", [], "any", false, false, false, 59), "label", [], "any", false, false, false, 59)), "html", null, true);
        echo "</label>
<select id=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "vars", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "vars", [], "any", false, false, false, 60), "full_name", [], "any", false, false, false, 60), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "vars", [], "any", false, false, false, 60), "attr", [], "any", false, false, false, 60), "class", [], "any", false, false, false, 60), "html", null, true);
        echo "\" onchange=\"Mautic.checkReportCondition('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "vars", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), "html", null, true);
        echo "')\">
    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "vars", [], "any", false, false, false, 61), "choices", [], "any", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
            // line 62
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["condition"], "value", [], "any", false, false, false, 62));
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["condition"], "value", [], "any", false, false, false, 62) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "vars", [], "any", false, false, false, 62), "data", [], "any", false, false, false, 62))) {
                echo "selected";
            }
            echo ">
        ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["condition"], "label", [], "any", false, false, false, 63), "html", null, true);
            echo "
    </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['condition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "</select>
";
    }

    // line 69
    public function block__report_filters_entry_value_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        $context["condition"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "parent", [], "any", false, false, false, 70), "children", [], "any", false, false, false, 70), "condition", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "value", [], "any", false, false, false, 70);
        // line 71
        echo "<div class=\"form-group mb-0\" data-form-block=\"_report_filters_entry_value_row\">
    <label class=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "vars", [], "any", false, false, false, 72), "label_attr", [], "any", false, false, false, 72), "class", [], "any", false, false, false, 72), "html", null, true);
        echo "\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "vars", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "vars", [], "any", false, false, false, 72), "label", [], "any", false, false, false, 72)), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "vars", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "vars", [], "any", false, false, false, 73), "full_name", [], "any", false, false, false, 73), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "vars", [], "any", false, false, false, 73), "attr", [], "any", false, false, false, 73), "class", [], "any", false, false, false, 73), "html", null, true);
        echo "\"
    value=\"";
        // line 74
        if (is_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "vars", [], "any", false, false, false, 74), "data", [], "any", false, false, false, 74))) {
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "vars", [], "any", false, false, false, 74), "data", [], "any", false, false, false, 74), ", "));
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "vars", [], "any", false, false, false, 74), "data", [], "any", false, false, false, 74));
        }
        echo "\"
    ";
        // line 75
        if (twig_in_filter((isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 75, $this->source); })()), ["empty", "notEmpty"])) {
            echo "disabled";
        }
        echo " />
</div>
";
    }

    // line 79
    public function block__report_filters_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        $context["hasErrors"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "vars", [], "any", false, false, false, 80), "errors", [], "any", false, false, false, 80)) > 0);
        // line 81
        echo "<div id=\"filterSelectorContainer\" class=\"row\" data-form-block=\"_report_filters_row\">
    <div class=\"form-group col-md-12 ";
        // line 82
        if ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 82, $this->source); })())) {
            echo "has-error";
        }
        echo "\">
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'widget');
        echo "
        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'errors');
        echo "
    </div>
    <div class=\"col-xs-12\">
        <button type=\"button\" class=\"btn btn-primary\" onclick=\"Mautic.addReportRow('report_filters');\">";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.label.addfilter"), "html", null, true);
        echo "</button>
    </div>
</div>
";
    }

    // line 92
    public function block__report_tableOrder_entry_column_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "<div class=\"choice-wrapper col-xs-6\" data-form-block=\"_report_tableOrder_entry_column_row\">
    <label class=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "vars", [], "any", false, false, false, 94), "label_attr", [], "any", false, false, false, 94), "class", [], "any", false, false, false, 94), "html", null, true);
        echo "\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "vars", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "vars", [], "any", false, false, false, 94), "label", [], "any", false, false, false, 94)), "html", null, true);
        echo "</label>
    <select id=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "vars", [], "any", false, false, false, 95), "id", [], "any", false, false, false, 95), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "vars", [], "any", false, false, false, 95), "full_name", [], "any", false, false, false, 95), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "vars", [], "any", false, false, false, 95), "attr", [], "any", false, false, false, 95), "class", [], "any", false, false, false, 95), "html", null, true);
        echo "\">
        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "vars", [], "any", false, false, false, 96), "choices", [], "any", false, false, false, 96));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 97
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "value", [], "any", false, false, false, 97));
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["column"], "value", [], "any", false, false, false, 97) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "vars", [], "any", false, false, false, 97), "data", [], "any", false, false, false, 97))) {
                echo "selected";
            }
            echo ">
              ";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 98), "html", null, true);
            echo "
          </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "    </select>
</div>
";
    }

    // line 105
    public function block__report_tableOrder_entry_direction_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "<div class=\"choice-wrapper col-xs-4\" data-form-block=\"_report_tableOrder_entry_direction_row\">
    <label class=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "vars", [], "any", false, false, false, 107), "label_attr", [], "any", false, false, false, 107), "class", [], "any", false, false, false, 107), "html", null, true);
        echo "\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "vars", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "vars", [], "any", false, false, false, 107), "label", [], "any", false, false, false, 107)), "html", null, true);
        echo "</label>
    <select id=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "vars", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "vars", [], "any", false, false, false, 108), "full_name", [], "any", false, false, false, 108), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "vars", [], "any", false, false, false, 108), "attr", [], "any", false, false, false, 108), "class", [], "any", false, false, false, 108), "html", null, true);
        echo "\">
        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "vars", [], "any", false, false, false, 109), "choices", [], "any", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["direction"]) {
            // line 110
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["direction"], "value", [], "any", false, false, false, 110));
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["direction"], "value", [], "any", false, false, false, 110) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "vars", [], "any", false, false, false, 110), "data", [], "any", false, false, false, 110))) {
                echo "selected";
            }
            echo ">
            ";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["direction"], "label", [], "any", false, false, false, 111), "html", null, true);
            echo "
        </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['direction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "    </select>
</div>
";
    }

    // line 118
    public function block__report_tableOrder_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        $context["hasErrors"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "vars", [], "any", false, false, false, 119), "errors", [], "any", false, false, false, 119)) > 0);
        // line 120
        echo "<div id=\"tableOrderContainer\" class=\"row\" data-form-block=\"_report_tableOrder_row\">
    <div class=\"form-group col-md-12 ";
        // line 121
        if ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 121, $this->source); })())) {
            echo "has-error";
        }
        echo "\">
        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), 'widget');
        echo "
        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), 'errors');
        echo "
    </div>
    <div class=\"col-xs-12\">
        <button type=\"button\" class=\"btn btn-primary\" onclick=\"Mautic.addReportRow('report_tableOrder');\">";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.label.addtableorder"), "html", null, true);
        echo "</button>
    </div>
</div>
";
    }

    // line 131
    public function block_aggregator_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "<div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "vars", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132), "html", null, true);
        echo "_container\" class=\"row mb-sm\" data-form-block=\"aggregator_row\">
    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "vars", [], "any", false, false, false, 133), "form", [], "any", false, false, false, 133), "children", [], "any", false, false, false, 133), "function", [], "any", false, false, false, 133), 'row');
        echo "
    ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "vars", [], "any", false, false, false, 134), "form", [], "any", false, false, false, 134), "children", [], "any", false, false, false, 134), "column", [], "any", false, false, false, 134), 'row');
        echo "
    <div class=\"col-xs-1 mt-lg\">
        <button type=\"button\" class=\"btn btn-danger\" onclick=\"Mautic.removeReportRow('";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "vars", [], "any", false, false, false, 136), "id", [], "any", false, false, false, 136), "html", null, true);
        echo "_container');\" data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.label.removefilter"), "html", null, true);
        echo "\"><i class=\"fa fa-minus-square-o\"></i></button>
    </div>
</div>
";
    }

    // line 141
    public function block_filter_selector_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        $context["inGroup"] = ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 142), "data", [], "any", false, true, false, 142), "glue", [], "any", true, true, false, 142) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 142), "data", [], "any", false, true, false, 142), "glue", [], "any", true, true, false, 142) && ("and" === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "vars", [], "any", false, false, false, 142), "data", [], "any", false, false, false, 142), "glue", [], "any", false, false, false, 142))));
        // line 143
        echo "<div class=\"panel ";
        if ((isset($context["inGroup"]) || array_key_exists("inGroup", $context) ? $context["inGroup"] : (function () { throw new RuntimeError('Variable "inGroup" does not exist.', 143, $this->source); })())) {
            echo "in-group";
        }
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "vars", [], "any", false, false, false, 143), "id", [], "any", false, false, false, 143), "html", null, true);
        echo "_container\" data-form-block=\"filter_selector_row\">
    <div class=\"panel-heading\">
        <div class=\"panel-glue col-sm-2 pl-0\">
            ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "vars", [], "any", false, false, false, 146), "form", [], "any", false, false, false, 146), "children", [], "any", false, false, false, 146), "glue", [], "any", false, false, false, 146), 'row');
        echo "
        </div>
    </div>
    <div class=\"panel-body\">
        <div class=\"row mb-sm\">
            <div class=\"choice-wrapper col-xs-3\">
                ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "vars", [], "any", false, false, false, 152), "form", [], "any", false, false, false, 152), "children", [], "any", false, false, false, 152), "column", [], "any", false, false, false, 152), 'row');
        echo "
            </div>
            <div class=\"choice-wrapper col-xs-2\">
                ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "vars", [], "any", false, false, false, 155), "form", [], "any", false, false, false, 155), "children", [], "any", false, false, false, 155), "condition", [], "any", false, false, false, 155), 'row');
        echo "
            </div>
            <div class=\"choice-wrapper col-xs-4\">
                ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "vars", [], "any", false, false, false, 158), "form", [], "any", false, false, false, 158), "children", [], "any", false, false, false, 158), "value", [], "any", false, false, false, 158), 'row');
        echo "
            </div>
            <div class=\"choice-wrapper col-xs-2\">
                ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "vars", [], "any", false, false, false, 161), "form", [], "any", false, false, false, 161), "children", [], "any", false, false, false, 161), "dynamic", [], "any", false, false, false, 161), 'row');
        echo "
            </div>
            <div class=\"col-xs-1 mt-lg\">
                <button type=\"button\" class=\"btn btn-danger\" onclick=\"Mautic.removeReportRow('";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "vars", [], "any", false, false, false, 164), "id", [], "any", false, false, false, 164), "html", null, true);
        echo "_container');\" data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.label.removefilter"), "html", null, true);
        echo "\"><i class=\"fa fa-minus-square-o\"></i></button>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 171
    public function block_table_order_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 172
        echo "<div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "vars", [], "any", false, false, false, 172), "id", [], "any", false, false, false, 172), "html", null, true);
        echo "_container\" class=\"row mb-sm\" data-form-block=\"table_order_row\">
    ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "vars", [], "any", false, false, false, 173), "form", [], "any", false, false, false, 173), "children", [], "any", false, false, false, 173), "column", [], "any", false, false, false, 173), 'row');
        echo "
    ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "vars", [], "any", false, false, false, 174), "form", [], "any", false, false, false, 174), "children", [], "any", false, false, false, 174), "direction", [], "any", false, false, false, 174), 'row');
        echo "
    <div class=\"col-xs-2 mt-lg\">
        <button type=\"button\" class=\"btn btn-danger\" onclick=\"Mautic.removeReportRow('";
        // line 176
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "vars", [], "any", false, false, false, 176), "id", [], "any", false, false, false, 176), "html", null, true);
        echo "_container');\" data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.label.removefilter"), "html", null, true);
        echo "\"><i class=\"fa fa-minus-square-o\"></i></button>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticReport/FormTheme/Report/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  677 => 176,  672 => 174,  668 => 173,  663 => 172,  659 => 171,  647 => 164,  641 => 161,  635 => 158,  629 => 155,  623 => 152,  614 => 146,  603 => 143,  601 => 142,  597 => 141,  587 => 136,  582 => 134,  578 => 133,  573 => 132,  569 => 131,  561 => 126,  555 => 123,  551 => 122,  545 => 121,  542 => 120,  540 => 119,  536 => 118,  530 => 114,  521 => 111,  512 => 110,  508 => 109,  500 => 108,  492 => 107,  489 => 106,  485 => 105,  479 => 101,  470 => 98,  461 => 97,  457 => 96,  449 => 95,  441 => 94,  438 => 93,  434 => 92,  426 => 87,  420 => 84,  416 => 83,  410 => 82,  407 => 81,  405 => 80,  401 => 79,  392 => 75,  384 => 74,  376 => 73,  368 => 72,  365 => 71,  363 => 70,  359 => 69,  354 => 66,  345 => 63,  336 => 62,  332 => 61,  322 => 60,  313 => 59,  309 => 58,  304 => 55,  295 => 52,  286 => 51,  282 => 50,  274 => 49,  265 => 48,  261 => 47,  253 => 42,  243 => 35,  239 => 34,  233 => 33,  230 => 32,  228 => 31,  224 => 30,  218 => 26,  209 => 23,  200 => 22,  196 => 21,  192 => 20,  188 => 19,  184 => 18,  180 => 17,  172 => 16,  169 => 15,  165 => 14,  159 => 10,  150 => 7,  141 => 6,  137 => 5,  129 => 4,  121 => 3,  118 => 2,  114 => 1,  110 => 171,  107 => 170,  105 => 141,  102 => 140,  100 => 131,  97 => 130,  95 => 118,  92 => 117,  90 => 105,  87 => 104,  85 => 92,  82 => 91,  80 => 79,  77 => 78,  75 => 69,  72 => 68,  70 => 58,  67 => 57,  65 => 47,  62 => 46,  60 => 30,  57 => 29,  55 => 14,  52 => 13,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticReport/FormTheme/Report/layout.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Resources\\views\\FormTheme\\Report\\layout.html.twig");
    }
}
