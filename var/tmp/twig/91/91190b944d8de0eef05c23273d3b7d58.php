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

/* @MauticChannel/Message/list_item.html.twig */
class __TwigTemplate_4787eef5c04cec0a3446edf181215d25 extends Template
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
        list($context["messageChannels"], $context["channels"]) =         [twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })()), "getChannels", [], "method", false, false, false, 1), []];
        // line 2
        if ((isset($context["messageChannels"]) || array_key_exists("messageChannels", $context) ? $context["messageChannels"] : (function () { throw new RuntimeError('Variable "messageChannels" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messageChannels"]) || array_key_exists("messageChannels", $context) ? $context["messageChannels"] : (function () { throw new RuntimeError('Variable "messageChannels" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["channelName"] => $context["channel"]) {
                // line 4
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["channel"], "isEnabled", [], "method", false, false, false, 4)) {
                    // line 5
                    echo "            ";
                    $context["channels"] = twig_array_merge((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 5, $this->source); })()), [(($this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorHasId(("mautic.channel." . $context["channelName"]))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.channel." . $context["channelName"]))) : (twig_title_string_filter($this->env, $context["channelName"])))]);
                    // line 6
                    echo "        ";
                }
                // line 7
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['channelName'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 9
        echo "<td class=\"visible-md visible-lg\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 11
            echo "    <span class=\"label label-default\">";
            echo twig_escape_filter($this->env, $context["channel"], "html", null, true);
            echo "</span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</td>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticChannel/Message/list_item.html.twig";
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
        return array (  78 => 13,  69 => 11,  65 => 10,  62 => 9,  55 => 7,  52 => 6,  49 => 5,  46 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticChannel/Message/list_item.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Resources\\views\\Message\\list_item.html.twig");
    }
}
