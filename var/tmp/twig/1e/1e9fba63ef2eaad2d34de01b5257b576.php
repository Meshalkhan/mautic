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

/* @MauticLead/Lead/frequency.html.twig */
class __TwigTemplate_0cef8ef6142c8b1edba59b28d246e2fb extends Template
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
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
<ul class=\"nav nav-tabs\">
    <li class=\"active\"><a data-toggle=\"tab\" href=\"#channels\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.contact.channels"), "html", null, true);
        echo "</a></li>
    <li><a data-toggle=\"tab\" href=\"#categories\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.preferred.categories"), "html", null, true);
        echo "</a></li>
    <li><a data-toggle=\"tab\" href=\"#segments\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.preferred.segments"), "html", null, true);
        echo "</a></li>
</ul>
<div class=\"tab-content\">
    <div id=\"channels\" class=\"tab-pane fade in active\">
        <table class=\"table\" width=\"100%\">
            <thead>
            <tr>
                <th>
                    <input type=\"checkbox\" id=\"lead_contact_frequency_rules_subscribed_channels_0\" name=\"check_all\" onclick=\"Mautic.togglePreferredChannel('all');\" value=\"all\">
                </th>
                <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.contact.channels"), "html", null, true);
        echo "</th>
                <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.preferred.frequency"), "html", null, true);
        echo "</th>
                <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.preferred.channels"), "html", null, true);
        echo "</th>
            </tr>
            </thead>
            <tbody >

            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "lead_channels", [], "any", false, false, false, 26), "subscribed_channels", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "choices", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 27
            echo "                ";
            $context["isContactable"] =  !twig_get_attribute($this->env, $this->source, ($context["leadChannels"] ?? null), twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 27), [], "array", true, true, false, 27);
            // line 28
            echo "                ";
            $context["isHidden"] =  !twig_get_attribute($this->env, $this->source, ($context["leadChannels"] ?? null), twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 28), [], "array", true, true, false, 28);
            // line 29
            echo "                ";
            $context["isChecked"] = twig_get_attribute($this->env, $this->source, ($context["leadChannels"] ?? null), twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 29), [], "array", true, true, false, 29);
            // line 30
            echo "                ";
            $context["isDisabled"] =  !twig_get_attribute($this->env, $this->source, ($context["leadChannels"] ?? null), twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 30), [], "array", true, true, false, 30);
            // line 31
            echo "                <tr>
                    <th style=\"vertical-align: top\" class=\"col-md-1\">
                        <input type=\"checkbox\"
                               id=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 34), "html", null, true);
            echo "\"
                               name=\"lead_contact_frequency_rules[lead_channels][subscribed_channels][]\"
                               class=\"control-label\"
                               onclick=\"Mautic.togglePreferredChannel(this.value);\"
                               value=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 38));
            echo "\"
                               ";
            // line 39
            if ((isset($context["isChecked"]) || array_key_exists("isChecked", $context) ? $context["isChecked"] : (function () { throw new RuntimeError('Variable "isChecked" does not exist.', 39, $this->source); })())) {
                echo "checked";
            }
            echo ">
                    </th>
                    <td class=\"col-md-1\" style=\"vertical-align: top\">
                        <div id=\"is-contactable-";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 42), "html", null, true);
            echo "\" class=\"";
            if ( !(isset($context["isContactable"]) || array_key_exists("isContactable", $context) ? $context["isContactable"] : (function () { throw new RuntimeError('Variable "isContactable" does not exist.', 42, $this->source); })())) {
                echo "text-muted";
            }
            echo " fw-sb\">
                            ";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Mautic\ChannelBundle\Twig\ChannelExtension']->getChannelLabel(twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 43)), "html", null, true);
            echo "
                        </div>
                    </td>
                    <td class=\"col-md-9\" style=\"vertical-align: top\">
                            <div>
                                <div class=\"pull-left\">
                                    ";
            // line 49
            $context["attr"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "lead_channels", [], "any", false, false, false, 49), ("frequency_number_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 49)), [], "array", false, false, false, 49), "vars", [], "any", false, false, false, 49), "attr", [], "any", false, false, false, 49);
            // line 50
            echo "                                    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 50, $this->source); })()), ["class" => (twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 50, $this->source); })()), "class", [], "any", false, false, false, 50) . " pull-left")]);
            // line 51
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "lead_channels", [], "any", false, false, false, 51), ("frequency_number_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 51)), [], "array", false, false, false, 51), 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 51, $this->source); })())]);
            echo "
                                    ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "lead_channels", [], "any", false, false, false, 52), ("frequency_time_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 52)), [], "array", false, false, false, 52), 'label');
            echo "
                                    <div class=\"frequency-select\">";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "lead_channels", [], "any", false, false, false, 53), ("frequency_time_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 53)), [], "array", false, false, false, 53), 'widget');
            echo "</div>
                                </div>
                            </div>
                    </td>
                <td class=\"col-md-1\" style=\"vertical-align: top;\" align=\"center\">
                        <input type=\"radio\"
                               id=\"preferred_";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 59), "html", null, true);
            echo "\"
                               name=\"lead_contact_frequency_rules[lead_channels][preferred_channel]\"
                               class=\"contact\"
                               value=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 62));
            echo "\"
                               ";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "lead_channels", [], "array", false, false, false, 63), "preferred_channel", [], "array", false, false, false, 63), "vars", [], "any", false, false, false, 63), "value", [], "array", false, false, false, 63) == twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 63))) {
                echo "checked";
            }
            // line 64
            echo "                               ";
            if ((isset($context["isDisabled"]) || array_key_exists("isDisabled", $context) ? $context["isDisabled"] : (function () { throw new RuntimeError('Variable "isDisabled" does not exist.', 64, $this->source); })())) {
                echo "disabled";
            }
            echo ">
                </td>
                </tr>
                <tr style=\"border-top:none\"><th style=\"border-top:none\"></th>
                    <td  style=\"border-top:none\"></td>
                    <td colspan=\"2\" style=\"border-top:none\">
                        <div id=\"frequency_";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 70), "html", null, true);
            echo "\"
                             class=\"";
            // line 71
            if ((isset($context["isHidden"]) || array_key_exists("isHidden", $context) ? $context["isHidden"] : (function () { throw new RuntimeError('Variable "isHidden" does not exist.', 71, $this->source); })())) {
                echo "hide";
            }
            echo "\">
                            <div>
                                <label class=\"text-muted fw-n\">";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.frequency.dates.label"), "html", null, true);
            echo "</label>
                            </div>
                            <div>
                                ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "lead_channels", [], "array", false, false, false, 76), ("contact_pause_start_date_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 76)), [], "array", false, false, false, 76), 'widget');
            echo "
                                <div style=\"float:left;\">
                                    ";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "lead_channels", [], "array", false, false, false, 78), ("contact_pause_end_date_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 78)), [], "array", false, false, false, 78), 'label');
            echo "
                                </div>
                                ";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "lead_channels", [], "array", false, false, false, 80), ("contact_pause_end_date_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 80)), [], "array", false, false, false, 80), 'widget');
            echo "
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </td>
                </tr>
                ";
            // line 86
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "lead_channels", [], "any", false, false, false, 86), "setRendered", [], "method", false, false, false, 86);
            // line 87
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            </tbody>
        </table>
    </div>
    <div id=\"categories\" class=\"tab-pane fade\">
        <table class=\"table\" width=\"100%\">
            <thead>
            <tr>
                <th>";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "global_categories", [], "any", false, false, false, 95), 'row');
        echo "</th>
            </tr>
            </thead>
        </table>
    </div>
    <div id=\"segments\" class=\"tab-pane fade\">
        <table class=\"table\" width=\"100%\">
            <thead>
              <tr>
                  <th>";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "lead_lists", [], "any", false, false, false, 104), 'row');
        echo "</th>
              </tr>
            </thead>
        </table>
    </div>
</div>
";
        // line 110
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'form_end');
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Lead/frequency.html.twig";
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
        return array (  259 => 110,  250 => 104,  238 => 95,  229 => 88,  223 => 87,  221 => 86,  212 => 80,  207 => 78,  202 => 76,  196 => 73,  189 => 71,  185 => 70,  173 => 64,  169 => 63,  165 => 62,  159 => 59,  150 => 53,  146 => 52,  141 => 51,  138 => 50,  136 => 49,  127 => 43,  119 => 42,  111 => 39,  107 => 38,  100 => 34,  95 => 31,  92 => 30,  89 => 29,  86 => 28,  83 => 27,  79 => 26,  71 => 21,  67 => 20,  63 => 19,  50 => 9,  46 => 8,  42 => 7,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Lead/frequency.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\frequency.html.twig");
    }
}
