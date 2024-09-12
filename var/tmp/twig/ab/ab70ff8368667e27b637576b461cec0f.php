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

/* @MauticNotification/Notification/details.html.twig */
class __TwigTemplate_1b820730433b2cc9ad5aeb8d8b5e6395 extends Template
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
        // line 12
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticNotification/Notification/details.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "notification";
    }

    // line 16
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
    }

    // line 18
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 20
(isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 20, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "notification:notifications:editown", [], "array", false, false, false, 22), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 22, $this->source); })()), "notification:notifications:editother", [], "array", false, false, false, 22), twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 22, $this->source); })()), "createdBy", [], "any", false, false, false, 22)), "delete" => twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "notification:notifications:create", [], "array", false, false, false, 23), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 24, $this->source); })()), "notification:notifications:viewown", [], "array", false, false, false, 24), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 24, $this->source); })()), "notification:notifications:viewother", [], "array", false, false, false, 24), twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 24, $this->source); })()), "createdBy", [], "any", false, false, false, 24))], "routeBase" => "notification"]);
        // line 27
        echo "
";
    }

    // line 30
    public function block_publishStatus($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "  ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 31, $this->source); })())]);
        echo "
";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!-- notification detail collapseable -->
            <div class=\"collapse\" id=\"notification-details\">
              <div class=\"pr-md pl-md pb-md\">
                <div class=\"panel shd-none mb-0\">
                  <table class=\"table table-hover mb-0\">
                    <tbody>
                      ";
        // line 46
        echo twig_include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 46, $this->source); })())]);
        echo "
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!--/ notification detail collapseable -->

            <!-- notification detail collapseable toggler -->
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#notification-details\">
                      <span class=\"caret\"></span>
                      ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "
                    </a>
                </span>
            </div>
            <!--/ notification detail collapseable toggler -->

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
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.stats"), "html", null, true);
        echo "
                                    </h5>
                                </div>
                                <div class=\"col-md-9 va-m\">
                                    ";
        // line 78
        echo twig_include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 78, $this->source); })()), "class" => "pull-right"], false);
        echo "
                                </div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                ";
        // line 82
        echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["entityViews"]) || array_key_exists("entityViews", $context) ? $context["entityViews"] : (function () { throw new RuntimeError('Variable "entityViews" does not exist.', 82, $this->source); })()), "chartType" => "line", "chartHeight" => 300], false);
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ stats -->

            ";
        // line 90
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        echo "

            <!-- tabs controls -->
            <ul class=\"nav nav-tabs pr-md pl-md\">
                <li class=\"active\">
                    <a href=\"#clicks-container\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_counts"), "html", null, true);
        echo "
                    </a>
                </li>
                <li class=\"\">
                    <a href=\"#contacts-container\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        echo "
                    </a>
                </li>
            </ul>
            <!--/ tabs controls -->
        </div>

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md\">
            <div class=\"tab-pane active bdr-w-0\" id=\"clicks-container\">
                ";
        // line 111
        echo twig_include($this->env, $context, "@MauticPage/Trackable/click_counts.html.twig", ["trackables" =>         // line 112
(isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 112, $this->source); })()), "entity" =>         // line 113
(isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 113, $this->source); })()), "channel" => "notification"]);
        // line 115
        echo "
            </div>
            <div class=\"tab-pane fade in bdr-w-0 page-list\" id=\"contacts-container\">
                ";
        // line 118
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 118, $this->source); })()));
        echo "
            </div>
        </div>
        <!--/ tab-content -->
    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        <!-- activity feed -->
        ";
        // line 128
        echo twig_include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 128, $this->source); })())]);
        echo "
    </div>
    <!--/ right section -->
    <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 131, $this->source); })()), "id", [], "any", false, false, false, 131));
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
        return "@MauticNotification/Notification/details.html.twig";
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
        return array (  228 => 131,  222 => 128,  209 => 118,  204 => 115,  202 => 113,  201 => 112,  200 => 111,  187 => 101,  179 => 96,  170 => 90,  159 => 82,  152 => 78,  145 => 74,  127 => 59,  121 => 56,  108 => 46,  95 => 35,  91 => 34,  84 => 31,  80 => 30,  75 => 27,  73 => 24,  72 => 23,  71 => 22,  70 => 20,  68 => 19,  64 => 18,  57 => 16,  50 => 14,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticNotification/Notification/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\NotificationBundle\\Resources\\views\\Notification\\details.html.twig");
    }
}
