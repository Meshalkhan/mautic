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

/* @MauticEmail/FormTheme/Config/monitored_email_widget.html.twig */
class __TwigTemplate_45e3801d6e088ecdf61c2c5b6e6e82f7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'monitored_email_widget' => [$this, 'block_monitored_email_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('monitored_email_widget', $context, $blocks);
    }

    public function block_monitored_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "children", [], "any", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 3
            echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 5), "label", [], "any", false, false, false, 5)), "html", null, true);
            echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
            // line 8
            $context["tooltip"] = (($this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorHasId((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 8), "label", [], "any", false, false, false, 8) . ".tooltip"))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 8), "label", [], "any", false, false, false, 8) . ".tooltip"))) : (""));
            // line 9
            echo "            ";
            if ((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 9, $this->source); })())) {
                // line 10
                echo "                <p>";
                echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 10, $this->source); })()));
                echo "</p>
            ";
            }
            // line 12
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "
        </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticEmail/FormTheme/Config/monitored_email_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  71 => 12,  65 => 10,  62 => 9,  60 => 8,  54 => 5,  50 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmail/FormTheme/Config/monitored_email_widget.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\FormTheme\\Config\\monitored_email_widget.html.twig");
    }
}
