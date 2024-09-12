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

/* @MauticPage/Page/_list.html.twig */
class __TwigTemplate_59e18a03d58778ed69a300ed4c4fbce8 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 13, $this->source); })())) > 0)) {
            // line 14
            yield "    <div class=\"table-responsive page-list\">
        <table class=\"table table-hover pagetable-list\" id=\"pageTable\">
            <thead>
            <tr>
                ";
            // line 18
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#pageTable", "routeBase" => "page", "templateButtons" => ["delete" => (CoreExtension::getAttribute($this->env, $this->source,             // line 23
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "page:pages:deleteown", [], "array", false, false, false, 23) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "page:pages:deleteother", [], "array", false, false, false, 23))]]);
            // line 25
            yield "

                ";
            // line 27
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.title", "text" => "mautic.core.title", "class" => "col-page-title"]);
            // line 32
            yield "

                ";
            // line 34
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-page-category"]);
            // line 39
            yield "

                ";
            // line 41
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.hits", "text" => "mautic.page.thead.hits", "class" => "col-page-hits visible-md visible-lg"]);
            // line 46
            yield "

                ";
            // line 48
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "col-page-dateAdded visible-md visible-lg"]);
            // line 53
            yield "

                ";
            // line 55
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.dateModified", "text" => "mautic.lead.import.label.dateModified", "class" => "col-page-dateModified visible-md visible-lg", "default" => true]);
            // line 61
            yield "

                ";
            // line 63
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.createdByUser", "text" => "mautic.core.createdby", "class" => "col-page-createdByUser visible-md visible-lg"]);
            // line 68
            yield "

                ";
            // line 70
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "submission_count", "text" => "mautic.form.form.results", "class" => "visible-md visible-lg col-page-submissions"]);
            // line 75
            yield "

                ";
            // line 77
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.id", "text" => "mautic.core.id", "class" => "col-page-id visible-md visible-lg"]);
            // line 82
            yield "
            </tr>
            </thead>
            <tbody>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 86, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 87
                yield "                ";
                $context["item"] = CoreExtension::getAttribute($this->env, $this->source, $context["i"], 0, [], "array", false, false, false, 87);
                // line 88
                yield "                <tr>
                    <td>
                        ";
                // line 90
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 91
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 91, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 93
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 93, $this->source); })()), "page:pages:editown", [], "array", false, false, false, 93), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 93, $this->source); })()), "page:pages:editother", [], "array", false, false, false, 93), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 93, $this->source); })()), "createdBy", [], "any", false, false, false, 93)), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 94
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 94, $this->source); })()), "page:pages:create", [], "array", false, false, false, 94), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 95
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 95, $this->source); })()), "page:pages:deleteown", [], "array", false, false, false, 95), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 95, $this->source); })()), "page:pages:deleteother", [], "array", false, false, false, 95), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 95, $this->source); })()), "createdBy", [], "any", false, false, false, 95))], "routeBase" => "page", "nameGetter" => "getTitle"]);
                // line 99
                yield "
                    </td>
                    <td>
                        ";
                // line 102
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 102, $this->source); })()), "model" => "page.page"]);
                yield "
                        <a href=\"";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
                            ";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 104, $this->source); })()), "title", [], "any", false, false, false, 104), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 104, $this->source); })()), "alias", [], "any", false, false, false, 104), "html", null, true);
                yield ")
                            ";
                // line 105
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 105, $this->source); })()), "isVariant", [], "any", false, false, false, 105) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 105, $this->source); })()), "isTranslation", [], "any", false, false, false, 105)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 105, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 105))) {
                    // line 106
                    yield "                                <span>
                                    ";
                    // line 107
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 107, $this->source); })()), "isVariant", [], "any", false, false, false, 107)) {
                        // line 108
                        yield "                                        <span data-toggle=\"tooltip\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.ab_test"), "html", null, true);
                        yield "\">
                                            <i class=\"fa fa-fw fa-sitemap\"></i>
                                        </span>
                                    ";
                    }
                    // line 112
                    yield "                                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 112, $this->source); })()), "isTranslation", [], "any", false, false, false, 112)) {
                        // line 113
                        yield "                                        <span data-toggle=\"tooltip\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.translation"), "html", null, true);
                        yield "\">
                                            <i class=\"fa fa-fw fa-language\"></i>
                                        </span>
                                    ";
                    }
                    // line 117
                    yield "                                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 117, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 117)) {
                        // line 118
                        yield "                                        <span data-toggle=\"tooltip\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.preference_center"), "html", null, true);
                        yield "\">
                                            <i class=\"fa fa-fw fa-cog\"></i>
                                        </span>
                                    ";
                    }
                    // line 122
                    yield "                                </span>
                            ";
                }
                // line 124
                yield "                        </a>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 127
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 127, $this->source); })()), "category", [], "any", false, false, false, 127);
                // line 128
                yield "                        ";
                $context["catName"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 128), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 129
                yield "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 129, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 129, $this->source); })()), "color", [], "any", false, false, false, 129))) : ("inherit"));
                // line 130
                yield "                        <span style=\"white-space: nowrap;\">
                          <span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 131, $this->source); })()), "html", null, true);
                yield ";\"> </span>
                          <span>";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 132, $this->source); })()), "html", null, true);
                yield "</span>
                        </span>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 135, $this->source); })()), "hits", [], "any", false, false, false, 135), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 136
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 136, $this->source); })()), "dateAdded", [], "any", false, false, false, 136)) {
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 136, $this->source); })()), "dateAdded", [], "any", false, false, false, 136));
                }
                yield "\">
                        ";
                // line 137
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 137, $this->source); })()), "dateAdded", [], "any", false, false, false, 137)) {
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 137, $this->source); })()), "dateAdded", [], "any", false, false, false, 137));
                }
                // line 138
                yield "                    </td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 139
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 139, $this->source); })()), "dateModified", [], "any", false, false, false, 139)) {
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 139, $this->source); })()), "dateModified", [], "any", false, false, false, 139));
                }
                yield "\">
                        ";
                // line 140
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 140, $this->source); })()), "dateModified", [], "any", false, false, false, 140)) {
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 140, $this->source); })()), "dateModified", [], "any", false, false, false, 140));
                }
                // line 141
                yield "                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 142, $this->source); })()), "createdByUser", [], "any", false, false, false, 142), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\">
                        <a href=\"";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_results", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 144, $this->source); })()), "id", [], "any", false, false, false, 144)]), "html", null, true);
                yield "\" data-toggle=\"ajax\" data-menu-link=\"mautic_form_index\" class=\"btn btn-primary btn-xs\" ";
                if ((0 == CoreExtension::getAttribute($this->env, $this->source, $context["i"], "submission_count", [], "any", false, false, false, 144))) {
                    yield "disabled=\"disabled\"";
                }
                yield ">";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.viewresults", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "submission_count", [], "any", false, false, false, 145)]), "html", null, true);
                // line 146
                yield "</a>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 148, $this->source); })()), "id", [], "any", false, false, false, 148), "html", null, true);
                yield "</td>
                </tr>
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
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            yield "            </tbody>
        </table>
        <div class=\"panel-footer\">
            ";
            // line 154
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 155
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 155, $this->source); })())), "page" =>             // line 156
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 156, $this->source); })()), "limit" =>             // line 157
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 157, $this->source); })()), "menuLinkId" => "mautic_page_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_index"), "sessionVar" => "page"]);
            // line 161
            yield "
        </div>
    </div>
";
        } else {
            // line 165
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPage/Page/_list.html.twig";
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
        return array (  304 => 165,  298 => 161,  296 => 157,  295 => 156,  294 => 155,  293 => 154,  288 => 151,  271 => 148,  267 => 146,  265 => 145,  258 => 144,  253 => 142,  250 => 141,  246 => 140,  240 => 139,  237 => 138,  233 => 137,  227 => 136,  223 => 135,  217 => 132,  213 => 131,  210 => 130,  207 => 129,  204 => 128,  202 => 127,  197 => 124,  193 => 122,  185 => 118,  182 => 117,  174 => 113,  171 => 112,  163 => 108,  161 => 107,  158 => 106,  156 => 105,  150 => 104,  146 => 103,  142 => 102,  137 => 99,  135 => 95,  134 => 94,  133 => 93,  132 => 91,  131 => 90,  127 => 88,  124 => 87,  107 => 86,  101 => 82,  99 => 77,  95 => 75,  93 => 70,  89 => 68,  87 => 63,  83 => 61,  81 => 55,  77 => 53,  75 => 48,  71 => 46,  69 => 41,  65 => 39,  63 => 34,  59 => 32,  57 => 27,  53 => 25,  51 => 23,  50 => 18,  44 => 14,  42 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/Page/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Resources\\views\\Page\\_list.html.twig");
    }
}
