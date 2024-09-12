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

/* @MauticCore/Exception/traces.html.twig */
class __TwigTemplate_f13346af8642c916d300a54a9e0e7c69 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "
";
        // line 59
        $context["root"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\ExceptionExtension']->getRoot();
        // line 60
        echo "
<ol>
";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) || array_key_exists("traces", $context) ? $context["traces"] : (function () { throw new RuntimeError('Variable "traces" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 63
            echo "    <li class=\"pt-3 break-word\">
    ";
            // line 64
            if ((twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 64) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 64)))) {
                // line 65
                echo "        ";
                $context["traceFile"] = twig_join_filter(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 65), (isset($context["root"]) || array_key_exists("root", $context) ? $context["root"] : (function () { throw new RuntimeError('Variable "root" does not exist.', 65, $this->source); })())), "");
                // line 66
                echo "        <strong>
            ";
                // line 67
                echo twig_escape_filter($this->env, (isset($context["traceFile"]) || array_key_exists("traceFile", $context) ? $context["traceFile"] : (function () { throw new RuntimeError('Variable "traceFile" does not exist.', 67, $this->source); })()), "html", null, true);
                if ((twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 67) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 67)))) {
                    echo ":";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "line", [], "any", false, false, false, 67), "html", null, true);
                }
                // line 68
                echo "        </strong>
        at
    ";
            }
            // line 71
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["trace"], "function", [], "any", true, true, false, 71) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["trace"], "function", [], "any", false, false, false, 71)))) {
                // line 72
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["trace"], "class", [], "any", true, true, false, 72)) {
                    // line 73
                    echo "            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "class", [], "any", false, false, false, 73), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "type", [], "any", false, false, false, 73), "html", null, true);
                    echo "
        ";
                }
                // line 75
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "function", [], "any", false, false, false, 75), "html", null, true);
                echo " (
        ";
                // line 76
                if ((twig_get_attribute($this->env, $this->source, $context["trace"], "args", [], "any", true, true, false, 76) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["trace"], "args", [], "any", false, false, false, 76)))) {
                    // line 77
                    echo "            
            ";
                    // line 78
                    echo twig_call_macro($macros["_self"], "macro_formatArgs", [twig_get_attribute($this->env, $this->source, $context["trace"], "args", [], "any", false, false, false, 78)], 78, $context, $this->getSourceContext());
                    echo "
            
        ";
                }
                // line 81
                echo "        )
    ";
            }
            // line 83
            echo "    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "</ol>
";
    }

    // line 1
    public function macro_formatArgs($__args__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "args" => $__args__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    ";
            $context["result"] = [];
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["args"]) || array_key_exists("args", $context) ? $context["args"] : (function () { throw new RuntimeError('Variable "args" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 4
                echo "        ";
                // line 5
                echo "        ";
                if (((((is_iterable($context["item"]) && (twig_length_filter($this->env,                 // line 6
$context["item"]) == 2)) && twig_get_attribute($this->env, $this->source,                 // line 7
$context["item"], 0, [], "array", true, true, false, 7)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source,                 // line 8
$context["item"], 0, [], "array", false, false, false, 8))) &&  !is_iterable(twig_get_attribute($this->env, $this->source,                 // line 9
$context["item"], 0, [], "array", false, false, false, 9)))) {
                    // line 10
                    echo "
            ";
                    // line 11
                    if (("object" == twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "array", false, false, false, 11))) {
                        // line 12
                        echo "                ";
                        $context["parts"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], 1, [], "array", false, false, false, 12), "\\");
                        // line 13
                        echo "                ";
                        $context["short"] = twig_slice($this->env, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 13, $this->source); })()), 0,  -1);
                        // line 14
                        echo "                ";
                        $context["formattedValue"] = (((("<em>object</em>(<abbr title=\"" . twig_get_attribute($this->env, $this->source, $context["item"], 1, [], "array", false, false, false, 14)) . "\">") . twig_last($this->env, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 14, $this->source); })()))) . "</abbr>)");
                        // line 15
                        echo "            ";
                    } elseif (("array" == twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "array", false, false, false, 15))) {
                        // line 16
                        echo "                ";
                        $context["s"] = ((is_iterable(twig_get_attribute($this->env, $this->source, $context["item"], 1, [], "array", false, false, false, 16))) ? (twig_call_macro($macros["_self"], "macro_formatArgs", [twig_get_attribute($this->env, $this->source, $context["item"], 1, [], "array", false, false, false, 16)], 16, $context, $this->getSourceContext())) : (twig_get_attribute($this->env, $this->source, $context["item"], 1, [], "array", false, false, false, 16)));
                        // line 17
                        echo "                ";
                        $context["formattedValue"] = (("<em>array</em>(" . (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 17, $this->source); })())) . ")");
                        // line 18
                        echo "            ";
                    } elseif (("string" == twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "array", false, false, false, 18))) {
                        // line 19
                        echo "                ";
                        $context["formattedValue"] = (("'" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], 1, [], "array", false, false, false, 19))) . "'");
                        // line 20
                        echo "            ";
                    } elseif (("null" == twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "array", false, false, false, 20))) {
                        // line 21
                        echo "                ";
                        $context["formattedValue"] = "<em>null</em>";
                        // line 22
                        echo "            ";
                    } elseif (("boolean" == twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "array", false, false, false, 22))) {
                        // line 23
                        echo "                ";
                        $context["s"] = json_encode(twig_get_attribute($this->env, $this->source, $context["item"], 1, [], "array", false, false, false, 23));
                        // line 24
                        echo "                ";
                        $context["s"] = twig_lower_filter($this->env, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 24, $this->source); })()));
                        // line 25
                        echo "                ";
                        $context["formattedValue"] = (("<em>" . (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 25, $this->source); })())) . "</em>");
                        // line 26
                        echo "            ";
                    } elseif (("resource" == twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "array", false, false, false, 26))) {
                        // line 27
                        echo "                ";
                        $context["formattedValue"] = "<em>resource</em>";
                        // line 28
                        echo "            ";
                    } else {
                        // line 29
                        echo "                ";
                        $context["s"] = twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], 1, [], "array", false, false, false, 29));
                        // line 30
                        echo "                ";
                        $context["s"] = json_encode(twig_escape_filter($this->env, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 30, $this->source); })())));
                        // line 31
                        echo "                ";
                        $context["s"] = twig_replace_filter((isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 31, $this->source); })()), ["
" => ""]);
                        // line 32
                        echo "                ";
                        $context["formattedValue"] = (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 32, $this->source); })());
                        // line 33
                        echo "            ";
                    }
                    // line 34
                    echo "        ";
                    // line 35
                    echo "        ";
                } elseif (((is_iterable($context["item"]) && twig_length_filter($this->env, $context["item"])) && twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "array", true, true, false, 35))) {
                    // line 36
                    echo "            ";
                    $context["formattedValue"] = ("<em>array</em>" . twig_call_macro($macros["_self"], "macro_formatArgs", [$context["item"]], 36, $context, $this->getSourceContext()));
                    // line 37
                    echo "        ";
                    // line 38
                    echo "        ";
                } elseif (((is_iterable($context["item"]) && twig_length_filter($this->env, $context["item"])) &&  !twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "array", true, true, false, 38))) {
                    // line 39
                    echo "            ";
                    $context["formattedValue"] = twig_get_attribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, false, 39);
                    // line 40
                    echo "        ";
                    // line 41
                    echo "        ";
                } elseif ((( !is_iterable($context["item"]) &&  !twig_test_empty($context["item"])) && twig_length_filter($this->env, $context["item"]))) {
                    // line 42
                    echo "            ";
                    $context["formattedValue"] = (("<em>" . twig_escape_filter($this->env, $context["item"])) . "</em>");
                    // line 43
                    echo "        ";
                } else {
                    // line 44
                    echo "            ";
                    $context["formattedValue"] = "";
                    // line 45
                    echo "        ";
                }
                // line 46
                echo "
        ";
                // line 48
                echo "        ";
                $context["newResult"] = ((twig_matches("/^\\d+\$/", $context["key"])) ? ((isset($context["formattedValue"]) || array_key_exists("formattedValue", $context) ? $context["formattedValue"] : (function () { throw new RuntimeError('Variable "formattedValue" does not exist.', 48, $this->source); })())) : (((("'" . $context["key"]) . "' => ") . (isset($context["formattedValue"]) || array_key_exists("formattedValue", $context) ? $context["formattedValue"] : (function () { throw new RuntimeError('Variable "formattedValue" does not exist.', 48, $this->source); })()))));
                // line 49
                echo "        ";
                $context["result"] = twig_array_merge((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 49, $this->source); })()), [(isset($context["newResult"]) || array_key_exists("newResult", $context) ? $context["newResult"] : (function () { throw new RuntimeError('Variable "newResult" does not exist.', 49, $this->source); })())]);
                // line 50
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
    ";
            // line 54
            echo "    ";
            echo twig_join_filter((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 54, $this->source); })()), ", ");
            echo " 
    ";
            // line 56
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Exception/traces.html.twig";
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
        return array (  278 => 56,  273 => 54,  270 => 52,  263 => 50,  260 => 49,  257 => 48,  254 => 46,  251 => 45,  248 => 44,  245 => 43,  242 => 42,  239 => 41,  237 => 40,  234 => 39,  231 => 38,  229 => 37,  226 => 36,  223 => 35,  221 => 34,  218 => 33,  215 => 32,  211 => 31,  208 => 30,  205 => 29,  202 => 28,  199 => 27,  196 => 26,  193 => 25,  190 => 24,  187 => 23,  184 => 22,  181 => 21,  178 => 20,  175 => 19,  172 => 18,  169 => 17,  166 => 16,  163 => 15,  160 => 14,  157 => 13,  154 => 12,  152 => 11,  149 => 10,  147 => 9,  146 => 8,  145 => 7,  144 => 6,  142 => 5,  140 => 4,  135 => 3,  132 => 2,  119 => 1,  114 => 85,  107 => 83,  103 => 81,  97 => 78,  94 => 77,  92 => 76,  87 => 75,  79 => 73,  76 => 72,  73 => 71,  68 => 68,  62 => 67,  59 => 66,  56 => 65,  54 => 64,  51 => 63,  47 => 62,  43 => 60,  41 => 59,  38 => 58,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Exception/traces.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Exception\\traces.html.twig");
    }
}
