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

/* @MauticSms/Sms/form.html.twig */
class __TwigTemplate_9f2f207192acc987496575304a586b34 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'primaryFormContent' => [$this, 'block_primaryFormContent'],
            'rightFormContent' => [$this, 'block_rightFormContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MauticCore/FormTheme/form_simple.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), ["@MauticSms/FormTheme/SmsSendList/smssend_list_row.html.twig"], true);
        // line 8
        $context["type"] = twig_get_attribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 8, $this->source); })()), "getSmsType", [], "method", false, false, false, 8);
        // line 9
        $context["isExisting"] = twig_get_attribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 9, $this->source); })()), "getId", [], "method", false, false, false, 9);
        // line 10
        $context["translationBase"] = "mautic.sms";
        // line 11
        $context["mauticContent"] = "sms";
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/FormTheme/form_simple.html.twig", "@MauticSms/Sms/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "sms";
    }

    // line 13
    public function block_primaryFormContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'row');
        echo "
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"characters-count\">
            <label class=\"control-label\" for=\"\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" title=\"\" data-original-title=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.form.nbcharacter.infobox"), "html", null, true);
        echo "\">
                ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.form.nbcharacter.counter"), "html", null, true);
        echo "
                <span class=\"label label-default\" id=\"sms_nb_char\">0</span>
            </label>
        </div>
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "message", [], "any", false, false, false, 28), 'row');
        echo "
        <i class=\"text-muted\">";
        // line 29
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.token.dropdown.hint"));
        echo "</i>

    </div>
</div>
";
    }

    // line 35
    public function block_rightFormContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "category", [], "any", false, false, false, 36), 'row');
        echo "
";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "language", [], "any", false, false, false, 37), 'row');
        echo "
";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "isPublished", [], "any", false, false, false, 38), 'row');
        echo "

<div id=\"leadList\"";
        // line 40
        if (("template" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 40, $this->source); })()))) {
            echo " class=\"hide\"";
        }
        echo ">
    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "lists", [], "any", false, false, false, 41), 'row');
        echo "
    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "publishUp", [], "any", false, false, false, 42), 'row');
        echo "
    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "publishDown", [], "any", false, false, false, 43), 'row');
        echo "
</div>

<div class=\"hide\">
    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'rest');
        echo "
</div>

";
        // line 50
        if ((((( !array_key_exists("updateSelect", $context) || twig_test_empty((isset($context["updateSelect"]) || array_key_exists("updateSelect", $context) ? $context["updateSelect"] : (function () { throw new RuntimeError('Variable "updateSelect" does not exist.', 50, $this->source); })()))) &&  !(isset($context["isExisting"]) || array_key_exists("isExisting", $context) ? $context["isExisting"] : (function () { throw new RuntimeError('Variable "isExisting" does not exist.', 50, $this->source); })())) &&  !$this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()))) || twig_test_empty((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 50, $this->source); })())))) {
            // line 51
            echo twig_include($this->env, $context, "@MauticCore/Helper/form_selecttype.html.twig", ["item" =>             // line 53
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 53, $this->source); })()), "mauticLang" => ["newListSms" => "mautic.sms.type.list.header", "newTemplateSms" => "mautic.sms.type.template.header"], "typePrefix" => "sms", "cancelUrl" => "mautic_sms_index", "header" => "mautic.sms.type.header", "typeOneHeader" => "mautic.sms.type.template.header", "typeOneIconClass" => "ri-message-3-fill", "typeOneDescription" => "mautic.sms.type.template.description", "typeOneDifferences" => "", "typeOneOnClick" => "Mautic.selectSmsType('template');", "typeTwoHeader" => "mautic.sms.type.list.header", "typeTwoIconClass" => "ri-pie-chart-fill", "typeTwoDescription" => "mautic.sms.type.list.description", "typeTwoDifferences" => "", "typeTwoOnClick" => "Mautic.selectSmsType('list');"]);
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticSms/Sms/form.html.twig";
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
        return array (  155 => 53,  154 => 51,  152 => 50,  146 => 47,  139 => 43,  135 => 42,  131 => 41,  125 => 40,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  99 => 29,  95 => 28,  88 => 24,  84 => 23,  74 => 16,  70 => 14,  66 => 13,  59 => 6,  54 => 1,  52 => 11,  50 => 10,  48 => 9,  46 => 8,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSms/Sms/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Resources\\views\\Sms\\form.html.twig");
    }
}
