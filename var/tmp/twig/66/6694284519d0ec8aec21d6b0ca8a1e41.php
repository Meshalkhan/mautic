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

/* @MauticCampaign/Event/_preview.html.twig */
class __TwigTemplate_339191630de8283103331b707009558f extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        if (( !array_key_exists("route", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 6, $this->source); })())))) {
            // line 7
            yield "  ";
            $context["route"] = "mautic_campaignevent_action";
        }
        // line 9
        yield "
";
        // line 10
        $context["eventType"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "eventType", [], "array", false, false, false, 10);
        // line 11
        $context["eventLogic"] = "";
        // line 12
        yield "
";
        // line 14
        $context["eventName"] = ((("dev" == Twig\Extension\CoreExtension::constant("MAUTIC_ENV"))) ? ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 14, $this->source); })()), "name", [], "array", false, false, false, 14) . " <small>") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)) . "</small>")) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 14, $this->source); })()), "name", [], "array", false, false, false, 14)));
        // line 15
        yield "
";
        // line 16
        if (( !array_key_exists("update", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["update"]) || array_key_exists("update", $context) ? $context["update"] : (function () { throw new RuntimeError('Variable "update" does not exist.', 16, $this->source); })())))) {
            // line 17
            yield "<div id=\"CampaignEvent_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "id", [], "array", false, false, false, 17), "html", null, true);
            yield "\" data-type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "eventType", [], "array", false, false, false, 17), "html", null, true);
            yield "\" class=\"draggable list-campaign-event list-campaign-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "eventType", [], "array", false, false, false, 17), "html", null, true);
            yield "\" data-event=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "type", [], "array", false, false, false, 17), "html", null, true);
            yield "\" data-event-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "id", [], "array", false, false, false, 17), "html", null, true);
            yield "\">
";
        }
        // line 19
        yield "
    <div class=\"campaign-event-content\">
        <div><span class=\"campaign-event-name ellipsis\">";
        // line 21
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["eventName"]) || array_key_exists("eventName", $context) ? $context["eventName"] : (function () { throw new RuntimeError('Variable "eventName" does not exist.', 21, $this->source); })()));
        yield "</span></div>
        <span class=\"campaign-event-logic\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.campaign." . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "type", [], "array", false, false, false, 22))), "html", null, true);
        yield "</span>
    </div>

";
        // line 25
        if (( !array_key_exists("update", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["update"]) || array_key_exists("update", $context) ? $context["update"] : (function () { throw new RuntimeError('Variable "update" does not exist.', 25, $this->source); })())))) {
            // line 26
            yield "    <div class=\"campaign-event-buttons hide\">
        <a data-toggle=\"ajaxmodal\" data-prevent-dismiss=\"true\" data-target=\"#CampaignEventModal\" href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 27, $this->source); })()), ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 27, $this->source); })()), "id", [], "array", false, false, false, 27), "campaignId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 27, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-xs btn-edit\">
            <i class=\"ri-edit-line\"></i>
        </a>
        <a data-toggle=\"ajax\" data-target=\"CampaignEvent_";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 30, $this->source); })()), "id", [], "array", false, false, false, 30), "html", null, true);
            yield "\" data-ignore-formexit=\"true\" data-method=\"POST\" data-hide-loadingbar=\"true\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 30, $this->source); })()), ["objectAction" => "delete", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 30, $this->source); })()), "id", [], "array", false, false, false, 30), "campaignId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 30, $this->source); })())]), "html", null, true);
            yield "\"  class=\"btn btn-delete btn-danger btn-xs\">
            <i class=\"ri-close-line\"></i>
        </a>
    </div>
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
        return "@MauticCampaign/Event/_preview.html.twig";
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
        return array (  104 => 30,  98 => 27,  95 => 26,  93 => 25,  87 => 22,  83 => 21,  79 => 19,  65 => 17,  63 => 16,  60 => 15,  58 => 14,  55 => 12,  53 => 11,  51 => 10,  48 => 9,  44 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Event/_preview.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Event\\_preview.html.twig");
    }
}
