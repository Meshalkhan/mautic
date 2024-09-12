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

/* @MauticDashboard/Dashboard/index.html.twig */
class __TwigTemplate_6baa928de594fd244c9d7e2565b70fcf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'headerTitle' => [$this, 'block_headerTitle'],
            'mauticContent' => [$this, 'block_mauticContent'],
            'actions' => [$this, 'block_actions'],
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
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticDashboard/Dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.header.index"), "html", null, true);
    }

    // line 5
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "dashboard";
    }

    // line 7
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["routeBase" => "dashboard", "langVar" => "dashboard", "customButtons" => [["attr" => ["class" => "btn btn-default btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_action", ["objectAction" => "new"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.add")], "iconClass" => "ri-add-fill", "btnText" => "mautic.dashboard.widget.add", "primary" => true], ["attr" => ["class" => "btn btn-default btn-nospin", "href" => "javascript:void(0)", "onclick" => (("Mautic.saveDashboardLayout('" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.confirmation_layout_name")) . "');"), "data-toggle" => ""], "iconClass" => "ri-save-line", "btnText" => "mautic.dashboard.save_as_predefined"], ["attr" => ["class" => "btn btn-default btn-nospin", "href" => "javascript:void(0)", "onclick" => (((("Mautic.exportDashboardLayout('" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.confirmation_layout_name")) . "', '") . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_action", ["objectAction" => "export"])) . "');"), "data-toggle" => ""], "iconClass" => "ri-export-line", "btnText" => "mautic.dashboard.export.widgets"], ["attr" => ["class" => "btn btn-default", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_action", ["objectAction" => "import"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.import")], "iconClass" => "ri-import-line", "btnText" => "mautic.dashboard.widget.import"]]]);
        // line 54
        echo "
";
    }

    // line 57
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "  ";
        if ((true == twig_get_attribute($this->env, $this->source, (isset($context["phpVersion"]) || array_key_exists("phpVersion", $context) ? $context["phpVersion"] : (function () { throw new RuntimeError('Variable "phpVersion" does not exist.', 58, $this->source); })()), "isOutdated", [], "array", false, false, false, 58))) {
            // line 59
            echo "  <div class=\"pt-md pl-md col-md-12\">
      <div class=\"pt-md pl-md alert alert-warning\">
          <h3>";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.phpversionwarning.title"), "html", null, true);
            echo "</h3>
          <p>";
            // line 62
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.phpversionwarning.body", ["%phpversion%" => twig_get_attribute($this->env, $this->source, (isset($context["phpVersion"]) || array_key_exists("phpVersion", $context) ? $context["phpVersion"] : (function () { throw new RuntimeError('Variable "phpVersion" does not exist.', 62, $this->source); })()), "version", [], "array", false, false, false, 62)]));
            echo "</p>
      </div>
  </div>
  ";
        }
        // line 66
        echo "
  <div class=\"row pt-md pl-md\">
      <div class=\"col-sm-6\">
          ";
        // line 69
        echo twig_include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 69, $this->source); })())]);
        echo "
      </div>
  </div>

  ";
        // line 73
        if ((twig_length_filter($this->env, (isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new RuntimeError('Variable "widgets" does not exist.', 73, $this->source); })())) > 0)) {
            // line 74
            echo "      <div id=\"dashboard-widgets\" class=\"dashboard-widgets cards\">
          ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new RuntimeError('Variable "widgets" does not exist.', 75, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 76
                echo "              <div class=\"card-flex widget\" data-widget-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "id", [], "any", false, false, false, 76), "html", null, true);
                echo "\" style=\"width: ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["widget"], "width", [], "any", true, true, false, 76)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["widget"], "width", [], "any", false, false, false, 76), 100)) : (100)), "html", null, true);
                echo "%; height: ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["widget"], "height", [], "any", true, true, false, 76)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["widget"], "height", [], "any", false, false, false, 76), 300)) : (300)), "html", null, true);
                echo "px\">
                  <div class=\"spinner\"><i class=\"fa fa-spin fa-spinner\"></i></div>
                  ";
                // line 78
                echo twig_include($this->env, $context, "@MauticDashboard/Dashboard/widget.html.twig", ["widget" => $context["widget"]]);
                echo "
              </div>
          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "      </div>
      <div id=\"cloned-widgets\" class=\"dashboard-widgets cards\"></div>
  ";
        } else {
            // line 84
            echo "      <div class=\"well well col-md-6 col-md-offset-3 mt-md\">
          <div class=\"row\">
              <div class=\"mautibot-image col-xs-3 text-center\">
                  <img class=\"img-responsive\" style=\"max-height: 125px; margin-left: auto; margin-right: auto;\" src=\"";
            // line 87
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("wave");
            echo "\" />
              </div>
              <div class=\"col-xs-9\">
                  <h4><i class=\"fa fa-quote-left\"></i> ";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.nowidgets.tip.header"), "html", null, true);
            echo " <i class=\"fa fa-quote-right\"></i></h4>
                  <p class=\"mt-md\">";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.nowidgets.tip"), "html", null, true);
            echo "</p>
                  <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_action", ["objectAction" => "applyDashboardFile", "file" => "default.json"]), "html", null, true);
            echo "\" class=\"btn btn-success\">
                      Apply the default dashboard
                  </a>
              </div>
          </div>
      </div>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticDashboard/Dashboard/index.html.twig";
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
        return array (  182 => 92,  178 => 91,  174 => 90,  168 => 87,  163 => 84,  158 => 81,  141 => 78,  131 => 76,  114 => 75,  111 => 74,  109 => 73,  102 => 69,  97 => 66,  90 => 62,  86 => 61,  82 => 59,  79 => 58,  75 => 57,  70 => 54,  67 => 8,  63 => 7,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticDashboard/Dashboard/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DashboardBundle\\Resources\\views\\Dashboard\\index.html.twig");
    }
}
