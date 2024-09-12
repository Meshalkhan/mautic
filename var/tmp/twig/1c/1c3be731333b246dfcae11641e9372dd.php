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

/* @MauticReport/Report/details_data_graphs.html.twig */
class __TwigTemplate_1afb4da9bd16ef1c25c457ee52f5d761 extends Template
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
        if (( !twig_test_empty((isset($context["graphOrder"]) || array_key_exists("graphOrder", $context) ? $context["graphOrder"] : (function () { throw new RuntimeError('Variable "graphOrder" does not exist.', 1, $this->source); })())) &&  !twig_test_empty((isset($context["graphs"]) || array_key_exists("graphs", $context) ? $context["graphs"] : (function () { throw new RuntimeError('Variable "graphs" does not exist.', 1, $this->source); })())))) {
            // line 2
            echo "    <div class=\"mt-lg pa-md\" style=\"clear: both\">
        <div class=\"row equal\">";
            // line 4
            $context["rowCount"] = 0;
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["graphOrder"]) || array_key_exists("graphOrder", $context) ? $context["graphOrder"] : (function () { throw new RuntimeError('Variable "graphOrder" does not exist.', 5, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["graphs"] ?? null), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 5, $this->source); })()), [], "array", false, true, false, 5), "data", [], "any", true, true, false, 5); }));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 6
                echo "                ";
                if (((isset($context["rowCount"]) || array_key_exists("rowCount", $context) ? $context["rowCount"] : (function () { throw new RuntimeError('Variable "rowCount" does not exist.', 6, $this->source); })()) >= 12)) {
                    // line 7
                    echo "                    </div><div class=\"row equal\">";
                    // line 8
                    $context["rowCount"] = 0;
                }
                // line 10
                echo "                ";
                echo twig_include($this->env, $context, (("@MauticReport/Graph/" . twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["graphs"]) || array_key_exists("graphs", $context) ? $context["graphs"] : (function () { throw new RuntimeError('Variable "graphs" does not exist.', 10, $this->source); })()), $context["key"], [], "array", false, false, false, 10), "type", [], "any", false, false, false, 10))) . ".html.twig"), ["graph" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 11
(isset($context["graphs"]) || array_key_exists("graphs", $context) ? $context["graphs"] : (function () { throw new RuntimeError('Variable "graphs" does not exist.', 11, $this->source); })()), $context["key"], [], "array", false, false, false, 11), "data", [], "any", false, false, false, 11), "options" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 12
(isset($context["graphs"]) || array_key_exists("graphs", $context) ? $context["graphs"] : (function () { throw new RuntimeError('Variable "graphs" does not exist.', 12, $this->source); })()), $context["key"], [], "array", false, false, false, 12), "options", [], "any", false, false, false, 12), "report" =>                 // line 13
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 13, $this->source); })())]);
                // line 15
                $context["rowCount"] = ((isset($context["rowCount"]) || array_key_exists("rowCount", $context) ? $context["rowCount"] : (function () { throw new RuntimeError('Variable "rowCount" does not exist.', 15, $this->source); })()) + ((("line" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["graphs"]) || array_key_exists("graphs", $context) ? $context["graphs"] : (function () { throw new RuntimeError('Variable "graphs" does not exist.', 15, $this->source); })()), $context["key"], [], "array", false, false, false, 15), "type", [], "any", false, false, false, 15))) ? (12) : (4)));
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
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
        return "@MauticReport/Report/details_data_graphs.html.twig";
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
        return array (  89 => 17,  75 => 15,  73 => 13,  72 => 12,  71 => 11,  69 => 10,  66 => 8,  64 => 7,  61 => 6,  44 => 5,  42 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticReport/Report/details_data_graphs.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Resources\\views\\Report\\details_data_graphs.html.twig");
    }
}
