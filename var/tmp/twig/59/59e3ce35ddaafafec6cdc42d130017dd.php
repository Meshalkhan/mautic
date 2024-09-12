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

/* @MauticCore/Theme/index.html.twig */
class __TwigTemplate_1af2f855fd8d57ae49844f96f82f027c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        // line 3
        $context["mauticContent"] = "theme";
        // line 4
        $context["headerTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.themes");
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticCore/Theme/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 6, $this->source); })()), "html", null, true);
    }

    // line 8
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "  ";
        $this->loadTemplate("@MauticCore/Theme/form.html.twig", "@MauticCore/Theme/index.html.twig", 9)->display(twig_array_merge($context, ["form" =>         // line 10
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })())]));
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
  ";
        // line 17
        $this->loadTemplate("@MauticCore/Helper/list_toolbar.html.twig", "@MauticCore/Theme/index.html.twig", 17)->display(twig_array_merge($context, ["action" =>         // line 18
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 18, $this->source); })())]));
        // line 20
        echo "    <div class=\"page-list\">
        ";
        // line 21
        if (        $this->hasBlock("mainContent", $context, $blocks)) {
            $this->displayBlock("mainContent", $context, $blocks);
        }
        // line 22
        echo "    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Theme/index.html.twig";
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
        return array (  87 => 22,  83 => 21,  80 => 20,  78 => 18,  77 => 17,  74 => 16,  70 => 15,  66 => 10,  64 => 9,  60 => 8,  53 => 6,  48 => 1,  46 => 4,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Theme/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Theme\\index.html.twig");
    }
}
