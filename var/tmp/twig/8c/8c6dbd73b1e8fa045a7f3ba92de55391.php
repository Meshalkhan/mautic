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

/* @MauticUser/User/form.html.twig */
class __TwigTemplate_058fc97050edc960a35b624b8ec2b23c extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["userId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "data", [], "any", false, false, false, 4), "getId", [], "method", false, false, false, 4);
        // line 5
        if ( !twig_test_empty((isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 5, $this->source); })()))) {
            // line 6
            $context["user"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "data", [], "any", false, false, false, 6), "getName", [], "method", false, false, false, 6);
            // line 7
            $context["header"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.header.edit", ["%name%" => (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })())]);
        } else {
            // line 9
            $context["header"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.header.new");
        }
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticUser/User/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "user
";
    }

    // line 12
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "\t";
        echo twig_escape_filter($this->env, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "
";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
\t<!-- start: box layout -->
\t<div
\t\tclass=\"box-layout\">
\t\t<!-- container -->
\t\t";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start');
        echo "
\t\t<div class=\"col-md-9 height-auto bdr-r\">
\t\t\t<div class=\"pa-md\">
\t\t\t\t<div class=\"form-group mb-0\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6";
        // line 28
        echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "firstName", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "errors", [], "any", false, false, false, 28))) ? (" has-error") : (""));
        echo "\">
\t\t\t\t\t\t\t<h3 class=\"mb-lg mt-lg\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.title.personal_information"), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label mb-xs\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "firstName", [], "any", false, false, false, 31), 'label');
        echo "</label>
\t\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "firstName", [], "any", false, false, false, 32), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "firstName", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "label", [], "any", false, false, false, 32)]]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "firstName", [], "any", false, false, false, 33), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group";
        // line 35
        echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "lastName", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "errors", [], "any", false, false, false, 35))) ? (" has-error") : (""));
        echo "\">
\t\t\t\t\t\t\t\t<label class=\"control-label mb-xs\">";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "lastName", [], "any", false, false, false, 36), 'label');
        echo "</label>
\t\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "lastName", [], "any", false, false, false, 37), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "lastName", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "label", [], "any", false, false, false, 37)]]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "lastName", [], "any", false, false, false, 38), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group";
        // line 40
        echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "role", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "errors", [], "any", false, false, false, 40))) ? (" has-error") : (""));
        echo "\">
\t\t\t\t\t\t\t\t<label class=\"control-label mb-xs\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "role", [], "any", false, false, false, 41), 'label');
        echo "</label>
\t\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "role", [], "any", false, false, false, 42), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "role", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "label", [], "any", false, false, false, 42)]]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "role", [], "any", false, false, false, 43), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group pb-lg";
        // line 45
        echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "position", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "errors", [], "any", false, false, false, 45))) ? (" has-error") : (""));
        echo "\">
\t\t\t\t\t\t\t\t<label class=\"control-label mb-xs\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "position", [], "any", false, false, false, 46), 'label');
        echo "</label>
\t\t\t\t\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "position", [], "any", false, false, false, 47), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "position", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "label", [], "any", false, false, false, 47)]]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "position", [], "any", false, false, false, 48), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group pt-md";
        // line 50
        echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "signature", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "errors", [], "any", false, false, false, 50))) ? (" has-error") : (""));
        echo "\">
\t\t\t\t\t\t\t\t<label class=\"control-label mb-xs\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "signature", [], "any", false, false, false, 51), 'label');
        echo "</label>
\t\t\t\t\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "signature", [], "any", false, false, false, 52), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "signature", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "label", [], "any", false, false, false, 52)]]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "signature", [], "any", false, false, false, 53), 'errors');
        echo "
\t\t\t\t\t\t\t\t<p class=\"help-text\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.signature.admin.helper"), "html", null, true);
        echo " </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<h3 class=\"mb-lg mt-lg\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.title.account_data_security"), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t<div class=\"form-group";
        // line 59
        echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "username", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "errors", [], "any", false, false, false, 59))) ? (" has-error") : (""));
        echo "\">
\t\t\t\t\t\t\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "username", [], "any", false, false, false, 60), 'label');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "username", [], "any", false, false, false, 61), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "username", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "label", [], "any", false, false, false, 61)]]);
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "username", [], "any", false, false, false, 62), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group";
        // line 64
        echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "errors", [], "any", false, false, false, 64))) ? (" has-error") : (""));
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), 'label');
        echo "
\t\t\t\t\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "label", [], "any", false, false, false, 66)]]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "plainPassword", [], "any", false, false, false, 69), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "plainPassword", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "label", [], "any", false, false, false, 69)]]);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-3 height-auto\">
\t\t\t<div class=\"pr-lg pl-lg pt-md pb-md\">
\t\t\t\t<h3 class=\"mb-lg mt-lg\">";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.title.locale"), "html", null, true);
        echo "</h3>
\t\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'rest');
        echo "
\t\t\t</div>
\t\t</div>
\t\t";
        // line 81
        if ((array_key_exists("editAction", $context) && ((isset($context["editAction"]) || array_key_exists("editAction", $context) ? $context["editAction"] : (function () { throw new RuntimeError('Variable "editAction" does not exist.', 81, $this->source); })()) == true))) {
            // line 82
            echo twig_include($this->env, $context, "@MauticUser/User/recent_activity.html.twig", ["logs" =>             // line 83
(isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 83, $this->source); })()), "users" =>             // line 84
(isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 84, $this->source); })()), "roles" =>             // line 85
(isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 85, $this->source); })())]);
        }
        // line 88
        echo "
\t\t";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_end');
        echo "
\t</div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticUser/User/form.html.twig";
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
        return array (  265 => 89,  262 => 88,  259 => 85,  258 => 84,  257 => 83,  256 => 82,  254 => 81,  248 => 78,  244 => 77,  233 => 69,  228 => 67,  224 => 66,  220 => 65,  216 => 64,  211 => 62,  207 => 61,  203 => 60,  199 => 59,  195 => 58,  188 => 54,  184 => 53,  180 => 52,  176 => 51,  172 => 50,  167 => 48,  163 => 47,  159 => 46,  155 => 45,  150 => 43,  146 => 42,  142 => 41,  138 => 40,  133 => 38,  129 => 37,  125 => 36,  121 => 35,  116 => 33,  112 => 32,  108 => 31,  103 => 29,  99 => 28,  91 => 23,  84 => 18,  80 => 17,  73 => 13,  69 => 12,  61 => 2,  56 => 1,  53 => 9,  50 => 7,  48 => 6,  46 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticUser/User/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Resources\\views\\User\\form.html.twig");
    }
}
