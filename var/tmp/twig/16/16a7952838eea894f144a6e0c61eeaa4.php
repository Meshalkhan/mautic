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

/* @MauticEmail/SubscribedEvents/Timeline/index.html.twig */
class __TwigTemplate_d953e0cd51e0de8baff812b015b4fec9 extends Template
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
        $context["item"] = (((twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", true, true, false, 6) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 6, $this->source); })()), "extra", [], "any", false, false, false, 6)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 6, $this->source); })()), "extra", [], "any", false, false, false, 6), "stat", [], "any", false, false, false, 6)) : (false));
        // line 7
        if (((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()) != false)) {
            // line 8
            echo "    <p>
        ";
            // line 9
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "isFailed", [], "any", false, false, false, 9)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "isFailed", [], "any", false, false, false, 9))) {
                // line 10
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "openDetails", [], "any", false, true, false, 10), "bouces", [], "any", true, true, false, 10)) {
                    // line 11
                    echo "                <span class=\"label label-warning\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.timeline.event.bounced"), "html", null, true);
                    echo "\">
                    ";
                    // line 12
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.timeline.event.bounced"), "html", null, true);
                    echo "
                </span>
            ";
                } else {
                    // line 15
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.timeline.event.failed"), "html", null, true);
                    echo "
            ";
                }
                // line 17
                echo "        ";
            } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "dateRead", [], "any", false, false, false, 17))) {
                // line 18
                echo "            ";
                echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.timeline.event.not.read"));
                echo "
        ";
            } else {
                // line 20
                echo "            ";
                echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.email.timeline.event." . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 20, $this->source); })()), "extra", [], "array", false, false, false, 20), "type", [], "array", false, false, false, 20)), ["%date%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source,                 // line 21
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "timestamp", [], "any", false, false, false, 21)), "%interval%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->formatRange(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 22
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "dateSent", [], "any", false, false, false, 22), "diff", [twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "timestamp", [], "any", false, false, false, 22)], "method", false, false, false, 22)), "%sent%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source,                 // line 23
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "dateSent", [], "any", false, false, false, 23))]));
                // line 24
                echo "
        ";
            }
            // line 26
            echo "
        ";
            // line 27
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "viewedInBrowser", [], "any", false, false, false, 27)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "viewedInBrowser", [], "any", false, false, false, 27))) {
                // line 28
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.timeline.event.viewed.in.browser"), "html", null, true);
                echo "
        ";
            }
            // line 30
            echo "
        ";
            // line 31
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "retryCount", [], "any", false, false, false, 31)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "retryCount", [], "any", false, false, false, 31))) {
                // line 32
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.timeline.event.retried", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 32, $this->source); })()), "retryCount", [], "array", false, false, false, 32)]), "html", null, true);
                echo "
        ";
            }
            // line 34
            echo "
        ";
            // line 35
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })()), "list_name", [], "any", false, false, false, 35))) {
                // line 36
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.timeline.event.list", ["%list%" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "list_name", [], "array", false, false, false, 36)]), "html", null, true);
                echo "
        ";
            }
            // line 38
            echo "    </p>
    <div class=\"small\">
      ";
            // line 40
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 40, $this->source); })()), "openDetails", [], "any", false, false, false, 40))) {
                // line 41
                echo "        <h6 class=\"mt-lg mb-sm\"><strong>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.timeline.open_details"), "html", null, true);
                echo "</strong></h6>
        ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "openDetails", [], "any", false, false, false, 42));
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
                foreach ($context['_seq'] as $context["key"] => $context["detail"]) {
                    // line 43
                    echo "            ";
                    if (("bounces" != $context["key"])) {
                        // line 44
                        echo "              ";
                        if (( !array_key_exists("showMore", $context) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 44) > 5))) {
                            // line 45
                            echo "                  ";
                            $context["showMore"] = true;
                            // line 46
                            echo "                  <div style=\"display:none\">
              ";
                        }
                        // line 48
                        echo "              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48) > 1)) {
                            echo "<hr/>";
                        }
                        // line 49
                        echo "              <strong>";
                        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(twig_get_attribute($this->env, $this->source, $context["detail"], "datetime", [], "array", false, false, false, 49), "UTC");
                        echo "</strong><br/>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "useragent", [], "array", false, false, false, 49));
                        echo "
            ";
                    }
                    // line 51
                    echo "        ";
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
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['detail'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "        ";
                if (array_key_exists("showMore", $context)) {
                    // line 53
                    echo "            </div>
            <a href=\"javascript:void(0);\" class=\"text-center small center-block mt-xs\" onclick=\"Mautic.toggleTimelineMoreVisiblity(mQuery(this).prev());\">";
                    // line 54
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.show"), "html", null, true);
                    echo "</a>
        ";
                }
                // line 56
                echo "      ";
            }
            // line 57
            echo "    </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticEmail/SubscribedEvents/Timeline/index.html.twig";
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
        return array (  200 => 57,  197 => 56,  192 => 54,  189 => 53,  186 => 52,  172 => 51,  164 => 49,  159 => 48,  155 => 46,  152 => 45,  149 => 44,  146 => 43,  129 => 42,  124 => 41,  122 => 40,  118 => 38,  112 => 36,  110 => 35,  107 => 34,  101 => 32,  99 => 31,  96 => 30,  90 => 28,  88 => 27,  85 => 26,  81 => 24,  79 => 23,  78 => 22,  77 => 21,  75 => 20,  69 => 18,  66 => 17,  60 => 15,  54 => 12,  49 => 11,  46 => 10,  44 => 9,  41 => 8,  39 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmail/SubscribedEvents/Timeline/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\SubscribedEvents\\Timeline\\index.html.twig");
    }
}
