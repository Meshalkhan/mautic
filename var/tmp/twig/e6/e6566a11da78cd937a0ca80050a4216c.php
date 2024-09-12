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

/* @MauticCore/Helper/lifecycle.html.twig */
class __TwigTemplate_4d6cae2f4cc9d6bddf36b6e3ec81dcf0 extends Template
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
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chartItems"]) || array_key_exists("chartItems", $context) ? $context["chartItems"] : (function () { throw new RuntimeError('Variable "chartItems" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["chartData"]) {
            // line 15
            echo "  <div style=\"float: left; width: ";
            echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "%; \" class=\"pt-sd pr-md pb-md pl-md\">
    <div class=\"chart-wrapper\">
      <div>
        <div class=\"chart-legend pull-left-lg\"><h4>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 18, $this->source); })()), $context["key"], [], "array", false, false, false, 18), "html", null, true);
            echo "</h4></div>
        <div class=\"clearfix\"></div>
        <div class=\"pull-left\"><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 20, $this->source); })()), $context["key"], [], "array", false, false, false, 20), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 20, $this->source); })()), $context["key"], [], "array", false, false, false, 20), "html", null, true);
            echo " Contacts</div></a>
        <div class=\"clearfix\"></div>
        <div style=\"height:";
            // line 22
            echo twig_escape_filter($this->env, ((isset($context["chartHeight"]) || array_key_exists("chartHeight", $context) ? $context["chartHeight"] : (function () { throw new RuntimeError('Variable "chartHeight" does not exist.', 22, $this->source); })()) / 2.3), "html", null, true);
            echo "px;\">
            ";
            // line 23
            if (array_key_exists("chartType", $context)) {
                // line 24
                echo "          <canvas class=\"chart ";
                echo twig_escape_filter($this->env, (isset($context["chartType"]) || array_key_exists("chartType", $context) ? $context["chartType"] : (function () { throw new RuntimeError('Variable "chartType" does not exist.', 24, $this->source); })()), "html", null, true);
                echo "-chart\" style=\"font-size:9px!important;\">";
                echo twig_escape_filter($this->env, json_encode($context["chartData"]), "html", null, true);
                echo "</canvas>
            ";
            }
            // line 26
            echo "        </div>
        <div class=\"legend\" style=\"font-size: 9px;\"></div>
      </div>
    </div>
    ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, (isset($context["stages"]) || array_key_exists("stages", $context) ? $context["stages"] : (function () { throw new RuntimeError('Variable "stages" does not exist.', 30, $this->source); })()), $context["key"], [], "array", false, false, false, 30)) {
                // line 31
                echo "      <div class=\"chart-wrapper\">
        <div>
          <div class=\"chart-legend pt-sd pr-md pb-md pl-md\"><h5>";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lifecycle.graph.stage.cycle"), "html", null, true);
                echo "</h5></div>
          <div class=\"clearfix\"></div>
          <div style=\"height:";
                // line 35
                echo twig_escape_filter($this->env, ((isset($context["chartHeight"]) || array_key_exists("chartHeight", $context) ? $context["chartHeight"] : (function () { throw new RuntimeError('Variable "chartHeight" does not exist.', 35, $this->source); })()) / 2.3), "html", null, true);
                echo "px;\">
            <canvas class=\"chart liefechart-bar-chart\" style=\"font-size: 9px!important;\">";
                // line 36
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["stages"]) || array_key_exists("stages", $context) ? $context["stages"] : (function () { throw new RuntimeError('Variable "stages" does not exist.', 36, $this->source); })()), $context["key"], [], "array", false, false, false, 36)), "html", null, true);
                echo "</canvas>
          </div>
          <div class=\"legend\" style=\"font-size: 9px;\"></div>
        </div>
      </div>
    ";
            }
            // line 42
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["devices"]) || array_key_exists("devices", $context) ? $context["devices"] : (function () { throw new RuntimeError('Variable "devices" does not exist.', 42, $this->source); })()), $context["key"], [], "array", false, false, false, 42)) {
                // line 43
                echo "        <div class=\"chart-wrapper\">
            <div>
                <div class=\"chart-legend pt-sd pr-md pb-md pl-md\"><h5>";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lifecycle.graph.device.granularity"), "html", null, true);
                echo "</h5></div>
                <div class=\"clearfix\"></div>
                <div style=\"height:";
                // line 47
                echo twig_escape_filter($this->env, ((isset($context["chartHeight"]) || array_key_exists("chartHeight", $context) ? $context["chartHeight"] : (function () { throw new RuntimeError('Variable "chartHeight" does not exist.', 47, $this->source); })()) / 5), "html", null, true);
                echo "px;\">
                    <canvas class=\"chart horizontal-bar-chart\" style=\"font-size: 9px!important;\">";
                // line 48
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["devices"]) || array_key_exists("devices", $context) ? $context["devices"] : (function () { throw new RuntimeError('Variable "devices" does not exist.', 48, $this->source); })()), $context["key"], [], "array", false, false, false, 48)), "html", null, true);
                echo "</canvas>
                </div>
                <div class=\"legend\" style=\"font-size: 9px;\"></div>
            </div>
        </div>
    ";
            }
            // line 54
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['chartData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "<div class=\"clearfix\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/lifecycle.html.twig";
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
        return array (  136 => 56,  129 => 54,  120 => 48,  116 => 47,  111 => 45,  107 => 43,  104 => 42,  95 => 36,  91 => 35,  86 => 33,  82 => 31,  80 => 30,  74 => 26,  66 => 24,  64 => 23,  60 => 22,  53 => 20,  48 => 18,  41 => 15,  37 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/lifecycle.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\lifecycle.html.twig");
    }
}
