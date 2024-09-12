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

/* @MauticPage/Page/details.html.twig */
class __TwigTemplate_c7054fed864b40f139a31f0f786371e1 extends Template
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
            'publishStatus' => [$this, 'block_publishStatus'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 20
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        $context["allowAbTest"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 18, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 18) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 18, $this->source); })()), "isTranslation", [true], "method", false, false, false, 18) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 18, $this->source); })()), "parent", [], "any", false, false, false, 18), "isVariant", [], "any", false, false, false, 18)))) ? (false) : (true));
        // line 20
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticPage/Page/details.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "page";
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), "html", null, true);
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 28
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 28, $this->source); })()), "customButtons" => ((        // line 29
array_key_exists("customButtons", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 29, $this->source); })()), [])) : ([])), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 31
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 31, $this->source); })()), "page:pages:editown", [], "array", false, false, false, 31), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 31, $this->source); })()), "page:pages:editother", [], "array", false, false, false, 31), CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 31, $this->source); })()), "createdBy", [], "any", false, false, false, 31)), "abtest" => (        // line 32
(isset($context["allowAbTest"]) || array_key_exists("allowAbTest", $context) ? $context["allowAbTest"] : (function () { throw new RuntimeError('Variable "allowAbTest" does not exist.', 32, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 32, $this->source); })()), "page:pages:create", [], "array", false, false, false, 32)), "clone" => CoreExtension::getAttribute($this->env, $this->source,         // line 33
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 33, $this->source); })()), "page:pages:create", [], "array", false, false, false, 33), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 34, $this->source); })()), "page:pages:deleteown", [], "array", false, false, false, 34), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 34, $this->source); })()), "page:pages:deleteown", [], "array", false, false, false, 34), CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 34, $this->source); })()), "createdBy", [], "any", false, false, false, 34)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 35, $this->source); })()), "page:pages:viewown", [], "array", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 35, $this->source); })()), "page:pages:viewother", [], "array", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 35, $this->source); })()), "createdBy", [], "any", false, false, false, 35))], "routeBase" => "page"]);
        // line 38
        yield "
";
        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 41, $this->source); })())]);
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "  ";
        $context["variantContent"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Variant/index.html.twig", ["activeEntity" =>         // line 45
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 45, $this->source); })()), "variants" =>         // line 46
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 46, $this->source); })()), "abTestResults" =>         // line 47
(isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 47, $this->source); })()), "model" => "page", "actionRoute" => "mautic_page_action", "nameGetter" => "getTitle"]));
        // line 52
        yield "  ";
        $context["showVariants"] =  !Twig\Extension\CoreExtension::testEmpty((isset($context["variantContent"]) || array_key_exists("variantContent", $context) ? $context["variantContent"] : (function () { throw new RuntimeError('Variable "variantContent" does not exist.', 52, $this->source); })()));
        // line 53
        yield "
  ";
        // line 54
        $context["translationContent"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Translation/index.html.twig", ["activeEntity" =>         // line 55
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 55, $this->source); })()), "translations" =>         // line 56
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 56, $this->source); })()), "model" => "page", "actionRoute" => "mautic_page_action", "nameGetter" => "getTitle"]));
        // line 61
        yield "  ";
        $context["showTranslations"] =  !Twig\Extension\CoreExtension::testEmpty((isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 61, $this->source); })()));
        // line 62
        yield "
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 72, $this->source); })()), "metaDescription", [], "any", false, false, false, 72), "html", null, true);
        yield "</div>
                          ";
        // line 73
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 73, $this->source); })()), "isVariant", [true], "method", false, false, false, 73)) {
            // line 74
            yield "                              <div class=\"small\">
                                  <a href=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 75, $this->source); })()), "parent", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 76, $this->source); })()), "parent", [], "any", false, false, false, 76), "getName", [], "method", false, false, false, 76)]), "html", null, true);
            // line 77
            yield "</a>
                              </div>
                          ";
        }
        // line 80
        yield "                          ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 80, $this->source); })()), "isTranslation", [true], "method", false, false, false, 80)) {
            // line 81
            yield "                          <div class=\"small\">
                              <a href=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 82, $this->source); })()), "parent", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translation_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 83, $this->source); })()), "parent", [], "any", false, false, false, 83), "getName", [], "method", false, false, false, 83)]), "html", null, true);
            // line 84
            yield "</a>
                          </div>
                          ";
        }
        // line 87
        yield "                          ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 87, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 87)) {
            // line 88
            yield "                              <div class=\"small\">
                                  ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.preference_center"), "html", null, true);
            yield "
                              </div>
                          ";
        }
        // line 92
        yield "                      </div>
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 103, $this->source); })())], false);
        yield "
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.pageviews"), "html", null, true);
        yield "
                                      </h5>
                                  </div>
                                  <div class=\"col-md-9 va-m\">
                                      ";
        // line 136
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 136, $this->source); })()), "class" => "pull-right"]);
        yield "
                                  </div>
                              </div>
                              <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                  ";
        // line 140
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 140, $this->source); })()), "pageviews", [], "any", false, false, false, 140), "chartType" => "line", "chartHeight" => 300]);
        yield "
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--/ stats -->

              ";
        // line 148
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

              <!-- tabs controls -->
              <ul class=\"nav nav-tabs pr-md pl-md\">
                  ";
        // line 152
        if ((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 152, $this->source); })())) {
            // line 153
            yield "                      <li class=\"active\">
                          <a href=\"#variants-container\" role=\"tab\" data-toggle=\"tab\">";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variants"), "html", null, true);
            // line 156
            yield "</a>
                      </li>
                  ";
        }
        // line 159
        yield "                  ";
        if ((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 159, $this->source); })())) {
            // line 160
            yield "                      <li class=\"";
            if ( !(isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 160, $this->source); })())) {
                yield "active";
            }
            yield "\">
                          <a href=\"#translation-container\" role=\"tab\" data-toggle=\"tab\">";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translations"), "html", null, true);
            // line 163
            yield "</a>
                      </li>
                  ";
        }
        // line 166
        yield "              </ul>
              <!--/ tabs controls -->
          </div>

          ";
        // line 170
        if (((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 170, $this->source); })()) || (isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 170, $this->source); })()))) {
            // line 171
            yield "          <!-- start: tab-content -->
          <div class=\"tab-content pa-md\">
              ";
            // line 173
            if ((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 173, $this->source); })())) {
                // line 174
                yield "              <!-- #variants-container -->
              <div class=\"tab-pane active bdr-w-0\" id=\"variants-container\">
                  ";
                // line 176
                yield (isset($context["variantContent"]) || array_key_exists("variantContent", $context) ? $context["variantContent"] : (function () { throw new RuntimeError('Variable "variantContent" does not exist.', 176, $this->source); })());
                yield "
              </div>
              <!--/ #variants-container -->
              ";
            }
            // line 180
            yield "              <!-- #translation-container -->
              ";
            // line 181
            if ((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 181, $this->source); })())) {
                // line 182
                yield "              <div class=\"tab-pane ";
                if ( !(isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 182, $this->source); })())) {
                    yield "active";
                }
                yield " bdr-w-0\" id=\"translation-container\">
                  ";
                // line 183
                yield (isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 183, $this->source); })());
                yield "
              </div>
              ";
            }
            // line 186
            yield "              <!--/ #translation-container -->
          </div>
          <!--/ end: tab-content -->
          ";
        } elseif (        // line 189
(isset($context["allowAbTest"]) || array_key_exists("allowAbTest", $context) ? $context["allowAbTest"] : (function () { throw new RuntimeError('Variable "allowAbTest" does not exist.', 189, $this->source); })())) {
            // line 190
            yield "          <div class=\"pa-md\">
              <div class=\"text-center\" style=\"height: 100%; width: 100%; \">
                  <h3 style=\"padding: 30px;\">
                      <a class=\"create-abtest-link\" href=\"";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_action", ["objectAction" => "abtest", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 193, $this->source); })()), "id", [], "any", false, false, false, 193)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">
                          ";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.ab_test.create"), "html", null, true);
            yield " <i class=\"fa fa-angle-right\"></i>
                      </a>
                  </h3>
              </div>
          </div>
          ";
        }
        // line 200
        yield "      </div>
      <!--/ left section -->

      <!-- right section -->
      <div class=\"col-md-3 bdr-l height-auto\">
          <!-- preview URL -->
          ";
        // line 206
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 206, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 206)) {
            // line 207
            yield "          <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\">
              <div class=\"panel-heading\">
                  <div class=\"panel-title\">";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.url"), "html", null, true);
            yield "</div>
              </div>
              <div class=\"panel-body pt-xs\">
                  <div class=\"input-group\">
                      <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\"
                             readonly
                             value=\"";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageUrl"]) || array_key_exists("pageUrl", $context) ? $context["pageUrl"] : (function () { throw new RuntimeError('Variable "pageUrl" does not exist.', 215, $this->source); })()));
            yield "\"/>
                      <span class=\"input-group-btn\">
                          <button class=\"btn btn-default btn-nospin\" onclick=\"window.open('";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageUrl"]) || array_key_exists("pageUrl", $context) ? $context["pageUrl"] : (function () { throw new RuntimeError('Variable "pageUrl" does not exist.', 217, $this->source); })()), "html", null, true);
            yield "', '_blank');\">
                              <i class=\"ri-external-link-line\"></i>
                          </button>
                      </span>
                  </div>
              </div>
          </div>
          ";
        }
        // line 225
        yield "          <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\">
              <div class=\"panel-heading\">
                  <div class=\"panel-title\">";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.preview.url"), "html", null, true);
        yield "</div>
              </div>
              <div class=\"panel-body pt-xs\">
                  ";
        // line 230
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "translation", [], "any", true, true, false, 230)) {
            // line 231
            yield "                      <div class=\"row\">
                          <div class=\"form-group col-xs-12 \">
                              <div class=\"control-label\">";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.translation"), "html", null, true);
            yield "</div>
                              ";
            // line 234
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 234, $this->source); })()), "translation", [], "any", false, false, false, 234), 'widget');
            yield "
                          </div>
                      </div>
                  ";
        }
        // line 238
        yield "                  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "variant", [], "any", true, true, false, 238)) {
            // line 239
            yield "                      <div class=\"row\">
                          <div class=\"form-group col-xs-12 \">
                              <div class=\"control-label\">";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.ab.variant"), "html", null, true);
            yield "</div>
                              ";
            // line 242
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 242, $this->source); })()), "variant", [], "any", false, false, false, 242), 'widget');
            yield "
                          </div>
                      </div>
                  ";
        }
        // line 246
        yield "                  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "contact", [], "any", true, true, false, 246)) {
            // line 247
            yield "                      <div class=\"row\">
                          <div class=\"form-group col-xs-12 \">
                              <div class=\"control-label\">";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.contact"), "html", null, true);
            yield "</div>
                              ";
            // line 250
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 250, $this->source); })()), "contact", [], "any", false, false, false, 250), 'widget');
            yield "
                          </div>
                      </div>
                  ";
        }
        // line 254
        yield "                  <div class=\"row\">
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 263, $this->source); })()));
        yield "\"/>
                              <span class=\"input-group-btn\">
                                  <button id=\"content_preview_url_button\"
                                          class=\"btn btn-default btn-nospin\"
                                          onclick=\"window.open('";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 267, $this->source); })()), "html", null, true);
        yield "', '_blank');\">
                                      <i class=\"ri-external-link-line\"></i>
                                  </button>
                              </span>
                              <input type=\"hidden\" id=\"content_preview_settings_object_id\" value=\"";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 271, $this->source); })()), "id", [], "any", false, false, false, 271), "html", null, true);
        yield "\">
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 281, $this->source); })())], false);
        yield "
      </div>
      <!--/ right section -->
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
        return "@MauticPage/Page/details.html.twig";
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
        return array (  516 => 281,  503 => 271,  496 => 267,  489 => 263,  478 => 254,  471 => 250,  467 => 249,  463 => 247,  460 => 246,  453 => 242,  449 => 241,  445 => 239,  442 => 238,  435 => 234,  431 => 233,  427 => 231,  425 => 230,  419 => 227,  415 => 225,  404 => 217,  399 => 215,  390 => 209,  386 => 207,  384 => 206,  376 => 200,  367 => 194,  363 => 193,  358 => 190,  356 => 189,  351 => 186,  345 => 183,  338 => 182,  336 => 181,  333 => 180,  326 => 176,  322 => 174,  320 => 173,  316 => 171,  314 => 170,  308 => 166,  303 => 163,  301 => 162,  294 => 160,  291 => 159,  286 => 156,  284 => 155,  281 => 153,  279 => 152,  272 => 148,  261 => 140,  254 => 136,  247 => 132,  229 => 117,  212 => 103,  199 => 92,  193 => 89,  190 => 88,  187 => 87,  182 => 84,  180 => 83,  177 => 82,  174 => 81,  171 => 80,  166 => 77,  164 => 76,  161 => 75,  158 => 74,  156 => 73,  152 => 72,  140 => 62,  137 => 61,  135 => 56,  134 => 55,  133 => 54,  130 => 53,  127 => 52,  125 => 47,  124 => 46,  123 => 45,  121 => 44,  114 => 43,  103 => 41,  97 => 38,  95 => 35,  94 => 34,  93 => 33,  92 => 32,  91 => 31,  90 => 29,  89 => 28,  87 => 27,  80 => 26,  69 => 24,  58 => 22,  53 => 20,  51 => 18,  44 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/Page/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Resources\\views\\Page\\details.html.twig");
    }
}
