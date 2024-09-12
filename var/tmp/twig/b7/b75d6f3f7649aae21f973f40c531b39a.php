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

/* @MauticLead/Import/details.html.twig */
class __TwigTemplate_c313d0aa929bb98fe8914555b271f8a2 extends Template
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

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'publishStatus' => [$this, 'block_publishStatus'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 8
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Import/details.html.twig", 8);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "asset";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })())]);
        yield "
";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["routeBase" => "import", "langVar" => "lead.import", "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "lead:imports:viewown", [], "array", false, false, false, 23), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "lead:imports:viewother", [], "array", false, false, false, 23), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "createdBy", [], "any", false, false, false, 23))], "routeVars" => ["close" => ["object" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 27
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "get", ["object", "contacts"], "method", false, false, false, 27)]]]);
        // line 30
        yield "
";
        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 50
        yield "<!-- start: box layout -->
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 61, $this->source); })())]);
        yield "

                                ";
        // line 63
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.source.file", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 65
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 65, $this->source); })()), "originalFile", [], "any", false, false, false, 65)]);
        // line 66
        yield "
                                ";
        // line 67
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.status", "value" => Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_label.html.twig", ["text" => ("mautic.lead.import.status." . CoreExtension::getAttribute($this->env, $this->source,         // line 69
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 69, $this->source); })()), "status", [], "any", false, false, false, 69)), "type" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 69, $this->source); })()), "satusLabelClass", [], "any", false, false, false, 69)])]);
        // line 70
        yield "
                                ";
        // line 71
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.status.info", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 73
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 73, $this->source); })()), "statusInfo", [], "any", false, false, false, 73)]);
        // line 74
        yield "
                                ";
        // line 75
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.line.count", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 77
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 77, $this->source); })()), "lineCount", [], "any", false, false, false, 77)]);
        // line 78
        yield "
                                ";
        // line 79
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.date.started", "value" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source,         // line 81
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 81, $this->source); })()), "dateStarted", [], "any", false, false, false, 81))]);
        // line 82
        yield "
                                ";
        // line 83
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.date.ended", "value" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source,         // line 85
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 85, $this->source); })()), "dateEnded", [], "any", false, false, false, 85))]);
        // line 86
        yield "
                                ";
        // line 87
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.runtime", "value" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 89
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 89, $this->source); })()), "runTime", [], "any", false, false, false, 89)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->formatRange(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 89, $this->source); })()), "runTime", [], "any", false, false, false, 89))) : (""))]);
        // line 90
        yield "
                                ";
        // line 91
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.speed", "value" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.speed.value", ["%speed%" => CoreExtension::getAttribute($this->env, $this->source,         // line 93
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 93, $this->source); })()), "speed", [], "any", false, false, false, 93)])]);
        // line 94
        yield "
                                ";
        // line 95
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.progress", "value" => (CoreExtension::getAttribute($this->env, $this->source,         // line 97
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 97, $this->source); })()), "progressPercentage", [], "any", false, false, false, 97) . "%")]);
        // line 98
        yield "
                                ";
        // line 99
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.mapped.fields", "value" => CoreExtension::callMacro($macros["_self"], "macro_arrayToString", [CoreExtension::getAttribute($this->env, $this->source,         // line 101
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 101, $this->source); })()), "matchedFields", [], "any", false, false, false, 101)], 101, $context, $this->getSourceContext())]);
        // line 102
        yield "
                                ";
        // line 103
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.default.options", "value" => CoreExtension::callMacro($macros["_self"], "macro_arrayToString", [CoreExtension::getAttribute($this->env, $this->source,         // line 105
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 105, $this->source); })()), "defaults", [], "any", false, false, false, 105)], 105, $context, $this->getSourceContext())]);
        // line 106
        yield "
                                ";
        // line 107
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.csv.headers", "value" => Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source,         // line 109
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 109, $this->source); })()), "headers", [], "any", false, false, false, 109), ", ")]);
        // line 110
        yield "
                                ";
        // line 111
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.csv.parser.config", "value" => CoreExtension::callMacro($macros["_self"], "macro_arrayToString", [CoreExtension::getAttribute($this->env, $this->source,         // line 113
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 113, $this->source); })()), "parserConfig", [], "any", false, false, false, 113)], 113, $context, $this->getSourceContext())]);
        // line 114
        yield "
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "</a>
                </span>
            </div>
            <!--/ asset detail collapseable toggler -->

            ";
        // line 133
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 133, $this->source); })()), "dateStarted", [], "any", false, false, false, 133)) {
            // line 134
            yield "            <!-- some stats -->
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.row.statuses"), "html", null, true);
            yield "
                                    </h5>
                                </div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                ";
            // line 148
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => CoreExtension::getAttribute($this->env, $this->source,             // line 149
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 149, $this->source); })()), "getRowStatusesPieChart", [$this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->getHelper()], "method", false, false, false, 149), "chartType" => "pie", "chartHeight" => 210]);
            // line 152
            yield "
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.processed.rows.minute"), "html", null, true);
            yield "
                                    </h5>
                                </div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                ";
            // line 167
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" =>             // line 168
(isset($context["importedRowsChart"]) || array_key_exists("importedRowsChart", $context) ? $context["importedRowsChart"] : (function () { throw new RuntimeError('Variable "importedRowsChart" does not exist.', 168, $this->source); })()), "chartType" => "line", "chartHeight" => 210]);
            // line 171
            yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ stats -->
            ";
        }
        // line 179
        yield "        </div>

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md preview-detail\">
        ";
        // line 183
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["failedRows"]) || array_key_exists("failedRows", $context) ? $context["failedRows"] : (function () { throw new RuntimeError('Variable "failedRows" does not exist.', 183, $this->source); })())) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["failedRows"]) || array_key_exists("failedRows", $context) ? $context["failedRows"] : (function () { throw new RuntimeError('Variable "failedRows" does not exist.', 183, $this->source); })())) > 0))) {
            // line 184
            yield "        <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.failed.rows"), "html", null, true);
            yield "</h3>
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                      <th>";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.csv.line.number"), "html", null, true);
            yield "</th>
                      <th>";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.error.message"), "html", null, true);
            yield "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["failedRows"]) || array_key_exists("failedRows", $context) ? $context["failedRows"] : (function () { throw new RuntimeError('Variable "failedRows" does not exist.', 193, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 194
                yield "                        ";
                if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "properties", [], "any", false, false, false, 194))) {
                    // line 195
                    yield "                            <tr>
                                <td>";
                    // line 196
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "properties", [], "any", false, false, false, 196), "line", [], "any", false, false, false, 196), "html", null, true);
                    yield "</td>
                                <td>
                                    ";
                    // line 198
                    $context["error"] = "N/A";
                    // line 199
                    yield "                                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "properties", [], "any", false, true, false, 199), "error", [], "any", true, true, false, 199)) {
                        // line 200
                        yield "                                        ";
                        $context["error"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "properties", [], "any", false, false, false, 200), "error", [], "any", false, false, false, 200);
                        // line 201
                        yield "                                        ";
                        if (CoreExtension::matches("/^SQLSTATE\\[\\w+\\]: (.*)\$/", (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 201, $this->source); })()))) {
                            // line 202
                            yield "                                          ";
                            $context["error"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 202, $this->source); })()), ": "), 1, [], "array", false, false, false, 202);
                            // line 203
                            yield "                                        ";
                        }
                        // line 204
                        yield "                                    ";
                    }
                    // line 205
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 205, $this->source); })()), "html", null, true);
                    yield "
                                </td>
                            </tr>
                        ";
                }
                // line 209
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            yield "                </tbody>
            </table>
        ";
        } else {
            // line 213
            yield "            <i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.no.failed.rows"), "html", null, true);
            yield "</i>
        ";
        }
        // line 215
        yield "        </div>
        <!--/ end: tab-content -->
    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">

        <!-- activity feed -->
        ";
        // line 224
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 224, $this->source); })())]);
        yield "
    </div>
    <!--/ right section -->
    <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 227, $this->source); })()), "id", [], "any", false, false, false, 227));
        yield "\"/>
</div>
<!--/ end: box layout -->
";
        yield from [];
    }

    // line 33
    public function macro_arrayToString($__a__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "a" => $__a__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 34, $this->source); })()));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                yield "=";
                // line 36
                if (is_iterable($context["v"])) {
                    // line 37
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["v"]);
                    foreach ($context['_seq'] as $context["k2"] => $context["v2"]) {
                        // line 38
                        yield "        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v2"], "html", null, true);
                        yield "
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['k2'], $context['v2'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                } elseif (((                // line 40
$context["v"] === false) || ($context["v"] === true))) {
                    // line 41
                    if ($context["v"]) {
                        yield "Yes";
                    } else {
                        yield "No";
                    }
                } elseif ( !Twig\Extension\CoreExtension::testEmpty(                // line 42
$context["v"])) {
                    // line 43
                    yield "\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
                    yield "\"";
                }
                // line 45
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 45)) {
                    yield ",";
                }
                // line 46
                yield "  ";
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
            unset($context['_seq'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Import/details.html.twig";
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
        return array (  472 => 46,  468 => 45,  463 => 43,  461 => 42,  455 => 41,  453 => 40,  444 => 38,  440 => 37,  438 => 36,  435 => 35,  417 => 34,  405 => 33,  396 => 227,  390 => 224,  379 => 215,  373 => 213,  368 => 210,  362 => 209,  354 => 205,  351 => 204,  348 => 203,  345 => 202,  342 => 201,  339 => 200,  336 => 199,  334 => 198,  329 => 196,  326 => 195,  323 => 194,  319 => 193,  312 => 189,  308 => 188,  300 => 184,  298 => 183,  292 => 179,  282 => 171,  280 => 168,  279 => 167,  271 => 162,  259 => 152,  257 => 149,  256 => 148,  248 => 143,  237 => 134,  235 => 133,  227 => 128,  211 => 114,  209 => 113,  208 => 111,  205 => 110,  203 => 109,  202 => 107,  199 => 106,  197 => 105,  196 => 103,  193 => 102,  191 => 101,  190 => 99,  187 => 98,  185 => 97,  184 => 95,  181 => 94,  179 => 93,  178 => 91,  175 => 90,  173 => 89,  172 => 87,  169 => 86,  167 => 85,  166 => 83,  163 => 82,  161 => 81,  160 => 79,  157 => 78,  155 => 77,  154 => 75,  151 => 74,  149 => 73,  148 => 71,  145 => 70,  143 => 69,  142 => 67,  139 => 66,  137 => 65,  136 => 63,  131 => 61,  118 => 50,  111 => 49,  105 => 30,  103 => 27,  102 => 23,  100 => 19,  93 => 18,  85 => 15,  78 => 14,  67 => 12,  56 => 10,  45 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Import/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Import\\details.html.twig");
    }
}
