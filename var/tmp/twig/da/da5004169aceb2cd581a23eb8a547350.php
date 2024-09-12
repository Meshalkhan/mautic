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

/* @MauticCampaign/Campaign/_builder.html.twig */
class __TwigTemplate_50951833d181697ab56451e85946d22c extends Template
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
        // line 9
        yield "<div id=\"campaign-builder\" class=\"hide builder campaign-builder live\">
    <div class=\"btns-builder\">
        <button type=\"button\" class=\"btn btn-primary btn-apply-builder\" onclick=\"Mautic.saveCampaignFromBuilder();\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.apply"), "html", null, true);
        yield "</button>
        <button type=\"button\" class=\"btn btn-primary btn-close-campaign-builder\" onclick=\"Mautic.closeCampaignBuilder();\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close.builder"), "html", null, true);
        yield "</button>
    </div>
    <div id=\"builder-errors\" class=\"alert alert-danger\" role=\"alert\" style=\"display: none;\">test</div>
    <div class=\"builder-content\">
        <div id=\"CampaignCanvas\">
            <div id=\"CampaignEvent_newsource";
        // line 17
        if ((array_key_exists("campaignSources", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 17, $this->source); })())))) {
            yield "_hide";
        }
        yield "\" class=\"text-center list-campaign-source list-campaign-leadsource\">
                <div class=\"campaign-event-content\">
                    <div>
                        <span class=\"campaign-event-name ellipsis\">
                            <i class=\"mr-sm ri-team-line\"></i> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.add_new_source"), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
            </div>

            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 27, $this->source); })()));
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
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Source/_index.html.twig", ["sourceType" => CoreExtension::getAttribute($this->env, $this->source,             // line 29
$context["source"], "sourceType", [], "any", false, false, false, 29), "names" => CoreExtension::getAttribute($this->env, $this->source,             // line 30
$context["source"], "names", [], "any", false, false, false, 30), "campaignId" => CoreExtension::getAttribute($this->env, $this->source,             // line 31
$context["source"], "campaignId", [], "any", false, false, false, 31)]);
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
        unset($context['_seq'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 35, $this->source); })()));
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
            yield "                ";
            if (Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "deleted", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "deleted", [], "any", false, false, false, 36), null)) : (null)))) {
                // line 37
                yield "                  ";
                $context["settings"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["eventSettings"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 37), [], "array", false, true, false, 37), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 37), [], "array", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["eventSettings"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 37), [], "array", false, true, false, 37), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 37), [], "array", false, false, false, 37), null)) : (null));
                // line 38
                yield Twig\Extension\CoreExtension::include($this->env, $context, ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "template", [], "array", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "template", [], "array", false, false, false, 38), "@MauticCampaign/Event/_generic.html.twig")) : ("@MauticCampaign/Event/_generic.html.twig")), ["event" =>                 // line 39
$context["event"], "campaignId" =>                 // line 40
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 40, $this->source); })())]);
            }
            // line 43
            yield "            ";
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
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Campaign/Builder/_index.html.twig", ["campaignSources" =>         // line 46
(isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 46, $this->source); })()), "eventSettings" =>         // line 47
(isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 47, $this->source); })()), "campaignId" =>         // line 48
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 48, $this->source); })())]);
        // line 50
        yield "</div>
        <div id=\"EventJumpOverlay\"></div>
    </div>
</div>
<!-- dropped coordinates -->
<input type=\"hidden\" value=\"\" id=\"droppedX\"/>
<input type=\"hidden\" value=\"\" id=\"droppedY\"/>
<input type=\"hidden\" value=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 57, $this->source); })()));
        yield "\" id=\"campaignId\"/>";
        // line 58
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "CampaignEventModal", "header" => false, "footerButtons" => true, "dismissible" => false]);
        // line 64
        yield "<script>
    /**
     * We typecast to object here so that an empty value will
     * be encoded to {} instead of []. Adding JSON_FORCE_OBJECT
     * is not an option because it does a deep transform to
     * object, whereas typecasting only does the first level.
     */
    Mautic.campaignBuilderCanvasSettings = ";
        // line 71
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["canvasSettings"]) || array_key_exists("canvasSettings", $context) ? $context["canvasSettings"] : (function () { throw new RuntimeError('Variable "canvasSettings" does not exist.', 71, $this->source); })()))) {
            yield json_encode((isset($context["canvasSettings"]) || array_key_exists("canvasSettings", $context) ? $context["canvasSettings"] : (function () { throw new RuntimeError('Variable "canvasSettings" does not exist.', 71, $this->source); })()), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT"));
        } else {
            yield "{}";
        }
        yield ";
    Mautic.campaignBuilderCanvasSources = ";
        // line 72
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 72, $this->source); })()))) {
            yield json_encode((isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 72, $this->source); })()), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT"));
        } else {
            yield "{}";
        }
        yield ";
    Mautic.campaignBuilderCanvasEvents = ";
        // line 73
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 73, $this->source); })()))) {
            yield json_encode((isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 73, $this->source); })()), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT"));
        } else {
            yield "{}";
        }
        yield ";
    Mautic.campaignBuilderConnectionRestrictions = ";
        // line 74
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 74, $this->source); })()), "connectionRestrictions", [], "array", false, false, false, 74))) {
            yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 74, $this->source); })()), "connectionRestrictions", [], "array", false, false, false, 74), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT"));
        } else {
            yield "{}";
        }
        yield ";
    Mautic.campaignBuilderHasEventClone = ";
        // line 75
        if ((isset($context["hasEventClone"]) || array_key_exists("hasEventClone", $context) ? $context["hasEventClone"] : (function () { throw new RuntimeError('Variable "hasEventClone" does not exist.', 75, $this->source); })())) {
            yield "true";
        } else {
            yield "false";
        }
        yield ";
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCampaign/Campaign/_builder.html.twig";
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
        return array (  215 => 75,  207 => 74,  199 => 73,  191 => 72,  183 => 71,  174 => 64,  172 => 58,  169 => 57,  160 => 50,  158 => 48,  157 => 47,  156 => 46,  155 => 45,  141 => 43,  138 => 40,  137 => 39,  136 => 38,  133 => 37,  130 => 36,  113 => 35,  110 => 34,  96 => 31,  95 => 30,  94 => 29,  93 => 28,  76 => 27,  67 => 21,  58 => 17,  50 => 12,  46 => 11,  42 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Campaign/_builder.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Campaign\\_builder.html.twig");
    }
}
