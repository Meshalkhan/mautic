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

/* @MauticReport/Report/_details_content_footer.html.twig */
class __TwigTemplate_7daf5638fcb44f6f25affbdc2a8bfac2 extends Template
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
        echo "</div>
";
        // line 2
        if ((array_key_exists("debug", $context) && twig_get_attribute($this->env, $this->source, ($context["debug"] ?? null), "count_query", [], "any", true, true, false, 2))) {
            // line 3
            echo "  <div class=\"well\">
      <h4>Debug: ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["debug"]) || array_key_exists("debug", $context) ? $context["debug"] : (function () { throw new RuntimeError('Variable "debug" does not exist.', 4, $this->source); })()), "query_time", [], "any", false, false, false, 4), "html", null, true);
            echo "</h4>
      <div>";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["debug"]) || array_key_exists("debug", $context) ? $context["debug"] : (function () { throw new RuntimeError('Variable "debug" does not exist.', 5, $this->source); })()), "count_query", [], "any", false, false, false, 5), "html", null, true);
            echo "</div>
      <br />
      <div>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["debug"]) || array_key_exists("debug", $context) ? $context["debug"] : (function () { throw new RuntimeError('Variable "debug" does not exist.', 7, $this->source); })()), "query", [], "any", false, false, false, 7), "html", null, true);
            echo "</div>
  </div>
";
        }
        // line 10
        echo "<!--/ end: box layout -->
<input type=\"hidden\" name=\"entityId\" id=\"entityId\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11));
        echo "\"/>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticReport/Report/_details_content_footer.html.twig";
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
        return array (  63 => 11,  60 => 10,  54 => 7,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticReport/Report/_details_content_footer.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Resources\\views\\Report\\_details_content_footer.html.twig");
    }
}
