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

/* @MauticCore/Helper/blank_form.html.twig */
class __TwigTemplate_2fc62f730b7d82e949f2a5ac9fc6c45b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (array_key_exists("formTheme", $context)) {
            // line 2
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [(isset($context["formTheme"]) || array_key_exists("formTheme", $context) ? $context["formTheme"] : (function () { throw new RuntimeError('Variable "formTheme" does not exist.', 2, $this->source); })())], true);
        }
        // line 4
        $context["function"] = ((array_key_exists("function", $context)) ? (_twig_default_filter((isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 4, $this->source); })()), "form")) : ("form"));
        // line 5
        $context["variables"] = ((array_key_exists("variables", $context)) ? (_twig_default_filter((isset($context["variables"]) || array_key_exists("variables", $context) ? $context["variables"] : (function () { throw new RuntimeError('Variable "variables" does not exist.', 5, $this->source); })()), [])) : ([]));
        // line 6
        if (((isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 6, $this->source); })()) === "row")) {
            // line 7
            echo "  ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'row', (isset($context["variables"]) || array_key_exists("variables", $context) ? $context["variables"] : (function () { throw new RuntimeError('Variable "variables" does not exist.', 7, $this->source); })()));
        } elseif ((        // line 8
(isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 8, $this->source); })()) === "widget")) {
            // line 9
            echo "  ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'widget', (isset($context["variables"]) || array_key_exists("variables", $context) ? $context["variables"] : (function () { throw new RuntimeError('Variable "variables" does not exist.', 9, $this->source); })()));
        } else {
            // line 11
            echo "  ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form', (isset($context["variables"]) || array_key_exists("variables", $context) ? $context["variables"] : (function () { throw new RuntimeError('Variable "variables" does not exist.', 11, $this->source); })()));
        }
        // line 13
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/blank_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  61 => 13,  57 => 11,  53 => 9,  51 => 8,  48 => 7,  46 => 6,  44 => 5,  42 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/blank_form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\blank_form.html.twig");
    }
}
