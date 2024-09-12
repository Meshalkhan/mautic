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

/* @Integrations/Config/field_mapping.html.twig */
class __TwigTemplate_276daccae61ba668ed87d28604cbf581 extends Template
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
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "filter", [], "any", false, false, false, 2) - (isset($context["totalFieldCount"]) || array_key_exists("totalFieldCount", $context) ? $context["totalFieldCount"] : (function () { throw new RuntimeError('Variable "totalFieldCount" does not exist.', 2, $this->source); })())), 'row');
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["fieldName"] => $context["fieldForm"]) {
            // line 4
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["fieldForm"], "mappedField", [], "any", true, true, false, 4)) {
                // line 5
                echo "        <div class=\"row\">
            <div class=\"col-sm-12\">";
                // line 6
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["fieldForm"], 'label');
                echo "</div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6";
                // line 9
                if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(twig_get_attribute($this->env, $this->source, $context["fieldForm"], "mappedField", [], "any", false, false, false, 9))) {
                    echo " has-error";
                }
                echo "\">
                ";
                // line 10
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["fieldForm"], "mappedField", [], "any", false, false, false, 10), 'widget');
                echo "
            </div>
            <div class=\"col-sm-6\">";
                // line 12
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["fieldForm"], "syncDirection", [], "any", false, false, false, 12), 'widget');
                echo "</div>
        </div>
        <hr />
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['fieldForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "filter-totalFieldCount", [], "array", false, false, false, 18), "vars", [], "any", false, false, false, 18), "data", [], "any", false, false, false, 18), "page" =>         // line 19
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 19, $this->source); })()), "limit" => 15, "fixedLimit" => true, "sessionVar" => ((        // line 22
(isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 22, $this->source); })()) . "-") . (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 22, $this->source); })())), "target" => "#IntegrationEditModal", "jsCallback" => "Mautic.getPaginatedIntegrationFields", "jsArguments" => [["object" =>         // line 27
(isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 27, $this->source); })()), "integration" =>         // line 28
(isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 28, $this->source); })()), "keyword" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "filter-keyword", [], "array", false, false, false, 29), "vars", [], "any", false, false, false, 29), "data", [], "any", false, false, false, 29)]]]);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Integrations/Config/field_mapping.html.twig";
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
        return array (  88 => 29,  87 => 28,  86 => 27,  85 => 22,  84 => 19,  83 => 18,  82 => 17,  71 => 12,  66 => 10,  60 => 9,  54 => 6,  51 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Integrations/Config/field_mapping.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Resources\\views\\Config\\field_mapping.html.twig");
    }
}
