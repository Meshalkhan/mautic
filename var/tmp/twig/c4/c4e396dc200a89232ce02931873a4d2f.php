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

/* @MauticAsset/Remote/list.html.twig */
class __TwigTemplate_bb42ea4e045239d440c2c49fed44e43c extends Template
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
        if (twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <div class=\"panel panel-primary mb-0\">
        <div class=\"panel-body\">
            <input type='text' class='remote-file-search form-control mb-lg' autocomplete='off' placeholder=\"";
            // line 4
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.search.placeholder", [], "messages");
            echo "\" />

            <div class=\"list-group remote-file-list\">
                ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "dirs", [], "any", true, true, false, 7)) {
                // line 8
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 8, $this->source); })()), "dirs", [], "any", false, false, false, 8));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 9
                    echo "                        <a class=\"list-group-item\" href=\"javascript: void(0);\" onclick=\"Mautic.updateRemoteBrowser('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 9, $this->source); })()), "getName", [], "method", false, false, false, 9), "html", null, true);
                    echo "', '/";
                    echo twig_escape_filter($this->env, twig_trim_filter($context["item"], "/", "right"), "html", null, true);
                    echo "');\">
                            ";
                    // line 10
                    echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                    echo "
                        </a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 13, $this->source); })()), "keys", [], "any", false, false, false, 13));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 14
                    echo "                        <a class=\"list-group-item\" href=\"javascript: void(0);\" onclick=\"Mautic.selectRemoteFile('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 14, $this->source); })()), "getPublicUrl", [$context["item"]], "method", false, false, false, 14), "html", null, true);
                    echo "');\">
                            ";
                    // line 15
                    echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                    echo "
                        </a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "                ";
            } else {
                // line 19
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 19, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 20
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["connector"]) || array_key_exists("connector", $context) ? $context["connector"] : (function () { throw new RuntimeError('Variable "connector" does not exist.', 20, $this->source); })()), "getAdapter", [], "method", false, false, false, 20), "isDirectory", [$context["item"]], "method", false, false, false, 20)) {
                        // line 21
                        echo "                            <a class=\"list-group-item\" href=\"javascript: void(0);\" onclick=\"Mautic.updateRemoteBrowser('";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 21, $this->source); })()), "getName", [], "method", false, false, false, 21), "html", null, true);
                        echo "', '/";
                        echo twig_escape_filter($this->env, twig_trim_filter($context["item"], "/", "right"), "html", null, true);
                        echo "');\">
                                ";
                        // line 22
                        echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                        echo "
                            </a>
                        ";
                    } else {
                        // line 25
                        echo "                            <a class=\"list-group-item\" href=\"javascript: void(0);\" onclick=\"Mautic.selectRemoteFile('";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 25, $this->source); })()), "getPublicUrl", [$context["item"]], "method", false, false, false, 25), "html", null, true);
                        echo "');\">
                                ";
                        // line 26
                        echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                        echo "
                            </a>
                        ";
                    }
                    // line 29
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "                ";
            }
            // line 31
            echo "            </div>
        </div>
    </div>
";
        } else {
            // line 35
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["message" => "mautic.asset.remote.no_results"]);
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticAsset/Remote/list.html.twig";
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
        return array (  141 => 35,  135 => 31,  132 => 30,  126 => 29,  120 => 26,  115 => 25,  109 => 22,  102 => 21,  99 => 20,  94 => 19,  91 => 18,  82 => 15,  77 => 14,  72 => 13,  63 => 10,  56 => 9,  51 => 8,  49 => 7,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticAsset/Remote/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Resources\\views\\Remote\\list.html.twig");
    }
}
