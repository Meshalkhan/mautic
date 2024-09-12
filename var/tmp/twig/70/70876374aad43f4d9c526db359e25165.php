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

/* @MauticFocus/FormTheme/FocusShowList/focusshow_list_row.html.twig */
class __TwigTemplate_0d7e47b736a94f17604ca6da54f5e435 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'focusshow_list_row' => [$this, 'block_focusshow_list_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $this->displayBlock('focusshow_list_row', $context, $blocks);
    }

    public function block_focusshow_list_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "  ";
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("plugins/MauticFocusBundle/Assets/js/focus.js");
        echo "
  <div class=\"row\">
      <div class=\"col-xs-12\">
          ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "focus", [], "any", false, false, false, 10), 'row');
        echo "
      </div>
      <div class=\"col-xs-12 mt-lg\">
          <div class=\"mt-3\">
              ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "newFocusButton", [], "any", false, false, false, 14), 'row');
        echo "
              ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "editFocusButton", [], "any", false, false, false, 15), 'row');
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
        return "@MauticFocus/FormTheme/FocusShowList/focusshow_list_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  63 => 15,  59 => 14,  52 => 10,  45 => 7,  38 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFocus/FormTheme/FocusShowList/focusshow_list_row.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\FormTheme\\FocusShowList\\focusshow_list_row.html.twig");
    }
}
