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

/* @MauticFocus/Focus/_list.html.twig */
class __TwigTemplate_3b73657ad1d8871a3629f2e9a81f96db extends Template
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
        // line 3
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("plugins/MauticFocusBundle/Assets/js/focus.js");
        echo "
";
        // line 4
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 4, $this->source); })())) > 0)) {
            // line 5
            echo "    <div class=\"table-responsive page-list\">
        <table class=\"table table-hover focus-list\" id=\"focusTable\">
            <thead>
            <tr>
                ";
            // line 9
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#focusTable", "routeBase" => "focus", "templateButtons" => ["delete" => twig_get_attribute($this->env, $this->source,             // line 14
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 14, $this->source); })()), "focus:items:delete", [], "array", false, false, false, 14)]]);
            // line 16
            echo "

                ";
            // line 18
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "focus", "orderBy" => "f.name", "text" => "mautic.core.name", "class" => "col-focus-name", "default" => true]);
            // line 24
            echo "

                ";
            // line 26
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "focus", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-focus-category"]);
            // line 31
            echo "

                ";
            // line 33
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "focus", "orderBy" => "f.type", "text" => "mautic.focus.thead.type", "class" => "visible-md visible-lg col-focus-type"]);
            // line 38
            echo "

                ";
            // line 40
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "focus", "orderBy" => "f.style", "text" => "mautic.focus.thead.style", "class" => "visible-md visible-lg col-focus-style"]);
            // line 45
            echo "

                ";
            // line 47
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "focus", "orderBy" => "f.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-focus-id"]);
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
$context["item"], "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 62
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 62, $this->source); })()), "focus:items:editown", [], "array", false, false, false, 62), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 62, $this->source); })()), "focus:items:editother", [], "array", false, false, false, 62), twig_get_attribute($this->env, $this->source, $context["item"], "createdBy", [], "any", false, false, false, 62)), "clone" => twig_get_attribute($this->env, $this->source,                 // line 63
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 63, $this->source); })()), "focus:items:create", [], "array", false, false, false, 63), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 64
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 64, $this->source); })()), "focus:items:deleteown", [], "array", false, false, false, 64), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 64, $this->source); })()), "focus:items:deleteother", [], "array", false, false, false, 64), twig_get_attribute($this->env, $this->source, $context["item"], "createdBy", [], "any", false, false, false, 64))], "routeBase" => "focus"]);
                // line 67
                echo "
                    </td>
                    <td>
                        <div>
                            ";
                // line 71
                echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => $context["item"], "model" => "focus"]);
                echo "
                            <a data-toggle=\"ajax\" href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_focus_action", ["objectId" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 72), "objectAction" => "view"]), "html", null, true);
                echo "\">
                                ";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 73), "html", null, true);
                echo "
                            </a>
                        </div>
                        ";
                // line 76
                if (twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 78
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 78));
                    echo "</small>
                            </div>
                        ";
                }
                // line 81
                echo "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 83
                $context["category"] = twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 83);
                // line 84
                echo "                        ";
                $context["catName"] = ((twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", true, true, false, 84)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 84), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 85
                echo "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 85, $this->source); })())) ? (("#" . twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 85, $this->source); })()), "color", [], "any", false, false, false, 85))) : ("inherit"));
                // line 86
                echo "                        <span style=\"white-space: nowrap;\"><span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 86, $this->source); })()), "html", null, true);
                echo ";\"> </span><span>";
                echo twig_escape_filter($this->env, (isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 86, $this->source); })()), "html", null, true);
                echo "</span></span>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.focus.type." . twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 88))), "html", null, true);
                echo "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 89
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.focus.style." . twig_get_attribute($this->env, $this->source, $context["item"], "style", [], "any", false, false, false, 89))), "html", null, true);
                echo "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 90), "html", null, true);
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
            // line 93
            echo "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">
        ";
            // line 97
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => twig_length_filter($this->env,             // line 98
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 98, $this->source); })())), "page" =>             // line 99
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 99, $this->source); })()), "limit" =>             // line 100
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 100, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_focus_index"), "sessionVar" => "focus"]);
            // line 103
            echo "
    </div>
";
        } else {
            // line 106
            echo "    ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.focus.noresults.tip"]);
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFocus/Focus/_list.html.twig";
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
        return array (  207 => 106,  202 => 103,  200 => 100,  199 => 99,  198 => 98,  197 => 97,  191 => 93,  174 => 90,  170 => 89,  166 => 88,  158 => 86,  155 => 85,  152 => 84,  150 => 83,  146 => 81,  140 => 78,  137 => 77,  135 => 76,  129 => 73,  125 => 72,  121 => 71,  115 => 67,  113 => 64,  112 => 63,  111 => 62,  110 => 60,  109 => 59,  105 => 57,  88 => 56,  82 => 52,  80 => 47,  76 => 45,  74 => 40,  70 => 38,  68 => 33,  64 => 31,  62 => 26,  58 => 24,  56 => 18,  52 => 16,  50 => 14,  49 => 9,  43 => 5,  41 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFocus/Focus/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Focus\\_list.html.twig");
    }
}
