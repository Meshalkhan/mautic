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

/* @MauticCore/Slots/preferredchannel.html.twig */
class __TwigTemplate_11dc9b1073d109ba7293d12c65dc5289 extends Template
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
        if (array_key_exists("form", $context)) {
            // line 2
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lead_channels", [], "any", false, true, false, 2), "preferred_channel", [], "any", true, true, false, 2)) {
                // line 3
                echo "        ";
                if ((array_key_exists("showContactPreferredChannels", $context) && (isset($context["showContactPreferredChannels"]) || array_key_exists("showContactPreferredChannels", $context) ? $context["showContactPreferredChannels"] : (function () { throw new RuntimeError('Variable "showContactPreferredChannels" does not exist.', 3, $this->source); })()))) {
                    // line 4
                    echo "            <div class=\"preferred_channel text-left\">";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "lead_channels", [], "any", false, false, false, 4), "preferred_channel", [], "any", false, false, false, 4), 'row');
                    echo "</div>
        ";
                }
                // line 6
                echo "        ";
                twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "lead_channels", [], "any", false, false, false, 6), "preferred_channel", [], "any", false, false, false, 6), "setRendered", [true], "method", false, false, false, 6);
                // line 7
                echo "    ";
            }
        } else {
            // line 9
            echo "  <div class=\"preferred_channel text-left\">
      <div class=\"row\">
          <div class=\"form-group col-xs-12 \">
              <label class=\"control-label\">
                  ";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.frequency.preferred.channel"), "html", null, true);
            echo "
              </label>
              <div class=\"choice-wrapper\">
                  <select class=\"form-control\">
                      <option value=\"email\" selected=\"selected\">";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.email"), "html", null, true);
            echo "</option>
                  </select></div>
          </div>
      </div>
  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Slots/preferredchannel.html.twig";
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
        return array (  71 => 17,  64 => 13,  58 => 9,  54 => 7,  51 => 6,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Slots/preferredchannel.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Slots\\preferredchannel.html.twig");
    }
}
