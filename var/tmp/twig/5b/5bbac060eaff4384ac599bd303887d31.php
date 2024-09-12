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

/* @MauticLead/Lead/_devices.html.twig */
class __TwigTemplate_879b3f4d1c424dca059ec3a6a9596d40 extends Template
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
        echo "<table class=\"table table-hover mb-0\">
    <thead>
        <tr>
            <th class=\"timeline-icon\"></th>
            <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.device.header"), "html", null, true);
        echo "</th>
            <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.device_os_name.header"), "html", null, true);
        echo "</th>
            <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.device_os_version.header"), "html", null, true);
        echo "</th>
            <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.device_browser.header"), "html", null, true);
        echo "</th>
            <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.device_brand.header"), "html", null, true);
        echo "</th>
            <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.date.added"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
      ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devices"]) || array_key_exists("devices", $context) ? $context["devices"] : (function () { throw new RuntimeError('Variable "devices" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 19
            echo "          <tr>
              <td>
                  <i class=\"fa fa-fw fa-";
            // line 21
            ((("smartphone" == twig_get_attribute($this->env, $this->source, $context["device"], "device", [], "any", false, false, false, 21))) ? (print ("mobile")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "device", [], "any", false, false, false, 21), "html", null, true))));
            echo "\"></i>
              </td>
              <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorConditional(("mautic.lead.device." . twig_get_attribute($this->env, $this->source, $context["device"], "device", [], "array", false, false, false, 23)), twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "device", [], "array", false, false, false, 23))), "html", null, true);
            echo "</td>
              <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "device_os_name", [], "array", false, false, false, 24), "html", null, true);
            echo "</td>
              <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "device_os_version", [], "array", false, false, false, 25), "html", null, true);
            echo "</td>
              <td>
                  ";
            // line 27
            $context["clientInfo"] = Mautic\CoreBundle\Helper\Serializer::decode(twig_get_attribute($this->env, $this->source, $context["device"], "client_info", [], "any", false, false, false, 27));
            // line 28
            echo "                  ";
            (((is_iterable((isset($context["clientInfo"]) || array_key_exists("clientInfo", $context) ? $context["clientInfo"] : (function () { throw new RuntimeError('Variable "clientInfo" does not exist.', 28, $this->source); })())) && twig_get_attribute($this->env, $this->source, ($context["clientInfo"] ?? null), "name", [], "any", true, true, false, 28))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clientInfo"]) || array_key_exists("clientInfo", $context) ? $context["clientInfo"] : (function () { throw new RuntimeError('Variable "clientInfo" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true))) : (print ("")));
            echo "
              </td>
              <td>
                  ";
            // line 32
            echo "                  ";
            echo twig_escape_filter($this->env, DeviceDetector\Parser\Device\AbstractDeviceParser::getFullName(twig_get_attribute($this->env, $this->source, $context["device"], "device_brand", [], "array", false, false, false, 32)), "html", null, true);
            echo "
              </td>
              <td>";
            // line 34
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(twig_get_attribute($this->env, $this->source, $context["device"], "date_added", [], "array", false, false, false, 34), "utc");
            echo "</td>
          </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </tbody>
</table>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Lead/_devices.html.twig";
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
        return array (  120 => 37,  111 => 34,  105 => 32,  98 => 28,  96 => 27,  91 => 25,  87 => 24,  83 => 23,  78 => 21,  74 => 19,  70 => 18,  63 => 14,  59 => 13,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Lead/_devices.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\_devices.html.twig");
    }
}
