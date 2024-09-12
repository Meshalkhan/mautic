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

/* @MauticConfig/Config/form.html.twig */
class __TwigTemplate_13132b8f720511490738052a71e02511 extends Template
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
        // line 18
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 18, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticConfig/Config/form.html.twig", 18);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        if (( !twig_test_empty((isset($context["formThemes"]) || array_key_exists("formThemes", $context) ? $context["formThemes"] : (function () { throw new RuntimeError('Variable "formThemes" does not exist.', 10, $this->source); })())) && is_iterable((isset($context["formThemes"]) || array_key_exists("formThemes", $context) ? $context["formThemes"] : (function () { throw new RuntimeError('Variable "formThemes" does not exist.', 10, $this->source); })())))) {
            // line 11
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), (isset($context["formThemes"]) || array_key_exists("formThemes", $context) ? $context["formThemes"] : (function () { throw new RuntimeError('Variable "formThemes" does not exist.', 11, $this->source); })()), true);
        } elseif (( !twig_test_empty(        // line 12
(isset($context["formThemes"]) || array_key_exists("formThemes", $context) ? $context["formThemes"] : (function () { throw new RuntimeError('Variable "formThemes" does not exist.', 12, $this->source); })())) && $this->env->getTest('string')->getCallable()((isset($context["formThemes"]) || array_key_exists("formThemes", $context) ? $context["formThemes"] : (function () { throw new RuntimeError('Variable "formThemes" does not exist.', 12, $this->source); })())))) {
            // line 13
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), [(isset($context["formThemes"]) || array_key_exists("formThemes", $context) ? $context["formThemes"] : (function () { throw new RuntimeError('Variable "formThemes" does not exist.', 13, $this->source); })())], true);
        }
        // line 16
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 16, $this->source); })()))) ? (true) : (false));
        // line 17
        $context["tmpl"] = "list";
        // line 18
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "config";
    }

    // line 22
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.header.index"), "html", null, true);
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- step container -->
    <div class=\"col-md-3 height-auto\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            ";
        // line 30
        if ( !(isset($context["isWritable"]) || array_key_exists("isWritable", $context) ? $context["isWritable"] : (function () { throw new RuntimeError('Variable "isWritable" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.notwritable"), "html", null, true);
            echo "</div>
            ";
        }
        // line 33
        echo "            <!-- Nav tabs -->
            <ul class=\"list-group list-group-tabs\" role=\"tablist\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "children", [], "any", false, false, false, 35)), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (twig_get_attribute($this->env, $this->source, ($context["formConfigs"] ?? null), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 35, $this->source); })()), [], "array", true, true, false, 35) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 35, $this->source); })()), [], "array", false, false, false, 35), "children", [], "any", false, false, false, 35)) > 0)); }));
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
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 36
            echo "                    <li role=\"presentation\" class=\"list-group-item ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 36)) {
                echo "in active";
            }
            echo "\">
                        ";
            // line 37
            $context["containsErrors"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), $context["key"], [], "array", false, false, false, 37));
            // line 38
            echo "                        <a href=\"#";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" aria-controls=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" role=\"tab\" data-toggle=\"tab\" class=\"steps ";
            if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), $context["key"], [], "array", false, false, false, 38))) {
                echo "text-danger";
            }
            echo "\">
                            ";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.config.tab." . $context["key"])), "html", null, true);
            echo "
                            ";
            // line 40
            if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), $context["key"], [], "array", false, false, false, 40))) {
                // line 41
                echo "                                <i class=\"ri-alert-line\"></i>
                            ";
            }
            // line 43
            echo "                        </a>
                    </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </ul>
        </div>
    </div>

    <!-- container -->
    <div class=\"col-md-9 height-auto bdr-l\">
        ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_start');
        echo "
        <!-- Tab panes -->
        <div class=\"tab-content\">
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "children", [], "any", false, false, false, 55)), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return twig_get_attribute($this->env, $this->source, ($context["formConfigs"] ?? null), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 55, $this->source); })()), [], "array", true, true, false, 55); }));
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
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 56
            echo "                ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), $context["key"], [], "array", false, false, false, 56), "children", [], "any", false, false, false, 56)) > 0)) {
                // line 57
                echo "                  <div role=\"tabpanel\" class=\"tab-pane fade ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 57)) {
                    echo "in active";
                }
                echo " bdr-w-0\" id=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                      <div class=\"pt-md pr-md pl-md pb-md\">
                          ";
                // line 59
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), $context["key"], [], "array", false, false, false, 59), 'widget', ["formConfig" => twig_get_attribute($this->env, $this->source, (isset($context["formConfigs"]) || array_key_exists("formConfigs", $context) ? $context["formConfigs"] : (function () { throw new RuntimeError('Variable "formConfigs" does not exist.', 59, $this->source); })()), $context["key"], [], "array", false, false, false, 59)]);
                echo "
                      </div>
                  </div>
                ";
            } else {
                // line 63
                echo "                  ";
                twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), $context["key"], [], "array", false, false, false, 63), "setRendered", [], "method", false, false, false, 63);
                // line 64
                echo "                ";
            }
            // line 65
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </div>
        ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticConfig/Config/form.html.twig";
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
        return array (  235 => 67,  232 => 66,  218 => 65,  215 => 64,  212 => 63,  205 => 59,  195 => 57,  192 => 56,  175 => 55,  169 => 52,  161 => 46,  145 => 43,  141 => 41,  139 => 40,  135 => 39,  124 => 38,  122 => 37,  115 => 36,  98 => 35,  94 => 33,  88 => 31,  86 => 30,  79 => 25,  75 => 24,  68 => 22,  61 => 20,  57 => 18,  55 => 17,  53 => 16,  50 => 13,  48 => 12,  46 => 11,  44 => 10,  37 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticConfig/Config/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ConfigBundle\\Resources\\views\\Config\\form.html.twig");
    }
}
