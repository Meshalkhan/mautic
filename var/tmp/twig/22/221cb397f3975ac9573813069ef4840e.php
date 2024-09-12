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

/* @MauticCampaign/Campaign/_builder.html.twig */
class __TwigTemplate_c342eaa13ec8dd16888268730ccaf133 extends Template
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
        // line 9
        echo "<div id=\"campaign-builder\" class=\"hide builder campaign-builder live\">
    <div class=\"btns-builder\">
        <button type=\"button\" class=\"btn btn-primary btn-apply-builder\" onclick=\"Mautic.saveCampaignFromBuilder();\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.apply"), "html", null, true);
        echo "</button>
        <button type=\"button\" class=\"btn btn-primary btn-close-campaign-builder\" onclick=\"Mautic.closeCampaignBuilder();\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close.builder"), "html", null, true);
        echo "</button>
    </div>
    <div id=\"builder-errors\" class=\"alert alert-danger\" role=\"alert\" style=\"display: none;\">test</div>
    <div class=\"builder-content\">
        <div id=\"CampaignCanvas\">
            <div id=\"CampaignEvent_newsource";
        // line 17
        if ((array_key_exists("campaignSources", $context) &&  !twig_test_empty((isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 17, $this->source); })())))) {
            echo "_hide";
        }
        echo "\" class=\"text-center list-campaign-source list-campaign-leadsource\">
                <div class=\"campaign-event-content\">
                    <div>
                        <span class=\"campaign-event-name ellipsis\">
                            <i class=\"mr-sm ri-team-line\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.add_new_source"), "html", null, true);
        echo "
                        </span>
                    </div>
                </div>
            </div>

            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 27, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
            // line 28
            echo twig_include($this->env, $context, "@MauticCampaign/Source/_index.html.twig", ["sourceType" => twig_get_attribute($this->env, $this->source,             // line 29
$context["source"], "sourceType", [], "any", false, false, false, 29), "names" => twig_get_attribute($this->env, $this->source,             // line 30
$context["source"], "names", [], "any", false, false, false, 30), "campaignId" => twig_get_attribute($this->env, $this->source,             // line 31
$context["source"], "campaignId", [], "any", false, false, false, 31)]);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 35, $this->source); })()));
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
            // line 36
            echo "                ";
            if (twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["event"], "deleted", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["event"], "deleted", [], "any", false, false, false, 36), null)) : (null)))) {
                // line 37
                echo "                  ";
                $context["settings"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eventSettings"] ?? null), twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 37), [], "array", false, true, false, 37), twig_get_attribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 37), [], "array", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eventSettings"] ?? null), twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 37), [], "array", false, true, false, 37), twig_get_attribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 37), [], "array", false, false, false, 37), null)) : (null));
                // line 38
                echo twig_include($this->env, $context, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", [], "array", true, true, false, 38)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", [], "array", false, false, false, 38), "@MauticCampaign/Event/_generic.html.twig")) : ("@MauticCampaign/Event/_generic.html.twig")), ["event" =>                 // line 39
$context["event"], "campaignId" =>                 // line 40
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 40, $this->source); })())]);
            }
            // line 43
            echo "            ";
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
        // line 45
        echo twig_include($this->env, $context, "@MauticCampaign/Campaign/Builder/_index.html.twig", ["campaignSources" =>         // line 46
(isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 46, $this->source); })()), "eventSettings" =>         // line 47
(isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 47, $this->source); })()), "campaignId" =>         // line 48
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 48, $this->source); })())]);
        // line 50
        echo "</div>
        <div id=\"EventJumpOverlay\"></div>
    </div>
</div>
<!-- dropped coordinates -->
<input type=\"hidden\" value=\"\" id=\"droppedX\"/>
<input type=\"hidden\" value=\"\" id=\"droppedY\"/>
<input type=\"hidden\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 57, $this->source); })()));
        echo "\" id=\"campaignId\"/>";
        // line 58
        echo twig_include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "CampaignEventModal", "header" => false, "footerButtons" => true, "dismissible" => false]);
        // line 64
        echo "<script>
    /**
     * We typecast to object here so that an empty value will
     * be encoded to {} instead of []. Adding JSON_FORCE_OBJECT
     * is not an option because it does a deep transform to
     * object, whereas typecasting only does the first level.
     */
    Mautic.campaignBuilderCanvasSettings = ";
        // line 71
        if ( !twig_test_empty((isset($context["canvasSettings"]) || array_key_exists("canvasSettings", $context) ? $context["canvasSettings"] : (function () { throw new RuntimeError('Variable "canvasSettings" does not exist.', 71, $this->source); })()))) {
            echo json_encode((isset($context["canvasSettings"]) || array_key_exists("canvasSettings", $context) ? $context["canvasSettings"] : (function () { throw new RuntimeError('Variable "canvasSettings" does not exist.', 71, $this->source); })()), twig_constant("JSON_PRETTY_PRINT"));
        } else {
            echo "{}";
        }
        echo ";
    Mautic.campaignBuilderCanvasSources = ";
        // line 72
        if ( !twig_test_empty((isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 72, $this->source); })()))) {
            echo json_encode((isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 72, $this->source); })()), twig_constant("JSON_PRETTY_PRINT"));
        } else {
            echo "{}";
        }
        echo ";
    Mautic.campaignBuilderCanvasEvents = ";
        // line 73
        if ( !twig_test_empty((isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 73, $this->source); })()))) {
            echo json_encode((isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 73, $this->source); })()), twig_constant("JSON_PRETTY_PRINT"));
        } else {
            echo "{}";
        }
        echo ";
    Mautic.campaignBuilderConnectionRestrictions = ";
        // line 74
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 74, $this->source); })()), "connectionRestrictions", [], "array", false, false, false, 74))) {
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 74, $this->source); })()), "connectionRestrictions", [], "array", false, false, false, 74), twig_constant("JSON_PRETTY_PRINT"));
        } else {
            echo "{}";
        }
        echo ";
    Mautic.campaignBuilderHasEventClone = ";
        // line 75
        if ((isset($context["hasEventClone"]) || array_key_exists("hasEventClone", $context) ? $context["hasEventClone"] : (function () { throw new RuntimeError('Variable "hasEventClone" does not exist.', 75, $this->source); })())) {
            echo "true";
        } else {
            echo "false";
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
        return "@MauticCampaign/Campaign/_builder.html.twig";
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
        return array (  210 => 75,  202 => 74,  194 => 73,  186 => 72,  178 => 71,  169 => 64,  167 => 58,  164 => 57,  155 => 50,  153 => 48,  152 => 47,  151 => 46,  150 => 45,  136 => 43,  133 => 40,  132 => 39,  131 => 38,  128 => 37,  125 => 36,  108 => 35,  105 => 34,  91 => 31,  90 => 30,  89 => 29,  88 => 28,  71 => 27,  62 => 21,  53 => 17,  45 => 12,  41 => 11,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCampaign/Campaign/_builder.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Campaign\\_builder.html.twig");
    }
}
