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

/* @MauticCampaign/Event/_preview.html.twig */
class __TwigTemplate_fe3468e19f470e886b4cf551f1fa7973 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if (( !array_key_exists("route", $context) || twig_test_empty((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 6, $this->source); })())))) {
            // line 7
            echo "  ";
            $context["route"] = "mautic_campaignevent_action";
        }
        // line 9
        echo "
";
        // line 10
        $context["eventType"] = twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "eventType", [], "array", false, false, false, 10);
        // line 11
        $context["eventLogic"] = "";
        // line 12
        echo "
";
        // line 14
        $context["eventName"] = ((("dev" == twig_constant("MAUTIC_ENV"))) ? ((((twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 14, $this->source); })()), "name", [], "array", false, false, false, 14) . " <small>") . twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)) . "</small>")) : (twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 14, $this->source); })()), "name", [], "array", false, false, false, 14)));
        // line 15
        echo "
";
        // line 16
        if (( !array_key_exists("update", $context) || twig_test_empty((isset($context["update"]) || array_key_exists("update", $context) ? $context["update"] : (function () { throw new RuntimeError('Variable "update" does not exist.', 16, $this->source); })())))) {
            // line 17
            echo "<div id=\"CampaignEvent_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "id", [], "array", false, false, false, 17), "html", null, true);
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "eventType", [], "array", false, false, false, 17), "html", null, true);
            echo "\" class=\"draggable list-campaign-event list-campaign-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "eventType", [], "array", false, false, false, 17), "html", null, true);
            echo "\" data-event=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "type", [], "array", false, false, false, 17), "html", null, true);
            echo "\" data-event-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "id", [], "array", false, false, false, 17), "html", null, true);
            echo "\">
";
        }
        // line 19
        echo "
    <div class=\"campaign-event-content\">
        <div><span class=\"campaign-event-name ellipsis\">";
        // line 21
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["eventName"]) || array_key_exists("eventName", $context) ? $context["eventName"] : (function () { throw new RuntimeError('Variable "eventName" does not exist.', 21, $this->source); })()));
        echo "</span></div>
        <span class=\"campaign-event-logic\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.campaign." . twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "type", [], "array", false, false, false, 22))), "html", null, true);
        echo "</span>
    </div>

";
        // line 25
        if (( !array_key_exists("update", $context) || twig_test_empty((isset($context["update"]) || array_key_exists("update", $context) ? $context["update"] : (function () { throw new RuntimeError('Variable "update" does not exist.', 25, $this->source); })())))) {
            // line 26
            echo "    <div class=\"campaign-event-buttons hide\">
        <a data-toggle=\"ajaxmodal\" data-prevent-dismiss=\"true\" data-target=\"#CampaignEventModal\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 27, $this->source); })()), ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 27, $this->source); })()), "id", [], "array", false, false, false, 27), "campaignId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 27, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs btn-edit\">
            <i class=\"ri-edit-line\"></i>
        </a>
        <a data-toggle=\"ajax\" data-target=\"CampaignEvent_";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 30, $this->source); })()), "id", [], "array", false, false, false, 30), "html", null, true);
            echo "\" data-ignore-formexit=\"true\" data-method=\"POST\" data-hide-loadingbar=\"true\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 30, $this->source); })()), ["objectAction" => "delete", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 30, $this->source); })()), "id", [], "array", false, false, false, 30), "campaignId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 30, $this->source); })())]), "html", null, true);
            echo "\"  class=\"btn btn-delete btn-danger btn-xs\">
            <i class=\"ri-close-line\"></i>
        </a>
    </div>
</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCampaign/Event/_preview.html.twig";
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
        return array (  99 => 30,  93 => 27,  90 => 26,  88 => 25,  82 => 22,  78 => 21,  74 => 19,  60 => 17,  58 => 16,  55 => 15,  53 => 14,  50 => 12,  48 => 11,  46 => 10,  43 => 9,  39 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCampaign/Event/_preview.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Event\\_preview.html.twig");
    }
}
