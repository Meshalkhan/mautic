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

/* @MauticConfig/Sysinfo/index.html.twig */
class __TwigTemplate_c9927cd952ec269dcf73dc0a15f13506 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticConfig/Sysinfo/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "sysinfo";
    }

    // line 5
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.header.index"), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- step container -->
    <div class=\"col-md-3 height-auto\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            <!-- Nav tabs -->
            <ul class=\"list-group list-group-tabs\" role=\"tablist\">
                <li role=\"presentation\" class=\"list-group-item in active\">
                    <a href=\"#phpinfo\" aria-controls=\"phpinfo\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.tab.phpinfo"), "html", null, true);
        echo "
                    </a>
                </li>
                <li role=\"presentation\" class=\"list-group-item\">
                    <a href=\"#recommendations\" aria-controls=\"phpinfo\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.tab.recommendations"), "html", null, true);
        echo "
                    </a>
                </li>
                <li role=\"presentation\" class=\"list-group-item\">
                    <a href=\"#folders\" aria-controls=\"folders\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.tab.folders"), "html", null, true);
        echo "
                    </a>
                </li>
                <li role=\"presentation\" class=\"list-group-item\">
                    <a href=\"#log\" aria-controls=\"log\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.tab.log"), "html", null, true);
        echo "
                    </a>
                </li>
                <li role=\"presentation\" class=\"list-group-item\">
                    <a href=\"#dbinfo\" aria-controls=\"dbinfo\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.tab.dbinfo"), "html", null, true);
        echo "
                    </a>
                </li>
            </ul>

        </div>
    </div>

    <!-- container -->
    <div class=\"col-md-9 height-auto bdr-l\">

        <!-- Tab panes -->
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active bdr-w-0\" id=\"phpinfo\">
                <div class=\"pt-md pr-md pl-md pb-md\">
                    ";
        // line 52
        echo (isset($context["phpInfo"]) || array_key_exists("phpInfo", $context) ? $context["phpInfo"] : (function () { throw new RuntimeError('Variable "phpInfo" does not exist.', 52, $this->source); })());
        echo "
                </div>
            </div>
            <div role=\"tabpanel\" class=\"tab-pane fade bdr-w-0\" id=\"recommendations\">
                <div class=\"pt-md pr-md pl-md pb-md\">
                    ";
        // line 57
        if ((twig_test_empty((isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 57, $this->source); })())) && twig_test_empty((isset($context["requirements"]) || array_key_exists("requirements", $context) ? $context["requirements"] : (function () { throw new RuntimeError('Variable "requirements" does not exist.', 57, $this->source); })())))) {
            // line 58
            echo "                        <div class=\"alert alert-info\">
                            ";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.no.recommendations"), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 62
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["requirements"]) || array_key_exists("requirements", $context) ? $context["requirements"] : (function () { throw new RuntimeError('Variable "requirements" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
            // line 63
            echo "                        <div class=\"alert alert-danger\">
                            ";
            // line 64
            echo $context["requirement"];
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recommendation"]) {
            // line 68
            echo "                        <div class=\"alert alert-warning\">
                            ";
            // line 69
            echo $context["recommendation"];
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recommendation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                </div>
            </div>
            <div role=\"tabpanel\" class=\"tab-pane fade bdr-w-0\" id=\"folders\">
                <div class=\"pt-md pr-md pl-md pb-md\">
                    <h2 class=\"pb-md\">";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.folders.title"), "html", null, true);
        echo "</h2>
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.folder.path"), "html", null, true);
        echo "</th>
                                <th>";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.is.writable"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["folders"]) || array_key_exists("folders", $context) ? $context["folders"] : (function () { throw new RuntimeError('Variable "folders" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["folder"] => $context["isWritable"]) {
            // line 85
            echo "                            <tr class=\"";
            if ($context["isWritable"]) {
                echo "success";
            } else {
                echo "danger";
            }
            echo "\">
                                <td>";
            // line 86
            echo twig_escape_filter($this->env, $context["folder"], "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 88
            if ($context["isWritable"]) {
                // line 89
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.writable"), "html", null, true);
                echo "
                                    ";
            } else {
                // line 91
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.unwritable"), "html", null, true);
                echo "
                                    ";
            }
            // line 93
            echo "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['folder'], $context['isWritable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                    </table>
                </div>
            </div>
            <div role=\"tabpanel\" class=\"tab-pane fade bdr-w-0\" id=\"log\">
                <div class=\"pt-md pr-md pl-md pb-md\">
                    <h2 class=\"pb-md\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.log.title"), "html", null, true);
        echo "</h2>
                    ";
        // line 102
        if ((array_key_exists("log", $context) &&  !twig_test_empty((isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 102, $this->source); })())))) {
            // line 103
            echo "                        <pre>";
            echo twig_escape_filter($this->env, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 103, $this->source); })()), "html", null, true);
            echo "</pre>
                    ";
        } else {
            // line 105
            echo "                        <div class=\"alert alert-info\" role=\"alert\">
                            ";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.log.missing"), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 109
        echo "                </div>
            </div>
            <div role=\"tabpanel\" class=\"tab-pane fade bdr-w-0\" id=\"dbinfo\">
                <div class=\"pt-md pr-md pl-md pb-md\">
                    <h2 class=\"pb-md\">";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.dbinfo.title"), "html", null, true);
        echo "</h2>
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.dbinfo.property"), "html", null, true);
        echo "</th>
                                <th>";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.dbinfo.value"), "html", null, true);
        echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.dbinfo.version"), "html", null, true);
        echo "</td>
                                <td id=\"dbinfo-version\">";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dbInfo"]) || array_key_exists("dbInfo", $context) ? $context["dbInfo"] : (function () { throw new RuntimeError('Variable "dbInfo" does not exist.', 124, $this->source); })()), "version", [], "any", false, false, false, 124), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.dbinfo.driver"), "html", null, true);
        echo "</td>
                                <td id=\"dbinfo-driver\">";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dbInfo"]) || array_key_exists("dbInfo", $context) ? $context["dbInfo"] : (function () { throw new RuntimeError('Variable "dbInfo" does not exist.', 128, $this->source); })()), "driver", [], "any", false, false, false, 128), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.dbinfo.platform"), "html", null, true);
        echo "</td>
                                <td id=\"dbinfo-platform\">";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dbInfo"]) || array_key_exists("dbInfo", $context) ? $context["dbInfo"] : (function () { throw new RuntimeError('Variable "dbInfo" does not exist.', 132, $this->source); })()), "platform", [], "any", false, false, false, 132), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
        return "@MauticConfig/Sysinfo/index.html.twig";
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
        return array (  320 => 132,  316 => 131,  310 => 128,  306 => 127,  300 => 124,  296 => 123,  288 => 118,  284 => 117,  277 => 113,  271 => 109,  265 => 106,  262 => 105,  256 => 103,  254 => 102,  250 => 101,  243 => 96,  235 => 93,  229 => 91,  223 => 89,  221 => 88,  216 => 86,  207 => 85,  203 => 84,  197 => 81,  193 => 80,  186 => 76,  180 => 72,  171 => 69,  168 => 68,  163 => 67,  154 => 64,  151 => 63,  146 => 62,  140 => 59,  137 => 58,  135 => 57,  127 => 52,  109 => 37,  101 => 32,  93 => 27,  85 => 22,  77 => 17,  66 => 8,  62 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticConfig/Sysinfo/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ConfigBundle\\Resources\\views\\Sysinfo\\index.html.twig");
    }
}
