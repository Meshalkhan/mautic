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

/* @MauticChannel/SubscribedEvents/Timeline/queued_messages.html.twig */
class __TwigTemplate_757357886ba4dcb90a21fe5543522046 extends Template
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
        $context["item"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 1, $this->source); })()), "extra", [], "any", false, false, false, 1), "log", [], "any", false, false, false, 1))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 1, $this->source); })()), "extra", [], "any", false, false, false, 1), "log", [], "any", false, false, false, 1)) : (null));
        // line 2
        if ( !twig_test_empty((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "    <table class=\"table table-hover table-sm table-condensed\">
        <thead>
            <tr>
                <th>";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.queued.message.timeline.channel", [], "messages");
            echo "</th>
                <th>";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.queued.message.timeline.attempts", [], "messages");
            echo "</th>
                <th>";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.queued.message.timeline.date.added", [], "messages");
            echo "</th>
                <th>";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.queued.message.timeline.rescheduled", [], "messages");
            echo "</th>
                <th>";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.queued.message.timeline.status", [], "messages");
            echo "</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope=\"row\">";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Mautic\ChannelBundle\Twig\ChannelExtension']->getChannelLabel(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })()), "channelName", [], "any", false, false, false, 16)), "html", null, true);
            echo "</th>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "attempts", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "dateAdded", [], "any", false, false, false, 18))) {
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "dateAdded", [], "any", false, false, false, 18), "UTC");
            }
            echo "</td>
                <td>";
            // line 19
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "scheduledDate", [], "any", false, false, false, 19))) {
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "scheduledDate", [], "any", false, false, false, 19), "UTC");
            }
            echo "</td>
                <td id=\"queued-status-";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\">
                    ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.message.queue.status." . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()), "status", [], "any", false, false, false, 21)), [], "javascript"), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 24
            if (("pending" == twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 24, $this->source); })()), "status", [], "any", false, false, false, 24))) {
                // line 25
                echo "                    <button type=\"button\" id=\"queued-message-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
                echo "\" class=\"btn btn-default btn-nospin\" onclick=\"Mautic.cancelQueuedMessageEvent(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
                echo ")\" data-toggle=\"tooltip\" title=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.queued.message.event.cancel", [], "messages");
                echo "\">
                        <i class=\"ri-close-line text-danger\"></i>
                    </button>
                    ";
            }
            // line 29
            echo "                </td>
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
        return "@MauticChannel/SubscribedEvents/Timeline/queued_messages.html.twig";
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
        return array (  115 => 29,  103 => 25,  101 => 24,  95 => 21,  91 => 20,  85 => 19,  79 => 18,  75 => 17,  71 => 16,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  46 => 6,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticChannel/SubscribedEvents/Timeline/queued_messages.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Resources\\views\\SubscribedEvents\\Timeline\\queued_messages.html.twig");
    }
}
