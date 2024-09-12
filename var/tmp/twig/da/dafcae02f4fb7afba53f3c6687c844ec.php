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

/* @MauticEmail/FormTheme/EmailSendList/emailsend_list_row.html.twig */
class __TwigTemplate_0d4c8acff3dbd63eb8abdb45b51de90b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'emailsend_list_row' => [$this, 'block_emailsend_list_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('emailsend_list_row', $context, $blocks);
    }

    public function block_emailsend_list_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "  <div class=\"row\">
      <div class=\"col-xs-";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email_type", [], "any", true, true, false, 3)) {
            echo "7";
        } else {
            echo "12";
        }
        echo "\">
          ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "email", [], "any", false, false, false, 4), 'row');
        echo "
      </div>
      ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email_type", [], "any", true, true, false, 6)) {
            // line 7
            echo "          <div class=\"col-xs-5\">
              ";
            // line 8
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "email_type", [], "any", false, false, false, 8), 'row');
            echo "
          </div>
      ";
        }
        // line 11
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "priority", [], "any", true, true, false, 11)) {
            // line 12
            echo "          <div id=\"priority\" class=\"col-xs-5 queue_hide\">
              ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "priority", [], "any", false, false, false, 13), 'row');
            echo "
          </div>
      ";
        }
        // line 16
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "attempts", [], "any", true, true, false, 16)) {
            // line 17
            echo "          <div id=\"attempts\" class=\"col-xs-5 queue_hide\">
              ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "attempts", [], "any", false, false, false, 18), 'row');
            echo "
          </div>
      ";
        }
        // line 21
        echo "  </div>
  <div class=\"row\">
      <div class=\"col-xs-12 mt-lg\">
          <div class=\"mt-3\">
              ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "newEmailButton", [], "any", false, false, false, 25), 'row');
        echo "
              ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "editEmailButton", [], "any", false, false, false, 26), 'row');
        echo "
              ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "previewEmailButton", [], "any", false, false, false, 27), 'row');
        echo "
          </div>
      </div>
  </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticEmail/FormTheme/EmailSendList/emailsend_list_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  110 => 27,  106 => 26,  102 => 25,  96 => 21,  90 => 18,  87 => 17,  84 => 16,  78 => 13,  75 => 12,  72 => 11,  66 => 8,  63 => 7,  61 => 6,  56 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmail/FormTheme/EmailSendList/emailsend_list_row.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\FormTheme\\EmailSendList\\emailsend_list_row.html.twig");
    }
}
