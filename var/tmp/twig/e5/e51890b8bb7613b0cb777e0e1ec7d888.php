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

/* @MauticLead/Auditlog/_table.html.twig */
class __TwigTemplate_b5e5b7157cbc8b382aa5fe507a821516 extends Template
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
        echo "<table class=\"table table-hover\">
    <tr>
        <th>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.audit.log.field"), "html", null, true);
        echo "</th>
        <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.audit.log.new_value"), "html", null, true);
        echo "</th>
        <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.audit.log.old_value"), "html", null, true);
        echo "</th>
    </tr>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["field"] => $context["values"]) {
            // line 8
            echo "        <tr>
        ";
            // line 9
            if (is_iterable($context["values"])) {
                // line 10
                echo "            ";
                if ((twig_length_filter($this->env, $context["values"]) >= 2)) {
                    // line 11
                    echo "                <td>";
                    echo twig_escape_filter($this->env, $context["field"]);
                    echo "</td>
                ";
                    // line 12
                    if ((twig_get_attribute($this->env, $this->source, $context["values"], "added", [], "array", true, true, false, 12) || twig_get_attribute($this->env, $this->source, $context["values"], "removed", [], "array", true, true, false, 12))) {
                        // line 13
                        echo "                        ";
                        if ((((twig_get_attribute($this->env, $this->source, $context["values"], "added", [], "array", true, true, false, 13) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["values"], "added", [], "array", false, false, false, 13))) &&  !(null === twig_get_attribute($this->env, $this->source, $context["values"], "added", [], "array", false, false, false, 13))) && is_iterable(twig_get_attribute($this->env, $this->source, $context["values"], "added", [], "array", false, false, false, 13)))) {
                            // line 14
                            echo "                            ";
                            // line 15
                            echo "                            ";
                            $context["v"] = "";
                            // line 16
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["values"], "added", [], "array", false, false, false, 16));
                            foreach ($context['_seq'] as $context["l"] => $context["addedValue"]) {
                                // line 17
                                echo "                                ";
                                $context["v"] = twig_escape_filter($this->env, twig_join_filter($context["addedValue"], ", "));
                                // line 18
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['l'], $context['addedValue'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 19
                            echo "                            <td>";
                            echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->normalizeStringValue((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 19, $this->source); })())));
                            echo "</td>
                        ";
                        } elseif ((((twig_get_attribute($this->env, $this->source,                         // line 20
$context["values"], "added", [], "array", true, true, false, 20) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["values"], "added", [], "array", false, false, false, 20))) &&  !(null === twig_get_attribute($this->env, $this->source, $context["values"], "added", [], "array", false, false, false, 20))) &&  !is_iterable(twig_get_attribute($this->env, $this->source, $context["values"], "added", [], "array", false, false, false, 20)))) {
                            // line 21
                            echo "                            ";
                            // line 22
                            echo "                            <td>";
                            echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->normalizeStringValue(twig_get_attribute($this->env, $this->source, $context["values"], "added", [], "array", false, false, false, 22)));
                            echo "</td>
                        ";
                        } else {
                            // line 24
                            echo "                            <td>&nbsp;</td>
                        ";
                        }
                        // line 26
                        echo "                        ";
                        if ((((twig_get_attribute($this->env, $this->source, $context["values"], "removed", [], "array", true, true, false, 26) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["values"], "removed", [], "array", false, false, false, 26))) &&  !(null === twig_get_attribute($this->env, $this->source, $context["values"], "removed", [], "array", false, false, false, 26))) && is_iterable(twig_get_attribute($this->env, $this->source, $context["values"], "removed", [], "array", false, false, false, 26)))) {
                            // line 27
                            echo "                            ";
                            // line 28
                            echo "                            ";
                            $context["v"] = "";
                            // line 29
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["values"], "removed", [], "array", false, false, false, 29));
                            foreach ($context['_seq'] as $context["l"] => $context["removedValue"]) {
                                // line 30
                                echo "                                ";
                                $context["v"] = twig_escape_filter($this->env, twig_join_filter($context["removedValue"], ", "));
                                // line 31
                                echo "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['l'], $context['removedValue'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 32
                            echo "                            <td>";
                            echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->normalizeStringValue((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 32, $this->source); })())));
                            echo "</td>
                        ";
                        } elseif ((((twig_get_attribute($this->env, $this->source,                         // line 33
$context["values"], "removed", [], "array", true, true, false, 33) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["values"], "removed", [], "array", false, false, false, 33))) &&  !(null === twig_get_attribute($this->env, $this->source, $context["values"], "removed", [], "array", false, false, false, 33))) &&  !is_iterable(twig_get_attribute($this->env, $this->source, $context["values"], "removed", [], "array", false, false, false, 33)))) {
                            // line 34
                            echo "                            ";
                            // line 35
                            echo "                            <td>";
                            echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->normalizeStringValue(twig_get_attribute($this->env, $this->source, $context["values"], "removed", [], "array", false, false, false, 35)));
                            echo "</td>
                        ";
                        } else {
                            // line 37
                            echo "                            <td>&nbsp;</td>
                        ";
                        }
                        // line 39
                        echo "                ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["values"], 0, [], "array", true, true, false, 39) || twig_get_attribute($this->env, $this->source, $context["values"], 1, [], "array", true, true, false, 39))) {
                        // line 40
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["values"], 1, [], "array", true, true, false, 40) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["values"], 1, [], "array", false, false, false, 40)))) {
                            // line 41
                            echo "                            <td>";
                            echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->normalizeStringValue(twig_get_attribute($this->env, $this->source, $context["values"], 1, [], "array", false, false, false, 41)));
                            echo "</td>
                        ";
                        } else {
                            // line 43
                            echo "                            <td>&nbsp;</td>
                        ";
                        }
                        // line 45
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["values"], 0, [], "array", true, true, false, 45) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["values"], 0, [], "array", false, false, false, 45)))) {
                            // line 46
                            echo "                            <td>";
                            echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->normalizeStringValue(twig_get_attribute($this->env, $this->source, $context["values"], 0, [], "array", false, false, false, 46)));
                            echo "</td>
                        ";
                        } else {
                            // line 48
                            echo "                            <td>&nbsp;</td>
                        ";
                        }
                        // line 50
                        echo "                ";
                    }
                    // line 51
                    echo "            ";
                } else {
                    // line 52
                    echo "                ";
                    $context["v"] = "";
                    // line 53
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["values"]);
                    foreach ($context['_seq'] as $context["k"] => $context["value"]) {
                        // line 54
                        echo "                    ";
                        $context["v"] = (($context["k"] . ": ") . twig_escape_filter($this->env, twig_join_filter($context["value"], ", ")));
                        // line 55
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    echo "                <td>";
                    echo twig_escape_filter($this->env, $context["field"]);
                    echo "</td>
                <td>";
                    // line 57
                    echo twig_escape_filter($this->env, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 57, $this->source); })()));
                    echo "</td>
                <td>&nbsp;</td>
            ";
                }
                // line 60
                echo "        ";
            } else {
                // line 61
                echo "            <td>";
                echo twig_escape_filter($this->env, $context["field"]);
                echo "</td>
            <td>";
                // line 62
                if ($this->env->getTest('string')->getCallable()($context["values"])) {
                    echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->normalizeStringValue($context["values"]));
                }
                echo "</td>
            <td>&nbsp;</td>
        ";
            }
            // line 65
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "</table>\t";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Auditlog/_table.html.twig";
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
        return array (  241 => 67,  234 => 65,  226 => 62,  221 => 61,  218 => 60,  212 => 57,  207 => 56,  201 => 55,  198 => 54,  193 => 53,  190 => 52,  187 => 51,  184 => 50,  180 => 48,  174 => 46,  171 => 45,  167 => 43,  161 => 41,  158 => 40,  155 => 39,  151 => 37,  145 => 35,  143 => 34,  141 => 33,  136 => 32,  130 => 31,  127 => 30,  122 => 29,  119 => 28,  117 => 27,  114 => 26,  110 => 24,  104 => 22,  102 => 21,  100 => 20,  95 => 19,  89 => 18,  86 => 17,  81 => 16,  78 => 15,  76 => 14,  73 => 13,  71 => 12,  66 => 11,  63 => 10,  61 => 9,  58 => 8,  54 => 7,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Auditlog/_table.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Auditlog\\_table.html.twig");
    }
}
