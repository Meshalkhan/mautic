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

/* @MauticCore/Error/base.html.twig */
class __TwigTemplate_0aee8bae335da58c59b6b2b0ae516a82 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageTitle' => [$this, 'block_pageTitle'],
            '_content' => [$this, 'block__content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return $this->loadTemplate((isset($context["baseTemplate"]) || array_key_exists("baseTemplate", $context) ? $context["baseTemplate"] : (function () { throw new RuntimeError('Variable "baseTemplate" does not exist.', 21, $this->source); })()), "@MauticCore/Error/base.html.twig", 21);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context["isInline"] = (($context["inline"]) ?? (false));
        // line 13
        $context["isAjax"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 13), "isxmlhttprequest", [], "any", true, true, false, 13) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 13), "isxmlhttprequest", [], "any", false, false, false, 13)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 13), "isxmlhttprequest", [], "any", false, false, false, 13)) : (false));
        // line 14
        $context["src"] = ((array_key_exists("src", $context)) ? (_twig_default_filter((isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 14, $this->source); })()), $this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("wave"))) : ($this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("wave")));
        // line 15
        $context["message"] = ((array_key_exists("message", $context)) ? (_twig_default_filter((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 15, $this->source); })()), "mautic.core.error.generic")) : ("mautic.core.error.generic"));
        // line 16
        $context["status_code"] = ((array_key_exists("status_code", $context)) ? (_twig_default_filter((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 16, $this->source); })()), "")) : (""));
        // line 18
        $context["pageTitle"] = ((array_key_exists("pageTitle", $context)) ? (_twig_default_filter((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 18, $this->source); })()), "")) : (""));
        // line 20
        if (((isset($context["isAjax"]) || array_key_exists("isAjax", $context) ? $context["isAjax"] : (function () { throw new RuntimeError('Variable "isAjax" does not exist.', 20, $this->source); })()) == false)) {
            // line 23
            $context["pageTitle"] = ((((isset($context["isInline"]) || array_key_exists("isInline", $context) ? $context["isInline"] : (function () { throw new RuntimeError('Variable "isInline" does not exist.', 23, $this->source); })()) == false)) ? ((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 23, $this->source); })())) : (((array_key_exists("pageTitle", $context)) ? (_twig_default_filter((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 23, $this->source); })()), "")) : (""))));
        }
        // line 21
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 26, $this->source); })()), "html", null, true);
    }

    // line 28
    public function block__content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <div class=\"pa-20 mautibot-error";
        if ((isset($context["isInline"]) || array_key_exists("isInline", $context) ? $context["isInline"] : (function () { throw new RuntimeError('Variable "isInline" does not exist.', 29, $this->source); })())) {
            echo " inline well";
        }
        echo "\">
        <div class=\"row mt-lg pa-md\">
            ";
        // line 31
        if ((isset($context["isInline"]) || array_key_exists("isInline", $context) ? $context["isInline"] : (function () { throw new RuntimeError('Variable "isInline" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "                <div class=\"mautibot-content col-xs-12\">
                    <h1><i class=\"ri-alert-line fa-fw text-danger\"></i>";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 33, $this->source); })()), ["%code%" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 33, $this->source); })())]), "html", null, true);
            echo "</h1>
                    <h4 class=\"mt-5\"><strong>";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "</h4>
                </div>
            ";
        } else {
            // line 37
            echo "
            <div class=\"mautibot-image col-xs-4 col-md-3\">
                <img class=\"img-responsive\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "\" />
            </div>
            <div class=\"mautibot-content col-xs-8 col-md-9\">
                <blockquote class=\"np break-word\">
                    <h1><i class=\"fa fa-quote-left\"></i> ";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 43, $this->source); })()), ["%code%" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 43, $this->source); })())]), "html", null, true);
            echo " <i class=\"fa fa-quote-right\"></i></h1>
                    <h4 class=\"mt-5\"><strong>";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "</h4>

                    <footer class=\"text-right\">Mautibot</footer>
                </blockquote>
                <div class=\"pull-right\">
                    <a class=\"text-muted\" href=\"http://mau.tc/report-issue\" target=\"_new\">";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.report_issue"), "html", null, true);
            echo "</a>
                </div>
            </div>
            ";
        }
        // line 53
        echo "        </div>
    </div>
    <div class=\"clearfix\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Error/base.html.twig";
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
        return array (  132 => 53,  125 => 49,  115 => 44,  111 => 43,  104 => 39,  100 => 37,  92 => 34,  88 => 33,  85 => 32,  83 => 31,  75 => 29,  71 => 28,  64 => 26,  60 => 21,  57 => 23,  55 => 20,  53 => 18,  51 => 16,  49 => 15,  47 => 14,  45 => 13,  43 => 12,  36 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Error/base.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Error\\base.html.twig");
    }
}
