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

/* @MauticCore/Default/slim.html.twig */
class __TwigTemplate_fb7f82d8199a65420a8e81aaf75eb09e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_content' => [$this, 'block__content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    ";
        // line 3
        echo twig_include($this->env, $context, "@MauticCore/Default/head.html.twig", ["headerTitle" => ((        $this->hasBlock("headerTitle", $context, $blocks)) ? (        $this->renderBlock("headerTitle", $context, $blocks)) : (((        // line 4
array_key_exists("headerTitle", $context)) ? (_twig_default_filter((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 4, $this->source); })()), "")) : ("")))), "pageTitle" => ((        $this->hasBlock("pageTitle", $context, $blocks)) ? (        $this->renderBlock("pageTitle", $context, $blocks)) : ("Mautic"))]);
        // line 7
        echo "
    <body>
        ";
        // line 9
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputScripts("bodyOpen");
        echo "

        <section id=\"app-content\" class=\"container content-only\">
            ";
        // line 12
        echo twig_include($this->env, $context, "@MauticCore/Notification/flashes.html.twig", ["alertType" => "standard"]);
        // line 14
        echo "

            ";
        // line 16
        $this->displayBlock('_content', $context, $blocks);
        // line 24
        echo "        </section>
        ";
        // line 25
        echo twig_include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "MauticSharedModal", "footerButtons" => true]);
        // line 28
        echo "
        ";
        // line 29
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputScripts("bodyClose");
        echo "
        <script>
            Mautic.onPageLoad('body');
        </script>
    </body>
</html>
";
    }

    // line 16
    public function block__content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                ";
        echo twig_include($this->env, $context, "@MauticCore/Default/output.html.twig", ["headerTitle" => ((        $this->hasBlock("headerTitle", $context, $blocks)) ? (        $this->renderBlock("headerTitle", $context, $blocks)) : (((        // line 18
array_key_exists("headerTitle", $context)) ? (_twig_default_filter((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 18, $this->source); })()), "")) : ("")))), "publishStatus" => ((        $this->hasBlock("publishStatus", $context, $blocks)) ? (        $this->renderBlock("publishStatus", $context, $blocks)) : (((        // line 19
array_key_exists("publishStatus", $context)) ? (_twig_default_filter((isset($context["publishStatus"]) || array_key_exists("publishStatus", $context) ? $context["publishStatus"] : (function () { throw new RuntimeError('Variable "publishStatus" does not exist.', 19, $this->source); })()), "")) : ("")))), "actions" => ((        $this->hasBlock("actions", $context, $blocks)) ? (        $this->renderBlock("actions", $context, $blocks)) : (((        // line 20
array_key_exists("actions", $context)) ? (_twig_default_filter((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 20, $this->source); })()), "")) : ("")))), "toolbar" => ((        $this->hasBlock("toolbar", $context, $blocks)) ? (        $this->renderBlock("toolbar", $context, $blocks)) : (((        // line 21
array_key_exists("toolbar", $context)) ? (_twig_default_filter((isset($context["toolbar"]) || array_key_exists("toolbar", $context) ? $context["toolbar"] : (function () { throw new RuntimeError('Variable "toolbar" does not exist.', 21, $this->source); })()), "")) : (""))))]);
        // line 22
        echo "
            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Default/slim.html.twig";
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
        return array (  93 => 22,  91 => 21,  90 => 20,  89 => 19,  88 => 18,  86 => 17,  82 => 16,  71 => 29,  68 => 28,  66 => 25,  63 => 24,  61 => 16,  57 => 14,  55 => 12,  49 => 9,  45 => 7,  43 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Default/slim.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Default\\slim.html.twig");
    }
}
