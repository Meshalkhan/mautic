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

/* @MauticForm/SubscribedEvents/Search/global.html.twig */
class __TwigTemplate_2a16024b7eb44c8e257599f0bd015326 extends Template
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
        ob_start(function () { return ''; });
        // line 2
        if (array_key_exists("showMore", $context)) {
            // line 3
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_form_index", ["search" => (isset($context["searchString"]) || array_key_exists("searchString", $context) ? $context["searchString"] : (function () { throw new RuntimeError('Variable "searchString" does not exist.', 3, $this->source); })())]), "html", null, true);
            echo "\" data-toggle=\"ajax\">
        <span>";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.more", ["%count%" => (isset($context["remaining"]) || array_key_exists("remaining", $context) ? $context["remaining"] : (function () { throw new RuntimeError('Variable "remaining" does not exist.', 4, $this->source); })())]), "html", null, true);
            echo "</span>
    </a>";
        } else {
            // line 7
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_form_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
            echo "\" data-toggle=\"ajax\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
            // line 9
            echo "<span class=\"label label-default pull-right\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.resultcount"), "html", null, true);
            echo "\" data-placement=\"left\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "resultCount", [], "any", false, false, false, 10), "html", null, true);
            // line 11
            echo "</span>
    </a>";
        }
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_3_);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/SubscribedEvents/Search/global.html.twig";
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
        return array (  68 => 1,  63 => 11,  61 => 10,  57 => 9,  55 => 8,  51 => 7,  46 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/SubscribedEvents/Search/global.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\SubscribedEvents\\Search\\global.html.twig");
    }
}
