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

/* @MauticCore/Helper/action_button_helper.html.twig */
class __TwigTemplate_c74bc1dea050d7ec960a9dec346a569b extends Template
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
        if (array_key_exists("customButtons", $context)) {
            // line 2
            echo "    ";
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButtons((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 2, $this->source); })()));
            echo "
";
        }
        // line 5
        $context["nameGetter"] = ((array_key_exists("nameGetter", $context)) ? (_twig_default_filter((isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 5, $this->source); })()), "getName")) : ("getName"));
        // line 7
        $context["pull"] = ((array_key_exists("pull", $context)) ? (_twig_default_filter((isset($context["pull"]) || array_key_exists("pull", $context) ? $context["pull"] : (function () { throw new RuntimeError('Variable "pull" does not exist.', 7, $this->source); })()), "left")) : ("left"));
        // line 9
        $context["query"] = ((array_key_exists("query", $context)) ? ((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 9, $this->source); })())) : ([]));
        // line 10
        if (array_key_exists("tmpl", $context)) {
            // line 11
            echo "    ";
            $context["query"] = twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 11, $this->source); })()), ["tmpl" => (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 11, $this->source); })())]);
        }
        // line 14
        $context["editMode"] = ((array_key_exists("editMode", $context)) ? ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 14, $this->source); })())) : ("ajax"));
        // line 15
        $context["editAttr"] = ((array_key_exists("editAttr", $context)) ? ((isset($context["editAttr"]) || array_key_exists("editAttr", $context) ? $context["editAttr"] : (function () { throw new RuntimeError('Variable "editAttr" does not exist.', 15, $this->source); })())) : ([]));
        // line 16
        $context["templateButtons"] = ((array_key_exists("templateButtons", $context)) ? ((isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 16, $this->source); })())) : ([]));
        // line 18
        $context["langVar"] = ((array_key_exists("langVar", $context)) ? ((isset($context["langVar"]) || array_key_exists("langVar", $context) ? $context["langVar"] : (function () { throw new RuntimeError('Variable "langVar" does not exist.', 18, $this->source); })())) : (((array_key_exists("routeBase", $context)) ? ((isset($context["routeBase"]) || array_key_exists("routeBase", $context) ? $context["routeBase"] : (function () { throw new RuntimeError('Variable "routeBase" does not exist.', 18, $this->source); })())) : (""))));
        // line 19
        $context["translationBase"] = ((array_key_exists("translationBase", $context)) ? ((isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 19, $this->source); })())) : (("mautic." . (isset($context["langVar"]) || array_key_exists("langVar", $context) ? $context["langVar"] : (function () { throw new RuntimeError('Variable "langVar" does not exist.', 19, $this->source); })()))));
        // line 21
        if ((array_key_exists("route", $context) &&  !array_key_exists("actionRoute", $context))) {
            // line 22
            echo "    ";
            $context["actionRoute"] = (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 22, $this->source); })());
        } elseif ( !        // line 23
array_key_exists("actionRoute", $context)) {
            // line 24
            echo "    ";
            $context["actionRoute"] = "";
            // line 25
            echo "    ";
            if (array_key_exists("routeBase", $context)) {
                // line 26
                echo "        ";
                $context["actionRoute"] = (("mautic_" . twig_replace_filter((isset($context["routeBase"]) || array_key_exists("routeBase", $context) ? $context["routeBase"] : (function () { throw new RuntimeError('Variable "routeBase" does not exist.', 26, $this->source); })()), ["mautic_" => ""])) . "_action");
                // line 27
                echo "    ";
            }
        }
        // line 29
        $context["indexRoute"] = ((array_key_exists("routeBase", $context)) ? ((("mautic_" . twig_replace_filter((isset($context["routeBase"]) || array_key_exists("routeBase", $context) ? $context["routeBase"] : (function () { throw new RuntimeError('Variable "routeBase" does not exist.', 29, $this->source); })()), ["mautic_" => ""])) . "_index")) : ((isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 29, $this->source); })())));
        // line 30
        $context["routeVars"] = ((array_key_exists("routeVars", $context)) ? ((isset($context["routeVars"]) || array_key_exists("routeVars", $context) ? $context["routeVars"] : (function () { throw new RuntimeError('Variable "routeVars" does not exist.', 30, $this->source); })())) : ([]));
        // line 32
        $context["extraHtml"] = ((array_key_exists("extraHtml", $context)) ? ((isset($context["extraHtml"]) || array_key_exists("extraHtml", $context) ? $context["extraHtml"] : (function () { throw new RuntimeError('Variable "extraHtml" does not exist.', 32, $this->source); })())) : (""));
        // line 34
        $context["wrapOpeningTag"] = ((array_key_exists("wrapOpeningTag", $context)) ? ((isset($context["wrapOpeningTag"]) || array_key_exists("wrapOpeningTag", $context) ? $context["wrapOpeningTag"] : (function () { throw new RuntimeError('Variable "wrapOpeningTag" does not exist.', 34, $this->source); })())) : (""));
        // line 35
        $context["wrapClosingTag"] = ((array_key_exists("wrapClosingTag", $context)) ? ((isset($context["wrapClosingTag"]) || array_key_exists("wrapClosingTag", $context) ? $context["wrapClosingTag"] : (function () { throw new RuntimeError('Variable "wrapClosingTag" does not exist.', 35, $this->source); })())) : (""));
        // line 36
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->setWrappingTags((isset($context["wrapOpeningTag"]) || array_key_exists("wrapOpeningTag", $context) ? $context["wrapOpeningTag"] : (function () { throw new RuntimeError('Variable "wrapOpeningTag" does not exist.', 36, $this->source); })()), (isset($context["wrapClosingTag"]) || array_key_exists("wrapClosingTag", $context) ? $context["wrapClosingTag"] : (function () { throw new RuntimeError('Variable "wrapClosingTag" does not exist.', 36, $this->source); })()));
        echo "
";
        // line 38
        $context["menuLink"] = ((array_key_exists("menuLink", $context)) ? (((" data-menu-link=\"" . (isset($context["menuLink"]) || array_key_exists("menuLink", $context) ? $context["menuLink"] : (function () { throw new RuntimeError('Variable "menuLink" does not exist.', 38, $this->source); })())) . "\"")) : (""));
        // line 39
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->setMenuLink((isset($context["menuLink"]) || array_key_exists("menuLink", $context) ? $context["menuLink"] : (function () { throw new RuntimeError('Variable "menuLink" does not exist.', 39, $this->source); })()));
        echo "
";
        // line 41
        if (array_key_exists("groupType", $context)) {
            // line 42
            echo "    ";
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->setGroupType((isset($context["groupType"]) || array_key_exists("groupType", $context) ? $context["groupType"] : (function () { throw new RuntimeError('Variable "groupType" does not exist.', 42, $this->source); })()));
            echo "
";
        }
        // line 44
        $context["buttonCount"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->getButtonCount();
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\StorageExtension']->save($context, "action_button_helper"), "html", null, true);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/action_button_helper.html.twig";
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
        return array (  117 => 46,  115 => 44,  109 => 42,  107 => 41,  103 => 39,  101 => 38,  97 => 36,  95 => 35,  93 => 34,  91 => 32,  89 => 30,  87 => 29,  83 => 27,  80 => 26,  77 => 25,  74 => 24,  72 => 23,  69 => 22,  67 => 21,  65 => 19,  63 => 18,  61 => 16,  59 => 15,  57 => 14,  53 => 11,  51 => 10,  49 => 9,  47 => 7,  45 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/action_button_helper.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\action_button_helper.html.twig");
    }
}
