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

/* @MauticReport/SubscribedEvents/Dashboard/widget.html.twig */
class __TwigTemplate_069d17f5ec8dfb87b84cd33ce0e18b3c extends Template
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
        if ((array_key_exists("chartData", $context) && array_key_exists("chartType", $context))) {
            // line 2
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["chartData"] ?? null), "data", [], "any", true, true, false, 2)) {
                // line 3
                echo "        ";
                $context["chartData"] = twig_get_attribute($this->env, $this->source, (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 3, $this->source); })()), "data", [], "any", false, false, false, 3);
                // line 4
                echo "    ";
            }
            // line 5
            echo "
    ";
            // line 6
            if (("table" == (isset($context["chartType"]) || array_key_exists("chartType", $context) ? $context["chartType"] : (function () { throw new RuntimeError('Variable "chartType" does not exist.', 6, $this->source); })()))) {
                // line 7
                echo "        ";
                echo twig_include($this->env, $context, "@MauticCore/Helper/table.html.twig", ["headItems" => ((twig_get_attribute($this->env, $this->source,                 // line 8
($context["chartData"] ?? null), 0, [], "array", true, true, false, 8)) ? (twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 8, $this->source); })()), 0, [], "array", false, false, false, 8))) : ([])), "bodyItems" =>                 // line 9
(isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 9, $this->source); })())]);
                // line 10
                echo "
    ";
            } else {
                // line 12
                echo "        ";
                echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 12, $this->source); })()), "chartType" => (isset($context["chartType"]) || array_key_exists("chartType", $context) ? $context["chartType"] : (function () { throw new RuntimeError('Variable "chartType" does not exist.', 12, $this->source); })()), "chartHeight" => (isset($context["chartHeight"]) || array_key_exists("chartHeight", $context) ? $context["chartHeight"] : (function () { throw new RuntimeError('Variable "chartHeight" does not exist.', 12, $this->source); })())]);
                echo "
    ";
            }
            // line 14
            echo "
    ";
            // line 15
            if (is_iterable((isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 15, $this->source); })()))) {
                // line 16
                echo "        ";
                // line 17
                echo "        ";
                $context["dateFrom"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, (isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 17, $this->source); })()), "date", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, (isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 17, $this->source); })()), "timezone", [], "any", false, false, false, 17));
                // line 18
                echo "        ";
                $context["dateTo"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, (isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 18, $this->source); })()), "date", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, (isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 18, $this->source); })()), "timezone", [], "any", false, false, false, 18));
                // line 19
                echo "    ";
            }
            // line 20
            echo "    <div class=\"pull-right mr-md mb-md\">
        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_action", ["objectId" => (isset($context["reportId"]) || array_key_exists("reportId", $context) ? $context["reportId"] : (function () { throw new RuntimeError('Variable "reportId" does not exist.', 21, $this->source); })()), "objectAction" => "view", "daterange" => ["date_to" => (isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 21, $this->source); })()), "date_from" => (isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 21, $this->source); })())]]), "html", null, true);
            echo "\">
            <span class=\"label label-success\">";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.dashboard.widgets.full_report"), "html", null, true);
            echo "</span>
        </a>
    </div>
    <div class=\"clearfix\"></div>
";
        } else {
            // line 27
            echo "    <div class=\"ml-20 mr-20 mt-lg px-2 alert alert-danger\" role=\"alert\">
        <a href=\"#\" class=\"alert-link\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> ";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.dashboard.widgets.no_report_found"), "html", null, true);
            echo "</a>
    </div>
    <div class=\"clearfix\"></div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticReport/SubscribedEvents/Dashboard/widget.html.twig";
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
        return array (  102 => 28,  99 => 27,  91 => 22,  87 => 21,  84 => 20,  81 => 19,  78 => 18,  75 => 17,  73 => 16,  71 => 15,  68 => 14,  62 => 12,  58 => 10,  56 => 9,  55 => 8,  53 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticReport/SubscribedEvents/Dashboard/widget.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Resources\\views\\SubscribedEvents\\Dashboard\\widget.html.twig");
    }
}
