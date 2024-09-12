<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @MauticCore/Variant/index.html.twig */
class __TwigTemplate_da458a948712ff726065dc4608607032 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        $___internal_parse_2_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            $context["nameGetter"] = ((array_key_exists("nameGetter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 11, $this->source); })()), "getName")) : ("getName"));
            // line 12
            $context["totalWeight"] = 0;
            // line 13
            $context["abStatsHeader"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.ab_test.stats");
            // line 14
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["variants"] ?? null), "properties", [], "any", true, true, false, 14) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 14, $this->source); })()), "properties", [], "any", false, false, false, 14)))) {
                // line 15
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 15, $this->source); })()), "parent", [], "any", false, false, false, 15), "variantStartDate", [], "any", false, false, false, 15))) {
                    // line 16
                    yield "    <div class=\"box-layout mb-lg\">
        <div class=\"col-xs-10 va-m\">
            <h4>
                    ";
                    // line 19
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_start_date", ["%time%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toTime(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 20
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 20, $this->source); })()), "parent", [], "any", false, false, false, 20), "variantStartDate", [], "any", false, false, false, 20)), "%date%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toShort(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 21
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 21, $this->source); })()), "parent", [], "any", false, false, false, 21), "variantStartDate", [], "any", false, false, false, 21)), "%full%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toTime(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 22
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 22, $this->source); })()), "parent", [], "any", false, false, false, 22), "variantStartDate", [], "any", false, false, false, 22))]), "html", null, true);
                    // line 23
                    yield "
            </h4>
        </div>
        <!-- button -->
        <div class=\"col-xs-2 va-m text-right\">
            <a href=\"#\" data-toggle=\"modal\" data-target=\"#abStatsModal\" class=\"btn btn-primary\">
                ";
                    // line 29
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["abStatsHeader"]) || array_key_exists("abStatsHeader", $context) ? $context["abStatsHeader"] : (function () { throw new RuntimeError('Variable "abStatsHeader" does not exist.', 29, $this->source); })()), "html", null, true);
                    yield "
            </a>
        </div>
    </div>
  ";
                }
                // line 34
                yield "  <!--/ header -->

  <!-- start: variants list -->
  <ul class=\"list-group\">
      ";
                // line 38
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 38, $this->source); })()), "parent", [], "any", false, false, false, 38)) {
                    // line 39
                    yield "          ";
                    // line 40
                    yield "          ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Variant/row.html.twig", ["totalWeight" =>                     // line 41
(isset($context["totalWeight"]) || array_key_exists("totalWeight", $context) ? $context["totalWeight"] : (function () { throw new RuntimeError('Variable "totalWeight" does not exist.', 41, $this->source); })()), "variant" => CoreExtension::getAttribute($this->env, $this->source,                     // line 42
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 42, $this->source); })()), "parent", [], "any", false, false, false, 42), "variants" =>                     // line 43
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 43, $this->source); })()), "abTestResults" =>                     // line 44
(isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 44, $this->source); })()), "actionRoute" =>                     // line 45
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 45, $this->source); })()), "activeEntity" =>                     // line 46
(isset($context["activeEntity"]) || array_key_exists("activeEntity", $context) ? $context["activeEntity"] : (function () { throw new RuntimeError('Variable "activeEntity" does not exist.', 46, $this->source); })()), "model" =>                     // line 47
(isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 47, $this->source); })()), "nameGetter" =>                     // line 48
(isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 48, $this->source); })())]);
                    // line 49
                    yield "
      ";
                }
                // line 51
                yield "      ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 51, $this->source); })()), "children", [], "any", false, false, false, 51)) > 0)) {
                    // line 52
                    yield "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 52, $this->source); })()), "children", [], "any", false, false, false, 52));
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
                        yield "              ";
                        // line 54
                        yield "              ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Variant/row.html.twig", ["totalWeight" =>                         // line 55
(isset($context["totalWeight"]) || array_key_exists("totalWeight", $context) ? $context["totalWeight"] : (function () { throw new RuntimeError('Variable "totalWeight" does not exist.', 55, $this->source); })()), "variant" =>                         // line 56
$context["variant"], "variants" =>                         // line 57
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 57, $this->source); })()), "abTestResults" =>                         // line 58
(isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 58, $this->source); })()), "actionRoute" =>                         // line 59
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 59, $this->source); })()), "activeEntity" =>                         // line 60
(isset($context["activeEntity"]) || array_key_exists("activeEntity", $context) ? $context["activeEntity"] : (function () { throw new RuntimeError('Variable "activeEntity" does not exist.', 60, $this->source); })()), "model" =>                         // line 61
(isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 61, $this->source); })()), "nameGetter" =>                         // line 62
(isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 62, $this->source); })())]);
                        // line 63
                        yield "
          ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['id'], $context['variant'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    yield "      ";
                }
                // line 66
                yield "  </ul>
  <!--/ end: variants list -->

  ";
                // line 69
                $context["bodyContent"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.ab_test.noresults");
                // line 70
                yield "  ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["abTestResults"] ?? null), "supportTemplate", [], "any", true, true, false, 70)) {
                    // line 71
                    yield "      ";
                    $context["bodyContent"] = Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 71, $this->source); })()), "supportTemplate", [], "any", false, false, false, 71), ["results" => (isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 71, $this->source); })()), "variants" => (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 71, $this->source); })())]);
                    // line 72
                    yield "  ";
                }
                // line 73
                yield "  ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "abStatsModal", "header" =>                 // line 75
(isset($context["abStatsHeader"]) || array_key_exists("abStatsHeader", $context) ? $context["abStatsHeader"] : (function () { throw new RuntimeError('Variable "abStatsHeader" does not exist.', 75, $this->source); })()), "body" =>                 // line 76
(isset($context["bodyContent"]) || array_key_exists("bodyContent", $context) ? $context["bodyContent"] : (function () { throw new RuntimeError('Variable "bodyContent" does not exist.', 76, $this->source); })()), "size" => "lg"]);
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_2_);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Variant/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  181 => 10,  176 => 76,  175 => 75,  173 => 73,  170 => 72,  167 => 71,  164 => 70,  162 => 69,  157 => 66,  154 => 65,  139 => 63,  137 => 62,  136 => 61,  135 => 60,  134 => 59,  133 => 58,  132 => 57,  131 => 56,  130 => 55,  128 => 54,  126 => 53,  108 => 52,  105 => 51,  101 => 49,  99 => 48,  98 => 47,  97 => 46,  96 => 45,  95 => 44,  94 => 43,  93 => 42,  92 => 41,  90 => 40,  88 => 39,  86 => 38,  80 => 34,  72 => 29,  64 => 23,  62 => 22,  61 => 21,  60 => 20,  59 => 19,  54 => 16,  52 => 15,  50 => 14,  48 => 13,  46 => 12,  44 => 11,  42 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Variant/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Variant\\index.html.twig");
    }
}
