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

/* @MauticEmail/FormTheme/Config/monitored_mailboxes_widget.html.twig */
class __TwigTemplate_b126c59e3dcaa143b1af78d2d3a1b464 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'monitored_mailboxes_widget' => [$this, 'block_monitored_mailboxes_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('monitored_mailboxes_widget', $context, $blocks);
    }

    public function block_monitored_mailboxes_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "  <div class=\"row\">
      ";
        // line 3
        if (("general" != (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "        <div class=\"col-md-6\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "folder", [], "any", false, false, false, 4), 'row');
            echo "</div>
        <div class=\"col-md-6\">";
            // line 5
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "override_settings", [], "any", false, false, false, 5), 'row');
            echo "</div>
      ";
        } else {
            // line 7
            echo "        <div class=\"col-md-6\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "address", [], "any", false, false, false, 7), 'row');
            echo "</div>
        <div class=\"col-md-6 pt-lg\" id=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "TestButtonContainer\">
            <div class=\"button_container\">
                ";
            // line 10
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "test_connection_button", [], "any", false, false, false, 10), 'widget');
            echo "
                <span class=\"fa fa-spinner fa-spin hide\"></span>
            </div>
            <div class=\"help-block\"></div>
        </div>
      ";
        }
        // line 16
        echo "  </div>

  ";
        // line 18
        if (("general" != (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 18, $this->source); })()))) {
            // line 19
            echo "    <div class=\"row\">
        <div class=\"col-md-6\">";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "address", [], "any", false, false, false, 20), 'row');
            echo "</div>
        <div class=\"col-md-6 pt-lg\" id=\"";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "TestButtonContainer\" data-show-on='{\"config_emailconfig_monitored_email_";
            echo twig_escape_filter($this->env, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "_override_settings_1\": \"checked\"}'>
            <div class=\"button_container\">
                ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "test_connection_button", [], "any", false, false, false, 23), 'widget');
            echo "
                <span class=\"fa fa-spinner fa-spin hide\"></span>
            </div>
            <div class=\"help-block\"></div>
        </div>
    </div>
  ";
        }
        // line 30
        echo "
  <div class=\"row\">
      <div class=\"col-sm-12 col-md-6\">
          ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "host", [], "any", false, false, false, 33), 'row');
        echo "
      </div>
      <div class=\"col-sm-4 col-md-2\">
          ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "port", [], "any", false, false, false, 36), 'row');
        echo "
      </div>
      ";
        // line 38
        if ($this->env->getFunction('is_extension_loaded')->getCallable()("openssl")) {
            // line 39
            echo "        <div class=\"col-sm-8 col-md-4\">
            ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "encryption", [], "any", false, false, false, 40), 'row');
            echo "
        </div>
      ";
        }
        // line 43
        echo "  </div>

  <div class=\"row\">
      <div class=\"col-md-6\">
          ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), 'row');
        echo "
      </div>
      <div class=\"col-md-6\">
          ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "password", [], "any", false, false, false, 50), 'row');
        echo "
      </div>
  </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticEmail/FormTheme/Config/monitored_mailboxes_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  148 => 50,  142 => 47,  136 => 43,  130 => 40,  127 => 39,  125 => 38,  120 => 36,  114 => 33,  109 => 30,  99 => 23,  92 => 21,  88 => 20,  85 => 19,  83 => 18,  79 => 16,  70 => 10,  65 => 8,  60 => 7,  55 => 5,  50 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmail/FormTheme/Config/monitored_mailboxes_widget.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\FormTheme\\Config\\monitored_mailboxes_widget.html.twig");
    }
}
