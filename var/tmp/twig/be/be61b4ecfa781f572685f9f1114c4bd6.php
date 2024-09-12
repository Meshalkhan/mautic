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

/* @MauticLead/Lead/_list_header_default.html.twig */
class __TwigTemplate_11cbb46df5eb6090cda28e21d10cbabf extends Template
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
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead", "orderBy" => ("l." .         // line 3
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 3, $this->source); })())), "text" =>         // line 4
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 4, $this->source); })()), "class" => ((("col-lead-" .         // line 5
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 5, $this->source); })())) . " ") . ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 5, $this->source); })()), "")) : ("")))]);
        // line 6
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Lead/_list_header_default.html.twig";
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
        return array (  42 => 6,  40 => 5,  39 => 4,  38 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Lead/_list_header_default.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\_list_header_default.html.twig");
    }
}
