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

/* @MauticEmail/SubscribedEvents/Dashboard/Most.hit.email.redirects.html.twig */
class __TwigTemplate_f83968d5ac76059db95d14459fd93223 extends Template
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
        // line 9
        $context["class"] = ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 9, $this->source); })()), "table")) : ("table"));
        // line 10
        $context["shortenLinkText"] = ((array_key_exists("shortenLinkText", $context)) ? (_twig_default_filter((isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 10, $this->source); })()), 30)) : (30));
        // line 11
        $context["showHeaders"] = ["mautic.dashboard.label.url", "mautic.dashboard.label.unique.hit.count", "mautic.dashboard.label.total.hit.count", "mautic.dashboard.label.email.name"];
        // line 17
        $context["showValues"] = ["url", "unique_hits", "hits", "email_name"];
        // line 23
        echo "<table class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 24
        if ( !twig_test_empty((isset($context["headItems"]) || array_key_exists("headItems", $context) ? $context["headItems"] : (function () { throw new RuntimeError('Variable "headItems" does not exist.', 24, $this->source); })()))) {
            // line 25
            echo "        <thead>
            <tr>
            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headItems"]) || array_key_exists("headItems", $context) ? $context["headItems"] : (function () { throw new RuntimeError('Variable "headItems" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["headItem"]) {
                // line 28
                echo "                ";
                if (twig_in_filter($context["headItem"], (isset($context["showHeaders"]) || array_key_exists("showHeaders", $context) ? $context["showHeaders"] : (function () { throw new RuntimeError('Variable "showHeaders" does not exist.', 28, $this->source); })()))) {
                    // line 29
                    echo "                <th>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["headItem"]), "html", null, true);
                    echo "</th>
                ";
                }
                // line 31
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['headItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </tr>
        </thead>
    ";
        }
        // line 35
        echo "    ";
        if ( !twig_test_empty((isset($context["bodyItems"]) || array_key_exists("bodyItems", $context) ? $context["bodyItems"] : (function () { throw new RuntimeError('Variable "bodyItems" does not exist.', 35, $this->source); })()))) {
            // line 36
            echo "        <tbody>
            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bodyItems"]) || array_key_exists("bodyItems", $context) ? $context["bodyItems"] : (function () { throw new RuntimeError('Variable "bodyItems" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["id"] => $context["row"]) {
                // line 38
                echo "                <tr>
                    ";
                // line 39
                if (is_iterable($context["row"])) {
                    // line 40
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["row"]);
                    foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                        // line 41
                        echo "                            ";
                        if (twig_in_filter($context["key"], (isset($context["showValues"]) || array_key_exists("showValues", $context) ? $context["showValues"] : (function () { throw new RuntimeError('Variable "showValues" does not exist.', 41, $this->source); })()))) {
                            // line 42
                            echo "                            <td>
                                ";
                            // line 43
                            if (("email_name" == $context["key"])) {
                                // line 44
                                echo "                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["row"], "email_id", [], "any", false, false, false, 44)]), "html", null, true);
                                echo "\"
                                        title=\"";
                                // line 45
                                echo twig_escape_filter($this->env, $context["item"]);
                                echo "\"
                                        data-toggle=\"ajax\">
                                        ";
                                // line 47
                                echo twig_escape_filter($this->env, twig_slice($this->env, $context["item"], 0, (isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 47, $this->source); })())), "html", null, true);
                                echo "
                                    </a>
                                ";
                            } else {
                                // line 50
                                echo "                                    ";
                                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                                echo "
                                ";
                            }
                            // line 52
                            echo "                            </td>
                            ";
                        }
                        // line 54
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "                    ";
                }
                // line 56
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "        </tbody>
    ";
        }
        // line 60
        echo "</table>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticEmail/SubscribedEvents/Dashboard/Most.hit.email.redirects.html.twig";
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
        return array (  154 => 60,  150 => 58,  143 => 56,  140 => 55,  134 => 54,  130 => 52,  124 => 50,  118 => 47,  113 => 45,  108 => 44,  106 => 43,  103 => 42,  100 => 41,  95 => 40,  93 => 39,  90 => 38,  86 => 37,  83 => 36,  80 => 35,  75 => 32,  69 => 31,  63 => 29,  60 => 28,  56 => 27,  52 => 25,  50 => 24,  45 => 23,  43 => 17,  41 => 11,  39 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmail/SubscribedEvents/Dashboard/Most.hit.email.redirects.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\SubscribedEvents\\Dashboard\\Most.hit.email.redirects.html.twig");
    }
}
