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

/* @MauticDynamicContent/FormTheme/DynamicContentDecisionList/_dynamiccontentdecision_list_row.html.twig */
class __TwigTemplate_e9d938ebada0d76a64e92fb43a423ee6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_dynamiccontentdecision_list_row' => [$this, 'block__dynamiccontentdecision_list_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_dynamiccontentdecision_list_row', $context, $blocks);
    }

    public function block__dynamiccontentdecision_list_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "  <div class=\"row\">
      <div class=\"col-xs-8\">
          ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "dynamicContent", [], "any", false, false, false, 4), 'row');
        echo "
      </div>
      <div class=\"col-xs-4 mt-lg\">
          <div class=\"mt-3\">
              ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "newDynamicContentButton", [], "any", false, false, false, 8), 'row');
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
        return "@MauticDynamicContent/FormTheme/DynamicContentDecisionList/_dynamiccontentdecision_list_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  56 => 8,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticDynamicContent/FormTheme/DynamicContentDecisionList/_dynamiccontentdecision_list_row.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DynamicContentBundle\\Resources\\views\\FormTheme\\DynamicContentDecisionList\\_dynamiccontentdecision_list_row.html.twig");
    }
}
