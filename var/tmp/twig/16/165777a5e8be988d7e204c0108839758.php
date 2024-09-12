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

/* @MauticLead/Lead/lead.html.twig */
class __TwigTemplate_17c7d354c9cbcb45799d99c650906328 extends Template
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

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 6
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        $context["isAnonymous"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 10, $this->source); })()), "isAnonymous", [], "any", false, false, false, 10);
        // line 11
        $context["leadName"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 11, $this->source); })()), "isAnonymous", [], "any", false, false, false, 11)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 11, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 11))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 11, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 11)));
        // line 12
        $context["avatar"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 13
            yield "  ";
            if ( !(isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 13, $this->source); })())) {
                // line 14
                yield "    <span class=\"pull-left img-wrapper img-rounded mr-10\" style=\"width:33px\"><img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\LeadBundle\Twig\Extension\LeadExtension']->getAvatar((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 14, $this->source); })())), "html", null, true);
                yield "\" alt=\"\" /></span>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        $context["flag"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 18), "country", [], "any", true, true, false, 18) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 18, $this->source); })()), "core", [], "any", false, false, false, 18), "country", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18)))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getCountryFlag(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 18, $this->source); })()), "core", [], "any", false, false, false, 18), "country", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18))) : (""));
        // line 19
        $context["groups"] = Twig\Extension\CoreExtension::keys((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 19, $this->source); })()));
        // line 6
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Lead/lead.html.twig", 6);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "lead";
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "<div class=\"pull-left mt-5\"><span class=\"span-block\">";
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["leadName"]) || array_key_exists("leadName", $context) ? $context["leadName"] : (function () { throw new RuntimeError('Variable "leadName" does not exist.', 22, $this->source); })()));
        yield "</span><span class=\"span-block small ml-sm\">
    ";
        // line 23
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 23, $this->source); })()), "secondaryIdentifier", [], "any", false, false, false, 23));
        yield "</span></div>
";
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        $context["canEdit"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 27, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 27), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 27, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 27), CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 27, $this->source); })()), "permissionUser", [], "any", false, false, false, 27));
        // line 28
        yield "    ";
        $context["buttons"] = [];
        // line 29
        yield "
    ";
        // line 31
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 31), "email", [], "any", true, true, false, 31)) {
            // line 32
            yield "      ";
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 32, $this->source); })()), [["attr" => ["id" => "sendEmailButton", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.email.send_email.header", ["%email%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 37
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 37, $this->source); })()), "core", [], "any", false, false, false, 37), "email", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37)]), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 38
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "objectAction" => "email"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.email.send_email"), "iconClass" => "ri-mail-send-line", "primary" => true]]);
            // line 44
            yield "    ";
        }
        // line 45
        yield "
    ";
        // line 47
        yield "    ";
        if ((isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 47, $this->source); })())) {
            // line 48
            yield "      ";
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 48, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.header.contact.frequency", ["%name%" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,             // line 52
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 52, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 52))]), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 53
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53), "objectAction" => "contactFrequency"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.contact.frequency"), "iconClass" => "ri-settings-5-line"]]);
            // line 58
            yield "
      ";
            // line 59
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["pointGroups"]) || array_key_exists("pointGroups", $context) ? $context["pointGroups"] : (function () { throw new RuntimeError('Variable "pointGroups" does not exist.', 59, $this->source); })()))) {
                // line 60
                yield "          ";
                $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 60, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.groups.panel.title"), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 65
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65), "objectAction" => "contactGroupPoints"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.groups.panel.title"), "iconClass" => "ri-focus-2-fill"]]);
                // line 70
                yield "      ";
            }
            // line 71
            yield "
    ";
        }
        // line 73
        yield "
    ";
        // line 75
        yield "    ";
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("campaign:campaigns:edit")) {
            // line 76
            yield "      ";
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 76, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.header.campaigns", ["%name%" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,             // line 80
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 80, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 80))]), "data-footer" => "false", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 82
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82), "objectAction" => "campaign"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.campaigns"), "iconClass" => "ri-megaphone-line"]]);
            // line 87
            yield "    ";
        }
        // line 88
        yield "
    ";
        // line 90
        yield "    ";
        if (($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 90, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 90), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 90, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 90), CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 90, $this->source); })()), "permissionUser", [], "any", false, false, false, 90)) && (isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 90, $this->source); })()))) {
            // line 91
            yield "        ";
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 91, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.header.merge", ["%name%" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,             // line 95
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 95, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 95))]), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 96
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96), "objectAction" => "merge"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.merge"), "iconClass" => "ri-exchange-2-line"]]);
            // line 101
            yield "    ";
        }
        // line 102
        yield "
    ";
        // line 104
        yield "    ";
        if (($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 104, $this->source); })()), "lead:leads:viewown", [], "array", false, false, false, 104), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 104, $this->source); })()), "lead:leads:viewother", [], "array", false, false, false, 104), CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 104, $this->source); })()), "permissionUser", [], "any", false, false, false, 104)) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["enableExportPermission"]) || array_key_exists("enableExportPermission", $context) ? $context["enableExportPermission"] : (function () { throw new RuntimeError('Variable "enableExportPermission" does not exist.', 104, $this->source); })())))) {
            // line 105
            yield "        ";
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 105, $this->source); })()), [["attr" => ["data-toggle" => "download", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_export_action", ["contactId" => CoreExtension::getAttribute($this->env, $this->source,             // line 108
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108)])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.export"), "iconClass" => "ri-export-line"]]);
            // line 113
            yield "    ";
        }
        // line 114
        yield "
    ";
        // line 115
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 116
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 116, $this->source); })()), "routeBase" => "contact", "langVar" => "lead.lead", "customButtons" =>         // line 119
(isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 119, $this->source); })()), "templateButtons" => ["edit" =>         // line 121
(isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 121, $this->source); })()), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 123
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 123, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 123), CoreExtension::getAttribute($this->env, $this->source,         // line 124
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 124, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 124), CoreExtension::getAttribute($this->env, $this->source,         // line 125
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 125, $this->source); })()), "permissionUser", [], "any", false, false, false, 125)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 128
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 128, $this->source); })()), "lead:leads:viewown", [], "array", false, false, false, 128), CoreExtension::getAttribute($this->env, $this->source,         // line 129
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 129, $this->source); })()), "lead:leads:viewother", [], "array", false, false, false, 129), CoreExtension::getAttribute($this->env, $this->source,         // line 130
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 130, $this->source); })()), "permissionUser", [], "any", false, false, false, 130))]]);
        // line 133
        yield "
";
        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 137
        yield "<!-- start: box layout -->
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 147, $this->source); })()));
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
            yield "                        ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 148, $this->source); })()), $context["g"], [], "array", false, false, false, 148))) {
                // line 149
                yield "                            <li class=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 149)) {
                    yield "active";
                }
                yield "\">
                                <a href=\"#";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["g"], "html", null, true);
                yield "\" class=\"group\" data-toggle=\"tab\">
                                    ";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . $context["g"])), "html", null, true);
                yield "
                                </a>
                            </li>
                        ";
            }
            // line 155
            yield "                    ";
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
        unset($context['_seq'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "                    ";
        if ((isset($context["devices"]) || array_key_exists("devices", $context) ? $context["devices"] : (function () { throw new RuntimeError('Variable "devices" does not exist.', 156, $this->source); })())) {
            // line 157
            yield "                        <li>
                            <a href=\"#devices\" class=\"group\" data-toggle=\"tab\">";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.devices"), "html", null, true);
            yield "</a>
                        </li>
                    ";
        }
        // line 161
        yield "                    <li>
                        <a href=\"#lead-stats\" class=\"group\" data-toggle=\"tab\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.stats"), "html", null, true);
        yield "</a>
                    </li>
                </ul>

                <!-- start: tab-content -->
                <div class=\"tab-content pa-md\">
                    ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 168, $this->source); })()));
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
            yield "                        <div class=\"tab-pane fade ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 169)) {
                yield "in active";
            }
            yield " bdr-w-0\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["group"], "html", null, true);
            yield "\">
                            <div class=\"pr-md pl-md pb-md\">
                                <div class=\"panel shd-none mb-0\">
                                    <table class=\"table table-hover mb-0\">
                                        <tbody>
                                        ";
            // line 174
            if (("core" == $context["group"])) {
                // line 175
                yield "                                          ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 175, $this->source); })())]);
                yield "
                                        ";
            }
            // line 177
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 177, $this->source); })()), $context["group"], [], "array", false, false, false, 177));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 178
                yield "                                            ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 178))) {
                    // line 179
                    yield "                                                <tr>
                                                    <td width=\"20%\"><span class=\"fw-b textTitle\">";
                    // line 180
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 180));
                    yield "</span></td>
                                                    <td>
                                                        ";
                    // line 182
                    if (((("core" == $context["group"]) && ("country" == CoreExtension::getAttribute($this->env, $this->source, $context["field"], "alias", [], "any", false, false, false, 182))) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 182, $this->source); })())))) {
                        // line 183
                        yield "                                                            <img class=\"mr-sm\" src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 183, $this->source); })()), "html", null, true);
                        yield "\" alt=\"\" style=\"max-height: 24px;\"/>
                                                            <span class=\"mt-1\">";
                        // line 184
                        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 184));
                        yield "</span>
                                                        ";
                    } else {
                        // line 186
                        yield "                                                            ";
                        if (("multiselect" == CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 186))) {
                            // line 187
                            yield "                                                                ";
                            if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 187))) {
                                // line 188
                                yield "                                                                    ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 188), ", "), "html", null, true);
                                yield "
                                                                ";
                            } else {
                                // line 190
                                yield "                                                                    ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "normalizedValue", [], "any", false, false, false, 190)), ["|" => ", "]), "html", null, true);
                                yield "
                                                                ";
                            }
                            // line 192
                            yield "                                                            ";
                        } elseif (("url" == CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 192))) {
                            // line 193
                            yield "                                                                <a href=\"";
                            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 193));
                            yield "\" target=\"_blank\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 193), "html", null, true);
                            yield "</a>
                                                            ";
                        } elseif (("html" == CoreExtension::getAttribute($this->env, $this->source,                         // line 194
$context["field"], "type", [], "any", false, false, false, 194))) {
                            // line 195
                            yield "                                                                <div style=\"resize: vertical; overflow: auto\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 195));
                            yield "</div>
                                                            ";
                        } elseif (("datetime" == CoreExtension::getAttribute($this->env, $this->source,                         // line 196
$context["field"], "type", [], "any", false, false, false, 196))) {
                            // line 197
                            yield "                                                                ";
                            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 197), "UTC");
                            yield "
                                                            ";
                        } else {
                            // line 199
                            yield "                                                                ";
                            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "normalizedValue", [], "any", false, false, false, 199));
                            yield "
                                                            ";
                        }
                        // line 201
                        yield "                                                        ";
                    }
                    // line 202
                    yield "                                                    </td>
                                                </tr>
                                            ";
                }
                // line 205
                yield "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        yield "                    ";
        if ((isset($context["devices"]) || array_key_exists("devices", $context) ? $context["devices"] : (function () { throw new RuntimeError('Variable "devices" does not exist.', 212, $this->source); })())) {
            // line 213
            yield "                        <div class=\"tab-pane fade bdr-w-0\" id=\"devices\">
                            ";
            // line 214
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Lead/_devices.html.twig", ["devices" => (isset($context["devices"]) || array_key_exists("devices", $context) ? $context["devices"] : (function () { throw new RuntimeError('Variable "devices" does not exist.', 214, $this->source); })())]);
            yield "
                        </div>
                    ";
        }
        // line 217
        yield "                    <div class=\"tab-pane fade bdr-w-0\" id=\"lead-stats\" data-target-url=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_stats", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 217, $this->source); })()), "id", [], "any", false, false, false, 217)]), "html", null, true);
        yield "\">
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#lead-details\">
                       <span class=\"caret\"></span>
                       ";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
                    </a>
                </span>
            </div>
            <!--/ lead detail collapseable toggler -->

            ";
        // line 237
        if ( !(isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 237, $this->source); })())) {
            // line 238
            yield "                <div class=\"pa-md\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"panel\">
                                <div class=\"panel-body box-layout\">
                                    <div class=\"col-xs-8 va-m\">
                                        <h5 class=\"text-white dark-md fw-sb mb-xs\">";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.header.engagements"), "html", null, true);
            yield "</h5>
                                    </div>
                                    <div class=\"col-xs-4 va-t text-right\">
                                        <h3 class=\"text-white dark-sm\"><span class=\"ri-eye-line\"></span></h3>
                                    </div>
                                </div>
                                ";
            // line 250
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["engagementData"]) || array_key_exists("engagementData", $context) ? $context["engagementData"] : (function () { throw new RuntimeError('Variable "engagementData" does not exist.', 250, $this->source); })()), "chartType" => "line", "chartHeight" => 250]);
            yield "
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 256
        yield "            <!-- tabs controls -->
            <ul class=\"nav nav-tabs pr-md pl-md mt-10\">
                <li class=\"active\">
                    <a href=\"#timeline-container\" role=\"tab\" data-toggle=\"tab\">
                        <span class=\"label label-primary mr-sm\" id=\"TimelineCount\">
                            ";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 261, $this->source); })()), "total", [], "any", false, false, false, 261), "html", null, true);
        yield "
                        </span>
                        ";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.tab.history"), "html", null, true);
        yield "
                    </a>
                </li>
                <li class=\"\">
                    <a href=\"#notes-container\" role=\"tab\" data-toggle=\"tab\">
                        <span class=\"label label-primary mr-sm\" id=\"NoteCount\">
                            ";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["noteCount"]) || array_key_exists("noteCount", $context) ? $context["noteCount"] : (function () { throw new RuntimeError('Variable "noteCount" does not exist.', 269, $this->source); })()), "html", null, true);
        yield "
                        </span>
                        ";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.tab.notes"), "html", null, true);
        yield "
                    </a>
                </li>
                ";
        // line 274
        if (( !(isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 274, $this->source); })()) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["socialProfiles"]) || array_key_exists("socialProfiles", $context) ? $context["socialProfiles"] : (function () { throw new RuntimeError('Variable "socialProfiles" does not exist.', 274, $this->source); })())))) {
            // line 275
            yield "                    <li class=\"\">
                        <a href=\"#social-container\" role=\"tab\" data-toggle=\"tab\">
                        <span class=\"label label-primary mr-sm\" id=\"SocialCount\">
                            ";
            // line 278
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["socialProfiles"]) || array_key_exists("socialProfiles", $context) ? $context["socialProfiles"] : (function () { throw new RuntimeError('Variable "socialProfiles" does not exist.', 278, $this->source); })())), "html", null, true);
            yield "
                        </span>
                            ";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.tab.social"), "html", null, true);
            yield "
                        </a>
                    </li>
                ";
        }
        // line 284
        yield "                <li class=\"\">
                    <a href=\"#integration-container\" role=\"tab\" data-toggle=\"tab\">
                    <span class=\"label label-primary mr-sm\" id=\"IntegrationCount\">
                        ";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 287, $this->source); })())), "html", null, true);
        yield "
                    </span>
                        ";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.tab.integration"), "html", null, true);
        yield "
                    </a>
                </li>
                <li class=\"\">
                    <a href=\"#auditlog-container\" role=\"tab\" data-toggle=\"tab\">
                    <span class=\"label label-primary mr-sm\" id=\"AuditLogCount\">
                        ";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["auditlog"]) || array_key_exists("auditlog", $context) ? $context["auditlog"] : (function () { throw new RuntimeError('Variable "auditlog" does not exist.', 295, $this->source); })()), "total", [], "any", false, false, false, 295), "html", null, true);
        yield "
                    </span>
                        ";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.tab.auditlog"), "html", null, true);
        yield "
                    </a>
                </li>
                ";
        // line 300
        if ((isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 300, $this->source); })())) {
            // line 301
            yield "                    <li class=\"\">
                        <a href=\"#place-container\" role=\"tab\" data-toggle=\"tab\" id=\"load-lead-map\">
                        <span class=\"label label-primary mr-sm\" id=\"PlaceCount\">
                            ";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 304, $this->source); })())), "html", null, true);
            yield "
                        </span>
                            ";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.tab.places"), "html", null, true);
            yield "
                        </a>
                    </li>
                ";
        }
        // line 310
        yield "                ";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("tabs", $context);
        yield "
            </ul>
            <!--/ tabs controls -->
        </div>

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md\">
            <!-- #history-container -->
            <div class=\"tab-pane fade in active bdr-w-0\" id=\"timeline-container\">
                ";
        // line 319
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Timeline/list.html.twig", ["events" => (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 319, $this->source); })()), "lead" => (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 319, $this->source); })())]);
        yield "
            </div>
            <!--/ #history-container -->

            <!-- #notes-container -->
            <div class=\"tab-pane fade bdr-w-0\" id=\"notes-container\">
                ";
        // line 325
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Mautic\\LeadBundle\\Controller\\NoteController::indexAction", ["leadId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 325, $this->source); })()), "id", [], "any", false, false, false, 325), "ignoreAjax" => 1]));
        yield "
            </div>
            <!--/ #notes-container -->

            <!-- #social-container -->
            ";
        // line 330
        if (( !(isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 330, $this->source); })()) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["socialProfiles"]) || array_key_exists("socialProfiles", $context) ? $context["socialProfiles"] : (function () { throw new RuntimeError('Variable "socialProfiles" does not exist.', 330, $this->source); })())))) {
            // line 331
            yield "                <div class=\"tab-pane fade bdr-w-0\" id=\"social-container\">
                    ";
            // line 332
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Social/index.html.twig", ["lead" =>             // line 333
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 333, $this->source); })()), "socialProfiles" =>             // line 334
(isset($context["socialProfiles"]) || array_key_exists("socialProfiles", $context) ? $context["socialProfiles"] : (function () { throw new RuntimeError('Variable "socialProfiles" does not exist.', 334, $this->source); })()), "socialProfileUrls" =>             // line 335
(isset($context["socialProfileUrls"]) || array_key_exists("socialProfileUrls", $context) ? $context["socialProfileUrls"] : (function () { throw new RuntimeError('Variable "socialProfileUrls" does not exist.', 335, $this->source); })())]);
            // line 336
            yield "
                </div>
            ";
        }
        // line 339
        yield "            <!--/ #social-container -->

            <!-- #integration-container -->
            <div class=\"tab-pane fade bdr-w-0\" id=\"integration-container\">
                ";
        // line 343
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Integration/index.html.twig", ["lead" =>         // line 344
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 344, $this->source); })()), "integrations" =>         // line 345
(isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 345, $this->source); })())]);
        // line 346
        yield "
            </div>
            <!--/ #integration-container -->

            <!-- #auditlog-container -->
            <div class=\"tab-pane fade bdr-w-0\" id=\"auditlog-container\">
                ";
        // line 352
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Auditlog/_list.html.twig", ["lead" =>         // line 353
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 353, $this->source); })()), "events" =>         // line 354
(isset($context["auditlog"]) || array_key_exists("auditlog", $context) ? $context["auditlog"] : (function () { throw new RuntimeError('Variable "auditlog" does not exist.', 354, $this->source); })())]);
        // line 355
        yield "
            </div>
            <!--/ #auditlog-container -->

            <!-- custom content -->
            ";
        // line 360
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("tabs.content", $context);
        yield "
            <!-- end: custom content -->

            <!-- #place-container -->
            ";
        // line 364
        if ((isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 364, $this->source); })())) {
            // line 365
            yield "                <div class=\"tab-pane fade bdr-w-0\" id=\"place-container\">
                    ";
            // line 366
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Lead/_map.html.twig", ["places" => (isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 366, $this->source); })())]);
            yield "
                </div>
            ";
        }
        // line 369
        yield "            <!--/ #place-container -->
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
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 379, $this->source); })()), "isAnonymous", [], "any", false, false, false, 379)) {
            // line 380
            yield "                <div class=\"lead-avatar-panel\">
                    <div class=\"avatar-collapser hr-expand nm\">
                        <a href=\"javascript:void(0)\"
                            class=\"arrow text-muted text-center ";
            // line 383
            if (("expanded" != (isset($context["avatarPanelState"]) || array_key_exists("avatarPanelState", $context) ? $context["avatarPanelState"] : (function () { throw new RuntimeError('Variable "avatarPanelState" does not exist.', 383, $this->source); })()))) {
                yield "collapsed";
            }
            yield "\"
                            data-toggle=\"collapse\"
                            data-target=\"#lead-avatar-block\">
                            <span class=\"caret\"></span>
                        </a>
                    </div>
                    <div class=\"collapse ";
            // line 389
            if (("expanded" == (isset($context["avatarPanelState"]) || array_key_exists("avatarPanelState", $context) ? $context["avatarPanelState"] : (function () { throw new RuntimeError('Variable "avatarPanelState" does not exist.', 389, $this->source); })()))) {
                yield "in";
            }
            yield "\" id=\"lead-avatar-block\">
                        <img class=\"img-responsive\" src=\"";
            // line 390
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\LeadBundle\Twig\Extension\LeadExtension']->getAvatar((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 390, $this->source); })())), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leadName"]) || array_key_exists("leadName", $context) ? $context["leadName"] : (function () { throw new RuntimeError('Variable "leadName" does not exist.', 390, $this->source); })()));
            yield "\"/>
                    </div>
                </div>
            ";
        }
        // line 394
        yield "            <div class=\"mt-sm points-panel text-center\">
                <h1 style=\"";
        // line 395
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 395, $this->source); })()), "color", [], "any", false, false, false, 395))) {
            yield "font-color:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 395, $this->source); })()), "color", [], "any", false, false, false, 395), "html", null, true);
            yield " !important;";
        }
        yield "\">
                    ";
        // line 396
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.points.count", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 396, $this->source); })()), "points", [], "any", false, false, false, 396)]), "html", null, true);
        yield "
                </h1>
                <hr/>
                ";
        // line 399
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 399, $this->source); })()), "stage", [], "any", false, false, false, 399)) {
            // line 400
            yield "                    ";
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 400, $this->source); })()), "stage", [], "any", false, false, false, 400), "name", [], "any", false, false, false, 400));
            yield "<hr>
                ";
        }
        // line 402
        yield "            </div>

            ";
        // line 404
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 404, $this->source); })()), "groupScores", [], "any", false, false, false, 404))) {
            // line 405
            yield "                <div class=\"panel-heading\">
                    <div class=\"panel-title\">
                        ";
            // line 407
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.groups.panel.title"), "html", null, true);
            yield "
                    </div>
                </div>

                <div class=\"panel-body pt-sm group-points-panel\">
                    ";
            // line 412
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 412, $this->source); })()), "groupScores", [], "any", false, false, false, 412));
            foreach ($context['_seq'] as $context["_key"] => $context["groupScore"]) {
                // line 413
                yield "                        <div class=\"row\">
                            <h6 class=\"fw-sb col-md-6\">
                                ";
                // line 415
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupScore"], "group", [], "any", false, false, false, 415), "name", [], "any", false, false, false, 415), "html", null, true);
                yield "
                            </h6>
                            <p class=\"text-muted col-md-6\">
                                ";
                // line 418
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.points.count", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["groupScore"], "score", [], "any", false, false, false, 418)]), "html", null, true);
                yield "
                            </p>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['groupScore'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 422
            yield "                </div>
            ";
        }
        // line 424
        yield "
            ";
        // line 425
        if ((isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 425, $this->source); })())) {
            // line 426
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Lead/_dnc_large.html.twig", ["doNotContact" => (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 426, $this->source); })())]);
            yield "
            ";
        }
        // line 428
        yield "            ";
        if ((isset($context["doNotContactSms"]) || array_key_exists("doNotContactSms", $context) ? $context["doNotContactSms"] : (function () { throw new RuntimeError('Variable "doNotContactSms" does not exist.', 428, $this->source); })())) {
            // line 429
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Lead/_dnc_large.html.twig", ["doNotContact" => (isset($context["doNotContactSms"]) || array_key_exists("doNotContactSms", $context) ? $context["doNotContactSms"] : (function () { throw new RuntimeError('Variable "doNotContactSms" does not exist.', 429, $this->source); })())]);
            yield "
            ";
        }
        // line 431
        yield "            <div class=\"panel-heading\">
                <div class=\"panel-title\">
                    ";
        // line 433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.header.contact"), "html", null, true);
        yield "
                </div>
            </div>
            <div class=\"panel-body pt-sm\">
            ";
        // line 437
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 437, $this->source); })()), "owner", [], "any", false, false, false, 437)) {
            // line 438
            yield "                <h6 class=\"fw-sb\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.field.owner"), "html", null, true);
            yield "</h6>
                <p class=\"text-muted\">";
            // line 439
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 439, $this->source); })()), "owner", [], "any", false, false, false, 439), "name", [], "any", false, false, false, 439));
            yield "</p>
            ";
        }
        // line 441
        yield "
                <h6 class=\"fw-sb\">
                    ";
        // line 443
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.address"), "html", null, true);
        yield "
                </h6>
                <address class=\"text-muted\">
                    ";
        // line 446
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 446), "address1", [], "any", true, true, false, 446)) {
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 446, $this->source); })()), "core", [], "any", false, false, false, 446), "address1", [], "any", false, false, false, 446), "value", [], "any", false, false, false, 446));
            yield "<br>";
        }
        // line 447
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 447), "address2", [], "any", true, true, false, 447)) {
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 447, $this->source); })()), "core", [], "any", false, false, false, 447), "address2", [], "any", false, false, false, 447), "value", [], "any", false, false, false, 447));
            yield "<br>";
        }
        // line 448
        yield "                    ";
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 448, $this->source); })()), "location", [], "any", false, false, false, 448));
        yield "
                    ";
        // line 449
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 449), "zipcode", [], "any", true, true, false, 449)) {
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 449, $this->source); })()), "core", [], "any", false, false, false, 449), "zipcode", [], "any", false, false, false, 449), "value", [], "any", false, false, false, 449));
        }
        // line 450
        yield "                    <br>
                </address>

                <h6 class=\"fw-sb\">";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.type.email"), "html", null, true);
        yield "</h6>
                <p class=\"text-muted\">";
        // line 454
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 454, $this->source); })()), "core", [], "any", false, false, false, 454), "email", [], "any", false, false, false, 454), "value", [], "any", false, false, false, 454));
        yield "</p>

                ";
        // line 456
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 456), "phone", [], "any", true, true, false, 456)) {
            // line 457
            yield "                    <h6 class=\"fw-sb\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.type.tel.home"), "html", null, true);
            yield "</h6>
                    <p class=\"text-muted\">";
            // line 458
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 458, $this->source); })()), "core", [], "any", false, false, false, 458), "phone", [], "any", false, false, false, 458), "value", [], "any", false, false, false, 458));
            yield "</p>
                ";
        }
        // line 460
        yield "
                ";
        // line 461
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 461), "mobile", [], "any", true, true, false, 461)) {
            // line 462
            yield "                    <h6 class=\"fw-sb\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.type.tel.mobile"), "html", null, true);
            yield "</h6>
                    <p class=\"text-muted mb-0\">";
            // line 463
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 463, $this->source); })()), "core", [], "any", false, false, false, 463), "mobile", [], "any", false, false, false, 463), "value", [], "any", false, false, false, 463));
            yield "</p>
                ";
        }
        // line 465
        yield "            </div>
        </div>
        <!--/ form HTML -->

        ";
        // line 469
        if ((isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 469, $this->source); })())) {
            // line 470
            yield "            <hr class=\"hr-w-2\" style=\"width:50%\">

            <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\">";
            // line 474
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.upcoming.events"), "html", null, true);
            yield "</div>
                </div>
                <div class=\"panel-body pt-sm\">
                    <ul class=\"media-list media-list-feed\">
                        ";
            // line 478
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 478, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 479
                yield "                            ";
                $context["metadata"] = Mautic\CoreBundle\Helper\Serializer::decode(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "metadata", [], "any", false, false, false, 479));
                // line 480
                yield "                            ";
                $context["errors"] = false;
                // line 481
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["metadata"] ?? null), "errors", [], "any", true, true, false, 481) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 481, $this->source); })()), "errors", [], "any", false, false, false, 481)))) {
                    // line 482
                    yield "                                ";
                    $context["errors"] = ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 482, $this->source); })()), "errors", [], "any", false, false, false, 482))) ? (Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 482, $this->source); })()), "errors", [], "any", false, false, false, 482), "<br/>")) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 482, $this->source); })()), "errors", [], "any", false, false, false, 482)));
                    // line 483
                    yield "                            ";
                }
                // line 484
                yield "                            <li class=\"media\">
                                <div class=\"media-object pull-left mt-xs\">
                                    <span class=\"figure\"></span>
                                </div>
                                <div class=\"media-body\">
                                    ";
                // line 489
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.upcoming.event.triggered.at", ["%event%" => CoreExtension::getAttribute($this->env, $this->source,                 // line 490
$context["event"], "event_name", [], "any", false, false, false, 490), "%link%" => (((("<a href=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 491
$context["event"], "campaign_id", [], "any", false, false, false, 491)])) . "\" data-toggle=\"ajax\">") . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "campaign_name", [], "any", false, false, false, 491)) . "</a>")]));
                // line 492
                yield "
                                    ";
                // line 493
                if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 493, $this->source); })()))) {
                    // line 494
                    yield "                                      <i class=\"ri-alert-line text-danger\" data-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 494, $this->source); })()));
                    yield "\"></i>
                                    ";
                }
                // line 496
                yield "                                    <p class=\"fs-12 dark-sm timeline-campaign-event-date-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "event_id", [], "any", false, false, false, 496), "html", null, true);
                yield "\">
                                      ";
                // line 497
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "trigger_date", [], "any", false, false, false, 497), "utc");
                yield "
                                    </p>
                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 502
            yield "                    </ul>
                </div>
            </div>
        ";
        }
        // line 506
        yield "        <div class=\"pa-sm\">
            ";
        // line 507
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 507, $this->source); })()), "tags", [], "any", false, false, false, 507));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 508
            yield "                <div id=\"tagLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 508), "html", null, true);
            yield "\">
                    <h5 class=\"pull-left mt-xs mr-xs\">
                        <span class=\"label label-success label-tag\">
                            <a href=\"";
            // line 511
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_tagmanager_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 511)]), "html", null, true);
            yield "\" data-toggle=\"ajax\" style=\"color: white;\">
                                ";
            // line 512
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 512));
            yield "
                            </a>
                            <i class=\"ri-close-line has-click-event\" onclick=\"Mautic.removeTagFromLead(this, ";
            // line 514
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 514, $this->source); })()), "id", [], "any", false, false, false, 514), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 514), "html", null, true);
            yield ");\"></i>
                        </span>
                    </h5>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 519
        yield "            <div class=\"clearfix\"></div>
        </div>
        <div class=\"pa-sm panel-companies\">
            <div class=\"panel-title\">
                ";
        // line 523
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.companies"), "html", null, true);
        yield "
            </div>
            ";
        // line 525
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 525, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["company"]) {
            // line 526
            yield "            <h5 class=\"pull-left mt-xs mr-xs\">
                <span class=\"label label-success\">
                    <i id=\"company-";
            // line 528
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 528), "html", null, true);
            yield "\" class=\"ri-check-line ";
            if ((1 == CoreExtension::getAttribute($this->env, $this->source, $context["company"], "is_primary", [], "any", false, false, false, 528))) {
                yield "primary";
            }
            yield "\" onclick=\"Mautic.setAsPrimaryCompany(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 528), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 528, $this->source); })()), "id", [], "any", false, false, false, 528), "html", null, true);
            yield ");\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.company.set.primary"), "html", null, true);
            yield "\"></i>
                    <a href=\"";
            // line 529
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_company_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 529)]), "html", null, true);
            yield "\" data-toggle=\"ajax\" style=\"color: white;\">
                        ";
            // line 530
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyname", [], "any", false, false, false, 530));
            yield "
                    </a>
                </span>
            </h5>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['company'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 535
        yield "            <div class=\"clearfix\"></div>
        </div>
        ";
        // line 537
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["lists"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 537, $this->source); })()), "id", [], "any", false, false, false, 537), [], "array", true, true, false, 537)) {
            // line 538
            yield "          <div class=\"pa-sm panel-segments\">
            <div class=\"panel-title\">
              ";
            // line 540
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.lists"), "html", null, true);
            yield "
            </div>
            ";
            // line 542
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lists"]) || array_key_exists("lists", $context) ? $context["lists"] : (function () { throw new RuntimeError('Variable "lists" does not exist.', 542, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 542, $this->source); })()), "id", [], "any", false, false, false, 542), [], "array", false, false, false, 542));
            foreach ($context['_seq'] as $context["key"] => $context["list"]) {
                // line 543
                yield "              <h5 class=\"pull-left mt-xs mr-xs\">
                  <span class=\"label label-success\">
                      <a href=\"";
                // line 545
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 545)]), "html", null, true);
                yield "\" data-toggle=\"ajax\" style=\"color: white;\">
                          ";
                // line 546
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["list"], "name", [], "any", false, false, false, 546));
                yield "
                      </a>
                  </span>
              </h5>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['list'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 551
            yield "          ";
        }
        // line 552
        yield "          <div class=\"clearfix\"></div>
        </div>
    </div>
    <!--/ right section -->
</div>
<!--/ end: box layout -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Lead/lead.html.twig";
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
        return array (  1167 => 552,  1164 => 551,  1153 => 546,  1149 => 545,  1145 => 543,  1141 => 542,  1136 => 540,  1132 => 538,  1130 => 537,  1126 => 535,  1115 => 530,  1111 => 529,  1097 => 528,  1093 => 526,  1089 => 525,  1084 => 523,  1078 => 519,  1065 => 514,  1060 => 512,  1056 => 511,  1049 => 508,  1045 => 507,  1042 => 506,  1036 => 502,  1025 => 497,  1020 => 496,  1014 => 494,  1012 => 493,  1009 => 492,  1007 => 491,  1006 => 490,  1005 => 489,  998 => 484,  995 => 483,  992 => 482,  989 => 481,  986 => 480,  983 => 479,  979 => 478,  972 => 474,  966 => 470,  964 => 469,  958 => 465,  953 => 463,  948 => 462,  946 => 461,  943 => 460,  938 => 458,  933 => 457,  931 => 456,  926 => 454,  922 => 453,  917 => 450,  913 => 449,  908 => 448,  902 => 447,  897 => 446,  891 => 443,  887 => 441,  882 => 439,  877 => 438,  875 => 437,  868 => 433,  864 => 431,  858 => 429,  855 => 428,  849 => 426,  847 => 425,  844 => 424,  840 => 422,  830 => 418,  824 => 415,  820 => 413,  816 => 412,  808 => 407,  804 => 405,  802 => 404,  798 => 402,  792 => 400,  790 => 399,  784 => 396,  776 => 395,  773 => 394,  764 => 390,  758 => 389,  747 => 383,  742 => 380,  740 => 379,  728 => 369,  722 => 366,  719 => 365,  717 => 364,  710 => 360,  703 => 355,  701 => 354,  700 => 353,  699 => 352,  691 => 346,  689 => 345,  688 => 344,  687 => 343,  681 => 339,  676 => 336,  674 => 335,  673 => 334,  672 => 333,  671 => 332,  668 => 331,  666 => 330,  658 => 325,  649 => 319,  636 => 310,  629 => 306,  624 => 304,  619 => 301,  617 => 300,  611 => 297,  606 => 295,  597 => 289,  592 => 287,  587 => 284,  580 => 280,  575 => 278,  570 => 275,  568 => 274,  562 => 271,  557 => 269,  548 => 263,  543 => 261,  536 => 256,  527 => 250,  518 => 244,  510 => 238,  508 => 237,  499 => 231,  493 => 228,  478 => 217,  472 => 214,  469 => 213,  466 => 212,  447 => 206,  441 => 205,  436 => 202,  433 => 201,  427 => 199,  421 => 197,  419 => 196,  414 => 195,  412 => 194,  405 => 193,  402 => 192,  396 => 190,  390 => 188,  387 => 187,  384 => 186,  379 => 184,  374 => 183,  372 => 182,  367 => 180,  364 => 179,  361 => 178,  356 => 177,  350 => 175,  348 => 174,  335 => 169,  318 => 168,  309 => 162,  306 => 161,  300 => 158,  297 => 157,  294 => 156,  280 => 155,  273 => 151,  269 => 150,  262 => 149,  259 => 148,  242 => 147,  230 => 137,  223 => 136,  217 => 133,  215 => 130,  214 => 129,  213 => 128,  212 => 125,  211 => 124,  210 => 123,  209 => 121,  208 => 119,  207 => 116,  206 => 115,  203 => 114,  200 => 113,  198 => 108,  196 => 105,  193 => 104,  190 => 102,  187 => 101,  185 => 96,  184 => 95,  182 => 91,  179 => 90,  176 => 88,  173 => 87,  171 => 82,  170 => 80,  168 => 76,  165 => 75,  162 => 73,  158 => 71,  155 => 70,  153 => 65,  151 => 60,  149 => 59,  146 => 58,  144 => 53,  143 => 52,  141 => 48,  138 => 47,  135 => 45,  132 => 44,  130 => 38,  129 => 37,  127 => 32,  124 => 31,  121 => 29,  118 => 28,  115 => 27,  108 => 26,  101 => 23,  94 => 22,  87 => 21,  76 => 8,  71 => 6,  69 => 19,  67 => 18,  59 => 14,  56 => 13,  54 => 12,  52 => 11,  50 => 10,  43 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/lead.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\lead.html.twig");
    }
}
