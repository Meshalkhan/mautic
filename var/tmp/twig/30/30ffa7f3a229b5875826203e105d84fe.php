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

/* @MauticLead/Company/company.html.twig */
class __TwigTemplate_67d32493b666c23695fc73eb1b8fd0af extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 13
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Company/company.html.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
    }

    // line 18
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        $context["canEdit"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 19, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 19), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 19, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 19), twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 19, $this->source); })()), "permissionUser", [], "any", false, false, false, 19));
        // line 20
        $context["canMerge"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 20, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 20), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 20, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 20), twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 20, $this->source); })()), "permissionUser", [], "any", false, false, false, 20));
        // line 21
        $context["canDownload"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 21, $this->source); })()), "lead:leads:viewown", [], "array", false, false, false, 21), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 21, $this->source); })()), "lead:leads:viewother", [], "array", false, false, false, 21), twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 21, $this->source); })()), "permissionUser", [], "any", false, false, false, 21));
        // line 22
        $context["buttons"] = [];
        // line 23
        echo "
";
        // line 25
        if (((isset($context["canMerge"]) || array_key_exists("canMerge", $context) ? $context["canMerge"] : (function () { throw new RuntimeError('Variable "canMerge" does not exist.', 25, $this->source); })()) && (isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 25, $this->source); })()))) {
            // line 26
            echo "    ";
            $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 26, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.company.header.merge", ["%name%" => twig_get_attribute($this->env, $this->source,             // line 30
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 30, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 30)]), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_company_action", ["objectId" => twig_get_attribute($this->env, $this->source,             // line 31
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "objectAction" => "merge"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.merge"), "iconClass" => "ri-exchange-2-line"]]);
        }
        // line 37
        echo "
";
        // line 39
        if ((isset($context["canDownload"]) || array_key_exists("canDownload", $context) ? $context["canDownload"] : (function () { throw new RuntimeError('Variable "canDownload" does not exist.', 39, $this->source); })())) {
            // line 40
            echo "    ";
            $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 40, $this->source); })()), [["attr" => ["data-toggle" => "download", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_company_export_action", ["companyId" => twig_get_attribute($this->env, $this->source,             // line 43
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.export"), "iconClass" => "ri-export-line"]]);
        }
        // line 49
        echo "
  ";
        // line 50
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 51
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 51, $this->source); })()), "routeBase" => "company", "langVar" => "company", "customButtons" =>         // line 54
(isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 54, $this->source); })()), "templateButtons" => ["edit" =>         // line 56
(isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 56, $this->source); })()), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 57
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 57, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 57), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 57, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 57), twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 57, $this->source); })()), "permissionUser", [], "any", false, false, false, 57)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 58
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 58, $this->source); })()), "lead:leads:viewown", [], "array", false, false, false, 58), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 58, $this->source); })()), "lead:leads:viewother", [], "array", false, false, false, 58), twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 58, $this->source); })()), "permissionUser", [], "any", false, false, false, 58))]]);
        // line 60
        echo "
";
    }

    // line 63
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!--/ lead detail header -->

            <!-- lead detail collapseable -->
            <div class=\"collapse\" id=\"lead-details\">
                <ul class=\"pt-md nav nav-tabs pr-md pl-md\" role=\"tablist\">
                    ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 74, $this->source); })())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 75
            echo "                        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 75, $this->source); })()), $context["g"], [], "array", false, false, false, 75))) {
                // line 76
                echo "                            <li class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 76)) {
                    echo "active";
                }
                echo "\">
                                <a href=\"#";
                // line 77
                echo twig_escape_filter($this->env, $context["g"], "html", null, true);
                echo "\" class=\"group\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . $context["g"])), "html", null, true);
                echo "</a>
                            </li>
                        ";
            }
            // line 80
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                </ul>

                <!-- start: tab-content -->
                <div class=\"tab-content pa-md\">
                    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 85, $this->source); })())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 86
            echo "                        <div class=\"tab-pane fade ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 86)) {
                echo "in active";
            }
            echo " bdr-w-0\" id=\"";
            echo twig_escape_filter($this->env, $context["group"], "html", null, true);
            echo "\">
                            <div class=\"pr-md pl-md pb-md\">
                                <div class=\"panel shd-none mb-0\">
                                    <table class=\"table table-hover mb-0\">
                                        <tbody>
                                        ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 91, $this->source); })()), $context["group"], [], "array", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 92
                echo "                                            ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 92))) {
                    // line 93
                    echo "                                                <tr>
                                                    <td width=\"20%\"><span class=\"fw-b\">";
                    // line 94
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 94), "html", null, true);
                    echo "</span></td>
                                                    <td>
                                                        ";
                    // line 96
                    if (((("core" == $context["group"]) && ("country" == twig_get_attribute($this->env, $this->source, $context["field"], "alias", [], "any", false, false, false, 96))) && array_key_exists("flag", $context))) {
                        // line 97
                        echo "                                                          <img class=\"mr-sm\" src=\"";
                        echo twig_escape_filter($this->env, (isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 97, $this->source); })()), "html", null, true);
                        echo "\" alt=\"\" style=\"max-height: 24px;\"/>
                                                          <span class=\"mt-1\">";
                        // line 98
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 98), "html", null, true);
                        echo "</span>
                                                        ";
                    } else {
                        // line 100
                        echo "                                                          ";
                        if ((is_iterable(twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 100)) && ("multiselect" == twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 100)))) {
                            // line 101
                            echo "                                                              ";
                            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 101), ", "), "html", null, true);
                            echo "
                                                          ";
                        } elseif (("url" == twig_get_attribute($this->env, $this->source,                         // line 102
$context["field"], "type", [], "any", false, false, false, 102))) {
                            // line 103
                            echo "                                                              <a href=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 103), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 103), "html", null, true);
                            echo "</a>
                                                          ";
                        } else {
                            // line 105
                            echo "                                                              ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "normalizedValue", [], "any", false, false, false, 105), "html", null, true);
                            echo "
                                                          ";
                        }
                        // line 107
                        echo "                                                        ";
                    }
                    // line 108
                    echo "                                                    </td>
                                                </tr>
                                            ";
                }
                // line 111
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                </div>
            </div>
            <!--/ lead detail collapseable -->
        </div>

        <div>
            <!-- lead detail collapseable toggler -->
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#lead-details\">
                       <span class=\"caret\"></span>
                       ";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "
                    </a>
                </span>
            </div>
            <!--/ lead detail collapseable toggler -->
        </div>

        <div class=\"pa-md enage\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"panel\">
                        <div class=\"panel-body box-layout\">
                            <div class=\"col-xs-8 va-m\">
                                <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                    ";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.header.engagements"), "html", null, true);
        echo "
                                </h5>
                            </div>
                            <div class=\"col-xs-4 va-t text-right\">
                                <h3 class=\"text-white dark-sm\"><span class=\"ri-eye-line\"></span></h3>
                            </div>
                        </div>
                        ";
        // line 150
        echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" =>         // line 151
(isset($context["engagementData"]) || array_key_exists("engagementData", $context) ? $context["engagementData"] : (function () { throw new RuntimeError('Variable "engagementData" does not exist.', 151, $this->source); })()), "chartType" => "line", "chartHeight" => 250]);
        // line 154
        echo "
                    </div>
                </div>
            </div>
        </div>
        <!-- contacts section -->
        <div class=\"pa-md enage\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div id=\"contacts-table\">
                        ";
        // line 164
        echo twig_include($this->env, $context, "@MauticLead/Company/list_rows_contacts.html.twig", ["contacts" =>         // line 165
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 165, $this->source); })()), "company" =>         // line 166
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 166, $this->source); })()), "tmpl" => "index", "permissions" =>         // line 168
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 168, $this->source); })()), "security" =>         // line 169
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 169, $this->source); })()), "page" =>         // line 170
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 170, $this->source); })()), "limit" =>         // line 171
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 171, $this->source); })()), "totalItems" =>         // line 172
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 172, $this->source); })())]);
        // line 173
        echo "
                    </div>
                </div>
            </div>
        </div>
        <!--/ contacts section -->

        <!--/ end: tab-content -->
    </div>

    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        <!-- form HTML -->
        <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mb-0\">
            <div class=\"mt-sm points-panel text-center\">
                <h1>";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.company.score.count", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 190, $this->source); })()), "score", [], "any", false, false, false, 190)]), "html", null, true);
        echo "</h1>
                <hr/>
            </div>
            <div class=\"panel-heading\">
                <div class=\"panel-title\">";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.group.company"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"panel-body pt-sm\">
                ";
        // line 197
        if (twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 197, $this->source); })()), "owner", [], "any", false, false, false, 197)) {
            // line 198
            echo "                  <h6 class=\"fw-sb\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.company.field.owner"), "html", null, true);
            echo "</h6>
                  <p class=\"text-muted\">";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 199, $this->source); })()), "owner", [], "any", false, false, false, 199), "name", [], "any", false, false, false, 199), "html", null, true);
            echo "</p>
                ";
        }
        // line 201
        echo "
                <h6 class=\"fw-sb\">";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.address"), "html", null, true);
        echo "</h6>
                <address class=\"text-muted\">
                    ";
        // line 204
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 204, $this->source); })()), "address1", [], "any", false, false, false, 204))) {
            // line 205
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 205, $this->source); })()), "address1", [], "any", false, false, false, 205), "html", null, true);
            echo "<br>
                    ";
        }
        // line 207
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 207, $this->source); })()), "address2", [], "any", false, false, false, 207))) {
            // line 208
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 208, $this->source); })()), "address2", [], "any", false, false, false, 208), "html", null, true);
            echo "<br>
                    ";
        }
        // line 210
        echo "                    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 210, $this->source); })()), "city", [], "any", false, false, false, 210), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 210, $this->source); })()), "zipcode", [], "any", false, false, false, 210), "html", null, true);
        echo "
                    <br>
                </address>

                <h6 class=\"fw-sb\">";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.type.email"), "html", null, true);
        echo "</h6>
                <p class=\"text-muted\">";
        // line 215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 215, $this->source); })()), "email", [], "any", false, false, false, 215), "html", null, true);
        echo "</p>

                ";
        // line 217
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 217, $this->source); })()), "phone", [], "any", false, false, false, 217))) {
            // line 218
            echo "                  <h6 class=\"fw-sb\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.company.phone"), "html", null, true);
            echo "</h6>
                  <p class=\"text-muted\">";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 219, $this->source); })()), "phone", [], "any", false, false, false, 219), "html", null, true);
            echo "</p>
                ";
        }
        // line 221
        echo "            </div>
        </div>
        <!--/ form HTML -->
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
        return "@MauticLead/Company/company.html.twig";
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
        return array (  455 => 221,  450 => 219,  445 => 218,  443 => 217,  438 => 215,  434 => 214,  424 => 210,  418 => 208,  415 => 207,  409 => 205,  407 => 204,  402 => 202,  399 => 201,  394 => 199,  389 => 198,  387 => 197,  381 => 194,  374 => 190,  355 => 173,  353 => 172,  352 => 171,  351 => 170,  350 => 169,  349 => 168,  348 => 166,  347 => 165,  346 => 164,  334 => 154,  332 => 151,  331 => 150,  321 => 143,  304 => 129,  298 => 126,  288 => 118,  269 => 112,  263 => 111,  258 => 108,  255 => 107,  249 => 105,  241 => 103,  239 => 102,  234 => 101,  231 => 100,  226 => 98,  221 => 97,  219 => 96,  214 => 94,  211 => 93,  208 => 92,  204 => 91,  191 => 86,  174 => 85,  168 => 81,  154 => 80,  146 => 77,  139 => 76,  136 => 75,  119 => 74,  107 => 64,  103 => 63,  98 => 60,  96 => 58,  95 => 57,  94 => 56,  93 => 54,  92 => 51,  91 => 50,  88 => 49,  85 => 43,  83 => 40,  81 => 39,  78 => 37,  75 => 31,  74 => 30,  72 => 26,  70 => 25,  67 => 23,  65 => 22,  63 => 21,  61 => 20,  59 => 19,  55 => 18,  48 => 16,  37 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Company/company.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Company\\company.html.twig");
    }
}
