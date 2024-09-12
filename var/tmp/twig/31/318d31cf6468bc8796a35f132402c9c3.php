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

/* @MauticLead/Field/properties_boolean.html.twig */
class __TwigTemplate_9f4ee058c66b6d7789dc8600b85d9bb1 extends Template
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
        echo "<div class=\"boolean\">
    <label class=\"control-label\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.form.properties.boolean"), "html", null, true);
        echo "</label>
    <div class=\"row\">
        <div class=\"form-group col-xs-12 col-sm-8 col-md-6\">
            <div class=\"input-group\">
                <span class=\"input-group-addon text-danger\">
                    <i class=\"fa fa-lg fa-fw ri-close-line\"></i>
                </span>
                <input type=\"text\" autocomplete=\"false\" class=\"form-control\" name=\"leadfield[properties][no]\"
                       value=\"";
        // line 10
        ((array_key_exists("no", $context)) ? (print ($this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["no"]) || array_key_exists("no", $context) ? $context["no"] : (function () { throw new RuntimeError('Variable "no" does not exist.', 10, $this->source); })())))) : (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.no"), "html", null, true))));
        echo "\" onkeyup=\"Mautic.updateLeadFieldBooleanLabels(this, 0);\">
            </div>
        </div>
        <div class=\"form-group col-xs-12 col-sm-8 col-md-6\">
            <div class=\"input-group\">
                <span class=\"input-group-addon text-success\">
                    <i class=\"fa fa-lg fa-fw fa-check\"></i>
                </span>
                <input type=\"text\" autocomplete=\"false\" class=\"form-control\" name=\"leadfield[properties][yes]\"
                       value=\"";
        // line 19
        ((array_key_exists("yes", $context)) ? (print ($this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["yes"]) || array_key_exists("yes", $context) ? $context["yes"] : (function () { throw new RuntimeError('Variable "yes" does not exist.', 19, $this->source); })())))) : (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.yes"), "html", null, true))));
        echo "\" onkeyup=\"Mautic.updateLeadFieldBooleanLabels(this, 1);\">
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
        return "@MauticLead/Field/properties_boolean.html.twig";
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
        return array (  63 => 19,  51 => 10,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Field/properties_boolean.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Field\\properties_boolean.html.twig");
    }
}
