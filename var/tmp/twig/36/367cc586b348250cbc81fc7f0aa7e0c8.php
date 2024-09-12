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

/* @MauticConfig/FormTheme/dsn_row.html.twig */
class __TwigTemplate_0ab21636771144c1297c236aa9a74e73 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'dsn_row' => [$this, 'block_dsn_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('dsn_row', $context, $blocks);
    }

    public function block_dsn_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"config-dsn-container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "scheme", [], "any", false, false, false, 5), 'row');
        echo "
            </div>
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "host", [], "any", false, false, false, 8), 'row', ["attr" => ["preaddon_text" => "://"]]);
        echo "
            </div>
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "port", [], "any", false, false, false, 11), 'row', ["attr" => ["preaddon_text" => ":"]]);
        echo "
            </div>
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "path", [], "any", false, false, false, 14), 'row', ["attr" => ["preaddon_text" => "/"]]);
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), 'row');
        echo "
                    </div>
                    <div class=\"col-lg-6\">
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "password", [], "any", false, false, false, 24), 'row', ["attr" => ["preaddon_text" => ":"]]);
        echo "
                    </div>
                </div>
                <div class=\"config-dsn-test-container\">
                    <div class=\"form-inline\">
                        <div class=\"form-group\">
                            ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "test_button", [], "any", true, true, false, 30)) {
            // line 31
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "test_button", [], "any", false, false, false, 31), 'widget');
            echo "
                            ";
        }
        // line 33
        echo "                        </div>
                        <div class=\"form-group\">
                            <div class=\"form-control-static ml-10\">
                                <span class=\"text-muted\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.dsn.using_current_dsn"), "html", null, true);
        echo ":</span>
                                <code>";
        // line 37
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 37), "currentDsn", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 37), "currentDsn", [], "any", false, false, false, 37), "n/a")) : ("n/a")), "html", null, true);
        echo "</code>
                            </div>
                        </div>
                    </div>
                    ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "test_button", [], "any", true, true, false, 41)) {
            // line 42
            echo "                        <div class=\"help-block\">
                            <span class=\"fa fa-spinner fa-spin hide pull-left\"></span>
                            <div class=\"status-msg\"></div>
                            <div class=\"save-config-msg hide text-danger\">";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.dsn.save_to_test"), "html", null, true);
            echo "</div>
                        </div>
                    ";
        }
        // line 48
        echo "                </div>
            </div>
            <div class=\"col-md-6\">
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "options", [], "any", false, false, false, 51), 'row');
        echo "
            </div>
        </div>
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'rest');
        echo "
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticConfig/FormTheme/dsn_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  141 => 54,  135 => 51,  130 => 48,  124 => 45,  119 => 42,  117 => 41,  110 => 37,  106 => 36,  101 => 33,  95 => 31,  93 => 30,  84 => 24,  78 => 21,  68 => 14,  62 => 11,  56 => 8,  50 => 5,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticConfig/FormTheme/dsn_row.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ConfigBundle\\Resources\\views\\FormTheme\\dsn_row.html.twig");
    }
}
