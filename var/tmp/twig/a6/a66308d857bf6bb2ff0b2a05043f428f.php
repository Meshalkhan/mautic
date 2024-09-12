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

/* @MauticReport/Report/_details_report_content.html.twig */
class __TwigTemplate_6c3f081ff513ee6c2c3218b2d7917984 extends Template
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
        $context["showGraphsAboveTable"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "settings", [], "any", false, true, false, 1), "showGraphsAboveTable", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "settings", [], "any", false, true, false, 1), "showGraphsAboveTable", [], "any", false, false, false, 1), false)) : (false));
        // line 2
        $context["dataCount"] = twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()));
        // line 3
        $context["columnOrder"] = twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 3, $this->source); })()), "columns", [], "any", false, false, false, 3);
        // line 4
        $context["graphOrder"] = twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 4, $this->source); })()), "graphs", [], "any", false, false, false, 4);
        // line 5
        $context["aggregatorOrder"] = twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 5, $this->source); })()), "aggregators", [], "any", false, false, false, 5);
        // line 6
        $context["aggregatorCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 6, $this->source); })()), "aggregators", [], "any", false, false, false, 6));
        // line 7
        $context["groupBy"] = twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 7, $this->source); })()), "groupBy", [], "any", false, false, false, 7);
        // line 8
        $context["groupByCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 8, $this->source); })()), "groupBy", [], "any", false, false, false, 8));
        // line 9
        $context["startCount"] = ((((isset($context["totalResults"]) || array_key_exists("totalResults", $context) ? $context["totalResults"] : (function () { throw new RuntimeError('Variable "totalResults" does not exist.', 9, $this->source); })()) > (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 9, $this->source); })()))) ? (((((isset($context["reportPage"]) || array_key_exists("reportPage", $context) ? $context["reportPage"] : (function () { throw new RuntimeError('Variable "reportPage" does not exist.', 9, $this->source); })()) * (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 9, $this->source); })())) - (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 9, $this->source); })())) + 1)) : (1));
        // line 10
        $context["graphContent"] = twig_include($this->env, $context, "@MauticReport/Report/details_data_graphs.html.twig", ["graphOrder" => (isset($context["graphOrder"]) || array_key_exists("graphOrder", $context) ? $context["graphOrder"] : (function () { throw new RuntimeError('Variable "graphOrder" does not exist.', 10, $this->source); })()), "graphs" => (isset($context["graphs"]) || array_key_exists("graphs", $context) ? $context["graphs"] : (function () { throw new RuntimeError('Variable "graphs" does not exist.', 10, $this->source); })()), "report" => (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 10, $this->source); })())], false);
        // line 12
        if ((isset($context["showGraphsAboveTable"]) || array_key_exists("showGraphsAboveTable", $context) ? $context["showGraphsAboveTable"] : (function () { throw new RuntimeError('Variable "showGraphsAboveTable" does not exist.', 12, $this->source); })())) {
            echo (isset($context["graphContent"]) || array_key_exists("graphContent", $context) ? $context["graphContent"] : (function () { throw new RuntimeError('Variable "graphContent" does not exist.', 12, $this->source); })());
        }
        // line 13
        echo "
";
        // line 14
        if (( !twig_test_empty((isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 14, $this->source); })())) ||  !twig_test_empty((isset($context["aggregatorOrder"]) || array_key_exists("aggregatorOrder", $context) ? $context["aggregatorOrder"] : (function () { throw new RuntimeError('Variable "aggregatorOrder" does not exist.', 14, $this->source); })())))) {
            // line 15
            echo "    <!-- table section -->
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
            $context['_seq'] = twig_ensure_traversable((isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 24, $this->source); })()));
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
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), $context["key"], [], "array", true, true, false, 25)) {
                    // line 26
                    echo "                                    ";
                    // line 27
                    $context["orderBy"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), $context["key"], [], "array", false, true, false, 27), "alias", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), $context["key"], [], "array", false, true, false, 27), "alias", [], "any", false, false, false, 27), (((is_string($__internal_compile_0 = $context["key"]) && is_string($__internal_compile_1 = "channel.") && str_starts_with($__internal_compile_0, $__internal_compile_1))) ? (twig_replace_filter($context["key"], ["." => "_"])) : ($context["key"])))) : ((((is_string($__internal_compile_2 = $context["key"]) && is_string($__internal_compile_3 = "channel.") && str_starts_with($__internal_compile_2, $__internal_compile_3))) ? (twig_replace_filter($context["key"], ["." => "_"])) : ($context["key"]))));
                    // line 28
                    echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("report." . twig_get_attribute($this->env, $this->source,                     // line 29
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)), "orderBy" =>                     // line 30
(isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 30, $this->source); })()), "text" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 31
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 31, $this->source); })()), $context["key"], [], "array", false, false, false, 31), "label", [], "any", false, false, false, 31), "class" => ("col-report-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 32
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 32, $this->source); })()), $context["key"], [], "array", false, false, false, 32), "type", [], "any", false, false, false, 32)), "dataToggle" => ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 33
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 33, $this->source); })()), $context["key"], [], "array", false, false, false, 33), "type", [], "any", false, false, false, 33), ["date", "datetime"])) ? ("date") : ("")), "target" => ".report-content"]);
                    // line 35
                    echo "
                                ";
                }
                // line 37
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                            ";
            if ((isset($context["aggregatorCount"]) || array_key_exists("aggregatorCount", $context) ? $context["aggregatorCount"] : (function () { throw new RuntimeError('Variable "aggregatorCount" does not exist.', 38, $this->source); })())) {
                // line 39
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["aggregatorOrder"]) || array_key_exists("aggregatorOrder", $context) ? $context["aggregatorOrder"] : (function () { throw new RuntimeError('Variable "aggregatorOrder" does not exist.', 39, $this->source); })()));
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
                    $context["columnName"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), twig_get_attribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 40), [], "array", false, true, false, 40), "label", [], "any", true, true, false, 40) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), twig_get_attribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 40), [], "array", false, true, false, 40), "label", [], "any", false, false, false, 40)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), twig_get_attribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 40), [], "array", false, true, false, 40), "label", [], "any", false, false, false, 40)) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), twig_get_attribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 40), [], "array", false, true, false, 40), "alias", [], "any", true, true, false, 40)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), twig_get_attribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 40), [], "array", false, true, false, 40), "alias", [], "any", false, false, false, 40), "")) : (""))));
                    // line 41
                    echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("report." . twig_get_attribute($this->env, $this->source,                     // line 42
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)), "text" => ((twig_get_attribute($this->env, $this->source,                     // line 43
$context["aggregator"], "function", [], "any", false, false, false, 43) . " ") . (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 43, $this->source); })())), "orderBy" => (((("`" . twig_get_attribute($this->env, $this->source,                     // line 44
$context["aggregator"], "function", [], "any", false, false, false, 44)) . " ") . twig_get_attribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 44)) . "`"), "dataToggle" => "", "target" => ".report-content"]);
                    // line 47
                    echo "
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aggregator'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                            ";
            }
            // line 50
            echo "                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 53
            if ((isset($context["dataCount"]) || array_key_exists("dataCount", $context) ? $context["dataCount"] : (function () { throw new RuntimeError('Variable "dataCount" does not exist.', 53, $this->source); })())) {
                // line 54
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 54, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 55
                    echo "                                <tr>
                                    <td>";
                    // line 56
                    echo twig_escape_filter($this->env, (isset($context["startCount"]) || array_key_exists("startCount", $context) ? $context["startCount"] : (function () { throw new RuntimeError('Variable "startCount" does not exist.', 56, $this->source); })()), "html", null, true);
                    echo "</td>
                                    ";
                    // line 57
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 57, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 57, $this->source); })()), [], "array", true, true, false, 57); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                        // line 58
                        $context["collapse"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), $context["key"], [], "array", false, true, false, 58), "collapse", [], "any", true, true, false, 58)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 58, $this->source); })()), $context["key"], [], "array", false, false, false, 58), "collapse", [], "any", false, false, false, 58)) : (false));
                        // line 59
                        echo "<td>";
                        // line 60
                        $context["closeLink"] = false;
                        // line 61
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), $context["key"], [], "array", false, true, false, 61), "link", [], "any", true, true, false, 61) && twig_get_attribute($this->env, $this->source, $context["row"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 61, $this->source); })()), $context["key"], [], "array", false, false, false, 61), "alias", [], "any", false, false, false, 61), [], "array", true, true, false, 61)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["row"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 61, $this->source); })()), $context["key"], [], "array", false, false, false, 61), "alias", [], "any", false, false, false, 61), [], "array", false, false, false, 61)))) {
                            // line 62
                            $context["closeLink"] = true;
                            // line 63
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["columns"] ?? null), $context["key"], [], "array", false, true, false, 63), "linkParameters", [], "any", true, true, false, 63)) {
                                // line 64
                                echo "                                                    ";
                                $context["parameters"] = [];
                                // line 65
                                echo "                                                    ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 65, $this->source); })()), $context["key"], [], "array", false, false, false, 65), "linkParameters", [], "any", false, false, false, 65));
                                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                                    // line 66
                                    echo "                                                        ";
                                    $context["parameters"] = twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 66, $this->source); })()), [$context["k"] => ((($context["v"] === "%alias%")) ? (twig_get_attribute($this->env, $this->source, $context["row"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 66, $this->source); })()), $context["key"], [], "array", false, false, false, 66), "alias", [], "any", false, false, false, 66), [], "array", false, false, false, 66)) : ($context["v"]))]);
                                    // line 67
                                    echo "                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 68
                                echo "                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 68, $this->source); })()), $context["key"], [], "array", false, false, false, 68), "link", [], "any", false, false, false, 68), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 68, $this->source); })())), "html", null, true);
                                echo "\" ";
                                echo ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "objectId", [], "any", true, true, false, 68)) ? ("class=\"label label-success\"") : (""));
                                echo ">
                                                ";
                            } else {
                                // line 70
                                echo "                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 70, $this->source); })()), $context["key"], [], "array", false, false, false, 70), "link", [], "any", false, false, false, 70), ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["row"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 70, $this->source); })()), $context["key"], [], "array", false, false, false, 70), "alias", [], "any", false, false, false, 70), [], "array", false, false, false, 70)]), "html", null, true);
                                echo "\" class=\"label label-success\">
                                                ";
                            }
                            // line 72
                            echo "                                            ";
                        }
                        // line 73
                        $context["cellType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 73, $this->source); })()), $context["key"], [], "array", false, false, false, 73), "type", [], "any", false, false, false, 73);
                        // line 74
                        $context["cellVal"] = twig_get_attribute($this->env, $this->source, $context["row"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 74, $this->source); })()), $context["key"], [], "array", false, false, false, 74), "alias", [], "any", false, false, false, 74), [], "array", false, false, false, 74);
                        // line 76
                        echo "                                            ";
                        if ((("datetime" === (isset($context["cellType"]) || array_key_exists("cellType", $context) ? $context["cellType"] : (function () { throw new RuntimeError('Variable "cellType" does not exist.', 76, $this->source); })())) && (10 === twig_length_filter($this->env, (isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 76, $this->source); })()))))) {
                            // line 77
                            $context["cellType"] = "date";
                        }
                        // line 79
                        echo "                                            ";
                        if ( !twig_test_empty((isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 79, $this->source); })()))) {
                            // line 80
                            echo "                                                ";
                            if (("datetime" === (isset($context["cellType"]) || array_key_exists("cellType", $context) ? $context["cellType"] : (function () { throw new RuntimeError('Variable "cellType" does not exist.', 80, $this->source); })()))) {
                                // line 81
                                echo "                                                    ";
                                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat((isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 81, $this->source); })()), "UTC");
                                echo "
                                                ";
                            } elseif (("date" ===                             // line 82
(isset($context["cellType"]) || array_key_exists("cellType", $context) ? $context["cellType"] : (function () { throw new RuntimeError('Variable "cellType" does not exist.', 82, $this->source); })()))) {
                                // line 83
                                echo "                                                    ";
                                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toShort((isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 83, $this->source); })()), "UTC");
                                echo "
                                                ";
                            } else {
                                // line 85
                                echo "                                                    ";
                                $context["value"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_((isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 85, $this->source); })()), (isset($context["cellType"]) || array_key_exists("cellType", $context) ? $context["cellType"] : (function () { throw new RuntimeError('Variable "cellType" does not exist.', 85, $this->source); })()));
                                // line 86
                                echo "                                                    ";
                                if (((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 86, $this->source); })()) == false)) {
                                    // line 87
                                    echo "                                                        ";
                                    echo $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_((isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 87, $this->source); })()), (isset($context["cellType"]) || array_key_exists("cellType", $context) ? $context["cellType"] : (function () { throw new RuntimeError('Variable "cellType" does not exist.', 87, $this->source); })()));
                                    echo "
                                                    ";
                                } else {
                                    // line 89
                                    echo "                                                        ";
                                    $context["value"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->htmlEntityDecode($this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_((isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 89, $this->source); })()), (isset($context["cellType"]) || array_key_exists("cellType", $context) ? $context["cellType"] : (function () { throw new RuntimeError('Variable "cellType" does not exist.', 89, $this->source); })())));
                                    // line 90
                                    echo "                                                        <div data-toggle=\"collapse\" data-target=\"#audit-log-details-";
                                    echo twig_escape_filter($this->env, (isset($context["startCount"]) || array_key_exists("startCount", $context) ? $context["startCount"] : (function () { throw new RuntimeError('Variable "startCount" does not exist.', 90, $this->source); })()), "html", null, true);
                                    echo "\" class=\"accordion-toggle\" style=\"cursor: pointer\">
                                                            ";
                                    // line 91
                                    echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 91, $this->source); })())) > 50)) ? ((twig_slice($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 91, $this->source); })()), 0, 50) . "...")) : ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 91, $this->source); })()))), "html", null, true);
                                    echo "
                                                        </div>
                                                    ";
                                }
                                // line 94
                                echo "                                                ";
                            }
                            // line 95
                            echo "                                            ";
                        }
                        // line 96
                        echo "                                            ";
                        if ((isset($context["closeLink"]) || array_key_exists("closeLink", $context) ? $context["closeLink"] : (function () { throw new RuntimeError('Variable "closeLink" does not exist.', 96, $this->source); })())) {
                            echo "</a>";
                        }
                        // line 97
                        echo "                                            ";
                        if ((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 97, $this->source); })())) {
                            // line 98
                            echo "                                            <div class=\"accordian-body collapse\" id=\"audit-log-details-";
                            echo twig_escape_filter($this->env, (isset($context["startCount"]) || array_key_exists("startCount", $context) ? $context["startCount"] : (function () { throw new RuntimeError('Variable "startCount" does not exist.', 98, $this->source); })()), "html", null, true);
                            echo "\">
                                                <pre id=\"pre-audit-log-details-";
                            // line 99
                            echo twig_escape_filter($this->env, (isset($context["startCount"]) || array_key_exists("startCount", $context) ? $context["startCount"] : (function () { throw new RuntimeError('Variable "startCount" does not exist.', 99, $this->source); })()), "html", null, true);
                            echo "\"></pre>
                                            </div>
                                            <script>
                                                var txt = document.createElement(\"textarea\");
                                                txt.innerHTML = '";
                            // line 103
                            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 103, $this->source); })()), "html", null, true);
                            echo "';
                                                document.getElementById('pre-audit-log-details-";
                            // line 104
                            echo twig_escape_filter($this->env, (isset($context["startCount"]) || array_key_exists("startCount", $context) ? $context["startCount"] : (function () { throw new RuntimeError('Variable "startCount" does not exist.', 104, $this->source); })()), "html", null, true);
                            echo "').textContent
                                                    = JSON.stringify(JSON.parse((txt.value)), undefined, 2);
                                            </script>
                                            ";
                        }
                        // line 108
                        echo "                                        </td>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo "                                    ";
                    if ((isset($context["aggregatorCount"]) || array_key_exists("aggregatorCount", $context) ? $context["aggregatorCount"] : (function () { throw new RuntimeError('Variable "aggregatorCount" does not exist.', 110, $this->source); })())) {
                        // line 111
                        echo "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["aggregatorOrder"]) || array_key_exists("aggregatorOrder", $context) ? $context["aggregatorOrder"] : (function () { throw new RuntimeError('Variable "aggregatorOrder" does not exist.', 111, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["aggregator"]) {
                            // line 112
                            $context["_key"] = ((twig_get_attribute($this->env, $this->source, $context["aggregator"], "function", [], "any", false, false, false, 112) . " ") . twig_get_attribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 112));
                            // line 113
                            echo "                                            <td>
                                                ";
                            // line 114
                            if (twig_get_attribute($this->env, $this->source, $context["row"], $context["_key"], [], "array", true, true, false, 114)) {
                                // line 115
                                echo "                                                    ";
                                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_(twig_get_attribute($this->env, $this->source, $context["row"], $context["_key"], [], "array", false, false, false, 115), "text");
                                echo "
                                                ";
                            }
                            // line 117
                            echo "                                            </td>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aggregator'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 119
                        echo "                                    ";
                    }
                    // line 120
                    echo "                                </tr>";
                    // line 121
                    $context["startCount"] = ((isset($context["startCount"]) || array_key_exists("startCount", $context) ? $context["startCount"] : (function () { throw new RuntimeError('Variable "startCount" does not exist.', 121, $this->source); })()) + 1);
                    // line 122
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "                        ";
            } else {
                // line 124
                echo "                            <tr>
                                <td>&nbsp;</td>
                                ";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 126, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                    // line 127
                    echo "                                    <td>&nbsp;</td>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "                            </tr>
                        ";
            }
            // line 131
            echo "                        <tr class=\"cm-strong\">
                            <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.groupby.totals"), "html", null, true);
            echo "</td>
                            ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 133, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 134
                echo "                                <td>&nbsp;</td>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "                            ";
            if ((isset($context["aggregatorCount"]) || array_key_exists("aggregatorCount", $context) ? $context["aggregatorCount"] : (function () { throw new RuntimeError('Variable "aggregatorCount" does not exist.', 136, $this->source); })())) {
                // line 137
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["aggregatorOrder"]) || array_key_exists("aggregatorOrder", $context) ? $context["aggregatorOrder"] : (function () { throw new RuntimeError('Variable "aggregatorOrder" does not exist.', 137, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["aggregator"]) {
                    // line 138
                    $context["i"] = ((twig_get_attribute($this->env, $this->source, $context["aggregator"], "function", [], "any", false, false, false, 138) . " ") . twig_get_attribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 138));
                    // line 139
                    echo "                                    <td>
                                        ";
                    // line 140
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reportDataResult"] ?? null), "totals", [], "any", false, true, false, 140), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 140, $this->source); })()), [], "array", true, true, false, 140)) {
                        // line 141
                        echo "                                            ";
                        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 141, $this->source); })()), "totals", [], "any", false, false, false, 141), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 141, $this->source); })()), [], "array", false, false, false, 141), twig_get_attribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 141, $this->source); })()), "getType", [(isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 141, $this->source); })())], "method", false, false, false, 141));
                        echo "
                                        ";
                    }
                    // line 143
                    echo "                                    </td>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aggregator'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "                            ";
            }
            // line 146
            echo "                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
            // line 151
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 152
(isset($context["totalResults"]) || array_key_exists("totalResults", $context) ? $context["totalResults"] : (function () { throw new RuntimeError('Variable "totalResults" does not exist.', 152, $this->source); })()), "page" =>             // line 153
(isset($context["reportPage"]) || array_key_exists("reportPage", $context) ? $context["reportPage"] : (function () { throw new RuntimeError('Variable "reportPage" does not exist.', 153, $this->source); })()), "limit" =>             // line 154
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 154, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_view", ["objectId" => twig_get_attribute($this->env, $this->source,             // line 155
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 155, $this->source); })()), "id", [], "any", false, false, false, 155)]), "sessionVar" => ("report." . twig_get_attribute($this->env, $this->source,             // line 156
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 156, $this->source); })()), "id", [], "any", false, false, false, 156)), "target" => ".report-content"], false);
            // line 158
            echo "
                </div>
            </div>
        </div>
    </div>
    <!--/ table section -->
";
        }
        // line 165
        echo "
";
        // line 166
        if ( !(isset($context["showGraphsAboveTable"]) || array_key_exists("showGraphsAboveTable", $context) ? $context["showGraphsAboveTable"] : (function () { throw new RuntimeError('Variable "showGraphsAboveTable" does not exist.', 166, $this->source); })())) {
            echo (isset($context["graphContent"]) || array_key_exists("graphContent", $context) ? $context["graphContent"] : (function () { throw new RuntimeError('Variable "graphContent" does not exist.', 166, $this->source); })());
        }
        // line 167
        echo "
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
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticReport/Report/_details_report_content.html.twig";
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
        return array (  482 => 167,  478 => 166,  475 => 165,  466 => 158,  464 => 156,  463 => 155,  462 => 154,  461 => 153,  460 => 152,  459 => 151,  452 => 146,  449 => 145,  442 => 143,  436 => 141,  434 => 140,  431 => 139,  429 => 138,  424 => 137,  421 => 136,  414 => 134,  410 => 133,  406 => 132,  403 => 131,  399 => 129,  392 => 127,  388 => 126,  384 => 124,  381 => 123,  375 => 122,  373 => 121,  371 => 120,  368 => 119,  361 => 117,  355 => 115,  353 => 114,  350 => 113,  348 => 112,  343 => 111,  340 => 110,  333 => 108,  326 => 104,  322 => 103,  315 => 99,  310 => 98,  307 => 97,  302 => 96,  299 => 95,  296 => 94,  290 => 91,  285 => 90,  282 => 89,  276 => 87,  273 => 86,  270 => 85,  264 => 83,  262 => 82,  257 => 81,  254 => 80,  251 => 79,  248 => 77,  245 => 76,  243 => 74,  241 => 73,  238 => 72,  232 => 70,  224 => 68,  218 => 67,  215 => 66,  210 => 65,  207 => 64,  205 => 63,  203 => 62,  201 => 61,  199 => 60,  197 => 59,  195 => 58,  191 => 57,  187 => 56,  184 => 55,  179 => 54,  177 => 53,  172 => 50,  169 => 49,  154 => 47,  152 => 44,  151 => 43,  150 => 42,  149 => 41,  147 => 40,  129 => 39,  126 => 38,  112 => 37,  108 => 35,  106 => 33,  105 => 32,  104 => 31,  103 => 30,  102 => 29,  101 => 28,  99 => 27,  97 => 26,  94 => 25,  77 => 24,  66 => 15,  64 => 14,  61 => 13,  57 => 12,  55 => 10,  53 => 9,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticReport/Report/_details_report_content.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Resources\\views\\Report\\_details_report_content.html.twig");
    }
}
