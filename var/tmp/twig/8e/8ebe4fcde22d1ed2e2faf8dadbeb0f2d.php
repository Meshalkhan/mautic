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

/* @MauticDynamicContent/DynamicContent/list.html.twig */
class __TwigTemplate_78d532fc10cdbaa4c94cac25696b8891 extends Template
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
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 14, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticDynamicContent/DynamicContent/list.html.twig", 14);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context["isIndex"] = ("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 12, $this->source); })()));
        // line 13
        $context["tmpl"] = "list";
        // line 14
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "dynamicContent";
    }

    // line 18
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.dynamicContents"), "html", null, true);
    }

    // line 20
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "dynamiccontent:dynamiccontents:create", [], "array", false, false, false, 23)], "routeBase" => "dynamicContent"]);
        // line 26
        echo "
";
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "    <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
        ";
            // line 32
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 33
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 33, $this->source); })()), "searchHelp" => "mautic.page.help.searchcommands", "action" =>             // line 35
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 35, $this->source); })())]);
            // line 36
            echo "
        <div class=\"page-list\">
          ";
            // line 38
            echo twig_include($this->env, $context, "@MauticDynamicContent/DynamicContent/_list.html.twig");
            echo "
        </div>
    </div>
  ";
        } else {
            // line 42
            echo "    ";
            echo twig_include($this->env, $context, "@MauticDynamicContent/DynamicContent/_list.html.twig");
            echo "
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticDynamicContent/DynamicContent/list.html.twig";
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
        return array (  105 => 42,  98 => 38,  94 => 36,  92 => 35,  91 => 33,  90 => 32,  87 => 31,  84 => 30,  80 => 29,  75 => 26,  73 => 23,  71 => 21,  67 => 20,  60 => 18,  53 => 16,  49 => 14,  47 => 13,  45 => 12,  38 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticDynamicContent/DynamicContent/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DynamicContentBundle\\Resources\\views\\DynamicContent\\list.html.twig");
    }
}
