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

/* @MauticEmail/Heatmap/heatmap_legend.html.twig */
class __TwigTemplate_8aa399bcd38f27512ddb6c5357df8855 extends Template
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
        echo "<div class=\"heatmap-legend\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.heatmap.clicks_recorded"), "html", null, true);
        echo "<br />
        <small><a href=\"#\" data-toggle=\"heatmap-total\" class=\"active\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.heatmap.total"), "html", null, true);
        echo "</a> | <a href=\"#\" data-toggle=\"heatmap-unique\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.heatmap.unique"), "html", null, true);
        echo "</a></small></p>
    <p data-heatmap-clicks>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["totalClicks"]) || array_key_exists("totalClicks", $context) ? $context["totalClicks"] : (function () { throw new RuntimeError('Variable "totalClicks" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.heatmap.heat_scale"), "html", null, true);
        echo "</p>
    <div class=\"heatmap-scale-header\">
        <div>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.heatmap.cold"), "html", null, true);
        echo "</div>
        <div>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.heatmap.hot"), "html", null, true);
        echo "</div>
    </div>
    <div class=\"heatmap-scale\">
        <div class=\"heatmap-scale-bar\"></div>
        <div class=\"heatmap-scale-bar\"></div>
        <div class=\"heatmap-scale-bar\"></div>
        <div class=\"heatmap-scale-bar\"></div>
        <div class=\"heatmap-scale-bar\"></div>
    </div>
    <div class=\"heatmap-scale-footer\">
        <div>0%</div>
        <div>100%</div>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticEmail/Heatmap/heatmap_legend.html.twig";
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
        return array (  63 => 8,  59 => 7,  54 => 5,  50 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmail/Heatmap/heatmap_legend.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\Heatmap\\heatmap_legend.html.twig");
    }
}
