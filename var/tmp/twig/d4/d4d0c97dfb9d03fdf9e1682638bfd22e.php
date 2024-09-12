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

/* @MauticReport/Report/_details_content_header.html.twig */
class __TwigTemplate_a750d6442d6ed7280adadcf0f20abf61 extends Template
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
        // line 1
        $context["showDynamicFilters"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "settings", [], "any", false, true, false, 1), "showDynamicFilters", [], "any", true, true, false, 1) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 1, $this->source); })()), "settings", [], "any", false, false, false, 1), "showDynamicFilters", [], "any", false, false, false, 1));
        // line 2
        $context["hideDateRangeFilter"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "settings", [], "any", false, true, false, 2), "hideDateRangeFilter", [], "any", true, true, false, 2) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 2, $this->source); })()), "settings", [], "any", false, false, false, 2), "hideDateRangeFilter", [], "any", false, false, false, 2));
        // line 4
        echo "<!-- report detail header -->
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 5, $this->source); })()), "description", [], "any", false, false, false, 5)) {
            // line 6
            echo "  <div class=\"pr-md pl-md pt-lg pb-lg\">
      <div class=\"text-white dark-sm mb-0\">";
            // line 7
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 7, $this->source); })()), "description", [], "any", false, false, false, 7));
            echo "</div>
  </div>
";
        }
        // line 10
        echo "<!--/ report detail header -->
<!-- report detail collapseable -->
<div id=\"report-shelves\" class=\"mb-5\" aria-multiselectable=\"true\">
    <div class=\"collapse\" id=\"report-details\">
        <div class=\"pr-md pl-md pb-md\">
            <div class=\"panel shd-none mb-0\">
                <table class=\"table table-hover mb-0\">
                    <tbody>
                      ";
        // line 18
        echo twig_include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 18, $this->source); })())]);
        echo "
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"collapse ";
        // line 24
        if ((isset($context["showDynamicFilters"]) || array_key_exists("showDynamicFilters", $context) ? $context["showDynamicFilters"] : (function () { throw new RuntimeError('Variable "showDynamicFilters" does not exist.', 24, $this->source); })())) {
            echo "in";
        }
        echo "\" id=\"report-filters\">
        <div class=\"pr-md pl-md pb-md\">
            <div class=\"panel shd-none mb-0 pa-lg\">
                <div class=\"row\">
                    <div class=\"col-sm-12 mb-10 ";
        // line 28
        if ((isset($context["hideDateRangeFilter"]) || array_key_exists("hideDateRangeFilter", $context) ? $context["hideDateRangeFilter"] : (function () { throw new RuntimeError('Variable "hideDateRangeFilter" does not exist.', 28, $this->source); })())) {
            echo "hide";
        }
        echo "\">
                        ";
        // line 29
        echo twig_include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 29, $this->source); })())]);
        echo "
                    </div>
                    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["dynamicFilterForm"]) || array_key_exists("dynamicFilterForm", $context) ? $context["dynamicFilterForm"] : (function () { throw new RuntimeError('Variable "dynamicFilterForm" does not exist.', 31, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dynamicFilterForm"]) || array_key_exists("dynamicFilterForm", $context) ? $context["dynamicFilterForm"] : (function () { throw new RuntimeError('Variable "dynamicFilterForm" does not exist.', 32, $this->source); })()), "children", [], "any", false, false, false, 32), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ("hidden" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 32, $this->source); })()), "vars", [], "any", false, false, false, 32), "block_prefixes", [], "any", false, false, false, 32), 1, [], "array", false, false, false, 32)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 33
            echo "                      <div class=\"col-sm-4\">
                          ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            echo "
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["dynamicFilterForm"]) || array_key_exists("dynamicFilterForm", $context) ? $context["dynamicFilterForm"] : (function () { throw new RuntimeError('Variable "dynamicFilterForm" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
    <!--/ report detail collapseable -->

    <div>
        <!-- report detail collapseable toggler -->
        <div class=\"hr-expand nm\">
            <a href=\"#report-details\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"report-details\">
                <span class=\"caret\"></span> ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "
            </a>
            <a href=\"#report-filters\" class=\"arrow text-muted ";
        // line 50
        if ( !(isset($context["showDynamicFilters"]) || array_key_exists("showDynamicFilters", $context) ? $context["showDynamicFilters"] : (function () { throw new RuntimeError('Variable "showDynamicFilters" does not exist.', 50, $this->source); })())) {
            echo "collapsed";
        }
        echo "\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"report-filters\">
                <span class=\"caret\"></span> ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.filters"), "html", null, true);
        echo "
            </a>
        </div>
        <!--/ report detail collapseable toggler -->
    </div>
</div>

<div class=\"report-content\">
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticReport/Report/_details_content_header.html.twig";
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
        return array (  140 => 51,  134 => 50,  129 => 48,  114 => 37,  105 => 34,  102 => 33,  98 => 32,  94 => 31,  89 => 29,  83 => 28,  74 => 24,  65 => 18,  55 => 10,  49 => 7,  46 => 6,  44 => 5,  41 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticReport/Report/_details_content_header.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Resources\\views\\Report\\_details_content_header.html.twig");
    }
}
