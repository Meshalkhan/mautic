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

/* @MauticNotification/MobileNotification/details.html.twig */
class __TwigTemplate_e1f875b13ebe238f2fd84979d0b38705 extends Template
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
            'publishStatus' => [$this, 'block_publishStatus'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticNotification/MobileNotification/details.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "notification";
    }

    // line 16
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
    }

    // line 18
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 20
(isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 20, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "notification:mobile_notifications:editown", [], "array", false, false, false, 22), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "notification:mobile_notifications:editother", [], "array", false, false, false, 22), twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 22, $this->source); })()), "createdBy", [], "any", false, false, false, 22)), "delete" => twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "notification:mobile_notifications:create", [], "array", false, false, false, 23), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 24, $this->source); })()), "notification:mobile_notifications:viewown", [], "array", false, false, false, 24), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 24, $this->source); })()), "notification:mobile_notifications:viewother", [], "array", false, false, false, 24), twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 24, $this->source); })()), "createdBy", [], "any", false, false, false, 24))], "routeBase" => "mobile_notification"]);
        // line 27
        echo "
";
    }

    // line 30
    public function block_publishStatus($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 31, $this->source); })())], false);
        echo "
";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "  <!-- start: box layout -->
  <div class=\"box-layout\">
      <!-- left section -->
      <div class=\"col-md-9 height-auto\">
          <div>
              <!-- notification detail collapseable -->
              <div class=\"collapse\" id=\"notification-details\">
                <div class=\"pr-md pl-md pb-md\">
                  <div class=\"panel shd-none mb-0\">
                    <table class=\"table table-hover mb-0\">
                      <tbody>
                        ";
        // line 46
        echo twig_include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 46, $this->source); })())], false);
        echo "
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--/ notification detail collapseable -->

              <!-- notification detail collapseable toggler -->
              <div class=\"hr-expand nm\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "\">
                      <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#notification-details\"><span class=\"caret\"></span> ";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "</a>
                  </span>
              </div>
              <!--/ notification detail collapseable toggler -->

              <!-- some stats -->
              <div class=\"pa-md\">
                  <div class=\"row\">
                      <div class=\"col-sm-12\">
                          <div class=\"panel\">
                              <div class=\"panel-body box-layout\">
                                  <div class=\"col-md-3 va-m\">
                                      <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                          <span class=\"fa fa-line-chart\"></span>
                                          ";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.stats"), "html", null, true);
        echo "
                                      </h5>
                                  </div>
                                  <div class=\"col-md-9 va-m\">
                                      ";
        // line 75
        echo twig_include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 75, $this->source); })()), "class" => "pull-right"]);
        echo "
                                  </div>
                              </div>
                              <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                  ";
        // line 79
        echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["entityViews"]) || array_key_exists("entityViews", $context) ? $context["entityViews"] : (function () { throw new RuntimeError('Variable "entityViews" does not exist.', 79, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        echo "
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--/ stats -->

              <!-- tabs controls -->
              <ul class=\"nav nav-tabs pr-md pl-md\">
                  <li class=\"active\">
                      <a href=\"#clicks-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_counts"), "html", null, true);
        echo "
                      </a>
                  </li>
                  <li class=\"\">
                      <a href=\"#contacts-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        echo "
                      </a>
                  </li>
              </ul>
              <!--/ tabs controls -->
          </div>

          <!-- start: tab-content -->
          <div class=\"tab-content pa-md\">
              <div class=\"tab-pane active bdr-w-0\" id=\"clicks-container\">
                  ";
        // line 106
        echo twig_include($this->env, $context, "@MauticPage/Trackable/click_counts.html.twig", ["trackables" =>         // line 107
(isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 107, $this->source); })()), "entity" =>         // line 108
(isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 108, $this->source); })()), "channel" => "notification"]);
        // line 110
        echo "
              </div>

              <div class=\"tab-pane fade in bdr-w-0 page-list\" id=\"contacts-container\">
                  ";
        // line 114
        echo (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 114, $this->source); })());
        echo "
              </div>
          </div>
      </div>
      <!--/ left section -->

      <!-- right section -->
      <div class=\"col-md-3 bdr-l height-auto\">
          <!-- activity feed -->
          ";
        // line 123
        echo twig_include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 123, $this->source); })())], false);
        echo "
      </div>
      <!--/ right section -->
      <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 126, $this->source); })()), "id", [], "any", false, false, false, 126));
        echo "\" />
  </div>
  <!--/ end: box layout -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticNotification/MobileNotification/details.html.twig";
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
        return array (  220 => 126,  214 => 123,  202 => 114,  196 => 110,  194 => 108,  193 => 107,  192 => 106,  179 => 96,  171 => 91,  156 => 79,  149 => 75,  142 => 71,  125 => 57,  121 => 56,  108 => 46,  95 => 35,  91 => 34,  84 => 31,  80 => 30,  75 => 27,  73 => 24,  72 => 23,  71 => 22,  70 => 20,  68 => 19,  64 => 18,  57 => 16,  50 => 14,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticNotification/MobileNotification/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\NotificationBundle\\Resources\\views\\MobileNotification\\details.html.twig");
    }
}
