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

/* @MauticAsset/Asset/list.html.twig */
class __TwigTemplate_2844f166d946b7a3d5ae3d47ca63b5e6 extends Template
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
            'content' => [$this, 'block_content'],
            'listResults' => [$this, 'block_listResults'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticAsset/Asset/list.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()) == "index")) ? (true) : (false));
        // line 2
        $context["tmpl"] = "list";
        // line 4
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "asset
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "\t";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.assets", [], "messages");
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,         // line 13
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 13, $this->source); })()), "asset:assets:create", [], "array", false, false, false, 13)], "routeBase" => "asset", "langVar" => "asset.asset"]);
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "\t";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 21, $this->source); })())) {
            // line 22
            yield "\t\t<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">";
            // line 24
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 25
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 25, $this->source); })()), "action" =>             // line 26
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 26, $this->source); })()), "searchHelp" => "mautic.asset.asset.help.searchcommands"]);
            // line 29
            yield "<div class=\"page-list\">
\t\t\t\t";
            // line 30
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 34
            yield "\t\t";
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
\t";
        }
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_listResults(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 39, $this->source); })()))) {
            // line 40
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover asset-list\" id=\"assetTable\">
            <thead>
            <tr>";
            // line 44
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#assetTable", "langVar" => "asset.asset", "routeBase" => "asset", "templateButtons" => ["delete" => (CoreExtension::getAttribute($this->env, $this->source,             // line 52
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 52, $this->source); })()), "asset:assets:deleteown", [], "array", false, false, false, 52) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 52, $this->source); })()), "asset:assets:deleteother", [], "array", false, false, false, 52))]]);
            // line 56
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "a.title", "text" => "mautic.core.title", "class" => "col-asset-title"]);
            // line 65
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-asset-category"]);
            // line 74
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "a.downloadCount", "text" => "mautic.asset.asset.thead.download.count", "class" => "visible-md visible-lg col-asset-download-count"]);
            // line 83
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "a.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-md visible-lg col-asset-dateAdded"]);
            // line 92
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "a.dateModified", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-md visible-lg col-asset-dateModified", "default" => true]);
            // line 102
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "a.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-md visible-lg col-asset-createdByUser"]);
            // line 111
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "asset", "orderBy" => "a.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-asset-id"]);
            // line 120
            yield "</tr>
            </thead>
            <tbody>
            ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 123, $this->source); })()));
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
                yield "                <tr>
                    <td>";
                // line 126
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 129
$context["item"], "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 132
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 132, $this->source); })()), "asset:assets:editown", [], "array", false, false, false, 132), CoreExtension::getAttribute($this->env, $this->source,                 // line 133
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 133, $this->source); })()), "asset:assets:editother", [], "array", false, false, false, 133), CoreExtension::getAttribute($this->env, $this->source,                 // line 134
$context["item"], "getCreatedBy", [], "method", false, false, false, 134)), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 137
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 137, $this->source); })()), "asset:assets:deleteown", [], "array", false, false, false, 137), CoreExtension::getAttribute($this->env, $this->source,                 // line 138
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 138, $this->source); })()), "asset:assets:deleteother", [], "array", false, false, false, 138), CoreExtension::getAttribute($this->env, $this->source,                 // line 139
$context["item"], "getCreatedBy", [], "method", false, false, false, 139)), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 141
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 141, $this->source); })()), "asset:assets:create", [], "array", false, false, false, 141)], "routeBase" => "asset", "langVar" => "asset.asset", "nameGetter" => "getTitle", "customButtons" => [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#AssetPreviewModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_asset_action", ["objectAction" => "preview", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 153
$context["item"], "getId", [], "method", false, false, false, 153)])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.asset.asset.preview"), "iconClass" => "ri-image-circle-line"]]]);
                // line 162
                yield "</td>
                    <td>
                        <div>";
                // line 165
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 168
$context["item"], "model" => "asset.asset"]);
                // line 172
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_asset_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 174
$context["item"], "getId", [], "method", false, false, false, 174)]), "html", null, true);
                // line 175
                yield "\"
                               data-toggle=\"ajax\">
                                ";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getTitle", [], "method", false, false, false, 177), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getAlias", [], "method", false, false, false, 177), "html", null, true);
                yield ")
                            </a>
                            <i class=\"";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getIconClass", [], "method", false, false, false, 179), "html", null, true);
                yield "\"></i>
                        </div>
                        ";
                // line 181
                $context["description"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 181);
                // line 182
                yield "                        ";
                if ((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 182, $this->source); })())) {
                    // line 183
                    yield "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 184
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 184, $this->source); })()));
                    yield "</small>
                            </div>
                        ";
                }
                // line 187
                yield "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 189
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCategory", [], "method", false, false, false, 189);
                // line 190
                yield "                        ";
                [$context["catName"], $context["color"]] =                 [(((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 190, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 190, $this->source); })()), "getTitle", [], "method", false, false, false, 190)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))), (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 190, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 190, $this->source); })()), "getColor", [], "method", false, false, false, 190))) : ("inherit"))];
                // line 191
                yield "                        <span style=\"white-space: nowrap;\"><span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 191, $this->source); })()), "html", null, true);
                yield ";\"> </span> <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 191, $this->source); })()), "html", null, true);
                yield "</span></span>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 193
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDownloadCount", [], "method", false, false, false, 193), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 194
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 194)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 194))) : (""));
                yield "\">
                        ";
                // line 195
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 195)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 195))) : (""));
                yield "
                    </td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 197
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 197)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 197))) : (""));
                yield "\">
                        ";
                // line 198
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 198)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 198))) : (""));
                yield "
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCreatedByUser", [], "method", false, false, false, 200), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 201
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 201), "html", null, true);
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
            unset($context['_seq'], $context['k'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            yield "            </tbody>
        </table>
    </div>

    <div class=\"panel-footer\">";
            // line 209
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 210
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 210, $this->source); })())), "page" =>             // line 211
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 211, $this->source); })()), "limit" =>             // line 212
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 212, $this->source); })()), "menuLinkId" => "mautic_asset_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_asset_index"), "sessionVar" => "asset"]);
            // line 217
            yield "</div>
";
        } else {
            // line 219
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.asset.noresults.tip"]);
        }
        // line 222
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "AssetPreviewModal", "header" => false]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticAsset/Asset/list.html.twig";
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
        return array (  318 => 222,  315 => 219,  311 => 217,  309 => 212,  308 => 211,  307 => 210,  306 => 209,  300 => 204,  283 => 201,  279 => 200,  274 => 198,  270 => 197,  265 => 195,  261 => 194,  257 => 193,  249 => 191,  246 => 190,  244 => 189,  240 => 187,  234 => 184,  231 => 183,  228 => 182,  226 => 181,  221 => 179,  214 => 177,  210 => 175,  208 => 174,  206 => 172,  204 => 168,  203 => 165,  199 => 162,  197 => 153,  196 => 141,  195 => 139,  194 => 138,  193 => 137,  192 => 134,  191 => 133,  190 => 132,  189 => 129,  188 => 126,  185 => 124,  168 => 123,  163 => 120,  161 => 111,  159 => 102,  157 => 92,  155 => 83,  153 => 74,  151 => 65,  149 => 56,  147 => 52,  146 => 44,  141 => 40,  139 => 39,  132 => 38,  123 => 34,  116 => 30,  113 => 29,  111 => 26,  110 => 25,  109 => 24,  107 => 22,  104 => 21,  97 => 20,  92 => 13,  91 => 11,  84 => 10,  78 => 8,  71 => 7,  59 => 5,  55 => 4,  53 => 2,  51 => 1,  44 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticAsset/Asset/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Resources\\views\\Asset\\list.html.twig");
    }
}
