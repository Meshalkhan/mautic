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

/* @MauticEmail/Lead/preference_options.html.twig */
class __TwigTemplate_d892b3d6aef3b20531bb499751e07139 extends Template
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
        $context["leadId"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 1, $this->source); })()), "getId", [], "method", false, false, false, 1);
        // line 2
        $context["leadName"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 2, $this->source); })()), "getPrimaryIdentifier", [], "method", false, false, false, 2);
        // line 3
        $context["channelNumber"] = 0;
        // line 4
        yield "
<script>
    function togglePreferredChannel(channel){
        const status = document.getElementById(channel).checked;

        const fields = [
            'lead_contact_frequency_rules_lead_channels_frequency_number_' + channel,
            'lead_contact_frequency_rules_lead_channels_frequency_time_' + channel,
            'lead_contact_frequency_rules_lead_channels_contact_pause_start_date_' + channel,
            'lead_contact_frequency_rules_lead_channels_contact_pause_end_date_' + channel
        ];

        // disable the input fields if the main checkbox is disabled
        for (let index = 0; index < fields.length; index++) {
            const field = document.getElementById(fields[index]);
            if (field) {
                field.disabled = !status;
            }
        }
    }
</script>
<div class=\"row text-left\">
    ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start', ["render_rest" => false]);
        yield "
    <div class=\"col-xs-12 col-md-8 col-md-offset-2\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h1 class=\"panel-title\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.message.preferences"), "html", null, true);
        yield "</h1>
            </div>
            <div class=\"panel-body\">
                <div class=\"the-price\">
                    <h4>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leadName"]) || array_key_exists("leadName", $context) ? $context["leadName"] : (function () { throw new RuntimeError('Variable "leadName" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "</h4>
                    <small>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.message.preferences.descr"), "html", null, true);
        yield "</small>
                </div>
                <table class=\"table table-hover\">
                    ";
        // line 38
        if ((isset($context["showContactFrequency"]) || array_key_exists("showContactFrequency", $context) ? $context["showContactFrequency"] : (function () { throw new RuntimeError('Variable "showContactFrequency" does not exist.', 38, $this->source); })())) {
            // line 39
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "lead_channels", [], "any", false, false, false, 39), "subscribed_channels", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "choices", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["key"] => $context["channel"]) {
                // line 40
                yield "                            ";
                $context["contactMe"] = CoreExtension::getAttribute($this->env, $this->source, ($context["leadChannels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 40), [], "array", true, true, false, 40);
                // line 41
                yield "                            ";
                $context["checked"] = (((isset($context["contactMe"]) || array_key_exists("contactMe", $context) ? $context["contactMe"] : (function () { throw new RuntimeError('Variable "contactMe" does not exist.', 41, $this->source); })())) ? ("checked") : (""));
                // line 42
                yield "                            ";
                $context["channelName"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Mautic\ChannelBundle\Twig\ChannelExtension']->getChannelLabel(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 42)));
                // line 43
                yield "                            <tr>
                                <td>
                                    <div class=\"text-left\">
                                        <input type=\"hidden\" id=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 46), "html", null, true);
                yield "-hidden\"
                                               name=\"lead_contact_frequency_rules[lead_channels][subscribed_channels][";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "]\"
                                               value=\"\">
                                        <input type=\"checkbox\" id=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 49), "html", null, true);
                yield "\"
                                               name=\"lead_contact_frequency_rules[lead_channels][subscribed_channels][";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "]\"
                                               onclick=\"togglePreferredChannel(this.value);\"
                                               value=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 52));
                yield "\" ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 52, $this->source); })()), "html", null, true);
                yield ">
                                        <label for=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 53), "html", null, true);
                yield "\" id=\"is-contactable-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 53), "html", null, true);
                yield "\">
                                            ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.contact.me.label", ["%channel%" => (isset($context["channelName"]) || array_key_exists("channelName", $context) ? $context["channelName"] : (function () { throw new RuntimeError('Variable "channelName" does not exist.', 54, $this->source); })())]), "html", null, true);
                yield "
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id=\"frequency_<?php echo \$channel->value; ?>\" class=\"text-left row\">
                                        ";
                // line 62
                if ((isset($context["showContactFrequency"]) || array_key_exists("showContactFrequency", $context) ? $context["showContactFrequency"] : (function () { throw new RuntimeError('Variable "showContactFrequency" does not exist.', 62, $this->source); })())) {
                    // line 63
                    yield "                                            <div class=\"col-md-6\" data-contact-frequency=\"1\">
                                                <label class=\"text-muted\">";
                    // line 64
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "lead_channels", [], "any", false, false, false, 64), ("frequency_number_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 64)), [], "array", false, false, false, 64), "vars", [], "any", false, false, false, 64), "label", [], "any", false, false, false, 64)), "html", null, true);
                    yield "</label>
                                                ";
                    // line 65
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "lead_channels", [], "any", false, false, false, 65), ("frequency_number_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 65)), [], "array", false, false, false, 65), 'widget');
                    yield "
                                                ";
                    // line 66
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "lead_channels", [], "any", false, false, false, 66), ("frequency_time_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 66)), [], "array", false, false, false, 66), 'label');
                    yield "
                                                ";
                    // line 67
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "lead_channels", [], "any", false, false, false, 67), ("frequency_time_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 67)), [], "array", false, false, false, 67), 'widget');
                    yield "
                                            </div>
                                        ";
                }
                // line 70
                yield "                                        ";
                if ((isset($context["showContactPauseDates"]) || array_key_exists("showContactPauseDates", $context) ? $context["showContactPauseDates"] : (function () { throw new RuntimeError('Variable "showContactPauseDates" does not exist.', 70, $this->source); })())) {
                    // line 71
                    yield "                                            <div class=\"col-md-6\" data-contact-pause-dates=\"1\">
                                                <label class=\"text-muted\">";
                    // line 72
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.frequency.dates.label"), "html", null, true);
                    yield "</label>
                                                ";
                    // line 73
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "lead_channels", [], "any", false, false, false, 73), ("contact_pause_start_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 73)), [], "array", false, false, false, 73), 'widget');
                    yield "
                                                ";
                    // line 74
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "lead_channels", [], "any", false, false, false, 74), ("contact_pause_end_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 74)), [], "array", false, false, false, 74), 'label');
                    yield "
                                                ";
                    // line 75
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "lead_channels", [], "any", false, false, false, 75), ("contact_pause_end_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 75)), [], "array", false, false, false, 75), 'widget');
                    yield "
                                            </div>
                                        ";
                }
                // line 78
                yield "                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['channel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            yield "                    ";
        }
        // line 83
        yield "                </table>
                ";
        // line 84
        if ((isset($context["showContactPreferredChannels"]) || array_key_exists("showContactPreferredChannels", $context) ? $context["showContactPreferredChannels"] : (function () { throw new RuntimeError('Variable "showContactPreferredChannels" does not exist.', 84, $this->source); })())) {
            // line 85
            yield "                    <hr />
                    <div id=\"preferred_channel\" class=\"text-left\">";
            // line 86
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "lead_channels", [], "any", false, false, false, 86), "preferred_channel", [], "any", false, false, false, 86), 'row');
            yield "</div>
                ";
        }
        // line 88
        yield "                ";
        $context["segmentCount"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lead_lists", [], "any", true, true, false, 88)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "lead_lists", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "choices", [], "any", false, false, false, 88))) : (0));
        // line 89
        yield "                ";
        if (((isset($context["showContactSegments"]) || array_key_exists("showContactSegments", $context) ? $context["showContactSegments"] : (function () { throw new RuntimeError('Variable "showContactSegments" does not exist.', 89, $this->source); })()) && ((isset($context["segmentCount"]) || array_key_exists("segmentCount", $context) ? $context["segmentCount"] : (function () { throw new RuntimeError('Variable "segmentCount" does not exist.', 89, $this->source); })()) > 0))) {
            // line 90
            yield "                    <hr />
                    <div id=\"contact-segments\">
                        <div class=\"text-left\">";
            // line 92
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "lead_lists", [], "any", false, false, false, 92), 'label');
            yield "</div>
                        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "lead_lists", [], "any", false, false, false, 93));
            foreach ($context['_seq'] as $context["key"] => $context["leadList"]) {
                // line 94
                yield "                            <div id=\"segment-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\" class=\"text-left\">
                                ";
                // line 95
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["leadList"], 'widget');
                yield "
                                ";
                // line 96
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["leadList"], 'label');
                yield "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['leadList'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "                    </div>
                ";
        }
        // line 101
        yield "                ";
        $context["categoryCount"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "global_categories", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "global_categories", [], "any", false, false, false, 101), "vars", [], "any", false, false, false, 101), "choices", [], "any", false, false, false, 101))) : (0));
        // line 102
        yield "                ";
        if (((isset($context["showContactCategories"]) || array_key_exists("showContactCategories", $context) ? $context["showContactCategories"] : (function () { throw new RuntimeError('Variable "showContactCategories" does not exist.', 102, $this->source); })()) && ((isset($context["categoryCount"]) || array_key_exists("categoryCount", $context) ? $context["categoryCount"] : (function () { throw new RuntimeError('Variable "categoryCount" does not exist.', 102, $this->source); })()) > 0))) {
            // line 103
            yield "                    <hr />
                    <div id=\"global-categories\" class=\"text-left\">
                        <div>";
            // line 105
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "global_categories", [], "any", false, false, false, 105), 'label');
            yield "</div>
                        ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "global_categories", [], "any", false, false, false, 106));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 107
                yield "                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["category"], 'widget');
                yield "
                            ";
                // line 108
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["category"], 'label');
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            yield "                    </div>
                ";
        }
        // line 112
        yield "
                ";
        // line 113
        if (array_key_exists("successMessage", $context)) {
            // line 114
            yield "                    <hr />
                    <div id=\"success-message-text\">
                        ";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["successMessage"]) || array_key_exists("successMessage", $context) ? $context["successMessage"] : (function () { throw new RuntimeError('Variable "successMessage" does not exist.', 116, $this->source); })()), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 119
        yield "            </div>
            <div class=\"panel-footer text-left\">
                ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "buttons", [], "any", false, false, false, 121), "save", [], "any", false, false, false, 121), 'row');
        yield "
            </div>
        </div>
    </div>
    <div class=\"hidden\">
        ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), 'rest');
        yield "
    </div>
    ";
        // line 128
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'form_end');
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/Lead/preference_options.html.twig";
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
        return array (  337 => 128,  332 => 126,  324 => 121,  320 => 119,  314 => 116,  310 => 114,  308 => 113,  305 => 112,  301 => 110,  293 => 108,  288 => 107,  284 => 106,  280 => 105,  276 => 103,  273 => 102,  270 => 101,  266 => 99,  257 => 96,  253 => 95,  248 => 94,  244 => 93,  240 => 92,  236 => 90,  233 => 89,  230 => 88,  225 => 86,  222 => 85,  220 => 84,  217 => 83,  214 => 82,  205 => 78,  199 => 75,  195 => 74,  191 => 73,  187 => 72,  184 => 71,  181 => 70,  175 => 67,  171 => 66,  167 => 65,  163 => 64,  160 => 63,  158 => 62,  147 => 54,  141 => 53,  135 => 52,  130 => 50,  126 => 49,  121 => 47,  117 => 46,  112 => 43,  109 => 42,  106 => 41,  103 => 40,  98 => 39,  96 => 38,  90 => 35,  86 => 34,  79 => 30,  72 => 26,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/Lead/preference_options.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\Lead\\preference_options.html.twig");
    }
}
