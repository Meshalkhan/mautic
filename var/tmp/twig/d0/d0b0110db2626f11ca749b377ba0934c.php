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

/* @MauticDynamicContent/DynamicContent/details.html.twig */
class __TwigTemplate_67a94a9ecc45907de22a41b2d4cf41a0 extends Template
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
            'publishStatus' => [$this, 'block_publishStatus'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate((( !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 3, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticDynamicContent/DynamicContent/details.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "dynamicContent";
    }

    // line 7
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
    }

    // line 9
    public function block_publishStatus($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })())]);
    }

    // line 11
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 12
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "customButtons" => ((        // line 13
array_key_exists("customButtons", $context)) ? (_twig_default_filter((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 13, $this->source); })()), [])) : ([])), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 15, $this->source); })()), "dynamiccontent:dynamiccontents:editown", [], "array", false, false, false, 15), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 15, $this->source); })()), "dynamiccontent:dynamiccontents:editother", [], "array", false, false, false, 15), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "createdBy", [], "any", false, false, false, 15)), "clone" => twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 16, $this->source); })()), "dynamiccontent:dynamiccontents:create", [], "array", false, false, false, 16), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 17, $this->source); })()), "dynamiccontent:dynamiccontents:deleteown", [], "array", false, false, false, 17), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 17, $this->source); })()), "dynamiccontent:dynamiccontents:deleteother", [], "array", false, false, false, 17), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), "createdBy", [], "any", false, false, false, 17)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 18, $this->source); })()), "dynamiccontent:dynamiccontents:viewown", [], "array", false, false, false, 18), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 18, $this->source); })()), "dynamiccontent:dynamiccontents:viewother", [], "array", false, false, false, 18), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "createdBy", [], "any", false, false, false, 18))], "routeBase" => "dynamicContent"]);
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $context["translationContent"] = twig_trim_filter(twig_include($this->env, $context, "@MauticCore/Translation/index.html.twig", ["activeEntity" =>         // line 25
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })()), "translations" =>         // line 26
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 26, $this->source); })()), "model" => "dynamicContent", "actionRoute" => "mautic_dynamicContent_action"]));
        // line 30
        $context["showTranslations"] =  !twig_test_empty((isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 30, $this->source); })()));
        // line 32
        echo "<!-- start: box layout -->
  <div class=\"box-layout\">
      <!-- left section -->
      <div class=\"col-md-9 height-auto\">
          <div>
              <!-- page detail header -->
              <div class=\"pr-md pl-md pt-lg pb-lg\">
                  <div class=\"box-layout\">
                      <div class=\"col-xs-10\">
                          <div class=\"text-muted\">";
        // line 41
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41));
        echo "</div>
                          ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 42, $this->source); })()), "isVariant", [true], "method", false, false, false, 42)) {
            // line 43
            echo "                              <div class=\"small\">
                                  <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dynamicContent_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 44, $this->source); })()), "parent", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" data-toggle=\"ajax\">
                                      ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_of", ["%parent%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 45, $this->source); })()), "parent", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45)]), "html", null, true);
            echo "
                                  </a>
                              </div>
                          ";
        }
        // line 49
        echo "                          ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), "isTranslation", [true], "method", false, false, false, 49)) {
            // line 50
            echo "                              <div class=\"small\">
                                  <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dynamicContent_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 51, $this->source); })()), "parent", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" data-toggle=\"ajax\">
                                      ";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translation_of", ["%parent%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 52, $this->source); })()), "parent", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52)]), "html", null, true);
            echo "
                                  </a>
                              </div>
                          ";
        }
        // line 56
        echo "                          ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 56, $this->source); })()), "isCampaignBased", [], "any", false, false, false, 56)) {
            // line 57
            echo "                              <div class=\"small\">
                                  ";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.header.is_filter_based", ["%slot%" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 58, $this->source); })()), "slotName", [], "any", false, false, false, 58)]), "html", null, true);
            echo "
                              </div>
                          ";
        }
        // line 61
        echo "                      </div>
                  </div>
              </div>
              <!--/ page detail header -->
              <!-- page detail collapseable -->
              <div class=\"collapse\" id=\"page-details\">
                  <div class=\"pr-md pl-md pb-md\">
                      <div class=\"panel shd-none mb-0\">
                          <table class=\"table table-hover mb-0\">
                              <tbody>
                              ";
        // line 71
        echo twig_include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 71, $this->source); })())]);
        echo "
                              <tr>
                                  <td width=\"20%\"><span class=\"fw-b textTitle\">";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.slot.campaign"), "html", null, true);
        echo "</span></td>
                                  <td>";
        // line 74
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 74, $this->source); })()), "isCampaignBased", [], "any", false, false, false, 74)) ? ("Yes") : ("No"));
        echo "</td>
                              </tr>
                              ";
        // line 76
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 76, $this->source); })()), "isCampaignBased", [], "any", false, false, false, 76)) {
            // line 77
            echo "                                <tr>
                                    <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.label.slot_name"), "html", null, true);
            echo "</span></td>
                                    <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 79, $this->source); })()), "slotName", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                                </tr>
                              ";
        }
        // line 82
        echo "                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              <!--/ page detail collapseable -->
          </div>
          <div>
              <!-- page detail collapseable toggler -->
              <div class=\"hr-expand nm\">
                  <span data-toggle=\"tooltip\" title=\"Detail\">
                      <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#page-details\">
                          <span class=\"caret\"></span>
                          ";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "
                      </a>
                  </span>
              </div>
              <!--/ page detail collapseable toggler -->

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
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.views"), "html", null, true);
        echo "
                                      </h5>
                                  </div>
                                  <div class=\"col-md-9 va-m\">
                                      ";
        // line 114
        echo twig_include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 114, $this->source); })()), "class" => "pull-right"]);
        echo "
                                  </div>
                              </div>
                              <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                  ";
        // line 118
        echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["entityViews"]) || array_key_exists("entityViews", $context) ? $context["entityViews"] : (function () { throw new RuntimeError('Variable "entityViews" does not exist.', 118, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        echo "
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--/ stats -->

              ";
        // line 126
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        echo "

              <!-- tabs controls -->
              <ul class=\"nav nav-tabs pr-md pl-md\">
                  <li class=\"active\">
                      <a href=\"#clicks-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_counts"), "html", null, true);
        echo "
                      </a>
                  </li>
                  ";
        // line 135
        if ((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 135, $this->source); })())) {
            // line 136
            echo "                  <li class>
                      <a href=\"#translation-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translations"), "html", null, true);
            echo "
                      </a>
                  </li>
                  ";
        }
        // line 142
        echo "              </ul>
              <!--/ tabs controls -->
          </div>
          <!-- start: tab-content -->
          <div class=\"tab-content pa-md\">
              <div class=\"tab-pane active active bdr-w-0\" id=\"clicks-container\">
                  ";
        // line 148
        echo twig_include($this->env, $context, "@MauticPage/Trackable/click_counts.html.twig", ["trackables" => (isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 148, $this->source); })()), "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 148, $this->source); })()), "channel" => "dynamicContent"]);
        echo "

              </div>
              <!-- #translation-container -->
              ";
        // line 152
        if ((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 152, $this->source); })())) {
            // line 153
            echo "                  <div class=\"tab-pane bdr-w-0\" id=\"translation-container\">
                      ";
            // line 154
            echo (isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 154, $this->source); })());
            echo "
                  </div>
              ";
        }
        // line 157
        echo "              <!--/ #translation-container -->
          </div>
          <!-- end: tab-content -->
      </div>
      <!--/ left section -->

      <!-- right section -->
      <div class=\"col-md-3 bdr-l height-auto\">
          <hr class=\"hr-w-2\" style=\"width:50%\">
          <!-- recent activity -->
          ";
        // line 167
        echo twig_include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 167, $this->source); })())]);
        echo "
      </div>
      <!--/ right section -->
  </div>

  <!--/ end: box layout -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticDynamicContent/DynamicContent/details.html.twig";
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
        return array (  318 => 167,  306 => 157,  300 => 154,  297 => 153,  295 => 152,  288 => 148,  280 => 142,  273 => 138,  269 => 136,  267 => 135,  261 => 132,  252 => 126,  241 => 118,  234 => 114,  227 => 110,  209 => 95,  194 => 82,  188 => 79,  184 => 78,  181 => 77,  179 => 76,  174 => 74,  170 => 73,  165 => 71,  153 => 61,  147 => 58,  144 => 57,  141 => 56,  134 => 52,  130 => 51,  127 => 50,  124 => 49,  117 => 45,  113 => 44,  110 => 43,  108 => 42,  104 => 41,  93 => 32,  91 => 30,  89 => 26,  88 => 25,  87 => 24,  83 => 23,  79 => 18,  78 => 17,  77 => 16,  76 => 15,  75 => 13,  74 => 12,  70 => 11,  63 => 9,  56 => 7,  49 => 5,  39 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticDynamicContent/DynamicContent/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DynamicContentBundle\\Resources\\views\\DynamicContent\\details.html.twig");
    }
}
