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

/* @MauticPoint/Group/list.html.twig */
class __TwigTemplate_711a7e78ce3b7ef0e4930cb00566324e extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 3, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticPoint/Group/list.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()))) ? (true) : (false));
        // line 2
        $context["tmpl"] = "list";
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "group";
    }

    // line 6
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.group.header.index"), "html", null, true);
    }

    // line 8
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 13, $this->source); })()), "point:groups:create", [], "array", false, false, false, 13)], "routeBase" => "point.group", "langVar" => "point.group"]);
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <div class=\"panel panel-default bdr-t-wdh-0\">
        <div class=\"page-list\">";
        // line 24
        echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>         // line 25
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 25, $this->source); })()), "searchHelp" => "mautic.lead.list.help.searchcommands", "action" =>         // line 27
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 27, $this->source); })())]);
        // line 29
        if ((array_key_exists("items", $context) &&  !twig_test_empty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 29, $this->source); })())))) {
            // line 30
            echo "                <div class=\"table-responsive\">
                    <table class=\"table table-hover\" id=\"groupTable\">
                        <thead>
                        <tr>
                            ";
            // line 34
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#groupTable", "langVar" => "point.group", "routeBase" => "point.group", "templateButtons" => ["delete" => twig_get_attribute($this->env, $this->source,             // line 42
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 42, $this->source); })()), "point:groups:delete", [], "array", false, false, false, 42)]]);
            // line 44
            echo "
                            ";
            // line 45
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point.group", "orderBy" => "pl.name", "text" => "mautic.core.name", "class" => "col-group-name", "default" => true]);
            // line 54
            echo "

                            ";
            // line 56
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point.group", "orderBy" => "pl.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-group-id"]);
            // line 64
            echo "
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 68, $this->source); })()));
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
                echo "                            <tr>
                                <td>";
                // line 71
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 72
$context["item"], "templateButtons" => ["edit" => twig_get_attribute($this->env, $this->source,                 // line 74
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 74, $this->source); })()), "point:groups:edit", [], "array", false, false, false, 74), "delete" => twig_get_attribute($this->env, $this->source,                 // line 75
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 75, $this->source); })()), "point:groups:delete", [], "array", false, false, false, 75)], "routeBase" => "point.group", "langVar" => "point.group"]);
                // line 80
                echo "</td>
                                <td>
                                    <div>";
                // line 83
                echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 86
$context["item"], "model" => "point.group"]);
                // line 88
                echo "

                                        ";
                // line 90
                if (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 90, $this->source); })()), "point:groups:edit", [], "array", false, false, false, 90)) {
                    // line 91
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_point.group_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source,                     // line 93
$context["item"], "getId", [], "method", false, false, false, 93)]), "html", null, true);
                    // line 94
                    echo "\" data-toggle=\"ajax\">
                                                ";
                    // line 95
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 95), "html", null, true);
                    echo "
                                            </a>
                                        ";
                } else {
                    // line 98
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 98), "html", null, true);
                    echo "
                                        ";
                }
                // line 100
                echo "                                    </div>
                                    ";
                // line 101
                $context["description"] = twig_get_attribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 101);
                // line 102
                echo "                                    ";
                if ((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 102, $this->source); })())) {
                    // line 103
                    echo "                                        <div class=\"text-muted mt-4\">
                                            <small>";
                    // line 104
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 104, $this->source); })()));
                    echo "</small>
                                        </div>
                                    ";
                }
                // line 107
                echo "                                </td>
                                <td class=\"visible-md visible-lg\">";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 108), "html", null, true);
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
            // line 111
            echo "                        </tbody>
                    </table>
                    <div class=\"panel-footer\">";
            // line 114
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => twig_length_filter($this->env,             // line 115
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 115, $this->source); })())), "page" =>             // line 116
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 116, $this->source); })()), "limit" =>             // line 117
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 117, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_point.group_index"), "sessionVar" => "point.group"]);
            // line 121
            echo "</div>
                </div>
            ";
        } else {
            // line 124
            echo "                ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
            echo "
            ";
        }
        // line 126
        echo "        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPoint/Group/list.html.twig";
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
        return array (  229 => 126,  223 => 124,  218 => 121,  216 => 117,  215 => 116,  214 => 115,  213 => 114,  209 => 111,  192 => 108,  189 => 107,  183 => 104,  180 => 103,  177 => 102,  175 => 101,  172 => 100,  166 => 98,  160 => 95,  157 => 94,  155 => 93,  153 => 91,  151 => 90,  147 => 88,  145 => 86,  144 => 83,  140 => 80,  138 => 75,  137 => 74,  136 => 72,  135 => 71,  132 => 69,  115 => 68,  109 => 64,  107 => 56,  103 => 54,  101 => 45,  98 => 44,  96 => 42,  95 => 34,  89 => 30,  87 => 29,  85 => 27,  84 => 25,  83 => 24,  80 => 22,  76 => 21,  72 => 13,  71 => 9,  67 => 8,  60 => 6,  53 => 4,  49 => 3,  47 => 2,  45 => 1,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPoint/Group/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Resources\\views\\Group\\list.html.twig");
    }
}
