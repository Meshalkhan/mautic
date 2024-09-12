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

/* @MauticCampaign/Campaign/Builder/_event_list.html.twig */
class __TwigTemplate_b47c658f670cd6b60a7691b0d65094cc extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["action" => "primary", "decision" => "success", "condition" => "danger"]);
        foreach ($context['_seq'] as $context["eventGroup"] => $context["color"]) {
            // line 7
            yield "    <div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $context["eventGroup"]), "html", null, true);
            yield "GroupList\" class=\"hide\">
        <h4 class=\"mb-xs\">
            <span>";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("mautic.campaign.event." . $context["eventGroup"]) . "s.header")), "html", null, true);
            yield "</span>
            <button class=\"pull-right btn btn-xs btn-nospin btn-";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color"], "html", null, true);
            yield "\">
                <i class=\"fa fa-fw ri-corner-right-up-line\"></i>
            </button>
        </h4>
        <select id=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $context["eventGroup"]), "html", null, true);
            yield "List\" class=\"campaign-event-selector\">
            <option value=\"\"></option>
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 16, $this->source); })()), $context["eventGroup"], [], "array", false, false, false, 16));
            foreach ($context['_seq'] as $context["k"] => $context["e"]) {
                // line 17
                yield "                <option id=\"campaignEvent_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["k"], ["." => ""]), "html", null, true);
                yield "\"
                        class=\"option_campaignEvent_";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["k"], ["." => ""]), "html", null, true);
                yield "\"
                        data-href=\"";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaignevent_action", ["objectAction" => "new", "type" =>                 // line 21
$context["k"], "eventType" =>                 // line 22
$context["eventGroup"], "campaignId" =>                 // line 23
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 23, $this->source); })()), "anchor" => ""]), "html", null, true);
                // line 25
                yield "\"
                        data-target=\"#CampaignEventModal\"
                        title=\"";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "description", [], "array", false, false, false, 27));
                yield "\"
                        value=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]);
                yield "\">
                    <span>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "label", [], "array", false, false, false, 29), "html", null, true);
                yield "</span>
                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['e'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "        </select>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['eventGroup'], $context['color'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCampaign/Campaign/Builder/_event_list.html.twig";
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
        return array (  107 => 32,  98 => 29,  94 => 28,  90 => 27,  86 => 25,  84 => 23,  83 => 22,  82 => 21,  81 => 19,  77 => 18,  72 => 17,  68 => 16,  63 => 14,  56 => 10,  52 => 9,  46 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Campaign/Builder/_event_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Campaign\\Builder\\_event_list.html.twig");
    }
}
