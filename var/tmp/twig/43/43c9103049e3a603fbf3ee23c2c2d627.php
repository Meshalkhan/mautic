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

/* @MauticLead/Lead/_list_column_name.html.twig */
class __TwigTemplate_de7eaf35cc4595ad5c1fa0620e5e4de9 extends Template
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
        echo "<td>
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\" data-toggle=\"ajax\">
        ";
        // line 3
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), twig_get_array_keys_filter((isset($context["noContactList"]) || array_key_exists("noContactList", $context) ? $context["noContactList"] : (function () { throw new RuntimeError('Variable "noContactList" does not exist.', 3, $this->source); })())))) {
            // line 4
            echo "            <div class=\"pull-right\">
                ";
            // line 5
            echo twig_include($this->env, $context, "@MauticLead/Lead/dnc_small.html.twig", ["dncList" => twig_get_attribute($this->env, $this->source,             // line 6
(isset($context["noContactList"]) || array_key_exists("noContactList", $context) ? $context["noContactList"] : (function () { throw new RuntimeError('Variable "noContactList" does not exist.', 6, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), [], "array", false, false, false, 6)]);
            // line 7
            echo "
            </div>
        ";
        }
        // line 10
        echo "        ";
        $context["primaryIdentifier"] = ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), "isAnonymous", [], "any", false, false, false, 10)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 10))) : ($this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 10))));
        // line 11
        echo "        <div>
            ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["primaryIdentifier"]) || array_key_exists("primaryIdentifier", $context) ? $context["primaryIdentifier"] : (function () { throw new RuntimeError('Variable "primaryIdentifier" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "
        </div>
        ";
        // line 14
        if (((twig_in_filter("company", twig_get_array_keys_filter((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 14, $this->source); })()))) && ((isset($context["primaryIdentifier"]) || array_key_exists("primaryIdentifier", $context) ? $context["primaryIdentifier"] : (function () { throw new RuntimeError('Variable "primaryIdentifier" does not exist.', 14, $this->source); })()) != twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "secondaryIdentifier", [], "any", false, false, false, 14))) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "secondaryIdentifier", [], "any", false, false, false, 14))) {
            // line 15
            echo "            <div class=\"small\">";
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()), "secondaryIdentifier", [], "any", false, false, false, 15));
            echo "</div>
        ";
        }
        // line 17
        echo "    </a>
</td>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Lead/_list_column_name.html.twig";
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
        return array (  76 => 17,  70 => 15,  68 => 14,  63 => 12,  60 => 11,  57 => 10,  52 => 7,  50 => 6,  49 => 5,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Lead/_list_column_name.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\_list_column_name.html.twig");
    }
}
