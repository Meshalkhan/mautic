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

/* @MauticCore/Helper/modal.html.twig */
class __TwigTemplate_f9710ed35c100f05f202faac5d0982d2 extends Template
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
        $context["containerClass"] = ((array_key_exists("containerClass", $context)) ? ((" " . (isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 1, $this->source); })()))) : (""));
        // line 2
        $context["containerAttr"] = ((array_key_exists("containerAttr", $context)) ? ((" " . (isset($context["containerAttr"]) || array_key_exists("containerAttr", $context) ? $context["containerAttr"] : (function () { throw new RuntimeError('Variable "containerAttr" does not exist.', 2, $this->source); })()))) : (""));
        // line 3
        $context["size"] = ((array_key_exists("size", $context)) ? ((" modal-" . (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 3, $this->source); })()))) : (""));
        // line 4
        $context["class"] = (((array_key_exists("class", $context) &&  !twig_test_empty((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 4, $this->source); })())))) ? ((" " . (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 4, $this->source); })()))) : (""));
        // line 5
        $context["body"] = ((array_key_exists("body", $context)) ? ((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 5, $this->source); })())) : (""));
        // line 6
        $context["footer"] = ((array_key_exists("footer", $context)) ? ((isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 6, $this->source); })())) : (""));
        // line 7
        $context["hidePlaceholder"] = (((array_key_exists("body", $context) &&  !twig_test_empty((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 7, $this->source); })())))) ? (" hide") : (""));
        // line 8
        $context["header"] = ((array_key_exists("header", $context)) ? ((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 8, $this->source); })())) : (""));
        // line 9
        $context["padding"] = ((array_key_exists("padding", $context)) ? ((isset($context["padding"]) || array_key_exists("padding", $context) ? $context["padding"] : (function () { throw new RuntimeError('Variable "padding" does not exist.', 9, $this->source); })())) : (""));
        // line 10
        $context["footerButtonClass"] = ((array_key_exists("footerButtonClass", $context)) ? ((isset($context["footerButtonClass"]) || array_key_exists("footerButtonClass", $context) ? $context["footerButtonClass"] : (function () { throw new RuntimeError('Variable "footerButtonClass" does not exist.', 10, $this->source); })())) : ("modal-form-buttons"));
        // line 11
        $context["dismissable"] = ((array_key_exists("dismissable", $context)) ? ((isset($context["dismissable"]) || array_key_exists("dismissable", $context) ? $context["dismissable"] : (function () { throw new RuntimeError('Variable "dismissable" does not exist.', 11, $this->source); })())) : (true));
        // line 12
        echo "
<div class=\"modal fade";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\" data-backdrop=\"static\" role=\"dialog\" aria-labelledby=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "-label\" aria-hidden=\"true\"";
        echo twig_escape_filter($this->env, (isset($context["containerAttr"]) || array_key_exists("containerAttr", $context) ? $context["containerAttr"] : (function () { throw new RuntimeError('Variable "containerAttr" does not exist.', 13, $this->source); })()), "html", null, true);
        echo ">
    <div class=\"modal-dialog";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\">
        <div class=\"modal-content";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\">
            ";
        // line 16
        if ( !((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 16, $this->source); })()) === false)) {
            // line 17
            echo "            <div class=\"modal-header\">
                ";
            // line 18
            if ((isset($context["dismissable"]) || array_key_exists("dismissable", $context) ? $context["dismissable"] : (function () { throw new RuntimeError('Variable "dismissable" does not exist.', 18, $this->source); })())) {
                // line 19
                echo "                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span aria-hidden=\"true\">&times;</span></button>
                ";
            }
            // line 21
            echo "
                <h4 class=\"modal-title\" id=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "-label\">
                    ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "
                </h4>

                <!-- start: loading bar -->
                <div class=\"modal-loading-bar\">
                    ";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.loading", [], "messages");
            // line 29
            echo "                </div>
                <!--/ end: loading bar -->

            </div>
            ";
        }
        // line 34
        echo "            <div class=\"modal-body ";
        echo twig_escape_filter($this->env, (isset($context["padding"]) || array_key_exists("padding", $context) ? $context["padding"] : (function () { throw new RuntimeError('Variable "padding" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\">
                <div class=\"loading-placeholder";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["hidePlaceholder"]) || array_key_exists("hidePlaceholder", $context) ? $context["hidePlaceholder"] : (function () { throw new RuntimeError('Variable "hidePlaceholder" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\">
                    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.loading", [], "messages");
        // line 37
        echo "                </div>
                <div class=\"modal-body-content\">
                    ";
        // line 39
        echo (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 39, $this->source); })());
        echo "
                </div>
            </div>
            ";
        // line 42
        if (( !twig_test_empty((isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 42, $this->source); })())) || (array_key_exists("footerButtons", $context) &&  !twig_test_empty((isset($context["footerButtons"]) || array_key_exists("footerButtons", $context) ? $context["footerButtons"] : (function () { throw new RuntimeError('Variable "footerButtons" does not exist.', 42, $this->source); })()))))) {
            // line 43
            echo "            <div class=\"modal-footer\">
                ";
            // line 44
            if ((array_key_exists("footerButtons", $context) &&  !twig_test_empty((isset($context["footerButtons"]) || array_key_exists("footerButtons", $context) ? $context["footerButtons"] : (function () { throw new RuntimeError('Variable "footerButtons" does not exist.', 44, $this->source); })())))) {
                // line 45
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["footerButtonClass"]) || array_key_exists("footerButtonClass", $context) ? $context["footerButtonClass"] : (function () { throw new RuntimeError('Variable "footerButtonClass" does not exist.', 45, $this->source); })()), "html", null, true);
                echo "\">
                    ";
                // line 46
                if (is_iterable((isset($context["footerButtons"]) || array_key_exists("footerButtons", $context) ? $context["footerButtons"] : (function () { throw new RuntimeError('Variable "footerButtons" does not exist.', 46, $this->source); })()))) {
                    // line 47
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["footerButtons"]) || array_key_exists("footerButtons", $context) ? $context["footerButtons"] : (function () { throw new RuntimeError('Variable "footerButtons" does not exist.', 47, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                        // line 48
                        echo "                        <button type=\"button\"
                                class=\"btn ";
                        // line 49
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["button"], "class", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["button"], "class", [], "any", false, false, false, 49), "btn-default")) : ("btn-default")), "html", null, true);
                        echo "\"
                                ";
                        // line 50
                        if ((twig_get_attribute($this->env, $this->source, $context["button"], "attr", [], "any", true, true, false, 50) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["button"], "attr", [], "any", false, false, false, 50)))) {
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "attr", [], "any", false, false, false, 50), "html", null, true);
                            echo " ";
                        }
                        echo ">
                            ";
                        // line 51
                        if ((twig_get_attribute($this->env, $this->source, $context["button"], "textIcon", [], "any", true, true, false, 51) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["button"], "textIcon", [], "any", false, false, false, 51)))) {
                            echo "<i class=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "textIcon", [], "any", false, false, false, 51), "html", null, true);
                            echo "\"></i>";
                        }
                        // line 52
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "label", [], "any", false, false, false, 52), "html", null, true);
                        echo "
                        </button>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "                    ";
                }
                // line 56
                echo "                </div>
                ";
            } else {
                // line 58
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 58, $this->source); })()), "html", null, true);
                echo "
                ";
            }
            // line 60
            echo "            </div>
            ";
        }
        // line 62
        echo "        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/modal.html.twig";
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
        return array (  203 => 62,  199 => 60,  193 => 58,  189 => 56,  186 => 55,  176 => 52,  170 => 51,  162 => 50,  158 => 49,  155 => 48,  150 => 47,  148 => 46,  143 => 45,  141 => 44,  138 => 43,  136 => 42,  130 => 39,  126 => 37,  124 => 36,  120 => 35,  115 => 34,  108 => 29,  106 => 28,  98 => 23,  94 => 22,  91 => 21,  87 => 19,  85 => 18,  82 => 17,  80 => 16,  76 => 15,  72 => 14,  62 => 13,  59 => 12,  57 => 11,  55 => 10,  53 => 9,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/modal.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\modal.html.twig");
    }
}
