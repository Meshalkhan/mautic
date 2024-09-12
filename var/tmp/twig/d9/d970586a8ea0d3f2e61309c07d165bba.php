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

/* @MauticReport/Report/details.html.twig */
class __TwigTemplate_fd47c03f50b559f9df874c0a5bb940d2 extends Template
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
            'publishStatus' => [$this, 'block_publishStatus'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 3, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticReport/Report/details.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()));
        // line 2
        $context["tmpl"] = "list";
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "report";
    }

    // line 7
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.header.view", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7))]), "html", null, true);
    }

    // line 9
    public function block_publishStatus($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 9, $this->source); })())]);
    }

    // line 11
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context["buttons"] = [];
        // line 13
        if ((( !twig_test_empty((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })())) ||  !twig_test_empty((isset($context["graphs"]) || array_key_exists("graphs", $context) ? $context["graphs"] : (function () { throw new RuntimeError('Variable "graphs" does not exist.', 13, $this->source); })()))) &&  !twig_test_empty((isset($context["enableExportPermission"]) || array_key_exists("enableExportPermission", $context) ? $context["enableExportPermission"] : (function () { throw new RuntimeError('Variable "enableExportPermission" does not exist.', 13, $this->source); })())))) {
            // line 14
            $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 14, $this->source); })()), [["attr" => ["target" => "_new", "data-toggle" => "", "class" => "btn btn-default btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_export", ["objectId" => twig_get_attribute($this->env, $this->source,             // line 19
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "format" => "html"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.export.html"), "iconClass" => "ri-file-code-line"]]);
            // line 25
            if ( !twig_test_empty((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()))) {
                // line 26
                $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 26, $this->source); })()), [["attr" => ["data-toggle" => "download", "class" => "btn btn-default btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_export", ["objectId" => twig_get_attribute($this->env, $this->source,                 // line 30
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "format" => "csv"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.export.csv"), "iconClass" => "fa fa-file-text-o"]]);
                // line 36
                if ($this->env->getTest('class')->getCallable()("\\PhpOffice\\PhpSpreadsheet\\Spreadsheet")) {
                    // line 37
                    $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 37, $this->source); })()), [["attr" => ["data-toggle" => "download", "class" => "btn btn-default btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_export", ["objectId" => twig_get_attribute($this->env, $this->source,                     // line 41
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "format" => "xlsx"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.export.xlsx"), "iconClass" => "fa fa-file-excel-o"]]);
                }
                // line 47
                echo "      ";
            }
            // line 48
            echo "  ";
        }
        // line 49
        echo "  ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 50
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 50, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 52
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 52, $this->source); })()), "report:reports:editown", [], "array", false, false, false, 52), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 52, $this->source); })()), "report:reports:editother", [], "array", false, false, false, 52), twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 52, $this->source); })()), "createdBy", [], "any", false, false, false, 52)), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 53
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 53, $this->source); })()), "report:reports:deleteown", [], "array", false, false, false, 53), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 53, $this->source); })()), "report:reports:deleteother", [], "array", false, false, false, 53), twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 53, $this->source); })()), "createdBy", [], "any", false, false, false, 53)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 54
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 54, $this->source); })()), "report:reports:viewown", [], "array", false, false, false, 54), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 54, $this->source); })()), "report:reports:viewother", [], "array", false, false, false, 54), twig_get_attribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 54, $this->source); })()), "createdBy", [], "any", false, false, false, 54))], "routeBase" => "report", "langVar" => "report.report", "customButtons" =>         // line 58
(isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 58, $this->source); })())]);
        // line 59
        echo "
";
    }

    // line 62
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 63, $this->source); })())) {
            // line 64
            echo "    ";
            echo twig_include($this->env, $context, "@MauticReport/Report/_details_content_header.html.twig");
            echo "
  ";
        }
        // line 66
        echo "
  ";
        // line 67
        echo twig_include($this->env, $context, "@MauticReport/Report/_details_report_content.html.twig");
        echo "

  ";
        // line 69
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 69, $this->source); })())) {
            // line 70
            echo "    ";
            echo twig_include($this->env, $context, "@MauticReport/Report/_details_content_footer.html.twig");
            echo "
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticReport/Report/details.html.twig";
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
        return array (  139 => 70,  137 => 69,  132 => 67,  129 => 66,  123 => 64,  120 => 63,  116 => 62,  111 => 59,  109 => 58,  108 => 54,  107 => 53,  106 => 52,  105 => 50,  103 => 49,  100 => 48,  97 => 47,  94 => 41,  93 => 37,  91 => 36,  89 => 30,  88 => 26,  86 => 25,  84 => 19,  83 => 14,  81 => 13,  79 => 12,  75 => 11,  68 => 9,  61 => 7,  54 => 5,  50 => 3,  48 => 2,  46 => 1,  39 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticReport/Report/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Resources\\views\\Report\\details.html.twig");
    }
}
