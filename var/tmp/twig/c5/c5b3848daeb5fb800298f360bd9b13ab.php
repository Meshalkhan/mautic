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

/* @MauticEmail/Email/_list.html.twig */
class __TwigTemplate_ecc8bed43ec9b93343628e9c6aae553d extends Template
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
        <table class=\"table table-hover email-list\">
            <thead>
            <tr>";
            // line 6
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "routeBase" => "email", "templateButtons" => ["delete" => (twig_get_attribute($this->env, $this->source,             // line 10
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 10, $this->source); })()), "email:emails:deleteown", [], "array", false, false, false, 10) || twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 10, $this->source); })()), "email:emails:deleteother", [], "array", false, false, false, 10))]]);
            // line 14
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.name", "text" => "mautic.core.name", "class" => "col-email-name"]);
            // line 21
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-email-category"]);
            // line 28
            echo "<th class=\"visible-sm visible-md visible-lg col-email-stats\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.stats"), "html", null, true);
            echo "</th>";
            // line 30
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-lg col-email-dateAdded"]);
            // line 37
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.dateModified", "defaultDir" => "DESC", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-lg col-email-dateModified", "default" => true]);
            // line 46
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-lg col-email-createdByUser"]);
            // line 53
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-email-id"]);
            // line 59
            echo "</tr>
            </thead>
            <tbody>
            ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 62, $this->source); })()));
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
                // line 63
                echo "                ";
                $context["hasVariants"] = twig_get_attribute($this->env, $this->source, $context["item"], "isVariant", [], "method", false, false, false, 63);
                // line 64
                echo "                ";
                $context["hasTranslations"] = twig_get_attribute($this->env, $this->source, $context["item"], "isTranslation", [], "method", false, false, false, 64);
                // line 65
                echo "                ";
                $context["type"] = twig_get_attribute($this->env, $this->source, $context["item"], "getEmailType", [], "method", false, false, false, 65);
                // line 66
                echo "                ";
                $context["mauticTemplateVars"] = twig_array_merge($context, ["item" => $context["item"]]);
                // line 67
                echo "                <tr>
                    <td>
                        ";
                // line 69
                $context["edit"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 70
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 70, $this->source); })()), "email:emails:editown", [], "array", false, false, false, 70), twig_get_attribute($this->env, $this->source,                 // line 71
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 71, $this->source); })()), "email:emails:editother", [], "array", false, false, false, 71), twig_get_attribute($this->env, $this->source,                 // line 72
$context["item"], "getCreatedBy", [], "method", false, false, false, 72));
                // line 74
                echo "
                        ";
                // line 75
                $context["sendButton"] = ["attr" => ["data-toggle" => "ajax", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "send", "objectId" => twig_get_attribute($this->env, $this->source,                 // line 78
$context["item"], "getId", [], "method", false, false, false, 78)])], "iconClass" => "fa fa-send-o", "btnText" => "mautic.email.send"];
                // line 83
                echo "
                        ";
                // line 84
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isBackgroundSending", [], "method", false, false, false, 84)) {
                    // line 85
                    echo "                            ";
                    $context["sendButton"] = twig_array_merge((isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 85, $this->source); })()), ["attr" => ["href" => "javascript:void(0);", "disabled" => true], "tooltip" => "mautic.email.send.disabled", "btnClass" => "disabled"]);
                    // line 93
                    echo "                        ";
                }
                // line 94
                echo "
                        ";
                // line 95
                $context["customButtons"] = ((("list" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 95, $this->source); })()))) ? ([(isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 95, $this->source); })())]) : ([]));
                // line 98
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 99
$context["item"], "templateButtons" => ["edit" =>                 // line 101
(isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 101, $this->source); })()), "clone" => twig_get_attribute($this->env, $this->source,                 // line 102
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 102, $this->source); })()), "email:emails:create", [], "array", false, false, false, 102), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 104
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 104, $this->source); })()), "email:emails:deleteown", [], "array", false, false, false, 104), twig_get_attribute($this->env, $this->source,                 // line 105
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 105, $this->source); })()), "email:emails:deleteother", [], "array", false, false, false, 105), twig_get_attribute($this->env, $this->source,                 // line 106
$context["item"], "getCreatedBy", [], "method", false, false, false, 106)), "abtest" => (( !                // line 108
(isset($context["hasVariants"]) || array_key_exists("hasVariants", $context) ? $context["hasVariants"] : (function () { throw new RuntimeError('Variable "hasVariants" does not exist.', 108, $this->source); })()) && (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 108, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 108, $this->source); })()), "email:emails:create", [], "array", false, false, false, 108))], "routeBase" => "email", "customButtons" =>                 // line 111
(isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 111, $this->source); })())]);
                // line 113
                echo "</td>
                    <td>
                        <div>";
                // line 116
                echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 117
$context["item"], "model" => "email"]);
                // line 120
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 120)]), "html", null, true);
                echo "\"
                               data-toggle=\"ajax\">
                                ";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 122), "html", null, true);
                echo "
                                ";
                // line 123
                if ((isset($context["hasVariants"]) || array_key_exists("hasVariants", $context) ? $context["hasVariants"] : (function () { throw new RuntimeError('Variable "hasVariants" does not exist.', 123, $this->source); })())) {
                    // line 124
                    echo "                                  <span data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.ab_test"), "html", null, true);
                    echo "\"><i class=\"fa fa-fw fa-sitemap\"></i></span>
                                ";
                }
                // line 126
                echo "                                ";
                if ((isset($context["hasTranslations"]) || array_key_exists("hasTranslations", $context) ? $context["hasTranslations"] : (function () { throw new RuntimeError('Variable "hasTranslations" does not exist.', 126, $this->source); })())) {
                    // line 127
                    echo "                                  <span data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.translation"), "html", null, true);
                    echo "\"><i class=\"fa fa-fw fa-language\"></i></span>
                                ";
                }
                // line 129
                echo "                                ";
                if (("list" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 129, $this->source); })()))) {
                    // line 130
                    echo "                                  <span data-toggle=\"tooltip\"title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.icon_tooltip.list_email"), "html", null, true);
                    echo "\"><i class=\"fa fa-fw fa-pie-chart\"></i></span>
                                ";
                }
                // line 132
                echo "                                ";
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.name", (isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 132, $this->source); })()));
                echo "
                            </a>
                        </div>
                        ";
                // line 135
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 135))) {
                    // line 136
                    echo "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 137
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 137));
                    echo "</small>
                            </div>
                        ";
                }
                // line 140
                echo "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 142
                $context["category"] = twig_get_attribute($this->env, $this->source, $context["item"], "getCategory", [], "method", false, false, false, 142);
                // line 143
                echo "                        ";
                $context["catName"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 143, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 143, $this->source); })()), "getTitle", [], "method", false, false, false, 143)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 144
                echo "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 144, $this->source); })())) ? (("#" . twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 144, $this->source); })()), "getColor", [], "method", false, false, false, 144))) : ("inherit"));
                // line 145
                echo "                        <span style=\"white-space: nowrap;\">
                            <span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                // line 146
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 146, $this->source); })()), "html", null, true);
                echo ";\"> </span>
                            <span>";
                // line 147
                echo twig_escape_filter($this->env, (isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 147, $this->source); })()), "html", null, true);
                echo "</span>
                        </span>
                    </td>
                    <td class=\"visible-sm visible-md visible-lg col-stats\" data-stats=\"";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 150), "html", null, true);
                echo "\">
                        ";
                // line 151
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.stats.above", (isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 151, $this->source); })()));
                echo "
                        <span class=\"mt-xs label label-default has-click-event clickable-stat";
                // line 152
                echo ((((twig_get_attribute($this->env, $this->source, $context["item"], "getPendingCount", [], "method", false, false, false, 152) > 0) && ("list" == twig_get_attribute($this->env, $this->source, $context["item"], "getEmailType", [], "method", false, false, false, 152)))) ? ("") : (" hide"));
                echo "\"
                              id=\"pending-";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 153), "html", null, true);
                echo "\"
                              data-toggle=\"tooltip\"
                              title=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.leadcount.tooltip"), "html", null, true);
                echo "\">
                          <a href=\"";
                // line 156
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.email_pending") . ":") . twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 156))]), "html", null, true);
                echo "\">
                              ";
                // line 157
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.leadcount", ["%count%" => twig_get_attribute($this->env, $this->source, $context["item"], "getPendingCount", [], "method", false, false, false, 157)]), "html", null, true);
                echo "
                          </a>
                        </span>
                        <span class=\"mt-xs label label-default has-click-event clickable-stat";
                // line 160
                echo (((twig_get_attribute($this->env, $this->source, $context["item"], "getQueuedCount", [], "method", false, false, false, 160) > 0)) ? ("") : (" hide"));
                echo "\"
                              id=\"queued-";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 161), "html", null, true);
                echo "\"
                              data-toggle=\"tooltip\"
                              title=\"";
                // line 163
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.queued.tooltip"), "html", null, true);
                echo "\">
                          <a href=\"";
                // line 164
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.email_queued") . ":") . twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 164))]), "html", null, true);
                echo "\">
                              ";
                // line 165
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.queued", ["%count%" => twig_get_attribute($this->env, $this->source, $context["item"], "getQueuedCount", [], "method", false, false, false, 165)]), "html", null, true);
                echo "
                          </a>
                        </span>
                        <span class=\"mt-xs label label-warning has-click-event clickable-stat\" id=\"sent-count-";
                // line 168
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 168), "html", null, true);
                echo "\">
                          <a href=\"";
                // line 169
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.email_sent") . ":") . twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 169))]), "html", null, true);
                echo "\"
                             data-toggle=\"tooltip\"
                             title=\"";
                // line 171
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.tooltip"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.sentcount", ["%count%" => twig_get_attribute($this->env, $this->source, $context["item"], "getSentCount", [true], "method", false, false, false, 171)]), "html", null, true);
                echo "</a>
                        </span>
                        <span class=\"mt-xs label label-success has-click-event clickable-stat\" id=\"read-count-";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 173), "html", null, true);
                echo "\">
                          <a href=\"";
                // line 174
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.email_read") . ":") . twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 174))]), "html", null, true);
                echo "\"
                             data-toggle=\"tooltip\"
                             title=\"";
                // line 176
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.tooltip"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.readcount", ["%count%" => twig_get_attribute($this->env, $this->source, $context["item"], "getReadCount", [true], "method", false, false, false, 176)]), "html", null, true);
                echo "</a>
                        </span>
                        <span class=\"mt-xs label label-primary has-click-event clickable-stat\" id=\"read-percent-";
                // line 178
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 178), "html", null, true);
                echo "\">
                          <a href=\"";
                // line 179
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.email_read") . ":") . twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 179))]), "html", null, true);
                echo "\"
                             data-toggle=\"tooltip\"
                             title=\"";
                // line 181
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.tooltip"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.readpercent", ["%count%" => twig_get_attribute($this->env, $this->source, $context["item"], "getReadPercentage", [true], "method", false, false, false, 181)]), "html", null, true);
                echo "</a>
                        </span>
                        ";
                // line 183
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.stats", (isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 183, $this->source); })()));
                echo "
                        ";
                // line 184
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.stats.below", (isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 184, $this->source); })()));
                echo "
                    </td>
                    <td class=\"visible-lg\" title=\"";
                // line 186
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 186)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 186))) : (""));
                echo "\">
                        ";
                // line 187
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 187)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 187))) : (""));
                echo "
                    </td>
                    <td class=\"visible-lg\" title=\"";
                // line 189
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 189)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 189))) : (""));
                echo "\">
                        ";
                // line 190
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 190)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 190))) : (""));
                echo "
                    </td>
                    <td class=\"visible-lg\">";
                // line 192
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getCreatedByUser", [], "method", false, false, false, 192));
                echo "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 193
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 193), "html", null, true);
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
            // line 196
            echo "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">";
            // line 200
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 201
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 201, $this->source); })()), "page" =>             // line 202
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 202, $this->source); })()), "limit" =>             // line 203
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 203, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_index"), "sessionVar" => "email"]);
            // line 207
            echo "</div>
";
        } else {
            // line 209
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticEmail/Email/_list.html.twig";
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
        return array (  388 => 209,  384 => 207,  382 => 203,  381 => 202,  380 => 201,  379 => 200,  374 => 196,  357 => 193,  353 => 192,  348 => 190,  344 => 189,  339 => 187,  335 => 186,  330 => 184,  326 => 183,  319 => 181,  314 => 179,  310 => 178,  303 => 176,  298 => 174,  294 => 173,  287 => 171,  282 => 169,  278 => 168,  272 => 165,  268 => 164,  264 => 163,  259 => 161,  255 => 160,  249 => 157,  245 => 156,  241 => 155,  236 => 153,  232 => 152,  228 => 151,  224 => 150,  218 => 147,  214 => 146,  211 => 145,  208 => 144,  205 => 143,  203 => 142,  199 => 140,  193 => 137,  190 => 136,  188 => 135,  181 => 132,  175 => 130,  172 => 129,  166 => 127,  163 => 126,  157 => 124,  155 => 123,  151 => 122,  145 => 120,  143 => 117,  142 => 116,  138 => 113,  136 => 111,  135 => 108,  134 => 106,  133 => 105,  132 => 104,  131 => 102,  130 => 101,  129 => 99,  128 => 98,  126 => 95,  123 => 94,  120 => 93,  117 => 85,  115 => 84,  112 => 83,  110 => 78,  109 => 75,  106 => 74,  104 => 72,  103 => 71,  102 => 70,  101 => 69,  97 => 67,  94 => 66,  91 => 65,  88 => 64,  85 => 63,  68 => 62,  63 => 59,  61 => 53,  59 => 46,  57 => 37,  55 => 30,  51 => 28,  49 => 21,  47 => 14,  45 => 10,  44 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmail/Email/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\Email\\_list.html.twig");
    }
}
