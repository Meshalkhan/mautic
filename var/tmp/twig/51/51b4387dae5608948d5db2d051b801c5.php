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

/* @MauticSms/Sms/index.html.twig */
class __TwigTemplate_c3db1c5bdfdca7f65317dff67e0dc2d3 extends Template
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
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticSms/Sms/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "sms";
    }

    // line 3
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.smses"), "html", null, true);
    }

    // line 4
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 8, $this->source); })()), "sms:smses:create", [], "array", false, false, false, 8)], "routeBase" => "sms"]);
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">";
        // line 16
        echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>         // line 17
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 17, $this->source); })()), "searchHelp" => "mautic.sms.help.searchcommands", "searchId" => "sms-search", "action" =>         // line 20
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 20, $this->source); })())]);
        // line 23
        echo "<div class=\"page-list\">
        ";
        // line 24
        $this->displayBlock("listResults", $context, $blocks);
        echo "
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticSms/Sms/index.html.twig";
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
        return array (  85 => 24,  82 => 23,  80 => 20,  79 => 17,  78 => 16,  76 => 15,  72 => 14,  68 => 8,  67 => 5,  63 => 4,  56 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSms/Sms/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Resources\\views\\Sms\\index.html.twig");
    }
}
