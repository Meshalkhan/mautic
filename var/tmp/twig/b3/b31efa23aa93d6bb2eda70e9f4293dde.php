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

/* @MauticCore/Exception/base.html.twig */
class __TwigTemplate_f190cceadcc93a21f393f21f5a15aff0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'headerTitle' => [$this, 'block_headerTitle'],
            'pageTitle' => [$this, 'block_pageTitle'],
            '_content' => [$this, 'block__content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 32
        return $this->loadTemplate((isset($context["baseTemplate"]) || array_key_exists("baseTemplate", $context) ? $context["baseTemplate"] : (function () { throw new RuntimeError('Variable "baseTemplate" does not exist.', 32, $this->source); })()), "@MauticCore/Exception/base.html.twig", 32);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        $context["message"] = ((array_key_exists("message", $context)) ? (_twig_default_filter((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 16, $this->source); })()), "mautic.core.error.generic")) : ("mautic.core.error.generic"));
        // line 17
        $context["previousExceptions"] = [];
        // line 18
        $context["exceptionMessage"] = twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 18, $this->source); })()), "message", [], "any", false, false, false, 18);
        // line 19
        if ((array_key_exists("exceptionMessage", $context) &&  !twig_test_empty((isset($context["exceptionMessage"]) || array_key_exists("exceptionMessage", $context) ? $context["exceptionMessage"] : (function () { throw new RuntimeError('Variable "exceptionMessage" does not exist.', 19, $this->source); })())))) {
            // line 20
            $context["exceptionMessage"] = (" - " . twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 20, $this->source); })()), "message", [], "any", false, false, false, 20));
        }
        // line 22
        $context["previousExceptions"] = twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 22, $this->source); })()), "previous", [], "any", false, false, false, 22);
        // line 24
        $context["isInline"] = (($context["inline"]) ?? (false));
        // line 25
        $context["isAjax"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 25), "isxmlhttprequest", [], "any", true, true, false, 25) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 25), "isxmlhttprequest", [], "any", false, false, false, 25)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 25), "isxmlhttprequest", [], "any", false, false, false, 25)) : (false));
        // line 26
        $context["src"] = ((array_key_exists("src", $context)) ? (_twig_default_filter((isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 26, $this->source); })()), $this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("wave"))) : ($this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("wave")));
        // line 28
        $context["headerTitle"] = ((array_key_exists("headerTitle", $context)) ? (_twig_default_filter((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 28, $this->source); })()), "")) : (""));
        // line 29
        $context["pageTitle"] = ((array_key_exists("pageTitle", $context)) ? (_twig_default_filter((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 29, $this->source); })()), "Mautic")) : ("Mautic"));
        // line 31
        if (((isset($context["isAjax"]) || array_key_exists("isAjax", $context) ? $context["isAjax"] : (function () { throw new RuntimeError('Variable "isAjax" does not exist.', 31, $this->source); })()) == false)) {
            // line 34
            $context["headerTitle"] = ((((isset($context["isInline"]) || array_key_exists("isInline", $context) ? $context["isInline"] : (function () { throw new RuntimeError('Variable "isInline" does not exist.', 34, $this->source); })()) == false)) ? ((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 34, $this->source); })()) . " ") . (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 34, $this->source); })()))) : ((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 34, $this->source); })())));
            // line 35
            $context["pageTitle"] = ((((isset($context["isInline"]) || array_key_exists("isInline", $context) ? $context["isInline"] : (function () { throw new RuntimeError('Variable "isInline" does not exist.', 35, $this->source); })()) == false)) ? ((isset($context["exceptionMessage"]) || array_key_exists("exceptionMessage", $context) ? $context["exceptionMessage"] : (function () { throw new RuntimeError('Variable "exceptionMessage" does not exist.', 35, $this->source); })())) : ((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 35, $this->source); })())));
        }
        // line 32
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 38, $this->source); })()), "html", null, true);
    }

    // line 39
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 39, $this->source); })()), "html", null, true);
    }

    // line 41
    public function block__content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "
    <div class=\"pa-20 mautibot-error";
        // line 43
        if ((isset($context["isInline"]) || array_key_exists("isInline", $context) ? $context["isInline"] : (function () { throw new RuntimeError('Variable "isInline" does not exist.', 43, $this->source); })())) {
            echo " inline";
        }
        echo "\">

        <div class=\"row\">
            ";
        // line 46
        if ((isset($context["isInline"]) || array_key_exists("isInline", $context) ? $context["isInline"] : (function () { throw new RuntimeError('Variable "isInline" does not exist.', 46, $this->source); })())) {
            // line 47
            echo "            <div class=\"mautibot-content col-xs-12\">
                <h3><i class=\"ri-alert-line fa-fw text-danger\"></i><strong>";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 48, $this->source); })()), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["exceptionMessage"]) || array_key_exists("exceptionMessage", $context) ? $context["exceptionMessage"] : (function () { throw new RuntimeError('Variable "exceptionMessage" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "</h3>
            </div>
            ";
        } else {
            // line 51
            echo "            <div class=\"mautibot-image col-xs-4 col-md-3\">
                <img class=\"img-responsive mautibot\" src=\"";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "\" />
            </div>
            <div class=\"mautibot-content col-xs-8 col-md-9\">
                <blockquote class=\"np break-word\">
                    <h2><i class=\"fa fa-quote-left\"></i> <strong>";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 56, $this->source); })()), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["exceptionMessage"]) || array_key_exists("exceptionMessage", $context) ? $context["exceptionMessage"] : (function () { throw new RuntimeError('Variable "exceptionMessage" does not exist.', 56, $this->source); })()), "html", null, true);
            echo " <i class=\"fa fa-quote-right\"></i></h2>
                    <footer class=\"text-right\">Mautibot</footer>
                </blockquote>
                <div class=\"pull-right\">
                    <a class=\"text-muted\" href=\"http://mau.tc/report-issue\" target=\"_new\">";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.report_issue"), "html", null, true);
            echo "</a>
                </div>
            </div>
            ";
        }
        // line 64
        echo "        </div>

        ";
        // line 66
        if ((isset($context["isInline"]) || array_key_exists("isInline", $context) ? $context["isInline"] : (function () { throw new RuntimeError('Variable "isInline" does not exist.', 66, $this->source); })())) {
            // line 67
            echo "        <div class=\"slimscroll\" style=\"max-height: 200px;\">
        ";
        } else {
            // line 69
            echo "        <div>
        ";
        }
        // line 71
        echo "
            <div class=\"row mt-20\">
                <div class=\"col-sm-12\">
                    <h5 class=\"ml-lg text-danger\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 74, $this->source); })()), "class", [], "any", false, false, false, 74), "html", null, true);
        echo "</h5>
                    <div class=\"well well-sm ma-md\">
                        ";
        // line 76
        echo twig_include($this->env, $context, "@MauticCore/Exception/traces.html.twig", ["traces" => twig_get_attribute($this->env, $this->source,         // line 77
(isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 77, $this->source); })()), "trace", [], "any", false, false, false, 77)]);
        // line 78
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 83
        if (((isset($context["previousExceptions"]) || array_key_exists("previousExceptions", $context) ? $context["previousExceptions"] : (function () { throw new RuntimeError('Variable "previousExceptions" does not exist.', 83, $this->source); })()) && (twig_length_filter($this->env, (isset($context["previousExceptions"]) || array_key_exists("previousExceptions", $context) ? $context["previousExceptions"] : (function () { throw new RuntimeError('Variable "previousExceptions" does not exist.', 83, $this->source); })())) > 0))) {
            // line 84
            echo "            <div class=\"row mt-20\">
                <div class=\"col-sm-12\">
                    <h5 class=\"ml-lg\">";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.error.previousexceptions"), "html", null, true);
            echo "</h5>
                    <div class=\"panel-group\" id=\"previous\" role=\"tablist\" aria-multiselectable=\"true\">
                    ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["previousExceptions"]) || array_key_exists("previousExceptions", $context) ? $context["previousExceptions"] : (function () { throw new RuntimeError('Variable "previousExceptions" does not exist.', 88, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["e"]) {
                // line 89
                echo "                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\" role=\"tab\" id=\"previous_heading_";
                // line 90
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                                <h4 class=\"panel-title pa-sm\">
                                    <a data-toggle=\"collapse\" data-parent=\"#previous\" href=\"#previous_body_";
                // line 92
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                        ";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "message", [], "any", false, false, false, 93), "html", null, true);
                echo "
                                    </a>
                                </h4>
                            </div>
                            <div id=\"previous_body_";
                // line 97
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                                <div class=\"panel-body\">
                                    <div class=\"pa-sm\">
                                        ";
                // line 100
                echo twig_include($this->env, $context, "@MauticCore/Exception/traces.html.twig", ["traces" => twig_get_attribute($this->env, $this->source,                 // line 101
$context["e"], "trace", [], "any", false, false, false, 101)]);
                // line 102
                echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                    </div>
                </div>
            ";
        }
        // line 111
        echo "            </div>
            
        
        </div>
    </div>
    <div class=\"clearfix\"></div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Exception/base.html.twig";
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
        return array (  262 => 111,  257 => 108,  238 => 102,  236 => 101,  235 => 100,  229 => 97,  222 => 93,  218 => 92,  213 => 90,  210 => 89,  193 => 88,  188 => 86,  184 => 84,  182 => 83,  175 => 78,  173 => 77,  172 => 76,  167 => 74,  162 => 71,  158 => 69,  154 => 67,  152 => 66,  148 => 64,  141 => 60,  131 => 56,  124 => 52,  121 => 51,  112 => 48,  109 => 47,  107 => 46,  99 => 43,  96 => 42,  92 => 41,  85 => 39,  78 => 38,  74 => 32,  71 => 35,  69 => 34,  67 => 31,  65 => 29,  63 => 28,  61 => 26,  59 => 25,  57 => 24,  55 => 22,  52 => 20,  50 => 19,  48 => 18,  46 => 17,  44 => 16,  37 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Exception/base.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Exception\\base.html.twig");
    }
}
