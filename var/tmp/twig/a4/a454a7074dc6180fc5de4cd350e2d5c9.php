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

/* @MauticCore/Helper/search.html.twig */
class __TwigTemplate_81beeb228a5edcc33c9b7c1df16c781d extends Template
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
        $context["searchValue"] = ((array_key_exists("searchValue", $context)) ? (_twig_default_filter((isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 1, $this->source); })()), "")) : (""));
        // line 2
        $context["target"] = ((array_key_exists("target", $context)) ? (_twig_default_filter((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 2, $this->source); })()), ".page-list")) : (".page-list"));
        // line 3
        $context["overlayTarget"] = ((array_key_exists("overlayTarget", $context)) ? (_twig_default_filter((isset($context["overlayTarget"]) || array_key_exists("overlayTarget", $context) ? $context["overlayTarget"] : (function () { throw new RuntimeError('Variable "overlayTarget" does not exist.', 3, $this->source); })()), (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 3, $this->source); })()))) : ((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 3, $this->source); })())));
        // line 4
        $context["overlayEnabled"] = (((array_key_exists("overlayDisabled", $context) &&  !twig_test_empty((isset($context["overlayDisabled"]) || array_key_exists("overlayDisabled", $context) ? $context["overlayDisabled"] : (function () { throw new RuntimeError('Variable "overlayDisabled" does not exist.', 4, $this->source); })())))) ? ("false") : ("true"));
        // line 5
        $context["id"] = ((array_key_exists("searchId", $context)) ? (_twig_default_filter((isset($context["searchId"]) || array_key_exists("searchId", $context) ? $context["searchId"] : (function () { throw new RuntimeError('Variable "searchId" does not exist.', 5, $this->source); })()), "list-search")) : ("list-search"));
        // line 6
        $context["tmpl"] = ((array_key_exists("tmpl", $context)) ? (_twig_default_filter((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 6, $this->source); })()), "list")) : ("list"));
        // line 7
        echo "
<div class=\"input-group\">
    ";
        // line 9
        if ((array_key_exists("searchHelp", $context) &&  !twig_test_empty((isset($context["searchHelp"]) || array_key_exists("searchHelp", $context) ? $context["searchHelp"] : (function () { throw new RuntimeError('Variable "searchHelp" does not exist.', 9, $this->source); })())))) {
            // line 10
            echo "    <div class=\"input-group-btn\">
        <button class=\"btn btn-default btn-nospin\" data-toggle=\"modal\" data-target=\"#";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["searchId"]) || array_key_exists("searchId", $context) ? $context["searchId"] : (function () { throw new RuntimeError('Variable "searchId" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "-search-help\">
            <i class=\"ri-question-line\"></i>
        </button>
    </div>
    ";
        }
        // line 16
        echo "
    <input type=\"search\" class=\"form-control search\" id=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" name=\"search\" placeholder=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.search.placeholder", [], "messages");
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 17, $this->source); })()));
        echo "\" autocomplete=\"false\" data-toggle=\"livesearch\" data-target=\"";
        echo twig_escape_filter($this->env, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" data-tmpl=\"";
        echo twig_escape_filter($this->env, (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" data-action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" data-overlay=\"";
        echo twig_escape_filter($this->env, (isset($context["overlayEnabled"]) || array_key_exists("overlayEnabled", $context) ? $context["overlayEnabled"] : (function () { throw new RuntimeError('Variable "overlayEnabled" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" data-overlay-text=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.search.livesearch", [], "messages");
        echo "\" data-overlay-target=\"";
        echo twig_escape_filter($this->env, (isset($context["overlayTarget"]) || array_key_exists("overlayTarget", $context) ? $context["overlayTarget"] : (function () { throw new RuntimeError('Variable "overlayTarget" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" />
    <div class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default btn-search btn-nospin\" id=\"btn-filter\" data-livesearch-parent=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\">
            <i class=\"ri-search-line\"></i>
        </button>
    </div>
</div>

";
        // line 25
        if ((isset($context["searchHelp"]) || array_key_exists("searchHelp", $context) ? $context["searchHelp"] : (function () { throw new RuntimeError('Variable "searchHelp" does not exist.', 25, $this->source); })())) {
            // line 26
            echo twig_include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => (            // line 27
(isset($context["searchId"]) || array_key_exists("searchId", $context) ? $context["searchId"] : (function () { throw new RuntimeError('Variable "searchId" does not exist.', 27, $this->source); })()) . "-search-help"), "header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.header"), "body" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.help") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 29
(isset($context["searchHelp"]) || array_key_exists("searchHelp", $context) ? $context["searchHelp"] : (function () { throw new RuntimeError('Variable "searchHelp" does not exist.', 29, $this->source); })())))]);
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/search.html.twig";
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
        return array (  103 => 29,  102 => 27,  101 => 26,  99 => 25,  90 => 19,  69 => 17,  66 => 16,  58 => 11,  55 => 10,  53 => 9,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/search.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\search.html.twig");
    }
}
