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

/* @MauticCampaign/Campaign/Builder/_source_list.html.twig */
class __TwigTemplate_e449cf93a80ef0fd56992119826d3195 extends Template
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
        echo "<div id=\"SourceGroupList\" class=\"hide\">
    <h4 class=\"mb-xs\">
        <span>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.leadsource.header"), "html", null, true);
        echo "</span>
    </h4>
    <select id=\"SourceList\" class=\"campaign-event-selector\">
        <option value=\"\"></option>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(["lists", "forms"]);
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 13
            echo "            <option id=\"campaignLeadSource_";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "\"
                    class=\"option_campaignLeadSource_";
            // line 14
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "\"
                    data-href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaignsource_action", ["objectAction" => "new", "objectId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 15, $this->source); })()), "sourceType" => $context["option"]]), "html", null, true);
            echo "\"
                    data-target=\"#CampaignEventModal\"
                    title=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("mautic.campaign.leadsource." . $context["option"]) . ".tooltip")));
            echo "\"
                    value=\"";
            // line 18
            echo twig_escape_filter($this->env, $context["option"]);
            echo "\"
                    ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, ($context["campaignSources"] ?? null), $context["option"], [], "array", true, true, false, 19)) {
                echo "disabled";
            }
            echo ">
                <span>";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.campaign.leadsource." . $context["option"])), "html", null, true);
            echo "</span>
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </select>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCampaign/Campaign/Builder/_source_list.html.twig";
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
        return array (  89 => 23,  80 => 20,  74 => 19,  70 => 18,  66 => 17,  61 => 15,  57 => 14,  52 => 13,  48 => 12,  41 => 8,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCampaign/Campaign/Builder/_source_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Campaign\\Builder\\_source_list.html.twig");
    }
}
