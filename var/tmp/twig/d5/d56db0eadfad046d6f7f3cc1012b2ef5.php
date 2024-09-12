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

/* @MauticReport/Report/export.html.twig */
class __TwigTemplate_0317648f377670f372435a7b3e8620ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageTitle' => [$this, 'block_pageTitle'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'mauticContent' => [$this, 'block_mauticContent'],
            '_content' => [$this, 'block__content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MauticCore/Default/slim.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/slim.html.twig", "@MauticReport/Report/export.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 3, $this->source); })()), "html", null, true);
    }

    // line 5
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
    }

    // line 7
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "report";
    }

    // line 9
    public function block__content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  ";
        // line 11
        $context["showGraphsAboveTable"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["report"] ?? null), "settings", [], "any", false, true, false, 11), "showGraphsAboveTable", [], "any", true, true, false, 11);
        // line 13
        $context["dataCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 13, $this->source); })()), "getData", [], "method", false, false, false, 13));
        // line 14
        $context["columnOrder"] = twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 14, $this->source); })()), "columns", [], "any", false, false, false, 14);
        // line 15
        $context["graphOrder"] = twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 15, $this->source); })()), "graphs", [], "any", false, false, false, 15);
        // line 16
        $context["aggregatorOrder"] = twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 16, $this->source); })()), "aggregators", [], "any", false, false, false, 16);
        // line 17
        echo "<style>
      #app-content.content-only.container {
          overflow-x: scroll;
      }
  </style>

  <div class=\"pa-md\">
      <h3>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</h3>
      <div class=\"small\">
          ";
        // line 26
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 26, $this->source); })()), "getDateFrom", [], "method", false, false, false, 26), "UTC");
        echo " - ";
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 26, $this->source); })()), "getDateTo", [], "method", false, false, false, 26), "UTC");
        echo "
      </div>
  </div>

  ";
        // line 30
        if ( !twig_test_empty((isset($context["showGraphsAboveTable"]) || array_key_exists("showGraphsAboveTable", $context) ? $context["showGraphsAboveTable"] : (function () { throw new RuntimeError('Variable "showGraphsAboveTable" does not exist.', 30, $this->source); })()))) {
            // line 31
            echo "      ";
            echo twig_include($this->env, $context, "@MauticReport/Report/details_data_graphs.html.twig", ["graphOrder" =>             // line 32
(isset($context["graphOrder"]) || array_key_exists("graphOrder", $context) ? $context["graphOrder"] : (function () { throw new RuntimeError('Variable "graphOrder" does not exist.', 32, $this->source); })()), "graphs" => twig_get_attribute($this->env, $this->source,             // line 33
(isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 33, $this->source); })()), "getGraphs", [], "method", false, false, false, 33), "report" =>             // line 34
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 34, $this->source); })())]);
            // line 35
            echo "
  ";
        }
        // line 37
        echo "

  ";
        // line 39
        if ( !twig_test_empty((isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 39, $this->source); })()))) {
            // line 40
            echo "      <table class=\"table table-hover report-list\" id=\"reportTable\">
          <thead>
          <tr>
              <th class=\"col-report-count\"></th>

              ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 45, $this->source); })()), "headers", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                // line 46
                echo "                  <th>";
                echo twig_escape_filter($this->env, $context["header"], "html", null, true);
                echo "</th>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "          </tr>
          </thead>
          <tbody>
          ";
            // line 51
            if ((isset($context["dataCount"]) || array_key_exists("dataCount", $context) ? $context["dataCount"] : (function () { throw new RuntimeError('Variable "dataCount" does not exist.', 51, $this->source); })())) {
                // line 52
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 52, $this->source); })()), "data", [], "any", false, false, false, 52));
                foreach ($context['_seq'] as $context["count"] => $context["data"]) {
                    // line 53
                    echo "                  <tr>
                      <td>";
                    // line 54
                    echo twig_escape_filter($this->env, ($context["count"] + 1), "html", null, true);
                    echo "</td>
                      ";
                    // line 55
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["data"]);
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 56
                        echo "                          <td>";
                        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_($context["v"], twig_get_attribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 56, $this->source); })()), "getType", [$context["k"]], "method", false, false, false, 56));
                        echo "</td>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "                  </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['count'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 60, $this->source); })()), "totals", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "                  <tr class=\"cm-strong\">
                      <td>";
                    // line 62
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.groupby.totals"), "html", null, true);
                    echo "</td>
                      ";
                    // line 63
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 63, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                        // line 64
                        echo "                          <td>&nbsp;</td>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 66
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["aggregatorOrder"]) || array_key_exists("aggregatorOrder", $context) ? $context["aggregatorOrder"] : (function () { throw new RuntimeError('Variable "aggregatorOrder" does not exist.', 66, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["aggregator"]) {
                        // line 67
                        $context["i"] = ((twig_get_attribute($this->env, $this->source, $context["aggregator"], "function", [], "any", false, false, false, 67) . " ") . twig_get_attribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 67));
                        // line 68
                        echo "                              <td>
                                  ";
                        // line 69
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reportDataResult"] ?? null), "totals", [], "any", false, true, false, 69), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 69, $this->source); })()), [], "array", true, true, false, 69)) {
                            // line 70
                            echo "                                      ";
                            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 70, $this->source); })()), "totals", [], "any", false, false, false, 70), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 70, $this->source); })()), [], "array", false, false, false, 70), twig_get_attribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 70, $this->source); })()), "getType", [(isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 70, $this->source); })())], "method", false, false, false, 70));
                            echo "
                                  ";
                        }
                        // line 72
                        echo "                              </td>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aggregator'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 74
                    echo "                  </tr>
              ";
                }
                // line 76
                echo "          ";
            } else {
                // line 77
                echo "              <tr>
                  <td>&nbsp;</td>
                  ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 79, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                    // line 80
                    echo "                      <td>&nbsp;</td>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "              </tr>
          ";
            }
            // line 84
            echo "          </tbody>
      </table>
  ";
        }
        // line 87
        echo "
  ";
        // line 88
        if (twig_test_empty((isset($context["showGraphsAboveTable"]) || array_key_exists("showGraphsAboveTable", $context) ? $context["showGraphsAboveTable"] : (function () { throw new RuntimeError('Variable "showGraphsAboveTable" does not exist.', 88, $this->source); })()))) {
            // line 89
            echo "      ";
            echo twig_include($this->env, $context, "@MauticReport/Report/details_data_graphs.html.twig", ["graphOrder" =>             // line 90
(isset($context["graphOrder"]) || array_key_exists("graphOrder", $context) ? $context["graphOrder"] : (function () { throw new RuntimeError('Variable "graphOrder" does not exist.', 90, $this->source); })()), "graphs" => twig_get_attribute($this->env, $this->source,             // line 91
(isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 91, $this->source); })()), "getGraphs", [], "method", false, false, false, 91), "report" =>             // line 92
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 92, $this->source); })())]);
            // line 93
            echo "
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticReport/Report/export.html.twig";
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
        return array (  274 => 93,  272 => 92,  271 => 91,  270 => 90,  268 => 89,  266 => 88,  263 => 87,  258 => 84,  254 => 82,  247 => 80,  243 => 79,  239 => 77,  236 => 76,  232 => 74,  225 => 72,  219 => 70,  217 => 69,  214 => 68,  212 => 67,  207 => 66,  200 => 64,  196 => 63,  192 => 62,  189 => 61,  186 => 60,  179 => 58,  170 => 56,  166 => 55,  162 => 54,  159 => 53,  154 => 52,  152 => 51,  147 => 48,  138 => 46,  134 => 45,  127 => 40,  125 => 39,  121 => 37,  117 => 35,  115 => 34,  114 => 33,  113 => 32,  111 => 31,  109 => 30,  100 => 26,  95 => 24,  86 => 17,  84 => 16,  82 => 15,  80 => 14,  78 => 13,  76 => 11,  74 => 10,  70 => 9,  63 => 7,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticReport/Report/export.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Resources\\views\\Report\\export.html.twig");
    }
}
