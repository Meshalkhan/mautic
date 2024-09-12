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

/* @MauticPoint/Group/list.html.twig */
class __TwigTemplate_ff9d57cb8417011f52c55776f6a54732 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 3, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticPoint/Group/list.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()))) ? (true) : (false));
        // line 2
        $context["tmpl"] = "list";
        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "group";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.group.header.index"), "html", null, true);
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,         // line 13
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 13, $this->source); })()), "point:groups:create", [], "array", false, false, false, 13)], "routeBase" => "point.group", "langVar" => "point.group"]);
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "    <div class=\"panel panel-default bdr-t-wdh-0\">
        <div class=\"page-list\">";
        // line 24
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>         // line 25
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 25, $this->source); })()), "searchHelp" => "mautic.lead.list.help.searchcommands", "action" =>         // line 27
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 27, $this->source); })())]);
        // line 29
        if ((array_key_exists("items", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 29, $this->source); })())))) {
            // line 30
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-hover\" id=\"groupTable\">
                        <thead>
                        <tr>
                            ";
            // line 34
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#groupTable", "langVar" => "point.group", "routeBase" => "point.group", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 42
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 42, $this->source); })()), "point:groups:delete", [], "array", false, false, false, 42)]]);
            // line 44
            yield "
                            ";
            // line 45
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point.group", "orderBy" => "pl.name", "text" => "mautic.core.name", "class" => "col-group-name", "default" => true]);
            // line 54
            yield "

                            ";
            // line 56
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point.group", "orderBy" => "pl.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-group-id"]);
            // line 64
            yield "
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 68, $this->source); })()));
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
                // line 69
                yield "                            <tr>
                                <td>";
                // line 71
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 72
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,                 // line 74
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 74, $this->source); })()), "point:groups:edit", [], "array", false, false, false, 74), "delete" => CoreExtension::getAttribute($this->env, $this->source,                 // line 75
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 75, $this->source); })()), "point:groups:delete", [], "array", false, false, false, 75)], "routeBase" => "point.group", "langVar" => "point.group"]);
                // line 80
                yield "</td>
                                <td>
                                    <div>";
                // line 83
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 86
$context["item"], "model" => "point.group"]);
                // line 88
                yield "

                                        ";
                // line 90
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 90, $this->source); })()), "point:groups:edit", [], "array", false, false, false, 90)) {
                    // line 91
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_point.group_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                     // line 93
$context["item"], "getId", [], "method", false, false, false, 93)]), "html", null, true);
                    // line 94
                    yield "\" data-toggle=\"ajax\">
                                                ";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 95), "html", null, true);
                    yield "
                                            </a>
                                        ";
                } else {
                    // line 98
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 98), "html", null, true);
                    yield "
                                        ";
                }
                // line 100
                yield "                                    </div>
                                    ";
                // line 101
                $context["description"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 101);
                // line 102
                yield "                                    ";
                if ((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 102, $this->source); })())) {
                    // line 103
                    yield "                                        <div class=\"text-muted mt-4\">
                                            <small>";
                    // line 104
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 104, $this->source); })()));
                    yield "</small>
                                        </div>
                                    ";
                }
                // line 107
                yield "                                </td>
                                <td class=\"visible-md visible-lg\">";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 108), "html", null, true);
                yield "</td>
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
            // line 111
            yield "                        </tbody>
                    </table>
                    <div class=\"panel-footer\">";
            // line 114
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 115
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 115, $this->source); })())), "page" =>             // line 116
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 116, $this->source); })()), "limit" =>             // line 117
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 117, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_point.group_index"), "sessionVar" => "point.group"]);
            // line 121
            yield "</div>
                </div>
            ";
        } else {
            // line 124
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
            yield "
            ";
        }
        // line 126
        yield "        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPoint/Group/list.html.twig";
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
        return array (  249 => 126,  243 => 124,  238 => 121,  236 => 117,  235 => 116,  234 => 115,  233 => 114,  229 => 111,  212 => 108,  209 => 107,  203 => 104,  200 => 103,  197 => 102,  195 => 101,  192 => 100,  186 => 98,  180 => 95,  177 => 94,  175 => 93,  173 => 91,  171 => 90,  167 => 88,  165 => 86,  164 => 83,  160 => 80,  158 => 75,  157 => 74,  156 => 72,  155 => 71,  152 => 69,  135 => 68,  129 => 64,  127 => 56,  123 => 54,  121 => 45,  118 => 44,  116 => 42,  115 => 34,  109 => 30,  107 => 29,  105 => 27,  104 => 25,  103 => 24,  100 => 22,  93 => 21,  88 => 13,  87 => 9,  80 => 8,  69 => 6,  58 => 4,  54 => 3,  52 => 2,  50 => 1,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPoint/Group/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Resources\\views\\Group\\list.html.twig");
    }
}
