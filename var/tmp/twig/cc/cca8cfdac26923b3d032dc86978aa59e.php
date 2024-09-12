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

/* @MauticLead/Lead/lead_stats.html.twig */
class __TwigTemplate_4734f7c85dcf79017a4f0b88e8480c45 extends Template
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
        // line 1
        if (array_key_exists("emailStats", $context)) {
            // line 2
            echo "<div class=\"lead-stats-title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.stats.email_title"), "html", null, true);
            echo "</div>
<div class=\"lead-stats\">
    <div class=\"lead-stats-el\">
        <span class=\"lead-stats-name\">";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.stats.sent_count"), "html", null, true);
            echo "</span>
        <span class=\"lead-stats-val\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["emailStats"]) || array_key_exists("emailStats", $context) ? $context["emailStats"] : (function () { throw new RuntimeError('Variable "emailStats" does not exist.', 6, $this->source); })()), "sent_count", [], "array", false, false, false, 6), "html", null, true);
            echo "</span>
    </div>
    <div>
        <span class=\"lead-stats-name\">";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.stats.open_rate"), "html", null, true);
            echo "</span>
        <span class=\"lead-stats-val\">";
            // line 10
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["emailStats"]) || array_key_exists("emailStats", $context) ? $context["emailStats"] : (function () { throw new RuntimeError('Variable "emailStats" does not exist.', 10, $this->source); })()), "open_rate", [], "array", false, false, false, 10) * 100), "html", null, true);
            echo "%</span>
    </div>
    <div>
        <span class=\"lead-stats-name\">";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.stats.click_through_rate"), "html", null, true);
            echo "</span>
        <span class=\"lead-stats-val\">";
            // line 14
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["emailStats"]) || array_key_exists("emailStats", $context) ? $context["emailStats"] : (function () { throw new RuntimeError('Variable "emailStats" does not exist.', 14, $this->source); })()), "click_through_rate", [], "array", false, false, false, 14) * 100), "html", null, true);
            echo "%</span>
    </div>
    <div>
        <span class=\"lead-stats-name\">";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.stats.click_through_open_rate"), "html", null, true);
            echo "</span>
        <span class=\"lead-stats-val\">";
            // line 18
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["emailStats"]) || array_key_exists("emailStats", $context) ? $context["emailStats"] : (function () { throw new RuntimeError('Variable "emailStats" does not exist.', 18, $this->source); })()), "click_through_open_rate", [], "array", false, false, false, 18) * 100), "html", null, true);
            echo "%</span>
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
        return "@MauticLead/Lead/lead_stats.html.twig";
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
        return array (  80 => 18,  76 => 17,  70 => 14,  66 => 13,  60 => 10,  56 => 9,  50 => 6,  46 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Lead/lead_stats.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\lead_stats.html.twig");
    }
}
