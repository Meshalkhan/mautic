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

/* @Marketplace/Package/detail.html.twig */
class __TwigTemplate_efe8022bcea739879a2678062ccbca6e extends Template
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
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        $context["buttons"] = [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(Twig\Extension\CoreExtension::constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_LIST"))], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.details.close"), "iconClass" => "ri-arrow-go-back-line", "primary" => true]];
        // line 15
        $context["latestVersion"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 15, $this->source); })()), "versions", [], "any", false, false, false, 15), "findLatestStableVersionPackage", [], "method", false, false, false, 15);
        // line 17
        if ( !(isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 17, $this->source); })())) {
            // line 18
            $context["latestVersion"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 18, $this->source); })()), "versions", [], "any", false, false, false, 18), "findLatestVersionPackage", [], "method", false, false, false, 18);
        }
        // line 21
        if (((isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 21, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 21, $this->source); })()), "issues", [], "any", false, false, false, 21))) {
            // line 22
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 22, $this->source); })()), [["attr" => ["href" => CoreExtension::getAttribute($this->env, $this->source,             // line 24
(isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 24, $this->source); })()), "issues", [], "any", false, false, false, 24), "target" => "_blank", "rel" => "noopener noreferrer", "data-toggle" => ""], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.issue.tracker"), "iconClass" => "fa fa-question", "primary" => false]]);
        }
        // line 35
        if (((isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 35, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 35, $this->source); })()), "wiki", [], "any", false, false, false, 35))) {
            // line 36
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 36, $this->source); })()), [["attr" => ["href" => CoreExtension::getAttribute($this->env, $this->source,             // line 38
(isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 38, $this->source); })()), "wiki", [], "any", false, false, false, 38), "target" => "_blank", "rel" => "noopener noreferrer", "data-toggle" => ""], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.wiki"), "iconClass" => "fa fa-book", "primary" => false]]);
        }
        // line 49
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 49, $this->source); })()), "isGranted", [Twig\Extension\CoreExtension::constant("Mautic\\MarketplaceBundle\\Security\\Permissions\\MarketplacePermissions::CAN_INSTALL_PACKAGES")], "method", false, false, false, 49) &&  !(isset($context["isInstalled"]) || array_key_exists("isInstalled", $context) ? $context["isInstalled"] : (function () { throw new RuntimeError('Variable "isInstalled" does not exist.', 49, $this->source); })())) && (isset($context["isComposerEnabled"]) || array_key_exists("isComposerEnabled", $context) ? $context["isComposerEnabled"] : (function () { throw new RuntimeError('Variable "isComposerEnabled" does not exist.', 49, $this->source); })()))) {
            // line 50
            $context["installRoute"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(Twig\Extension\CoreExtension::constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_INSTALL"), ["vendor" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 52
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 52, $this->source); })()), "packageBase", [], "any", false, false, false, 52), "getVendorName", [], "method", false, false, false, 52), "package" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 53
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 53, $this->source); })()), "packageBase", [], "any", false, false, false, 53), "getPackageName", [], "method", false, false, false, 53)]);
            // line 57
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 57, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#InstallationInProgressModal", "href" =>             // line 61
(isset($context["installRoute"]) || array_key_exists("installRoute", $context) ? $context["installRoute"] : (function () { throw new RuntimeError('Variable "installRoute" does not exist.', 61, $this->source); })())], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.install"), "iconClass" => "ri-download-line", "primary" => true]]);
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 68
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 68, $this->source); })()), "isGranted", [Twig\Extension\CoreExtension::constant("Mautic\\MarketplaceBundle\\Security\\Permissions\\MarketplacePermissions::CAN_INSTALL_PACKAGES")], "method", false, false, false, 68) && (isset($context["isComposerEnabled"]) || array_key_exists("isComposerEnabled", $context) ? $context["isComposerEnabled"] : (function () { throw new RuntimeError('Variable "isComposerEnabled" does not exist.', 68, $this->source); })()))) {
            // line 69
            $context["removeRoute"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(Twig\Extension\CoreExtension::constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_REMOVE"), ["vendor" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 70
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 70, $this->source); })()), "packageBase", [], "any", false, false, false, 70), "getVendorName", [], "method", false, false, false, 70), "package" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 71
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 71, $this->source); })()), "packageBase", [], "any", false, false, false, 71), "getPackageName", [], "method", false, false, false, 71)]);
            // line 74
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 74, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#RemovalInProgressModal", "href" =>             // line 78
(isset($context["removeRoute"]) || array_key_exists("removeRoute", $context) ? $context["removeRoute"] : (function () { throw new RuntimeError('Variable "removeRoute" does not exist.', 78, $this->source); })())], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.remove"), "iconClass" => "ri-delete-bin-line", "primary" => true]]);
        }
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@Marketplace/Package/detail.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 2, $this->source); })()), "packageBase", [], "any", false, false, false, 2), "getHumanPackageName", [], "method", false, false, false, 2));
        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 87
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["customButtons" =>         // line 88
(isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 88, $this->source); })())]);
        yield from [];
    }

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 93
        yield "<div class=\"col-md-9\">
    ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 94, $this->source); })()), "packageBase", [], "any", false, false, false, 94), "description", [], "any", false, false, false, 94)) {
            // line 95
            yield "    <div>
        <div class=\"pr-md pl-md pt-lg pb-lg\">
            <div class=\"box-layout\">
                <div class=\"col-xs-10\">
                    <div class=\"text-muted\">";
            // line 99
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 99, $this->source); })()), "packageBase", [], "any", false, false, false, 99), "description", [], "any", false, false, false, 99));
            yield "</div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 105
        yield "
    <div class=\"panel\">
        <div class=\"panel-heading\">
            <div class=\"panel-title\">";
        // line 108
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.cli.install", [], "messages");
        yield "</div>
        </div>
        <div class=\"panel-body\">";
        // line 110
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.cli.install.descr", ["%vendor%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 111
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 111, $this->source); })()), "packageBase", [], "any", false, false, false, 111), "getVendorName", [], "method", false, false, false, 111), "%package%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 112
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 112, $this->source); })()), "packageBase", [], "any", false, false, false, 112), "getPackageName", [], "method", false, false, false, 112)]));
        // line 113
        yield "</div>
    </div>

    <div class=\"panel\">
    <div class=\"panel-heading\">
        <div class=\"panel-title\">";
        // line 118
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.latest.stable.version", [], "messages");
        yield "</div>
    </div>
    <table class=\"table table-hover mb-0\">
        <tr>
            <th>";
        // line 122
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.version", [], "messages");
        yield "</th>
            <td>
                ";
        // line 124
        if ( !(isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 124, $this->source); })())) {
            // line 125
            yield "                    <div class=\"text-danger\">
                        ";
            // line 126
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.latest.version.missing", [], "messages");
            // line 127
            yield "                    </div>
                ";
        } else {
            // line 129
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 129, $this->source); })()), "packageBase", [], "any", false, false, false, 129), "repository", [], "any", false, false, false, 129));
            yield "/releases/tag/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 129, $this->source); })()), "version", [], "any", false, false, false, 129));
            yield "\" id=\"latest-version\" target=\"_blank\" rel=\"noopener noreferrer\">
                        <strong>";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 130, $this->source); })()), "version", [], "any", false, false, false, 130), "html", null, true);
            yield "</strong>
                    </a>
                ";
        }
        // line 133
        yield "            </td>
        </tr>
        ";
        // line 135
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 135, $this->source); })()))) {
            // line 136
            yield "            <tr>
                <th>";
            // line 137
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.version.release.date", [], "messages");
            yield "</th>
                <td title=\"";
            // line 138
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 138, $this->source); })()), "time", [], "any", false, false, false, 138));
            yield "\">
                    ";
            // line 139
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 139, $this->source); })()), "time", [], "any", false, false, false, 139));
            yield "
                </td>
            </tr>
            <tr>
                <th>";
            // line 143
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.license", [], "messages");
            yield "</th>
                <td>";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 144, $this->source); })()), "license", [], "any", false, false, false, 144), ", "));
            yield "</td>
            </tr>
            ";
            // line 146
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 146, $this->source); })()), "homepage", [], "any", false, false, false, 146)) {
                // line 147
                yield "                <tr>
                    <th>";
                // line 148
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.homepage", [], "messages");
                yield "</th>
                    <td>";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 149, $this->source); })()), "homepage", [], "any", false, false, false, 149));
                yield "</td>
                </tr>
            ";
            }
            // line 152
            yield "            <tr>
                <th>
                    ";
            // line 154
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.required.packages", [], "messages");
            // line 155
            yield "                    (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 155, $this->source); })()), "require", [], "any", false, false, false, 155)), "html", null, true);
            yield ")
                </th>
                <td>";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 157, $this->source); })()), "require", [], "any", false, false, false, 157)), ", "));
            yield "</td>
            </tr>
        ";
        }
        // line 160
        yield "    </table>
    </div>

    <div class=\"panel\">
    <div class=\"panel-heading\">
        <div class=\"panel-title\">";
        // line 165
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.all.versions", [], "messages");
        yield "</div>
    </div>
    <table class=\"table table-hover mb-0\">
        <tr>
            <th>";
        // line 169
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.version", [], "messages");
        yield "</th>
            <th>";
        // line 170
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.version.release.date", [], "messages");
        yield "</th>
        </tr>
        ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 172, $this->source); })()), "versions", [], "any", false, false, false, 172), "sortByLatest", [], "method", false, false, false, 172));
        foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
            // line 173
            yield "        <tr>
            <td>
                ";
            // line 175
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["version"], "isStable", [], "method", false, false, false, 175) || CoreExtension::getAttribute($this->env, $this->source, $context["version"], "isPreRelease", [], "method", false, false, false, 175))) {
                // line 176
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 176, $this->source); })()), "packageBase", [], "any", false, false, false, 176), "repository", [], "any", false, false, false, 176));
                yield "/releases/tag/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "version", [], "any", false, false, false, 176));
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\" >
                    ";
                // line 177
                if (CoreExtension::getAttribute($this->env, $this->source, $context["version"], "isStable", [], "method", false, false, false, 177)) {
                    // line 178
                    yield "                        <b>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "version", [], "any", false, false, false, 178));
                    yield "</b>
                    ";
                } else {
                    // line 180
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "version", [], "any", false, false, false, 180));
                    yield "
                    ";
                }
                // line 182
                yield "                    </a>
                ";
            } else {
                // line 184
                yield "                    <i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "version", [], "any", false, false, false, 184));
                yield "</i>
                ";
            }
            // line 186
            yield "            </td>
            <td title=\"";
            // line 187
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "time", [], "any", false, false, false, 187));
            yield "\">
                ";
            // line 188
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["version"], "time", [], "any", false, false, false, 188));
            yield "
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['version'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        yield "    </table>
    </div>
</div>

<div class=\"col-md-3 panel pb-lg\">
    <h3 class=\"pt-lg pb-lg pl-sm\">";
        // line 197
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.maintainers", [], "messages");
        yield "</h3>
    ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 198, $this->source); })()), "maintainers", [], "any", false, false, false, 198));
        foreach ($context['_seq'] as $context["_key"] => $context["maintainer"]) {
            // line 199
            yield "        <div class=\"box-layout\">
            <div class=\"col-xs-3 va-m\">
                <div class=\"panel-body\">
                    <span class=\"img-wrapper img-rounded\">
                        <img class=\"img\" src=\"";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintainer"], "avatar", [], "any", false, false, false, 203));
            yield "\">
                    </span>
                </div>
            </div>
            <div class=\"col-xs-9 va-t\">
                <div class=\"panel-body\">
                    <h4 class=\"fw-sb mb-xs ellipsis\">
                        ";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["maintainer"], "name", [], "any", false, false, false, 210)));
            yield "
                    </h4>
                    <a href=\"https://packagist.org/packages/";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintainer"], "name", [], "any", false, false, false, 212));
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                        ";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.other.packages", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, $context["maintainer"], "name", [], "any", false, false, false, 213)]), "html", null, true);
            yield "
                    </a>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['maintainer'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        yield "
    <h3 class=\"pt-lg pb-lg pl-sm\">";
        // line 220
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.github.info", [], "messages");
        yield "</h3>
    <table class=\"table table-hover mb-0\">
        <tr>
            <th>";
        // line 223
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.repository", [], "messages");
        yield "</th>
            <td>
                <a href=\"";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 225, $this->source); })()), "packageBase", [], "any", false, false, false, 225), "repository", [], "any", false, false, false, 225));
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\" >
                    ";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 226, $this->source); })()), "packageBase", [], "any", false, false, false, 226), "name", [], "any", false, false, false, 226));
        yield "
                </a>
            </td>
        </tr>
        <tr>
            <th>";
        // line 231
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.github.stars", [], "messages");
        yield "</th>
            <td>";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 232, $this->source); })()), "githubInfo", [], "any", false, false, false, 232), "stars", [], "any", false, false, false, 232));
        yield "</td>
        </tr>
        <tr>
            <th>";
        // line 235
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.github.watchers", [], "messages");
        yield "</th>
            <td>";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 236, $this->source); })()), "githubInfo", [], "any", false, false, false, 236), "watchers", [], "any", false, false, false, 236));
        yield "</td>
        </tr>
        <tr>
            <th>";
        // line 239
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.github.forks", [], "messages");
        yield "</th>
            <td>";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 240, $this->source); })()), "githubInfo", [], "any", false, false, false, 240), "forks", [], "any", false, false, false, 240));
        yield "</td>
        </tr>
        <tr>
            <th>";
        // line 243
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.github.open.issues", [], "messages");
        yield "</th>
            <td>";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 244, $this->source); })()), "githubInfo", [], "any", false, false, false, 244), "openIssues", [], "any", false, false, false, 244));
        yield "</td>
        </tr>
    </table>

    <h3 class=\"pt-lg pb-lg pl-sm\">";
        // line 248
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.packagist.info", [], "messages");
        yield "</h3>
    <table class=\"table table-hover mb-0\">
        <tr>
            <th>";
        // line 251
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.repository", [], "messages");
        yield "</th>
            <td>
                <a href=\"";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 253, $this->source); })()), "packageBase", [], "any", false, false, false, 253), "url", [], "any", false, false, false, 253));
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\" >
                    ";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 254, $this->source); })()), "packageBase", [], "any", false, false, false, 254), "name", [], "any", false, false, false, 254));
        yield "
                </a>
            </td>
        </tr>
        <tr>
            <th>";
        // line 259
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.total.downloads", [], "messages");
        yield "</th>
            <td>";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 260, $this->source); })()), "packageBase", [], "any", false, false, false, 260), "downloads", [], "any", false, false, false, 260));
        yield "</td>
        </tr>
        <tr>
            <th>";
        // line 263
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.monthly.downloads", [], "messages");
        yield "</th>
            <td>";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 264, $this->source); })()), "monthlyDownloads", [], "any", false, false, false, 264));
        yield "</td>
        </tr>
        <tr>
            <th>";
        // line 267
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.daily.downloads", [], "messages");
        yield "</th>
            <td>";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 268, $this->source); })()), "dailyDownloads", [], "any", false, false, false, 268));
        yield "</td>
        </tr>
        <tr>
            <th>";
        // line 271
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.create.date", [], "messages");
        yield "</th>
            <td title=\"";
        // line 272
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 272, $this->source); })()), "time", [], "any", false, false, false, 272));
        yield "\">
                ";
        // line 273
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 273, $this->source); })()), "time", [], "any", false, false, false, 273));
        yield "
            </td>
        </tr>
    </table>
</div>";
        // line 279
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "InstallationInProgressModal", "header" => ("Installing " . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 281
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 281, $this->source); })()), "packageBase", [], "any", false, false, false, 281), "getHumanPackageName", [], "method", false, false, false, 281))), "size" => "md", "footerButtons" => false]);
        // line 286
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "RemovalInProgressModal", "header" => ("Removing " . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 288
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 288, $this->source); })()), "packageBase", [], "any", false, false, false, 288), "getHumanPackageName", [], "method", false, false, false, 288))), "size" => "md", "footerButtons" => false]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Marketplace/Package/detail.html.twig";
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
        return array (  540 => 288,  539 => 286,  537 => 281,  536 => 279,  529 => 273,  525 => 272,  521 => 271,  515 => 268,  511 => 267,  505 => 264,  501 => 263,  495 => 260,  491 => 259,  483 => 254,  479 => 253,  474 => 251,  468 => 248,  461 => 244,  457 => 243,  451 => 240,  447 => 239,  441 => 236,  437 => 235,  431 => 232,  427 => 231,  419 => 226,  415 => 225,  410 => 223,  404 => 220,  401 => 219,  389 => 213,  385 => 212,  380 => 210,  370 => 203,  364 => 199,  360 => 198,  356 => 197,  349 => 192,  339 => 188,  335 => 187,  332 => 186,  326 => 184,  322 => 182,  316 => 180,  310 => 178,  308 => 177,  301 => 176,  299 => 175,  295 => 173,  291 => 172,  286 => 170,  282 => 169,  275 => 165,  268 => 160,  262 => 157,  256 => 155,  254 => 154,  250 => 152,  244 => 149,  240 => 148,  237 => 147,  235 => 146,  230 => 144,  226 => 143,  219 => 139,  215 => 138,  211 => 137,  208 => 136,  206 => 135,  202 => 133,  196 => 130,  189 => 129,  185 => 127,  183 => 126,  180 => 125,  178 => 124,  173 => 122,  166 => 118,  159 => 113,  157 => 112,  156 => 111,  155 => 110,  150 => 108,  145 => 105,  136 => 99,  130 => 95,  128 => 94,  125 => 93,  118 => 92,  113 => 88,  112 => 87,  105 => 86,  94 => 2,  89 => 1,  86 => 78,  85 => 74,  83 => 71,  82 => 70,  81 => 69,  79 => 68,  77 => 61,  76 => 57,  74 => 53,  73 => 52,  72 => 50,  70 => 49,  67 => 38,  66 => 36,  64 => 35,  61 => 24,  60 => 22,  58 => 21,  55 => 18,  53 => 17,  51 => 15,  49 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Marketplace/Package/detail.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MarketplaceBundle\\Resources\\views\\Package\\detail.html.twig");
    }
}
