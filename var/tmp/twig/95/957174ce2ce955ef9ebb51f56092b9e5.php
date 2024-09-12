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

/* @MauticReport/Report/_details_content_header.html.twig */
class __TwigTemplate_a2aacd30b743bd9edbf889c9058f2586 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["showDynamicFilters"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["report"] ?? null), "settings", [], "any", false, true, false, 1), "showDynamicFilters", [], "any", true, true, false, 1) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 1, $this->source); })()), "settings", [], "any", false, false, false, 1), "showDynamicFilters", [], "any", false, false, false, 1));
        // line 2
        $context["hideDateRangeFilter"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["report"] ?? null), "settings", [], "any", false, true, false, 2), "hideDateRangeFilter", [], "any", true, true, false, 2) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 2, $this->source); })()), "settings", [], "any", false, false, false, 2), "hideDateRangeFilter", [], "any", false, false, false, 2));
        // line 4
        yield "<!-- report detail header -->
";
        // line 5
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 5, $this->source); })()), "description", [], "any", false, false, false, 5)) {
            // line 6
            yield "  <div class=\"pr-md pl-md pt-lg pb-lg\">
      <div class=\"text-white dark-sm mb-0\">";
            // line 7
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 7, $this->source); })()), "description", [], "any", false, false, false, 7));
            yield "</div>
  </div>
";
        }
        // line 10
        yield "<!--/ report detail header -->
<!-- report detail collapseable -->
<div id=\"report-shelves\" class=\"mb-5\" aria-multiselectable=\"true\">
    <div class=\"collapse\" id=\"report-details\">
        <div class=\"pr-md pl-md pb-md\">
            <div class=\"panel shd-none mb-0\">
                <table class=\"table table-hover mb-0\">
                    <tbody>
                      ";
        // line 18
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 18, $this->source); })())]);
        yield "
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"collapse ";
        // line 24
        if ((isset($context["showDynamicFilters"]) || array_key_exists("showDynamicFilters", $context) ? $context["showDynamicFilters"] : (function () { throw new RuntimeError('Variable "showDynamicFilters" does not exist.', 24, $this->source); })())) {
            yield "in";
        }
        yield "\" id=\"report-filters\">
        <div class=\"pr-md pl-md pb-md\">
            <div class=\"panel shd-none mb-0 pa-lg\">
                <div class=\"row\">
                    <div class=\"col-sm-12 mb-10 ";
        // line 28
        if ((isset($context["hideDateRangeFilter"]) || array_key_exists("hideDateRangeFilter", $context) ? $context["hideDateRangeFilter"] : (function () { throw new RuntimeError('Variable "hideDateRangeFilter" does not exist.', 28, $this->source); })())) {
            yield "hide";
        }
        yield "\">
                        ";
        // line 29
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 29, $this->source); })())]);
        yield "
                    </div>
                    ";
        // line 31
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["dynamicFilterForm"]) || array_key_exists("dynamicFilterForm", $context) ? $context["dynamicFilterForm"] : (function () { throw new RuntimeError('Variable "dynamicFilterForm" does not exist.', 31, $this->source); })()), 'form_start');
        yield "
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dynamicFilterForm"]) || array_key_exists("dynamicFilterForm", $context) ? $context["dynamicFilterForm"] : (function () { throw new RuntimeError('Variable "dynamicFilterForm" does not exist.', 32, $this->source); })()), "children", [], "any", false, false, false, 32), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ("hidden" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 32, $this->source); })()), "vars", [], "any", false, false, false, 32), "block_prefixes", [], "any", false, false, false, 32), 1, [], "array", false, false, false, 32)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 33
            yield "                      <div class=\"col-sm-4\">
                          ";
            // line 34
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            yield "
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["dynamicFilterForm"]) || array_key_exists("dynamicFilterForm", $context) ? $context["dynamicFilterForm"] : (function () { throw new RuntimeError('Variable "dynamicFilterForm" does not exist.', 37, $this->source); })()), 'form_end');
        yield "
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
            </a>
            <a href=\"#report-filters\" class=\"arrow text-muted ";
        // line 50
        if ( !(isset($context["showDynamicFilters"]) || array_key_exists("showDynamicFilters", $context) ? $context["showDynamicFilters"] : (function () { throw new RuntimeError('Variable "showDynamicFilters" does not exist.', 50, $this->source); })())) {
            yield "collapsed";
        }
        yield "\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"report-filters\">
                <span class=\"caret\"></span> ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.filters"), "html", null, true);
        yield "
            </a>
        </div>
        <!--/ report detail collapseable toggler -->
    </div>
</div>

<div class=\"report-content\">
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticReport/Report/_details_content_header.html.twig";
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
        return array (  145 => 51,  139 => 50,  134 => 48,  119 => 37,  110 => 34,  107 => 33,  103 => 32,  99 => 31,  94 => 29,  88 => 28,  79 => 24,  70 => 18,  60 => 10,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticReport/Report/_details_content_header.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Resources\\views\\Report\\_details_content_header.html.twig");
    }
}
