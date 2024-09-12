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

/* @MauticCrm/Integration/dynamics.html.twig */
class __TwigTemplate_66da0a36b3fcf9b939d9224c2ba4b8cc extends Template
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
        // line 1
        echo "<p class=\"alert alert-info\" style=\"margin:15px 0 0\">
    <i class=\"ri-external-link-line\"></i>
    <a class=\"alert-link\" href=\"https://mautic.org/docs/en/plugins/dynamics_crm.html\" target=\"_blank\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.dynamics.doc_link"), "html", null, true);
        echo "</a>
</p>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCrm/Integration/dynamics.html.twig";
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
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCrm/Integration/dynamics.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticCrmBundle\\Resources\\views\\Integration\\dynamics.html.twig");
    }
}
