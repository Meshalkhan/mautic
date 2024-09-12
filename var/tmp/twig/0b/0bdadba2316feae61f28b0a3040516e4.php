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

/* @MauticInstall/Install/misc.html.twig */
class __TwigTemplate_287eeff2db8f20bee1e2091575aa97e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 9
        return "@MauticInstall/Install/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        if (("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 8, $this->source); })()))) {
        }
        // line 9
        $this->parent = $this->loadTemplate("@MauticInstall/Install/content.html.twig", "@MauticInstall/Install/misc.html.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "<div class=\"panel-heading\">
    <h2 class=\"panel-title\">
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.heading.misc.configuration"), "html", null, true);
        echo "
    </h2>
</div>
<div class=\"panel-body\">
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
    <h4>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.misc.header.url"), "html", null, true);
        echo "</h4>
    <h6>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.misc.subheader.url"), "html", null, true);
        echo "</h6>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "site_url", [], "any", false, false, false, 24), 'row');
        echo "
        </div>
    </div>
    <h4>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.misc.header.paths"), "html", null, true);
        echo "</h4>
    <h6>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.misc.subheader.paths"), "html", null, true);
        echo "</h6>
    <div class=\"row\">
        <div class=\"col-sm-6\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "log_path", [], "any", false, false, false, 31), 'row');
        echo "
        </div>
        <div class=\"col-sm-6\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "cache_path", [], "any", false, false, false, 34), 'row');
        echo "
        </div>
    </div>
    ";
        // line 37
        if (twig_constant("AppKernel::EXTRA_VERSION")) {
            // line 38
            echo "    <h4>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.misc.header.stability"), "html", null, true);
            echo "</h4>
    <h6>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.misc.subheader.stability"), "html", null, true);
            echo "</h6>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "update_stability", [], "any", false, false, false, 42), 'row');
            echo "
        </div>
    </div>
    ";
        }
        // line 46
        echo "    <div class=\"row mt-20\">
        <div class=\"col-sm-9\">
            <div class=\"hide\" id=\"waitMessage\">
                <div class=\"alert alert-info\">
                    <strong>";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.finalizing"), "html", null, true);
        echo "</strong>
                </div>
            </div>";
        // line 53
        echo twig_include($this->env, $context, "@MauticInstall/Install/navbar.html.twig", ["step" => (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 53, $this->source); })()), "count" => (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 53, $this->source); })()), "completedSteps" => (isset($context["completedSteps"]) || array_key_exists("completedSteps", $context) ? $context["completedSteps"] : (function () { throw new RuntimeError('Variable "completedSteps" does not exist.', 53, $this->source); })())]);
        // line 54
        echo "</div>
        <div class=\"col-sm-3\">
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "buttons", [], "any", false, false, false, 56), 'row');
        echo "
        </div>
    </div>
    ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticInstall/Install/misc.html.twig";
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
        return array (  150 => 59,  144 => 56,  140 => 54,  138 => 53,  133 => 50,  127 => 46,  120 => 42,  114 => 39,  109 => 38,  107 => 37,  101 => 34,  95 => 31,  89 => 28,  85 => 27,  79 => 24,  73 => 21,  69 => 20,  65 => 19,  58 => 15,  54 => 13,  50 => 12,  45 => 9,  42 => 8,  35 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticInstall/Install/misc.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\InstallBundle\\Resources\\views\\Install\\misc.html.twig");
    }
}
