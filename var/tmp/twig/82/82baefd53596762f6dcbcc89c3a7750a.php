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

/* @MauticLead/Timeline/_list.html.twig */
class __TwigTemplate_0faa32299efc1e9a5293b54bc4b907da extends Template
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
        echo "<!-- timeline -->
<div class=\"table-responsive\">
    <table class=\"table table-hover\" id=\"contact-timeline\">
        <thead>
        <tr>
            <th class=\"timeline-icon\">
                <a class=\"btn btn-sm btn-nospin btn-default\" data-activate-details=\"all\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.toggle_all_details"), "html", null, true);
        echo "\">
                    <span class=\"fa fa-fw ri-corner-right-down-line\"></span>
                </a>
            </th>
            ";
        // line 11
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "eventLabel", "text" => "mautic.lead.timeline.event_name", "class" => "timeline-name", "sessionVar" => (("lead." . twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)) . ".timeline"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contacttimeline_action", ["leadId" => twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "target" => "#timeline-table"]);
        // line 18
        echo "

            ";
        // line 20
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "eventType", "text" => "mautic.lead.timeline.event_type", "class" => "visible-md visible-lg timeline-type", "sessionVar" => (("lead." . twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)) . ".timeline"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contacttimeline_action", ["leadId" => twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "target" => "#timeline-table"]);
        // line 27
        echo "

            ";
        // line 29
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "timestamp", "text" => "mautic.lead.timeline.event_timestamp", "class" => "visible-md visible-lg timeline-timestamp", "sessionVar" => (("lead." . twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)) . ".timeline"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contacttimeline_action", ["leadId" => twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "target" => "#timeline-table"]);
        // line 36
        echo "
        </tr>
        <tbody>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 39, $this->source); })()), "events", [], "any", false, false, false, 39));
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
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 40
            echo "            ";
            $context["icon"] = ((twig_get_attribute($this->env, $this->source, $context["event"], "icon", [], "any", true, true, false, 40)) ? (twig_get_attribute($this->env, $this->source, $context["event"], "icon", [], "any", false, false, false, 40)) : ("fa-history"));
            // line 41
            echo "            ";
            $context["eventLabel"] = ((twig_get_attribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", true, true, false, 41)) ? (twig_get_attribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", false, false, false, 41)) : (twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 41)));
            // line 42
            echo "            ";
            if (is_iterable((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 42, $this->source); })()))) {
                // line 43
                echo "                ";
                ob_start(function () { return ''; });
                // line 44
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 44, $this->source); })()), "href", [], "any", false, false, false, 44), "html", null, true);
                echo "\" ";
                if ( !twig_get_attribute($this->env, $this->source, ($context["eventLabel"] ?? null), "isExternal", [], "any", true, true, false, 44)) {
                    echo "data-toggle=\"ajax\"";
                } else {
                    echo "target=\"_new\"";
                }
                echo ">";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 45, $this->source); })()), "label", [], "any", false, false, false, 45), "html", null, true);
                // line 46
                echo "</a>
                ";
                $context["eventLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 48
                echo "            ";
            }
            // line 49
            echo "
            ";
            // line 50
            $context["details"] = "";
            // line 51
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", true, true, false, 51)) {
                // line 52
                echo "                ";
                $context["details"] = twig_trim_filter(twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 52), ["event" => $context["event"], "lead" => (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 52, $this->source); })())], false, true));
                // line 53
                echo "            ";
            }
            // line 54
            echo "
            <tr class=\"timeline-row ";
            // line 55
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 55) % 2)) {
                echo "timeline-row-highlighted";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["event"], "featured", [], "any", true, true, false, 55) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["event"], "featured", [], "any", false, false, false, 55)))) {
                echo "timeline-featured";
            }
            echo "\">
                <td class=\"timeline-icon\">
                    <a href=\"javascript:void(0);\"
                       data-activate-details=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 58), "html", null, true);
            echo "\"
                       class=\"btn btn-sm btn-nospin btn-default ";
            // line 59
            if (twig_test_empty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 59, $this->source); })()))) {
                echo "disabled";
            }
            echo "\"
                       data-toggle=\"tooltip\" title=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.toggle_details"), "html", null, true);
            echo "\">
                        <span class=\"fa fa-fw ";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 61, $this->source); })()), "html", null, true);
            echo "\"></span>
                    </a>
                </td>
                <td class=\"timeline-name\">";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 64, $this->source); })()), "html", null, true);
            echo "</td>
                <td class=\"timeline-type\">";
            // line 65
            if (twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", true, true, false, 65)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 65), "html", null, true);
            }
            echo "</td>
                <td class=\"timeline-timestamp\">";
            // line 66
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(twig_get_attribute($this->env, $this->source, $context["event"], "timestamp", [], "any", false, false, false, 66), "local", "Y-m-d H:i:s", true);
            echo "</td>
            </tr>
            ";
            // line 68
            if ( !twig_test_empty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 68, $this->source); })()))) {
                // line 69
                echo "                <tr class=\"timeline-row ";
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 69) % 2)) {
                    echo "timeline-row-highlighted";
                }
                echo " timeline-details hide\" id=\"timeline-details-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 69), "html", null, true);
                echo "\">
                    <td colspan=\"4\">
                        <!-- template: \"";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 71), "html", null, true);
                echo "\" -->
                        ";
                // line 72
                echo (isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 72, $this->source); })());
                echo "
                        <!--/ template: \"";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 73), "html", null, true);
                echo "\" -->
                    </td>
                </tr>
            ";
            }
            // line 77
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </tbody>
    </table>
</div>
";
        // line 81
        echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["page" => twig_get_attribute($this->env, $this->source,         // line 82
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 82, $this->source); })()), "page", [], "any", false, false, false, 82), "fixedPages" => twig_get_attribute($this->env, $this->source,         // line 83
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 83, $this->source); })()), "maxPages", [], "any", false, false, false, 83), "fixedLimit" => true, "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contacttimeline_action", ["leadId" => twig_get_attribute($this->env, $this->source,         // line 85
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)]), "target" => "#timeline-table", "totalItems" => twig_get_attribute($this->env, $this->source,         // line 87
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 87, $this->source); })()), "total", [], "any", false, false, false, 87)]);
        // line 88
        echo "
<!--/ timeline -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Timeline/_list.html.twig";
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
        return array (  241 => 88,  239 => 87,  238 => 85,  237 => 83,  236 => 82,  235 => 81,  230 => 78,  216 => 77,  209 => 73,  205 => 72,  201 => 71,  191 => 69,  189 => 68,  184 => 66,  178 => 65,  174 => 64,  168 => 61,  164 => 60,  158 => 59,  154 => 58,  142 => 55,  139 => 54,  136 => 53,  133 => 52,  130 => 51,  128 => 50,  125 => 49,  122 => 48,  118 => 46,  116 => 45,  106 => 44,  103 => 43,  100 => 42,  97 => 41,  94 => 40,  77 => 39,  72 => 36,  70 => 34,  69 => 33,  68 => 29,  64 => 27,  62 => 25,  61 => 24,  60 => 20,  56 => 18,  54 => 16,  53 => 15,  52 => 11,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Timeline/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Timeline\\_list.html.twig");
    }
}
