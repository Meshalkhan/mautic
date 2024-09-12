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

/* @MauticNotification/MobileNotification/form.html.twig */
class __TwigTemplate_c905e5aff25aee1b7b0d40478d51b8b7 extends Template
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
        // line 11
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), ["@MauticNotification/FormTheme/MobileNotification/_mobile_notification_mobileSettings_widget.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticNotification/MobileNotification/form.html.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "mobile_notification";
    }

    // line 15
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)) {
            // line 17
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.mobile.header.edit", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17)]), "html", null, true);
            echo "
  ";
        } else {
            // line 19
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.mobile.header.new"), "html", null, true);
            echo "
  ";
        }
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "  ";
        $context["integrationSettings"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 24, $this->source); })()), "integrationSettings", [], "any", false, false, false, 24), "featureSettings", [], "any", false, false, false, 24);
        // line 25
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        echo "
  <div class=\"box-layout\">
      <div class=\"col-md-9 height-auto\">
          <div class=\"row\">
              <div class=\"col-xs-12\">

                  <!-- tabs controls -->
                  <ul class=\"nav nav-tabs pr-md pl-md\">
                      <li class=\"active\"><a href=\"#notification-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "</a></li>
                      <li><a href=\"#data-notification-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.tab.data"), "html", null, true);
        echo "</a></li>
                      ";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, ($context["integrationSettings"] ?? null), "platforms", [], "any", true, true, false, 35) && twig_in_filter("ios", twig_get_attribute($this->env, $this->source, (isset($context["integrationSettings"]) || array_key_exists("integrationSettings", $context) ? $context["integrationSettings"] : (function () { throw new RuntimeError('Variable "integrationSettings" does not exist.', 35, $this->source); })()), "platforms", [], "any", false, false, false, 35)))) {
            // line 36
            echo "                          <li><a href=\"#ios-notification-container\" role=\"tab\" data-toggle=\"tab\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.tab.ios"), "html", null, true);
            echo "</a></li>
                      ";
        }
        // line 38
        echo "                      ";
        if ((twig_get_attribute($this->env, $this->source, ($context["integrationSettings"] ?? null), "platforms", [], "any", true, true, false, 38) && twig_in_filter("android", twig_get_attribute($this->env, $this->source, (isset($context["integrationSettings"]) || array_key_exists("integrationSettings", $context) ? $context["integrationSettings"] : (function () { throw new RuntimeError('Variable "integrationSettings" does not exist.', 38, $this->source); })()), "platforms", [], "any", false, false, false, 38)))) {
            // line 39
            echo "                          <li><a href=\"#android-notification-container\" role=\"tab\" data-toggle=\"tab\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.tab.android"), "html", null, true);
            echo "</a></li>
                      ";
        }
        // line 41
        echo "                  </ul>
                  <!--/ tabs controls -->

                  <!-- tabs content -->
                  <div class=\"tab-content pa-md\">
                      <div class=\"tab-pane fade in active bdr-w-0\" id=\"notification-container\">
                          <div class=\"row\">
                              <div class=\"col-md-6\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), 'row');
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "heading", [], "any", false, false, false, 50), 'row');
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "url", [], "any", false, false, false, 51), 'row');
        // line 52
        echo "</div>
                              <div class=\"col-md-6\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "message", [], "any", false, false, false, 53), 'row');
        echo "</div>
                          </div>
                      </div>
                      <div class=\"tab-pane fade in bdr-w-0\" id=\"data-notification-container\">
                          <div class=\"row\">
                              <div class=\"col-md-6\">";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "mobileSettings", [], "any", false, false, false, 58), "additional_data", [], "any", false, false, false, 58), 'row');
        echo "</div>
                          </div>
                      </div>
                      ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mobileSettings", [], "any", false, true, false, 61), "ios_sound", [], "any", true, true, false, 61) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mobileSettings", [], "any", false, true, false, 61), "android_sound", [], "any", true, true, false, 61))) {
            // line 62
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "mobileSettings", [], "any", false, false, false, 62), 'widget', ["integrationSettings" => (isset($context["integrationSettings"]) || array_key_exists("integrationSettings", $context) ? $context["integrationSettings"] : (function () { throw new RuntimeError('Variable "integrationSettings" does not exist.', 62, $this->source); })())]);
            echo "
                      ";
        }
        // line 64
        echo "                  </div>
                  <!--/ tabs content -->

              </div>
          </div>
      </div>
      <div class=\"col-md-3 height-auto bdr-l\">
          <div class=\"pr-lg pl-lg pt-md pb-md\">
              ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "category", [], "any", false, false, false, 72), 'row');
        echo "
              ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "language", [], "any", false, false, false, 73), 'row');
        echo "
              <hr />
              <h5>";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.utm_tags"), "html", null, true);
        echo "</h5>
              <br />
              ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "utmTags", [], "any", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["utmTag"]) {
            // line 78
            echo "                  ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["utmTag"], 'row');
            echo "
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utmTag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "              <div class=\"hide\">
                  ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "isPublished", [], "any", false, false, false, 81), 'row');
        echo "
                  ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "publishUp", [], "any", false, false, false, 82), 'row');
        echo "
                  ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "publishDown", [], "any", false, false, false, 83), 'row');
        echo "
                  ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'rest');
        echo "
              </div>
          </div>
      </div>
  </div>
  ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_end');
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticNotification/MobileNotification/form.html.twig";
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
        return array (  223 => 89,  215 => 84,  211 => 83,  207 => 82,  203 => 81,  200 => 80,  191 => 78,  187 => 77,  182 => 75,  177 => 73,  173 => 72,  163 => 64,  157 => 62,  155 => 61,  149 => 58,  141 => 53,  138 => 52,  136 => 51,  134 => 50,  132 => 49,  123 => 41,  117 => 39,  114 => 38,  108 => 36,  106 => 35,  102 => 34,  98 => 33,  86 => 25,  83 => 24,  79 => 23,  71 => 19,  65 => 17,  62 => 16,  58 => 15,  51 => 13,  46 => 11,  44 => 9,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticNotification/MobileNotification/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\NotificationBundle\\Resources\\views\\MobileNotification\\form.html.twig");
    }
}
