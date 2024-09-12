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

/* @MauticCore/Default/head.html.twig */
class __TwigTemplate_49d9cb238844baf5e88df85bd90a1c62 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<head>
    <meta charset=\"UTF-8\" />
    <title>
        ";
        // line 4
        if ((array_key_exists("headerTitle", $context) &&  !twig_test_empty((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 4, $this->source); })())))) {
            // line 5
            echo "            ";
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_striptags(twig_replace_filter((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 5, $this->source); })()), ["<" => " <"])));
            echo " |
        ";
        }
        // line 7
        echo "        ";
        echo twig_escape_filter($this->env, ((array_key_exists("pageTitle", $context)) ? (_twig_default_filter((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 7, $this->source); })()), "Mautic")) : ("Mautic")), "html", null, true);
        echo "
    </title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getOverridableUrl("images/favicon.ico");
        echo "\" />
    <link rel=\"icon\" sizes=\"192x192\" href=\"";
        // line 11
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getOverridableUrl("images/favicon.ico");
        echo "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 12
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getOverridableUrl("images/apple-touch-icon.png");
        echo "\" />

    ";
        // line 14
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputSystemStylesheets();
        echo "

    ";
        // line 16
        $this->loadTemplate("@MauticCore/Default/script.html.twig", "@MauticCore/Default/head.html.twig", 16)->display($context);
        // line 17
        echo "
    ";
        // line 18
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputHeadDeclarations();
        echo "
</head>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Default/head.html.twig";
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
        return array (  80 => 18,  77 => 17,  75 => 16,  70 => 14,  65 => 12,  61 => 11,  57 => 10,  50 => 7,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Default/head.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Default\\head.html.twig");
    }
}
