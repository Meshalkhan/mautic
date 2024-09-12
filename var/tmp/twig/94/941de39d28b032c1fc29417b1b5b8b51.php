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

/* @MauticUser/Role/list.html.twig */
class __TwigTemplate_3316f14cc0dd338cde20bc4c036e2d8d extends Template
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
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticUser/Role/list.html.twig", 4);
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
        yield "role";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.roles", [], "messages");
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,         // line 11
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 11, $this->source); })()), "create", [], "array", false, false, false, 11)], "routeBase" => "role", "langVar" => "user.role"]);
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "    ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 20, $this->source); })())) {
            // line 21
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 23
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 23, $this->source); })()), "searchHelp" => "mautic.user.role.help.searchcommands", "action" =>             // line 25
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 25, $this->source); })())]);
            // line 28
            yield "<div class=\"page-list\">
            ";
            // line 29
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
        </div>
    ";
        } else {
            // line 32
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
    ";
        }
        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_listResults(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "<div class=\"table-responsive\">
    <table class=\"table table-hover role-list\" id=\"roleTable\">
        <thead>
        <tr>";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#roleTable", "langVar" => "user.role", "routeBase" => "role", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,         // line 48
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 48, $this->source); })()), "delete", [], "array", false, false, false, 48)]]);
        // line 53
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "role", "orderBy" => "r.name", "text" => "mautic.core.name", "class" => "col-role-name", "default" => true]);
        // line 64
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "role", "orderBy" => "r.description", "text" => "mautic.core.description", "class" => "visible-md visible-lg col-role-desc"]);
        // line 73
        yield "<th class=\"visible-md visible-lg col-rolelist-usercount\">
                ";
        // line 74
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.role.list.thead.usercount", [], "messages");
        // line 75
        yield "            </th>";
        // line 76
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "role", "orderBy" => "r.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-role-id"]);
        // line 84
        yield "</tr>
        </thead>
        <tbody>
        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 87, $this->source); })()));
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
            yield "            <tr>
                <td>";
            // line 90
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>             // line 92
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,             // line 94
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 94, $this->source); })()), "edit", [], "array", false, false, false, 94), "delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 95
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 95, $this->source); })()), "delete", [], "array", false, false, false, 95)], "routeBase" => "role", "langVar" => "user.role", "pull" => "left"]);
            // line 101
            yield "</td>
                <td>
                    ";
            // line 103
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 103, $this->source); })()), "edit", [], "array", false, false, false, 103)) {
                // line 104
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_role_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 105
$context["item"], "getId", [], "method", false, false, false, 105)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
                            ";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 106), "html", null, true);
                yield "
                        </a>
                    ";
            } else {
                // line 109
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 109), "html", null, true);
                yield "
                    
                    ";
            }
            // line 112
            yield "                </td>
                <td class=\"visible-md visible-lg\">
                    ";
            // line 114
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 114));
            yield "
                </td>
                <td class=\"visible-md visible-lg\">
                    <a class=\"label label-primary\" href=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_index", ["search" => ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.searchcommand.role") . ":&quot;") . CoreExtension::getAttribute($this->env, $this->source,             // line 118
$context["item"], "getName", [], "method", false, false, false, 118)) . "&quot;")]), "html", null, true);
            yield "\" data-toggle=\"ajax\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["userCounts"]) || array_key_exists("userCounts", $context) ? $context["userCounts"] : (function () { throw new RuntimeError('Variable "userCounts" does not exist.', 118, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 118), [], "array", false, false, false, 118) == 0)) ? ("disabled=disabled") : (""));
            yield ">
                        ";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.role.list.viewusers_count", ["%count%" => CoreExtension::getAttribute($this->env, $this->source,             // line 120
(isset($context["userCounts"]) || array_key_exists("userCounts", $context) ? $context["userCounts"] : (function () { throw new RuntimeError('Variable "userCounts" does not exist.', 120, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 120), [], "array", false, false, false, 120)]), "html", null, true);
            // line 121
            yield "
                    </a>
                </td>
                <td class=\"visible-md visible-lg\">
                    ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 125), "html", null, true);
            yield "
                </td>
            </tr>
        ";
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
        // line 129
        yield "        </tbody>
    </table>
</div>
<div class=\"panel-footer\">";
        // line 133
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 135
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 135, $this->source); })())), "page" =>         // line 136
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 136, $this->source); })()), "limit" =>         // line 137
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 137, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_role_index"), "sessionVar" => "role"]);
        // line 142
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticUser/Role/list.html.twig";
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
        return array (  263 => 142,  261 => 137,  260 => 136,  259 => 135,  258 => 133,  253 => 129,  235 => 125,  229 => 121,  227 => 120,  226 => 119,  220 => 118,  219 => 117,  213 => 114,  209 => 112,  202 => 109,  196 => 106,  192 => 105,  190 => 104,  188 => 103,  184 => 101,  182 => 95,  181 => 94,  180 => 92,  179 => 90,  176 => 88,  159 => 87,  154 => 84,  152 => 76,  150 => 75,  148 => 74,  145 => 73,  143 => 64,  141 => 53,  139 => 48,  138 => 41,  133 => 37,  126 => 36,  117 => 32,  111 => 29,  108 => 28,  106 => 25,  105 => 23,  104 => 21,  101 => 20,  94 => 19,  89 => 11,  88 => 8,  81 => 7,  70 => 6,  59 => 5,  55 => 4,  53 => 2,  51 => 1,  44 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticUser/Role/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Resources\\views\\Role\\list.html.twig");
    }
}
