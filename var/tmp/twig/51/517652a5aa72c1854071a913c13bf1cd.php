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

/* @MauticLead/FormTheme/ActionUpdateLead/_updatelead_action_widget.html.twig */
class __TwigTemplate_60110db95552f59b98e196b85c450bda extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_updatelead_action_widget' => [$this, 'block__updatelead_action_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_updatelead_action_widget', $context, $blocks);
    }

    public function block__updatelead_action_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "  <div class=\"row\">
      <div class=\"col-xs-12\">
          <h4 class=\"mb-sm\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.update.action.help"), "html", null, true);
        echo "</h4>
      </div>
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "children", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 7
            echo "          <div class=\"form-group col-xs-6\">
              ";
            // line 8
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label');
            echo "
              ";
            // line 9
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "
          </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/FormTheme/ActionUpdateLead/_updatelead_action_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  74 => 12,  65 => 9,  61 => 8,  58 => 7,  54 => 6,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/FormTheme/ActionUpdateLead/_updatelead_action_widget.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\FormTheme\\ActionUpdateLead\\_updatelead_action_widget.html.twig");
    }
}
