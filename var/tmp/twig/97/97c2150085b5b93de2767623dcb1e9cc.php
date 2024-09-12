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

/* @MauticCore/Default/content.html.twig */
class __TwigTemplate_a1866d41f570cb90b2db229ceccd7ea3 extends Template
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
        $context["request"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1);
        // line 2
        $context["contentOnly"] = (twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 2, $this->source); })()), "get", ["contentOnly", false], "method", false, false, false, 2) || (array_key_exists("contentOnly", $context) &&  !twig_test_empty((isset($context["contentOnly"]) || array_key_exists("contentOnly", $context) ? $context["contentOnly"] : (function () { throw new RuntimeError('Variable "contentOnly" does not exist.', 2, $this->source); })()))));
        // line 3
        $context["modalView"] = (twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 3, $this->source); })()), "get", ["modal", false], "method", false, false, false, 3) || (array_key_exists("modalView", $context) &&  !twig_test_empty((isset($context["modalView"]) || array_key_exists("modalView", $context) ? $context["modalView"] : (function () { throw new RuntimeError('Variable "modalView" does not exist.', 3, $this->source); })()))));
        // line 5
        $context["template"] = null;
        // line 6
        if (( !twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 6, $this->source); })()), "isXmlHttpRequest", [], "method", false, false, false, 6) &&  !(isset($context["modalView"]) || array_key_exists("modalView", $context) ? $context["modalView"] : (function () { throw new RuntimeError('Variable "modalView" does not exist.', 6, $this->source); })()))) {
            // line 7
            echo "    ";
            $context["template"] = (((isset($context["contentOnly"]) || array_key_exists("contentOnly", $context) ? $context["contentOnly"] : (function () { throw new RuntimeError('Variable "contentOnly" does not exist.', 7, $this->source); })())) ? ("@MauticCore/Default/slim.html.twig") : ("@MauticCore/Default/base.html.twig"));
        } elseif ( !        // line 8
(isset($context["modalView"]) || array_key_exists("modalView", $context) ? $context["modalView"] : (function () { throw new RuntimeError('Variable "modalView" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "    ";
            $context["template"] = "@MauticCore/Default/output.html.twig";
        }
        // line 11
        echo "";
        // line 12
        if ( !twig_test_empty((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo twig_include($this->env, $context, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 13, $this->source); })()), ["content" => ((            $this->hasBlock("content", $context, $blocks)) ? (            $this->renderBlock("content", $context, $blocks)) : (((            // line 14
array_key_exists("content", $context)) ? (_twig_default_filter((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 14, $this->source); })()), "")) : ("")))), "modal" => ((            $this->hasBlock("modal", $context, $blocks)) ? (            $this->renderBlock("modal", $context, $blocks)) : (((            // line 15
array_key_exists("modal", $context)) ? (_twig_default_filter((isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 15, $this->source); })()), "")) : ("")))), "headerTitle" =>             $this->renderBlock("headerTitle", $context, $blocks), "pageTitle" => ((            $this->hasBlock("pageTitle", $context, $blocks)) ? (            $this->renderBlock("pageTitle", $context, $blocks)) : (((            // line 17
array_key_exists("pageTitle", $context)) ? (_twig_default_filter((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 17, $this->source); })()), "")) : ("")))), "publishStatus" => ((            $this->hasBlock("publishStatus", $context, $blocks)) ? (            $this->renderBlock("publishStatus", $context, $blocks)) : (((            // line 18
array_key_exists("publishStatus", $context)) ? (_twig_default_filter((isset($context["publishStatus"]) || array_key_exists("publishStatus", $context) ? $context["publishStatus"] : (function () { throw new RuntimeError('Variable "publishStatus" does not exist.', 18, $this->source); })()), "")) : ("")))), "actions" => ((            $this->hasBlock("actions", $context, $blocks)) ? (            $this->renderBlock("actions", $context, $blocks)) : (((            // line 19
array_key_exists("actions", $context)) ? (_twig_default_filter((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 19, $this->source); })()), "")) : ("")))), "toolbar" => ((            $this->hasBlock("toolbar", $context, $blocks)) ? (            $this->renderBlock("toolbar", $context, $blocks)) : (((            // line 20
array_key_exists("toolbar", $context)) ? (_twig_default_filter((isset($context["toolbar"]) || array_key_exists("toolbar", $context) ? $context["toolbar"] : (function () { throw new RuntimeError('Variable "toolbar" does not exist.', 20, $this->source); })()), "")) : ("")))), "mauticTemplateVars" => ((            // line 21
array_key_exists("mauticTemplateVars", $context)) ? (_twig_default_filter((isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 21, $this->source); })()), [])) : ([])), "isXmlHttpRequest" => twig_get_attribute($this->env, $this->source,             // line 22
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 22, $this->source); })()), "isXmlHttpRequest", [], "any", false, false, false, 22)]);
        } else {
            // line 25
            echo "    ";
            $this->displayBlock("content", $context, $blocks);
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Default/content.html.twig";
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
        return array (  71 => 25,  68 => 22,  67 => 21,  66 => 20,  65 => 19,  64 => 18,  63 => 17,  62 => 15,  61 => 14,  60 => 13,  58 => 12,  56 => 11,  52 => 9,  50 => 8,  47 => 7,  45 => 6,  43 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Default/content.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Default\\content.html.twig");
    }
}
