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

/* @MauticWebhook/Webhook/list.html.twig */
class __TwigTemplate_a0751608ce9ea0fa0eb4f40c54f7987e extends Template
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
            'mauticContent' => [$this, 'block_mauticContent'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
            'listResults' => [$this, 'block_listResults'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 5, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticWebhook/Webhook/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 2, $this->source); })()) == "index")) ? (true) : (false));
        // line 3
        $context["tmpl"] = "list";
        // line 5
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.webhooks", [], "messages");
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "mauticWebhook";
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,         // line 14
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 14, $this->source); })()), "webhook:webhooks:create", [], "array", false, false, false, 14)], "routeBase" => "webhook"]);
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
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 21, $this->source); })())) {
            // line 22
            yield "<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">";
            // line 23
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 25
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 25, $this->source); })()), "searchHelp" => "mautic.page.help.searchcommands", "action" =>             // line 27
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 27, $this->source); })())]);
            // line 29
            yield "<div class=\"page-list\">
        ";
            // line 30
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
    </div>
</div>
";
        } else {
            // line 34
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
";
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
        if ((array_key_exists("items", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 39, $this->source); })())))) {
            // line 40
            yield "    <div class=\"table-responsive panel-collapse pull out webhook-list\">
        <table class=\"table table-hover webhook-list\" id=\"webhookTable\">
            <thead>
            <tr>";
            // line 44
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#webhookTable", "routeBase" => "webhook", "templateButtons" => ["delete" => (CoreExtension::getAttribute($this->env, $this->source,             // line 50
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 50, $this->source); })()), "webhook:webhooks:deleteown", [], "array", false, false, false, 50) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 50, $this->source); })()), "webhook:webhooks:deleteother", [], "array", false, false, false, 50))]]);
            // line 53
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "mautic_webhook", "orderBy" => "e.name", "text" => "mautic.core.name", "class" => "col-webhook-name", "default" => true]);
            // line 61
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "mautic_webhook", "orderBy" => "e.webhookUrl", "text" => "mautic.webhook.webhook_url", "class" => "col-webhook-id visible-md visible-lg"]);
            // line 68
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "mautic_webhook", "orderBy" => "e.id", "text" => "mautic.core.id", "class" => "col-webhook-id visible-md visible-lg"]);
            // line 75
            yield "</tr>
            </thead>
            <tbody>
                ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 78, $this->source); })()));
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
                // line 79
                yield "                <tr>
                    <td>";
                // line 81
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 83
$context["item"], "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 86
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 86, $this->source); })()), "webhook:webhooks:editown", [], "array", false, false, false, 86), CoreExtension::getAttribute($this->env, $this->source,                 // line 87
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 87, $this->source); })()), "webhook:webhooks:editother", [], "array", false, false, false, 87), CoreExtension::getAttribute($this->env, $this->source,                 // line 88
$context["item"], "getCreatedBy", [], "method", false, false, false, 88)), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 90
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 90, $this->source); })()), "webhook:webhooks:create", [], "array", false, false, false, 90), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 92
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 92, $this->source); })()), "webhook:webhooks:deleteown", [], "array", false, false, false, 92), CoreExtension::getAttribute($this->env, $this->source,                 // line 93
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 93, $this->source); })()), "webhook:webhooks:deleteother", [], "array", false, false, false, 93), CoreExtension::getAttribute($this->env, $this->source,                 // line 94
$context["item"], "getCreatedBy", [], "method", false, false, false, 94))], "routeBase" => "webhook"]);
                // line 99
                yield "</td>
                    <td>
                        <div>";
                // line 102
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 104
$context["item"], "model" => "webhook"]);
                // line 107
                yield "
                            <a data-toggle=\"ajax\" href=\"";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_webhook_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 110
$context["item"], "getId", [], "method", false, false, false, 110), "objectAction" => "view"]), "html", null, true);
                // line 111
                yield "\">
                                ";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 112), "html", null, true);
                yield "
                            </a>
                            ";
                // line 114
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", true, true, false, 114) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 114)))) {
                    // line 115
                    yield "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 116
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 116));
                    yield "</small>
                            </div>
                            ";
                }
                // line 119
                yield "                        </div>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getWebhookUrl", [], "method", false, false, false, 121), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 122), "html", null, true);
                yield " </td>
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
            // line 125
            yield "            </tbody>
        </table>
    </div>

    <div class=\"panel-footer\">";
            // line 130
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 132
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 132, $this->source); })())), "page" =>             // line 133
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 133, $this->source); })()), "limit" =>             // line 134
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 134, $this->source); })()), "menuLinkId" => "mautic_webhook_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_webhook_index"), "sessionVar" => "mautic_webhook"]);
            // line 139
            yield "
    </div>
";
        } else {
            // line 142
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
        return "@MauticWebhook/Webhook/list.html.twig";
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
        return array (  259 => 142,  254 => 139,  252 => 134,  251 => 133,  250 => 132,  249 => 130,  243 => 125,  226 => 122,  222 => 121,  218 => 119,  212 => 116,  209 => 115,  207 => 114,  202 => 112,  199 => 111,  197 => 110,  196 => 108,  193 => 107,  191 => 104,  190 => 102,  186 => 99,  184 => 94,  183 => 93,  182 => 92,  181 => 90,  180 => 88,  179 => 87,  178 => 86,  177 => 83,  176 => 81,  173 => 79,  156 => 78,  151 => 75,  149 => 68,  147 => 61,  145 => 53,  143 => 50,  142 => 44,  137 => 40,  135 => 39,  128 => 38,  119 => 34,  112 => 30,  109 => 29,  107 => 27,  106 => 25,  105 => 23,  103 => 22,  101 => 21,  94 => 20,  89 => 14,  88 => 11,  81 => 10,  70 => 8,  59 => 7,  55 => 5,  53 => 3,  51 => 2,  44 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticWebhook/Webhook/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\WebhookBundle\\Resources\\views\\Webhook\\list.html.twig");
    }
}
