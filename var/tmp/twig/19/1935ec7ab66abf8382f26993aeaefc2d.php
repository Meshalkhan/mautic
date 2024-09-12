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

/* @MauticCore/Slots/segmentlist.html.twig */
class __TwigTemplate_9d98ec0ec71449c8a53641a547a43e7b extends Template
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
        if (array_key_exists("form", $context)) {
            // line 2
            echo "    ";
            if ((((array_key_exists("showContactSegments", $context) && (isset($context["showContactSegments"]) || array_key_exists("showContactSegments", $context) ? $context["showContactSegments"] : (function () { throw new RuntimeError('Variable "showContactSegments" does not exist.', 2, $this->source); })())) && twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lead_lists", [], "any", true, true, false, 2)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "lead_lists", [], "any", false, false, false, 2)) > 0))) {
                // line 3
                echo "        <div class=\"contact-segments\">
            <div class=\"text-left\">
                <label class=\"control-label\">";
                // line 5
                echo twig_escape_filter($this->env, ((array_key_exists("label_text", $context)) ? (_twig_default_filter((isset($context["label_text"]) || array_key_exists("label_text", $context) ? $context["label_text"] : (function () { throw new RuntimeError('Variable "label_text" does not exist.', 5, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.form.list"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.form.list"))), "html", null, true);
                echo "</label>
            </div>
            ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "lead_lists", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["key"] => $context["leadList"]) {
                    // line 8
                    echo "                <div id=\"segment-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" class=\"text-left\">
                    ";
                    // line 9
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["leadList"], 'widget');
                    echo "
                    ";
                    // line 10
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["leadList"], 'label');
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['leadList'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "        </div>
    ";
            }
        } else {
            // line 16
            echo "    <div class=\"contact-segments\">
        <div class=\"text-left\">
            <label class=\"control-label\">";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.form.list"), "html", null, true);
            echo "</label>
        </div>
        <div id=\"segment-1\" class=\"text-left\">
            <input type=\"checkbox\" id=\"lead_contact_frequency_rules_lead_lists_1\" name=\"lead_contact_frequency_rules[lead_lists][]\" autocomplete=\"false\" value=\"2\" checked=\"checked\">
            <label for=\"lead_contact_frequency_rules_lead_lists_1\">";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.field.list"), "html", null, true);
            echo "</label>
        </div>
    </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Slots/segmentlist.html.twig";
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
        return array (  89 => 22,  82 => 18,  78 => 16,  73 => 13,  64 => 10,  60 => 9,  55 => 8,  51 => 7,  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Slots/segmentlist.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Slots\\segmentlist.html.twig");
    }
}
