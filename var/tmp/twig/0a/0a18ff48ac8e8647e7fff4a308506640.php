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

/* @MauticLead/SubscribedEvents/Timeline/ipadded.html.twig */
class __TwigTemplate_cfc1b3eab3594854886b7660a43a7f52 extends Template
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
        $context["ip"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 5, $this->source); })()), "extra", [], "any", false, false, false, 5), "ipDetails", [], "any", false, false, false, 5);
        // line 6
        if ($this->env->getTest('object')->getCallable()((isset($context["ip"]) || array_key_exists("ip", $context) ? $context["ip"] : (function () { throw new RuntimeError('Variable "ip" does not exist.', 6, $this->source); })()))) {
            // line 7
            echo "  ";
            $context["details"] = twig_get_attribute($this->env, $this->source, (isset($context["ip"]) || array_key_exists("ip", $context) ? $context["ip"] : (function () { throw new RuntimeError('Variable "ip" does not exist.', 7, $this->source); })()), "ipDetails", [], "any", false, false, false, 7);
            // line 8
            echo "
  ";
            // line 9
            if ((twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "organization", [], "any", true, true, false, 9) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 9, $this->source); })()), "organization", [], "any", false, false, false, 9)))) {
                // line 10
                echo "      <i class=\"ri-building-2-line\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 10, $this->source); })()), "organization", [], "array", false, false, false, 10), "html", null, true);
                echo "</i><br />
  ";
            }
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/SubscribedEvents/Timeline/ipadded.html.twig";
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
        return array (  49 => 10,  47 => 9,  44 => 8,  41 => 7,  39 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/SubscribedEvents/Timeline/ipadded.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\SubscribedEvents\\Timeline\\ipadded.html.twig");
    }
}
