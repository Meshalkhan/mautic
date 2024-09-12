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

/* @MauticInstall/Install/check.html.twig */
class __TwigTemplate_86a1db32035c584ec8c72241cf27882b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@MauticInstall/Install/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        if (("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 10, $this->source); })()))) {
        }
        // line 11
        $this->parent = $this->loadTemplate("@MauticInstall/Install/content.html.twig", "@MauticInstall/Install/check.html.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "<div class=\"panel-heading\">
    <h2 class=\"panel-title\">
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.heading.check.environment"), "html", null, true);
        echo "
    </h2>
</div>
";
        // line 21
        echo "<div class=\"panel-body\">
    ";
        // line 22
        if (twig_length_filter($this->env, (isset($context["majors"]) || array_key_exists("majors", $context) ? $context["majors"] : (function () { throw new RuntimeError('Variable "majors" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "    <div class=\"panel-group\" id=\"minors\">
        <div class=\"panel panel-danger\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\" style=\"font-size: 1em;\">
                    ";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.heading.major.problems");
            echo "
                </h3>
            </div>
            <div class=\"panel-body alert-warning\">
                ";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.sentence.major.problems", ["%majors%" => twig_length_filter($this->env, (isset($context["majors"]) || array_key_exists("majors", $context) ? $context["majors"] : (function () { throw new RuntimeError('Variable "majors" does not exist.', 31, $this->source); })()))]);
            echo "
            </div>
            <ul class=\"list-group\">
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) || array_key_exists("majors", $context) ? $context["majors"] : (function () { throw new RuntimeError('Variable "majors" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 35
                echo "                    ";
                if (($context["message"] == "mautic.install.cache.unwritable")) {
                    // line 36
                    echo "                        <li class=\"list-group-item\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.directory.unwritable", ["%path%" => (isset($context["cacheDir"]) || array_key_exists("cacheDir", $context) ? $context["cacheDir"] : (function () { throw new RuntimeError('Variable "cacheDir" does not exist.', 36, $this->source); })())]);
                    echo "</li>
                    ";
                } elseif ((                // line 37
$context["message"] == "mautic.install.config.unwritable")) {
                    // line 38
                    echo "                        <li class=\"list-group-item\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], ["%path%" => (isset($context["configFile"]) || array_key_exists("configFile", $context) ? $context["configFile"] : (function () { throw new RuntimeError('Variable "configFile" does not exist.', 38, $this->source); })())]);
                    echo "</li>
                    ";
                } elseif ((                // line 39
$context["message"] == "mautic.install.logs.unwritable")) {
                    // line 40
                    echo "                        <li class=\"list-group-item\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.directory.unwritable", ["%path%" => (isset($context["logDir"]) || array_key_exists("logDir", $context) ? $context["logDir"] : (function () { throw new RuntimeError('Variable "logDir" does not exist.', 40, $this->source); })())]);
                    echo "</li>
                    ";
                } elseif ((                // line 41
$context["message"] == "mautic.install.apc.version")) {
                    // line 42
                    echo "                        ";
                    $context["minAPCverison"] = (((twig_constant("PHP_VERSION") >= "5.4.0")) ? ("3.1.13") : ("3.0.17"));
                    // line 43
                    echo "                        <li class=\"list-group-item\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], ["%minapc%" => (isset($context["minAPCverison"]) || array_key_exists("minAPCverison", $context) ? $context["minAPCverison"] : (function () { throw new RuntimeError('Variable "minAPCverison" does not exist.', 43, $this->source); })()), "%currentapc%" => $this->extensions['Mautic\InstallBundle\Twig\TwigExtension']->phpversion("apc")]);
                    echo "</li>
                    ";
                } else {
                    // line 45
                    echo "                        <li class=\"list-group-item\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]);
                    echo "</li>
                    ";
                }
                // line 47
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </ul>
        </div>
    </div>
    ";
        }
        // line 52
        echo "
    ";
        // line 53
        if ( !twig_length_filter($this->env, (isset($context["majors"]) || array_key_exists("majors", $context) ? $context["majors"] : (function () { throw new RuntimeError('Variable "majors" does not exist.', 53, $this->source); })()))) {
            // line 54
            echo "        <div class=\"alert alert-success\">
            <h4><i class=\"ri-check-line\"></i> ";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.heading.ready");
            echo "</h4>
            <p>";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.sentence.ready");
            echo "</p>
        </div>
    ";
        }
        // line 59
        echo "
    ";
        // line 60
        if (twig_length_filter($this->env, (isset($context["minors"]) || array_key_exists("minors", $context) ? $context["minors"] : (function () { throw new RuntimeError('Variable "minors" does not exist.', 60, $this->source); })()))) {
            // line 61
            echo "    <div class=\"panel-group\" id=\"minors\">
        <div class=\"panel panel-warning\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\" style=\"font-size: 1em;\">
                    <a data-toggle=\"collapse\" style=\"display: block; \" href=\"#minorDetails\"><i class=\"fa fa-chevron-down\"></i> ";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.heading.minor.problems");
            echo "</a>
                </h3>
            </div>
            <div id=\"minorDetails\" class=\"panel-collapse collapse\">
                <div class=\"panel-body alert-warning\">
                    <p>";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.sentence.minor.problems");
            echo "</p>
                </div>
                 <ul class=\"list-group\">
                     ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) || array_key_exists("minors", $context) ? $context["minors"] : (function () { throw new RuntimeError('Variable "minors" does not exist.', 73, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 74
                echo "                         ";
                if (($context["message"] == "mautic.install.pcre.version")) {
                    // line 75
                    echo "                            <li class=\"list-group-item\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], ["%pcreversion%" => twig_constant("PCRE_VERSION")]);
                    echo "</li>
                         ";
                } elseif ((                // line 76
$context["message"] == "mautic.install.php.version.not.supported")) {
                    // line 77
                    echo "                             <li class=\"list-group-item\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], ["%phpversion%" => twig_constant("PHP_VERSION")]);
                    echo "</li>
                         ";
                } elseif ((                // line 78
$context["message"] == "mautic.install.php.version.has.only.security.support")) {
                    // line 79
                    echo "                             <li class=\"list-group-item\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], ["%phpversion%" => twig_constant("PHP_VERSION")]);
                    echo "</li>
                         ";
                } elseif ((                // line 80
$context["message"] == "mautic.install.memory.limit")) {
                    // line 81
                    echo "                             <li class=\"list-group-item\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], ["%min_memory_limit%" => twig_constant("Mautic\\InstallBundle\\Configurator\\Step\\CheckStep::RECOMMENDED_MEMORY_LIMIT")]);
                    echo "</li>
                         ";
                } else {
                    // line 83
                    echo "                             <li class=\"list-group-item\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]);
                    echo "</li>
                         ";
                }
                // line 85
                echo "                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                </ul>
            </div>
        </div>
    </div>
    ";
        }
        // line 91
        echo "
    ";
        // line 92
        if ( !twig_length_filter($this->env, (isset($context["majors"]) || array_key_exists("majors", $context) ? $context["majors"] : (function () { throw new RuntimeError('Variable "majors" does not exist.', 92, $this->source); })()))) {
            // line 93
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_start');
            echo "

        <div class=\"row mt-20\">
            <div class=\"col-sm-12\">
                ";
            // line 97
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "buttons", [], "any", false, false, false, 97), 'row');
            echo "
            </div>
        </div>
    ";
            // line 100
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_end');
            echo "
    ";
        }
        // line 102
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticInstall/Install/check.html.twig";
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
        return array (  263 => 102,  258 => 100,  252 => 97,  244 => 93,  242 => 92,  239 => 91,  232 => 86,  226 => 85,  220 => 83,  214 => 81,  212 => 80,  207 => 79,  205 => 78,  200 => 77,  198 => 76,  193 => 75,  190 => 74,  186 => 73,  180 => 70,  172 => 65,  166 => 61,  164 => 60,  161 => 59,  155 => 56,  151 => 55,  148 => 54,  146 => 53,  143 => 52,  137 => 48,  131 => 47,  125 => 45,  119 => 43,  116 => 42,  114 => 41,  109 => 40,  107 => 39,  102 => 38,  100 => 37,  95 => 36,  92 => 35,  88 => 34,  82 => 31,  75 => 27,  69 => 23,  67 => 22,  64 => 21,  58 => 17,  54 => 15,  50 => 14,  45 => 11,  42 => 10,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticInstall/Install/check.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\InstallBundle\\Resources\\views\\Install\\check.html.twig");
    }
}
