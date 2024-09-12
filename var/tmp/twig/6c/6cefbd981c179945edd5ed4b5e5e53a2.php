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

/* @MauticCore/Helper/map.html.twig */
class __TwigTemplate_e68806c4da7506d85392d4fc20cc10ac extends Template
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
        if (((array_key_exists("optionsEnabled", $context)) ? (_twig_default_filter((isset($context["optionsEnabled"]) || array_key_exists("optionsEnabled", $context) ? $context["optionsEnabled"] : (function () { throw new RuntimeError('Variable "optionsEnabled" does not exist.', 1, $this->source); })()), false)) : (false))) {
            // line 2
            echo "    <div class=\"map-options\">
        ";
            // line 3
            if ((array_key_exists("optionsTitle", $context) &&  !twig_test_empty((isset($context["optionsTitle"]) || array_key_exists("optionsTitle", $context) ? $context["optionsTitle"] : (function () { throw new RuntimeError('Variable "optionsTitle" does not exist.', 3, $this->source); })())))) {
                // line 4
                echo "            <h5 class=\"map-options__title text-white dark-md fw-sb mb-xs\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["optionsTitle"]) || array_key_exists("optionsTitle", $context) ? $context["optionsTitle"] : (function () { throw new RuntimeError('Variable "optionsTitle" does not exist.', 4, $this->source); })())), "html", null, true);
                echo "</h5>
        ";
            }
            // line 6
            echo "        <div class=\"map-options__container btn-group btn-block\" data-toggle=\"buttons\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 7, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 8
                echo "            <label class=\"map-options__item ";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 8)) ? ("active") : (""));
                echo " btn btn-default\"
                   data-map-option=\"true\"
                   data-map-series=\"";
                // line 10
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["option"], "data", [], "any", false, false, false, 10)), "html", null, true);
                echo "\"
                   data-legend-text=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "legendText", [], "any", false, false, false, 11), "html", null, true);
                echo "\"
                   data-stat-unit=\"";
                // line 12
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["option"], "unit", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["option"], "unit", [], "any", false, false, false, 12), "Lead")) : ("Lead")), "html", null, true);
                echo "\"
            >
                <input type=\"radio\"
                       name=\"map-stats\"
                       id=\"read\"
                       autocomplete=\"off\"
                       ";
                // line 18
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 18)) ? ("checked") : (""));
                echo "
                >
                ";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, false, 20)), "html", null, true);
                echo "
            </label>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        </div>
    </div>
";
        }
        // line 26
        echo "<div class=\"vector-map\"
     style=\"height:";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "px\"
     data-legend-enabled=\"";
        // line 28
        echo twig_escape_filter($this->env, ((array_key_exists("legendEnabled", $context)) ? (_twig_default_filter((isset($context["legendEnabled"]) || array_key_exists("legendEnabled", $context) ? $context["legendEnabled"] : (function () { throw new RuntimeError('Variable "legendEnabled" does not exist.', 28, $this->source); })()), false)) : (false)), "html", null, true);
        echo "\"
     data-stat-unit=\"";
        // line 29
        echo twig_escape_filter($this->env, ((array_key_exists("statUnit", $context)) ? (_twig_default_filter((isset($context["statUnit"]) || array_key_exists("statUnit", $context) ? $context["statUnit"] : (function () { throw new RuntimeError('Variable "statUnit" does not exist.', 29, $this->source); })()), "Lead")) : ("Lead")), "html", null, true);
        echo "\"
>
    ";
        // line 31
        echo twig_escape_filter($this->env, json_encode((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })())), "html", null, true);
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/map.html.twig";
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
        return array (  136 => 31,  131 => 29,  127 => 28,  123 => 27,  120 => 26,  115 => 23,  98 => 20,  93 => 18,  84 => 12,  80 => 11,  76 => 10,  70 => 8,  53 => 7,  50 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/map.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\map.html.twig");
    }
}
