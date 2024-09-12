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

/* @MauticLead/Company/company.html.twig */
class __TwigTemplate_741af98a33d8a0b3ffc47f4575dcaf79 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 13
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Company/company.html.twig", 13);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
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
        $context["canEdit"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 19, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 19), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 19, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 19), CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 19, $this->source); })()), "permissionUser", [], "any", false, false, false, 19));
        // line 20
        $context["canMerge"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 20, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 20), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 20, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 20), CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 20, $this->source); })()), "permissionUser", [], "any", false, false, false, 20));
        // line 21
        $context["canDownload"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 21, $this->source); })()), "lead:leads:viewown", [], "array", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 21, $this->source); })()), "lead:leads:viewother", [], "array", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 21, $this->source); })()), "permissionUser", [], "any", false, false, false, 21));
        // line 22
        $context["buttons"] = [];
        // line 23
        yield "
";
        // line 25
        if (((isset($context["canMerge"]) || array_key_exists("canMerge", $context) ? $context["canMerge"] : (function () { throw new RuntimeError('Variable "canMerge" does not exist.', 25, $this->source); })()) && (isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 25, $this->source); })()))) {
            // line 26
            yield "    ";
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 26, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.company.header.merge", ["%name%" => CoreExtension::getAttribute($this->env, $this->source,             // line 30
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 30, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 30)]), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_company_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 31
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "objectAction" => "merge"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.merge"), "iconClass" => "ri-exchange-2-line"]]);
        }
        // line 37
        yield "
";
        // line 39
        if ((isset($context["canDownload"]) || array_key_exists("canDownload", $context) ? $context["canDownload"] : (function () { throw new RuntimeError('Variable "canDownload" does not exist.', 39, $this->source); })())) {
            // line 40
            yield "    ";
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 40, $this->source); })()), [["attr" => ["data-toggle" => "download", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_company_export_action", ["companyId" => CoreExtension::getAttribute($this->env, $this->source,             // line 43
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.export"), "iconClass" => "ri-export-line"]]);
        }
        // line 49
        yield "
  ";
        // line 50
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 51
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 51, $this->source); })()), "routeBase" => "company", "langVar" => "company", "customButtons" =>         // line 54
(isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 54, $this->source); })()), "templateButtons" => ["edit" =>         // line 56
(isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 56, $this->source); })()), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 57
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 57, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 57), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 57, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 57), CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 57, $this->source); })()), "permissionUser", [], "any", false, false, false, 57)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 58
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 58, $this->source); })()), "lead:leads:viewown", [], "array", false, false, false, 58), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 58, $this->source); })()), "lead:leads:viewother", [], "array", false, false, false, 58), CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 58, $this->source); })()), "permissionUser", [], "any", false, false, false, 58))]]);
        // line 60
        yield "
";
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield "<!-- start: box layout -->
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
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 74, $this->source); })())));
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
            yield "                        ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 75, $this->source); })()), $context["g"], [], "array", false, false, false, 75))) {
                // line 76
                yield "                            <li class=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 76)) {
                    yield "active";
                }
                yield "\">
                                <a href=\"#";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["g"], "html", null, true);
                yield "\" class=\"group\" data-toggle=\"tab\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . $context["g"])), "html", null, true);
                yield "</a>
                            </li>
                        ";
            }
            // line 80
            yield "                    ";
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
        unset($context['_seq'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                </ul>

                <!-- start: tab-content -->
                <div class=\"tab-content pa-md\">
                    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 85, $this->source); })())));
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
            yield "                        <div class=\"tab-pane fade ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 86)) {
                yield "in active";
            }
            yield " bdr-w-0\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["group"], "html", null, true);
            yield "\">
                            <div class=\"pr-md pl-md pb-md\">
                                <div class=\"panel shd-none mb-0\">
                                    <table class=\"table table-hover mb-0\">
                                        <tbody>
                                        ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 91, $this->source); })()), $context["group"], [], "array", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 92
                yield "                                            ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 92))) {
                    // line 93
                    yield "                                                <tr>
                                                    <td width=\"20%\"><span class=\"fw-b\">";
                    // line 94
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 94), "html", null, true);
                    yield "</span></td>
                                                    <td>
                                                        ";
                    // line 96
                    if (((("core" == $context["group"]) && ("country" == CoreExtension::getAttribute($this->env, $this->source, $context["field"], "alias", [], "any", false, false, false, 96))) && array_key_exists("flag", $context))) {
                        // line 97
                        yield "                                                          <img class=\"mr-sm\" src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 97, $this->source); })()), "html", null, true);
                        yield "\" alt=\"\" style=\"max-height: 24px;\"/>
                                                          <span class=\"mt-1\">";
                        // line 98
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 98), "html", null, true);
                        yield "</span>
                                                        ";
                    } else {
                        // line 100
                        yield "                                                          ";
                        if ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 100)) && ("multiselect" == CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 100)))) {
                            // line 101
                            yield "                                                              ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 101), ", "), "html", null, true);
                            yield "
                                                          ";
                        } elseif (("url" == CoreExtension::getAttribute($this->env, $this->source,                         // line 102
$context["field"], "type", [], "any", false, false, false, 102))) {
                            // line 103
                            yield "                                                              <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 103), "html", null, true);
                            yield "\" target=\"_blank\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 103), "html", null, true);
                            yield "</a>
                                                          ";
                        } else {
                            // line 105
                            yield "                                                              ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "normalizedValue", [], "any", false, false, false, 105), "html", null, true);
                            yield "
                                                          ";
                        }
                        // line 107
                        yield "                                                        ";
                    }
                    // line 108
                    yield "                                                    </td>
                                                </tr>
                                            ";
                }
                // line 111
                yield "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        yield "                </div>
            </div>
            <!--/ lead detail collapseable -->
        </div>

        <div>
            <!-- lead detail collapseable toggler -->
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#lead-details\">
                       <span class=\"caret\"></span>
                       ";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.header.engagements"), "html", null, true);
        yield "
                                </h5>
                            </div>
                            <div class=\"col-xs-4 va-t text-right\">
                                <h3 class=\"text-white dark-sm\"><span class=\"ri-eye-line\"></span></h3>
                            </div>
                        </div>
                        ";
        // line 150
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" =>         // line 151
(isset($context["engagementData"]) || array_key_exists("engagementData", $context) ? $context["engagementData"] : (function () { throw new RuntimeError('Variable "engagementData" does not exist.', 151, $this->source); })()), "chartType" => "line", "chartHeight" => 250]);
        // line 154
        yield "
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Company/list_rows_contacts.html.twig", ["contacts" =>         // line 165
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 165, $this->source); })()), "company" =>         // line 166
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 166, $this->source); })()), "tmpl" => "index", "permissions" =>         // line 168
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 168, $this->source); })()), "security" =>         // line 169
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 169, $this->source); })()), "page" =>         // line 170
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 170, $this->source); })()), "limit" =>         // line 171
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 171, $this->source); })()), "totalItems" =>         // line 172
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 172, $this->source); })())]);
        // line 173
        yield "
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.company.score.count", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 190, $this->source); })()), "score", [], "any", false, false, false, 190)]), "html", null, true);
        yield "</h1>
                <hr/>
            </div>
            <div class=\"panel-heading\">
                <div class=\"panel-title\">";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.group.company"), "html", null, true);
        yield "</div>
            </div>
            <div class=\"panel-body pt-sm\">
                ";
        // line 197
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 197, $this->source); })()), "owner", [], "any", false, false, false, 197)) {
            // line 198
            yield "                  <h6 class=\"fw-sb\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.company.field.owner"), "html", null, true);
            yield "</h6>
                  <p class=\"text-muted\">";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 199, $this->source); })()), "owner", [], "any", false, false, false, 199), "name", [], "any", false, false, false, 199), "html", null, true);
            yield "</p>
                ";
        }
        // line 201
        yield "
                <h6 class=\"fw-sb\">";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.address"), "html", null, true);
        yield "</h6>
                <address class=\"text-muted\">
                    ";
        // line 204
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 204, $this->source); })()), "address1", [], "any", false, false, false, 204))) {
            // line 205
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 205, $this->source); })()), "address1", [], "any", false, false, false, 205), "html", null, true);
            yield "<br>
                    ";
        }
        // line 207
        yield "                    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 207, $this->source); })()), "address2", [], "any", false, false, false, 207))) {
            // line 208
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 208, $this->source); })()), "address2", [], "any", false, false, false, 208), "html", null, true);
            yield "<br>
                    ";
        }
        // line 210
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 210, $this->source); })()), "city", [], "any", false, false, false, 210), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 210, $this->source); })()), "zipcode", [], "any", false, false, false, 210), "html", null, true);
        yield "
                    <br>
                </address>

                <h6 class=\"fw-sb\">";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.type.email"), "html", null, true);
        yield "</h6>
                <p class=\"text-muted\">";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 215, $this->source); })()), "email", [], "any", false, false, false, 215), "html", null, true);
        yield "</p>

                ";
        // line 217
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 217, $this->source); })()), "phone", [], "any", false, false, false, 217))) {
            // line 218
            yield "                  <h6 class=\"fw-sb\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.company.phone"), "html", null, true);
            yield "</h6>
                  <p class=\"text-muted\">";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 219, $this->source); })()), "phone", [], "any", false, false, false, 219), "html", null, true);
            yield "</p>
                ";
        }
        // line 221
        yield "            </div>
        </div>
        <!--/ form HTML -->
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
        return "@MauticLead/Company/company.html.twig";
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
        return array (  471 => 221,  466 => 219,  461 => 218,  459 => 217,  454 => 215,  450 => 214,  440 => 210,  434 => 208,  431 => 207,  425 => 205,  423 => 204,  418 => 202,  415 => 201,  410 => 199,  405 => 198,  403 => 197,  397 => 194,  390 => 190,  371 => 173,  369 => 172,  368 => 171,  367 => 170,  366 => 169,  365 => 168,  364 => 166,  363 => 165,  362 => 164,  350 => 154,  348 => 151,  347 => 150,  337 => 143,  320 => 129,  314 => 126,  304 => 118,  285 => 112,  279 => 111,  274 => 108,  271 => 107,  265 => 105,  257 => 103,  255 => 102,  250 => 101,  247 => 100,  242 => 98,  237 => 97,  235 => 96,  230 => 94,  227 => 93,  224 => 92,  220 => 91,  207 => 86,  190 => 85,  184 => 81,  170 => 80,  162 => 77,  155 => 76,  152 => 75,  135 => 74,  123 => 64,  116 => 63,  110 => 60,  108 => 58,  107 => 57,  106 => 56,  105 => 54,  104 => 51,  103 => 50,  100 => 49,  97 => 43,  95 => 40,  93 => 39,  90 => 37,  87 => 31,  86 => 30,  84 => 26,  82 => 25,  79 => 23,  77 => 22,  75 => 21,  73 => 20,  71 => 19,  64 => 18,  53 => 16,  42 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Company/company.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Company\\company.html.twig");
    }
}
