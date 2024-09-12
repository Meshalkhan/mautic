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

/* @MauticForm/Field/captcha.html.twig */
class __TwigTemplate_5d8e0ed195adef611994ae9adc3c5176 extends Template
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
        $context["required"] = true;
        // line 2
        $context["type"] = "text";
        // line 3
        echo "
";
        // line 4
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 4), "captcha", [], "any", true, true, false, 4) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 4, $this->source); })()), "properties", [], "any", false, false, false, 4), "captcha", [], "any", false, false, false, 4)))) {
            // line 5
            echo "    ";
            $context["required"] = false;
            // line 6
            echo "    ";
            if ((( !array_key_exists("inForm", $context) || twig_test_empty((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 6, $this->source); })()))) || (false == (isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 6, $this->source); })())))) {
                // line 7
                echo "        ";
                // line 8
                echo "        ";
                $context["field"] = twig_array_merge((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 8, $this->source); })()), ["containerAttributes" => (twig_get_attribute($this->env, $this->source,                 // line 9
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 9, $this->source); })()), "containerAttributes", [], "any", false, false, false, 9) . " style=\"display:none;\"")]);
                // line 11
                echo "    ";
            } else {
                // line 12
                echo "        ";
                // line 13
                echo "        ";
                $context["type"] = "hidden";
                // line 14
                echo "    ";
            }
        }
        // line 16
        echo "
";
        // line 25
        echo twig_include($this->env, $context, [(((array_key_exists("theme", $context)) ? (_twig_default_filter((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 25, $this->source); })()), "")) : ("")) . "text.html.twig"), "@MauticForm/Field/text.html.twig"], ["field" =>         // line 26
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 26, $this->source); })()), "fields" => ((        // line 27
array_key_exists("fields", $context)) ? (_twig_default_filter((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 27, $this->source); })()), [])) : ([])), "inForm" => ((        // line 28
array_key_exists("inForm", $context)) ? (_twig_default_filter((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 28, $this->source); })()), false)) : (false)), "type" =>         // line 29
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 29, $this->source); })()), "id" =>         // line 30
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 30, $this->source); })()), "required" =>         // line 31
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 31, $this->source); })()), "formId" => ((        // line 32
array_key_exists("formId", $context)) ? (_twig_default_filter((isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 32, $this->source); })()), 0)) : (0)), "formName" => ((        // line 33
array_key_exists("formName", $context)) ? (_twig_default_filter((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 33, $this->source); })()), "")) : (""))]);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Field/captcha.html.twig";
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
        return array (  81 => 33,  80 => 32,  79 => 31,  78 => 30,  77 => 29,  76 => 28,  75 => 27,  74 => 26,  73 => 25,  70 => 16,  66 => 14,  63 => 13,  61 => 12,  58 => 11,  56 => 9,  54 => 8,  52 => 7,  49 => 6,  46 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Field/captcha.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Field\\captcha.html.twig");
    }
}
