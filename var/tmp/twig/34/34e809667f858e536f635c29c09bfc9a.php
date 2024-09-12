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

/* @MauticCampaign/Source/_index.html.twig */
class __TwigTemplate_216cb2ec36bc71b9179fa78001536497 extends Template
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
        // line 7
        $context["sourceType"] = ((array_key_exists("sourceType", $context)) ? (_twig_default_filter((isset($context["sourceType"]) || array_key_exists("sourceType", $context) ? $context["sourceType"] : (function () { throw new RuntimeError('Variable "sourceType" does not exist.', 7, $this->source); })()), null)) : (null));
        // line 8
        echo "
";
        // line 9
        if (( !array_key_exists("update", $context) || twig_test_empty((isset($context["update"]) || array_key_exists("update", $context) ? $context["update"] : (function () { throw new RuntimeError('Variable "update" does not exist.', 9, $this->source); })())))) {
            // line 10
            echo "  <div id=\"CampaignEvent_";
            echo twig_escape_filter($this->env, (isset($context["sourceType"]) || array_key_exists("sourceType", $context) ? $context["sourceType"] : (function () { throw new RuntimeError('Variable "sourceType" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\" data-type=\"source\" class=\"draggable list-campaign-source list-campaign-leadsource\">
";
        }
        // line 12
        echo "
<div class=\"campaign-event-content\">
    <div><span class=\"campaign-event-name ellipsis\"><i class=\"mr-sm fa fa-";
        // line 14
        if (("lists" == (isset($context["sourceType"]) || array_key_exists("sourceType", $context) ? $context["sourceType"] : (function () { throw new RuntimeError('Variable "sourceType" does not exist.', 14, $this->source); })()))) {
            echo "list";
        } else {
            echo "pencil-square-o";
        }
        echo "\"></i>";
        echo twig_escape_filter($this->env, ((array_key_exists("names", $context)) ? (_twig_default_filter((isset($context["names"]) || array_key_exists("names", $context) ? $context["names"] : (function () { throw new RuntimeError('Variable "names" does not exist.', 14, $this->source); })()), null)) : (null)), "html", null, true);
        echo "</span></div>
</div>

";
        // line 17
        if (( !array_key_exists("update", $context) || twig_test_empty((isset($context["update"]) || array_key_exists("update", $context) ? $context["update"] : (function () { throw new RuntimeError('Variable "update" does not exist.', 17, $this->source); })())))) {
            // line 18
            echo "  <div class=\"campaign-event-buttons hide\">
    <a data-toggle=\"ajaxmodal\" data-prevent-dismiss=\"true\" data-target=\"#CampaignEventModal\"
       href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaignsource_action", ["objectAction" => "edit", "objectId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 20, $this->source); })()), "sourceType" => (isset($context["sourceType"]) || array_key_exists("sourceType", $context) ? $context["sourceType"] : (function () { throw new RuntimeError('Variable "sourceType" does not exist.', 20, $this->source); })())]), "html", null, true);
            echo "\"
       class=\"btn btn-primary btn-xs btn-edit\"><i class=\"ri-edit-line\"></i></a>
    <a data-toggle=\"ajax\"
       data-target=\"CampaignEvent_";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["sourceType"]) || array_key_exists("sourceType", $context) ? $context["sourceType"] : (function () { throw new RuntimeError('Variable "sourceType" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\"
       data-ignore-formexit=\"true\"
       data-method=\"POST\"
       data-hide-loadingbar=\"true\"
       href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaignsource_action", ["objectAction" => "delete", "objectId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 27, $this->source); })()), "sourceType" => (isset($context["sourceType"]) || array_key_exists("sourceType", $context) ? $context["sourceType"] : (function () { throw new RuntimeError('Variable "sourceType" does not exist.', 27, $this->source); })())]), "html", null, true);
            echo "\"
       class=\"btn btn-delete btn-danger btn-xs\"><i class=\"ri-close-line\"></i></a>
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
        return "@MauticCampaign/Source/_index.html.twig";
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
        return array (  85 => 27,  78 => 23,  72 => 20,  68 => 18,  66 => 17,  54 => 14,  50 => 12,  44 => 10,  42 => 9,  39 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCampaign/Source/_index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Source\\_index.html.twig");
    }
}
