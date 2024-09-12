<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @MauticEmail/Email/_list.html.twig */
class __TwigTemplate_080324a9713c30d83a9ee91d4fde91b1 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover email-list\">
            <thead>
            <tr>";
            // line 6
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "routeBase" => "email", "templateButtons" => ["delete" => (CoreExtension::getAttribute($this->env, $this->source,             // line 10
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 10, $this->source); })()), "email:emails:deleteown", [], "array", false, false, false, 10) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 10, $this->source); })()), "email:emails:deleteother", [], "array", false, false, false, 10))]]);
            // line 14
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.name", "text" => "mautic.core.name", "class" => "col-email-name"]);
            // line 21
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "c.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-email-category"]);
            // line 28
            yield "<th class=\"visible-sm visible-md visible-lg col-email-stats\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.stats"), "html", null, true);
            yield "</th>";
            // line 30
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-lg col-email-dateAdded"]);
            // line 37
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.dateModified", "defaultDir" => "DESC", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-lg col-email-dateModified", "default" => true]);
            // line 46
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-lg col-email-createdByUser"]);
            // line 53
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "email", "orderBy" => "e.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-email-id"]);
            // line 59
            yield "</tr>
            </thead>
            <tbody>
            ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 62, $this->source); })()));
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
                yield "                ";
                $context["hasVariants"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isVariant", [], "method", false, false, false, 63);
                // line 64
                yield "                ";
                $context["hasTranslations"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isTranslation", [], "method", false, false, false, 64);
                // line 65
                yield "                ";
                $context["type"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getEmailType", [], "method", false, false, false, 65);
                // line 66
                yield "                ";
                $context["mauticTemplateVars"] = Twig\Extension\CoreExtension::merge($context, ["item" => $context["item"]]);
                // line 67
                yield "                <tr>
                    <td>
                        ";
                // line 69
                $context["edit"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 70
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 70, $this->source); })()), "email:emails:editown", [], "array", false, false, false, 70), CoreExtension::getAttribute($this->env, $this->source,                 // line 71
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 71, $this->source); })()), "email:emails:editother", [], "array", false, false, false, 71), CoreExtension::getAttribute($this->env, $this->source,                 // line 72
$context["item"], "getCreatedBy", [], "method", false, false, false, 72));
                // line 74
                yield "
                        ";
                // line 75
                $context["sendButton"] = ["attr" => ["data-toggle" => "ajax", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "send", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 78
$context["item"], "getId", [], "method", false, false, false, 78)])], "iconClass" => "fa fa-send-o", "btnText" => "mautic.email.send"];
                // line 83
                yield "
                        ";
                // line 84
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isBackgroundSending", [], "method", false, false, false, 84)) {
                    // line 85
                    yield "                            ";
                    $context["sendButton"] = Twig\Extension\CoreExtension::merge((isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 85, $this->source); })()), ["attr" => ["href" => "javascript:void(0);", "disabled" => true], "tooltip" => "mautic.email.send.disabled", "btnClass" => "disabled"]);
                    // line 93
                    yield "                        ";
                }
                // line 94
                yield "
                        ";
                // line 95
                $context["customButtons"] = ((("list" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 95, $this->source); })()))) ? ([(isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 95, $this->source); })())]) : ([]));
                // line 98
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 99
$context["item"], "templateButtons" => ["edit" =>                 // line 101
(isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 101, $this->source); })()), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 102
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 102, $this->source); })()), "email:emails:create", [], "array", false, false, false, 102), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                 // line 104
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 104, $this->source); })()), "email:emails:deleteown", [], "array", false, false, false, 104), CoreExtension::getAttribute($this->env, $this->source,                 // line 105
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 105, $this->source); })()), "email:emails:deleteother", [], "array", false, false, false, 105), CoreExtension::getAttribute($this->env, $this->source,                 // line 106
$context["item"], "getCreatedBy", [], "method", false, false, false, 106)), "abtest" => (( !                // line 108
(isset($context["hasVariants"]) || array_key_exists("hasVariants", $context) ? $context["hasVariants"] : (function () { throw new RuntimeError('Variable "hasVariants" does not exist.', 108, $this->source); })()) && (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 108, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 108, $this->source); })()), "email:emails:create", [], "array", false, false, false, 108))], "routeBase" => "email", "customButtons" =>                 // line 111
(isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 111, $this->source); })())]);
                // line 113
                yield "</td>
                    <td>
                        <div>";
                // line 116
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 117
$context["item"], "model" => "email"]);
                // line 120
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 120)]), "html", null, true);
                yield "\"
                               data-toggle=\"ajax\">
                                ";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 122), "html", null, true);
                yield "
                                ";
                // line 123
                if ((isset($context["hasVariants"]) || array_key_exists("hasVariants", $context) ? $context["hasVariants"] : (function () { throw new RuntimeError('Variable "hasVariants" does not exist.', 123, $this->source); })())) {
                    // line 124
                    yield "                                  <span data-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.ab_test"), "html", null, true);
                    yield "\"><i class=\"fa fa-fw fa-sitemap\"></i></span>
                                ";
                }
                // line 126
                yield "                                ";
                if ((isset($context["hasTranslations"]) || array_key_exists("hasTranslations", $context) ? $context["hasTranslations"] : (function () { throw new RuntimeError('Variable "hasTranslations" does not exist.', 126, $this->source); })())) {
                    // line 127
                    yield "                                  <span data-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.translation"), "html", null, true);
                    yield "\"><i class=\"fa fa-fw fa-language\"></i></span>
                                ";
                }
                // line 129
                yield "                                ";
                if (("list" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 129, $this->source); })()))) {
                    // line 130
                    yield "                                  <span data-toggle=\"tooltip\"title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.icon_tooltip.list_email"), "html", null, true);
                    yield "\"><i class=\"fa fa-fw fa-pie-chart\"></i></span>
                                ";
                }
                // line 132
                yield "                                ";
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.name", (isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 132, $this->source); })()));
                yield "
                            </a>
                        </div>
                        ";
                // line 135
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 135))) {
                    // line 136
                    yield "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 137
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 137));
                    yield "</small>
                            </div>
                        ";
                }
                // line 140
                yield "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 142
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCategory", [], "method", false, false, false, 142);
                // line 143
                yield "                        ";
                $context["catName"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 143, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 143, $this->source); })()), "getTitle", [], "method", false, false, false, 143)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 144
                yield "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 144, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 144, $this->source); })()), "getColor", [], "method", false, false, false, 144))) : ("inherit"));
                // line 145
                yield "                        <span style=\"white-space: nowrap;\">
                            <span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 146, $this->source); })()), "html", null, true);
                yield ";\"> </span>
                            <span>";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 147, $this->source); })()), "html", null, true);
                yield "</span>
                        </span>
                    </td>
                    <td class=\"visible-sm visible-md visible-lg col-stats\" data-stats=\"";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 150), "html", null, true);
                yield "\">
                        ";
                // line 151
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.stats.above", (isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 151, $this->source); })()));
                yield "
                        <span class=\"mt-xs label label-default has-click-event clickable-stat";
                // line 152
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getPendingCount", [], "method", false, false, false, 152) > 0) && ("list" == CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getEmailType", [], "method", false, false, false, 152)))) ? ("") : (" hide"));
                yield "\"
                              id=\"pending-";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 153), "html", null, true);
                yield "\"
                              data-toggle=\"tooltip\"
                              title=\"";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.leadcount.tooltip"), "html", null, true);
                yield "\">
                          <a href=\"";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.email_pending") . ":") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 156))]), "html", null, true);
                yield "\">
                              ";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.leadcount", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getPendingCount", [], "method", false, false, false, 157)]), "html", null, true);
                yield "
                          </a>
                        </span>
                        <span class=\"mt-xs label label-default has-click-event clickable-stat";
                // line 160
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getQueuedCount", [], "method", false, false, false, 160) > 0)) ? ("") : (" hide"));
                yield "\"
                              id=\"queued-";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 161), "html", null, true);
                yield "\"
                              data-toggle=\"tooltip\"
                              title=\"";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.queued.tooltip"), "html", null, true);
                yield "\">
                          <a href=\"";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.email_queued") . ":") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 164))]), "html", null, true);
                yield "\">
                              ";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.queued", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getQueuedCount", [], "method", false, false, false, 165)]), "html", null, true);
                yield "
                          </a>
                        </span>
                        <span class=\"mt-xs label label-warning has-click-event clickable-stat\" id=\"sent-count-";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 168), "html", null, true);
                yield "\">
                          <a href=\"";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.email_sent") . ":") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 169))]), "html", null, true);
                yield "\"
                             data-toggle=\"tooltip\"
                             title=\"";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.tooltip"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.sentcount", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getSentCount", [true], "method", false, false, false, 171)]), "html", null, true);
                yield "</a>
                        </span>
                        <span class=\"mt-xs label label-success has-click-event clickable-stat\" id=\"read-count-";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 173), "html", null, true);
                yield "\">
                          <a href=\"";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.email_read") . ":") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 174))]), "html", null, true);
                yield "\"
                             data-toggle=\"tooltip\"
                             title=\"";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.tooltip"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.readcount", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getReadCount", [true], "method", false, false, false, 176)]), "html", null, true);
                yield "</a>
                        </span>
                        <span class=\"mt-xs label label-primary has-click-event clickable-stat\" id=\"read-percent-";
                // line 178
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 178), "html", null, true);
                yield "\">
                          <a href=\"";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.email_read") . ":") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 179))]), "html", null, true);
                yield "\"
                             data-toggle=\"tooltip\"
                             title=\"";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.tooltip"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.readpercent", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getReadPercentage", [true], "method", false, false, false, 181)]), "html", null, true);
                yield "</a>
                        </span>
                        ";
                // line 183
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.stats", (isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 183, $this->source); })()));
                yield "
                        ";
                // line 184
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.stats.below", (isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 184, $this->source); })()));
                yield "
                    </td>
                    <td class=\"visible-lg\" title=\"";
                // line 186
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 186)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 186))) : (""));
                yield "\">
                        ";
                // line 187
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 187)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 187))) : (""));
                yield "
                    </td>
                    <td class=\"visible-lg\" title=\"";
                // line 189
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 189)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 189))) : (""));
                yield "\">
                        ";
                // line 190
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 190)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 190))) : (""));
                yield "
                    </td>
                    <td class=\"visible-lg\">";
                // line 192
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCreatedByUser", [], "method", false, false, false, 192));
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 193
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 193), "html", null, true);
                yield "</td>
                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            yield "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">";
            // line 200
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 201
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 201, $this->source); })()), "page" =>             // line 202
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 202, $this->source); })()), "limit" =>             // line 203
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 203, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_index"), "sessionVar" => "email"]);
            // line 207
            yield "</div>
";
        } else {
            // line 209
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/Email/_list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  393 => 209,  389 => 207,  387 => 203,  386 => 202,  385 => 201,  384 => 200,  379 => 196,  362 => 193,  358 => 192,  353 => 190,  349 => 189,  344 => 187,  340 => 186,  335 => 184,  331 => 183,  324 => 181,  319 => 179,  315 => 178,  308 => 176,  303 => 174,  299 => 173,  292 => 171,  287 => 169,  283 => 168,  277 => 165,  273 => 164,  269 => 163,  264 => 161,  260 => 160,  254 => 157,  250 => 156,  246 => 155,  241 => 153,  237 => 152,  233 => 151,  229 => 150,  223 => 147,  219 => 146,  216 => 145,  213 => 144,  210 => 143,  208 => 142,  204 => 140,  198 => 137,  195 => 136,  193 => 135,  186 => 132,  180 => 130,  177 => 129,  171 => 127,  168 => 126,  162 => 124,  160 => 123,  156 => 122,  150 => 120,  148 => 117,  147 => 116,  143 => 113,  141 => 111,  140 => 108,  139 => 106,  138 => 105,  137 => 104,  136 => 102,  135 => 101,  134 => 99,  133 => 98,  131 => 95,  128 => 94,  125 => 93,  122 => 85,  120 => 84,  117 => 83,  115 => 78,  114 => 75,  111 => 74,  109 => 72,  108 => 71,  107 => 70,  106 => 69,  102 => 67,  99 => 66,  96 => 65,  93 => 64,  90 => 63,  73 => 62,  68 => 59,  66 => 53,  64 => 46,  62 => 37,  60 => 30,  56 => 28,  54 => 21,  52 => 14,  50 => 10,  49 => 6,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/Email/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\Email\\_list.html.twig");
    }
}
