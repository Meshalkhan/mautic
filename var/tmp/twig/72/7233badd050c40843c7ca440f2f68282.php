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

/* @MauticCampaign/Campaign/details.html.twig */
class __TwigTemplate_61b0b216e1296331c8323d68fb2a652d extends Template
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
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'publishStatus' => [$this, 'block_publishStatus'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticCampaign/Campaign/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 7
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 7, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 10
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 10, $this->source); })()), "campaign:campaigns:editown", [], "array", false, false, false, 10), CoreExtension::getAttribute($this->env, $this->source,         // line 11
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 11, $this->source); })()), "campaign:campaigns:editother", [], "array", false, false, false, 11), CoreExtension::getAttribute($this->env, $this->source,         // line 12
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 12, $this->source); })()), "createdBy", [], "any", false, false, false, 12)), "clone" => CoreExtension::getAttribute($this->env, $this->source,         // line 14
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 14, $this->source); })()), "campaign:campaigns:create", [], "array", false, false, false, 14), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 16
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 16, $this->source); })()), "campaign:campaigns:deleteown", [], "array", false, false, false, 16), CoreExtension::getAttribute($this->env, $this->source,         // line 17
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 17, $this->source); })()), "campaign:campaigns:deleteother", [], "array", false, false, false, 17), CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 18, $this->source); })()), "createdBy", [], "any", false, false, false, 18)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 21
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 21, $this->source); })()), "campaign:campaigns:viewown", [], "array", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "campaign:campaigns:viewother", [], "array", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 23, $this->source); })()), "createdBy", [], "any", false, false, false, 23))], "routeBase" => "campaign"]);
        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 31, $this->source); })())]);
        yield "
";
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!-- campaign detail header -->
            <div class=\"pr-md pl-md pt-lg pb-lg\">
                <div class=\"box-layout\">
                    <div class=\"col-xs-6 va-m\">
                        <div class=\"text-white dark-sm mb-0\">";
        // line 44
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44));
        yield "</div>
                    </div>
                </div>
            </div>
            <!--/ campaign detail header -->

            <!-- campaign detail collapseable -->
            <div class=\"collapse\" id=\"campaign-details\">
                <div class=\"pr-md pl-md pb-md\">
                    <div class=\"panel shd-none mb-0\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>
                            ";
        // line 56
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 56, $this->source); })())]);
        yield "
                            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["sourceType"] => $context["typeNames"]) {
            // line 58
            yield "                              ";
            if ( !Twig\Extension\CoreExtension::testEmpty($context["typeNames"])) {
                // line 59
                yield "                                <tr>
                                    <td width=\"20%\"><span class=\"fw-b textTitle\">
                                      ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.campaign.leadsource." . $context["sourceType"])), "html", null, true);
                yield "
                                    </td>
                                    <td>
                                        ";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($context["typeNames"], ", "), "html", null, true);
                yield "
                                    </td>
                                </tr>
                              ";
            }
            // line 68
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['sourceType'], $context['typeNames'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ campaign detail collapseable -->
        </div>

        <div>
            <!-- campaign detail collapseable toggler -->
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"Detail\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\"
                       data-target=\"#campaign-details\"><span
                            class=\"caret\"></span> ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "</a>
                </span>
            </div>
            <!--/ campaign detail collapseable toggler -->

            ";
        // line 88
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("left.section.top", $context);
        yield "
            ";
        // line 89
        $context["dateFrom"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 89, $this->source); })()), "children", [], "any", false, false, false, 89), "date_from", [], "array", false, false, false, 89), "vars", [], "any", false, false, false, 89), "data", [], "array", false, false, false, 89);
        // line 90
        yield "            ";
        $context["dateTo"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 90, $this->source); })()), "children", [], "any", false, false, false, 90), "date_to", [], "array", false, false, false, 90), "vars", [], "any", false, false, false, 90), "data", [], "array", false, false, false, 90);
        // line 91
        yield "            <!-- some stats -->
            <div class=\"stats-menu pl-md mt-lg\">
                <!-- tabs controls -->
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\">
                        <a href=\"#stats-container\" role=\"tab\" data-toggle=\"tab\">
                            ";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.stats"), "html", null, true);
        yield "
                        </a>
                    </li>
                    <li>
                        <a href=\"#reads-map-container\" role=\"tab\" data-toggle=\"tab\" data-load=\"map\">
                            ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.thead.maps"), "html", null, true);
        yield "
                        </a>
                    </li>
                </ul>
                <!--/ tabs controls -->
                <div class=\"date-range\">
                    ";
        // line 108
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" =>         // line 109
(isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 109, $this->source); })())]);
        // line 110
        yield "
                </div>
            </div>
            <div class=\"stats-menu__content tab-content bg-white pa-md mb-lg shd-sm\">
                <div class=\"tab-pane active bdr-w-0\" id=\"stats-container\">
                    <div id=\"emailGraphStats\">";
        // line 116
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" =>         // line 117
(isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 117, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        // line 121
        yield "</div>

                </div>
                <div class=\"tab-pane bdr-w-0\" id=\"reads-map-container\"
                     data-map-url=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_map_stats", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, false, 125), "dateFrom" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 125, $this->source); })()), "Y-m-d"), "dateTo" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 125, $this->source); })()), "Y-m-d")]), "html", null, true);
        yield "\"
                >
                    <div class=\"spinner\">
                        <i class=\"fa fa-spin fa-spinner\"></i>
                    </div>
                </div>
            </div>
            <!--/ stats -->

            ";
        // line 134
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

            <!-- tabs controls -->
            <ul class=\"nav nav-tabs pr-md pl-md\">
                <li class=\"active\">
                    <a href=\"#preview-container\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.preview.header"), "html", null, true);
        yield "
                    </a>
                </li>
                ";
        // line 143
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 143, $this->source); })()), "decision", [], "any", false, false, false, 143))) {
            // line 144
            yield "                    <li class=\"\">
                        <a href=\"#decisions-container\" role=\"tab\" data-toggle=\"tab\">
                            ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.decisions.header"), "html", null, true);
            yield "
                        </a>
                    </li>
                ";
        }
        // line 150
        yield "                ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 150, $this->source); })()), "action", [], "any", false, false, false, 150))) {
            // line 151
            yield "                    <li class=\"\">
                        <a href=\"#actions-container\" role=\"tab\" data-toggle=\"tab\">
                            ";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.actions.header"), "html", null, true);
            yield "
                        </a>
                    </li>
                ";
        }
        // line 157
        yield "                ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 157, $this->source); })()), "condition", [], "any", false, false, false, 157))) {
            // line 158
            yield "                    <li class=\"\">
                        <a href=\"#conditions-container\" role=\"tab\" data-toggle=\"tab\">
                            ";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.conditions.header"), "html", null, true);
            yield "
                        </a>
                    </li>
                ";
        }
        // line 164
        yield "                <li class=\"\">
                    <a href=\"#leads-container\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        yield "
                    </a>
                </li>
                ";
        // line 169
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("tabs", $context);
        yield "
            </ul>
            <!--/ tabs controls -->
        </div>

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md\">
            <!-- #events-container -->
                <div class=\"active tab-pane fade in bdr-w-0\" id=\"preview-container\">";
        // line 178
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Campaign/_preview.html.twig", ["campaignId" => CoreExtension::getAttribute($this->env, $this->source,         // line 179
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 179, $this->source); })()), "id", [], "any", false, false, false, 179), "campaign" =>         // line 180
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 180, $this->source); })()), "campaignEvents" =>         // line 181
(isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 181, $this->source); })()), "campaignSources" =>         // line 182
(isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 182, $this->source); })()), "eventSettings" =>         // line 183
(isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 183, $this->source); })()), "canvasSettings" => CoreExtension::getAttribute($this->env, $this->source,         // line 184
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 184, $this->source); })()), "canvasSettings", [], "any", false, false, false, 184)]);
        // line 186
        yield "</div>
              ";
        // line 187
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 187, $this->source); })()), "decision", [], "any", false, false, false, 187))) {
            // line 188
            yield "                <div class=\"tab-pane fade in bdr-w-0\" id=\"decisions-container\">";
            // line 189
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Campaign/_events.html.twig", ["events" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 189, $this->source); })()), "decision", [], "array", false, false, false, 189)]);
            // line 190
            yield "</div>
              ";
        }
        // line 192
        yield "              ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 192, $this->source); })()), "action", [], "any", false, false, false, 192))) {
            // line 193
            yield "                <div class=\"tab-pane fade in bdr-w-0\" id=\"actions-container\">";
            // line 194
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Campaign/_events.html.twig", ["events" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 194, $this->source); })()), "action", [], "array", false, false, false, 194)]);
            // line 195
            yield "</div>
              ";
        }
        // line 197
        yield "              ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 197, $this->source); })()), "condition", [], "any", false, false, false, 197))) {
            // line 198
            yield "                <div class=\"tab-pane fade in bdr-w-0\" id=\"conditions-container\">";
            // line 199
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Campaign/_events.html.twig", ["events" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 199, $this->source); })()), "condition", [], "array", false, false, false, 199)]);
            // line 200
            yield "</div>
              ";
        }
        // line 202
        yield "            <!--/ #events-container -->
            <div class=\"tab-pane fade in bdr-w-0 page-list\"
                 id=\"leads-container\"
                 data-target-url=\"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_contacts", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 205, $this->source); })()), "id", [], "any", false, false, false, 205), "page" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 205, $this->source); })()), "session", [], "any", false, false, false, 205), "get", ["mautic.campaign.contact.page", 1], "method", false, false, false, 205)]), "html", null, true);
        yield "\">
                <div class=\"spinner\"><i class=\"fa fa-spin fa-spinner\"></i></div>
                <div class=\"clearfix\"></div>
            </div>
            ";
        // line 209
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("tabs.content", $context);
        yield "
        </div>
        <!--/ end: tab-content -->

        ";
        // line 213
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("left.section.bottom", $context);
        yield "
    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        ";
        // line 219
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("right.section.top", $context);
        yield "

        ";
        // line 221
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 221, $this->source); })())]);
        yield "

        ";
        // line 223
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("right.section.bottom", $context);
        yield "
    </div>
    <!--/ right section -->
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
        return "@MauticCampaign/Campaign/details.html.twig";
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
        return array (  417 => 223,  412 => 221,  407 => 219,  398 => 213,  391 => 209,  384 => 205,  379 => 202,  375 => 200,  373 => 199,  371 => 198,  368 => 197,  364 => 195,  362 => 194,  360 => 193,  357 => 192,  353 => 190,  351 => 189,  349 => 188,  347 => 187,  344 => 186,  342 => 184,  341 => 183,  340 => 182,  339 => 181,  338 => 180,  337 => 179,  336 => 178,  325 => 169,  319 => 166,  315 => 164,  308 => 160,  304 => 158,  301 => 157,  294 => 153,  290 => 151,  287 => 150,  280 => 146,  276 => 144,  274 => 143,  268 => 140,  259 => 134,  247 => 125,  241 => 121,  239 => 117,  238 => 116,  231 => 110,  229 => 109,  228 => 108,  219 => 102,  211 => 97,  203 => 91,  200 => 90,  198 => 89,  194 => 88,  186 => 83,  170 => 69,  164 => 68,  157 => 64,  151 => 61,  147 => 59,  144 => 58,  140 => 57,  136 => 56,  121 => 44,  110 => 35,  103 => 34,  95 => 31,  88 => 30,  83 => 23,  82 => 22,  81 => 21,  80 => 18,  79 => 17,  78 => 16,  77 => 14,  76 => 12,  75 => 11,  74 => 10,  73 => 7,  72 => 6,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Campaign/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Campaign\\details.html.twig");
    }
}
