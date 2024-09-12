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

/* @MauticCampaign/Campaign/_preview.html.twig */
class __TwigTemplate_384527908ea7c40a57355e685a52d878 extends Template
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
        // line 10
        echo "<div class=\"builder campaign-builder preview\">
    <div class=\"builder-content\">
        <div id=\"CampaignCanvas\">
            <div id=\"CampaignEvent_newsource";
        // line 13
        if ( !twig_test_empty((isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 13, $this->source); })()))) {
            echo "_hide";
        }
        echo "\" class=\"text-center list-campaign-source list-campaign-leadsource\">
                <div class=\"campaign-event-content\">
                    <div>
                        <span class=\"campaign-event-name ellipsis\">
                            <i class=\"mr-sm ri-team-line\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.add_new_source"), "html", null, true);
        echo "
                        </span>
                    </div>
                </div>
            </div>

            ";
        // line 23
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 23, $this->source); })()), "forms", [], "any", false, false, false, 23))) {
            // line 24
            echo "              ";
            $context["names"] = [];
            // line 25
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 25, $this->source); })()), "forms", [], "any", false, false, false, 25), "toArray", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
                // line 26
                echo "                ";
                $context["names"] = ((isset($context["names"]) || array_key_exists("names", $context) ? $context["names"] : (function () { throw new RuntimeError('Variable "names" does not exist.', 26, $this->source); })()) + [twig_get_attribute($this->env, $this->source, $context["form"], "name", [], "any", false, false, false, 26)]);
                // line 27
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo twig_include($this->env, $context, "@MauticCampaign/Source/_index.html.twig", ["sourceType" => "forms", "campaignId" => twig_get_attribute($this->env, $this->source,             // line 30
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "names" => twig_join_filter(            // line 31
(isset($context["names"]) || array_key_exists("names", $context) ? $context["names"] : (function () { throw new RuntimeError('Variable "names" does not exist.', 31, $this->source); })()), ", ")]);
        }
        // line 34
        echo "
            ";
        // line 35
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 35, $this->source); })()), "lists", [], "any", false, false, false, 35))) {
            // line 36
            echo "              ";
            $context["names"] = [];
            // line 37
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 37, $this->source); })()), "lists", [], "any", false, false, false, 37), "toArray", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
                // line 38
                echo "                ";
                $context["names"] = ((isset($context["names"]) || array_key_exists("names", $context) ? $context["names"] : (function () { throw new RuntimeError('Variable "names" does not exist.', 38, $this->source); })()) + [twig_get_attribute($this->env, $this->source, $context["list"], "name", [], "any", false, false, false, 38)]);
                // line 39
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo twig_include($this->env, $context, "@MauticCampaign/Source/_index.html.twig", ["sourceType" => "lists", "campaignId" => twig_get_attribute($this->env, $this->source,             // line 42
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42), "names" => twig_join_filter(            // line 43
(isset($context["names"]) || array_key_exists("names", $context) ? $context["names"] : (function () { throw new RuntimeError('Variable "names" does not exist.', 43, $this->source); })()), ", ")]);
        }
        // line 46
        echo "
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 47, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 48
            echo twig_include($this->env, $context, "@MauticCampaign/Event/_preview.html.twig", ["event" =>             // line 49
$context["event"], "campaignId" => twig_get_attribute($this->env, $this->source,             // line 50
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo twig_include($this->env, $context, "@MauticCampaign/Campaign/Builder/_index.html.twig", ["campaignSources" =>         // line 55
(isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 55, $this->source); })()), "eventSettings" =>         // line 56
(isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 56, $this->source); })()), "campaignId" => twig_get_attribute($this->env, $this->source,         // line 57
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]);
        // line 59
        echo "</div>
    </div>
</div>
<!-- dropped coordinates -->
<input type=\"hidden\" value=\"\" id=\"droppedX\"/>
<input type=\"hidden\" value=\"\" id=\"droppedY\"/>
<input type=\"hidden\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65));
        echo "\" id=\"campaignId\"/>";
        // line 66
        echo twig_include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "CampaignEventModal", "header" => false, "footerButtons" => true, "dismissible" => false]);
        // line 72
        echo "<script>
    Mautic.campaignBuilderCanvasSettings = ";
        // line 73
        if ( !twig_test_empty((isset($context["canvasSettings"]) || array_key_exists("canvasSettings", $context) ? $context["canvasSettings"] : (function () { throw new RuntimeError('Variable "canvasSettings" does not exist.', 73, $this->source); })()))) {
            echo json_encode((isset($context["canvasSettings"]) || array_key_exists("canvasSettings", $context) ? $context["canvasSettings"] : (function () { throw new RuntimeError('Variable "canvasSettings" does not exist.', 73, $this->source); })()), twig_constant("JSON_PRETTY_PRINT"));
        } else {
            echo "{}";
        }
        echo ";
    Mautic.campaignBuilderCanvasSources = ";
        // line 74
        if ( !twig_test_empty((isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 74, $this->source); })()))) {
            echo json_encode((isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 74, $this->source); })()), twig_constant("JSON_PRETTY_PRINT"));
        } else {
            echo "{}";
        }
        echo ";
    Mautic.campaignBuilderCanvasEvents = ";
        // line 75
        if ( !twig_test_empty((isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 75, $this->source); })()))) {
            echo json_encode((isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 75, $this->source); })()), twig_constant("JSON_PRETTY_PRINT"));
        } else {
            echo "{}";
        }
        echo ";
    Mautic.campaignBuilderConnectionRestrictions = ";
        // line 76
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 76, $this->source); })()), "connectionRestrictions", [], "array", false, false, false, 76))) {
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 76, $this->source); })()), "connectionRestrictions", [], "array", false, false, false, 76), twig_constant("JSON_PRETTY_PRINT"));
        } else {
            echo "{}";
        }
        echo ";
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCampaign/Campaign/_preview.html.twig";
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
        return array (  192 => 76,  184 => 75,  176 => 74,  168 => 73,  165 => 72,  163 => 66,  160 => 65,  152 => 59,  150 => 57,  149 => 56,  148 => 55,  147 => 54,  133 => 50,  132 => 49,  131 => 48,  114 => 47,  111 => 46,  108 => 43,  107 => 42,  106 => 40,  100 => 39,  97 => 38,  92 => 37,  89 => 36,  87 => 35,  84 => 34,  81 => 31,  80 => 30,  79 => 28,  73 => 27,  70 => 26,  65 => 25,  62 => 24,  60 => 23,  51 => 17,  42 => 13,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCampaign/Campaign/_preview.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Campaign\\_preview.html.twig");
    }
}
