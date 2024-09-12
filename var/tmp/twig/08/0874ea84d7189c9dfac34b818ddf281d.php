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

/* @MauticFocus/Focus/details.html.twig */
class __TwigTemplate_e09469ef21ed1bf4548e3cfa6adac4fb extends Template
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
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticFocus/Focus/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "focus";
    }

    // line 5
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
    }

    // line 7
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 9
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 11, $this->source); })()), "focus:items:editown", [], "array", false, false, false, 11), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 11, $this->source); })()), "focus:items:editother", [], "array", false, false, false, 11), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "createdBy", [], "any", false, false, false, 11)), "clone" => twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 12, $this->source); })()), "focus:items:create", [], "array", false, false, false, 12), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 13, $this->source); })()), "focus:items:deleteown", [], "array", false, false, false, 13), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 13, $this->source); })()), "focus:items:deleteother", [], "array", false, false, false, 13), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "createdBy", [], "any", false, false, false, 13)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("focus:items:view")], "routeBase" => "focus", "langVar" => "focus"]);
        // line 18
        echo "
";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "  ";
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("plugins/MauticFocusBundle/Assets/js/focus.js");
        echo "
  <!-- start: box layout -->
  <div class=\"box-layout\">
      <!-- left section -->
      <div class=\"col-md-9 bg-white height-auto\">
          <div class=\"bg-auto\">
              <!-- form detail header -->
              <div class=\"pr-md pl-md pt-lg pb-lg\">
                  <div class=\"box-layout\">
                      <div class=\"col-xs-10\">
                          <div class=\"text-muted\">";
        // line 32
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32));
        echo "</div>
                      </div>
                      <div class=\"col-xs-2 text-right\">
                          ";
        // line 35
        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })())]);
        echo "
                      </div>
                  </div>
              </div>
              <!--/ form detail header -->

              <!-- form detail collapseable -->
              <div class=\"collapse\" id=\"focus-details\">
                  <div class=\"pr-md pl-md pb-md\">
                      <div class=\"panel shd-none mb-0\">
                          <table class=\"table table-hover mb-0\">
                              <tbody>
                              ";
        // line 47
        echo twig_include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })())]);
        echo "
                              <tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.details.views"), "html", null, true);
        echo "</span>
                                  </td>
                                  <td data-focus-total-views-cell>
                                      <div class=\"spinner\"><i class=\"fa fa-spin fa-spinner\"></i></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.details.unique_views"), "html", null, true);
        echo "</span>
                                  </td>
                                  <td data-focus-total-unique-views-cell>
                                      <div class=\"spinner\"><i class=\"fa fa-spin fa-spinner\"></i></div>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              <!--/ form detail collapseable -->
          </div>

          <div class=\"bg-auto bg-dark-xs\">
              <!-- form detail collapseable toggler -->
              <div class=\"hr-expand nm\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "\">
                      <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#focus-details\"><span class=\"caret\"></span>
                        ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "
                      </a>
                  </span>
              </div>
              <!--/ form detail collapseable toggler -->

              <!-- stats -->
              <div class=\"pa-md\">
                  <div class=\"row\">
                      <div class=\"col-sm-12\">
                          <div class=\"panel\">
                              <div class=\"panel-body box-layout\">
                                  <div class=\"col-xs-4 va-m\">
                                      <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                          <span class=\"fa fa-line-chart\"></span>
                                          ";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.graph.stats"), "html", null, true);
        echo "
                                      </h5>
                                  </div>
                                  <div class=\"col-xs-8 va-m\">
                                      ";
        // line 96
        echo twig_include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 96, $this->source); })()), "class" => "pull-right"]);
        echo "
                                  </div>
                              </div>
                              <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                  ";
        // line 100
        echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 100, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        echo "
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--/ stats -->

              ";
        // line 108
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        echo "

              ";
        // line 110
        if ((array_key_exists("trackables", $context) &&  !twig_test_empty((isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 110, $this->source); })())))) {
            // line 111
            echo "                  <!-- tabs controls -->
                  <ul class=\"nav nav-tabs pr-md pl-md\">
                      <li class=\"active\">
                          <a href=\"#clicks-container\" role=\"tab\" data-toggle=\"tab\">
                              ";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_counts"), "html", null, true);
            echo "
                          </a>
                      </li>
                  </ul>
                  <!--/ tabs controls -->

                  <!-- start: tab-content -->
                  <div class=\"tab-content pa-md\">
                      <div class=\"tab-pane active bdr-w-0\" id=\"clicks-container\">
                          ";
            // line 124
            echo twig_include($this->env, $context, "@MauticPage/Trackable/click_counts.html.twig", ["trackables" =>             // line 125
(isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 125, $this->source); })()), "entity" =>             // line 126
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 126, $this->source); })()), "channel" => "focus"]);
            // line 128
            echo "
                      </div>
                  </div>
                  <!-- end: tab-content -->
              ";
        }
        // line 133
        echo "
          </div>
      </div>
      <!--/ left section -->

      <!-- right section -->
      <div class=\"col-md-3 bg-white bdr-l height-auto\">
          <!-- form HTML -->
          <div class=\"pa-md\">
              <div class=\"panel bg-info bg-light-lg bdr-w-0 mb-0\">
                  <div class=\"panel-body\">
                      <h5 class=\"fw-sb mb-sm\">";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.install.header"), "html", null, true);
        echo "</h5>
                      <p class=\"mb-sm\">";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.install.description"), "html", null, true);
        echo "</p>
                      <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\" readonly value=\"&lt;script src=&quot;";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_focus_generate", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 146, $this->source); })()), "id", [], "any", false, false, false, 146)], true), "html", null, true);
        echo "&quot; type=&quot;text/javascript&quot; charset=&quot;utf-8&quot; async=&quot;async&quot;&gt;&lt;/script&gt;\"/>
                  </div>
              </div>
          </div>
          <!--/ form HTML -->

          <hr class=\"hr-w-2\" style=\"width:50%\">

          ";
        // line 155
        echo "          <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mb-0\">
              <!-- recent activity -->
              ";
        // line 157
        echo twig_include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 157, $this->source); })())]);
        echo "
          </div>
      </div>
      <!--/ right section -->
  </div>
  <!--/ end: box layout -->

  <input type=\"hidden\" name=\"entityId\" id=\"entityId\" value=\"";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 164, $this->source); })()), "id", [], "any", false, false, false, 164), "html", null, true);
        echo "\"/>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFocus/Focus/details.html.twig";
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
        return array (  285 => 164,  275 => 157,  271 => 155,  260 => 146,  256 => 145,  252 => 144,  239 => 133,  232 => 128,  230 => 126,  229 => 125,  228 => 124,  216 => 115,  210 => 111,  208 => 110,  203 => 108,  192 => 100,  185 => 96,  178 => 92,  160 => 77,  155 => 75,  135 => 58,  124 => 50,  118 => 47,  103 => 35,  97 => 32,  83 => 22,  79 => 21,  74 => 18,  72 => 13,  71 => 12,  70 => 11,  69 => 9,  67 => 8,  63 => 7,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFocus/Focus/details.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Focus\\details.html.twig");
    }
}
