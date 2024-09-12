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

/* @MauticCore/Error/404.html.twig */
class __TwigTemplate_820fc5b5eb2253b70208e7d255ac50c7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MauticCore/Error/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["src"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("openMouth");
        // line 4
        $context["message"] = "mautic.core.error.404";
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Error/base.html.twig", "@MauticCore/Error/404.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Error/404.html.twig";
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
        return array (  45 => 1,  43 => 4,  41 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Error/404.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Error\\404.html.twig");
    }
}
