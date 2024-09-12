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

/* @MauticForm/Form/_list.html.twig */
class __TwigTemplate_35b5f6c1bdd43bad6716b29466ff6764 extends Template
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
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-hover\" id=\"formTable\">
            <thead>
            <tr>
                ";
            // line 17
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#formTable", "routeBase" => "form", "templateButtons" => ["delete" => (twig_get_attribute($this->env, $this->source,             // line 22
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "form:forms:deleteown", [], "array", false, false, false, 22) || twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "form:forms:deleteother", [], "array", false, false, false, 22))], "customButtons" => [["confirm" => ["message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.confirm_batch_rebuild"), "confirmText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.rebuild"), "confirmAction" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "batchRebuildHtml"]), "iconClass" => "fa fa-fw fa-refresh", "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.rebuild"), "precheck" => "batchActionPrecheck", "confirmCallback" => "executeBatchAction"], "primary" => true]]]);
            // line 38
            echo "

                ";
            // line 40
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "f.name", "text" => "mautic.core.name", "class" => "col-form-name"]);
            // line 45
            echo "

                ";
            // line 47
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-form-category"]);
            // line 52
            echo "

                ";
            // line 54
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "submission_count", "text" => "mautic.form.form.results", "class" => "visible-md visible-lg col-form-submissions"]);
            // line 59
            echo "

                ";
            // line 61
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "f.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-md visible-lg col-form-dateAdded"]);
            // line 66
            echo "

                ";
            // line 68
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "f.dateModified", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-md visible-lg col-form-dateModified", "default" => true]);
            // line 74
            echo "

                ";
            // line 76
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "f.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-md visible-lg col-form-createdby"]);
            // line 81
            echo "

                ";
            // line 83
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "form", "orderBy" => "f.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-form-id"]);
            // line 88
            echo "
            </tr>
            </thead>
            <tbody>
            ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 92, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 93
                echo "                ";
                $context["item"] = twig_get_attribute($this->env, $this->source, $context["i"], 0, [], "array", false, false, false, 93);
                // line 94
                echo "                <tr>
                    <td>
                        ";
                // line 96
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 97
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 97, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 99
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 99, $this->source); })()), "form:forms:editown", [], "array", false, false, false, 99), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 99, $this->source); })()), "form:forms:editother", [], "array", false, false, false, 99), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 99, $this->source); })()), "createdBy", [], "any", false, false, false, 99)), "clone" => twig_get_attribute($this->env, $this->source,                 // line 100
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 100, $this->source); })()), "form:forms:create", [], "array", false, false, false, 100), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 101
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 101, $this->source); })()), "form:forms:deleteown", [], "array", false, false, false, 101), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 101, $this->source); })()), "form:forms:deleteother", [], "array", false, false, false, 101), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 101, $this->source); })()), "createdBy", [], "any", false, false, false, 101))], "routeBase" => "form", "customButtons" => [["attr" => ["data-toggle" => "", "target" => "_blank", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "preview", "objectId" => twig_get_attribute($this->env, $this->source,                 // line 109
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109)])], "iconClass" => "ri-eye-line", "btnText" => "mautic.form.form.preview"], ["attr" => ["data-toggle" => "ajax", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "results", "objectId" => twig_get_attribute($this->env, $this->source,                 // line 117
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 117, $this->source); })()), "id", [], "any", false, false, false, 117)])], "iconClass" => "ri-list-view", "btnText" => "mautic.form.form.results"]]]);
                // line 123
                echo "
                    </td>
                    <td>
                        <div>
                            ";
                // line 127
                echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 127, $this->source); })()), "model" => "form.form"]);
                echo "
                            <a href=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 128, $this->source); })()), "id", [], "any", false, false, false, 128)]), "html", null, true);
                echo "\" data-toggle=\"ajax\" data-menu-link=\"mautic_form_index\">
                                ";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 129, $this->source); })()), "name", [], "any", false, false, false, 129), "html", null, true);
                echo "
                                ";
                // line 130
                if (("campaign" == twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 130, $this->source); })()), "formType", [], "any", false, false, false, 130))) {
                    // line 131
                    echo "                                    <span data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.icon_tooltip.campaign_form"), "html", null, true);
                    echo "\"><i class=\"fa fa-fw fa-cube\"></i></span>
                                ";
                }
                // line 133
                echo "                            </a>
                        </div>
                        ";
                // line 135
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 135, $this->source); })()), "description", [], "any", false, false, false, 135)) {
                    // line 136
                    echo "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 137
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 137, $this->source); })()), "description", [], "any", false, false, false, 137));
                    echo "</small>
                            </div>
                        ";
                }
                // line 140
                echo "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 142
                $context["category"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 142, $this->source); })()), "category", [], "any", false, false, false, 142);
                // line 143
                echo "                        ";
                $context["catName"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 143, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 143, $this->source); })()), "title", [], "any", false, false, false, 143)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 144
                echo "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 144, $this->source); })())) ? (("#" . twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 144, $this->source); })()), "color", [], "any", false, false, false, 144))) : ("inherit"));
                // line 145
                echo "                        <span style=\"white-space: nowrap;\">
                          <span class=\"label label-default pa-4\" style=\"border:1px solid #d5d5d5;background:";
                // line 146
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 146, $this->source); })()), "html", null, true);
                echo ";\"></span>
                          <span>";
                // line 147
                echo twig_escape_filter($this->env, (isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 147, $this->source); })()), "html", null, true);
                echo "</span>
                        </span>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        <a href=\"";
                // line 151
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "results", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 151, $this->source); })()), "id", [], "any", false, false, false, 151)]), "html", null, true);
                echo "\" data-toggle=\"ajax\" data-menu-link=\"mautic_form_index\" class=\"btn btn-primary btn-xs\" ";
                if ((0 == twig_get_attribute($this->env, $this->source, $context["i"], "submission_count", [], "any", false, false, false, 151))) {
                    echo "disabled=\"disabled\"";
                }
                echo ">";
                // line 152
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.viewresults", ["%count%" => twig_get_attribute($this->env, $this->source, $context["i"], "submission_count", [], "array", false, false, false, 152)]), "html", null, true);
                // line 153
                echo "</a>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 155
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 155, $this->source); })()), "dateAdded", [], "any", false, false, false, 155)) {
                    echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 155, $this->source); })()), "dateAdded", [], "any", false, false, false, 155));
                }
                echo "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 156
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 156, $this->source); })()), "dateModified", [], "any", false, false, false, 156)) {
                    echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 156, $this->source); })()), "dateModified", [], "any", false, false, false, 156));
                }
                echo "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 157, $this->source); })()), "createdByUser", [], "any", false, false, false, 157), "html", null, true);
                echo "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 158
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 158, $this->source); })()), "id", [], "any", false, false, false, 158), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "            </tbody>
        </table>
        <div class=\"panel-footer\">
            ";
            // line 164
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 165
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 165, $this->source); })()), "page" =>             // line 166
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 166, $this->source); })()), "limit" =>             // line 167
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 167, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_index"), "sessionVar" => "form"]);
            // line 170
            echo "
        </div>
    </div>
";
        } else {
            // line 174
            echo "    ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.form.noresults.tip"]);
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Form/_list.html.twig";
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
        return array (  257 => 174,  251 => 170,  249 => 167,  248 => 166,  247 => 165,  246 => 164,  241 => 161,  224 => 158,  220 => 157,  214 => 156,  208 => 155,  204 => 153,  202 => 152,  195 => 151,  188 => 147,  184 => 146,  181 => 145,  178 => 144,  175 => 143,  173 => 142,  169 => 140,  163 => 137,  160 => 136,  158 => 135,  154 => 133,  148 => 131,  146 => 130,  142 => 129,  138 => 128,  134 => 127,  128 => 123,  126 => 117,  125 => 109,  124 => 101,  123 => 100,  122 => 99,  121 => 97,  120 => 96,  116 => 94,  113 => 93,  96 => 92,  90 => 88,  88 => 83,  84 => 81,  82 => 76,  78 => 74,  76 => 68,  72 => 66,  70 => 61,  66 => 59,  64 => 54,  60 => 52,  58 => 47,  54 => 45,  52 => 40,  48 => 38,  46 => 22,  45 => 17,  39 => 13,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Form/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Form\\_list.html.twig");
    }
}
