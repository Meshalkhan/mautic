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

/* @MauticWebhook/Helper/labelcode.html.twig */
class __TwigTemplate_5242634c64e06b7114007d4e434fb76b extends Template
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
        if ((((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 1, $this->source); })()) >= 200) && ((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 1, $this->source); })()) < 300))) {
            // line 2
            echo "    <span class=\"label label-success\">
        ";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "
    </span>
";
        } elseif (((        // line 5
(isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 5, $this->source); })()) >= 300) && ((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 5, $this->source); })()) < 500))) {
            // line 6
            echo "    <span class=\"label label-warning\">
        ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "
    </span>
";
        } elseif ((        // line 9
(isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 9, $this->source); })()) >= 500)) {
            // line 10
            echo "    <span class=\"label label-warning\">
        ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "
    </span>
";
        } else {
            // line 14
            echo "    <span class=\"label label-default\">
        ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "
    </span>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticWebhook/Helper/labelcode.html.twig";
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
        return array (  71 => 15,  68 => 14,  62 => 11,  59 => 10,  57 => 9,  52 => 7,  49 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticWebhook/Helper/labelcode.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\WebhookBundle\\Resources\\views\\Helper\\labelcode.html.twig");
    }
}
