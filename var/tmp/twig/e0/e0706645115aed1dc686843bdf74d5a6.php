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

/* @MauticCore/Helper/page_actions.html.twig */
class __TwigTemplate_6028531d748122f41b48f57d0eaa6682 extends Template
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
        $context["item"] = ((array_key_exists("item", $context)) ? ((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })())) : (null));
        // line 2
        $context["tooltip"] = ((array_key_exists("tooltip", $context)) ? ((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 2, $this->source); })())) : (null));
        // line 3
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(twig_constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_PAGE_ACTIONS"), twig_constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::TYPE_BUTTON_DROPDOWN"),         // line 6
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()));
        // line 7
        echo twig_include($this->env, $context, "@MauticCore/Helper/action_button_helper.html.twig");
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\StorageExtension']->restore($context, "action_button_helper"), "html", null, true);
        echo "
";
        // line 11
        if ( !twig_test_empty((isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "    ";
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButtonsFromTemplate(            // line 13
(isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 13, $this->source); })()),             // line 14
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 14, $this->source); })()),             // line 15
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 15, $this->source); })()),             // line 16
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 16, $this->source); })()),             // line 17
(isset($context["langVar"]) || array_key_exists("langVar", $context) ? $context["langVar"] : (function () { throw new RuntimeError('Variable "langVar" does not exist.', 17, $this->source); })()),             // line 18
(isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 18, $this->source); })()),             // line 19
(isset($context["editAttr"]) || array_key_exists("editAttr", $context) ? $context["editAttr"] : (function () { throw new RuntimeError('Variable "editAttr" does not exist.', 19, $this->source); })()),             // line 20
(isset($context["routeVars"]) || array_key_exists("routeVars", $context) ? $context["routeVars"] : (function () { throw new RuntimeError('Variable "routeVars" does not exist.', 20, $this->source); })()),             // line 21
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()),             // line 22
(isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 22, $this->source); })()));
            // line 23
            echo "
";
        }
        // line 25
        echo "
<div class=\"std-toolbar btn-group\">

    ";
        // line 28
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render(("<button type=\"button\" class=\"btn btn-default btn-nospin dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"ri-arrow-down-s-line\"></i></button>
" . "<ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">"), "</ul>");
        // line 34
        echo "
</div>

";
        // line 37
        echo (isset($context["extraHtml"]) || array_key_exists("extraHtml", $context) ? $context["extraHtml"] : (function () { throw new RuntimeError('Variable "extraHtml" does not exist.', 37, $this->source); })());
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/page_actions.html.twig";
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
        return array (  82 => 37,  77 => 34,  74 => 28,  69 => 25,  65 => 23,  63 => 22,  62 => 21,  61 => 20,  60 => 19,  59 => 18,  58 => 17,  57 => 16,  56 => 15,  55 => 14,  54 => 13,  52 => 12,  50 => 11,  46 => 10,  44 => 7,  42 => 6,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/page_actions.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\page_actions.html.twig");
    }
}
