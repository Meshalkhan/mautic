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

/* @MauticCore/Variant/row.html.twig */
class __TwigTemplate_9e79b9438dbe10b4137a24b21aee2c12 extends Template
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
        // line 13
        $context["id"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13);
        // line 14
        yield "
";
        // line 15
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["variants"] ?? null), "properties", [], "any", false, true, false, 15), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })()), [], "array", true, true, false, 15)) {
            // line 16
            yield "    ";
            $context["settings"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 16, $this->source); })()), "variantSettings", [], "any", false, false, false, 16);
            // line 17
            yield "    ";
            $context["variants"] = Twig\Extension\CoreExtension::merge((isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 17, $this->source); })()), ["properties" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source,             // line 18
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 18, $this->source); })()), "properties", [], "any", false, false, false, 18), [            // line 19
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()) => (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 19, $this->source); })())])]);
        }
        // line 23
        yield "
";
        // line 24
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 24, $this->source); })()), "properties", [], "any", false, false, false, 24), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 24, $this->source); })()), [], "array", false, false, false, 24))) {
            // line 25
            yield "    ";
            $context["thisCriteria"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 25, $this->source); })()), "properties", [], "any", false, false, false, 25), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 25, $this->source); })()), [], "array", false, false, false, 25), "winnerCriteria", [], "any", false, false, false, 25);
            // line 26
            yield "    ";
            $context["weight"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 26, $this->source); })()), "properties", [], "any", false, false, false, 26), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 26, $this->source); })()), [], "array", false, false, false, 26), "weight", [], "any", false, false, false, 26);
            // line 27
            yield "    ";
            $context["criteriaLabel"] = (((isset($context["thisCriteria"]) || array_key_exists("thisCriteria", $context) ? $context["thisCriteria"] : (function () { throw new RuntimeError('Variable "thisCriteria" does not exist.', 27, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 27, $this->source); })()), "criteria", [], "any", false, false, false, 27), (isset($context["thisCriteria"]) || array_key_exists("thisCriteria", $context) ? $context["thisCriteria"] : (function () { throw new RuntimeError('Variable "thisCriteria" does not exist.', 27, $this->source); })()), [], "array", false, false, false, 27), "label", [], "any", false, false, false, 27))) : (""));
        } else {
            // line 29
            yield "    ";
            [$context["thisCriteria"], $context["criteriaLabel"], $context["weight"]] =             ["", "", 0];
        }
        // line 31
        yield "
";
        // line 32
        $context["isPublished"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 32, $this->source); })()), "isPublished", [], "any", false, false, false, 32);
        // line 33
        $context["totalWeight"] = ((isset($context["totalWeight"]) || array_key_exists("totalWeight", $context) ? $context["totalWeight"] : (function () { throw new RuntimeError('Variable "totalWeight" does not exist.', 33, $this->source); })()) + (((isset($context["isPublished"]) || array_key_exists("isPublished", $context) ? $context["isPublished"] : (function () { throw new RuntimeError('Variable "isPublished" does not exist.', 33, $this->source); })())) ? ((isset($context["weight"]) || array_key_exists("weight", $context) ? $context["weight"] : (function () { throw new RuntimeError('Variable "weight" does not exist.', 33, $this->source); })())) : (0)));
        // line 34
        $context["firstCriteria"] = ((array_key_exists("firstCriteria", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["firstCriteria"]) || array_key_exists("firstCriteria", $context) ? $context["firstCriteria"] : (function () { throw new RuntimeError('Variable "firstCriteria" does not exist.', 34, $this->source); })()), (isset($context["thisCriteria"]) || array_key_exists("thisCriteria", $context) ? $context["thisCriteria"] : (function () { throw new RuntimeError('Variable "thisCriteria" does not exist.', 34, $this->source); })()))) : ((isset($context["thisCriteria"]) || array_key_exists("thisCriteria", $context) ? $context["thisCriteria"] : (function () { throw new RuntimeError('Variable "thisCriteria" does not exist.', 34, $this->source); })())));
        // line 35
        $context["isWinner"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["abTestResults"] ?? null), "winners", [], "any", true, true, false, 35) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, (isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 35, $this->source); })()), "winners", [], "any", false, false, false, 35))) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 35, $this->source); })()), "parent", [], "any", false, false, false, 35), "variantStartDate", [], "any", false, false, false, 35)) && (isset($context["isPublished"]) || array_key_exists("isPublished", $context) ? $context["isPublished"] : (function () { throw new RuntimeError('Variable "isPublished" does not exist.', 35, $this->source); })()));
        // line 36
        $context["actionUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 36, $this->source); })()), ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]);
        // line 37
        $context["isCurrent"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37) === CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeEntity"]) || array_key_exists("activeEntity", $context) ? $context["activeEntity"] : (function () { throw new RuntimeError('Variable "activeEntity" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37));
        // line 38
        yield "
<li class=\"list-group-item bg-";
        // line 39
        if ((isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new RuntimeError('Variable "isCurrent" does not exist.', 39, $this->source); })())) {
            yield "dark";
        } else {
            yield "light";
        }
        yield "-xs\">
    <div class=\"box-layout\">
        <div class=\"col-md-8 va-m\">
            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <h3>
                        ";
        // line 45
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>         // line 46
(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 46, $this->source); })()), "model" =>         // line 47
(isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 47, $this->source); })()), "size" => "", "query" => "size="]);
        // line 50
        yield "
                    </h3>
                </div>
                <div class=\"col-xs-11\">
                    ";
        // line 54
        if ((isset($context["isWinner"]) || array_key_exists("isWinner", $context) ? $context["isWinner"] : (function () { throw new RuntimeError('Variable "isWinner" does not exist.', 54, $this->source); })())) {
            // line 55
            yield "                        <div class=\"mr-xs pull-left\" data-toggle=\"tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.ab_test.make_winner"), "html", null, true);
            yield "\">
                            <a class=\"btn btn-warning\"
                               data-toggle=\"confirmation\"
                               href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 58, $this->source); })()), ["objectAction" => "winner", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\"
                               data-message=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.ab_test.confirm_make_winner", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 59, $this->source); })()), (isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 59, $this->source); })()), [], "any", false, false, false, 59)]));
            yield "\"
                               data-confirm-text=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.ab_test.make_winner"));
            yield "\"
                               data-confirm-callback=\"executeAction\"
                               data-cancel-text=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"));
            yield "\">
                                <i class=\"fa fa-trophy\"></i>
                            </a>
                        </div>
                    ";
        }
        // line 67
        yield "                    <h5 class=\"fw-sb text-primary\">
                        <a href=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["actionUrl"]) || array_key_exists("actionUrl", $context) ? $context["actionUrl"] : (function () { throw new RuntimeError('Variable "actionUrl" does not exist.', 68, $this->source); })()), "html", null, true);
        yield "\" data-toggle=\"ajax\">
                            ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 69, $this->source); })()), (isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 69, $this->source); })()), [], "any", false, false, false, 69), "html", null, true);
        yield "
                        </a>
                        ";
        // line 71
        if ((isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new RuntimeError('Variable "isCurrent" does not exist.', 71, $this->source); })())) {
            // line 72
            yield "                            &nbsp;<span class=\"label label-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.current"), "html", null, true);
            yield "</span>
                        ";
        }
        // line 74
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 74, $this->source); })()), "parent", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74) === CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74))) {
            // line 75
            yield "                            &nbsp;<span class=\"label label-warning\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.parent"), "html", null, true);
            yield "</span>
                        ";
        }
        // line 77
        yield "                        ";
        if (($this->env->getTest('instanceof')->getCallable()((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 77, $this->source); })()), "\\Mautic\\CoreBundle\\Entity\\TranslationEntityInterface") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 77, $this->source); })()), "isTranslation", [], "any", false, false, false, 77))) {
            // line 78
            yield "                            &nbsp;<span data-toggle=\"tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.translation"), "html", null, true);
            yield "\">
                                <i class=\"fa fa-fw fa-language\"></i>
                            </span>
                        ";
        }
        // line 82
        yield "                    </h5>
                    ";
        // line 83
        if ($this->env->getFunction('method_exists')->getCallable()((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 83, $this->source); })()), "getAlias")) {
            // line 84
            yield "                        <span class=\"text-white dark-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 84, $this->source); })()), "alias", [], "any", false, false, false, 84), "html", null, true);
            yield "</span>
                    ";
        }
        // line 86
        yield "                </div>
            </div>
        </div>
        <div class=\"col-md-4 va-t text-right\">
            <em class=\"text-white dark-sm\">
                ";
        // line 91
        if (((isset($context["isPublished"]) || array_key_exists("isPublished", $context) ? $context["isPublished"] : (function () { throw new RuntimeError('Variable "isPublished" does not exist.', 91, $this->source); })()) && (((isset($context["totalWeight"]) || array_key_exists("totalWeight", $context) ? $context["totalWeight"] : (function () { throw new RuntimeError('Variable "totalWeight" does not exist.', 91, $this->source); })()) > 100) || ((isset($context["thisCriteria"]) || array_key_exists("thisCriteria", $context) ? $context["thisCriteria"] : (function () { throw new RuntimeError('Variable "thisCriteria" does not exist.', 91, $this->source); })()) && ((isset($context["firstCriteria"]) || array_key_exists("firstCriteria", $context) ? $context["firstCriteria"] : (function () { throw new RuntimeError('Variable "firstCriteria" does not exist.', 91, $this->source); })()) != (isset($context["thisCriteria"]) || array_key_exists("thisCriteria", $context) ? $context["thisCriteria"] : (function () { throw new RuntimeError('Variable "thisCriteria" does not exist.', 91, $this->source); })())))))) {
            // line 92
            yield "                    <div class=\"text-danger\" data-toggle=\"label label-danger\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant.misconfiguration"), "html", null, true);
            yield "\">
                        <div><span class=\"badge\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["weight"]) || array_key_exists("weight", $context) ? $context["weight"] : (function () { throw new RuntimeError('Variable "weight" does not exist.', 93, $this->source); })()), "html", null, true);
            yield "%</span></div>
                        <div><i class=\"fa fa-fw fa-exclamation-triangle\"></i>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["criteriaLabel"]) || array_key_exists("criteriaLabel", $context) ? $context["criteriaLabel"] : (function () { throw new RuntimeError('Variable "criteriaLabel" does not exist.', 94, $this->source); })()), "html", null, true);
            yield "</div>
                    </div>
                ";
        } elseif ((        // line 96
(isset($context["isPublished"]) || array_key_exists("isPublished", $context) ? $context["isPublished"] : (function () { throw new RuntimeError('Variable "isPublished" does not exist.', 96, $this->source); })()) && (isset($context["criteriaLabel"]) || array_key_exists("criteriaLabel", $context) ? $context["criteriaLabel"] : (function () { throw new RuntimeError('Variable "criteriaLabel" does not exist.', 96, $this->source); })()))) {
            // line 97
            yield "                    <div class=\"text-success\">
                        <div><span class=\"label label-success\">";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["weight"]) || array_key_exists("weight", $context) ? $context["weight"] : (function () { throw new RuntimeError('Variable "weight" does not exist.', 98, $this->source); })()), "html", null, true);
            yield "%</span></div>
                        <div><i class=\"fa fa-fw fa-check\"></i>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["criteriaLabel"]) || array_key_exists("criteriaLabel", $context) ? $context["criteriaLabel"] : (function () { throw new RuntimeError('Variable "criteriaLabel" does not exist.', 99, $this->source); })()), "html", null, true);
            yield "</div>
                    </div>
                ";
        } else {
            // line 102
            yield "                    <div class=\"text-muted\">
                        <div><span class=\"label label-default\">";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["weight"]) || array_key_exists("weight", $context) ? $context["weight"] : (function () { throw new RuntimeError('Variable "weight" does not exist.', 103, $this->source); })()), "html", null, true);
            yield "%</span></div>
                        <div>";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["criteriaLabel"]) || array_key_exists("criteriaLabel", $context) ? $context["criteriaLabel"] : (function () { throw new RuntimeError('Variable "criteriaLabel" does not exist.', 104, $this->source); })()), "html", null, true);
            yield "</div>
                    </div>
                ";
        }
        // line 107
        yield "            </em>
        </div>
    </div>
</li>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Variant/row.html.twig";
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
        return array (  250 => 107,  244 => 104,  240 => 103,  237 => 102,  231 => 99,  227 => 98,  224 => 97,  222 => 96,  217 => 94,  213 => 93,  208 => 92,  206 => 91,  199 => 86,  193 => 84,  191 => 83,  188 => 82,  180 => 78,  177 => 77,  171 => 75,  168 => 74,  162 => 72,  160 => 71,  155 => 69,  151 => 68,  148 => 67,  140 => 62,  135 => 60,  131 => 59,  127 => 58,  120 => 55,  118 => 54,  112 => 50,  110 => 47,  109 => 46,  108 => 45,  95 => 39,  92 => 38,  90 => 37,  88 => 36,  86 => 35,  84 => 34,  82 => 33,  80 => 32,  77 => 31,  73 => 29,  69 => 27,  66 => 26,  63 => 25,  61 => 24,  58 => 23,  55 => 19,  54 => 18,  52 => 17,  49 => 16,  47 => 15,  44 => 14,  42 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Variant/row.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Variant\\row.html.twig");
    }
}
