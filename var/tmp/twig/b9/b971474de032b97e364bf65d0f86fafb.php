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

/* @MauticCore/Helper/confirm.html.twig */
class __TwigTemplate_6a46e1361012d6999ee2a355d869312b extends Template
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
        if (array_key_exists("template", $context)) {
            // line 2
            if (((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 2, $this->source); })()) === "batchdelete")) {
                // line 3
                $context["confirmText"] = ((array_key_exists("confirmText", $context)) ? (_twig_default_filter((isset($context["confirmText"]) || array_key_exists("confirmText", $context) ? $context["confirmText"] : (function () { throw new RuntimeError('Variable "confirmText" does not exist.', 3, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete")));
                // line 4
                $context["iconClass"] = ((array_key_exists("iconClass", $context)) ? (_twig_default_filter((isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 4, $this->source); })()), "ri-delete-bin-line text-danger")) : ("ri-delete-bin-line text-danger"));
                // line 5
                $context["btnText"] = ((array_key_exists("btnText", $context)) ? (_twig_default_filter((isset($context["btnText"]) || array_key_exists("btnText", $context) ? $context["btnText"] : (function () { throw new RuntimeError('Variable "btnText" does not exist.', 5, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete_selected"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete_selected")));
                // line 6
                $context["btnClass"] = ((array_key_exists("btnClass", $context)) ? (_twig_default_filter((isset($context["btnClass"]) || array_key_exists("btnClass", $context) ? $context["btnClass"] : (function () { throw new RuntimeError('Variable "btnClass" does not exist.', 6, $this->source); })()), "")) : (""));
                // line 7
                $context["confirmCallback"] = ((array_key_exists("confirmCallback", $context)) ? (_twig_default_filter((isset($context["confirmCallback"]) || array_key_exists("confirmCallback", $context) ? $context["confirmCallback"] : (function () { throw new RuntimeError('Variable "confirmCallback" does not exist.', 7, $this->source); })()), "executeBatchAction")) : ("executeBatchAction"));
                // line 8
                echo "        ";
                $context["wrapOpeningTag"] = ((array_key_exists("wrapOpeningTag", $context)) ? ((isset($context["wrapOpeningTag"]) || array_key_exists("wrapOpeningTag", $context) ? $context["wrapOpeningTag"] : (function () { throw new RuntimeError('Variable "wrapOpeningTag" does not exist.', 8, $this->source); })())) : (""));
                // line 9
                echo "        ";
                $context["wrapClosingTag"] = ((array_key_exists("wrapClosingTag", $context)) ? ((isset($context["wrapClosingTag"]) || array_key_exists("wrapClosingTag", $context) ? $context["wrapClosingTag"] : (function () { throw new RuntimeError('Variable "wrapClosingTag" does not exist.', 9, $this->source); })())) : (""));
                // line 10
                $context["precheck"] = ((array_key_exists("precheck", $context)) ? (_twig_default_filter((isset($context["precheck"]) || array_key_exists("precheck", $context) ? $context["precheck"] : (function () { throw new RuntimeError('Variable "precheck" does not exist.', 10, $this->source); })()), "batchActionPrecheck")) : ("batchActionPrecheck"));
            } elseif ((            // line 11
(isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 11, $this->source); })()) === "delete")) {
                // line 12
                $context["confirmText"] = ((array_key_exists("confirmText", $context)) ? (_twig_default_filter((isset($context["confirmText"]) || array_key_exists("confirmText", $context) ? $context["confirmText"] : (function () { throw new RuntimeError('Variable "confirmText" does not exist.', 12, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete")));
                // line 13
                $context["iconClass"] = ((array_key_exists("iconClass", $context)) ? (_twig_default_filter((isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 13, $this->source); })()), "ri-delete-bin-line text-danger")) : ("ri-delete-bin-line text-danger"));
                // line 14
                $context["btnText"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("btnText", $context)) ? (_twig_default_filter((isset($context["btnText"]) || array_key_exists("btnText", $context) ? $context["btnText"] : (function () { throw new RuntimeError('Variable "btnText" does not exist.', 14, $this->source); })()), "mautic.core.form.delete")) : ("mautic.core.form.delete")));
            }
        }
        // line 18
        $context["btnClass"] = (($context["btnClass"]) ?? ("btn btn-default"));
        // line 20
        $context["btnTextAttr"] = ((array_key_exists("btnTextAttr", $context)) ? (_twig_default_filter((isset($context["btnTextAttr"]) || array_key_exists("btnTextAttr", $context) ? $context["btnTextAttr"] : (function () { throw new RuntimeError('Variable "btnTextAttr" does not exist.', 20, $this->source); })()), "")) : (""));
        // line 22
        if (array_key_exists("btnTextClass", $context)) {
            // line 23
            $context["btnTextAttr"] = ((((isset($context["btnTextAttr"]) || array_key_exists("btnTextAttr", $context) ? $context["btnTextAttr"] : (function () { throw new RuntimeError('Variable "btnTextAttr" does not exist.', 23, $this->source); })()) . " class=\"") . (isset($context["btnTextClass"]) || array_key_exists("btnTextClass", $context) ? $context["btnTextClass"] : (function () { throw new RuntimeError('Variable "btnTextClass" does not exist.', 23, $this->source); })())) . "\"");
        }
        // line 26
        $context["confirmAction"] = ((array_key_exists("confirmAction", $context)) ? (_twig_default_filter((isset($context["confirmAction"]) || array_key_exists("confirmAction", $context) ? $context["confirmAction"] : (function () { throw new RuntimeError('Variable "confirmAction" does not exist.', 26, $this->source); })()), "javascript:void(0);")) : ("javascript:void(0);"));
        // line 28
        if (( !array_key_exists("confirmCallback", $context) &&  !((isset($context["confirmAction"]) || array_key_exists("confirmAction", $context) ? $context["confirmAction"] : (function () { throw new RuntimeError('Variable "confirmAction" does not exist.', 28, $this->source); })()) === "javascript:void(0);"))) {
            // line 29
            $context["confirmCallback"] = "executeAction";
        }
        // line 32
        $context["cancelText"] = ((array_key_exists("cancelText", $context)) ? (_twig_default_filter((isset($context["cancelText"]) || array_key_exists("cancelText", $context) ? $context["cancelText"] : (function () { throw new RuntimeError('Variable "cancelText" does not exist.', 32, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel")));
        // line 34
        $context["cancelCallback"] = ((array_key_exists("cancelCallback", $context)) ? (_twig_default_filter((isset($context["cancelCallback"]) || array_key_exists("cancelCallback", $context) ? $context["cancelCallback"] : (function () { throw new RuntimeError('Variable "cancelCallback" does not exist.', 34, $this->source); })()), "dismissConfirmation")) : ("dismissConfirmation"));
        // line 36
        $context["attr"] = ((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 36, $this->source); })()), [])) : ([]));
        // line 37
        if ( !twig_test_empty((isset($context["confirmCallback"]) || array_key_exists("confirmCallback", $context) ? $context["confirmCallback"] : (function () { throw new RuntimeError('Variable "confirmCallback" does not exist.', 37, $this->source); })()))) {
            // line 38
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 38, $this->source); })()), ["data-confirm-callback" => (isset($context["confirmCallback"]) || array_key_exists("confirmCallback", $context) ? $context["confirmCallback"] : (function () { throw new RuntimeError('Variable "confirmCallback" does not exist.', 38, $this->source); })())]);
        }
        // line 40
        if ( !twig_test_empty((isset($context["cancelText"]) || array_key_exists("cancelText", $context) ? $context["cancelText"] : (function () { throw new RuntimeError('Variable "cancelText" does not exist.', 40, $this->source); })()))) {
            // line 41
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 41, $this->source); })()), ["data-cancel-text" => twig_escape_filter($this->env, (isset($context["cancelText"]) || array_key_exists("cancelText", $context) ? $context["cancelText"] : (function () { throw new RuntimeError('Variable "cancelText" does not exist.', 41, $this->source); })()), "js")]);
        }
        // line 43
        if ( !twig_test_empty((isset($context["confirmText"]) || array_key_exists("confirmText", $context) ? $context["confirmText"] : (function () { throw new RuntimeError('Variable "confirmText" does not exist.', 43, $this->source); })()))) {
            // line 44
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 44, $this->source); })()), ["data-confirm-text" => twig_escape_filter($this->env, (isset($context["confirmText"]) || array_key_exists("confirmText", $context) ? $context["confirmText"] : (function () { throw new RuntimeError('Variable "confirmText" does not exist.', 44, $this->source); })()), "js")]);
        }
        // line 46
        if ( !twig_test_empty((isset($context["cancelCallback"]) || array_key_exists("cancelCallback", $context) ? $context["cancelCallback"] : (function () { throw new RuntimeError('Variable "cancelCallback" does not exist.', 46, $this->source); })()))) {
            // line 47
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 47, $this->source); })()), ["data-cancel-callback" => (isset($context["cancelCallback"]) || array_key_exists("cancelCallback", $context) ? $context["cancelCallback"] : (function () { throw new RuntimeError('Variable "cancelCallback" does not exist.', 47, $this->source); })())]);
        }
        // line 49
        if ((array_key_exists("target", $context) &&  !twig_test_empty((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 49, $this->source); })())))) {
            // line 50
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 50, $this->source); })()), ["data-target" => (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 50, $this->source); })())]);
        }
        // line 53
        $context["tag"] = ((array_key_exists("tag", $context)) ? (_twig_default_filter((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 53, $this->source); })()), "a")) : ("a"));
        // line 54
        $context["buttonType"] = ((("button" === (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 54, $this->source); })()))) ? (" type=\"button\"") : (""));
        // line 56
        if ( !array_key_exists("wrapOpeningTag", $context)) {
            // line 57
            echo "    ";
            $context["wrapOpeningTag"] = "";
            // line 58
            echo "    ";
            $context["wrapClosingTag"] = "";
        }
        // line 61
        $context["tooltipAttr"] = "";
        // line 62
        if (array_key_exists("tooltip", $context)) {
            // line 63
            echo "    ";
            if ( !array_key_exists("tooltipPosition", $context)) {
                // line 64
                echo "        ";
                $context["tooltipPosition"] = "left";
                // line 65
                echo "    ";
            }
            // line 66
            echo "    ";
            $context["tooltipAttr"] = ((((" data-toogle=\"tooltip\" title=\"" . (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 66, $this->source); })())) . "\" data-placement=\"") . (isset($context["tooltipPosition"]) || array_key_exists("tooltipPosition", $context) ? $context["tooltipPosition"] : (function () { throw new RuntimeError('Variable "tooltipPosition" does not exist.', 66, $this->source); })())) . "\"");
        }
        // line 69
        $context["precheck"] = ((array_key_exists("precheck", $context)) ? (_twig_default_filter((isset($context["precheck"]) || array_key_exists("precheck", $context) ? $context["precheck"] : (function () { throw new RuntimeError('Variable "precheck" does not exist.', 69, $this->source); })()), "")) : (""));
        // line 70
        echo twig_escape_filter($this->env, (isset($context["wrapOpeningTag"]) || array_key_exists("wrapOpeningTag", $context) ? $context["wrapOpeningTag"] : (function () { throw new RuntimeError('Variable "wrapOpeningTag" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "
<";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 71, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["buttonType"]) || array_key_exists("buttonType", $context) ? $context["buttonType"] : (function () { throw new RuntimeError('Variable "buttonType" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "
    class=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["btnClass"]) || array_key_exists("btnClass", $context) ? $context["btnClass"] : (function () { throw new RuntimeError('Variable "btnClass" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "\"
    href=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["confirmAction"]) || array_key_exists("confirmAction", $context) ? $context["confirmAction"] : (function () { throw new RuntimeError('Variable "confirmAction" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "\"
    data-toggle=\"confirmation\"
    data-precheck=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["precheck"]) || array_key_exists("precheck", $context) ? $context["precheck"] : (function () { throw new RuntimeError('Variable "precheck" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "\"
    data-message=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 76, $this->source); })()));
        echo "\"
    ";
        // line 77
        if (!twig_in_filter("data-confirm-text", twig_get_array_keys_filter((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 77, $this->source); })())))) {
            echo "data-confirm-text=\"";
            echo twig_escape_filter($this->env, (isset($context["confirmText"]) || array_key_exists("confirmText", $context) ? $context["confirmText"] : (function () { throw new RuntimeError('Variable "confirmText" does not exist.', 77, $this->source); })()));
            echo "\"";
        }
        // line 78
        echo "    ";
        echo twig_join_filter(twig_array_map($this->env, twig_array_filter($this->env, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 78, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !twig_test_empty((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 78, $this->source); })())); }), function ($__value__, $__key__) use ($context, $macros) { $context["value"] = $__value__; $context["key"] = $__key__; return ((((isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 78, $this->source); })()) . "=\"") . (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 78, $this->source); })())) . "\""); }), " ");
        echo ">
<span";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["tooltipAttr"]) || array_key_exists("tooltipAttr", $context) ? $context["tooltipAttr"] : (function () { throw new RuntimeError('Variable "tooltipAttr" does not exist.', 79, $this->source); })()), "html", null, true);
        echo ">
    ";
        // line 80
        if (array_key_exists("iconClass", $context)) {
            // line 81
            echo "        <i class=\"";
            echo twig_escape_filter($this->env, (isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 81, $this->source); })()), "html", null, true);
            echo "\"></i>
    ";
        }
        // line 83
        echo "    ";
        if (array_key_exists("btnText", $context)) {
            // line 84
            echo "        <span";
            echo twig_escape_filter($this->env, (isset($context["btnTextAttr"]) || array_key_exists("btnTextAttr", $context) ? $context["btnTextAttr"] : (function () { throw new RuntimeError('Variable "btnTextAttr" does not exist.', 84, $this->source); })()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["btnText"]) || array_key_exists("btnText", $context) ? $context["btnText"] : (function () { throw new RuntimeError('Variable "btnText" does not exist.', 84, $this->source); })()), "html", null, true);
            echo "</span>
    ";
        }
        // line 86
        echo "</span>
</";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 87, $this->source); })()), "html", null, true);
        echo ">
";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["wrapClosingTag"]) || array_key_exists("wrapClosingTag", $context) ? $context["wrapClosingTag"] : (function () { throw new RuntimeError('Variable "wrapClosingTag" does not exist.', 88, $this->source); })()), "html", null, true);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/confirm.html.twig";
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
        return array (  215 => 88,  211 => 87,  208 => 86,  200 => 84,  197 => 83,  191 => 81,  189 => 80,  185 => 79,  180 => 78,  174 => 77,  170 => 76,  166 => 75,  161 => 73,  157 => 72,  152 => 71,  148 => 70,  146 => 69,  142 => 66,  139 => 65,  136 => 64,  133 => 63,  131 => 62,  129 => 61,  125 => 58,  122 => 57,  120 => 56,  118 => 54,  116 => 53,  113 => 50,  111 => 49,  108 => 47,  106 => 46,  103 => 44,  101 => 43,  98 => 41,  96 => 40,  93 => 38,  91 => 37,  89 => 36,  87 => 34,  85 => 32,  82 => 29,  80 => 28,  78 => 26,  75 => 23,  73 => 22,  71 => 20,  69 => 18,  65 => 14,  63 => 13,  61 => 12,  59 => 11,  57 => 10,  54 => 9,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/confirm.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\confirm.html.twig");
    }
}
