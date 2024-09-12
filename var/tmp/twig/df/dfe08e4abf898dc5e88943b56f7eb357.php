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

/* @MauticReport/Report/_details_report_content.html.twig */
class __TwigTemplate_e3120a19eedf87937efc3d14e5d251e6 extends Template
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
        $context["showGraphsAboveTable"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["report"] ?? null), "settings", [], "any", false, true, false, 1), "showGraphsAboveTable", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["report"] ?? null), "settings", [], "any", false, true, false, 1), "showGraphsAboveTable", [], "any", false, false, false, 1), false)) : (false));
        // line 2
        $context["dataCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()));
        // line 3
        $context["columnOrder"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 3, $this->source); })()), "columns", [], "any", false, false, false, 3);
        // line 4
        $context["graphOrder"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 4, $this->source); })()), "graphs", [], "any", false, false, false, 4);
        // line 5
        $context["aggregatorOrder"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 5, $this->source); })()), "aggregators", [], "any", false, false, false, 5);
        // line 6
        $context["aggregatorCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 6, $this->source); })()), "aggregators", [], "any", false, false, false, 6));
        // line 7
        $context["groupBy"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 7, $this->source); })()), "groupBy", [], "any", false, false, false, 7);
        // line 8
        $context["groupByCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 8, $this->source); })()), "groupBy", [], "any", false, false, false, 8));
        // line 9
        $context["startCount"] = ((((isset($context["totalResults"]) || array_key_exists("totalResults", $context) ? $context["totalResults"] : (function () { throw new RuntimeError('Variable "totalResults" does not exist.', 9, $this->source); })()) > (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 9, $this->source); })()))) ? (((((isset($context["reportPage"]) || array_key_exists("reportPage", $context) ? $context["reportPage"] : (function () { throw new RuntimeError('Variable "reportPage" does not exist.', 9, $this->source); })()) * (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 9, $this->source); })())) - (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 9, $this->source); })())) + 1)) : (1));
        // line 10
        $context["graphContent"] = Twig\Extension\CoreExtension::include($this->env, $context, "@MauticReport/Report/details_data_graphs.html.twig", ["graphOrder" => (isset($context["graphOrder"]) || array_key_exists("graphOrder", $context) ? $context["graphOrder"] : (function () { throw new RuntimeError('Variable "graphOrder" does not exist.', 10, $this->source); })()), "graphs" => (isset($context["graphs"]) || array_key_exists("graphs", $context) ? $context["graphs"] : (function () { throw new RuntimeError('Variable "graphs" does not exist.', 10, $this->source); })()), "report" => (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 10, $this->source); })())], false);
        // line 12
        if ((isset($context["showGraphsAboveTable"]) || array_key_exists("showGraphsAboveTable", $context) ? $context["showGraphsAboveTable"] : (function () { throw new RuntimeError('Variable "showGraphsAboveTable" does not exist.', 12, $this->source); })())) {
            yield (isset($context["graphContent"]) || array_key_exists("graphContent", $context) ? $context["graphContent"] : (function () { throw new RuntimeError('Variable "graphContent" does not exist.', 12, $this->source); })());
        }
        // line 13
        yield "
";
        // line 14
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 14, $this->source); })())) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["aggregatorOrder"]) || array_key_exists("aggregatorOrder", $context) ? $context["aggregatorOrder"] : (function () { throw new RuntimeError('Variable "aggregatorOrder" does not exist.', 14, $this->source); })())))) {
            // line 15
            yield "    <!-- table section -->
    <div class=\"col-xs-12\">
        <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
            <div class=\"page-list\">
                <div class=\"table-responsive table-responsive-force\">
                    <table class=\"table table-hover report-list\" id=\"reportTable\">
                        <thead>
                        <tr>
                            <th class=\"col-report-count\"></th>
                            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 24, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 25
                yield "                                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), $context["key"], [], "array", true, true, false, 25)) {
                    // line 26
                    yield "                                    ";
                    // line 27
                    $context["orderBy"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), $context["key"], [], "array", false, true, false, 27), "alias", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), $context["key"], [], "array", false, true, false, 27), "alias", [], "any", false, false, false, 27), (((is_string($__internal_compile_0 = $context["key"]) && is_string($__internal_compile_1 = "channel.") && str_starts_with($__internal_compile_0, $__internal_compile_1))) ? (Twig\Extension\CoreExtension::replace($context["key"], ["." => "_"])) : ($context["key"])))) : ((((is_string($__internal_compile_2 = $context["key"]) && is_string($__internal_compile_3 = "channel.") && str_starts_with($__internal_compile_2, $__internal_compile_3))) ? (Twig\Extension\CoreExtension::replace($context["key"], ["." => "_"])) : ($context["key"]))));
                    // line 28
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("report." . CoreExtension::getAttribute($this->env, $this->source,                     // line 29
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)), "orderBy" =>                     // line 30
(isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 30, $this->source); })()), "text" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 31
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 31, $this->source); })()), $context["key"], [], "array", false, false, false, 31), "label", [], "any", false, false, false, 31), "class" => ("col-report-" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 32
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 32, $this->source); })()), $context["key"], [], "array", false, false, false, 32), "type", [], "any", false, false, false, 32)), "dataToggle" => ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 33
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 33, $this->source); })()), $context["key"], [], "array", false, false, false, 33), "type", [], "any", false, false, false, 33), ["date", "datetime"])) ? ("date") : ("")), "target" => ".report-content"]);
                    // line 35
                    yield "
                                ";
                }
                // line 37
                yield "                            ";
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
            unset($context['_seq'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "                            ";
            if ((isset($context["aggregatorCount"]) || array_key_exists("aggregatorCount", $context) ? $context["aggregatorCount"] : (function () { throw new RuntimeError('Variable "aggregatorCount" does not exist.', 38, $this->source); })())) {
                // line 39
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["aggregatorOrder"]) || array_key_exists("aggregatorOrder", $context) ? $context["aggregatorOrder"] : (function () { throw new RuntimeError('Variable "aggregatorOrder" does not exist.', 39, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["aggregator"]) {
                    // line 40
                    $context["columnName"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 40), [], "array", false, true, false, 40), "label", [], "any", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 40), [], "array", false, true, false, 40), "label", [], "any", false, false, false, 40)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 40), [], "array", false, true, false, 40), "label", [], "any", false, false, false, 40)) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 40), [], "array", false, true, false, 40), "alias", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 40), [], "array", false, true, false, 40), "alias", [], "any", false, false, false, 40), "")) : (""))));
                    // line 41
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("report." . CoreExtension::getAttribute($this->env, $this->source,                     // line 42
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)), "text" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 43
$context["aggregator"], "function", [], "any", false, false, false, 43) . " ") . (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 43, $this->source); })())), "orderBy" => (((("`" . CoreExtension::getAttribute($this->env, $this->source,                     // line 44
$context["aggregator"], "function", [], "any", false, false, false, 44)) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 44)) . "`"), "dataToggle" => "", "target" => ".report-content"]);
                    // line 47
                    yield "
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
                unset($context['_seq'], $context['_key'], $context['aggregator'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                yield "                            ";
            }
            // line 50
            yield "                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 53
            if ((isset($context["dataCount"]) || array_key_exists("dataCount", $context) ? $context["dataCount"] : (function () { throw new RuntimeError('Variable "dataCount" does not exist.', 53, $this->source); })())) {
                // line 54
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 54, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 55
                    yield "                                <tr>
                                    <td>";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["startCount"]) || array_key_exists("startCount", $context) ? $context["startCount"] : (function () { throw new RuntimeError('Variable "startCount" does not exist.', 56, $this->source); })()), "html", null, true);
                    yield "</td>
                                    ";
                    // line 57
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 57, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 57, $this->source); })()), [], "array", true, true, false, 57); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                        // line 58
                        $context["collapse"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), $context["key"], [], "array", false, true, false, 58), "collapse", [], "any", true, true, false, 58)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 58, $this->source); })()), $context["key"], [], "array", false, false, false, 58), "collapse", [], "any", false, false, false, 58)) : (false));
                        // line 59
                        yield "<td>";
                        // line 60
                        $context["closeLink"] = false;
                        // line 61
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), $context["key"], [], "array", false, true, false, 61), "link", [], "any", true, true, false, 61) && CoreExtension::getAttribute($this->env, $this->source, $context["row"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 61, $this->source); })()), $context["key"], [], "array", false, false, false, 61), "alias", [], "any", false, false, false, 61), [], "array", true, true, false, 61)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["row"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 61, $this->source); })()), $context["key"], [], "array", false, false, false, 61), "alias", [], "any", false, false, false, 61), [], "array", false, false, false, 61)))) {
                            // line 62
                            $context["closeLink"] = true;
                            // line 63
                            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), $context["key"], [], "array", false, true, false, 63), "linkParameters", [], "any", true, true, false, 63)) {
                                // line 64
                                yield "                                                    ";
                                $context["parameters"] = [];
                                // line 65
                                yield "                                                    ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 65, $this->source); })()), $context["key"], [], "array", false, false, false, 65), "linkParameters", [], "any", false, false, false, 65));
                                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                                    // line 66
                                    yield "                                                        ";
                                    $context["parameters"] = Twig\Extension\CoreExtension::merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 66, $this->source); })()), [$context["k"] => ((($context["v"] === "%alias%")) ? (CoreExtension::getAttribute($this->env, $this->source, $context["row"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 66, $this->source); })()), $context["key"], [], "array", false, false, false, 66), "alias", [], "any", false, false, false, 66), [], "array", false, false, false, 66)) : ($context["v"]))]);
                                    // line 67
                                    yield "                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 68
                                yield "                                                    <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 68, $this->source); })()), $context["key"], [], "array", false, false, false, 68), "link", [], "any", false, false, false, 68), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 68, $this->source); })())), "html", null, true);
                                yield "\" ";
                                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["parameters"] ?? null), "objectId", [], "any", true, true, false, 68)) ? ("class=\"label label-success\"") : (""));
                                yield ">
                                                ";
                            } else {
                                // line 70
                                yield "                                                    <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 70, $this->source); })()), $context["key"], [], "array", false, false, false, 70), "link", [], "any", false, false, false, 70), ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["row"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 70, $this->source); })()), $context["key"], [], "array", false, false, false, 70), "alias", [], "any", false, false, false, 70), [], "array", false, false, false, 70)]), "html", null, true);
                                yield "\" class=\"label label-success\">
                                                ";
                            }
                            // line 72
                            yield "                                            ";
                        }
                        // line 73
                        $context["cellType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 73, $this->source); })()), $context["key"], [], "array", false, false, false, 73), "type", [], "any", false, false, false, 73);
                        // line 74
                        $context["cellVal"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 74, $this->source); })()), $context["key"], [], "array", false, false, false, 74), "alias", [], "any", false, false, false, 74), [], "array", false, false, false, 74);
                        // line 76
                        yield "                                            ";
                        if ((("datetime" === (isset($context["cellType"]) || array_key_exists("cellType", $context) ? $context["cellType"] : (function () { throw new RuntimeError('Variable "cellType" does not exist.', 76, $this->source); })())) && (10 === Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 76, $this->source); })()))))) {
                            // line 77
                            $context["cellType"] = "date";
                        }
                        // line 79
                        yield "                                            ";
                        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 79, $this->source); })()))) {
                            // line 80
                            yield "                                                ";
                            if (("datetime" === (isset($context["cellType"]) || array_key_exists("cellType", $context) ? $context["cellType"] : (function () { throw new RuntimeError('Variable "cellType" does not exist.', 80, $this->source); })()))) {
                                // line 81
                                yield "                                                    ";
                                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat((isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 81, $this->source); })()), "UTC");
                                yield "
                                                ";
                            } elseif (("date" ===                             // line 82
(isset($context["cellType"]) || array_key_exists("cellType", $context) ? $context["cellType"] : (function () { throw new RuntimeError('Variable "cellType" does not exist.', 82, $this->source); })()))) {
                                // line 83
                                yield "                                                    ";
                                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toShort((isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 83, $this->source); })()), "UTC");
                                yield "
                                                ";
                            } else {
                                // line 85
                                yield "                                                    ";
                                $context["value"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_((isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 85, $this->source); })()), (isset($context["cellType"]) || array_key_exists("cellType", $context) ? $context["cellType"] : (function () { throw new RuntimeError('Variable "cellType" does not exist.', 85, $this->source); })()));
                                // line 86
                                yield "                                                    ";
                                if (((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 86, $this->source); })()) == false)) {
                                    // line 87
                                    yield "                                                        ";
                                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_((isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 87, $this->source); })()), (isset($context["cellType"]) || array_key_exists("cellType", $context) ? $context["cellType"] : (function () { throw new RuntimeError('Variable "cellType" does not exist.', 87, $this->source); })()));
                                    yield "
                                                    ";
                                } else {
                                    // line 89
                                    yield "                                                        ";
                                    $context["value"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->htmlEntityDecode($this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_((isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 89, $this->source); })()), (isset($context["cellType"]) || array_key_exists("cellType", $context) ? $context["cellType"] : (function () { throw new RuntimeError('Variable "cellType" does not exist.', 89, $this->source); })())));
                                    // line 90
                                    yield "                                                        <div data-toggle=\"collapse\" data-target=\"#audit-log-details-";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["startCount"]) || array_key_exists("startCount", $context) ? $context["startCount"] : (function () { throw new RuntimeError('Variable "startCount" does not exist.', 90, $this->source); })()), "html", null, true);
                                    yield "\" class=\"accordion-toggle\" style=\"cursor: pointer\">
                                                            ";
                                    // line 91
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 91, $this->source); })())) > 50)) ? ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 91, $this->source); })()), 0, 50) . "...")) : ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 91, $this->source); })()))), "html", null, true);
                                    yield "
                                                        </div>
                                                    ";
                                }
                                // line 94
                                yield "                                                ";
                            }
                            // line 95
                            yield "                                            ";
                        }
                        // line 96
                        yield "                                            ";
                        if ((isset($context["closeLink"]) || array_key_exists("closeLink", $context) ? $context["closeLink"] : (function () { throw new RuntimeError('Variable "closeLink" does not exist.', 96, $this->source); })())) {
                            yield "</a>";
                        }
                        // line 97
                        yield "                                            ";
                        if ((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 97, $this->source); })())) {
                            // line 98
                            yield "                                            <div class=\"accordian-body collapse\" id=\"audit-log-details-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["startCount"]) || array_key_exists("startCount", $context) ? $context["startCount"] : (function () { throw new RuntimeError('Variable "startCount" does not exist.', 98, $this->source); })()), "html", null, true);
                            yield "\">
                                                <pre id=\"pre-audit-log-details-";
                            // line 99
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["startCount"]) || array_key_exists("startCount", $context) ? $context["startCount"] : (function () { throw new RuntimeError('Variable "startCount" does not exist.', 99, $this->source); })()), "html", null, true);
                            yield "\"></pre>
                                            </div>
                                            <script>
                                                var txt = document.createElement(\"textarea\");
                                                txt.innerHTML = '";
                            // line 103
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 103, $this->source); })()), "html", null, true);
                            yield "';
                                                document.getElementById('pre-audit-log-details-";
                            // line 104
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["startCount"]) || array_key_exists("startCount", $context) ? $context["startCount"] : (function () { throw new RuntimeError('Variable "startCount" does not exist.', 104, $this->source); })()), "html", null, true);
                            yield "').textContent
                                                    = JSON.stringify(JSON.parse((txt.value)), undefined, 2);
                                            </script>
                                            ";
                        }
                        // line 108
                        yield "                                        </td>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    yield "                                    ";
                    if ((isset($context["aggregatorCount"]) || array_key_exists("aggregatorCount", $context) ? $context["aggregatorCount"] : (function () { throw new RuntimeError('Variable "aggregatorCount" does not exist.', 110, $this->source); })())) {
                        // line 111
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["aggregatorOrder"]) || array_key_exists("aggregatorOrder", $context) ? $context["aggregatorOrder"] : (function () { throw new RuntimeError('Variable "aggregatorOrder" does not exist.', 111, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["aggregator"]) {
                            // line 112
                            $context["_key"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "function", [], "any", false, false, false, 112) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 112));
                            // line 113
                            yield "                                            <td>
                                                ";
                            // line 114
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["row"], $context["_key"], [], "array", true, true, false, 114)) {
                                // line 115
                                yield "                                                    ";
                                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_(CoreExtension::getAttribute($this->env, $this->source, $context["row"], $context["_key"], [], "array", false, false, false, 115), "text");
                                yield "
                                                ";
                            }
                            // line 117
                            yield "                                            </td>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['aggregator'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 119
                        yield "                                    ";
                    }
                    // line 120
                    yield "                                </tr>";
                    // line 121
                    $context["startCount"] = ((isset($context["startCount"]) || array_key_exists("startCount", $context) ? $context["startCount"] : (function () { throw new RuntimeError('Variable "startCount" does not exist.', 121, $this->source); })()) + 1);
                    // line 122
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                yield "                        ";
            } else {
                // line 124
                yield "                            <tr>
                                <td>&nbsp;</td>
                                ";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 126, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                    // line 127
                    yield "                                    <td>&nbsp;</td>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                yield "                            </tr>
                        ";
            }
            // line 131
            yield "                        <tr class=\"cm-strong\">
                            <td>";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.groupby.totals"), "html", null, true);
            yield "</td>
                            ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 133, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 134
                yield "                                <td>&nbsp;</td>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            yield "                            ";
            if ((isset($context["aggregatorCount"]) || array_key_exists("aggregatorCount", $context) ? $context["aggregatorCount"] : (function () { throw new RuntimeError('Variable "aggregatorCount" does not exist.', 136, $this->source); })())) {
                // line 137
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["aggregatorOrder"]) || array_key_exists("aggregatorOrder", $context) ? $context["aggregatorOrder"] : (function () { throw new RuntimeError('Variable "aggregatorOrder" does not exist.', 137, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["aggregator"]) {
                    // line 138
                    $context["i"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "function", [], "any", false, false, false, 138) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 138));
                    // line 139
                    yield "                                    <td>
                                        ";
                    // line 140
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reportDataResult"] ?? null), "totals", [], "any", false, true, false, 140), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 140, $this->source); })()), [], "array", true, true, false, 140)) {
                        // line 141
                        yield "                                            ";
                        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 141, $this->source); })()), "totals", [], "any", false, false, false, 141), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 141, $this->source); })()), [], "array", false, false, false, 141), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 141, $this->source); })()), "getType", [(isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 141, $this->source); })())], "method", false, false, false, 141));
                        yield "
                                        ";
                    }
                    // line 143
                    yield "                                    </td>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['aggregator'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                yield "                            ";
            }
            // line 146
            yield "                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
            // line 151
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 152
(isset($context["totalResults"]) || array_key_exists("totalResults", $context) ? $context["totalResults"] : (function () { throw new RuntimeError('Variable "totalResults" does not exist.', 152, $this->source); })()), "page" =>             // line 153
(isset($context["reportPage"]) || array_key_exists("reportPage", $context) ? $context["reportPage"] : (function () { throw new RuntimeError('Variable "reportPage" does not exist.', 153, $this->source); })()), "limit" =>             // line 154
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 154, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_view", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 155
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 155, $this->source); })()), "id", [], "any", false, false, false, 155)]), "sessionVar" => ("report." . CoreExtension::getAttribute($this->env, $this->source,             // line 156
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 156, $this->source); })()), "id", [], "any", false, false, false, 156)), "target" => ".report-content"], false);
            // line 158
            yield "
                </div>
            </div>
        </div>
    </div>
    <!--/ table section -->
";
        }
        // line 165
        yield "
";
        // line 166
        if ( !(isset($context["showGraphsAboveTable"]) || array_key_exists("showGraphsAboveTable", $context) ? $context["showGraphsAboveTable"] : (function () { throw new RuntimeError('Variable "showGraphsAboveTable" does not exist.', 166, $this->source); })())) {
            yield (isset($context["graphContent"]) || array_key_exists("graphContent", $context) ? $context["graphContent"] : (function () { throw new RuntimeError('Variable "graphContent" does not exist.', 166, $this->source); })());
        }
        // line 167
        yield "
<script>
    mQuery(document).ready(function() {
        mQuery('.datetimepicker').datetimepicker({
            format:'Y-m-d H:i:s',
            closeOnDateSelect: true,
            validateOnBlur: false,
            scrollMonth: false,
            scrollInput: false
        });
    });
    mQuery(document).ready(function() {
        mQuery('.datepicker').datetimepicker({
            format:'Y-m-d',
            closeOnDateSelect: true,
            validateOnBlur: false,
            scrollMonth: false,
            scrollInput: false
        });
    });
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticReport/Report/_details_report_content.html.twig";
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
        return array (  487 => 167,  483 => 166,  480 => 165,  471 => 158,  469 => 156,  468 => 155,  467 => 154,  466 => 153,  465 => 152,  464 => 151,  457 => 146,  454 => 145,  447 => 143,  441 => 141,  439 => 140,  436 => 139,  434 => 138,  429 => 137,  426 => 136,  419 => 134,  415 => 133,  411 => 132,  408 => 131,  404 => 129,  397 => 127,  393 => 126,  389 => 124,  386 => 123,  380 => 122,  378 => 121,  376 => 120,  373 => 119,  366 => 117,  360 => 115,  358 => 114,  355 => 113,  353 => 112,  348 => 111,  345 => 110,  338 => 108,  331 => 104,  327 => 103,  320 => 99,  315 => 98,  312 => 97,  307 => 96,  304 => 95,  301 => 94,  295 => 91,  290 => 90,  287 => 89,  281 => 87,  278 => 86,  275 => 85,  269 => 83,  267 => 82,  262 => 81,  259 => 80,  256 => 79,  253 => 77,  250 => 76,  248 => 74,  246 => 73,  243 => 72,  237 => 70,  229 => 68,  223 => 67,  220 => 66,  215 => 65,  212 => 64,  210 => 63,  208 => 62,  206 => 61,  204 => 60,  202 => 59,  200 => 58,  196 => 57,  192 => 56,  189 => 55,  184 => 54,  182 => 53,  177 => 50,  174 => 49,  159 => 47,  157 => 44,  156 => 43,  155 => 42,  154 => 41,  152 => 40,  134 => 39,  131 => 38,  117 => 37,  113 => 35,  111 => 33,  110 => 32,  109 => 31,  108 => 30,  107 => 29,  106 => 28,  104 => 27,  102 => 26,  99 => 25,  82 => 24,  71 => 15,  69 => 14,  66 => 13,  62 => 12,  60 => 10,  58 => 9,  56 => 8,  54 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticReport/Report/_details_report_content.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Resources\\views\\Report\\_details_report_content.html.twig");
    }
}
