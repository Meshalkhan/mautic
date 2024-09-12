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

/* @MauticFocus/Builder/Bar/index.html.twig */
class __TwigTemplate_b4698daedbbd49f1024df6cd53372a2e extends Template
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
        $context["props"] = twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 1, $this->source); })()), "properties", [], "any", false, false, false, 1);
        // line 2
        $context["color"] = ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 2, $this->source); })()), "colors", [], "any", false, false, false, 2), "primary", [], "any", false, false, false, 2)) && $this->env->getTest('color light')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 2, $this->source); })()), "colors", [], "any", false, false, false, 2), "primary", [], "any", false, false, false, 2)))) ? ("000000") : ("ffffff"));
        // line 3
        $context["animate"] = ((( !twig_test_empty((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 3, $this->source); })())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 3, $this->source); })()), "animate", [], "any", false, false, false, 3)))) ? (" mf-animate") : (""));
        // line 4
        echo "
<div class=\"mautic-focus mf-bar mf-bar-";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 5, $this->source); })()), "bar", [], "any", false, false, false, 5), "size", [], "any", false, false, false, 5), "html", null, true);
        echo " mf-bar-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 5, $this->source); })()), "bar", [], "any", false, false, false, 5), "placement", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 5, $this->source); })()), "bar", [], "any", false, false, false, 5), "sticky", [], "any", false, false, false, 5)) {
            echo "mf-bar-sticky";
        }
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["animate"]) || array_key_exists("animate", $context) ? $context["animate"] : (function () { throw new RuntimeError('Variable "animate" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\" style=\"background-color: #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 5, $this->source); })()), "colors", [], "any", false, false, false, 5), "primary", [], "any", false, false, false, 5), "html", null, true);
        echo ";\">
    <div class=\"mf-content\">
        ";
        // line 7
        if (twig_in_filter((isset($context["htmlMode"]) || array_key_exists("htmlMode", $context) ? $context["htmlMode"] : (function () { throw new RuntimeError('Variable "htmlMode" does not exist.', 7, $this->source); })()), ["editor", "html"])) {
            // line 8
            echo "            ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 8, $this->source); })()), (isset($context["htmlMode"]) || array_key_exists("htmlMode", $context) ? $context["htmlMode"] : (function () { throw new RuntimeError('Variable "htmlMode" does not exist.', 8, $this->source); })()), [], "array", false, false, false, 8);
            echo "
        ";
        } else {
            // line 10
            echo "            <div class=\"mf-headline\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 10, $this->source); })()), "content", [], "any", false, false, false, 10), "headline", [], "any", false, false, false, 10), "html", null, true);
            echo "</div>
            ";
            // line 11
            if (("form" == twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 11, $this->source); })()), "type", [], "any", false, false, false, 11))) {
                // line 12
                echo "                {focus_form}
            ";
            } elseif (("link" == twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 13, $this->source); })()), "type", [], "any", false, false, false, 13))) {
                // line 14
                echo "                <a href=\"";
                if (twig_test_empty((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 14, $this->source); })()))) {
                    echo twig_escape_filter($this->env, (isset($context["clickUrl"]) || array_key_exists("clickUrl", $context) ? $context["clickUrl"] : (function () { throw new RuntimeError('Variable "clickUrl" does not exist.', 14, $this->source); })()), "html", null, true);
                } else {
                    echo "#";
                }
                echo "\" class=\"mf-link\" target=\"";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 14, $this->source); })()), "content", [], "any", false, false, false, 14), "link_new_window", [], "any", false, false, false, 14)) {
                    echo "_new";
                } else {
                    echo "_parent";
                }
                echo "\">
                    ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 15, $this->source); })()), "content", [], "any", false, false, false, 15), "link_text", [], "any", false, false, false, 15), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 18
            echo "        ";
        }
        // line 19
        echo "    </div>
    <div class=\"mf-bar-collapse\"></div>
</div>

";
        // line 23
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 23, $this->source); })()), "bar", [], "any", false, false, false, 23), "allow_hide", [], "any", false, false, false, 23)) {
            // line 24
            echo "    <div class=\"mf-copy-to-parent mf-bar-collapser mf-bar-collapser-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 24, $this->source); })()), "bar", [], "any", false, false, false, 24), "placement", [], "any", false, false, false, 24), "html", null, true);
            echo " mf-bar-collapser-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 24, $this->source); })()), "bar", [], "any", false, false, false, 24), "size", [], "any", false, false, false, 24), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 24, $this->source); })()), "bar", [], "any", false, false, false, 24), "sticky", [], "any", false, false, false, 24)) {
                echo "mf-bar-collapser-sticky";
            }
            echo " mf-bar-collapser-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\"
         style=\"background-color: #";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 25, $this->source); })()), "colors", [], "any", false, false, false, 25), "primary", [], "any", false, false, false, 25), "html", null, true);
            echo "; color: #";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 25, $this->source); })()), "colors", [], "any", false, false, false, 25), "text", [], "any", false, false, false, 25), "html", null, true);
            echo ";\">
        <style scoped>
            .mf-bar-collapser-icon {
                color: #";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 28, $this->source); })()), "html", null, true);
            echo ";
            }

            .mf-bar-collapser-icon:hover {
                color: #";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 32, $this->source); })()), "html", null, true);
            echo ";
            }
        </style>
        <a class=\"mf-bar-collapser-icon\" href=\"javascript:void(0)\" ";
            // line 35
            if ( !twig_test_empty((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 35, $this->source); })()))) {
                echo "onclick=\"Mautic.toggleBarCollapse()\"";
            }
            echo ">
            ";
            // line 36
            $context["size"] = ((("large" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 36, $this->source); })()), "bar", [], "any", false, false, false, 36), "size", [], "any", false, false, false, 36))) ? (40) : (24));
            // line 37
            echo "            ";
            $context["transformSize"] = 20;
            // line 38
            echo "            ";
            $context["scale"] = ((("large" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 38, $this->source); })()), "bar", [], "any", false, false, false, 38), "size", [], "any", false, false, false, 38))) ? (1) : (0.6));
            // line 39
            echo "            ";
            $context["direction"] = ((("top" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 39, $this->source); })()), "bar", [], "any", false, false, false, 39), "placement", [], "any", false, false, false, 39))) ? ("-90") : ("90"));
            // line 40
            echo "            <svg style=\"overflow: hidden;\" xmlns=\"http://www.w3.org/2000/svg\" width=\"";
            echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "\" version=\"1.1\"
                 height=\"";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\" data-transform-size=\"";
            echo twig_escape_filter($this->env, (isset($context["transformSize"]) || array_key_exists("transformSize", $context) ? $context["transformSize"] : (function () { throw new RuntimeError('Variable "transformSize" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\" data-transform-direction=\"";
            echo twig_escape_filter($this->env, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\" data-transform-scale=\"";
            echo twig_escape_filter($this->env, (isset($context["scale"]) || array_key_exists("scale", $context) ? $context["scale"] : (function () { throw new RuntimeError('Variable "scale" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\">
                <g transform=\"scale(";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["scale"]) || array_key_exists("scale", $context) ? $context["scale"] : (function () { throw new RuntimeError('Variable "scale" does not exist.', 42, $this->source); })()), "html", null, true);
            echo ") rotate(";
            echo twig_escape_filter($this->env, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 42, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["transformSize"]) || array_key_exists("transformSize", $context) ? $context["transformSize"] : (function () { throw new RuntimeError('Variable "transformSize" does not exist.', 42, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["transformSize"]) || array_key_exists("transformSize", $context) ? $context["transformSize"] : (function () { throw new RuntimeError('Variable "transformSize" does not exist.', 42, $this->source); })()), "html", null, true);
            echo ")\">
                    <desc>Created with Raphaël 2.1.2</desc>
                    <defs>
                        <linearGradient gradientTransform=\"matrix(1,0,0,1,-4,-4)\" y2=\"0\" x2=\"6.123233995736766e-17\" y1=\"1\" x1=\"0\" id=\"1390-_0050af-_002c62\">
                            <stop stop-color=\"#";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "\" offset=\"0%\"></stop>
                            <stop stop-color=\"#";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "\" offset=\"100%\"></stop>
                        </linearGradient>
                    </defs>
                    <path transform=\"matrix(1,0,0,1,4,4)\" opacity=\"0\" stroke-linejoin=\"round\" stroke-width=\"3\"
                          d=\"M16,1.466C7.973,1.466,1.466,7.973,1.466,16C1.466,24.027,7.973,30.534,16,30.534C24.027,30.534,30.534,24.027,30.534,15.999999999999998C30.534,7.973,24.027,1.466,16,1.466ZM13.665,25.725L10.129,22.186L16.316,15.998999999999999L10.128999999999998,9.811999999999998L13.664999999999997,6.275999999999998L23.388999999999996,15.998999999999999L13.665,25.725Z\"
                          stroke=\"#ffffff\" fill=\"none\" style=\"stroke-linejoin: round; opacity: 0;\"></path>
                    <path fill-opacity=\"1\" opacity=\"1\" transform=\"matrix(1,0,0,1,4,4)\"
                          d=\"M16,1.466C7.973,1.466,1.466,7.973,1.466,16C1.466,24.027,7.973,30.534,16,30.534C24.027,30.534,30.534,24.027,30.534,15.999999999999998C30.534,7.973,24.027,1.466,16,1.466ZM13.665,25.725L10.129,22.186L16.316,15.998999999999999L10.128999999999998,9.811999999999998L13.664999999999997,6.275999999999998L23.388999999999996,15.998999999999999L13.665,25.725Z\"
                          stroke=\"none\" fill=\"url(#1390-_0050af-_002c62)\" style=\"opacity: 1; fill-opacity: 1;\"></path>
                    <rect opacity=\"0\" style=\"opacity: 0;\" stroke=\"#000\" fill=\"#000000\" ry=\"0\" rx=\"0\" r=\"0\" y=\"0\" x=\"0\"></rect>
                </g>
            </svg>
        </a>
    </div>
";
        }
        // line 62
        echo "
";
        // line 63
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 63, $this->source); })()), "bar", [], "any", false, false, false, 63), "push_page", [], "any", false, false, false, 63) && ("top" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 63, $this->source); })()), "bar", [], "any", false, false, false, 63), "placement", [], "any", false, false, false, 63)))) {
            // line 64
            echo "    <div class=\"mf-move-to-parent mf-bar-spacer mf-bar-spacer-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 64, $this->source); })()), "bar", [], "any", false, false, false, 64), "size", [], "any", false, false, false, 64), "html", null, true);
            echo " mf-bar-spacer-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\"></div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFocus/Builder/Bar/index.html.twig";
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
        return array (  219 => 64,  217 => 63,  214 => 62,  196 => 47,  192 => 46,  179 => 42,  169 => 41,  164 => 40,  161 => 39,  158 => 38,  155 => 37,  153 => 36,  147 => 35,  141 => 32,  134 => 28,  126 => 25,  113 => 24,  111 => 23,  105 => 19,  102 => 18,  96 => 15,  81 => 14,  79 => 13,  76 => 12,  74 => 11,  69 => 10,  63 => 8,  61 => 7,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFocus/Builder/Bar/index.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Builder\\Bar\\index.html.twig");
    }
}
