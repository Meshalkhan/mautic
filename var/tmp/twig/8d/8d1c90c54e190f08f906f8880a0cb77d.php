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

/* @themes/fresh-wide/assets/icon_check_red.svg */
class __TwigTemplate_429e2f784a4d4023284456bd171d201a extends Template
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
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<!-- Generator: Adobe Illustrator 21.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 102 104\" style=\"enable-background:new 0 0 102 104;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:#E74C3C;}
</style>
<polygon class=\"st0\" points=\"47,104 0,66 43,81 102,0 \"/>
</svg>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@themes/fresh-wide/assets/icon_check_red.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@themes/fresh-wide/assets/icon_check_red.svg", "C:\\xampp\\htdocs\\mautic\\themes\\fresh-wide\\assets\\icon_check_red.svg");
    }
}
