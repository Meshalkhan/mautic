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

/* @MauticCore/Helper/list_filters.html.twig */
class __TwigTemplate_51379b233f605ccb35b6e8a255726e11 extends Template
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
        if ((array_key_exists("filters", $context) &&  !twig_test_empty((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 1, $this->source); })())))) {
            // line 2
            echo "    <div class=\"form-group\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["filterName"] => $context["filter"]) {
                // line 4
                echo "        ";
                $context["attr"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\CoreHelpersExtension']->getFilterAttributes($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                // line 5
$context["filterName"]),                 // line 6
$context["filter"], ((                // line 7
array_key_exists("target", $context)) ? (_twig_default_filter((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 7, $this->source); })()), ".page-list")) : (".page-list")), ((                // line 8
array_key_exists("tmpl", $context)) ? (_twig_default_filter((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 8, $this->source); })()), "list")) : ("list")));
                // line 10
                echo "        <select ";
                echo twig_join_filter((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 10, $this->source); })()), " ");
                echo ">
        ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["filter"], "groups", [], "any", true, true, false, 11)) {
                    // line 12
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter"], "groups", [], "any", false, false, false, 12));
                    foreach ($context['_seq'] as $context["groupLabel"] => $context["groupFilter"]) {
                        // line 13
                        echo "                <optgroup label=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["groupLabel"]), "html", null, true);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["groupFilter"], "prefix", [], "any", true, true, false, 13)) {
                            echo " data-prefix=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["groupFilter"], "prefix", [], "any", false, false, false, 13), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                    ";
                        // line 14
                        if (twig_get_attribute($this->env, $this->source, $context["groupFilter"], "options", [], "any", true, true, false, 14)) {
                            // line 15
                            echo "                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["groupFilter"], "options", [], "any", false, false, false, 15));
                            foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                                // line 16
                                echo "                        ";
                                if (is_iterable($context["label"])) {
                                    // line 17
                                    echo "                            ";
                                    $context["value"] = ((twig_get_attribute($this->env, $this->source, $context["label"], "value", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["label"], "value", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, $context["label"], "id", [], "any", false, false, false, 17))) : (twig_get_attribute($this->env, $this->source, $context["label"], "id", [], "any", false, false, false, 17)));
                                    // line 18
                                    echo "                            ";
                                    $context["label"] = ((twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 18), ((twig_get_attribute($this->env, $this->source, $context["label"], "title", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["label"], "title", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 18))) : (twig_get_attribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 18))))) : (((twig_get_attribute($this->env, $this->source, $context["label"], "title", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["label"], "title", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 18))) : (twig_get_attribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 18)))));
                                    // line 19
                                    echo "                        ";
                                }
                                // line 20
                                echo "
                        ";
                                // line 21
                                $context["selected"] = (((twig_get_attribute($this->env, $this->source, $context["groupFilter"], "values", [], "any", true, true, false, 21) && twig_in_filter($context["value"], twig_get_attribute($this->env, $this->source, $context["groupFilter"], "values", [], "any", false, false, false, 21)))) ? (" selected") : (""));
                                // line 22
                                echo "
                        ";
                                // line 23
                                if (twig_get_attribute($this->env, $this->source, $context["groupFilter"], "prefix", [], "any", true, true, false, 23)) {
                                    // line 24
                                    echo "                            ";
                                    $context["value"] = ((twig_get_attribute($this->env, $this->source, $context["groupFilter"], "prefix", [], "any", false, false, false, 24) . ":") . $context["value"]);
                                    // line 25
                                    echo "                        ";
                                }
                                // line 26
                                echo "                    <option value=\"";
                                echo twig_escape_filter($this->env, $context["value"], "html_attr");
                                echo "\"";
                                echo twig_escape_filter($this->env, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 26, $this->source); })()), "html", null, true);
                                echo ">";
                                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                                echo "</option>
                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 28
                            echo "                    ";
                        }
                        // line 29
                        echo "                </optgroup>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['groupLabel'], $context['groupFilter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "        ";
                } elseif (twig_get_attribute($this->env, $this->source, $context["filter"], "options", [], "any", true, true, false, 31)) {
                    // line 32
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter"], "options", [], "any", false, false, false, 32));
                    foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                        // line 33
                        echo "                ";
                        if (is_iterable($context["label"])) {
                            // line 34
                            echo "                    ";
                            $context["value"] = ((twig_get_attribute($this->env, $this->source, $context["label"], "value", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["label"], "value", [], "any", false, false, false, 34), twig_get_attribute($this->env, $this->source, $context["label"], "id", [], "any", false, false, false, 34))) : (twig_get_attribute($this->env, $this->source, $context["label"], "id", [], "any", false, false, false, 34)));
                            // line 35
                            echo "                    ";
                            $context["label"] = ((twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 35), ((twig_get_attribute($this->env, $this->source, $context["label"], "title", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["label"], "title", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 35))) : (twig_get_attribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 35))))) : (((twig_get_attribute($this->env, $this->source, $context["label"], "title", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["label"], "title", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 35))) : (twig_get_attribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 35)))));
                            // line 36
                            echo "                ";
                        }
                        // line 37
                        echo "
                ";
                        // line 38
                        $context["selected"] = (((twig_get_attribute($this->env, $this->source, $context["filter"], "values", [], "any", true, true, false, 38) && twig_in_filter($context["value"], twig_get_attribute($this->env, $this->source, $context["filter"], "values", [], "any", false, false, false, 38)))) ? (" selected") : (""));
                        // line 39
                        echo "                <option value=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html_attr");
                        echo "\"";
                        echo twig_escape_filter($this->env, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 39, $this->source); })()), "html", null, true);
                        echo ">
                    ";
                        // line 40
                        ((( !twig_get_attribute($this->env, $this->source, $context["filter"], "translateLabels", [], "any", true, true, false, 40) || twig_test_empty(twig_get_attribute($this->env, $this->source, $context["filter"], "translateLabels", [], "any", false, false, false, 40)))) ? (print ($this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($context["label"]))) : (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["label"]), "html", null, true))));
                        echo "
                </option>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "        ";
                }
                // line 44
                echo "        </select>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['filterName'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "    </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/list_filters.html.twig";
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
        return array (  185 => 46,  178 => 44,  175 => 43,  166 => 40,  159 => 39,  157 => 38,  154 => 37,  151 => 36,  148 => 35,  145 => 34,  142 => 33,  137 => 32,  134 => 31,  127 => 29,  124 => 28,  111 => 26,  108 => 25,  105 => 24,  103 => 23,  100 => 22,  98 => 21,  95 => 20,  92 => 19,  89 => 18,  86 => 17,  83 => 16,  78 => 15,  76 => 14,  65 => 13,  60 => 12,  58 => 11,  53 => 10,  51 => 8,  50 => 7,  49 => 6,  48 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/list_filters.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\list_filters.html.twig");
    }
}
