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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/bootstrap-mautic-custom-variables.less */
class __TwigTemplate_93690047b73a0187b89c3ef66e1b1b42 extends Template
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
        echo "@gray-darker:            lighten(#0c0e10, 10%); // #222
@gray-dark:              lighten(#0c0e10, 22%);   // #333
@gray:                   lighten(#0c0e10, 35%); // #555
@gray-light:             lighten(#0c0e10, 61.8%); // #777
@gray-lighter:           lighten(#0c0e10, 87.5%); // #eee

@brand-primary:         #4E5D9D;
@brand-success:         #00B49C;
@brand-info:            #35B4B9;
@brand-warning:         #FDB933;
@brand-danger:          #F86B4F;

@brand-facebook:        #3b5998;
@brand-twitter:         #55acee;
@brand-google:          #dd4b39;

@body-bg:               #f8f8f8;

@text-color:            darken(@gray-dark, 10%);
@link-hover-color:      darken(@brand-primary, 10%);

@font-family-sans-serif:  \"Source Sans 3\", Helvetica, Arial, sans-serif;

@font-size-base:          13px;
@font-size-large:         ceil((@font-size-base * 1.20)); // ~16px
@font-size-small:         ceil((@font-size-base * 0.80)); // ~11px

@font-size-h3:            ceil((@font-size-base * 1.5)); // ~20px
@font-size-h4:            ceil((@font-size-base * 1.2)); // ~16px
@font-size-h5:            ceil((@font-size-base * 1.05)); // ~14px
@font-size-h6:            @font-size-base; // ~13px

@line-height-base:        1.3856;


@headings-font-weight:    400;
@headings-line-height:    1.2;

@icon-font-path:          \"../fonts/icons/\";

@line-height-large:         1.25;
@line-height-small:         1.456;

@border-radius-base:        3px;
@border-radius-large:       4px;
@border-radius-small:       2px;

@table-cell-padding:            8px 15px;

@table-condensed-cell-padding:  5px 15px;

@table-bg-accent:               #fafafa;
@table-bg-hover:                #fafafa;

@table-border-color:            @gray-lighter;

@btn-font-weight:                600;

@btn-default-color:              lighten(@text-color, 10%);
@btn-default-border:             #ddd;

@btn-primary-border:             @brand-primary;
@btn-success-border:             @brand-success;
@btn-info-border:                @brand-info;
@btn-warning-border:             @brand-warning;
@btn-danger-border:              @brand-danger;

@input-border:                   #d5d5d5;
@input-border-focus:             darken(@input-border, 10%);

@dropdown-border:                rgba(0,0,0,0.06);

@dropdown-fallback-border:       #eee;

@dropdown-divider-bg:            #eaeaea;


@dropdown-link-color:            @text-color;

@dropdown-link-hover-color:      darken(@dropdown-link-color, 5%);

@dropdown-link-hover-bg:         #f5f5f5;

@dropdown-caret-color:           #gray;

@zindex-popover:           1060;
@zindex-tooltip:           10000;

@nav-link-padding:                          10px 18px;
@nav-link-hover-bg:                         darken(@body-bg, 3%);

@nav-tabs-border-color:                     @hr-border;
@nav-tabs-link-hover-border-color:          darken(@body-bg, 4%);

@nav-tabs-active-link-hover-border-color:   @hr-border;

@nav-pills-active-link-hover-bg:            @brand-primary;
@nav-pills-active-link-hover-color:         #fff;

@pagination-active-color:              @pagination-hover-color;
@pagination-active-bg:                 @pagination-hover-bg;
@pagination-active-border:             @pagination-hover-border;

@popover-border-color:                rgba(0,0,0,.1);

@modal-inner-padding:         15px;

@alert-mautic-bg:             @brand-primary;
@alert-mautic-text:           #fff;
@alert-mautic-border:         rgba(0,0,0,0.03);


@list-group-bg:                 transparent;
@list-group-border:             @hr-border;
@list-group-border-radius:      @border-radius-base;

@list-group-hover-bg:           darken(@body-bg, 1%);
@list-group-active-color:       @text-color;
@list-group-active-bg:          @list-group-hover-bg;
@list-group-active-border:      @hr-border;

@list-group-disabled-color:      @gray-light;
@list-group-disabled-bg:         @gray-lighter;
@list-group-disabled-text-color: @list-group-disabled-color;

@panel-heading-padding:       10px 15px;
@panel-footer-padding:        @panel-heading-padding;

@panel-inner-border:          @hr-border;
@panel-default-border:        @hr-border;

@panel-primary-border:        rgba(0,0,0,0.03);

@panel-success-text:          #fff;
@panel-success-border:        rgba(0,0,0,0.03);
@panel-success-heading-bg:    @brand-success;

@panel-info-text:             #fff;
@panel-info-border:           rgba(0,0,0,0.03);
@panel-info-heading-bg:       @brand-info;

@panel-warning-text:          #fff;
@panel-warning-border:        rgba(0,0,0,0.03);
@panel-warning-heading-bg:    @brand-warning;

@panel-danger-text:           #fff;
@panel-danger-border:         rgba(0,0,0,0.03);
@panel-danger-heading-bg:     @brand-danger;

@badge-font-weight:           400;
@badge-line-height:           18px;
@badge-border-radius:         9px;

@component-offset-horizontal: 180px;
@dl-horizontal-offset:        @component-offset-horizontal;

@font-size-h1:            floor((@font-size-base * 1.7)); // ~36px";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/bootstrap-mautic-custom-variables.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/bootstrap-mautic-custom-variables.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\libraries\\bootstrap\\bootstrap-mautic-custom-variables.less");
    }
}
