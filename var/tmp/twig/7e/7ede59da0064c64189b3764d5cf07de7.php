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

/* @MauticStage/Stage/list.html.twig */
class __TwigTemplate_c75ad35ba72106bb3cd45137cca0baf2 extends Template
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
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticStage/Stage/list.html.twig", 4);
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
        echo "stage";
    }

    // line 6
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.stages.menu.root", [], "messages");
    }

    // line 10
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 13, $this->source); })()), "stage:stages:create", [], "array", false, false, false, 13)], "routeBase" => "stage"]);
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">";
            // line 22
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 24
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 24, $this->source); })()), "searchHelp" => "mautic.core.help.searchcommands", "action" =>             // line 26
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 26, $this->source); })())]);
            // line 28
            echo "<div class=\"page-list\">
        ";
            // line 29
            $this->displayBlock("listResults", $context, $blocks);
            echo "
    </div>
</div>
";
        } else {
            // line 33
            echo "    ";
            $this->displayBlock("listResults", $context, $blocks);
            echo "
";
        }
    }

    // line 37
    public function block_listResults($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    ";
        if ((array_key_exists("items", $context) &&  !twig_test_empty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 38, $this->source); })())))) {
            // line 39
            echo "        <div class=\"table-responsive page-list\">
        <table class=\"table table-hover stage-list\" id=\"stageTable\">
            <thead>
            <tr>";
            // line 43
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#stageTable", "routeBase" => "stage", "templateButtons" => ["delete" => twig_get_attribute($this->env, $this->source,             // line 49
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 49, $this->source); })()), "stage:stages:delete", [], "array", false, false, false, 49)]]);
            // line 52
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "stage", "orderBy" => "s.name", "text" => "mautic.core.name", "class" => "col-stage-name", "default" => true]);
            // line 60
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "stage", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-stage-category"]);
            // line 67
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "stage", "orderBy" => "s.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-stage-id"]);
            // line 74
            echo "</tr>
            </thead>
            <tbody>
            ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 77, $this->source); })()));
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
                echo "                <tr>
                    <td>";
                // line 80
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 82
$context["item"], "templateButtons" => ["edit" => twig_get_attribute($this->env, $this->source,                 // line 84
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 84, $this->source); })()), "stage:stages:edit", [], "array", false, false, false, 84), "clone" => twig_get_attribute($this->env, $this->source,                 // line 85
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 85, $this->source); })()), "stage:stages:create", [], "array", false, false, false, 85), "delete" => twig_get_attribute($this->env, $this->source,                 // line 86
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 86, $this->source); })()), "stage:stages:delete", [], "array", false, false, false, 86)], "routeBase" => "stage"]);
                // line 90
                echo "</td>
                    <td>
                        <div>";
                // line 93
                echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 94
$context["item"], "model" => "stage"]);
                // line 95
                if (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 95, $this->source); })()), "stage:stages:edit", [], "array", false, false, false, 95)) {
                    // line 96
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_stage_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source,                     // line 98
$context["item"], "getId", [], "method", false, false, false, 98)]), "html", null, true);
                    // line 99
                    echo "\" data-toggle=\"ajax\">
                                ";
                    // line 100
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 100), "html", null, true);
                    echo "
                            </a>
                            ";
                } else {
                    // line 103
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 103), "html", null, true);
                    echo "
                            ";
                }
                // line 105
                echo "                        </div>
                        ";
                // line 106
                $context["description"] = twig_get_attribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 106);
                // line 107
                echo "                        ";
                if ((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 107, $this->source); })())) {
                    // line 108
                    echo "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 109
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 109, $this->source); })()));
                    echo "</small>
                            </div>
                        ";
                }
                // line 112
                echo "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 114
                $context["category"] = twig_get_attribute($this->env, $this->source, $context["item"], "getCategory", [], "method", false, false, false, 114);
                // line 115
                echo "                        ";
                $context["catName"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 115, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 115, $this->source); })()), "getTitle", [], "method", false, false, false, 115)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 116
                echo "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 116, $this->source); })())) ? (("#" . twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 116, $this->source); })()), "getColor", [], "method", false, false, false, 116))) : ("inherit"));
                // line 117
                echo "                        <span style=\"white-space: nowrap;\">
                        <span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                // line 118
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 118, $this->source); })()), "html", null, true);
                echo ";\"> </span> 
                        <span>";
                // line 119
                echo twig_escape_filter($this->env, (isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 119, $this->source); })()), "html", null, true);
                echo "</span>
                        </span>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 122), "html", null, true);
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
            // line 125
            echo "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">";
            // line 129
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => twig_length_filter($this->env,             // line 131
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 131, $this->source); })())), "page" =>             // line 132
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 132, $this->source); })()), "limit" =>             // line 133
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 133, $this->source); })()), "menuLinkId" => "mautic_stage_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_stage_index"), "sessionVar" => "stage"]);
            // line 138
            echo "</div>
    ";
        } else {
            // line 140
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.stage.action.noresults.tip"]);
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticStage/Stage/list.html.twig";
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
        return array (  262 => 140,  258 => 138,  256 => 133,  255 => 132,  254 => 131,  253 => 129,  248 => 125,  231 => 122,  225 => 119,  221 => 118,  218 => 117,  215 => 116,  212 => 115,  210 => 114,  206 => 112,  200 => 109,  197 => 108,  194 => 107,  192 => 106,  189 => 105,  183 => 103,  177 => 100,  174 => 99,  172 => 98,  170 => 96,  168 => 95,  166 => 94,  165 => 93,  161 => 90,  159 => 86,  158 => 85,  157 => 84,  156 => 82,  155 => 80,  152 => 78,  135 => 77,  130 => 74,  128 => 67,  126 => 60,  124 => 52,  122 => 49,  121 => 43,  116 => 39,  113 => 38,  109 => 37,  101 => 33,  94 => 29,  91 => 28,  89 => 26,  88 => 24,  87 => 22,  85 => 21,  83 => 20,  79 => 19,  75 => 13,  74 => 11,  70 => 10,  65 => 7,  61 => 6,  54 => 5,  50 => 4,  48 => 2,  46 => 1,  39 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticStage/Stage/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\StageBundle\\Resources\\views\\Stage\\list.html.twig");
    }
}
