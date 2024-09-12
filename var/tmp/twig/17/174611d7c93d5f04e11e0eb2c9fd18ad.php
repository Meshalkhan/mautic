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

/* @MauticCore/GlobalSearch/globalsearch.html.twig */
class __TwigTemplate_2b70eff477b0245e9ff24df1c6244b4a extends Template
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
        echo "<li class=\"dropdown dropdown-custom\" id=\"globalSearchDropdown\">
    <div class=\"dropdown-menu\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <div class=\"panel-title\">
                    <h6 class=\"fw-sb\">";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.search.results", [], "messages");
        echo "</h6>
                </div>
            </div>
            <div class=\"pt-0 pb-xs pl-0 pr-0\">
                <div class=\"scroll-content slimscroll\" style=\"height:250px;\" id=\"globalSearchResults\">
                    ";
        // line 11
        echo twig_include($this->env, $context, "@MauticCore/GlobalSearch/results.html.twig", ["results" => (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 11, $this->source); })())]);
        echo "
                </div>
            </div>
        </div>
    </div>
</li>
<li>
    <div class=\"search-container\" id=\"globalSearchContainer\">
        <a href=\"javascript: void(0);\" class=\"search-button\">
            <i class=\"ri-search-line ri-xl\"></i>
        </a>
        <input
            type=\"search\"
            value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["searchString"]) || array_key_exists("searchString", $context) ? $context["searchString"] : (function () { throw new RuntimeError('Variable "searchString" does not exist.', 24, $this->source); })()));
        echo "\"
            class=\"form-control search\"
            id=\"globalSearchInput\"
            name=\"global_search\"
            placeholder=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.search.everything.placeholder", [], "messages");
        echo "\"
            autocomplete=\"false\"
            data-toggle=\"livesearch\"
            data-target=\"#globalSearchResults\"
            data-action=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_core_ajax", ["action" => "globalSearch"]);
        echo "\"
            data-overlay=\"true\"
            data-overlay-text=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.search.livesearch", [], "messages");
        echo "\" />
    </div>
</li>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/GlobalSearch/globalsearch.html.twig";
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
        return array (  87 => 34,  82 => 32,  75 => 28,  68 => 24,  52 => 11,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/GlobalSearch/globalsearch.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\GlobalSearch\\globalsearch.html.twig");
    }
}
