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

/* @MauticLead/Company/form_standalone.html.twig */
class __TwigTemplate_d793addd85efb2bf632136180a24a9b3 extends Template
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
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Company/form_standalone.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "company";
    }

    // line 12
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)) {
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.company.menu.edit", ["%name%" => $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14))]), "html", null, true);
        } else {
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.company.menu.new"), "html", null, true);
        }
    }

    // line 20
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "  ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })()), "routeBase" => "company", "langVar" => "lead.company"]);
        echo "
";
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        echo "
    <div class=\"box-layout\">
        <div class=\"col-md-3 height-auto\">
            <div class=\"pr-lg pl-lg pt-md pb-md\">
                <ul class=\"list-group list-group-tabs\">
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 30, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 31
            echo "                        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 31, $this->source); })()), $context["g"], [], "array", false, false, false, 31))) {
                // line 32
                echo "                            <li class=\"list-group-item ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 32)) {
                    echo "active";
                }
                echo "\">
                                <a href=\"#company-";
                // line 33
                echo twig_escape_filter($this->env, $context["g"], "html", null, true);
                echo "\" class=\"steps\" data-toggle=\"tab\">
                                    ";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . $context["g"])), "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 38
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </ul>
                <hr/>

            </div>
        </div>
        <div class=\"col-md-9 height-auto bdr-l\">
            <div class=\"tab-content\">
                ";
        // line 46
        echo twig_include($this->env, $context, "@MauticLead/Company/form_fields.html.twig", ["form" =>         // line 47
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "groups" =>         // line 48
(isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 48, $this->source); })()), "fields" =>         // line 49
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 49, $this->source); })())]);
        // line 50
        echo "
            </div>
        </div>
    </div>
";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Company/form_standalone.html.twig";
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
        return array (  165 => 54,  159 => 50,  157 => 49,  156 => 48,  155 => 47,  154 => 46,  145 => 39,  131 => 38,  124 => 34,  120 => 33,  113 => 32,  110 => 31,  93 => 30,  85 => 25,  81 => 24,  74 => 21,  70 => 20,  65 => 16,  62 => 14,  60 => 13,  56 => 12,  49 => 10,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Company/form_standalone.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Company\\form_standalone.html.twig");
    }
}
