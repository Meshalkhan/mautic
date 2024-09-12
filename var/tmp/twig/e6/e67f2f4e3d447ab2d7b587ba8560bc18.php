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

/* @MauticEmail/FormTheme/EmailSendList/email_to_user_row.html.twig */
class __TwigTemplate_fef0b8609d684382e181599ca1af93b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("@MauticEmail/FormTheme/EmailSendList/emailsend_list_row.html.twig", "@MauticEmail/FormTheme/EmailSendList/email_to_user_row.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@MauticEmail/FormTheme/EmailSendList/emailsend_list_row.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'email_to_user_row' => [$this, 'block_email_to_user_row'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('email_to_user_row', $context, $blocks);
    }

    public function block_email_to_user_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <div class=\"row\">
      <div class=\"col-md-6\">
          ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "user_id", [], "any", false, false, false, 6), 'row');
        echo "
      </div>
      <div class=\"col-md-6\">
          ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "to_owner", [], "any", false, false, false, 9), 'row');
        echo "
      </div>
  </div>
  ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "to", [], "any", false, false, false, 12), 'row');
        echo "
  ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "cc", [], "any", false, false, false, 13), 'row');
        echo "
  ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "bcc", [], "any", false, false, false, 14), 'row');
        echo "
  ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'rest');
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticEmail/FormTheme/EmailSendList/email_to_user_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  88 => 15,  84 => 14,  80 => 13,  76 => 12,  70 => 9,  64 => 6,  60 => 4,  53 => 3,  50 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmail/FormTheme/EmailSendList/email_to_user_row.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\FormTheme\\EmailSendList\\email_to_user_row.html.twig");
    }
}
