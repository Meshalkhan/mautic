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

/* @MauticReport/Report/form.html.twig */
class __TwigTemplate_35adf0031645bd67cc798a5ff4961e50 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticReport/Report/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "report";
    }

    // line 5
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)) {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.header.edit", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7))]), "html", null, true);
            echo "
  ";
        } else {
            // line 9
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.header.new"), "html", null, true);
            echo "
  ";
        }
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), ["@MauticReport/FormTheme/Report/layout.html.twig"], true);
        // line 15
        $context["showGraphTab"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "graphs", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "choices", [], "any", false, false, false, 15)) > 0);
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
  ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'errors');
        echo "
  <div class=\"box-layout\">
      <div class=\"col-md-9 height-auto\">
          <div class=\"row\">
              <div class=\"col-xs-12\">
                  <!-- tabs controls -->
                  <ul class=\"nav nav-tabs pr-md pl-md\">
                      <li class=\"active\">
                          <a href=\"#details-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "</a>
                      </li>
                      <li class=\"\">
                          <a href=\"#data-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.tab.data"), "html", null, true);
        echo "</a>
                      </li>
                      <li class=\"";
        // line 31
        if ( !(isset($context["showGraphTab"]) || array_key_exists("showGraphTab", $context) ? $context["showGraphTab"] : (function () { throw new RuntimeError('Variable "showGraphTab" does not exist.', 31, $this->source); })())) {
            echo "hide";
        }
        echo "\" id=\"graphs-tab\">
                          <a href=\"#graphs-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.tab.graphs"), "html", null, true);
        echo "</a>
                      </li>
                      <li>
                          <a href=\"#schedule-container\" role=\"tab\" class=\"";
        // line 35
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "toAddress", [], "any", false, false, false, 35))) {
            echo "text-danger";
        }
        echo "\" data-toggle=\"tab\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.tab.schedule"), "html", null, true);
        echo "</a>
                      </li>
                  </ul>
                  <!--/ tabs controls -->

                  <div class=\"tab-content pa-md\">
                      <div class=\"tab-pane fade in active bdr-w-0\" id=\"details-container\">
                          <div class=\"row\">
                              <div class=\"col-md-6\">
                                  <div class=\"pa-md\">
                                      ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), 'row');
        echo "
                                  </div>
                              </div>
                              <div class=\"col-md-6\">
                                  <div class=\"pa-md\">
                                      ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "source", [], "any", false, false, false, 50), 'row');
        echo "
                                  </div>
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"col-md-12\">
                                  <div class=\"pa-md\">
                                      ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "description", [], "any", false, false, false, 57), 'row');
        echo "
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class=\"tab-pane fade bdr-w-0\" id=\"data-container\">
                          <div class=\"row\">
                              <div class=\"col-md-6\">
                                  <div class=\"pa-md\">
                                      <h4><strong>";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.form.columnselector"), "html", null, true);
        echo "</strong></h4>
                                      ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "columns", [], "any", false, false, false, 68), 'row');
        echo "
                                  </div>
                              </div>
                              <div class=\"col-md-6\">
                                  <div class=\"ml-md\">
                                      <h4><strong>";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.order"), "html", null, true);
        echo "</strong></h4>
                                      ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "tableOrder", [], "any", false, false, false, 74), 'row');
        echo "
                                  </div>
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"col-md-12\">
                                  <div class=\"pa-md\">
                                      <h4><strong>";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.filters"), "html", null, true);
        echo "</strong></h4>
                                      ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "filters", [], "any", false, false, false, 82), 'row');
        echo "
                                  </div>
                                  <div class=\"hide\">
                                      <div id=\"filterValueYesNoTemplate\">
                                          ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "value_template_yesno", [], "any", false, false, false, 86), 'widget');
        echo "
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"col-md-6\">
                                  <div class=\"pa-md\">
                                      <h4><strong>";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.form.groupby"), "html", null, true);
        echo "</strong></h4>
                                      ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "groupBy", [], "any", false, false, false, 95), 'row');
        echo "
                                  </div>
                              </div>
                              <div class=\"col-md-6\">
                                  <div class=\"pa-md\">
                                      <h4><strong>";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.calculated.fields"), "html", null, true);
        echo "</strong></h4>
                                      ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "aggregators", [], "any", false, false, false, 101), 'row');
        echo "
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class=\"tab-pane fade bdr-w-0 ";
        // line 106
        if ( !(isset($context["showGraphTab"]) || array_key_exists("showGraphTab", $context) ? $context["showGraphTab"] : (function () { throw new RuntimeError('Variable "showGraphTab" does not exist.', 106, $this->source); })())) {
            echo "hide";
        }
        echo "\" id=\"graphs-container\">
                          <div class=\"row\">
                              <div class=\"col-md-6\">
                                  <div class=\"pa-md\">
                                      ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "vars", [], "any", false, false, false, 110), "form", [], "any", false, false, false, 110), "children", [], "any", false, false, false, 110), "settings", [], "any", false, false, false, 110), "showGraphsAboveTable", [], "any", false, false, false, 110), 'row');
        echo "
                                      ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "graphs", [], "any", false, false, false, 111), 'row');
        echo "
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class=\"tab-pane fade bdr-w-0\" id=\"schedule-container\">
                          <div class=\"row\">
                              <div class=\"col-md-12\">
                                  ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "isScheduled", [], "any", false, false, false, 119), 'row');
        echo "
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"col-sm-12 col-md-6\">
                                  <div class=\"schedule_form\">
                                      ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "toAddress", [], "any", false, false, false, 125), 'row');
        echo "
                                      ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "scheduleUnit", [], "any", false, false, false, 126), 'row');
        echo "

                                      <div id=\"scheduleMonthFrequency\">
                                          ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "scheduleMonthFrequency", [], "any", false, false, false, 129), 'row');
        echo "
                                      </div>
                                      <div id=\"scheduleDay\">
                                          ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "scheduleDay", [], "any", false, false, false, 132), 'row');
        echo "
                                      </div>
                                  </div>
                              </div>
                              <div class=\"col-sm-12 col-md-6\">
                                  <div class=\"schedule_form well well-sm mt-lg\">
                                      <span id=\"schedule_preview_url\" data-url=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_schedule_preview");
        echo "\"></span>
                                      <div id=\"schedule_preview_data\">
                                          <strong>";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.schedule.preview_data"), "html", null, true);
        echo "</strong>
                                          <div id=\"schedule_preview_data_content\" class=\"mt-sm\"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class=\"col-md-3 height-auto bdr-l\">
          <div class=\"pr-lg pl-lg pt-md pb-md\">
              ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "isPublished", [], "any", false, false, false, 153), 'row');
        echo "
              ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "system", [], "any", false, false, false, 154), 'row');
        echo "
              ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "createdBy", [], "any", false, false, false, 155), 'row');
        echo "
              <hr>
              <h5>";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.form.display.dynamic.filters.settings"), "html", null, true);
        echo "</h5>
              <br>
              ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "vars", [], "any", false, false, false, 159), "form", [], "any", false, false, false, 159), "children", [], "any", false, false, false, 159), "settings", [], "any", false, false, false, 159), "showDynamicFilters", [], "any", false, false, false, 159), 'row');
        echo "
              ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "vars", [], "any", false, false, false, 160), "form", [], "any", false, false, false, 160), "children", [], "any", false, false, false, 160), "settings", [], "any", false, false, false, 160), "hideDateRangeFilter", [], "any", false, false, false, 160), 'row');
        echo "
          </div>
      </div>
  </div>
  ";
        // line 164
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), 'form_end');
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticReport/Report/form.html.twig";
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
        return array (  350 => 164,  343 => 160,  339 => 159,  334 => 157,  329 => 155,  325 => 154,  321 => 153,  305 => 140,  300 => 138,  291 => 132,  285 => 129,  279 => 126,  275 => 125,  266 => 119,  255 => 111,  251 => 110,  242 => 106,  234 => 101,  230 => 100,  222 => 95,  218 => 94,  207 => 86,  200 => 82,  196 => 81,  186 => 74,  182 => 73,  174 => 68,  170 => 67,  157 => 57,  147 => 50,  139 => 45,  122 => 35,  116 => 32,  110 => 31,  105 => 29,  99 => 26,  88 => 18,  84 => 17,  82 => 15,  80 => 14,  76 => 13,  68 => 9,  62 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticReport/Report/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Resources\\views\\Report\\form.html.twig");
    }
}
