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

/* @MauticLead/Timeline/_list_filter_form.html.twig */
class __TwigTemplate_91add5a6bb3c797e0500e8a53de96703 extends Template
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
        echo "<!-- filter form -->
<form method=\"post\" action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contacttimeline_action", ["leadId" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\" class=\"panel\" id=\"timeline-filters\">
    <div class=\"form-control-icon pa-xs\">
        <input type=\"text\" class=\"form-control bdr-w-0\" name=\"search\" id=\"search\" placeholder=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.placeholder"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 4, $this->source); })()), "filters", [], "any", false, false, false, 4), "search", [], "any", false, false, false, 4));
        echo "\">
        <span class=\"the-icon ri-search-line text-muted mt-xs\"></span>
    </div>
    ";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "types", [], "any", true, true, false, 7) && is_iterable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 7, $this->source); })()), "types", [], "any", false, false, false, 7)))) {
            // line 8
            echo "        <div class=\"history-search panel-footer text-muted\">
            <div class=\"row\">
                <div class=\"col-sm-5 mna-3\">
                <label class=\"pt-lg\">";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.include.placeholder"), "html", null, true);
            echo "</label>
                    <select name=\"includeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\">
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 13, $this->source); })()), "types", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                // line 14
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["typeKey"]);
                echo "\" ";
                if (twig_in_filter($context["typeKey"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 14, $this->source); })()), "filters", [], "any", false, false, false, 14), "includeEvents", [], "any", false, false, false, 14))) {
                    echo "selected";
                }
                echo ">
                                ";
                // line 15
                echo twig_escape_filter($this->env, $context["typeName"], "html", null, true);
                echo "
                            </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['typeKey'], $context['typeName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                    </select>
                </div>
                <div class=\"col-sm-5 mna-3\">
                <label class=\"pt-lg\">";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.exclude.placeholder"), "html", null, true);
            echo "</label>
                    <select name=\"excludeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\">
                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 23, $this->source); })()), "types", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                // line 24
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["typeKey"]);
                echo "\" ";
                if (twig_in_filter($context["typeKey"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 24, $this->source); })()), "filters", [], "any", false, false, false, 24), "excludeEvents", [], "any", false, false, false, 24))) {
                    echo "selected";
                }
                echo ">
                                ";
                // line 25
                echo twig_escape_filter($this->env, $context["typeName"], "html", null, true);
                echo "
                            </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['typeKey'], $context['typeName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                    </select>
                </div>
                <div class=\"col-sm-2 mt-lg\">
                    <a class=\"btn btn-default btn-block mt-lg\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_contact_timeline_export_action", ["leadId" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" data-toggle=\"download\">
                        <span>
                            <i class=\"ri-download-line\"></i> <span>";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.export"), "html", null, true);
            echo "</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    ";
        }
        // line 40
        echo "    <input type=\"hidden\" name=\"leadId\" id=\"leadId\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40));
        echo "\" />
</form>
<!--/ filter form -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Timeline/_list_filter_form.html.twig";
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
        return array (  139 => 40,  129 => 33,  124 => 31,  119 => 28,  110 => 25,  101 => 24,  97 => 23,  92 => 21,  87 => 18,  78 => 15,  69 => 14,  65 => 13,  60 => 11,  55 => 8,  53 => 7,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Timeline/_list_filter_form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Timeline\\_list_filter_form.html.twig");
    }
}
