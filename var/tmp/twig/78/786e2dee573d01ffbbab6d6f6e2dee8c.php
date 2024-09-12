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

/* @MauticForm/Result/list.html.twig */
class __TwigTemplate_60a4f4c57c12906a1509f84994c46b73 extends Template
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
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 15
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 15, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticForm/Result/list.html.twig", 15);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 13, $this->source); })()))) ? (true) : (false));
        // line 14
        $context["tmpl"] = "list";
        // line 15
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "formresult";
    }

    // line 19
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "  ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.header.index", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20)]), "html", null, true);
        echo "
";
    }

    // line 23
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "  ";
        $context["buttons"] = [];
        // line 25
        echo "    ";
        if ( !twig_test_empty((isset($context["enableExportPermission"]) || array_key_exists("enableExportPermission", $context) ? $context["enableExportPermission"] : (function () { throw new RuntimeError('Variable "enableExportPermission" does not exist.', 25, $this->source); })()))) {
            // line 26
            echo "        ";
            $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 26, $this->source); })()), [["attr" => ["target" => "_new", "data-toggle" => "", "class" => "btn btn-default btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_export", ["objectId" => twig_get_attribute($this->env, $this->source,             // line 31
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "format" => "html"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.export.html"), "iconClass" => "ri-file-code-line", "primary" => true]]);
            // line 37
            echo "
        ";
            // line 38
            $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 38, $this->source); })()), [["attr" => ["data-toggle" => "", "class" => "btn btn-default btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_export", ["objectId" => twig_get_attribute($this->env, $this->source,             // line 42
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42), "format" => "csv"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.export.csv"), "iconClass" => "ri-file-text-line", "primary" => true]]);
            // line 48
            echo "
        ";
            // line 50
            echo "        ";
            if (twig_constant_is_defined("\\PhpOffice\\PhpSpreadsheet\\Spreadsheet::VISIBILITY_VISIBLE")) {
                // line 51
                echo "            ";
                $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 51, $this->source); })()), [["attr" => ["data-toggle" => "", "class" => "btn btn-default btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_export", ["objectId" => twig_get_attribute($this->env, $this->source,                 // line 55
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "format" => "xlsx"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.export.xlsx"), "iconClass" => "ri-file-excel-line", "primary" => true]]);
                // line 61
                echo "        ";
            }
            // line 62
            echo "    ";
        }
        // line 63
        echo "
  ";
        // line 64
        $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 64, $this->source); })()), [["attr" => ["class" => "btn btn-default", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source,         // line 67
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "data-toggle" => "ajax"], "iconClass" => "ri-close-line", "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.close")]]);
        // line 73
        echo "
  ";
        // line 74
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["customButtons" => (isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 74, $this->source); })())]);
        echo "
";
    }

    // line 77
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "  <div class=\"page-list\">
    ";
        // line 79
        echo twig_include($this->env, $context, "@MauticForm/Result/_list.html.twig");
        echo "
  </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Result/list.html.twig";
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
        return array (  129 => 79,  126 => 78,  122 => 77,  116 => 74,  113 => 73,  111 => 67,  110 => 64,  107 => 63,  104 => 62,  101 => 61,  99 => 55,  97 => 51,  94 => 50,  91 => 48,  89 => 42,  88 => 38,  85 => 37,  83 => 31,  81 => 26,  78 => 25,  75 => 24,  71 => 23,  64 => 20,  60 => 19,  53 => 17,  49 => 15,  47 => 14,  45 => 13,  38 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Result/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Result\\list.html.twig");
    }
}
