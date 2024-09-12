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

/* @MauticConfig/FormTheme/_config_file_row.html.twig */
class __TwigTemplate_ebf6ae6f4116ed9051393e3b3e741e20 extends Template
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
        $context["hasErrors"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), "vars", [], "any", false, false, false, 1), "errors", [], "any", false, false, false, 1));
        // line 2
        $context["feedbackClass"] = ((((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 2, $this->source); })()) > 0)) ? ("has-error") : (""));
        // line 3
        $context["field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3);
        // line 4
        $context["hide"] = ((( !array_key_exists("fieldValue", $context) || (array_key_exists("fieldValue", $context) && twig_test_empty((isset($context["fieldValue"]) || array_key_exists("fieldValue", $context) ? $context["fieldValue"] : (function () { throw new RuntimeError('Variable "fieldValue" does not exist.', 4, $this->source); })()))))) ? ("hide") : (""));
        // line 5
        $context["filename"] = Mautic\CoreBundle\Helper\InputHelper::alphanum($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "label", [], "any", false, false, false, 5)), true, "_");
        // line 6
        $context["downloadUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_config_action", ["objectAction" => "download", "objectId" => (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()), "filename" => (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 6, $this->source); })())]);
        // line 7
        $context["removeUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_config_action", ["objectAction" => "remove", "objectId" => (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 7, $this->source); })())]);
        // line 8
        echo "<div class=\"row\">
    <div class=\"form-group col-xs-12 ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "label", [], "any", false, false, false, 10)) ? [] : ["label" => $_label_]));
        echo "
        <span class=\"small pull-right ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["hide"]) || array_key_exists("hide", $context) ? $context["hide"] : (function () { throw new RuntimeError('Variable "hide" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\">
            <a
               data-toggle=\"confirmation\"
               href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["removeUrl"]) || array_key_exists("removeUrl", $context) ? $context["removeUrl"] : (function () { throw new RuntimeError('Variable "removeUrl" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\"
               data-message=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.remove_file_contents"));
        echo "\"
               data-confirm-text=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.remove"));
        echo "\"
               data-confirm-callback=\"removeConfigValue\"
               data-cancel-text=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"));
        echo "\">
                ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.remove"), "html", null, true);
        echo "
            </a>
            <span> | </span>
            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["downloadUrl"]) || array_key_exists("downloadUrl", $context) ? $context["downloadUrl"] : (function () { throw new RuntimeError('Variable "downloadUrl" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.download"), "html", null, true);
        echo "</a>
        </span>
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'widget');
        echo "
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'errors');
        echo "
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticConfig/FormTheme/_config_file_row.html.twig";
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
        return array (  102 => 25,  98 => 24,  91 => 22,  85 => 19,  81 => 18,  76 => 16,  72 => 15,  68 => 14,  62 => 11,  58 => 10,  54 => 9,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticConfig/FormTheme/_config_file_row.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ConfigBundle\\Resources\\views\\FormTheme\\_config_file_row.html.twig");
    }
}
