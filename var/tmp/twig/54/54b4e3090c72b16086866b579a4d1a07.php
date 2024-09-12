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

/* @MauticSms/Sms/list.html.twig */
class __TwigTemplate_7b3baff251a771d2ea5c2221a4436f4e extends Template
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
        // line 3
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 3, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticSms/Sms/list.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()) == "index")) ? (true) : (false));
        // line 2
        $context["tmpl"] = "list";
        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "sms";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.smses"), "html", null, true);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,         // line 10
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 10, $this->source); })()), "sms:smses:create", [], "array", false, false, false, 10)], "routeBase" => "sms"]);
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "    ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 17, $this->source); })())) {
            // line 18
            yield "    <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">";
            // line 19
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 20
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 20, $this->source); })()), "searchHelp" => "mautic.sms.help.searchcommands", "searchId" => "sms-search", "action" =>             // line 23
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 23, $this->source); })())]);
            // line 26
            yield "<div class=\"page-list\">
            ";
            // line 27
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
        </div>
    </div>
    ";
        } else {
            // line 31
            yield "\t\t";
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
\t";
        }
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_listResults(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 36, $this->source); })()))) {
            // line 37
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover sms-list\">
            <thead>
            <tr>";
            // line 41
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "routeBase" => "sms", "templateButtons" => ["delete" => (CoreExtension::getAttribute($this->env, $this->source,             // line 47
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 47, $this->source); })()), "sms:smses:deleteown", [], "array", false, false, false, 47) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 47, $this->source); })()), "sms:smses:deleteother", [], "array", false, false, false, 47))]]);
            // line 52
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "sms", "orderBy" => "e.name", "text" => "mautic.core.name", "class" => "col-sms-name", "default" => true]);
            // line 63
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "sms", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-sms-category"]);
            // line 73
            yield "<th class=\"visible-sm visible-md visible-lg col-sms-stats\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.stats"), "html", null, true);
            yield "</th>";
            // line 75
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "sms", "orderBy" => "e.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-sms-id"]);
            // line 84
            yield "</tr>
            </thead>
            <tbody>
            ";
            // line 88
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 88, $this->source); })()));
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
                yield "                ";
                $context["type"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getSmsType", [], "method", false, false, false, 89);
                // line 90
                yield "                <tr>
                    <td>
                        ";
                // line 92
                $context["edit"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 93
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 93, $this->source); })()), "sms:smses:editown", [], "array", false, false, false, 93), CoreExtension::getAttribute($this->env, $this->source,                 // line 94
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 94, $this->source); })()), "sms:smses:editother", [], "array", false, false, false, 94), CoreExtension::getAttribute($this->env, $this->source,                 // line 95
$context["item"], "getCreatedBy", [], "method", false, false, false, 95));
                // line 97
                yield "                        ";
                $context["customButtons"] = [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.smses.header.preview"), "data-footer" => "false", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_sms_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 104
$context["item"], "getId", [], "method", false, false, false, 104), "objectAction" => "preview"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.preview"), "iconClass" => "fa fa-share"]];
                // line 110
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 113
$context["item"], "templateButtons" => ["edit" =>                 // line 115
(isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 115, $this->source); })()), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 116
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 116, $this->source); })()), "sms:smses:create", [], "array", false, false, false, 116), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 118
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 118, $this->source); })()), "sms:smses:deleteown", [], "array", false, false, false, 118), CoreExtension::getAttribute($this->env, $this->source,                 // line 119
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 119, $this->source); })()), "sms:smses:deleteother", [], "array", false, false, false, 119), CoreExtension::getAttribute($this->env, $this->source,                 // line 120
$context["item"], "getCreatedBy", [], "method", false, false, false, 120))], "routeBase" => "sms", "customButtons" =>                 // line 124
(isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 124, $this->source); })())]);
                // line 127
                yield "</td>
                    <td>
                        <div>";
                // line 130
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 132
$context["item"], "model" => "sms"]);
                // line 136
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_sms_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 136)]), "html", null, true);
                yield "\">
                                ";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 137), "html", null, true);
                yield "
                                ";
                // line 138
                if (("list" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 138, $this->source); })()))) {
                    // line 139
                    yield "                                    <span data-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.icon_tooltip.list_sms"), "html", null, true);
                    yield "\">
                                        <i class=\"fa fa-fw fa-pie-chart\"></i>
                                    </span>
                                ";
                }
                // line 143
                yield "                            </a>
                        </div>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 147
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCategory", [], "method", false, false, false, 147);
                // line 148
                yield "                        ";
                $context["catName"] = (( !Twig\Extension\CoreExtension::testEmpty((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 148, $this->source); })()))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 148, $this->source); })()), "getTitle", [], "method", false, false, false, 148)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 149
                yield "                        ";
                $context["color"] = (( !Twig\Extension\CoreExtension::testEmpty((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 149, $this->source); })()))) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 149, $this->source); })()), "getColor", [], "method", false, false, false, 149))) : ("inherit"));
                // line 150
                yield "                        <span style=\"white-space: nowrap;\">
                            <span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 151, $this->source); })()), "html", null, true);
                yield ";\"> </span>
                            <span>";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 152, $this->source); })()), "html", null, true);
                yield "</span>
                        </span>
                    </td>";
                // line 155
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticSms/Sms/list_stats.html.twig", ["item" => $context["item"]]);
                // line 156
                yield "<td class=\"visible-md visible-lg\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 156), "html", null, true);
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            yield "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">";
            // line 163
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 164
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 164, $this->source); })()), "page" =>             // line 165
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 165, $this->source); })()), "limit" =>             // line 166
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 166, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_sms_index"), "sessionVar" => "sms"]);
            // line 170
            yield "</div>
";
        } elseif ( !        // line 171
(isset($context["configured"]) || array_key_exists("configured", $context) ? $context["configured"] : (function () { throw new RuntimeError('Variable "configured" does not exist.', 171, $this->source); })())) {
            // line 172
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["header" => "mautic.sms.disabled", "message" => "mautic.sms.enable.in.configuration"]);
        } else {
            // line 174
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["message" => "mautic.sms.create.in.campaign.builder"]);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticSms/Sms/list.html.twig";
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
        return array (  294 => 174,  291 => 172,  289 => 171,  286 => 170,  284 => 166,  283 => 165,  282 => 164,  281 => 163,  276 => 159,  258 => 156,  256 => 155,  251 => 152,  247 => 151,  244 => 150,  241 => 149,  238 => 148,  236 => 147,  230 => 143,  222 => 139,  220 => 138,  216 => 137,  211 => 136,  209 => 132,  208 => 130,  204 => 127,  202 => 124,  201 => 120,  200 => 119,  199 => 118,  198 => 116,  197 => 115,  196 => 113,  195 => 110,  193 => 104,  191 => 97,  189 => 95,  188 => 94,  187 => 93,  186 => 92,  182 => 90,  179 => 89,  161 => 88,  156 => 84,  154 => 75,  150 => 73,  148 => 63,  146 => 52,  144 => 47,  143 => 41,  138 => 37,  136 => 36,  129 => 35,  120 => 31,  113 => 27,  110 => 26,  108 => 23,  107 => 20,  106 => 19,  104 => 18,  101 => 17,  94 => 16,  89 => 10,  88 => 7,  81 => 6,  70 => 5,  59 => 4,  55 => 3,  53 => 2,  51 => 1,  44 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSms/Sms/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Resources\\views\\Sms\\list.html.twig");
    }
}
