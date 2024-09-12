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

/* @MauticCore/Update/update.html.twig */
class __TwigTemplate_ee2843d5e23a0aec741c2b9f75c9fe7b extends Template
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
        // line 4
        echo "<div class=\"col-sm-offset-2 col-sm-8\">
    <div id=\"main-update-panel\" class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h2 class=\"panel-title\">
                ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.in.progress"), "html", null, true);
        echo "
            </h2>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-hover addon-list\" id=\"updateTable\">
                <thead>
                <tr>
                    <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.heading.step"), "html", null, true);
        echo "</th>
                    <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.heading.status"), "html", null, true);
        echo "</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.step.running.checks"), "html", null, true);
        echo "</td>
                    <td id=\"update-step-running-checks-status\"><span class=\"hidden-xs\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.step.in.progress"), "html", null, true);
        echo "</span><i class=\"pull-right fa fa-spinner fa-spin\"></i></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Update/update.html.twig";
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
        return array (  69 => 22,  65 => 21,  57 => 16,  53 => 15,  43 => 8,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Update/update.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Update\\update.html.twig");
    }
}
