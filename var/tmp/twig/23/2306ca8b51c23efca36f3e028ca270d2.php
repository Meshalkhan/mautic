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

/* @MauticEmailMarketing/FormTheme/EmailMarketing/layout.html.twig */
class __TwigTemplate_30b573ac4d402082dacabfccc70f52f1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'emailmarketing_constantcontact_row' => [$this, 'block_emailmarketing_constantcontact_row'],
            'emailmarketing_icontact_row' => [$this, 'block_emailmarketing_icontact_row'],
            'emailmarketing_mailchimp_row' => [$this, 'block_emailmarketing_mailchimp_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('emailmarketing_constantcontact_row', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('emailmarketing_icontact_row', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('emailmarketing_mailchimp_row', $context, $blocks);
    }

    // line 1
    public function block_emailmarketing_constantcontact_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "  <div class=\"row\">
      <div class=\"col-md-8\">
          ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "list", [], "any", false, false, false, 4), 'row');
        echo "
      </div>
  </div>
  ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "sendWelcome", [], "any", false, false, false, 7), 'row');
        echo "
";
    }

    // line 10
    public function block_emailmarketing_icontact_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<div class=\"row\">
    <div class=\"col-md-8\">
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "list", [], "any", false, false, false, 13), 'row');
        echo "
    </div>
</div>
";
    }

    // line 18
    public function block_emailmarketing_mailchimp_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "<div class=\"alert alert-info\">
    ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.emailmarketing.list.update"), "html", null, true);
        echo "
</div>
<div class=\"row\">
    <div class=\"col-md-8\">
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "list", [], "any", false, false, false, 24), 'row');
        echo "
    </div>
</div>

";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "doubleOptin", [], "any", false, false, false, 28), 'row');
        echo "
";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "sendWelcome", [], "any", false, false, false, 29), 'row');
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticEmailMarketing/FormTheme/EmailMarketing/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  115 => 29,  111 => 28,  104 => 24,  97 => 20,  94 => 19,  90 => 18,  82 => 13,  78 => 11,  74 => 10,  68 => 7,  62 => 4,  58 => 2,  54 => 1,  50 => 18,  47 => 17,  45 => 10,  42 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmailMarketing/FormTheme/EmailMarketing/layout.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticEmailMarketingBundle\\Resources\\views\\FormTheme\\EmailMarketing\\layout.html.twig");
    }
}
