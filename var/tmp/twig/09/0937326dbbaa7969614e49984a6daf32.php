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

/* @MauticLead/Lead/_dnc_large.html.twig */
class __TwigTemplate_ba979746f68611e661abb9b94ba317d5 extends Template
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
        // line 5
        echo "<div id=\"bounceLabel";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
    <div class=\"panel-heading text-center\">
        <h4 class=\"fw-sb\">
            ";
        // line 8
        if ((twig_constant("\\Mautic\\LeadBundle\\Entity\\DoNotContact::UNSUBSCRIBED") == twig_get_attribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 8, $this->source); })()), "reason", [], "any", false, false, false, 8))) {
            // line 9
            echo "              <span class=\"label label-danger\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Mautic\LeadBundle\Twig\Extension\DncReasonExtension']->toText(twig_get_attribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 9, $this->source); })()), "reason", [], "any", false, false, false, 9)), "html", null, true);
            echo "\">
                ";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.do.not.contact_channel", ["%channel%" => twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 10, $this->source); })()), "channel", [], "any", false, false, false, 10))]), "html", null, true);
            echo "
              </span>
            ";
        } elseif ((twig_constant("\\Mautic\\LeadBundle\\Entity\\DoNotContact::MANUAL") == twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 12, $this->source); })()), "reason", [], "any", false, false, false, 12))) {
            // line 13
            echo "              <span class=\"label label-danger\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Mautic\LeadBundle\Twig\Extension\DncReasonExtension']->toText(twig_get_attribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 13, $this->source); })()), "reason", [], "any", false, false, false, 13)), "html", null, true);
            echo "\">
                ";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.do.not.contact_channel", ["%channel%" => twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 14, $this->source); })()), "channel", [], "any", false, false, false, 14))]), "html", null, true);
            echo "
                <span data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.remove_dnc_status"), "html", null, true);
            echo "\">
                  <i class=\"ri-close-line has-click-event\" onclick=\"Mautic.removeBounceStatus(this, ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 16, $this->source); })()), "channel", [], "any", false, false, false, 16), "html", null, true);
            echo "');\"></i>
                </span>
              </span>
            ";
        } elseif ((twig_constant("\\Mautic\\LeadBundle\\Entity\\DoNotContact::BOUNCED") == twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 19, $this->source); })()), "reason", [], "any", false, false, false, 19))) {
            // line 20
            echo "              <span class=\"label label-warning\" data-toggle=\"tooltip\" title=\"";
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 20, $this->source); })()), "comments", [], "any", false, false, false, 20));
            echo "\">
                ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.do.not.contact_bounced_channel", ["%channel%" => twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 21, $this->source); })()), "channel", [], "any", false, false, false, 21))]), "html", null, true);
            echo "
                <span data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.remove_dnc_status"), "html", null, true);
            echo "\">
                  <i class=\"ri-close-line has-click-event\" onclick=\"Mautic.removeBounceStatus(this, ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 23, $this->source); })()), "channel", [], "any", false, false, false, 23), "html", null, true);
            echo "');\"></i>
                </span>
              </span>
            ";
        }
        // line 27
        echo "        </h4>
        <hr>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Lead/_dnc_large.html.twig";
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
        return array (  103 => 27,  94 => 23,  90 => 22,  86 => 21,  81 => 20,  79 => 19,  71 => 16,  67 => 15,  63 => 14,  58 => 13,  56 => 12,  51 => 10,  46 => 9,  44 => 8,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Lead/_dnc_large.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\_dnc_large.html.twig");
    }
}
