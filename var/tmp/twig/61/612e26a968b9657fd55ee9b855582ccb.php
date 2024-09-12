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

/* @MauticApi/Client/list.html.twig */
class __TwigTemplate_12a526df6567bed236006030072d6be9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'headerTitle' => [$this, 'block_headerTitle'],
            'mauticContent' => [$this, 'block_mauticContent'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
            'listResults' => [$this, 'block_listResults'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticApi/Client/list.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 2, $this->source); })()) == "index")) ? (true) : (false));
        // line 3
        $context["tmpl"] = "list";
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.api.client.header.index", [], "messages");
    }

    // line 6
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "client";
    }

    // line 7
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 11, $this->source); })()), "create", [], "any", false, false, false, 11)], "routeBase" => "client", "langVar" => "api.client"]);
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "        <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">";
            // line 22
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 23
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 23, $this->source); })()), "searchHelp" => "mautic.api.client.help.searchcommands", "filters" =>             // line 25
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })())]);
            // line 27
            echo "<div class=\"page-list\">
                ";
            // line 28
            $this->displayBlock("listResults", $context, $blocks);
            echo "
            </div>
        </div>
    ";
        } else {
            // line 32
            echo "\t\t";
            $this->displayBlock("listResults", $context, $blocks);
            echo "
\t";
        }
    }

    // line 36
    public function block_listResults($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "<div class=\"table-responsive panel-collapse pull out page-list\">
    <table class=\"table table-hover client-list\">
        <thead>
        <tr>";
        // line 41
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => ".client-list", "action" =>         // line 46
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 46, $this->source); })()), "routeBase" => "client", "templateButtons" => []]);
        // line 51
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "client", "orderBy" => "c.name", "text" => "mautic.core.name", "default" => "true", "class" => "col-client-name"]);
        // line 61
        echo "<th class=\"visible-md visible-lg col-client-publicid\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.api.client.thead.publicid"), "html", null, true);
        echo "</th>
            <th class=\"visible-md visible-lg col-client-secret\">";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.api.client.thead.secret"), "html", null, true);
        echo "</th>";
        // line 63
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "client", "orderBy" => "c.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-client-id"]);
        // line 72
        echo "</tr>
        </thead>
        <tbody>
        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 75, $this->source); })()));
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
            // line 76
            echo "            <tr>
                <td>";
            // line 78
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>             // line 81
$context["item"], "templateButtons" => ["edit" => twig_get_attribute($this->env, $this->source,             // line 83
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 83, $this->source); })()), "edit", [], "any", false, false, false, 83), "delete" => twig_get_attribute($this->env, $this->source,             // line 84
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 84, $this->source); })()), "delete", [], "any", false, false, false, 84)], "routeBase" => "client", "langVar" => "api.client", "pull" => "left"]);
            // line 91
            echo "</td>
                <td>
                    ";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 93), "html", null, true);
            echo "
                </td>
                <td class=\"visible-md visible-lg\">
                    <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\" readonly value=\"";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getPublicId", [], "method", false, false, false, 96), "html", null, true);
            echo "\"/>
                </td>
                <td class=\"visible-md visible-lg\">
                    <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\" readonly value=\"";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getSecret", [], "method", false, false, false, 99), "html", null, true);
            echo "\"/>
                </td>
                <td class=\"visible-md visible-lg\">";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 101), "html", null, true);
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
        // line 104
        echo "        </tbody>
    </table>
    <div class=\"panel-footer\">";
        // line 107
        echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => twig_length_filter($this->env,         // line 108
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 108, $this->source); })())), "page" =>         // line 109
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 109, $this->source); })()), "limit" =>         // line 110
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 110, $this->source); })()), "menuLinkId" => "mautic_client_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_client_index"), "sessionVar" => "client", "tmpl" =>         // line 114
(isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 114, $this->source); })())]);
        // line 116
        echo "</div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticApi/Client/list.html.twig";
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
        return array (  210 => 116,  208 => 114,  207 => 110,  206 => 109,  205 => 108,  204 => 107,  200 => 104,  183 => 101,  178 => 99,  172 => 96,  166 => 93,  162 => 91,  160 => 84,  159 => 83,  158 => 81,  157 => 78,  154 => 76,  137 => 75,  132 => 72,  130 => 63,  127 => 62,  122 => 61,  120 => 51,  118 => 46,  117 => 41,  112 => 37,  108 => 36,  100 => 32,  93 => 28,  90 => 27,  88 => 25,  87 => 23,  86 => 22,  84 => 21,  81 => 20,  77 => 19,  73 => 11,  72 => 8,  68 => 7,  61 => 6,  54 => 5,  50 => 4,  48 => 3,  46 => 2,  39 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticApi/Client/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Resources\\views\\Client\\list.html.twig");
    }
}
