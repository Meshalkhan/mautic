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

/* @MauticCore/Slots/categorylist.html.twig */
class __TwigTemplate_826d5bdf827657c0a732a0397cdd57f0 extends Template
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
        if (array_key_exists("form", $context)) {
            // line 2
            echo "    ";
            if ((((array_key_exists("showContactCategories", $context) && (isset($context["showContactCategories"]) || array_key_exists("showContactCategories", $context) ? $context["showContactCategories"] : (function () { throw new RuntimeError('Variable "showContactCategories" does not exist.', 2, $this->source); })())) && twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "global_categories", [], "any", true, true, false, 2)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "global_categories", [], "any", false, false, false, 2)) > 0))) {
                // line 3
                echo "<div class=\"global-categories text-left\">
    <div>
        <label class=\"control-label\">";
                // line 5
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.form.categories"), "html", null, true);
                echo "</label>
    </div>
        ";
                // line 7
                $context["categoryNumber"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "global_categories", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "choices", [], "any", false, false, false, 7));
                // line 8
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "global_categories", [], "any", false, false, false, 8));
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
                foreach ($context['_seq'] as $context["_key"] => $context["temp"]) {
                    // line 9
                    echo "            <div id=\"category-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "revindex0", [], "any", false, false, false, 9), "html", null, true);
                    echo "\" class=\"text-left\">
                ";
                    // line 10
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "global_categories", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, $context["loop"], "revindex0", [], "any", false, false, false, 10), [], "array", false, false, false, 10), 'widget');
                    echo "
                ";
                    // line 11
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "global_categories", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, $context["loop"], "revindex0", [], "any", false, false, false, 11), [], "array", false, false, false, 11), 'label');
                    echo "
            </div>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "        ";
                // line 15
                echo "    </div>
    ";
            } else {
                // line 17
                echo "        ";
                // line 18
                echo "    ";
            }
        } else {
            // line 20
            echo "    <div class=\"global-categories text-left\">
        <div>
            <label class=\"control-label\">";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.form.categories"), "html", null, true);
            echo "</label>
        </div>
        <div id=\"category-1\" class=\"text-left\">
            <input type=\"checkbox\" id=\"lead_contact_frequency_rules_global_categories_1\" name=\"lead_contact_frequency_rules[global_categories][]\" autocomplete=\"false\" value=\"1\" checked=\"checked\">
            <label for=\"lead_contact_frequency_rules_global_categories_1\">";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.category"), "html", null, true);
            echo "</label>
        </div>
    </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Slots/categorylist.html.twig";
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
        return array (  120 => 26,  113 => 22,  109 => 20,  105 => 18,  103 => 17,  99 => 15,  97 => 14,  80 => 11,  76 => 10,  71 => 9,  53 => 8,  51 => 7,  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Slots/categorylist.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Slots\\categorylist.html.twig");
    }
}
