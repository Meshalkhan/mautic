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

/* @MauticLead/Import/_mapping_form.html.twig */
class __TwigTemplate_0970158a1b50935295f076cf438b3005 extends Template
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
        echo "<div class=\"ml-lg mr-lg mt-md pa-lg\">
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <div class=\"panel-title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.default.owner"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"panel-body\">
            <div class=\"col-xs-4\">
                ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "owner", [], "any", true, true, false, 13)) {
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "owner", [], "any", false, false, false, 13), 'row');
        }
        // line 14
        echo "            </div>
            <div class=\"col-xs-4\">
                ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "list", [], "any", true, true, false, 16)) {
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "list", [], "any", false, false, false, 16), 'row');
        }
        // line 17
        echo "            </div>
            <div class=\"col-xs-4\">
                ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tags", [], "any", true, true, false, 19)) {
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "tags", [], "any", false, false, false, 19), 'row');
        }
        // line 20
        echo "            </div>
            <div class=\"col-xs-4\">
                ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "skip_if_exists", [], "any", true, true, false, 22)) {
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "skip_if_exists", [], "any", false, false, false, 22), 'row');
        }
        // line 23
        echo "            </div>
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <div class=\"panel-title\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.fields"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"panel-body\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'errors');
        echo "
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "children", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 33
            echo "                ";
            if ((("properties" != $context["key"]) &&  !twig_get_attribute($this->env, $this->source, $context["child"], "isRendered", [], "any", false, false, false, 33))) {
                // line 34
                echo "                    <div class=\"col-sm-4\">
                        ";
                // line 35
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
                echo "
                    </div>
                ";
            }
            // line 38
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </div>
    </div>
    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Import/_mapping_form.html.twig";
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
        return array (  124 => 41,  120 => 39,  114 => 38,  108 => 35,  105 => 34,  102 => 33,  98 => 32,  94 => 31,  88 => 28,  81 => 23,  77 => 22,  73 => 20,  69 => 19,  65 => 17,  61 => 16,  57 => 14,  53 => 13,  46 => 9,  40 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Import/_mapping_form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Import\\_mapping_form.html.twig");
    }
}
