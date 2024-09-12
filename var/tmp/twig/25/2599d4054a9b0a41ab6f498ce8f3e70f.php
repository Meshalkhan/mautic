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

/* @MauticPage/Page/list.html.twig */
class __TwigTemplate_69e71ba4cdf9bc8864012a75db39fb54 extends Template
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
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 15, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticPage/Page/list.html.twig", 15);
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
        echo "page";
    }

    // line 19
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.pages"), "html", null, true);
    }

    // line 21
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 24, $this->source); })()), "page:pages:create", [], "array", false, false, false, 24)], "routeBase" => "page"]);
        // line 27
        echo "
";
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "    <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
        ";
            // line 33
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 34
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 34, $this->source); })()), "searchHelp" => "mautic.page.help.searchcommands", "action" =>             // line 36
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 36, $this->source); })())]);
            // line 37
            echo "
        <div class=\"page-list\">
  ";
        }
        // line 40
        echo "
  ";
        // line 41
        echo twig_include($this->env, $context, "@MauticPage/Page/_list.html.twig");
        echo "

  ";
        // line 43
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "        </div>
    </div>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPage/Page/list.html.twig";
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
        return array (  109 => 44,  107 => 43,  102 => 41,  99 => 40,  94 => 37,  92 => 36,  91 => 34,  90 => 33,  87 => 32,  84 => 31,  80 => 30,  75 => 27,  73 => 24,  71 => 22,  67 => 21,  60 => 19,  53 => 17,  49 => 15,  47 => 14,  45 => 13,  38 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPage/Page/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Resources\\views\\Page\\list.html.twig");
    }
}
