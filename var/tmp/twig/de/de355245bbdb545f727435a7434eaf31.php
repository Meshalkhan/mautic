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

/* @MauticLead/Import/list.html.twig */
class __TwigTemplate_0438f790c457fc6c882447be07bde24c extends Template
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
        // line 7
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 7, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticLead/Import/list.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 5, $this->source); })()))) ? (true) : (false));
        // line 6
        $context["tmpl"] = "list";
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["mauticContent"]) || array_key_exists("mauticContent", $context) ? $context["mauticContent"] : (function () { throw new RuntimeError('Variable "mauticContent" does not exist.', 9, $this->source); })()), "html", null, true);
    }

    // line 11
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.list"), "html", null, true);
    }

    // line 13
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "  ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 16, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 16, $this->source); })()) . ":create"), [], "array", false, false, false, 16)], "routeBase" => "import", "query" => ["object" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "get", ["object", "contacts"], "method", false, false, false, 19)]]);
        // line 20
        echo "
";
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "    <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
      <div class=\"page-list\">
  ";
        }
        // line 28
        echo "
  ";
        // line 29
        echo twig_include($this->env, $context, "@MauticLead/Import/_list.html.twig");
        echo "

  ";
        // line 31
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 31, $this->source); })())) {
            // line 32
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
        return "@MauticLead/Import/list.html.twig";
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
        return array (  103 => 32,  101 => 31,  96 => 29,  93 => 28,  88 => 25,  85 => 24,  81 => 23,  76 => 20,  74 => 19,  73 => 16,  71 => 14,  67 => 13,  60 => 11,  53 => 9,  49 => 7,  47 => 6,  45 => 5,  38 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Import/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Import\\list.html.twig");
    }
}
