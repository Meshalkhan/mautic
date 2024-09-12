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

/* @MauticCore/Helper/tabs.html.twig */
class __TwigTemplate_b933cf479685d31aec659473070f7cd2 extends Template
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
        $context["overflow"] = ((array_key_exists("overflow", $context)) ? ("nav-overflow-tabs") : (""));
        // line 2
        if ( !array_key_exists("verticalTabColWidth", $context)) {
            // line 3
            echo "    ";
            $context["verticalTabColWidth"] = 3;
        }
        // line 5
        $context["verticalContentColWidth"] = (12 - (isset($context["verticalTabColWidth"]) || array_key_exists("verticalTabColWidth", $context) ? $context["verticalTabColWidth"] : (function () { throw new RuntimeError('Variable "verticalTabColWidth" does not exist.', 5, $this->source); })()));
        // line 6
        list($context["vertical"], $context["button"]) =         [((array_key_exists("vertical", $context)) ? ((isset($context["vertical"]) || array_key_exists("vertical", $context) ? $context["vertical"] : (function () { throw new RuntimeError('Variable "vertical" does not exist.', 6, $this->source); })())) : ("")), ((array_key_exists("button", $context)) ? ((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 6, $this->source); })())) : ([]))];
        // line 7
        if ( !twig_test_empty((isset($context["vertical"]) || array_key_exists("vertical", $context) ? $context["vertical"] : (function () { throw new RuntimeError('Variable "vertical" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "<div class=\"box-layout\">
";
        }
        // line 10
        echo "<div class=\"tab-container ";
        echo twig_escape_filter($this->env, (isset($context["overflow"]) || array_key_exists("overflow", $context) ? $context["overflow"] : (function () { throw new RuntimeError('Variable "overflow" does not exist.', 10, $this->source); })()), "html", null, true);
        (( !twig_test_empty((isset($context["vertical"]) || array_key_exists("vertical", $context) ? $context["vertical"] : (function () { throw new RuntimeError('Variable "vertical" does not exist.', 10, $this->source); })()))) ? (print (twig_escape_filter($this->env, ((" height-auto col-xs-" . (isset($context["verticalTabColWidth"]) || array_key_exists("verticalTabColWidth", $context) ? $context["verticalTabColWidth"] : (function () { throw new RuntimeError('Variable "verticalTabColWidth" does not exist.', 10, $this->source); })())) . " pr-0 bdr-r"), "html", null, true))) : (print ("")));
        echo "\">
    ";
        // line 11
        if ( !twig_test_empty((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "    <div class=\"tab-button";
            (( !twig_test_empty((isset($context["vertical"]) || array_key_exists("vertical", $context) ? $context["vertical"] : (function () { throw new RuntimeError('Variable "vertical" does not exist.', 12, $this->source); })()))) ? (print (twig_escape_filter($this->env, (" tab-button-" . (isset($context["vertical"]) || array_key_exists("vertical", $context) ? $context["vertical"] : (function () { throw new RuntimeError('Variable "vertical" does not exist.', 12, $this->source); })())), "html", null, true))) : (print ("")));
            echo "\">
        <a href=\"javascript:void(0);\"
           role=\"tab\"
           class=\"btn btn-primary btn-lg btn-block btn-nospin\"
           id=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\"
           style=\"border-radius: 0;\"
            ";
            // line 18
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 18, $this->source); })()), "attr", [], "any", false, false, false, 18))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 18, $this->source); })()), "attr", [], "any", false, false, false, 18), "html", null, true);
            }
            // line 19
            echo "        >
            <i class=\"fa fa-fw ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 20, $this->source); })()), "icon", [], "any", false, false, false, 20), "html", null, true);
            echo "\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 20, $this->source); })()), "text", [], "any", false, false, false, 20), "html", null, true);
            echo "
        </a>
    ";
            // line 22
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 22, $this->source); })()), "extra", [], "any", false, false, false, 22))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 22, $this->source); })()), "extra", [], "any", false, false, false, 22), "html", null, true);
            }
            // line 23
            echo "    </div>
    ";
        }
        // line 25
        echo "    <ul";
        (((array_key_exists("deletable", $context) && $this->env->getTest('string')->getCallable()((isset($context["deletable"]) || array_key_exists("deletable", $context) ? $context["deletable"] : (function () { throw new RuntimeError('Variable "deletable" does not exist.', 25, $this->source); })())))) ? (print (twig_escape_filter($this->env, ((" data-delete-action=\"" . (isset($context["deletable"]) || array_key_exists("deletable", $context) ? $context["deletable"] : (function () { throw new RuntimeError('Variable "deletable" does not exist.', 25, $this->source); })())) . "\" "), "html", null, true))) : (print ("")));
        echo "
        ";
        // line 26
        (((array_key_exists("sortable", $context) && $this->env->getTest('string')->getCallable()((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 26, $this->source); })())))) ? (print (twig_escape_filter($this->env, ((" data-sort-action=\"" . (isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 26, $this->source); })())) . "\" "), "html", null, true))) : (print ("")));
        echo "
            class=\"";
        // line 27
        echo (((array_key_exists("deletable", $context) &&  !twig_test_empty((isset($context["deletable"]) || array_key_exists("deletable", $context) ? $context["deletable"] : (function () { throw new RuntimeError('Variable "deletable" does not exist.', 27, $this->source); })())))) ? ("nav-deletable ") : (""));
        echo "nav nav-tabs ";
        (( !twig_test_empty((isset($context["vertical"]) || array_key_exists("vertical", $context) ? $context["vertical"] : (function () { throw new RuntimeError('Variable "vertical" does not exist.', 27, $this->source); })()))) ? (print (twig_escape_filter($this->env, (("tabs-" . (isset($context["vertical"]) || array_key_exists("vertical", $context) ? $context["vertical"] : (function () { throw new RuntimeError('Variable "vertical" does not exist.', 27, $this->source); })())) . " pt-0 bdr-b-wdh-0  bdr-r-wdh-0"), "html", null, true))) : (print ("tabs-horizontal")));
        echo (((array_key_exists("sortable", $context) &&  !twig_test_empty((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 27, $this->source); })())))) ? (" sortable") : (""));
        echo "\">
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["tabKey"] => $context["tab"]) {
            // line 29
            echo "            ";
            $context["class"] = (((twig_get_attribute($this->env, $this->source, $context["tab"], "class", [], "any", true, true, false, 29) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["tab"], "class", [], "any", false, false, false, 29)))) ? ((" " . twig_get_attribute($this->env, $this->source, $context["tab"], "class", [], "any", false, false, false, 29))) : (""));
            // line 30
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "attr", [], "any", true, true, false, 30) && is_iterable(twig_get_attribute($this->env, $this->source, $context["tab"], "attr", [], "any", false, false, false, 30)))) {
                // line 31
                echo "                ";
                $context["attr"] = [];
                // line 32
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "attr", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 33
                    echo "                    ";
                    $context["attr"] = twig_array_merge((isset($context["aatr"]) || array_key_exists("aatr", $context) ? $context["aatr"] : (function () { throw new RuntimeError('Variable "aatr" does not exist.', 33, $this->source); })()), [((($context["key"] . "=\"") . $context["val"]) . "\"")]);
                    // line 34
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "                ";
                $context["tab"] = twig_array_merge($context["tab"], ["attr" => twig_join_filter((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 35, $this->source); })()), " ")]);
                // line 36
                echo "            ";
            }
            // line 37
            echo "            ";
            $context["attr"] = (((twig_get_attribute($this->env, $this->source, $context["tab"], "attr", [], "any", true, true, false, 37) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["tab"], "attr", [], "any", false, false, false, 37)))) ? ((" " . twig_get_attribute($this->env, $this->source, $context["tab"], "attr", [], "array", false, false, false, 37))) : (""));
            // line 38
            echo "            ";
            if ( !twig_get_attribute($this->env, $this->source, $context["tab"], "icon", [], "array", true, true, false, 38)) {
                // line 39
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["tab"], "published", [], "any", true, true, false, 39) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["tab"], "published", [], "array", false, false, false, 39)))) {
                    // line 40
                    echo "                    ";
                    $context["tab"] = twig_array_merge($context["tab"], ["icon" => "fa-check-circle text-success"]);
                    // line 41
                    echo "                ";
                } else {
                    // line 42
                    echo "                    ";
                    $context["tab"] = twig_array_merge($context["tab"], ["icon" => "fa-check-circle text-muted"]);
                    // line 43
                    echo "                ";
                }
                // line 44
                echo "            ";
            }
            // line 45
            echo "            <li data-tab-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "id", [], "array", false, false, false, 45), "html", null, true);
            echo "\" class=\"";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["tab"], "active", [], "array", false, false, false, 45))) {
                echo "active";
            }
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "\"";
            echo twig_escape_filter($this->env, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 45, $this->source); })()), "html", null, true);
            echo ">
                <a href=\"#";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "id", [], "array", false, false, false, 46), "html", null, true);
            echo "\" role=\"tab\" data-toggle=\"tab\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "\">
                    <span>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "array", false, false, false, 47), "html", null, true);
            echo "</span>
                    ";
            // line 48
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["tab"], "icon", [], "any", false, false, false, 48))) {
                // line 49
                echo "                        <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "icon", [], "array", false, false, false, 49), "html", null, true);
                echo "\"></i>
                    ";
            }
            // line 51
            echo "                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tabKey'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </ul>
</div>
<div class=\"tab-content";
        // line 56
        (( !twig_test_empty((isset($context["vertical"]) || array_key_exists("vertical", $context) ? $context["vertical"] : (function () { throw new RuntimeError('Variable "vertical" does not exist.', 56, $this->source); })()))) ? (print (twig_escape_filter($this->env, ((" col-xs-" . (isset($context["verticalContentColWidth"]) || array_key_exists("verticalContentColWidth", $context) ? $context["verticalContentColWidth"] : (function () { throw new RuntimeError('Variable "verticalContentColWidth" does not exist.', 56, $this->source); })())) . " pl-0 pt-0 height-auto"), "html", null, true))) : (print (" pa-md")));
        echo "\">
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 58
            echo "        ";
            $context["containerClass"] = (((twig_get_attribute($this->env, $this->source, $context["tab"], "containerClass", [], "any", true, true, false, 58) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["tab"], "containerClass", [], "array", false, false, false, 58)))) ? ((" " . twig_get_attribute($this->env, $this->source, $context["tab"], "containerClass", [], "array", false, false, false, 58))) : (""));
            // line 59
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "containerAttr", [], "array", true, true, false, 59) && is_iterable(twig_get_attribute($this->env, $this->source, $context["tab"], "containerAttr", [], "array", false, false, false, 59)))) {
                // line 60
                echo "            ";
                $context["attr"] = [];
                // line 61
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "containerAttr", [], "array", false, false, false, 61));
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 62
                    echo "                ";
                    $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 62, $this->source); })()), [((($context["key"] . "=\"") . $context["val"]) . "\"")]);
                    // line 63
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "            ";
                $context["tab"] = twig_array_merge($context["tab"], ["containerAttr" => twig_join_filter((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 64, $this->source); })()), " ")]);
                // line 65
                echo "        ";
            }
            // line 66
            echo "        ";
            $context["containerAttr"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["tab"], "containerAttr", [], "array", false, false, false, 66))) ? ((" " . twig_get_attribute($this->env, $this->source, $context["tab"], "containerAttr", [], "array", false, false, false, 66))) : (""));
            // line 67
            echo "        <div class=\"tab-pane fade ";
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["tab"], "active", [], "array", false, false, false, 67))) ? ("in active") : (""));
            echo " bdr-w-0";
            echo twig_escape_filter($this->env, (isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 67, $this->source); })()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "id", [], "array", false, false, false, 67), "html", null, true);
            echo "\"";
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["containerAttr"]) || array_key_exists("containerAttr", $context) ? $context["containerAttr"] : (function () { throw new RuntimeError('Variable "containerAttr" does not exist.', 67, $this->source); })()));
            echo ">
            ";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "content", [], "array", false, false, false, 68);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
    ";
        // line 72
        if ((array_key_exists("noContentKey", $context) &&  !twig_test_empty((isset($context["noContentKey"]) || array_key_exists("noContentKey", $context) ? $context["noContentKey"] : (function () { throw new RuntimeError('Variable "noContentKey" does not exist.', 72, $this->source); })())))) {
            // line 73
            echo "    <div class=\"placeholder";
            echo ((twig_test_empty((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 73, $this->source); })()))) ? ("") : (" hide"));
            echo "\">
        <div class=\"alert alert-warning\">
            ";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["noContentKey"]) || array_key_exists("noContentKey", $context) ? $context["noContentKey"] : (function () { throw new RuntimeError('Variable "noContentKey" does not exist.', 75, $this->source); })())), "html", null, true);
            echo "
        </div>
    </div>
    ";
        }
        // line 79
        echo "</div>
";
        // line 80
        if ( !twig_test_empty((isset($context["vertical"]) || array_key_exists("vertical", $context) ? $context["vertical"] : (function () { throw new RuntimeError('Variable "vertical" does not exist.', 80, $this->source); })()))) {
            // line 81
            echo "</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/tabs.html.twig";
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
        return array (  296 => 81,  294 => 80,  291 => 79,  284 => 75,  278 => 73,  276 => 72,  273 => 71,  264 => 68,  253 => 67,  250 => 66,  247 => 65,  244 => 64,  238 => 63,  235 => 62,  230 => 61,  227 => 60,  224 => 59,  221 => 58,  217 => 57,  213 => 56,  209 => 54,  201 => 51,  195 => 49,  193 => 48,  189 => 47,  183 => 46,  171 => 45,  168 => 44,  165 => 43,  162 => 42,  159 => 41,  156 => 40,  153 => 39,  150 => 38,  147 => 37,  144 => 36,  141 => 35,  135 => 34,  132 => 33,  127 => 32,  124 => 31,  121 => 30,  118 => 29,  114 => 28,  107 => 27,  103 => 26,  98 => 25,  94 => 23,  90 => 22,  83 => 20,  80 => 19,  76 => 18,  71 => 16,  63 => 12,  61 => 11,  55 => 10,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/tabs.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\tabs.html.twig");
    }
}
