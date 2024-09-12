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

/* @MauticLead/Import/details.html.twig */
class __TwigTemplate_8a13c7458c0bb5b4ce75fa45d0058bd1 extends Template
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
            'publishStatus' => [$this, 'block_publishStatus'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Import/details.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "asset";
    }

    // line 12
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
    }

    // line 14
    public function block_publishStatus($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "  ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })())]);
        echo "
";
    }

    // line 18
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["routeBase" => "import", "langVar" => "lead.import", "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "lead:imports:viewown", [], "array", false, false, false, 23), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "lead:imports:viewother", [], "array", false, false, false, 23), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "createdBy", [], "any", false, false, false, 23))], "routeVars" => ["close" => ["object" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "get", ["object", "contacts"], "method", false, false, false, 27)]]]);
        // line 30
        echo "
";
    }

    // line 49
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!-- asset detail collapseable -->
            <div class=\"collapse\" id=\"asset-details\">
                <div class=\"pr-md pl-md pb-md\">
                    <div class=\"panel shd-none mb-0\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>
                                ";
        // line 61
        echo twig_include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 61, $this->source); })())]);
        echo "

                                ";
        // line 63
        echo twig_include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.source.file", "value" => twig_get_attribute($this->env, $this->source,         // line 65
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 65, $this->source); })()), "originalFile", [], "any", false, false, false, 65)]);
        // line 66
        echo "
                                ";
        // line 67
        echo twig_include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.status", "value" => twig_include($this->env, $context, "@MauticCore/Helper/_label.html.twig", ["text" => ("mautic.lead.import.status." . twig_get_attribute($this->env, $this->source,         // line 69
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 69, $this->source); })()), "status", [], "any", false, false, false, 69)), "type" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 69, $this->source); })()), "satusLabelClass", [], "any", false, false, false, 69)])]);
        // line 70
        echo "
                                ";
        // line 71
        echo twig_include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.status.info", "value" => twig_get_attribute($this->env, $this->source,         // line 73
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 73, $this->source); })()), "statusInfo", [], "any", false, false, false, 73)]);
        // line 74
        echo "
                                ";
        // line 75
        echo twig_include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.line.count", "value" => twig_get_attribute($this->env, $this->source,         // line 77
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 77, $this->source); })()), "lineCount", [], "any", false, false, false, 77)]);
        // line 78
        echo "
                                ";
        // line 79
        echo twig_include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.date.started", "value" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source,         // line 81
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 81, $this->source); })()), "dateStarted", [], "any", false, false, false, 81))]);
        // line 82
        echo "
                                ";
        // line 83
        echo twig_include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.date.ended", "value" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source,         // line 85
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 85, $this->source); })()), "dateEnded", [], "any", false, false, false, 85))]);
        // line 86
        echo "
                                ";
        // line 87
        echo twig_include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.runtime", "value" => ((twig_get_attribute($this->env, $this->source,         // line 89
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 89, $this->source); })()), "runTime", [], "any", false, false, false, 89)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->formatRange(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 89, $this->source); })()), "runTime", [], "any", false, false, false, 89))) : (""))]);
        // line 90
        echo "
                                ";
        // line 91
        echo twig_include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.speed", "value" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.speed.value", ["%speed%" => twig_get_attribute($this->env, $this->source,         // line 93
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 93, $this->source); })()), "speed", [], "any", false, false, false, 93)])]);
        // line 94
        echo "
                                ";
        // line 95
        echo twig_include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.progress", "value" => (twig_get_attribute($this->env, $this->source,         // line 97
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 97, $this->source); })()), "progressPercentage", [], "any", false, false, false, 97) . "%")]);
        // line 98
        echo "
                                ";
        // line 99
        echo twig_include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.mapped.fields", "value" => twig_call_macro($macros["_self"], "macro_arrayToString", [twig_get_attribute($this->env, $this->source,         // line 101
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 101, $this->source); })()), "matchedFields", [], "any", false, false, false, 101)], 101, $context, $this->getSourceContext())]);
        // line 102
        echo "
                                ";
        // line 103
        echo twig_include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.default.options", "value" => twig_call_macro($macros["_self"], "macro_arrayToString", [twig_get_attribute($this->env, $this->source,         // line 105
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 105, $this->source); })()), "defaults", [], "any", false, false, false, 105)], 105, $context, $this->getSourceContext())]);
        // line 106
        echo "
                                ";
        // line 107
        echo twig_include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.csv.headers", "value" => twig_join_filter(twig_get_attribute($this->env, $this->source,         // line 109
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 109, $this->source); })()), "headers", [], "any", false, false, false, 109), ", ")]);
        // line 110
        echo "
                                ";
        // line 111
        echo twig_include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.csv.parser.config", "value" => twig_call_macro($macros["_self"], "macro_arrayToString", [twig_get_attribute($this->env, $this->source,         // line 113
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 113, $this->source); })()), "parserConfig", [], "any", false, false, false, 113)], 113, $context, $this->getSourceContext())]);
        // line 114
        echo "
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ asset detail collapseable -->
        </div>

        <div>
            <!-- asset detail collapseable toggler -->
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"Detail\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\"
                       data-target=\"#asset-details\"><span class=\"caret\"></span> ";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "</a>
                </span>
            </div>
            <!--/ asset detail collapseable toggler -->

            ";
        // line 133
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 133, $this->source); })()), "dateStarted", [], "any", false, false, false, 133)) {
            // line 134
            echo "            <!-- some stats -->
            <div class=\"pa-md\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"panel\">
                            <div class=\"panel-body box-layout\">
                                <div class=\"va-m\">
                                    <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                        <span class=\"fa fa-row-statuses\"></span>
                                        ";
            // line 143
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.row.statuses"), "html", null, true);
            echo "
                                    </h5>
                                </div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                ";
            // line 148
            echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => twig_get_attribute($this->env, $this->source,             // line 149
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 149, $this->source); })()), "getRowStatusesPieChart", [$this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->getHelper()], "method", false, false, false, 149), "chartType" => "pie", "chartHeight" => 210]);
            // line 152
            echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"panel\">
                            <div class=\"panel-body box-layout\">
                                <div class=\"va-m\">
                                    <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                        <span class=\"fa fa-row-statuses\"></span>
                                        ";
            // line 162
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.processed.rows.minute"), "html", null, true);
            echo "
                                    </h5>
                                </div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                ";
            // line 167
            echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" =>             // line 168
(isset($context["importedRowsChart"]) || array_key_exists("importedRowsChart", $context) ? $context["importedRowsChart"] : (function () { throw new RuntimeError('Variable "importedRowsChart" does not exist.', 168, $this->source); })()), "chartType" => "line", "chartHeight" => 210]);
            // line 171
            echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ stats -->
            ";
        }
        // line 179
        echo "        </div>

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md preview-detail\">
        ";
        // line 183
        if (( !twig_test_empty((isset($context["failedRows"]) || array_key_exists("failedRows", $context) ? $context["failedRows"] : (function () { throw new RuntimeError('Variable "failedRows" does not exist.', 183, $this->source); })())) && (twig_length_filter($this->env, (isset($context["failedRows"]) || array_key_exists("failedRows", $context) ? $context["failedRows"] : (function () { throw new RuntimeError('Variable "failedRows" does not exist.', 183, $this->source); })())) > 0))) {
            // line 184
            echo "        <h3>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.failed.rows"), "html", null, true);
            echo "</h3>
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                      <th>";
            // line 188
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.csv.line.number"), "html", null, true);
            echo "</th>
                      <th>";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.error.message"), "html", null, true);
            echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["failedRows"]) || array_key_exists("failedRows", $context) ? $context["failedRows"] : (function () { throw new RuntimeError('Variable "failedRows" does not exist.', 193, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 194
                echo "                        ";
                if (is_iterable(twig_get_attribute($this->env, $this->source, $context["row"], "properties", [], "any", false, false, false, 194))) {
                    // line 195
                    echo "                            <tr>
                                <td>";
                    // line 196
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "properties", [], "any", false, false, false, 196), "line", [], "any", false, false, false, 196), "html", null, true);
                    echo "</td>
                                <td>
                                    ";
                    // line 198
                    $context["error"] = "N/A";
                    // line 199
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "properties", [], "any", false, true, false, 199), "error", [], "any", true, true, false, 199)) {
                        // line 200
                        echo "                                        ";
                        $context["error"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "properties", [], "any", false, false, false, 200), "error", [], "any", false, false, false, 200);
                        // line 201
                        echo "                                        ";
                        if (twig_matches("/^SQLSTATE\\[\\w+\\]: (.*)\$/", (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 201, $this->source); })()))) {
                            // line 202
                            echo "                                          ";
                            $context["error"] = twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 202, $this->source); })()), ": "), 1, [], "array", false, false, false, 202);
                            // line 203
                            echo "                                        ";
                        }
                        // line 204
                        echo "                                    ";
                    }
                    // line 205
                    echo "                                    ";
                    echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 205, $this->source); })()), "html", null, true);
                    echo "
                                </td>
                            </tr>
                        ";
                }
                // line 209
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            echo "                </tbody>
            </table>
        ";
        } else {
            // line 213
            echo "            <i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.no.failed.rows"), "html", null, true);
            echo "</i>
        ";
        }
        // line 215
        echo "        </div>
        <!--/ end: tab-content -->
    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">

        <!-- activity feed -->
        ";
        // line 224
        echo twig_include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 224, $this->source); })())]);
        echo "
    </div>
    <!--/ right section -->
    <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 227
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 227, $this->source); })()), "id", [], "any", false, false, false, 227));
        echo "\"/>
</div>
<!--/ end: box layout -->
";
    }

    // line 33
    public function macro_arrayToString($__a__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "a" => $__a__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 34
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 34, $this->source); })()));
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
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 35
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo "=";
                // line 36
                if (is_iterable($context["v"])) {
                    // line 37
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["v"]);
                    foreach ($context['_seq'] as $context["k2"] => $context["v2"]) {
                        // line 38
                        echo "        ";
                        echo twig_escape_filter($this->env, $context["v2"], "html", null, true);
                        echo "
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k2'], $context['v2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                } elseif (((                // line 40
$context["v"] === false) || ($context["v"] === true))) {
                    // line 41
                    if ($context["v"]) {
                        echo "Yes";
                    } else {
                        echo "No";
                    }
                } elseif ( !twig_test_empty(                // line 42
$context["v"])) {
                    // line 43
                    echo "\"";
                    echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                    echo "\"";
                }
                // line 45
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 45)) {
                    echo ",";
                }
                // line 46
                echo "  ";
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
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Import/details.html.twig";
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
        return array (  448 => 46,  444 => 45,  439 => 43,  437 => 42,  431 => 41,  429 => 40,  420 => 38,  416 => 37,  414 => 36,  411 => 35,  393 => 34,  380 => 33,  372 => 227,  366 => 224,  355 => 215,  349 => 213,  344 => 210,  338 => 209,  330 => 205,  327 => 204,  324 => 203,  321 => 202,  318 => 201,  315 => 200,  312 => 199,  310 => 198,  305 => 196,  302 => 195,  299 => 194,  295 => 193,  288 => 189,  284 => 188,  276 => 184,  274 => 183,  268 => 179,  258 => 171,  256 => 168,  255 => 167,  247 => 162,  235 => 152,  233 => 149,  232 => 148,  224 => 143,  213 => 134,  211 => 133,  203 => 128,  187 => 114,  185 => 113,  184 => 111,  181 => 110,  179 => 109,  178 => 107,  175 => 106,  173 => 105,  172 => 103,  169 => 102,  167 => 101,  166 => 99,  163 => 98,  161 => 97,  160 => 95,  157 => 94,  155 => 93,  154 => 91,  151 => 90,  149 => 89,  148 => 87,  145 => 86,  143 => 85,  142 => 83,  139 => 82,  137 => 81,  136 => 79,  133 => 78,  131 => 77,  130 => 75,  127 => 74,  125 => 73,  124 => 71,  121 => 70,  119 => 69,  118 => 67,  115 => 66,  113 => 65,  112 => 63,  107 => 61,  94 => 50,  90 => 49,  85 => 30,  83 => 27,  82 => 23,  80 => 19,  76 => 18,  69 => 15,  65 => 14,  58 => 12,  51 => 10,  40 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Import/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Import\\details.html.twig");
    }
}
