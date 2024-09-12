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

/* @MauticCore/Variant/index.html.twig */
class __TwigTemplate_5c68a8833cae73b0970ad6b483e9a88e extends Template
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
        // line 10
        ob_start(function () { return ''; });
        // line 11
        $context["nameGetter"] = ((array_key_exists("nameGetter", $context)) ? (_twig_default_filter((isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 11, $this->source); })()), "getName")) : ("getName"));
        // line 12
        $context["totalWeight"] = 0;
        // line 13
        $context["abStatsHeader"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.ab_test.stats");
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["variants"] ?? null), "properties", [], "any", true, true, false, 14) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 14, $this->source); })()), "properties", [], "any", false, false, false, 14)))) {
            // line 15
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 15, $this->source); })()), "parent", [], "any", false, false, false, 15), "variantStartDate", [], "any", false, false, false, 15))) {
                // line 16
                echo "    <div class=\"box-layout mb-lg\">
        <div class=\"col-xs-10 va-m\">
            <h4>
                    ";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_start_date", ["%time%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toTime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 20
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 20, $this->source); })()), "parent", [], "any", false, false, false, 20), "variantStartDate", [], "any", false, false, false, 20)), "%date%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toShort(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 21
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 21, $this->source); })()), "parent", [], "any", false, false, false, 21), "variantStartDate", [], "any", false, false, false, 21)), "%full%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toTime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 22
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 22, $this->source); })()), "parent", [], "any", false, false, false, 22), "variantStartDate", [], "any", false, false, false, 22))]), "html", null, true);
                // line 23
                echo "
            </h4>
        </div>
        <!-- button -->
        <div class=\"col-xs-2 va-m text-right\">
            <a href=\"#\" data-toggle=\"modal\" data-target=\"#abStatsModal\" class=\"btn btn-primary\">
                ";
                // line 29
                echo twig_escape_filter($this->env, (isset($context["abStatsHeader"]) || array_key_exists("abStatsHeader", $context) ? $context["abStatsHeader"] : (function () { throw new RuntimeError('Variable "abStatsHeader" does not exist.', 29, $this->source); })()), "html", null, true);
                echo "
            </a>
        </div>
    </div>
  ";
            }
            // line 34
            echo "  <!--/ header -->

  <!-- start: variants list -->
  <ul class=\"list-group\">
      ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 38, $this->source); })()), "parent", [], "any", false, false, false, 38)) {
                // line 39
                echo "          ";
                // line 40
                echo "          ";
                echo twig_include($this->env, $context, "@MauticCore/Variant/row.html.twig", ["totalWeight" =>                 // line 41
(isset($context["totalWeight"]) || array_key_exists("totalWeight", $context) ? $context["totalWeight"] : (function () { throw new RuntimeError('Variable "totalWeight" does not exist.', 41, $this->source); })()), "variant" => twig_get_attribute($this->env, $this->source,                 // line 42
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 42, $this->source); })()), "parent", [], "any", false, false, false, 42), "variants" =>                 // line 43
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 43, $this->source); })()), "abTestResults" =>                 // line 44
(isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 44, $this->source); })()), "actionRoute" =>                 // line 45
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 45, $this->source); })()), "activeEntity" =>                 // line 46
(isset($context["activeEntity"]) || array_key_exists("activeEntity", $context) ? $context["activeEntity"] : (function () { throw new RuntimeError('Variable "activeEntity" does not exist.', 46, $this->source); })()), "model" =>                 // line 47
(isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 47, $this->source); })()), "nameGetter" =>                 // line 48
(isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 48, $this->source); })())]);
                // line 49
                echo "
      ";
            }
            // line 51
            echo "      ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 51, $this->source); })()), "children", [], "any", false, false, false, 51)) > 0)) {
                // line 52
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 52, $this->source); })()), "children", [], "any", false, false, false, 52));
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
                foreach ($context['_seq'] as $context["id"] => $context["variant"]) {
                    // line 53
                    echo "              ";
                    // line 54
                    echo "              ";
                    echo twig_include($this->env, $context, "@MauticCore/Variant/row.html.twig", ["totalWeight" =>                     // line 55
(isset($context["totalWeight"]) || array_key_exists("totalWeight", $context) ? $context["totalWeight"] : (function () { throw new RuntimeError('Variable "totalWeight" does not exist.', 55, $this->source); })()), "variant" =>                     // line 56
$context["variant"], "variants" =>                     // line 57
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 57, $this->source); })()), "abTestResults" =>                     // line 58
(isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 58, $this->source); })()), "actionRoute" =>                     // line 59
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 59, $this->source); })()), "activeEntity" =>                     // line 60
(isset($context["activeEntity"]) || array_key_exists("activeEntity", $context) ? $context["activeEntity"] : (function () { throw new RuntimeError('Variable "activeEntity" does not exist.', 60, $this->source); })()), "model" =>                     // line 61
(isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 61, $this->source); })()), "nameGetter" =>                     // line 62
(isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 62, $this->source); })())]);
                    // line 63
                    echo "
          ";
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
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['variant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "      ";
            }
            // line 66
            echo "  </ul>
  <!--/ end: variants list -->

  ";
            // line 69
            $context["bodyContent"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.ab_test.noresults");
            // line 70
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, ($context["abTestResults"] ?? null), "supportTemplate", [], "any", true, true, false, 70)) {
                // line 71
                echo "      ";
                $context["bodyContent"] = twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 71, $this->source); })()), "supportTemplate", [], "any", false, false, false, 71), ["results" => (isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 71, $this->source); })()), "variants" => (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 71, $this->source); })())]);
                // line 72
                echo "  ";
            }
            // line 73
            echo "  ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "abStatsModal", "header" =>             // line 75
(isset($context["abStatsHeader"]) || array_key_exists("abStatsHeader", $context) ? $context["abStatsHeader"] : (function () { throw new RuntimeError('Variable "abStatsHeader" does not exist.', 75, $this->source); })()), "body" =>             // line 76
(isset($context["bodyContent"]) || array_key_exists("bodyContent", $context) ? $context["bodyContent"] : (function () { throw new RuntimeError('Variable "bodyContent" does not exist.', 76, $this->source); })()), "size" => "lg"]);
        }
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        echo twig_spaceless($___internal_parse_2_);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Variant/index.html.twig";
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
        return array (  175 => 10,  171 => 76,  170 => 75,  168 => 73,  165 => 72,  162 => 71,  159 => 70,  157 => 69,  152 => 66,  149 => 65,  134 => 63,  132 => 62,  131 => 61,  130 => 60,  129 => 59,  128 => 58,  127 => 57,  126 => 56,  125 => 55,  123 => 54,  121 => 53,  103 => 52,  100 => 51,  96 => 49,  94 => 48,  93 => 47,  92 => 46,  91 => 45,  90 => 44,  89 => 43,  88 => 42,  87 => 41,  85 => 40,  83 => 39,  81 => 38,  75 => 34,  67 => 29,  59 => 23,  57 => 22,  56 => 21,  55 => 20,  54 => 19,  49 => 16,  47 => 15,  45 => 14,  43 => 13,  41 => 12,  39 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Variant/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Variant\\index.html.twig");
    }
}
