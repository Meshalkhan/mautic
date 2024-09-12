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

/* @MauticDashboard/Dashboard/upcomingemails.html.twig */
class __TwigTemplate_d2f853c8aaae866a082b4b7ac3ed43bf extends Template
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
        if ((isset($context["upcomingEmails"]) || array_key_exists("upcomingEmails", $context) ? $context["upcomingEmails"] : (function () { throw new RuntimeError('Variable "upcomingEmails" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    <ul class=\"list-group mb-0\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["upcomingEmails"]) || array_key_exists("upcomingEmails", $context) ? $context["upcomingEmails"] : (function () { throw new RuntimeError('Variable "upcomingEmails" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
                // line 4
                echo "            <li class=\"list-group-item bg-light-xs\">
                <div class=\"box-layout\">
                    <div class=\"col-md-1 va-m\">
                        <h3><span class=\"fa ";
                // line 7
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["icons"] ?? null), "email", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["icons"] ?? null), "email", [], "any", false, false, false, 7), "")) : ("")), "html", null, true);
                echo " fw-sb text-success\"></span></h3>
                    </div>
                    <div class=\"col-md-4 va-m\">
                        <h5 class=\"fw-sb text-primary\">
                            <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["email"], "campaign_id", [], "any", false, false, false, 11)]), "html", null, true);
                echo "\" data-toggle=\"ajax\">
                                ";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "campaign_name", [], "any", false, false, false, 12), "html", null, true);
                echo "
                            </a>
                        </h5>
                        <span class=\"text-white dark-sm\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "event_name", [], "any", false, false, false, 15), "html", null, true);
                echo "</span>
                    </div>
                    <div class=\"col-md-4 va-m text-right\">
                        <a class=\"btn btn-sm btn-success\"  href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["email"], "lead_id", [], "any", false, false, false, 18)]), "html", null, true);
                echo "\" data-toggle=\"ajax\">
                            <span class=\"fa ";
                // line 19
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["icons"] ?? null), "lead", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["icons"] ?? null), "lead", [], "any", false, false, false, 19), "")) : ("")), "html", null, true);
                echo "\"></span>
                            ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "lead_name", [], "any", false, false, false, 20), "html", null, true);
                echo "
                        </a>
                    </div>
                    <div class=\"col-md-3 va-m text-right\">
                        ";
                // line 24
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, $context["email"], "trigger_date", [], "any", false, false, false, 24));
                echo "
                    </div>
                </div>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </ul>
";
        } else {
            // line 31
            echo "    <div class=\"alert alert-warning\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.note.no.upcoming.emails"), "html", null, true);
            echo "</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticDashboard/Dashboard/upcomingemails.html.twig";
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
        return array (  104 => 31,  100 => 29,  89 => 24,  82 => 20,  78 => 19,  74 => 18,  68 => 15,  62 => 12,  58 => 11,  51 => 7,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticDashboard/Dashboard/upcomingemails.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DashboardBundle\\Resources\\views\\Dashboard\\upcomingemails.html.twig");
    }
}
