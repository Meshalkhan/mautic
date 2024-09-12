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

/* @MauticLead/Lead/lead.html.twig */
class __TwigTemplate_f54544cd119005d447e3b71d5a3f282c extends Template
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
        // line 6
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        $context["isAnonymous"] = twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 10, $this->source); })()), "isAnonymous", [], "any", false, false, false, 10);
        // line 11
        $context["leadName"] = ((twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 11, $this->source); })()), "isAnonymous", [], "any", false, false, false, 11)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 11, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 11))) : (twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 11, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 11)));
        // line 12
        ob_start(function () { return ''; });
        // line 13
        echo "  ";
        if ( !(isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "    <span class=\"pull-left img-wrapper img-rounded mr-10\" style=\"width:33px\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Mautic\LeadBundle\Twig\Extension\LeadExtension']->getAvatar((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 14, $this->source); })())), "html", null, true);
            echo "\" alt=\"\" /></span>
  ";
        }
        $context["avatar"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        $context["flag"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 18), "country", [], "any", true, true, false, 18) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 18, $this->source); })()), "core", [], "any", false, false, false, 18), "country", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18)))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getCountryFlag(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 18, $this->source); })()), "core", [], "any", false, false, false, 18), "country", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18))) : (""));
        // line 19
        $context["groups"] = twig_get_array_keys_filter((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 19, $this->source); })()));
        // line 6
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Lead/lead.html.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "lead";
    }

    // line 21
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "<div class=\"pull-left mt-5\"><span class=\"span-block\">";
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["leadName"]) || array_key_exists("leadName", $context) ? $context["leadName"] : (function () { throw new RuntimeError('Variable "leadName" does not exist.', 22, $this->source); })()));
        echo "</span><span class=\"span-block small ml-sm\">
    ";
        // line 23
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 23, $this->source); })()), "secondaryIdentifier", [], "any", false, false, false, 23));
        echo "</span></div>
";
    }

    // line 26
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        $context["canEdit"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 27, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 27), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 27, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 27), twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 27, $this->source); })()), "permissionUser", [], "any", false, false, false, 27));
        // line 28
        echo "    ";
        $context["buttons"] = [];
        // line 29
        echo "
    ";
        // line 31
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 31), "email", [], "any", true, true, false, 31)) {
            // line 32
            echo "      ";
            $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 32, $this->source); })()), [["attr" => ["id" => "sendEmailButton", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.email.send_email.header", ["%email%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 37
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 37, $this->source); })()), "core", [], "any", false, false, false, 37), "email", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37)]), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => twig_get_attribute($this->env, $this->source,             // line 38
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "objectAction" => "email"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.email.send_email"), "iconClass" => "ri-mail-send-line", "primary" => true]]);
            // line 44
            echo "    ";
        }
        // line 45
        echo "
    ";
        // line 47
        echo "    ";
        if ((isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 47, $this->source); })())) {
            // line 48
            echo "      ";
            $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 48, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.header.contact.frequency", ["%name%" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 52
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 52, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 52))]), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => twig_get_attribute($this->env, $this->source,             // line 53
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53), "objectAction" => "contactFrequency"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.contact.frequency"), "iconClass" => "ri-settings-5-line"]]);
            // line 58
            echo "
      ";
            // line 59
            if ( !twig_test_empty((isset($context["pointGroups"]) || array_key_exists("pointGroups", $context) ? $context["pointGroups"] : (function () { throw new RuntimeError('Variable "pointGroups" does not exist.', 59, $this->source); })()))) {
                // line 60
                echo "          ";
                $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 60, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.groups.panel.title"), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => twig_get_attribute($this->env, $this->source,                 // line 65
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65), "objectAction" => "contactGroupPoints"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.groups.panel.title"), "iconClass" => "ri-focus-2-fill"]]);
                // line 70
                echo "      ";
            }
            // line 71
            echo "
    ";
        }
        // line 73
        echo "
    ";
        // line 75
        echo "    ";
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("campaign:campaigns:edit")) {
            // line 76
            echo "      ";
            $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 76, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.header.campaigns", ["%name%" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 80
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 80, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 80))]), "data-footer" => "false", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => twig_get_attribute($this->env, $this->source,             // line 82
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82), "objectAction" => "campaign"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.campaigns"), "iconClass" => "ri-megaphone-line"]]);
            // line 87
            echo "    ";
        }
        // line 88
        echo "
    ";
        // line 90
        echo "    ";
        if (($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 90, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 90), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 90, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 90), twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 90, $this->source); })()), "permissionUser", [], "any", false, false, false, 90)) && (isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 90, $this->source); })()))) {
            // line 91
            echo "        ";
            $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 91, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.header.merge", ["%name%" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 95
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 95, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 95))]), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => twig_get_attribute($this->env, $this->source,             // line 96
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96), "objectAction" => "merge"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.merge"), "iconClass" => "ri-exchange-2-line"]]);
            // line 101
            echo "    ";
        }
        // line 102
        echo "
    ";
        // line 104
        echo "    ";
        if (($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 104, $this->source); })()), "lead:leads:viewown", [], "array", false, false, false, 104), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 104, $this->source); })()), "lead:leads:viewother", [], "array", false, false, false, 104), twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 104, $this->source); })()), "permissionUser", [], "any", false, false, false, 104)) &&  !twig_test_empty((isset($context["enableExportPermission"]) || array_key_exists("enableExportPermission", $context) ? $context["enableExportPermission"] : (function () { throw new RuntimeError('Variable "enableExportPermission" does not exist.', 104, $this->source); })())))) {
            // line 105
            echo "        ";
            $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 105, $this->source); })()), [["attr" => ["data-toggle" => "download", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_export_action", ["contactId" => twig_get_attribute($this->env, $this->source,             // line 108
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108)])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.export"), "iconClass" => "ri-export-line"]]);
            // line 113
            echo "    ";
        }
        // line 114
        echo "
    ";
        // line 115
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 116
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 116, $this->source); })()), "routeBase" => "contact", "langVar" => "lead.lead", "customButtons" =>         // line 119
(isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 119, $this->source); })()), "templateButtons" => ["edit" =>         // line 121
(isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 121, $this->source); })()), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 123
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 123, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 123), twig_get_attribute($this->env, $this->source,         // line 124
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 124, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 124), twig_get_attribute($this->env, $this->source,         // line 125
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 125, $this->source); })()), "permissionUser", [], "any", false, false, false, 125)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 128
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 128, $this->source); })()), "lead:leads:viewown", [], "array", false, false, false, 128), twig_get_attribute($this->env, $this->source,         // line 129
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 129, $this->source); })()), "lead:leads:viewother", [], "array", false, false, false, 129), twig_get_attribute($this->env, $this->source,         // line 130
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 130, $this->source); })()), "permissionUser", [], "any", false, false, false, 130))]]);
        // line 133
        echo "
";
    }

    // line 136
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!--/ lead detail header -->

            <!-- lead detail collapseable -->
            <div class=\"collapse\" id=\"lead-details\">
                <ul class=\"pt-md nav nav-tabs pr-md pl-md\" role=\"tablist\">
                    ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 147, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 148
            echo "                        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 148, $this->source); })()), $context["g"], [], "array", false, false, false, 148))) {
                // line 149
                echo "                            <li class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 149)) {
                    echo "active";
                }
                echo "\">
                                <a href=\"#";
                // line 150
                echo twig_escape_filter($this->env, $context["g"], "html", null, true);
                echo "\" class=\"group\" data-toggle=\"tab\">
                                    ";
                // line 151
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . $context["g"])), "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 155
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                    ";
        if ((isset($context["devices"]) || array_key_exists("devices", $context) ? $context["devices"] : (function () { throw new RuntimeError('Variable "devices" does not exist.', 156, $this->source); })())) {
            // line 157
            echo "                        <li>
                            <a href=\"#devices\" class=\"group\" data-toggle=\"tab\">";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.devices"), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        // line 161
        echo "                    <li>
                        <a href=\"#lead-stats\" class=\"group\" data-toggle=\"tab\">";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.stats"), "html", null, true);
        echo "</a>
                    </li>
                </ul>

                <!-- start: tab-content -->
                <div class=\"tab-content pa-md\">
                    ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 168, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 169
            echo "                        <div class=\"tab-pane fade ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 169)) {
                echo "in active";
            }
            echo " bdr-w-0\" id=\"";
            echo twig_escape_filter($this->env, $context["group"], "html", null, true);
            echo "\">
                            <div class=\"pr-md pl-md pb-md\">
                                <div class=\"panel shd-none mb-0\">
                                    <table class=\"table table-hover mb-0\">
                                        <tbody>
                                        ";
            // line 174
            if (("core" == $context["group"])) {
                // line 175
                echo "                                          ";
                echo twig_include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 175, $this->source); })())]);
                echo "
                                        ";
            }
            // line 177
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 177, $this->source); })()), $context["group"], [], "array", false, false, false, 177));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 178
                echo "                                            ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 178))) {
                    // line 179
                    echo "                                                <tr>
                                                    <td width=\"20%\"><span class=\"fw-b textTitle\">";
                    // line 180
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 180));
                    echo "</span></td>
                                                    <td>
                                                        ";
                    // line 182
                    if (((("core" == $context["group"]) && ("country" == twig_get_attribute($this->env, $this->source, $context["field"], "alias", [], "any", false, false, false, 182))) &&  !twig_test_empty((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 182, $this->source); })())))) {
                        // line 183
                        echo "                                                            <img class=\"mr-sm\" src=\"";
                        echo twig_escape_filter($this->env, (isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 183, $this->source); })()), "html", null, true);
                        echo "\" alt=\"\" style=\"max-height: 24px;\"/>
                                                            <span class=\"mt-1\">";
                        // line 184
                        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 184));
                        echo "</span>
                                                        ";
                    } else {
                        // line 186
                        echo "                                                            ";
                        if (("multiselect" == twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 186))) {
                            // line 187
                            echo "                                                                ";
                            if (is_iterable(twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 187))) {
                                // line 188
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 188), ", "), "html", null, true);
                                echo "
                                                                ";
                            } else {
                                // line 190
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, twig_replace_filter($this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["field"], "normalizedValue", [], "any", false, false, false, 190)), ["|" => ", "]), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 192
                            echo "                                                            ";
                        } elseif (("url" == twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 192))) {
                            // line 193
                            echo "                                                                <a href=\"";
                            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 193));
                            echo "\" target=\"_blank\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 193), "html", null, true);
                            echo "</a>
                                                            ";
                        } elseif (("html" == twig_get_attribute($this->env, $this->source,                         // line 194
$context["field"], "type", [], "any", false, false, false, 194))) {
                            // line 195
                            echo "                                                                <div style=\"resize: vertical; overflow: auto\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 195));
                            echo "</div>
                                                            ";
                        } elseif (("datetime" == twig_get_attribute($this->env, $this->source,                         // line 196
$context["field"], "type", [], "any", false, false, false, 196))) {
                            // line 197
                            echo "                                                                ";
                            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 197), "UTC");
                            echo "
                                                            ";
                        } else {
                            // line 199
                            echo "                                                                ";
                            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["field"], "normalizedValue", [], "any", false, false, false, 199));
                            echo "
                                                            ";
                        }
                        // line 201
                        echo "                                                        ";
                    }
                    // line 202
                    echo "                                                    </td>
                                                </tr>
                                            ";
                }
                // line 205
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                    ";
        if ((isset($context["devices"]) || array_key_exists("devices", $context) ? $context["devices"] : (function () { throw new RuntimeError('Variable "devices" does not exist.', 212, $this->source); })())) {
            // line 213
            echo "                        <div class=\"tab-pane fade bdr-w-0\" id=\"devices\">
                            ";
            // line 214
            echo twig_include($this->env, $context, "@MauticLead/Lead/_devices.html.twig", ["devices" => (isset($context["devices"]) || array_key_exists("devices", $context) ? $context["devices"] : (function () { throw new RuntimeError('Variable "devices" does not exist.', 214, $this->source); })())]);
            echo "
                        </div>
                    ";
        }
        // line 217
        echo "                    <div class=\"tab-pane fade bdr-w-0\" id=\"lead-stats\" data-target-url=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_stats", ["objectId" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 217, $this->source); })()), "id", [], "any", false, false, false, 217)]), "html", null, true);
        echo "\">
                        <div class=\"spinner\"><i class=\"fa fa-spin fa-spinner\"></i></div>
                    </div>
                </div>
            </div>
            <!--/ lead detail collapseable -->
        </div>

        <div>
            <!-- lead detail collapseable toggler -->
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#lead-details\">
                       <span class=\"caret\"></span>
                       ";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "
                    </a>
                </span>
            </div>
            <!--/ lead detail collapseable toggler -->

            ";
        // line 237
        if ( !(isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 237, $this->source); })())) {
            // line 238
            echo "                <div class=\"pa-md\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"panel\">
                                <div class=\"panel-body box-layout\">
                                    <div class=\"col-xs-8 va-m\">
                                        <h5 class=\"text-white dark-md fw-sb mb-xs\">";
            // line 244
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.header.engagements"), "html", null, true);
            echo "</h5>
                                    </div>
                                    <div class=\"col-xs-4 va-t text-right\">
                                        <h3 class=\"text-white dark-sm\"><span class=\"ri-eye-line\"></span></h3>
                                    </div>
                                </div>
                                ";
            // line 250
            echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["engagementData"]) || array_key_exists("engagementData", $context) ? $context["engagementData"] : (function () { throw new RuntimeError('Variable "engagementData" does not exist.', 250, $this->source); })()), "chartType" => "line", "chartHeight" => 250]);
            echo "
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 256
        echo "            <!-- tabs controls -->
            <ul class=\"nav nav-tabs pr-md pl-md mt-10\">
                <li class=\"active\">
                    <a href=\"#timeline-container\" role=\"tab\" data-toggle=\"tab\">
                        <span class=\"label label-primary mr-sm\" id=\"TimelineCount\">
                            ";
        // line 261
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 261, $this->source); })()), "total", [], "any", false, false, false, 261), "html", null, true);
        echo "
                        </span>
                        ";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.tab.history"), "html", null, true);
        echo "
                    </a>
                </li>
                <li class=\"\">
                    <a href=\"#notes-container\" role=\"tab\" data-toggle=\"tab\">
                        <span class=\"label label-primary mr-sm\" id=\"NoteCount\">
                            ";
        // line 269
        echo twig_escape_filter($this->env, (isset($context["noteCount"]) || array_key_exists("noteCount", $context) ? $context["noteCount"] : (function () { throw new RuntimeError('Variable "noteCount" does not exist.', 269, $this->source); })()), "html", null, true);
        echo "
                        </span>
                        ";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.tab.notes"), "html", null, true);
        echo "
                    </a>
                </li>
                ";
        // line 274
        if (( !(isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 274, $this->source); })()) &&  !twig_test_empty((isset($context["socialProfiles"]) || array_key_exists("socialProfiles", $context) ? $context["socialProfiles"] : (function () { throw new RuntimeError('Variable "socialProfiles" does not exist.', 274, $this->source); })())))) {
            // line 275
            echo "                    <li class=\"\">
                        <a href=\"#social-container\" role=\"tab\" data-toggle=\"tab\">
                        <span class=\"label label-primary mr-sm\" id=\"SocialCount\">
                            ";
            // line 278
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["socialProfiles"]) || array_key_exists("socialProfiles", $context) ? $context["socialProfiles"] : (function () { throw new RuntimeError('Variable "socialProfiles" does not exist.', 278, $this->source); })())), "html", null, true);
            echo "
                        </span>
                            ";
            // line 280
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.tab.social"), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        // line 284
        echo "                <li class=\"\">
                    <a href=\"#integration-container\" role=\"tab\" data-toggle=\"tab\">
                    <span class=\"label label-primary mr-sm\" id=\"IntegrationCount\">
                        ";
        // line 287
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 287, $this->source); })())), "html", null, true);
        echo "
                    </span>
                        ";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.tab.integration"), "html", null, true);
        echo "
                    </a>
                </li>
                <li class=\"\">
                    <a href=\"#auditlog-container\" role=\"tab\" data-toggle=\"tab\">
                    <span class=\"label label-primary mr-sm\" id=\"AuditLogCount\">
                        ";
        // line 295
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auditlog"]) || array_key_exists("auditlog", $context) ? $context["auditlog"] : (function () { throw new RuntimeError('Variable "auditlog" does not exist.', 295, $this->source); })()), "total", [], "any", false, false, false, 295), "html", null, true);
        echo "
                    </span>
                        ";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.tab.auditlog"), "html", null, true);
        echo "
                    </a>
                </li>
                ";
        // line 300
        if ((isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 300, $this->source); })())) {
            // line 301
            echo "                    <li class=\"\">
                        <a href=\"#place-container\" role=\"tab\" data-toggle=\"tab\" id=\"load-lead-map\">
                        <span class=\"label label-primary mr-sm\" id=\"PlaceCount\">
                            ";
            // line 304
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 304, $this->source); })())), "html", null, true);
            echo "
                        </span>
                            ";
            // line 306
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.tab.places"), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        // line 310
        echo "                ";
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("tabs", $context);
        echo "
            </ul>
            <!--/ tabs controls -->
        </div>

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md\">
            <!-- #history-container -->
            <div class=\"tab-pane fade in active bdr-w-0\" id=\"timeline-container\">
                ";
        // line 319
        echo twig_include($this->env, $context, "@MauticLead/Timeline/list.html.twig", ["events" => (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 319, $this->source); })()), "lead" => (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 319, $this->source); })())]);
        echo "
            </div>
            <!--/ #history-container -->

            <!-- #notes-container -->
            <div class=\"tab-pane fade bdr-w-0\" id=\"notes-container\">
                ";
        // line 325
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Mautic\\LeadBundle\\Controller\\NoteController::indexAction", ["leadId" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 325, $this->source); })()), "id", [], "any", false, false, false, 325), "ignoreAjax" => 1]));
        echo "
            </div>
            <!--/ #notes-container -->

            <!-- #social-container -->
            ";
        // line 330
        if (( !(isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 330, $this->source); })()) &&  !twig_test_empty((isset($context["socialProfiles"]) || array_key_exists("socialProfiles", $context) ? $context["socialProfiles"] : (function () { throw new RuntimeError('Variable "socialProfiles" does not exist.', 330, $this->source); })())))) {
            // line 331
            echo "                <div class=\"tab-pane fade bdr-w-0\" id=\"social-container\">
                    ";
            // line 332
            echo twig_include($this->env, $context, "@MauticLead/Social/index.html.twig", ["lead" =>             // line 333
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 333, $this->source); })()), "socialProfiles" =>             // line 334
(isset($context["socialProfiles"]) || array_key_exists("socialProfiles", $context) ? $context["socialProfiles"] : (function () { throw new RuntimeError('Variable "socialProfiles" does not exist.', 334, $this->source); })()), "socialProfileUrls" =>             // line 335
(isset($context["socialProfileUrls"]) || array_key_exists("socialProfileUrls", $context) ? $context["socialProfileUrls"] : (function () { throw new RuntimeError('Variable "socialProfileUrls" does not exist.', 335, $this->source); })())]);
            // line 336
            echo "
                </div>
            ";
        }
        // line 339
        echo "            <!--/ #social-container -->

            <!-- #integration-container -->
            <div class=\"tab-pane fade bdr-w-0\" id=\"integration-container\">
                ";
        // line 343
        echo twig_include($this->env, $context, "@MauticLead/Integration/index.html.twig", ["lead" =>         // line 344
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 344, $this->source); })()), "integrations" =>         // line 345
(isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 345, $this->source); })())]);
        // line 346
        echo "
            </div>
            <!--/ #integration-container -->

            <!-- #auditlog-container -->
            <div class=\"tab-pane fade bdr-w-0\" id=\"auditlog-container\">
                ";
        // line 352
        echo twig_include($this->env, $context, "@MauticLead/Auditlog/_list.html.twig", ["lead" =>         // line 353
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 353, $this->source); })()), "events" =>         // line 354
(isset($context["auditlog"]) || array_key_exists("auditlog", $context) ? $context["auditlog"] : (function () { throw new RuntimeError('Variable "auditlog" does not exist.', 354, $this->source); })())]);
        // line 355
        echo "
            </div>
            <!--/ #auditlog-container -->

            <!-- custom content -->
            ";
        // line 360
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("tabs.content", $context);
        echo "
            <!-- end: custom content -->

            <!-- #place-container -->
            ";
        // line 364
        if ((isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 364, $this->source); })())) {
            // line 365
            echo "                <div class=\"tab-pane fade bdr-w-0\" id=\"place-container\">
                    ";
            // line 366
            echo twig_include($this->env, $context, "@MauticLead/Lead/_map.html.twig", ["places" => (isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 366, $this->source); })())]);
            echo "
                </div>
            ";
        }
        // line 369
        echo "            <!--/ #place-container -->
        </div>
        <!--/ end: tab-content -->
    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        <!-- form HTML -->
        <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mb-0\">
            ";
        // line 379
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 379, $this->source); })()), "isAnonymous", [], "any", false, false, false, 379)) {
            // line 380
            echo "                <div class=\"lead-avatar-panel\">
                    <div class=\"avatar-collapser hr-expand nm\">
                        <a href=\"javascript:void(0)\"
                            class=\"arrow text-muted text-center ";
            // line 383
            if (("expanded" != (isset($context["avatarPanelState"]) || array_key_exists("avatarPanelState", $context) ? $context["avatarPanelState"] : (function () { throw new RuntimeError('Variable "avatarPanelState" does not exist.', 383, $this->source); })()))) {
                echo "collapsed";
            }
            echo "\"
                            data-toggle=\"collapse\"
                            data-target=\"#lead-avatar-block\">
                            <span class=\"caret\"></span>
                        </a>
                    </div>
                    <div class=\"collapse ";
            // line 389
            if (("expanded" == (isset($context["avatarPanelState"]) || array_key_exists("avatarPanelState", $context) ? $context["avatarPanelState"] : (function () { throw new RuntimeError('Variable "avatarPanelState" does not exist.', 389, $this->source); })()))) {
                echo "in";
            }
            echo "\" id=\"lead-avatar-block\">
                        <img class=\"img-responsive\" src=\"";
            // line 390
            echo twig_escape_filter($this->env, $this->extensions['Mautic\LeadBundle\Twig\Extension\LeadExtension']->getAvatar((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 390, $this->source); })())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["leadName"]) || array_key_exists("leadName", $context) ? $context["leadName"] : (function () { throw new RuntimeError('Variable "leadName" does not exist.', 390, $this->source); })()));
            echo "\"/>
                    </div>
                </div>
            ";
        }
        // line 394
        echo "            <div class=\"mt-sm points-panel text-center\">
                <h1 style=\"";
        // line 395
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 395, $this->source); })()), "color", [], "any", false, false, false, 395))) {
            echo "font-color:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 395, $this->source); })()), "color", [], "any", false, false, false, 395), "html", null, true);
            echo " !important;";
        }
        echo "\">
                    ";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.points.count", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 396, $this->source); })()), "points", [], "any", false, false, false, 396)]), "html", null, true);
        echo "
                </h1>
                <hr/>
                ";
        // line 399
        if (twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 399, $this->source); })()), "stage", [], "any", false, false, false, 399)) {
            // line 400
            echo "                    ";
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 400, $this->source); })()), "stage", [], "any", false, false, false, 400), "name", [], "any", false, false, false, 400));
            echo "<hr>
                ";
        }
        // line 402
        echo "            </div>

            ";
        // line 404
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 404, $this->source); })()), "groupScores", [], "any", false, false, false, 404))) {
            // line 405
            echo "                <div class=\"panel-heading\">
                    <div class=\"panel-title\">
                        ";
            // line 407
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.groups.panel.title"), "html", null, true);
            echo "
                    </div>
                </div>

                <div class=\"panel-body pt-sm group-points-panel\">
                    ";
            // line 412
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 412, $this->source); })()), "groupScores", [], "any", false, false, false, 412));
            foreach ($context['_seq'] as $context["_key"] => $context["groupScore"]) {
                // line 413
                echo "                        <div class=\"row\">
                            <h6 class=\"fw-sb col-md-6\">
                                ";
                // line 415
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupScore"], "group", [], "any", false, false, false, 415), "name", [], "any", false, false, false, 415), "html", null, true);
                echo "
                            </h6>
                            <p class=\"text-muted col-md-6\">
                                ";
                // line 418
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.points.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["groupScore"], "score", [], "any", false, false, false, 418)]), "html", null, true);
                echo "
                            </p>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupScore'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 422
            echo "                </div>
            ";
        }
        // line 424
        echo "
            ";
        // line 425
        if ((isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 425, $this->source); })())) {
            // line 426
            echo "                ";
            echo twig_include($this->env, $context, "@MauticLead/Lead/_dnc_large.html.twig", ["doNotContact" => (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 426, $this->source); })())]);
            echo "
            ";
        }
        // line 428
        echo "            ";
        if ((isset($context["doNotContactSms"]) || array_key_exists("doNotContactSms", $context) ? $context["doNotContactSms"] : (function () { throw new RuntimeError('Variable "doNotContactSms" does not exist.', 428, $this->source); })())) {
            // line 429
            echo "                ";
            echo twig_include($this->env, $context, "@MauticLead/Lead/_dnc_large.html.twig", ["doNotContact" => (isset($context["doNotContactSms"]) || array_key_exists("doNotContactSms", $context) ? $context["doNotContactSms"] : (function () { throw new RuntimeError('Variable "doNotContactSms" does not exist.', 429, $this->source); })())]);
            echo "
            ";
        }
        // line 431
        echo "            <div class=\"panel-heading\">
                <div class=\"panel-title\">
                    ";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.header.contact"), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"panel-body pt-sm\">
            ";
        // line 437
        if (twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 437, $this->source); })()), "owner", [], "any", false, false, false, 437)) {
            // line 438
            echo "                <h6 class=\"fw-sb\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.field.owner"), "html", null, true);
            echo "</h6>
                <p class=\"text-muted\">";
            // line 439
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 439, $this->source); })()), "owner", [], "any", false, false, false, 439), "name", [], "any", false, false, false, 439));
            echo "</p>
            ";
        }
        // line 441
        echo "
                <h6 class=\"fw-sb\">
                    ";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.address"), "html", null, true);
        echo "
                </h6>
                <address class=\"text-muted\">
                    ";
        // line 446
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 446), "address1", [], "any", true, true, false, 446)) {
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 446, $this->source); })()), "core", [], "any", false, false, false, 446), "address1", [], "any", false, false, false, 446), "value", [], "any", false, false, false, 446));
            echo "<br>";
        }
        // line 447
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 447), "address2", [], "any", true, true, false, 447)) {
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 447, $this->source); })()), "core", [], "any", false, false, false, 447), "address2", [], "any", false, false, false, 447), "value", [], "any", false, false, false, 447));
            echo "<br>";
        }
        // line 448
        echo "                    ";
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 448, $this->source); })()), "location", [], "any", false, false, false, 448));
        echo "
                    ";
        // line 449
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 449), "zipcode", [], "any", true, true, false, 449)) {
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 449, $this->source); })()), "core", [], "any", false, false, false, 449), "zipcode", [], "any", false, false, false, 449), "value", [], "any", false, false, false, 449));
        }
        // line 450
        echo "                    <br>
                </address>

                <h6 class=\"fw-sb\">";
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.type.email"), "html", null, true);
        echo "</h6>
                <p class=\"text-muted\">";
        // line 454
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 454, $this->source); })()), "core", [], "any", false, false, false, 454), "email", [], "any", false, false, false, 454), "value", [], "any", false, false, false, 454));
        echo "</p>

                ";
        // line 456
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 456), "phone", [], "any", true, true, false, 456)) {
            // line 457
            echo "                    <h6 class=\"fw-sb\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.type.tel.home"), "html", null, true);
            echo "</h6>
                    <p class=\"text-muted\">";
            // line 458
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 458, $this->source); })()), "core", [], "any", false, false, false, 458), "phone", [], "any", false, false, false, 458), "value", [], "any", false, false, false, 458));
            echo "</p>
                ";
        }
        // line 460
        echo "
                ";
        // line 461
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 461), "mobile", [], "any", true, true, false, 461)) {
            // line 462
            echo "                    <h6 class=\"fw-sb\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.type.tel.mobile"), "html", null, true);
            echo "</h6>
                    <p class=\"text-muted mb-0\">";
            // line 463
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 463, $this->source); })()), "core", [], "any", false, false, false, 463), "mobile", [], "any", false, false, false, 463), "value", [], "any", false, false, false, 463));
            echo "</p>
                ";
        }
        // line 465
        echo "            </div>
        </div>
        <!--/ form HTML -->

        ";
        // line 469
        if ((isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 469, $this->source); })())) {
            // line 470
            echo "            <hr class=\"hr-w-2\" style=\"width:50%\">

            <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\">";
            // line 474
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.upcoming.events"), "html", null, true);
            echo "</div>
                </div>
                <div class=\"panel-body pt-sm\">
                    <ul class=\"media-list media-list-feed\">
                        ";
            // line 478
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 478, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 479
                echo "                            ";
                $context["metadata"] = Mautic\CoreBundle\Helper\Serializer::decode(twig_get_attribute($this->env, $this->source, $context["event"], "metadata", [], "any", false, false, false, 479));
                // line 480
                echo "                            ";
                $context["errors"] = false;
                // line 481
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "errors", [], "any", true, true, false, 481) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 481, $this->source); })()), "errors", [], "any", false, false, false, 481)))) {
                    // line 482
                    echo "                                ";
                    $context["errors"] = ((is_iterable(twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 482, $this->source); })()), "errors", [], "any", false, false, false, 482))) ? (twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 482, $this->source); })()), "errors", [], "any", false, false, false, 482), "<br/>")) : (twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 482, $this->source); })()), "errors", [], "any", false, false, false, 482)));
                    // line 483
                    echo "                            ";
                }
                // line 484
                echo "                            <li class=\"media\">
                                <div class=\"media-object pull-left mt-xs\">
                                    <span class=\"figure\"></span>
                                </div>
                                <div class=\"media-body\">
                                    ";
                // line 489
                echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.upcoming.event.triggered.at", ["%event%" => twig_get_attribute($this->env, $this->source,                 // line 490
$context["event"], "event_name", [], "any", false, false, false, 490), "%link%" => (((("<a href=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source,                 // line 491
$context["event"], "campaign_id", [], "any", false, false, false, 491)])) . "\" data-toggle=\"ajax\">") . twig_get_attribute($this->env, $this->source, $context["event"], "campaign_name", [], "any", false, false, false, 491)) . "</a>")]));
                // line 492
                echo "
                                    ";
                // line 493
                if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 493, $this->source); })()))) {
                    // line 494
                    echo "                                      <i class=\"ri-alert-line text-danger\" data-toggle=\"tooltip\" title=\"";
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 494, $this->source); })()));
                    echo "\"></i>
                                    ";
                }
                // line 496
                echo "                                    <p class=\"fs-12 dark-sm timeline-campaign-event-date-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "event_id", [], "any", false, false, false, 496), "html", null, true);
                echo "\">
                                      ";
                // line 497
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, $context["event"], "trigger_date", [], "any", false, false, false, 497), "utc");
                echo "
                                    </p>
                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 502
            echo "                    </ul>
                </div>
            </div>
        ";
        }
        // line 506
        echo "        <div class=\"pa-sm\">
            ";
        // line 507
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 507, $this->source); })()), "tags", [], "any", false, false, false, 507));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 508
            echo "                <div id=\"tagLabel";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 508), "html", null, true);
            echo "\">
                    <h5 class=\"pull-left mt-xs mr-xs\">
                        <span class=\"label label-success label-tag\">
                            <a href=\"";
            // line 511
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_tagmanager_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 511)]), "html", null, true);
            echo "\" data-toggle=\"ajax\" style=\"color: white;\">
                                ";
            // line 512
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 512));
            echo "
                            </a>
                            <i class=\"ri-close-line has-click-event\" onclick=\"Mautic.removeTagFromLead(this, ";
            // line 514
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 514, $this->source); })()), "id", [], "any", false, false, false, 514), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 514), "html", null, true);
            echo ");\"></i>
                        </span>
                    </h5>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 519
        echo "            <div class=\"clearfix\"></div>
        </div>
        <div class=\"pa-sm panel-companies\">
            <div class=\"panel-title\">
                ";
        // line 523
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.companies"), "html", null, true);
        echo "
            </div>
            ";
        // line 525
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 525, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["company"]) {
            // line 526
            echo "            <h5 class=\"pull-left mt-xs mr-xs\">
                <span class=\"label label-success\">
                    <i id=\"company-";
            // line 528
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 528), "html", null, true);
            echo "\" class=\"ri-check-line ";
            if ((1 == twig_get_attribute($this->env, $this->source, $context["company"], "is_primary", [], "any", false, false, false, 528))) {
                echo "primary";
            }
            echo "\" onclick=\"Mautic.setAsPrimaryCompany(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 528), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 528, $this->source); })()), "id", [], "any", false, false, false, 528), "html", null, true);
            echo ");\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.company.set.primary"), "html", null, true);
            echo "\"></i>
                    <a href=\"";
            // line 529
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_company_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 529)]), "html", null, true);
            echo "\" data-toggle=\"ajax\" style=\"color: white;\">
                        ";
            // line 530
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["company"], "companyname", [], "any", false, false, false, 530));
            echo "
                    </a>
                </span>
            </h5>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 535
        echo "            <div class=\"clearfix\"></div>
        </div>
        ";
        // line 537
        if (twig_get_attribute($this->env, $this->source, ($context["lists"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 537, $this->source); })()), "id", [], "any", false, false, false, 537), [], "array", true, true, false, 537)) {
            // line 538
            echo "          <div class=\"pa-sm panel-segments\">
            <div class=\"panel-title\">
              ";
            // line 540
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.lists"), "html", null, true);
            echo "
            </div>
            ";
            // line 542
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["lists"]) || array_key_exists("lists", $context) ? $context["lists"] : (function () { throw new RuntimeError('Variable "lists" does not exist.', 542, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 542, $this->source); })()), "id", [], "any", false, false, false, 542), [], "array", false, false, false, 542));
            foreach ($context['_seq'] as $context["key"] => $context["list"]) {
                // line 543
                echo "              <h5 class=\"pull-left mt-xs mr-xs\">
                  <span class=\"label label-success\">
                      <a href=\"";
                // line 545
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 545)]), "html", null, true);
                echo "\" data-toggle=\"ajax\" style=\"color: white;\">
                          ";
                // line 546
                echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["list"], "name", [], "any", false, false, false, 546));
                echo "
                      </a>
                  </span>
              </h5>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 551
            echo "          ";
        }
        // line 552
        echo "          <div class=\"clearfix\"></div>
        </div>
    </div>
    <!--/ right section -->
</div>
<!--/ end: box layout -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Lead/lead.html.twig";
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
        return array (  1146 => 552,  1143 => 551,  1132 => 546,  1128 => 545,  1124 => 543,  1120 => 542,  1115 => 540,  1111 => 538,  1109 => 537,  1105 => 535,  1094 => 530,  1090 => 529,  1076 => 528,  1072 => 526,  1068 => 525,  1063 => 523,  1057 => 519,  1044 => 514,  1039 => 512,  1035 => 511,  1028 => 508,  1024 => 507,  1021 => 506,  1015 => 502,  1004 => 497,  999 => 496,  993 => 494,  991 => 493,  988 => 492,  986 => 491,  985 => 490,  984 => 489,  977 => 484,  974 => 483,  971 => 482,  968 => 481,  965 => 480,  962 => 479,  958 => 478,  951 => 474,  945 => 470,  943 => 469,  937 => 465,  932 => 463,  927 => 462,  925 => 461,  922 => 460,  917 => 458,  912 => 457,  910 => 456,  905 => 454,  901 => 453,  896 => 450,  892 => 449,  887 => 448,  881 => 447,  876 => 446,  870 => 443,  866 => 441,  861 => 439,  856 => 438,  854 => 437,  847 => 433,  843 => 431,  837 => 429,  834 => 428,  828 => 426,  826 => 425,  823 => 424,  819 => 422,  809 => 418,  803 => 415,  799 => 413,  795 => 412,  787 => 407,  783 => 405,  781 => 404,  777 => 402,  771 => 400,  769 => 399,  763 => 396,  755 => 395,  752 => 394,  743 => 390,  737 => 389,  726 => 383,  721 => 380,  719 => 379,  707 => 369,  701 => 366,  698 => 365,  696 => 364,  689 => 360,  682 => 355,  680 => 354,  679 => 353,  678 => 352,  670 => 346,  668 => 345,  667 => 344,  666 => 343,  660 => 339,  655 => 336,  653 => 335,  652 => 334,  651 => 333,  650 => 332,  647 => 331,  645 => 330,  637 => 325,  628 => 319,  615 => 310,  608 => 306,  603 => 304,  598 => 301,  596 => 300,  590 => 297,  585 => 295,  576 => 289,  571 => 287,  566 => 284,  559 => 280,  554 => 278,  549 => 275,  547 => 274,  541 => 271,  536 => 269,  527 => 263,  522 => 261,  515 => 256,  506 => 250,  497 => 244,  489 => 238,  487 => 237,  478 => 231,  472 => 228,  457 => 217,  451 => 214,  448 => 213,  445 => 212,  426 => 206,  420 => 205,  415 => 202,  412 => 201,  406 => 199,  400 => 197,  398 => 196,  393 => 195,  391 => 194,  384 => 193,  381 => 192,  375 => 190,  369 => 188,  366 => 187,  363 => 186,  358 => 184,  353 => 183,  351 => 182,  346 => 180,  343 => 179,  340 => 178,  335 => 177,  329 => 175,  327 => 174,  314 => 169,  297 => 168,  288 => 162,  285 => 161,  279 => 158,  276 => 157,  273 => 156,  259 => 155,  252 => 151,  248 => 150,  241 => 149,  238 => 148,  221 => 147,  209 => 137,  205 => 136,  200 => 133,  198 => 130,  197 => 129,  196 => 128,  195 => 125,  194 => 124,  193 => 123,  192 => 121,  191 => 119,  190 => 116,  189 => 115,  186 => 114,  183 => 113,  181 => 108,  179 => 105,  176 => 104,  173 => 102,  170 => 101,  168 => 96,  167 => 95,  165 => 91,  162 => 90,  159 => 88,  156 => 87,  154 => 82,  153 => 80,  151 => 76,  148 => 75,  145 => 73,  141 => 71,  138 => 70,  136 => 65,  134 => 60,  132 => 59,  129 => 58,  127 => 53,  126 => 52,  124 => 48,  121 => 47,  118 => 45,  115 => 44,  113 => 38,  112 => 37,  110 => 32,  107 => 31,  104 => 29,  101 => 28,  98 => 27,  94 => 26,  88 => 23,  81 => 22,  77 => 21,  70 => 8,  65 => 6,  63 => 19,  61 => 18,  54 => 14,  51 => 13,  49 => 12,  47 => 11,  45 => 10,  38 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Lead/lead.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\lead.html.twig");
    }
}
