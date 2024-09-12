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

/* @Marketplace/Package/list.html.twig */
class __TwigTemplate_5e306d9e4fbf207c3e0d5716e9e9858a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
            'listResults' => [$this, 'block_listResults'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@Marketplace/Package/list.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()) == "index")) ? (true) : (false));
        // line 2
        $context["tmpl"] = "list";
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Package";
    }

    // line 6
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.title"));
    }

    // line 7
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["customButtons" => [["attr" => ["class" => "btn btn-default btn-nospin", "data-toggle" => "ajax", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_CLEAR_CACHE"))], "iconClass" => "ri-refresh-line", "btnText" => "marketplace.clear.cache", "tooltip" => "marketplace.clear.cache.tooltip"]]]);
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "        ";
            if ((isset($context["isComposerEnabled"]) || array_key_exists("isComposerEnabled", $context) ? $context["isComposerEnabled"] : (function () { throw new RuntimeError('Variable "isComposerEnabled" does not exist.', 28, $this->source); })())) {
                // line 29
                echo "            <div class=\"alert alert-info\" role=\"alert\">
                ";
                // line 30
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.beta.warning", [], "messages");
                // line 31
                echo "            </div>
        ";
            } else {
                // line 33
                echo "            <div class=\"alert alert-warning\" role=\"alert\">
                ";
                // line 34
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.composer.required", [], "messages");
                // line 35
                echo "            </div>
        ";
            }
            // line 37
            echo "        <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">";
            // line 38
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 39
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 39, $this->source); })()), "action" =>             // line 40
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 40, $this->source); })())]);
            // line 42
            echo "<div class=\"page-list\">
                ";
            // line 43
            $this->displayBlock("listResults", $context, $blocks);
            echo "
            </div>
        </div>
    ";
        } else {
            // line 47
            echo "        ";
            $this->displayBlock("listResults", $context, $blocks);
            echo "
    ";
        }
    }

    // line 51
    public function block_listResults($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        if (twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 52, $this->source); })()))) {
            // line 53
            echo "        <div class=\"table-responsive\">
        <table class=\"table table-hover\" id=\"marketplace-packages-table\">
            <thead>
            <tr>";
            // line 57
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#packages-table", "langVar" => "marketplace.package", "routeBase" => "marketplace"]);
            // line 67
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["text" => "mautic.core.name"]);
            // line 73
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["text" => "marketplace.vendor"]);
            // line 79
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["text" => "marketplace.downloads"]);
            // line 85
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["text" => "marketplace.favers"]);
            // line 91
            echo "</tr>
            </thead>
            <tbody>
            ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 94, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 95
                echo "                <tr>
                    <td>";
                // line 97
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 100
$context["item"], "customButtons" => []]);
                // line 104
                echo "</td>
                    <td class=\"package-name\">
                        <div>
                            <a data-toggle=\"ajax\" href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_DETAIL"), ["vendor" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 110
$context["item"], "getVendorName", [], "method", false, false, false, 110)), "package" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 111
$context["item"], "getPackageName", [], "method", false, false, false, 111))]), "html", null, true);
                // line 113
                echo "\">
                                ";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getHumanPackageName", [], "method", false, false, false, 114));
                echo "
                            </a>
                        </div>
                        ";
                // line 117
                if (twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 117)) {
                    // line 118
                    echo "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 119
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 119));
                    echo "</small>
                            </div>
                        ";
                }
                // line 122
                echo "                    </td>
                    <td class=\"vendor-name\">";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getVendorName", [], "method", false, false, false, 123));
                echo "</td>
                    <td class=\"downloads\">";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "downloads", [], "any", false, false, false, 124));
                echo "</td>
                    <td class=\"favers\">";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "favers", [], "any", false, false, false, 125));
                echo "</td>
                </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">";
            // line 133
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 136
(isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 136, $this->source); })()), "page" =>             // line 137
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 137, $this->source); })()), "limit" =>             // line 138
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 138, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_LIST")), "sessionVar" => "marketplace.package", "routeBase" => twig_constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_LIST")]);
            // line 144
            echo "</div>
    ";
        } else {
            // line 146
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["message" => "marketplace.noresults.tip"]);
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Marketplace/Package/list.html.twig";
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
        return array (  248 => 146,  244 => 144,  242 => 138,  241 => 137,  240 => 136,  239 => 133,  234 => 128,  217 => 125,  213 => 124,  209 => 123,  206 => 122,  200 => 119,  197 => 118,  195 => 117,  189 => 114,  186 => 113,  184 => 111,  183 => 110,  182 => 107,  177 => 104,  175 => 100,  174 => 97,  171 => 95,  154 => 94,  149 => 91,  147 => 85,  145 => 79,  143 => 73,  141 => 67,  139 => 57,  134 => 53,  132 => 52,  128 => 51,  120 => 47,  113 => 43,  110 => 42,  108 => 40,  107 => 39,  106 => 38,  104 => 37,  100 => 35,  98 => 34,  95 => 33,  91 => 31,  89 => 30,  86 => 29,  83 => 28,  80 => 27,  76 => 26,  72 => 8,  68 => 7,  61 => 6,  54 => 5,  50 => 4,  48 => 2,  46 => 1,  39 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Marketplace/Package/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MarketplaceBundle\\Resources\\views\\Package\\list.html.twig");
    }
}
