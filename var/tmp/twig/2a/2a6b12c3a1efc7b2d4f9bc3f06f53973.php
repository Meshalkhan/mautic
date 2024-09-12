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

/* @MauticSocial/Monitoring/details.html.twig */
class __TwigTemplate_87f859586c67f39e6dd7973366aaed8e extends Template
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
        // line 6
        return $this->loadTemplate((((isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 6, $this->source); })())) ? ("@MauticCore/Default/raw_output.html.twig") : ("@MauticCore/Default/content.html.twig")), "@MauticSocial/Monitoring/details.html.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "monitoring";
    }

    // line 10
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
    }

    // line 12
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 15
(isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 15, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("mauticSocial:monitoring:edit"), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("mauticSocial:monitoring:delete"), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("mauticSocial:monitoring:view")], "routeBase" => "social", "langVar" => "monitoring", "nameGetter" => "getTitle"]);
        // line 24
        echo "
";
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  ";
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("plugins/MauticSocialBundle/Assets/js/social.js");
        echo "
  <!-- start: box layout -->
  <div class=\"box-layout\">
      <!-- left section -->
      <div class=\"col-md-9 height-auto\">
          <div>
              <!-- monitoring detail header -->
              <div class=\"pr-md pl-md pt-lg pb-lg\">
                  <div class=\"box-layout\">
                      <div class=\"col-xs-10 va-m\">
                          <div class=\"text-white dark-sm mb-0\">";
        // line 38
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38));
        echo "</div>
                      </div>
                      <div class=\"col-xs-2 text-right\">
                          ";
        // line 41
        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 41, $this->source); })())]);
        echo "
                      </div>
                  </div>
              </div>
              <!--/ monitoring detail header -->
              <!-- monitoring detail collapseable -->
              <div class=\"collapse\" id=\"asset-details\">
                  <div class=\"pr-md pl-md pb-md\">
                      <div class=\"panel shd-none mb-0\">
                          <table class=\"table table-hover mb-0\">
                              <tbody>
                                  ";
        // line 52
        echo twig_include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 52, $this->source); })())]);
        echo "
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              <!--/  monitoring collapseable -->
          </div>

          <div>
              <!-- stats -->
              <div class=\"pa-md\">
                  <div class=\"row\">
                      <div class=\"col-sm-12\">
                          <div class=\"panel\">
                              <div class=\"panel-body box-layout\">
                                  <div class=\"col-md-3 va-m\">
                                      <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                          <span class=\"fa fa-twitter\"></span>
                                          ";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("mautic.social.monitoring." . twig_get_attribute($this->env, $this->source, (isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 71, $this->source); })()), "networkType", [], "any", false, false, false, 71)) . ".popularity")), "html", null, true);
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
        echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["leadStats"]) || array_key_exists("leadStats", $context) ? $context["leadStats"] : (function () { throw new RuntimeError('Variable "leadStats" does not exist.', 79, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        echo "
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--/ stats -->

              ";
        // line 87
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        echo "

              <!-- tabs controls -->
              <ul class=\"nav nav-tabs pr-md pl-md\">
                  <li class=\"active\">
                      <a href=\"#leads-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        echo "
                      </a>
                  </li>
              </ul>
              <!--/ tabs controls -->
          </div>

          <!-- start: tab-content -->
          <div class=\"tab-content pa-md\">
              <!-- #events-container -->
              <div class=\"tab-pane active fade in bdr-w-0 page-list\" id=\"leads-container\">
                  ";
        // line 104
        echo (isset($context["monitorLeads"]) || array_key_exists("monitorLeads", $context) ? $context["monitorLeads"] : (function () { throw new RuntimeError('Variable "monitorLeads" does not exist.', 104, $this->source); })());
        echo "
              </div>
          </div>

      </div>
      <!--/ left section -->

      <!-- right section -->
      <div class=\"col-md-3 bdr-l height-auto\">
          <!-- recent activity -->
          ";
        // line 114
        echo twig_include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 114, $this->source); })())]);
        echo "
      </div>
      <!--/ right section -->

      <input id=\"itemId\" type=\"hidden\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 118, $this->source); })()), "id", [], "any", false, false, false, 118), "html", null, true);
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
        return "@MauticSocial/Monitoring/details.html.twig";
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
        return array (  205 => 118,  198 => 114,  185 => 104,  171 => 93,  162 => 87,  151 => 79,  144 => 75,  137 => 71,  115 => 52,  101 => 41,  95 => 38,  81 => 28,  77 => 27,  72 => 24,  70 => 15,  68 => 14,  66 => 13,  62 => 12,  55 => 10,  48 => 8,  38 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSocial/Monitoring/details.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticSocialBundle\\Resources\\views\\Monitoring\\details.html.twig");
    }
}
