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

/* @MauticCampaign/Event/jump.html.twig */
class __TwigTemplate_661e0648d9c3b72ad0d9802759b3c122 extends Template
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
        // line 1
        $context["route"] = ((array_key_exists("route", $context)) ? (_twig_default_filter((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 1, $this->source); })()), "mautic_campaignevent_action")) : ("mautic_campaignevent_action"));
        // line 2
        echo "
";
        // line 3
        if ( !array_key_exists("update", $context)) {
            // line 4
            echo "<div id=\"CampaignEvent_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 4, $this->source); })()), "id", [], "array", false, false, false, 4), "html", null, true);
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 4, $this->source); })()), "eventType", [], "array", false, false, false, 4), "html", null, true);
            echo "\" class=\"draggable list-campaign-event list-campaign-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 4, $this->source); })()), "eventType", [], "array", false, false, false, 4), "html", null, true);
            echo "\" data-event=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 4, $this->source); })()), "type", [], "array", false, false, false, 4), "html", null, true);
            echo "\" data-event-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 4, $this->source); })()), "id", [], "array", false, false, false, 4), "html", null, true);
            echo "\">
";
        }
        // line 6
        echo "
    <div class=\"campaign-event-content\">
        <div><span class=\"campaign-event-name ellipsis\">";
        // line 8
        if (("dev" == twig_constant("MAUTIC_ENV"))) {
            echo "<small>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 8, $this->source); })()), "id", [], "array", false, false, false, 8), "html", null, true);
            echo "</small> ";
        }
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 8, $this->source); })()), "name", [], "array", false, false, false, 8), "html", null, true);
        echo "</span></div>
        <a class=\"btn btn-primary btn-nospin btn-xs highlight-jump-target\" href=\"javascript:void(0)\" onClick=\"Mautic.highlightJumpTarget(event, this)\" data-jump-target=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 9, $this->source); })()), "properties", [], "array", false, false, false, 9), "jumpToEvent", [], "array", false, false, false, 9), "html", null, true);
        echo "\">
            <i class=\"ri-refresh-line\" style=\"margin-top:4px;\"></i>
        </a>
    </div>

";
        // line 14
        if ( !array_key_exists("update", $context)) {
            // line 15
            echo "    <div class=\"campaign-event-buttons hide\">
        <a data-toggle=\"ajaxmodal\" data-prevent-dismiss=\"true\" data-target=\"#CampaignEventModal\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 16, $this->source); })()), ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 16, $this->source); })()), "id", [], "array", false, false, false, 16), "campaignId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 16, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs btn-edit\">
            <i class=\"ri-edit-line\"></i>
        </a>
        <a data-toggle=\"ajax\" data-target=\"CampaignEvent_";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 19, $this->source); })()), "id", [], "array", false, false, false, 19), "html", null, true);
            echo "\" data-ignore-formexit=\"true\" data-method=\"POST\" data-hide-loadingbar=\"true\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 19, $this->source); })()), ["objectAction" => "delete", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 19, $this->source); })()), "id", [], "array", false, false, false, 19), "campaignId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 19, $this->source); })())]), "html", null, true);
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
        return "@MauticCampaign/Event/jump.html.twig";
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
        return array (  90 => 19,  84 => 16,  81 => 15,  79 => 14,  71 => 9,  62 => 8,  58 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCampaign/Event/jump.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Event\\jump.html.twig");
    }
}
