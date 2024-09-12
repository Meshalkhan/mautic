<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @MauticReport/Report/details.html.twig */
class __TwigTemplate_bd17f8bb162a60ea4aadfaf712e1b34e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

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

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 3, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticReport/Report/details.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()));
        // line 2
        $context["tmpl"] = "list";
        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "report";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.header.view", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7))]), "html", null, true);
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 9, $this->source); })())]);
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        $context["buttons"] = [];
        // line 13
        if ((( !Twig\Extension\CoreExtension::testEmpty((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })())) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["graphs"]) || array_key_exists("graphs", $context) ? $context["graphs"] : (function () { throw new RuntimeError('Variable "graphs" does not exist.', 13, $this->source); })()))) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["enableExportPermission"]) || array_key_exists("enableExportPermission", $context) ? $context["enableExportPermission"] : (function () { throw new RuntimeError('Variable "enableExportPermission" does not exist.', 13, $this->source); })())))) {
            // line 14
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 14, $this->source); })()), [["attr" => ["target" => "_new", "data-toggle" => "", "class" => "btn btn-default btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_export", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 19
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "format" => "html"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.export.html"), "iconClass" => "ri-file-code-line"]]);
            // line 25
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()))) {
                // line 26
                $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 26, $this->source); })()), [["attr" => ["data-toggle" => "download", "class" => "btn btn-default btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_export", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 30
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "format" => "csv"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.export.csv"), "iconClass" => "fa fa-file-text-o"]]);
                // line 36
                if ($this->env->getTest('class')->getCallable()("\\PhpOffice\\PhpSpreadsheet\\Spreadsheet")) {
                    // line 37
                    $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 37, $this->source); })()), [["attr" => ["data-toggle" => "download", "class" => "btn btn-default btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_export", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,                     // line 41
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "format" => "xlsx"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.export.xlsx"), "iconClass" => "fa fa-file-excel-o"]]);
                }
                // line 47
                yield "      ";
            }
            // line 48
            yield "  ";
        }
        // line 49
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 50
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 50, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 52
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 52, $this->source); })()), "report:reports:editown", [], "array", false, false, false, 52), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 52, $this->source); })()), "report:reports:editother", [], "array", false, false, false, 52), CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 52, $this->source); })()), "createdBy", [], "any", false, false, false, 52)), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 53
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 53, $this->source); })()), "report:reports:deleteown", [], "array", false, false, false, 53), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 53, $this->source); })()), "report:reports:deleteother", [], "array", false, false, false, 53), CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 53, $this->source); })()), "createdBy", [], "any", false, false, false, 53)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 54
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 54, $this->source); })()), "report:reports:viewown", [], "array", false, false, false, 54), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 54, $this->source); })()), "report:reports:viewother", [], "array", false, false, false, 54), CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 54, $this->source); })()), "createdBy", [], "any", false, false, false, 54))], "routeBase" => "report", "langVar" => "report.report", "customButtons" =>         // line 58
(isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 58, $this->source); })())]);
        // line 59
        yield "
";
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 63, $this->source); })())) {
            // line 64
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticReport/Report/_details_content_header.html.twig");
            yield "
  ";
        }
        // line 66
        yield "
  ";
        // line 67
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticReport/Report/_details_report_content.html.twig");
        yield "

  ";
        // line 69
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 69, $this->source); })())) {
            // line 70
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticReport/Report/_details_content_footer.html.twig");
            yield "
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticReport/Report/details.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  163 => 70,  161 => 69,  156 => 67,  153 => 66,  147 => 64,  144 => 63,  137 => 62,  131 => 59,  129 => 58,  128 => 54,  127 => 53,  126 => 52,  125 => 50,  123 => 49,  120 => 48,  117 => 47,  114 => 41,  113 => 37,  111 => 36,  109 => 30,  108 => 26,  106 => 25,  104 => 19,  103 => 14,  101 => 13,  99 => 12,  92 => 11,  81 => 9,  70 => 7,  59 => 5,  55 => 3,  53 => 2,  51 => 1,  44 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticReport/Report/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Resources\\views\\Report\\details.html.twig");
    }
}
