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

/* @MauticSocial/Tweet/list.html.twig */
class __TwigTemplate_0ba5e1d9e87eca4e0c8a8055516702bc extends Template
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
        // line 3
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 3, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticSocial/Tweet/list.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()));
        // line 2
        $context["tmpl"] = "list";
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "tweet";
    }

    // line 7
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.social.tweets"), "html", null, true);
    }

    // line 9
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("mauticSocial:tweet:create")], "routeBase" => "mautic_tweet", "langVar" => "tweet"]);
        // line 16
        echo "
";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "    <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
      ";
            // line 22
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 23
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 23, $this->source); })()), "action" =>             // line 24
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 24, $this->source); })())]);
            // line 25
            echo "
      <div class=\"page-list\">";
            // line 27
            echo twig_include($this->env, $context, "@MauticSocial/Tweet/_list.html.twig");
            // line 28
            echo "</div>
    </div>
  ";
        } else {
            // line 31
            echo twig_include($this->env, $context, "@MauticSocial/Tweet/_list.html.twig");
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticSocial/Tweet/list.html.twig";
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
        return array (  103 => 31,  98 => 28,  96 => 27,  93 => 25,  91 => 24,  90 => 23,  89 => 22,  86 => 21,  83 => 20,  79 => 19,  74 => 16,  71 => 10,  67 => 9,  60 => 7,  53 => 5,  49 => 3,  47 => 2,  45 => 1,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSocial/Tweet/list.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticSocialBundle\\Resources\\views\\Tweet\\list.html.twig");
    }
}
