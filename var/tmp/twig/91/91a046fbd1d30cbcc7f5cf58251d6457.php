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

/* @MauticLead/FormTheme/Filter/_leadlist_filters_widget.html.twig */
class __TwigTemplate_b53d5009bdf2abebfa77d3b53d8a73de extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_leadlist_filters_widget' => [$this, 'block__leadlist_filters_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $this->displayBlock('_leadlist_filters_widget', $context, $blocks);
    }

    public function block__leadlist_filters_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["i"] => $context["filter"]) {
            // line 7
            echo "    ";
            $context["isPrototype"] = ("__name__" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["filter"], "vars", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7));
            // line 8
            echo "    ";
            $context["isBehavior"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 8), "vars", [], "any", false, true, false, 8), "fields", [], "any", false, true, false, 8), "behaviors", [], "any", false, true, false, 8), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["filter"], "vars", [], "any", false, false, false, 8), "value", [], "any", false, false, false, 8), "field", [], "any", false, false, false, 8), [], "array", true, true, false, 8);
            // line 9
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "parent", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "fields", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["object"] => $context["objectfields"]) {
                // line 10
                echo "      ";
                $context["isField"] = twig_get_attribute($this->env, $this->source, $context["objectfields"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["filter"], "vars", [], "any", false, false, false, 10), "value", [], "any", false, false, false, 10), "field", [], "any", false, false, false, 10), [], "array", true, true, false, 10);
                // line 11
                echo "      ";
                if (((((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 11, $this->source); })()) || (isset($context["isField"]) || array_key_exists("isField", $context) ? $context["isField"] : (function () { throw new RuntimeError('Variable "isField" does not exist.', 11, $this->source); })())) || (isset($context["isBehavior"]) || array_key_exists("isBehavior", $context) ? $context["isBehavior"] : (function () { throw new RuntimeError('Variable "isBehavior" does not exist.', 11, $this->source); })())) &&  !twig_get_attribute($this->env, $this->source, $context["filter"], "isRendered", [], "any", false, false, false, 11))) {
                    // line 12
                    echo "        ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["filter"], 'widget', ["first" => (0 == $context["i"])]);
                    echo "
      ";
                }
                // line 14
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['object'], $context['objectfields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/FormTheme/Filter/_leadlist_filters_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  79 => 15,  73 => 14,  67 => 12,  64 => 11,  61 => 10,  56 => 9,  53 => 8,  50 => 7,  45 => 6,  38 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/FormTheme/Filter/_leadlist_filters_widget.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\FormTheme\\Filter\\_leadlist_filters_widget.html.twig");
    }
}
