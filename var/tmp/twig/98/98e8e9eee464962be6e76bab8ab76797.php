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

/* @MauticChannel/SubscribedEvents/Timeline/index.html.twig */
class __TwigTemplate_aba1a7f0e45f1b0ddb7840cadfbb33f6 extends Template
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
        $context["extra"] = twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 1, $this->source); })()), "extra", [], "any", false, false, false, 1);
        // line 2
        $context["log"] = twig_get_attribute($this->env, $this->source, (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 2, $this->source); })()), "log", [], "any", false, false, false, 2);
        // line 3
        $context["eventType"] = twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 3, $this->source); })()), "type", [], "any", false, false, false, 3);
        // line 4
        $context["eventSettings"] = twig_get_attribute($this->env, $this->source, (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 4, $this->source); })()), "campaignEventSettings", [], "any", false, false, false, 4);
        // line 5
        $context["messageSettings"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 5, $this->source); })()), "action", [], "any", false, false, false, 5), (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 5, $this->source); })()), [], "array", false, false, false, 5), "timelineTemplateVars", [], "any", false, false, false, 5), "messageSettings", [], "any", false, false, false, 5);
        // line 6
        $context["template"] = "@MauticCampaign/SubscribedEvents/Timeline/index.html.twig";
        // line 7
        $context["channelEvent"] = (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 7, $this->source); })());
        // line 8
        $context["channelEvent"] = twig_array_merge((isset($context["channelEvent"]) || array_key_exists("channelEvent", $context) ? $context["channelEvent"] : (function () { throw new RuntimeError('Variable "channelEvent" does not exist.', 8, $this->source); })()), ["extra" => ["log" => (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 8, $this->source); })())]]);
        // line 9
        $context["vars"] = ["event" => (isset($context["channelEvent"]) || array_key_exists("channelEvent", $context) ? $context["channelEvent"] : (function () { throw new RuntimeError('Variable "channelEvent" does not exist.', 9, $this->source); })())];
        // line 10
        echo "
";
        // line 11
        $context["counter"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 11, $this->source); })()), "log", [], "any", false, false, false, 11), "metadata", [], "any", false, false, false, 11));
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 12, $this->source); })()), "log", [], "any", false, false, false, 12), "metadata", [], "any", false, false, false, 12));
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
        foreach ($context['_seq'] as $context["channel"] => $context["results"]) {
            // line 13
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["messageSettings"] ?? null), $context["channel"], [], "array", true, true, false, 13)) {
                // line 14
                echo "        <h4>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["messageSettings"]) || array_key_exists("messageSettings", $context) ? $context["messageSettings"] : (function () { throw new RuntimeError('Variable "messageSettings" does not exist.', 14, $this->source); })()), $context["channel"], [], "array", false, false, false, 14), "label", [], "array", false, false, false, 14), "html", null, true);
                echo "</h4>
        ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["log"] ?? null), "metadata", [], "any", false, true, false, 15), $context["channel"], [], "array", false, true, false, 15), "dnc", [], "any", true, true, false, 15)) {
                    // line 16
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->extensions['Mautic\ChannelBundle\Twig\ChannelExtension']->getChannelDncText(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 16, $this->source); })()), "metadata", [], "any", false, false, false, 16), $context["channel"], [], "array", false, false, false, 16), "dnc", [], "any", false, false, false, 16)), "html", null, true);
                    echo "
        ";
                }
                // line 18
                echo "        ";
                // line 19
                echo "        ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["messageSettings"]) || array_key_exists("messageSettings", $context) ? $context["messageSettings"] : (function () { throw new RuntimeError('Variable "messageSettings" does not exist.', 19, $this->source); })()), $context["channel"], [], "array", false, false, false, 19), "campaignAction", [], "any", false, false, false, 19))) {
                    // line 20
                    echo "        ";
                    $context["eventType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["messageSettings"]) || array_key_exists("messageSettings", $context) ? $context["messageSettings"] : (function () { throw new RuntimeError('Variable "messageSettings" does not exist.', 20, $this->source); })()), $context["channel"], [], "array", false, false, false, 20), "campaignAction", [], "array", false, false, false, 20);
                    // line 21
                    echo "
        ";
                    // line 22
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eventSettings"] ?? null), "action", [], "any", false, true, false, 22), (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 22, $this->source); })()), [], "array", false, true, false, 22), "timelineTemplate", [], "any", true, true, false, 22) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 22, $this->source); })()), "action", [], "any", false, false, false, 22), (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 22, $this->source); })()), [], "array", false, false, false, 22), "timelineTemplate", [], "any", false, false, false, 22)))) {
                        // line 23
                        echo "            ";
                        $context["template"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 23, $this->source); })()), "action", [], "any", false, false, false, 23), (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 23, $this->source); })()), [], "array", false, false, false, 23), "timelineTemplate", [], "any", false, false, false, 23);
                        // line 24
                        echo "        ";
                    }
                    // line 25
                    echo "        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eventSettings"] ?? null), "action", [], "any", false, true, false, 25), (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 25, $this->source); })()), [], "array", false, true, false, 25), "timelineTemplateVars", [], "any", true, true, false, 25) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 25, $this->source); })()), "action", [], "any", false, false, false, 25), (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 25, $this->source); })()), [], "array", false, false, false, 25), "timelineTemplateVars", [], "any", false, false, false, 25)))) {
                        // line 26
                        echo "            ";
                        $context["extra"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 26, $this->source); })()), "event", [], "any", false, false, false, 26), "extra", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 26, $this->source); })()), "action", [], "any", false, false, false, 26), (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 26, $this->source); })()), [], "array", false, false, false, 26), "timelineTemplateVars", [], "any", false, false, false, 26));
                        // line 27
                        echo "            ";
                        $context["vars"] = ["event" => ["extra" =>                         // line 29
(isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 29, $this->source); })())]];
                        // line 32
                        echo "        ";
                    }
                    // line 33
                    echo "        ";
                }
                // line 34
                echo "        ";
                $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 34, $this->source); })()) - 1);
                // line 35
                echo "        ";
                if (((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 35, $this->source); })()) > 0)) {
                    // line 36
                    echo "            <hr/>
        ";
                }
                // line 38
                echo "    ";
            }
            // line 39
            echo twig_include($this->env, $context, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 39, $this->source); })()), (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 39, $this->source); })()));
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['channel'], $context['results'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticChannel/SubscribedEvents/Timeline/index.html.twig";
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
        return array (  141 => 39,  138 => 38,  134 => 36,  131 => 35,  128 => 34,  125 => 33,  122 => 32,  120 => 29,  118 => 27,  115 => 26,  112 => 25,  109 => 24,  106 => 23,  104 => 22,  101 => 21,  98 => 20,  95 => 19,  93 => 18,  87 => 16,  85 => 15,  80 => 14,  77 => 13,  60 => 12,  58 => 11,  55 => 10,  53 => 9,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticChannel/SubscribedEvents/Timeline/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Resources\\views\\SubscribedEvents\\Timeline\\index.html.twig");
    }
}
