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

/* @MauticLead/SubscribedEvents/Timeline/utmadded.html.twig */
class __TwigTemplate_1fe864ea36bbf457607c23636c74cdea extends Template
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
        $context["utmTags"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 5, $this->source); })()), "extra", [], "any", false, false, false, 5), "utmtags", [], "any", false, false, false, 5);
        // line 6
        echo "<dl class=\"dl-horizontal\">
  ";
        // line 7
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 7, $this->source); })()), "utm_campaign", [], "any", false, false, false, 7))) {
            // line 8
            echo "    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.event.utmcampaign"), "html", null, true);
            echo ":</dt>
    <dd>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 9, $this->source); })()), "utm_campaign", [], "array", false, false, false, 9), "html", null, true);
            echo "</dd>
  ";
        }
        // line 11
        echo "  ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 11, $this->source); })()), "utm_content", [], "any", false, false, false, 11))) {
            // line 12
            echo "    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.event.utmcontent"), "html", null, true);
            echo ":</dt>
    <dd>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 13, $this->source); })()), "utm_content", [], "array", false, false, false, 13), "html", null, true);
            echo "</dd>
  ";
        }
        // line 15
        echo "  ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 15, $this->source); })()), "utm_medium", [], "any", false, false, false, 15))) {
            // line 16
            echo "    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.event.utmmedium"), "html", null, true);
            echo ":</dt>
    <dd>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 17, $this->source); })()), "utm_medium", [], "array", false, false, false, 17), "html", null, true);
            echo "</dd>
  ";
        }
        // line 19
        echo "  ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 19, $this->source); })()), "utm_source", [], "any", false, false, false, 19))) {
            // line 20
            echo "    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.event.umtsource"), "html", null, true);
            echo ":</dt>
    <dd>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 21, $this->source); })()), "utm_source", [], "array", false, false, false, 21), "html", null, true);
            echo "</dd>
  ";
        }
        // line 23
        echo "  ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 23, $this->source); })()), "utm_term", [], "any", false, false, false, 23))) {
            // line 24
            echo "    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.event.utmterm"), "html", null, true);
            echo ":</dt>
    <dd>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 25, $this->source); })()), "utm_term", [], "array", false, false, false, 25), "html", null, true);
            echo "</dd>
  ";
        }
        // line 27
        echo "  ";
        $context["counter"] = 1;
        // line 28
        echo "  ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 28, $this->source); })()), "query", [], "any", false, false, false, 28))) {
            // line 29
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 29, $this->source); })()), "query", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 30
                echo "          ";
                // line 31
                echo "          ";
                $context["v"] = Mautic\CoreBundle\Helper\InputHelper::clean($context["v"]);
                // line 32
                echo "          ";
                if (((!twig_in_filter(                // line 33
$context["v"], ["", null, []]) && !twig_in_filter(                // line 34
$context["k"], ["ct", "page_title", "page_referrer", "page_url", "utm_campaign", "utm_source", "utm_medium", "utm_content", "utm_term"])) &&  !twig_test_empty(                // line 35
$context["v"]))) {
                    // line 37
                    echo "              ";
                    $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 37, $this->source); })()) + 1);
                    // line 38
                    echo "              ";
                    $context["k"] = twig_upper_filter($this->env, twig_replace_filter($context["k"], ["_" => " "]));
                    // line 39
                    echo "
              <dt>";
                    // line 40
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo ":</dt>
              <dd>";
                    // line 41
                    echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                    echo "</dd>

              ";
                    // line 43
                    if (( !array_key_exists("showMore", $context) && ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 43, $this->source); })()) > 5))) {
                        // line 44
                        echo "                  ";
                        $context["showMore"] = true;
                        // line 45
                        echo "                  <div style=\"display:none\">
              ";
                    }
                    // line 47
                    echo "          ";
                }
                // line 48
                echo "
          ";
                // line 49
                if ((array_key_exists("showMore", $context) && ((isset($context["showMore"]) || array_key_exists("showMore", $context) ? $context["showMore"] : (function () { throw new RuntimeError('Variable "showMore" does not exist.', 49, $this->source); })()) == true))) {
                    // line 50
                    echo "              </div>
              <a href=\"javascript:void(0);\" class=\"text-center small center-block mt-xs\" onclick=\"Mautic.toggleTimelineMoreVisiblity(mQuery(this).prev());\">";
                    // line 52
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.show"), "html", null, true);
                    // line 53
                    echo "</a>
          ";
                }
                // line 55
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "  ";
        }
        // line 57
        echo "</dl>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/SubscribedEvents/Timeline/utmadded.html.twig";
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
        return array (  181 => 57,  178 => 56,  172 => 55,  168 => 53,  166 => 52,  163 => 50,  161 => 49,  158 => 48,  155 => 47,  151 => 45,  148 => 44,  146 => 43,  141 => 41,  137 => 40,  134 => 39,  131 => 38,  128 => 37,  126 => 35,  125 => 34,  124 => 33,  122 => 32,  119 => 31,  117 => 30,  112 => 29,  109 => 28,  106 => 27,  101 => 25,  96 => 24,  93 => 23,  88 => 21,  83 => 20,  80 => 19,  75 => 17,  70 => 16,  67 => 15,  62 => 13,  57 => 12,  54 => 11,  49 => 9,  44 => 8,  42 => 7,  39 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/SubscribedEvents/Timeline/utmadded.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\SubscribedEvents\\Timeline\\utmadded.html.twig");
    }
}
