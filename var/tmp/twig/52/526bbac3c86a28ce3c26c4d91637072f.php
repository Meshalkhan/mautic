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

/* @MauticCampaign/Campaign/details.html.twig */
class __TwigTemplate_773169f3c9dbbc0960fb1995c11e9c81 extends Template
{
    private $source;
    private $macros = [];

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

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticCampaign/Campaign/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 7
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 7, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 10, $this->source); })()), "campaign:campaigns:editown", [], "array", false, false, false, 10), twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 11, $this->source); })()), "campaign:campaigns:editother", [], "array", false, false, false, 11), twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 12, $this->source); })()), "createdBy", [], "any", false, false, false, 12)), "clone" => twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 14, $this->source); })()), "campaign:campaigns:create", [], "array", false, false, false, 14), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 16, $this->source); })()), "campaign:campaigns:deleteown", [], "array", false, false, false, 16), twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 17, $this->source); })()), "campaign:campaigns:deleteother", [], "array", false, false, false, 17), twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 18, $this->source); })()), "createdBy", [], "any", false, false, false, 18)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 21, $this->source); })()), "campaign:campaigns:viewown", [], "array", false, false, false, 21), twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "campaign:campaigns:viewother", [], "array", false, false, false, 22), twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 23, $this->source); })()), "createdBy", [], "any", false, false, false, 23))], "routeBase" => "campaign"]);
    }

    // line 30
    public function block_publishStatus($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "  ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 31, $this->source); })())]);
        echo "
";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "<!-- start: box layout -->
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
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44));
        echo "</div>
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
        echo twig_include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 56, $this->source); })())]);
        echo "
                            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["sourceType"] => $context["typeNames"]) {
            // line 58
            echo "                              ";
            if ( !twig_test_empty($context["typeNames"])) {
                // line 59
                echo "                                <tr>
                                    <td width=\"20%\"><span class=\"fw-b textTitle\">
                                      ";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.campaign.leadsource." . $context["sourceType"])), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 64
                echo twig_escape_filter($this->env, twig_join_filter($context["typeNames"], ", "), "html", null, true);
                echo "
                                    </td>
                                </tr>
                              ";
            }
            // line 68
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sourceType'], $context['typeNames'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                            </tbody>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "</a>
                </span>
            </div>
            <!--/ campaign detail collapseable toggler -->

            ";
        // line 88
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("left.section.top", $context);
        echo "
            ";
        // line 89
        $context["dateFrom"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 89, $this->source); })()), "children", [], "any", false, false, false, 89), "date_from", [], "array", false, false, false, 89), "vars", [], "any", false, false, false, 89), "data", [], "array", false, false, false, 89);
        // line 90
        echo "            ";
        $context["dateTo"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 90, $this->source); })()), "children", [], "any", false, false, false, 90), "date_to", [], "array", false, false, false, 90), "vars", [], "any", false, false, false, 90), "data", [], "array", false, false, false, 90);
        // line 91
        echo "            <!-- some stats -->
            <div class=\"stats-menu pl-md mt-lg\">
                <!-- tabs controls -->
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\">
                        <a href=\"#stats-container\" role=\"tab\" data-toggle=\"tab\">
                            ";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.stats"), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li>
                        <a href=\"#reads-map-container\" role=\"tab\" data-toggle=\"tab\" data-load=\"map\">
                            ";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.thead.maps"), "html", null, true);
        echo "
                        </a>
                    </li>
                </ul>
                <!--/ tabs controls -->
                <div class=\"date-range\">
                    ";
        // line 108
        echo twig_include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" =>         // line 109
(isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 109, $this->source); })())]);
        // line 110
        echo "
                </div>
            </div>
            <div class=\"stats-menu__content tab-content bg-white pa-md mb-lg shd-sm\">
                <div class=\"tab-pane active bdr-w-0\" id=\"stats-container\">
                    <div id=\"emailGraphStats\">";
        // line 116
        echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" =>         // line 117
(isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 117, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        // line 121
        echo "</div>

                </div>
                <div class=\"tab-pane bdr-w-0\" id=\"reads-map-container\"
                     data-map-url=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_map_stats", ["objectId" => twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, false, 125), "dateFrom" => twig_date_format_filter($this->env, (isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 125, $this->source); })()), "Y-m-d"), "dateTo" => twig_date_format_filter($this->env, (isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 125, $this->source); })()), "Y-m-d")]), "html", null, true);
        echo "\"
                >
                    <div class=\"spinner\">
                        <i class=\"fa fa-spin fa-spinner\"></i>
                    </div>
                </div>
            </div>
            <!--/ stats -->

            ";
        // line 134
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        echo "

            <!-- tabs controls -->
            <ul class=\"nav nav-tabs pr-md pl-md\">
                <li class=\"active\">
                    <a href=\"#preview-container\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.preview.header"), "html", null, true);
        echo "
                    </a>
                </li>
                ";
        // line 143
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 143, $this->source); })()), "decision", [], "any", false, false, false, 143))) {
            // line 144
            echo "                    <li class=\"\">
                        <a href=\"#decisions-container\" role=\"tab\" data-toggle=\"tab\">
                            ";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.decisions.header"), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        // line 150
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 150, $this->source); })()), "action", [], "any", false, false, false, 150))) {
            // line 151
            echo "                    <li class=\"\">
                        <a href=\"#actions-container\" role=\"tab\" data-toggle=\"tab\">
                            ";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.actions.header"), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        // line 157
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 157, $this->source); })()), "condition", [], "any", false, false, false, 157))) {
            // line 158
            echo "                    <li class=\"\">
                        <a href=\"#conditions-container\" role=\"tab\" data-toggle=\"tab\">
                            ";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.conditions.header"), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        // line 164
        echo "                <li class=\"\">
                    <a href=\"#leads-container\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        echo "
                    </a>
                </li>
                ";
        // line 169
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("tabs", $context);
        echo "
            </ul>
            <!--/ tabs controls -->
        </div>

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md\">
            <!-- #events-container -->
                <div class=\"active tab-pane fade in bdr-w-0\" id=\"preview-container\">";
        // line 178
        echo twig_include($this->env, $context, "@MauticCampaign/Campaign/_preview.html.twig", ["campaignId" => twig_get_attribute($this->env, $this->source,         // line 179
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 179, $this->source); })()), "id", [], "any", false, false, false, 179), "campaign" =>         // line 180
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 180, $this->source); })()), "campaignEvents" =>         // line 181
(isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 181, $this->source); })()), "campaignSources" =>         // line 182
(isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 182, $this->source); })()), "eventSettings" =>         // line 183
(isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 183, $this->source); })()), "canvasSettings" => twig_get_attribute($this->env, $this->source,         // line 184
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 184, $this->source); })()), "canvasSettings", [], "any", false, false, false, 184)]);
        // line 186
        echo "</div>
              ";
        // line 187
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 187, $this->source); })()), "decision", [], "any", false, false, false, 187))) {
            // line 188
            echo "                <div class=\"tab-pane fade in bdr-w-0\" id=\"decisions-container\">";
            // line 189
            echo twig_include($this->env, $context, "@MauticCampaign/Campaign/_events.html.twig", ["events" => twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 189, $this->source); })()), "decision", [], "array", false, false, false, 189)]);
            // line 190
            echo "</div>
              ";
        }
        // line 192
        echo "              ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 192, $this->source); })()), "action", [], "any", false, false, false, 192))) {
            // line 193
            echo "                <div class=\"tab-pane fade in bdr-w-0\" id=\"actions-container\">";
            // line 194
            echo twig_include($this->env, $context, "@MauticCampaign/Campaign/_events.html.twig", ["events" => twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 194, $this->source); })()), "action", [], "array", false, false, false, 194)]);
            // line 195
            echo "</div>
              ";
        }
        // line 197
        echo "              ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 197, $this->source); })()), "condition", [], "any", false, false, false, 197))) {
            // line 198
            echo "                <div class=\"tab-pane fade in bdr-w-0\" id=\"conditions-container\">";
            // line 199
            echo twig_include($this->env, $context, "@MauticCampaign/Campaign/_events.html.twig", ["events" => twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 199, $this->source); })()), "condition", [], "array", false, false, false, 199)]);
            // line 200
            echo "</div>
              ";
        }
        // line 202
        echo "            <!--/ #events-container -->
            <div class=\"tab-pane fade in bdr-w-0 page-list\"
                 id=\"leads-container\"
                 data-target-url=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_contacts", ["objectId" => twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 205, $this->source); })()), "id", [], "any", false, false, false, 205), "page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 205, $this->source); })()), "session", [], "any", false, false, false, 205), "get", ["mautic.campaign.contact.page", 1], "method", false, false, false, 205)]), "html", null, true);
        echo "\">
                <div class=\"spinner\"><i class=\"fa fa-spin fa-spinner\"></i></div>
                <div class=\"clearfix\"></div>
            </div>
            ";
        // line 209
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("tabs.content", $context);
        echo "
        </div>
        <!--/ end: tab-content -->

        ";
        // line 213
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("left.section.bottom", $context);
        echo "
    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        ";
        // line 219
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("right.section.top", $context);
        echo "

        ";
        // line 221
        echo twig_include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 221, $this->source); })())]);
        echo "

        ";
        // line 223
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("right.section.bottom", $context);
        echo "
    </div>
    <!--/ right section -->
</div>
<!--/ end: box layout -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCampaign/Campaign/details.html.twig";
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
        return array (  397 => 223,  392 => 221,  387 => 219,  378 => 213,  371 => 209,  364 => 205,  359 => 202,  355 => 200,  353 => 199,  351 => 198,  348 => 197,  344 => 195,  342 => 194,  340 => 193,  337 => 192,  333 => 190,  331 => 189,  329 => 188,  327 => 187,  324 => 186,  322 => 184,  321 => 183,  320 => 182,  319 => 181,  318 => 180,  317 => 179,  316 => 178,  305 => 169,  299 => 166,  295 => 164,  288 => 160,  284 => 158,  281 => 157,  274 => 153,  270 => 151,  267 => 150,  260 => 146,  256 => 144,  254 => 143,  248 => 140,  239 => 134,  227 => 125,  221 => 121,  219 => 117,  218 => 116,  211 => 110,  209 => 109,  208 => 108,  199 => 102,  191 => 97,  183 => 91,  180 => 90,  178 => 89,  174 => 88,  166 => 83,  150 => 69,  144 => 68,  137 => 64,  131 => 61,  127 => 59,  124 => 58,  120 => 57,  116 => 56,  101 => 44,  90 => 35,  86 => 34,  79 => 31,  75 => 30,  71 => 23,  70 => 22,  69 => 21,  68 => 18,  67 => 17,  66 => 16,  65 => 14,  64 => 12,  63 => 11,  62 => 10,  61 => 7,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCampaign/Campaign/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Campaign\\details.html.twig");
    }
}
