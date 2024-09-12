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

/* @MauticLead/List/list.html.twig */
class __TwigTemplate_b4b0b709b6e36ddc2e2c2968bb7327dc extends Template
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
        // line 11
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 11, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticLead/List/list.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 9, $this->source); })()))) ? (true) : (false));
        // line 10
        $context["tmpl"] = "list";
        // line 11
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "leadlist";
    }

    // line 15
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.header.index"), "html", null, true);
    }

    // line 17
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "  ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 19, $this->source); })()), twig_constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_CREATE"), [], "array", false, false, false, 19)], "routeBase" => "segment", "langVar" => "lead.list", "tooltip" => "mautic.lead.lead.segment.add.help"]);
        // line 23
        echo "
";
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "  ";
        $context["listCommand"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.list");
        // line 28
        echo "
  ";
        // line 29
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "    <div class=\"panel panel-default bdr-t-wdh-0\">
        ";
            // line 31
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 32
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 32, $this->source); })()), "searchHelp" => "mautic.lead.list.help.searchcommands", "action" =>             // line 34
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 34, $this->source); })()), "filters" => ((            // line 35
array_key_exists("filters", $context)) ? (_twig_default_filter((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 35, $this->source); })()), [])) : ([]))]);
            // line 36
            echo "
        <div class=\"page-list\">
  ";
        }
        // line 39
        echo "
  ";
        // line 40
        echo twig_include($this->env, $context, "@MauticLead/List/_list.html.twig");
        echo "

  ";
        // line 42
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 42, $this->source); })())) {
            // line 43
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
        return "@MauticLead/List/list.html.twig";
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
        return array (  115 => 43,  113 => 42,  108 => 40,  105 => 39,  100 => 36,  98 => 35,  97 => 34,  96 => 32,  95 => 31,  92 => 30,  90 => 29,  87 => 28,  84 => 27,  80 => 26,  75 => 23,  73 => 19,  71 => 18,  67 => 17,  60 => 15,  53 => 13,  49 => 11,  47 => 10,  45 => 9,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/List/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\List\\list.html.twig");
    }
}
