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

/* @MauticPoint/Point/_list.html.twig */
class __TwigTemplate_bc2fc8fbcbaf4a5c08dfb06b3ae8b873 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            echo "    <div class=\"table-responsive page-list\">
        <table class=\"table table-hover point-list\" id=\"pointTable\">
            <thead>
            <tr>
                ";
            // line 6
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#pointTable", "routeBase" => "point", "templateButtons" => ["delete" => twig_get_attribute($this->env, $this->source,             // line 11
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 11, $this->source); })()), "point:points:delete", [], "array", false, false, false, 11)]]);
            // line 13
            echo "

                ";
            // line 15
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point", "orderBy" => "p.name", "text" => "mautic.core.name", "class" => "col-point-name", "default" => true]);
            // line 21
            echo "

                ";
            // line 23
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point", "orderBy" => "cat.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-point-category"]);
            // line 28
            echo "

                ";
            // line 30
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point", "orderBy" => "pl.name", "text" => "mautic.point.thead.group", "class" => "visible-md visible-lg col-point-group"]);
            // line 35
            echo "

                ";
            // line 37
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point", "orderBy" => "p.delta", "text" => "mautic.point.thead.delta", "class" => "visible-md visible-lg col-point-delta"]);
            // line 42
            echo "

                <th class=\"col-point-action\">";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.thead.action"), "html", null, true);
            echo "</th>

                ";
            // line 46
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point", "orderBy" => "p.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-point-id"]);
            // line 51
            echo "
            </tr>
            </thead>
            <tbody>
            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 55, $this->source); })()));
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
                // line 56
                echo "                <tr>
                    <td>
                        ";
                // line 58
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 59
$context["item"], "templateButtons" => ["edit" => twig_get_attribute($this->env, $this->source,                 // line 61
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 61, $this->source); })()), "point:points:edit", [], "array", false, false, false, 61), "clone" => twig_get_attribute($this->env, $this->source,                 // line 62
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 62, $this->source); })()), "point:points:create", [], "array", false, false, false, 62), "delete" => twig_get_attribute($this->env, $this->source,                 // line 63
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 63, $this->source); })()), "point:points:delete", [], "array", false, false, false, 63)], "routeBase" => "point"]);
                // line 66
                echo "
                    </td>
                    <td>
                        <div>
                            ";
                // line 70
                echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => $context["item"], "model" => "point"]);
                echo "
                            ";
                // line 71
                if (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 71, $this->source); })()), "point:points:edit", [], "array", false, false, false, 71)) {
                    // line 72
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_point_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                    echo "\" data-toggle=\"ajax\">
                                    ";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 73), "html", null, true);
                    echo "
                                </a>
                            ";
                } else {
                    // line 76
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 76), "html", null, true);
                    echo "
                            ";
                }
                // line 78
                echo "                        </div>
                        ";
                // line 79
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 79))) {
                    // line 80
                    echo "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 81
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 81));
                    echo "</small>
                            </div>
                        ";
                }
                // line 84
                echo "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 86
                $context["category"] = twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 86);
                // line 87
                echo "                        ";
                $context["catName"] = ((twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", true, true, false, 87)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 87), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 88
                echo "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 88, $this->source); })())) ? (("#" . twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 88, $this->source); })()), "color", [], "any", false, false, false, 88))) : ("inherit"));
                // line 89
                echo "                        <span style=\"white-space: nowrap;\">
                          <span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                // line 90
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 90, $this->source); })()), "html", null, true);
                echo ";\"> </span>
                          <span>";
                // line 91
                echo twig_escape_filter($this->env, (isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 91, $this->source); })()), "html", null, true);
                echo "</span>
                        </span>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 95
                $context["group"] = twig_get_attribute($this->env, $this->source, $context["item"], "group", [], "any", false, false, false, 95);
                // line 96
                echo "                        ";
                $context["groupName"] = ((twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "name", [], "any", true, true, false, 96)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "name", [], "any", false, false, false, 96), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.group.form.nogroup"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.group.form.nogroup")));
                // line 97
                echo "                        ";
                echo twig_escape_filter($this->env, (isset($context["groupName"]) || array_key_exists("groupName", $context) ? $context["groupName"] : (function () { throw new RuntimeError('Variable "groupName" does not exist.', 97, $this->source); })()), "html", null, true);
                echo "
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "delta", [], "any", false, false, false, 99), "html", null, true);
                echo "</td>
                    <td>";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["actions"] ?? null), twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 100), [], "array", false, true, false, 100), "label", [], "any", true, true, false, 100)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["actions"] ?? null), twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 100), [], "array", false, true, false, 100), "label", [], "any", false, false, false, 100), "")) : (""))), "html", null, true);
                echo "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 101), "html", null, true);
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
            // line 104
            echo "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">
        ";
            // line 108
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => twig_length_filter($this->env,             // line 109
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 109, $this->source); })())), "page" =>             // line 110
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 110, $this->source); })()), "limit" =>             // line 111
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 111, $this->source); })()), "menuLinkId" => "mautic_point_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_point_index"), "sessionVar" => "point"]);
            // line 115
            echo "
    </div>
";
        } else {
            // line 118
            echo "    ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.point.action.noresults.tip"]);
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPoint/Point/_list.html.twig";
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
        return array (  237 => 118,  232 => 115,  230 => 111,  229 => 110,  228 => 109,  227 => 108,  221 => 104,  204 => 101,  200 => 100,  196 => 99,  190 => 97,  187 => 96,  185 => 95,  178 => 91,  174 => 90,  171 => 89,  168 => 88,  165 => 87,  163 => 86,  159 => 84,  153 => 81,  150 => 80,  148 => 79,  145 => 78,  139 => 76,  133 => 73,  128 => 72,  126 => 71,  122 => 70,  116 => 66,  114 => 63,  113 => 62,  112 => 61,  111 => 59,  110 => 58,  106 => 56,  89 => 55,  83 => 51,  81 => 46,  76 => 44,  72 => 42,  70 => 37,  66 => 35,  64 => 30,  60 => 28,  58 => 23,  54 => 21,  52 => 15,  48 => 13,  46 => 11,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPoint/Point/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Resources\\views\\Point\\_list.html.twig");
    }
}
