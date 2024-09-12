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

/* @MauticPage/Page/form.html.twig */
class __TwigTemplate_55150df6f15110eca8b93058436f0b4e extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), ["@MauticPage/FormTheme/Page/_page_abtest_settings_properties_row.html.twig", "@MauticPage/FormTheme/Page/_page_variantSettings_properties_row.html.twig"], true);
        // line 21
        $context["isExisting"] = twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21);
        // line 22
        $context["variantParent"] = twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 22, $this->source); })()), "variantParent", [], "any", false, false, false, 22);
        // line 23
        $context["previewUrl"] = ((array_key_exists("previewUrl", $context)) ? (_twig_default_filter((isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 23, $this->source); })()), "")) : (""));
        // line 25
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticPage/Page/form.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "page";
    }

    // line 29
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        if ((isset($context["isExisting"]) || array_key_exists("isExisting", $context) ? $context["isExisting"] : (function () { throw new RuntimeError('Variable "isExisting" does not exist.', 30, $this->source); })())) {
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.header.edit", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31)]), "html", null, true);
        } else {
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.header.new"), "html", null, true);
        }
        // line 35
        if ((isset($context["variantParent"]) || array_key_exists("variantParent", $context) ? $context["variantParent"] : (function () { throw new RuntimeError('Variable "variantParent" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "      <div><span class=\"small\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_of", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 36, $this->source); })()), "title", [], "any", false, false, false, 36), "%parent%" => twig_get_attribute($this->env, $this->source, (isset($context["variantParent"]) || array_key_exists("variantParent", $context) ? $context["variantParent"] : (function () { throw new RuntimeError('Variable "variantParent" does not exist.', 36, $this->source); })()), "title", [], "any", false, false, false, 36)]), "html", null, true);
            echo "</span></div>
  ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 37
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 37, $this->source); })()), "isVariant", [false], "method", false, false, false, 37)) {
            // line 38
            echo "      <div><span class=\"small\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.form.has_variants"), "html", null, true);
            echo "</span></div>";
        }
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "  <div id=\"grapesjsbuilder_assets\" class=\"hide\" data-assets=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("grapesjsbuilder_assets");
        echo "\" data-upload=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("grapesjsbuilder_upload");
        echo "\" data-delete=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("grapesjsbuilder_delete");
        echo "\"></div>

  ";
        // line 45
        list($context["template"], $context["attr"]) =         [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "template", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "data", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "vars", [], "any", false, false, false, 45), "attr", [], "any", false, false, false, 45)];
        // line 46
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 46, $this->source); })()), ["data-submit-callback-async" => "clearThemeHtmlBeforeSave"]);
        // line 49
        echo "
  ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_start', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 50, $this->source); })())]);
        echo "
  <!-- start: box layout -->
  <div class=\"box-layout\">
      <!-- container -->
      <div class=\"col-md-9 height-auto\">
          <div class=\"row\">
              <div class=\"col-xs-12\">
                  <!-- tabs controls -->
                  <ul class=\"nav nav-tabs pr-md pl-md\">
                      <li class=\"active\">
                          <a href=\"#theme-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.theme"), "html", null, true);
        echo "</a>
                      </li>
                      <li id=\"advanced-tab\" class=\"hidden\">
                          <a href=\"#advanced-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.advanced"), "html", null, true);
        echo "</a>
                      </li>
                  </ul>
                  <!--/ tabs controls -->

                  <div class=\"tab-content pa-md\">
                      <div class=\"tab-pane fade in active bdr-w-0\" id=\"theme-container\">
                          <div class=\"row\">
                              <div class=\"col-md-12\">
                                  ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "template", [], "any", false, false, false, 72), 'row');
        echo "
                              </div>
                          </div>
                          ";
        // line 75
        echo twig_include($this->env, $context, "@MauticCore/Helper/theme_select.html.twig", ["type" => "page", "themes" =>         // line 77
(isset($context["themes"]) || array_key_exists("themes", $context) ? $context["themes"] : (function () { throw new RuntimeError('Variable "themes" does not exist.', 77, $this->source); })()), "active" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 78
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "template", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "value", [], "any", false, false, false, 78)], false);
        // line 79
        echo "
                      </div>

                      <div class=\"tab-pane fade bdr-w-0\" id=\"advanced-container\">
                          <br>
                          <div class=\"row hidden\" id=\"custom-html-row\">
                              <div class=\"col-md-12\">
                                  ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "customHtml", [], "any", false, false, false, 86), 'label');
        echo "
                                  ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "customHtml", [], "any", false, false, false, 87), 'widget');
        echo "
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class=\"col-md-3 height-auto bdr-l\">
          <div class=\"pr-lg pl-lg pt-md pb-md\">
              ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "title", [], "any", false, false, false, 97), 'row');
        echo "
              ";
        // line 98
        if ((isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 98, $this->source); })())) {
            // line 99
            echo "                  
                  ";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "variantSettings", [], "any", false, false, false, 100), 'row');
            echo "
              ";
        } else {
            // line 102
            echo "                  ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "alias", [], "any", false, false, false, 102), 'row');
            echo "
                  ";
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "category", [], "any", false, false, false, 103), 'row');
            echo "
                  ";
            // line 104
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "language", [], "any", false, false, false, 104), 'row');
            echo "
                  ";
            // line 105
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "translationParent", [], "any", false, false, false, 105), 'row');
            echo "
              ";
        }
        // line 107
        echo "
              ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "isPublished", [], "any", false, false, false, 108), 'row');
        echo "

              ";
        // line 110
        if (((twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 110, $this->source); })()), "page:preference_center:editown", [], "array", false, false, false, 110) || twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 110, $this->source); })()), "page:preference_center:editother", [], "array", false, false, false, 110)) &&  !twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 110, $this->source); })()), "isVariant", [], "any", false, false, false, 110))) {
            // line 111
            echo "                  ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 111), 'row');
            echo "
              ";
        }
        // line 113
        echo "
              ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "publishUp", [], "any", false, false, false, 114), 'row');
        echo "
              ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "publishDown", [], "any", false, false, false, 115), 'row');
        echo "

              ";
        // line 117
        if ( !(isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 117, $this->source); })())) {
            // line 118
            echo "                  ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "redirectType", [], "any", false, false, false, 118), 'row');
            echo "
                  ";
            // line 119
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "redirectUrl", [], "any", false, false, false, 119), 'row');
            echo "
              ";
        }
        // line 121
        echo "
              ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "noIndex", [], "any", false, false, false, 122), 'row');
        echo "
              <div class=\"template-fields ";
        // line 123
        if ( !(isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 123, $this->source); })())) {
            echo "hide";
        }
        echo "\">
                  ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "metaDescription", [], "any", false, false, false, 124), 'row');
        echo "
              </div>
              <div class=\"template-fields ";
        // line 126
        if ( !(isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 126, $this->source); })())) {
            echo "hide";
        }
        echo "\">
                  ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "headScript", [], "any", false, false, false, 127), 'row');
        echo "
              </div>
              <div class=\"template-fields ";
        // line 129
        if ( !(isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 129, $this->source); })())) {
            echo "hide";
        }
        echo "\">
                  ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "footerScript", [], "any", false, false, false, 130), 'row');
        echo "
              </div>
              <div class=\"hide\">
                  ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), 'rest');
        echo "
              </div>
          </div>
      </div>
  </div>
  ";
        // line 138
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), 'form_end');
        echo "

  ";
        // line 140
        echo twig_include($this->env, $context, "@MauticCore/Helper/builder.html.twig", ["type" => "page", "isCodeMode" => ("mautic_code_mode" === twig_get_attribute($this->env, $this->source,         // line 142
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 142, $this->source); })()), "template", [], "any", false, false, false, 142)), "sectionForm" =>         // line 143
(isset($context["sectionForm"]) || array_key_exists("sectionForm", $context) ? $context["sectionForm"] : (function () { throw new RuntimeError('Variable "sectionForm" does not exist.', 143, $this->source); })()), "builderAssets" =>         // line 144
(isset($context["builderAssets"]) || array_key_exists("builderAssets", $context) ? $context["builderAssets"] : (function () { throw new RuntimeError('Variable "builderAssets" does not exist.', 144, $this->source); })()), "slots" =>         // line 145
(isset($context["slots"]) || array_key_exists("slots", $context) ? $context["slots"] : (function () { throw new RuntimeError('Variable "slots" does not exist.', 145, $this->source); })()), "sections" =>         // line 146
(isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 146, $this->source); })()), "objectId" => twig_get_attribute($this->env, $this->source,         // line 147
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 147, $this->source); })()), "sessionId", [], "any", false, false, false, 147), "previewUrl" =>         // line 148
(isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 148, $this->source); })())], false);
        // line 149
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPage/Page/form.html.twig";
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
        return array (  316 => 149,  314 => 148,  313 => 147,  312 => 146,  311 => 145,  310 => 144,  309 => 143,  308 => 142,  307 => 140,  302 => 138,  294 => 133,  288 => 130,  282 => 129,  277 => 127,  271 => 126,  266 => 124,  260 => 123,  256 => 122,  253 => 121,  248 => 119,  243 => 118,  241 => 117,  236 => 115,  232 => 114,  229 => 113,  223 => 111,  221 => 110,  216 => 108,  213 => 107,  208 => 105,  204 => 104,  200 => 103,  195 => 102,  190 => 100,  187 => 99,  185 => 98,  181 => 97,  168 => 87,  164 => 86,  155 => 79,  153 => 78,  152 => 77,  151 => 75,  145 => 72,  133 => 63,  127 => 60,  114 => 50,  111 => 49,  108 => 46,  106 => 45,  96 => 43,  92 => 42,  85 => 38,  83 => 37,  78 => 36,  76 => 35,  73 => 33,  70 => 31,  68 => 30,  64 => 29,  57 => 27,  52 => 25,  50 => 23,  48 => 22,  46 => 21,  44 => 17,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPage/Page/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Resources\\views\\Page\\form.html.twig");
    }
}
