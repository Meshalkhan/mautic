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

/* @MauticLead/FormTheme/Config/_config_leadconfig_widget.html.twig */
class __TwigTemplate_78f8a8f45fd3a4be406000d2d3070070 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_config_leadconfig_widget' => [$this, 'block__config_leadconfig_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_config_leadconfig_widget', $context, $blocks);
    }

    public function block__config_leadconfig_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.leadconfig"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "contact_allow_multiple_companies", [], "any", false, false, false, 10), 'row');
        echo "
            </div>
        </div>
    </div>
</div>

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.contact.merge.settings"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "contact_unique_identifiers_operator", [], "any", false, false, false, 23), 'row');
        echo "
            </div>
        </div>
    </div>
</div>

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.contact.list.settings"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "contact_columns", [], "any", false, false, false, 36), 'row');
        echo "
            </div>
        </div>
    </div>
</div>

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.importconfig"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "background_import_if_more_rows_than", [], "any", false, false, false, 49), 'row');
        echo "
            </div>
        </div>
    </div>
</div>

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.exportconfig"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "contact_export_in_background", [], "any", false, false, false, 62), 'row');
        echo "
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
        return "@MauticLead/FormTheme/Config/_config_leadconfig_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  134 => 62,  126 => 57,  115 => 49,  107 => 44,  96 => 36,  88 => 31,  77 => 23,  69 => 18,  58 => 10,  50 => 5,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/FormTheme/Config/_config_leadconfig_widget.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\FormTheme\\Config\\_config_leadconfig_widget.html.twig");
    }
}
