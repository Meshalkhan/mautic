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

/* @MauticCore/Standard/list.html.twig */
class __TwigTemplate_e1811b1e760332e3e5037a7b2aa4d897 extends Template
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
            'mainContent' => [$this, 'block_mainContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 5, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticCore/Standard/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
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
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        if ( !$this->extensions['Mautic\CoreBundle\Twig\Extension\SlotExtension']->getSlot("mauticContent")) {
            // line 9
            echo "        ";
            if (array_key_exists("mauticContent", $context)) {
                // line 10
                echo "            ";
                echo twig_escape_filter($this->env, (isset($context["mauticContent"]) || array_key_exists("mauticContent", $context) ? $context["mauticContent"] : (function () { throw new RuntimeError('Variable "mauticContent" does not exist.', 10, $this->source); })()), "html", null, true);
                echo "
        ";
            }
            // line 12
            echo "    ";
        } else {
            // line 13
            echo "        ";
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\SlotExtension']->getSlot("mauticContent");
            echo "
    ";
        }
    }

    // line 26
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 26, $this->source); })()), "html", null, true);
    }

    // line 28
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 32
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 32, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 32, $this->source); })()) . ":create"), [], "array", false, false, false, 32)], "actionRoute" =>         // line 34
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 34, $this->source); })()), "indexRoute" =>         // line 35
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 35, $this->source); })()), "translationBase" =>         // line 36
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 36, $this->source); })())]);
    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "        <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">";
            // line 43
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 45
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 45, $this->source); })()), "searchHelp" => ((            // line 46
array_key_exists("searchHelp", $context)) ? ((isset($context["searchHelp"]) || array_key_exists("searchHelp", $context) ? $context["searchHelp"] : (function () { throw new RuntimeError('Variable "searchHelp" does not exist.', 46, $this->source); })())) : ("")), "action" =>             // line 47
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 47, $this->source); })()), "actionRoute" =>             // line 48
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 48, $this->source); })()), "indexRoute" =>             // line 49
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 49, $this->source); })()), "translationBase" =>             // line 50
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 50, $this->source); })()), "preCustomButtons" => ((            // line 51
array_key_exists("toolBarButtons", $context)) ? ((isset($context["toolBarButtons"]) || array_key_exists("toolBarButtons", $context) ? $context["toolBarButtons"] : (function () { throw new RuntimeError('Variable "toolBarButtons" does not exist.', 51, $this->source); })())) : (null)), "templateButtons" => ["delete" => twig_get_attribute($this->env, $this->source,             // line 53
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 53, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 53, $this->source); })()) . ":delete"), [], "array", false, false, false, 53)], "filters" => ((            // line 55
array_key_exists("filters", $context)) ? ((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 55, $this->source); })())) : ([]))]);
            // line 58
            echo "<div class=\"page-list\">
                ";
            // line 59
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("content.above", $context);
            echo "
                ";
            // line 60
            $this->displayBlock("mainContent", $context, $blocks);
            echo "
                ";
            // line 61
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("content.below", $context);
            echo "
            </div>
        </div>
    ";
        } else {
            // line 65
            echo "        ";
            $this->displayBlock("mainContent", $context, $blocks);
            echo "
    ";
        }
    }

    // line 69
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "    ";
        if ( !array_key_exists("templateVariables", $context)) {
            // line 71
            echo "        ";
            $context["templateVariables"] = [];
            // line 72
            echo "    ";
        }
        // line 73
        echo "
    ";
        // line 74
        if ( !array_key_exists("sessionVar", $context)) {
            // line 75
            echo "        ";
            $context["sessionVar"] = "entity";
            // line 76
            echo "    ";
        }
        // line 77
        echo "
    ";
        // line 78
        if ( !array_key_exists("nameAction", $context)) {
            // line 79
            echo "        ";
            $context["nameAction"] = "view";
            // line 80
            echo "    ";
        }
        // line 81
        echo "
    ";
        // line 82
        if (twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 82, $this->source); })()))) {
            // line 83
            echo "        ";
            if ($this->env->getTest('instanceof')->getCallable()((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 83, $this->source); })()), "DoctrineORMToolsPaginationPaginator")) {
                // line 84
                echo "            ";
                $context["item"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 84, $this->source); })()), "getIterator", [], "method", false, false, false, 84), "getArrayCopy", [], "method", false, false, false, 84);
                // line 85
                echo "        ";
            }
            // line 86
            echo "
        ";
            // line 87
            $context["firstItem"] = twig_first($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 87, $this->source); })()));
            // line 88
            echo "        <div class=\"table-responsive\">
            <table class=\"table table-hover ";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 89, $this->source); })()), "html", null, true);
            echo "-list\">
                <thead>
                <tr>
                    ";
            // line 92
            if (twig_test_empty((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 92, $this->source); })()))) {
                // line 93
                echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "actionRoute" =>                 // line 96
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 96, $this->source); })()), "indexRoute" =>                 // line 97
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 97, $this->source); })()), "templateButtons" => ["delete" => (( !twig_test_empty(twig_get_attribute($this->env, $this->source,                 // line 99
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 99, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 99, $this->source); })()) . ":deleteown"), [], "array", false, false, false, 99)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 99, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 99, $this->source); })()) . ":deleteown"), [], "array", false, false, false, 99))) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 99, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 99, $this->source); })()) . ":delete"), [], "array", false, false, false, 99)))]]);
                // line 102
                echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>                 // line 105
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 105, $this->source); })()), "orderBy" => (                // line 106
(isset($context["tablePrefix"]) || array_key_exists("tablePrefix", $context) ? $context["tablePrefix"] : (function () { throw new RuntimeError('Variable "tablePrefix" does not exist.', 106, $this->source); })()) . ".name"), "text" => "mautic.core.name", "class" => "col-name", "default" => true]);
                // line 113
                if (twig_get_attribute($this->env, $this->source, ($context["firstItem"] ?? null), "getCategory", [], "any", true, true, false, 113)) {
                    // line 114
                    echo "                            ";
                    echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>                     // line 116
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 116, $this->source); })()), "orderBy" => (((                    // line 117
array_key_exists("categoryTablePrefix", $context)) ? ((isset($context["categoryTablePrefix"]) || array_key_exists("categoryTablePrefix", $context) ? $context["categoryTablePrefix"] : (function () { throw new RuntimeError('Variable "categoryTablePrefix" does not exist.', 117, $this->source); })())) : ("cat")) . ".title"), "text" => "mautic.core.category", "class" => "visible-md visible-lg col-focus-category"]);
                    // line 120
                    echo "
                        ";
                }
                // line 122
                echo "                    ";
            }
            // line 123
            echo "
                        ";
            // line 124
            if (array_key_exists("listHeaders", $context)) {
                // line 125
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listHeaders"]) || array_key_exists("listHeaders", $context) ? $context["listHeaders"] : (function () { throw new RuntimeError('Variable "listHeaders" does not exist.', 125, $this->source); })()));
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
                    echo "                                ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["header"], "sessionVar", [], "any", true, true, false, 126)) {
                        // line 127
                        echo "                                    ";
                        $context["header"] = twig_array_merge($context["header"], ["sessionVar" => (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 127, $this->source); })())]);
                        // line 128
                        echo "                                ";
                    }
                    // line 129
                    echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", $context["header"]);
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo "                        ";
            }
            // line 132
            echo "
                        ";
            // line 133
            if (twig_test_empty((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 133, $this->source); })()))) {
                // line 134
                echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>                 // line 136
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 136, $this->source); })()), "orderBy" => (                // line 137
(isset($context["tablePrefix"]) || array_key_exists("tablePrefix", $context) ? $context["tablePrefix"] : (function () { throw new RuntimeError('Variable "tablePrefix" does not exist.', 137, $this->source); })()) . ".id"), "text" => "mautic.core.id", "class" => "visible-md visible-lg col-id"]);
            }
            // line 142
            echo "
                        ";
            // line 143
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("list.headers", $context);
            echo "
                </tr>
                </thead>
                <tbody>
                ";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 147, $this->source); })()));
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
                echo "                    <tr>
                        ";
                // line 149
                if (twig_test_empty((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 149, $this->source); })()))) {
                    // line 150
                    echo "                            <td>";
                    // line 151
                    echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                     // line 153
$context["item"], "templateButtons" => ["edit" => ((twig_get_attribute($this->env, $this->source,                     // line 155
$context["item"], "getCreatedBy", [], "any", true, true, false, 155)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                     // line 158
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 158, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 158, $this->source); })()) . ":editown"), [], "array", false, false, false, 158), twig_get_attribute($this->env, $this->source,                     // line 159
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 159, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 159, $this->source); })()) . ":editother"), [], "array", false, false, false, 159), twig_get_attribute($this->env, $this->source,                     // line 160
$context["item"], "getCreatedBy", [], "method", false, false, false, 160))) : (twig_get_attribute($this->env, $this->source,                     // line 163
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 163, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 163, $this->source); })()) . ":edit"), [], "array", false, false, false, 163))), "clone" => ((                    // line 164
array_key_exists("enableCloneButton", $context)) ? (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 164, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 164, $this->source); })()) . ":create"), [], "array", false, false, false, 164)) : (false)), "delete" => ((twig_get_attribute($this->env, $this->source,                     // line 165
$context["item"], "getCreatedBy", [], "any", true, true, false, 165)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                     // line 168
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 168, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 168, $this->source); })()) . ":deleteown"), [], "array", false, false, false, 168), twig_get_attribute($this->env, $this->source,                     // line 169
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 169, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 169, $this->source); })()) . ":deleteother"), [], "array", false, false, false, 169), twig_get_attribute($this->env, $this->source,                     // line 170
$context["item"], "getCreatedBy", [], "method", false, false, false, 170))) : (twig_get_attribute($this->env, $this->source,                     // line 173
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 173, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 173, $this->source); })()) . ":delete"), [], "array", false, false, false, 173))), "abtest" => ((                    // line 174
array_key_exists("enableAbTestButton", $context)) ? (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 174, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 174, $this->source); })()) . ":create"), [], "array", false, false, false, 174)) : (false))], "actionRoute" =>                     // line 176
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 176, $this->source); })()), "indexRoute" =>                     // line 177
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 177, $this->source); })()), "translationBase" =>                     // line 178
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 178, $this->source); })()), "customButtons" => ((                    // line 179
array_key_exists("customButtons", $context)) ? ((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 179, $this->source); })())) : ([]))]);
                    // line 181
                    echo "</td>
                            <td>
                                <div>
                                    ";
                    // line 184
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "isPublished", [], "any", true, true, false, 184)) {
                        // line 185
                        echo "                                    ";
                        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                         // line 187
$context["item"], "model" => (isset($context["modelName"]) || array_key_exists("modelName", $context) ? $context["modelName"] : (function () { throw new RuntimeError('Variable "modelName" does not exist.', 187, $this->source); })())]);
                        // line 188
                        echo "
                                    ";
                    }
                    // line 190
                    echo "                                    <a data-toggle=\"ajax\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(                    // line 191
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 191, $this->source); })()), ["objectId" => twig_get_attribute($this->env, $this->source,                     // line 192
$context["item"], "getId", [], "method", false, false, false, 192), "objectAction" => (isset($context["nameAction"]) || array_key_exists("nameAction", $context) ? $context["nameAction"] : (function () { throw new RuntimeError('Variable "nameAction" does not exist.', 192, $this->source); })())]), "html", null, true);
                    // line 193
                    echo "\">
                                        ";
                    // line 194
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 194), "html", null, true);
                    echo "
                                        ";
                    // line 195
                    echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("list.name", $context);
                    echo "
                                    </a>
                                </div>
                                ";
                    // line 198
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "getDescription", [], "any", true, true, false, 198) && twig_get_attribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 198))) {
                        // line 199
                        echo "                                    <div class=\"text-muted mt-4\">
                                        <small>";
                        // line 200
                        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 200));
                        echo "</small>
                                    </div>
                                ";
                    }
                    // line 203
                    echo "                            </td>
                            ";
                    // line 204
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "getCategory", [], "any", true, true, false, 204)) {
                        // line 205
                        echo "                                <td class=\"visible-md visible-lg\">
                                    ";
                        // line 206
                        $context["category"] = twig_get_attribute($this->env, $this->source, $context["item"], "getCategory", [], "method", false, false, false, 206);
                        // line 207
                        echo "                                    ";
                        list($context["catName"], $context["color"]) =                         [(((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 207, $this->source); })())) ? (twig_get_attribute($this->env, $this->source,                         // line 208
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 208, $this->source); })()), "getTitle", [], "method", false, false, false, 208)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))), ((                        // line 209
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 209, $this->source); })())) ? (("#" . twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 209, $this->source); })()), "getColor", [], "method", false, false, false, 209))) : ("inherit"))];
                        // line 210
                        echo "                                    <span style=\"white-space: nowrap;\"><span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                        echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 210, $this->source); })()), "html", null, true);
                        echo ";\"> </span> <span>";
                        echo twig_escape_filter($this->env, (isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 210, $this->source); })()), "html", null, true);
                        echo "</span></span>
                                </td>
                            ";
                    }
                    // line 213
                    echo "                        ";
                }
                // line 214
                echo "                        ";
                if (array_key_exists("listItemTemplate", $context)) {
                    // line 215
                    echo "                            ";
                    $context["templateVariables"] = twig_array_merge((isset($context["templateVariables"]) || array_key_exists("templateVariables", $context) ? $context["templateVariables"] : (function () { throw new RuntimeError('Variable "templateVariables" does not exist.', 215, $this->source); })()), ["item" => $context["item"]]);
                    // line 216
                    echo twig_include($this->env, $context, (isset($context["listItemTemplate"]) || array_key_exists("listItemTemplate", $context) ? $context["listItemTemplate"] : (function () { throw new RuntimeError('Variable "listItemTemplate" does not exist.', 216, $this->source); })()), (isset($context["templateVariables"]) || array_key_exists("templateVariables", $context) ? $context["templateVariables"] : (function () { throw new RuntimeError('Variable "templateVariables" does not exist.', 216, $this->source); })()));
                }
                // line 218
                echo "                        ";
                if (twig_test_empty((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 218, $this->source); })()))) {
                    // line 219
                    echo "                            <td class=\"visible-md visible-lg\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 219), "html", null, true);
                    echo "</td>
                        ";
                }
                // line 221
                echo "
                        ";
                // line 222
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("list.columns", $context);
                echo "
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
            // line 225
            echo "                </tbody>
            </table>
        </div>
        <div class=\"panel-footer\">";
            // line 229
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 231
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 231, $this->source); })()), "page" =>             // line 232
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 232, $this->source); })()), "limit" =>             // line 233
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 233, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 234
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 234, $this->source); })())), "sessionVar" =>             // line 235
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 235, $this->source); })())]);
            // line 237
            echo "</div>
    ";
        } else {
            // line 239
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
        }
        // line 241
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Standard/list.html.twig";
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
        return array (  489 => 241,  486 => 239,  482 => 237,  480 => 235,  479 => 234,  478 => 233,  477 => 232,  476 => 231,  475 => 229,  470 => 225,  453 => 222,  450 => 221,  444 => 219,  441 => 218,  438 => 216,  435 => 215,  432 => 214,  429 => 213,  420 => 210,  418 => 209,  417 => 208,  415 => 207,  413 => 206,  410 => 205,  408 => 204,  405 => 203,  399 => 200,  396 => 199,  394 => 198,  388 => 195,  384 => 194,  381 => 193,  379 => 192,  378 => 191,  376 => 190,  372 => 188,  370 => 187,  368 => 185,  366 => 184,  361 => 181,  359 => 179,  358 => 178,  357 => 177,  356 => 176,  355 => 174,  354 => 173,  353 => 170,  352 => 169,  351 => 168,  350 => 165,  349 => 164,  348 => 163,  347 => 160,  346 => 159,  345 => 158,  344 => 155,  343 => 153,  342 => 151,  340 => 150,  338 => 149,  335 => 148,  318 => 147,  311 => 143,  308 => 142,  305 => 137,  304 => 136,  303 => 134,  301 => 133,  298 => 132,  295 => 131,  281 => 129,  278 => 128,  275 => 127,  272 => 126,  254 => 125,  252 => 124,  249 => 123,  246 => 122,  242 => 120,  240 => 117,  239 => 116,  237 => 114,  235 => 113,  233 => 106,  232 => 105,  231 => 102,  229 => 99,  228 => 97,  227 => 96,  226 => 93,  224 => 92,  218 => 89,  215 => 88,  213 => 87,  210 => 86,  207 => 85,  204 => 84,  201 => 83,  199 => 82,  196 => 81,  193 => 80,  190 => 79,  188 => 78,  185 => 77,  182 => 76,  179 => 75,  177 => 74,  174 => 73,  171 => 72,  168 => 71,  165 => 70,  161 => 69,  153 => 65,  146 => 61,  142 => 60,  138 => 59,  135 => 58,  133 => 55,  132 => 53,  131 => 51,  130 => 50,  129 => 49,  128 => 48,  127 => 47,  126 => 46,  125 => 45,  124 => 43,  122 => 42,  119 => 41,  115 => 40,  111 => 36,  110 => 35,  109 => 34,  108 => 32,  107 => 29,  103 => 28,  96 => 26,  88 => 13,  85 => 12,  79 => 10,  76 => 9,  73 => 8,  69 => 7,  65 => 5,  62 => 23,  59 => 21,  56 => 19,  54 => 18,  52 => 17,  50 => 3,  48 => 2,  46 => 1,  39 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Standard/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Standard\\list.html.twig");
    }
}
