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

/* @MauticLead/Batch/channel.html.twig */
class __TwigTemplate_e3542a62f6b8526d062182109d414277 extends Template
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
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["data-submit-callback" => "leadBatchSubmit"]]);
        // line 10
        echo "
<table class=\"table\" width=\"100%\">
    <thead >
    <tr >
        <th>
            <input type=\"checkbox\" id=\"contact_channels_subscribed_channels_0\" name=\"check_all\" onclick=\"Mautic.togglePreferredChannel('all');\" value=\"all\">
        </th>
        <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.contact.channels"), "html", null, true);
        echo "</th>
        <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.preferred.frequency"), "html", null, true);
        echo "</th>
        <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.preferred.channels"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>

    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "subscribed_channels", [], "array", false, false, false, 24), "vars", [], "any", false, false, false, 24), "choices", [], "array", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 25
            echo "        ";
            $context["contactMe"] = twig_get_attribute($this->env, $this->source, ($context["leadChannels"] ?? null), twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 25), [], "array", true, true, false, 25);
            // line 26
            echo "        ";
            $context["isContactable"] = (((isset($context["contactMe"]) || array_key_exists("contactMe", $context) ? $context["contactMe"] : (function () { throw new RuntimeError('Variable "contactMe" does not exist.', 26, $this->source); })())) ? ("") : ("text-muted"));
            // line 27
            echo "        ";
            $context["hidden"] = (((isset($context["contactMe"]) || array_key_exists("contactMe", $context) ? $context["contactMe"] : (function () { throw new RuntimeError('Variable "contactMe" does not exist.', 27, $this->source); })())) ? ("") : ("hide"));
            // line 28
            echo "        ";
            $context["checked"] = (((isset($context["contactMe"]) || array_key_exists("contactMe", $context) ? $context["contactMe"] : (function () { throw new RuntimeError('Variable "contactMe" does not exist.', 28, $this->source); })())) ? ("checked") : (""));
            // line 29
            echo "        ";
            $context["disabled"] = ((twig_get_attribute($this->env, $this->source, ($context["leadChannels"] ?? null), twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 29), [], "array", true, true, false, 29)) ? ("") : ("disabled"));
            // line 30
            echo "        <tr>
            <th style=\"vertical-align: top\" class=\"col-md-1\">
                <input type=\"checkbox\" id=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 32), "html", null, true);
            echo "\"
                       name=\"contact_channels[subscribed_channels][]\" class=\"control-label\" onclick=\"Mautic.togglePreferredChannel(this.value);\"
                       value=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 34));
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 34, $this->source); })()), "html", null, true);
            echo ">
            </th>
            <td class=\"col-md-1\" style=\"vertical-align: top\">
                <div id=\"is-contactable-";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 37), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["isContactable"]) || array_key_exists("isContactable", $context) ? $context["isContactable"] : (function () { throw new RuntimeError('Variable "isContactable" does not exist.', 37, $this->source); })()), "html", null, true);
            echo " fw-sb\">
                    ";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Mautic\ChannelBundle\Twig\ChannelExtension']->getChannelLabel(twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 38)), "html", null, true);
            echo "
                </div>
            </td>
            <td class=\"col-md-9\" style=\"vertical-align: top\">
                <div>
                    <div class=\"pull-left\">
                        ";
            // line 44
            $context["existingFieldClass"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), ("frequency_number_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 44)), [], "array", false, false, false, 44), "vars", [], "any", false, false, false, 44), "attr", [], "array", false, false, false, 44), "class", [], "array", false, false, false, 44);
            // line 45
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), ("frequency_number_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 45)), [], "array", false, false, false, 45), 'widget', ["attr" => ["class" => (            // line 47
(isset($context["existingFieldClass"]) || array_key_exists("existingFieldClass", $context) ? $context["existingFieldClass"] : (function () { throw new RuntimeError('Variable "existingFieldClass" does not exist.', 47, $this->source); })()) . " pull-left")]]);
            // line 49
            echo "
                        ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), ("frequency_time_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 50)), [], "array", false, false, false, 50), 'label');
            echo "
                        <div class=\"frequency-select\">
                          ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), ("frequency_time_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 52)), [], "array", false, false, false, 52), 'widget');
            echo "
                        </div>
                    </div>
                </div>
            </td>
            <td class=\"col-md-1\" style=\"vertical-align: top;\" align=\"center\">
                <input type=\"radio\" id=\"preferred_";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 58), "html", null, true);
            echo "\"
                       name=\"contact_channels[preferred_channel]\" class=\"contact\"
                       value=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 60));
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "preferred_channel", [], "array", false, false, false, 60), "vars", [], "any", false, false, false, 60), "value", [], "array", false, false, false, 60) == twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 60))) {
                echo "checked";
            }
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 60, $this->source); })()), "html", null, true);
            echo ">

            </td>
        </tr>
        <tr style=\"border-top:none\"><th style=\"border-top:none\"></th>
            <td  style=\"border-top:none\"></td>
            <td colspan=\"2\" style=\"border-top:none\">
                <div id=\"frequency_";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 67), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["hidden"]) || array_key_exists("hidden", $context) ? $context["hidden"] : (function () { throw new RuntimeError('Variable "hidden" does not exist.', 67, $this->source); })()), "html", null, true);
            echo "\">
                    <div>
                        <label class=\"text-muted fw-n\">";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.frequency.dates.label"), "html", null, true);
            echo "</label>
                    </div>
                    <div>
                        ";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), ("contact_pause_start_date_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 72)), [], "array", false, false, false, 72), 'widget');
            echo "
                        <div style=\"float:left;\">
                            ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), ("contact_pause_end_date_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 74)), [], "array", false, false, false, 74), 'label');
            echo "
                        </div>
                        ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), ("contact_pause_end_date_" . twig_get_attribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 76)), [], "array", false, false, false, 76), 'widget');
            echo "
                    </div>
                </div>
                <div class=\"clearfix\"></div>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "    </tbody>
</table>
";
        // line 85
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "preferred_channel", [], "any", false, false, false, 85), "setRendered", [], "any", false, false, false, 85);
        // line 86
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "subscribed_channels", [], "any", false, false, false, 86), "setRendered", [], "any", false, false, false, 86);
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Batch/channel.html.twig";
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
        return array (  203 => 87,  201 => 86,  199 => 85,  195 => 83,  182 => 76,  177 => 74,  172 => 72,  166 => 69,  159 => 67,  143 => 60,  138 => 58,  129 => 52,  124 => 50,  121 => 49,  119 => 47,  117 => 45,  115 => 44,  106 => 38,  100 => 37,  92 => 34,  87 => 32,  83 => 30,  80 => 29,  77 => 28,  74 => 27,  71 => 26,  68 => 25,  64 => 24,  56 => 19,  52 => 18,  48 => 17,  39 => 10,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Batch/channel.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Batch\\channel.html.twig");
    }
}
