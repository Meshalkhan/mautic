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

/* @MauticFocus/Builder/Modal/index.html.twig */
class __TwigTemplate_8ec431826f54d8ee34932e11d68964db extends Template
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
        $context["props"] = twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 1, $this->source); })()), "properties", [], "any", false, false, false, 1);
        // line 2
        $context["style"] = twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 2, $this->source); })()), "style", [], "any", false, false, false, 2);
        // line 3
        $context["placement"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 3, $this->source); })()), [], "array", false, true, false, 3), "placement", [], "any", true, true, false, 3)) ? (twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 3, $this->source); })()), (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 3, $this->source); })()), [], "array", false, false, false, 3), "placement", [], "any", false, false, false, 3), ["_" => "-"])) : (false));
        // line 4
        $context["animate"] = (( !(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 4, $this->source); })()) && twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "animate", [], "any", true, true, false, 4)) && (twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 4, $this->source); })()), "animate", [], "any", false, false, false, 4) == 1));
        // line 5
        echo "<style scoped>
    .mf-";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 6, $this->source); })()), "html", null, true);
        echo " {
        border-color: #";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 7, $this->source); })()), "colors", [], "any", false, false, false, 7), "primary", [], "any", false, false, false, 7), "html", null, true);
        echo ";
    }
</style>
<div class=\"mautic-focus mf-";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        if ((isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 10, $this->source); })())) {
            echo "mf-";
            echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 10, $this->source); })()), "html", null, true);
        }
        echo " ";
        if ((isset($context["animate"]) || array_key_exists("animate", $context) ? $context["animate"] : (function () { throw new RuntimeError('Variable "animate" does not exist.', 10, $this->source); })())) {
            echo "mf-animate";
        }
        echo "\">
    <div class=\"mf-";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "-container\">
        <div class=\"mf-";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "-close\">
            <a href=\"javascript:void(0)\" ";
        // line 13
        if ( !(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 13, $this->source); })())) {
            echo "onclick=\"Mautic.closeFocusModal('";
            echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "')\"";
        }
        echo ">x</a>
        </div>
        <div class=\"mf-content\">
            ";
        // line 16
        if (twig_in_filter((isset($context["htmlMode"]) || array_key_exists("htmlMode", $context) ? $context["htmlMode"] : (function () { throw new RuntimeError('Variable "htmlMode" does not exist.', 16, $this->source); })()), ["editor", "html"])) {
            // line 17
            echo "                ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 17, $this->source); })()), (isset($context["htmlMode"]) || array_key_exists("htmlMode", $context) ? $context["htmlMode"] : (function () { throw new RuntimeError('Variable "htmlMode" does not exist.', 17, $this->source); })()), [], "array", false, false, false, 17);
            echo "
            ";
        } else {
            // line 19
            echo "              <div class=\"mf-headline\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 19, $this->source); })()), "content", [], "array", false, false, false, 19), "headline", [], "array", false, false, false, 19), "html", null, true);
            echo "</div>
              ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "content", [], "array", false, true, false, 20), "tagline", [], "array", true, true, false, 20)) {
                // line 21
                echo "                  <div class=\"mf-tagline\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 21, $this->source); })()), "content", [], "array", false, false, false, 21), "tagline", [], "array", false, false, false, 21), "html", null, true);
                echo "</div>
              ";
            }
            // line 23
            echo "              <div class=\"mf-inner-container\">
                  ";
            // line 24
            if (("form" == twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 24, $this->source); })()), "type", [], "any", false, false, false, 24))) {
                // line 25
                echo "                      {focus_form}
                  ";
            } elseif (("link" == twig_get_attribute($this->env, $this->source,             // line 26
(isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 26, $this->source); })()), "type", [], "any", false, false, false, 26))) {
                // line 27
                echo "                      <a href=\"";
                if ( !(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 27, $this->source); })())) {
                    echo twig_escape_filter($this->env, (isset($context["clickUrl"]) || array_key_exists("clickUrl", $context) ? $context["clickUrl"] : (function () { throw new RuntimeError('Variable "clickUrl" does not exist.', 27, $this->source); })()), "html", null, true);
                } else {
                    echo "#";
                }
                echo "\"
                         class=\"mf-link\"
                         target=\"";
                // line 29
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 29, $this->source); })()), "content", [], "any", false, false, false, 29), "link_new_window", [], "any", false, false, false, 29)) {
                    echo "_new";
                } else {
                    echo "_parent";
                }
                echo "\">
                          ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 30, $this->source); })()), "content", [], "array", false, false, false, 30), "link_text", [], "array", false, false, false, 30), "html", null, true);
                echo "
                      </a>
                  ";
            }
            // line 33
            echo "              </div>
            ";
        }
        // line 35
        echo "        </div>
    </div>
</div>
";
        // line 38
        if (("modal" == (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 38, $this->source); })()))) {
            // line 39
            echo "    <div class=\"mf-move-to-parent mf-";
            echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "-overlay mf-";
            echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "-overlay-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 39, $this->source); })()), "id", [], "array", false, false, false, 39), "html", null, true);
            echo "\"></div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFocus/Builder/Modal/index.html.twig";
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
        return array (  157 => 39,  155 => 38,  150 => 35,  146 => 33,  140 => 30,  132 => 29,  122 => 27,  120 => 26,  117 => 25,  115 => 24,  112 => 23,  106 => 21,  104 => 20,  99 => 19,  93 => 17,  91 => 16,  81 => 13,  77 => 12,  73 => 11,  58 => 10,  52 => 7,  48 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFocus/Builder/Modal/index.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Builder\\Modal\\index.html.twig");
    }
}
