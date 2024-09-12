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

/* @MauticCampaign/Source/_index.html.twig */
class __TwigTemplate_445f88b6f1a97aa18231a055d5682b77 extends Template
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
        // line 7
        $context["sourceType"] = ((array_key_exists("sourceType", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sourceType"]) || array_key_exists("sourceType", $context) ? $context["sourceType"] : (function () { throw new RuntimeError('Variable "sourceType" does not exist.', 7, $this->source); })()), null)) : (null));
        // line 8
        yield "
";
        // line 9
        if (( !array_key_exists("update", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["update"]) || array_key_exists("update", $context) ? $context["update"] : (function () { throw new RuntimeError('Variable "update" does not exist.', 9, $this->source); })())))) {
            // line 10
            yield "  <div id=\"CampaignEvent_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sourceType"]) || array_key_exists("sourceType", $context) ? $context["sourceType"] : (function () { throw new RuntimeError('Variable "sourceType" does not exist.', 10, $this->source); })()), "html", null, true);
            yield "\" data-type=\"source\" class=\"draggable list-campaign-source list-campaign-leadsource\">
";
        }
        // line 12
        yield "
<div class=\"campaign-event-content\">
    <div><span class=\"campaign-event-name ellipsis\"><i class=\"mr-sm fa fa-";
        // line 14
        if (("lists" == (isset($context["sourceType"]) || array_key_exists("sourceType", $context) ? $context["sourceType"] : (function () { throw new RuntimeError('Variable "sourceType" does not exist.', 14, $this->source); })()))) {
            yield "list";
        } else {
            yield "pencil-square-o";
        }
        yield "\"></i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("names", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["names"]) || array_key_exists("names", $context) ? $context["names"] : (function () { throw new RuntimeError('Variable "names" does not exist.', 14, $this->source); })()), null)) : (null)), "html", null, true);
        yield "</span></div>
</div>

";
        // line 17
        if (( !array_key_exists("update", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["update"]) || array_key_exists("update", $context) ? $context["update"] : (function () { throw new RuntimeError('Variable "update" does not exist.', 17, $this->source); })())))) {
            // line 18
            yield "  <div class=\"campaign-event-buttons hide\">
    <a data-toggle=\"ajaxmodal\" data-prevent-dismiss=\"true\" data-target=\"#CampaignEventModal\"
       href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaignsource_action", ["objectAction" => "edit", "objectId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 20, $this->source); })()), "sourceType" => (isset($context["sourceType"]) || array_key_exists("sourceType", $context) ? $context["sourceType"] : (function () { throw new RuntimeError('Variable "sourceType" does not exist.', 20, $this->source); })())]), "html", null, true);
            yield "\"
       class=\"btn btn-primary btn-xs btn-edit\"><i class=\"ri-edit-line\"></i></a>
    <a data-toggle=\"ajax\"
       data-target=\"CampaignEvent_";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sourceType"]) || array_key_exists("sourceType", $context) ? $context["sourceType"] : (function () { throw new RuntimeError('Variable "sourceType" does not exist.', 23, $this->source); })()), "html", null, true);
            yield "\"
       data-ignore-formexit=\"true\"
       data-method=\"POST\"
       data-hide-loadingbar=\"true\"
       href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaignsource_action", ["objectAction" => "delete", "objectId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 27, $this->source); })()), "sourceType" => (isset($context["sourceType"]) || array_key_exists("sourceType", $context) ? $context["sourceType"] : (function () { throw new RuntimeError('Variable "sourceType" does not exist.', 27, $this->source); })())]), "html", null, true);
            yield "\"
       class=\"btn btn-delete btn-danger btn-xs\"><i class=\"ri-close-line\"></i></a>
  </div>
</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCampaign/Source/_index.html.twig";
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
        return array (  90 => 27,  83 => 23,  77 => 20,  73 => 18,  71 => 17,  59 => 14,  55 => 12,  49 => 10,  47 => 9,  44 => 8,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Source/_index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Source\\_index.html.twig");
    }
}
