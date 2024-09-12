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

/* @MauticNotification/Notification/_list.html.twig */
class __TwigTemplate_01e7b165c1346c5623cc199609d79cf4 extends Template
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
        // line 13
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 13, $this->source); })())) > 0)) {
            // line 14
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-hover notification-list\">
            <thead>
            <tr>
                ";
            // line 18
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "routeBase" => "notification", "templateButtons" => ["delete" => (twig_get_attribute($this->env, $this->source,             // line 22
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "notification:notifications:deleteown", [], "array", false, false, false, 22) || twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "notification:notifications:deleteother", [], "array", false, false, false, 22))]]);
            // line 24
            echo "

                ";
            // line 26
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "notification", "orderBy" => "e.name", "text" => "mautic.core.name", "class" => "col-notification-name", "default" => true]);
            // line 32
            echo "

                ";
            // line 34
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "notification", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-notification-category"]);
            // line 39
            echo "

                <th class=\"visible-sm visible-md visible-lg col-notification-stats\">";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.stats"), "html", null, true);
            echo "</th>

                ";
            // line 43
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "notification", "orderBy" => "e.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-notification-id"]);
            // line 48
            echo "
            </tr>
            </thead>
            <tbody>
            ";
            // line 53
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 53, $this->source); })()));
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
                // line 54
                echo "                ";
                $context["type"] = twig_get_attribute($this->env, $this->source, $context["item"], "notificationType", [], "any", false, false, false, 54);
                // line 55
                echo "                <tr>
                    <td>
                        ";
                // line 57
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 58
$context["item"], "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 60
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 60, $this->source); })()), "notification:notifications:editown", [], "array", false, false, false, 60), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 60, $this->source); })()), "notification:notifications:editother", [], "array", false, false, false, 60), twig_get_attribute($this->env, $this->source, $context["item"], "createdBy", [], "any", false, false, false, 60)), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 61
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 61, $this->source); })()), "notification:notifications:deleteown", [], "array", false, false, false, 61), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 61, $this->source); })()), "notification:notifications:deleteother", [], "array", false, false, false, 61), twig_get_attribute($this->env, $this->source, $context["item"], "createdBy", [], "any", false, false, false, 61))], "routeBase" => "notification", "customButtons" => [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.notification.header.preview"), "data-footer" => "false", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_notification_action", ["objectId" => twig_get_attribute($this->env, $this->source,                 // line 71
$context["item"], "id", [], "any", false, false, false, 71), "objectAction" => "preview"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.preview"), "iconClass" => "fa fa-share"]]]);
                // line 77
                echo "
                    </td>
                    <td>
                        <div>
                            ";
                // line 81
                if (("template" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 81, $this->source); })()))) {
                    // line 82
                    echo "                                ";
                    echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => $context["item"], "model" => "notification"]);
                    echo "
                            ";
                } else {
                    // line 84
                    echo "                                <i class=\"fa fa-fw fa-lg fa-toggle-on text-muted disabled\"></i>
                            ";
                }
                // line 86
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_notification_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                echo "\">
                                ";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 87), "html", null, true);
                echo "
                                ";
                // line 88
                if (("list" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 88, $this->source); })()))) {
                    // line 89
                    echo "                                    <span data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.icon_tooltip.list_notification"), "html", null, true);
                    echo "\"><i class=\"fa fa-fw fa-list\"></i></span>
                                ";
                }
                // line 91
                echo "                            </a>
                        </div>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 95
                $context["category"] = twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 95);
                // line 96
                echo "                        ";
                $context["catName"] = ((twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", true, true, false, 96)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 96), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 97
                echo "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 97, $this->source); })())) ? (("#" . twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 97, $this->source); })()), "color", [], "any", false, false, false, 97))) : ("inherit"));
                // line 98
                echo "                        <span style=\"white-space: nowrap;\">
                          <span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5;background:";
                // line 99
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 99, $this->source); })()), "html", null, true);
                echo ";\"> </span>
                          <span>";
                // line 100
                echo twig_escape_filter($this->env, (isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 100, $this->source); })()), "html", null, true);
                echo "</span>
                        </span>
                    </td>
                    <td class=\"visible-sm visible-md visible-lg col-stats\">
                        <span class=\"mt-xs label label-warning has-click-event clickable-stat\"
                              data-toggle=\"tooltip\"
                              title=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.channel.stat.leadcount.tooltip"), "html", null, true);
                echo "\">
                            <a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.web_sent") . ":") . twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 107))]), "html", null, true);
                echo "\">";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.stat.sentcount", ["%count%" => twig_get_attribute($this->env, $this->source, $context["item"], "getSentCount", [true], "method", false, false, false, 108)]), "html", null, true);
                // line 109
                echo "</a>
                        </span>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 112), "html", null, true);
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
            // line 115
            echo "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">
        ";
            // line 119
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 120
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 120, $this->source); })()), "page" =>             // line 121
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 121, $this->source); })()), "limit" =>             // line 122
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 122, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_notification_index"), "sessionVar" => "notification"]);
            // line 125
            echo "
    </div>
";
        } else {
            // line 128
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
        return "@MauticNotification/Notification/_list.html.twig";
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
        return array (  220 => 128,  215 => 125,  213 => 122,  212 => 121,  211 => 120,  210 => 119,  204 => 115,  187 => 112,  182 => 109,  180 => 108,  177 => 107,  173 => 106,  164 => 100,  160 => 99,  157 => 98,  154 => 97,  151 => 96,  149 => 95,  143 => 91,  137 => 89,  135 => 88,  131 => 87,  126 => 86,  122 => 84,  116 => 82,  114 => 81,  108 => 77,  106 => 71,  105 => 61,  104 => 60,  103 => 58,  102 => 57,  98 => 55,  95 => 54,  77 => 53,  71 => 48,  69 => 43,  64 => 41,  60 => 39,  58 => 34,  54 => 32,  52 => 26,  48 => 24,  46 => 22,  45 => 18,  39 => 14,  37 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticNotification/Notification/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\NotificationBundle\\Resources\\views\\Notification\\_list.html.twig");
    }
}
