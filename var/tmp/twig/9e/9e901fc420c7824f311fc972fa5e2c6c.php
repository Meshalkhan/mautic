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

/* @MauticLead/List/details.html.twig */
class __TwigTemplate_7a48b5510b49844addf426f5c7664ec9 extends Template
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
            'actions' => [$this, 'block_actions'],
            'publishStatus' => [$this, 'block_publishStatus'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 17
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/List/details.html.twig", 17);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "list";
    }

    // line 21
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
    }

    // line 23
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 25
(isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 25, $this->source); })()), "customButtons" => ((        // line 26
array_key_exists("customButtons", $context)) ? (_twig_default_filter((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 26, $this->source); })()), [])) : ([])), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 28
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 28, $this->source); })()), twig_constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_EDIT_OWN"), [], "array", false, false, false, 28), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 28, $this->source); })()), twig_constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_EDIT_OTHER"), [], "array", false, false, false, 28), twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 28, $this->source); })()), "createdBy", [], "any", false, false, false, 28)), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 29
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 29, $this->source); })()), twig_constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_DELETE_OWN"), [], "array", false, false, false, 29), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 29, $this->source); })()), twig_constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_DELETE_OTHER"), [], "array", false, false, false, 29), twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 29, $this->source); })()), "createdBy", [], "any", false, false, false, 29)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 30
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 30, $this->source); })()), twig_constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_VIEW_OWN"), [], "array", false, false, false, 30), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 30, $this->source); })()), twig_constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_VIEW_OTHER"), [], "array", false, false, false, 30), twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 30, $this->source); })()), "createdBy", [], "any", false, false, false, 30)), "clone" => twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 31, $this->source); })()), twig_constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_CREATE"), [], "array", false, false, false, 31)], "routeBase" => "segment"]);
    }

    // line 37
    public function block_publishStatus($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 38, $this->source); })())]);
    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        $context["hasSegmentMembershipFilter"] = twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 42, $this->source); })()), "hasFilterTypeOf", ["leadList"], "method", false, false, false, 42);
        // line 43
        echo "<!-- start: box layout -->
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
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53));
        echo "</div>
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
        echo twig_include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 62, $this->source); })())]);
        echo "
                            <tr>
                                <td width=\"20%\"><span class=\"fw-b textTitle\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        echo "</span></td>
                                <td>";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["segmentCount"]) || array_key_exists("segmentCount", $context) ? $context["segmentCount"] : (function () { throw new RuntimeError('Variable "segmentCount" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "</td>
                            </tr>
                            ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 67, $this->source); })()), "lastBuiltTime", [], "any", false, false, false, 67)) {
            // line 68
            echo "                            <tr>
                                <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.last_built_time"), "html", null, true);
            echo "</span></td>
                                <td>
                                    ";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.date.second", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 71, $this->source); })()), "lastBuiltTime", [], "any", false, false, false, 71)]), "html", null, true);
            echo " (";
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 71, $this->source); })()), "lastBuiltDate", [], "any", false, false, false, 71));
            echo ")
                                </td>
                            </tr>
                            ";
        }
        // line 75
        echo "                            </tbody>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.segment.stats"), "html", null, true);
        echo "
                                    </h5>
                                </div>
                                <div class=\"col-md-9 va-m\">
                                    ";
        // line 105
        echo twig_include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" =>         // line 106
(isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 106, $this->source); })()), "class" => "pull-right"]);
        // line 108
        echo "
                                </div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                ";
        // line 112
        echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" =>         // line 113
(isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 113, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        // line 116
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 123
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        echo "

            <!-- tabs controls -->
            <!-- search bar-->
            <form method=\"post\" action=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_contacts", ["objectId" => twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127)]), "html", null, true);
        echo "\" class=\"panel\" id=\"segment-contact-filters\">
                ";
        // line 128
        if ((twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "types", [], "any", true, true, false, 128) && is_iterable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 128, $this->source); })()), "types", [], "any", false, false, false, 128)))) {
            // line 129
            echo "                    <div class=\"history-search panel-footer text-muted\">
                        <div class=\"col-sm-5\">
                            <select name=\"includeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\" data-placeholder=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.include.placeholder"), "html", null, true);
            echo "\">
                                ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 132, $this->source); })()), "types", [], "any", false, false, false, 132));
            foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                // line 133
                echo "                                    <option value=\"";
                echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($context["typeKey"]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["typeName"], "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['typeKey'], $context['typeName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                            </select>
                        </div>
                    </div>
                ";
        }
        // line 139
        echo "            </form>

            <!--/ search bar -->
            <ul class=\"nav nav-tabs pr-md pl-md\">
                <li class=\"active\">
                    <a href=\"#contacts-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        echo "</a>
                </li>
                ";
        // line 146
        if ((isset($context["hasSegmentMembershipFilter"]) || array_key_exists("hasSegmentMembershipFilter", $context) ? $context["hasSegmentMembershipFilter"] : (function () { throw new RuntimeError('Variable "hasSegmentMembershipFilter" does not exist.', 146, $this->source); })())) {
            // line 147
            echo "                  <li>
                      <a id=\"segment-dependencies\" href=\"#segment-dependencies-container\" role=\"tab\" data-toggle=\"tab\">";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.segment.dependencies"), "html", null, true);
            echo "</a>
                  </li>
                ";
        }
        // line 151
        echo "                <li>
                    <a id=\"campaign-share-tab\" href=\"#campaign-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.campaign.share"), "html", null, true);
        echo "</a>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_contacts", ["objectId" => twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 162, $this->source); })()), "id", [], "any", false, false, false, 162), "page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "session", [], "any", false, false, false, 162), "get", ["mautic.segment.contact.page", 1], "method", false, false, false, 162)]), "html", null, true);
        echo "\">
              <div class=\"spinner\"><i class=\"fa fa-spin fa-spinner\"></i></div>
            </div>

            ";
        // line 166
        if ((isset($context["hasSegmentMembershipFilter"]) || array_key_exists("hasSegmentMembershipFilter", $context) ? $context["hasSegmentMembershipFilter"] : (function () { throw new RuntimeError('Variable "hasSegmentMembershipFilter" does not exist.', 166, $this->source); })())) {
            // line 167
            echo "              <div class=\"tab-pane bdr-w-0 page-list\" id=\"segment-dependencies-container\"></div>
            ";
        }
        // line 169
        echo "
            <div class=\"tab-pane bdr-w-0 page-list\" id=\"campaign-container\">
                <div id=\"campaign-share-container\" style=\"position: relative\">
                    <table id=\"campaign-share-table\" class=\"table table-hover mb-0\">
                        <thead>
                        <tr>
                            <th>";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.campaign"), "html", null, true);
        echo "</th>
                            <th>";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.share"), "html", null, true);
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 180, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 181
            echo "                            <tr>
                                <td>
                                    <a href=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["stat"], "id", [], "any", false, false, false, 183)]), "html", null, true);
            echo "\" data-toggle=\"ajax\">";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "name", [], "any", false, false, false, 184), "html", null, true);
            // line 185
            echo "</a>
                                </td>
                                <td width=\"20%\">
                                    <span class=\"campaign-share-stat\" data-value=\"";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "id", [], "any", false, false, false, 188), "html", null, true);
            echo "\"
                                          id=\"campaign-share-stat-";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "id", [], "any", false, false, false, 189), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "share", [], "any", false, false, false, 189), "html", null, true);
            echo "</span> %
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "                        </tbody>
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
        echo twig_include($this->env, $context, "@MauticCore/Helper/usage.html.twig", ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.segments.usages"), "stats" =>         // line 206
(isset($context["usageStats"]) || array_key_exists("usageStats", $context) ? $context["usageStats"] : (function () { throw new RuntimeError('Variable "usageStats" does not exist.', 206, $this->source); })()), "noUsages" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.segments.no_usages")]);
        // line 208
        echo "

        <!-- activity feed -->
        ";
        // line 212
        echo "    </div>
    <!--/ right section -->
    <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 214, $this->source); })()), "id", [], "any", false, false, false, 214));
        echo "\" />
</div>
<!--/ end: box layout -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/List/details.html.twig";
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
        return array (  380 => 214,  376 => 212,  371 => 208,  369 => 206,  368 => 204,  355 => 193,  343 => 189,  339 => 188,  334 => 185,  332 => 184,  329 => 183,  325 => 181,  321 => 180,  314 => 176,  310 => 175,  302 => 169,  298 => 167,  296 => 166,  289 => 162,  276 => 152,  273 => 151,  267 => 148,  264 => 147,  262 => 146,  257 => 144,  250 => 139,  244 => 135,  233 => 133,  229 => 132,  225 => 131,  221 => 129,  219 => 128,  215 => 127,  208 => 123,  199 => 116,  197 => 113,  196 => 112,  190 => 108,  188 => 106,  187 => 105,  180 => 101,  162 => 86,  149 => 75,  140 => 71,  135 => 69,  132 => 68,  130 => 67,  125 => 65,  121 => 64,  116 => 62,  104 => 53,  92 => 43,  90 => 42,  86 => 41,  82 => 38,  78 => 37,  74 => 31,  73 => 30,  72 => 29,  71 => 28,  70 => 26,  69 => 25,  68 => 24,  64 => 23,  57 => 21,  50 => 19,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/List/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\List\\details.html.twig");
    }
}
