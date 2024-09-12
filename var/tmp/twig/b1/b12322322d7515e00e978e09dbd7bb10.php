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

/* @MauticDashboard/Dashboard/import.html.twig */
class __TwigTemplate_c7c819483da9664592316f9d8654af44 extends Template
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
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticDashboard/Dashboard/import.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.import"), "html", null, true);
    }

    // line 5
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "dashboardImport";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "  <div class=\"row\">
    ";
        // line 9
        if ((isset($context["dashboards"]) || array_key_exists("dashboards", $context) ? $context["dashboards"] : (function () { throw new RuntimeError('Variable "dashboards" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "        <div class=\"col-sm-6\">
            <div class=\"ml-sm mt-sm pa-sm\">
                <div class=\"panel panel-info\">
                    <div class=\"panel-heading\">
                        <div class=\"panel-title\">";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.predefined"), "html", null, true);
            echo "</div>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"list-group\">
                            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dashboards"]) || array_key_exists("dashboards", $context) ? $context["dashboards"] : (function () { throw new RuntimeError('Variable "dashboards" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["dashboard"] => $context["config"]) {
                // line 19
                echo "                                <div class=\"list-group-item mt-md ";
                echo ((($context["dashboard"] == (isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 19, $this->source); })()))) ? ("active") : (""));
                echo "\">
                                    <h4 class=\"list-group-item-heading\">";
                // line 20
                echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["config"], "name", [], "any", false, false, false, 20));
                echo "</h4>
                                    ";
                // line 21
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["config"], "description", [], "any", false, false, false, 21))) {
                    echo "<p class=\"small\">";
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["config"], "description", [], "any", false, false, false, 21));
                    echo "</p>";
                }
                // line 22
                echo "                                    <p class=\"list-group-item-text\">
                                        <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_action", ["objectAction" => "import", "preview" => $context["dashboard"]]), "html", null, true);
                echo "\">
                                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.preview"), "html", null, true);
                echo "
                                        </a>&#183;
                                        <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_action", ["objectAction" => "applyDashboardFile", "file" => ((twig_get_attribute($this->env, $this->source, $context["config"], "type", [], "any", false, false, false, 26) . ".") . $context["dashboard"])]), "html", null, true);
                echo "\">
                                            ";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.apply"), "html", null, true);
                echo "
                                        </a>";
                // line 28
                if (("user" == twig_get_attribute($this->env, $this->source, $context["config"], "type", [], "any", false, false, false, 28))) {
                    echo "&#183;
                                        <a href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_action", ["objectAction" => "deleteDashboardFile", "file" => ((twig_get_attribute($this->env, $this->source, $context["config"], "type", [], "any", false, false, false, 29) . ".") . $context["dashboard"])]), "html", null, true);
                    echo "\" data-toggle=\"confirmation\" data-message=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.delete_layout"));
                    echo "\" data-confirm-text=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete"));
                    echo "\" data-confirm-callback=\"executeAction\" data-cancel-text=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"));
                    echo "\">
                                            ";
                    // line 30
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete"), "html", null, true);
                    echo "
                                        </a>";
                }
                // line 32
                echo "                                    </p>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['dashboard'], $context['config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 41
        echo "      <div class=\"col-sm-6\">
          <div class=\"mr-sm mt-sm pa-sm\">
              <div class=\"panel panel-info\">
                  <div class=\"panel-heading\">
                      <div class=\"panel-title\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.import.start.instructions"), "html", null, true);
        echo "</div>
                  </div>
                  <div class=\"panel-body\">
                      ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_start');
        echo "
                      <div class=\"input-group well mt-lg\">
                          ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "file", [], "any", false, false, false, 50), 'widget');
        echo "
                          <span class=\"input-group-btn\">
                              ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "start", [], "any", false, false, false, 52), 'widget');
        echo "
                          </span>
                      </div>
                      ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        echo "
                  </div>
              </div>
          </div>
      </div>
  </div>
  ";
        // line 61
        if ((isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new RuntimeError('Variable "widgets" does not exist.', 61, $this->source); })())) {
            // line 62
            echo "      <div class=\"col-md-12\">
          <h2>";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widgets.preview"), "html", null, true);
            echo "</h2>
      </div>
      <div id=\"dashboard-widgets\" class=\"dashboard-widgets cards\">
          ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widgets"]) || array_key_exists("widgets", $context) ? $context["widgets"] : (function () { throw new RuntimeError('Variable "widgets" does not exist.', 66, $this->source); })()));
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
                // line 67
                echo "              <div class=\"card-flex widget\" data-widget-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "id", [], "any", false, false, false, 67), "html", null, true);
                echo "\" style=\"width: ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["widget"], "width", [], "any", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["widget"], "width", [], "any", false, false, false, 67), "100")) : ("100")), "html", null, true);
                echo "%; height: ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["widget"], "height", [], "any", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["widget"], "height", [], "any", false, false, false, 67), "300")) : ("300")), "html", null, true);
                echo "px;\">
                  ";
                // line 68
                echo twig_include($this->env, $context, "@MauticDashboard/Widget/detail.html.twig", ["widget" => $context["widget"]]);
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
            // line 71
            echo "      </div>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticDashboard/Dashboard/import.html.twig";
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
        return array (  249 => 71,  232 => 68,  223 => 67,  206 => 66,  200 => 63,  197 => 62,  195 => 61,  186 => 55,  180 => 52,  175 => 50,  170 => 48,  164 => 45,  158 => 41,  150 => 35,  142 => 32,  137 => 30,  127 => 29,  123 => 28,  119 => 27,  115 => 26,  110 => 24,  106 => 23,  103 => 22,  97 => 21,  93 => 20,  88 => 19,  84 => 18,  77 => 14,  71 => 10,  69 => 9,  66 => 8,  62 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticDashboard/Dashboard/import.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DashboardBundle\\Resources\\views\\Dashboard\\import.html.twig");
    }
}
