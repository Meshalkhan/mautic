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

/* @MauticCampaign/Campaign/list.html.twig */
class __TwigTemplate_3de52ebdea29405a948e082f67c75248 extends Template
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
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticCampaign/Campaign/list.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()) == "index")) ? (true) : (false));
        // line 2
        $context["tmpl"] = "list";
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.campaigns"), "html", null, true);
    }

    // line 8
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 11, $this->source); })()), "campaign:campaigns:create", [], "array", false, false, false, 11)], "routeBase" => "campaign", "langVar" => "campaign.campaigns"]);
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "    <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">";
            // line 21
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 22
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 22, $this->source); })()), "searchHelp" => ((            // line 23
array_key_exists("searchHelp", $context)) ? (_twig_default_filter((isset($context["searchHelp"]) || array_key_exists("searchHelp", $context) ? $context["searchHelp"] : (function () { throw new RuntimeError('Variable "searchHelp" does not exist.', 23, $this->source); })()), null)) : (null)), "action" =>             // line 24
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 24, $this->source); })()), "actionRoute" =>             // line 25
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 25, $this->source); })()), "indexRoute" =>             // line 26
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 26, $this->source); })()), "translationBase" =>             // line 27
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 27, $this->source); })()), "preCustomButtons" => ((            // line 28
array_key_exists("toolBarButtons", $context)) ? (_twig_default_filter((isset($context["toolBarButtons"]) || array_key_exists("toolBarButtons", $context) ? $context["toolBarButtons"] : (function () { throw new RuntimeError('Variable "toolBarButtons" does not exist.', 28, $this->source); })()), null)) : (null)), "templateButtons" => ["delete" => twig_get_attribute($this->env, $this->source,             // line 30
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 30, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 30, $this->source); })()) . ":delete"), [], "array", false, false, false, 30)], "filters" => ((            // line 32
array_key_exists("filters", $context)) ? (_twig_default_filter((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 32, $this->source); })()), [])) : ([]))]);
            // line 34
            echo "<div class=\"page-list\">";
            // line 35
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("content.above", $context);
        }
        // line 37
        echo "
  ";
        // line 38
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 38, $this->source); })())) > 0)) {
            // line 39
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-hover campaign-list\" id=\"campaignTable\">
          <thead>
            <tr>";
            // line 43
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#campaignTable", "routeBase" => "campaign", "templateButtons" => ["delete" => (twig_get_attribute($this->env, $this->source,             // line 48
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 48, $this->source); })()), "campaign:campaigns:deleteown", [], "array", false, false, false, 48) || twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 48, $this->source); })()), "campaign:campaigns:deleteother", [], "array", false, false, false, 48))]]);
            // line 52
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.name", "text" => "mautic.core.name", "class" => "col-campaign-name"]);
            // line 59
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "cat.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-campaign-category"]);
            // line 66
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-md visible-lg col-campaign-dateAdded"]);
            // line 73
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.dateModified", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-md visible-lg col-campaign-dateModified", "default" => true]);
            // line 81
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-md visible-lg col-campaign-createdByUser"]);
            // line 88
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-campaign-id"]);
            // line 94
            echo "</tr>
          </thead>
          <tbody>
            ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 97, $this->source); })()));
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
                // line 98
                echo "                <tr>
                    <td>";
                // line 100
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 101
$context["item"], "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 104
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 104, $this->source); })()), "campaign:campaigns:editown", [], "array", false, false, false, 104), twig_get_attribute($this->env, $this->source,                 // line 105
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 105, $this->source); })()), "campaign:campaigns:editother", [], "array", false, false, false, 105), twig_get_attribute($this->env, $this->source,                 // line 106
$context["item"], "createdBy", [], "any", false, false, false, 106)), "clone" => twig_get_attribute($this->env, $this->source,                 // line 108
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 108, $this->source); })()), "campaign:campaigns:create", [], "array", false, false, false, 108), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 110
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 110, $this->source); })()), "campaign:campaigns:deleteown", [], "array", false, false, false, 110), twig_get_attribute($this->env, $this->source,                 // line 111
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 111, $this->source); })()), "campaign:campaigns:deleteother", [], "array", false, false, false, 111), twig_get_attribute($this->env, $this->source,                 // line 112
$context["item"], "createdBy", [], "any", false, false, false, 112))], "routeBase" => "campaign"]);
                // line 117
                echo "</td>
                    <td>
                        <div>";
                // line 120
                echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 121
$context["item"], "model" => "campaign", "onclick" => twig_get_attribute($this->env, $this->source,                 // line 123
$context["item"], "onclickMethod", [], "any", false, false, false, 123), "attributes" => twig_get_attribute($this->env, $this->source,                 // line 124
$context["item"], "dataAttributes", [], "any", false, false, false, 124), "transKeys" => twig_get_attribute($this->env, $this->source,                 // line 125
$context["item"], "translationKeysDataAttributes", [], "any", false, false, false, 125)]);
                // line 127
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 127)]), "html", null, true);
                echo "\" data-toggle=\"ajax\">";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 128), "html", null, true);
                // line 129
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("campaign.name", twig_array_merge($context, ["item" => $context["item"]]));
                // line 130
                echo "</a>
                        </div>";
                // line 132
                if (twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 132)) {
                    // line 133
                    echo "<div class=\"text-muted mt-4\"><small>";
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 133));
                    echo "</small></div>";
                }
                // line 135
                echo "</td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 137
                $context["category"] = twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 137);
                // line 138
                echo "                        ";
                list($context["catName"], $context["color"]) =                 [(((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 138, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 138, $this->source); })()), "title", [], "any", false, false, false, 138)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))), (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 138, $this->source); })())) ? (("#" . twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 138, $this->source); })()), "color", [], "any", false, false, false, 138))) : ("inherit"))];
                // line 139
                echo "                        <span style=\"white-space: nowrap;\"><span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 139, $this->source); })()), "html", null, true);
                echo ";\"> </span> <span>";
                echo twig_escape_filter($this->env, (isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 139, $this->source); })()), "html", null, true);
                echo "</span></span>
                    </td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 141
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "dateAdded", [], "any", false, false, false, 141)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, $context["item"], "dateAdded", [], "any", false, false, false, 141))) : (""));
                echo "\">
                        ";
                // line 142
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "dateAdded", [], "any", false, false, false, 142)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, $context["item"], "dateAdded", [], "any", false, false, false, 142))) : (""));
                echo "
                    </td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 144
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "dateModified", [], "any", false, false, false, 144)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, $context["item"], "dateModified", [], "any", false, false, false, 144))) : (""));
                echo "\">
                        ";
                // line 145
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "dateModified", [], "any", false, false, false, 145)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, $context["item"], "dateModified", [], "any", false, false, false, 145))) : (""));
                echo "
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "createdByUser", [], "any", false, false, false, 147), "html", null, true);
                echo "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 148), "html", null, true);
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
            // line 151
            echo "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">";
            // line 155
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => twig_length_filter($this->env,             // line 156
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 156, $this->source); })())), "page" =>             // line 157
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 157, $this->source); })()), "limit" =>             // line 158
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 158, $this->source); })()), "menuLinkId" => "mautic_campaign_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_index"), "sessionVar" => "campaign"]);
            // line 163
            echo "</div>
  ";
        } else {
            // line 165
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.campaign.noresults.tip"]);
        }
        // line 167
        echo "
  ";
        // line 168
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 168, $this->source); })())) {
            // line 169
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("content.below", $context);
            // line 170
            echo "</div>
    </div>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCampaign/Campaign/list.html.twig";
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
        return array (  261 => 170,  259 => 169,  257 => 168,  254 => 167,  251 => 165,  247 => 163,  245 => 158,  244 => 157,  243 => 156,  242 => 155,  237 => 151,  220 => 148,  216 => 147,  211 => 145,  207 => 144,  202 => 142,  198 => 141,  190 => 139,  187 => 138,  185 => 137,  181 => 135,  176 => 133,  174 => 132,  171 => 130,  169 => 129,  167 => 128,  163 => 127,  161 => 125,  160 => 124,  159 => 123,  158 => 121,  157 => 120,  153 => 117,  151 => 112,  150 => 111,  149 => 110,  148 => 108,  147 => 106,  146 => 105,  145 => 104,  144 => 101,  143 => 100,  140 => 98,  123 => 97,  118 => 94,  116 => 88,  114 => 81,  112 => 73,  110 => 66,  108 => 59,  106 => 52,  104 => 48,  103 => 43,  98 => 39,  96 => 38,  93 => 37,  90 => 35,  88 => 34,  86 => 32,  85 => 30,  84 => 28,  83 => 27,  82 => 26,  81 => 25,  80 => 24,  79 => 23,  78 => 22,  77 => 21,  75 => 20,  72 => 19,  68 => 18,  64 => 11,  63 => 9,  59 => 8,  52 => 6,  48 => 4,  46 => 2,  44 => 1,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCampaign/Campaign/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Campaign\\list.html.twig");
    }
}
