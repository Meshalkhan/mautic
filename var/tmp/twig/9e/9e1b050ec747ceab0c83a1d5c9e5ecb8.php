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

/* @MauticLead/List/form.html.twig */
class __TwigTemplate_a4897ea846d96404805d287077a1bfa3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), ["@MauticLead/FormTheme/Filter/_leadlist_filters_entry_widget.html.twig", "@MauticLead/FormTheme/Filter/_leadlist_filters_widget.html.twig"], true);
        // line 10
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/List/form.html.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "leadlist";
    }

    // line 14
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "  ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "data", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15))) {
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.header.edit", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "data", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16)]), "html", null, true);
        } else {
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.header.new"), "html", null, true);
        }
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $context["index"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "filters", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23)) > 0)) ? (max(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "filters", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23)))) : (0));
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
<div class=\"box-layout\">
    <div class=\"col-md-9 height-auto\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <ul class=\"nav nav-tabs pr-md pl-md\">
                    <li class=\"active\">
                        <a href=\"#details\" role=\"tab\" data-toggle=\"tab\" class=\"";
        // line 31
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), ["filters"])) {
            echo "text-danger";
        }
        echo "\">
                            ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "
                            ";
        // line 33
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), ["filters"])) {
            // line 34
            echo "                              <i class=\"ri-alert-line\"></i>
                            ";
        }
        // line 36
        echo "                        </a>
                    </li>
                    <li data-toggle=\"tooltip\" title=\"\" data-placement=\"top\" data-original-title=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.segment.add.help"), "html", null, true);
        echo "\">
                        <a href=\"#filters\" role=\"tab\" data-toggle=\"tab\" class=\"";
        // line 39
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "filters", [], "any", false, false, false, 39))) {
            echo "text-danger";
        }
        echo "\">
                            ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.filters"), "html", null, true);
        echo "
                            ";
        // line 41
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "filters", [], "any", false, false, false, 41))) {
            // line 42
            echo "                                <i class=\"ri-alert-line\"></i>
                            ";
        }
        // line 44
        echo "                        </a>
                    </li>
                </ul>

                <!-- start: tab-content -->
                <div class=\"tab-content pa-md\">
                    <div class=\"tab-pane fade in active bdr-w-0\" id=\"details\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), 'row');
        echo "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "alias", [], "any", false, false, false, 56), 'row');
        echo "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "publicName", [], "any", false, false, false, 59), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64), 'row');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade bdr-w-0\" id=\"filters\">
                        <div class=\"alert alert-info\"><p>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.segment.filter.info"), "html", null, true);
        echo "</p></div>
                        <div class=\"form-group\">
                            <div class=\"available-filters mb-md pl-0 col-md-4\" data-prototype=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "filters", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "prototype", [], "any", false, false, false, 71), 'widget'));
        echo "\" data-index=\"";
        echo twig_escape_filter($this->env, ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 71, $this->source); })()) + 1), "html", null, true);
        echo "\">
                                <select class=\"chosen form-control\" id=\"available_segment_filters\">
                                    <option value=\"\"></option>
                                    ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "vars", [], "any", false, false, false, 74), "fields", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["object"] => $context["field"]) {
            // line 75
            echo "                                      ";
            $context["icon"] = ((("company" == $context["object"])) ? ("building") : ("user"));
            // line 76
            echo "                                      ";
            $context["header"] = (($this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorHasId(("mautic.lead." . $context["object"]))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead." . $context["object"]))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["object"])));
            // line 77
            echo "                                      <optgroup label=\"";
            echo twig_escape_filter($this->env, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 77, $this->source); })()), "html", null, true);
            echo "\">
                                          ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["field"]);
            foreach ($context['_seq'] as $context["value"] => $context["params"]) {
                // line 79
                echo "                                              ";
                $context["operators"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["params"], "operators", [], "any", false, false, false, 79))) ? (json_encode(twig_get_attribute($this->env, $this->source, $context["params"], "operators", [], "any", false, false, false, 79))) : ("{}"));
                // line 80
                echo "                                              <option value=\"";
                echo twig_escape_filter($this->env, $context["value"]);
                echo "\"
                                                      id=\"available_";
                // line 81
                echo twig_escape_filter($this->env, $context["object"], "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
                                                      data-field-object=\"";
                // line 82
                echo twig_escape_filter($this->env, $context["object"], "html", null, true);
                echo "\"
                                                      data-field-type=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["params"], "properties", [], "any", false, false, false, 83), "type", [], "any", false, false, false, 83), "html", null, true);
                echo "\"
                                                      data-field-operators=\"";
                // line 84
                echo twig_escape_filter($this->env, (isset($context["operators"]) || array_key_exists("operators", $context) ? $context["operators"] : (function () { throw new RuntimeError('Variable "operators" does not exist.', 84, $this->source); })()));
                echo "\"
                                                      class=\"segment-filter ";
                // line 85
                echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 85, $this->source); })()), "html", null, true);
                echo "\">
                                                      ";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["params"], "label", [], "any", false, false, false, 86)), "html", null, true);
                echo "
                                              </option>
                                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['params'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                                      </optgroup>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['object'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                                </select>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"selected-filters\" id=\"leadlist_filters\">
                            ";
        // line 96
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "filters", [], "any", false, false, false, 96))) {
            // line 97
            echo "                                <div class=\"alert alert-danger has-error\">
                                    ";
            // line 98
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "filters", [], "any", false, false, false, 98), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 101
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "filters", [], "any", false, false, false, 101), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-3 height-auto bdr-l\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "category", [], "any", false, false, false, 110), 'row');
        echo "
            ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "isGlobal", [], "any", false, false, false, 111), 'row');
        echo "
            ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 112), 'row');
        echo "
            ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "isPublished", [], "any", false, false, false, 113), 'row');
        echo "
        </div>
    </div>
</div>
";
        // line 117
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_end');
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/List/form.html.twig";
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
        return array (  296 => 117,  289 => 113,  285 => 112,  281 => 111,  277 => 110,  264 => 101,  258 => 98,  255 => 97,  253 => 96,  246 => 91,  239 => 89,  230 => 86,  226 => 85,  222 => 84,  218 => 83,  214 => 82,  208 => 81,  203 => 80,  200 => 79,  196 => 78,  191 => 77,  188 => 76,  185 => 75,  181 => 74,  173 => 71,  168 => 69,  160 => 64,  152 => 59,  146 => 56,  140 => 53,  129 => 44,  125 => 42,  123 => 41,  119 => 40,  113 => 39,  109 => 38,  105 => 36,  101 => 34,  99 => 33,  95 => 32,  89 => 31,  79 => 24,  77 => 23,  73 => 22,  68 => 18,  65 => 16,  62 => 15,  58 => 14,  51 => 12,  46 => 10,  44 => 5,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/List/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\List\\form.html.twig");
    }
}
