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

/* @MauticDynamicContent/DynamicContent/_list.html.twig */
class __TwigTemplate_4e387cc9b294a54d0497837b5c240add extends Template
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
        // line 12
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 12, $this->source); })())) > 0)) {
            // line 13
            echo "    <div class=\"table-responsive page-list\">
        <table class=\"table table-hover dwctable-list\" id=\"dwcTable\">
            <thead>
            <tr>
                ";
            // line 17
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#dwcTable", "routeBase" => "dynamicContent", "templateButtons" => ["delete" => (twig_get_attribute($this->env, $this->source,             // line 22
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "dynamiccontent:dynamiccontents:deleteown", [], "array", false, false, false, 22) || twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "dynamiccontent:dynamiccontents:deleteother", [], "array", false, false, false, 22))]]);
            // line 24
            echo "

                ";
            // line 26
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "dynamicContent", "orderBy" => "e.name", "text" => "mautic.core.name", "class" => "col-dwc-name", "default" => true]);
            // line 32
            echo "

                ";
            // line 34
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "dynamicContent", "orderBy" => "e.slotName", "text" => "mautic.dynamicContent.label.slot_name", "class" => "col-dwc-slotname visible-md visible-lg"]);
            // line 39
            echo "

                ";
            // line 41
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "dynamicContent", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "col-dwc-category visible-md visible-lg"]);
            // line 46
            echo "

                ";
            // line 48
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "dynamicContent", "orderBy" => "e.id", "text" => "mautic.core.id", "class" => "col-dwc-id visible-md visible-lg"]);
            // line 53
            echo "
            </tr>
            </thead>
            <tbody>
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 57, $this->source); })()));
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
                // line 58
                echo "                <tr>
                    <td>
                        ";
                // line 60
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 61
$context["item"], "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 63
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 63, $this->source); })()), "dynamiccontent:dynamiccontents:editown", [], "array", false, false, false, 63), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 63, $this->source); })()), "dynamiccontent:dynamiccontents:editother", [], "array", false, false, false, 63), twig_get_attribute($this->env, $this->source, $context["item"], "createdBy", [], "any", false, false, false, 63)), "clone" => twig_get_attribute($this->env, $this->source,                 // line 64
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 64, $this->source); })()), "dynamiccontent:dynamiccontents:create", [], "array", false, false, false, 64), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 65
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 65, $this->source); })()), "dynamiccontent:dynamiccontents:deleteown", [], "array", false, false, false, 65), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 65, $this->source); })()), "dynamiccontent:dynamiccontents:deleteother", [], "array", false, false, false, 65), twig_get_attribute($this->env, $this->source, $context["item"], "createdBy", [], "any", false, false, false, 65))], "routeBase" => "dynamicContent", "nameGetter" => "getName"]);
                // line 69
                echo "
                    </td>
                    <td>
                        ";
                // line 72
                echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => $context["item"], "model" => "dynamicContent"]);
                echo "
                        <a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_dynamicContent_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\" data-toggle=\"ajax\">
                            ";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 74), "html", null, true);
                echo "
                            ";
                // line 75
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "isVariant", [], "any", false, false, false, 75) || twig_get_attribute($this->env, $this->source, $context["item"], "isTranslation", [], "any", false, false, false, 75))) {
                    // line 76
                    echo "                                <span>
                                  ";
                    // line 77
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "isVariant", [], "any", false, false, false, 77)) {
                        // line 78
                        echo "                                    <span data-toggle=\"tooltip\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.ab_test"), "html", null, true);
                        echo "\"><i class=\"fa fa-fw fa-sitemap\"></i></span>
                                  ";
                    }
                    // line 80
                    echo "                                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "isTranslation", [], "any", false, false, false, 80)) {
                        // line 81
                        echo "                                    <span data-toggle=\"tooltip\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.translation"), "html", null, true);
                        echo "\"><i class=\"fa fa-fw fa-language\"></i></span>
                                  ";
                    }
                    // line 83
                    echo "                                 </span>
                            ";
                }
                // line 85
                echo "                        </a>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slotName", [], "any", false, false, false, 87), "html", null, true);
                echo "</td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 89
                $context["catName"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 89))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 89), "title", [], "any", false, false, false, 89)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 90
                echo "                        ";
                $context["color"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 90))) ? (("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 90), "color", [], "any", false, false, false, 90))) : ("inherit"));
                // line 91
                echo "                        <span style=\"white-space: nowrap;\">
                          <span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                // line 92
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 92, $this->source); })()), "html", null, true);
                echo ";\"> </span>
                          <span>";
                // line 93
                echo twig_escape_filter($this->env, (isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 93, $this->source); })()), "html", null, true);
                echo "</span>
                        </span>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 96), "html", null, true);
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
            // line 99
            echo "            </tbody>
        </table>
        <div class=\"panel-footer\">
            ";
            // line 102
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => twig_length_filter($this->env,             // line 103
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 103, $this->source); })())), "page" =>             // line 104
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 104, $this->source); })()), "limit" =>             // line 105
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 105, $this->source); })()), "menuLinkId" => "mautic_dynamicContent_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_dynamicContent_index"), "sessionVar" => "dynamicContent"]);
            // line 109
            echo "
        </div>
    </div>
";
        } else {
            // line 113
            echo "    ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticDynamicContent/DynamicContent/_list.html.twig";
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
        return array (  208 => 113,  202 => 109,  200 => 105,  199 => 104,  198 => 103,  197 => 102,  192 => 99,  175 => 96,  169 => 93,  165 => 92,  162 => 91,  159 => 90,  157 => 89,  152 => 87,  148 => 85,  144 => 83,  138 => 81,  135 => 80,  129 => 78,  127 => 77,  124 => 76,  122 => 75,  118 => 74,  114 => 73,  110 => 72,  105 => 69,  103 => 65,  102 => 64,  101 => 63,  100 => 61,  99 => 60,  95 => 58,  78 => 57,  72 => 53,  70 => 48,  66 => 46,  64 => 41,  60 => 39,  58 => 34,  54 => 32,  52 => 26,  48 => 24,  46 => 22,  45 => 17,  39 => 13,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticDynamicContent/DynamicContent/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DynamicContentBundle\\Resources\\views\\DynamicContent\\_list.html.twig");
    }
}
