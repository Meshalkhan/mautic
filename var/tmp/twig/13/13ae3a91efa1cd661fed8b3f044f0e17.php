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

/* @MauticAsset/Asset/list.html.twig */
class __TwigTemplate_fc0ca6a756d3ab6e7ddf70bd3b75139c extends Template
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
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticAsset/Asset/list.html.twig", 4);
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

    // line 5
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "asset
";
    }

    // line 7
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.assets", [], "messages");
    }

    // line 10
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 13, $this->source); })()), "asset:assets:create", [], "array", false, false, false, 13)], "routeBase" => "asset", "langVar" => "asset.asset"]);
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "\t";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "\t\t<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">";
            // line 24
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 25
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 25, $this->source); })()), "action" =>             // line 26
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 26, $this->source); })()), "searchHelp" => "mautic.asset.asset.help.searchcommands"]);
            // line 29
            echo "<div class=\"page-list\">
\t\t\t\t";
            // line 30
            $this->displayBlock("listResults", $context, $blocks);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 34
            echo "\t\t";
            $this->displayBlock("listResults", $context, $blocks);
            echo "
\t";
        }
    }

    // line 38
    public function block_listResults($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        if (twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 39, $this->source); })()))) {
            // line 40
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-hover asset-list\" id=\"assetTable\">
            <thead>
            <tr>";
            // line 44
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#assetTable", "langVar" => "asset.asset", "routeBase" => "asset", "templateButtons" => ["delete" => (twig_get_attribute($this->env, $this->source,             // line 52
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 52, $this->source); })()), "asset:assets:deleteown", [], "array", false, false, false, 52) || twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 52, $this->source); })()), "asset:assets:deleteother", [], "array", false, false, false, 52))]]);
            // line 56
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "a.title", "text" => "mautic.core.title", "class" => "col-asset-title"]);
            // line 65
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-asset-category"]);
            // line 74
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "a.downloadCount", "text" => "mautic.asset.asset.thead.download.count", "class" => "visible-md visible-lg col-asset-download-count"]);
            // line 83
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "a.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-md visible-lg col-asset-dateAdded"]);
            // line 92
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "a.dateModified", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-md visible-lg col-asset-dateModified", "default" => true]);
            // line 102
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "a.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-md visible-lg col-asset-createdByUser"]);
            // line 111
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "a.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-asset-id"]);
            // line 120
            echo "</tr>
            </thead>
            <tbody>
            ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 123, $this->source); })()));
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
            foreach ($context['_seq'] as $context["k"] => $context["item"]) {
                // line 124
                echo "                <tr>
                    <td>";
                // line 126
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 129
$context["item"], "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 132
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 132, $this->source); })()), "asset:assets:editown", [], "array", false, false, false, 132), twig_get_attribute($this->env, $this->source,                 // line 133
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 133, $this->source); })()), "asset:assets:editother", [], "array", false, false, false, 133), twig_get_attribute($this->env, $this->source,                 // line 134
$context["item"], "getCreatedBy", [], "method", false, false, false, 134)), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 137
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 137, $this->source); })()), "asset:assets:deleteown", [], "array", false, false, false, 137), twig_get_attribute($this->env, $this->source,                 // line 138
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 138, $this->source); })()), "asset:assets:deleteother", [], "array", false, false, false, 138), twig_get_attribute($this->env, $this->source,                 // line 139
$context["item"], "getCreatedBy", [], "method", false, false, false, 139)), "clone" => twig_get_attribute($this->env, $this->source,                 // line 141
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 141, $this->source); })()), "asset:assets:create", [], "array", false, false, false, 141)], "routeBase" => "asset", "langVar" => "asset.asset", "nameGetter" => "getTitle", "customButtons" => [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#AssetPreviewModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_asset_action", ["objectAction" => "preview", "objectId" => twig_get_attribute($this->env, $this->source,                 // line 153
$context["item"], "getId", [], "method", false, false, false, 153)])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.asset.asset.preview"), "iconClass" => "ri-image-circle-line"]]]);
                // line 162
                echo "</td>
                    <td>
                        <div>";
                // line 165
                echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 168
$context["item"], "model" => "asset.asset"]);
                // line 172
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_asset_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source,                 // line 174
$context["item"], "getId", [], "method", false, false, false, 174)]), "html", null, true);
                // line 175
                echo "\"
                               data-toggle=\"ajax\">
                                ";
                // line 177
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getTitle", [], "method", false, false, false, 177), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getAlias", [], "method", false, false, false, 177), "html", null, true);
                echo ")
                            </a>
                            <i class=\"";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getIconClass", [], "method", false, false, false, 179), "html", null, true);
                echo "\"></i>
                        </div>
                        ";
                // line 181
                $context["description"] = twig_get_attribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 181);
                // line 182
                echo "                        ";
                if ((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 182, $this->source); })())) {
                    // line 183
                    echo "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 184
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 184, $this->source); })()));
                    echo "</small>
                            </div>
                        ";
                }
                // line 187
                echo "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 189
                $context["category"] = twig_get_attribute($this->env, $this->source, $context["item"], "getCategory", [], "method", false, false, false, 189);
                // line 190
                echo "                        ";
                list($context["catName"], $context["color"]) =                 [(((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 190, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 190, $this->source); })()), "getTitle", [], "method", false, false, false, 190)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))), (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 190, $this->source); })())) ? (("#" . twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 190, $this->source); })()), "getColor", [], "method", false, false, false, 190))) : ("inherit"))];
                // line 191
                echo "                        <span style=\"white-space: nowrap;\"><span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 191, $this->source); })()), "html", null, true);
                echo ";\"> </span> <span>";
                echo twig_escape_filter($this->env, (isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 191, $this->source); })()), "html", null, true);
                echo "</span></span>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 193
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getDownloadCount", [], "method", false, false, false, 193), "html", null, true);
                echo "</td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 194
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 194)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 194))) : (""));
                echo "\">
                        ";
                // line 195
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 195)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 195))) : (""));
                echo "
                    </td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 197
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 197)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 197))) : (""));
                echo "\">
                        ";
                // line 198
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 198)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 198))) : (""));
                echo "
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 200
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getCreatedByUser", [], "method", false, false, false, 200), "html", null, true);
                echo "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 201
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 201), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "            </tbody>
        </table>
    </div>

    <div class=\"panel-footer\">";
            // line 209
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => twig_length_filter($this->env,             // line 210
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 210, $this->source); })())), "page" =>             // line 211
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 211, $this->source); })()), "limit" =>             // line 212
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 212, $this->source); })()), "menuLinkId" => "mautic_asset_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_asset_index"), "sessionVar" => "asset"]);
            // line 217
            echo "</div>
";
        } else {
            // line 219
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.asset.noresults.tip"]);
        }
        // line 222
        echo twig_include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "AssetPreviewModal", "header" => false]);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticAsset/Asset/list.html.twig";
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
        return array (  294 => 222,  291 => 219,  287 => 217,  285 => 212,  284 => 211,  283 => 210,  282 => 209,  276 => 204,  259 => 201,  255 => 200,  250 => 198,  246 => 197,  241 => 195,  237 => 194,  233 => 193,  225 => 191,  222 => 190,  220 => 189,  216 => 187,  210 => 184,  207 => 183,  204 => 182,  202 => 181,  197 => 179,  190 => 177,  186 => 175,  184 => 174,  182 => 172,  180 => 168,  179 => 165,  175 => 162,  173 => 153,  172 => 141,  171 => 139,  170 => 138,  169 => 137,  168 => 134,  167 => 133,  166 => 132,  165 => 129,  164 => 126,  161 => 124,  144 => 123,  139 => 120,  137 => 111,  135 => 102,  133 => 92,  131 => 83,  129 => 74,  127 => 65,  125 => 56,  123 => 52,  122 => 44,  117 => 40,  115 => 39,  111 => 38,  103 => 34,  96 => 30,  93 => 29,  91 => 26,  90 => 25,  89 => 24,  87 => 22,  84 => 21,  80 => 20,  76 => 13,  75 => 11,  71 => 10,  66 => 8,  62 => 7,  54 => 5,  50 => 4,  48 => 2,  46 => 1,  39 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticAsset/Asset/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Resources\\views\\Asset\\list.html.twig");
    }
}
