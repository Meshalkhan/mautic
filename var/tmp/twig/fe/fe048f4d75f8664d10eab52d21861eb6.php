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

/* @MauticCore/Variant/row.html.twig */
class __TwigTemplate_a6ac99d8799e2bde241a3895cd38bba8 extends Template
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
        // line 13
        $context["id"] = twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13);
        // line 14
        echo "
";
        // line 15
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["variants"] ?? null), "properties", [], "any", false, true, false, 15), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })()), [], "array", true, true, false, 15)) {
            // line 16
            echo "    ";
            $context["settings"] = twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 16, $this->source); })()), "variantSettings", [], "any", false, false, false, 16);
            // line 17
            echo "    ";
            $context["variants"] = twig_array_merge((isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 17, $this->source); })()), ["properties" => twig_array_merge(twig_get_attribute($this->env, $this->source,             // line 18
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 18, $this->source); })()), "properties", [], "any", false, false, false, 18), [            // line 19
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()) => (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 19, $this->source); })())])]);
        }
        // line 23
        echo "
";
        // line 24
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 24, $this->source); })()), "properties", [], "any", false, false, false, 24), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 24, $this->source); })()), [], "array", false, false, false, 24))) {
            // line 25
            echo "    ";
            $context["thisCriteria"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 25, $this->source); })()), "properties", [], "any", false, false, false, 25), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 25, $this->source); })()), [], "array", false, false, false, 25), "winnerCriteria", [], "any", false, false, false, 25);
            // line 26
            echo "    ";
            $context["weight"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 26, $this->source); })()), "properties", [], "any", false, false, false, 26), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 26, $this->source); })()), [], "array", false, false, false, 26), "weight", [], "any", false, false, false, 26);
            // line 27
            echo "    ";
            $context["criteriaLabel"] = (((isset($context["thisCriteria"]) || array_key_exists("thisCriteria", $context) ? $context["thisCriteria"] : (function () { throw new RuntimeError('Variable "thisCriteria" does not exist.', 27, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 27, $this->source); })()), "criteria", [], "any", false, false, false, 27), (isset($context["thisCriteria"]) || array_key_exists("thisCriteria", $context) ? $context["thisCriteria"] : (function () { throw new RuntimeError('Variable "thisCriteria" does not exist.', 27, $this->source); })()), [], "array", false, false, false, 27), "label", [], "any", false, false, false, 27))) : (""));
        } else {
            // line 29
            echo "    ";
            list($context["thisCriteria"], $context["criteriaLabel"], $context["weight"]) =             ["", "", 0];
        }
        // line 31
        echo "
";
        // line 32
        $context["isPublished"] = twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 32, $this->source); })()), "isPublished", [], "any", false, false, false, 32);
        // line 33
        $context["totalWeight"] = ((isset($context["totalWeight"]) || array_key_exists("totalWeight", $context) ? $context["totalWeight"] : (function () { throw new RuntimeError('Variable "totalWeight" does not exist.', 33, $this->source); })()) + (((isset($context["isPublished"]) || array_key_exists("isPublished", $context) ? $context["isPublished"] : (function () { throw new RuntimeError('Variable "isPublished" does not exist.', 33, $this->source); })())) ? ((isset($context["weight"]) || array_key_exists("weight", $context) ? $context["weight"] : (function () { throw new RuntimeError('Variable "weight" does not exist.', 33, $this->source); })())) : (0)));
        // line 34
        $context["firstCriteria"] = ((array_key_exists("firstCriteria", $context)) ? (_twig_default_filter((isset($context["firstCriteria"]) || array_key_exists("firstCriteria", $context) ? $context["firstCriteria"] : (function () { throw new RuntimeError('Variable "firstCriteria" does not exist.', 34, $this->source); })()), (isset($context["thisCriteria"]) || array_key_exists("thisCriteria", $context) ? $context["thisCriteria"] : (function () { throw new RuntimeError('Variable "thisCriteria" does not exist.', 34, $this->source); })()))) : ((isset($context["thisCriteria"]) || array_key_exists("thisCriteria", $context) ? $context["thisCriteria"] : (function () { throw new RuntimeError('Variable "thisCriteria" does not exist.', 34, $this->source); })())));
        // line 35
        $context["isWinner"] = (((twig_get_attribute($this->env, $this->source, ($context["abTestResults"] ?? null), "winners", [], "any", true, true, false, 35) && twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, (isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 35, $this->source); })()), "winners", [], "any", false, false, false, 35))) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 35, $this->source); })()), "parent", [], "any", false, false, false, 35), "variantStartDate", [], "any", false, false, false, 35)) && (isset($context["isPublished"]) || array_key_exists("isPublished", $context) ? $context["isPublished"] : (function () { throw new RuntimeError('Variable "isPublished" does not exist.', 35, $this->source); })()));
        // line 36
        $context["actionUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 36, $this->source); })()), ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]);
        // line 37
        $context["isCurrent"] = (twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37) === twig_get_attribute($this->env, $this->source, (isset($context["activeEntity"]) || array_key_exists("activeEntity", $context) ? $context["activeEntity"] : (function () { throw new RuntimeError('Variable "activeEntity" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37));
        // line 38
        echo "
<li class=\"list-group-item bg-";
        // line 39
        if ((isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new RuntimeError('Variable "isCurrent" does not exist.', 39, $this->source); })())) {
            echo "dark";
        } else {
            echo "light";
        }
        echo "-xs\">
    <div class=\"box-layout\">
        <div class=\"col-md-8 va-m\">
            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <h3>
                        ";
        // line 45
        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>         // line 46
(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 46, $this->source); })()), "model" =>         // line 47
(isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 47, $this->source); })()), "size" => "", "query" => "size="]);
        // line 50
        echo "
                    </h3>
                </div>
                <div class=\"col-xs-11\">
                    ";
        // line 54
        if ((isset($context["isWinner"]) || array_key_exists("isWinner", $context) ? $context["isWinner"] : (function () { throw new RuntimeError('Variable "isWinner" does not exist.', 54, $this->source); })())) {
            // line 55
            echo "                        <div class=\"mr-xs pull-left\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.ab_test.make_winner"), "html", null, true);
            echo "\">
                            <a class=\"btn btn-warning\"
                               data-toggle=\"confirmation\"
                               href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 58, $this->source); })()), ["objectAction" => "winner", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\"
                               data-message=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.ab_test.confirm_make_winner", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 59, $this->source); })()), (isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 59, $this->source); })()), [], "any", false, false, false, 59)]));
            echo "\"
                               data-confirm-text=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.ab_test.make_winner"));
            echo "\"
                               data-confirm-callback=\"executeAction\"
                               data-cancel-text=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"));
            echo "\">
                                <i class=\"fa fa-trophy\"></i>
                            </a>
                        </div>
                    ";
        }
        // line 67
        echo "                    <h5 class=\"fw-sb text-primary\">
                        <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["actionUrl"]) || array_key_exists("actionUrl", $context) ? $context["actionUrl"] : (function () { throw new RuntimeError('Variable "actionUrl" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "\" data-toggle=\"ajax\">
                            ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 69, $this->source); })()), (isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 69, $this->source); })()), [], "any", false, false, false, 69), "html", null, true);
        echo "
                        </a>
                        ";
        // line 71
        if ((isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new RuntimeError('Variable "isCurrent" does not exist.', 71, $this->source); })())) {
            // line 72
            echo "                            &nbsp;<span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.current"), "html", null, true);
            echo "</span>
                        ";
        }
        // line 74
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 74, $this->source); })()), "parent", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74) === twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74))) {
            // line 75
            echo "                            &nbsp;<span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.parent"), "html", null, true);
            echo "</span>
                        ";
        }
        // line 77
        echo "                        ";
        if (($this->env->getTest('instanceof')->getCallable()((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 77, $this->source); })()), "\\Mautic\\CoreBundle\\Entity\\TranslationEntityInterface") && twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 77, $this->source); })()), "isTranslation", [], "any", false, false, false, 77))) {
            // line 78
            echo "                            &nbsp;<span data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.icon_tooltip.translation"), "html", null, true);
            echo "\">
                                <i class=\"fa fa-fw fa-language\"></i>
                            </span>
                        ";
        }
        // line 82
        echo "                    </h5>
                    ";
        // line 83
        if ($this->env->getFunction('method_exists')->getCallable()((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 83, $this->source); })()), "getAlias")) {
            // line 84
            echo "                        <span class=\"text-white dark-sm\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 84, $this->source); })()), "alias", [], "any", false, false, false, 84), "html", null, true);
            echo "</span>
                    ";
        }
        // line 86
        echo "                </div>
            </div>
        </div>
        <div class=\"col-md-4 va-t text-right\">
            <em class=\"text-white dark-sm\">
                ";
        // line 91
        if (((isset($context["isPublished"]) || array_key_exists("isPublished", $context) ? $context["isPublished"] : (function () { throw new RuntimeError('Variable "isPublished" does not exist.', 91, $this->source); })()) && (((isset($context["totalWeight"]) || array_key_exists("totalWeight", $context) ? $context["totalWeight"] : (function () { throw new RuntimeError('Variable "totalWeight" does not exist.', 91, $this->source); })()) > 100) || ((isset($context["thisCriteria"]) || array_key_exists("thisCriteria", $context) ? $context["thisCriteria"] : (function () { throw new RuntimeError('Variable "thisCriteria" does not exist.', 91, $this->source); })()) && ((isset($context["firstCriteria"]) || array_key_exists("firstCriteria", $context) ? $context["firstCriteria"] : (function () { throw new RuntimeError('Variable "firstCriteria" does not exist.', 91, $this->source); })()) != (isset($context["thisCriteria"]) || array_key_exists("thisCriteria", $context) ? $context["thisCriteria"] : (function () { throw new RuntimeError('Variable "thisCriteria" does not exist.', 91, $this->source); })())))))) {
            // line 92
            echo "                    <div class=\"text-danger\" data-toggle=\"label label-danger\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant.misconfiguration"), "html", null, true);
            echo "\">
                        <div><span class=\"badge\">";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["weight"]) || array_key_exists("weight", $context) ? $context["weight"] : (function () { throw new RuntimeError('Variable "weight" does not exist.', 93, $this->source); })()), "html", null, true);
            echo "%</span></div>
                        <div><i class=\"fa fa-fw fa-exclamation-triangle\"></i>";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["criteriaLabel"]) || array_key_exists("criteriaLabel", $context) ? $context["criteriaLabel"] : (function () { throw new RuntimeError('Variable "criteriaLabel" does not exist.', 94, $this->source); })()), "html", null, true);
            echo "</div>
                    </div>
                ";
        } elseif ((        // line 96
(isset($context["isPublished"]) || array_key_exists("isPublished", $context) ? $context["isPublished"] : (function () { throw new RuntimeError('Variable "isPublished" does not exist.', 96, $this->source); })()) && (isset($context["criteriaLabel"]) || array_key_exists("criteriaLabel", $context) ? $context["criteriaLabel"] : (function () { throw new RuntimeError('Variable "criteriaLabel" does not exist.', 96, $this->source); })()))) {
            // line 97
            echo "                    <div class=\"text-success\">
                        <div><span class=\"label label-success\">";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["weight"]) || array_key_exists("weight", $context) ? $context["weight"] : (function () { throw new RuntimeError('Variable "weight" does not exist.', 98, $this->source); })()), "html", null, true);
            echo "%</span></div>
                        <div><i class=\"fa fa-fw fa-check\"></i>";
            // line 99
            echo twig_escape_filter($this->env, (isset($context["criteriaLabel"]) || array_key_exists("criteriaLabel", $context) ? $context["criteriaLabel"] : (function () { throw new RuntimeError('Variable "criteriaLabel" does not exist.', 99, $this->source); })()), "html", null, true);
            echo "</div>
                    </div>
                ";
        } else {
            // line 102
            echo "                    <div class=\"text-muted\">
                        <div><span class=\"label label-default\">";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["weight"]) || array_key_exists("weight", $context) ? $context["weight"] : (function () { throw new RuntimeError('Variable "weight" does not exist.', 103, $this->source); })()), "html", null, true);
            echo "%</span></div>
                        <div>";
            // line 104
            echo twig_escape_filter($this->env, (isset($context["criteriaLabel"]) || array_key_exists("criteriaLabel", $context) ? $context["criteriaLabel"] : (function () { throw new RuntimeError('Variable "criteriaLabel" does not exist.', 104, $this->source); })()), "html", null, true);
            echo "</div>
                    </div>
                ";
        }
        // line 107
        echo "            </em>
        </div>
    </div>
</li>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Variant/row.html.twig";
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
        return array (  245 => 107,  239 => 104,  235 => 103,  232 => 102,  226 => 99,  222 => 98,  219 => 97,  217 => 96,  212 => 94,  208 => 93,  203 => 92,  201 => 91,  194 => 86,  188 => 84,  186 => 83,  183 => 82,  175 => 78,  172 => 77,  166 => 75,  163 => 74,  157 => 72,  155 => 71,  150 => 69,  146 => 68,  143 => 67,  135 => 62,  130 => 60,  126 => 59,  122 => 58,  115 => 55,  113 => 54,  107 => 50,  105 => 47,  104 => 46,  103 => 45,  90 => 39,  87 => 38,  85 => 37,  83 => 36,  81 => 35,  79 => 34,  77 => 33,  75 => 32,  72 => 31,  68 => 29,  64 => 27,  61 => 26,  58 => 25,  56 => 24,  53 => 23,  50 => 19,  49 => 18,  47 => 17,  44 => 16,  42 => 15,  39 => 14,  37 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Variant/row.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Variant\\row.html.twig");
    }
}
