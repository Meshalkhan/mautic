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

/* @MauticLead/LeadCampaigns/index.html.twig */
class __TwigTemplate_57919337b408669b194446612d67f713 extends Template
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
        $context["leadId"] = twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6);
        // line 7
        $context["leadName"] = twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 7, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 7);
        // line 8
        if ( !twig_test_empty((isset($context["campaigns"]) || array_key_exists("campaigns", $context) ? $context["campaigns"] : (function () { throw new RuntimeError('Variable "campaigns" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "<ul class=\"list-group\">
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["campaigns"]) || array_key_exists("campaigns", $context) ? $context["campaigns"] : (function () { throw new RuntimeError('Variable "campaigns" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 11
                echo "        ";
                $context["switch"] = ((twig_get_attribute($this->env, $this->source, $context["c"], "inCampaign", [], "any", false, false, false, 11)) ? ("fa-toggle-on") : ("fa-toggle-off"));
                // line 12
                echo "        ";
                $context["bgClass"] = ((twig_get_attribute($this->env, $this->source, $context["c"], "inCampaign", [], "any", false, false, false, 12)) ? ("text-success") : ("text-danger"));
                // line 13
                echo "    <li class=\"list-group-item\">
        <i class=\"fa fa-lg fa-fw ";
                // line 14
                echo twig_escape_filter($this->env, (isset($context["switch"]) || array_key_exists("switch", $context) ? $context["switch"] : (function () { throw new RuntimeError('Variable "switch" does not exist.', 14, $this->source); })()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["bgClass"]) || array_key_exists("bgClass", $context) ? $context["bgClass"] : (function () { throw new RuntimeError('Variable "bgClass" does not exist.', 14, $this->source); })()), "html", null, true);
                echo "\" id=\"leadCampaignToggle";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 14), "html", null, true);
                echo "\" onclick=\"Mautic.toggleLeadCampaign('leadCampaignToggle";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 14), "html", null, true);
                echo "', ";
                echo twig_escape_filter($this->env, (isset($context["leadId"]) || array_key_exists("leadId", $context) ? $context["leadId"] : (function () { throw new RuntimeError('Variable "leadId" does not exist.', 14, $this->source); })()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 14), "html", null, true);
                echo ");\"></i>
        <a data-dismiss=\"modal\" class=\"pull-right\" href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_campaign_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 15)]), "html", null, true);
                echo "\" data-toggle=\"ajax\"><span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.id"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 15), "html", null, true);
                echo "</span></a>
        <span> ";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 16), "html", null, true);
                echo "</span>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "</ul>
";
        } else {
            // line 21
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.lead.notfound"), "html", null, true);
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/LeadCampaigns/index.html.twig";
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
        return array (  94 => 21,  90 => 19,  81 => 16,  73 => 15,  59 => 14,  56 => 13,  53 => 12,  50 => 11,  46 => 10,  43 => 9,  41 => 8,  39 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/LeadCampaigns/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\LeadCampaigns\\index.html.twig");
    }
}
