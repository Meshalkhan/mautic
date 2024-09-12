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

/* @Marketplace/Package/detail.html.twig */
class __TwigTemplate_eab52a4928f63460f01a28f026cd8696 extends Template
{
    private $source;
    private $macros = [];

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

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["buttons"] = [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_LIST"))], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.details.close"), "iconClass" => "ri-arrow-go-back-line", "primary" => true]];
        // line 15
        $context["latestVersion"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 15, $this->source); })()), "versions", [], "any", false, false, false, 15), "findLatestStableVersionPackage", [], "method", false, false, false, 15);
        // line 17
        if ( !(isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 17, $this->source); })())) {
            // line 18
            $context["latestVersion"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 18, $this->source); })()), "versions", [], "any", false, false, false, 18), "findLatestVersionPackage", [], "method", false, false, false, 18);
        }
        // line 21
        if (((isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 21, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 21, $this->source); })()), "issues", [], "any", false, false, false, 21))) {
            // line 22
            $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 22, $this->source); })()), [["attr" => ["href" => twig_get_attribute($this->env, $this->source,             // line 24
(isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 24, $this->source); })()), "issues", [], "any", false, false, false, 24), "target" => "_blank", "rel" => "noopener noreferrer", "data-toggle" => ""], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.issue.tracker"), "iconClass" => "fa fa-question", "primary" => false]]);
        }
        // line 35
        if (((isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 35, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 35, $this->source); })()), "wiki", [], "any", false, false, false, 35))) {
            // line 36
            $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 36, $this->source); })()), [["attr" => ["href" => twig_get_attribute($this->env, $this->source,             // line 38
(isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 38, $this->source); })()), "wiki", [], "any", false, false, false, 38), "target" => "_blank", "rel" => "noopener noreferrer", "data-toggle" => ""], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.wiki"), "iconClass" => "fa fa-book", "primary" => false]]);
        }
        // line 49
        if (((twig_get_attribute($this->env, $this->source, (isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 49, $this->source); })()), "isGranted", [twig_constant("Mautic\\MarketplaceBundle\\Security\\Permissions\\MarketplacePermissions::CAN_INSTALL_PACKAGES")], "method", false, false, false, 49) &&  !(isset($context["isInstalled"]) || array_key_exists("isInstalled", $context) ? $context["isInstalled"] : (function () { throw new RuntimeError('Variable "isInstalled" does not exist.', 49, $this->source); })())) && (isset($context["isComposerEnabled"]) || array_key_exists("isComposerEnabled", $context) ? $context["isComposerEnabled"] : (function () { throw new RuntimeError('Variable "isComposerEnabled" does not exist.', 49, $this->source); })()))) {
            // line 50
            $context["installRoute"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_INSTALL"), ["vendor" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 52
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 52, $this->source); })()), "packageBase", [], "any", false, false, false, 52), "getVendorName", [], "method", false, false, false, 52), "package" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 53
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 53, $this->source); })()), "packageBase", [], "any", false, false, false, 53), "getPackageName", [], "method", false, false, false, 53)]);
            // line 57
            $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 57, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#InstallationInProgressModal", "href" =>             // line 61
(isset($context["installRoute"]) || array_key_exists("installRoute", $context) ? $context["installRoute"] : (function () { throw new RuntimeError('Variable "installRoute" does not exist.', 61, $this->source); })())], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.install"), "iconClass" => "ri-download-line", "primary" => true]]);
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 68
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 68, $this->source); })()), "isGranted", [twig_constant("Mautic\\MarketplaceBundle\\Security\\Permissions\\MarketplacePermissions::CAN_INSTALL_PACKAGES")], "method", false, false, false, 68) && (isset($context["isComposerEnabled"]) || array_key_exists("isComposerEnabled", $context) ? $context["isComposerEnabled"] : (function () { throw new RuntimeError('Variable "isComposerEnabled" does not exist.', 68, $this->source); })()))) {
            // line 69
            $context["removeRoute"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_REMOVE"), ["vendor" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 70
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 70, $this->source); })()), "packageBase", [], "any", false, false, false, 70), "getVendorName", [], "method", false, false, false, 70), "package" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 71
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 71, $this->source); })()), "packageBase", [], "any", false, false, false, 71), "getPackageName", [], "method", false, false, false, 71)]);
            // line 74
            $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 74, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#RemovalInProgressModal", "href" =>             // line 78
(isset($context["removeRoute"]) || array_key_exists("removeRoute", $context) ? $context["removeRoute"] : (function () { throw new RuntimeError('Variable "removeRoute" does not exist.', 78, $this->source); })())], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.remove"), "iconClass" => "ri-delete-bin-line", "primary" => true]]);
        }
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@Marketplace/Package/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 2, $this->source); })()), "packageBase", [], "any", false, false, false, 2), "getHumanPackageName", [], "method", false, false, false, 2));
    }

    // line 86
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["customButtons" =>         // line 88
(isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 88, $this->source); })())]);
    }

    // line 92
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "<div class=\"col-md-9\">
    ";
        // line 94
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 94, $this->source); })()), "packageBase", [], "any", false, false, false, 94), "description", [], "any", false, false, false, 94)) {
            // line 95
            echo "    <div>
        <div class=\"pr-md pl-md pt-lg pb-lg\">
            <div class=\"box-layout\">
                <div class=\"col-xs-10\">
                    <div class=\"text-muted\">";
            // line 99
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 99, $this->source); })()), "packageBase", [], "any", false, false, false, 99), "description", [], "any", false, false, false, 99));
            echo "</div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 105
        echo "
    <div class=\"panel\">
        <div class=\"panel-heading\">
            <div class=\"panel-title\">";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.cli.install", [], "messages");
        echo "</div>
        </div>
        <div class=\"panel-body\">";
        // line 110
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.cli.install.descr", ["%vendor%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 111
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 111, $this->source); })()), "packageBase", [], "any", false, false, false, 111), "getVendorName", [], "method", false, false, false, 111), "%package%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 112
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 112, $this->source); })()), "packageBase", [], "any", false, false, false, 112), "getPackageName", [], "method", false, false, false, 112)]));
        // line 113
        echo "</div>
    </div>

    <div class=\"panel\">
    <div class=\"panel-heading\">
        <div class=\"panel-title\">";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.latest.stable.version", [], "messages");
        echo "</div>
    </div>
    <table class=\"table table-hover mb-0\">
        <tr>
            <th>";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.version", [], "messages");
        echo "</th>
            <td>
                ";
        // line 124
        if ( !(isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 124, $this->source); })())) {
            // line 125
            echo "                    <div class=\"text-danger\">
                        ";
            // line 126
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.latest.version.missing", [], "messages");
            // line 127
            echo "                    </div>
                ";
        } else {
            // line 129
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 129, $this->source); })()), "packageBase", [], "any", false, false, false, 129), "repository", [], "any", false, false, false, 129));
            echo "/releases/tag/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 129, $this->source); })()), "version", [], "any", false, false, false, 129));
            echo "\" id=\"latest-version\" target=\"_blank\" rel=\"noopener noreferrer\">
                        <strong>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 130, $this->source); })()), "version", [], "any", false, false, false, 130), "html", null, true);
            echo "</strong>
                    </a>
                ";
        }
        // line 133
        echo "            </td>
        </tr>
        ";
        // line 135
        if ( !twig_test_empty((isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 135, $this->source); })()))) {
            // line 136
            echo "            <tr>
                <th>";
            // line 137
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.version.release.date", [], "messages");
            echo "</th>
                <td title=\"";
            // line 138
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 138, $this->source); })()), "time", [], "any", false, false, false, 138));
            echo "\">
                    ";
            // line 139
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 139, $this->source); })()), "time", [], "any", false, false, false, 139));
            echo "
                </td>
            </tr>
            <tr>
                <th>";
            // line 143
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.license", [], "messages");
            echo "</th>
                <td>";
            // line 144
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 144, $this->source); })()), "license", [], "any", false, false, false, 144), ", "));
            echo "</td>
            </tr>
            ";
            // line 146
            if (twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 146, $this->source); })()), "homepage", [], "any", false, false, false, 146)) {
                // line 147
                echo "                <tr>
                    <th>";
                // line 148
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.homepage", [], "messages");
                echo "</th>
                    <td>";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 149, $this->source); })()), "homepage", [], "any", false, false, false, 149));
                echo "</td>
                </tr>
            ";
            }
            // line 152
            echo "            <tr>
                <th>
                    ";
            // line 154
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.required.packages", [], "messages");
            // line 155
            echo "                    (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 155, $this->source); })()), "require", [], "any", false, false, false, 155)), "html", null, true);
            echo ")
                </th>
                <td>";
            // line 157
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 157, $this->source); })()), "require", [], "any", false, false, false, 157)), ", "));
            echo "</td>
            </tr>
        ";
        }
        // line 160
        echo "    </table>
    </div>

    <div class=\"panel\">
    <div class=\"panel-heading\">
        <div class=\"panel-title\">";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.all.versions", [], "messages");
        echo "</div>
    </div>
    <table class=\"table table-hover mb-0\">
        <tr>
            <th>";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.version", [], "messages");
        echo "</th>
            <th>";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.version.release.date", [], "messages");
        echo "</th>
        </tr>
        ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 172, $this->source); })()), "versions", [], "any", false, false, false, 172), "sortByLatest", [], "method", false, false, false, 172));
        foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
            // line 173
            echo "        <tr>
            <td>
                ";
            // line 175
            if ((twig_get_attribute($this->env, $this->source, $context["version"], "isStable", [], "method", false, false, false, 175) || twig_get_attribute($this->env, $this->source, $context["version"], "isPreRelease", [], "method", false, false, false, 175))) {
                // line 176
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 176, $this->source); })()), "packageBase", [], "any", false, false, false, 176), "repository", [], "any", false, false, false, 176));
                echo "/releases/tag/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "version", [], "any", false, false, false, 176));
                echo "\" target=\"_blank\" rel=\"noopener noreferrer\" >
                    ";
                // line 177
                if (twig_get_attribute($this->env, $this->source, $context["version"], "isStable", [], "method", false, false, false, 177)) {
                    // line 178
                    echo "                        <b>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "version", [], "any", false, false, false, 178));
                    echo "</b>
                    ";
                } else {
                    // line 180
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "version", [], "any", false, false, false, 180));
                    echo "
                    ";
                }
                // line 182
                echo "                    </a>
                ";
            } else {
                // line 184
                echo "                    <i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "version", [], "any", false, false, false, 184));
                echo "</i>
                ";
            }
            // line 186
            echo "            </td>
            <td title=\"";
            // line 187
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(twig_get_attribute($this->env, $this->source, $context["version"], "time", [], "any", false, false, false, 187));
            echo "\">
                ";
            // line 188
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, $context["version"], "time", [], "any", false, false, false, 188));
            echo "
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "    </table>
    </div>
</div>

<div class=\"col-md-3 panel pb-lg\">
    <h3 class=\"pt-lg pb-lg pl-sm\">";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.maintainers", [], "messages");
        echo "</h3>
    ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 198, $this->source); })()), "maintainers", [], "any", false, false, false, 198));
        foreach ($context['_seq'] as $context["_key"] => $context["maintainer"]) {
            // line 199
            echo "        <div class=\"box-layout\">
            <div class=\"col-xs-3 va-m\">
                <div class=\"panel-body\">
                    <span class=\"img-wrapper img-rounded\">
                        <img class=\"img\" src=\"";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maintainer"], "avatar", [], "any", false, false, false, 203));
            echo "\">
                    </span>
                </div>
            </div>
            <div class=\"col-xs-9 va-t\">
                <div class=\"panel-body\">
                    <h4 class=\"fw-sb mb-xs ellipsis\">
                        ";
            // line 210
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maintainer"], "name", [], "any", false, false, false, 210)));
            echo "
                    </h4>
                    <a href=\"https://packagist.org/packages/";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maintainer"], "name", [], "any", false, false, false, 212));
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">
                        ";
            // line 213
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.other.packages", ["%name%" => twig_get_attribute($this->env, $this->source, $context["maintainer"], "name", [], "any", false, false, false, 213)]), "html", null, true);
            echo "
                    </a>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maintainer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "
    <h3 class=\"pt-lg pb-lg pl-sm\">";
        // line 220
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.github.info", [], "messages");
        echo "</h3>
    <table class=\"table table-hover mb-0\">
        <tr>
            <th>";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.repository", [], "messages");
        echo "</th>
            <td>
                <a href=\"";
        // line 225
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 225, $this->source); })()), "packageBase", [], "any", false, false, false, 225), "repository", [], "any", false, false, false, 225));
        echo "\" target=\"_blank\" rel=\"noopener noreferrer\" >
                    ";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 226, $this->source); })()), "packageBase", [], "any", false, false, false, 226), "name", [], "any", false, false, false, 226));
        echo "
                </a>
            </td>
        </tr>
        <tr>
            <th>";
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.github.stars", [], "messages");
        echo "</th>
            <td>";
        // line 232
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 232, $this->source); })()), "githubInfo", [], "any", false, false, false, 232), "stars", [], "any", false, false, false, 232));
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 235
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.github.watchers", [], "messages");
        echo "</th>
            <td>";
        // line 236
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 236, $this->source); })()), "githubInfo", [], "any", false, false, false, 236), "watchers", [], "any", false, false, false, 236));
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 239
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.github.forks", [], "messages");
        echo "</th>
            <td>";
        // line 240
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 240, $this->source); })()), "githubInfo", [], "any", false, false, false, 240), "forks", [], "any", false, false, false, 240));
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 243
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.github.open.issues", [], "messages");
        echo "</th>
            <td>";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 244, $this->source); })()), "githubInfo", [], "any", false, false, false, 244), "openIssues", [], "any", false, false, false, 244));
        echo "</td>
        </tr>
    </table>

    <h3 class=\"pt-lg pb-lg pl-sm\">";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.packagist.info", [], "messages");
        echo "</h3>
    <table class=\"table table-hover mb-0\">
        <tr>
            <th>";
        // line 251
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.repository", [], "messages");
        echo "</th>
            <td>
                <a href=\"";
        // line 253
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 253, $this->source); })()), "packageBase", [], "any", false, false, false, 253), "url", [], "any", false, false, false, 253));
        echo "\" target=\"_blank\" rel=\"noopener noreferrer\" >
                    ";
        // line 254
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 254, $this->source); })()), "packageBase", [], "any", false, false, false, 254), "name", [], "any", false, false, false, 254));
        echo "
                </a>
            </td>
        </tr>
        <tr>
            <th>";
        // line 259
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.total.downloads", [], "messages");
        echo "</th>
            <td>";
        // line 260
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 260, $this->source); })()), "packageBase", [], "any", false, false, false, 260), "downloads", [], "any", false, false, false, 260));
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 263
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.monthly.downloads", [], "messages");
        echo "</th>
            <td>";
        // line 264
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 264, $this->source); })()), "monthlyDownloads", [], "any", false, false, false, 264));
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 267
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.daily.downloads", [], "messages");
        echo "</th>
            <td>";
        // line 268
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 268, $this->source); })()), "dailyDownloads", [], "any", false, false, false, 268));
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 271
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.create.date", [], "messages");
        echo "</th>
            <td title=\"";
        // line 272
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 272, $this->source); })()), "time", [], "any", false, false, false, 272));
        echo "\">
                ";
        // line 273
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 273, $this->source); })()), "time", [], "any", false, false, false, 273));
        echo "
            </td>
        </tr>
    </table>
</div>";
        // line 279
        echo twig_include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "InstallationInProgressModal", "header" => ("Installing " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 281
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 281, $this->source); })()), "packageBase", [], "any", false, false, false, 281), "getHumanPackageName", [], "method", false, false, false, 281))), "size" => "md", "footerButtons" => false]);
        // line 286
        echo twig_include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "RemovalInProgressModal", "header" => ("Removing " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 288
(isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 288, $this->source); })()), "packageBase", [], "any", false, false, false, 288), "getHumanPackageName", [], "method", false, false, false, 288))), "size" => "md", "footerButtons" => false]);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Marketplace/Package/detail.html.twig";
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
        return array (  524 => 288,  523 => 286,  521 => 281,  520 => 279,  513 => 273,  509 => 272,  505 => 271,  499 => 268,  495 => 267,  489 => 264,  485 => 263,  479 => 260,  475 => 259,  467 => 254,  463 => 253,  458 => 251,  452 => 248,  445 => 244,  441 => 243,  435 => 240,  431 => 239,  425 => 236,  421 => 235,  415 => 232,  411 => 231,  403 => 226,  399 => 225,  394 => 223,  388 => 220,  385 => 219,  373 => 213,  369 => 212,  364 => 210,  354 => 203,  348 => 199,  344 => 198,  340 => 197,  333 => 192,  323 => 188,  319 => 187,  316 => 186,  310 => 184,  306 => 182,  300 => 180,  294 => 178,  292 => 177,  285 => 176,  283 => 175,  279 => 173,  275 => 172,  270 => 170,  266 => 169,  259 => 165,  252 => 160,  246 => 157,  240 => 155,  238 => 154,  234 => 152,  228 => 149,  224 => 148,  221 => 147,  219 => 146,  214 => 144,  210 => 143,  203 => 139,  199 => 138,  195 => 137,  192 => 136,  190 => 135,  186 => 133,  180 => 130,  173 => 129,  169 => 127,  167 => 126,  164 => 125,  162 => 124,  157 => 122,  150 => 118,  143 => 113,  141 => 112,  140 => 111,  139 => 110,  134 => 108,  129 => 105,  120 => 99,  114 => 95,  112 => 94,  109 => 93,  105 => 92,  101 => 88,  100 => 87,  96 => 86,  89 => 2,  84 => 1,  81 => 78,  80 => 74,  78 => 71,  77 => 70,  76 => 69,  74 => 68,  72 => 61,  71 => 57,  69 => 53,  68 => 52,  67 => 50,  65 => 49,  62 => 38,  61 => 36,  59 => 35,  56 => 24,  55 => 22,  53 => 21,  50 => 18,  48 => 17,  46 => 15,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Marketplace/Package/detail.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MarketplaceBundle\\Resources\\views\\Package\\detail.html.twig");
    }
}
