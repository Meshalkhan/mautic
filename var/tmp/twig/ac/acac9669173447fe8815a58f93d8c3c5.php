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

/* @MauticCategory/Category/list.html.twig */
class __TwigTemplate_f4c65e031cf44a573a43b3acab935e61 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'muaticContent' => [$this, 'block_muaticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
            'listResults' => [$this, 'block_listResults'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticCategory/Category/list.html.twig", 4);
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
    public function block_muaticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "category
";
    }

    // line 8
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.category.header.index", [], "messages");
    }

    // line 12
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 15, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 15, $this->source); })()) . ":create"), [], "array", false, false, false, 15)], "routeBase" => "category", "query" => ["bundle" =>         // line 19
(isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 19, $this->source); })()), "show_bundle_select" => true], "editMode" => "ajaxModal", "editAttr" => ["data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.category.header.new"), "data-toggle" => "ajaxmodal"]]);
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "\t";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "\t\t<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
\t\t\t";
            // line 35
            echo "\t\t\t";
            // line 39
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 40
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 40, $this->source); })()), "searchHelp" => "mautic.category.help.searchcommands", "filters" => ["bundle" => ["options" =>             // line 44
(isset($context["categoryTypes"]) || array_key_exists("categoryTypes", $context) ? $context["categoryTypes"] : (function () { throw new RuntimeError('Variable "categoryTypes" does not exist.', 44, $this->source); })()), "values" => [            // line 45
(isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 45, $this->source); })())], "translateLabels" => true]], "action" =>             // line 49
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 49, $this->source); })())]);
            // line 51
            echo "<div class=\"page-list\"> 
                ";
            // line 52
            $this->displayBlock("listResults", $context, $blocks);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 56
            echo "\t\t";
            $this->displayBlock("listResults", $context, $blocks);
            echo "
\t";
        }
        // line 58
        echo "
";
    }

    // line 62
    public function block_listResults($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "\t";
        if (twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 63, $this->source); })()))) {
            // line 64
            echo "\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover category-list\" id=\"categoryTable\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>";
            // line 68
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#categoryTable", "routeBase" => "category", "templateButtons" => ["delete" => twig_get_attribute($this->env, $this->source,             // line 73
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 73, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 73, $this->source); })()) . ":delete"), [], "array", false, false, false, 73)], "query" => ["bundle" =>             // line 76
(isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 76, $this->source); })())]]);
            // line 80
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "category", "text" => "", "class" => "col-category-color"]);
            // line 89
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "category", "orderBy" => "c.title", "text" => "mautic.core.title", "class" => "col-category-title", "default" => true]);
            // line 97
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "category", "orderBy" => "c.bundle", "text" => "mautic.core.type", "class" => "visible-md visible-lg col-page-bundle"]);
            // line 104
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "category", "orderBy" => "c.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-page-id"]);
            // line 110
            echo "</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 113, $this->source); })()));
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
                // line 114
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 116
                $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.category.header.edit", ["%type%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((("mautic." . twig_get_attribute($this->env, $this->source, $context["item"], "getBundle", [], "method", false, false, false, 116)) . ".") . twig_get_attribute($this->env, $this->source, $context["item"], "getBundle", [], "method", false, false, false, 116))), "%name%" => twig_get_attribute($this->env, $this->source, $context["item"], "getTitle", [], "method", false, false, false, 116)]);
                // line 117
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 118
$context["item"], "templateButtons" => ["edit" => twig_get_attribute($this->env, $this->source,                 // line 120
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 120, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 120, $this->source); })()) . ":edit"), [], "array", false, false, false, 120), "delete" => twig_get_attribute($this->env, $this->source,                 // line 121
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 121, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 121, $this->source); })()) . ":delete"), [], "array", false, false, false, 121)], "editMode" => "ajaxmodal", "editAttr" => ["data-target" => "#MauticSharedModal", "data-header" =>                 // line 126
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 126, $this->source); })()), "data-toggle" => "ajaxmodal"], "routeBase" => "category", "query" => ["bundle" =>                 // line 131
(isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 131, $this->source); })())]]);
                // line 134
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 136
                $context["color"] = twig_get_attribute($this->env, $this->source, $context["item"], "getColor", [], "method", false, false, false, 136);
                // line 137
                echo "\t\t\t\t\t\t\t\t<span class=\"label label-default pa-10\" style=\"background: ";
                echo ((!twig_in_filter("#", (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 137, $this->source); })()))) ? ("#") : (""));
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 137, $this->source); })()), "html", null, true);
                echo ";\"> </span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
                                <div>";
                // line 141
                echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 142
$context["item"], "model" => "category", "query" => ("bundle=" . (isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 142, $this->source); })()))]);
                // line 143
                if (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 143, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 143, $this->source); })()) . ":edit"), [], "array", false, false, false, 143)) {
                    // line 144
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_category_action", ["bundle" =>                     // line 145
(isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 145, $this->source); })()), "objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 145)]), "html", null, true);
                    echo "\" data-toggle=\"ajaxmodal\" data-target=\"#MauticSharedModal\" data-header=\"";
                    echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 145, $this->source); })()), "html", null, true);
                    echo "\"
                                    ";
                }
                // line 147
                echo "                                    <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getTitle", [], "method", false, false, false, 147), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getAlias", [], "method", false, false, false, 147), "html", null, true);
                echo ")</span>
                                    ";
                // line 148
                if (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 148, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 148, $this->source); })()) . ":edit"), [], "array", false, false, false, 148)) {
                    // line 149
                    echo "                                        </a>
                                    ";
                }
                // line 151
                echo "                                </div>
                                ";
                // line 152
                $context["description"] = twig_get_attribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 152);
                // line 153
                echo "                                ";
                if ((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 153, $this->source); })())) {
                    // line 154
                    echo "                                    <div class=\"text-muted mt-4\">
                                        <small>";
                    // line 155
                    echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 155, $this->source); })()), "html", null, true);
                    echo "</small>
                                    </div>
                                ";
                }
                // line 158
                echo "                            </td>
                            <td class=\"visible-md visible-lg\">
                                ";
                // line 160
                if (twig_get_attribute($this->env, $this->source, ($context["categoryTypes"] ?? null), twig_get_attribute($this->env, $this->source, $context["item"], "getBundle", [], "method", false, false, false, 160), [], "array", true, true, false, 160)) {
                    // line 161
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["categoryTypes"]) || array_key_exists("categoryTypes", $context) ? $context["categoryTypes"] : (function () { throw new RuntimeError('Variable "categoryTypes" does not exist.', 161, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "getBundle", [], "method", false, false, false, 161), [], "array", false, false, false, 161)), "html", null, true);
                    echo "
                                ";
                }
                // line 163
                echo "                            </td>
                            <td class=\"visible-md visible-lg\">";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 164), "html", null, true);
                echo "</td>
\t\t\t\t\t\t</tr>
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
            // line 167
            echo "\t\t\t\t\t</table>
\t\t\t\t\t<div class=\"panel-footer\">";
            // line 169
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => twig_length_filter($this->env,             // line 171
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 171, $this->source); })())), "page" =>             // line 172
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 172, $this->source); })()), "limit" =>             // line 173
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 173, $this->source); })()), "menuLinkId" => "mautic_category_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_category_index", ["bundle" => ((("category" ==             // line 178
(isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 178, $this->source); })()))) ? ("all") : ((isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 178, $this->source); })())))]), "sessionVar" => "category"]);
            // line 182
            echo "</div>
\t\t\t\t</tbody>
\t\t\t</div>
\t\t";
        } else {
            // line 186
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.category.noresults.tip"]);
        }
        // line 188
        echo "\t";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCategory/Category/list.html.twig";
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
        return array (  287 => 188,  284 => 186,  278 => 182,  276 => 178,  275 => 173,  274 => 172,  273 => 171,  272 => 169,  269 => 167,  252 => 164,  249 => 163,  243 => 161,  241 => 160,  237 => 158,  231 => 155,  228 => 154,  225 => 153,  223 => 152,  220 => 151,  216 => 149,  214 => 148,  207 => 147,  200 => 145,  198 => 144,  196 => 143,  194 => 142,  193 => 141,  185 => 137,  183 => 136,  179 => 134,  177 => 131,  176 => 126,  175 => 121,  174 => 120,  173 => 118,  172 => 117,  170 => 116,  166 => 114,  149 => 113,  144 => 110,  142 => 104,  140 => 97,  138 => 89,  136 => 80,  134 => 76,  133 => 73,  132 => 68,  127 => 64,  124 => 63,  120 => 62,  115 => 58,  109 => 56,  102 => 52,  99 => 51,  97 => 49,  96 => 45,  95 => 44,  94 => 40,  93 => 39,  91 => 35,  88 => 33,  85 => 32,  81 => 31,  77 => 19,  76 => 15,  75 => 13,  71 => 12,  66 => 9,  62 => 8,  54 => 6,  50 => 4,  48 => 2,  46 => 1,  39 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCategory/Category/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CategoryBundle\\Resources\\views\\Category\\list.html.twig");
    }
}
