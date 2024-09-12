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

/* @MauticPage/FormTheme/Point/pointaction_urlhit_widget.html.twig */
class __TwigTemplate_2b992b019beca30979a12582202113e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'pointaction_urlhit_widget' => [$this, 'block_pointaction_urlhit_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('pointaction_urlhit_widget', $context, $blocks);
    }

    public function block_pointaction_urlhit_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["timeFrames"] = ["s" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.time.seconds"), "i" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.time.minutes"), "H" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.time.hours"), "d" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.time.days")];
        // line 8
        echo "
<div class=\"row\">
    <div class=\"col-xs-12\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "page_url", [], "array", false, false, false, 11), 'row');
        echo "
    </div>
</div>

<div class=\"row\">
    <div class=\"col-xs-12\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "page_hits", [], "array", false, false, false, 17), 'row');
        echo "
    </div>
</div>

<div class=\"row\">
    <div class=\"col-xs-12 form-group \">
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "returns_within", [], "array", false, false, false, 23), 'label');
        echo "
        <div class=\"input-group\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "returns_within", [], "array", false, false, false, 25), 'widget');
        // line 26
        $context["default"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "returns_within_unit", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "data", [], "any", false, false, false, 26);
        // line 27
        echo "            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                    <span class=\"returns_within_label\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["timeFrames"]) || array_key_exists("timeFrames", $context) ? $context["timeFrames"] : (function () { throw new RuntimeError('Variable "timeFrames" does not exist.', 29, $this->source); })()), (isset($context["default"]) || array_key_exists("default", $context) ? $context["default"] : (function () { throw new RuntimeError('Variable "default" does not exist.', 29, $this->source); })()), [], "array", false, false, false, 29), "html", null, true);
        echo "</span> <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu time-dropdown\">";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timeFrames"]) || array_key_exists("timeFrames", $context) ? $context["timeFrames"] : (function () { throw new RuntimeError('Variable "timeFrames" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["abbr"] => $context["label"]) {
            // line 33
            echo "                    <li><a href=\"#\" data-time=\"";
            echo twig_escape_filter($this->env, $context["abbr"], "html", null, true);
            echo "\" data-field=\"returns_within\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['abbr'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </ul>
            </div>
        </div>
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "returns_within", [], "array", false, false, false, 38), 'errors');
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "returns_within_unit", [], "array", false, false, false, 39), 'widget');
        echo "
    </div>

    <div class=\"col-xs-12 form-group \">
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "returns_after", [], "array", false, false, false, 43), 'label');
        echo "
        <div class=\"input-group\">
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "returns_after", [], "array", false, false, false, 45), 'widget');
        // line 46
        $context["default"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "returns_after_unit", [], "array", false, false, false, 46), "vars", [], "any", false, false, false, 46), "data", [], "array", false, false, false, 46);
        // line 47
        echo "            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                    <span class=\"returns_after_label\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["timeFrames"]) || array_key_exists("timeFrames", $context) ? $context["timeFrames"] : (function () { throw new RuntimeError('Variable "timeFrames" does not exist.', 49, $this->source); })()), (isset($context["default"]) || array_key_exists("default", $context) ? $context["default"] : (function () { throw new RuntimeError('Variable "default" does not exist.', 49, $this->source); })()), [], "array", false, false, false, 49), "html", null, true);
        echo "</span> <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu time-dropdown\">";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timeFrames"]) || array_key_exists("timeFrames", $context) ? $context["timeFrames"] : (function () { throw new RuntimeError('Variable "timeFrames" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["abbr"] => $context["label"]) {
            // line 53
            echo "                        <li><a href=\"#\" data-time=\"";
            echo twig_escape_filter($this->env, $context["abbr"], "html", null, true);
            echo "\" data-field=\"returns_after\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['abbr'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </ul>
            </div>
        </div>
        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "returns_after", [], "array", false, false, false, 58), 'errors');
        echo "
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "returns_after_unit", [], "array", false, false, false, 59), 'widget');
        echo "
    </div>


    <div class=\"col-xs-12 form-group \">
        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "accumulative_time", [], "array", false, false, false, 64), 'label');
        echo "
        <div class=\"input-group\">
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "accumulative_time", [], "array", false, false, false, 66), 'widget');
        // line 67
        $context["default"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "accumulative_time_unit", [], "array", false, false, false, 67), "vars", [], "any", false, false, false, 67), "data", [], "array", false, false, false, 67);
        // line 68
        echo "            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                    <span class=\"accumulative_time_label\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["timeFrames"]) || array_key_exists("timeFrames", $context) ? $context["timeFrames"] : (function () { throw new RuntimeError('Variable "timeFrames" does not exist.', 70, $this->source); })()), (isset($context["default"]) || array_key_exists("default", $context) ? $context["default"] : (function () { throw new RuntimeError('Variable "default" does not exist.', 70, $this->source); })()), [], "array", false, false, false, 70), "html", null, true);
        echo "</span> <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu time-dropdown\">";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timeFrames"]) || array_key_exists("timeFrames", $context) ? $context["timeFrames"] : (function () { throw new RuntimeError('Variable "timeFrames" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["abbr"] => $context["label"]) {
            // line 74
            echo "                        <li><a href=\"#\" data-time=\"";
            echo twig_escape_filter($this->env, $context["abbr"], "html", null, true);
            echo "\" data-field=\"accumulative_time\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['abbr'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                </ul>
            </div>
        </div>
        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "accumulative_time", [], "array", false, false, false, 79), 'errors');
        echo "
        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "accumulative_time_unit", [], "array", false, false, false, 80), 'widget');
        echo "
    </div>
</div>

<script>
    mQuery('.time-dropdown li a').click(function (e) {
        e.preventDefault();
        var selected = mQuery(this).data('time');
        var label    = mQuery(this).html();
        var field    = mQuery(this).data('field');

        mQuery('#point_properties_' + field + '_unit').val(selected);
        mQuery('.' + field + '_label').html(label);
    });
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPage/FormTheme/Point/pointaction_urlhit_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  208 => 80,  204 => 79,  199 => 76,  189 => 74,  185 => 73,  180 => 70,  176 => 68,  174 => 67,  172 => 66,  167 => 64,  159 => 59,  155 => 58,  150 => 55,  140 => 53,  136 => 52,  131 => 49,  127 => 47,  125 => 46,  123 => 45,  118 => 43,  111 => 39,  107 => 38,  102 => 35,  92 => 33,  88 => 32,  83 => 29,  79 => 27,  77 => 26,  75 => 25,  70 => 23,  61 => 17,  52 => 11,  47 => 8,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPage/FormTheme/Point/pointaction_urlhit_widget.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Resources\\views\\FormTheme\\Point\\pointaction_urlhit_widget.html.twig");
    }
}
