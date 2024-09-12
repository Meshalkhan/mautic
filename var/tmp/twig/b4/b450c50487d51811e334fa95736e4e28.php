<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @themes/fresh-center/assets/icon_lightbulb.svg */
class __TwigTemplate_a8ea521bfe55e531c126d45c967d994b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 174.8 218.7\" style=\"enable-background:new 0 0 174.8 218.7;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:#FFFFFF;}
</style>
<g>
\t<path class=\"st0\" d=\"M127.8,178.7H47l-1.2-3.8c-3.2-9.8-8.6-15.1-17.2-23C10.4,135.4,0,111.7,0,87.1c0.1-23.3,9.3-45.3,26.1-61.8
\t\tC42.8,8.8,64.9-0.2,88.3,0c23.2,0.2,44.9,9.4,61.2,25.9s25.3,38.3,25.3,61.5c0,24.2-10.2,47.6-28,64.1
\t\tc-9.2,8.5-14.6,13.8-17.8,23.5L127.8,178.7z M54.9,167.7H120c4.4-10.5,11.4-17,19.3-24.4c15.5-14.4,24.5-34.8,24.5-56
\t\tc0-41.7-33.9-76-75.6-76.4C67.8,10.7,48.5,18.6,33.9,33C19.3,47.5,11.2,66.6,11.1,87c-0.1,21.5,9,42.2,24.9,56.7l0,0
\t\tC44.6,151.7,50.9,157.9,54.9,167.7z\"/>
\t<path class=\"st0\" d=\"M110.3,218.7H64.5c-3,0-5.5-2.5-5.5-5.5s2.5-5.5,5.5-5.5h45.8c3,0,5.5,2.5,5.5,5.5S113.3,218.7,110.3,218.7z\"
\t\t/>
\t<path class=\"st0\" d=\"M117,198.7H57.8c-3,0-5.5-2.5-5.5-5.5s2.5-5.5,5.5-5.5h59.3c3,0,5.5,2.5,5.5,5.5S120.1,198.7,117,198.7z\"/>
\t<path class=\"st0\" d=\"M133.7,77.8l-11.9-27.7L94.1,62l4.3,10.1l10.9-4.7L96.9,96.1l-38-9.9l-13.6,39.7l10.4,3.6L66,99.4l37.2,9.7
\t\tL119.3,72l4.3,10.1L133.7,77.8z\"/>
</g>
</svg>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/fresh-center/assets/icon_lightbulb.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/fresh-center/assets/icon_lightbulb.svg", "C:\\xampp\\htdocs\\mautic\\themes\\fresh-center\\assets\\icon_lightbulb.svg");
    }
}
