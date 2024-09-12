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

/* @MauticDynamicContent/DynamicContent/details.html.twig */
class __TwigTemplate_673b63222be73eab52d85b3ea4cffd87 extends Template
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
            'publishStatus' => [$this, 'block_publishStatus'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return $this->loadTemplate((( !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 3, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticDynamicContent/DynamicContent/details.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "dynamicContent";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })())]);
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 12
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "customButtons" => ((        // line 13
array_key_exists("customButtons", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 13, $this->source); })()), [])) : ([])), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 15
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 15, $this->source); })()), "dynamiccontent:dynamiccontents:editown", [], "array", false, false, false, 15), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 15, $this->source); })()), "dynamiccontent:dynamiccontents:editother", [], "array", false, false, false, 15), CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "createdBy", [], "any", false, false, false, 15)), "clone" => CoreExtension::getAttribute($this->env, $this->source,         // line 16
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 16, $this->source); })()), "dynamiccontent:dynamiccontents:create", [], "array", false, false, false, 16), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 17
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 17, $this->source); })()), "dynamiccontent:dynamiccontents:deleteown", [], "array", false, false, false, 17), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 17, $this->source); })()), "dynamiccontent:dynamiccontents:deleteother", [], "array", false, false, false, 17), CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), "createdBy", [], "any", false, false, false, 17)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 18, $this->source); })()), "dynamiccontent:dynamiccontents:viewown", [], "array", false, false, false, 18), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 18, $this->source); })()), "dynamiccontent:dynamiccontents:viewother", [], "array", false, false, false, 18), CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "createdBy", [], "any", false, false, false, 18))], "routeBase" => "dynamicContent"]);
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        $context["translationContent"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Translation/index.html.twig", ["activeEntity" =>         // line 25
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })()), "translations" =>         // line 26
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 26, $this->source); })()), "model" => "dynamicContent", "actionRoute" => "mautic_dynamicContent_action"]));
        // line 30
        $context["showTranslations"] =  !Twig\Extension\CoreExtension::testEmpty((isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 30, $this->source); })()));
        // line 32
        yield "<!-- start: box layout -->
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
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41));
        yield "</div>
                          ";
        // line 42
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 42, $this->source); })()), "isVariant", [true], "method", false, false, false, 42)) {
            // line 43
            yield "                              <div class=\"small\">
                                  <a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dynamicContent_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 44, $this->source); })()), "parent", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">
                                      ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 45, $this->source); })()), "parent", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45)]), "html", null, true);
            yield "
                                  </a>
                              </div>
                          ";
        }
        // line 49
        yield "                          ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), "isTranslation", [true], "method", false, false, false, 49)) {
            // line 50
            yield "                              <div class=\"small\">
                                  <a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dynamicContent_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 51, $this->source); })()), "parent", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">
                                      ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translation_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 52, $this->source); })()), "parent", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52)]), "html", null, true);
            yield "
                                  </a>
                              </div>
                          ";
        }
        // line 56
        yield "                          ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 56, $this->source); })()), "isCampaignBased", [], "any", false, false, false, 56)) {
            // line 57
            yield "                              <div class=\"small\">
                                  ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.header.is_filter_based", ["%slot%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 58, $this->source); })()), "slotName", [], "any", false, false, false, 58)]), "html", null, true);
            yield "
                              </div>
                          ";
        }
        // line 61
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
        // line 71
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 71, $this->source); })())]);
        yield "
                              <tr>
                                  <td width=\"20%\"><span class=\"fw-b textTitle\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.slot.campaign"), "html", null, true);
        yield "</span></td>
                                  <td>";
        // line 74
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 74, $this->source); })()), "isCampaignBased", [], "any", false, false, false, 74)) ? ("Yes") : ("No"));
        yield "</td>
                              </tr>
                              ";
        // line 76
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 76, $this->source); })()), "isCampaignBased", [], "any", false, false, false, 76)) {
            // line 77
            yield "                                <tr>
                                    <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.label.slot_name"), "html", null, true);
            yield "</span></td>
                                    <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 79, $this->source); })()), "slotName", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>
                                </tr>
                              ";
        }
        // line 82
        yield "                              </tbody>
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
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.views"), "html", null, true);
        yield "
                                      </h5>
                                  </div>
                                  <div class=\"col-md-9 va-m\">
                                      ";
        // line 114
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 114, $this->source); })()), "class" => "pull-right"]);
        yield "
                                  </div>
                              </div>
                              <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                  ";
        // line 118
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["entityViews"]) || array_key_exists("entityViews", $context) ? $context["entityViews"] : (function () { throw new RuntimeError('Variable "entityViews" does not exist.', 118, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        yield "
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--/ stats -->

              ";
        // line 126
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

              <!-- tabs controls -->
              <ul class=\"nav nav-tabs pr-md pl-md\">
                  <li class=\"active\">
                      <a href=\"#clicks-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_counts"), "html", null, true);
        yield "
                      </a>
                  </li>
                  ";
        // line 135
        if ((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 135, $this->source); })())) {
            // line 136
            yield "                  <li class>
                      <a href=\"#translation-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translations"), "html", null, true);
            yield "
                      </a>
                  </li>
                  ";
        }
        // line 142
        yield "              </ul>
              <!--/ tabs controls -->
          </div>
          <!-- start: tab-content -->
          <div class=\"tab-content pa-md\">
              <div class=\"tab-pane active active bdr-w-0\" id=\"clicks-container\">
                  ";
        // line 148
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticPage/Trackable/click_counts.html.twig", ["trackables" => (isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 148, $this->source); })()), "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 148, $this->source); })()), "channel" => "dynamicContent"]);
        yield "

              </div>
              <!-- #translation-container -->
              ";
        // line 152
        if ((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 152, $this->source); })())) {
            // line 153
            yield "                  <div class=\"tab-pane bdr-w-0\" id=\"translation-container\">
                      ";
            // line 154
            yield (isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 154, $this->source); })());
            yield "
                  </div>
              ";
        }
        // line 157
        yield "              <!--/ #translation-container -->
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 167, $this->source); })())]);
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
        return "@MauticDynamicContent/DynamicContent/details.html.twig";
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
        return array (  342 => 167,  330 => 157,  324 => 154,  321 => 153,  319 => 152,  312 => 148,  304 => 142,  297 => 138,  293 => 136,  291 => 135,  285 => 132,  276 => 126,  265 => 118,  258 => 114,  251 => 110,  233 => 95,  218 => 82,  212 => 79,  208 => 78,  205 => 77,  203 => 76,  198 => 74,  194 => 73,  189 => 71,  177 => 61,  171 => 58,  168 => 57,  165 => 56,  158 => 52,  154 => 51,  151 => 50,  148 => 49,  141 => 45,  137 => 44,  134 => 43,  132 => 42,  128 => 41,  117 => 32,  115 => 30,  113 => 26,  112 => 25,  111 => 24,  104 => 23,  99 => 18,  98 => 17,  97 => 16,  96 => 15,  95 => 13,  94 => 12,  87 => 11,  76 => 9,  65 => 7,  54 => 5,  44 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDynamicContent/DynamicContent/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DynamicContentBundle\\Resources\\views\\DynamicContent\\details.html.twig");
    }
}
