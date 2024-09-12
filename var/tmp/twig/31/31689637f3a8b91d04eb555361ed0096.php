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

/* @MauticSms/Sms/list.html.twig */
class __TwigTemplate_f3b4b6885fbacbf2fde0c5ae7e5e0ecc extends Template
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
            'content' => [$this, 'block_content'],
            'listResults' => [$this, 'block_listResults'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 3, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticSms/Sms/list.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()) == "index")) ? (true) : (false));
        // line 2
        $context["tmpl"] = "list";
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "sms";
    }

    // line 5
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.smses"), "html", null, true);
    }

    // line 6
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 10, $this->source); })()), "sms:smses:create", [], "array", false, false, false, 10)], "routeBase" => "sms"]);
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "    <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">";
            // line 19
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 20
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 20, $this->source); })()), "searchHelp" => "mautic.sms.help.searchcommands", "searchId" => "sms-search", "action" =>             // line 23
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 23, $this->source); })())]);
            // line 26
            echo "<div class=\"page-list\">
            ";
            // line 27
            $this->displayBlock("listResults", $context, $blocks);
            echo "
        </div>
    </div>
    ";
        } else {
            // line 31
            echo "\t\t";
            $this->displayBlock("listResults", $context, $blocks);
            echo "
\t";
        }
    }

    // line 35
    public function block_listResults($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        if (twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 36, $this->source); })()))) {
            // line 37
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-hover sms-list\">
            <thead>
            <tr>";
            // line 41
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "routeBase" => "sms", "templateButtons" => ["delete" => (twig_get_attribute($this->env, $this->source,             // line 47
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 47, $this->source); })()), "sms:smses:deleteown", [], "array", false, false, false, 47) || twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 47, $this->source); })()), "sms:smses:deleteother", [], "array", false, false, false, 47))]]);
            // line 52
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "sms", "orderBy" => "e.name", "text" => "mautic.core.name", "class" => "col-sms-name", "default" => true]);
            // line 63
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "sms", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-sms-category"]);
            // line 73
            echo "<th class=\"visible-sm visible-md visible-lg col-sms-stats\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.stats"), "html", null, true);
            echo "</th>";
            // line 75
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "sms", "orderBy" => "e.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-sms-id"]);
            // line 84
            echo "</tr>
            </thead>
            <tbody>
            ";
            // line 88
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 88, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 89
                echo "                ";
                $context["type"] = twig_get_attribute($this->env, $this->source, $context["item"], "getSmsType", [], "method", false, false, false, 89);
                // line 90
                echo "                <tr>
                    <td>
                        ";
                // line 92
                $context["edit"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 93
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 93, $this->source); })()), "sms:smses:editown", [], "array", false, false, false, 93), twig_get_attribute($this->env, $this->source,                 // line 94
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 94, $this->source); })()), "sms:smses:editother", [], "array", false, false, false, 94), twig_get_attribute($this->env, $this->source,                 // line 95
$context["item"], "getCreatedBy", [], "method", false, false, false, 95));
                // line 97
                echo "                        ";
                $context["customButtons"] = [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.smses.header.preview"), "data-footer" => "false", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_sms_action", ["objectId" => twig_get_attribute($this->env, $this->source,                 // line 104
$context["item"], "getId", [], "method", false, false, false, 104), "objectAction" => "preview"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.preview"), "iconClass" => "fa fa-share"]];
                // line 110
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 113
$context["item"], "templateButtons" => ["edit" =>                 // line 115
(isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 115, $this->source); })()), "clone" => twig_get_attribute($this->env, $this->source,                 // line 116
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 116, $this->source); })()), "sms:smses:create", [], "array", false, false, false, 116), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 118
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 118, $this->source); })()), "sms:smses:deleteown", [], "array", false, false, false, 118), twig_get_attribute($this->env, $this->source,                 // line 119
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 119, $this->source); })()), "sms:smses:deleteother", [], "array", false, false, false, 119), twig_get_attribute($this->env, $this->source,                 // line 120
$context["item"], "getCreatedBy", [], "method", false, false, false, 120))], "routeBase" => "sms", "customButtons" =>                 // line 124
(isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 124, $this->source); })())]);
                // line 127
                echo "</td>
                    <td>
                        <div>";
                // line 130
                echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 132
$context["item"], "model" => "sms"]);
                // line 136
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_sms_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 136)]), "html", null, true);
                echo "\">
                                ";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 137), "html", null, true);
                echo "
                                ";
                // line 138
                if (("list" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 138, $this->source); })()))) {
                    // line 139
                    echo "                                    <span data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.icon_tooltip.list_sms"), "html", null, true);
                    echo "\">
                                        <i class=\"fa fa-fw fa-pie-chart\"></i>
                                    </span>
                                ";
                }
                // line 143
                echo "                            </a>
                        </div>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 147
                $context["category"] = twig_get_attribute($this->env, $this->source, $context["item"], "getCategory", [], "method", false, false, false, 147);
                // line 148
                echo "                        ";
                $context["catName"] = (( !twig_test_empty((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 148, $this->source); })()))) ? (twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 148, $this->source); })()), "getTitle", [], "method", false, false, false, 148)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 149
                echo "                        ";
                $context["color"] = (( !twig_test_empty((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 149, $this->source); })()))) ? (("#" . twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 149, $this->source); })()), "getColor", [], "method", false, false, false, 149))) : ("inherit"));
                // line 150
                echo "                        <span style=\"white-space: nowrap;\">
                            <span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                // line 151
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 151, $this->source); })()), "html", null, true);
                echo ";\"> </span>
                            <span>";
                // line 152
                echo twig_escape_filter($this->env, (isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 152, $this->source); })()), "html", null, true);
                echo "</span>
                        </span>
                    </td>";
                // line 155
                echo twig_include($this->env, $context, "@MauticSms/Sms/list_stats.html.twig", ["item" => $context["item"]]);
                // line 156
                echo "<td class=\"visible-md visible-lg\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 156), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">";
            // line 163
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 164
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 164, $this->source); })()), "page" =>             // line 165
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 165, $this->source); })()), "limit" =>             // line 166
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 166, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_sms_index"), "sessionVar" => "sms"]);
            // line 170
            echo "</div>
";
        } elseif ( !        // line 171
(isset($context["configured"]) || array_key_exists("configured", $context) ? $context["configured"] : (function () { throw new RuntimeError('Variable "configured" does not exist.', 171, $this->source); })())) {
            // line 172
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["header" => "mautic.sms.disabled", "message" => "mautic.sms.enable.in.configuration"]);
        } else {
            // line 174
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["message" => "mautic.sms.create.in.campaign.builder"]);
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticSms/Sms/list.html.twig";
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
        return array (  270 => 174,  267 => 172,  265 => 171,  262 => 170,  260 => 166,  259 => 165,  258 => 164,  257 => 163,  252 => 159,  234 => 156,  232 => 155,  227 => 152,  223 => 151,  220 => 150,  217 => 149,  214 => 148,  212 => 147,  206 => 143,  198 => 139,  196 => 138,  192 => 137,  187 => 136,  185 => 132,  184 => 130,  180 => 127,  178 => 124,  177 => 120,  176 => 119,  175 => 118,  174 => 116,  173 => 115,  172 => 113,  171 => 110,  169 => 104,  167 => 97,  165 => 95,  164 => 94,  163 => 93,  162 => 92,  158 => 90,  155 => 89,  137 => 88,  132 => 84,  130 => 75,  126 => 73,  124 => 63,  122 => 52,  120 => 47,  119 => 41,  114 => 37,  112 => 36,  108 => 35,  100 => 31,  93 => 27,  90 => 26,  88 => 23,  87 => 20,  86 => 19,  84 => 18,  81 => 17,  77 => 16,  73 => 10,  72 => 7,  68 => 6,  61 => 5,  54 => 4,  50 => 3,  48 => 2,  46 => 1,  39 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSms/Sms/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Resources\\views\\Sms\\list.html.twig");
    }
}
