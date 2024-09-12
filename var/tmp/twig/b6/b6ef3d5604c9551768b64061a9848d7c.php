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

/* @MauticLead/Timeline/_list.html.twig */
class __TwigTemplate_3297a0e4656df5226ffe54f84c7fe239 extends Template
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
        // line 1
        yield "<!-- timeline -->
<div class=\"table-responsive\">
    <table class=\"table table-hover\" id=\"contact-timeline\">
        <thead>
        <tr>
            <th class=\"timeline-icon\">
                <a class=\"btn btn-sm btn-nospin btn-default\" data-activate-details=\"all\" data-toggle=\"tooltip\" title=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.toggle_all_details"), "html", null, true);
        yield "\">
                    <span class=\"fa fa-fw ri-corner-right-down-line\"></span>
                </a>
            </th>
            ";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "eventLabel", "text" => "mautic.lead.timeline.event_name", "class" => "timeline-name", "sessionVar" => (("lead." . CoreExtension::getAttribute($this->env, $this->source,         // line 15
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)) . ".timeline"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contacttimeline_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,         // line 16
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "target" => "#timeline-table"]);
        // line 18
        yield "

            ";
        // line 20
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "eventType", "text" => "mautic.lead.timeline.event_type", "class" => "visible-md visible-lg timeline-type", "sessionVar" => (("lead." . CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)) . ".timeline"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contacttimeline_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "target" => "#timeline-table"]);
        // line 27
        yield "

            ";
        // line 29
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "timestamp", "text" => "mautic.lead.timeline.event_timestamp", "class" => "visible-md visible-lg timeline-timestamp", "sessionVar" => (("lead." . CoreExtension::getAttribute($this->env, $this->source,         // line 33
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)) . ".timeline"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contacttimeline_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "target" => "#timeline-table"]);
        // line 36
        yield "
        </tr>
        <tbody>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 39, $this->source); })()), "events", [], "any", false, false, false, 39));
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
            yield "            ";
            $context["icon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "icon", [], "any", true, true, false, 40)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "icon", [], "any", false, false, false, 40)) : ("fa-history"));
            // line 41
            yield "            ";
            $context["eventLabel"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", true, true, false, 41)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", false, false, false, 41)) : (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 41)));
            // line 42
            yield "            ";
            if (is_iterable((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 42, $this->source); })()))) {
                // line 43
                yield "                ";
                $context["eventLabel"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 44
                    yield "                  <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 44, $this->source); })()), "href", [], "any", false, false, false, 44), "html", null, true);
                    yield "\" ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["eventLabel"] ?? null), "isExternal", [], "any", true, true, false, 44)) {
                        yield "data-toggle=\"ajax\"";
                    } else {
                        yield "target=\"_new\"";
                    }
                    yield ">";
                    // line 45
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 45, $this->source); })()), "label", [], "any", false, false, false, 45), "html", null, true);
                    // line 46
                    yield "</a>
                ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 48
                yield "            ";
            }
            // line 49
            yield "
            ";
            // line 50
            $context["details"] = "";
            // line 51
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", true, true, false, 51)) {
                // line 52
                yield "                ";
                $context["details"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 52), ["event" => $context["event"], "lead" => (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 52, $this->source); })())], false, true));
                // line 53
                yield "            ";
            }
            // line 54
            yield "
            <tr class=\"timeline-row ";
            // line 55
            if ((0 == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 55) % 2)) {
                yield "timeline-row-highlighted";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "featured", [], "any", true, true, false, 55) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "featured", [], "any", false, false, false, 55)))) {
                yield "timeline-featured";
            }
            yield "\">
                <td class=\"timeline-icon\">
                    <a href=\"javascript:void(0);\"
                       data-activate-details=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 58), "html", null, true);
            yield "\"
                       class=\"btn btn-sm btn-nospin btn-default ";
            // line 59
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 59, $this->source); })()))) {
                yield "disabled";
            }
            yield "\"
                       data-toggle=\"tooltip\" title=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.toggle_details"), "html", null, true);
            yield "\">
                        <span class=\"fa fa-fw ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 61, $this->source); })()), "html", null, true);
            yield "\"></span>
                    </a>
                </td>
                <td class=\"timeline-name\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 64, $this->source); })()), "html", null, true);
            yield "</td>
                <td class=\"timeline-type\">";
            // line 65
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", true, true, false, 65)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 65), "html", null, true);
            }
            yield "</td>
                <td class=\"timeline-timestamp\">";
            // line 66
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "timestamp", [], "any", false, false, false, 66), "local", "Y-m-d H:i:s", true);
            yield "</td>
            </tr>
            ";
            // line 68
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 68, $this->source); })()))) {
                // line 69
                yield "                <tr class=\"timeline-row ";
                if ((0 == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 69) % 2)) {
                    yield "timeline-row-highlighted";
                }
                yield " timeline-details hide\" id=\"timeline-details-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 69), "html", null, true);
                yield "\">
                    <td colspan=\"4\">
                        <!-- template: \"";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 71), "html", null, true);
                yield "\" -->
                        ";
                // line 72
                yield (isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 72, $this->source); })());
                yield "
                        <!--/ template: \"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 73), "html", null, true);
                yield "\" -->
                    </td>
                </tr>
            ";
            }
            // line 77
            yield "        ";
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
        // line 78
        yield "        </tbody>
    </table>
</div>
";
        // line 81
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["page" => CoreExtension::getAttribute($this->env, $this->source,         // line 82
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 82, $this->source); })()), "page", [], "any", false, false, false, 82), "fixedPages" => CoreExtension::getAttribute($this->env, $this->source,         // line 83
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 83, $this->source); })()), "maxPages", [], "any", false, false, false, 83), "fixedLimit" => true, "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contacttimeline_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,         // line 85
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)]), "target" => "#timeline-table", "totalItems" => CoreExtension::getAttribute($this->env, $this->source,         // line 87
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 87, $this->source); })()), "total", [], "any", false, false, false, 87)]);
        // line 88
        yield "
<!--/ timeline -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Timeline/_list.html.twig";
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
        return array (  247 => 88,  245 => 87,  244 => 85,  243 => 83,  242 => 82,  241 => 81,  236 => 78,  222 => 77,  215 => 73,  211 => 72,  207 => 71,  197 => 69,  195 => 68,  190 => 66,  184 => 65,  180 => 64,  174 => 61,  170 => 60,  164 => 59,  160 => 58,  148 => 55,  145 => 54,  142 => 53,  139 => 52,  136 => 51,  134 => 50,  131 => 49,  128 => 48,  123 => 46,  121 => 45,  111 => 44,  108 => 43,  105 => 42,  102 => 41,  99 => 40,  82 => 39,  77 => 36,  75 => 34,  74 => 33,  73 => 29,  69 => 27,  67 => 25,  66 => 24,  65 => 20,  61 => 18,  59 => 16,  58 => 15,  57 => 11,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Timeline/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Timeline\\_list.html.twig");
    }
}
