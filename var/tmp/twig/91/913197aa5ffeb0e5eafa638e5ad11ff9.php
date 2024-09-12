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

/* @MauticCampaign/Campaign/_events.html.twig */
class __TwigTemplate_034982898fc2308754069712e1513e61 extends Template
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
        // line 5
        if (( !twig_test_empty((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 5, $this->source); })())) && is_iterable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 5, $this->source); })())))) {
            // line 6
            echo "<!-- start: trigger type event -->
<ul class=\"list-group campaign-event-list\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 9
                echo "        ";
                $context["typeClass"] = (((("action" == twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 9)) && ("no" == twig_get_attribute($this->env, $this->source, $context["event"], "decisionPath", [], "any", false, false, false, 9)))) ? ("danger") : ("success"));
                // line 10
                echo "        ";
                $context["percentLabel"] = ((("danger" == (isset($context["typeClass"]) || array_key_exists("typeClass", $context) ? $context["typeClass"] : (function () { throw new RuntimeError('Variable "typeClass" does not exist.', 10, $this->source); })()))) ? ("mautic.report.campaign.no.percent") : ("mautic.report.campaign.yes.percent"));
                // line 11
                echo "        ";
                $context["percentProp"] = ((("danger" == (isset($context["typeClass"]) || array_key_exists("typeClass", $context) ? $context["typeClass"] : (function () { throw new RuntimeError('Variable "typeClass" does not exist.', 11, $this->source); })()))) ? ("noPercent") : ("yesPercent"));
                // line 12
                echo "        <li class=\"list-group-item bg-light-xs\">
            <div class=\"progress-bar progress-bar-";
                // line 13
                echo twig_escape_filter($this->env, (isset($context["typeClass"]) || array_key_exists("typeClass", $context) ? $context["typeClass"] : (function () { throw new RuntimeError('Variable "typeClass" does not exist.', 13, $this->source); })()), "html", null, true);
                echo "\" style=\"width:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "yesPercent", [], "any", false, false, false, 13), "html", null, true);
                echo "%; left: 0;\"></div>
            <div class=\"progress-bar progress-bar-danger\" style=\"width:";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "noPercent", [], "array", false, false, false, 14), "html", null, true);
                echo "%; left: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "yesPercent", [], "array", false, false, false, 14), "html", null, true);
                echo "%\"></div>
            <div class=\"box-layout\">
                <div class=\"visible-sm visible-md visible-lg col-stats\">
                    <span class=\"mt-xs label label-";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["typeClass"]) || array_key_exists("typeClass", $context) ? $context["typeClass"] : (function () { throw new RuntimeError('Variable "typeClass" does not exist.', 17, $this->source); })()), "html", null, true);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["percentLabel"]) || array_key_exists("percentLabel", $context) ? $context["percentLabel"] : (function () { throw new RuntimeError('Variable "percentLabel" does not exist.', 17, $this->source); })())), "html", null, true);
                echo "\">
                      ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], (isset($context["percentProp"]) || array_key_exists("percentProp", $context) ? $context["percentProp"] : (function () { throw new RuntimeError('Variable "percentProp" does not exist.', 18, $this->source); })()), [], "array", false, false, false, 18), "html", null, true);
                echo "%
                    </span>
                    ";
                // line 20
                if ((twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", true, true, false, 20) && ("action" != twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 20)))) {
                    // line 21
                    echo "                        <span class=\"label label-danger\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.campaign.no.percent"), "html", null, true);
                    echo "\">
                          ";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "noPercent", [], "any", false, false, false, 22), "html", null, true);
                    echo "%
                        </span>
                    ";
                }
                // line 25
                echo "                <span class=\"mt-xs label label-warning\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.campaign.completed.actions"), "html", null, true);
                echo "\">
                    ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "logCountProcessed", [], "any", false, false, false, 26), "html", null, true);
                echo "
                </span>
                <span class=\"mt-xs label label-default\"  data-toggle=\"tooltip\" title=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.campaign.pending.actions"), "html", null, true);
                echo "\">
                    ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "logCountForPending", [], "any", false, false, false, 29), "html", null, true);
                echo "
                </span>
                </div>
                    <div class=\"col-md-5 va-m\">
                    <h5 class=\"fw-sb text-primary mb-xs\">
                        ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 34), "html", null, true);
                echo "
                        ";
                // line 35
                if ((twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", true, true, false, 35) && ("action" != twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 35)))) {
                    // line 36
                    echo "                          <small class=\"text-muted\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "percent", [], "any", false, false, false, 36), "html", null, true);
                    echo "%</small>
                        ";
                }
                // line 38
                echo "
                    </h5>
                    <h6 class=\"text-white dark-sm\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 40), "html", null, true);
                echo "</h6>
                </div>
                <div class=\"col-md-3 va-m text-right\">
                    <em class=\"text-white dark-sm\">";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.campaign." . twig_get_attribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 43))), "html", null, true);
                echo "</em>
                </div>
            </div>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "</ul>
<!--/ end: trigger type event -->
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCampaign/Campaign/_events.html.twig";
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
        return array (  152 => 48,  141 => 43,  135 => 40,  131 => 38,  125 => 36,  123 => 35,  119 => 34,  111 => 29,  107 => 28,  102 => 26,  97 => 25,  91 => 22,  86 => 21,  84 => 20,  79 => 18,  73 => 17,  65 => 14,  59 => 13,  56 => 12,  53 => 11,  50 => 10,  47 => 9,  43 => 8,  39 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCampaign/Campaign/_events.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Campaign\\_events.html.twig");
    }
}
