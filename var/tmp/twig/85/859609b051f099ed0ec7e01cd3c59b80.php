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

/* @MauticAsset/Asset/details.html.twig */
class __TwigTemplate_bc67b1a8435acb749d01d0db9fb99f72 extends Template
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
            'publishStatus' => [$this, 'block_publishStatus'],
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
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticAsset/Asset/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "asset";
    }

    // line 3
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 3, $this->source); })()), "getTitle", [], "method", false, false, false, 3), "html", null, true);
    }

    // line 4
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 7
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 7, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 10, $this->source); })()), "asset:assets:editown", [], "array", false, false, false, 10), twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 11, $this->source); })()), "asset:assets:editother", [], "array", false, false, false, 11), twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 12, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 12)), "clone" => twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 14, $this->source); })()), "asset:assets:create", [], "array", false, false, false, 14), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 16, $this->source); })()), "asset:assets:deleteown", [], "array", false, false, false, 16), twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 17, $this->source); })()), "asset:assets:deleteother", [], "array", false, false, false, 17), twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 18, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 18)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 21, $this->source); })()), "asset:assets:viewown", [], "array", false, false, false, 21), twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "asset:assets:viewother", [], "array", false, false, false, 22), twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 23, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 23))], "routeBase" => "asset", "langVar" => "asset.asset", "nameGetter" => "getTitle"]);
    }

    // line 32
    public function block_publishStatus($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 33, $this->source); })())]);
    }

    // line 35
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "
<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!-- asset detail header -->
            <div class=\"pr-md pl-md pt-lg pb-lg\">
                <div class=\"box-layout\">
                    <div class=\"col-xs-10 va-m\">
                        <div class=\"text-white dark-sm mb-0\">";
        // line 46
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 46, $this->source); })()), "getDescription", [], "method", false, false, false, 46));
        echo "</div>
                    </div>
                </div>
            </div>
            <!--/ asset detail header -->
            <!-- asset detail collapseable -->
            <div class=\"collapse\" id=\"asset-details\">
                <div class=\"pr-md pl-md pb-md\">
                    <div class=\"panel shd-none mb-0\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>";
        // line 57
        echo twig_include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" =>         // line 59
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 59, $this->source); })())]);
        // line 61
        echo "<tr>
                                <td width=\"20%\">
                                <span class=\"fw-b textTitle\">
                                ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.asset.size", [], "messages");
        // line 65
        echo "                                </span>
                                </td>
                                <td>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 67, $this->source); })()), "getSize", [], "method", false, false, false, 67), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td width=\"20%\"><span class=\"fw-b textTitle\">";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.asset.path.relative", [], "messages");
        echo "</span></td>
                                <td>";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["assetDownloadUrl"]) || array_key_exists("assetDownloadUrl", $context) ? $context["assetDownloadUrl"] : (function () { throw new RuntimeError('Variable "assetDownloadUrl" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td width=\"20%\"><span class=\"fw-b textTitle\">";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.filename.original", [], "messages");
        echo "</span></td>
                                <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 75, $this->source); })()), "getOriginalFilename", [], "method", false, false, false, 75), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                ";
        // line 78
        $context["location"] = twig_get_attribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 78, $this->source); })()), "getStorageLocation", [], "method", false, false, false, 78);
        // line 79
        echo "                                <td width=\"20%\"><span class=\"fw-b textTitle\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.asset.filename." . (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 79, $this->source); })()))), "html", null, true);
        echo "</span></td>
                                <td>";
        // line 80
        echo twig_escape_filter($this->env, ((("local" == (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 80, $this->source); })()))) ? (twig_get_attribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 80, $this->source); })()), "getPath", [], "method", false, false, false, 80)) : (twig_get_attribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 80, $this->source); })()), "getRemotePath", [], "method", false, false, false, 80))), "html", null, true);
        echo "</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ asset detail collapseable -->
        </div>

        <div>
            <!-- asset detail collapseable toggler -->
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"Detail\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\"
                       data-target=\"#asset-details\"><span class=\"caret\"></span> ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.details", [], "messages");
        echo "</a>
                </span>
            </div>
            <!--/ asset detail collapseable toggler -->

            <!-- some stats -->
            <div class=\"pa-md\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"panel\">
                            <div class=\"panel-body box-layout\">
                                <div class=\"col-md-2 va-m\">
                                    <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                        <span class=\"ri-download-line\"></span>
                                        ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.graph.line.downloads", [], "messages");
        // line 110
        echo "                                    </h5>
                                </div>
                                <div class=\"col-md-2 va-m text-center\">
                                    <span class=\"text-white dark-md fw-sb mb-xs\">";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.asset.asset.downloads.total", ["count" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 113, $this->source); })()), "downloads", [], "any", false, false, false, 113), "total", [], "any", false, false, false, 113)]), "html", null, true);
        echo "</span>
                                    <span class=\"text-white dark-md fw-sb mb-xs\">|</span>
                                    <span class=\"text-white dark-md fw-sb mb-xs\">";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.asset.asset.downloads.unique", ["count" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 115, $this->source); })()), "downloads", [], "any", false, false, false, 115), "unique", [], "any", false, false, false, 115)]), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-md-8 va-m\">";
        // line 118
        echo twig_include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 118, $this->source); })()), "class" => "pull-right"]);
        // line 119
        echo "</div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">";
        // line 122
        echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 122, $this->source); })()), "downloads", [], "any", false, false, false, 122), "timeStats", [], "any", false, false, false, 122), "chartType" => "line", "chartHeight" => 300]);
        // line 123
        echo "</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ stats -->
        </div>

        ";
        // line 131
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        echo "

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md preview-detail\">";
        // line 135
        echo twig_include($this->env, $context, "@MauticAsset/Asset/preview.html.twig", ["activeAsset" =>         // line 137
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 137, $this->source); })()), "assetDownloadUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_asset_action", ["objectAction" => "preview", "objectId" => twig_get_attribute($this->env, $this->source,         // line 140
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 140, $this->source); })()), "getId", [], "method", false, false, false, 140)])]);
        // line 142
        echo "</div>
        <!--/ end: tab-content -->
    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        <!-- preview URL -->
        <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\">
            <div class=\"panel-heading\">
                <div class=\"panel-title\">";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.asset.url", [], "messages");
        echo "</div>
            </div>
            <div class=\"panel-body pt-xs\">
                <div class=\"input-group\">
                    <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\"
                           readonly value=\"";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["assetDownloadUrl"]) || array_key_exists("assetDownloadUrl", $context) ? $context["assetDownloadUrl"] : (function () { throw new RuntimeError('Variable "assetDownloadUrl" does not exist.', 157, $this->source); })()));
        echo "\"/>
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-default btn-nospin\"
                            onclick=\"window.open('";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["assetDownloadUrl"]) || array_key_exists("assetDownloadUrl", $context) ? $context["assetDownloadUrl"] : (function () { throw new RuntimeError('Variable "assetDownloadUrl" does not exist.', 160, $this->source); })()), "html", null, true);
        echo "', '_blank');\">
                        <i class=\"ri-external-link-line\"></i>
                    </button>
                </span>
                </div>
            </div>
        </div>
        <!--/ preview URL -->

        <hr class=\"hr-w-2\" style=\"width:50%\">

        <!-- activity feed -->";
        // line 172
        echo twig_include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 172, $this->source); })())]);
        // line 173
        echo "</div>
    <!--/ right section -->
    <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 175, $this->source); })()), "getId", [], "method", false, false, false, 175), "html", null, true);
        echo "\"/>
</div>
<!--/ end: box layout -->

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticAsset/Asset/details.html.twig";
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
        return array (  293 => 175,  289 => 173,  287 => 172,  273 => 160,  267 => 157,  259 => 152,  247 => 142,  245 => 140,  244 => 137,  243 => 135,  237 => 131,  227 => 123,  225 => 122,  221 => 119,  219 => 118,  214 => 115,  209 => 113,  204 => 110,  202 => 109,  185 => 95,  167 => 80,  162 => 79,  160 => 78,  154 => 75,  150 => 74,  144 => 71,  140 => 70,  134 => 67,  130 => 65,  128 => 64,  123 => 61,  121 => 59,  120 => 57,  107 => 46,  95 => 36,  91 => 35,  87 => 33,  83 => 32,  79 => 23,  78 => 22,  77 => 21,  76 => 18,  75 => 17,  74 => 16,  73 => 14,  72 => 12,  71 => 11,  70 => 10,  69 => 7,  68 => 5,  64 => 4,  57 => 3,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticAsset/Asset/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Resources\\views\\Asset\\details.html.twig");
    }
}
