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

/* @MauticCampaign/SubscribedEvents/Timeline/index.html.twig */
class __TwigTemplate_e563fb7f4ad82163d047a52c22c14311 extends Template
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
        $context["item"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 1, $this->source); })()), "extra", [], "any", false, false, false, 1), "log", [], "any", false, false, false, 1);
        // line 2
        $context["errors"] = false;
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "metadata", [], "any", false, true, false, 3), "errors", [], "any", true, true, false, 3) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })()), "metadata", [], "any", false, false, false, 3), "errors", [], "any", false, false, false, 3)))) {
            // line 4
            echo "    ";
            $context["errors"] = ((is_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "metadata", [], "any", false, false, false, 4), "errors", [], "any", false, false, false, 4))) ? (twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "metadata", [], "any", false, false, false, 4), "errors", [], "any", false, false, false, 4), "<br />")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "metadata", [], "any", false, false, false, 4), "errors", [], "any", false, false, false, 4)));
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
($context["item"] ?? null), "metadata", [], "any", false, true, false, 5), "failed", [], "any", true, true, false, 5) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "metadata", [], "any", false, false, false, 5), "failed", [], "any", false, false, false, 5)))) {
            // line 6
            echo "    ";
            $context["errors"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "metadata", [], "any", false, false, false, 6), "reason", [], "any", false, false, false, 6))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "metadata", [], "any", false, false, false, 6), "reason", [], "any", false, false, false, 6)) : ("mautic.campaign.event.failed.timeline"));
            // line 7
            echo "    ";
            $context["errors"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 7, $this->source); })()));
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 8
($context["item"] ?? null), "fail_reason", [], "any", true, true, false, 8) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "fail_reason", [], "any", false, false, false, 8)))) {
            // line 9
            echo "    ";
            $context["errors"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "fail_reason", [], "any", false, false, false, 9);
        }
        // line 11
        echo "
";
        // line 12
        $context["cancelled"] = (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "isScheduled", [], "any", false, false, false, 12)) && twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "dateTriggered", [], "any", false, false, false, 12)));
        // line 13
        $context["dateSpan"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "triggerDate", [], "any", false, false, false, 13))) ? ((((((("<span class=\"timeline-campaign-event-date-" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "event_id", [], "any", false, false, false, 13)) . "\" data-date=\"") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "triggerDate", [], "any", false, false, false, 13), "format", ["Y-m-d H:i:s"], "method", false, false, false, 13)) . "\">") . $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "triggerDate", [], "any", false, false, false, 13))) . "</span>")) : (""));
        // line 14
        echo "
";
        // line 15
        if ((isset($context["cancelled"]) || array_key_exists("cancelled", $context) ? $context["cancelled"] : (function () { throw new RuntimeError('Variable "cancelled" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "    ";
            // line 17
            echo "    ";
            $context["item"] = twig_array_merge((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), ["isScheduled" => true]);
        }
        // line 19
        echo "
<div class=\"mt-10\">
";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()), "isScheduled", [], "any", false, false, false, 21)) {
            // line 22
            echo "    <p class=\"mt-0 mb-10 text-info\" id=\"timeline-campaign-event-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "event_id", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
        <span id=\"timeline-campaign-event-text-";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "event_id", [], "any", false, false, false, 23), "html", null, true);
            echo "\"";
            echo (((isset($context["cancelled"]) || array_key_exists("cancelled", $context) ? $context["cancelled"] : (function () { throw new RuntimeError('Variable "cancelled" does not exist.', 23, $this->source); })())) ? (" class=\"text-warning\"") : (""));
            echo ">
            <i class=\"ri-time-line\"></i>
            <span class=\"timeline-campaign-event-scheduled-";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "event_id", [], "any", false, false, false, 25), "html", null, true);
            echo (((isset($context["cancelled"]) || array_key_exists("cancelled", $context) ? $context["cancelled"] : (function () { throw new RuntimeError('Variable "cancelled" does not exist.', 25, $this->source); })())) ? (" hide") : (""));
            echo "\">
                ";
            // line 26
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.timeline.event.scheduled.time", ["%date%" => (isset($context["dateSpan"]) || array_key_exists("dateSpan", $context) ? $context["dateSpan"] : (function () { throw new RuntimeError('Variable "dateSpan" does not exist.', 26, $this->source); })()), "%event%" => twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "eventLabel", [], "any", false, false, false, 26)]));
            echo "
            </span>
            <span class=\"timeline-campaign-event-cancelled-";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 28, $this->source); })()), "event_id", [], "any", false, false, false, 28), "html", null, true);
            echo ((twig_test_empty((isset($context["cancelled"]) || array_key_exists("cancelled", $context) ? $context["cancelled"] : (function () { throw new RuntimeError('Variable "cancelled" does not exist.', 28, $this->source); })()))) ? (" hide") : (""));
            echo "\">
                ";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.cancelled.time", ["%date%" => (isset($context["dateSpan"]) || array_key_exists("dateSpan", $context) ? $context["dateSpan"] : (function () { throw new RuntimeError('Variable "dateSpan" does not exist.', 29, $this->source); })()), "%event%" => twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 29, $this->source); })()), "eventLabel", [], "any", false, false, false, 29)]), "html", null, true);
            echo "
            </span>
        </span>
        ";
            // line 32
            if (((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 32, $this->source); })()) && $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess("lead:leads:editown", "lead:leads:editother", twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 32, $this->source); })()), "getPermissionUser", [], "method", false, false, false, 32)))) {
                // line 33
                echo "        <span class=\"form-buttons btn-group btn-group-xs mb-3\" role=\"group\" aria-label=\"Field options\">
            <button type=\"button\" id=\"timeline-campaign-event-save-";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), "event_id", [], "any", false, false, false, 34), "html", null, true);
                echo "\" class=\"btn btn-default btn-nospin\" onmousedown=\"return false;\" onclick=\"Mautic.saveScheduledCampaignEvent(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), "event_id", [], "any", false, false, false, 34), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 34, $this->source); })()), "getId", [], "method", false, false, false, 34), "html", null, true);
                echo ")\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.save"), "html", null, true);
                echo "\" style=\"display:none\">
                <i class=\"fa fa-floppy-o text-primary\"></i>
            </button>
            <button type=\"button\" class=\"btn btn-default btn-nospin btn-reschedule\" onclick=\"Mautic.updateScheduledCampaignEvent(";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "event_id", [], "any", false, false, false, 37), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 37, $this->source); })()), "getId", [], "method", false, false, false, 37), "html", null, true);
                echo ")\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.reschedule"), "html", null, true);
                echo "\">
                <i class=\"ri-time-line text-primary\"></i>
            </button>
            <button type=\"button\" class=\"btn btn-default btn-nospin\"";
                // line 40
                echo (((isset($context["cancelled"]) || array_key_exists("cancelled", $context) ? $context["cancelled"] : (function () { throw new RuntimeError('Variable "cancelled" does not exist.', 40, $this->source); })())) ? (" disabled") : (""));
                echo " onclick=\"Mautic.cancelScheduledCampaignEvent(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 40, $this->source); })()), "event_id", [], "any", false, false, false, 40), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 40, $this->source); })()), "getId", [], "method", false, false, false, 40), "html", null, true);
                echo ")\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.cancel"), "html", null, true);
                echo "\">
                <i class=\"ri-close-line text-danger\"></i>
            </button>
        </span>
        ";
            }
            // line 45
            echo "    </p>
";
        }
        // line 47
        echo "
";
        // line 48
        if ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 48, $this->source); })())) {
            // line 49
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })()), "isScheduled", [], "any", false, false, false, 49)) {
                // line 50
                echo "    <hr />
    ";
            }
            // line 52
            echo "    <p class=\"text-danger mt-0 mb-10\"><i class=\"ri-alert-line\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.last_error"), "html", null, true);
            echo ":<br/>";
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 52, $this->source); })()));
            echo "</p>
";
        }
        // line 54
        echo "
";
        // line 55
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "metadata", [], "any", false, true, false, 55), "timeline", [], "any", true, true, false, 55) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 55, $this->source); })()), "metadata", [], "any", false, false, false, 55), "timeline", [], "any", false, false, false, 55))) || twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 55, $this->source); })()), "campaign_description", [], "any", false, false, false, 55)) || twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 55, $this->source); })()), "event_description", [], "any", false, false, false, 55))) {
            // line 56
            echo "    <hr />

    ";
            // line 58
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "metadata", [], "any", false, true, false, 58), "timeline", [], "any", true, true, false, 58) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 58, $this->source); })()), "metadata", [], "any", false, false, false, 58), "timeline", [], "any", false, false, false, 58)))) {
                // line 59
                echo "        <p class=\"mt-0 mb-10\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 59, $this->source); })()), "metadata", [], "any", false, false, false, 59), "timeline", [], "any", false, false, false, 59), "html", null, true);
                echo "</p>
    ";
            }
            // line 61
            echo "
    ";
            // line 62
            if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 62, $this->source); })()), "campaign_description", [], "any", false, false, false, 62)) {
                // line 63
                echo "        <p class=\"mt-0 mb-10\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.campaign.description", ["%description%" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "campaign_description", [], "any", false, false, false, 63)]), "html", null, true);
                echo "</p>
    ";
            }
            // line 65
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 65, $this->source); })()), "event_description", [], "any", false, false, false, 65)) {
                // line 66
                echo "        <p class=\"mt-0 mb-10\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.campaign.description", ["%description%" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 66, $this->source); })()), "event_description", [], "any", false, false, false, 66)]), "html", null, true);
                echo "</p>
    ";
            }
        }
        // line 69
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCampaign/SubscribedEvents/Timeline/index.html.twig";
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
        return array (  220 => 69,  213 => 66,  210 => 65,  204 => 63,  202 => 62,  199 => 61,  193 => 59,  191 => 58,  187 => 56,  185 => 55,  182 => 54,  174 => 52,  170 => 50,  167 => 49,  165 => 48,  162 => 47,  158 => 45,  144 => 40,  134 => 37,  122 => 34,  119 => 33,  117 => 32,  111 => 29,  106 => 28,  101 => 26,  96 => 25,  89 => 23,  84 => 22,  82 => 21,  78 => 19,  74 => 17,  72 => 16,  70 => 15,  67 => 14,  65 => 13,  63 => 12,  60 => 11,  56 => 9,  54 => 8,  51 => 7,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCampaign/SubscribedEvents/Timeline/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\SubscribedEvents\\Timeline\\index.html.twig");
    }
}
