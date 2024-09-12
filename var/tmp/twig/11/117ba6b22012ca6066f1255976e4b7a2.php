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

/* @MauticUser/Role/list.html.twig */
class __TwigTemplate_86613f76e9ddbe12fb52f5acca64786c extends Template
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
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticUser/Role/list.html.twig", 4);
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
        echo "role";
    }

    // line 6
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.roles", [], "messages");
    }

    // line 7
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 11, $this->source); })()), "create", [], "array", false, false, false, 11)], "routeBase" => "role", "langVar" => "user.role"]);
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 20, $this->source); })())) {
            // line 21
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 23
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 23, $this->source); })()), "searchHelp" => "mautic.user.role.help.searchcommands", "action" =>             // line 25
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 25, $this->source); })())]);
            // line 28
            echo "<div class=\"page-list\">
            ";
            // line 29
            $this->displayBlock("listResults", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 32
            echo "        ";
            $this->displayBlock("listResults", $context, $blocks);
            echo "
    ";
        }
    }

    // line 36
    public function block_listResults($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "<div class=\"table-responsive\">
    <table class=\"table table-hover role-list\" id=\"roleTable\">
        <thead>
        <tr>";
        // line 41
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#roleTable", "langVar" => "user.role", "routeBase" => "role", "templateButtons" => ["delete" => twig_get_attribute($this->env, $this->source,         // line 48
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 48, $this->source); })()), "delete", [], "array", false, false, false, 48)]]);
        // line 53
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "role", "orderBy" => "r.name", "text" => "mautic.core.name", "class" => "col-role-name", "default" => true]);
        // line 64
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "role", "orderBy" => "r.description", "text" => "mautic.core.description", "class" => "visible-md visible-lg col-role-desc"]);
        // line 73
        echo "<th class=\"visible-md visible-lg col-rolelist-usercount\">
                ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.role.list.thead.usercount", [], "messages");
        // line 75
        echo "            </th>";
        // line 76
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "role", "orderBy" => "r.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-role-id"]);
        // line 84
        echo "</tr>
        </thead>
        <tbody>
        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 87, $this->source); })()));
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
            // line 88
            echo "            <tr>
                <td>";
            // line 90
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>             // line 92
$context["item"], "templateButtons" => ["edit" => twig_get_attribute($this->env, $this->source,             // line 94
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 94, $this->source); })()), "edit", [], "array", false, false, false, 94), "delete" => twig_get_attribute($this->env, $this->source,             // line 95
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 95, $this->source); })()), "delete", [], "array", false, false, false, 95)], "routeBase" => "role", "langVar" => "user.role", "pull" => "left"]);
            // line 101
            echo "</td>
                <td>
                    ";
            // line 103
            if (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 103, $this->source); })()), "edit", [], "array", false, false, false, 103)) {
                // line 104
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_role_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source,                 // line 105
$context["item"], "getId", [], "method", false, false, false, 105)]), "html", null, true);
                echo "\" data-toggle=\"ajax\">
                            ";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 106), "html", null, true);
                echo "
                        </a>
                    ";
            } else {
                // line 109
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 109), "html", null, true);
                echo "
                    
                    ";
            }
            // line 112
            echo "                </td>
                <td class=\"visible-md visible-lg\">
                    ";
            // line 114
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 114));
            echo "
                </td>
                <td class=\"visible-md visible-lg\">
                    <a class=\"label label-primary\" href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_index", ["search" => ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.searchcommand.role") . ":&quot;") . twig_get_attribute($this->env, $this->source,             // line 118
$context["item"], "getName", [], "method", false, false, false, 118)) . "&quot;")]), "html", null, true);
            echo "\" data-toggle=\"ajax\"";
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["userCounts"]) || array_key_exists("userCounts", $context) ? $context["userCounts"] : (function () { throw new RuntimeError('Variable "userCounts" does not exist.', 118, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 118), [], "array", false, false, false, 118) == 0)) ? ("disabled=disabled") : (""));
            echo ">
                        ";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.role.list.viewusers_count", ["%count%" => twig_get_attribute($this->env, $this->source,             // line 120
(isset($context["userCounts"]) || array_key_exists("userCounts", $context) ? $context["userCounts"] : (function () { throw new RuntimeError('Variable "userCounts" does not exist.', 120, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 120), [], "array", false, false, false, 120)]), "html", null, true);
            // line 121
            echo "
                    </a>
                </td>
                <td class=\"visible-md visible-lg\">
                    ";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 125), "html", null, true);
            echo "
                </td>
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
        // line 129
        echo "        </tbody>
    </table>
</div>
<div class=\"panel-footer\">";
        // line 133
        echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => twig_length_filter($this->env,         // line 135
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 135, $this->source); })())), "page" =>         // line 136
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 136, $this->source); })()), "limit" =>         // line 137
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 137, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_role_index"), "sessionVar" => "role"]);
        // line 142
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticUser/Role/list.html.twig";
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
        return array (  239 => 142,  237 => 137,  236 => 136,  235 => 135,  234 => 133,  229 => 129,  211 => 125,  205 => 121,  203 => 120,  202 => 119,  196 => 118,  195 => 117,  189 => 114,  185 => 112,  178 => 109,  172 => 106,  168 => 105,  166 => 104,  164 => 103,  160 => 101,  158 => 95,  157 => 94,  156 => 92,  155 => 90,  152 => 88,  135 => 87,  130 => 84,  128 => 76,  126 => 75,  124 => 74,  121 => 73,  119 => 64,  117 => 53,  115 => 48,  114 => 41,  109 => 37,  105 => 36,  97 => 32,  91 => 29,  88 => 28,  86 => 25,  85 => 23,  84 => 21,  81 => 20,  77 => 19,  73 => 11,  72 => 8,  68 => 7,  61 => 6,  54 => 5,  50 => 4,  48 => 2,  46 => 1,  39 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticUser/Role/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Resources\\views\\Role\\list.html.twig");
    }
}
