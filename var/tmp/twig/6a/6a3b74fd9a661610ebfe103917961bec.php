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

/* @MauticFocus/Builder/parent.less.twig */
class __TwigTemplate_6912fa4d3b68e89e646cd687c7c7a141 extends Template
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
        ob_start(function () { return ''; });
        // line 2
        echo twig_include($this->env, $context, "@MauticFocus/Builder/Bar/parent.less.twig", array(), false);
        // line 3
        echo twig_include($this->env, $context, "@MauticFocus/Builder/Modal/parent.less.twig", array(), false);
        // line 4
        echo twig_include($this->env, $context, "@MauticFocus/Builder/Notification/parent.less.twig", array(), false);
        // line 5
        echo twig_include($this->env, $context, "@MauticFocus/Builder/Page/parent.less.twig", array(), false);
        $context["less"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["css"] = $this->extensions['MauticPlugin\MauticFocusBundle\Twig\Extension\FocusBundleExtension']->compileLess((isset($context["less"]) || array_key_exists("less", $context) ? $context["less"] : (function () { throw new RuntimeError('Variable "less" does not exist.', 8, $this->source); })()));
        // line 10
        if ((twig_test_empty((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 10, $this->source); })())) && ("dev" === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "environment", [], "any", false, false, false, 10)))) {
            // line 11
            $context["css"] = $this->extensions['MauticPlugin\MauticFocusBundle\Twig\Extension\FocusBundleExtension']->minifyCss((isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new RuntimeError('Variable "css" does not exist.', 11, $this->source); })()));
        }
        // line 14
        echo (isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new RuntimeError('Variable "css" does not exist.', 14, $this->source); })());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFocus/Builder/parent.less.twig";
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
        return array (  55 => 14,  52 => 11,  50 => 10,  48 => 8,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFocus/Builder/parent.less.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Builder\\parent.less.twig");
    }
}
