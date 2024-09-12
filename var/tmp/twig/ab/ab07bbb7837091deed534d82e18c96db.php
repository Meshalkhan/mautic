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

/* @MauticForm/Form/list.html.twig */
class __TwigTemplate_d668596a674e13c8c25696840748b5dd extends Template
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
        // line 14
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 14, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticForm/Form/list.html.twig", 14);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 12, $this->source); })()))) ? (true) : (false));
        // line 13
        $context["tmpl"] = "list";
        // line 14
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "form";
    }

    // line 18
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "  ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.forms"), "html", null, true);
        echo "
";
    }

    // line 22
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 25, $this->source); })()), "form:forms:create", [], "array", false, false, false, 25)], "routeBase" => "form", "langVar" => "form.form"]);
        // line 30
        echo "
";
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "    <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
        ";
            // line 36
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 37
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 37, $this->source); })()), "searchHelp" => "mautic.form.form.help.searchcommands", "searchId" => "form-search", "action" =>             // line 40
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 40, $this->source); })())]);
            // line 42
            echo "
        <div class=\"page-list\">
          ";
            // line 44
            echo twig_include($this->env, $context, "@MauticForm/Form/_list.html.twig");
            echo "
        </div>
    </div>
  ";
        } else {
            // line 48
            echo "    ";
            echo twig_include($this->env, $context, "@MauticForm/Form/_list.html.twig");
            echo "
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Form/list.html.twig";
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
        return array (  109 => 48,  102 => 44,  98 => 42,  96 => 40,  95 => 37,  94 => 36,  91 => 35,  88 => 34,  84 => 33,  79 => 30,  77 => 25,  75 => 23,  71 => 22,  64 => 19,  60 => 18,  53 => 16,  49 => 14,  47 => 13,  45 => 12,  38 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Form/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Form\\list.html.twig");
    }
}
