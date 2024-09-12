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

/* @MauticEmail/Lead/preference_options.html.twig */
class __TwigTemplate_323b394e1bf98cb174a1dfce0d38ca50 extends Template
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
        $context["leadId"] = twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 1, $this->source); })()), "getId", [], "method", false, false, false, 1);
        // line 2
        $context["leadName"] = twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 2, $this->source); })()), "getPrimaryIdentifier", [], "method", false, false, false, 2);
        // line 3
        $context["channelNumber"] = 0;
        // line 4
        echo "
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start', ["render_rest" => false]);
        echo "
    <div class=\"col-xs-12 col-md-8 col-md-offset-2\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h1 class=\"panel-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.message.preferences"), "html", null, true);
        echo "</h1>
            </div>
            <div class=\"panel-body\">
                <div class=\"the-price\">
                    <h4>";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["leadName"]) || array_key_exists("leadName", $context) ? $context["leadName"] : (function () { throw new RuntimeError('Variable "leadName" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</h4>
                    <small>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.message.preferences.descr"), "html", null, true);
        echo "</small>
                </div>
                <table class=\"table table-hover\">
                    ";
        // line 38
        if ((isset($context["showContactFrequency"]) || array_key_exists("showContactFrequency", $context) ? $context["showContactFrequency"] : (function () { throw new RuntimeError('Variable "showContactFrequency" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "lead_channels", [], "any", false, false, false, 39), "subscribed_channels", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "choices", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["key"] => $context["channel"]) {
                // line 40
                echo "                            ";
                $context["contactMe"] = twig_get_attribute($this->env, $this->source, ($context["leadChannels"] ?? null), twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 40), [], "array", true, true, false, 40);
                // line 41
                echo "                            ";
                $context["checked"] = (((isset($context["contactMe"]) || array_key_exists("contactMe", $context) ? $context["contactMe"] : (function () { throw new RuntimeError('Variable "contactMe" does not exist.', 41, $this->source); })())) ? ("checked") : (""));
                // line 42
                echo "                            ";
                $context["channelName"] = twig_lower_filter($this->env, $this->extensions['Mautic\ChannelBundle\Twig\ChannelExtension']->getChannelLabel(twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 42)));
                // line 43
                echo "                            <tr>
                                <td>
                                    <div class=\"text-left\">
                                        <input type=\"hidden\" id=\"";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 46), "html", null, true);
                echo "-hidden\"
                                               name=\"lead_contact_frequency_rules[lead_channels][subscribed_channels][";
                // line 47
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "]\"
                                               value=\"\">
                                        <input type=\"checkbox\" id=\"";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 49), "html", null, true);
                echo "\"
                                               name=\"lead_contact_frequency_rules[lead_channels][subscribed_channels][";
                // line 50
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "]\"
                                               onclick=\"togglePreferredChannel(this.value);\"
                                               value=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 52));
                echo "\" ";
                echo twig_escape_filter($this->env, (isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 52, $this->source); })()), "html", null, true);
                echo ">
                                        <label for=\"";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 53), "html", null, true);
                echo "\" id=\"is-contactable-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 53), "html", null, true);
                echo "\">
                                            ";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.contact.me.label", ["%channel%" => (isset($context["channelName"]) || array_key_exists("channelName", $context) ? $context["channelName"] : (function () { throw new RuntimeError('Variable "channelName" does not exist.', 54, $this->source); })())]), "html", null, true);
                echo "
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
                    echo "                                            <div class=\"col-md-6\" data-contact-frequency=\"1\">
                                                <label class=\"text-muted\">";
                    // line 64
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "lead_channels", [], "any", false, false, false, 64), ("frequency_number_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 64)), [], "array", false, false, false, 64), "vars", [], "any", false, false, false, 64), "label", [], "any", false, false, false, 64)), "html", null, true);
                    echo "</label>
                                                ";
                    // line 65
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "lead_channels", [], "any", false, false, false, 65), ("frequency_number_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 65)), [], "array", false, false, false, 65), 'widget');
                    echo "
                                                ";
                    // line 66
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "lead_channels", [], "any", false, false, false, 66), ("frequency_time_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 66)), [], "array", false, false, false, 66), 'label');
                    echo "
                                                ";
                    // line 67
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "lead_channels", [], "any", false, false, false, 67), ("frequency_time_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 67)), [], "array", false, false, false, 67), 'widget');
                    echo "
                                            </div>
                                        ";
                }
                // line 70
                echo "                                        ";
                if ((isset($context["showContactPauseDates"]) || array_key_exists("showContactPauseDates", $context) ? $context["showContactPauseDates"] : (function () { throw new RuntimeError('Variable "showContactPauseDates" does not exist.', 70, $this->source); })())) {
                    // line 71
                    echo "                                            <div class=\"col-md-6\" data-contact-pause-dates=\"1\">
                                                <label class=\"text-muted\">";
                    // line 72
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.frequency.dates.label"), "html", null, true);
                    echo "</label>
                                                ";
                    // line 73
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "lead_channels", [], "any", false, false, false, 73), ("contact_pause_start_date_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 73)), [], "array", false, false, false, 73), 'widget');
                    echo "
                                                ";
                    // line 74
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "lead_channels", [], "any", false, false, false, 74), ("contact_pause_end_date_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 74)), [], "array", false, false, false, 74), 'label');
                    echo "
                                                ";
                    // line 75
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "lead_channels", [], "any", false, false, false, 75), ("contact_pause_end_date_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 75)), [], "array", false, false, false, 75), 'widget');
                    echo "
                                            </div>
                                        ";
                }
                // line 78
                echo "                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                    ";
        }
        // line 83
        echo "                </table>
                ";
        // line 84
        if ((isset($context["showContactPreferredChannels"]) || array_key_exists("showContactPreferredChannels", $context) ? $context["showContactPreferredChannels"] : (function () { throw new RuntimeError('Variable "showContactPreferredChannels" does not exist.', 84, $this->source); })())) {
            // line 85
            echo "                    <hr />
                    <div id=\"preferred_channel\" class=\"text-left\">";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "lead_channels", [], "any", false, false, false, 86), "preferred_channel", [], "any", false, false, false, 86), 'row');
            echo "</div>
                ";
        }
        // line 88
        echo "                ";
        $context["segmentCount"] = ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lead_lists", [], "any", true, true, false, 88)) ? (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "lead_lists", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "choices", [], "any", false, false, false, 88))) : (0));
        // line 89
        echo "                ";
        if (((isset($context["showContactSegments"]) || array_key_exists("showContactSegments", $context) ? $context["showContactSegments"] : (function () { throw new RuntimeError('Variable "showContactSegments" does not exist.', 89, $this->source); })()) && ((isset($context["segmentCount"]) || array_key_exists("segmentCount", $context) ? $context["segmentCount"] : (function () { throw new RuntimeError('Variable "segmentCount" does not exist.', 89, $this->source); })()) > 0))) {
            // line 90
            echo "                    <hr />
                    <div id=\"contact-segments\">
                        <div class=\"text-left\">";
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "lead_lists", [], "any", false, false, false, 92), 'label');
            echo "</div>
                        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "lead_lists", [], "any", false, false, false, 93));
            foreach ($context['_seq'] as $context["key"] => $context["leadList"]) {
                // line 94
                echo "                            <div id=\"segment-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"text-left\">
                                ";
                // line 95
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["leadList"], 'widget');
                echo "
                                ";
                // line 96
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["leadList"], 'label');
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['leadList'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                    </div>
                ";
        }
        // line 101
        echo "                ";
        $context["categoryCount"] = ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "global_categories", [], "any", true, true, false, 101)) ? (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "global_categories", [], "any", false, false, false, 101), "vars", [], "any", false, false, false, 101), "choices", [], "any", false, false, false, 101))) : (0));
        // line 102
        echo "                ";
        if (((isset($context["showContactCategories"]) || array_key_exists("showContactCategories", $context) ? $context["showContactCategories"] : (function () { throw new RuntimeError('Variable "showContactCategories" does not exist.', 102, $this->source); })()) && ((isset($context["categoryCount"]) || array_key_exists("categoryCount", $context) ? $context["categoryCount"] : (function () { throw new RuntimeError('Variable "categoryCount" does not exist.', 102, $this->source); })()) > 0))) {
            // line 103
            echo "                    <hr />
                    <div id=\"global-categories\" class=\"text-left\">
                        <div>";
            // line 105
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "global_categories", [], "any", false, false, false, 105), 'label');
            echo "</div>
                        ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "global_categories", [], "any", false, false, false, 106));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 107
                echo "                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["category"], 'widget');
                echo "
                            ";
                // line 108
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["category"], 'label');
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                    </div>
                ";
        }
        // line 112
        echo "
                ";
        // line 113
        if (array_key_exists("successMessage", $context)) {
            // line 114
            echo "                    <hr />
                    <div id=\"success-message-text\">
                        ";
            // line 116
            echo twig_escape_filter($this->env, (isset($context["successMessage"]) || array_key_exists("successMessage", $context) ? $context["successMessage"] : (function () { throw new RuntimeError('Variable "successMessage" does not exist.', 116, $this->source); })()), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 119
        echo "            </div>
            <div class=\"panel-footer text-left\">
                ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "buttons", [], "any", false, false, false, 121), "save", [], "any", false, false, false, 121), 'row');
        echo "
            </div>
        </div>
    </div>
    <div class=\"hidden\">
        ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), 'rest');
        echo "
    </div>
    ";
        // line 128
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'form_end');
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticEmail/Lead/preference_options.html.twig";
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
        return array (  332 => 128,  327 => 126,  319 => 121,  315 => 119,  309 => 116,  305 => 114,  303 => 113,  300 => 112,  296 => 110,  288 => 108,  283 => 107,  279 => 106,  275 => 105,  271 => 103,  268 => 102,  265 => 101,  261 => 99,  252 => 96,  248 => 95,  243 => 94,  239 => 93,  235 => 92,  231 => 90,  228 => 89,  225 => 88,  220 => 86,  217 => 85,  215 => 84,  212 => 83,  209 => 82,  200 => 78,  194 => 75,  190 => 74,  186 => 73,  182 => 72,  179 => 71,  176 => 70,  170 => 67,  166 => 66,  162 => 65,  158 => 64,  155 => 63,  153 => 62,  142 => 54,  136 => 53,  130 => 52,  125 => 50,  121 => 49,  116 => 47,  112 => 46,  107 => 43,  104 => 42,  101 => 41,  98 => 40,  93 => 39,  91 => 38,  85 => 35,  81 => 34,  74 => 30,  67 => 26,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmail/Lead/preference_options.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\Lead\\preference_options.html.twig");
    }
}
