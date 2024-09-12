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

/* @MauticForm/Form/_details_fields_list.html.twig */
class __TwigTemplate_dc97c3ae22950c124d4c9997c9c1555e extends Template
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
        echo "<div class=\"box-layout\">
    <div class=\"col-md-1 va-m\">
        ";
        // line 7
        $context["requiredTitle"] = ((twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 7, $this->source); })()), "isRequired", [], "any", false, false, false, 7)) ? ("mautic.core.required") : ("mautic.core.not_required"));
        // line 8
        echo "        <h3><span class=\"fa fa-";
        if (twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 8, $this->source); })()), "isRequired", [], "any", false, false, false, 8)) {
            echo "check";
        } else {
            echo "times";
        }
        echo " text-white dark-xs\" data-toggle=\"tooltip\"
                  data-placement=\"left\"
                  title=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["requiredTitle"]) || array_key_exists("requiredTitle", $context) ? $context["requiredTitle"] : (function () { throw new RuntimeError('Variable "requiredTitle" does not exist.', 10, $this->source); })())), "html", null, true);
        echo "\"></span>
        </h3>
    </div>
    <div class=\"col-md-7 va-m\">
        <h5 class=\"fw-sb text-primary mb-xs\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 14, $this->source); })()), "label", [], "any", false, false, false, 14), "html", null, true);
        echo "</h5>
        <h6 class=\"text-white dark-md\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.details.field_type", ["%type%" => twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 15, $this->source); })()), "type", [], "any", false, false, false, 15)]), "html", null, true);
        echo "</h6>
    </div>
    <div class=\"col-md-4 va-m text-right\">
        ";
        // line 18
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 18, $this->source); })()), "parent", [], "any", false, false, false, 18)) {
            // line 19
            echo "            <em class=\"text-white dark-sm\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.details.field_order", ["%order%" => twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 19, $this->source); })()), "order", [], "any", false, false, false, 19)]), "html", null, true);
            echo "</em>
        ";
        }
        // line 21
        echo "    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Form/_details_fields_list.html.twig";
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
        return array (  78 => 21,  72 => 19,  70 => 18,  64 => 15,  60 => 14,  53 => 10,  43 => 8,  41 => 7,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Form/_details_fields_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Form\\_details_fields_list.html.twig");
    }
}
