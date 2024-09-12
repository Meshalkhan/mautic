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

/* @MauticReport/Report/_list.html.twig */
class __TwigTemplate_f40deb92fe22acb2139e4f40ba674676 extends Template
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
        // line 1
        if (twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <div class=\"table-responsive panel-collapse pull out page-list\">
        <table class=\"table table-hover report-list\" id=\"reportTable\">
            <thead>
            <tr>
                ";
            // line 6
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#reportTable", "langVar" => "report.report", "routeBase" => "report", "templateButtons" => ["delete" => (twig_get_attribute($this->env, $this->source,             // line 12
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 12, $this->source); })()), "report:reports:deleteown", [], "array", false, false, false, 12) || twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 12, $this->source); })()), "report:reports:deleteother", [], "array", false, false, false, 12))]]);
            // line 14
            echo "

                ";
            // line 16
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "report", "orderBy" => "r.name", "text" => "mautic.core.name", "class" => "col-report-name"]);
            // line 21
            echo "

                ";
            // line 23
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "report", "text" => "mautic.report.report.form.source", "class" => "visible-lg col-email-source"]);
            // line 27
            echo "

                ";
            // line 29
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "report", "orderBy" => "r.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-lg col-report-dateAdded"]);
            // line 36
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "report", "orderBy" => "r.dateModified", "dir" => "DESC", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-lg col-report-dateModified", "default" => true]);
            // line 45
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "report", "orderBy" => "r.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-lg col-report-createdByUser"]);
            // line 50
            echo "

                ";
            // line 52
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "report", "orderBy" => "r.id", "text" => "mautic.core.id", "class" => "col-report-id visible-md visible-lg"]);
            // line 57
            echo "
            </tr>
            </thead>
            <tbody>
            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 61, $this->source); })()));
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
                // line 62
                echo "                <tr>
                    <td>
                        ";
                // line 64
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isScheduled", [], "any", false, false, false, 64)) {
                    // line 65
                    echo "                          ";
                    $context["customButtons"] = [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#AssetPreviewModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_schedule", ["reportId" => twig_get_attribute($this->env, $this->source,                     // line 70
$context["item"], "id", [], "any", false, false, false, 70)])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.export.and.send"), "iconClass" => "fa fa-send-o"]];
                    // line 76
                    echo "                        ";
                }
                // line 77
                echo "                        ";
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 78
$context["item"], "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 80
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 80, $this->source); })()), "report:reports:editown", [], "array", false, false, false, 80), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 80, $this->source); })()), "report:reports:editother", [], "array", false, false, false, 80), twig_get_attribute($this->env, $this->source, $context["item"], "createdBy", [], "any", false, false, false, 80)), "clone" => twig_get_attribute($this->env, $this->source,                 // line 81
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 81, $this->source); })()), "report:reports:create", [], "array", false, false, false, 81), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 82
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 82, $this->source); })()), "report:reports:deleteown", [], "array", false, false, false, 82), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 82, $this->source); })()), "report:reports:deleteother", [], "array", false, false, false, 82), twig_get_attribute($this->env, $this->source, $context["item"], "createdBy", [], "any", false, false, false, 82))], "routeBase" => "report", "langVar" => "report.report", "customButtons" => ((                // line 86
array_key_exists("customButtons", $context)) ? (_twig_default_filter((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 86, $this->source); })()), [])) : ([]))]);
                // line 87
                echo "
                    </td>
                    <td>
                        <div>
                            ";
                // line 91
                echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => $context["item"], "model" => "report.report"]);
                echo "
                            <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_view", ["objectId" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 92)]), "html", null, true);
                echo "\" data-toggle=\"ajax\">
                                ";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 93));
                echo "
                            </a>
                            ";
                // line 95
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isScheduled", [], "any", false, false, false, 95)) {
                    // line 96
                    echo "                                <label class=\"control-label\" data-toggle=\"tooltip\"
                                       data-container=\"body\" data-placement=\"top\" title=\"\"
                                       data-original-title=\"";
                    // line 98
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.is.scheduled"), "html", null, true);
                    echo "\">
                                    <i class=\"fa fa-fw fa-send-o\"></i></label>
                            ";
                }
                // line 101
                echo "                        </div>
                        ";
                // line 102
                if (twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 102)) {
                    // line 103
                    echo "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 104
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 104));
                    echo "</small>
                            </div>
                        ";
                }
                // line 107
                echo "                    </td>

                    <td>";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "getTableData", [], "method", false, true, false, 109), twig_get_attribute($this->env, $this->source, $context["item"], "getSource", [], "method", false, false, false, 109), [], "array", false, true, false, 109), "display_name", [], "array", true, true, false, 109) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "getTableData", [], "method", false, true, false, 109), twig_get_attribute($this->env, $this->source, $context["item"], "getSource", [], "method", false, false, false, 109), [], "array", false, true, false, 109), "display_name", [], "array", false, false, false, 109)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "getTableData", [], "method", false, true, false, 109), twig_get_attribute($this->env, $this->source, $context["item"], "getSource", [], "method", false, false, false, 109), [], "array", false, true, false, 109), "display_name", [], "array", false, false, false, 109)) : (twig_get_attribute($this->env, $this->source, $context["item"], "getSource", [], "method", false, false, false, 109)))), "html", null, true);
                echo "</td>

                    <td class=\"visible-lg\" title=\"";
                // line 111
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 111)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 111))) : (""));
                echo "\">
                        ";
                // line 112
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 112)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, $context["item"], "getDateAdded", [], "method", false, false, false, 112))) : (""));
                echo "
                    </td>
                    <td class=\"visible-lg\" title=\"";
                // line 114
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 114)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 114))) : (""));
                echo "\">
                        ";
                // line 115
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 115)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, $context["item"], "getDateModified", [], "method", false, false, false, 115))) : (""));
                echo "
                    </td>
                    <td class=\"visible-lg\">";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getCreatedByUser", [], "method", false, false, false, 117));
                echo "</td>

                    <td class=\"visible-md visible-lg\">";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 119), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "            </tbody>
        </table>
        <div class=\"panel-footer\">
            ";
            // line 125
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 126
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 126, $this->source); })()), "page" =>             // line 127
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 127, $this->source); })()), "limit" =>             // line 128
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 128, $this->source); })()), "menuLinkId" => "mautic_report_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_index"), "sessionVar" => "report"]);
            // line 132
            echo "
        </div>
    </div>
";
        } else {
            // line 136
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
        return "@MauticReport/Report/_list.html.twig";
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
        return array (  230 => 136,  224 => 132,  222 => 128,  221 => 127,  220 => 126,  219 => 125,  214 => 122,  197 => 119,  192 => 117,  187 => 115,  183 => 114,  178 => 112,  174 => 111,  169 => 109,  165 => 107,  159 => 104,  156 => 103,  154 => 102,  151 => 101,  145 => 98,  141 => 96,  139 => 95,  134 => 93,  130 => 92,  126 => 91,  120 => 87,  118 => 86,  117 => 82,  116 => 81,  115 => 80,  114 => 78,  112 => 77,  109 => 76,  107 => 70,  105 => 65,  103 => 64,  99 => 62,  82 => 61,  76 => 57,  74 => 52,  70 => 50,  68 => 45,  66 => 36,  64 => 29,  60 => 27,  58 => 23,  54 => 21,  52 => 16,  48 => 14,  46 => 12,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticReport/Report/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Resources\\views\\Report\\_list.html.twig");
    }
}
