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

/* @MauticCore/Standard/list.html.twig */
class __TwigTemplate_4b6aeb270796e1852128210b99ae507e extends Template
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
            'mainContent' => [$this, 'block_mainContent'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 5, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticCore/Standard/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["ignoreStandardColumns"] = ((array_key_exists("ignoreStandardColumns", $context)) ? ((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 1, $this->source); })())) : ([]));
        // line 2
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 2, $this->source); })()) == "index")) ? (true) : (false));
        // line 3
        $context["tmpl"] = "list";
        // line 17
        if ( !$this->extensions['Mautic\CoreBundle\Twig\Extension\SlotExtension']->getSlot("headerTitle")) {
            // line 18
            if ( !array_key_exists("headerTitle", $context)) {
                // line 19
                $context["headerTitle"] = "Mautic";
            }
            // line 21
            $context["headerTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 21, $this->source); })()));
        } else {
            // line 23
            $context["headerTitle"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SlotExtension']->getSlot("headerTitle");
        }
        // line 5
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    ";
        if ( !$this->extensions['Mautic\CoreBundle\Twig\Extension\SlotExtension']->getSlot("mauticContent")) {
            // line 9
            yield "        ";
            if (array_key_exists("mauticContent", $context)) {
                // line 10
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mauticContent"]) || array_key_exists("mauticContent", $context) ? $context["mauticContent"] : (function () { throw new RuntimeError('Variable "mauticContent" does not exist.', 10, $this->source); })()), "html", null, true);
                yield "
        ";
            }
            // line 12
            yield "    ";
        } else {
            // line 13
            yield "        ";
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\SlotExtension']->getSlot("mauticContent");
            yield "
    ";
        }
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 26, $this->source); })()), "html", null, true);
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,         // line 32
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 32, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 32, $this->source); })()) . ":create"), [], "array", false, false, false, 32)], "actionRoute" =>         // line 34
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 34, $this->source); })()), "indexRoute" =>         // line 35
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 35, $this->source); })()), "translationBase" =>         // line 36
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 36, $this->source); })())]);
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "    ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 41, $this->source); })())) {
            // line 42
            yield "        <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">";
            // line 43
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 45
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 45, $this->source); })()), "searchHelp" => ((            // line 46
array_key_exists("searchHelp", $context)) ? ((isset($context["searchHelp"]) || array_key_exists("searchHelp", $context) ? $context["searchHelp"] : (function () { throw new RuntimeError('Variable "searchHelp" does not exist.', 46, $this->source); })())) : ("")), "action" =>             // line 47
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 47, $this->source); })()), "actionRoute" =>             // line 48
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 48, $this->source); })()), "indexRoute" =>             // line 49
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 49, $this->source); })()), "translationBase" =>             // line 50
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 50, $this->source); })()), "preCustomButtons" => ((            // line 51
array_key_exists("toolBarButtons", $context)) ? ((isset($context["toolBarButtons"]) || array_key_exists("toolBarButtons", $context) ? $context["toolBarButtons"] : (function () { throw new RuntimeError('Variable "toolBarButtons" does not exist.', 51, $this->source); })())) : (null)), "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 53
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 53, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 53, $this->source); })()) . ":delete"), [], "array", false, false, false, 53)], "filters" => ((            // line 55
array_key_exists("filters", $context)) ? ((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 55, $this->source); })())) : ([]))]);
            // line 58
            yield "<div class=\"page-list\">
                ";
            // line 59
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("content.above", $context);
            yield "
                ";
            // line 60
            yield from             $this->unwrap()->yieldBlock("mainContent", $context, $blocks);
            yield "
                ";
            // line 61
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("content.below", $context);
            yield "
            </div>
        </div>
    ";
        } else {
            // line 65
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("mainContent", $context, $blocks);
            yield "
    ";
        }
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mainContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        yield "    ";
        if ( !array_key_exists("templateVariables", $context)) {
            // line 71
            yield "        ";
            $context["templateVariables"] = [];
            // line 72
            yield "    ";
        }
        // line 73
        yield "
    ";
        // line 74
        if ( !array_key_exists("sessionVar", $context)) {
            // line 75
            yield "        ";
            $context["sessionVar"] = "entity";
            // line 76
            yield "    ";
        }
        // line 77
        yield "
    ";
        // line 78
        if ( !array_key_exists("nameAction", $context)) {
            // line 79
            yield "        ";
            $context["nameAction"] = "view";
            // line 80
            yield "    ";
        }
        // line 81
        yield "
    ";
        // line 82
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 82, $this->source); })()))) {
            // line 83
            yield "        ";
            if ($this->env->getTest('instanceof')->getCallable()((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 83, $this->source); })()), "DoctrineORMToolsPaginationPaginator")) {
                // line 84
                yield "            ";
                $context["item"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 84, $this->source); })()), "getIterator", [], "method", false, false, false, 84), "getArrayCopy", [], "method", false, false, false, 84);
                // line 85
                yield "        ";
            }
            // line 86
            yield "
        ";
            // line 87
            $context["firstItem"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 87, $this->source); })()));
            // line 88
            yield "        <div class=\"table-responsive\">
            <table class=\"table table-hover ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 89, $this->source); })()), "html", null, true);
            yield "-list\">
                <thead>
                <tr>
                    ";
            // line 92
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 92, $this->source); })()))) {
                // line 93
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "actionRoute" =>                 // line 96
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 96, $this->source); })()), "indexRoute" =>                 // line 97
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 97, $this->source); })()), "templateButtons" => ["delete" => (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,                 // line 99
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 99, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 99, $this->source); })()) . ":deleteown"), [], "array", false, false, false, 99)) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 99, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 99, $this->source); })()) . ":deleteown"), [], "array", false, false, false, 99))) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 99, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 99, $this->source); })()) . ":delete"), [], "array", false, false, false, 99)))]]);
                // line 102
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>                 // line 105
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 105, $this->source); })()), "orderBy" => (                // line 106
(isset($context["tablePrefix"]) || array_key_exists("tablePrefix", $context) ? $context["tablePrefix"] : (function () { throw new RuntimeError('Variable "tablePrefix" does not exist.', 106, $this->source); })()) . ".name"), "text" => "mautic.core.name", "class" => "col-name", "default" => true]);
                // line 113
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["firstItem"] ?? null), "getCategory", [], "any", true, true, false, 113)) {
                    // line 114
                    yield "                            ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>                     // line 116
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 116, $this->source); })()), "orderBy" => (((                    // line 117
array_key_exists("categoryTablePrefix", $context)) ? ((isset($context["categoryTablePrefix"]) || array_key_exists("categoryTablePrefix", $context) ? $context["categoryTablePrefix"] : (function () { throw new RuntimeError('Variable "categoryTablePrefix" does not exist.', 117, $this->source); })())) : ("cat")) . ".title"), "text" => "mautic.core.category", "class" => "visible-md visible-lg col-focus-category"]);
                    // line 120
                    yield "
                        ";
                }
                // line 122
                yield "                    ";
            }
            // line 123
            yield "
                        ";
            // line 124
            if (array_key_exists("listHeaders", $context)) {
                // line 125
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listHeaders"]) || array_key_exists("listHeaders", $context) ? $context["listHeaders"] : (function () { throw new RuntimeError('Variable "listHeaders" does not exist.', 125, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                    // line 126
                    yield "                                ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["header"], "sessionVar", [], "any", true, true, false, 126)) {
                        // line 127
                        yield "                                    ";
                        $context["header"] = Twig\Extension\CoreExtension::merge($context["header"], ["sessionVar" => (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 127, $this->source); })())]);
                        // line 128
                        yield "                                ";
                    }
                    // line 129
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", $context["header"]);
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
                unset($context['_seq'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                yield "                        ";
            }
            // line 132
            yield "
                        ";
            // line 133
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 133, $this->source); })()))) {
                // line 134
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>                 // line 136
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 136, $this->source); })()), "orderBy" => (                // line 137
(isset($context["tablePrefix"]) || array_key_exists("tablePrefix", $context) ? $context["tablePrefix"] : (function () { throw new RuntimeError('Variable "tablePrefix" does not exist.', 137, $this->source); })()) . ".id"), "text" => "mautic.core.id", "class" => "visible-md visible-lg col-id"]);
            }
            // line 142
            yield "
                        ";
            // line 143
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("list.headers", $context);
            yield "
                </tr>
                </thead>
                <tbody>
                ";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 147, $this->source); })()));
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
                // line 148
                yield "                    <tr>
                        ";
                // line 149
                if (Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 149, $this->source); })()))) {
                    // line 150
                    yield "                            <td>";
                    // line 151
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                     // line 153
$context["item"], "templateButtons" => ["edit" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 155
$context["item"], "getCreatedBy", [], "any", true, true, false, 155)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                     // line 158
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 158, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 158, $this->source); })()) . ":editown"), [], "array", false, false, false, 158), CoreExtension::getAttribute($this->env, $this->source,                     // line 159
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 159, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 159, $this->source); })()) . ":editother"), [], "array", false, false, false, 159), CoreExtension::getAttribute($this->env, $this->source,                     // line 160
$context["item"], "getCreatedBy", [], "method", false, false, false, 160))) : (CoreExtension::getAttribute($this->env, $this->source,                     // line 163
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 163, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 163, $this->source); })()) . ":edit"), [], "array", false, false, false, 163))), "clone" => ((                    // line 164
array_key_exists("enableCloneButton", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 164, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 164, $this->source); })()) . ":create"), [], "array", false, false, false, 164)) : (false)), "delete" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 165
$context["item"], "getCreatedBy", [], "any", true, true, false, 165)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                     // line 168
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 168, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 168, $this->source); })()) . ":deleteown"), [], "array", false, false, false, 168), CoreExtension::getAttribute($this->env, $this->source,                     // line 169
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 169, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 169, $this->source); })()) . ":deleteother"), [], "array", false, false, false, 169), CoreExtension::getAttribute($this->env, $this->source,                     // line 170
$context["item"], "getCreatedBy", [], "method", false, false, false, 170))) : (CoreExtension::getAttribute($this->env, $this->source,                     // line 173
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 173, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 173, $this->source); })()) . ":delete"), [], "array", false, false, false, 173))), "abtest" => ((                    // line 174
array_key_exists("enableAbTestButton", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 174, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 174, $this->source); })()) . ":create"), [], "array", false, false, false, 174)) : (false))], "actionRoute" =>                     // line 176
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 176, $this->source); })()), "indexRoute" =>                     // line 177
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 177, $this->source); })()), "translationBase" =>                     // line 178
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 178, $this->source); })()), "customButtons" => ((                    // line 179
array_key_exists("customButtons", $context)) ? ((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 179, $this->source); })())) : ([]))]);
                    // line 181
                    yield "</td>
                            <td>
                                <div>
                                    ";
                    // line 184
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isPublished", [], "any", true, true, false, 184)) {
                        // line 185
                        yield "                                    ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                         // line 187
$context["item"], "model" => (isset($context["modelName"]) || array_key_exists("modelName", $context) ? $context["modelName"] : (function () { throw new RuntimeError('Variable "modelName" does not exist.', 187, $this->source); })())]);
                        // line 188
                        yield "
                                    ";
                    }
                    // line 190
                    yield "                                    <a data-toggle=\"ajax\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(                    // line 191
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 191, $this->source); })()), ["objectId" => CoreExtension::getAttribute($this->env, $this->source,                     // line 192
$context["item"], "getId", [], "method", false, false, false, 192), "objectAction" => (isset($context["nameAction"]) || array_key_exists("nameAction", $context) ? $context["nameAction"] : (function () { throw new RuntimeError('Variable "nameAction" does not exist.', 192, $this->source); })())]), "html", null, true);
                    // line 193
                    yield "\">
                                        ";
                    // line 194
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 194), "html", null, true);
                    yield "
                                        ";
                    // line 195
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("list.name", $context);
                    yield "
                                    </a>
                                </div>
                                ";
                    // line 198
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "any", true, true, false, 198) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 198))) {
                        // line 199
                        yield "                                    <div class=\"text-muted mt-4\">
                                        <small>";
                        // line 200
                        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 200));
                        yield "</small>
                                    </div>
                                ";
                    }
                    // line 203
                    yield "                            </td>
                            ";
                    // line 204
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCategory", [], "any", true, true, false, 204)) {
                        // line 205
                        yield "                                <td class=\"visible-md visible-lg\">
                                    ";
                        // line 206
                        $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCategory", [], "method", false, false, false, 206);
                        // line 207
                        yield "                                    ";
                        [$context["catName"], $context["color"]] =                         [(((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 207, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source,                         // line 208
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 208, $this->source); })()), "getTitle", [], "method", false, false, false, 208)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))), ((                        // line 209
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 209, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 209, $this->source); })()), "getColor", [], "method", false, false, false, 209))) : ("inherit"))];
                        // line 210
                        yield "                                    <span style=\"white-space: nowrap;\"><span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 210, $this->source); })()), "html", null, true);
                        yield ";\"> </span> <span>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 210, $this->source); })()), "html", null, true);
                        yield "</span></span>
                                </td>
                            ";
                    }
                    // line 213
                    yield "                        ";
                }
                // line 214
                yield "                        ";
                if (array_key_exists("listItemTemplate", $context)) {
                    // line 215
                    yield "                            ";
                    $context["templateVariables"] = Twig\Extension\CoreExtension::merge((isset($context["templateVariables"]) || array_key_exists("templateVariables", $context) ? $context["templateVariables"] : (function () { throw new RuntimeError('Variable "templateVariables" does not exist.', 215, $this->source); })()), ["item" => $context["item"]]);
                    // line 216
                    yield Twig\Extension\CoreExtension::include($this->env, $context, (isset($context["listItemTemplate"]) || array_key_exists("listItemTemplate", $context) ? $context["listItemTemplate"] : (function () { throw new RuntimeError('Variable "listItemTemplate" does not exist.', 216, $this->source); })()), (isset($context["templateVariables"]) || array_key_exists("templateVariables", $context) ? $context["templateVariables"] : (function () { throw new RuntimeError('Variable "templateVariables" does not exist.', 216, $this->source); })()));
                }
                // line 218
                yield "                        ";
                if (Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 218, $this->source); })()))) {
                    // line 219
                    yield "                            <td class=\"visible-md visible-lg\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 219), "html", null, true);
                    yield "</td>
                        ";
                }
                // line 221
                yield "
                        ";
                // line 222
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("list.columns", $context);
                yield "
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
            // line 225
            yield "                </tbody>
            </table>
        </div>
        <div class=\"panel-footer\">";
            // line 229
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 231
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 231, $this->source); })()), "page" =>             // line 232
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 232, $this->source); })()), "limit" =>             // line 233
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 233, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 234
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 234, $this->source); })())), "sessionVar" =>             // line 235
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 235, $this->source); })())]);
            // line 237
            yield "</div>
    ";
        } else {
            // line 239
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
        }
        // line 241
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Standard/list.html.twig";
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
        return array (  513 => 241,  510 => 239,  506 => 237,  504 => 235,  503 => 234,  502 => 233,  501 => 232,  500 => 231,  499 => 229,  494 => 225,  477 => 222,  474 => 221,  468 => 219,  465 => 218,  462 => 216,  459 => 215,  456 => 214,  453 => 213,  444 => 210,  442 => 209,  441 => 208,  439 => 207,  437 => 206,  434 => 205,  432 => 204,  429 => 203,  423 => 200,  420 => 199,  418 => 198,  412 => 195,  408 => 194,  405 => 193,  403 => 192,  402 => 191,  400 => 190,  396 => 188,  394 => 187,  392 => 185,  390 => 184,  385 => 181,  383 => 179,  382 => 178,  381 => 177,  380 => 176,  379 => 174,  378 => 173,  377 => 170,  376 => 169,  375 => 168,  374 => 165,  373 => 164,  372 => 163,  371 => 160,  370 => 159,  369 => 158,  368 => 155,  367 => 153,  366 => 151,  364 => 150,  362 => 149,  359 => 148,  342 => 147,  335 => 143,  332 => 142,  329 => 137,  328 => 136,  327 => 134,  325 => 133,  322 => 132,  319 => 131,  305 => 129,  302 => 128,  299 => 127,  296 => 126,  278 => 125,  276 => 124,  273 => 123,  270 => 122,  266 => 120,  264 => 117,  263 => 116,  261 => 114,  259 => 113,  257 => 106,  256 => 105,  255 => 102,  253 => 99,  252 => 97,  251 => 96,  250 => 93,  248 => 92,  242 => 89,  239 => 88,  237 => 87,  234 => 86,  231 => 85,  228 => 84,  225 => 83,  223 => 82,  220 => 81,  217 => 80,  214 => 79,  212 => 78,  209 => 77,  206 => 76,  203 => 75,  201 => 74,  198 => 73,  195 => 72,  192 => 71,  189 => 70,  182 => 69,  173 => 65,  166 => 61,  162 => 60,  158 => 59,  155 => 58,  153 => 55,  152 => 53,  151 => 51,  150 => 50,  149 => 49,  148 => 48,  147 => 47,  146 => 46,  145 => 45,  144 => 43,  142 => 42,  139 => 41,  132 => 40,  127 => 36,  126 => 35,  125 => 34,  124 => 32,  123 => 29,  116 => 28,  105 => 26,  96 => 13,  93 => 12,  87 => 10,  84 => 9,  81 => 8,  74 => 7,  70 => 5,  67 => 23,  64 => 21,  61 => 19,  59 => 18,  57 => 17,  55 => 3,  53 => 2,  51 => 1,  44 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Standard/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Standard\\list.html.twig");
    }
}
