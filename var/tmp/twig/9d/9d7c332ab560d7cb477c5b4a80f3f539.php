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

/* @MauticCampaign/Event/_generic.html.twig */
class __TwigTemplate_9311482c15202c73bd349776c1c47459 extends Template
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
        $context["route"] = ((array_key_exists("route", $context)) ? (_twig_default_filter((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 6, $this->source); })()), "mautic_campaignevent_action")) : ("mautic_campaignevent_action"));
        // line 7
        if ( !array_key_exists("update", $context)) {
            // line 8
            echo "  <div id=\"CampaignEvent_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 8, $this->source); })()), "id", [], "array", false, false, false, 8), "html", null, true);
            echo "\"
       data-type=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 9, $this->source); })()), "eventType", [], "array", false, false, false, 9), "html", null, true);
            echo "\"
       class=\"draggable list-campaign-event list-campaign-";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "eventType", [], "array", false, false, false, 10), "html", null, true);
            echo "\"
       data-event=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 11, $this->source); })()), "type", [], "array", false, false, false, 11), "html", null, true);
            echo "\"
       data-event-id=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 12, $this->source); })()), "id", [], "array", false, false, false, 12), "html", null, true);
            echo "\">
";
        }
        // line 14
        echo "
    <div class=\"campaign-event-content\">
        <div><span class=\"campaign-event-name ellipsis\">
        ";
        // line 17
        if (("dev" == twig_constant("MAUTIC_ENV"))) {
            echo "<small>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "id", [], "array", false, false, false, 17), "html", null, true);
            echo "</small> ";
        }
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "name", [], "array", false, false, false, 17), "html", null, true);
        echo "
        </span></div>
    </div>

";
        // line 21
        if ( !array_key_exists("update", $context)) {
            // line 22
            echo "    <div class=\"campaign-event-buttons hide\">
        <a data-toggle=\"ajax\" data-target=\"CampaignEvent_";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "id", [], "array", false, false, false, 23), "html", null, true);
            echo "\" data-ignore-formexit=\"true\" data-method=\"POST\" data-hide-loadingbar=\"true\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 23, $this->source); })()), ["objectAction" => "clone", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "id", [], "array", false, false, false, 23), "campaignId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 23, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-clone btn-xs\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.clone.btn.tooltip"), "html", null, true);
            echo "\">
            <i class=\"ri-file-copy-line\"></i>
        </a>
        <a data-toggle=\"ajaxmodal\" data-prevent-dismiss=\"true\" data-target=\"#CampaignEventModal\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 26, $this->source); })()), ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "id", [], "array", false, false, false, 26), "campaignId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 26, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs btn-edit\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.edit.btn.tooltip"), "html", null, true);
            echo "\">
            <i class=\"ri-edit-line\"></i>
        </a>
        <a data-toggle=\"ajax\" data-target=\"CampaignEvent_";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 29, $this->source); })()), "id", [], "array", false, false, false, 29), "html", null, true);
            echo "\" data-ignore-formexit=\"true\" data-method=\"POST\" data-hide-loadingbar=\"true\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 29, $this->source); })()), ["objectAction" => "delete", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 29, $this->source); })()), "id", [], "array", false, false, false, 29), "campaignId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 29, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-delete btn-danger btn-xs\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.remove.btn.tooltip"), "html", null, true);
            echo "\">
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
        return "@MauticCampaign/Event/_generic.html.twig";
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
        return array (  103 => 29,  95 => 26,  85 => 23,  82 => 22,  80 => 21,  68 => 17,  63 => 14,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  41 => 8,  39 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCampaign/Event/_generic.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Event\\_generic.html.twig");
    }
}
