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

/* @MauticCampaign/Campaign/Builder/_event_list.html.twig */
class __TwigTemplate_33c7666db56b85d140e7996661b9a21b extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(["action" => "primary", "decision" => "success", "condition" => "danger"]);
        foreach ($context['_seq'] as $context["eventGroup"] => $context["color"]) {
            // line 7
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["eventGroup"]), "html", null, true);
            echo "GroupList\" class=\"hide\">
        <h4 class=\"mb-xs\">
            <span>";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("mautic.campaign.event." . $context["eventGroup"]) . "s.header")), "html", null, true);
            echo "</span>
            <button class=\"pull-right btn btn-xs btn-nospin btn-";
            // line 10
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo "\">
                <i class=\"fa fa-fw ri-corner-right-up-line\"></i>
            </button>
        </h4>
        <select id=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["eventGroup"]), "html", null, true);
            echo "List\" class=\"campaign-event-selector\">
            <option value=\"\"></option>
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 16, $this->source); })()), $context["eventGroup"], [], "array", false, false, false, 16));
            foreach ($context['_seq'] as $context["k"] => $context["e"]) {
                // line 17
                echo "                <option id=\"campaignEvent_";
                echo twig_escape_filter($this->env, twig_replace_filter($context["k"], ["." => ""]), "html", null, true);
                echo "\"
                        class=\"option_campaignEvent_";
                // line 18
                echo twig_escape_filter($this->env, twig_replace_filter($context["k"], ["." => ""]), "html", null, true);
                echo "\"
                        data-href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaignevent_action", ["objectAction" => "new", "type" =>                 // line 21
$context["k"], "eventType" =>                 // line 22
$context["eventGroup"], "campaignId" =>                 // line 23
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 23, $this->source); })()), "anchor" => ""]), "html", null, true);
                // line 25
                echo "\"
                        data-target=\"#CampaignEventModal\"
                        title=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "description", [], "array", false, false, false, 27));
                echo "\"
                        value=\"";
                // line 28
                echo twig_escape_filter($this->env, $context["k"]);
                echo "\">
                    <span>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "label", [], "array", false, false, false, 29), "html", null, true);
                echo "</span>
                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        </select>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['eventGroup'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCampaign/Campaign/Builder/_event_list.html.twig";
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
        return array (  102 => 32,  93 => 29,  89 => 28,  85 => 27,  81 => 25,  79 => 23,  78 => 22,  77 => 21,  76 => 19,  72 => 18,  67 => 17,  63 => 16,  58 => 14,  51 => 10,  47 => 9,  41 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCampaign/Campaign/Builder/_event_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Campaign\\Builder\\_event_list.html.twig");
    }
}
