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

/* @MauticEmail/Email/template_graph.html.twig */
class __TwigTemplate_49fd92b60511d014acea23e3b8f588ed extends Template
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
        echo "<!--
some stats: need more input on what type of form data to show.
delete if it is not require
-->
<div class=\"pa-md\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
        // line 8
        if ((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "            <div class=\"text-right small\">
                <span>
                    ";
            // line 11
            if ((isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 11, $this->source); })())) {
                // line 12
                echo "                        <span data-chart=\"variant\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.email.variant.graph.variant", [], "messages");
                echo "</span>
                    ";
            } else {
                // line 14
                echo "                        <a data-chart=\"variant\" href=\"javascript:void(0)\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.email.variant.graph.variant", [], "messages");
                echo "</a>
                    ";
            }
            // line 16
            echo "                </span>
                </span> | </span>
                <span>
                    ";
            // line 19
            if ((isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 19, $this->source); })())) {
                // line 20
                echo "                        <a data-chart=\"all\" href=\"javascript:void(0)\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.email.variant.graph.all", [], "messages");
                echo "</a>
                    ";
            } else {
                // line 22
                echo "                        <span data-chart=\"all\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.email.variant.graph.all", [], "messages");
                echo "</span>
                    ";
            }
            // line 24
            echo "                </span>
            </div>
            ";
        }
        // line 27
        echo "            <div class=\"panel\">
                <div class=\"panel-body box-layout\">
                    <div class=\"col-xs-4 va-m\">
                        <h5 class=\"text-white dark-md fw-sb mb-xs\">
                            <span class=\"ri-mail-line\"></span>
                            ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.email.stats", [], "messages");
        // line 33
        echo "                        </h5>
                    </div>
                    <div class=\"col-xs-8 va-m\">";
        // line 36
        echo twig_include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" =>         // line 37
(isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 37, $this->source); })()), "class" => "pull-right"]);
        // line 41
        echo "</div>
                </div>
                <div class=\"pt-0 pl-15 pb-10 pr-15\">";
        // line 44
        echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" =>         // line 45
(isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 45, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        // line 50
        echo "</div>
            </div>
        </div>
    </div>
</div>
<!--/ some stats -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticEmail/Email/template_graph.html.twig";
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
        return array (  113 => 50,  111 => 45,  110 => 44,  106 => 41,  104 => 37,  103 => 36,  99 => 33,  97 => 32,  90 => 27,  85 => 24,  79 => 22,  73 => 20,  71 => 19,  66 => 16,  60 => 14,  54 => 12,  52 => 11,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmail/Email/template_graph.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\Email\\template_graph.html.twig");
    }
}
