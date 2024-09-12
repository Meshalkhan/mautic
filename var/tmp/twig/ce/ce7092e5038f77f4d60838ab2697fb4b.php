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

/* @MauticPage/Result/list.html.twig */
class __TwigTemplate_9786b7ab6165eaea52bc1cb8e3c84892 extends Template
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
        // line 8
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 8, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticPage/Result/list.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 6, $this->source); })()))) ? (true) : (false));
        // line 7
        $context["tmpl"] = "list";
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "pageresult";
    }

    // line 12
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "  ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.result.header.index", ["%name%" => twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 14, $this->source); })()), "getName", [], "method", false, false, false, 14)]), "html", null, true);
        // line 15
        echo "
";
    }

    // line 18
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "  ";
        $context["buttons"] = [["attr" => ["target" => "_new", "data-toggle" => "", "class" => "btn btn-default btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_export", ["objectId" => twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "format" => "html"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.export.html"), "iconClass" => "fa fa-file-code-o", "primary" => true], ["attr" => ["data-toggle" => "", "class" => "btn btn-default btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_export", ["objectId" => twig_get_attribute($this->env, $this->source,         // line 35
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35), "format" => "csv"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.export.csv"), "iconClass" => "fa fa-file-text-o", "primary" => true]];
        // line 42
        echo "
  ";
        // line 43
        if ($this->env->getTest('class')->getCallable()("\\PhpOffice\\PhpSpreadsheet\\Spreadsheet")) {
            // line 44
            echo "    ";
            $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 44, $this->source); })()), [["attr" => ["data-toggle" => "", "class" => "btn btn-default btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_export", ["objectId" => twig_get_attribute($this->env, $this->source,             // line 48
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "format" => "xlsx"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.export.xlsx"), "iconClass" => "fa fa-file-excel-o", "primary" => true]]);
            // line 54
            echo "  ";
        }
        // line 55
        echo "
  ";
        // line 56
        $context["buttons"] = twig_array_merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 56, $this->source); })()), [["attr" => ["class" => "btn btn-default", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source,         // line 59
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "data-toggle" => "ajax"], "iconClass" => "ri-close-line", "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.close")]]);
        // line 65
        echo "
  ";
        // line 66
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["customButtons" => (isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 66, $this->source); })())]);
        echo "
";
    }

    // line 69
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 70, $this->source); })())) {
            // line 71
            echo "    <div class=\"page-list\">
  ";
        }
        // line 73
        echo "
  ";
        // line 74
        echo twig_include($this->env, $context, "@MauticPage/Result/_list.html.twig");
        echo "

  ";
        // line 76
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 76, $this->source); })())) {
            // line 77
            echo "    </div>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPage/Result/list.html.twig";
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
        return array (  130 => 77,  128 => 76,  123 => 74,  120 => 73,  116 => 71,  113 => 70,  109 => 69,  103 => 66,  100 => 65,  98 => 59,  97 => 56,  94 => 55,  91 => 54,  89 => 48,  87 => 44,  85 => 43,  82 => 42,  80 => 35,  79 => 25,  77 => 19,  73 => 18,  68 => 15,  66 => 14,  64 => 13,  60 => 12,  53 => 10,  49 => 8,  47 => 7,  45 => 6,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPage/Result/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Resources\\views\\Result\\list.html.twig");
    }
}
