<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @MauticUser/User/list.html.twig */
class __TwigTemplate_2d04ec19839740f15b01441845a7f493 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

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

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticUser/User/list.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()) == "index")) ? (true) : (false));
        // line 2
        $context["tmpl"] = "list";
        // line 4
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "user
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "\t";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.users", [], "messages");
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,         // line 13
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 13, $this->source); })()), "create", [], "array", false, false, false, 13)], "routeBase" => "user", "langVar" => "user.user"]);
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "\t";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 21, $this->source); })())) {
            // line 22
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 23
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 23, $this->source); })()), "searchHelp" => "mautic.user.user.help.searchcommands", "action" =>             // line 25
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 25, $this->source); })())]);
            // line 27
            yield "<div class=\"page-list\">
\t\t\t";
            // line 28
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
\t\t</div>
\t";
        } else {
            // line 31
            yield "\t\t";
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
\t";
        }
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_listResults(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield "\t<div class=\"table-responsive\">
\t\t<table class=\"table table-hover user-list\" id=\"userTable\">
\t\t\t<thead>
\t\t\t\t<tr>";
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#userTable", "langVar" => "user.user", "routeBase" => "user", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,         // line 46
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 46, $this->source); })()), "delete", [], "array", false, false, false, 46)]]);
        // line 50
        yield "<th class=\"visible-md visible-lg col-user-avatar\"></th>";
        // line 51
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "user", "orderBy" => "u.lastName, u.firstName, u.username", "text" => "mautic.core.name", "class" => "col-user-name", "default" => true]);
        // line 58
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "user", "orderBy" => "u.username", "text" => "mautic.core.username", "class" => "col-user-username"]);
        // line 64
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "user", "orderBy" => "u.email", "text" => "mautic.core.type.email", "class" => "visible-md visible-lg col-user-email"]);
        // line 71
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "user", "orderBy" => "r.name", "text" => "mautic.user.role", "class" => "visible-md visible-lg col-user-role"]);
        // line 78
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "user", "orderBy" => "r.name", "text" => "mautic.user.lastlogin", "class" => "visible-md visible-lg col-user-lastlogin"]);
        // line 85
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "user", "orderBy" => "u.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-user-id"]);
        // line 92
        yield "</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 95, $this->source); })()));
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
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 98
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>             // line 99
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,             // line 101
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 101, $this->source); })()), "edit", [], "array", false, false, false, 101), "delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 102
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 102, $this->source); })()), "delete", [], "array", false, false, false, 102)], "routeBase" => "user", "langVar" => "user.user", "pull" => "left"]);
            // line 108
            yield "</td>
\t\t\t\t\t\t<td class=\"visible-md visible-lg\">
\t\t\t\t\t\t\t<img class=\"img img-responsive img-thumbnail w-44\" src=\"";
            // line 110
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\GravatarExtension']->getImage(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getEmail", [], "method", false, false, false, 110), "50");
            yield "\"/>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
            // line 114
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 114) != (isset($context["currentUserId"]) || array_key_exists("currentUserId", $context) ? $context["currentUserId"] : (function () { throw new RuntimeError('Variable "currentUserId" does not exist.', 114, $this->source); })()))) {
                // line 115
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 116
$context["item"], "model" => "user"]);
            }
            // line 120
            yield "\t\t\t\t\t\t\t\t";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 120, $this->source); })()), "edit", [], "array", false, false, false, 120)) {
                // line 121
                yield "\t\t\t\t\t\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 121)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
\t\t\t\t\t\t\t\t\t\t";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [true], "method", false, false, false, 122), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            } else {
                // line 125
                yield "\t\t\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [true], "method", false, false, false, 125), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t";
            }
            // line 127
            yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"small\">
\t\t\t\t\t\t\t\t<em>";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getPosition", [], "method", false, false, false, 129), "html", null, true);
            yield "</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getUsername", [], "method", false, false, false, 132), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td class=\"visible-md visible-lg\">
\t\t\t\t\t\t\t<a href=\"mailto: ";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getEmail", [], "method", false, false, false, 134), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getEmail", [], "method", false, false, false, 134), "html", null, true);
            yield "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"visible-md visible-lg\">";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getRole", [], "method", false, false, false, 136), "getName", [], "method", false, false, false, 136), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td class=\"visible-md visible-lg\">";
            // line 137
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getLastLogin", [], "method", false, false, false, 137), "local", "Y-m-d H:i:s", true);
            yield "</td>
\t\t\t\t\t\t<td class=\"visible-md visible-lg\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 138), "html", null, true);
            yield "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "\t\t\t</tbody>
\t\t</table>
\t\t<div class=\"panel-footer\">";
        // line 144
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 145
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 145, $this->source); })())), "page" =>         // line 146
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 146, $this->source); })()), "limit" =>         // line 147
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 147, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_index"), "sessionVar" => "user"]);
        // line 151
        yield "</div>
\t</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticUser/User/list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  281 => 151,  279 => 147,  278 => 146,  277 => 145,  276 => 144,  272 => 141,  255 => 138,  251 => 137,  247 => 136,  240 => 134,  235 => 132,  229 => 129,  225 => 127,  219 => 125,  213 => 122,  208 => 121,  205 => 120,  202 => 116,  201 => 115,  199 => 114,  192 => 110,  188 => 108,  186 => 102,  185 => 101,  184 => 99,  183 => 98,  180 => 96,  163 => 95,  158 => 92,  156 => 85,  154 => 78,  152 => 71,  150 => 64,  148 => 58,  146 => 51,  144 => 50,  142 => 46,  141 => 40,  136 => 36,  129 => 35,  120 => 31,  114 => 28,  111 => 27,  109 => 25,  108 => 23,  107 => 22,  104 => 21,  97 => 20,  92 => 13,  91 => 11,  84 => 10,  78 => 8,  71 => 7,  59 => 5,  55 => 4,  53 => 2,  51 => 1,  44 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticUser/User/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Resources\\views\\User\\list.html.twig");
    }
}
