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

/* @MauticPage/SubscribedEvents/Timeline/index.html.twig */
class __TwigTemplate_b602857fc84f34728832b5f0599bd230 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", true, true, false, 1)) {
            // line 2
            echo "  ";
            $context["timeOnPage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.unknown");
            // line 3
            echo "
  ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 4, $this->source); })()), "extra", [], "any", false, false, false, 4), "hit", [], "any", false, false, false, 4), "dateLeft", [], "any", false, false, false, 4)) {
                // line 5
                echo "      ";
                $context["timeOnPage"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 5, $this->source); })()), "extra", [], "any", false, false, false, 5), "hit", [], "any", false, false, false, 5), "dateLeft", [], "any", false, false, false, 5), "timestamp", [], "any", false, false, false, 5) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 5, $this->source); })()), "extra", [], "any", false, false, false, 5), "hit", [], "any", false, false, false, 5), "dateHit", [], "any", false, false, false, 5), "timestamp", [], "any", false, false, false, 5));
                // line 6
                echo "
      ";
                // line 8
                echo "      ";
                if (((isset($context["timeOnPage"]) || array_key_exists("timeOnPage", $context) ? $context["timeOnPage"] : (function () { throw new RuntimeError('Variable "timeOnPage" does not exist.', 8, $this->source); })()) > 60)) {
                    // line 9
                    echo "          ";
                    $context["sec"] = ((isset($context["timeOnPage"]) || array_key_exists("timeOnPage", $context) ? $context["timeOnPage"] : (function () { throw new RuntimeError('Variable "timeOnPage" does not exist.', 9, $this->source); })()) % 60);
                    // line 10
                    echo "          ";
                    $context["min"] = twig_round(((isset($context["timeOnPage"]) || array_key_exists("timeOnPage", $context) ? $context["timeOnPage"] : (function () { throw new RuntimeError('Variable "timeOnPage" does not exist.', 10, $this->source); })()) / 60), 0, "floor");
                    // line 11
                    echo "          ";
                    $context["timeOnPage"] = ((((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 11, $this->source); })()) . "m ") . (isset($context["sec"]) || array_key_exists("sec", $context) ? $context["sec"] : (function () { throw new RuntimeError('Variable "sec" does not exist.', 11, $this->source); })())) . "s");
                    // line 12
                    echo "      ";
                } else {
                    // line 13
                    echo "          ";
                    $context["timeOnPage"] = ((isset($context["timeOnPage"]) || array_key_exists("timeOnPage", $context) ? $context["timeOnPage"] : (function () { throw new RuntimeError('Variable "timeOnPage" does not exist.', 13, $this->source); })()) . "s");
                    // line 14
                    echo "      ";
                }
                // line 15
                echo "  ";
            }
            // line 16
            echo "
  <dl class=\"dl-horizontal\">
      <dt>";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.time.on.page"), "html", null, true);
            echo ":</dt>
      <dd>";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["timeOnPage"]) || array_key_exists("timeOnPage", $context) ? $context["timeOnPage"] : (function () { throw new RuntimeError('Variable "timeOnPage" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "</dd>
      <dt>";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.referrer"), "html", null, true);
            echo ":</dt>
      <dd>";
            // line 21
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "extra", [], "array", false, false, false, 21), "hit", [], "array", false, false, false, 21), "referer", [], "array", false, false, false, 21)) {
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->makeLinks(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "extra", [], "array", false, false, false, 21), "hit", [], "array", false, false, false, 21), "referer", [], "array", false, false, false, 21));
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.unknown"), "html", null, true);
            }
            echo "</dd>
      <dt>";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.url"), "html", null, true);
            echo ":</dt>
      <dd>";
            // line 23
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "extra", [], "array", false, false, false, 23), "hit", [], "array", false, false, false, 23), "url", [], "array", false, false, false, 23)) {
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->makeLinks(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "extra", [], "array", false, false, false, 23), "hit", [], "array", false, false, false, 23), "url", [], "array", false, false, false, 23));
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.unknown"), "html", null, true);
            }
            echo "</dd>

      ";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 25), "hit", [], "any", false, true, false, 25), "device", [], "any", true, true, false, 25) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 25, $this->source); })()), "extra", [], "any", false, false, false, 25), "hit", [], "any", false, false, false, 25), "device", [], "any", false, false, false, 25)))) {
                // line 26
                echo "          <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.timeline.device.name"), "html", null, true);
                echo "</dt>
          <dd class=\"ellipsis\">";
                // line 27
                echo twig_escape_filter($this->env, Mautic\CoreBundle\Helper\InputHelper::clean(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 27, $this->source); })()), "extra", [], "any", false, false, false, 27), "hit", [], "any", false, false, false, 27), "device", [], "any", false, false, false, 27)), "html", null, true);
                echo "</dd>
      ";
            }
            // line 29
            echo "
      ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 30), "hit", [], "any", false, true, false, 30), "deviceOsName", [], "any", true, true, false, 30) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 30, $this->source); })()), "extra", [], "any", false, false, false, 30), "hit", [], "any", false, false, false, 30), "deviceOsName", [], "any", false, false, false, 30)))) {
                // line 31
                echo "          <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.timeline.device.os"), "html", null, true);
                echo "</dt>
          <dd class=\"ellipsis\">";
                // line 32
                echo twig_escape_filter($this->env, Mautic\CoreBundle\Helper\InputHelper::clean(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 32, $this->source); })()), "extra", [], "any", false, false, false, 32), "hit", [], "any", false, false, false, 32), "deviceOsName", [], "any", false, false, false, 32)), "html", null, true);
                echo "</dd>
      ";
            }
            // line 34
            echo "
      ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 35), "hit", [], "any", false, true, false, 35), "deviceBrand", [], "any", true, true, false, 35) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 35, $this->source); })()), "extra", [], "any", false, false, false, 35), "hit", [], "any", false, false, false, 35), "deviceBrand", [], "any", false, false, false, 35)))) {
                // line 36
                echo "          <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.timeline.device.brand"), "html", null, true);
                echo "</dt>
          <dd class=\"ellipsis\">";
                // line 37
                echo twig_escape_filter($this->env, Mautic\CoreBundle\Helper\InputHelper::clean(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 37, $this->source); })()), "extra", [], "any", false, false, false, 37), "hit", [], "any", false, false, false, 37), "deviceBrand", [], "any", false, false, false, 37)), "html", null, true);
                echo "</dd>
      ";
            }
            // line 39
            echo "
      ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 40), "hit", [], "any", false, true, false, 40), "deviceModel", [], "any", true, true, false, 40) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 40, $this->source); })()), "extra", [], "any", false, false, false, 40), "hit", [], "any", false, false, false, 40), "deviceModel", [], "any", false, false, false, 40)))) {
                // line 41
                echo "          <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.timeline.device.model"), "html", null, true);
                echo "</dt>
          <dd class=\"ellipsis\">";
                // line 42
                echo twig_escape_filter($this->env, Mautic\CoreBundle\Helper\InputHelper::clean(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 42, $this->source); })()), "extra", [], "any", false, false, false, 42), "hit", [], "any", false, false, false, 42), "deviceModel", [], "any", false, false, false, 42)), "html", null, true);
                echo "</dd>
      ";
            }
            // line 44
            echo "
      ";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 45), "hit", [], "any", false, true, false, 45), "sourceName", [], "any", true, true, false, 45) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 45, $this->source); })()), "extra", [], "any", false, false, false, 45), "hit", [], "any", false, false, false, 45), "sourceName", [], "any", false, false, false, 45)))) {
                // line 46
                echo "          <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.source"), "html", null, true);
                echo ":</dt>
          <dd>
              ";
                // line 48
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 48), "hit", [], "any", false, true, false, 48), "sourceRate", [], "any", true, true, false, 48)) {
                    // line 49
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, Mautic\CoreBundle\Helper\InputHelper::clean(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 49, $this->source); })()), "extra", [], "any", false, false, false, 49), "hit", [], "any", false, false, false, 49), "sourceRoute", [], "any", false, false, false, 49)), "html", null, true);
                    echo "\" data-toggle=\"ajax\">";
                    echo twig_escape_filter($this->env, Mautic\CoreBundle\Helper\InputHelper::clean(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 49, $this->source); })()), "extra", [], "any", false, false, false, 49), "hit", [], "any", false, false, false, 49), "sourceName", [], "any", false, false, false, 49)), "html", null, true);
                    echo "</a>
              ";
                } else {
                    // line 51
                    echo "                  ";
                    echo twig_escape_filter($this->env, Mautic\CoreBundle\Helper\InputHelper::clean(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 51, $this->source); })()), "extra", [], "any", false, false, false, 51), "hit", [], "any", false, false, false, 51), "sourceName", [], "any", false, false, false, 51)), "html", null, true);
                    echo "
              ";
                }
                // line 53
                echo "          </dd>

          ";
                // line 55
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 55), "hit", [], "any", false, true, false, 55), "clientInfo", [], "any", true, true, false, 55) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 55, $this->source); })()), "extra", [], "any", false, false, false, 55), "hit", [], "any", false, false, false, 55), "clientInfo", [], "any", false, false, false, 55))) && is_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 55, $this->source); })()), "extra", [], "any", false, false, false, 55), "hit", [], "any", false, false, false, 55), "clientInfo", [], "any", false, false, false, 55)))) {
                    // line 56
                    echo "              <dt>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.timeline.device.client.info"), "html", null, true);
                    echo "</dt>
              <dd class=\"ellipsis\">
                  ";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 58, $this->source); })()), "extra", [], "any", false, false, false, 58), "hit", [], "any", false, false, false, 58), "clientInfo", [], "any", false, false, false, 58));
                    foreach ($context['_seq'] as $context["_key"] => $context["clientInfo"]) {
                        // line 59
                        echo "                      ";
                        echo twig_escape_filter($this->env, Mautic\CoreBundle\Helper\InputHelper::clean($context["clientInfo"]), "html", null, true);
                        echo "
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clientInfo'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "              </dd>
          ";
                }
                // line 63
                echo "      ";
            }
            // line 64
            echo "
      ";
            // line 65
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 65), "hit", [], "any", false, true, false, 65), "query", [], "any", true, true, false, 65) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 65, $this->source); })()), "extra", [], "any", false, false, false, 65), "hit", [], "any", false, false, false, 65), "query", [], "any", false, false, false, 65))) && is_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 65, $this->source); })()), "extra", [], "any", false, false, false, 65), "hit", [], "any", false, false, false, 65), "query", [], "any", false, false, false, 65)))) {
                // line 66
                echo "          ";
                $context["counter"] = 0;
                // line 67
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 67, $this->source); })()), "extra", [], "any", false, false, false, 67), "hit", [], "any", false, false, false, 67), "query", [], "any", false, false, false, 67));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 68
                    echo "              ";
                    if (( !twig_test_empty($context["v"]) && !twig_in_filter($context["k"], ["ct", "page_title", "page_referrer", "page_url"]))) {
                        // line 69
                        echo "                ";
                        if (is_iterable($context["v"])) {
                            // line 70
                            echo "                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["v"]);
                            foreach ($context['_seq'] as $context["k2"] => $context["v2"]) {
                                // line 71
                                echo "                        ";
                                $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 71, $this->source); })()) + 1);
                                // line 72
                                echo "                        ";
                                $context["k2"] = twig_title_string_filter($this->env, twig_replace_filter($context["k"], ["_" => " "]));
                                // line 73
                                echo "                        <dt>";
                                echo twig_escape_filter($this->env, $context["k2"], "html", null, true);
                                echo ":</dt>
                        <dd class=\"ellipsis\">";
                                // line 74
                                echo twig_escape_filter($this->env, $context["v2"], "html", null, true);
                                echo "</dd>
                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['k2'], $context['v2'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 76
                            echo "                ";
                        } else {
                            // line 77
                            echo "                    ";
                            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 77, $this->source); })()) + 1);
                            // line 78
                            echo "                    ";
                            $context["k"] = twig_title_string_filter($this->env, twig_replace_filter($context["k"], ["_" => " "]));
                            // line 79
                            echo "                    <dt>";
                            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                            echo "</dt>
                    <dd class=\"ellipsis\">";
                            // line 80
                            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                            echo "</dd>
                ";
                        }
                        // line 82
                        echo "
                ";
                        // line 83
                        if (( !array_key_exists("showMore", $context) && ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 83, $this->source); })()) > 5))) {
                            // line 84
                            echo "                    ";
                            $context["showMore"] = true;
                            // line 85
                            echo "                    <div style=\"display:none\">
                ";
                        }
                        // line 87
                        echo "
              ";
                    }
                    // line 89
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "
          ";
                // line 91
                if ((array_key_exists("showMore", $context) && (true == (isset($context["showMore"]) || array_key_exists("showMore", $context) ? $context["showMore"] : (function () { throw new RuntimeError('Variable "showMore" does not exist.', 91, $this->source); })())))) {
                    // line 92
                    echo "              </div>
              <a href=\"javascript:void(0);\" class=\"text-center small center-block mt-xs\" onclick=\"Mautic.toggleTimelineMoreVisiblity(mQuery(this).prev());\">";
                    // line 93
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.show"), "html", null, true);
                    echo "</a>
          ";
                }
                // line 95
                echo "      ";
            }
            // line 96
            echo "  </dl>
  <div class=\"small\">
      ";
            // line 98
            echo twig_escape_filter($this->env, Mautic\CoreBundle\Helper\InputHelper::clean(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 98, $this->source); })()), "extra", [], "any", false, false, false, 98), "hit", [], "any", false, false, false, 98), "userAgent", [], "any", false, false, false, 98)), "html", null, true);
            echo "
  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPage/SubscribedEvents/Timeline/index.html.twig";
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
        return array (  334 => 98,  330 => 96,  327 => 95,  322 => 93,  319 => 92,  317 => 91,  314 => 90,  308 => 89,  304 => 87,  300 => 85,  297 => 84,  295 => 83,  292 => 82,  287 => 80,  282 => 79,  279 => 78,  276 => 77,  273 => 76,  265 => 74,  260 => 73,  257 => 72,  254 => 71,  249 => 70,  246 => 69,  243 => 68,  238 => 67,  235 => 66,  233 => 65,  230 => 64,  227 => 63,  223 => 61,  214 => 59,  210 => 58,  204 => 56,  202 => 55,  198 => 53,  192 => 51,  184 => 49,  182 => 48,  176 => 46,  174 => 45,  171 => 44,  166 => 42,  161 => 41,  159 => 40,  156 => 39,  151 => 37,  146 => 36,  144 => 35,  141 => 34,  136 => 32,  131 => 31,  129 => 30,  126 => 29,  121 => 27,  116 => 26,  114 => 25,  105 => 23,  101 => 22,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 16,  74 => 15,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  50 => 6,  47 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPage/SubscribedEvents/Timeline/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Resources\\views\\SubscribedEvents\\Timeline\\index.html.twig");
    }
}
