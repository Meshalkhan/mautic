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

/* @MauticLead/List/details.html.twig */
class __TwigTemplate_a512d29e2e526de03ca52c94242f7df1 extends Template
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
        // line 17
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/List/details.html.twig", 17);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "list";
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 25
(isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 25, $this->source); })()), "customButtons" => ((        // line 26
array_key_exists("customButtons", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 26, $this->source); })()), [])) : ([])), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 28
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 28, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_EDIT_OWN"), [], "array", false, false, false, 28), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 28, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_EDIT_OTHER"), [], "array", false, false, false, 28), CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 28, $this->source); })()), "createdBy", [], "any", false, false, false, 28)), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 29, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_DELETE_OWN"), [], "array", false, false, false, 29), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 29, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_DELETE_OTHER"), [], "array", false, false, false, 29), CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 29, $this->source); })()), "createdBy", [], "any", false, false, false, 29)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 30
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 30, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_VIEW_OWN"), [], "array", false, false, false, 30), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 30, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_VIEW_OTHER"), [], "array", false, false, false, 30), CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 30, $this->source); })()), "createdBy", [], "any", false, false, false, 30)), "clone" => CoreExtension::getAttribute($this->env, $this->source,         // line 31
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 31, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_CREATE"), [], "array", false, false, false, 31)], "routeBase" => "segment"]);
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 38, $this->source); })())]);
        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        $context["hasSegmentMembershipFilter"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 42, $this->source); })()), "hasFilterTypeOf", ["leadList"], "method", false, false, false, 42);
        // line 43
        yield "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!-- page detail header -->
            <!-- segment detail collapseable toggler -->
            <div class=\"pr-md pl-md pt-lg pb-lg\">
                <div class=\"box-layout\">
                    <div class=\"col-xs-10\">
                        <div class=\"text-white dark-sm mb-0\">";
        // line 53
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53));
        yield "</div>
                    </div>
                </div>
            </div>
            <div class=\"collapse\" id=\"segment-details\">
                <div class=\"pr-md pl-md pb-md\">
                    <div class=\"panel shd-none mb-0\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>
                            ";
        // line 62
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 62, $this->source); })())]);
        yield "
                            <tr>
                                <td width=\"20%\"><span class=\"fw-b textTitle\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        yield "</span></td>
                                <td>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["segmentCount"]) || array_key_exists("segmentCount", $context) ? $context["segmentCount"] : (function () { throw new RuntimeError('Variable "segmentCount" does not exist.', 65, $this->source); })()), "html", null, true);
        yield "</td>
                            </tr>
                            ";
        // line 67
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 67, $this->source); })()), "lastBuiltTime", [], "any", false, false, false, 67)) {
            // line 68
            yield "                            <tr>
                                <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.last_built_time"), "html", null, true);
            yield "</span></td>
                                <td>
                                    ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.date.second", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 71, $this->source); })()), "lastBuiltTime", [], "any", false, false, false, 71)]), "html", null, true);
            yield " (";
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 71, $this->source); })()), "lastBuiltDate", [], "any", false, false, false, 71));
            yield ")
                                </td>
                            </tr>
                            ";
        }
        // line 75
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/ segment detail collapseable toggler -->
        <div>
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"Detail\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#segment-details\">
                        <span class=\"caret\"></span> ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
                    </a>
                </span>
            </div>
            <!-- some stats -->

            <!--/ stats -->
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.segment.stats"), "html", null, true);
        yield "
                                    </h5>
                                </div>
                                <div class=\"col-md-9 va-m\">
                                    ";
        // line 105
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" =>         // line 106
(isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 106, $this->source); })()), "class" => "pull-right"]);
        // line 108
        yield "
                                </div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                ";
        // line 112
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" =>         // line 113
(isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 113, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        // line 116
        yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 123
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

            <!-- tabs controls -->
            <!-- search bar-->
            <form method=\"post\" action=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_contacts", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127)]), "html", null, true);
        yield "\" class=\"panel\" id=\"segment-contact-filters\">
                ";
        // line 128
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "types", [], "any", true, true, false, 128) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 128, $this->source); })()), "types", [], "any", false, false, false, 128)))) {
            // line 129
            yield "                    <div class=\"history-search panel-footer text-muted\">
                        <div class=\"col-sm-5\">
                            <select name=\"includeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\" data-placeholder=\"";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.include.placeholder"), "html", null, true);
            yield "\">
                                ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 132, $this->source); })()), "types", [], "any", false, false, false, 132));
            foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                // line 133
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($context["typeKey"]);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeName"], "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['typeKey'], $context['typeName'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            yield "                            </select>
                        </div>
                    </div>
                ";
        }
        // line 139
        yield "            </form>

            <!--/ search bar -->
            <ul class=\"nav nav-tabs pr-md pl-md\">
                <li class=\"active\">
                    <a href=\"#contacts-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        yield "</a>
                </li>
                ";
        // line 146
        if ((isset($context["hasSegmentMembershipFilter"]) || array_key_exists("hasSegmentMembershipFilter", $context) ? $context["hasSegmentMembershipFilter"] : (function () { throw new RuntimeError('Variable "hasSegmentMembershipFilter" does not exist.', 146, $this->source); })())) {
            // line 147
            yield "                  <li>
                      <a id=\"segment-dependencies\" href=\"#segment-dependencies-container\" role=\"tab\" data-toggle=\"tab\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.segment.dependencies"), "html", null, true);
            yield "</a>
                  </li>
                ";
        }
        // line 151
        yield "                <li>
                    <a id=\"campaign-share-tab\" href=\"#campaign-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.campaign.share"), "html", null, true);
        yield "</a>
                </li>
            </ul>
            <!--/ tabs controls -->
        </div>

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md\">
            <div class=\"tab-pane active bdr-w-0 page-list\"
                 id=\"contacts-container\"
                 data-target-url=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_contacts", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 162, $this->source); })()), "id", [], "any", false, false, false, 162), "page" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "session", [], "any", false, false, false, 162), "get", ["mautic.segment.contact.page", 1], "method", false, false, false, 162)]), "html", null, true);
        yield "\">
              <div class=\"spinner\"><i class=\"fa fa-spin fa-spinner\"></i></div>
            </div>

            ";
        // line 166
        if ((isset($context["hasSegmentMembershipFilter"]) || array_key_exists("hasSegmentMembershipFilter", $context) ? $context["hasSegmentMembershipFilter"] : (function () { throw new RuntimeError('Variable "hasSegmentMembershipFilter" does not exist.', 166, $this->source); })())) {
            // line 167
            yield "              <div class=\"tab-pane bdr-w-0 page-list\" id=\"segment-dependencies-container\"></div>
            ";
        }
        // line 169
        yield "
            <div class=\"tab-pane bdr-w-0 page-list\" id=\"campaign-container\">
                <div id=\"campaign-share-container\" style=\"position: relative\">
                    <table id=\"campaign-share-table\" class=\"table table-hover mb-0\">
                        <thead>
                        <tr>
                            <th>";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.campaign"), "html", null, true);
        yield "</th>
                            <th>";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.share"), "html", null, true);
        yield "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 180, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 181
            yield "                            <tr>
                                <td>
                                    <a href=\"";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "id", [], "any", false, false, false, 183)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "name", [], "any", false, false, false, 184), "html", null, true);
            // line 185
            yield "</a>
                                </td>
                                <td width=\"20%\">
                                    <span class=\"campaign-share-stat\" data-value=\"";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "id", [], "any", false, false, false, 188), "html", null, true);
            yield "\"
                                          id=\"campaign-share-stat-";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "id", [], "any", false, false, false, 189), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "share", [], "any", false, false, false, 189), "html", null, true);
            yield "</span> %
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end: tab-content -->
    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        ";
        // line 204
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/usage.html.twig", ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.segments.usages"), "stats" =>         // line 206
(isset($context["usageStats"]) || array_key_exists("usageStats", $context) ? $context["usageStats"] : (function () { throw new RuntimeError('Variable "usageStats" does not exist.', 206, $this->source); })()), "noUsages" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.segments.no_usages")]);
        // line 208
        yield "

        <!-- activity feed -->
        ";
        // line 212
        yield "    </div>
    <!--/ right section -->
    <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 214, $this->source); })()), "id", [], "any", false, false, false, 214));
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
        return "@MauticLead/List/details.html.twig";
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
        return array (  404 => 214,  400 => 212,  395 => 208,  393 => 206,  392 => 204,  379 => 193,  367 => 189,  363 => 188,  358 => 185,  356 => 184,  353 => 183,  349 => 181,  345 => 180,  338 => 176,  334 => 175,  326 => 169,  322 => 167,  320 => 166,  313 => 162,  300 => 152,  297 => 151,  291 => 148,  288 => 147,  286 => 146,  281 => 144,  274 => 139,  268 => 135,  257 => 133,  253 => 132,  249 => 131,  245 => 129,  243 => 128,  239 => 127,  232 => 123,  223 => 116,  221 => 113,  220 => 112,  214 => 108,  212 => 106,  211 => 105,  204 => 101,  186 => 86,  173 => 75,  164 => 71,  159 => 69,  156 => 68,  154 => 67,  149 => 65,  145 => 64,  140 => 62,  128 => 53,  116 => 43,  114 => 42,  107 => 41,  102 => 38,  95 => 37,  90 => 31,  89 => 30,  88 => 29,  87 => 28,  86 => 26,  85 => 25,  84 => 24,  77 => 23,  66 => 21,  55 => 19,  44 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/List/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\List\\details.html.twig");
    }
}
