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

/* @MauticLead/Field/properties_number.html.twig */
class __TwigTemplate_86d433661c2244601b4ed8ba5f84ac0e extends Template
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
        $context["roundMode"] = ((array_key_exists("roundMode", $context)) ? (_twig_default_filter((isset($context["roundMode"]) || array_key_exists("roundMode", $context) ? $context["roundMode"] : (function () { throw new RuntimeError('Variable "roundMode" does not exist.', 1, $this->source); })()), "")) : (""));
        // line 2
        $context["scale"] = ((array_key_exists("scale", $context)) ? (_twig_default_filter((isset($context["scale"]) || array_key_exists("scale", $context) ? $context["scale"] : (function () { throw new RuntimeError('Variable "scale" does not exist.', 2, $this->source); })()), "")) : (""));
        // line 3
        $context["options"] = ["mautic.lead.field.form.number.roundup" => twig_constant("NumberFormatter::ROUND_UP"), "mautic.lead.field.form.number.rounddown" => twig_constant("NumberFormatter::ROUND_DOWN"), "mautic.lead.field.form.number.roundhalfup" => twig_constant("NumberFormatter::ROUND_HALFUP"), "mautic.lead.field.form.number.roundhalfeven" => twig_constant("NumberFormatter::ROUND_HALFEVEN"), "mautic.lead.field.form.number.roundhalfdown" => twig_constant("NumberFormatter::ROUND_HALFDOWN")];
        // line 10
        echo "<div class=\"number\">
    <div class=\"row\">
        <div class=\"form-group col-xs-12 col-sm-8 col-md-6\">
            <label class=\"control-label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.form.properties.numberrounding"), "html", null, true);
        echo "</label>
            <div class=\"input-group\">
                <select class=\"form-control not-chosen\" autocomplete=\"false\" name=\"leadfield[properties][roundmode]\">
                  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["l"] => $context["v"]) {
            // line 17
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["v"]);
            echo "\" ";
            if (((isset($context["roundMode"]) || array_key_exists("roundMode", $context) ? $context["roundMode"] : (function () { throw new RuntimeError('Variable "roundMode" does not exist.', 17, $this->source); })()) == $context["v"])) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["l"]), "html", null, true);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['l'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                </select>
                <span class=\"input-group-addon\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" data-original-title=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.help.numberrounding"), "html", null, true);
        echo "\">
                    <i class=\"ri-question-line\"></i>
                </span>
            </div>
        </div>
        <div class=\"form-group col-xs-12 col-sm-8 col-md-6\">
            <label class=\"control-label\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.form.properties.numberprecision"), "html", null, true);
        echo "</label>
            <div class=\"input-group\">
                <input autocomplete=\"false\" name=\"leadfield[properties][scale]\" class=\"form-control\" value=\"";
        // line 28
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["scale"]) || array_key_exists("scale", $context) ? $context["scale"] : (function () { throw new RuntimeError('Variable "scale" does not exist.', 28, $this->source); })()));
        echo "\" type=\"number\" />
                <span class=\"input-group-addon\" data-toggle=\"tooltip\" data-container=\"body\"
                      data-placement=\"top\" data-original-title=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.help.numberprecision"), "html", null, true);
        echo "\">
                    <i class=\"ri-question-line\"></i>
                </span>
            </div>
        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Field/properties_number.html.twig";
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
        return array (  95 => 30,  90 => 28,  85 => 26,  76 => 20,  73 => 19,  58 => 17,  54 => 16,  48 => 13,  43 => 10,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Field/properties_number.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Field\\properties_number.html.twig");
    }
}
