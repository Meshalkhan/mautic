<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @MauticSms/Sms/form.html.twig */
class __TwigTemplate_76ea8fa344358317887966d09ec52283 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

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

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/FormTheme/form_simple.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), ["@MauticSms/FormTheme/SmsSendList/smssend_list_row.html.twig"], true);
        // line 8
        $context["type"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 8, $this->source); })()), "getSmsType", [], "method", false, false, false, 8);
        // line 9
        $context["isExisting"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 9, $this->source); })()), "getId", [], "method", false, false, false, 9);
        // line 10
        $context["translationBase"] = "mautic.sms";
        // line 11
        $context["mauticContent"] = "sms";
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/FormTheme/form_simple.html.twig", "@MauticSms/Sms/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "sms";
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_primaryFormContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'row');
        yield "
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"characters-count\">
            <label class=\"control-label\" for=\"\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" title=\"\" data-original-title=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.form.nbcharacter.infobox"), "html", null, true);
        yield "\">
                ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.form.nbcharacter.counter"), "html", null, true);
        yield "
                <span class=\"label label-default\" id=\"sms_nb_char\">0</span>
            </label>
        </div>
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "message", [], "any", false, false, false, 28), 'row');
        yield "
        <i class=\"text-muted\">";
        // line 29
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.token.dropdown.hint"));
        yield "</i>

    </div>
</div>
";
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_rightFormContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "category", [], "any", false, false, false, 36), 'row');
        yield "
";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "language", [], "any", false, false, false, 37), 'row');
        yield "
";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "isPublished", [], "any", false, false, false, 38), 'row');
        yield "

<div id=\"leadList\"";
        // line 40
        if (("template" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 40, $this->source); })()))) {
            yield " class=\"hide\"";
        }
        yield ">
    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "lists", [], "any", false, false, false, 41), 'row');
        yield "
    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "publishUp", [], "any", false, false, false, 42), 'row');
        yield "
    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "publishDown", [], "any", false, false, false, 43), 'row');
        yield "
</div>

<div class=\"hide\">
    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'rest');
        yield "
</div>

";
        // line 50
        if ((((( !array_key_exists("updateSelect", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["updateSelect"]) || array_key_exists("updateSelect", $context) ? $context["updateSelect"] : (function () { throw new RuntimeError('Variable "updateSelect" does not exist.', 50, $this->source); })()))) &&  !(isset($context["isExisting"]) || array_key_exists("isExisting", $context) ? $context["isExisting"] : (function () { throw new RuntimeError('Variable "isExisting" does not exist.', 50, $this->source); })())) &&  !$this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()))) || Twig\Extension\CoreExtension::testEmpty((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 50, $this->source); })())))) {
            // line 51
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/form_selecttype.html.twig", ["item" =>             // line 53
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 53, $this->source); })()), "mauticLang" => ["newListSms" => "mautic.sms.type.list.header", "newTemplateSms" => "mautic.sms.type.template.header"], "typePrefix" => "sms", "cancelUrl" => "mautic_sms_index", "header" => "mautic.sms.type.header", "typeOneHeader" => "mautic.sms.type.template.header", "typeOneIconClass" => "ri-message-3-fill", "typeOneDescription" => "mautic.sms.type.template.description", "typeOneDifferences" => "", "typeOneOnClick" => "Mautic.selectSmsType('template');", "typeTwoHeader" => "mautic.sms.type.list.header", "typeTwoIconClass" => "ri-pie-chart-fill", "typeTwoDescription" => "mautic.sms.type.list.description", "typeTwoDifferences" => "", "typeTwoOnClick" => "Mautic.selectSmsType('list');"]);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticSms/Sms/form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  171 => 53,  170 => 51,  168 => 50,  162 => 47,  155 => 43,  151 => 42,  147 => 41,  141 => 40,  136 => 38,  132 => 37,  128 => 36,  121 => 35,  111 => 29,  107 => 28,  100 => 24,  96 => 23,  86 => 16,  82 => 14,  75 => 13,  64 => 6,  59 => 1,  57 => 11,  55 => 10,  53 => 9,  51 => 8,  49 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSms/Sms/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Resources\\views\\Sms\\form.html.twig");
    }
}
