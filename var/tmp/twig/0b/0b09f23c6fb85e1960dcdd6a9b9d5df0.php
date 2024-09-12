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

/* @MauticCore/Menu/profile_inline.html.twig */
class __TwigTemplate_7eae5b64a71f518f08597707267bf95d extends Template
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
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })()), "getChildren", [], "method", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 4
                echo "
        ";
                // line 5
                if (twig_get_attribute($this->env, $this->source, $context["child"], "isDisplayed", [], "method", false, false, false, 5)) {
                    // line 6
                    echo "
            ";
                    // line 7
                    $context["showChildren"] = (((twig_get_attribute($this->env, $this->source, $context["child"], "hasChildren", [], "method", false, false, false, 7) && twig_get_attribute($this->env, $this->source, $context["child"], "getDisplayChildren", [], "method", false, false, false, 7))) ? (true) : (false));
                    // line 8
                    echo "            ";
                    $context["liAttributes"] = twig_get_attribute($this->env, $this->source, $context["child"], "getAttributes", [], "method", false, false, false, 8);
                    // line 9
                    echo "            ";
                    $context["isAncestor"] = twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 9, $this->source); })()), "isAncestor", [$context["child"], twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 9, $this->source); })()), "matchingDepth", [], "array", false, false, false, 9)], "method", false, false, false, 9);
                    // line 10
                    echo "            ";
                    $context["extras"] = twig_get_attribute($this->env, $this->source, $context["child"], "getExtras", [], "method", false, false, false, 10);
                    // line 11
                    echo "
            ";
                    // line 12
                    if ((twig_get_attribute($this->env, $this->source, ($context["extras"] ?? null), "divider", [], "any", true, true, false, 12) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 12, $this->source); })()), "divider", [], "any", false, false, false, 12)))) {
                        // line 13
                        echo "                <li role=\"separator\" class=\"divider\"></li>
            ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 14
($context["extras"] ?? null), "header", [], "any", true, true, false, 14) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 14, $this->source); })()), "header", [], "any", false, false, false, 14)))) {
                        // line 15
                        echo "                <li class=\"dropdown-header\">";
                        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 15, $this->source); })()), "header", [], "any", false, false, false, 15)));
                        echo "</li>
            ";
                    } else {
                        // line 17
                        echo "
                ";
                        // line 19
                        echo "                ";
                        $context["liClasses"] = ((twig_get_attribute($this->env, $this->source, ($context["liAttributes"] ?? null), "class", [], "any", true, true, false, 19)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["liAttributes"]) || array_key_exists("liAttributes", $context) ? $context["liAttributes"] : (function () { throw new RuntimeError('Variable "liAttributes" does not exist.', 19, $this->source); })()), "class", [], "any", false, false, false, 19) . " nav-group")) : ("nav-group"));
                        // line 20
                        echo "                
                ";
                        // line 22
                        echo "                ";
                        $context["liAttributes"] = twig_array_merge((isset($context["liAttributes"]) || array_key_exists("liAttributes", $context) ? $context["liAttributes"] : (function () { throw new RuntimeError('Variable "liAttributes" does not exist.', 22, $this->source); })()), $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->buildMenuClasses($context["child"], (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 22, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 22, $this->source); })()), (isset($context["liClasses"]) || array_key_exists("liClasses", $context) ? $context["liClasses"] : (function () { throw new RuntimeError('Variable "liClasses" does not exist.', 22, $this->source); })())));
                        // line 23
                        echo "
                ";
                        // line 25
                        echo "                <li";
                        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["liAttributes"]) || array_key_exists("liAttributes", $context) ? $context["liAttributes"] : (function () { throw new RuntimeError('Variable "liAttributes" does not exist.', 25, $this->source); })()));
                        echo ">

                    ";
                        // line 27
                        $context["url"] = twig_get_attribute($this->env, $this->source, $context["child"], "getUri", [], "method", false, false, false, 27);
                        // line 28
                        echo "                    ";
                        $context["linkAttributes"] = twig_get_attribute($this->env, $this->source, $context["child"], "getLinkAttributes", [], "method", false, false, false, 28);
                        // line 29
                        echo "                    ";
                        $context["url"] = ((twig_test_empty((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 29, $this->source); })()))) ? ("javascript:void(0);") : ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 29, $this->source); })())));
                        // line 30
                        echo "                    ";
                        if (( !twig_get_attribute($this->env, $this->source, ($context["linkAttributes"] ?? null), "target", [], "any", true, true, false, 30) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 30, $this->source); })()), "target", [], "any", false, false, false, 30)))) {
                            // line 31
                            echo "                        ";
                            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 31, $this->source); })()), ["data-toggle" => "ajax"]);
                            // line 32
                            echo "                    ";
                        }
                        // line 33
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 33, $this->source); })()), "html", null, true);
                        echo "\"";
                        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 33, $this->source); })()));
                        echo ">
                        ";
                        // line 34
                        if ((twig_get_attribute($this->env, $this->source, ($context["extras"] ?? null), "iconClass", [], "any", true, true, false, 34) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 34, $this->source); })()), "iconClass", [], "any", false, false, false, 34)))) {
                            // line 35
                            echo "                        <span style=\"margin-top: 4px;\" class=\"fs-14 fa ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 35, $this->source); })()), "iconClass", [], "any", false, false, false, 35), "html", null, true);
                            echo "\"></span>
                        ";
                        }
                        // line 37
                        echo "
                        ";
                        // line 38
                        $context["labelAttributes"] = twig_get_attribute($this->env, $this->source, $context["child"], "getLabelAttributes", [], "method", false, false, false, 38);
                        // line 39
                        echo "                        
                        ";
                        // line 40
                        $context["labelClasses"] = (( !twig_get_attribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 40)) ? ("text") : ((twig_get_attribute($this->env, $this->source, (isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 40, $this->source); })()), "class", [], "any", false, false, false, 40) . " text")));
                        // line 41
                        echo "                        ";
                        $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 41, $this->source); })()), ["class" => twig_trim_filter((isset($context["labelClasses"]) || array_key_exists("labelClasses", $context) ? $context["labelClasses"] : (function () { throw new RuntimeError('Variable "labelClasses" does not exist.', 41, $this->source); })()))]);
                        // line 42
                        echo "
                        <span";
                        // line 43
                        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 43, $this->source); })()));
                        echo ">";
                        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["child"], "getLabel", [], "method", false, false, false, 43)));
                        echo "</span>

                    </a>

                </li>

            ";
                    }
                    // line 50
                    echo "
        ";
                }
                // line 52
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Menu/profile_inline.html.twig";
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
        return array (  173 => 54,  166 => 52,  162 => 50,  150 => 43,  147 => 42,  144 => 41,  142 => 40,  139 => 39,  137 => 38,  134 => 37,  128 => 35,  126 => 34,  119 => 33,  116 => 32,  113 => 31,  110 => 30,  107 => 29,  104 => 28,  102 => 27,  96 => 25,  93 => 23,  90 => 22,  87 => 20,  84 => 19,  81 => 17,  75 => 15,  73 => 14,  70 => 13,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Menu/profile_inline.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Menu\\profile_inline.html.twig");
    }
}
