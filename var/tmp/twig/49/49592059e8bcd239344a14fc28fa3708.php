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

/* @MauticChannel/Message/details.html.twig */
class __TwigTemplate_fbe00427727cf3e3bdb8736065473586 extends Template
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
            'mauicContent' => [$this, 'block_mauicContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'publishStatus' => [$this, 'block_publishStatus'],
            'content' => [$this, 'block_content'],
            'rightFormContent' => [$this, 'block_rightFormContent'],
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
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticChannel/Message/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauicContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "message
";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "getName", [], "method", false, false, false, 5), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 9
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 11
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 11, $this->source); })()), "channel:messages:editown", [], "array", false, false, false, 11), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 11, $this->source); })()), "channel:messages:editother", [], "array", false, false, false, 11), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 11)), "clone" => CoreExtension::getAttribute($this->env, $this->source,         // line 12
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 12, $this->source); })()), "channel:messages:create", [], "array", false, false, false, 12), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 13
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 13, $this->source); })()), "channel:messages:deleteown", [], "array", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 13, $this->source); })()), "channel:messages:deleteown", [], "array", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 13))], "routeBase" => "message"]);
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })())]);
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "<!-- start: box layout -->
    <div class=\"box-layout\">
        <!-- left section -->
        <div class=\"col-md-9 height-auto\">
            <div>
                <!-- form detail header -->
                <div class=\"pr-md pl-md pt-lg pb-lg\">
                    <div class=\"box-layout\">
                        <div class=\"col-xs-10\">
                            <div class=\"text-muted\">";
        // line 31
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "getDescription", [], "method", false, false, false, 31));
        yield "</div>
                        </div>

                    </div>
                </div>
                <!--/ form detail header -->
                <!-- form detail collapseable -->
                <div class=\"collapse\" id=\"focus-details\">
                    <div class=\"pr-md pl-md pb-md\">
                        <div class=\"panel shd-none mb-0\">
                            <table class=\"table table-hover mb-0\">
                                <tbody>";
        // line 43
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })())]);
        // line 44
        yield "</tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--/ form detail collapseable -->
            </div>

        <!--/ form detail collapseable toggler -->
            <div>
                <!-- form detail collapseable toggler -->
                <div class=\"hr-expand nm\">
                        <span data-toggle=\"tooltip\" title=\"";
        // line 56
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.details", [], "messages");
        yield "\">
                            <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#focus-details\"><span class=\"caret\"></span> ";
        // line 57
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.details", [], "messages");
        yield "</a>
                        </span>
                </div>
                <!-- stats -->
                <div class=\"pa-md\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"panel\">
                                <div class=\"panel-body box-layout\">
                                    <div class=\"col-md-6 va-m\">
                                        <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                            <div><i class=\"fa fa-line-chart pull-left\"></i>
                                                <span class=\"pull-left\"> ";
        // line 69
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.messages.processed.messages", [], "messages");
        yield "</span></div>
                                        </h5>
                                    </div>
                                    <div class=\"col-md-9 va-m\">";
        // line 73
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 73, $this->source); })()), "class" => "pull-right"]);
        // line 74
        yield "</div>
                                </div>
                                <div class=\"pt-0 pl-15 pb-10 pr-15\">";
        // line 77
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["eventCounts"]) || array_key_exists("eventCounts", $context) ? $context["eventCounts"] : (function () { throw new RuntimeError('Variable "eventCounts" does not exist.', 77, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        // line 78
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ stats -->
                ";
        // line 84
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

                <!-- tabs controls -->
                <ul class=\"nav nav-tabs pr-md pl-md\">
                    ";
        // line 88
        $context["active"] = "active";
        // line 89
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messagedLeads"]) || array_key_exists("messagedLeads", $context) ? $context["messagedLeads"] : (function () { throw new RuntimeError('Variable "messagedLeads" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["channel"] => $context["contacts"]) {
            // line 90
            yield "                    <li class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 90, $this->source); })()), "html", null, true);
            yield "\">
                        <a href=\"#contacts-";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["channel"], "html", null, true);
            yield "\" role=\"tab\" data-toggle=\"tab\">
                            ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((( !("all" === $context["channel"])) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 92, $this->source); })()), $context["channel"], [], "array", false, false, false, 92), "label", [], "array", false, false, false, 92)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"))), "html", null, true);
            yield "
                        </a>
                    </li>
                    ";
            // line 95
            $context["active"] = "";
            // line 96
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['channel'], $context['contacts'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "                </ul>
                <!--/ tabs controls -->
            </div>

            <!-- start: tab-content -->
            <div class=\"tab-content pa-md\">
            ";
        // line 103
        $context["active"] = " active in";
        // line 104
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messagedLeads"]) || array_key_exists("messagedLeads", $context) ? $context["messagedLeads"] : (function () { throw new RuntimeError('Variable "messagedLeads" does not exist.', 104, $this->source); })()));
        foreach ($context['_seq'] as $context["channel"] => $context["contacts"]) {
            // line 105
            yield "                <div class=\"tab-pane bdr-w-0 page-list";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 105, $this->source); })()), "html", null, true);
            yield "\" id=\"contacts-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["channel"], "html", null, true);
            yield "\">
                    ";
            // line 106
            $context["message"] = ((("all" === $context["channel"])) ? ("mautic.channel.message.all_contacts") : ("mautic.channel.message.channel_contacts"));
            // line 107
            yield "                    <div class=\"alert alert-info\"><strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 107, $this->source); })())), "html", null, true);
            yield "</strong></div>
                    <div class=\"message-";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["channel"], "html", null, true);
            yield "\">
                        ";
            // line 109
            yield $context["contacts"];
            yield "
                    </div>
                </div>
                ";
            // line 112
            $context["active"] = "";
            // line 113
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['channel'], $context['contacts'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "            </div>
        </div>
        <!-- right section -->
        <div class=\"col-md-3 bdr-l height-auto\">
            <!-- recent activity -->";
        // line 119
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 119, $this->source); })())]);
        // line 120
        yield from $this->unwrap()->yieldBlock('rightFormContent', $context, $blocks);
        // line 122
        yield "        </div>
    </div> 
";
        yield from [];
    }

    // line 120
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_rightFormContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 121
        yield "            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticChannel/Message/details.html.twig";
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
        return array (  308 => 121,  301 => 120,  294 => 122,  292 => 120,  290 => 119,  284 => 114,  278 => 113,  276 => 112,  270 => 109,  266 => 108,  261 => 107,  259 => 106,  252 => 105,  247 => 104,  245 => 103,  237 => 97,  231 => 96,  229 => 95,  223 => 92,  219 => 91,  214 => 90,  209 => 89,  207 => 88,  200 => 84,  192 => 78,  190 => 77,  186 => 74,  184 => 73,  178 => 69,  163 => 57,  159 => 56,  145 => 44,  143 => 43,  129 => 31,  118 => 22,  111 => 21,  106 => 19,  99 => 18,  94 => 13,  93 => 12,  92 => 11,  91 => 9,  90 => 8,  83 => 7,  75 => 5,  68 => 4,  56 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticChannel/Message/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Resources\\views\\Message\\details.html.twig");
    }
}
