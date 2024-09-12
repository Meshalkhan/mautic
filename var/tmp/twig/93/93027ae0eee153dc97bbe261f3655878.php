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

/* @MauticLead/Lead/_list_column_location.html.twig */
class __TwigTemplate_c133467bda5ab951cc6bd43428538130 extends Template
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
        echo "<td class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 2
        $context["flag"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 2), "country", [], "any", true, true, false, 2) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 2, $this->source); })()), "core", [], "any", false, false, false, 2), "country", [], "any", false, false, false, 2), "value", [], "any", false, false, false, 2)))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getCountryFlag(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 2, $this->source); })()), "core", [], "any", false, false, false, 2), "country", [], "any", false, false, false, 2), "value", [], "any", false, false, false, 2))) : (""));
        // line 3
        echo "    ";
        if ( !twig_test_empty((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\" style=\"max-height: 24px;\" class=\"mr-sm\" />
    ";
        }
        // line 6
        echo "
    ";
        // line 7
        $context["location"] = [];
        // line 8
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 8), "city", [], "any", true, true, false, 8)) {
            // line 9
            echo "        ";
            $context["location"] = twig_array_merge((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 9, $this->source); })()), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 9, $this->source); })()), "core", [], "any", false, false, false, 9), "city", [], "any", false, false, false, 9), "value", [], "any", false, false, false, 9)]);
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 11), "state", [], "any", true, true, false, 11)) {
            // line 12
            echo "        ";
            $context["location"] = twig_array_merge((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 12, $this->source); })()), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 12, $this->source); })()), "core", [], "any", false, false, false, 12), "state", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12)]);
            // line 13
            echo "    ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 13), "country", [], "any", true, true, false, 13)) {
            // line 14
            echo "        ";
            $context["location"] = twig_array_merge((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 14, $this->source); })()), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 14, $this->source); })()), "core", [], "any", false, false, false, 14), "country", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14)]);
            // line 15
            echo "    ";
        }
        // line 16
        echo "    ";
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_join_filter(twig_array_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 16, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !twig_test_empty((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 16, $this->source); })())); }), ", "));
        echo "
    <div class=\"clearfix\"></div>
</td>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Lead/_list_column_location.html.twig";
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
        return array (  82 => 16,  79 => 15,  76 => 14,  73 => 13,  70 => 12,  67 => 11,  64 => 10,  61 => 9,  58 => 8,  56 => 7,  53 => 6,  47 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Lead/_list_column_location.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\_list_column_location.html.twig");
    }
}
