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

/* @MauticCore/Translation/index.html.twig */
class __TwigTemplate_c294ca3da66b11d01c8e8832e9b0f25c extends Template
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
        // line 9
        ob_start(function () { return ''; });
        // line 10
        $context["nameGetter"] = ((array_key_exists("nameGetter", $context)) ? (_twig_default_filter((isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 10, $this->source); })()), "getName")) : ("getName"));
        // line 11
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 11, $this->source); })()), "children", [], "any", false, false, false, 11)) > 0) || (twig_get_attribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 11, $this->source); })()), "parent", [], "any", false, false, false, 11) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 11, $this->source); })()), "parent", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11) === twig_get_attribute($this->env, $this->source, (isset($context["activeEntity"]) || array_key_exists("activeEntity", $context) ? $context["activeEntity"] : (function () { throw new RuntimeError('Variable "activeEntity" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11))))) {
            // line 12
            echo "<!-- start: related translations list -->
  <ul class=\"list-group\">
      ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 14, $this->source); })()), "parent", [], "any", false, false, false, 14)) {
                // line 15
                echo "          ";
                echo twig_include($this->env, $context, "@MauticCore/Translation/row.html.twig", ["translation" => twig_get_attribute($this->env, $this->source,                 // line 16
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 16, $this->source); })()), "parent", [], "any", false, false, false, 16), "translations" =>                 // line 17
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 17, $this->source); })()), "actionRoute" =>                 // line 18
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 18, $this->source); })()), "activeEntity" =>                 // line 19
(isset($context["activeEntity"]) || array_key_exists("activeEntity", $context) ? $context["activeEntity"] : (function () { throw new RuntimeError('Variable "activeEntity" does not exist.', 19, $this->source); })()), "model" =>                 // line 20
(isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 20, $this->source); })()), "nameGetter" =>                 // line 21
(isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 21, $this->source); })())]);
                // line 22
                echo "
      ";
            }
            // line 24
            echo "      ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 24, $this->source); })()), "children", [], "any", false, false, false, 24)) > 0)) {
                // line 25
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 25, $this->source); })()), "children", [], "any", false, false, false, 25));
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
                foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
                    // line 26
                    echo "              ";
                    echo twig_include($this->env, $context, "@MauticCore/Translation/row.html.twig", ["translation" =>                     // line 27
$context["translation"], "translations" =>                     // line 28
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 28, $this->source); })()), "actionRoute" =>                     // line 29
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 29, $this->source); })()), "activeEntity" =>                     // line 30
(isset($context["activeEntity"]) || array_key_exists("activeEntity", $context) ? $context["activeEntity"] : (function () { throw new RuntimeError('Variable "activeEntity" does not exist.', 30, $this->source); })()), "model" =>                     // line 31
(isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 31, $this->source); })()), "nameGetter" =>                     // line 32
(isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 32, $this->source); })())]);
                    // line 33
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "      ";
            }
            // line 36
            echo "  </ul>
  <!--/ end: related translations list -->";
        }
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo twig_spaceless($___internal_parse_1_);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Translation/index.html.twig";
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
        return array (  115 => 9,  110 => 36,  107 => 35,  92 => 33,  90 => 32,  89 => 31,  88 => 30,  87 => 29,  86 => 28,  85 => 27,  83 => 26,  65 => 25,  62 => 24,  58 => 22,  56 => 21,  55 => 20,  54 => 19,  53 => 18,  52 => 17,  51 => 16,  49 => 15,  47 => 14,  43 => 12,  41 => 11,  39 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Translation/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Translation\\index.html.twig");
    }
}
