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

/* @MauticCore/Helper/list_toolbar.html.twig */
class __TwigTemplate_beea71d6376951f01ac65513fdc2d472 extends Template
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
        $context["wrap"] = true;
        // line 2
        echo "
";
        // line 3
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(twig_constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_TOOLBAR_ACTIONS"), twig_constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::TYPE_GROUP"));
        // line 8
        echo twig_include($this->env, $context, "@MauticCore/Helper/action_button_helper.html.twig");
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\StorageExtension']->restore($context, "action_button_helper"), "html", null, true);
        echo "

<div class=\"panel-body\">
    <div class=\"box-layout\">
        <div class=\"col-xs-6 col-lg-8 va-m form-inline\">
            ";
        // line 15
        if (array_key_exists("searchValue", $context)) {
            // line 16
            echo twig_include($this->env, $context, "@MauticCore/Helper/search.html.twig", ["searchId" => ((            // line 17
array_key_exists("searchId", $context)) ? (_twig_default_filter((isset($context["searchId"]) || array_key_exists("searchId", $context) ? $context["searchId"] : (function () { throw new RuntimeError('Variable "searchId" does not exist.', 17, $this->source); })()), null)) : (null)), "searchValue" =>             // line 18
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 18, $this->source); })()), "action" => ((            // line 19
array_key_exists("action", $context)) ? (_twig_default_filter((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 19, $this->source); })()), "")) : ("")), "searchHelp" => ((            // line 20
array_key_exists("searchHelp", $context)) ? (_twig_default_filter((isset($context["searchHelp"]) || array_key_exists("searchHelp", $context) ? $context["searchHelp"] : (function () { throw new RuntimeError('Variable "searchHelp" does not exist.', 20, $this->source); })()), "")) : ("")), "target" => ((            // line 21
array_key_exists("target", $context)) ? (_twig_default_filter((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 21, $this->source); })()), null)) : (null)), "tmpl" => ((            // line 22
array_key_exists("tmpl", $context)) ? (_twig_default_filter((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 22, $this->source); })()), null)) : (null)), "overlayDisabled" => ((            // line 23
array_key_exists("overlayDisabled", $context)) ? ((isset($context["overlayDisabled"]) || array_key_exists("overlayDisabled", $context) ? $context["overlayDisabled"] : (function () { throw new RuntimeError('Variable "overlayDisabled" does not exist.', 23, $this->source); })())) : (null))]);
        }
        // line 26
        echo "
            ";
        // line 27
        if ((array_key_exists("filters", $context) &&  !twig_test_empty((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 27, $this->source); })())))) {
            // line 28
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_filters.html.twig", ["filters" =>             // line 29
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 29, $this->source); })()), "target" => ((            // line 30
array_key_exists("target", $context)) ? (_twig_default_filter((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 30, $this->source); })()), null)) : (null)), "tmpl" => ((            // line 31
array_key_exists("tmpl", $context)) ? (_twig_default_filter((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 31, $this->source); })()), null)) : (null))]);
        }
        // line 34
        echo "        </div>

        <div class=\"col-xs-6 col-lg-4 va-m text-right\">
            ";
        // line 37
        if ((array_key_exists("buttonHelp", $context) &&  !twig_test_empty((isset($context["buttonHelp"]) || array_key_exists("buttonHelp", $context) ? $context["buttonHelp"] : (function () { throw new RuntimeError('Variable "buttonHelp" does not exist.', 37, $this->source); })())))) {
            // line 38
            echo "                <div class=\"input-group-btn\">
                    <button class=\"btn btn-default btn-nospin\" data-toggle=\"modal\" data-target=\"#";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["searchId"]) || array_key_exists("searchId", $context) ? $context["searchId"] : (function () { throw new RuntimeError('Variable "searchId" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "-search-help\">
                        <i class=\"ri-question-line\"></i>
                    </button>
                </div>
            ";
        }
        // line 44
        echo "            ";
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render();
        echo "
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
        return "@MauticCore/Helper/list_toolbar.html.twig";
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
        return array (  95 => 44,  87 => 39,  84 => 38,  82 => 37,  77 => 34,  74 => 31,  73 => 30,  72 => 29,  71 => 28,  69 => 27,  66 => 26,  63 => 23,  62 => 22,  61 => 21,  60 => 20,  59 => 19,  58 => 18,  57 => 17,  56 => 16,  54 => 15,  46 => 10,  44 => 8,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/list_toolbar.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\list_toolbar.html.twig");
    }
}
