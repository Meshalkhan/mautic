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

/* @MauticCore/Helper/table.html.twig */
class __TwigTemplate_b8ad2bd1aac28f091bb4f3e1981782e9 extends Template
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
        $context["class"] = ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 1, $this->source); })()), "table")) : ("table"));
        // line 2
        $context["shortenLinkText"] = ((array_key_exists("shortenLinkText", $context)) ? (_twig_default_filter((isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 2, $this->source); })()), 30)) : (30));
        // line 3
        echo "<table class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 4
        if ((array_key_exists("headItems", $context) && is_iterable((isset($context["headItems"]) || array_key_exists("headItems", $context) ? $context["headItems"] : (function () { throw new RuntimeError('Variable "headItems" does not exist.', 4, $this->source); })())))) {
            // line 5
            echo "        <thead>
            <tr>
                ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headItems"]) || array_key_exists("headItems", $context) ? $context["headItems"] : (function () { throw new RuntimeError('Variable "headItems" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["headItem"]) {
                // line 8
                echo "                    <th>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["headItem"]), "html", null, true);
                echo "</th>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['headItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "            </tr>
        </thead>
    ";
        }
        // line 13
        echo "    ";
        if ((array_key_exists("bodyItems", $context) && is_iterable((isset($context["bodyItems"]) || array_key_exists("bodyItems", $context) ? $context["bodyItems"] : (function () { throw new RuntimeError('Variable "bodyItems" does not exist.', 13, $this->source); })())))) {
            // line 14
            echo "        <tbody>
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bodyItems"]) || array_key_exists("bodyItems", $context) ? $context["bodyItems"] : (function () { throw new RuntimeError('Variable "bodyItems" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 16
                echo "                <tr>
                    ";
                // line 17
                if (is_iterable($context["row"])) {
                    // line 18
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["row"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 19
                        echo "                            <td>
                                ";
                        // line 20
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", true, true, false, 20) && ("link" == twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 20)))) {
                            // line 21
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 21), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 21), "html", null, true);
                            echo "\" ";
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "external", [], "any", true, true, false, 21)) {
                                echo "target=\"_blank\"";
                            } else {
                                echo "data-toggle=\"ajax\"";
                            }
                            echo ">
                                        ";
                            // line 22
                            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 22), 0, (isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 22, $this->source); })())), "html", null, true);
                            echo "
                                    </a>
                                ";
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 24
$context["item"], "value", [], "any", true, true, false, 24)) {
                            // line 25
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 25), "html", null, true);
                            echo "
                                ";
                        } else {
                            // line 27
                            echo "                                    ";
                            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                            echo "
                                ";
                        }
                        // line 29
                        echo "                            </td>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "                    ";
                }
                // line 32
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        </tbody>
    ";
        }
        // line 36
        echo "</table>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/table.html.twig";
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
        return array (  148 => 36,  144 => 34,  137 => 32,  134 => 31,  127 => 29,  121 => 27,  115 => 25,  113 => 24,  108 => 22,  95 => 21,  93 => 20,  90 => 19,  85 => 18,  83 => 17,  80 => 16,  76 => 15,  73 => 14,  70 => 13,  65 => 10,  56 => 8,  52 => 7,  48 => 5,  46 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/table.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\table.html.twig");
    }
}
