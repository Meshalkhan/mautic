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

/* @MauticCore/Exception/500.html.twig */
class __TwigTemplate_c2416de64215c8551497faeb575d3afb extends Template
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
        return "@MauticCore/Exception/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["src"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("openMouth");
        // line 4
        $context["message"] = "mautic.core.error.500";
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Exception/base.html.twig", "@MauticCore/Exception/500.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Exception/500.html.twig";
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
        return new Source("", "@MauticCore/Exception/500.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Exception\\500.html.twig");
    }
}
