<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @MauticSocial/Monitoring/details.html.twig */
class __TwigTemplate_cf3b747a44d152a5ad311f3601564023 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

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

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 6
        return $this->loadTemplate((((isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 6, $this->source); })())) ? ("@MauticCore/Default/raw_output.html.twig") : ("@MauticCore/Default/content.html.twig")), "@MauticSocial/Monitoring/details.html.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "monitoring";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "    ";
        // line 14
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 15
(isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 15, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("mauticSocial:monitoring:edit"), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("mauticSocial:monitoring:delete"), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("mauticSocial:monitoring:view")], "routeBase" => "social", "langVar" => "monitoring", "nameGetter" => "getTitle"]);
        // line 24
        yield "
";
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "  ";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("plugins/MauticSocialBundle/Assets/js/social.js");
        yield "
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
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38));
        yield "</div>
                      </div>
                      <div class=\"col-xs-2 text-right\">
                          ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 41, $this->source); })())]);
        yield "
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 52, $this->source); })())]);
        yield "
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("mautic.social.monitoring." . CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 71, $this->source); })()), "networkType", [], "any", false, false, false, 71)) . ".popularity")), "html", null, true);
        yield "
                                      </h5>
                                  </div>
                                  <div class=\"col-md-9 va-m\">
                                      ";
        // line 75
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 75, $this->source); })()), "class" => "pull-right"]);
        yield "
                                  </div>
                              </div>
                              <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                  ";
        // line 79
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["leadStats"]) || array_key_exists("leadStats", $context) ? $context["leadStats"] : (function () { throw new RuntimeError('Variable "leadStats" does not exist.', 79, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        yield "
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--/ stats -->

              ";
        // line 87
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

              <!-- tabs controls -->
              <ul class=\"nav nav-tabs pr-md pl-md\">
                  <li class=\"active\">
                      <a href=\"#leads-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        yield "
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
        yield (isset($context["monitorLeads"]) || array_key_exists("monitorLeads", $context) ? $context["monitorLeads"] : (function () { throw new RuntimeError('Variable "monitorLeads" does not exist.', 104, $this->source); })());
        yield "
              </div>
          </div>

      </div>
      <!--/ left section -->

      <!-- right section -->
      <div class=\"col-md-3 bdr-l height-auto\">
          <!-- recent activity -->
          ";
        // line 114
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 114, $this->source); })())]);
        yield "
      </div>
      <!--/ right section -->

      <input id=\"itemId\" type=\"hidden\" value=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeMonitoring"]) || array_key_exists("activeMonitoring", $context) ? $context["activeMonitoring"] : (function () { throw new RuntimeError('Variable "activeMonitoring" does not exist.', 118, $this->source); })()), "id", [], "any", false, false, false, 118), "html", null, true);
        yield "\" />
  </div>
  <!--/ end: box layout -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticSocial/Monitoring/details.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  225 => 118,  218 => 114,  205 => 104,  191 => 93,  182 => 87,  171 => 79,  164 => 75,  157 => 71,  135 => 52,  121 => 41,  115 => 38,  101 => 28,  94 => 27,  88 => 24,  86 => 15,  84 => 14,  82 => 13,  75 => 12,  64 => 10,  53 => 8,  43 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSocial/Monitoring/details.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticSocialBundle\\Resources\\views\\Monitoring\\details.html.twig");
    }
}
