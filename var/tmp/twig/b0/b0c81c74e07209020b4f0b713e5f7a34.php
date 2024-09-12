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

/* @MauticSms/FormTheme/Config/_config_smsconfig_widget.html.twig */
class __TwigTemplate_ebce2d0aa93cbf29aab73acd7fae6a3b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_config_smsconfig_widget' => [$this, 'block__config_smsconfig_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_config_smsconfig_widget', $context, $blocks);
    }

    public function block__config_smsconfig_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.smsconfig"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-6\">
            ";
        // line 9
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "sms_transport", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "choices", [], "any", false, false, false, 9))) {
            // line 10
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "sms_transport", [], "any", false, false, false, 10), 'row');
            echo "
            ";
        } else {
            // line 12
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.config.smsconfig"), "html", null, true);
            echo "
            ";
        }
        // line 14
        echo "            </div>
            <div class=\"col-md-6\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "sms_disable_trackable_urls", [], "any", false, false, false, 16), 'row');
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
        return "@MauticSms/FormTheme/Config/_config_smsconfig_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  75 => 16,  71 => 14,  65 => 12,  59 => 10,  57 => 9,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSms/FormTheme/Config/_config_smsconfig_widget.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Resources\\views\\FormTheme\\Config\\_config_smsconfig_widget.html.twig");
    }
}
