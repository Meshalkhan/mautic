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

/* @MauticChannel/Message/details.html.twig */
class __TwigTemplate_d7d573231722821bd78db26e37f70896 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mauicContent' => [$this, 'block_mauicContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'publishStatus' => [$this, 'block_publishStatus'],
            'content' => [$this, 'block_content'],
            'rightFormContent' => [$this, 'block_rightFormContent'],
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
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticChannel/Message/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_mauicContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "message
";
    }

    // line 4
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "getName", [], "method", false, false, false, 5), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 9
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 11, $this->source); })()), "channel:messages:editown", [], "array", false, false, false, 11), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 11, $this->source); })()), "channel:messages:editother", [], "array", false, false, false, 11), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 11)), "clone" => twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 12, $this->source); })()), "channel:messages:create", [], "array", false, false, false, 12), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 13, $this->source); })()), "channel:messages:deleteown", [], "array", false, false, false, 13), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 13, $this->source); })()), "channel:messages:deleteown", [], "array", false, false, false, 13), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 13))], "routeBase" => "message"]);
    }

    // line 18
    public function block_publishStatus($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })())]);
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "<!-- start: box layout -->
    <div class=\"box-layout\">
        <!-- left section -->
        <div class=\"col-md-9 height-auto\">
            <div>
                <!-- form detail header -->
                <div class=\"pr-md pl-md pt-lg pb-lg\">
                    <div class=\"box-layout\">
                        <div class=\"col-xs-10\">
                            <div class=\"text-muted\">";
        // line 31
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "getDescription", [], "method", false, false, false, 31));
        echo "</div>
                        </div>

                    </div>
                </div>
                <!--/ form detail header -->
                <!-- form detail collapseable -->
                <div class=\"collapse\" id=\"focus-details\">
                    <div class=\"pr-md pl-md pb-md\">
                        <div class=\"panel shd-none mb-0\">
                            <table class=\"table table-hover mb-0\">
                                <tbody>";
        // line 43
        echo twig_include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })())]);
        // line 44
        echo "</tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--/ form detail collapseable -->
            </div>

        <!--/ form detail collapseable toggler -->
            <div>
                <!-- form detail collapseable toggler -->
                <div class=\"hr-expand nm\">
                        <span data-toggle=\"tooltip\" title=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.details", [], "messages");
        echo "\">
                            <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#focus-details\"><span class=\"caret\"></span> ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.details", [], "messages");
        echo "</a>
                        </span>
                </div>
                <!-- stats -->
                <div class=\"pa-md\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"panel\">
                                <div class=\"panel-body box-layout\">
                                    <div class=\"col-md-6 va-m\">
                                        <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                            <div><i class=\"fa fa-line-chart pull-left\"></i>
                                                <span class=\"pull-left\"> ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.messages.processed.messages", [], "messages");
        echo "</span></div>
                                        </h5>
                                    </div>
                                    <div class=\"col-md-9 va-m\">";
        // line 73
        echo twig_include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 73, $this->source); })()), "class" => "pull-right"]);
        // line 74
        echo "</div>
                                </div>
                                <div class=\"pt-0 pl-15 pb-10 pr-15\">";
        // line 77
        echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["eventCounts"]) || array_key_exists("eventCounts", $context) ? $context["eventCounts"] : (function () { throw new RuntimeError('Variable "eventCounts" does not exist.', 77, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        // line 78
        echo "</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ stats -->
                ";
        // line 84
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        echo "

                <!-- tabs controls -->
                <ul class=\"nav nav-tabs pr-md pl-md\">
                    ";
        // line 88
        $context["active"] = "active";
        // line 89
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messagedLeads"]) || array_key_exists("messagedLeads", $context) ? $context["messagedLeads"] : (function () { throw new RuntimeError('Variable "messagedLeads" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["channel"] => $context["contacts"]) {
            // line 90
            echo "                    <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 90, $this->source); })()), "html", null, true);
            echo "\">
                        <a href=\"#contacts-";
            // line 91
            echo twig_escape_filter($this->env, $context["channel"], "html", null, true);
            echo "\" role=\"tab\" data-toggle=\"tab\">
                            ";
            // line 92
            echo twig_escape_filter($this->env, (( !("all" === $context["channel"])) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 92, $this->source); })()), $context["channel"], [], "array", false, false, false, 92), "label", [], "array", false, false, false, 92)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"))), "html", null, true);
            echo "
                        </a>
                    </li>
                    ";
            // line 95
            $context["active"] = "";
            // line 96
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['channel'], $context['contacts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                </ul>
                <!--/ tabs controls -->
            </div>

            <!-- start: tab-content -->
            <div class=\"tab-content pa-md\">
            ";
        // line 103
        $context["active"] = " active in";
        // line 104
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messagedLeads"]) || array_key_exists("messagedLeads", $context) ? $context["messagedLeads"] : (function () { throw new RuntimeError('Variable "messagedLeads" does not exist.', 104, $this->source); })()));
        foreach ($context['_seq'] as $context["channel"] => $context["contacts"]) {
            // line 105
            echo "                <div class=\"tab-pane bdr-w-0 page-list";
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 105, $this->source); })()), "html", null, true);
            echo "\" id=\"contacts-";
            echo twig_escape_filter($this->env, $context["channel"], "html", null, true);
            echo "\">
                    ";
            // line 106
            $context["message"] = ((("all" === $context["channel"])) ? ("mautic.channel.message.all_contacts") : ("mautic.channel.message.channel_contacts"));
            // line 107
            echo "                    <div class=\"alert alert-info\"><strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 107, $this->source); })())), "html", null, true);
            echo "</strong></div>
                    <div class=\"message-";
            // line 108
            echo twig_escape_filter($this->env, $context["channel"], "html", null, true);
            echo "\">
                        ";
            // line 109
            echo $context["contacts"];
            echo "
                    </div>
                </div>
                ";
            // line 112
            $context["active"] = "";
            // line 113
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['channel'], $context['contacts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "            </div>
        </div>
        <!-- right section -->
        <div class=\"col-md-3 bdr-l height-auto\">
            <!-- recent activity -->";
        // line 119
        echo twig_include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 119, $this->source); })())]);
        // line 120
        $this->displayBlock('rightFormContent', $context, $blocks);
        // line 122
        echo "        </div>
    </div> 
";
    }

    // line 120
    public function block_rightFormContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticChannel/Message/details.html.twig";
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
        return array (  280 => 121,  276 => 120,  270 => 122,  268 => 120,  266 => 119,  260 => 114,  254 => 113,  252 => 112,  246 => 109,  242 => 108,  237 => 107,  235 => 106,  228 => 105,  223 => 104,  221 => 103,  213 => 97,  207 => 96,  205 => 95,  199 => 92,  195 => 91,  190 => 90,  185 => 89,  183 => 88,  176 => 84,  168 => 78,  166 => 77,  162 => 74,  160 => 73,  154 => 69,  139 => 57,  135 => 56,  121 => 44,  119 => 43,  105 => 31,  94 => 22,  90 => 21,  86 => 19,  82 => 18,  78 => 13,  77 => 12,  76 => 11,  75 => 9,  74 => 8,  70 => 7,  63 => 5,  59 => 4,  51 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticChannel/Message/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Resources\\views\\Message\\details.html.twig");
    }
}
