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

/* @MauticCore/FormTheme/form.html.twig */
class __TwigTemplate_ac6f7de456b945670c76a1ec73704fd2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
            'mainFormContent' => [$this, 'block_mainFormContent'],
            'postFormContent' => [$this, 'block_postFormContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("@MauticCore/Default/" . (((array_key_exists("useSlim", $context) &&  !twig_test_empty((isset($context["useSlim"]) || array_key_exists("useSlim", $context) ? $context["useSlim"] : (function () { throw new RuntimeError('Variable "useSlim" does not exist.', 1, $this->source); })())))) ? ("slim") : ("content"))) . ".html.twig"), "@MauticCore/FormTheme/form.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        if ( !array_key_exists("entity", $context)) {
            // line 4
            $context["entity"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "data", [], "any", false, false, false, 4);
        }
        // line 13
        if ( !array_key_exists("headerTitle", $context)) {
            // line 14
            if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "getId", [], "method", false, false, false, 14)) {
                // line 15
                $context["headerTitle"] = (($this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorHasId(((isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 15, $this->source); })()) . ".header.edit"))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 15, $this->source); })()) . ".header.edit"), ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "getName", [], "method", false, false, false, 15)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.header.edit", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "getName", [], "method", false, false, false, 15)])));
            } else {
                // line 17
                $context["headerTitle"] = (($this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorHasId(((isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 17, $this->source); })()) . ".header.new"))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 17, $this->source); })()) . ".header.new"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.header.new")));
            }
        }
        // line 23
        if ( !array_key_exists("entity", $context)) {
            // line 24
            $context["entity"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "vars", [], "any", false, false, false, 24), "data", [], "any", false, false, false, 24);
        }
        // line 27
        $context["attr"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "attr", [], "any", false, false, false, 27);
        // line 29
        if ((        $this->hasBlock("formAttr", $context, $blocks) &&  !twig_test_empty(        $this->renderBlock("formAttr", $context, $blocks)))) {
            // line 30
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 30, $this->source); })()),             $this->renderBlock("formAttr", $context, $blocks));
        }
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        if (array_key_exists("mauticContent", $context)) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["mauticContent"]) || array_key_exists("mauticContent", $context) ? $context["mauticContent"] : (function () { throw new RuntimeError('Variable "mauticContent" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "
    ";
        }
    }

    // line 21
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 21, $this->source); })()), "html", null, true);
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 34, $this->source); })())]);
        echo "
    ";
        // line 35
        $this->displayBlock('mainFormContent', $context, $blocks);
        // line 36
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        echo "
    ";
        // line 37
        $this->displayBlock('postFormContent', $context, $blocks);
    }

    // line 35
    public function block_mainFormContent($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 37
    public function block_postFormContent($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/FormTheme/form.html.twig";
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
        return array (  126 => 37,  120 => 35,  116 => 37,  111 => 36,  109 => 35,  104 => 34,  100 => 33,  93 => 21,  85 => 9,  82 => 8,  78 => 7,  74 => 1,  71 => 30,  69 => 29,  67 => 27,  64 => 24,  62 => 23,  58 => 17,  55 => 15,  53 => 14,  51 => 13,  48 => 4,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/FormTheme/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\FormTheme\\form.html.twig");
    }
}
