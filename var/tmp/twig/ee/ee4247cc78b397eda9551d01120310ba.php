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

/* @MauticLead/SubscribedEvents/Timeline/donotcontact.html.twig */
class __TwigTemplate_8b9a864c75f7fc1aecc7be58a44d612c extends Template
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
        $context["dnc"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 5, $this->source); })()), "extra", [], "any", false, false, false, 5), "dnc", [], "any", false, false, false, 5);
        // line 6
        echo "<p><strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnc"]) || array_key_exists("dnc", $context) ? $context["dnc"] : (function () { throw new RuntimeError('Variable "dnc" does not exist.', 6, $this->source); })()), "reason", [], "any", false, false, false, 6), "html", null, true);
        echo "</strong></p>
";
        // line 7
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["dnc"]) || array_key_exists("dnc", $context) ? $context["dnc"] : (function () { throw new RuntimeError('Variable "dnc" does not exist.', 7, $this->source); })()), "comments", [], "any", false, false, false, 7))) {
            // line 8
            echo "  <p class=\"small\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dnc"]) || array_key_exists("dnc", $context) ? $context["dnc"] : (function () { throw new RuntimeError('Variable "dnc" does not exist.', 8, $this->source); })()), "comments", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/SubscribedEvents/Timeline/donotcontact.html.twig";
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
        return array (  46 => 8,  44 => 7,  39 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/SubscribedEvents/Timeline/donotcontact.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\SubscribedEvents\\Timeline\\donotcontact.html.twig");
    }
}
