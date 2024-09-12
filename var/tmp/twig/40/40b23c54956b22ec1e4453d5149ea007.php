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

/* @MauticFocus/Builder/content.html.twig */
class __TwigTemplate_0559db5f19381e5abfdc46f1665b63ca extends Template
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
        // line 11
        $context["templateBase"] = (("@MauticFocus/Builder/" . twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 11, $this->source); })()), "style", [], "any", false, false, false, 11))) . "/index.html.twig");
        // line 12
        $context["preview"] = ((array_key_exists("preview", $context)) ? (_twig_default_filter((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 12, $this->source); })()), false)) : (false));
        // line 13
        $context["clickUrl"] = ((array_key_exists("clickUrl", $context)) ? (_twig_default_filter((isset($context["clickUrl"]) || array_key_exists("clickUrl", $context) ? $context["clickUrl"] : (function () { throw new RuntimeError('Variable "clickUrl" does not exist.', 13, $this->source); })()), "#")) : ("#"));
        // line 14
        $context["props"] = twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 14, $this->source); })()), "properties", [], "any", false, false, false, 14);
        // line 15
        echo "<div>
    <style scoped>
        .mautic-focus * {
            all: revert;
            box-sizing: border-box;
        }
        .mautic-focus {
            font-family: ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 22, $this->source); })()), "content", [], "any", false, false, false, 22), "font", [], "any", false, false, false, 22), "html", null, true);
        echo ";
            color: #";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 23, $this->source); })()), "colors", [], "any", false, false, false, 23), "text", [], "any", false, false, false, 23), "html", null, true);
        echo ";
        }

        ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "colors", [], "any", true, true, false, 26) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 26, $this->source); })()), "colors", [], "any", false, false, false, 26)))) {
            // line 27
            echo "          .mf-content a.mf-link, .mf-content .mauticform-button, .mf-content .mauticform-pagebreak {
              background-color: #";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 28, $this->source); })()), "colors", [], "any", false, false, false, 28), "button", [], "any", false, false, false, 28), "html", null, true);
            echo ";
              color: #";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 29, $this->source); })()), "colors", [], "any", false, false, false, 29), "button_text", [], "any", false, false, false, 29), "html", null, true);
            echo ";
          }
          .mauticform-input:focus, select:focus {
              border: 1px solid #";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 32, $this->source); })()), "colors", [], "any", false, false, false, 32), "button", [], "any", false, false, false, 32), "html", null, true);
            echo ";
          }
        ";
        }
        // line 35
        echo "
        ";
        // line 36
        if ((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "            ";
            echo twig_include($this->env, $context, "@MauticFocus/Builder/style.less.twig", ["preview" => true, "focus" =>             // line 39
(isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 39, $this->source); })())], false);
            // line 40
            echo "
        ";
        }
        // line 42
        echo "    </style>
    ";
        // line 43
        echo twig_include($this->env, $context, (isset($context["templateBase"]) || array_key_exists("templateBase", $context) ? $context["templateBase"] : (function () { throw new RuntimeError('Variable "templateBase" does not exist.', 43, $this->source); })()), ["focus" =>         // line 44
(isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 44, $this->source); })()), "preview" =>         // line 45
(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 45, $this->source); })()), "clickUrl" =>         // line 46
(isset($context["clickUrl"]) || array_key_exists("clickUrl", $context) ? $context["clickUrl"] : (function () { throw new RuntimeError('Variable "clickUrl" does not exist.', 46, $this->source); })()), "htmlMode" =>         // line 47
(isset($context["htmlMode"]) || array_key_exists("htmlMode", $context) ? $context["htmlMode"] : (function () { throw new RuntimeError('Variable "htmlMode" does not exist.', 47, $this->source); })())], false);
        // line 48
        echo "
    ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["focus"] ?? null), "properties", [], "any", false, true, false, 49), "content", [], "any", false, true, false, 49), "css", [], "any", true, true, false, 49) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 49, $this->source); })()), "properties", [], "any", false, false, false, 49), "content", [], "any", false, false, false, 49), "css", [], "any", false, false, false, 49)))) {
            // line 50
            echo "    <style scoped>
        ";
            // line 51
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 51, $this->source); })()), "properties", [], "any", false, false, false, 51), "content", [], "any", false, false, false, 51), "css", [], "any", false, false, false, 51);
            echo "
    </style>
    ";
        }
        // line 54
        echo "
    ";
        // line 56
        echo "    ";
        if ( !(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 56, $this->source); })())) {
            // line 57
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_focus_pixel", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)], true), "html", null, true);
            echo "\" alt=\"Mautic Focus\" style=\"display: none;\"/>
    ";
        }
        // line 59
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFocus/Builder/content.html.twig";
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
        return array (  133 => 59,  127 => 57,  124 => 56,  121 => 54,  115 => 51,  112 => 50,  110 => 49,  107 => 48,  105 => 47,  104 => 46,  103 => 45,  102 => 44,  101 => 43,  98 => 42,  94 => 40,  92 => 39,  90 => 37,  88 => 36,  85 => 35,  79 => 32,  73 => 29,  69 => 28,  66 => 27,  64 => 26,  58 => 23,  54 => 22,  45 => 15,  43 => 14,  41 => 13,  39 => 12,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFocus/Builder/content.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Builder\\content.html.twig");
    }
}
