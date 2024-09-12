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

/* @themes/skyline/html/base.html.twig */
class __TwigTemplate_99b7a2ea83f2718bfb7cb53d11682e2a extends Template
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
        ";
        }
        // line 8
        echo "        <link rel=\"stylesheet\"href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 9, $this->source); })())) . "/css/skyline.css"));
        echo "\" type=\"text/css\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 11
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputHeadDeclarations();
        echo "
    </head>
    <body style=\"padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none\" bgcolor=\"#ffffff\">
        ";
        // line 14
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputScripts("bodyOpen");
        echo "
        ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "        ";
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputScripts("bodyClose");
        echo "
    </body>
</html>
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@themes/skyline/html/base.html.twig";
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
        return array (  79 => 15,  70 => 16,  68 => 15,  64 => 14,  58 => 11,  53 => 9,  50 => 8,  45 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@themes/skyline/html/base.html.twig", "C:\\xampp\\htdocs\\mautic\\themes\\skyline\\html\\base.html.twig");
    }
}
