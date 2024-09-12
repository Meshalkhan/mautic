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

/* @MauticCore/FormTheme/mautic_form_layout.html.twig */
class __TwigTemplate_a87eaa7aa8afe238cffb7fc7ed683ff6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'button_attributes' => [$this, 'block_button_attributes'],
            'button_group_row' => [$this, 'block_button_group_row'],
            'button_group_widget' => [$this, 'block_button_group_widget'],
            'button_row' => [$this, 'block_button_row'],
            'button_widget' => [$this, 'block_button_widget'],
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'choice_attributes' => [$this, 'block_choice_attributes'],
            'choice_row' => [$this, 'block_choice_row'],
            'dynamiclist_entry_row' => [$this, 'block_dynamiclist_entry_row'],
            'dynamiclist_row' => [$this, 'block_dynamiclist_row'],
            'form_buttons_row' => [$this, 'block_form_buttons_row'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_label' => [$this, 'block_form_label'],
            'form_row' => [$this, 'block_form_row'],
            'form_start' => [$this, 'block_form_start'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'sortable_value_label_list_widget' => [$this, 'block_sortable_value_label_list_widget'],
            'sortablelist_entry_row' => [$this, 'block_sortablelist_entry_row'],
            'sortablelist_errors' => [$this, 'block_sortablelist_errors'],
            'sortablelist_row' => [$this, 'block_sortablelist_row'],
            'standalone_button_row' => [$this, 'block_standalone_button_row'],
            'standalone_button_widget' => [$this, 'block_standalone_button_widget'],
            'tel_widget' => [$this, 'block_tel_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'yesno_button_group_widget' => [$this, 'block_yesno_button_group_widget'],
            'attributes' => [$this, 'block_attributes'],
            'form_help' => [$this, 'block_form_help'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 18
        echo "
";
        // line 20
        $this->displayBlock('button_group_row', $context, $blocks);
        // line 33
        echo "
";
        // line 35
        $this->displayBlock('button_group_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 50
        $this->displayBlock('button_row', $context, $blocks);
        // line 53
        echo "
";
        // line 55
        $this->displayBlock('button_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 69
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 84
        echo "
";
        // line 86
        $this->displayBlock('choice_attributes', $context, $blocks);
        // line 95
        echo "
";
        // line 97
        $this->displayBlock('choice_row', $context, $blocks);
        // line 123
        echo "
";
        // line 125
        $this->displayBlock('dynamiclist_entry_row', $context, $blocks);
        // line 131
        echo "
";
        // line 133
        $this->displayBlock('dynamiclist_row', $context, $blocks);
        // line 159
        echo "
";
        // line 161
        $this->displayBlock('form_buttons_row', $context, $blocks);
        // line 172
        echo "
";
        // line 174
        $this->displayBlock('form_errors', $context, $blocks);
        // line 189
        echo "
";
        // line 191
        $this->displayBlock('form_label', $context, $blocks);
        // line 209
        echo "
";
        // line 211
        $this->displayBlock('form_row', $context, $blocks);
        // line 223
        echo "
";
        // line 225
        $this->displayBlock('form_start', $context, $blocks);
        // line 245
        echo "
";
        // line 247
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 258
        echo "
";
        // line 260
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 308
        echo "
";
        // line 310
        $this->displayBlock('sortable_value_label_list_widget', $context, $blocks);
        // line 340
        echo "
";
        // line 342
        $this->displayBlock('sortablelist_entry_row', $context, $blocks);
        // line 348
        echo "
";
        // line 350
        $this->displayBlock('sortablelist_errors', $context, $blocks);
        // line 372
        echo "
";
        // line 374
        $this->displayBlock('sortablelist_row', $context, $blocks);
        // line 405
        echo "
";
        // line 407
        $this->displayBlock('standalone_button_row', $context, $blocks);
        // line 414
        echo "
";
        // line 416
        $this->displayBlock('standalone_button_widget', $context, $blocks);
        // line 428
        echo "
";
        // line 430
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 434
        echo "
";
        // line 436
        $this->displayBlock('time_widget', $context, $blocks);
        // line 462
        echo "
";
        // line 464
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 487
        echo "
";
        // line 489
        $this->displayBlock('yesno_button_group_widget', $context, $blocks);
        // line 520
        echo "
";
        // line 521
        $this->displayBlock('attributes', $context, $blocks);
        // line 536
        $this->displayBlock('form_help', $context, $blocks);
    }

    // line 6
    public function block_button_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })()));
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 7, $this->source); })()));
        echo "\" ";
        echo (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 7, $this->source); })())) ? ("disabled=\"disabled\"") : (""));
        echo "
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 8, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return !twig_in_filter($context["k"], ["icon"]); }));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 9
            if (twig_in_filter($context["v"], ["placeholder", "title"])) {
                // line 10
                echo twig_sprintf("%s=\"%s\" ", twig_escape_filter($this->env, $context["k"]), twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["v"], [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 10, $this->source); })()))));
                echo "
";
            } elseif ((            // line 11
$context["v"] === true)) {
                // line 12
                echo twig_sprintf("%s=\"%s\" ", twig_escape_filter($this->env, $context["k"]), twig_escape_filter($this->env, $context["k"]));
                echo "
";
            } elseif ( !(            // line 13
$context["v"] === false)) {
                // line 14
                echo twig_sprintf("%s=\"%s\" ", twig_escape_filter($this->env, $context["k"]), twig_escape_filter($this->env, $context["v"]));
                echo "
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 20
    public function block_button_group_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $context["hasErrors"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "errors", [], "any", false, false, false, 21));
        // line 22
        $context["feedbackClass"] = ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "getMethod", [], "method", false, false, false, 22) === "POST") && ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 22, $this->source); })()) > 0))) ? (" has-error") : (""));
        // line 23
        echo "<div class=\"row\">
    <div class=\"form-group col-xs-12";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'label', (twig_test_empty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 25, $this->source); })())) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"choice-wrapper\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'widget');
        echo "
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'errors');
        echo "
        </div>
    </div>
</div>
";
    }

    // line 35
    public function block_button_group_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        $context["attr"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "attr", [], "any", false, false, false, 37);
        // line 38
        echo "<div class=\"btn-group ";
        echo twig_escape_filter($this->env, (isset($context["buttonBlockClass"]) || array_key_exists("buttonBlockClass", $context) ? $context["buttonBlockClass"] : (function () { throw new RuntimeError('Variable "buttonBlockClass" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "\" data-toggle=\"buttons\">
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 40
            echo "        ";
            $context["class"] = ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 40), "checked", [], "any", false, false, false, 40))) ? (" active") : ("")) . ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 40), "disabled", [], "any", false, false, false, 40)) || (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "readonly", [], "any", true, true, false, 40) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 40, $this->source); })()), "readonly", [], "any", false, false, false, 40))))) ? (" disabled") : ("")));
            // line 41
            echo "        <label class=\"btn btn-default";
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\">
            ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 42, $this->source); })())]);
            echo "
            ";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 43), "label", [], "any", false, false, false, 43)), "html", null, true);
            echo "
        </label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</div>
";
    }

    // line 50
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'widget');
        echo "
";
    }

    // line 55
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        if ( !(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 56, $this->source); })())) {
            // line 57
            $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 57, $this->source); })()));
        }
        // line 59
        echo "<button type=\"";
        echo ((array_key_exists("type", $context)) ? (twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 59, $this->source); })()))) : ("button"));
        echo "\"
    ";
        // line 60
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 61), "attr", [], "any", false, true, false, 61), "icon", [], "any", true, true, false, 61) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "vars", [], "any", false, false, false, 61), "attr", [], "any", false, false, false, 61), "icon", [], "any", false, false, false, 61)))) {
            // line 62
            echo "    <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "vars", [], "any", false, false, false, 62), "attr", [], "any", false, false, false, 62), "icon", [], "any", false, false, false, 62), "html", null, true);
            echo " \"></i>
    ";
        }
        // line 64
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 64, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 64, $this->source); })())));
        echo "
</button>
";
    }

    // line 69
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        $context["hasErrors"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "vars", [], "any", false, false, false, 70), "errors", [], "any", false, false, false, 70));
        // line 71
        $context["feedbackClass"] = (( !twig_test_empty((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 71, $this->source); })()))) ? (" has-error") : (""));
        // line 72
        echo "<div class=\"row\">
    <div class=\"form-group col-xs-12";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "\">
        <div class=\"checkbox\">
            <label>
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'widget');
        echo "
                ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "vars", [], "any", false, false, false, 77), "label", [], "any", false, false, false, 77)), "html", null, true);
        echo "
            </label>
        </div>
        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'errors');
        echo "
    </div>
</div>
";
    }

    // line 86
    public function block_choice_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["choice_attr"]) || array_key_exists("choice_attr", $context) ? $context["choice_attr"] : (function () { throw new RuntimeError('Variable "choice_attr" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 88
            if (($context["v"] === true)) {
                // line 89
                echo twig_sprintf("%s=\"%s\" ", twig_escape_filter($this->env, $context["k"]), twig_escape_filter($this->env, $context["k"]));
                echo "
";
            } elseif ( !(            // line 90
$context["v"] === false)) {
                // line 91
                echo twig_sprintf("%s=\"%s\" ", twig_escape_filter($this->env, $context["k"]), twig_escape_filter($this->env, $context["v"]));
                echo "
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 97
    public function block_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        $context["hasErrors"] =  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "vars", [], "any", false, false, false, 98), "errors", [], "any", false, false, false, 98));
        // line 99
        $context["feedbackClass"] = (((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 99, $this->source); })())) ? (" has-error") : (""));
        // line 101
        $context["attr"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "vars", [], "any", false, false, false, 101), "attr", [], "any", false, false, false, 101);
        // line 102
        echo "<div class=\"row\">
    <div class=\"form-group col-xs-12 ";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'label', (twig_test_empty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 104, $this->source); })())) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"choice-wrapper\">
            ";
        // line 106
        if (((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new RuntimeError('Variable "expanded" does not exist.', 106, $this->source); })()) && (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 106, $this->source); })()))) {
            // line 107
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "children", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 108
                echo "                <div class=\"checkbox\">
                    <label>
                        ";
                // line 110
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 110, $this->source); })())]);
                echo "
                        ";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 111), "label", [], "any", false, false, false, 111)), "html", null, true);
                echo "
                    </label>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "            ";
        } else {
            // line 116
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), 'widget');
            echo "
            ";
        }
        // line 118
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), 'errors');
        echo "
        </div>
    </div>
</div>
";
    }

    // line 125
    public function block_dynamiclist_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 126
        echo "<div class=\"sortable\">
    ";
        // line 127
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'errors');
        echo "
</div>
";
    }

    // line 133
    public function block_dynamiclist_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        $context["list"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "children", [], "any", false, false, false, 134);
        // line 135
        $context["hasErrors"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "vars", [], "any", false, false, false, 135), "errors", [], "any", false, false, false, 135));
        // line 136
        $context["feedbackClass"] = (( !twig_test_empty((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 136, $this->source); })()))) ? (" has-error") : (""));
        // line 137
        $context["datePrototype"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "vars", [], "any", false, true, false, 137), "prototype", [], "any", true, true, false, 137)) ? (twig_escape_filter($this->env, (("<div class=\"sortable\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 137, $this->source); })()), "vars", [], "any", false, false, false, 137), "prototype", [], "any", false, false, false, 137), 'widget')) . "</div>"))) : (""));
        // line 138
        echo "<div class=\"row\">
    <div data-toggle=\"sortablelist\" data-prefix=\"";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "vars", [], "any", false, false, false, 139), "id", [], "any", false, false, false, 139), "html", null, true);
        echo "\" class=\"form-group col-xs-12 ";
        echo twig_escape_filter($this->env, (isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 139, $this->source); })()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "vars", [], "any", false, false, false, 139), "id", [], "any", false, false, false, 139), "html", null, true);
        echo "_list\">
        ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), 'label', (twig_test_empty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 140, $this->source); })())) ? [] : ["label" => $_label_]));
        echo "
        <a  data-prototype=\"";
        // line 141
        echo (isset($context["datePrototype"]) || array_key_exists("datePrototype", $context) ? $context["datePrototype"] : (function () { throw new RuntimeError('Variable "datePrototype" does not exist.', 141, $this->source); })());
        echo "\"
           class=\"btn btn-warning btn-xs btn-add-item\" href=\"#\" id=\"";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "vars", [], "any", false, false, false, 142), "id", [], "any", false, false, false, 142), "html", null, true);
        echo "_additem\">
            ";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.list.additem"), "html", null, true);
        echo "
        </a>
        ";
        // line 145
        if ((isset($context["isSortable"]) || array_key_exists("isSortable", $context) ? $context["isSortable"] : (function () { throw new RuntimeError('Variable "isSortable" does not exist.', 145, $this->source); })())) {
            // line 146
            echo "        <div class=\"list-sortable\">
        ";
        }
        // line 148
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 148, $this->source); })()), "children", [], "any", false, false, false, 148));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 149
            echo "          ";
            $this->displayBlock("sortablelist_entry_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "        </div>
        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 152, $this->source); })()), 'errors');
        echo "
        ";
        // line 153
        if ((isset($context["isSortable"]) || array_key_exists("isSortable", $context) ? $context["isSortable"] : (function () { throw new RuntimeError('Variable "isSortable" does not exist.', 153, $this->source); })())) {
            // line 154
            echo "        <input type=\"hidden\" class=\"sortable-itemcount\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "vars", [], "any", false, false, false, 154), "id", [], "any", false, false, false, 154), "html", null, true);
            echo "_itemcount\" value=\"";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 154, $this->source); })())), "html", null, true);
            echo "\" />
        ";
        }
        // line 156
        echo "    </div>
</div>
";
    }

    // line 161
    public function block_form_buttons_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"";
        echo twig_escape_filter($this->env, (isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 162, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 163
        if (( !twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "parent", [], "any", false, false, false, 163) && (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 163, $this->source); })()))) {
            // line 164
            echo "        <div class=\"has-error\">
            ";
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), 'errors');
            echo "
        </div>
    ";
        }
        // line 168
        $this->displayBlock("form_rows", $context, $blocks);
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), 'rest');
        echo "
</div>
";
    }

    // line 174
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 175, $this->source); })())) > 0)) {
            // line 176
            echo "    <div class=\"help-block\">
    ";
            // line 177
            if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 177, $this->source); })())) > 1)) {
                // line 178
                echo "        <ul>
            ";
                // line 179
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 179, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 180
                    echo "                <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "getMessage", [], "method", false, false, false, 180));
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 182
                echo "        </ul>
    ";
            } else {
                // line 184
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 184, $this->source); })())), "getMessage", [], "method", false, false, false, 184));
                echo "
    ";
            }
            // line 186
            echo "    </div>
";
        }
    }

    // line 191
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 192
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 192, $this->source); })()) === false)) {
            // line 193
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 193, $this->source); })())) {
                // line 194
                echo "    ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 194, $this->source); })()), ["class" => (twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 194)) ? (twig_get_attribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 194, $this->source); })()), "class", [], "any", false, false, false, 194)) : (""))) . " required")]);
            }
            // line 196
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 196, $this->source); })())) {
                // line 197
                echo "    ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 197, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 197, $this->source); })())]);
            }
            // line 199
            if ( !(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 199, $this->source); })())) {
                // line 200
                echo "    ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 200, $this->source); })()));
            }
            // line 202
            $context["tooltip"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 202), "attr", [], "any", false, true, false, 202), "tooltip", [], "any", true, true, false, 202) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "vars", [], "any", false, false, false, 202), "attr", [], "any", false, false, false, 202), "tooltip", [], "any", false, false, false, 202)))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "vars", [], "any", false, false, false, 202), "attr", [], "any", false, false, false, 202), "tooltip", [], "any", false, false, false, 202))) : (false));
            // line 203
            echo "<label ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 203, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 204
                echo "    ";
                echo twig_sprintf("%s=\"%s\" ", twig_escape_filter($this->env, $context["k"]), twig_escape_filter($this->env, $context["v"]));
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo (((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 205, $this->source); })())) ? (twig_sprintf("data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" title=\"%s\"", (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 205, $this->source); })()))) : (""));
            echo ">
";
            // line 206
            echo (((isset($context["label_html"]) || array_key_exists("label_html", $context) ? $context["label_html"] : (function () { throw new RuntimeError('Variable "label_html" does not exist.', 206, $this->source); })())) ? ($this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 206, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 206, $this->source); })())))) : (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 206, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 206, $this->source); })())))));
            echo (((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 206, $this->source); })())) ? (" <i class=\"ri-question-line\"></i>") : (""));
            echo "</label>
";
        }
    }

    // line 211
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 212
        $context["hasErrors"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "vars", [], "any", false, false, false, 212), "errors", [], "any", false, false, false, 212));
        // line 213
        $context["feedbackClass"] = ((((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 213, $this->source); })()) > 0)) ? (" has-error") : (""));
        // line 214
        echo "<div class=\"row\">
    <div class=\"form-group col-xs-12";
        // line 215
        echo twig_escape_filter($this->env, (isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 215, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), 'label', (twig_test_empty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 216, $this->source); })())) ? [] : ["label" => $_label_]));
        echo "
        ";
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), 'widget');
        echo "
        ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), 'errors');
        echo "
        ";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), 'help');
        echo "
    </div>
 </div>
";
    }

    // line 225
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 226
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 226, $this->source); })()));
        // line 227
        $context["form_method"] = (((((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 227, $this->source); })()) === "GET") || ((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 227, $this->source); })()) === "POST"))) ? ((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 227, $this->source); })())) : ("POST"));
        // line 228
        echo "<form novalidate autocomplete=\"false\" data-toggle=\"ajax\" role=\"form\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "vars", [], "any", false, false, false, 228), "name", [], "any", false, false, false, 228), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 228, $this->source); })())), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 228, $this->source); })()), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 228, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 229
            echo "    ";
            echo twig_sprintf("%s=\"%s\" ", twig_escape_filter($this->env, $context["k"]), twig_escape_filter($this->env, $context["v"]));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo (((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new RuntimeError('Variable "multipart" does not exist.', 230, $this->source); })())) ? (" enctype=\"multipart/form-data\"") : (""));
        echo ">
";
        // line 231
        if ( !((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new RuntimeError('Variable "form_method" does not exist.', 231, $this->source); })()) === (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 231, $this->source); })()))) {
            // line 232
            echo "    <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 232, $this->source); })()));
            echo "\" />
";
        }
        // line 234
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "vars", [], "any", false, false, false, 234), "errors", [], "any", false, false, false, 234)) > 0)) {
            // line 235
            echo "<div class=\"has-error pa-10\">
    ";
            // line 236
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), 'errors');
            echo "
</div>
";
        }
        // line 239
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "vars", [], "any", false, false, false, 239), "help", [], "any", false, false, false, 239)) > 0)) {
            // line 240
            echo "<div class=\"pa-10\">
    ";
            // line 241
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), 'help');
            echo "
</div>
";
        }
    }

    // line 247
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 248
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 249
        if (( !twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), "parent", [], "any", false, false, false, 249) && (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 249, $this->source); })()))) {
            // line 250
            echo "    <div class=\"has-error\">
        ";
            // line 251
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), 'errors');
            echo "
    </div>
    ";
        }
        // line 254
        echo "    ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
    ";
        // line 255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 255, $this->source); })()), 'rest');
        echo "
</div>
";
    }

    // line 260
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 261
        $context["preaddonAttr"] = ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "preaddon_attr", [], "any", true, true, false, 261)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 261, $this->source); })()), "preaddon_attr", [], "any", false, false, false, 261)) : ([]));
        // line 262
        $context["postaddonAttr"] = ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "postaddon_attr", [], "any", true, true, false, 262)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 262, $this->source); })()), "postaddon_attr", [], "any", false, false, false, 262)) : ([]));
        // line 263
        echo "
";
        // line 264
        if (((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "preaddon", [], "any", true, true, false, 264) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 264, $this->source); })()), "preaddon", [], "any", false, false, false, 264))) || (twig_get_attribute($this->env, $this->source,         // line 265
($context["attr"] ?? null), "postaddon", [], "any", true, true, false, 265) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 265, $this->source); })()), "postaddon", [], "any", false, false, false, 265)))) || (twig_get_attribute($this->env, $this->source,         // line 266
($context["attr"] ?? null), "preaddon_text", [], "any", true, true, false, 266) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 266, $this->source); })()), "preaddon_text", [], "any", false, false, false, 266)))) || (twig_get_attribute($this->env, $this->source,         // line 267
($context["attr"] ?? null), "postaddon_text", [], "any", true, true, false, 267) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 267, $this->source); })()), "postaddon_text", [], "any", false, false, false, 267))))) {
            // line 268
            echo "    <div class=\"input-group\">
        ";
            // line 269
            if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "preaddon", [], "any", true, true, false, 269) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 269, $this->source); })()), "preaddon", [], "any", false, false, false, 269)))) {
                // line 270
                echo "        <span class=\"input-group-addon preaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["preaddonAttr"]) || array_key_exists("preaddonAttr", $context) ? $context["preaddonAttr"] : (function () { throw new RuntimeError('Variable "preaddonAttr" does not exist.', 270, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 271
                    echo "            ";
                    echo twig_sprintf("%s=\"%s\" ", twig_escape_filter($this->env, $context["k"]), twig_escape_filter($this->env, $context["v"]));
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 272
                echo ">
            <i class=\"";
                // line 273
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 273, $this->source); })()), "preaddon", [], "any", false, false, false, 273), "html", null, true);
                echo "\"></i>
        </span>
        ";
            }
            // line 276
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "preaddon_text", [], "any", true, true, false, 276) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 276, $this->source); })()), "preaddon_text", [], "any", false, false, false, 276)))) {
                // line 277
                echo "        <span class=\"input-group-addon preaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["preaddonAttr"]) || array_key_exists("preaddonAttr", $context) ? $context["preaddonAttr"] : (function () { throw new RuntimeError('Variable "preaddonAttr" does not exist.', 277, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 278
                    echo "            ";
                    echo twig_sprintf("%s=\"%s\" ", twig_escape_filter($this->env, $context["k"]), twig_escape_filter($this->env, $context["v"]));
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 279
                echo ">
            <span>";
                // line 280
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 280, $this->source); })()), "preaddon_text", [], "any", false, false, false, 280), "html", null, true);
                echo "</span>
        </span>
        ";
            }
            // line 283
            echo "        <input autocomplete=\"false\" type=\"";
            echo ((array_key_exists("type", $context)) ? (twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 283, $this->source); })()))) : ("text"));
            echo "\"
            ";
            // line 284
            $this->displayBlock("widget_attributes", $context, $blocks);
            if (( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 284, $this->source); })())) || $this->env->getTest('numeric')->getCallable()((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 284, $this->source); })())))) {
                // line 285
                echo "            value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 285, $this->source); })()));
                echo "\"";
            }
            echo " />

        ";
            // line 287
            if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "postaddon", [], "any", true, true, false, 287) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 287, $this->source); })()), "postaddon", [], "any", false, false, false, 287)))) {
                // line 288
                echo "        <span class=\"input-group-addon postaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["postaddonAttr"]) || array_key_exists("postaddonAttr", $context) ? $context["postaddonAttr"] : (function () { throw new RuntimeError('Variable "postaddonAttr" does not exist.', 288, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 289
                    echo "            ";
                    echo twig_sprintf("%s=\"%s\" ", twig_escape_filter($this->env, $context["k"]), twig_escape_filter($this->env, $context["v"]));
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 290
                echo ">
            <i class=\"";
                // line 291
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 291, $this->source); })()), "postaddon", [], "any", false, false, false, 291), "html", null, true);
                echo "\"></i>
        </span>
        ";
            }
            // line 294
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "postaddon_text", [], "any", true, true, false, 294) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 294, $this->source); })()), "postaddon_text", [], "any", false, false, false, 294)))) {
                // line 295
                echo "        <span class=\"input-group-addon postaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["postaddonAttr"]) || array_key_exists("postaddonAttr", $context) ? $context["postaddonAttr"] : (function () { throw new RuntimeError('Variable "postaddonAttr" does not exist.', 295, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 296
                    echo "            ";
                    echo twig_sprintf("%s=\"%s\" ", twig_escape_filter($this->env, $context["k"]), twig_escape_filter($this->env, $context["v"]));
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 297
                echo ">
            <span>";
                // line 298
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 298, $this->source); })()), "postaddon_text", [], "any", false, false, false, 298), "html", null, true);
                echo "</span>
        </span>
        ";
            }
            // line 301
            echo "    </div>
";
        } else {
            // line 303
            echo "    <input type=\"";
            echo ((array_key_exists("type", $context)) ? (twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 303, $this->source); })()))) : ("text"));
            echo "\"
        ";
            // line 304
            $this->displayBlock("widget_attributes", $context, $blocks);
            if (( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 304, $this->source); })())) || $this->env->getTest('numeric')->getCallable()((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 304, $this->source); })())))) {
                // line 305
                echo "        value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 305, $this->source); })()));
                echo "\"";
            }
            echo " />
";
        }
    }

    // line 310
    public function block_sortable_value_label_list_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 311
        if (( !is_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "label", [], "any", false, false, false, 311), "vars", [], "any", false, false, false, 311), "value", [], "any", false, false, false, 311)) &&  !is_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "value", [], "any", false, false, false, 311), "vars", [], "any", false, false, false, 311), "value", [], "any", false, false, false, 311)))) {
            // line 312
            echo "<div class=\"input-group sortable-no-reorder\">
    ";
            // line 313
            if ( !twig_test_empty((isset($context["preaddon"]) || array_key_exists("preaddon", $context) ? $context["preaddon"] : (function () { throw new RuntimeError('Variable "preaddon" does not exist.', 313, $this->source); })()))) {
                // line 314
                echo "    <span class=\"input-group-addon preaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["preaddonAttr"]) || array_key_exists("preaddonAttr", $context) ? $context["preaddonAttr"] : (function () { throw new RuntimeError('Variable "preaddonAttr" does not exist.', 314, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 315
                    echo "    ";
                    echo twig_sprintf("%s=\"%s\" ", twig_escape_filter($this->env, $context["k"]), twig_escape_filter($this->env, $context["v"]));
                    echo "
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 316
                echo ">
    <i class=\"";
                // line 317
                echo twig_escape_filter($this->env, (isset($context["preaddon"]) || array_key_exists("preaddon", $context) ? $context["preaddon"] : (function () { throw new RuntimeError('Variable "preaddon" does not exist.', 317, $this->source); })()), "html", null, true);
                echo "\"></i>
    </span>
    ";
            }
            // line 320
            echo "    <div>
        <div class=\"row\">
            <div class=\"col-xs-6 mr-0 pr-0 bdr-r-wdh-0\">
            ";
            // line 323
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "label", [], "any", false, false, false, 323), 'widget', ["attr" => ["class" => "form-control sortable-label", "placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "label", [], "any", false, false, false, 323), "vars", [], "any", false, false, false, 323), "label", [], "any", false, false, false, 323)]]);
            echo "
            </div>
            <div class=\"col-xs-6 ml-0 pl-0\">
            ";
            // line 326
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 326, $this->source); })()), "value", [], "any", false, false, false, 326), 'widget', ["attr" => ["class" => "form-control sortable-value", "placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 326, $this->source); })()), "value", [], "any", false, false, false, 326), "vars", [], "any", false, false, false, 326), "label", [], "any", false, false, false, 326)]]);
            echo "
            </div>
        </div>
    </div>
    ";
            // line 330
            if ( !twig_test_empty((isset($context["postaddon"]) || array_key_exists("postaddon", $context) ? $context["postaddon"] : (function () { throw new RuntimeError('Variable "postaddon" does not exist.', 330, $this->source); })()))) {
                // line 331
                echo "    <span class=\"input-group-addon postaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["postaddonAttr"]) || array_key_exists("postaddonAttr", $context) ? $context["postaddonAttr"] : (function () { throw new RuntimeError('Variable "postaddonAttr" does not exist.', 331, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 332
                    echo "    ";
                    echo twig_sprintf("%s=\"%s\" ", twig_escape_filter($this->env, $context["k"]), twig_escape_filter($this->env, $context["v"]));
                    echo "
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 333
                echo ">
        <i class=\"";
                // line 334
                echo twig_escape_filter($this->env, (isset($context["postaddon"]) || array_key_exists("postaddon", $context) ? $context["postaddon"] : (function () { throw new RuntimeError('Variable "postaddon" does not exist.', 334, $this->source); })()), "html", null, true);
                echo "\"></i>
    </span>
    ";
            }
            // line 337
            echo "</div>
";
        }
    }

    // line 342
    public function block_sortablelist_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 343
        echo "<div class=\"sortable\">
    ";
        // line 344
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 344, $this->source); })()), 'widget');
        echo "
    ";
        // line 345
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 345, $this->source); })()), 'errors');
        echo "
</div>
";
    }

    // line 350
    public function block_sortablelist_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 351
        $context["errorMessages"] = [];
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 352, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 353
            echo "    ";
            if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["error"], "getMessage", [], "method", false, false, false, 353), (isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 353, $this->source); })()))) {
                // line 354
                echo "        ";
                $context["errorMessages"] = twig_array_merge((isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 354, $this->source); })()), [twig_get_attribute($this->env, $this->source, $context["error"], "getMessage", [], "method", false, false, false, 354)]);
                // line 355
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        echo "
";
        // line 358
        if ((twig_length_filter($this->env, (isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 358, $this->source); })())) > 0)) {
            // line 359
            echo "    <div class=\"help-block\">
        ";
            // line 360
            if ((twig_length_filter($this->env, (isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 360, $this->source); })())) > 1)) {
                // line 361
                echo "            <ul>
                ";
                // line 362
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 362, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["errorMessage"]) {
                    // line 363
                    echo "                    <li>";
                    echo twig_escape_filter($this->env, $context["errorMessage"]);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 365
                echo "            </ul>
        ";
            } else {
                // line 367
                echo "            ";
                echo twig_escape_filter($this->env, twig_first($this->env, (isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 367, $this->source); })())));
                echo "
        ";
            }
            // line 369
            echo "    </div>
";
        }
    }

    // line 374
    public function block_sortablelist_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 375
        $context["list"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 375, $this->source); })()), "children", [], "any", false, false, false, 375), "list", [], "any", false, false, false, 375);
        // line 376
        if (((($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 376, $this->source); })()), "parent", [], "any", false, false, false, 376), 'errors') && twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 376, $this->source); })()), "vars", [], "any", false, false, false, 376), "value", [], "any", false, false, false, 376))) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 376), "children", [], "any", false, true, false, 376), "properties", [], "any", false, true, false, 376), "list", [], "any", true, true, false, 376)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 376, $this->source); })()), "parent", [], "any", false, false, false, 376), "vars", [], "any", false, false, false, 376), "data", [], "any", false, false, false, 376), "getId", [], "method", false, false, false, 376) === null))) {
            // line 377
            echo "    ";
            // line 378
            echo "    ";
            $context["list"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 378, $this->source); })()), "parent", [], "any", false, false, false, 378), "children", [], "any", false, false, false, 378), "properties", [], "any", false, false, false, 378), "list", [], "any", false, false, false, 378);
        }
        // line 380
        $context["feedbackClass"] = (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 380, $this->source); })()), 'errors')) ? (" has-error") : (""));
        // line 381
        $context["datePrototype"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "vars", [], "any", false, true, false, 381), "prototype", [], "any", true, true, false, 381)) ? (twig_escape_filter($this->env, (("<div class=\"sortable\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 381, $this->source); })()), "vars", [], "any", false, false, false, 381), "prototype", [], "any", false, false, false, 381), 'widget')) . "</div>"))) : (""));
        // line 382
        echo "<div class=\"row\">
    <div data-toggle=\"sortablelist\" data-prefix=\"";
        // line 383
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 383, $this->source); })()), "vars", [], "any", false, false, false, 383), "id", [], "any", false, false, false, 383), "html", null, true);
        echo "\" class=\"form-group col-xs-12 ";
        echo twig_escape_filter($this->env, (isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 383, $this->source); })()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 383, $this->source); })()), "vars", [], "any", false, false, false, 383), "id", [], "any", false, false, false, 383), "html", null, true);
        echo "_list\" style=\"overflow:auto\">
        ";
        // line 384
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 384, $this->source); })()), 'label', (twig_test_empty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 384, $this->source); })())) ? [] : ["label" => $_label_]));
        echo "
        <a data-prototype=\"";
        // line 385
        echo (isset($context["datePrototype"]) || array_key_exists("datePrototype", $context) ? $context["datePrototype"] : (function () { throw new RuntimeError('Variable "datePrototype" does not exist.', 385, $this->source); })());
        echo "\"
           class=\"btn btn-warning btn-xs btn-add-item\" href=\"#\" id=\"";
        // line 386
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 386, $this->source); })()), "vars", [], "any", false, false, false, 386), "id", [], "any", false, false, false, 386), "html", null, true);
        echo "_additem\">
            ";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["addValueButton"]) || array_key_exists("addValueButton", $context) ? $context["addValueButton"] : (function () { throw new RuntimeError('Variable "addValueButton" does not exist.', 387, $this->source); })())), "html", null, true);
        echo "
        </a>
        ";
        // line 389
        $this->displayBlock("sortablelist_errors", $context, $blocks);
        echo "
        ";
        // line 390
        if ((isset($context["isSortable"]) || array_key_exists("isSortable", $context) ? $context["isSortable"] : (function () { throw new RuntimeError('Variable "isSortable" does not exist.', 390, $this->source); })())) {
            // line 391
            echo "        <div id=\"sortable-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), "vars", [], "any", false, false, false, 391), "id", [], "any", false, false, false, 391), "html", null, true);
            echo "\" class=\"list-sortable\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 391, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 392
                echo "        ";
                echo twig_sprintf("%s=\"%s\" ", twig_escape_filter($this->env, $context["k"]), twig_escape_filter($this->env, $context["v"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 393
            echo ">
        ";
        }
        // line 395
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 395, $this->source); })()), "children", [], "any", false, false, false, 395));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 396
            echo "            ";
            $this->displayBlock("sortablelist_entry_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 398
        echo "        </div>
        ";
        // line 399
        if ((isset($context["isSortable"]) || array_key_exists("isSortable", $context) ? $context["isSortable"] : (function () { throw new RuntimeError('Variable "isSortable" does not exist.', 399, $this->source); })())) {
            // line 400
            echo "        <input type=\"hidden\" class=\"sortable-itemcount\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 400, $this->source); })()), "vars", [], "any", false, false, false, 400), "id", [], "any", false, false, false, 400), "html", null, true);
            echo "_itemcount\" value=\"";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 400, $this->source); })())), "html", null, true);
            echo "\" />
        ";
        }
        // line 402
        echo "    </div>
</div>
";
    }

    // line 407
    public function block_standalone_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 408
        echo "<div class=\"row\">
    <div class=\"form-group col-xs-12 col-sm-8 col-md-6\">
        ";
        // line 410
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 410, $this->source); })()), 'widget');
        echo "
    </div>
</div>
";
    }

    // line 416
    public function block_standalone_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 417
        if ( !(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 417, $this->source); })())) {
            // line 418
            $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 418, $this->source); })()));
        }
        // line 420
        echo "<button type=\"";
        echo ((array_key_exists("type", $context)) ? (twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 420, $this->source); })()))) : ("button"));
        echo "\"
    ";
        // line 421
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    ";
        // line 422
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 422), "attr", [], "any", false, true, false, 422), "icon", [], "any", true, true, false, 422) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 422, $this->source); })()), "vars", [], "any", false, false, false, 422), "attr", [], "any", false, false, false, 422), "icon", [], "any", false, false, false, 422)))) {
            // line 423
            echo "    <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 423, $this->source); })()), "vars", [], "any", false, false, false, 423), "attr", [], "any", false, false, false, 423), "icon", [], "any", false, false, false, 423), "html", null, true);
            echo " \"></i>
    ";
        }
        // line 425
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 425, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 425, $this->source); })())));
        echo "
</button>
";
    }

    // line 430
    public function block_tel_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 432
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 436
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 437
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 437, $this->source); })()) === "single_text")) {
            // line 438
            echo "    ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
";
        } else {
            // line 440
            echo "    ";
            $context["size"] = 4;
            // line 441
            echo "    ";
            if (( !(isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 441, $this->source); })()) &&  !(isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 441, $this->source); })()))) {
                // line 442
                echo "        ";
                $context["size"] = 12;
                // line 443
                echo "    ";
            } elseif (( !(isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 443, $this->source); })()) ||  !(isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 443, $this->source); })()))) {
                // line 444
                echo "        ";
                $context["size"] = 6;
                // line 445
                echo "    ";
            }
            // line 446
            echo "    ";
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 446, $this->source); })()) === "text")) ? (["attr" => ["size" => 1, "class" => "not-chosen"]]) : (["attr" => ["class" => "not-chosen"]]));
            // line 447
            echo "    <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
            // line 450
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 450, $this->source); })()), "hour", [], "any", false, false, false, 450), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 450, $this->source); })()));
            echo "

        ";
            // line 452
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 452, $this->source); })())) {
                // line 453
                echo "            ";
                echo twig_escape_filter($this->env, (":" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 453, $this->source); })()), "minute", [], "any", false, false, false, 453), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 453, $this->source); })()))), "html", null, true);
                echo "
        ";
            }
            // line 455
            echo "
        ";
            // line 456
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 456, $this->source); })())) {
                // line 457
                echo "            ";
                echo twig_escape_filter($this->env, (":" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 457, $this->source); })()), "second", [], "any", false, false, false, 457), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 457, $this->source); })()))), "html", null, true);
                echo "
        ";
            }
            // line 459
            echo "    </div>
";
        }
    }

    // line 464
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 465
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 465, $this->source); })()));
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 465, $this->source); })()));
        echo "\"
";
        // line 466
        echo ((((array_key_exists("disabled", $context)) ? (_twig_default_filter((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 466, $this->source); })()), false)) : (false))) ? ("disabled=\"disabled\"") : (""));
        echo "
";
        // line 467
        echo ((((array_key_exists("required", $context)) ? (_twig_default_filter((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 467, $this->source); })()), false)) : (false))) ? ("required=\"required\"") : (""));
        echo "

";
        // line 469
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 469, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return !twig_in_filter($context["k"], ["tooltip", "preaddon", "preaddon_attr", "postaddon_attr"]); }));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 470
            echo "    ";
            if (twig_in_filter($context["k"], ["placeholder", "title"])) {
                // line 471
                echo "        ";
                echo twig_sprintf("%s=\"%s\" ", twig_escape_filter($this->env, $context["k"]), twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["v"], [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 471, $this->source); })()))));
                echo "
    ";
            } elseif (((            // line 472
$context["k"] === "data-order") && $this->env->getTest('string')->getCallable()($context["v"]))) {
                // line 473
                echo "        ";
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo "=\"";
                echo $context["v"];
                echo "\"
    ";
            } elseif ((            // line 474
$context["v"] === true)) {
                // line 475
                echo "        ";
                echo twig_sprintf("%s=\"%s\" ", twig_escape_filter($this->env, $context["k"]), twig_escape_filter($this->env, $context["k"]));
                echo "
    ";
            } elseif (is_iterable(            // line 476
$context["v"])) {
                // line 477
                echo "        ";
                $context["v"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->formatList(twig_constant("Mautic\\FormBundle\\Helper\\FormFieldHelper::FORMAT_BAR"), $context["v"]);
                // line 478
                echo "        ";
                echo twig_sprintf("%s=\"%s\" ", twig_escape_filter($this->env, $context["k"]), twig_escape_filter($this->env, $context["v"]));
                echo "
    ";
            } elseif ( !(            // line 479
$context["v"] === false)) {
                // line 480
                echo "        ";
                echo twig_sprintf("%s=\"%s\" ", twig_escape_filter($this->env, $context["k"]), twig_escape_filter($this->env, $context["v"]));
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 483
        echo "
";
        // line 485
        echo (( !twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "autocomplete", [], "any", true, true, false, 485)) ? ("autocomplete=\"false\" ") : (""));
        echo "
";
    }

    // line 489
    public function block_yesno_button_group_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 491
        $context["attr"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 491, $this->source); })()), "vars", [], "any", false, false, false, 491), "attr", [], "any", false, false, false, 491);
        // line 492
        $context["onchange"] = "Mautic.toggleYesNoButtonClass(mQuery(this).attr('id'));";
        // line 493
        echo "
";
        // line 494
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "onchange", [], "any", true, true, false, 494)) {
            // line 495
            echo "    ";
            if ( !(is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 495, $this->source); })()), "onchange", [], "any", false, false, false, 495)) && is_string($__internal_compile_1 = ";") && str_ends_with($__internal_compile_0, $__internal_compile_1))) {
                // line 496
                echo "        ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 496, $this->source); })()), ["onchange" => (twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 496, $this->source); })()), "onchange", [], "any", false, false, false, 496) . ";")]);
                // line 497
                echo "    ";
            }
            // line 498
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 498, $this->source); })()), ["onchange" => ((twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 498, $this->source); })()), "onchange", [], "any", false, false, false, 498) . " ") . (isset($context["onchange"]) || array_key_exists("onchange", $context) ? $context["onchange"] : (function () { throw new RuntimeError('Variable "onchange" does not exist.', 498, $this->source); })()))]);
        } else {
            // line 500
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 500, $this->source); })()), ["onchange" => (isset($context["onchange"]) || array_key_exists("onchange", $context) ? $context["onchange"] : (function () { throw new RuntimeError('Variable "onchange" does not exist.', 500, $this->source); })())]);
        }
        // line 502
        echo "
";
        // line 503
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 503, $this->source); })()), ["style" => "width: 1px; height: 1px; top: 0; left: 0; margin-top: 0;"]);
        // line 504
        echo "<div class=\"btn-group btn-block\" data-toggle=\"buttons\">
    ";
        // line 505
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 505, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 506
            echo "        ";
            $context["class"] = (((((( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 507
$context["child"], "vars", [], "any", false, false, false, 507), "checked", [], "any", false, false, false, 507))) ? (" active") : ("")) . ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 508
$context["child"], "vars", [], "any", false, true, false, 508), "disabled", [], "any", true, true, false, 508) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 508), "disabled", [], "any", false, false, false, 508))) || (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "readonly", [], "any", true, true, false, 508) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 508, $this->source); })()), "readonly", [], "any", false, false, false, 508))))) ? (" disabled") : (""))) . (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 509
$context["child"], "vars", [], "any", false, false, false, 509), "name", [], "any", false, false, false, 509) == "0")) ? (" btn-no") : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 509), "name", [], "any", false, false, false, 509) == "1")) ? (" btn-yes") : (" btn-extra"))))) . ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 510
$context["child"], "vars", [], "any", false, false, false, 510), "name", [], "any", false, false, false, 510) == "0") &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 510), "checked", [], "any", false, false, false, 510)))) ? (" btn-danger") : (""))) . ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 511
$context["child"], "vars", [], "any", false, false, false, 511), "name", [], "any", false, false, false, 511) == "1") &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 511), "checked", [], "any", false, false, false, 511)))) ? (" btn-success") : ("")));
            // line 513
            echo "        <label class=\"btn btn-default ";
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 513, $this->source); })()), "html", null, true);
            echo "\">
            ";
            // line 514
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 514, $this->source); })())]);
            echo "
            <span>";
            // line 515
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 515), "label", [], "any", false, false, false, 515)), "html", null, true);
            echo "</span>
        </label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 518
        echo "</div>
";
    }

    // line 521
    public function block_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 522
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 522, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 523
            echo " ";
            // line 524
            if (twig_in_filter($context["attrname"], ["placeholder", "title"])) {
                // line 525
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 525, $this->source); })()) === false) || (null === $context["attrvalue"]))) ? ($context["attrvalue"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["attrvalue"], (isset($context["attr_translation_parameters"]) || array_key_exists("attr_translation_parameters", $context) ? $context["attr_translation_parameters"] : (function () { throw new RuntimeError('Variable "attr_translation_parameters" does not exist.', 525, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 525, $this->source); })())))), "html", null, true);
                echo "\"";
            } elseif (twig_in_filter(            // line 526
$context["attrname"], ["data-filter-definitions", "data-filter-operators"])) {
                // line 527
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo $context["attrvalue"];
                echo "\"";
            } elseif ((            // line 528
$context["attrvalue"] === true)) {
                // line 529
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 530
$context["attrvalue"] === false)) {
                // line 531
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 536
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 537
        if ( !twig_test_empty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 537, $this->source); })()))) {
            // line 538
            $context["help_attr"] = twig_array_merge((isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 538, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 538)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 538), "")) : ("")) . " help-text"))]);
            // line 539
            echo "<p id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 539, $this->source); })()), "html", null, true);
            echo "_help\"";
            $__internal_compile_2 = $context;
            $__internal_compile_3 = ["attr" => (isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 539, $this->source); })())];
            if (!is_iterable($__internal_compile_3)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 539, $this->getSourceContext());
            }
            $__internal_compile_3 = twig_to_array($__internal_compile_3);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_2;
            echo ">";
            // line 540
            if (((isset($context["help_html"]) || array_key_exists("help_html", $context) ? $context["help_html"] : (function () { throw new RuntimeError('Variable "help_html" does not exist.', 540, $this->source); })()) === false)) {
                // line 541
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 541, $this->source); })()), (isset($context["help_translation_parameters"]) || array_key_exists("help_translation_parameters", $context) ? $context["help_translation_parameters"] : (function () { throw new RuntimeError('Variable "help_translation_parameters" does not exist.', 541, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 541, $this->source); })())), "html", null, true);
            } else {
                // line 543
                echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 543, $this->source); })()), (isset($context["help_translation_parameters"]) || array_key_exists("help_translation_parameters", $context) ? $context["help_translation_parameters"] : (function () { throw new RuntimeError('Variable "help_translation_parameters" does not exist.', 543, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 543, $this->source); })())));
            }
            // line 545
            echo "</p>";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/FormTheme/mautic_form_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1681 => 545,  1678 => 543,  1675 => 541,  1673 => 540,  1659 => 539,  1657 => 538,  1655 => 537,  1651 => 536,  1639 => 531,  1637 => 530,  1632 => 529,  1630 => 528,  1625 => 527,  1623 => 526,  1618 => 525,  1616 => 524,  1614 => 523,  1610 => 522,  1606 => 521,  1601 => 518,  1592 => 515,  1588 => 514,  1583 => 513,  1581 => 511,  1580 => 510,  1579 => 509,  1578 => 508,  1577 => 507,  1575 => 506,  1571 => 505,  1568 => 504,  1566 => 503,  1563 => 502,  1559 => 500,  1555 => 498,  1552 => 497,  1549 => 496,  1546 => 495,  1544 => 494,  1541 => 493,  1539 => 492,  1537 => 491,  1533 => 489,  1527 => 485,  1524 => 483,  1514 => 480,  1512 => 479,  1507 => 478,  1504 => 477,  1502 => 476,  1497 => 475,  1495 => 474,  1488 => 473,  1486 => 472,  1481 => 471,  1478 => 470,  1474 => 469,  1469 => 467,  1465 => 466,  1458 => 465,  1454 => 464,  1448 => 459,  1442 => 457,  1440 => 456,  1437 => 455,  1431 => 453,  1429 => 452,  1423 => 450,  1418 => 447,  1415 => 446,  1412 => 445,  1409 => 444,  1406 => 443,  1403 => 442,  1400 => 441,  1397 => 440,  1391 => 438,  1389 => 437,  1385 => 436,  1379 => 432,  1375 => 430,  1367 => 425,  1361 => 423,  1359 => 422,  1355 => 421,  1350 => 420,  1347 => 418,  1345 => 417,  1341 => 416,  1333 => 410,  1329 => 408,  1325 => 407,  1319 => 402,  1311 => 400,  1309 => 399,  1306 => 398,  1289 => 396,  1271 => 395,  1267 => 393,  1258 => 392,  1251 => 391,  1249 => 390,  1245 => 389,  1240 => 387,  1236 => 386,  1232 => 385,  1228 => 384,  1220 => 383,  1217 => 382,  1215 => 381,  1213 => 380,  1209 => 378,  1207 => 377,  1205 => 376,  1203 => 375,  1199 => 374,  1193 => 369,  1187 => 367,  1183 => 365,  1174 => 363,  1170 => 362,  1167 => 361,  1165 => 360,  1162 => 359,  1160 => 358,  1157 => 357,  1150 => 355,  1147 => 354,  1144 => 353,  1140 => 352,  1138 => 351,  1134 => 350,  1127 => 345,  1123 => 344,  1120 => 343,  1116 => 342,  1110 => 337,  1104 => 334,  1101 => 333,  1092 => 332,  1087 => 331,  1085 => 330,  1078 => 326,  1072 => 323,  1067 => 320,  1061 => 317,  1058 => 316,  1049 => 315,  1044 => 314,  1042 => 313,  1039 => 312,  1037 => 311,  1033 => 310,  1023 => 305,  1020 => 304,  1015 => 303,  1011 => 301,  1005 => 298,  1002 => 297,  993 => 296,  988 => 295,  985 => 294,  979 => 291,  976 => 290,  967 => 289,  962 => 288,  960 => 287,  952 => 285,  949 => 284,  944 => 283,  938 => 280,  935 => 279,  926 => 278,  921 => 277,  918 => 276,  912 => 273,  909 => 272,  900 => 271,  895 => 270,  893 => 269,  890 => 268,  888 => 267,  887 => 266,  886 => 265,  885 => 264,  882 => 263,  880 => 262,  878 => 261,  874 => 260,  867 => 255,  862 => 254,  856 => 251,  853 => 250,  851 => 249,  846 => 248,  842 => 247,  834 => 241,  831 => 240,  829 => 239,  823 => 236,  820 => 235,  818 => 234,  812 => 232,  810 => 231,  806 => 230,  797 => 229,  786 => 228,  784 => 227,  782 => 226,  778 => 225,  770 => 219,  766 => 218,  762 => 217,  758 => 216,  754 => 215,  751 => 214,  749 => 213,  747 => 212,  743 => 211,  735 => 206,  731 => 205,  722 => 204,  717 => 203,  715 => 202,  711 => 200,  709 => 199,  705 => 197,  703 => 196,  699 => 194,  697 => 193,  695 => 192,  691 => 191,  685 => 186,  679 => 184,  675 => 182,  666 => 180,  662 => 179,  659 => 178,  657 => 177,  654 => 176,  652 => 175,  648 => 174,  641 => 169,  639 => 168,  633 => 165,  630 => 164,  628 => 163,  621 => 162,  617 => 161,  611 => 156,  603 => 154,  601 => 153,  597 => 152,  594 => 151,  577 => 149,  559 => 148,  555 => 146,  553 => 145,  548 => 143,  544 => 142,  540 => 141,  536 => 140,  528 => 139,  525 => 138,  523 => 137,  521 => 136,  519 => 135,  517 => 134,  513 => 133,  506 => 128,  502 => 127,  499 => 126,  495 => 125,  485 => 118,  479 => 116,  476 => 115,  466 => 111,  462 => 110,  458 => 108,  453 => 107,  451 => 106,  446 => 104,  442 => 103,  439 => 102,  437 => 101,  435 => 99,  433 => 98,  429 => 97,  418 => 91,  416 => 90,  412 => 89,  410 => 88,  406 => 87,  402 => 86,  394 => 80,  388 => 77,  384 => 76,  378 => 73,  375 => 72,  373 => 71,  371 => 70,  367 => 69,  359 => 64,  353 => 62,  351 => 61,  347 => 60,  342 => 59,  339 => 57,  337 => 56,  333 => 55,  327 => 51,  323 => 50,  318 => 46,  309 => 43,  305 => 42,  300 => 41,  297 => 40,  293 => 39,  288 => 38,  286 => 37,  282 => 35,  273 => 28,  269 => 27,  264 => 25,  260 => 24,  257 => 23,  255 => 22,  253 => 21,  249 => 20,  238 => 14,  236 => 13,  232 => 12,  230 => 11,  226 => 10,  224 => 9,  220 => 8,  211 => 7,  207 => 6,  203 => 536,  201 => 521,  198 => 520,  196 => 489,  193 => 487,  191 => 464,  188 => 462,  186 => 436,  183 => 434,  181 => 430,  178 => 428,  176 => 416,  173 => 414,  171 => 407,  168 => 405,  166 => 374,  163 => 372,  161 => 350,  158 => 348,  156 => 342,  153 => 340,  151 => 310,  148 => 308,  146 => 260,  143 => 258,  141 => 247,  138 => 245,  136 => 225,  133 => 223,  131 => 211,  128 => 209,  126 => 191,  123 => 189,  121 => 174,  118 => 172,  116 => 161,  113 => 159,  111 => 133,  108 => 131,  106 => 125,  103 => 123,  101 => 97,  98 => 95,  96 => 86,  93 => 84,  91 => 69,  88 => 67,  86 => 55,  83 => 53,  81 => 50,  78 => 48,  76 => 35,  73 => 33,  71 => 20,  68 => 18,  66 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/FormTheme/mautic_form_layout.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\FormTheme\\mautic_form_layout.html.twig");
    }
}
