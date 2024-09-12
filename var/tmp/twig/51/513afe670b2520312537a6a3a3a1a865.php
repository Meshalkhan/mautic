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

/* @MauticNotification/FormTheme/MobileNotification/_mobile_notification_mobileSettings_widget.html.twig */
class __TwigTemplate_592d3a3273efd478d8649863a5058885 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_mobile_notification_mobileSettings_widget' => [$this, 'block__mobile_notification_mobileSettings_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_mobile_notification_mobileSettings_widget', $context, $blocks);
    }

    public function block__mobile_notification_mobileSettings_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "  ";
        if (twig_in_filter("ios", twig_get_attribute($this->env, $this->source, (isset($context["integrationSettings"]) || array_key_exists("integrationSettings", $context) ? $context["integrationSettings"] : (function () { throw new RuntimeError('Variable "integrationSettings" does not exist.', 2, $this->source); })()), "platforms", [], "any", false, false, false, 2))) {
            // line 3
            echo "      <div class=\"tab-pane fade in bdr-w-0\" id=\"ios-notification-container\">
          <div class=\"row\">
              <div class=\"col-md-6\">
                  ";
            // line 6
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "ios_subtitle", [], "any", false, false, false, 6), 'row');
            echo "
                  ";
            // line 7
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "ios_media", [], "any", false, false, false, 7), 'row');
            echo "
              </div>
              <div class=\"col-md-6\">
                  <div class=\"well\">
                      <h4>";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Advanced Settings"), "html", null, true);
            echo "</h4>
                      <hr />
                      ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "ios_badges", [], "any", false, false, false, 13), 'row');
            echo "
                      ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "ios_badgeCount", [], "any", false, false, false, 14), 'row');
            echo "
                      ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "ios_sound", [], "any", false, false, false, 15), 'row');
            echo "
                      ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "ios_contentAvailable", [], "any", false, false, false, 16), 'label');
            echo "
                      ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "ios_contentAvailable", [], "any", false, false, false, 17), 'row');
            echo "
                      ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "ios_mutableContent", [], "any", false, false, false, 18), 'label');
            echo "
                      ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "ios_mutableContent", [], "any", false, false, false, 19), 'row');
            echo "
                  </div>
              </div>
          </div>
      </div>
  ";
        }
        // line 25
        echo "  ";
        if (twig_in_filter("android", twig_get_attribute($this->env, $this->source, (isset($context["integrationSettings"]) || array_key_exists("integrationSettings", $context) ? $context["integrationSettings"] : (function () { throw new RuntimeError('Variable "integrationSettings" does not exist.', 25, $this->source); })()), "platforms", [], "any", false, false, false, 25))) {
            // line 26
            echo "      <div class=\"tab-pane fade in bdr-w-0\" id=\"android-notification-container\">
          <div class=\"row\">
              <div class=\"col-md-6\">
                  ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "android_small_icon", [], "any", false, false, false, 29), 'row');
            echo "
                  ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "android_large_icon", [], "any", false, false, false, 30), 'row');
            echo "
                  ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "android_big_picture", [], "any", false, false, false, 31), 'row');
            echo "
              </div>
              <div class=\"col-md-6\">
                  <div class=\"well\">
                      <h4>";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Advanced Settings"), "html", null, true);
            echo "</h4>
                      <hr />
                      ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "android_sound", [], "any", false, false, false, 37), 'row');
            echo "
                      ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "android_group_key", [], "any", false, false, false, 38), 'row');
            echo "
                      ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "android_led_color", [], "any", false, false, false, 39), 'row');
            echo "
                      ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "android_accent_color", [], "any", false, false, false, 40), 'row');
            echo "
                      ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "android_lockscreen_visibility", [], "any", false, false, false, 41), 'row');
            echo "
                  </div>
              </div>
          </div>
      </div>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticNotification/FormTheme/MobileNotification/_mobile_notification_mobileSettings_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  146 => 41,  142 => 40,  138 => 39,  134 => 38,  130 => 37,  125 => 35,  118 => 31,  114 => 30,  110 => 29,  105 => 26,  102 => 25,  93 => 19,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  64 => 11,  57 => 7,  53 => 6,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticNotification/FormTheme/MobileNotification/_mobile_notification_mobileSettings_widget.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\NotificationBundle\\Resources\\views\\FormTheme\\MobileNotification\\_mobile_notification_mobileSettings_widget.html.twig");
    }
}
