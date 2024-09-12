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

/* @MauticCore/Menu/main.html.twig */
class __TwigTemplate_3a9b63c6e34af64f7bba3bd92f001630 extends Template
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
            if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "isRoot", [], "method", false, false, false, 4)) {
                // line 5
                echo "        <ul class=\"nav mt-10\" data-toggle=\"menu\">
    ";
            } else {
                // line 7
                echo "        ";
                // line 8
                echo "        ";
                $context["ulAttributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "getChildrenAttributes", [], "method", false, false, false, 8);
                // line 9
                echo "        ";
                $context["ulAttributes"] = twig_array_merge((isset($context["ulAttributes"]) || array_key_exists("ulAttributes", $context) ? $context["ulAttributes"] : (function () { throw new RuntimeError('Variable "ulAttributes" does not exist.', 9, $this->source); })()), ((array_key_exists("itemAttributes", $context)) ? ((isset($context["itemAttributes"]) || array_key_exists("itemAttributes", $context) ? $context["itemAttributes"] : (function () { throw new RuntimeError('Variable "itemAttributes" does not exist.', 9, $this->source); })())) : ([])));
                // line 10
                echo "
        <ul";
                // line 11
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["ulAttributes"]) || array_key_exists("ulAttributes", $context) ? $context["ulAttributes"] : (function () { throw new RuntimeError('Variable "ulAttributes" does not exist.', 11, $this->source); })()));
                echo ">
    ";
            }
            // line 13
            echo "
    ";
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()), "getChildren", [], "method", false, false, false, 15));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 16
                echo "
        ";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["child"], "isDisplayed", [], "method", false, false, false, 17)) {
                    // line 18
                    echo "            
            ";
                    // line 19
                    $context["showChildren"] = (((twig_get_attribute($this->env, $this->source, $context["child"], "hasChildren", [], "method", false, false, false, 19) && twig_get_attribute($this->env, $this->source, $context["child"], "getDisplayChildren", [], "method", false, false, false, 19))) ? (true) : (false));
                    // line 20
                    echo "            ";
                    $context["liAttributes"] = twig_get_attribute($this->env, $this->source, $context["child"], "getAttributes", [], "method", false, false, false, 20);
                    // line 21
                    echo "            ";
                    $context["isAncestor"] = twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 21, $this->source); })()), "isAncestor", [$context["child"], twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 21, $this->source); })()), "matchingDepth", [], "array", false, false, false, 21)], "method", false, false, false, 21);
                    // line 22
                    echo "
            ";
                    // line 24
                    echo "            ";
                    $context["liClasses"] = ((twig_get_attribute($this->env, $this->source, ($context["liAttributes"] ?? null), "class", [], "any", true, true, false, 24)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["liAttributes"]) || array_key_exists("liAttributes", $context) ? $context["liAttributes"] : (function () { throw new RuntimeError('Variable "liAttributes" does not exist.', 24, $this->source); })()), "class", [], "any", false, false, false, 24) . " nav-group")) : ("nav-group"));
                    // line 25
                    echo "           
            ";
                    // line 27
                    echo "            ";
                    $context["liAttributes"] = twig_array_merge((isset($context["liAttributes"]) || array_key_exists("liAttributes", $context) ? $context["liAttributes"] : (function () { throw new RuntimeError('Variable "liAttributes" does not exist.', 27, $this->source); })()), $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->buildMenuClasses($context["child"], (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 27, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 27, $this->source); })()), (isset($context["liClasses"]) || array_key_exists("liClasses", $context) ? $context["liClasses"] : (function () { throw new RuntimeError('Variable "liClasses" does not exist.', 27, $this->source); })())));
                    // line 28
                    echo "
            ";
                    // line 30
                    echo "            <li";
                    echo $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["liAttributes"]) || array_key_exists("liAttributes", $context) ? $context["liAttributes"] : (function () { throw new RuntimeError('Variable "liAttributes" does not exist.', 30, $this->source); })()));
                    echo ">

                ";
                    // line 32
                    $context["linkAttributes"] = twig_get_attribute($this->env, $this->source, $context["child"], "getLinkAttributes", [], "method", false, false, false, 32);
                    // line 33
                    echo "                ";
                    $context["extras"] = twig_get_attribute($this->env, $this->source, $context["child"], "getExtras", [], "method", false, false, false, 33);
                    // line 34
                    echo "
                ";
                    // line 36
                    echo "
                ";
                    // line 37
                    if ((isset($context["showChildren"]) || array_key_exists("showChildren", $context) ? $context["showChildren"] : (function () { throw new RuntimeError('Variable "showChildren" does not exist.', 37, $this->source); })())) {
                        // line 38
                        echo "                    ";
                        // line 39
                        echo "                    <a href=\"javascript:void(0);\" data-target=\"#";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 39, $this->source); })()), "id", [], "array", false, false, false, 39), "html", null, true);
                        echo "_child\" data-toggle=\"submenu\" data-parent=\".nav\" ";
                        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 39, $this->source); })()));
                        echo "\">
                        <span class=\"arrow pull-right text-right\"></span>
                ";
                    } else {
                        // line 42
                        echo "                    ";
                        // line 43
                        echo "                    ";
                        $context["url"] = twig_get_attribute($this->env, $this->source, $context["child"], "getUri", [], "method", false, false, false, 43);
                        // line 44
                        echo "                    ";
                        $context["url"] = ((twig_test_empty((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 44, $this->source); })()))) ? ("javascript:void(0);") : ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 44, $this->source); })())));
                        // line 45
                        echo "                    ";
                        if (( !twig_get_attribute($this->env, $this->source, ($context["linkAttributes"] ?? null), "target", [], "any", true, true, false, 45) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 45, $this->source); })()), "target", [], "any", false, false, false, 45)))) {
                            // line 46
                            echo "                        ";
                            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 46, $this->source); })()), ["data-toggle" => "ajax"]);
                            // line 47
                            echo "                    ";
                        }
                        // line 48
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 48, $this->source); })()), "html", null, true);
                        echo "\"";
                        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 48, $this->source); })()));
                        echo ">
                ";
                    }
                    // line 50
                    echo "
                ";
                    // line 51
                    if ((twig_get_attribute($this->env, $this->source, ($context["extras"] ?? null), "iconClass", [], "any", true, true, false, 51) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 51, $this->source); })()), "iconClass", [], "any", false, false, false, 51)))) {
                        // line 52
                        echo "                    <span class=\"icon pull-left fa ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 52, $this->source); })()), "iconClass", [], "any", false, false, false, 52), "html", null, true);
                        echo "\"></span>
                ";
                    }
                    // line 54
                    echo "
                    ";
                    // line 55
                    $context["labelAttributes"] = twig_get_attribute($this->env, $this->source, $context["child"], "getLabelAttributes", [], "method", false, false, false, 55);
                    // line 56
                    echo "                    ";
                    $context["labelClasses"] = (( !twig_get_attribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 56)) ? ("nav-item-name") : ((twig_get_attribute($this->env, $this->source, (isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 56, $this->source); })()), "class", [], "any", false, false, false, 56) . " nav-item-name")));
                    // line 57
                    echo "                    ";
                    $context["labelPull"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 57, $this->source); })()), "depth", [], "any", false, false, false, 57))) ? (" pull-left") : (""));
                    // line 58
                    echo "
                    ";
                    // line 59
                    $context["labelClasses"] = (((isset($context["labelClasses"]) || array_key_exists("labelClasses", $context) ? $context["labelClasses"] : (function () { throw new RuntimeError('Variable "labelClasses" does not exist.', 59, $this->source); })()) . " text") . (isset($context["labelPull"]) || array_key_exists("labelPull", $context) ? $context["labelPull"] : (function () { throw new RuntimeError('Variable "labelPull" does not exist.', 59, $this->source); })()));
                    // line 60
                    echo "                    ";
                    $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 60, $this->source); })()), ["class" => twig_trim_filter((isset($context["labelClasses"]) || array_key_exists("labelClasses", $context) ? $context["labelClasses"] : (function () { throw new RuntimeError('Variable "labelClasses" does not exist.', 60, $this->source); })()))]);
                    // line 61
                    echo "                    
                        <span";
                    // line 62
                    echo $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 62, $this->source); })()));
                    echo ">";
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["child"], "getLabel", [], "method", false, false, false, 62)));
                    echo "</span>

                    </a>
                ";
                    // line 66
                    echo "                
                ";
                    // line 68
                    echo "                ";
                    if ((isset($context["showChildren"]) || array_key_exists("showChildren", $context) ? $context["showChildren"] : (function () { throw new RuntimeError('Variable "showChildren" does not exist.', 68, $this->source); })())) {
                        // line 69
                        echo "                    ";
                        $context["optionsDepth"] = (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", [], "array", true, true, false, 69) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 69, $this->source); })()), "depth", [], "array", false, false, false, 69)))) ? ( - -twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 69, $this->source); })()), "depth", [], "array", false, false, false, 69)) : (null));
                        // line 70
                        echo "                    ";
                        $context["optionsMatchingDepth"] = (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "matchingDepth", [], "array", true, true, false, 70) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 70, $this->source); })()), "matchingDepth", [], "array", false, false, false, 70)))) ? ( - -twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 70, $this->source); })()), "matchingDepth", [], "array", false, false, false, 70)) : (null));
                        // line 71
                        echo "                    ";
                        $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 71, $this->source); })()), ["depth" =>                         // line 72
(isset($context["optionsDepth"]) || array_key_exists("optionsDepth", $context) ? $context["optionsDepth"] : (function () { throw new RuntimeError('Variable "optionsDepth" does not exist.', 72, $this->source); })()), "matchingDepth" =>                         // line 73
(isset($context["optionsMatchingDepth"]) || array_key_exists("optionsMatchingDepth", $context) ? $context["optionsMatchingDepth"] : (function () { throw new RuntimeError('Variable "optionsMatchingDepth" does not exist.', 73, $this->source); })())]);
                        // line 75
                        echo "
                    ";
                        // line 76
                        $context["levelClass"] = (((isset($context["isAncestor"]) || array_key_exists("isAncestor", $context) ? $context["isAncestor"] : (function () { throw new RuntimeError('Variable "isAncestor" does not exist.', 76, $this->source); })())) ? ("nav-submenu collapse in") : ("nav-submenu collapse"));
                        // line 77
                        echo "                    
                    ";
                        // line 79
                        echo "
                    ";
                        // line 80
                        echo twig_include($this->env, $context, "@MauticCore/Menu/main.html.twig", ["item" =>                         // line 81
$context["child"], "itemAttributes" => ["class" =>                         // line 83
(isset($context["levelClass"]) || array_key_exists("levelClass", $context) ? $context["levelClass"] : (function () { throw new RuntimeError('Variable "levelClass" does not exist.', 83, $this->source); })()), "id" => (twig_get_attribute($this->env, $this->source,                         // line 84
(isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 84, $this->source); })()), "id", [], "array", false, false, false, 84) . "_child")], "options" =>                         // line 86
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 86, $this->source); })()), "matcher" =>                         // line 87
(isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 87, $this->source); })())]);
                        // line 88
                        echo "
                
                ";
                    }
                    // line 91
                    echo "
                ";
                    // line 93
                    echo "                
            ";
                    // line 95
                    echo "            </li>

        ";
                }
                // line 98
                echo "
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "    ";
            // line 101
            echo "
    ";
            // line 103
            echo "    </ul>
    
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Menu/main.html.twig";
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
        return array (  284 => 103,  281 => 101,  279 => 100,  264 => 98,  259 => 95,  256 => 93,  253 => 91,  248 => 88,  246 => 87,  245 => 86,  244 => 84,  243 => 83,  242 => 81,  241 => 80,  238 => 79,  235 => 77,  233 => 76,  230 => 75,  228 => 73,  227 => 72,  225 => 71,  222 => 70,  219 => 69,  216 => 68,  213 => 66,  205 => 62,  202 => 61,  199 => 60,  197 => 59,  194 => 58,  191 => 57,  188 => 56,  186 => 55,  183 => 54,  177 => 52,  175 => 51,  172 => 50,  164 => 48,  161 => 47,  158 => 46,  155 => 45,  152 => 44,  149 => 43,  147 => 42,  138 => 39,  136 => 38,  134 => 37,  131 => 36,  128 => 34,  125 => 33,  123 => 32,  117 => 30,  114 => 28,  111 => 27,  108 => 25,  105 => 24,  102 => 22,  99 => 21,  96 => 20,  94 => 19,  91 => 18,  89 => 17,  86 => 16,  68 => 15,  65 => 13,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  49 => 7,  45 => 5,  42 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Menu/main.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Menu\\main.html.twig");
    }
}
