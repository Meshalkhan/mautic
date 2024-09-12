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

/* @MauticCore/Slots/channelfrequency.html.twig */
class __TwigTemplate_ef556c2b6e980c87d8d87a6b95ad64e6 extends Template
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
        $context["channelNumber"] = 0;
        // line 2
        if (array_key_exists("form", $context)) {
            // line 3
            echo "<table class=\"table table-hover\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "lead_channels", [], "any", false, false, false, 4), "subscribed_channels", [], "any", false, false, false, 4), "vars", [], "any", false, false, false, 4), "choices", [], "any", false, false, false, 4));
            foreach ($context['_seq'] as $context["key"] => $context["channel"]) {
                // line 5
                $context["contactMe"] = twig_get_attribute($this->env, $this->source, ($context["leadChannels"] ?? null), twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 5), [], "array", true, true, false, 5);
                // line 6
                $context["checked"] = (((isset($context["contactMe"]) || array_key_exists("contactMe", $context) ? $context["contactMe"] : (function () { throw new RuntimeError('Variable "contactMe" does not exist.', 6, $this->source); })())) ? ("checked") : (""));
                // line 7
                $context["channelName"] = twig_lower_filter($this->env, $this->extensions['Mautic\ChannelBundle\Twig\ChannelExtension']->getChannelLabel(twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 7)));
                // line 8
                echo "        <tr>
            <td>
                <div class=\"text-left\">
                    <input type=\"hidden\" id=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 11), "html", null, true);
                echo "\"
                           name=\"lead_contact_frequency_rules[lead_channels][subscribed_channels][";
                // line 12
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "]\"
                           value=\"\">
                    <input type=\"checkbox\" id=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 14), "html", null, true);
                echo "\"
                           name=\"lead_contact_frequency_rules[lead_channels][subscribed_channels][";
                // line 15
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "]\"
                           onclick=\"togglePreferredChannel(this.value);\"
                           value=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 17));
                echo "\" ";
                echo twig_escape_filter($this->env, (isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 17, $this->source); })()), "html", null, true);
                echo ">
                    <label for=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 18), "html", null, true);
                echo "\" id=\"is-contactable-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 18), "html", null, true);
                echo "\" data-channel=\"";
                echo twig_escape_filter($this->env, (isset($context["channelName"]) || array_key_exists("channelName", $context) ? $context["channelName"] : (function () { throw new RuntimeError('Variable "channelName" does not exist.', 18, $this->source); })()), "html", null, true);
                echo "\">
                        ";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.contact.me.label", ["%channel%" => (isset($context["channelName"]) || array_key_exists("channelName", $context) ? $context["channelName"] : (function () { throw new RuntimeError('Variable "channelName" does not exist.', 19, $this->source); })())]), "html", null, true);
                echo "
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id=\"frequency_";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 26), "html", null, true);
                echo "\" class=\"text-left row\">";
                // line 27
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 28
($context["form"] ?? null), "lead_channels", [], "any", false, true, false, 28), ("frequency_number_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 28)), [], "array", true, true, false, 28) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 29
($context["form"] ?? null), "lead_channels", [], "any", false, true, false, 29), ("frequency_time_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 29)), [], "array", true, true, false, 29))) {
                    // line 31
                    if (((                    // line 32
(isset($context["showContactFrequency"]) || array_key_exists("showContactFrequency", $context) ? $context["showContactFrequency"] : (function () { throw new RuntimeError('Variable "showContactFrequency" does not exist.', 32, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 33
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "lead_channels", [], "any", false, false, false, 33), ("frequency_number_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 33)), [], "array", false, false, false, 33), "isRendered", [], "any", false, false, false, 33)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 34
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "lead_channels", [], "any", false, false, false, 34), ("frequency_time_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 34)), [], "array", false, false, false, 34), "isRendered", [], "any", false, false, false, 34))) {
                        // line 36
                        echo "                            <div class=\"col-md-6\" data-contact-frequency=\"1\">
                                <label class=\"text-muted label1\">";
                        // line 37
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "lead_channels", [], "any", false, false, false, 37), ("frequency_number_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 37)), [], "array", false, false, false, 37), "vars", [], "any", false, false, false, 37), "label", [], "any", false, false, false, 37)), "html", null, true);
                        echo "</label>
                                ";
                        // line 38
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "lead_channels", [], "any", false, false, false, 38), ("frequency_number_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 38)), [], "array", false, false, false, 38), 'widget');
                        echo "
                                ";
                        // line 39
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "lead_channels", [], "any", false, false, false, 39), ("frequency_time_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 39)), [], "array", false, false, false, 39), 'label');
                        echo "
                                ";
                        // line 40
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "lead_channels", [], "any", false, false, false, 40), ("frequency_time_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 40)), [], "array", false, false, false, 40), 'widget');
                        echo "
                            </div>";
                    } else {
                        // line 43
                        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "lead_channels", [], "any", false, false, false, 43), ("frequency_time_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 43)), [], "array", false, false, false, 43), "setRendered", [true], "method", false, false, false, 43);
                        // line 44
                        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "lead_channels", [], "any", false, false, false, 44), ("frequency_number_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 44)), [], "array", false, false, false, 44), "setRendered", [true], "method", false, false, false, 44);
                    }
                }
                // line 48
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 49
($context["form"] ?? null), "lead_channels", [], "any", false, true, false, 49), ("contact_pause_start_date_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 49)), [], "array", true, true, false, 49) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 50
($context["form"] ?? null), "lead_channels", [], "any", false, true, false, 50), ("contact_pause_end_date_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 50)), [], "array", true, true, false, 50))) {
                    // line 52
                    if (((                    // line 53
(isset($context["showContactPauseDates"]) || array_key_exists("showContactPauseDates", $context) ? $context["showContactPauseDates"] : (function () { throw new RuntimeError('Variable "showContactPauseDates" does not exist.', 53, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 54
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "lead_channels", [], "any", false, false, false, 54), ("contact_pause_start_date_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 54)), [], "array", false, false, false, 54), "isRendered", [], "any", false, false, false, 54)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 55
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "lead_channels", [], "any", false, false, false, 55), ("contact_pause_end_date_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 55)), [], "array", false, false, false, 55), "isRendered", [], "any", false, false, false, 55))) {
                        // line 57
                        echo "                            <div class=\"col-md-6\" data-contact-pause-dates=\"1\">
                                <label class=\"text-muted label3\">";
                        // line 58
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.frequency.dates.label"), "html", null, true);
                        echo "</label>
                                ";
                        // line 59
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "lead_channels", [], "any", false, false, false, 59), ("contact_pause_start_date_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 59)), [], "array", false, false, false, 59), 'widget');
                        echo "
                                ";
                        // line 60
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "lead_channels", [], "any", false, false, false, 60), ("contact_pause_end_date_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 60)), [], "array", false, false, false, 60), 'label');
                        echo "
                                ";
                        // line 61
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "lead_channels", [], "any", false, false, false, 61), ("contact_pause_end_date_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 61)), [], "array", false, false, false, 61), 'widget');
                        echo "
                            </div>";
                    } else {
                        // line 64
                        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "lead_channels", [], "any", false, false, false, 64), ("contact_pause_start_date_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 64)), [], "array", false, false, false, 64), "setRendered", [true], "method", false, false, false, 64);
                        // line 65
                        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "lead_channels", [], "any", false, false, false, 65), ("contact_pause_end_date_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 65)), [], "array", false, false, false, 65), "setRendered", [true], "method", false, false, false, 65);
                    }
                }
                // line 68
                echo "                </div>
            </td>
        </tr>";
                // line 71
                twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "lead_channels", [], "any", false, false, false, 71), "subscribed_channels", [], "any", false, false, false, 71), "setRendered", [true], "method", false, false, false, 71);
                // line 72
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "</table>
";
        } else {
            // line 75
            echo "<table class=\"table table-hover\">
    <tbody>
    <tr>
        <td>
            <div class=\"text-left\">
                <input type=\"checkbox\" checked=\"\">
                <label class=\"control-label\">
                    ";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.contact.me.label"), "html", null, true);
            echo "</label>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div id=\"frequency_email\" class=\"text-left row\">
                <div class=\"col-xs-6\">
                    <label class=\"text-muted label1\">";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.frequency.number"), "html", null, true);
            echo "</label>
                    <input type=\"text\" class=\"frequency form-control\">
                    <label class=\"text-muted fw-n frequency-label label2\">";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.frequency.times"), "html", null, true);
            echo "</label>
                    <select class=\"form-control\">
                        <option value=\"\" selected=\"selected\"></option>
                    </select>
                </div>
                <div class=\"col-xs-6\">
                    <label class=\"text-muted label3\">";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.frequency.dates.label"), "html", null, true);
            echo "</label>
                    <input type=\"date\" class=\"form-control\">
                    <label class=\"frequency-label text-muted fw-n label4\">";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.frequency.contact.end.date"), "html", null, true);
            echo "</label>
                    <input type=\"date\" class=\"form-control\">
                </div>
            </div>
        </td>
    </tr>
    </tbody>
</table>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Slots/channelfrequency.html.twig";
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
        return array (  229 => 100,  224 => 98,  215 => 92,  210 => 90,  199 => 82,  190 => 75,  186 => 73,  180 => 72,  178 => 71,  174 => 68,  170 => 65,  168 => 64,  163 => 61,  159 => 60,  155 => 59,  151 => 58,  148 => 57,  146 => 55,  145 => 54,  144 => 53,  143 => 52,  141 => 50,  140 => 49,  139 => 48,  135 => 44,  133 => 43,  128 => 40,  124 => 39,  120 => 38,  116 => 37,  113 => 36,  111 => 34,  110 => 33,  109 => 32,  108 => 31,  106 => 29,  105 => 28,  104 => 27,  101 => 26,  91 => 19,  83 => 18,  77 => 17,  72 => 15,  68 => 14,  63 => 12,  59 => 11,  54 => 8,  52 => 7,  50 => 6,  48 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Slots/channelfrequency.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Slots\\channelfrequency.html.twig");
    }
}
