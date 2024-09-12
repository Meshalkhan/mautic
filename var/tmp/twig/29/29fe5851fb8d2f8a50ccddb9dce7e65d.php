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

/* @MauticInstall/Install/doctrine.html.twig */
class __TwigTemplate_2b7da9fc4428c86169fbafe8f3bddb63 extends Template
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
        $this->parent = $this->loadTemplate("@MauticInstall/Install/content.html.twig", "@MauticInstall/Install/doctrine.html.twig", 9);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.heading.database.configuration"), "html", null, true);
        echo "
    </h2>
</div>
<div class=\"panel-body\">
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
    <div class=\"alert alert-mautic\">
        <h6>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.database.introtext"), "html", null, true);
        echo "</h6>
    </div>

    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "driver", [], "any", false, false, false, 24), 'row');
        echo "

    ";
        // line 26
        $context["driver"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "driver", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "data", [], "any", false, false, false, 26);
        // line 27
        echo "
    <div id=\"DatabaseSettings\"";
        // line 28
        if (("pdo_sqlite" == (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 28, $this->source); })()))) {
            echo " class=\"hide\"";
        }
        echo ">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "host", [], "any", false, false, false, 31), 'row');
        echo "
            </div>
            <div class=\"col-sm-6\">
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "port", [], "any", false, false, false, 34), 'row');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-6\">
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), 'row');
        echo "
            </div>
            <div class=\"col-sm-6\">
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "table_prefix", [], "any", false, false, false, 43), 'row');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-6\">
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), 'row');
        echo "
            </div>
            <div class=\"col-sm-6\">
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "password", [], "any", false, false, false, 52), 'row');
        echo "
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "backup_tables", [], "any", false, false, false, 59), 'row');
        echo "
        </div>
        ";
        // line 61
        $context["hide"] = (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "backup_tables", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "data", [], "any", false, false, false, 61)) ? (" hide") : (""));
        // line 62
        echo "        <div class=\"col-sm-6";
        echo twig_escape_filter($this->env, (isset($context["hide"]) || array_key_exists("hide", $context) ? $context["hide"] : (function () { throw new RuntimeError('Variable "hide" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "\" id=\"backupPrefix\">
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "backup_prefix", [], "any", false, false, false, 63), 'row');
        echo "
        </div>
    </div>

    <div class=\"row mt-20\">
        <div class=\"col-sm-9\">
            <div class=\"hide\" id=\"waitMessage\">
                <div class=\"alert alert-info\">
                    <strong>";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.database.installing"), "html", null, true);
        echo "</strong>
                </div>
            </div>";
        // line 74
        echo twig_include($this->env, $context, "@MauticInstall/Install/navbar.html.twig", ["step" => (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 74, $this->source); })()), "count" => (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 74, $this->source); })()), "completedSteps" => (isset($context["completedSteps"]) || array_key_exists("completedSteps", $context) ? $context["completedSteps"] : (function () { throw new RuntimeError('Variable "completedSteps" does not exist.', 74, $this->source); })())]);
        // line 75
        echo "</div>
        <div class=\"col-sm-3\">
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "buttons", [], "any", false, false, false, 77), 'row');
        echo "
        </div>
    </div>
    ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form_end');
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticInstall/Install/doctrine.html.twig";
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
        return array (  180 => 80,  174 => 77,  170 => 75,  168 => 74,  163 => 71,  152 => 63,  147 => 62,  145 => 61,  140 => 59,  130 => 52,  124 => 49,  115 => 43,  109 => 40,  100 => 34,  94 => 31,  86 => 28,  83 => 27,  81 => 26,  76 => 24,  70 => 21,  65 => 19,  58 => 15,  54 => 13,  50 => 12,  45 => 9,  42 => 8,  35 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticInstall/Install/doctrine.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\InstallBundle\\Resources\\views\\Install\\doctrine.html.twig");
    }
}
