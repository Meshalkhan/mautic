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

/* @MauticCore/Helper/builder_buttons.html.twig */
class __TwigTemplate_86fb876bcc047c1eb38dded6ce3d3c4b extends Template
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
        // line 5
        echo "<div class=\"row\">
    <div class=\"col-xs-12\">
        <button type=\"button\" class=\"btn btn-primary btn-apply-builder\">
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.apply"), "html", null, true);
        echo "
        </button>
        <button type=\"button\" class=\"btn btn-primary btn-close-builder\" onclick=\"";
        // line 10
        echo (isset($context["onclick"]) || array_key_exists("onclick", $context) ? $context["onclick"] : (function () { throw new RuntimeError('Variable "onclick" does not exist.', 10, $this->source); })());
        echo "\">
            ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close.builder"), "html", null, true);
        echo "
        </button>
    </div>
    ";
        // line 24
        echo "</div>
<div class=\"row\">
    <div class=\"col-xs-12 mt-15\">
        <div id=\"builder-errors\" class=\"alert alert-danger\" role=\"alert\" style=\"display: none;\"></div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/builder_buttons.html.twig";
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
        return array (  57 => 24,  51 => 11,  47 => 10,  42 => 8,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/builder_buttons.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\builder_buttons.html.twig");
    }
}
