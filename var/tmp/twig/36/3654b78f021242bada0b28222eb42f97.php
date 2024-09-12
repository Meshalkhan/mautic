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

/* @MauticInstall/Install/final.html.twig */
class __TwigTemplate_d553901f612f6020128f5cd20d450465 extends Template
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
        $this->parent = $this->loadTemplate("@MauticInstall/Install/content.html.twig", "@MauticInstall/Install/final.html.twig", 9);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.heading.final"), "html", null, true);
        echo "
    </h2>
</div>
<div class=\"panel-body text-center\">
    <div><i class=\"ri-check-line fa-5x mb-20 text-success\"></i></div>
    <h4 class=\"mb-3\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.heading.finished"), "html", null, true);
        echo "</h4>
    <h5>";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.heading.configured");
        echo "</h5>
    ";
        // line 22
        if ((isset($context["welcome_url"]) || array_key_exists("welcome_url", $context) ? $context["welcome_url"] : (function () { throw new RuntimeError('Variable "welcome_url" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) || array_key_exists("welcome_url", $context) ? $context["welcome_url"] : (function () { throw new RuntimeError('Variable "welcome_url" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\" role=\"button\" class=\"btn btn-primary mt-20\">
            ";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.sentence.proceed.to.mautic"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 27
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticInstall/Install/final.html.twig";
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
        return array (  87 => 27,  81 => 24,  76 => 23,  74 => 22,  70 => 21,  66 => 20,  58 => 15,  54 => 13,  50 => 12,  45 => 9,  42 => 8,  35 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticInstall/Install/final.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\InstallBundle\\Resources\\views\\Install\\final.html.twig");
    }
}
