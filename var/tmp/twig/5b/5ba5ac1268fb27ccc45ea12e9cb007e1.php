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

/* @MauticCore/Helper/chart.html.twig */
class __TwigTemplate_7b9bf5055d252fd8a37fa1527d9076de extends Template
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
        echo "<div class=\"chart-wrapper\">
    <div class=\"pt-sd pr-md pb-md pl-md\">
        <div ";
        // line 3
        if (array_key_exists("chartHeight", $context)) {
            echo " style=\"height:";
            echo twig_escape_filter($this->env, (isset($context["chartHeight"]) || array_key_exists("chartHeight", $context) ? $context["chartHeight"] : (function () { throw new RuntimeError('Variable "chartHeight" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "px\" ";
        }
        echo ">
            ";
        // line 4
        if (array_key_exists("chartType", $context)) {
            // line 5
            echo "                <canvas class=\"chart ";
            echo twig_escape_filter($this->env, (isset($context["chartType"]) || array_key_exists("chartType", $context) ? $context["chartType"] : (function () { throw new RuntimeError('Variable "chartType" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "-chart\" ";
            echo ((array_key_exists("disableLegend", $context)) ? ("data-disable-legend") : (""));
            echo ">
                    ";
            // line 6
            echo twig_escape_filter($this->env, json_encode((isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 6, $this->source); })())), "html", null, true);
            echo "
                </canvas>
            ";
        }
        // line 9
        echo "        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/chart.html.twig";
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
        return array (  64 => 9,  58 => 6,  51 => 5,  49 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/chart.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\chart.html.twig");
    }
}
