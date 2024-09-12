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

/* @MauticSms/Sms/details.html.twig */
class __TwigTemplate_49bd58538d58fb77d6620102ec10e706 extends Template
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
            'actions' => [$this, 'block_actions'],
            'publishStatus' => [$this, 'block_publishStatus'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ( !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 1, $this->source); })())) {
        }
        // line 2
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticSms/Sms/details.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "sms";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 6, $this->source); })()), "getName", [], "method", false, false, false, 6), "html", null, true);
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    ";
        $context["customButtons"] = [];
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 12
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 12, $this->source); })()), "customButtons" => ((        // line 13
array_key_exists("customButtons", $context)) ? ((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 13, $this->source); })())) : ([])), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 16
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 16, $this->source); })()), "sms:smses:editown", [], "array", false, false, false, 16), CoreExtension::getAttribute($this->env, $this->source,         // line 17
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 17, $this->source); })()), "sms:smses:editother", [], "array", false, false, false, 17), CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 18, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 18)), "clone" => CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 20, $this->source); })()), "sms:smses:create", [], "array", false, false, false, 20), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "sms:smses:deleteown", [], "array", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "sms:smses:deleteother", [], "array", false, false, false, 23), CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 24, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 24)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 27
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 27, $this->source); })()), "sms:smses:viewown", [], "array", false, false, false, 27), CoreExtension::getAttribute($this->env, $this->source,         // line 28
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 28, $this->source); })()), "sms:smses:viewother", [], "array", false, false, false, 28), CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 29, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 29))], "routeBase" => "sms"]);
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 38, $this->source); })())]);
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!-- page detail header -->
            <!-- sms detail collapseable toggler -->
            <div class=\"pr-md pl-md pt-lg pb-lg\">
                <div class=\"box-layout\">
                    <div class=\"col-xs-10\">
                        <div class=\"text-white dark-sm mb-0\">";
        // line 57
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 57, $this->source); })()), "getDescription", [], "method", false, false, false, 57));
        yield "</div>
                    </div>
                </div>
            </div>
            <div class=\"collapse\" id=\"sms-details\">
                <div class=\"pr-md pl-md pb-md\">
                    <div class=\"panel shd-none mb-0\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>";
        // line 66
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 66, $this->source); })())]);
        // line 67
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 67, $this->source); })()), "getSmsType", [], "method", false, false, false, 67) == "list")) {
            // line 68
            yield "                                    <tr>
                                        <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.lists"), "html", null, true);
            yield "</span></td>
                                        <td>
                                            ";
            // line 71
            $context["segments"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 71, $this->source); })()), "getLists", [], "any", false, false, false, 71);
            // line 72
            yield "                                            ";
            $context["segmentNames"] = Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["segments"]) || array_key_exists("segments", $context) ? $context["segments"] : (function () { throw new RuntimeError('Variable "segments" does not exist.', 72, $this->source); })()), "toArray", [], "any", false, false, false, 72), function ($__segment__) use ($context, $macros) { $context["segment"] = $__segment__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["segment"]) || array_key_exists("segment", $context) ? $context["segment"] : (function () { throw new RuntimeError('Variable "segment" does not exist.', 72, $this->source); })()), "getName", [], "any", false, false, false, 72); });
            // line 73
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["segmentNames"]) || array_key_exists("segmentNames", $context) ? $context["segmentNames"] : (function () { throw new RuntimeError('Variable "segmentNames" does not exist.', 73, $this->source); })()), ", "), "html", null, true);
            yield "
                                        </td>
                                    </tr>
                                ";
        }
        // line 77
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            <!--/ sms detail collapseable toggler -->
        <div>
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"Detail\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#sms-details\">
                        <span class=\"caret\"></span> ";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
                    </a>
                </span>
            </div>
            <!-- some stats -->
            <div class=\"pa-md\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"panel\">
                            <div class=\"panel-body box-layout\">
                                <div class=\"col-md-3 va-m\">
                                    <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                        <span class=\"fa fa-line-chart\"></span>
                                        ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.stats"), "html", null, true);
        yield "
                                    </h5>
                                </div>
                                <div class=\"col-md-9 va-m\">";
        // line 105
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 105, $this->source); })()), "class" => "pull-right"]);
        // line 106
        yield "</div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">";
        // line 109
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["entityViews"]) || array_key_exists("entityViews", $context) ? $context["entityViews"] : (function () { throw new RuntimeError('Variable "entityViews" does not exist.', 109, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        // line 110
        yield "</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ stats -->

            ";
        // line 117
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

            <!-- tabs controls -->
            <ul class=\"nav nav-tabs pr-md pl-md\">
                <li class=\"active\">
                    <a href=\"#clicks-container\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_counts"), "html", null, true);
        yield "
                    </a>
                </li>
                <li class=\"\">
                    <a href=\"#contacts-container\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        yield "
                    </a>
                </li>
            </ul>
            <!--/ tabs controls -->
        </div>

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md\">
            <div class=\"tab-pane active bdr-w-0\" id=\"clicks-container\">";
        // line 138
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticPage/Trackable/click_counts.html.twig", ["trackables" =>         // line 139
(isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 139, $this->source); })()), "entity" =>         // line 140
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 140, $this->source); })()), "channel" => "sms"]);
        // line 143
        yield "</div>

            <div class=\"tab-pane fade in bdr-w-0 page-list\" id=\"contacts-container\">
                ";
        // line 146
        yield (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 146, $this->source); })());
        yield "
            </div>
        </div>
        <!-- end: tab-content -->
    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        <!-- activity feed -->";
        // line 156
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 156, $this->source); })())]);
        // line 157
        yield "</div>
    <!--/ right section -->
    <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 159, $this->source); })()), "getId", [], "method", false, false, false, 159), "html", null, true);
        yield "\" />
</div>
<!--/ end: box layout -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticSms/Sms/details.html.twig";
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
        return array (  283 => 159,  279 => 157,  277 => 156,  265 => 146,  260 => 143,  258 => 140,  257 => 139,  256 => 138,  244 => 128,  236 => 123,  227 => 117,  218 => 110,  216 => 109,  212 => 106,  210 => 105,  204 => 101,  188 => 88,  175 => 77,  167 => 73,  164 => 72,  162 => 71,  157 => 69,  154 => 68,  152 => 67,  150 => 66,  139 => 57,  127 => 47,  120 => 46,  115 => 38,  108 => 37,  103 => 29,  102 => 28,  101 => 27,  100 => 24,  99 => 23,  98 => 22,  97 => 20,  96 => 18,  95 => 17,  94 => 16,  93 => 13,  92 => 12,  91 => 10,  88 => 9,  81 => 8,  70 => 6,  59 => 5,  54 => 2,  51 => 1,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSms/Sms/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Resources\\views\\Sms\\details.html.twig");
    }
}
