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

/* @MauticWebhook/Webhook/details.html.twig */
class __TwigTemplate_55554978fdcd4fe07d9720cd31ef8bb2 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticWebhook/Webhook/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })()), "getName", [], "method", false, false, false, 3), "html", null, true);
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "mauticWebhook";
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 9
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 12
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 12, $this->source); })()), "webhook:webhooks:editown", [], "array", false, false, false, 12), CoreExtension::getAttribute($this->env, $this->source,         // line 13
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 13, $this->source); })()), "webhook:webhooks:editother", [], "array", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source,         // line 14
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 14)), "clone" => CoreExtension::getAttribute($this->env, $this->source,         // line 16
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 16, $this->source); })()), "webhook:webhooks:create", [], "array", false, false, false, 16), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 18, $this->source); })()), "webhook:webhooks:deleteown", [], "array", false, false, false, 18), CoreExtension::getAttribute($this->env, $this->source,         // line 19
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 19, $this->source); })()), "webhook:webhooks:deleteother", [], "array", false, false, false, 19), CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 20))], "routeBase" => "webhook"]);
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!-- page detail header -->
            <div class=\"pr-md pl-md pt-lg pb-lg\">
                <div class=\"box-layout\">
                    <div class=\"col-xs-10\">
                        <div class=\"text-muted\">";
        // line 37
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "getDescription", [], "method", false, false, false, 37));
        yield "</div>
                    </div>
                    <div class=\"col-xs-2 text-right\">";
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["entity" =>         // line 42
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })())]);
        // line 44
        yield "
                    </div>
                </div>
            </div>
            <!--/ page detail header -->
        </div>
        <div class=\"pa-md\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 53
        $context["hookLog"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 53, $this->source); })()), "getLimitedLogs", [], "method", false, false, false, 53);
        // line 54
        yield "                    ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["hookLog"]) || array_key_exists("hookLog", $context) ? $context["hookLog"] : (function () { throw new RuntimeError('Variable "hookLog" does not exist.', 54, $this->source); })()))) {
            // line 55
            yield "                        <div class=\"alert alert-warning col-md-6 col-md-offset-3 mt-md\" style=\"white-space: normal;\">
                            <h4>
                                ";
            // line 57
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.no.logs", [], "messages");
            // line 58
            yield "                            </h4>
                            <p>
                                ";
            // line 60
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.no.logs_desc", [], "messages");
            // line 61
            yield "                            </p>
                        </div>
                    ";
        } else {
            // line 64
            yield "                        <table class=\"table table-responsive\">
                            <thead>
                                <tr>
                                    <th>
                                        ";
            // line 68
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.id", [], "messages");
            // line 69
            yield "                                    </th>
                                    <th>
                                        ";
            // line 71
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.status", [], "messages");
            // line 72
            yield "                                    </th>
                                    <th>
                                        ";
            // line 74
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.note", [], "messages");
            // line 75
            yield "                                    </th>
                                    <th>
                                        ";
            // line 77
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.runtime", [], "messages");
            // line 78
            yield "                                    </th>
                                    <th>
                                        ";
            // line 80
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.date.added", [], "messages");
            // line 81
            yield "                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hookLog"]) || array_key_exists("hookLog", $context) ? $context["hookLog"] : (function () { throw new RuntimeError('Variable "hookLog" does not exist.', 85, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 86
                yield "                                    <tr>
                                        <td>";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "getId", [], "method", false, false, false, 87), "html", null, true);
                yield "</td>
                                        <td>";
                // line 88
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticWebhook/Helper/labelcode.html.twig", ["code" => CoreExtension::getAttribute($this->env, $this->source,                 // line 90
$context["log"], "getStatusCode", [], "method", false, false, false, 90)]);
                // line 92
                yield "</td>
                                        <td>";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "getNote", [], "method", false, false, false, 93))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["log"], "getNote", [], "method", false, false, false, 93)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.webhook.webhook.logs.empty.response"))), "html", null, true);
                yield "</td>
                                        <td>";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "getRuntime", [], "method", false, false, false, 94), "html", null, true);
                yield " s</td>
                                        <td>";
                // line 95
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "getDateAdded", [], "method", false, false, false, 95));
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
            unset($context['_seq'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            yield "                            </tbody>
                        </table>
                        <div class=\"alert alert-info col-md-6 col-md-offset-3 mt-md\">
                            <h4>
                                ";
            // line 102
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.webhook.logs.title", [], "messages");
            // line 103
            yield "                            </h4>
                            <p>
                                ";
            // line 105
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.webhook.logs.desc", [], "messages");
            // line 106
            yield "                            </p>
                        </div>
                    ";
        }
        // line 109
        yield "                </div>
            </div>
        </div>
    </div>

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        <!-- preview URL -->
        <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\">
            <div class=\"panel-heading\">
                <div class=\"panel-title\">";
        // line 119
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.webhook_url", [], "messages");
        yield "</div>
            </div>
            <div class=\"panel-body pt-xs\">
                <div class=\"input-group\">
                    <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\" readonly
                           value=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 124, $this->source); })()), "getWebhookUrl", [], "method", false, false, false, 124), "html_attr");
        yield "\" />
                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-default btn-nospin\" onclick=\"window.open('";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 126, $this->source); })()), "getWebhookUrl", [], "method", false, false, false, 126), "html_attr");
        yield "', '_blank');\">
                            <i class=\"ri-external-link-line\"></i>
                        </button>
                    </span>
                </div>
            </div>

            <hr class=\"hr-w-2\" style=\"width:50%\">

            <!-- recent activity -->";
        // line 136
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" =>         // line 138
(isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 138, $this->source); })())]);
        // line 140
        yield "
        </div>
    </div>
    <!--/ right section -->
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticWebhook/Webhook/details.html.twig";
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
        return array (  307 => 140,  305 => 138,  304 => 136,  292 => 126,  287 => 124,  279 => 119,  267 => 109,  262 => 106,  260 => 105,  256 => 103,  254 => 102,  248 => 98,  231 => 95,  227 => 94,  223 => 93,  220 => 92,  218 => 90,  217 => 88,  213 => 87,  210 => 86,  193 => 85,  187 => 81,  185 => 80,  181 => 78,  179 => 77,  175 => 75,  173 => 74,  169 => 72,  167 => 71,  163 => 69,  161 => 68,  155 => 64,  150 => 61,  148 => 60,  144 => 58,  142 => 57,  138 => 55,  135 => 54,  133 => 53,  122 => 44,  120 => 42,  119 => 40,  114 => 37,  103 => 28,  96 => 27,  91 => 20,  90 => 19,  89 => 18,  88 => 16,  87 => 14,  86 => 13,  85 => 12,  84 => 9,  83 => 7,  76 => 6,  65 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticWebhook/Webhook/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\WebhookBundle\\Resources\\views\\Webhook\\details.html.twig");
    }
}
