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

/* @MauticCore/Offline/offline.html.twig */
class __TwigTemplate_269ac3b8e10f4621383fc2bcd4c9edbe extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Site is offline</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })()), "assetBase", [], "any", false, false, false, 10), "html", null, true);
        echo "/images/favicon.ico\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "mediaBase", [], "any", false, false, false, 11), "html", null, true);
        echo "/css/libraries.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "mediaBase", [], "any", false, false, false, 12), "html", null, true);
        echo "/css/app.css\"/>
</head>
<body>
<div class=\"container\">
    <div class=\"row\">
        ";
        // line 17
        if ((array_key_exists("error", $context) &&  !twig_test_empty((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })())))) {
            // line 18
            echo "        <div class=\"";
            echo ((((twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "isPrevious", [], "any", true, true, false, 18) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "isPrevious", [], "any", false, false, false, 18))) || (array_key_exists("inline", $context) &&  !twig_test_empty((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 18, $this->source); })()))))) ? ("col-sm-12") : ("col-sm-offset-2 col-sm-8"));
            echo "\">
            <div class=\"pa-sm\" style=\" word-wrap: break-word;";
            // line 19
            if ((( !twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "isPrevious", [], "any", true, true, false, 19) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "isPrevious", [], "any", false, false, false, 19))) && ( !array_key_exists("inline", $context) || twig_test_empty((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 19, $this->source); })()))))) {
                echo " margin-top:100px;";
            }
            echo "\">
            ";
            // line 20
            if ((array_key_exists("inline", $context) &&  !twig_test_empty((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 20, $this->source); })())))) {
                // line 21
                echo "                <h3><i class=\"ri-alert-line fa-fw text-danger pull-left\"></i>";
                echo twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "message", [], "any", false, false, false, 21);
                echo "</h3>
                <h6 class=\"text-muted\">";
                // line 22
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })()), "file", [], "any", false, false, false, 22) . ":") . twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })()), "line", [], "any", false, false, false, 22)), "html", null, true);
                echo "</h6>
            ";
            } else {
                // line 23
                echo "        
                <div class=\"text-center\">
                    <i class=\"ri-alert-line fa-5x\"></i>
                </div>        
                <div class=\"alert alert-danger\">
                    <div>";
                // line 28
                echo twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 28, $this->source); })()), "message", [], "any", false, false, false, 28);
                echo "</div>
                    <div class=\"text-muted small text-right mt-10\">
                        ";
                // line 30
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })()), "file", [], "any", false, false, false, 30) . ":") . twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })()), "line", [], "any", false, false, false, 30)), "html", null, true);
                echo "
                    </div>
                </div>
            ";
            }
            // line 34
            echo "
            ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "trace", [], "any", true, true, false, 35) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 35, $this->source); })()), "trace", [], "any", false, false, false, 35)))) {
                // line 36
                echo "            <div class=\"well well-sm\" tabindex=\"-1\" style=\"";
                echo ((( !array_key_exists("inline", $context) || twig_test_empty((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 36, $this->source); })())))) ? ("") : ("max-height: 100px; overflow: scroll;"));
                echo "\" onclick=\"this.focus();\">
                ";
                // line 37
                if (((twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "trace", [], "any", true, true, false, 37) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 37, $this->source); })()), "trace", [], "any", false, false, false, 37))) && is_iterable(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 37, $this->source); })()), "trace", [], "any", false, false, false, 37)))) {
                    // line 38
                    echo "                    ";
                    $this->loadTemplate("traces.html.twig", "@MauticCore/Offline/offline.html.twig", 38)->display(twig_array_merge($context, ["traces" => twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })()), "trace", [], "any", false, false, false, 38)]));
                    // line 39
                    echo "                ";
                } else {
                    // line 40
                    echo "                    <pre>";
                    echo twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 40, $this->source); })()), "trace", [], "any", false, false, false, 40);
                    echo "</pre>;
                ";
                }
                // line 42
                echo "                <div class=\"clearfix\"></div>
            ";
            }
            // line 44
            echo "        <div id=\"previous\"></div>
    </div>
    ";
        } elseif ((        // line 46
array_key_exists("inline", $context) &&  !twig_test_empty((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 46, $this->source); })())))) {
            // line 47
            echo "    <div class=\"col-xs-12\">
        <h3><i class=\"ri-alert-line fa-fw text-danger\"></i>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 48, $this->source); })()), "message", [], "any", false, false, false, 48), "html", null, true);
            echo "</h3>
        ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "submessage", [], "any", true, true, false, 49) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 49, $this->source); })()), "submessage", [], "any", false, false, false, 49)))) {
                // line 50
                echo "        <h4 class=\"mt-15\">";
                echo twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 50, $this->source); })()), "submessage", [], "any", false, false, false, 50);
                echo "</h4>
        ";
            }
            // line 52
            echo "    </div>
    ";
        } else {
            // line 54
            echo "    <div class=\"col-sm-offset-3 col-sm-6\">
        <div class=\"pa-lg text-center\" style=\"margin-top:100px;\">
            <i class=\"ri-alert-line fa-5x\"></i>
            <h2>";
            // line 57
            echo twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 57, $this->source); })()), "message", [], "any", false, false, false, 57);
            echo "</h2>
            ";
            // line 58
            if ((twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "submessage", [], "any", true, true, false, 58) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 58, $this->source); })()), "submessage", [], "any", false, false, false, 58)))) {
                // line 59
                echo "                <h4 class=\"mt-15\">";
                echo twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 59, $this->source); })()), "submessage", [], "any", false, false, false, 59);
                echo "</h4>
            ";
            }
            // line 61
            echo "        </div>
    ";
        }
        // line 63
        echo "    </div>
</div>
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Offline/offline.html.twig";
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
        return array (  182 => 63,  178 => 61,  172 => 59,  170 => 58,  166 => 57,  161 => 54,  157 => 52,  151 => 50,  149 => 49,  145 => 48,  142 => 47,  140 => 46,  136 => 44,  132 => 42,  126 => 40,  123 => 39,  120 => 38,  118 => 37,  113 => 36,  111 => 35,  108 => 34,  101 => 30,  96 => 28,  89 => 23,  84 => 22,  79 => 21,  77 => 20,  71 => 19,  66 => 18,  64 => 17,  56 => 12,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Offline/offline.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Offline\\offline.html.twig");
    }
}
