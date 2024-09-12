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

/* @MauticReport/Graph/Line.html.twig */
class __TwigTemplate_39e1c5a27827da8f566f733e8ae3ebd7 extends Template
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
        echo "<div class=\"col-sm-12\">
    <div class=\"panel\">
        <div class=\"panel-body box-layout\">
            <div class=\"col-xs-8 va-m\">
                <h5 class=\"text-white dark-md fw-sb mb-xs\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["graph"]) || array_key_exists("graph", $context) ? $context["graph"] : (function () { throw new RuntimeError('Variable "graph" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5)), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"col-xs-4 va-t text-right\">
                <h3 class=\"text-white dark-sm\"><span class=\"fa ";
        // line 8
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["graph"] ?? null), "iconClass", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["graph"] ?? null), "iconClass", [], "any", false, false, false, 8), "")) : ("")), "html", null, true);
        echo "\"></span></h3>
            </div>
        </div>
        ";
        // line 11
        echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["graph"]) || array_key_exists("graph", $context) ? $context["graph"] : (function () { throw new RuntimeError('Variable "graph" does not exist.', 11, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
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
        return "@MauticReport/Graph/Line.html.twig";
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
        return array (  55 => 11,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticReport/Graph/Line.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Resources\\views\\Graph\\Line.html.twig");
    }
}
