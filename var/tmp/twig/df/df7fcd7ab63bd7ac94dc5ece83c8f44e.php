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

/* @MauticCategory/Category/list.html.twig */
class __TwigTemplate_db739e6eb5cd42d46b52b759dbef6494 extends Template
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
            'muaticContent' => [$this, 'block_muaticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
            'listResults' => [$this, 'block_listResults'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticCategory/Category/list.html.twig", 4);
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

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_muaticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "category
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "\t";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.category.header.index", [], "messages");
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,         // line 15
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 15, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 15, $this->source); })()) . ":create"), [], "array", false, false, false, 15)], "routeBase" => "category", "query" => ["bundle" =>         // line 19
(isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 19, $this->source); })()), "show_bundle_select" => true], "editMode" => "ajaxModal", "editAttr" => ["data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.category.header.new"), "data-toggle" => "ajaxmodal"]]);
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "\t";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 32, $this->source); })())) {
            // line 33
            yield "\t\t<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
\t\t\t";
            // line 35
            yield "\t\t\t";
            // line 39
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 40
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 40, $this->source); })()), "searchHelp" => "mautic.category.help.searchcommands", "filters" => ["bundle" => ["options" =>             // line 44
(isset($context["categoryTypes"]) || array_key_exists("categoryTypes", $context) ? $context["categoryTypes"] : (function () { throw new RuntimeError('Variable "categoryTypes" does not exist.', 44, $this->source); })()), "values" => [            // line 45
(isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 45, $this->source); })())], "translateLabels" => true]], "action" =>             // line 49
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 49, $this->source); })())]);
            // line 51
            yield "<div class=\"page-list\"> 
                ";
            // line 52
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 56
            yield "\t\t";
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
\t";
        }
        // line 58
        yield "
";
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_listResults(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "\t";
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 63, $this->source); })()))) {
            // line 64
            yield "\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover category-list\" id=\"categoryTable\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>";
            // line 68
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#categoryTable", "routeBase" => "category", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 73
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 73, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 73, $this->source); })()) . ":delete"), [], "array", false, false, false, 73)], "query" => ["bundle" =>             // line 76
(isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 76, $this->source); })())]]);
            // line 80
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "category", "text" => "", "class" => "col-category-color"]);
            // line 89
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "category", "orderBy" => "c.title", "text" => "mautic.core.title", "class" => "col-category-title", "default" => true]);
            // line 97
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "category", "orderBy" => "c.bundle", "text" => "mautic.core.type", "class" => "visible-md visible-lg col-page-bundle"]);
            // line 104
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "category", "orderBy" => "c.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-page-id"]);
            // line 110
            yield "</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 113, $this->source); })()));
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
                yield "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 116
                $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.category.header.edit", ["%type%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((("mautic." . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getBundle", [], "method", false, false, false, 116)) . ".") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getBundle", [], "method", false, false, false, 116))), "%name%" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getTitle", [], "method", false, false, false, 116)]);
                // line 117
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 118
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,                 // line 120
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 120, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 120, $this->source); })()) . ":edit"), [], "array", false, false, false, 120), "delete" => CoreExtension::getAttribute($this->env, $this->source,                 // line 121
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 121, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 121, $this->source); })()) . ":delete"), [], "array", false, false, false, 121)], "editMode" => "ajaxmodal", "editAttr" => ["data-target" => "#MauticSharedModal", "data-header" =>                 // line 126
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 126, $this->source); })()), "data-toggle" => "ajaxmodal"], "routeBase" => "category", "query" => ["bundle" =>                 // line 131
(isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 131, $this->source); })())]]);
                // line 134
                yield "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 136
                $context["color"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getColor", [], "method", false, false, false, 136);
                // line 137
                yield "\t\t\t\t\t\t\t\t<span class=\"label label-default pa-10\" style=\"background: ";
                yield ((!CoreExtension::inFilter("#", (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 137, $this->source); })()))) ? ("#") : (""));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 137, $this->source); })()), "html", null, true);
                yield ";\"> </span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
                                <div>";
                // line 141
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 142
$context["item"], "model" => "category", "query" => ("bundle=" . (isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 142, $this->source); })()))]);
                // line 143
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 143, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 143, $this->source); })()) . ":edit"), [], "array", false, false, false, 143)) {
                    // line 144
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_category_action", ["bundle" =>                     // line 145
(isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 145, $this->source); })()), "objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 145)]), "html", null, true);
                    yield "\" data-toggle=\"ajaxmodal\" data-target=\"#MauticSharedModal\" data-header=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 145, $this->source); })()), "html", null, true);
                    yield "\"
                                    ";
                }
                // line 147
                yield "                                    <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getTitle", [], "method", false, false, false, 147), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getAlias", [], "method", false, false, false, 147), "html", null, true);
                yield ")</span>
                                    ";
                // line 148
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 148, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 148, $this->source); })()) . ":edit"), [], "array", false, false, false, 148)) {
                    // line 149
                    yield "                                        </a>
                                    ";
                }
                // line 151
                yield "                                </div>
                                ";
                // line 152
                $context["description"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 152);
                // line 153
                yield "                                ";
                if ((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 153, $this->source); })())) {
                    // line 154
                    yield "                                    <div class=\"text-muted mt-4\">
                                        <small>";
                    // line 155
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 155, $this->source); })()), "html", null, true);
                    yield "</small>
                                    </div>
                                ";
                }
                // line 158
                yield "                            </td>
                            <td class=\"visible-md visible-lg\">
                                ";
                // line 160
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["categoryTypes"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getBundle", [], "method", false, false, false, 160), [], "array", true, true, false, 160)) {
                    // line 161
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categoryTypes"]) || array_key_exists("categoryTypes", $context) ? $context["categoryTypes"] : (function () { throw new RuntimeError('Variable "categoryTypes" does not exist.', 161, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getBundle", [], "method", false, false, false, 161), [], "array", false, false, false, 161)), "html", null, true);
                    yield "
                                ";
                }
                // line 163
                yield "                            </td>
                            <td class=\"visible-md visible-lg\">";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 164), "html", null, true);
                yield "</td>
\t\t\t\t\t\t</tr>
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            yield "\t\t\t\t\t</table>
\t\t\t\t\t<div class=\"panel-footer\">";
            // line 169
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 171
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 171, $this->source); })())), "page" =>             // line 172
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 172, $this->source); })()), "limit" =>             // line 173
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 173, $this->source); })()), "menuLinkId" => "mautic_category_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_category_index", ["bundle" => ((("category" ==             // line 178
(isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 178, $this->source); })()))) ? ("all") : ((isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 178, $this->source); })())))]), "sessionVar" => "category"]);
            // line 182
            yield "</div>
\t\t\t\t</tbody>
\t\t\t</div>
\t\t";
        } else {
            // line 186
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.category.noresults.tip"]);
        }
        // line 188
        yield "\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCategory/Category/list.html.twig";
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
        return array (  311 => 188,  308 => 186,  302 => 182,  300 => 178,  299 => 173,  298 => 172,  297 => 171,  296 => 169,  293 => 167,  276 => 164,  273 => 163,  267 => 161,  265 => 160,  261 => 158,  255 => 155,  252 => 154,  249 => 153,  247 => 152,  244 => 151,  240 => 149,  238 => 148,  231 => 147,  224 => 145,  222 => 144,  220 => 143,  218 => 142,  217 => 141,  209 => 137,  207 => 136,  203 => 134,  201 => 131,  200 => 126,  199 => 121,  198 => 120,  197 => 118,  196 => 117,  194 => 116,  190 => 114,  173 => 113,  168 => 110,  166 => 104,  164 => 97,  162 => 89,  160 => 80,  158 => 76,  157 => 73,  156 => 68,  151 => 64,  148 => 63,  141 => 62,  135 => 58,  129 => 56,  122 => 52,  119 => 51,  117 => 49,  116 => 45,  115 => 44,  114 => 40,  113 => 39,  111 => 35,  108 => 33,  105 => 32,  98 => 31,  93 => 19,  92 => 15,  91 => 13,  84 => 12,  78 => 9,  71 => 8,  59 => 6,  55 => 4,  53 => 2,  51 => 1,  44 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCategory/Category/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CategoryBundle\\Resources\\views\\Category\\list.html.twig");
    }
}
