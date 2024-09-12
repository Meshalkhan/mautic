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

/* @MauticUser/User/list.html.twig */
class __TwigTemplate_c7e6878770dbc9b7ba70cf3c80a6865d extends Template
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
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticUser/User/list.html.twig", 4);
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
        echo "user
";
    }

    // line 7
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.users", [], "messages");
    }

    // line 10
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 13, $this->source); })()), "create", [], "array", false, false, false, 13)], "routeBase" => "user", "langVar" => "user.user"]);
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "\t";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 21, $this->source); })())) {
            // line 22
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 23
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 23, $this->source); })()), "searchHelp" => "mautic.user.user.help.searchcommands", "action" =>             // line 25
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 25, $this->source); })())]);
            // line 27
            echo "<div class=\"page-list\">
\t\t\t";
            // line 28
            $this->displayBlock("listResults", $context, $blocks);
            echo "
\t\t</div>
\t";
        } else {
            // line 31
            echo "\t\t";
            $this->displayBlock("listResults", $context, $blocks);
            echo "
\t";
        }
    }

    // line 35
    public function block_listResults($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "\t<div class=\"table-responsive\">
\t\t<table class=\"table table-hover user-list\" id=\"userTable\">
\t\t\t<thead>
\t\t\t\t<tr>";
        // line 40
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#userTable", "langVar" => "user.user", "routeBase" => "user", "templateButtons" => ["delete" => twig_get_attribute($this->env, $this->source,         // line 46
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 46, $this->source); })()), "delete", [], "array", false, false, false, 46)]]);
        // line 50
        echo "<th class=\"visible-md visible-lg col-user-avatar\"></th>";
        // line 51
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "user", "orderBy" => "u.lastName, u.firstName, u.username", "text" => "mautic.core.name", "class" => "col-user-name", "default" => true]);
        // line 58
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "user", "orderBy" => "u.username", "text" => "mautic.core.username", "class" => "col-user-username"]);
        // line 64
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "user", "orderBy" => "u.email", "text" => "mautic.core.type.email", "class" => "visible-md visible-lg col-user-email"]);
        // line 71
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "user", "orderBy" => "r.name", "text" => "mautic.user.role", "class" => "visible-md visible-lg col-user-role"]);
        // line 78
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "user", "orderBy" => "r.name", "text" => "mautic.user.lastlogin", "class" => "visible-md visible-lg col-user-lastlogin"]);
        // line 85
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "user", "orderBy" => "u.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-user-id"]);
        // line 92
        echo "</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 95, $this->source); })()));
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
            // line 96
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 98
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>             // line 99
$context["item"], "templateButtons" => ["edit" => twig_get_attribute($this->env, $this->source,             // line 101
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 101, $this->source); })()), "edit", [], "array", false, false, false, 101), "delete" => twig_get_attribute($this->env, $this->source,             // line 102
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 102, $this->source); })()), "delete", [], "array", false, false, false, 102)], "routeBase" => "user", "langVar" => "user.user", "pull" => "left"]);
            // line 108
            echo "</td>
\t\t\t\t\t\t<td class=\"visible-md visible-lg\">
\t\t\t\t\t\t\t<img class=\"img img-responsive img-thumbnail w-44\" src=\"";
            // line 110
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\GravatarExtension']->getImage(twig_get_attribute($this->env, $this->source, $context["item"], "getEmail", [], "method", false, false, false, 110), "50");
            echo "\"/>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
            // line 114
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 114) != (isset($context["currentUserId"]) || array_key_exists("currentUserId", $context) ? $context["currentUserId"] : (function () { throw new RuntimeError('Variable "currentUserId" does not exist.', 114, $this->source); })()))) {
                // line 115
                echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 116
$context["item"], "model" => "user"]);
            }
            // line 120
            echo "\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 120, $this->source); })()), "edit", [], "array", false, false, false, 120)) {
                // line 121
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 121)]), "html", null, true);
                echo "\" data-toggle=\"ajax\">
\t\t\t\t\t\t\t\t\t\t";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getName", [true], "method", false, false, false, 122), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            } else {
                // line 125
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getName", [true], "method", false, false, false, 125), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 127
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"small\">
\t\t\t\t\t\t\t\t<em>";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getPosition", [], "method", false, false, false, 129), "html", null, true);
            echo "</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getUsername", [], "method", false, false, false, 132), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"visible-md visible-lg\">
\t\t\t\t\t\t\t<a href=\"mailto: ";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getEmail", [], "method", false, false, false, 134), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getEmail", [], "method", false, false, false, 134), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"visible-md visible-lg\">";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getRole", [], "method", false, false, false, 136), "getName", [], "method", false, false, false, 136), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"visible-md visible-lg\">";
            // line 137
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(twig_get_attribute($this->env, $this->source, $context["item"], "getLastLogin", [], "method", false, false, false, 137), "local", "Y-m-d H:i:s", true);
            echo "</td>
\t\t\t\t\t\t<td class=\"visible-md visible-lg\">";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 138), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
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
        // line 141
        echo "\t\t\t</tbody>
\t\t</table>
\t\t<div class=\"panel-footer\">";
        // line 144
        echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => twig_length_filter($this->env,         // line 145
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 145, $this->source); })())), "page" =>         // line 146
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 146, $this->source); })()), "limit" =>         // line 147
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 147, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_index"), "sessionVar" => "user"]);
        // line 151
        echo "</div>
\t</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticUser/User/list.html.twig";
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
        return array (  257 => 151,  255 => 147,  254 => 146,  253 => 145,  252 => 144,  248 => 141,  231 => 138,  227 => 137,  223 => 136,  216 => 134,  211 => 132,  205 => 129,  201 => 127,  195 => 125,  189 => 122,  184 => 121,  181 => 120,  178 => 116,  177 => 115,  175 => 114,  168 => 110,  164 => 108,  162 => 102,  161 => 101,  160 => 99,  159 => 98,  156 => 96,  139 => 95,  134 => 92,  132 => 85,  130 => 78,  128 => 71,  126 => 64,  124 => 58,  122 => 51,  120 => 50,  118 => 46,  117 => 40,  112 => 36,  108 => 35,  100 => 31,  94 => 28,  91 => 27,  89 => 25,  88 => 23,  87 => 22,  84 => 21,  80 => 20,  76 => 13,  75 => 11,  71 => 10,  66 => 8,  62 => 7,  54 => 5,  50 => 4,  48 => 2,  46 => 1,  39 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticUser/User/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Resources\\views\\User\\list.html.twig");
    }
}
