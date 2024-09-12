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

/* @MauticReport/Graph/Pie.html.twig */
class __TwigTemplate_a45246e6291d659846acd453785afa10 extends Template
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
        echo "<div class=\"col-md-4\">
    <div class=\"panel ovf-h bg-light-xs\">
        <div class=\"panel-body box-layout pb-0\">
            <div class=\"col-xs-8 va-m\">
                <h5 class=\"dark-md fw-sb mb-xs\">
                    ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["graph"]) || array_key_exists("graph", $context) ? $context["graph"] : (function () { throw new RuntimeError('Variable "graph" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6)), "html", null, true);
        echo "
                </h5>
            </div>
            <div class=\"col-xs-4 va-t text-right\">
                <h3 class=\"text-white dark-sm\"><span class=\"fa ";
        // line 10
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["graph"] ?? null), "iconClass", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["graph"] ?? null), "iconClass", [], "any", false, false, false, 10), "")) : ("")), "html", null, true);
        echo "\"></span></h3>
            </div>
        </div>
        ";
        // line 13
        echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => twig_get_attribute($this->env, $this->source, (isset($context["graph"]) || array_key_exists("graph", $context) ? $context["graph"] : (function () { throw new RuntimeError('Variable "graph" does not exist.', 13, $this->source); })()), "data", [], "any", false, false, false, 13), "chartType" => "pie", "chartHeight" => 210]);
        echo "
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticReport/Graph/Pie.html.twig";
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
        return array (  57 => 13,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticReport/Graph/Pie.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Resources\\views\\Graph\\Pie.html.twig");
    }
}
