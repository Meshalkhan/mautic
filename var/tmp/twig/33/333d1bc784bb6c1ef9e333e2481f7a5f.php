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

/* @MauticMessenger/FormTheme/Config/_config_messengerconfig_widget.html.twig */
class __TwigTemplate_a0c59d1b7906f6c6be073f64c48286ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_config_messengerconfig_widget' => [$this, 'block__config_messengerconfig_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_config_messengerconfig_widget', $context, $blocks);
    }

    public function block__config_messengerconfig_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<div class=\"alert alert-info\" role=\"alert\">
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.messenger.config.dsn_help_general", ["%link%" => "https://symfony.com/doc/5.4/messenger.html#transport-configuration"], "messages");
        // line 5
        echo "</div>

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.messenger.config.dsn_email"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "messenger_dsn_email", [], "any", false, false, false, 12), 'row');
        echo "
    </div>
</div>

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.messenger.config.dsn_hit"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "messenger_dsn_hit", [], "any", false, false, false, 21), 'row');
        echo "
    </div>
</div>

<div class=\"alert alert-info\" role=\"alert\">
    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.messenger.config.dsn_help_retry_strategy", ["%link%" => "https://symfony.com/doc/5.4/messenger.html#retries-failures"], "messages");
        // line 27
        echo "</div>

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.messenger.config.retry_strategy"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "messenger_retry_strategy_max_retries", [], "any", false, false, false, 36), 'row');
        echo "
            </div>
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "messenger_retry_strategy_delay", [], "any", false, false, false, 39), 'row');
        echo "
            </div>
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "messenger_retry_strategy_multiplier", [], "any", false, false, false, 42), 'row');
        echo "
            </div>
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "messenger_retry_strategy_max_delay", [], "any", false, false, false, 45), 'row');
        echo "
            </div>
        </div>
    </div>
</div>

<div class=\"alert alert-info\" role=\"alert\">
    ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.messenger.config.dsn_help_failed", ["%link%" => "https://symfony.com/doc/5.4/messenger.html#saving-retrying-failed-messages"], "messages");
        // line 53
        echo "</div>

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.messenger.config.dsn_failed"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "messenger_dsn_failed", [], "any", false, false, false, 60), 'row');
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
        return "@MauticMessenger/FormTheme/Config/_config_messengerconfig_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  144 => 60,  138 => 57,  132 => 53,  130 => 52,  120 => 45,  114 => 42,  108 => 39,  102 => 36,  94 => 31,  88 => 27,  86 => 26,  78 => 21,  72 => 18,  63 => 12,  57 => 9,  51 => 5,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticMessenger/FormTheme/Config/_config_messengerconfig_widget.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MessengerBundle\\Resources\\views\\FormTheme\\Config\\_config_messengerconfig_widget.html.twig");
    }
}
