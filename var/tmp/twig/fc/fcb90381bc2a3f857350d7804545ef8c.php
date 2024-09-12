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

/* @MauticCore/Menu/extra.html.twig */
class __TwigTemplate_01af322818e36a4712bb31427b973711 extends Template
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
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })()), "hasChildren", [], "method", false, false, false, 1) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1, $this->source); })()), "depth", [], "any", false, false, false, 1) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })()), "getDisplayChildren", [], "method", false, false, false, 1))) {
            // line 2
            echo "
    ";
            // line 4
            echo "    ";
            $context["ulAttributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "getChildrenAttributes", [], "method", false, false, false, 4);
            // line 5
            echo "    ";
            // line 6
            echo "    ";
            $context["ulClasses"] = ((twig_get_attribute($this->env, $this->source, ($context["ulAttributes"] ?? null), "class", [], "any", true, true, false, 6)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["ulAttributes"]) || array_key_exists("ulAttributes", $context) ? $context["ulAttributes"] : (function () { throw new RuntimeError('Variable "ulAttributes" does not exist.', 6, $this->source); })()), "class", [], "any", false, false, false, 6) . " dropdown-menu")) : ("dropdown-menu"));
            // line 7
            echo "    ";
            // line 8
            echo "    ";
            $context["ulAttributes"] = twig_array_merge((isset($context["ulAttributes"]) || array_key_exists("ulAttributes", $context) ? $context["ulAttributes"] : (function () { throw new RuntimeError('Variable "ulAttributes" does not exist.', 8, $this->source); })()), ["class" => (isset($context["ulClasses"]) || array_key_exists("ulClasses", $context) ? $context["ulClasses"] : (function () { throw new RuntimeError('Variable "ulClasses" does not exist.', 8, $this->source); })())]);
            // line 9
            echo "
    <ul";
            // line 10
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["ulAttributes"]) || array_key_exists("ulAttributes", $context) ? $context["ulAttributes"] : (function () { throw new RuntimeError('Variable "ulAttributes" does not exist.', 10, $this->source); })()));
            echo ">

        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "getChildren", [], "method", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 13
                echo "
            ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, $context["child"], "isDisplayed", [], "method", false, false, false, 14)) {
                    // line 15
                    echo "
                ";
                    // line 16
                    $context["showChildren"] = (((twig_get_attribute($this->env, $this->source, $context["child"], "hasChildren", [], "method", false, false, false, 16) && twig_get_attribute($this->env, $this->source, $context["child"], "getDisplayChildren", [], "method", false, false, false, 16))) ? (true) : (false));
                    // line 17
                    echo "                ";
                    $context["liAttributes"] = twig_get_attribute($this->env, $this->source, $context["child"], "getAttributes", [], "method", false, false, false, 17);
                    // line 18
                    echo "                ";
                    $context["isAncestor"] = twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 18, $this->source); })()), "isAncestor", [$context["child"], twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 18, $this->source); })()), "matchingDepth", [], "array", false, false, false, 18)], "method", false, false, false, 18);
                    // line 19
                    echo "                ";
                    $context["extras"] = twig_get_attribute($this->env, $this->source, $context["child"], "getExtras", [], "method", false, false, false, 19);
                    // line 20
                    echo "
                ";
                    // line 21
                    if ((twig_get_attribute($this->env, $this->source, ($context["extras"] ?? null), "divider", [], "any", true, true, false, 21) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 21, $this->source); })()), "divider", [], "any", false, false, false, 21)))) {
                        // line 22
                        echo "                    <li role=\"separator\" class=\"divider\"></li>
                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 23
($context["extras"] ?? null), "header", [], "any", true, true, false, 23) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 23, $this->source); })()), "header", [], "any", false, false, false, 23)))) {
                        // line 24
                        echo "                    <li class=\"dropdown-header\">";
                        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 24, $this->source); })()), "header", [], "any", false, false, false, 24)));
                        echo "</li>
                ";
                    } else {
                        // line 26
                        echo "                    ";
                        // line 27
                        echo "                    ";
                        $context["liClasses"] = ((twig_get_attribute($this->env, $this->source, ($context["liAttributes"] ?? null), "class", [], "any", true, true, false, 27)) ? (twig_get_attribute($this->env, $this->source, (isset($context["liAttributes"]) || array_key_exists("liAttributes", $context) ? $context["liAttributes"] : (function () { throw new RuntimeError('Variable "liAttributes" does not exist.', 27, $this->source); })()), "class", [], "any", false, false, false, 27)) : (""));
                        // line 28
                        echo "                
                    ";
                        // line 30
                        echo "                    ";
                        $context["liAttributes"] = twig_array_merge((isset($context["liAttributes"]) || array_key_exists("liAttributes", $context) ? $context["liAttributes"] : (function () { throw new RuntimeError('Variable "liAttributes" does not exist.', 30, $this->source); })()), $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->buildMenuClasses($context["child"], (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 30, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 30, $this->source); })()), (isset($context["liClasses"]) || array_key_exists("liClasses", $context) ? $context["liClasses"] : (function () { throw new RuntimeError('Variable "liClasses" does not exist.', 30, $this->source); })())));
                        // line 31
                        echo "
                    <li";
                        // line 32
                        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["liAttributes"]) || array_key_exists("liAttributes", $context) ? $context["liAttributes"] : (function () { throw new RuntimeError('Variable "liAttributes" does not exist.', 32, $this->source); })()));
                        echo ">

                        ";
                        // line 34
                        $context["url"] = twig_get_attribute($this->env, $this->source, $context["child"], "getUri", [], "method", false, false, false, 34);
                        // line 35
                        echo "                        ";
                        $context["linkAttributes"] = twig_get_attribute($this->env, $this->source, $context["child"], "getLinkAttributes", [], "method", false, false, false, 35);
                        // line 36
                        echo "                        ";
                        $context["url"] = ((twig_test_empty((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 36, $this->source); })()))) ? ("javascript:void(0);") : ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 36, $this->source); })())));
                        // line 37
                        echo "                        ";
                        if (( !twig_get_attribute($this->env, $this->source, ($context["linkAttributes"] ?? null), "target", [], "any", true, true, false, 37) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 37, $this->source); })()), "target", [], "any", false, false, false, 37)))) {
                            // line 38
                            echo "                            ";
                            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 38, $this->source); })()), ["data-toggle" => "ajax"]);
                            // line 39
                            echo "                        ";
                        }
                        // line 40
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 40, $this->source); })()), "html", null, true);
                        echo "\"";
                        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 40, $this->source); })()));
                        echo ">
                            ";
                        // line 41
                        if ((twig_get_attribute($this->env, $this->source, ($context["extras"] ?? null), "iconClass", [], "any", true, true, false, 41) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 41, $this->source); })()), "iconClass", [], "any", false, false, false, 41)))) {
                            // line 42
                            echo "                            <span style=\"margin-top: 4px;\" class=\"icon pull-left fa ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 42, $this->source); })()), "iconClass", [], "any", false, false, false, 42), "html", null, true);
                            echo "\"></span>
                            ";
                        }
                        // line 44
                        echo "
                            ";
                        // line 45
                        $context["labelAttributes"] = twig_get_attribute($this->env, $this->source, $context["child"], "getLabelAttributes", [], "method", false, false, false, 45);
                        // line 46
                        echo "                        
                            ";
                        // line 47
                        $context["labelClasses"] = (( !twig_get_attribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 47)) ? ("text") : ((twig_get_attribute($this->env, $this->source, (isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 47, $this->source); })()), "class", [], "any", false, false, false, 47) . " text")));
                        // line 48
                        echo "                            ";
                        $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 48, $this->source); })()), ["class" => twig_trim_filter((isset($context["labelClasses"]) || array_key_exists("labelClasses", $context) ? $context["labelClasses"] : (function () { throw new RuntimeError('Variable "labelClasses" does not exist.', 48, $this->source); })()))]);
                        // line 49
                        echo "
                            <span";
                        // line 50
                        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 50, $this->source); })()));
                        echo ">";
                        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["child"], "getLabel", [], "method", false, false, false, 50)));
                        echo "</span>
                        </a>
                    </li>

                ";
                    }
                    // line 55
                    echo "
            ";
                }
                // line 57
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "
    </ul>

";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Menu/extra.html.twig";
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
        return array (  190 => 59,  183 => 57,  179 => 55,  169 => 50,  166 => 49,  163 => 48,  161 => 47,  158 => 46,  156 => 45,  153 => 44,  147 => 42,  145 => 41,  138 => 40,  135 => 39,  132 => 38,  129 => 37,  126 => 36,  123 => 35,  121 => 34,  116 => 32,  113 => 31,  110 => 30,  107 => 28,  104 => 27,  102 => 26,  96 => 24,  94 => 23,  91 => 22,  89 => 21,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  75 => 16,  72 => 15,  70 => 14,  67 => 13,  63 => 12,  58 => 10,  55 => 9,  52 => 8,  50 => 7,  47 => 6,  45 => 5,  42 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Menu/extra.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Menu\\extra.html.twig");
    }
}
