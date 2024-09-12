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

/* @MauticTagManager/Tag/list.html.twig */
class __TwigTemplate_a8afd352a8d5fcb6e5e319f7049506d0 extends Template
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
            'headerTitle' => [$this, 'block_headerTitle'],
            'mauticContent' => [$this, 'block_mauticContent'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticTagManager/Tag/list.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()) == "index")) ? (true) : (false));
        // line 2
        $context["tmpl"] = "list";
        // line 9
        if ( !array_key_exists("nameGetter", $context)) {
            // line 10
            $context["nameGetter"] = "getTag";
        }
        // line 13
        $context["listCommand"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.tagmanager.tag.searchcommand.list");
        // line 4
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.tagmanager.tag.header.index", [], "messages");
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "tags";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 20, $this->source); })()), "isGranted", ["tagManager:tagManager:create"], "method", false, false, false, 20)], "routeBase" => "tagmanager", "langVar" => "tag.list"]);
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "    <div class=\"panel panel-default bdr-t-wdh-0\">
        <div class=\"page-list\">";
        // line 31
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>         // line 32
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 32, $this->source); })()), "searchHelp" => "mautic.lead.list.help.searchcommands", "action" =>         // line 34
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 34, $this->source); })())]);
        // line 36
        if ((array_key_exists("items", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 36, $this->source); })())))) {
            // line 37
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-hover\" id=\"tagsTable\">
                        <thead>
                        <tr>
                            ";
            // line 41
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#tagsTable", "langVar" => "tagmanager.tag", "routeBase" => "tagmanager", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 49
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 49, $this->source); })()), "tagManager:tagManager:delete", [], "array", false, false, false, 49)]]);
            // line 51
            yield "
                            ";
            // line 52
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "tags", "orderBy" => "lt.tag", "text" => "mautic.core.name", "class" => "col-tag-name"]);
            // line 60
            yield "

                            ";
            // line 62
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "tags", "text" => "mautic.lead.list.thead.leadcount", "class" => "visible-md visible-lg col-tag-leadcount"]);
            // line 69
            yield "

                            ";
            // line 71
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "tags", "orderBy" => "lt.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-tag-id"]);
            // line 79
            yield "
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 83, $this->source); })()));
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
                // line 84
                yield "                            <tr>
                                <td>";
                // line 86
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 87
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,                 // line 89
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 89, $this->source); })()), "tagManager:tagManager:edit", [], "array", false, false, false, 89), "delete" => CoreExtension::getAttribute($this->env, $this->source,                 // line 90
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 90, $this->source); })()), "tagManager:tagManager:delete", [], "array", false, false, false, 90)], "routeBase" => "tagmanager", "langVar" => "tagmanager.tag", "nameGetter" =>                 // line 94
(isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 94, $this->source); })()), "custom" => [["attr" => ["data-toggle" => "ajax", "href" => ""], "icon" => "ri-team-line", "label" => "mautic.lead.list.view_contacts"]]]);
                // line 106
                yield "</td>
                                <td>
                                    <div>
                                        ";
                // line 109
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 109, $this->source); })()), "tagManager:tagManager:edit", [], "array", false, false, false, 109)) {
                    // line 110
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_tagmanager_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                     // line 112
$context["item"], "getId", [], "method", false, false, false, 112)]), "html", null, true);
                    // line 113
                    yield "\" data-toggle=\"ajax\">
                                                ";
                    // line 114
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getTag", [], "method", false, false, false, 114), "html", null, true);
                    yield "
                                            </a>
                                        ";
                } else {
                    // line 117
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getTag", [], "method", false, false, false, 117), "html", null, true);
                    yield "
                                        ";
                }
                // line 119
                yield "                                    </div>
                                    ";
                // line 120
                $context["description"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 120);
                // line 121
                yield "                                    ";
                if ((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 121, $this->source); })())) {
                    // line 122
                    yield "                                        <div class=\"text-muted mt-4\">
                                            <small>";
                    // line 123
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 123, $this->source); })()));
                    yield "</small>
                                        </div>
                                    ";
                }
                // line 126
                yield "                                </td>
                                <td class=\"visible-md visible-lg\">
                                    <a class=\"label label-primary\" href=\"";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.tagmanager.lead.searchcommand.list") . ":\"") . CoreExtension::getAttribute($this->env, $this->source,                 // line 129
$context["item"], "getTag", [], "method", false, false, false, 129)) . "\"")]), "html", null, true);
                // line 130
                yield "\" data-toggle=\"ajax\"";
                yield (((0 == CoreExtension::getAttribute($this->env, $this->source, (isset($context["tagsCount"]) || array_key_exists("tagsCount", $context) ? $context["tagsCount"] : (function () { throw new RuntimeError('Variable "tagsCount" does not exist.', 130, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 130), [], "array", false, false, false, 130))) ? ("disabled=disabled") : (""));
                yield ">";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.viewleads_count", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tagsCount"]) || array_key_exists("tagsCount", $context) ? $context["tagsCount"] : (function () { throw new RuntimeError('Variable "tagsCount" does not exist.', 131, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 131), [], "array", false, false, false, 131)]), "html", null, true);
                // line 132
                yield "</a>
                                </td>
                                <td class=\"visible-md visible-lg\">";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 134), "html", null, true);
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
            // line 137
            yield "                        </tbody>
                    </table>
                    <div class=\"panel-footer\">";
            // line 140
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 141
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 141, $this->source); })())), "page" =>             // line 142
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 142, $this->source); })()), "limit" =>             // line 143
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 143, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_tagmanager_index"), "sessionVar" => "tagmanager"]);
            // line 147
            yield "</div>
                </div>
            ";
        } else {
            // line 150
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
            yield "
            ";
        }
        // line 152
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
        return "@MauticTagManager/Tag/list.html.twig";
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
        return array (  271 => 152,  265 => 150,  260 => 147,  258 => 143,  257 => 142,  256 => 141,  255 => 140,  251 => 137,  234 => 134,  230 => 132,  228 => 131,  224 => 130,  222 => 129,  221 => 128,  217 => 126,  211 => 123,  208 => 122,  205 => 121,  203 => 120,  200 => 119,  194 => 117,  188 => 114,  185 => 113,  183 => 112,  181 => 110,  179 => 109,  174 => 106,  172 => 94,  171 => 90,  170 => 89,  169 => 87,  168 => 86,  165 => 84,  148 => 83,  142 => 79,  140 => 71,  136 => 69,  134 => 62,  130 => 60,  128 => 52,  125 => 51,  123 => 49,  122 => 41,  116 => 37,  114 => 36,  112 => 34,  111 => 32,  110 => 31,  107 => 29,  100 => 28,  95 => 20,  94 => 16,  87 => 15,  76 => 6,  65 => 5,  61 => 4,  59 => 13,  56 => 10,  54 => 9,  52 => 2,  50 => 1,  43 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticTagManager/Tag/list.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticTagManagerBundle\\Resources\\views\\Tag\\list.html.twig");
    }
}
