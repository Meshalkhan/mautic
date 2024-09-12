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

/* @MauticLead/Timeline/plugin_table.html.twig */
class __TwigTemplate_565898aed2e589c2d9e52dec4c1c9db9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "isXmlHttpRequest", [], "any", false, false, false, 1)) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticLead/Timeline/plugin_table.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  ";
        $context["leadId"] = ((array_key_exists("lead", $context)) ? (twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)) : (null));
        // line 5
        echo "
  ";
        // line 6
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "isXmlHttpRequest", [], "any", false, false, false, 6)) {
            // line 7
            echo "    <style>.container { margin: auto !important; }</style>
    <!-- filter form -->
    <form method=\"post\" action=\"";
            // line 9
            if (array_key_exists("lead", $context)) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_plugin_timeline_view", ["leadId" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "integration" => (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 9, $this->source); })())]), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_plugin_timeline_index", ["integration" => (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 9, $this->source); })())]), "html", null, true);
            }
            echo "\" class=\"panel\" id=\"timeline-filters\">
        <div class=\"form-control-icon pa-xs\">
            <input type=\"text\" class=\"form-control bdr-w-0\" name=\"search\" id=\"search\" placeholder=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.placeholder"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 11, $this->source); })()), "filters", [], "any", false, false, false, 11), "search", [], "any", false, false, false, 11));
            echo "\">
            <span class=\"the-icon ri-search-line text-muted mt-xs\"></span>
        </div>
        ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "types", [], "any", true, true, false, 14) && is_iterable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 14, $this->source); })()), "types", [], "any", false, false, false, 14)))) {
                // line 15
                echo "            <div class=\"history-search panel-footer text-muted\">
                <div class=\"col-xs-6\">
                    <select name=\"includeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\" data-placeholder=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.include.placeholder"), "html", null, true);
                echo "\">
                        ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 18, $this->source); })()), "types", [], "any", false, false, false, 18));
                foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                    // line 19
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $context["typeKey"]);
                    echo "\" ";
                    if (twig_in_filter($context["typeKey"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 19, $this->source); })()), "filters", [], "any", false, false, false, 19), "includeEvents", [], "any", false, false, false, 19))) {
                        echo "selected";
                    }
                    echo ">
                                ";
                    // line 20
                    echo twig_escape_filter($this->env, $context["typeName"], "html", null, true);
                    echo "
                            </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['typeKey'], $context['typeName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                    </select>
                </div>
                <div class=\"col-xs-6\">
                    <select name=\"excludeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\" data-placeholder=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.exclude.placeholder"), "html", null, true);
                echo "\">
                        ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 27, $this->source); })()), "types", [], "any", false, false, false, 27));
                foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                    // line 28
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $context["typeKey"]);
                    echo "\" ";
                    if (twig_in_filter($context["typeKey"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 28, $this->source); })()), "filters", [], "any", false, false, false, 28), "excludeEvents", [], "any", false, false, false, 28))) {
                        echo "selected";
                    }
                    echo ">
                                ";
                    // line 29
                    echo twig_escape_filter($this->env, $context["typeName"], "html", null, true);
                    echo "
                            </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['typeKey'], $context['typeName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "                    </select>
                </div>
            </div>
        ";
            }
            // line 36
            echo "
        ";
            // line 37
            if (array_key_exists("lead", $context)) {
                // line 38
                echo "            <input type=\"hidden\" name=\"leadId\" id=\"leadId\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38));
                echo "\"/>
        ";
            }
            // line 40
            echo "    </form>

    <script>
        mauticLang['showMore'] = '";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.show"), "html", null, true);
            echo "';
        mauticLang['hideMore'] = '";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.hide"), "html", null, true);
            echo "';

        var timelineForm = mQuery('#timeline-filters');
        if (timelineForm.length) {
            timelineForm.on('change', function() {
                timelineForm.submit();
            }).on('keyup', function() {
                timelineForm.delay(200).submit();
            }).on('submit', function(e) {
                e.preventDefault();
                Mautic.refreshLeadTimeline(timelineForm);
            });

        }
    </script>

    <div id=\"timeline-table\">
  ";
        }
        // line 62
        echo "
  ";
        // line 63
        $context["baseUrl"] = ((array_key_exists("lead", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_plugin_timeline_view", ["leadId" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63), "integration" => (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 63, $this->source); })())])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_plugin_timeline_index", ["integration" => (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 63, $this->source); })())])));
        // line 64
        echo "  <div class=\"table-responsive\">
      <div class=\"tl-header\">
          ";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.displaying_events", ["%total%" => twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 66, $this->source); })()), "total", [], "any", false, false, false, 66)]), "html", null, true);
        echo "
          ";
        // line 67
        if (array_key_exists("lead", $context)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.displaying_events_for_contact", ["%contact%" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 67, $this->source); })()), "name", [], "any", false, false, false, 67), "%id%" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "html", null, true);
        }
        // line 68
        echo "          (<span class=\"tl-new\">";
        echo twig_escape_filter($this->env, (isset($context["newCount"]) || array_key_exists("newCount", $context) ? $context["newCount"] : (function () { throw new RuntimeError('Variable "newCount" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.events_new"), "html", null, true);
        echo ")
      </div>
      <table class=\"table table-hover\" id=\"contact-timeline\">
          <thead>
          <tr>
              <th class=\"timeline-icon\">
                  <a class=\"btn btn-sm btn-nospin btn-default\" data-activate-details=\"all\" data-toggle=\"tooltip\" title=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.toggle_all_details"), "html", null, true);
        echo "\">
                      <span class=\"fa fa-fw ri-corner-right-down-line\"></span>
                  </a>
              </th>
              ";
        // line 78
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "eventLabel", "text" => "mautic.lead.timeline.event_name", "class" => "timeline-name", "sessionVar" => (("lead." .         // line 82
(isset($context["leadId"]) || array_key_exists("leadId", $context) ? $context["leadId"] : (function () { throw new RuntimeError('Variable "leadId" does not exist.', 82, $this->source); })())) . ".timeline"), "baseUrl" =>         // line 83
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 83, $this->source); })()), "target" => "#timeline-table"]);
        // line 85
        echo "

              ";
        // line 87
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "eventType", "text" => "mautic.lead.timeline.event_type", "class" => "visible-md visible-lg timeline-type", "sessionVar" => (("lead." .         // line 91
(isset($context["leadId"]) || array_key_exists("leadId", $context) ? $context["leadId"] : (function () { throw new RuntimeError('Variable "leadId" does not exist.', 91, $this->source); })())) . ".timeline"), "baseUrl" =>         // line 92
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 92, $this->source); })()), "target" => "#timeline-table"]);
        // line 94
        echo "

              ";
        // line 96
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "timestamp", "text" => "mautic.lead.timeline.event_timestamp", "class" => "visible-md visible-lg timeline-timestamp", "sessionVar" => (("lead." .         // line 100
(isset($context["leadId"]) || array_key_exists("leadId", $context) ? $context["leadId"] : (function () { throw new RuntimeError('Variable "leadId" does not exist.', 100, $this->source); })())) . ".timeline"), "baseUrl" =>         // line 101
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 101, $this->source); })()), "target" => "#timeline-table"]);
        // line 103
        echo "
          </tr>
          <tbody>
          ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 106, $this->source); })()), "events", [], "any", false, false, false, 106));
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
            // line 107
            echo "              ";
            $context["icon"] = ((twig_get_attribute($this->env, $this->source, $context["event"], "icon", [], "any", true, true, false, 107)) ? (twig_get_attribute($this->env, $this->source, $context["event"], "icon", [], "any", false, false, false, 107)) : ("fa-history"));
            // line 108
            echo "              ";
            $context["eventLabel"] = ((twig_get_attribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", true, true, false, 108)) ? (twig_get_attribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", false, false, false, 108)) : (twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 108)));
            // line 109
            echo "              ";
            if (is_iterable((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 109, $this->source); })()))) {
                // line 110
                echo "                  ";
                ob_start(function () { return ''; });
                // line 111
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 111, $this->source); })()), "href", [], "any", false, false, false, 111), "html", null, true);
                echo "\" ";
                if ( !twig_get_attribute($this->env, $this->source, ($context["eventLabel"] ?? null), "isExternal", [], "any", true, true, false, 111)) {
                    echo "data-toggle=\"ajax\"";
                } else {
                    echo "target=\"_new\"";
                }
                echo ">";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 112, $this->source); })()), "label", [], "any", false, false, false, 112), "html", null, true);
                // line 113
                echo "</a>
                  ";
                $context["eventLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 115
                echo "              ";
            }
            // line 116
            echo "
              ";
            // line 117
            $context["details"] = "";
            // line 118
            echo "              ";
            if ((array_key_exists("lead", $context) && twig_get_attribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", true, true, false, 118))) {
                // line 119
                echo "                  ";
                $context["details"] = twig_trim_filter(twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 119), ["event" => $context["event"], "lead" => (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 119, $this->source); })())], false, true));
                // line 120
                echo "              ";
            }
            // line 121
            echo "
              <tr class=\"timeline-row ";
            // line 122
            echo twig_escape_filter($this->env, twig_cycle(["", "timeline-row-highlighted"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 122)), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["event"], "feature", [], "any", true, true, false, 122)) {
                echo "timeline-featured";
            }
            echo "\">
                  <td class=\"timeline-icon\">
                      <a data-activate-details=\"";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 124), "html", null, true);
            echo "\" class=\"btn btn-sm btn-nospin btn-default ";
            if (twig_test_empty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 124, $this->source); })()))) {
                echo "disabled";
            }
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.toggle_details"), "html", null, true);
            echo "\" data-target=\"timeline-details-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 124), "html", null, true);
            echo "\">
                          <span class=\"fa fa-fw ";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 125, $this->source); })()), "html", null, true);
            echo "\"></span>
                      </a>
                  </td>
                  <td class=\"timeline-name\">";
            // line 128
            echo twig_escape_filter($this->env, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 128, $this->source); })()), "html", null, true);
            echo "</td>
                  <td class=\"timeline-type\">";
            // line 129
            if (twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", true, true, false, 129)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 129), "html", null, true);
            }
            echo "</td>
                  <td class=\"timeline-timestamp\">";
            // line 130
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(twig_get_attribute($this->env, $this->source, $context["event"], "timestamp", [], "any", false, false, false, 130), "local", "Y-m-d H:i:s", true);
            echo "</td>
              </tr>
              ";
            // line 132
            if ( !twig_test_empty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 132, $this->source); })()))) {
                // line 133
                echo "                  <tr class=\"timeline-row ";
                echo twig_escape_filter($this->env, twig_cycle(["", "timeline-row-highlighted"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 133)), "html", null, true);
                echo " timeline-details hide\" id=\"timeline-details-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 133), "html", null, true);
                echo "\">
                      <td colspan=\"4\">
                          ";
                // line 135
                echo (isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 135, $this->source); })());
                echo "
                      </td>
                  </tr>
              ";
            }
            // line 139
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
        // line 140
        echo "          </tbody>
      </table>
  </div>
  <!--/ timeline -->

  ";
        // line 145
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "request", [], "any", false, false, false, 145), "isXmlHttpRequest", [], "any", false, false, false, 145)) {
            // line 146
            echo "    </div>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Timeline/plugin_table.html.twig";
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
        return array (  396 => 146,  394 => 145,  387 => 140,  373 => 139,  366 => 135,  358 => 133,  356 => 132,  351 => 130,  345 => 129,  341 => 128,  335 => 125,  323 => 124,  314 => 122,  311 => 121,  308 => 120,  305 => 119,  302 => 118,  300 => 117,  297 => 116,  294 => 115,  290 => 113,  288 => 112,  278 => 111,  275 => 110,  272 => 109,  269 => 108,  266 => 107,  249 => 106,  244 => 103,  242 => 101,  241 => 100,  240 => 96,  236 => 94,  234 => 92,  233 => 91,  232 => 87,  228 => 85,  226 => 83,  225 => 82,  224 => 78,  217 => 74,  205 => 68,  201 => 67,  197 => 66,  193 => 64,  191 => 63,  188 => 62,  167 => 44,  163 => 43,  158 => 40,  152 => 38,  150 => 37,  147 => 36,  141 => 32,  132 => 29,  123 => 28,  119 => 27,  115 => 26,  110 => 23,  101 => 20,  92 => 19,  88 => 18,  84 => 17,  80 => 15,  78 => 14,  70 => 11,  61 => 9,  57 => 7,  55 => 6,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Timeline/plugin_table.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Timeline\\plugin_table.html.twig");
    }
}
