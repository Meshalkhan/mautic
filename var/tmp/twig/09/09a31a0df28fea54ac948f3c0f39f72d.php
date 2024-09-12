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

/* @MauticForm/Public/videoembed.html.twig */
class __TwigTemplate_e00473e8563c7b32fa47c1a5582a32e7 extends Template
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
        echo "<div id=\"mautic-video-form-embed\">
    <form method=\"post\" action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_form_postresults", ["formId" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\">
        ";
        // line 4
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "fields", [], "any", false, false, false, 4));
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
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 5
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["f"], "isCustom", [], "any", false, false, false, 5) && twig_get_attribute($this->env, $this->source, ($context["fieldSettings"] ?? null), twig_get_attribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 5), [], "array", true, true, false, 5))) {
                // line 6
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["f"], "isCustom", [], "any", false, false, false, 6)) {
                    // line 7
                    echo "                    ";
                    $context["params"] = twig_get_attribute($this->env, $this->source, (isset($context["fieldSettings"]) || array_key_exists("fieldSettings", $context) ? $context["fieldSettings"] : (function () { throw new RuntimeError('Variable "fieldSettings" does not exist.', 7, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 7), [], "array", false, false, false, 7);
                    // line 8
                    echo "                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "setCustomParameters", [(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 8, $this->source); })())], "method", false, false, false, 8), "html", null, true);
                    echo "
                    ";
                    // line 9
                    $context["template"] = twig_get_attribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 9, $this->source); })()), "template", [], "any", false, false, false, 9);
                    // line 10
                    echo "                ";
                } else {
                    // line 11
                    echo "                    ";
                    $context["template"] = (("@MauticForm/Field/" . twig_get_attribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 11)) . ".html.twig");
                    // line 12
                    echo "                ";
                }
                // line 13
                echo "                ";
                echo twig_include($this->env, $context, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 13, $this->source); })()), ["field" => twig_get_attribute($this->env, $this->source, $context["f"], "convertToArray", [], "method", false, false, false, 13), "id" => twig_get_attribute($this->env, $this->source, $context["f"], "alias", [], "any", false, false, false, 13), "formName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "form", [], "any", false, false, false, 13), "generateFormName", [], "method", false, false, false, 13)]);
                echo "
            ";
            }
            // line 15
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </form>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Public/videoembed.html.twig";
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
        return array (  107 => 16,  93 => 15,  87 => 13,  84 => 12,  81 => 11,  78 => 10,  76 => 9,  71 => 8,  68 => 7,  65 => 6,  62 => 5,  44 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Public/videoembed.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Public\\videoembed.html.twig");
    }
}
