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

/* @MauticPoint/Trigger/_list.html.twig */
class __TwigTemplate_5287a149fbebdf97f49f65a545259492 extends Template
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
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-hover pointtrigger-list\" id=\"triggerTable\">
            <thead>
            <tr>
                ";
            // line 6
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#triggerTable", "langVar" => "point.trigger", "routeBase" => "pointtrigger", "templateButtons" => ["delete" => twig_get_attribute($this->env, $this->source,             // line 12
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 12, $this->source); })()), "point:triggers:delete", [], "array", false, false, false, 12)]]);
            // line 14
            echo "

                <th class='col-pointtrigger-color'></th>

                ";
            // line 18
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point.trigger", "orderBy" => "t.name", "text" => "mautic.core.name", "class" => "col-pointtrigger-name", "default" => true]);
            // line 24
            echo "

                ";
            // line 26
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point.trigger", "orderBy" => "cat.title", "text" => "mautic.core.category", "class" => "col-pointtrigger-category visible-md visible-lg"]);
            // line 31
            echo "

                ";
            // line 33
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point.trigger", "orderBy" => "pl.name", "text" => "mautic.point.thead.group", "class" => "visible-md visible-lg col-point-group"]);
            // line 38
            echo "

                ";
            // line 40
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point.trigger", "orderBy" => "t.points", "text" => "mautic.point.trigger.thead.points", "class" => "col-pointtrigger-points"]);
            // line 45
            echo "

                ";
            // line 47
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point.trigger", "orderBy" => "t.id", "text" => "mautic.core.id", "class" => "col-pointtrigger-id visible-md visible-lg"]);
            // line 52
            echo "
            </tr>
            </thead>
            <tbody>
            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 56, $this->source); })()));
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
                // line 57
                echo "                <tr>
                    <td>
                        ";
                // line 59
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 60
$context["item"], "templateButtons" => ["edit" => twig_get_attribute($this->env, $this->source,                 // line 62
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 62, $this->source); })()), "point:triggers:edit", [], "array", false, false, false, 62), "clone" => twig_get_attribute($this->env, $this->source,                 // line 63
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 63, $this->source); })()), "point:triggers:create", [], "array", false, false, false, 63), "delete" => twig_get_attribute($this->env, $this->source,                 // line 64
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 64, $this->source); })()), "point:triggers:delete", [], "array", false, false, false, 64)], "routeBase" => "pointtrigger", "langVar" => "point.trigger"]);
                // line 68
                echo "
                    </td>
                    <td>
                        <span class=\"label label-default pa-10\" style=\"background: ";
                // line 71
                echo ((!twig_in_filter("#", twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 71))) ? ("#") : (""));
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 71), "html", null, true);
                echo ";\"> </span>
                    </td>
                    <td>
                        <div>
                            ";
                // line 75
                echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => $context["item"], "model" => "point.trigger"]);
                echo "
                            ";
                // line 76
                if (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 76, $this->source); })()), "point:triggers:edit", [], "array", false, false, false, 76)) {
                    // line 77
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_pointtrigger_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                    echo "\" data-toggle=\"ajax\">
                                    ";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 78), "html", null, true);
                    echo "
                                </a>
                            ";
                } else {
                    // line 81
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 81), "html", null, true);
                    echo "
                            ";
                }
                // line 83
                echo "                        </div>
                        ";
                // line 84
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 84))) {
                    // line 85
                    echo "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 86
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 86));
                    echo "</small>
                            </div>
                        ";
                }
                // line 89
                echo "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 91
                $context["category"] = twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 91);
                // line 92
                echo "                        ";
                $context["catName"] = ((twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", true, true, false, 92)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 92), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 93
                echo "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 93, $this->source); })())) ? (("#" . twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 93, $this->source); })()), "color", [], "any", false, false, false, 93))) : ("inherit"));
                // line 94
                echo "                        <span style=\"white-space: nowrap;\">
                          <span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                // line 95
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 95, $this->source); })()), "html", null, true);
                echo ";\"> </span>
                          <span>";
                // line 96
                echo twig_escape_filter($this->env, (isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 96, $this->source); })()), "html", null, true);
                echo "</span>
                        </span>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 100
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "group", [], "any", false, true, false, 100), "name", [], "any", true, true, false, 100)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "group", [], "any", false, true, false, 100), "name", [], "any", false, false, false, 100), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.group.form.nogroup"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.group.form.nogroup"))), "html", null, true);
                echo "
                    </td>
                    <td>";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "points", [], "any", false, false, false, 102), "html", null, true);
                echo "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 103), "html", null, true);
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
            // line 106
            echo "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">
        ";
            // line 110
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => twig_length_filter($this->env,             // line 111
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 111, $this->source); })())), "page" =>             // line 112
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 112, $this->source); })()), "limit" =>             // line 113
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 113, $this->source); })()), "menuLinkId" => "mautic_pointtrigger_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_pointtrigger_index"), "sessionVar" => "point.trigger"]);
            // line 117
            echo "
    </div>
";
        } else {
            // line 120
            echo "    ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.point.trigger.noresults.tip"]);
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPoint/Trigger/_list.html.twig";
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
        return array (  231 => 120,  226 => 117,  224 => 113,  223 => 112,  222 => 111,  221 => 110,  215 => 106,  198 => 103,  194 => 102,  189 => 100,  182 => 96,  178 => 95,  175 => 94,  172 => 93,  169 => 92,  167 => 91,  163 => 89,  157 => 86,  154 => 85,  152 => 84,  149 => 83,  143 => 81,  137 => 78,  132 => 77,  130 => 76,  126 => 75,  118 => 71,  113 => 68,  111 => 64,  110 => 63,  109 => 62,  108 => 60,  107 => 59,  103 => 57,  86 => 56,  80 => 52,  78 => 47,  74 => 45,  72 => 40,  68 => 38,  66 => 33,  62 => 31,  60 => 26,  56 => 24,  54 => 18,  48 => 14,  46 => 12,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPoint/Trigger/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Resources\\views\\Trigger\\_list.html.twig");
    }
}
