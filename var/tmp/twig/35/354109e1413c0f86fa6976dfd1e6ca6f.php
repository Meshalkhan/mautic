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

/* @MauticCore/Helper/publishstatus_icon.html.twig */
class __TwigTemplate_12413874903cd12ff02bfb95a74b6ce7 extends Template
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
        // line 12
        $context["query"] = ((array_key_exists("query", $context)) ? (_twig_default_filter((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 12, $this->source); })()), "")) : (""));
        // line 13
        $context["size"] = ((array_key_exists("size", $context)) ? (_twig_default_filter((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 13, $this->source); })()), "fa-lg")) : ("fa-lg"));
        // line 14
        $context["onclick"] = ((array_key_exists("onclick", $context)) ? (_twig_default_filter((isset($context["onclick"]) || array_key_exists("onclick", $context) ? $context["onclick"] : (function () { throw new RuntimeError('Variable "onclick" does not exist.', 14, $this->source); })()), "")) : (""));
        // line 15
        $context["attributes"] = ((array_key_exists("attributes", $context)) ? (_twig_default_filter((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 15, $this->source); })()), [])) : ([]));
        // line 16
        $context["transKeys"] = ((array_key_exists("transKeys", $context)) ? (_twig_default_filter((isset($context["transKeys"]) || array_key_exists("transKeys", $context) ? $context["transKeys"] : (function () { throw new RuntimeError('Variable "transKeys" does not exist.', 16, $this->source); })()), [])) : ([]));
        // line 17
        $context["status"] = ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 17, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "publishStatus", [], "any", false, false, false, 17))) : (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "publishStatus", [], "any", false, false, false, 17)));
        // line 18
        $context["text"] = ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 18, $this->source); })()), "")) : (""));
        // line 19
        $context["icon"] = ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 19, $this->source); })()), "")) : (""));
        // line 21
        if ( !twig_test_empty((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 21, $this->source); })()))) {
            // line 22
            $context["queryParam"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\CoreHelpersExtension']->parseString((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 22, $this->source); })()));
            // line 23
            if (twig_get_attribute($this->env, $this->source, ($context["queryParam"] ?? null), "customToggle", [], "any", true, true, false, 23)) {
                // line 24
                echo "    ";
                // line 25
                $context["status"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["queryParam"]) || array_key_exists("queryParam", $context) ? $context["queryParam"] : (function () { throw new RuntimeError('Variable "queryParam" does not exist.', 25, $this->source); })()), "customToggle", [], "array", false, false, false, 25), [], "any", false, false, false, 25);
            }
        }
        // line 30
        if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 30, $this->source); })()) === "published")) {
            // line 31
            $context["icon"] = "fa-toggle-on text-success";
            // line 32
            $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.active");
        } elseif ((        // line 33
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 33, $this->source); })()) === "unpublished")) {
            // line 34
            $context["icon"] = "fa-toggle-off text-danger";
            // line 35
            $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.inactive");
        } elseif ((        // line 36
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 36, $this->source); })()) === "expired")) {
            // line 37
            $context["icon"] = "ri-time-line text-danger";
            // line 38
            $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.expired_to", ["%date%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "publishDown", [], "any", false, false, false, 38))]);
        } elseif ((        // line 39
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 39, $this->source); })()) === "pending")) {
            // line 40
            $context["icon"] = "ri-time-line text-warning";
            // line 41
            $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.pending.start_at", ["%date%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "publishUp", [], "any", false, false, false, 41))]);
        }
        // line 44
        if ((true === (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 44, $this->source); })()))) {
            // line 45
            $context["icon"] = "fa-toggle-on text-success";
            // line 46
            $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.public");
        } elseif ((false ===         // line 47
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 47, $this->source); })()))) {
            // line 48
            $context["icon"] = "fa-toggle-off text-danger";
            // line 49
            $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.not.public");
        }
        // line 52
        $context["text"] = ((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 52, $this->source); })()) . ((array_key_exists("aditionalLabel", $context)) ? (_twig_default_filter((isset($context["aditionalLabel"]) || array_key_exists("aditionalLabel", $context) ? $context["aditionalLabel"] : (function () { throw new RuntimeError('Variable "aditionalLabel" does not exist.', 52, $this->source); })()), "")) : ("")));
        // line 54
        if ((array_key_exists("disableToggle", $context) &&  !twig_test_empty((isset($context["disableToggle"]) || array_key_exists("disableToggle", $context) ? $context["disableToggle"] : (function () { throw new RuntimeError('Variable "disableToggle" does not exist.', 54, $this->source); })())))) {
            // line 55
            $context["icon"] = twig_replace_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 55, $this->source); })()), ["success" => "muted", "danger" => "muted", "warning" => "muted"]);
        }
        // line 58
        $context["clickAction"] = (((array_key_exists("disableToggle", $context) && (true === (isset($context["disableToggle"]) || array_key_exists("disableToggle", $context) ? $context["disableToggle"] : (function () { throw new RuntimeError('Variable "disableToggle" does not exist.', 58, $this->source); })())))) ? ("disabled") : ("has-click-event"));
        // line 59
        $context["idClass"] = (((twig_replace_filter((isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 59, $this->source); })()), ["." => "-"]) . "-publish-icon") . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)) . $this->env->getFunction('md5')->getCallable()((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 59, $this->source); })())));
        // line 61
        $context["backdropFlag"] = ((array_key_exists("backdrop", $context)) ? ("true") : ("false"));
        // line 63
        $context["onclick"] = ((twig_test_empty((isset($context["onclick"]) || array_key_exists("onclick", $context) ? $context["onclick"] : (function () { throw new RuntimeError('Variable "onclick" does not exist.', 63, $this->source); })()))) ? (twig_sprintf("Mautic.togglePublishStatus(event, '.%s', '%s', '%s', '%s', %s);", (isset($context["idClass"]) || array_key_exists("idClass", $context) ? $context["idClass"] : (function () { throw new RuntimeError('Variable "idClass" does not exist.', 63, $this->source); })()), (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 63, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63), (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 63, $this->source); })()), (isset($context["backdropFlag"]) || array_key_exists("backdropFlag", $context) ? $context["backdropFlag"] : (function () { throw new RuntimeError('Variable "backdropFlag" does not exist.', 63, $this->source); })()))) : ((isset($context["onclick"]) || array_key_exists("onclick", $context) ? $context["onclick"] : (function () { throw new RuntimeError('Variable "onclick" does not exist.', 63, $this->source); })())));
        // line 65
        $context["defaultAttributes"] = ["data-container" => "body", "data-placement" => "right", "data-toggle" => "tooltip", "data-status" =>         // line 69
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 69, $this->source); })())];
        // line 73
        if ( !twig_test_empty((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 73, $this->source); })()))) {
            // line 74
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 74, $this->source); })()), ["data-id-class" => ("." .             // line 75
(isset($context["idClass"]) || array_key_exists("idClass", $context) ? $context["idClass"] : (function () { throw new RuntimeError('Variable "idClass" does not exist.', 75, $this->source); })())), "data-model" =>             // line 76
(isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 76, $this->source); })()), "data-item-id" => twig_get_attribute($this->env, $this->source,             // line 77
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77), "data-query" =>             // line 78
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 78, $this->source); })()), "data-backdrop" =>             // line 79
(isset($context["backdropFlag"]) || array_key_exists("backdropFlag", $context) ? $context["backdropFlag"] : (function () { throw new RuntimeError('Variable "backdropFlag" does not exist.', 79, $this->source); })())]);
        }
        // line 83
        if ( !twig_test_empty((isset($context["transKeys"]) || array_key_exists("transKeys", $context) ? $context["transKeys"] : (function () { throw new RuntimeError('Variable "transKeys" does not exist.', 83, $this->source); })()))) {
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["transKeys"]) || array_key_exists("transKeys", $context) ? $context["transKeys"] : (function () { throw new RuntimeError('Variable "transKeys" does not exist.', 84, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 85
                echo "    ";
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 85, $this->source); })()), [                // line 86
$context["k"] => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["v"])]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 91
        $context["allDataAttrs"] = twig_array_merge((isset($context["defaultAttributes"]) || array_key_exists("defaultAttributes", $context) ? $context["defaultAttributes"] : (function () { throw new RuntimeError('Variable "defaultAttributes" does not exist.', 91, $this->source); })()), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 91, $this->source); })()));
        // line 93
        $context["dataAttributes"] = twig_join_filter(twig_array_map($this->env, (isset($context["allDataAttrs"]) || array_key_exists("allDataAttrs", $context) ? $context["allDataAttrs"] : (function () { throw new RuntimeError('Variable "allDataAttrs" does not exist.', 93, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return twig_sprintf("%s=\"%s\"", (isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 93, $this->source); })()), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 93, $this->source); })())); }), " ");
        // line 94
        echo "
<i class=\"fa fa-fw ";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 95, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 95, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["clickAction"]) || array_key_exists("clickAction", $context) ? $context["clickAction"] : (function () { throw new RuntimeError('Variable "clickAction" does not exist.', 95, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["idClass"]) || array_key_exists("idClass", $context) ? $context["idClass"] : (function () { throw new RuntimeError('Variable "idClass" does not exist.', 95, $this->source); })()), "html", null, true);
        echo " toggle-publish-status\"
   title=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "\"
   ";
        // line 97
        echo (isset($context["dataAttributes"]) || array_key_exists("dataAttributes", $context) ? $context["dataAttributes"] : (function () { throw new RuntimeError('Variable "dataAttributes" does not exist.', 97, $this->source); })());
        echo "
   ";
        // line 98
        if (( !array_key_exists("disableToggle", $context) || (array_key_exists("disableToggle", $context) && twig_test_empty((isset($context["disableToggle"]) || array_key_exists("disableToggle", $context) ? $context["disableToggle"] : (function () { throw new RuntimeError('Variable "disableToggle" does not exist.', 98, $this->source); })()))))) {
            echo "onclick=\"";
            echo (isset($context["onclick"]) || array_key_exists("onclick", $context) ? $context["onclick"] : (function () { throw new RuntimeError('Variable "onclick" does not exist.', 98, $this->source); })());
            echo "\"";
        }
        echo "></i>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/publishstatus_icon.html.twig";
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
        return array (  171 => 98,  167 => 97,  163 => 96,  153 => 95,  150 => 94,  148 => 93,  146 => 91,  139 => 86,  137 => 85,  133 => 84,  131 => 83,  128 => 79,  127 => 78,  126 => 77,  125 => 76,  124 => 75,  123 => 74,  121 => 73,  119 => 69,  118 => 65,  116 => 63,  114 => 61,  112 => 59,  110 => 58,  107 => 55,  105 => 54,  103 => 52,  100 => 49,  98 => 48,  96 => 47,  94 => 46,  92 => 45,  90 => 44,  87 => 41,  85 => 40,  83 => 39,  81 => 38,  79 => 37,  77 => 36,  75 => 35,  73 => 34,  71 => 33,  69 => 32,  67 => 31,  65 => 30,  61 => 25,  59 => 24,  57 => 23,  55 => 22,  53 => 21,  51 => 19,  49 => 18,  47 => 17,  45 => 16,  43 => 15,  41 => 14,  39 => 13,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/publishstatus_icon.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\publishstatus_icon.html.twig");
    }
}
