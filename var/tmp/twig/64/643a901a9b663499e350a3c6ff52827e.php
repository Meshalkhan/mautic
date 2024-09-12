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

/* @MauticPage/SubscribedEvents/Timeline/videohit.html.twig */
class __TwigTemplate_81021dc29e0cf0f2f0cbb124a6a73822 extends Template
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
        $context["viewTime"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.unknown");
        // line 2
        $context["duration"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.unknown");
        // line 3
        $context["percentage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.unknown");
        // line 4
        $context["unknown"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.unknown");
        // line 5
        $context["icon"] = ((twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "icon", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "icon", [], "any", false, false, false, 5), "")) : (""));
        // line 6
        echo "
";
        // line 7
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 7), "hit", [], "any", false, true, false, 7), "time_watched", [], "any", true, true, false, 7)) {
            // line 8
            echo "    ";
            $context["viewTimeActual"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 8, $this->source); })()), "extra", [], "any", false, false, false, 8), "hit", [], "any", false, false, false, 8), "time_watched", [], "any", false, false, false, 8);
            // line 9
            echo "    ";
            $context["viewTime"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 9, $this->source); })()), "extra", [], "any", false, false, false, 9), "hit", [], "any", false, false, false, 9), "time_watched", [], "any", false, false, false, 9);
            // line 10
            echo "
    ";
            // line 12
            echo "    ";
            if (((isset($context["viewTime"]) || array_key_exists("viewTime", $context) ? $context["viewTime"] : (function () { throw new RuntimeError('Variable "viewTime" does not exist.', 12, $this->source); })()) > 60)) {
                // line 13
                echo "        ";
                $context["sec"] = ((isset($context["viewTime"]) || array_key_exists("viewTime", $context) ? $context["viewTime"] : (function () { throw new RuntimeError('Variable "viewTime" does not exist.', 13, $this->source); })()) % 60);
                // line 14
                echo "        ";
                $context["min"] = twig_round(((isset($context["viewTime"]) || array_key_exists("viewTime", $context) ? $context["viewTime"] : (function () { throw new RuntimeError('Variable "viewTime" does not exist.', 14, $this->source); })()) / 60), 0, "floor");
                // line 15
                echo "        ";
                $context["viewTime"] = ((((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 15, $this->source); })()) . "m ") . (isset($context["sec"]) || array_key_exists("sec", $context) ? $context["sec"] : (function () { throw new RuntimeError('Variable "sec" does not exist.', 15, $this->source); })())) . "s");
                // line 16
                echo "    ";
            } else {
                // line 17
                echo "        ";
                $context["viewTime"] = ((isset($context["viewTime"]) || array_key_exists("viewTime", $context) ? $context["viewTime"] : (function () { throw new RuntimeError('Variable "viewTime" does not exist.', 17, $this->source); })()) . "s");
                // line 18
                echo "    ";
            }
        }
        // line 20
        echo "
";
        // line 21
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 21), "hit", [], "any", false, true, false, 21), "duration", [], "any", true, true, false, 21)) {
            // line 22
            echo "    ";
            $context["durationActual"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "extra", [], "any", false, false, false, 22), "hit", [], "any", false, false, false, 22), "duration", [], "any", false, false, false, 22);
            // line 23
            echo "    ";
            $context["duration"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "extra", [], "any", false, false, false, 23), "hit", [], "any", false, false, false, 23), "duration", [], "any", false, false, false, 23);
            // line 24
            echo "
    ";
            // line 26
            echo "    ";
            if (((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 26, $this->source); })()) > 60)) {
                // line 27
                echo "        ";
                $context["sec"] = ((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 27, $this->source); })()) % 60);
                // line 28
                echo "        ";
                $context["min"] = twig_round(((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 28, $this->source); })()) / 60), 0, "floor");
                // line 29
                echo "        ";
                $context["duration"] = ((((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 29, $this->source); })()) . "m ") . (isset($context["sec"]) || array_key_exists("sec", $context) ? $context["sec"] : (function () { throw new RuntimeError('Variable "sec" does not exist.', 29, $this->source); })())) . "s");
                // line 30
                echo "    ";
            } else {
                // line 31
                echo "        ";
                $context["duration"] = ((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 31, $this->source); })()) . "s");
                // line 32
                echo "    ";
            }
        }
        // line 34
        echo "
";
        // line 35
        if ((((isset($context["viewTime"]) || array_key_exists("viewTime", $context) ? $context["viewTime"] : (function () { throw new RuntimeError('Variable "viewTime" does not exist.', 35, $this->source); })()) != (isset($context["unknown"]) || array_key_exists("unknown", $context) ? $context["unknown"] : (function () { throw new RuntimeError('Variable "unknown" does not exist.', 35, $this->source); })())) && ((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 35, $this->source); })()) != (isset($context["unknown"]) || array_key_exists("unknown", $context) ? $context["unknown"] : (function () { throw new RuntimeError('Variable "unknown" does not exist.', 35, $this->source); })())))) {
            // line 36
            echo "    ";
            $context["percentage"] = twig_round((((isset($context["viewTimeActual"]) || array_key_exists("viewTimeActual", $context) ? $context["viewTimeActual"] : (function () { throw new RuntimeError('Variable "viewTimeActual" does not exist.', 36, $this->source); })()) / (isset($context["durationActual"]) || array_key_exists("durationActual", $context) ? $context["durationActual"] : (function () { throw new RuntimeError('Variable "durationActual" does not exist.', 36, $this->source); })())) * 100));
        }
        // line 38
        echo "
<dl class=\"dl-horizontal\">
    <dt>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.time.on.video"), "html", null, true);
        echo ":</dt>
    <dd class=\"ellipsis\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.time.on.video.value", ["%time_watched%" => (isset($context["viewTime"]) || array_key_exists("viewTime", $context) ? $context["viewTime"] : (function () { throw new RuntimeError('Variable "viewTime" does not exist.', 41, $this->source); })()), "%duration%" => (isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 41, $this->source); })()), "%percentage%" => (isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 41, $this->source); })())]), "html", null, true);
        echo "</dd>
    <dt>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.referrer"), "html", null, true);
        echo ":</dt>
    <dd class=\"ellipsis\">";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 43), "hit", [], "any", false, true, false, 43), "referer", [], "any", true, true, false, 43) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 43, $this->source); })()), "extra", [], "any", false, false, false, 43), "hit", [], "any", false, false, false, 43), "referer", [], "any", false, false, false, 43)))) {
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->makeLinks(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 43, $this->source); })()), "extra", [], "array", false, false, false, 43), "hit", [], "array", false, false, false, 43), "referer", [], "array", false, false, false, 43));
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.unknown"), "html", null, true);
        }
        echo "</dd>
    <dt>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.video.url"), "html", null, true);
        echo ":</dt>
    <dd class=\"ellipsis\">";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "hit", [], "any", false, true, false, 45), "url", [], "any", true, true, false, 45) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 45, $this->source); })()), "hit", [], "any", false, false, false, 45), "url", [], "any", false, false, false, 45)))) {
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->makeLinks(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 45, $this->source); })()), "extra", [], "array", false, false, false, 45), "hit", [], "array", false, false, false, 45), "url", [], "array", false, false, false, 45));
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.unknown"), "html", null, true);
        }
        echo "</dd>
</dl>
<div class=\"small\">
    ";
        // line 48
        echo twig_escape_filter($this->env, Mautic\CoreBundle\Helper\InputHelper::clean(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 48, $this->source); })()), "extra", [], "any", false, false, false, 48), "hit", [], "any", false, false, false, 48), "user_agent", [], "any", false, false, false, 48)), "html", null, true);
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPage/SubscribedEvents/Timeline/videohit.html.twig";
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
        return array (  166 => 48,  156 => 45,  152 => 44,  144 => 43,  140 => 42,  136 => 41,  132 => 40,  128 => 38,  124 => 36,  122 => 35,  119 => 34,  115 => 32,  112 => 31,  109 => 30,  106 => 29,  103 => 28,  100 => 27,  97 => 26,  94 => 24,  91 => 23,  88 => 22,  86 => 21,  83 => 20,  79 => 18,  76 => 17,  73 => 16,  70 => 15,  67 => 14,  64 => 13,  61 => 12,  58 => 10,  55 => 9,  52 => 8,  50 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPage/SubscribedEvents/Timeline/videohit.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Resources\\views\\SubscribedEvents\\Timeline\\videohit.html.twig");
    }
}
