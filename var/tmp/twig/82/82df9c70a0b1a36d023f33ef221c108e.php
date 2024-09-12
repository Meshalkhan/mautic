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

/* @MauticForm/Field/checkboxgrp.html.twig */
class __TwigTemplate_815518c1cdf0db35933eb979edab8066 extends Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 1) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 1, $this->source); })()), "defaultValue", [], "any", false, false, false, 1)))) {
            // line 2
            echo "
";
            // line 11
            echo twig_replace_filter(twig_include($this->env, $context, [(((array_key_exists("theme", $context)) ? (_twig_default_filter((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 11, $this->source); })()), "")) : ("")) . "hidden.html.twig"), "@MauticForm/Field/hidden.html.twig"], ["field" =>             // line 12
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 12, $this->source); })()), "fields" => ((            // line 13
array_key_exists("fields", $context)) ? (_twig_default_filter((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 13, $this->source); })()), [])) : ([])), "inForm" => ((            // line 14
array_key_exists("inForm", $context)) ? (_twig_default_filter((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 14, $this->source); })()), false)) : (false)), "id" =>             // line 15
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })()), "formId" => ((            // line 16
array_key_exists("formId", $context)) ? (_twig_default_filter((isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 16, $this->source); })()), 0)) : (0)), "type" => "checkbox", "formName" => ((            // line 18
array_key_exists("formName", $context)) ? (_twig_default_filter((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 18, $this->source); })()), "")) : ("")), "mappedFields" => ((            // line 19
array_key_exists("mappedFields", $context)) ? (_twig_default_filter((isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 19, $this->source); })()), [])) : ([]))]), ["<input" => (("<input value=\"" . twig_get_attribute($this->env, $this->source,             // line 21
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 21, $this->source); })()), "defaultValue", [], "any", false, false, false, 21)) . "\"")]);
        }
        // line 32
        echo twig_include($this->env, $context, [(((array_key_exists("theme", $context)) ? (_twig_default_filter((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 32, $this->source); })()), "")) : ("")) . "group.html.twig"), "@MauticForm/Field/group.html.twig"], ["field" =>         // line 33
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 33, $this->source); })()), "inForm" => ((        // line 34
array_key_exists("inForm", $context)) ? (_twig_default_filter((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 34, $this->source); })()), false)) : (false)), "id" =>         // line 35
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 35, $this->source); })()), "formId" => ((        // line 36
array_key_exists("formId", $context)) ? (_twig_default_filter((isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 36, $this->source); })()), 0)) : (0)), "type" => "checkbox", "formName" => ((        // line 38
array_key_exists("formName", $context)) ? (_twig_default_filter((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 38, $this->source); })()), "")) : ("")), "mappedFields" => ((        // line 39
array_key_exists("mappedFields", $context)) ? (_twig_default_filter((isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 39, $this->source); })()), [])) : ([])), "fields" => ((        // line 40
array_key_exists("fields", $context)) ? (_twig_default_filter((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 40, $this->source); })()), null)) : (null))]);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Field/checkboxgrp.html.twig";
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
        return array (  60 => 40,  59 => 39,  58 => 38,  57 => 36,  56 => 35,  55 => 34,  54 => 33,  53 => 32,  50 => 21,  49 => 19,  48 => 18,  47 => 16,  46 => 15,  45 => 14,  44 => 13,  43 => 12,  42 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Field/checkboxgrp.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Field\\checkboxgrp.html.twig");
    }
}
