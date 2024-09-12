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

/* @MauticForm/FormTheme/SubmitAction/_submit_action_repost_widget.html.twig */
class __TwigTemplate_f4721eada5738d9393b872c9d6fbec8e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_submit_action_repost_widget' => [$this, 'block__submit_action_repost_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_submit_action_repost_widget', $context, $blocks);
    }

    public function block__submit_action_repost_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "  <div class=\"row\">
      <div class=\"col-sm-12\">
          ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "post_url", [], "any", false, false, false, 4), 'row');
        echo "
      </div>
  </div>

  <div class=\"row\">
      <div class=\"col-sm-12\">
          ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "failure_email", [], "any", false, false, false, 10), 'row');
        echo "
      </div>
  </div>

  <div class=\"row\">
      <div class=\"col-sm-12\">
          ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "authorization_header", [], "any", false, false, false, 16), 'row');
        echo "
      </div>
  </div>

  <h4>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.action.repost.field_mapping"), "html", null, true);
        echo "</h4>
  <div class=\"row mt-lg\">
      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["child"]) {
            // line 23
            echo "        ";
            if (!twig_in_filter($context["k"], ["post_url", "failure_email", "authorization_header"])) {
                // line 24
                echo "          <div class=\"col-sm-6\">
              ";
                // line 25
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
                echo "
          </div>
        ";
            }
            // line 28
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/FormTheme/SubmitAction/_submit_action_repost_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  101 => 29,  95 => 28,  89 => 25,  86 => 24,  83 => 23,  79 => 22,  74 => 20,  67 => 16,  58 => 10,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/FormTheme/SubmitAction/_submit_action_repost_widget.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\FormTheme\\SubmitAction\\_submit_action_repost_widget.html.twig");
    }
}
