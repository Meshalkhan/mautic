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

/* @bundles/CoreBundle/Assets/css/app/less/variables.less */
class __TwigTemplate_073a70dde34e6348bb9a9addb38d2919 extends Template
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
        yield "//
// Variables
// --------------------------------------------------

//== General
//

:root {
    // Animations
    --timing:                                    .3s ease;
    --all:                                       all var(--timing);

    //== Border
    --border-interactive: #4e5e9e;
    --border-subtle: #e0e0e0;
    --border-subtle-alt: #c6c6c6;
    --border-subtle-selected: #c6c6c6;
    --border-strong: #8d8d8d;
    --border-tile: #c6c6c6;
    --border-tile-alt: #a8a8a8;
    --border-inverse: #161616;
    --border-disabled: #c6c6c6;

    //== Layer
    --layer: #f4f4f4;
    --layer-alt: #ffffff;
    --layer-hover: #e8e8e8;
    --layer-active: #c6c6c6;
    --layer-selected: #e0e0e0;
    --layer-selected-hover: #cacaca;
    --layer-selected-inverse: #161616;
    --layer-selected-disabled: #8d8d8d;

    //== Icons
    --icon-primary: #161616;
    --icon-secondary: #525252;
    --icon-on-color: #ffffff;
    --icon-on-color-disabled: #8d8d8d;
    --icon-interactive: #4e5e9e;
    --icon-inverse: #ffffff;
    --icon-disabled: rgba(22, 22, 22, 0.25);
}

@media (prefers-reduced-motion: reduce) {
    :root {
        --timing:                                0;
    }
}

//== Bootstrap variable
//
//## import bootstrap variable.
@import \"../../../../../../../node_modules/bootstrap/less/variables.less\";

//== Logo
//
//## common logo color
@mautic-logo-figure-width:                  32px;
@mautic-logo-figure-circle-fill:            #ffffff;
@mautic-logo-figure-m-fill:                 @brand-warning;
@mautic-logo-text-width:                    98px;
@mautic-logo-text-fill:                     #ffffff;

// Brand Colors
@mautic-primary:\t\t\t\t\t\t\t#4e5e9e;
@mautic-secondary:\t\t\t\t\t\t\t#fdb933;
@mautic-tertiary:\t\t\t\t\t\t\t#35b5b9;

//== Header layout
//
//## common main header variable.
@header-bg:                                 #ffffff;
@header-height:                             60px;
@header-zindex:                             @zindex-navbar + 5; // 1005


//== Sidebar layout
//
//## common main sidebar variable.
@sidebar-zindex:                           (@header-zindex - 20 + 5);  // 990
//** left sidebar option
@sidebar-left-bg:                           darken(#27303a, 5%);
@sidebar-left-header-bg:                    @brand-primary;
@sidebar-left-width:                        230px;
@sidebar-left-collapse-width:               60px;
@sidebar-left-dark:\t\t\t\t\t\t\tdarken(@sidebar-left-bg, 8%);

//** right sidebar option - coming soon
@sidebar-right-bg:                          @sidebar-left-bg;
@sidebar-right-header-bg:                   lighten(@sidebar-right-bg, 3%);
@sidebar-right-width:                       230px;



//== Content layout
//
//## common main content variable.
@content-zindex:                            (@header-zindex - 10 + 5);  // 1000
@content-bg:                                #f8f8f8;


//== Footer layout
//
//## common footer variable.
@footer-height:                             46px;
@footer-bg:                                 lighten(@body-bg, 1%);
@footer-zindex:                             @content-zindex;  // 1000
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/variables.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/variables.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\app\\less\\variables.less");
    }
}
