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

/* @themes/fresh-left/assets/icon_facebook.svg */
class __TwigTemplate_7daccba07456b0a1152427320dfde900 extends Template
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
<!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 200 200\" style=\"enable-background:new 0 0 200 200;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:#FFFFFF;}
</style>
<g>
\t<path class=\"st0\" d=\"M100,0C44.8,0,0,44.8,0,100c0,55.2,44.8,100,100,100c3.6,0,7.1-0.2,10.5-0.6H94.8v-72.7H70.3V98.4h24.5V77.5
\t\tc0-24.3,14.8-37.5,36.5-37.5c10.4,0,19.3,0.8,21.9,1.1v25.4l-15,0c-11.8,0-14,5.6-14,13.8v18.1h28.1l-3.7,28.3h-24.4v70.4
\t\tc43.6-10.8,75.9-50.1,75.9-97.1C200,44.8,155.2,0,100,0z\"/>
</g>
</svg>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@themes/fresh-left/assets/icon_facebook.svg";
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
        return new Source("", "@themes/fresh-left/assets/icon_facebook.svg", "C:\\xampp\\htdocs\\mautic\\themes\\fresh-left\\assets\\icon_facebook.svg");
    }
}
