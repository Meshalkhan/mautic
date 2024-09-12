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

/* @MauticCore/GlobalSearch/results.html.twig */
class __TwigTemplate_d0a3dc0b2f2b733d20b61e7bdd1606cf extends Template
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
        echo "<div class=\"panel-group\" id=\"globalSearchPanel\">";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["header"] => $context["result"]) {
            // line 3
            echo "    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                ";
            // line 6
            echo twig_escape_filter($this->env, $context["header"], "html", null, true);
            echo "
                ";
            // line 7
            if ((twig_get_attribute($this->env, $this->source, $context["result"], "count", [], "any", true, true, false, 7) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["result"], "count", [], "any", false, false, false, 7)))) {
                // line 8
                echo "                <span class=\"badge pull-right gs-count-badge\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "count", [], "any", false, false, false, 8), "html", null, true);
                echo "</span>
                ";
            }
            // line 10
            echo "            </h4>
        </div>
        <div class=\"panel-body np\">
            <ul class=\"list-group\">
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["result"]);
            foreach ($context['_seq'] as $context["k"] => $context["r"]) {
                // line 15
                echo "                  ";
                if ( !("count" === $context["k"])) {
                    // line 16
                    echo "                    <li class=\"list-group-item\">
                        ";
                    // line 17
                    echo $context["r"];
                    echo "
                    </li>
                  ";
                }
                // line 20
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ul>
        </div>
    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['header'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/GlobalSearch/results.html.twig";
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
        return array (  96 => 25,  88 => 21,  82 => 20,  76 => 17,  73 => 16,  70 => 15,  66 => 14,  60 => 10,  54 => 8,  52 => 7,  48 => 6,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/GlobalSearch/results.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\GlobalSearch\\results.html.twig");
    }
}
