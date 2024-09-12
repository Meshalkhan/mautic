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

/* @MauticCore/Helper/usage.html.twig */
class __TwigTemplate_5a0c6dede7b5ad7268f31b49b402963b extends Template
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
        // line 7
        echo "
";
        // line 8
        if ((array_key_exists("stats", $context) &&  !twig_test_empty((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 8, $this->source); })())))) {
            // line 9
            echo "    <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\">
        <div class=\"panel-heading\">
            <div class=\"panel-title\">";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "</div>
        </div>
        <div class=\"panel-body pt-xs\">
            ";
            // line 14
            $context["hasDependences"] = false;
            // line 15
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
                // line 16
                echo "                ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "ids", [], "any", false, false, false, 16)) > 0)) {
                    // line 17
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["stat"], "route", [], "any", false, false, false, 17), ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.searchcommand.ids") . ":") . twig_join_filter(twig_get_attribute($this->env, $this->source, $context["stat"], "ids", [], "any", false, false, false, 17), ","))]), "html", null, true);
                    echo "\"
                       class=\"btn btn-default mt-4\">
                        ";
                    // line 19
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["stat"], "label", [], "any", false, false, false, 19)), "html", null, true);
                    echo "
                        <span class=\"mt-xs label label-primary\">";
                    // line 20
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "ids", [], "any", false, false, false, 20)), "html", null, true);
                    echo "</span>
                    </a>
                    ";
                    // line 22
                    $context["hasDependences"] = true;
                    // line 23
                    echo "                ";
                }
                // line 24
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            ";
            if ( !(isset($context["hasDependences"]) || array_key_exists("hasDependences", $context) ? $context["hasDependences"] : (function () { throw new RuntimeError('Variable "hasDependences" does not exist.', 25, $this->source); })())) {
                // line 26
                echo "                <p class=\"text-muted mb-0\">
                    ";
                // line 27
                echo twig_escape_filter($this->env, ((array_key_exists("noUsages", $context)) ? (_twig_default_filter((isset($context["noUsages"]) || array_key_exists("noUsages", $context) ? $context["noUsages"] : (function () { throw new RuntimeError('Variable "noUsages" does not exist.', 27, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.usage.not_found"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.usage.not_found"))), "html", null, true);
                echo "
                </p>
            ";
            }
            // line 30
            echo "        </div>
    </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/usage.html.twig";
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
        return array (  100 => 30,  94 => 27,  91 => 26,  88 => 25,  82 => 24,  79 => 23,  77 => 22,  72 => 20,  68 => 19,  62 => 17,  59 => 16,  54 => 15,  52 => 14,  46 => 11,  42 => 9,  40 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/usage.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\usage.html.twig");
    }
}
