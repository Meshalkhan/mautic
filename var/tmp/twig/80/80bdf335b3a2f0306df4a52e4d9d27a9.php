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

/* @MauticLead/Auditlog/_list.html.twig */
class __TwigTemplate_65cd075d34bf1985b087046be6ad3d78 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<!-- filter form -->
<form method=\"post\" action=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_auditlog_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
        yield "\" class=\"panel\" id=\"auditlog-filters\">
    <div class=\"form-control-icon pa-xs\">
        <input type=\"text\" class=\"form-control bdr-w-0\" name=\"search\" id=\"search\" placeholder=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.placeholder"), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 9, $this->source); })()), "filters", [], "array", false, false, false, 9), "search", [], "array", false, false, false, 9));
        yield "\">
        <span class=\"the-icon ri-search-line text-muted mt-xs\"></span>
    </div>
    ";
        // line 12
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "types", [], "any", true, true, false, 12) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 12, $this->source); })()), "types", [], "any", false, false, false, 12)))) {
            // line 13
            yield "        <div class=\"history-search panel-footer text-muted\">
            <div class=\"row\">
                <div class=\"col-sm-5 mna-3\">
                    <label class=\"pt-lg\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.include.placeholder"), "html", null, true);
            yield "</label>
                    <select name=\"includeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\"\">
                        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 18, $this->source); })()), "types", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                // line 19
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeKey"], "html", null, true);
                yield "\" ";
                if (CoreExtension::inFilter($context["typeKey"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 19, $this->source); })()), "filters", [], "any", false, false, false, 19), "includeEvents", [], "any", false, false, false, 19))) {
                    yield "selected";
                }
                yield ">";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeName"], "html", null, true);
                // line 21
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['typeKey'], $context['typeName'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "                    </select>
                </div>
                <div class=\"col-sm-5 mna-3\">
                    <label class=\"pt-lg\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.exclude.placeholder"), "html", null, true);
            yield "</label>
                    <select name=\"excludeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\">
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 28, $this->source); })()), "types", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                // line 29
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeKey"], "html", null, true);
                yield "\" ";
                if (CoreExtension::inFilter($context["typeKey"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 29, $this->source); })()), "filters", [], "any", false, false, false, 29), "excludeEvents", [], "any", false, false, false, 29))) {
                    yield "selected";
                }
                yield ">";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeName"], "html", null, true);
                // line 31
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['typeKey'], $context['typeName'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "                    </select>
                </div>
                <div class=\"col-sm-2 mt-lg\">
                    <a class=\"btn btn-default btn-block mt-lg\" href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_contact_auditlog_export_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" data-toggle=\"download\">
                        <span>
                            <i class=\"ri-download-line\"></i> <span>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.export"), "html", null, true);
            yield "</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    ";
        }
        // line 45
        yield "    <input type=\"hidden\" name=\"leadId\" id=\"leadId\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45));
        yield "\" />
</form>
<script>
    mauticLang['showMore'] = '";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.show"), "html", null, true);
        yield "';
    mauticLang['hideMore'] = '";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.hide"), "html", null, true);
        yield "';
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.toggle_all_details"), "html", null, true);
        yield "\">
                      <span class=\"fa fa-fw ri-corner-right-down-line\"></span>
                  </a>
              </th>
              ";
        // line 62
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "userName", "text" => "mautic.lead.timeline.user_name", "class" => "timeline-name", "sessionVar" => (("lead." . CoreExtension::getAttribute($this->env, $this->source,         // line 66
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)) . ".auditlog"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_auditlog_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,         // line 67
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "target" => "#auditlog-table"]);
        // line 69
        yield "
              ";
        // line 70
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "action", "text" => "mautic.lead.timeline.event_type", "class" => "visible-md visible-lg timeline-type", "sessionVar" => (("lead." . CoreExtension::getAttribute($this->env, $this->source,         // line 74
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)) . ".auditlog"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_auditlog_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,         // line 75
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75)]), "target" => "#auditlog-table"]);
        // line 77
        yield "
              ";
        // line 78
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "dateAdded", "text" => "mautic.lead.timeline.event_timestamp", "class" => "visible-md visible-lg timeline-timestamp", "sessionVar" => (("lead." . CoreExtension::getAttribute($this->env, $this->source,         // line 82
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82)) . ".auditlog"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_auditlog_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,         // line 83
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)]), "target" => "#auditlog-table"]);
        // line 85
        yield "
          </tr>
          <tbody>
          ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 88, $this->source); })()), "events", [], "any", false, false, false, 88));
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
            yield "              ";
            $context["counter"] = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 89) + 1);
            // line 90
            yield "              ";
            $context["icon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "icon", [], "any", true, true, false, 90)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "icon", [], "any", false, false, false, 90), "fa-history")) : ("fa-history"));
            // line 91
            yield "              ";
            $context["eventLabel"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", false, false, false, 91), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 91))) : (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 91)));
            // line 92
            yield "              ";
            if (is_iterable((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 92, $this->source); })()))) {
                // line 93
                yield "                  ";
                $context["linkType"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["eventLabel"] ?? null), "isExternal", [], "any", true, true, false, 93)) ? ("data-toggle=\"ajax\"") : ("target=\"_new\""));
                // line 94
                yield "                  ";
                $context["eventLabel"] = (((((("<a href=\"" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 94, $this->source); })()), "href", [], "any", false, false, false, 94)) . "\" ") . (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 94, $this->source); })())) . ">") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 94, $this->source); })()), "label", [], "any", false, false, false, 94)) . "</a>");
                // line 95
                yield "              ";
            }
            // line 96
            yield "
              ";
            // line 97
            $context["rowStripe"] = Twig\Extension\CoreExtension::cycle(["", "timeline-row-highlighted"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 97));
            // line 98
            yield "              ";
            $context["hasDetails"] = false;
            // line 99
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "details", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 100
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", true, true, false, 100) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "details", [], "any", false, false, false, 100)) > 0))) {
                    // line 101
                    yield "                      ";
                    $context["hasDetails"] = true;
                    // line 102
                    yield "                  ";
                }
                // line 103
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            yield "              <tr class=\"timeline-row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rowStripe"]) || array_key_exists("rowStripe", $context) ? $context["rowStripe"] : (function () { throw new RuntimeError('Variable "rowStripe" does not exist.', 104, $this->source); })()), "html", null, true);
            yield " ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "featured", [], "any", true, true, false, 104)) {
                yield "timeline-featured";
            }
            yield "\">
                  <td class=\"timeline-icon\">
                      <a href=\"javascript:void(0);\"
                         data-activate-details=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 107, $this->source); })()), "html", null, true);
            yield "\"
                         class=\"btn btn-sm btn-nospin btn-default ";
            // line 108
            if (( !CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", true, true, false, 108) || ((isset($context["hasDetails"]) || array_key_exists("hasDetails", $context) ? $context["hasDetails"] : (function () { throw new RuntimeError('Variable "hasDetails" does not exist.', 108, $this->source); })()) == false))) {
                yield "disabled";
            }
            yield "\"
                         data-toggle=\"tooltip\"
                         title=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.toggle_details"), "html", null, true);
            yield "\">
                          <span class=\"fa fa-fw ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 111, $this->source); })()), "html", null, true);
            yield "\"></span>
                      </a>
                  </td>
                  <td class=\"timeline-name\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 114, $this->source); })()), "html", null, true);
            yield "</td>
                  <td class=\"timeline-type\">";
            // line 115
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", true, true, false, 115)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.event." . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 115))), "html", null, true);
            }
            // line 116
            yield "              </td>
                  <td class=\"timeline-timestamp\">";
            // line 117
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "timestamp", [], "any", false, false, false, 117), "local", "Y-m-d H:i:s", true);
            yield "</td>
              </tr>
              ";
            // line 119
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 119) && ((isset($context["hasDetails"]) || array_key_exists("hasDetails", $context) ? $context["hasDetails"] : (function () { throw new RuntimeError('Variable "hasDetails" does not exist.', 119, $this->source); })()) == true))) {
                // line 120
                yield "                  <!-- contentTemplate: \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 120), "html", null, true);
                yield "\" -->
                  <tr class=\"timeline-row ";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rowStripe"]) || array_key_exists("rowStripe", $context) ? $context["rowStripe"] : (function () { throw new RuntimeError('Variable "rowStripe" does not exist.', 121, $this->source); })()), "html", null, true);
                yield " timeline-details hide\" id=\"auditlog-details-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 121, $this->source); })()), "html", null, true);
                yield "\">
                      <td colspan=\"4\">
                        ";
                // line 123
                yield Twig\Extension\CoreExtension::include($this->env, $context, [CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 123), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 123)], ["event" => $context["event"], "lead" => (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 123, $this->source); })())]);
                yield "
                      </td>
                  </tr>
              ";
            }
            // line 127
            yield "          ";
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
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "          </tbody>
      </table>
  </div>
  ";
        // line 131
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["page" => CoreExtension::getAttribute($this->env, $this->source,         // line 132
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 132, $this->source); })()), "page", [], "any", false, false, false, 132), "fixedPages" => CoreExtension::getAttribute($this->env, $this->source,         // line 133
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 133, $this->source); })()), "maxPages", [], "any", false, false, false, 133), "fixedLimit" => true, "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_auditlog_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,         // line 135
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135)]), "target" => "#auditlog-table", "totalItems" => CoreExtension::getAttribute($this->env, $this->source,         // line 137
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 137, $this->source); })()), "total", [], "any", false, false, false, 137)]);
        // line 138
        yield "
  <!--/ auditlog -->
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Auditlog/_list.html.twig";
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
        return array (  355 => 138,  353 => 137,  352 => 135,  351 => 133,  350 => 132,  349 => 131,  344 => 128,  330 => 127,  323 => 123,  316 => 121,  311 => 120,  309 => 119,  304 => 117,  301 => 116,  297 => 115,  293 => 114,  287 => 111,  283 => 110,  276 => 108,  272 => 107,  261 => 104,  255 => 103,  252 => 102,  249 => 101,  246 => 100,  241 => 99,  238 => 98,  236 => 97,  233 => 96,  230 => 95,  227 => 94,  224 => 93,  221 => 92,  218 => 91,  215 => 90,  212 => 89,  195 => 88,  190 => 85,  188 => 83,  187 => 82,  186 => 78,  183 => 77,  181 => 75,  180 => 74,  179 => 70,  176 => 69,  174 => 67,  173 => 66,  172 => 62,  165 => 58,  153 => 49,  149 => 48,  142 => 45,  132 => 38,  127 => 36,  122 => 33,  115 => 31,  113 => 30,  105 => 29,  101 => 28,  96 => 26,  91 => 23,  84 => 21,  82 => 20,  74 => 19,  70 => 18,  65 => 16,  60 => 13,  58 => 12,  50 => 9,  45 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Auditlog/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Auditlog\\_list.html.twig");
    }
}
