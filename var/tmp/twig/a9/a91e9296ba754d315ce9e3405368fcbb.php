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

/* @MauticStage/Stage/list.html.twig */
class __TwigTemplate_86b748cf386fe7de72e557057b2283a9 extends Template
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
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticStage/Stage/list.html.twig", 4);
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
        yield "stage";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "\t";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.stages.menu.root", [], "messages");
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
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 13, $this->source); })()), "stage:stages:create", [], "array", false, false, false, 13)], "routeBase" => "stage"]);
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
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 20, $this->source); })())) {
            // line 21
            yield "<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">";
            // line 22
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 24
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 24, $this->source); })()), "searchHelp" => "mautic.core.help.searchcommands", "action" =>             // line 26
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 26, $this->source); })())]);
            // line 28
            yield "<div class=\"page-list\">
        ";
            // line 29
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
    </div>
</div>
";
        } else {
            // line 33
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("listResults", $context, $blocks);
            yield "
";
        }
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_listResults(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "    ";
        if ((array_key_exists("items", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 38, $this->source); })())))) {
            // line 39
            yield "        <div class=\"table-responsive page-list\">
        <table class=\"table table-hover stage-list\" id=\"stageTable\">
            <thead>
            <tr>";
            // line 43
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#stageTable", "routeBase" => "stage", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 49
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 49, $this->source); })()), "stage:stages:delete", [], "array", false, false, false, 49)]]);
            // line 52
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "stage", "orderBy" => "s.name", "text" => "mautic.core.name", "class" => "col-stage-name", "default" => true]);
            // line 60
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "stage", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-stage-category"]);
            // line 67
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "stage", "orderBy" => "s.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-stage-id"]);
            // line 74
            yield "</tr>
            </thead>
            <tbody>
            ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 77, $this->source); })()));
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
                // line 78
                yield "                <tr>
                    <td>";
                // line 80
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 82
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,                 // line 84
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 84, $this->source); })()), "stage:stages:edit", [], "array", false, false, false, 84), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 85
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 85, $this->source); })()), "stage:stages:create", [], "array", false, false, false, 85), "delete" => CoreExtension::getAttribute($this->env, $this->source,                 // line 86
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 86, $this->source); })()), "stage:stages:delete", [], "array", false, false, false, 86)], "routeBase" => "stage"]);
                // line 90
                yield "</td>
                    <td>
                        <div>";
                // line 93
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 94
$context["item"], "model" => "stage"]);
                // line 95
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 95, $this->source); })()), "stage:stages:edit", [], "array", false, false, false, 95)) {
                    // line 96
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_stage_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                     // line 98
$context["item"], "getId", [], "method", false, false, false, 98)]), "html", null, true);
                    // line 99
                    yield "\" data-toggle=\"ajax\">
                                ";
                    // line 100
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 100), "html", null, true);
                    yield "
                            </a>
                            ";
                } else {
                    // line 103
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 103), "html", null, true);
                    yield "
                            ";
                }
                // line 105
                yield "                        </div>
                        ";
                // line 106
                $context["description"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 106);
                // line 107
                yield "                        ";
                if ((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 107, $this->source); })())) {
                    // line 108
                    yield "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 109
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 109, $this->source); })()));
                    yield "</small>
                            </div>
                        ";
                }
                // line 112
                yield "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 114
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCategory", [], "method", false, false, false, 114);
                // line 115
                yield "                        ";
                $context["catName"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 115, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 115, $this->source); })()), "getTitle", [], "method", false, false, false, 115)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 116
                yield "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 116, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 116, $this->source); })()), "getColor", [], "method", false, false, false, 116))) : ("inherit"));
                // line 117
                yield "                        <span style=\"white-space: nowrap;\">
                        <span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 118, $this->source); })()), "html", null, true);
                yield ";\"> </span> 
                        <span>";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 119, $this->source); })()), "html", null, true);
                yield "</span>
                        </span>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 122), "html", null, true);
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
            // line 125
            yield "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">";
            // line 129
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 131
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 131, $this->source); })())), "page" =>             // line 132
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 132, $this->source); })()), "limit" =>             // line 133
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 133, $this->source); })()), "menuLinkId" => "mautic_stage_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_stage_index"), "sessionVar" => "stage"]);
            // line 138
            yield "</div>
    ";
        } else {
            // line 140
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.stage.action.noresults.tip"]);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticStage/Stage/list.html.twig";
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
        return array (  286 => 140,  282 => 138,  280 => 133,  279 => 132,  278 => 131,  277 => 129,  272 => 125,  255 => 122,  249 => 119,  245 => 118,  242 => 117,  239 => 116,  236 => 115,  234 => 114,  230 => 112,  224 => 109,  221 => 108,  218 => 107,  216 => 106,  213 => 105,  207 => 103,  201 => 100,  198 => 99,  196 => 98,  194 => 96,  192 => 95,  190 => 94,  189 => 93,  185 => 90,  183 => 86,  182 => 85,  181 => 84,  180 => 82,  179 => 80,  176 => 78,  159 => 77,  154 => 74,  152 => 67,  150 => 60,  148 => 52,  146 => 49,  145 => 43,  140 => 39,  137 => 38,  130 => 37,  121 => 33,  114 => 29,  111 => 28,  109 => 26,  108 => 24,  107 => 22,  105 => 21,  103 => 20,  96 => 19,  91 => 13,  90 => 11,  83 => 10,  77 => 7,  70 => 6,  59 => 5,  55 => 4,  53 => 2,  51 => 1,  44 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticStage/Stage/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\StageBundle\\Resources\\views\\Stage\\list.html.twig");
    }
}
