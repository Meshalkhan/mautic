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

/* @MauticPage/Page/_list.html.twig */
class __TwigTemplate_102f942074c1356bf548b258aedbbb2b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 13, $this->source); })())) > 0)) {
            // line 14
            echo "    <div class=\"table-responsive page-list\">
        <table class=\"table table-hover pagetable-list\" id=\"pageTable\">
            <thead>
            <tr>
                ";
            // line 18
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#pageTable", "routeBase" => "page", "templateButtons" => ["delete" => (twig_get_attribute($this->env, $this->source,             // line 23
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "page:pages:deleteown", [], "array", false, false, false, 23) || twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "page:pages:deleteother", [], "array", false, false, false, 23))]]);
            // line 25
            echo "

                ";
            // line 27
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.title", "text" => "mautic.core.title", "class" => "col-page-title"]);
            // line 32
            echo "

                ";
            // line 34
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-page-category"]);
            // line 39
            echo "

                ";
            // line 41
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.hits", "text" => "mautic.page.thead.hits", "class" => "col-page-hits visible-md visible-lg"]);
            // line 46
            echo "

                ";
            // line 48
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "col-page-dateAdded visible-md visible-lg"]);
            // line 53
            echo "

                ";
            // line 55
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.dateModified", "text" => "mautic.lead.import.label.dateModified", "class" => "col-page-dateModified visible-md visible-lg", "default" => true]);
            // line 61
            echo "

                ";
            // line 63
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.createdByUser", "text" => "mautic.core.createdby", "class" => "col-page-createdByUser visible-md visible-lg"]);
            // line 68
            echo "

                ";
            // line 70
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "submission_count", "text" => "mautic.form.form.results", "class" => "visible-md visible-lg col-page-submissions"]);
            // line 75
            echo "

                ";
            // line 77
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "page", "orderBy" => "p.id", "text" => "mautic.core.id", "class" => "col-page-id visible-md visible-lg"]);
            // line 82
            echo "
            </tr>
            </thead>
            <tbody>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 86, $this->source); })()));
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
                echo "                ";
                $context["item"] = twig_get_attribute($this->env, $this->source, $context["i"], 0, [], "array", false, false, false, 87);
                // line 88
                echo "                <tr>
                    <td>
                        ";
                // line 90
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 91
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 91, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 93
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 93, $this->source); })()), "page:pages:editown", [], "array", false, false, false, 93), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 93, $this->source); })()), "page:pages:editother", [], "array", false, false, false, 93), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 93, $this->source); })()), "createdBy", [], "any", false, false, false, 93)), "clone" => twig_get_attribute($this->env, $this->source,                 // line 94
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 94, $this->source); })()), "page:pages:create", [], "array", false, false, false, 94), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 95
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 95, $this->source); })()), "page:pages:deleteown", [], "array", false, false, false, 95), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 95, $this->source); })()), "page:pages:deleteother", [], "array", false, false, false, 95), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 95, $this->source); })()), "createdBy", [], "any", false, false, false, 95))], "routeBase" => "page", "nameGetter" => "getTitle"]);
                // line 99
                echo "
                    </td>
                    <td>
                        ";
                // line 102
                echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 102, $this->source); })()), "model" => "page.page"]);
                echo "
                        <a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103)]), "html", null, true);
                echo "\" data-toggle=\"ajax\">
                            ";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 104, $this->source); })()), "title", [], "any", false, false, false, 104), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 104, $this->source); })()), "alias", [], "any", false, false, false, 104), "html", null, true);
                echo ")
                            ";
                // line 105
                if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 105, $this->source); })()), "isVariant", [], "any", false, false, false, 105) || twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 105, $this->source); })()), "isTranslation", [], "any", false, false, false, 105)) || twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 105, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 105))) {
                    // line 106
                    echo "                                <span>
                                    ";
                    // line 107
                    if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 107, $this->source); })()), "isVariant", [], "any", false, false, false, 107)) {
                        // line 108
                        echo "                                        <span data-toggle=\"tooltip\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.ab_test"), "html", null, true);
                        echo "\">
                                            <i class=\"fa fa-fw fa-sitemap\"></i>
                                        </span>
                                    ";
                    }
                    // line 112
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 112, $this->source); })()), "isTranslation", [], "any", false, false, false, 112)) {
                        // line 113
                        echo "                                        <span data-toggle=\"tooltip\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.translation"), "html", null, true);
                        echo "\">
                                            <i class=\"fa fa-fw fa-language\"></i>
                                        </span>
                                    ";
                    }
                    // line 117
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 117, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 117)) {
                        // line 118
                        echo "                                        <span data-toggle=\"tooltip\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.preference_center"), "html", null, true);
                        echo "\">
                                            <i class=\"fa fa-fw fa-cog\"></i>
                                        </span>
                                    ";
                    }
                    // line 122
                    echo "                                </span>
                            ";
                }
                // line 124
                echo "                        </a>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 127
                $context["category"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 127, $this->source); })()), "category", [], "any", false, false, false, 127);
                // line 128
                echo "                        ";
                $context["catName"] = ((twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", true, true, false, 128)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 128), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 129
                echo "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 129, $this->source); })())) ? (("#" . twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 129, $this->source); })()), "color", [], "any", false, false, false, 129))) : ("inherit"));
                // line 130
                echo "                        <span style=\"white-space: nowrap;\">
                          <span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                // line 131
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 131, $this->source); })()), "html", null, true);
                echo ";\"> </span>
                          <span>";
                // line 132
                echo twig_escape_filter($this->env, (isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 132, $this->source); })()), "html", null, true);
                echo "</span>
                        </span>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 135, $this->source); })()), "hits", [], "any", false, false, false, 135), "html", null, true);
                echo "</td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 136
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 136, $this->source); })()), "dateAdded", [], "any", false, false, false, 136)) {
                    echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 136, $this->source); })()), "dateAdded", [], "any", false, false, false, 136));
                }
                echo "\">
                        ";
                // line 137
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 137, $this->source); })()), "dateAdded", [], "any", false, false, false, 137)) {
                    echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 137, $this->source); })()), "dateAdded", [], "any", false, false, false, 137));
                }
                // line 138
                echo "                    </td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 139
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 139, $this->source); })()), "dateModified", [], "any", false, false, false, 139)) {
                    echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 139, $this->source); })()), "dateModified", [], "any", false, false, false, 139));
                }
                echo "\">
                        ";
                // line 140
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 140, $this->source); })()), "dateModified", [], "any", false, false, false, 140)) {
                    echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 140, $this->source); })()), "dateModified", [], "any", false, false, false, 140));
                }
                // line 141
                echo "                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 142, $this->source); })()), "createdByUser", [], "any", false, false, false, 142), "html", null, true);
                echo "</td>
                    <td class=\"visible-md visible-lg\">
                        <a href=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_results", ["objectId" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 144, $this->source); })()), "id", [], "any", false, false, false, 144)]), "html", null, true);
                echo "\" data-toggle=\"ajax\" data-menu-link=\"mautic_form_index\" class=\"btn btn-primary btn-xs\" ";
                if ((0 == twig_get_attribute($this->env, $this->source, $context["i"], "submission_count", [], "any", false, false, false, 144))) {
                    echo "disabled=\"disabled\"";
                }
                echo ">";
                // line 145
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.viewresults", ["%count%" => twig_get_attribute($this->env, $this->source, $context["i"], "submission_count", [], "any", false, false, false, 145)]), "html", null, true);
                // line 146
                echo "</a>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 148, $this->source); })()), "id", [], "any", false, false, false, 148), "html", null, true);
                echo "</td>
                </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "            </tbody>
        </table>
        <div class=\"panel-footer\">
            ";
            // line 154
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => twig_length_filter($this->env,             // line 155
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 155, $this->source); })())), "page" =>             // line 156
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 156, $this->source); })()), "limit" =>             // line 157
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 157, $this->source); })()), "menuLinkId" => "mautic_page_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_index"), "sessionVar" => "page"]);
            // line 161
            echo "
        </div>
    </div>
";
        } else {
            // line 165
            echo "    ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPage/Page/_list.html.twig";
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
        return array (  299 => 165,  293 => 161,  291 => 157,  290 => 156,  289 => 155,  288 => 154,  283 => 151,  266 => 148,  262 => 146,  260 => 145,  253 => 144,  248 => 142,  245 => 141,  241 => 140,  235 => 139,  232 => 138,  228 => 137,  222 => 136,  218 => 135,  212 => 132,  208 => 131,  205 => 130,  202 => 129,  199 => 128,  197 => 127,  192 => 124,  188 => 122,  180 => 118,  177 => 117,  169 => 113,  166 => 112,  158 => 108,  156 => 107,  153 => 106,  151 => 105,  145 => 104,  141 => 103,  137 => 102,  132 => 99,  130 => 95,  129 => 94,  128 => 93,  127 => 91,  126 => 90,  122 => 88,  119 => 87,  102 => 86,  96 => 82,  94 => 77,  90 => 75,  88 => 70,  84 => 68,  82 => 63,  78 => 61,  76 => 55,  72 => 53,  70 => 48,  66 => 46,  64 => 41,  60 => 39,  58 => 34,  54 => 32,  52 => 27,  48 => 25,  46 => 23,  45 => 18,  39 => 14,  37 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPage/Page/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Resources\\views\\Page\\_list.html.twig");
    }
}
