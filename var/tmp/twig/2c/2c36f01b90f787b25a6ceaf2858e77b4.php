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

/* @MauticCampaign/Campaign/Builder/_index.html.twig */
class __TwigTemplate_66a2dfd8d70a8059ba5804d76a5ce0b6 extends Template
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
        $context["route"] = ((array_key_exists("route", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 6, $this->source); })()), "mautic_campaignevent_action")) : ("mautic_campaignevent_action"));
        // line 7
        yield "<div class=\"hide\" id=\"CampaignEventPanel\">
    <div id=\"CampaignEventPanelGroups\">
        <div class=\"row\">
            <div class=\"mr-0 ml-0 pl-xs pr-xs campaign-group-container col-md-4\" id=\"DecisionGroupSelector\">
                <div class=\"panel panel-success mb-0\">
                    <div class=\"panel-heading\">
                        <div class=\"col-xs-8 col-sm-10 np\">
                            <h3 class=\"panel-title\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.decision.header"), "html", null, true);
        yield "</h3>
                        </div>
                        <div class=\"col-xs-4 col-sm-2 pl-0 pr-0 pt-10 pb-10 text-right\">
                            <i class=\"hidden-xs fa fa-random fa-lg\"></i>
                            <button class=\"visible-xs pull-right btn btn-sm btn-default btn-nospin text-success\" data-type=\"Decision\">
                                ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.select"), "html", null, true);
        yield "
                            </button>
                        </div>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.decision.descr"), "html", null, true);
        yield "
                    </div>
                    <div class=\"hidden-xs panel-footer text-center\">
                        <button class=\"btn btn-lg btn-default btn-nospin text-success\" data-type=\"Decision\">
                            ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.select"), "html", null, true);
        yield "
                        </button>
                    </div>
                </div>
            </div>
            <div class=\"mr-0 ml-0 pl-xs pr-xs campaign-group-container col-md-4 \" id=\"ActionGroupSelector\">
                <div class=\"panel panel-primary mb-0\">
                    <div class=\"panel-heading\">
                        <div class=\"col-xs-8 col-sm-10 np\">
                            <h3 class=\"panel-title\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.action.header"), "html", null, true);
        yield "</h3>
                        </div>
                        <div class=\"col-xs-4 col-sm-2 pl-0 pr-0 pt-10 pb-10 text-right\">
                            <i class=\"hidden-xs fa fa-bullseye fa-lg\"></i>
                            <button class=\"visible-xs pull-right btn btn-sm btn-default btn-nospin text-primary\" data-type=\"Action\">
                                ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.select"), "html", null, true);
        yield "
                            </button>
                        </div>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.action.descr"), "html", null, true);
        yield "
                    </div>
                    <div class=\"hidden-xs panel-footer text-center\">
                        <button class=\"btn btn-lg btn-default btn-nospin text-primary\" data-type=\"Action\">
                            ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.select"), "html", null, true);
        yield "
                        </button>
                    </div>
                </div>
            </div>
            <div class=\"mr-0 ml-0 pl-xs pr-xs campaign-group-container col-md-4\" id=\"ConditionGroupSelector\">
                <div class=\"panel panel-danger mb-0\">
                    <div class=\"panel-heading\">
                        <div class=\"col-xs-8 col-sm-10 np\">
                            <h3 class=\"panel-title\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.condition.header"), "html", null, true);
        yield "</h3>
                        </div>
                        <div class=\"col-xs-4 col-sm-2 pl-0 pr-0 pt-10 pb-10 text-right\">
                            <i class=\"hidden-xs fa fa-filter fa-lg\"></i>
                            <button class=\"visible-xs pull-right btn btn-sm btn-default btn-nospin text-danger\" data-type=\"Condition\">
                                ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.select"), "html", null, true);
        yield "
                            </button>
                        </div>
                    </div>
                    <div class=\"panel-body\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.condition.descr"), "html", null, true);
        yield "</div>
                    <div class=\"hidden-xs panel-footer text-center\">
                        <button class=\"btn btn-lg btn-default btn-nospin\" data-type=\"Condition\">
                            ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.select"), "html", null, true);
        yield "
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"mr-0 ml-0 pl-xs pr-xs campaign-group-container col-md-12\">
                <div id=\"CampaignPasteContainer\" class=\"panel\">
                    <div id=\"CampaignPasteDescription\" class=\"panel-body\">
                        <div><b>";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.clone.header"), "html", null, true);
        yield "</b></div>
                        <div><span class=\"text-muted\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.clone.name"), "html", null, true);
        yield ": </span><span data-campaign-event-clone=\"sourceEventName\"></span></div>
                        <div><span class=\"text-muted\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.clone.from"), "html", null, true);
        yield ": </span><span data-campaign-event-clone=\"sourceCampaignName\"></span></div>

                    </div>
                    <div class=\"panel-footer\">
                        <a id=\"EventInsertButton\" data-toggle=\"ajax\" data-target=\"CampaignEvent_\" data-ignore-formexit=\"true\" data-method=\"POST\" data-hide-loadingbar=\"true\" href=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 88, $this->source); })()), ["objectAction" => "insert", "campaignId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 88, $this->source); })()), "anchor" => "none", "anchorEventType" => "none"]), "html", null, true);
        yield "\"  class=\"btn btn-lg btn-default\">
                            ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.clone.insert"), "html", null, true);
        yield "
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"CampaignEventPanelLists\" class=\"hide\">";
        // line 97
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Campaign/Builder/_source_list.html.twig", ["campaignSources" =>         // line 98
(isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 98, $this->source); })()), "campaignId" =>         // line 99
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 99, $this->source); })())]);
        // line 102
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Campaign/Builder/_event_list.html.twig", ["eventSettings" =>         // line 103
(isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 103, $this->source); })()), "campaignId" =>         // line 104
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 104, $this->source); })())]);
        // line 106
        yield "</div>
</div>
<div class=\"clearfix\"></div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCampaign/Campaign/Builder/_index.html.twig";
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
        return array (  194 => 106,  192 => 104,  191 => 103,  190 => 102,  188 => 99,  187 => 98,  186 => 97,  176 => 89,  172 => 88,  165 => 84,  161 => 83,  157 => 82,  144 => 72,  138 => 69,  131 => 65,  123 => 60,  111 => 51,  104 => 47,  96 => 42,  88 => 37,  76 => 28,  69 => 24,  61 => 19,  53 => 14,  44 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Campaign/Builder/_index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Campaign\\Builder\\_index.html.twig");
    }
}
