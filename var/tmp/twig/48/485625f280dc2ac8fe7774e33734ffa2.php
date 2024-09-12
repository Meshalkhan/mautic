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

/* @MauticPage/Page/details.html.twig */
class __TwigTemplate_5c8575fc58c6d4e13eb7d7d6e759b537 extends Template
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
        // line 20
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        $context["allowAbTest"] = (((twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 18, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 18) || (twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 18, $this->source); })()), "isTranslation", [true], "method", false, false, false, 18) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 18, $this->source); })()), "parent", [], "any", false, false, false, 18), "isVariant", [], "any", false, false, false, 18)))) ? (false) : (true));
        // line 20
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticPage/Page/details.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "page";
    }

    // line 24
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), "html", null, true);
    }

    // line 26
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 28
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 28, $this->source); })()), "customButtons" => ((        // line 29
array_key_exists("customButtons", $context)) ? (_twig_default_filter((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 29, $this->source); })()), [])) : ([])), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 31, $this->source); })()), "page:pages:editown", [], "array", false, false, false, 31), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 31, $this->source); })()), "page:pages:editother", [], "array", false, false, false, 31), twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 31, $this->source); })()), "createdBy", [], "any", false, false, false, 31)), "abtest" => (        // line 32
(isset($context["allowAbTest"]) || array_key_exists("allowAbTest", $context) ? $context["allowAbTest"] : (function () { throw new RuntimeError('Variable "allowAbTest" does not exist.', 32, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 32, $this->source); })()), "page:pages:create", [], "array", false, false, false, 32)), "clone" => twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 33, $this->source); })()), "page:pages:create", [], "array", false, false, false, 33), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 34, $this->source); })()), "page:pages:deleteown", [], "array", false, false, false, 34), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 34, $this->source); })()), "page:pages:deleteown", [], "array", false, false, false, 34), twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 34, $this->source); })()), "createdBy", [], "any", false, false, false, 34)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 35
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 35, $this->source); })()), "page:pages:viewown", [], "array", false, false, false, 35), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 35, $this->source); })()), "page:pages:viewother", [], "array", false, false, false, 35), twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 35, $this->source); })()), "createdBy", [], "any", false, false, false, 35))], "routeBase" => "page"]);
        // line 38
        echo "
";
    }

    // line 41
    public function block_publishStatus($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 41, $this->source); })())]);
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "  ";
        $context["variantContent"] = twig_trim_filter(twig_include($this->env, $context, "@MauticCore/Variant/index.html.twig", ["activeEntity" =>         // line 45
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 45, $this->source); })()), "variants" =>         // line 46
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 46, $this->source); })()), "abTestResults" =>         // line 47
(isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 47, $this->source); })()), "model" => "page", "actionRoute" => "mautic_page_action", "nameGetter" => "getTitle"]));
        // line 52
        echo "  ";
        $context["showVariants"] =  !twig_test_empty((isset($context["variantContent"]) || array_key_exists("variantContent", $context) ? $context["variantContent"] : (function () { throw new RuntimeError('Variable "variantContent" does not exist.', 52, $this->source); })()));
        // line 53
        echo "
  ";
        // line 54
        $context["translationContent"] = twig_trim_filter(twig_include($this->env, $context, "@MauticCore/Translation/index.html.twig", ["activeEntity" =>         // line 55
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 55, $this->source); })()), "translations" =>         // line 56
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 56, $this->source); })()), "model" => "page", "actionRoute" => "mautic_page_action", "nameGetter" => "getTitle"]));
        // line 61
        echo "  ";
        $context["showTranslations"] =  !twig_test_empty((isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 61, $this->source); })()));
        // line 62
        echo "
  <!-- start: box layout -->
  <div class=\"box-layout\">
      <!-- left section -->
      <div class=\"col-md-9 height-auto\">
          <div>
              <!-- page detail header -->
              <div class=\"pr-md pl-md pt-lg pb-lg\">
                  <div class=\"box-layout\">
                      <div class=\"col-xs-10\">
                          <div class=\"text-muted\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 72, $this->source); })()), "metaDescription", [], "any", false, false, false, 72), "html", null, true);
        echo "</div>
                          ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 73, $this->source); })()), "isVariant", [true], "method", false, false, false, 73)) {
            // line 74
            echo "                              <div class=\"small\">
                                  <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 75, $this->source); })()), "parent", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\" data-toggle=\"ajax\">";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_of", ["%parent%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 76, $this->source); })()), "parent", [], "any", false, false, false, 76), "getName", [], "method", false, false, false, 76)]), "html", null, true);
            // line 77
            echo "</a>
                              </div>
                          ";
        }
        // line 80
        echo "                          ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 80, $this->source); })()), "isTranslation", [true], "method", false, false, false, 80)) {
            // line 81
            echo "                          <div class=\"small\">
                              <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 82, $this->source); })()), "parent", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\" data-toggle=\"ajax\">";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translation_of", ["%parent%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 83, $this->source); })()), "parent", [], "any", false, false, false, 83), "getName", [], "method", false, false, false, 83)]), "html", null, true);
            // line 84
            echo "</a>
                          </div>
                          ";
        }
        // line 87
        echo "                          ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 87, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 87)) {
            // line 88
            echo "                              <div class=\"small\">
                                  ";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.preference_center"), "html", null, true);
            echo "
                              </div>
                          ";
        }
        // line 92
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
        // line 103
        echo twig_include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 103, $this->source); })())], false);
        echo "
                              </tbody>
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
                          <span class=\"caret\"></span> ";
        // line 117
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
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.pageviews"), "html", null, true);
        echo "
                                      </h5>
                                  </div>
                                  <div class=\"col-md-9 va-m\">
                                      ";
        // line 136
        echo twig_include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 136, $this->source); })()), "class" => "pull-right"]);
        echo "
                                  </div>
                              </div>
                              <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                  ";
        // line 140
        echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 140, $this->source); })()), "pageviews", [], "any", false, false, false, 140), "chartType" => "line", "chartHeight" => 300]);
        echo "
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--/ stats -->

              ";
        // line 148
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        echo "

              <!-- tabs controls -->
              <ul class=\"nav nav-tabs pr-md pl-md\">
                  ";
        // line 152
        if ((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 152, $this->source); })())) {
            // line 153
            echo "                      <li class=\"active\">
                          <a href=\"#variants-container\" role=\"tab\" data-toggle=\"tab\">";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variants"), "html", null, true);
            // line 156
            echo "</a>
                      </li>
                  ";
        }
        // line 159
        echo "                  ";
        if ((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 159, $this->source); })())) {
            // line 160
            echo "                      <li class=\"";
            if ( !(isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 160, $this->source); })())) {
                echo "active";
            }
            echo "\">
                          <a href=\"#translation-container\" role=\"tab\" data-toggle=\"tab\">";
            // line 162
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translations"), "html", null, true);
            // line 163
            echo "</a>
                      </li>
                  ";
        }
        // line 166
        echo "              </ul>
              <!--/ tabs controls -->
          </div>

          ";
        // line 170
        if (((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 170, $this->source); })()) || (isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 170, $this->source); })()))) {
            // line 171
            echo "          <!-- start: tab-content -->
          <div class=\"tab-content pa-md\">
              ";
            // line 173
            if ((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 173, $this->source); })())) {
                // line 174
                echo "              <!-- #variants-container -->
              <div class=\"tab-pane active bdr-w-0\" id=\"variants-container\">
                  ";
                // line 176
                echo (isset($context["variantContent"]) || array_key_exists("variantContent", $context) ? $context["variantContent"] : (function () { throw new RuntimeError('Variable "variantContent" does not exist.', 176, $this->source); })());
                echo "
              </div>
              <!--/ #variants-container -->
              ";
            }
            // line 180
            echo "              <!-- #translation-container -->
              ";
            // line 181
            if ((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 181, $this->source); })())) {
                // line 182
                echo "              <div class=\"tab-pane ";
                if ( !(isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 182, $this->source); })())) {
                    echo "active";
                }
                echo " bdr-w-0\" id=\"translation-container\">
                  ";
                // line 183
                echo (isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 183, $this->source); })());
                echo "
              </div>
              ";
            }
            // line 186
            echo "              <!--/ #translation-container -->
          </div>
          <!--/ end: tab-content -->
          ";
        } elseif (        // line 189
(isset($context["allowAbTest"]) || array_key_exists("allowAbTest", $context) ? $context["allowAbTest"] : (function () { throw new RuntimeError('Variable "allowAbTest" does not exist.', 189, $this->source); })())) {
            // line 190
            echo "          <div class=\"pa-md\">
              <div class=\"text-center\" style=\"height: 100%; width: 100%; \">
                  <h3 style=\"padding: 30px;\">
                      <a class=\"create-abtest-link\" href=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_action", ["objectAction" => "abtest", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 193, $this->source); })()), "id", [], "any", false, false, false, 193)]), "html", null, true);
            echo "\" data-toggle=\"ajax\">
                          ";
            // line 194
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.ab_test.create"), "html", null, true);
            echo " <i class=\"fa fa-angle-right\"></i>
                      </a>
                  </h3>
              </div>
          </div>
          ";
        }
        // line 200
        echo "      </div>
      <!--/ left section -->

      <!-- right section -->
      <div class=\"col-md-3 bdr-l height-auto\">
          <!-- preview URL -->
          ";
        // line 206
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 206, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 206)) {
            // line 207
            echo "          <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\">
              <div class=\"panel-heading\">
                  <div class=\"panel-title\">";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.url"), "html", null, true);
            echo "</div>
              </div>
              <div class=\"panel-body pt-xs\">
                  <div class=\"input-group\">
                      <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\"
                             readonly
                             value=\"";
            // line 215
            echo twig_escape_filter($this->env, (isset($context["pageUrl"]) || array_key_exists("pageUrl", $context) ? $context["pageUrl"] : (function () { throw new RuntimeError('Variable "pageUrl" does not exist.', 215, $this->source); })()));
            echo "\"/>
                      <span class=\"input-group-btn\">
                          <button class=\"btn btn-default btn-nospin\" onclick=\"window.open('";
            // line 217
            echo twig_escape_filter($this->env, (isset($context["pageUrl"]) || array_key_exists("pageUrl", $context) ? $context["pageUrl"] : (function () { throw new RuntimeError('Variable "pageUrl" does not exist.', 217, $this->source); })()), "html", null, true);
            echo "', '_blank');\">
                              <i class=\"ri-external-link-line\"></i>
                          </button>
                      </span>
                  </div>
              </div>
          </div>
          ";
        }
        // line 225
        echo "          <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\">
              <div class=\"panel-heading\">
                  <div class=\"panel-title\">";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.preview.url"), "html", null, true);
        echo "</div>
              </div>
              <div class=\"panel-body pt-xs\">
                  ";
        // line 230
        if (twig_get_attribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "translation", [], "any", true, true, false, 230)) {
            // line 231
            echo "                      <div class=\"row\">
                          <div class=\"form-group col-xs-12 \">
                              <div class=\"control-label\">";
            // line 233
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.translation"), "html", null, true);
            echo "</div>
                              ";
            // line 234
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 234, $this->source); })()), "translation", [], "any", false, false, false, 234), 'widget');
            echo "
                          </div>
                      </div>
                  ";
        }
        // line 238
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "variant", [], "any", true, true, false, 238)) {
            // line 239
            echo "                      <div class=\"row\">
                          <div class=\"form-group col-xs-12 \">
                              <div class=\"control-label\">";
            // line 241
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.ab.variant"), "html", null, true);
            echo "</div>
                              ";
            // line 242
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 242, $this->source); })()), "variant", [], "any", false, false, false, 242), 'widget');
            echo "
                          </div>
                      </div>
                  ";
        }
        // line 246
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "contact", [], "any", true, true, false, 246)) {
            // line 247
            echo "                      <div class=\"row\">
                          <div class=\"form-group col-xs-12 \">
                              <div class=\"control-label\">";
            // line 249
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.contact"), "html", null, true);
            echo "</div>
                              ";
            // line 250
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 250, $this->source); })()), "contact", [], "any", false, false, false, 250), 'widget');
            echo "
                          </div>
                      </div>
                  ";
        }
        // line 254
        echo "                  <div class=\"row\">
                      <div class=\"form-group col-xs-12 \">
                          <div class=\"input-group\">
                              <input id=\"content_preview_url\"
                                     data-route=\"page/preview\"
                                     onclick=\"this.setSelectionRange(0, this.value.length);\"
                                     type=\"text\"
                                     class=\"form-control\"
                                     readonly
                                     value=\"";
        // line 263
        echo twig_escape_filter($this->env, (isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 263, $this->source); })()));
        echo "\"/>
                              <span class=\"input-group-btn\">
                                  <button id=\"content_preview_url_button\"
                                          class=\"btn btn-default btn-nospin\"
                                          onclick=\"window.open('";
        // line 267
        echo twig_escape_filter($this->env, (isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 267, $this->source); })()), "html", null, true);
        echo "', '_blank');\">
                                      <i class=\"ri-external-link-line\"></i>
                                  </button>
                              </span>
                              <input type=\"hidden\" id=\"content_preview_settings_object_id\" value=\"";
        // line 271
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 271, $this->source); })()), "id", [], "any", false, false, false, 271), "html", null, true);
        echo "\">
                              <input type=\"hidden\" id=\"content_preview_settings_contact_id\" value=\"\">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--/ preview URL -->
          <hr class=\"hr-w-2\" style=\"width:50%\">
          <!-- recent activity -->
          ";
        // line 281
        echo twig_include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 281, $this->source); })())], false);
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
        return "@MauticPage/Page/details.html.twig";
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
        return array (  492 => 281,  479 => 271,  472 => 267,  465 => 263,  454 => 254,  447 => 250,  443 => 249,  439 => 247,  436 => 246,  429 => 242,  425 => 241,  421 => 239,  418 => 238,  411 => 234,  407 => 233,  403 => 231,  401 => 230,  395 => 227,  391 => 225,  380 => 217,  375 => 215,  366 => 209,  362 => 207,  360 => 206,  352 => 200,  343 => 194,  339 => 193,  334 => 190,  332 => 189,  327 => 186,  321 => 183,  314 => 182,  312 => 181,  309 => 180,  302 => 176,  298 => 174,  296 => 173,  292 => 171,  290 => 170,  284 => 166,  279 => 163,  277 => 162,  270 => 160,  267 => 159,  262 => 156,  260 => 155,  257 => 153,  255 => 152,  248 => 148,  237 => 140,  230 => 136,  223 => 132,  205 => 117,  188 => 103,  175 => 92,  169 => 89,  166 => 88,  163 => 87,  158 => 84,  156 => 83,  153 => 82,  150 => 81,  147 => 80,  142 => 77,  140 => 76,  137 => 75,  134 => 74,  132 => 73,  128 => 72,  116 => 62,  113 => 61,  111 => 56,  110 => 55,  109 => 54,  106 => 53,  103 => 52,  101 => 47,  100 => 46,  99 => 45,  97 => 44,  93 => 43,  86 => 41,  81 => 38,  79 => 35,  78 => 34,  77 => 33,  76 => 32,  75 => 31,  74 => 29,  73 => 28,  71 => 27,  67 => 26,  60 => 24,  53 => 22,  48 => 20,  46 => 18,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPage/Page/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Resources\\views\\Page\\details.html.twig");
    }
}
