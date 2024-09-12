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

/* @themes/fresh-left/html/base.html.twig */
class __TwigTemplate_91d61f450e368a91b109d4f6f05a499a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        if (array_key_exists("page", $context)) {
            // line 5
            echo "        <title>{pagetitle}</title>
        <meta name=\"description\" content=\"{pagemetadescription}\">
        <meta charset=\"UTF-8\">
        ";
        }
        // line 9
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 10, $this->source); })())) . "/css/style.css"));
        echo "\" type=\"text/css\">
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 11, $this->source); })())) . "/js/jquery.min.js"));
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 12, $this->source); })())) . "/js/parallax-element.js"));
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 13, $this->source); })())) . "/js/extras.js"));
        echo "\"></script>
        ";
        // line 14
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputHeadDeclarations();
        echo "
    </head>
    <body id=\"bodyTag\">
        ";
        // line 17
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputScripts("bodyOpen");
        echo "
        ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "        ";
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputScripts("bodyClose");
        echo "
    </body>
    <script type=\"text/javascript\">
        if ( \$( \".background-image\" ).length ) {
            \$('.background-image').parallaxElement({
                disableMobile: true,
                defaultSpeed:  -0.2,
            });
        }
    </script>
</html>
";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@themes/fresh-left/html/base.html.twig";
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
        return array (  99 => 18,  82 => 19,  80 => 18,  76 => 17,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  51 => 9,  45 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@themes/fresh-left/html/base.html.twig", "C:\\xampp\\htdocs\\mautic\\themes\\fresh-left\\html\\base.html.twig");
    }
}
