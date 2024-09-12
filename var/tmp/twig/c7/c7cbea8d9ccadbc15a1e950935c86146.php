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

/* @MauticLead/Company/list_rows_contacts.html.twig */
class __TwigTemplate_78e3c2c81f4782468c41c5e3ed38132f extends Template
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
        $context["baseUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_company_contacts_list", ["objectId" => twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]);
        // line 13
        $context["customButtons"] = [];
        // line 14
        echo "
";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 15, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 15) || twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 15, $this->source); })()), "load:leads:editother", [], "array", false, false, false, 15))) {
            // line 16
            echo "    ";
            $context["customButtons"] = [["attr" => ["class" => "btn btn-default btn-sm btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_batch_contact_view"), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.lists")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.lists"), "iconClass" => "fa fa-pie-chart"], ["attr" => ["class" => "btn btn-default btn-sm btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "batchStages"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.stages")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.stages"), "iconClass" => "ri-speed-up-line"], ["attr" => ["class" => "btn btn-default btn-sm btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "batchCampaigns"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.campaigns")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.campaigns"), "iconClass" => "ri-time-line"], ["attr" => ["class" => "btn btn-default btn-sm btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "batchOwners"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.owner")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.owner"), "iconClass" => "ri-user-6-line"], ["attr" => ["class" => "btn btn-default btn-sm btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "batchDnc"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.dnc")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.dnc"), "iconClass" => "fa fa-ban text-danger"]];
        }
        // line 74
        echo "
";
        // line 75
        if ((twig_length_filter($this->env, (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 75, $this->source); })())) > 0)) {
            // line 76
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-hover\" id=\"leadTable\">
            <thead>
                <tr>
                    ";
            // line 80
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#contacts-table", "templateButtons" => ["delete" => (twig_get_attribute($this->env, $this->source,             // line 84
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 84, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 84) || twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 84, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 84))], "customButtons" =>             // line 86
(isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 86, $this->source); })()), "langVar" => "lead.lead", "routeBase" => "contact", "tooltip" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.checkall.help")]);
            // line 90
            echo "
                    ";
            // line 91
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => (("company." . twig_get_attribute($this->env, $this->source,             // line 92
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)) . ".contacts"), "orderBy" => "l.lastname, l.firstname, l.company, l.email", "text" => "mautic.core.name", "class" => "col-lead-name", "target" => "#contacts-table", "baseUrl" =>             // line 97
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 97, $this->source); })())]);
            // line 98
            echo "
                    ";
            // line 99
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => (("company." . twig_get_attribute($this->env, $this->source,             // line 100
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100)) . ".contacts"), "orderBy" => "l.email", "text" => "mautic.core.type.email", "class" => "col-lead-email visible-md visible-lg", "target" => "#contacts-table", "baseUrl" =>             // line 105
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 105, $this->source); })())]);
            // line 106
            echo "
                    ";
            // line 107
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => (("company." . twig_get_attribute($this->env, $this->source,             // line 108
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108)) . ".contacts"), "orderBy" => "l.city, l.state", "text" => "mautic.lead.lead.thead.location", "class" => "col-lead-location visible-md visible-lg", "target" => "#contacts-table", "baseUrl" =>             // line 113
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 113, $this->source); })())]);
            // line 114
            echo "
                    ";
            // line 115
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => (("company." . twig_get_attribute($this->env, $this->source,             // line 116
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116)) . ".contacts"), "orderBy" => "l.stage_id", "text" => "mautic.lead.stage.label", "class" => "col-lead-stage", "target" => "#contacts-table", "baseUrl" =>             // line 121
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 121, $this->source); })())]);
            // line 122
            echo "
                    ";
            // line 123
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => (("company." . twig_get_attribute($this->env, $this->source,             // line 124
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 124, $this->source); })()), "id", [], "any", false, false, false, 124)) . ".contacts"), "orderBy" => "l.points", "text" => "mautic.lead.points", "class" => "visible-md visible-lg col-lead-points", "target" => "#contacts-table", "baseUrl" =>             // line 129
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 129, $this->source); })())]);
            // line 130
            echo "
                    ";
            // line 131
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => (("company." . twig_get_attribute($this->env, $this->source,             // line 132
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 132, $this->source); })()), "id", [], "any", false, false, false, 132)) . ".contacts"), "orderBy" => "l.last_active", "text" => "mautic.lead.lastactive", "class" => "col-lead-lastactive visible-md visible-lg", "default" => true, "target" => "#contacts-table", "baseUrl" =>             // line 138
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 138, $this->source); })())]);
            // line 139
            echo "
                    ";
            // line 140
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => (("company." . twig_get_attribute($this->env, $this->source,             // line 141
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 141, $this->source); })()), "id", [], "any", false, false, false, 141)) . ".contacts"), "orderBy" => "l.id", "text" => "mautic.core.id", "class" => "col-lead-id visible-md visible-lg", "target" => "#contacts-table", "baseUrl" =>             // line 146
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 146, $this->source); })())]);
            // line 147
            echo "
                </tr>
            </thead>
            <tbody>
            ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 151, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 152
                echo "                ";
                $context["fields"] = twig_get_attribute($this->env, $this->source, $context["contact"], "fields", [], "any", false, false, false, 152);
                // line 153
                echo "                <tr>
                    <td>
                        ";
                // line 155
                $context["hasEditAccess"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 155, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 155), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 155, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 155), twig_get_attribute($this->env, $this->source, $context["contact"], "permissionUser", [], "method", false, false, false, 155));
                // line 156
                echo "                        ";
                $context["custom"] = [];
                // line 157
                echo "                        ";
                if (((isset($context["hasEditAccess"]) || array_key_exists("hasEditAccess", $context) ? $context["hasEditAccess"] : (function () { throw new RuntimeError('Variable "hasEditAccess" does not exist.', 157, $this->source); })()) && array_key_exists("currentList", $context))) {
                    // line 158
                    echo "                            ";
                    // line 159
                    echo "                            ";
                    $context["custom"] = twig_array_merge((isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new RuntimeError('Variable "custom" does not exist.', 159, $this->source); })()), [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_action", ["objectAction" => "removeLead", "objectId" => twig_get_attribute($this->env, $this->source,                     // line 161
(isset($context["currentList"]) || array_key_exists("currentList", $context) ? $context["currentList"] : (function () { throw new RuntimeError('Variable "currentList" does not exist.', 161, $this->source); })()), "id", [], "any", false, false, false, 161), "leadId" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 161)]), "data-toggle" => "ajax", "data-method" => "POST"], "btnText" => "mautic.lead.lead.remove.fromlist", "iconClass" => "ri-close-line"]]);
                    // line 168
                    echo "                        ";
                }
                // line 169
                echo "
                        ";
                // line 170
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 170), "email", [], "any", true, true, false, 170)) {
                    // line 171
                    echo "                            ";
                    $context["custom"] = twig_array_merge((isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new RuntimeError('Variable "custom" does not exist.', 171, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.email.send_email.header", ["%email%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 175
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 175, $this->source); })()), "core", [], "any", false, false, false, 175), "email", [], "any", false, false, false, 175), "value", [], "any", false, false, false, 175)]), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => twig_get_attribute($this->env, $this->source,                     // line 176
$context["contact"], "id", [], "any", false, false, false, 176), "objectAction" => "email", "list" => 1])], "btnText" => "mautic.lead.email.send_email", "iconClass" => "fa fa-send"]]);
                    // line 181
                    echo "                        ";
                }
                // line 182
                echo "                        ";
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 183
$context["contact"], "templateButtons" => ["edit" =>                 // line 185
(isset($context["hasEditAccess"]) || array_key_exists("hasEditAccess", $context) ? $context["hasEditAccess"] : (function () { throw new RuntimeError('Variable "hasEditAccess" does not exist.', 185, $this->source); })()), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 186
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 186, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 186), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 186, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 186), twig_get_attribute($this->env, $this->source, $context["contact"], "permissionUser", [], "any", false, false, false, 186))], "routeBase" => "contact", "langVar" => "lead.lead", "customButtons" =>                 // line 190
(isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new RuntimeError('Variable "custom" does not exist.', 190, $this->source); })())]);
                // line 191
                echo "
                    </td>
                    <td>
                        <a href=\"";
                // line 194
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 194)]), "html", null, true);
                echo "\" data-toggle=\"ajax\">
                            <div>";
                // line 195
                if (twig_get_attribute($this->env, $this->source, $context["contact"], "isAnonymous", [], "any", false, false, false, 195)) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["contact"], "primaryIdentifier", [], "any", false, false, false, 195)), "html", null, true);
                } else {
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["contact"], "primaryIdentifier", [], "any", false, false, false, 195));
                }
                echo "</div>
                            <div class=\"small\">";
                // line 196
                echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["contact"], "secondaryIdentifier", [], "any", false, false, false, 196));
                echo "</div>
                        </a>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 199
                echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 199, $this->source); })()), "core", [], "any", false, false, false, 199), "email", [], "any", false, false, false, 199), "value", [], "any", false, false, false, 199));
                echo "</td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 201
                $context["flag"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 201), "country", [], "any", true, true, false, 201) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 201, $this->source); })()), "core", [], "any", false, false, false, 201), "country", [], "any", false, false, false, 201), "value", [], "any", false, false, false, 201)))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getCountryFlag(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 201, $this->source); })()), "core", [], "any", false, false, false, 201), "country", [], "any", false, false, false, 201), "value", [], "any", false, false, false, 201))) : (""));
                // line 202
                echo "                        ";
                if ( !twig_test_empty((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 202, $this->source); })()))) {
                    // line 203
                    echo "                          <img src=\"";
                    echo twig_escape_filter($this->env, (isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 203, $this->source); })()), "html", null, true);
                    echo "\" style=\"max-height: 24px;\" class=\"mr-sm\" />
                        ";
                }
                // line 205
                echo "                        ";
                $context["location"] = [];
                // line 206
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 206), "city", [], "any", true, true, false, 206)) {
                    // line 207
                    echo "                            ";
                    $context["location"] = twig_array_merge((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 207, $this->source); })()), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 207, $this->source); })()), "core", [], "any", false, false, false, 207), "city", [], "any", false, false, false, 207), "value", [], "any", false, false, false, 207)]);
                    // line 208
                    echo "                        ";
                }
                // line 209
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 209), "state", [], "any", true, true, false, 209)) {
                    // line 210
                    echo "                            ";
                    $context["location"] = twig_array_merge((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 210, $this->source); })()), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 210, $this->source); })()), "core", [], "any", false, false, false, 210), "state", [], "any", false, false, false, 210), "value", [], "any", false, false, false, 210)]);
                    // line 211
                    echo "                        ";
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 211), "country", [], "any", true, true, false, 211)) {
                    // line 212
                    echo "                            ";
                    $context["location"] = twig_array_merge((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 212, $this->source); })()), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 212, $this->source); })()), "core", [], "any", false, false, false, 212), "country", [], "any", false, false, false, 212), "value", [], "any", false, false, false, 212)]);
                    // line 213
                    echo "                        ";
                }
                // line 214
                echo "                        ";
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 214, $this->source); })()), ", "), "html", null, true);
                echo "
                        <div class=\"clearfix\"></div>
                    </td>
                    <td class=\"text-center\">
                        ";
                // line 218
                if (twig_get_attribute($this->env, $this->source, $context["contact"], "stage", [], "any", false, false, false, 218)) {
                    // line 219
                    echo "                          <span class=\"label label-default\" style=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["contact"], "color", [], "any", false, false, false, 219)) {
                        echo "background-color:";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "color", [], "any", false, false, false, 219), "html", null, true);
                        echo ";";
                    }
                    echo "\">";
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contact"], "stage", [], "any", false, false, false, 219), "name", [], "any", false, false, false, 219));
                    echo "</span>
                        ";
                }
                // line 221
                echo "                    </td>
                    <td class=\"visible-md visible-lg text-center\">
                        <span class=\"label label-default\" style=\"";
                // line 223
                if (twig_get_attribute($this->env, $this->source, $context["contact"], "color", [], "any", false, false, false, 223)) {
                    echo "background-color:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "color", [], "any", false, false, false, 223), "html", null, true);
                    echo ";";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "points", [], "any", false, false, false, 223), "html", null, true);
                echo "</span>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        <abbr title=\"";
                // line 226
                echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, $context["contact"], "lastActive", [], "any", false, false, false, 226)));
                echo "\">
                            ";
                // line 227
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, $context["contact"], "lastActive", [], "any", false, false, false, 227));
                echo "
                        </abbr>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 230
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 230), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "            </tbody>
        </table>
    </div>
    ";
            // line 236
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["page" =>             // line 237
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 237, $this->source); })()), "limit" =>             // line 238
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 238, $this->source); })()), "baseUrl" =>             // line 239
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 239, $this->source); })()), "target" => "#contacts-table", "totalItems" =>             // line 241
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 241, $this->source); })()), "sessionVar" => (("company." . twig_get_attribute($this->env, $this->source,             // line 242
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 242, $this->source); })()), "id", [], "any", false, false, false, 242)) . ".contacts")]);
            // line 243
            echo "
";
        } else {
            // line 245
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
        return "@MauticLead/Company/list_rows_contacts.html.twig";
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
        return array (  328 => 245,  324 => 243,  322 => 242,  321 => 241,  320 => 239,  319 => 238,  318 => 237,  317 => 236,  312 => 233,  295 => 230,  289 => 227,  285 => 226,  273 => 223,  269 => 221,  257 => 219,  255 => 218,  247 => 214,  244 => 213,  241 => 212,  238 => 211,  235 => 210,  232 => 209,  229 => 208,  226 => 207,  223 => 206,  220 => 205,  214 => 203,  211 => 202,  209 => 201,  204 => 199,  198 => 196,  190 => 195,  186 => 194,  181 => 191,  179 => 190,  178 => 186,  177 => 185,  176 => 183,  174 => 182,  171 => 181,  169 => 176,  168 => 175,  166 => 171,  164 => 170,  161 => 169,  158 => 168,  156 => 161,  154 => 159,  152 => 158,  149 => 157,  146 => 156,  144 => 155,  140 => 153,  137 => 152,  120 => 151,  114 => 147,  112 => 146,  111 => 141,  110 => 140,  107 => 139,  105 => 138,  104 => 132,  103 => 131,  100 => 130,  98 => 129,  97 => 124,  96 => 123,  93 => 122,  91 => 121,  90 => 116,  89 => 115,  86 => 114,  84 => 113,  83 => 108,  82 => 107,  79 => 106,  77 => 105,  76 => 100,  75 => 99,  72 => 98,  70 => 97,  69 => 92,  68 => 91,  65 => 90,  63 => 86,  62 => 84,  61 => 80,  55 => 76,  53 => 75,  50 => 74,  46 => 16,  44 => 15,  41 => 14,  39 => 13,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Company/list_rows_contacts.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Company\\list_rows_contacts.html.twig");
    }
}
