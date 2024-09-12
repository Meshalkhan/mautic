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

/* @MauticPage/SubscribedEvents/AbTest/bargraph.html.twig */
class __TwigTemplate_d8d4c459e8063710aa13e0d1ea99d98e extends Template
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
        $context["support"] = twig_get_attribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 6, $this->source); })()), "support", [], "any", false, false, false, 6);
        // line 7
        $context["label"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 7, $this->source); })()), "criteria", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 7, $this->source); })()), "basedOn", [], "any", false, false, false, 7), [], "array", false, false, false, 7), "label", [], "any", false, false, false, 7);
        // line 8
        $context["chart"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\BarChartExtension']->createNewChart(twig_get_attribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new RuntimeError('Variable "support" does not exist.', 8, $this->source); })()), "labels", [], "any", false, false, false, 8));
        // line 9
        if ((twig_get_attribute($this->env, $this->source, ($context["support"] ?? null), "data", [], "any", true, true, false, 9) && is_iterable(twig_get_attribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new RuntimeError('Variable "support" does not exist.', 9, $this->source); })()), "data", [], "any", false, false, false, 9)))) {
            // line 10
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new RuntimeError('Variable "support" does not exist.', 10, $this->source); })()), "data", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["datasetLabel"] => $context["values"]) {
                // line 11
                echo "        ";
                twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 11, $this->source); })()), "setDataset", [$context["datasetLabel"], $context["values"]], "method", false, false, false, 11);
                // line 12
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['datasetLabel'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 14
        echo "<div class=\"panel ovf-h bg-light-xs abtest-bar-chart\">
    <div class=\"panel-body box-layout\">
        <div class=\"col-xs-8 va-m\">
            <h5 class=\"text-white dark-md fw-sb mb-xs\">
                ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 18, $this->source); })())), "html", null, true);
        echo "
            </h5>
        </div>
        <div class=\"col-xs-4 va-t text-right\">
            <h3 class=\"text-white dark-sm\"><span class=\"fa fa-bar-chart\"></span></h3>
        </div>
    </div>
    ";
        // line 25
        echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 25, $this->source); })()), "render", [], "any", false, false, false, 25), "chartType" => "bar", "chartHeight" => 300]);
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPage/SubscribedEvents/AbTest/bargraph.html.twig";
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
        return array (  76 => 25,  66 => 18,  60 => 14,  53 => 12,  50 => 11,  45 => 10,  43 => 9,  41 => 8,  39 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPage/SubscribedEvents/AbTest/bargraph.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Resources\\views\\SubscribedEvents\\AbTest\\bargraph.html.twig");
    }
}
