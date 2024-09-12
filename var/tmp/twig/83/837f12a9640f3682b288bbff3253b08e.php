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

/* @MauticForm/SubscribedEvents/AbTest/submissions.html.twig */
class __TwigTemplate_ae5f967a6a1b2729f03bb2e380cb8fff extends Template
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
        $context["support"] = twig_get_attribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 1, $this->source); })()), "support", [], "any", false, false, false, 1);
        // line 2
        $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 2, $this->source); })()), "criteria", [], "any", false, false, false, 2), twig_get_attribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 2, $this->source); })()), "basedOn", [], "any", false, false, false, 2), [], "array", false, false, false, 2), "label", [], "any", false, false, false, 2));
        // line 3
        $context["chart"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\BarChartExtension']->createNewChart(twig_get_attribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new RuntimeError('Variable "support" does not exist.', 3, $this->source); })()), "labels", [], "any", false, false, false, 3));
        // line 4
        echo "
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new RuntimeError('Variable "support" does not exist.', 5, $this->source); })()), "data", [], "any", false, false, false, 5)) {
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new RuntimeError('Variable "support" does not exist.', 6, $this->source); })()), "data", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["datasetLabel"] => $context["values"]) {
                // line 7
                echo "        ";
                twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 7, $this->source); })()), "setDataset", [$context["datasetLabel"], $context["values"]], "method", false, false, false, 7);
                // line 8
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['datasetLabel'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        echo "
<div class=\"panel ovf-h bg-light-xs abtest-bar-chart\">
    <div class=\"panel-body box-layout\">
        <div class=\"col-xs-8 va-m\">
            <h5 class=\"text-white dark-md fw-sb mb-xs\">
                ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "
            </h5>
        </div>
        <div class=\"col-xs-4 va-t text-right\">
            <h3 class=\"text-white dark-sm\"><span class=\"fa fa-bar-chart\"></span></h3>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <canvas id=\"abtest-bar-chart\" height=\"300\"></canvas>
        </div>
    </div>
</div>

<script>
    mQuery(document).ready(function() {
        mQuery('#abStatsModal').on('shown.bs.modal', function (event) {
            var canvas = document.getElementById(\"abtest-bar-chart\");
            var barData = mQuery.parseJSON('";
        // line 33
        echo twig_escape_filter($this->env, twig_replace_filter(json_encode(twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 33, $this->source); })()), "render", [], "any", false, false, false, 33)), ["'" => "\\'"]), "html", null, true);
        echo "');
            var barGraph = new Chart(canvas, {type: 'bar', data: barData});
        });
    });
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/SubscribedEvents/AbTest/submissions.html.twig";
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
        return array (  91 => 33,  70 => 15,  63 => 10,  56 => 8,  53 => 7,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/SubscribedEvents/AbTest/submissions.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\SubscribedEvents\\AbTest\\submissions.html.twig");
    }
}
