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

/* @MauticCore/Slots/saveprefsbutton.html.twig */
class __TwigTemplate_985662c6ab8685a3bf6290c451794f3a extends Template
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
        $context["style"] = ((twig_get_attribute($this->env, $this->source, ($context["saveprefsbutton"] ?? null), "style", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["saveprefsbutton"] ?? null), "style", [], "any", false, false, false, 1), "display:inline-block;text-decoration:none;border-color:#4e5d9d;border-width: 10px 20px;border-style:solid; text-decoration: none; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background-color: #4e5d9d; display: inline-block;font-size: 16px; color: #ffffff;")) : ("display:inline-block;text-decoration:none;border-color:#4e5d9d;border-width: 10px 20px;border-style:solid; text-decoration: none; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background-color: #4e5d9d; display: inline-block;font-size: 16px; color: #ffffff;"));
        // line 2
        $context["background"] = ((twig_get_attribute($this->env, $this->source, ($context["saveprefsbutton"] ?? null), "background", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["saveprefsbutton"] ?? null), "background", [], "any", false, false, false, 2), "")) : (""));
        // line 3
        echo "
";
        // line 4
        if (array_key_exists("form", $context)) {
            // line 5
            echo "    ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "lead_channels", [], "any", false, false, false, 5), "subscribed_channels", [], "any", false, false, false, 5), "setRendered", [], "method", false, false, false, 5);
            // line 6
            echo "    ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "buttons", [], "any", false, false, false, 6), "save", [], "any", false, false, false, 6), "setRendered", [], "method", false, false, false, 6);
            // line 7
            echo "    ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "buttons", [], "any", false, false, false, 7), "cancel", [], "any", false, false, false, 7), "setRendered", [], "method", false, false, false, 7);
            // line 8
            echo "    ";
            // line 9
            echo "    <script src=\"";
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("app/bundles/PageBundle/Assets/js/prefcenter.js");
            echo "\"></script>

    ";
            // line 12
            echo "    ";
            // line 13
            echo "    ";
            // line 14
            echo "    ";
            if ((array_key_exists("custom_tag", $context) &&  !twig_test_empty((isset($context["custom_tag"]) || array_key_exists("custom_tag", $context) ? $context["custom_tag"] : (function () { throw new RuntimeError('Variable "custom_tag" does not exist.', 14, $this->source); })())))) {
                // line 15
                echo "        ";
                echo (isset($context["custom_tag"]) || array_key_exists("custom_tag", $context) ? $context["custom_tag"] : (function () { throw new RuntimeError('Variable "custom_tag" does not exist.', 15, $this->source); })());
                echo "
        ";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->addCustomDeclaration($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'rest'), "customTag"), "html", null, true);
                echo "
    ";
            } else {
                // line 18
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->addCustomDeclaration($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'rest'), "bodyClose"), "html", null, true);
                echo "
    ";
            }
        }
        // line 21
        echo "
    <a href=\"javascript:void(null)\"
        class=\"button btn btn-default btn-save\"
        ";
        // line 24
        if (array_key_exists("form", $context)) {
            echo "onclick=\"saveUnsubscribePreferences('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "vars", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
            echo "')\"";
        }
        // line 25
        echo "        style=\"";
        echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\"
        background=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["background"]) || array_key_exists("background", $context) ? $context["background"] : (function () { throw new RuntimeError('Variable "background" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.form.saveprefs"), "html", null, true);
        echo "
    </a>
    <div style=\"clear:both\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Slots/saveprefsbutton.html.twig";
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
        return array (  107 => 27,  103 => 26,  98 => 25,  92 => 24,  87 => 21,  80 => 18,  75 => 16,  70 => 15,  67 => 14,  65 => 13,  63 => 12,  57 => 9,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Slots/saveprefsbutton.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Slots\\saveprefsbutton.html.twig");
    }
}
