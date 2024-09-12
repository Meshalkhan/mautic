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

/* @MauticLead/Lead/company.html.twig */
class __TwigTemplate_996b1c215196b77c9a5c3a796e0d53c5 extends Template
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
        // line 7
        echo "<!-- start: LeadBundle:Lead:company.html.twig -->
";
        // line 8
        $context["leadId"] = twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8);
        // line 9
        echo "<ul class=\"list-group\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 11
            echo "        ";
            $context["switch"] = ((twig_get_attribute($this->env, $this->source, ($context["companyLead"] ?? null), twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 11), [], "array", true, true, false, 11)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            // line 12
            echo "        ";
            $context["bgClass"] = ((twig_get_attribute($this->env, $this->source, ($context["companyLead"] ?? null), twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 12), [], "array", true, true, false, 12)) ? ("text-success") : ("text-danger"));
            // line 13
            echo "        <li class=\"list-group-item\">
            <i class=\"fa fa-lg fa-fw ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["switch"]) || array_key_exists("switch", $context) ? $context["switch"] : (function () { throw new RuntimeError('Variable "switch" does not exist.', 14, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["bgClass"]) || array_key_exists("bgClass", $context) ? $context["bgClass"] : (function () { throw new RuntimeError('Variable "bgClass" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "\"
               id=\"companyLeadsToggle";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\"
               onclick=\"Mautic.toggleCompanyLead('companyLeadsToggle";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "', ";
            echo twig_escape_filter($this->env, (isset($context["leadId"]) || array_key_exists("leadId", $context) ? $context["leadId"] : (function () { throw new RuntimeError('Variable "leadId" does not exist.', 16, $this->source); })()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo ");\"></i>
            <span>";
            // line 17
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["company"], "companyname", [], "any", false, false, false, 17));
            echo "</span>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</ul>
<!-- end: LeadBundle:Lead:company.html.twig -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Lead/company.html.twig";
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
        return array (  85 => 20,  76 => 17,  68 => 16,  64 => 15,  58 => 14,  55 => 13,  52 => 12,  49 => 11,  45 => 10,  42 => 9,  40 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Lead/company.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\company.html.twig");
    }
}
