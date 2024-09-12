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

/* @MauticReport/Graph/Table.html.twig */
class __TwigTemplate_046675f4953347e16a940356b87f7771 extends Template
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
        echo "<div class=\"col-md-4\">
    <div class=\"panel panel-default report-list\">
        <div class=\"panel-heading\">
                <h3 class=\"panel-title\">
                    ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["graph"]) || array_key_exists("graph", $context) ? $context["graph"] : (function () { throw new RuntimeError('Variable "graph" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5)), "html", null, true);
        echo "
                    <div class=\"pull-right\">
                        <span class=\"fa ";
        // line 7
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["graph"] ?? null), "iconClass", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["graph"] ?? null), "iconClass", [], "any", false, false, false, 7), "")) : ("")), "html", null, true);
        echo "\"></span>
                    </div>
                </h3>
        </div>
        ";
        // line 11
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["graph"]) || array_key_exists("graph", $context) ? $context["graph"] : (function () { throw new RuntimeError('Variable "graph" does not exist.', 11, $this->source); })()), "data", [], "any", false, false, false, 11)) > 0)) {
            // line 12
            echo "            <div class=\"table-responsive panel-collapse pull out\">
                ";
            // line 14
            echo "                <table class=\"table table-hover report-list\" id=\"reportTable\">
                    <thead>
                        <tr>
                            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["graph"]) || array_key_exists("graph", $context) ? $context["graph"] : (function () { throw new RuntimeError('Variable "graph" does not exist.', 17, $this->source); })()), "data", [], "any", false, false, false, 17), 0, [], "array", false, false, false, 17), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ("id" != (isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 17, $this->source); })())); }));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 18
                echo "                              <th class=\"col-report-count\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["key"]), "html", null, true);
                echo "</th>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["graph"]) || array_key_exists("graph", $context) ? $context["graph"] : (function () { throw new RuntimeError('Variable "graph" does not exist.', 23, $this->source); })()), "data", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["rowKey"] => $context["row"]) {
                // line 24
                echo "                            ";
                if ( !(null === ((twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "array", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "array", false, false, false, 24), null)) : (null)))) {
                    // line 25
                    echo "                                <tr>
                                    ";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["row"]);
                    foreach ($context['_seq'] as $context["cellName"] => $context["cell"]) {
                        // line 27
                        echo "                                        ";
                        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["graph"] ?? null), "data", [], "any", false, true, false, 27), 0, [], "array", false, true, false, 27), "id", [], "any", true, true, false, 27) && ("title" == $context["cellName"])) && twig_get_attribute($this->env, $this->source, ($context["graph"] ?? null), "link", [], "any", true, true, false, 27))) {
                            // line 28
                            echo "                                            <td>
                                                <a href=\"";
                            // line 29
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["graph"]) || array_key_exists("graph", $context) ? $context["graph"] : (function () { throw new RuntimeError('Variable "graph" does not exist.', 29, $this->source); })()), "link", [], "any", false, false, false, 29), ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                            echo "\" data-toggle=\"ajax\">
                                                    ";
                            // line 30
                            echo twig_escape_filter($this->env, $context["cell"], "html", null, true);
                            echo "
                                                </a>
                                            </td>
                                        ";
                        } elseif (("id" !=                         // line 33
$context["cellName"])) {
                            // line 34
                            echo "                                            <td>
                                                ";
                            // line 35
                            if ($this->env->getTest('numeric')->getCallable()($context["cell"])) {
                                // line 36
                                echo "                                                    ";
                                echo twig_escape_filter($this->env, $context["cell"], "html", null, true);
                                echo "
                                                ";
                            } else {
                                // line 38
                                echo "                                                    ";
                                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->makeLinks($context["cell"]);
                                echo "
                                                ";
                            }
                            // line 40
                            echo "                                            </td>
                                        ";
                        }
                        // line 42
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['cellName'], $context['cell'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "                                </tr>
                            ";
                }
                // line 45
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['rowKey'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                    </tbody>
                </table>
            </div>
        ";
        } else {
            // line 50
            echo "            <div class=\"panel-body box-layout\">
                <p class=\"text-muted\">";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.table.noresults"), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 54
        echo "    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticReport/Graph/Table.html.twig";
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
        return array (  167 => 54,  161 => 51,  158 => 50,  152 => 46,  146 => 45,  142 => 43,  136 => 42,  132 => 40,  126 => 38,  120 => 36,  118 => 35,  115 => 34,  113 => 33,  107 => 30,  103 => 29,  100 => 28,  97 => 27,  93 => 26,  90 => 25,  87 => 24,  83 => 23,  78 => 20,  69 => 18,  65 => 17,  60 => 14,  57 => 12,  55 => 11,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticReport/Graph/Table.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Resources\\views\\Graph\\Table.html.twig");
    }
}
