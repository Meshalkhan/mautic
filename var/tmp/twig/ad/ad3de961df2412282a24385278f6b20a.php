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

/* @MauticCampaign/Campaign/list.html.twig */
class __TwigTemplate_70d71ced870a3404acb2077588a12fe1 extends Template
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
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticCampaign/Campaign/list.html.twig", 4);
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
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.campaigns"), "html", null, true);
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,         // line 11
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 11, $this->source); })()), "campaign:campaigns:create", [], "array", false, false, false, 11)], "routeBase" => "campaign", "langVar" => "campaign.campaigns"]);
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 19, $this->source); })())) {
            // line 20
            yield "    <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">";
            // line 21
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 22
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 22, $this->source); })()), "searchHelp" => ((            // line 23
array_key_exists("searchHelp", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchHelp"]) || array_key_exists("searchHelp", $context) ? $context["searchHelp"] : (function () { throw new RuntimeError('Variable "searchHelp" does not exist.', 23, $this->source); })()), null)) : (null)), "action" =>             // line 24
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 24, $this->source); })()), "actionRoute" =>             // line 25
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 25, $this->source); })()), "indexRoute" =>             // line 26
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 26, $this->source); })()), "translationBase" =>             // line 27
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 27, $this->source); })()), "preCustomButtons" => ((            // line 28
array_key_exists("toolBarButtons", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["toolBarButtons"]) || array_key_exists("toolBarButtons", $context) ? $context["toolBarButtons"] : (function () { throw new RuntimeError('Variable "toolBarButtons" does not exist.', 28, $this->source); })()), null)) : (null)), "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 30
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 30, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 30, $this->source); })()) . ":delete"), [], "array", false, false, false, 30)], "filters" => ((            // line 32
array_key_exists("filters", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 32, $this->source); })()), [])) : ([]))]);
            // line 34
            yield "<div class=\"page-list\">";
            // line 35
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("content.above", $context);
        }
        // line 37
        yield "
  ";
        // line 38
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 38, $this->source); })())) > 0)) {
            // line 39
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover campaign-list\" id=\"campaignTable\">
          <thead>
            <tr>";
            // line 43
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#campaignTable", "routeBase" => "campaign", "templateButtons" => ["delete" => (CoreExtension::getAttribute($this->env, $this->source,             // line 48
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 48, $this->source); })()), "campaign:campaigns:deleteown", [], "array", false, false, false, 48) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 48, $this->source); })()), "campaign:campaigns:deleteother", [], "array", false, false, false, 48))]]);
            // line 52
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.name", "text" => "mautic.core.name", "class" => "col-campaign-name"]);
            // line 59
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "cat.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-campaign-category"]);
            // line 66
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-md visible-lg col-campaign-dateAdded"]);
            // line 73
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.dateModified", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-md visible-lg col-campaign-dateModified", "default" => true]);
            // line 81
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-md visible-lg col-campaign-createdByUser"]);
            // line 88
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "campaign", "orderBy" => "c.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-campaign-id"]);
            // line 94
            yield "</tr>
          </thead>
          <tbody>
            ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 97, $this->source); })()));
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
                yield "                <tr>
                    <td>";
                // line 100
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 101
$context["item"], "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 104
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 104, $this->source); })()), "campaign:campaigns:editown", [], "array", false, false, false, 104), CoreExtension::getAttribute($this->env, $this->source,                 // line 105
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 105, $this->source); })()), "campaign:campaigns:editother", [], "array", false, false, false, 105), CoreExtension::getAttribute($this->env, $this->source,                 // line 106
$context["item"], "createdBy", [], "any", false, false, false, 106)), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 108
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 108, $this->source); })()), "campaign:campaigns:create", [], "array", false, false, false, 108), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 110
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 110, $this->source); })()), "campaign:campaigns:deleteown", [], "array", false, false, false, 110), CoreExtension::getAttribute($this->env, $this->source,                 // line 111
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 111, $this->source); })()), "campaign:campaigns:deleteother", [], "array", false, false, false, 111), CoreExtension::getAttribute($this->env, $this->source,                 // line 112
$context["item"], "createdBy", [], "any", false, false, false, 112))], "routeBase" => "campaign"]);
                // line 117
                yield "</td>
                    <td>
                        <div>";
                // line 120
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 121
$context["item"], "model" => "campaign", "onclick" => CoreExtension::getAttribute($this->env, $this->source,                 // line 123
$context["item"], "onclickMethod", [], "any", false, false, false, 123), "attributes" => CoreExtension::getAttribute($this->env, $this->source,                 // line 124
$context["item"], "dataAttributes", [], "any", false, false, false, 124), "transKeys" => CoreExtension::getAttribute($this->env, $this->source,                 // line 125
$context["item"], "translationKeysDataAttributes", [], "any", false, false, false, 125)]);
                // line 127
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 127)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 128), "html", null, true);
                // line 129
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("campaign.name", Twig\Extension\CoreExtension::merge($context, ["item" => $context["item"]]));
                // line 130
                yield "</a>
                        </div>";
                // line 132
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 132)) {
                    // line 133
                    yield "<div class=\"text-muted mt-4\"><small>";
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 133));
                    yield "</small></div>";
                }
                // line 135
                yield "</td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 137
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 137);
                // line 138
                yield "                        ";
                [$context["catName"], $context["color"]] =                 [(((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 138, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 138, $this->source); })()), "title", [], "any", false, false, false, 138)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))), (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 138, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 138, $this->source); })()), "color", [], "any", false, false, false, 138))) : ("inherit"))];
                // line 139
                yield "                        <span style=\"white-space: nowrap;\"><span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 139, $this->source); })()), "html", null, true);
                yield ";\"> </span> <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 139, $this->source); })()), "html", null, true);
                yield "</span></span>
                    </td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 141
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateAdded", [], "any", false, false, false, 141)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateAdded", [], "any", false, false, false, 141))) : (""));
                yield "\">
                        ";
                // line 142
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateAdded", [], "any", false, false, false, 142)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateAdded", [], "any", false, false, false, 142))) : (""));
                yield "
                    </td>
                    <td class=\"visible-md visible-lg\" title=\"";
                // line 144
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateModified", [], "any", false, false, false, 144)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateModified", [], "any", false, false, false, 144))) : (""));
                yield "\">
                        ";
                // line 145
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateModified", [], "any", false, false, false, 145)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateModified", [], "any", false, false, false, 145))) : (""));
                yield "
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "createdByUser", [], "any", false, false, false, 147), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 148), "html", null, true);
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
            // line 151
            yield "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">";
            // line 155
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 156
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 156, $this->source); })())), "page" =>             // line 157
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 157, $this->source); })()), "limit" =>             // line 158
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 158, $this->source); })()), "menuLinkId" => "mautic_campaign_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_index"), "sessionVar" => "campaign"]);
            // line 163
            yield "</div>
  ";
        } else {
            // line 165
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.campaign.noresults.tip"]);
        }
        // line 167
        yield "
  ";
        // line 168
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 168, $this->source); })())) {
            // line 169
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("content.below", $context);
            // line 170
            yield "</div>
    </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCampaign/Campaign/list.html.twig";
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
        return array (  277 => 170,  275 => 169,  273 => 168,  270 => 167,  267 => 165,  263 => 163,  261 => 158,  260 => 157,  259 => 156,  258 => 155,  253 => 151,  236 => 148,  232 => 147,  227 => 145,  223 => 144,  218 => 142,  214 => 141,  206 => 139,  203 => 138,  201 => 137,  197 => 135,  192 => 133,  190 => 132,  187 => 130,  185 => 129,  183 => 128,  179 => 127,  177 => 125,  176 => 124,  175 => 123,  174 => 121,  173 => 120,  169 => 117,  167 => 112,  166 => 111,  165 => 110,  164 => 108,  163 => 106,  162 => 105,  161 => 104,  160 => 101,  159 => 100,  156 => 98,  139 => 97,  134 => 94,  132 => 88,  130 => 81,  128 => 73,  126 => 66,  124 => 59,  122 => 52,  120 => 48,  119 => 43,  114 => 39,  112 => 38,  109 => 37,  106 => 35,  104 => 34,  102 => 32,  101 => 30,  100 => 28,  99 => 27,  98 => 26,  97 => 25,  96 => 24,  95 => 23,  94 => 22,  93 => 21,  91 => 20,  88 => 19,  81 => 18,  76 => 11,  75 => 9,  68 => 8,  57 => 6,  53 => 4,  51 => 2,  49 => 1,  42 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Campaign/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Campaign\\list.html.twig");
    }
}
