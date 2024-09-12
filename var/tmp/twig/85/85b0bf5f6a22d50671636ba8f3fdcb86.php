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

/* @MauticSms/Sms/details.html.twig */
class __TwigTemplate_eacc758fddb2ed7b00bf2e8bbc30485d extends Template
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
        // line 2
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ( !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 1, $this->source); })())) {
        }
        // line 2
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticSms/Sms/details.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "sms";
    }

    // line 6
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 6, $this->source); })()), "getName", [], "method", false, false, false, 6), "html", null, true);
    }

    // line 8
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $context["customButtons"] = [];
        // line 10
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 12
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 12, $this->source); })()), "customButtons" => ((        // line 13
array_key_exists("customButtons", $context)) ? ((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 13, $this->source); })())) : ([])), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 16, $this->source); })()), "sms:smses:editown", [], "array", false, false, false, 16), twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 17, $this->source); })()), "sms:smses:editother", [], "array", false, false, false, 17), twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 18, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 18)), "clone" => twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 20, $this->source); })()), "sms:smses:create", [], "array", false, false, false, 20), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "sms:smses:deleteown", [], "array", false, false, false, 22), twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "sms:smses:deleteother", [], "array", false, false, false, 23), twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 24, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 24)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 27, $this->source); })()), "sms:smses:viewown", [], "array", false, false, false, 27), twig_get_attribute($this->env, $this->source,         // line 28
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 28, $this->source); })()), "sms:smses:viewother", [], "array", false, false, false, 28), twig_get_attribute($this->env, $this->source,         // line 29
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 29, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 29))], "routeBase" => "sms"]);
    }

    // line 37
    public function block_publishStatus($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 38, $this->source); })())]);
    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!-- page detail header -->
            <!-- sms detail collapseable toggler -->
            <div class=\"pr-md pl-md pt-lg pb-lg\">
                <div class=\"box-layout\">
                    <div class=\"col-xs-10\">
                        <div class=\"text-white dark-sm mb-0\">";
        // line 57
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 57, $this->source); })()), "getDescription", [], "method", false, false, false, 57));
        echo "</div>
                    </div>
                </div>
            </div>
            <div class=\"collapse\" id=\"sms-details\">
                <div class=\"pr-md pl-md pb-md\">
                    <div class=\"panel shd-none mb-0\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>";
        // line 66
        echo twig_include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 66, $this->source); })())]);
        // line 67
        if ((twig_get_attribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 67, $this->source); })()), "getSmsType", [], "method", false, false, false, 67) == "list")) {
            // line 68
            echo "                                    <tr>
                                        <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.lists"), "html", null, true);
            echo "</span></td>
                                        <td>
                                            ";
            // line 71
            $context["segments"] = twig_get_attribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 71, $this->source); })()), "getLists", [], "any", false, false, false, 71);
            // line 72
            echo "                                            ";
            $context["segmentNames"] = twig_array_map($this->env, twig_get_attribute($this->env, $this->source, (isset($context["segments"]) || array_key_exists("segments", $context) ? $context["segments"] : (function () { throw new RuntimeError('Variable "segments" does not exist.', 72, $this->source); })()), "toArray", [], "any", false, false, false, 72), function ($__segment__) use ($context, $macros) { $context["segment"] = $__segment__; return twig_get_attribute($this->env, $this->source, (isset($context["segment"]) || array_key_exists("segment", $context) ? $context["segment"] : (function () { throw new RuntimeError('Variable "segment" does not exist.', 72, $this->source); })()), "getName", [], "any", false, false, false, 72); });
            // line 73
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["segmentNames"]) || array_key_exists("segmentNames", $context) ? $context["segmentNames"] : (function () { throw new RuntimeError('Variable "segmentNames" does not exist.', 73, $this->source); })()), ", "), "html", null, true);
            echo "
                                        </td>
                                    </tr>
                                ";
        }
        // line 77
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            <!--/ sms detail collapseable toggler -->
        <div>
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"Detail\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#sms-details\">
                        <span class=\"caret\"></span> ";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "
                    </a>
                </span>
            </div>
            <!-- some stats -->
            <div class=\"pa-md\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"panel\">
                            <div class=\"panel-body box-layout\">
                                <div class=\"col-md-3 va-m\">
                                    <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                        <span class=\"fa fa-line-chart\"></span>
                                        ";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.stats"), "html", null, true);
        echo "
                                    </h5>
                                </div>
                                <div class=\"col-md-9 va-m\">";
        // line 105
        echo twig_include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 105, $this->source); })()), "class" => "pull-right"]);
        // line 106
        echo "</div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">";
        // line 109
        echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["entityViews"]) || array_key_exists("entityViews", $context) ? $context["entityViews"] : (function () { throw new RuntimeError('Variable "entityViews" does not exist.', 109, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        // line 110
        echo "</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ stats -->

            ";
        // line 117
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        echo "

            <!-- tabs controls -->
            <ul class=\"nav nav-tabs pr-md pl-md\">
                <li class=\"active\">
                    <a href=\"#clicks-container\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_counts"), "html", null, true);
        echo "
                    </a>
                </li>
                <li class=\"\">
                    <a href=\"#contacts-container\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        echo "
                    </a>
                </li>
            </ul>
            <!--/ tabs controls -->
        </div>

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md\">
            <div class=\"tab-pane active bdr-w-0\" id=\"clicks-container\">";
        // line 138
        echo twig_include($this->env, $context, "@MauticPage/Trackable/click_counts.html.twig", ["trackables" =>         // line 139
(isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 139, $this->source); })()), "entity" =>         // line 140
(isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 140, $this->source); })()), "channel" => "sms"]);
        // line 143
        echo "</div>

            <div class=\"tab-pane fade in bdr-w-0 page-list\" id=\"contacts-container\">
                ";
        // line 146
        echo (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 146, $this->source); })());
        echo "
            </div>
        </div>
        <!-- end: tab-content -->
    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        <!-- activity feed -->";
        // line 156
        echo twig_include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 156, $this->source); })())]);
        // line 157
        echo "</div>
    <!--/ right section -->
    <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sms"]) || array_key_exists("sms", $context) ? $context["sms"] : (function () { throw new RuntimeError('Variable "sms" does not exist.', 159, $this->source); })()), "getId", [], "method", false, false, false, 159), "html", null, true);
        echo "\" />
</div>
<!--/ end: box layout -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticSms/Sms/details.html.twig";
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
        return array (  259 => 159,  255 => 157,  253 => 156,  241 => 146,  236 => 143,  234 => 140,  233 => 139,  232 => 138,  220 => 128,  212 => 123,  203 => 117,  194 => 110,  192 => 109,  188 => 106,  186 => 105,  180 => 101,  164 => 88,  151 => 77,  143 => 73,  140 => 72,  138 => 71,  133 => 69,  130 => 68,  128 => 67,  126 => 66,  115 => 57,  103 => 47,  99 => 46,  95 => 38,  91 => 37,  87 => 29,  86 => 28,  85 => 27,  84 => 24,  83 => 23,  82 => 22,  81 => 20,  80 => 18,  79 => 17,  78 => 16,  77 => 13,  76 => 12,  75 => 10,  72 => 9,  68 => 8,  61 => 6,  54 => 5,  49 => 2,  46 => 1,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSms/Sms/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Resources\\views\\Sms\\details.html.twig");
    }
}
