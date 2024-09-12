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

/* @MauticLead/LeadLists/index.html.twig */
class __TwigTemplate_4b1e6e0cdcf6988a4407919bc4a00f7d extends Template
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
        echo "<ul class=\"list-group\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lists"]) || array_key_exists("lists", $context) ? $context["lists"] : (function () { throw new RuntimeError('Variable "lists" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 9
            echo "        <li class=\"list-group-item\">
            <i class=\"fa fa-lg fa-fw ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, ($context["leadLists"] ?? null), twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 10), [], "array", true, true, false, 10)) {
                echo "fa-toggle-on text-success";
            } else {
                echo "fa-toggle-off text-danger";
            }
            echo "\"
               id=\"leadListToggle";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 11), "html", null, true);
            echo "\"
               onclick=\"Mautic.toggleLeadList('leadListToggle";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo "', ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo ");\"></i>
            <span>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "alias", [], "any", false, false, false, 13), "html", null, true);
            echo ")</span>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/LeadLists/index.html.twig";
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
        return array (  78 => 16,  67 => 13,  59 => 12,  55 => 11,  47 => 10,  44 => 9,  40 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/LeadLists/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\LeadLists\\index.html.twig");
    }
}
