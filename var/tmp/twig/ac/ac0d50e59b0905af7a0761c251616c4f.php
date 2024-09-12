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

/* @MauticLead/Auditlog/_list.html.twig */
class __TwigTemplate_885ab86dc15c91479ca993bac28da9ce extends Template
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
        // line 6
        echo "<!-- filter form -->
<form method=\"post\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_auditlog_action", ["leadId" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\" class=\"panel\" id=\"auditlog-filters\">
    <div class=\"form-control-icon pa-xs\">
        <input type=\"text\" class=\"form-control bdr-w-0\" name=\"search\" id=\"search\" placeholder=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.placeholder"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 9, $this->source); })()), "filters", [], "array", false, false, false, 9), "search", [], "array", false, false, false, 9));
        echo "\">
        <span class=\"the-icon ri-search-line text-muted mt-xs\"></span>
    </div>
    ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "types", [], "any", true, true, false, 12) && is_iterable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 12, $this->source); })()), "types", [], "any", false, false, false, 12)))) {
            // line 13
            echo "        <div class=\"history-search panel-footer text-muted\">
            <div class=\"row\">
                <div class=\"col-sm-5 mna-3\">
                    <label class=\"pt-lg\">";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.include.placeholder"), "html", null, true);
            echo "</label>
                    <select name=\"includeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\"\">
                        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 18, $this->source); })()), "types", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                // line 19
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["typeKey"], "html", null, true);
                echo "\" ";
                if (twig_in_filter($context["typeKey"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 19, $this->source); })()), "filters", [], "any", false, false, false, 19), "includeEvents", [], "any", false, false, false, 19))) {
                    echo "selected";
                }
                echo ">";
                // line 20
                echo twig_escape_filter($this->env, $context["typeName"], "html", null, true);
                // line 21
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['typeKey'], $context['typeName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                    </select>
                </div>
                <div class=\"col-sm-5 mna-3\">
                    <label class=\"pt-lg\">";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.exclude.placeholder"), "html", null, true);
            echo "</label>
                    <select name=\"excludeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\">
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 28, $this->source); })()), "types", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                // line 29
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["typeKey"], "html", null, true);
                echo "\" ";
                if (twig_in_filter($context["typeKey"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 29, $this->source); })()), "filters", [], "any", false, false, false, 29), "excludeEvents", [], "any", false, false, false, 29))) {
                    echo "selected";
                }
                echo ">";
                // line 30
                echo twig_escape_filter($this->env, $context["typeName"], "html", null, true);
                // line 31
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['typeKey'], $context['typeName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                    </select>
                </div>
                <div class=\"col-sm-2 mt-lg\">
                    <a class=\"btn btn-default btn-block mt-lg\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_contact_auditlog_export_action", ["leadId" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" data-toggle=\"download\">
                        <span>
                            <i class=\"ri-download-line\"></i> <span>";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.export"), "html", null, true);
            echo "</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    ";
        }
        // line 45
        echo "    <input type=\"hidden\" name=\"leadId\" id=\"leadId\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45));
        echo "\" />
</form>
<script>
    mauticLang['showMore'] = '";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.show"), "html", null, true);
        echo "';
    mauticLang['hideMore'] = '";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.hide"), "html", null, true);
        echo "';
</script>
<div id=\"auditlog-table\">
  <!-- auditlog -->
  <div class=\"table-responsive\">
      <table class=\"table table-hover\" id=\"contact-auditlog\">
          <thead>
          <tr>
              <th class=\"timeline-icon\">
                  <a class=\"btn btn-sm btn-nospin btn-default\" data-activate-details=\"all\" data-toggle=\"tooltip\" title=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.toggle_all_details"), "html", null, true);
        echo "\">
                      <span class=\"fa fa-fw ri-corner-right-down-line\"></span>
                  </a>
              </th>
              ";
        // line 62
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "userName", "text" => "mautic.lead.timeline.user_name", "class" => "timeline-name", "sessionVar" => (("lead." . twig_get_attribute($this->env, $this->source,         // line 66
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)) . ".auditlog"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_auditlog_action", ["leadId" => twig_get_attribute($this->env, $this->source,         // line 67
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "target" => "#auditlog-table"]);
        // line 69
        echo "
              ";
        // line 70
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "action", "text" => "mautic.lead.timeline.event_type", "class" => "visible-md visible-lg timeline-type", "sessionVar" => (("lead." . twig_get_attribute($this->env, $this->source,         // line 74
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)) . ".auditlog"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_auditlog_action", ["leadId" => twig_get_attribute($this->env, $this->source,         // line 75
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75)]), "target" => "#auditlog-table"]);
        // line 77
        echo "
              ";
        // line 78
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "dateAdded", "text" => "mautic.lead.timeline.event_timestamp", "class" => "visible-md visible-lg timeline-timestamp", "sessionVar" => (("lead." . twig_get_attribute($this->env, $this->source,         // line 82
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82)) . ".auditlog"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_auditlog_action", ["leadId" => twig_get_attribute($this->env, $this->source,         // line 83
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)]), "target" => "#auditlog-table"]);
        // line 85
        echo "
          </tr>
          <tbody>
          ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 88, $this->source); })()), "events", [], "any", false, false, false, 88));
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
            // line 89
            echo "              ";
            $context["counter"] = (twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 89) + 1);
            // line 90
            echo "              ";
            $context["icon"] = ((twig_get_attribute($this->env, $this->source, $context["event"], "icon", [], "any", true, true, false, 90)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["event"], "icon", [], "any", false, false, false, 90), "fa-history")) : ("fa-history"));
            // line 91
            echo "              ";
            $context["eventLabel"] = ((twig_get_attribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", true, true, false, 91)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", false, false, false, 91), twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 91))) : (twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 91)));
            // line 92
            echo "              ";
            if (is_iterable((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 92, $this->source); })()))) {
                // line 93
                echo "                  ";
                $context["linkType"] = ((twig_get_attribute($this->env, $this->source, ($context["eventLabel"] ?? null), "isExternal", [], "any", true, true, false, 93)) ? ("data-toggle=\"ajax\"") : ("target=\"_new\""));
                // line 94
                echo "                  ";
                $context["eventLabel"] = (((((("<a href=\"" . twig_get_attribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 94, $this->source); })()), "href", [], "any", false, false, false, 94)) . "\" ") . (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 94, $this->source); })())) . ">") . twig_get_attribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 94, $this->source); })()), "label", [], "any", false, false, false, 94)) . "</a>");
                // line 95
                echo "              ";
            }
            // line 96
            echo "
              ";
            // line 97
            $context["rowStripe"] = twig_cycle(["", "timeline-row-highlighted"], twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 97));
            // line 98
            echo "              ";
            $context["hasDetails"] = false;
            // line 99
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["event"], "details", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 100
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", true, true, false, 100) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "details", [], "any", false, false, false, 100)) > 0))) {
                    // line 101
                    echo "                      ";
                    $context["hasDetails"] = true;
                    // line 102
                    echo "                  ";
                }
                // line 103
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "              <tr class=\"timeline-row ";
            echo twig_escape_filter($this->env, (isset($context["rowStripe"]) || array_key_exists("rowStripe", $context) ? $context["rowStripe"] : (function () { throw new RuntimeError('Variable "rowStripe" does not exist.', 104, $this->source); })()), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["event"], "featured", [], "any", true, true, false, 104)) {
                echo "timeline-featured";
            }
            echo "\">
                  <td class=\"timeline-icon\">
                      <a href=\"javascript:void(0);\"
                         data-activate-details=\"";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 107, $this->source); })()), "html", null, true);
            echo "\"
                         class=\"btn btn-sm btn-nospin btn-default ";
            // line 108
            if (( !twig_get_attribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", true, true, false, 108) || ((isset($context["hasDetails"]) || array_key_exists("hasDetails", $context) ? $context["hasDetails"] : (function () { throw new RuntimeError('Variable "hasDetails" does not exist.', 108, $this->source); })()) == false))) {
                echo "disabled";
            }
            echo "\"
                         data-toggle=\"tooltip\"
                         title=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.toggle_details"), "html", null, true);
            echo "\">
                          <span class=\"fa fa-fw ";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 111, $this->source); })()), "html", null, true);
            echo "\"></span>
                      </a>
                  </td>
                  <td class=\"timeline-name\">";
            // line 114
            echo twig_escape_filter($this->env, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 114, $this->source); })()), "html", null, true);
            echo "</td>
                  <td class=\"timeline-type\">";
            // line 115
            if (twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", true, true, false, 115)) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.event." . twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 115))), "html", null, true);
            }
            // line 116
            echo "              </td>
                  <td class=\"timeline-timestamp\">";
            // line 117
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(twig_get_attribute($this->env, $this->source, $context["event"], "timestamp", [], "any", false, false, false, 117), "local", "Y-m-d H:i:s", true);
            echo "</td>
              </tr>
              ";
            // line 119
            if ((twig_get_attribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 119) && ((isset($context["hasDetails"]) || array_key_exists("hasDetails", $context) ? $context["hasDetails"] : (function () { throw new RuntimeError('Variable "hasDetails" does not exist.', 119, $this->source); })()) == true))) {
                // line 120
                echo "                  <!-- contentTemplate: \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 120), "html", null, true);
                echo "\" -->
                  <tr class=\"timeline-row ";
                // line 121
                echo twig_escape_filter($this->env, (isset($context["rowStripe"]) || array_key_exists("rowStripe", $context) ? $context["rowStripe"] : (function () { throw new RuntimeError('Variable "rowStripe" does not exist.', 121, $this->source); })()), "html", null, true);
                echo " timeline-details hide\" id=\"auditlog-details-";
                echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 121, $this->source); })()), "html", null, true);
                echo "\">
                      <td colspan=\"4\">
                        ";
                // line 123
                echo twig_include($this->env, $context, [twig_get_attribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 123), twig_get_attribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 123)], ["event" => $context["event"], "lead" => (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 123, $this->source); })())]);
                echo "
                      </td>
                  </tr>
              ";
            }
            // line 127
            echo "          ";
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
        // line 128
        echo "          </tbody>
      </table>
  </div>
  ";
        // line 131
        echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["page" => twig_get_attribute($this->env, $this->source,         // line 132
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 132, $this->source); })()), "page", [], "any", false, false, false, 132), "fixedPages" => twig_get_attribute($this->env, $this->source,         // line 133
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 133, $this->source); })()), "maxPages", [], "any", false, false, false, 133), "fixedLimit" => true, "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_auditlog_action", ["leadId" => twig_get_attribute($this->env, $this->source,         // line 135
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135)]), "target" => "#auditlog-table", "totalItems" => twig_get_attribute($this->env, $this->source,         // line 137
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 137, $this->source); })()), "total", [], "any", false, false, false, 137)]);
        // line 138
        echo "
  <!--/ auditlog -->
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Auditlog/_list.html.twig";
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
        return array (  350 => 138,  348 => 137,  347 => 135,  346 => 133,  345 => 132,  344 => 131,  339 => 128,  325 => 127,  318 => 123,  311 => 121,  306 => 120,  304 => 119,  299 => 117,  296 => 116,  292 => 115,  288 => 114,  282 => 111,  278 => 110,  271 => 108,  267 => 107,  256 => 104,  250 => 103,  247 => 102,  244 => 101,  241 => 100,  236 => 99,  233 => 98,  231 => 97,  228 => 96,  225 => 95,  222 => 94,  219 => 93,  216 => 92,  213 => 91,  210 => 90,  207 => 89,  190 => 88,  185 => 85,  183 => 83,  182 => 82,  181 => 78,  178 => 77,  176 => 75,  175 => 74,  174 => 70,  171 => 69,  169 => 67,  168 => 66,  167 => 62,  160 => 58,  148 => 49,  144 => 48,  137 => 45,  127 => 38,  122 => 36,  117 => 33,  110 => 31,  108 => 30,  100 => 29,  96 => 28,  91 => 26,  86 => 23,  79 => 21,  77 => 20,  69 => 19,  65 => 18,  60 => 16,  55 => 13,  53 => 12,  45 => 9,  40 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Auditlog/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Auditlog\\_list.html.twig");
    }
}
