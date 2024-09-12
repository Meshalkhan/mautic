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

/* @MauticLead/Timeline/plugin_list.html.twig */
class __TwigTemplate_3d144bdba9aabe1cd24a2c35c5ba6ab6 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 8
        return $this->loadTemplate((((array_key_exists("tmpl", $context) && ("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 8, $this->source); })())))) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticLead/Timeline/plugin_list.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        $context["leadId"] = ((array_key_exists("lead", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)) : (null));
        // line 8
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "  ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "isXmlHttpRequest", [], "any", false, false, false, 11)) {
            // line 12
            yield "    <style>.container { margin: auto !important; }</style>
    <!-- filter form -->
    <form method=\"post\" action=\"";
            // line 14
            if (array_key_exists("lead", $context)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_plugin_timeline_view", ["leadId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "integration" => (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 14, $this->source); })())]), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_plugin_timeline_index", ["integration" => (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 14, $this->source); })())]), "html", null, true);
            }
            yield "\" class=\"panel\" id=\"timeline-filters\">
        <div class=\"form-control-icon pa-xs\">
            <input type=\"text\" class=\"form-control bdr-w-0\" name=\"search\" id=\"search\" placeholder=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.placeholder"), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 16, $this->source); })()), "filters", [], "any", false, false, false, 16), "search", [], "any", false, false, false, 16));
            yield "\">
            <span class=\"the-icon ri-search-line text-muted mt-xs\"></span>
        </div>
        ";
            // line 19
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "types", [], "any", true, true, false, 19) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 19, $this->source); })()), "types", [], "any", false, false, false, 19)))) {
                // line 20
                yield "            <div class=\"history-search panel-footer text-muted\">
                <div class=\"col-xs-6\">
                    <select name=\"includeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\" data-placeholder=\"";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.include.placeholder"), "html", null, true);
                yield "\">
                        ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 23, $this->source); })()), "types", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                    // line 24
                    yield "                            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeKey"]);
                    yield "\" ";
                    if (CoreExtension::inFilter($context["typeKey"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 24, $this->source); })()), "filters", [], "any", false, false, false, 24), "includeEvents", [], "any", false, false, false, 24))) {
                        yield "selected";
                    }
                    yield ">
                                ";
                    // line 25
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeName"], "html", null, true);
                    yield "
                            </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['typeKey'], $context['typeName'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                yield "                    </select>
                </div>
                <div class=\"col-xs-6\">
                    <select name=\"excludeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\" data-placeholder=\"";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.exclude.placeholder"), "html", null, true);
                yield "\">
                        ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 32, $this->source); })()), "types", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                    // line 33
                    yield "                            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeKey"]);
                    yield "\" ";
                    if (CoreExtension::inFilter($context["typeKey"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 33, $this->source); })()), "filters", [], "any", false, false, false, 33), "excludeEvents", [], "any", false, false, false, 33))) {
                        yield "selected";
                    }
                    yield ">
                                ";
                    // line 34
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeName"], "html", null, true);
                    yield "
                            </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['typeKey'], $context['typeName'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                yield "                    </select>
                </div>
            </div>
        ";
            }
            // line 41
            yield "
        ";
            // line 42
            if (array_key_exists("lead", $context)) {
                // line 43
                yield "            <input type=\"hidden\" name=\"leadId\" id=\"leadId\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43));
                yield "\"/>
        ";
            }
            // line 45
            yield "    </form>

    <script>
        mauticLang['showMore'] = '";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.show"), "html", null, true);
            yield "';
        mauticLang['hideMore'] = '";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.hide"), "html", null, true);
            yield "';

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
        yield "
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.displaying_events", ["%total%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 133, $this->source); })()), "total", [], "any", false, false, false, 133)]), "html", null, true);
        yield "
      ";
        // line 134
        if (array_key_exists("lead", $context)) {
            // line 135
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.displaying_events_for_contact", ["%contact%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 135, $this->source); })()), "name", [], "any", false, false, false, 135), "%id%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135)]), "html", null, true);
            yield "
      ";
        }
        // line 137
        yield "      (<span class=\"tl-new\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["newCount"]) || array_key_exists("newCount", $context) ? $context["newCount"] : (function () { throw new RuntimeError('Variable "newCount" does not exist.', 137, $this->source); })()), "html", null, true);
        yield "</span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.events_new"), "html", null, true);
        yield ")
  </div>
  <!-- timeline -->
  <div class=\"event-list\" id=\"timeline-container\">
      ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "events", [], "any", false, false, false, 141));
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
            yield "          ";
            $context["icon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "icon", [], "any", true, true, false, 142)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "icon", [], "any", false, false, false, 142)) : ("fa-history"));
            // line 143
            yield "          ";
            $context["eventLabel"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", true, true, false, 143)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", false, false, false, 143)) : (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 143)));
            // line 144
            yield "          ";
            if (is_iterable((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 144, $this->source); })()))) {
                // line 145
                yield "              ";
                $context["eventLabel"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 146
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 146, $this->source); })()), "href", [], "any", false, false, false, 146), "html", null, true);
                    yield "\" ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["eventLabel"] ?? null), "isExternal", [], "any", true, true, false, 146)) {
                        yield "data-toggle=\"ajax\"";
                    } else {
                        yield "target=\"_new\"";
                    }
                    yield ">";
                    // line 147
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 147, $this->source); })()), "label", [], "any", false, false, false, 147), "html", null, true);
                    // line 148
                    yield "</a>
              ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 150
                yield "          ";
            }
            // line 151
            yield "
          ";
            // line 152
            $context["details"] = "";
            // line 153
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", true, true, false, 153)) {
                // line 154
                yield "              ";
                $context["details"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 154), ["event" => $context["event"]], false, true));
                // line 155
                yield "          ";
            }
            // line 156
            yield "
          ";
            // line 157
            $context["newCount"] = ((isset($context["newCount"]) || array_key_exists("newCount", $context) ? $context["newCount"] : (function () { throw new RuntimeError('Variable "newCount" does not exist.', 157, $this->source); })()) - 1);
            // line 158
            yield "          <div class=\"timeline-row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::cycle(["", "timeline-row-highlighted"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 158)), "html", null, true);
            yield " ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "featured", [], "any", false, false, false, 158))) {
                yield "timeline-featured";
            }
            yield " ";
            if (((isset($context["newCount"]) || array_key_exists("newCount", $context) ? $context["newCount"] : (function () { throw new RuntimeError('Variable "newCount" does not exist.', 158, $this->source); })()) > 0)) {
                yield "tr-new";
            }
            yield "\">
              <span class=\"timeline-row-id hide\">";
            // line 159
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "timestamp", [], "any", false, false, false, 159));
            yield " on ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "timestamp", [], "any", false, false, false, 159), "Y-m-d H:i:s"), "html", null, true);
            yield "</span>
              <span class=\"timeline-row-lead-id hide\">";
            // line 160
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "leadId", [], "any", true, true, false, 160)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "leadId", [], "any", false, false, false, 160), "html", null, true);
            }
            yield "</span>
              <div class=\"btn-group\" role=\"group\" style=\"float: right;\">
                  <span class=\"timeline-icon\">
                      <a href=\"javascript:void(0);\"
                         onclick=\"mQuery('#timeline-details-";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 164), "html", null, true);
            yield "').toggleClass('hide')\"
                         data-activate-details=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 165), "html", null, true);
            yield "\"
                         class=\"btn btn-xs btn-nospin btn-default ";
            // line 166
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 166, $this->source); })()))) {
                yield "disabled";
            }
            yield "\"
                         data-toggle=\"tooltip\"
                         title=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.toggle_details"), "html", null, true);
            yield "\">
                          <span class=\"fa fa-fw ";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 169, $this->source); })()), "html", null, true);
            yield "\"></span>
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
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "leadEmail", [], "any", true, true, false, 179)) {
                // line 180
                yield "                  <span class=\"timeline-lead ellipsis\"><a href=\"mailto:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "leadEmail", [], "any", false, false, false, 180), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "leadEmail", [], "any", false, false, false, 180), "html", null, true);
                yield "\" target=\"_new\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "leadName", [], "any", false, false, false, 180), "html", null, true);
                yield "</a></span>
                  <span class=\"timeline-timestamp\">";
                // line 181
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "timestamp", [], "any", false, false, false, 181));
                yield " on ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "timestamp", [], "any", false, false, false, 181), "Y-m-d H:i:s"), "html", null, true);
                yield "</span>
              ";
            }
            // line 183
            yield "              <br/>

              <span class=\"timeline-type\">";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", true, true, false, 185)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 185), "")) : ("")), "html", null, true);
            yield ":</span>
              <br/>

              ";
            // line 188
            if (((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 188, $this->source); })()) != CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 188))) {
                // line 189
                yield "                  <span class=\"timeline-name ellipsis\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 189, $this->source); })()), "html", null, true);
                yield "</span>
              ";
            }
            // line 191
            yield "
              ";
            // line 192
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 192, $this->source); })()))) {
                // line 193
                yield "                  <div class=\"timeline-details hide\" id=\"timeline-details-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 193), "html", null, true);
                yield "\">
                      ";
                // line 194
                yield (isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 194, $this->source); })());
                yield "
                  </div>
              ";
            }
            // line 197
            yield "          </div>
      ";
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
        // line 199
        yield "  </div>
  <!--/ timeline -->

  ";
        // line 202
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 202, $this->source); })()), "request", [], "any", false, false, false, 202), "isXmlHttpRequest", [], "any", false, false, false, 202)) {
            // line 203
            yield "    </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Timeline/plugin_list.html.twig";
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
        return array (  486 => 203,  484 => 202,  479 => 199,  464 => 197,  458 => 194,  453 => 193,  451 => 192,  448 => 191,  442 => 189,  440 => 188,  434 => 185,  430 => 183,  423 => 181,  414 => 180,  412 => 179,  399 => 169,  395 => 168,  388 => 166,  384 => 165,  380 => 164,  371 => 160,  365 => 159,  352 => 158,  350 => 157,  347 => 156,  344 => 155,  341 => 154,  338 => 153,  336 => 152,  333 => 151,  330 => 150,  325 => 148,  323 => 147,  313 => 146,  310 => 145,  307 => 144,  304 => 143,  301 => 142,  284 => 141,  274 => 137,  268 => 135,  266 => 134,  262 => 133,  194 => 67,  173 => 49,  169 => 48,  164 => 45,  158 => 43,  156 => 42,  153 => 41,  147 => 37,  138 => 34,  129 => 33,  125 => 32,  121 => 31,  116 => 28,  107 => 25,  98 => 24,  94 => 23,  90 => 22,  86 => 20,  84 => 19,  76 => 16,  67 => 14,  63 => 12,  60 => 11,  53 => 10,  49 => 8,  47 => 7,  40 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Timeline/plugin_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Timeline\\plugin_list.html.twig");
    }
}
