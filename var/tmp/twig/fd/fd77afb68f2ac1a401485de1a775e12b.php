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

/* @MauticLead/Timeline/plugin_list.html.twig */
class __TwigTemplate_1e942f8886a45ace1121b8e013e05e55 extends Template
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
        // line 8
        return $this->loadTemplate((((array_key_exists("tmpl", $context) && ("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 8, $this->source); })())))) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticLead/Timeline/plugin_list.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        $context["leadId"] = ((array_key_exists("lead", $context)) ? (twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)) : (null));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "  ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "isXmlHttpRequest", [], "any", false, false, false, 11)) {
            // line 12
            echo "    <style>.container { margin: auto !important; }</style>
    <!-- filter form -->
    <form method=\"post\" action=\"";
            // line 14
            if (array_key_exists("lead", $context)) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_plugin_timeline_view", ["leadId" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "integration" => (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 14, $this->source); })())]), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_plugin_timeline_index", ["integration" => (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 14, $this->source); })())]), "html", null, true);
            }
            echo "\" class=\"panel\" id=\"timeline-filters\">
        <div class=\"form-control-icon pa-xs\">
            <input type=\"text\" class=\"form-control bdr-w-0\" name=\"search\" id=\"search\" placeholder=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.placeholder"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 16, $this->source); })()), "filters", [], "any", false, false, false, 16), "search", [], "any", false, false, false, 16));
            echo "\">
            <span class=\"the-icon ri-search-line text-muted mt-xs\"></span>
        </div>
        ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "types", [], "any", true, true, false, 19) && is_iterable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 19, $this->source); })()), "types", [], "any", false, false, false, 19)))) {
                // line 20
                echo "            <div class=\"history-search panel-footer text-muted\">
                <div class=\"col-xs-6\">
                    <select name=\"includeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\" data-placeholder=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.include.placeholder"), "html", null, true);
                echo "\">
                        ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 23, $this->source); })()), "types", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                    // line 24
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $context["typeKey"]);
                    echo "\" ";
                    if (twig_in_filter($context["typeKey"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 24, $this->source); })()), "filters", [], "any", false, false, false, 24), "includeEvents", [], "any", false, false, false, 24))) {
                        echo "selected";
                    }
                    echo ">
                                ";
                    // line 25
                    echo twig_escape_filter($this->env, $context["typeName"], "html", null, true);
                    echo "
                            </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['typeKey'], $context['typeName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "                    </select>
                </div>
                <div class=\"col-xs-6\">
                    <select name=\"excludeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\" data-placeholder=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.exclude.placeholder"), "html", null, true);
                echo "\">
                        ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 32, $this->source); })()), "types", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                    // line 33
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $context["typeKey"]);
                    echo "\" ";
                    if (twig_in_filter($context["typeKey"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 33, $this->source); })()), "filters", [], "any", false, false, false, 33), "excludeEvents", [], "any", false, false, false, 33))) {
                        echo "selected";
                    }
                    echo ">
                                ";
                    // line 34
                    echo twig_escape_filter($this->env, $context["typeName"], "html", null, true);
                    echo "
                            </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['typeKey'], $context['typeName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                    </select>
                </div>
            </div>
        ";
            }
            // line 41
            echo "
        ";
            // line 42
            if (array_key_exists("lead", $context)) {
                // line 43
                echo "            <input type=\"hidden\" name=\"leadId\" id=\"leadId\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43));
                echo "\"/>
        ";
            }
            // line 45
            echo "    </form>

    <script>
        mauticLang['showMore'] = '";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.show"), "html", null, true);
            echo "';
        mauticLang['hideMore'] = '";
            // line 49
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
        // line 67
        echo "
  <style>
      .col-xs-6 {
          padding-left: 2px;
          padding-right: 2px;
      }

      span.timeline-icon {
          float: right;
          margin-top: -5px;
      }

      span.timeline-lead {
          font-weight: bold;
      }

      .timeline-row {
          padding: 15px;
          border: 1px solid lightblue;
          margin: 10px;
      }

      .timeline-row span {
          display: inline-block;
          vertical-align: middle;
      }

      span.timeline-name {
          display: block;
      }

      div.timeline-details {
          border-top: 1px solid lightgray;
          margin-top: 10px;
          padding-top: 10px;
      }

      div.tl-header {
          color: #333;
          background: #eee;
          padding: 5px 10px;
      }

      div.tl-header .tl-new {
          font-weight: bold;
          color #300;
      }

      .timeline-row-highlighted {
          background-color: #fafafa;
      }

      .timeline-row.timeline-featured {
          background: #eee;
      }

      .timeline-row.tr-new {
          background: #FFF2D4;
      }

      span.timeline-icon {
          width: 25px;
      }

  </style>
  <div class=\"tl-header\">
      ";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.displaying_events", ["%total%" => twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 133, $this->source); })()), "total", [], "any", false, false, false, 133)]), "html", null, true);
        echo "
      ";
        // line 134
        if (array_key_exists("lead", $context)) {
            // line 135
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.displaying_events_for_contact", ["%contact%" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 135, $this->source); })()), "name", [], "any", false, false, false, 135), "%id%" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135)]), "html", null, true);
            echo "
      ";
        }
        // line 137
        echo "      (<span class=\"tl-new\">";
        echo twig_escape_filter($this->env, (isset($context["newCount"]) || array_key_exists("newCount", $context) ? $context["newCount"] : (function () { throw new RuntimeError('Variable "newCount" does not exist.', 137, $this->source); })()), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.events_new"), "html", null, true);
        echo ")
  </div>
  <!-- timeline -->
  <div class=\"event-list\" id=\"timeline-container\">
      ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["event"], "events", [], "any", false, false, false, 141));
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
            // line 142
            echo "          ";
            $context["icon"] = ((twig_get_attribute($this->env, $this->source, $context["event"], "icon", [], "any", true, true, false, 142)) ? (twig_get_attribute($this->env, $this->source, $context["event"], "icon", [], "any", false, false, false, 142)) : ("fa-history"));
            // line 143
            echo "          ";
            $context["eventLabel"] = ((twig_get_attribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", true, true, false, 143)) ? (twig_get_attribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", false, false, false, 143)) : (twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 143)));
            // line 144
            echo "          ";
            if (is_iterable((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 144, $this->source); })()))) {
                // line 145
                echo "              ";
                ob_start(function () { return ''; });
                // line 146
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 146, $this->source); })()), "href", [], "any", false, false, false, 146), "html", null, true);
                echo "\" ";
                if ( !twig_get_attribute($this->env, $this->source, ($context["eventLabel"] ?? null), "isExternal", [], "any", true, true, false, 146)) {
                    echo "data-toggle=\"ajax\"";
                } else {
                    echo "target=\"_new\"";
                }
                echo ">";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 147, $this->source); })()), "label", [], "any", false, false, false, 147), "html", null, true);
                // line 148
                echo "</a>
              ";
                $context["eventLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 150
                echo "          ";
            }
            // line 151
            echo "
          ";
            // line 152
            $context["details"] = "";
            // line 153
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", true, true, false, 153)) {
                // line 154
                echo "              ";
                $context["details"] = twig_trim_filter(twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 154), ["event" => $context["event"]], false, true));
                // line 155
                echo "          ";
            }
            // line 156
            echo "
          ";
            // line 157
            $context["newCount"] = ((isset($context["newCount"]) || array_key_exists("newCount", $context) ? $context["newCount"] : (function () { throw new RuntimeError('Variable "newCount" does not exist.', 157, $this->source); })()) - 1);
            // line 158
            echo "          <div class=\"timeline-row ";
            echo twig_escape_filter($this->env, twig_cycle(["", "timeline-row-highlighted"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 158)), "html", null, true);
            echo " ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["event"], "featured", [], "any", false, false, false, 158))) {
                echo "timeline-featured";
            }
            echo " ";
            if (((isset($context["newCount"]) || array_key_exists("newCount", $context) ? $context["newCount"] : (function () { throw new RuntimeError('Variable "newCount" does not exist.', 158, $this->source); })()) > 0)) {
                echo "tr-new";
            }
            echo "\">
              <span class=\"timeline-row-id hide\">";
            // line 159
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(twig_get_attribute($this->env, $this->source, $context["event"], "timestamp", [], "any", false, false, false, 159));
            echo " on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "timestamp", [], "any", false, false, false, 159), "Y-m-d H:i:s"), "html", null, true);
            echo "</span>
              <span class=\"timeline-row-lead-id hide\">";
            // line 160
            if (twig_get_attribute($this->env, $this->source, $context["event"], "leadId", [], "any", true, true, false, 160)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "leadId", [], "any", false, false, false, 160), "html", null, true);
            }
            echo "</span>
              <div class=\"btn-group\" role=\"group\" style=\"float: right;\">
                  <span class=\"timeline-icon\">
                      <a href=\"javascript:void(0);\"
                         onclick=\"mQuery('#timeline-details-";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 164), "html", null, true);
            echo "').toggleClass('hide')\"
                         data-activate-details=\"";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 165), "html", null, true);
            echo "\"
                         class=\"btn btn-xs btn-nospin btn-default ";
            // line 166
            if (twig_test_empty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 166, $this->source); })()))) {
                echo "disabled";
            }
            echo "\"
                         data-toggle=\"tooltip\"
                         title=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.toggle_details"), "html", null, true);
            echo "\">
                          <span class=\"fa fa-fw ";
            // line 169
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 169, $this->source); })()), "html", null, true);
            echo "\"></span>
                      </a>
                  </span>

                  <span class=\"timeline-icon\">
                      <a href=\"javascript:void(0);\" class=\"btn btn-xs btn-nospin btn-default\" data-toggle=\"tooltip\" onclick=\"mQuery(this).toggleClass('btn-warning')\" title=\"Mute notifications\">
                          <span class=\"fa fa-fw fa-bell-slash-o\"></span>
                      </a>
                  </span>
              </div>
              ";
            // line 179
            if (twig_get_attribute($this->env, $this->source, $context["event"], "leadEmail", [], "any", true, true, false, 179)) {
                // line 180
                echo "                  <span class=\"timeline-lead ellipsis\"><a href=\"mailto:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "leadEmail", [], "any", false, false, false, 180), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "leadEmail", [], "any", false, false, false, 180), "html", null, true);
                echo "\" target=\"_new\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "leadName", [], "any", false, false, false, 180), "html", null, true);
                echo "</a></span>
                  <span class=\"timeline-timestamp\">";
                // line 181
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(twig_get_attribute($this->env, $this->source, $context["event"], "timestamp", [], "any", false, false, false, 181));
                echo " on ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "timestamp", [], "any", false, false, false, 181), "Y-m-d H:i:s"), "html", null, true);
                echo "</span>
              ";
            }
            // line 183
            echo "              <br/>

              <span class=\"timeline-type\">";
            // line 185
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", true, true, false, 185)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 185), "")) : ("")), "html", null, true);
            echo ":</span>
              <br/>

              ";
            // line 188
            if (((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 188, $this->source); })()) != twig_get_attribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 188))) {
                // line 189
                echo "                  <span class=\"timeline-name ellipsis\">";
                echo twig_escape_filter($this->env, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 189, $this->source); })()), "html", null, true);
                echo "</span>
              ";
            }
            // line 191
            echo "
              ";
            // line 192
            if ( !twig_test_empty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 192, $this->source); })()))) {
                // line 193
                echo "                  <div class=\"timeline-details hide\" id=\"timeline-details-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 193), "html", null, true);
                echo "\">
                      ";
                // line 194
                echo (isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 194, $this->source); })());
                echo "
                  </div>
              ";
            }
            // line 197
            echo "          </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "  </div>
  <!--/ timeline -->

  ";
        // line 202
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 202, $this->source); })()), "request", [], "any", false, false, false, 202), "isXmlHttpRequest", [], "any", false, false, false, 202)) {
            // line 203
            echo "    </div>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Timeline/plugin_list.html.twig";
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
        return array (  477 => 203,  475 => 202,  470 => 199,  455 => 197,  449 => 194,  444 => 193,  442 => 192,  439 => 191,  433 => 189,  431 => 188,  425 => 185,  421 => 183,  414 => 181,  405 => 180,  403 => 179,  390 => 169,  386 => 168,  379 => 166,  375 => 165,  371 => 164,  362 => 160,  356 => 159,  343 => 158,  341 => 157,  338 => 156,  335 => 155,  332 => 154,  329 => 153,  327 => 152,  324 => 151,  321 => 150,  317 => 148,  315 => 147,  305 => 146,  302 => 145,  299 => 144,  296 => 143,  293 => 142,  276 => 141,  266 => 137,  260 => 135,  258 => 134,  254 => 133,  186 => 67,  165 => 49,  161 => 48,  156 => 45,  150 => 43,  148 => 42,  145 => 41,  139 => 37,  130 => 34,  121 => 33,  117 => 32,  113 => 31,  108 => 28,  99 => 25,  90 => 24,  86 => 23,  82 => 22,  78 => 20,  76 => 19,  68 => 16,  59 => 14,  55 => 12,  52 => 11,  48 => 10,  44 => 8,  42 => 7,  35 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Timeline/plugin_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Timeline\\plugin_list.html.twig");
    }
}
