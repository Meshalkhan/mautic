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

/* @MauticEmail/FormTheme/FormAction/_formaction_properties_useremail_row.html.twig */
class __TwigTemplate_77656bb267fc3f544280027a18d1b3e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_formaction_properties_useremail_row' => [$this, 'block__formaction_properties_useremail_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $this->displayBlock('_formaction_properties_useremail_row', $context, $blocks);
    }

    public function block__formaction_properties_useremail_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  <div class=\"row\">
      <div class=\"col-xs-";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email_type", [], "any", true, true, false, 6)) {
            echo "7";
        } else {
            echo "12";
        }
        echo "\">
          ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "email", [], "any", false, false, false, 7), 'row');
        echo "
      </div>
      ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email_type", [], "any", true, true, false, 9)) {
            // line 10
            echo "          <div class=\"col-xs-5\">
              ";
            // line 11
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "email_type", [], "any", false, false, false, 11), 'row');
            echo "
          </div>
      ";
        }
        // line 14
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "priority", [], "any", true, true, false, 14)) {
            // line 15
            echo "          <div id=\"priority\" class=\"col-xs-5 queue_hide\">
              ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "priority", [], "any", false, false, false, 16), 'row');
            echo "
          </div>
      ";
        }
        // line 19
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "attempts", [], "any", true, true, false, 19)) {
            // line 20
            echo "          <div id=\"attempts\" class=\"col-xs-5 queue_hide\">
              ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "attempts", [], "any", false, false, false, 21), 'row');
            echo "
          </div>
      ";
        }
        // line 24
        echo "  </div>
  <div class=\"row mb-5\">
      <div class=\"col-xs-12\">
          ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "newEmailButton", [], "any", false, false, false, 27), 'row');
        echo "
          ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "editEmailButton", [], "any", false, false, false, 28), 'row');
        echo "
          ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "previewEmailButton", [], "any", false, false, false, 29), 'row');
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
        return "@MauticEmail/FormTheme/FormAction/_formaction_properties_useremail_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  109 => 29,  105 => 28,  101 => 27,  96 => 24,  90 => 21,  87 => 20,  84 => 19,  78 => 16,  75 => 15,  72 => 14,  66 => 11,  63 => 10,  61 => 9,  56 => 7,  48 => 6,  45 => 5,  38 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmail/FormTheme/FormAction/_formaction_properties_useremail_row.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\FormTheme\\FormAction\\_formaction_properties_useremail_row.html.twig");
    }
}
