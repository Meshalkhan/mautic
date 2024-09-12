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

/* @bundles/CoreBundle/Assets/css/app/less/components/type.less */
class __TwigTemplate_c15e8c3b7d552c95191f4b47b211e304 extends Template
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
// Typography
// --------------------------------------------------

// Headings
// -------------------------
h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-top: 0;
  margin-bottom: 0;
  color: inherit;
}

// Ellipsis
// -------------------------
.ellipsis {
  display: block;
  .text-overflow();
}

// font size
// -------------------------
.fs-base { font-size: @font-size-base; }
.fs-2 { font-size: 2px !important; }
.fs-4 { font-size: 4px !important; }
.fs-6 { font-size: 6px !important; }
.fs-8 { font-size: 8px !important; }
.fs-10 { font-size: 10px !important; }
.fs-11 { font-size: 11px !important; }
.fs-12 { font-size: 12px !important; }
.fs-14 { font-size: 14px !important; }
.fs-16 { font-size: 16px !important; }
.fs-18 { font-size: 18px !important; }
.fs-20 { font-size: 20px !important; }
.fs-22 { font-size: 22px !important; }
.fs-24 { font-size: 24px !important; }
.fs-26 { font-size: 26px !important; }
.fs-28 { font-size: 28px !important; }
.fs-30 { font-size: 30px !important; }
.fs-32 { font-size: 32px !important; }
.fs-34 { font-size: 34px !important; }
.fs-36 { font-size: 36px !important; }
.fs-38 { font-size: 38px !important; }
.fs-40 { font-size: 40px !important; }
.fs-42 { font-size: 42px !important; }
.fs-44 { font-size: 44px !important; }
.fs-46 { font-size: 46px !important; }
.fs-48 { font-size: 48px !important; }
.fs-50 { font-size: 50px !important; }
.fs-52 { font-size: 52px !important; }
.fs-54 { font-size: 54px !important; }
.fs-56 { font-size: 56px !important; }

// Page Header
// -------------------------
.page-header {
  background-color: lighten(@body-bg, 1%);
  padding: 15px;
  margin: 0;
  border-bottom: 0;
  border-bottom: 1px solid #fff;
  box-shadow:inset 0 -1px 0 0 darken(@hr-border, 2%);

  // breadcrumb
  .breadcrumb {
    padding: 5px 0;
    background-color: inherit;
    border-radius: 0;
  }
}
// page header inside container reset
.container {
  .page-header {
    margin: -15px -15px 15px -15px;
  }
  &.container-xs {
    .page-header { margin: -5px -5px 5px -5px; }
  }
  &.container-sm {
    .page-header { margin: -10px -10px 10px -10px; }
  }
  &.container-md {
    .page-header { margin: -15px -15px 15px -15px; }
  }
  &.container-lg {
    .page-header { margin: -20px -20px 20px -20px; }
  }
}

// Font weight
// -------------------------
.fw-b { font-weight: 700; }
.fw-sb { font-weight: 600; }
.fw-n { font-weight: 400; }
.fw-t { font-weight: 300; }

.tt-u { text-transform: uppercase; }

// Contextual colors
// -------------------------
.text-muted { .text-emphasis-variant(lighten(@text-color, 25%)); }
.text-white { .text-emphasis-variants(#fff); }
.text-primary { .text-emphasis-variant(@brand-primary); }
.text-success { .text-emphasis-variants(@brand-success); }
.text-warning { .text-emphasis-variant(@brand-warning); }
.text-danger { .text-emphasis-variant(@brand-danger); }
.text-info { .text-emphasis-variant(@brand-info); }
.text-twitter { .text-emphasis-variant(@brand-twitter); }
.text-facebook { .text-emphasis-variant(@brand-facebook); }
.text-google { .text-emphasis-variant(@brand-google); }

// Blockquote
// -------------------------
blockquote {
  padding-left: 40px;
  border-width: 0px;

  > p {
    position: relative;
    font-style: italic;
    font-size: 18px !important;
  }

  > p:before {
    position: absolute;
    top: -1px;
    margin-left: -25px;
    font-family: \"FontAwesome\";
    font-size: 18px;
    content: \"\\f10d\";
    color: @gray-lighter;
  }

  > p:after {
    position: absolute;
    bottom: -1px;
    margin-left: 5px;
    font-family: \"FontAwesome\";
    font-size: 18px;
    content: \"\\f10e\";
    color: @gray-lighter;
  }
}
.blockquote-reverse {
  padding-left: 20px;
  padding-right: 40px;
  border-width: 0px;
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/type.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/type.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\app\\less\\components\\type.less");
    }
}
