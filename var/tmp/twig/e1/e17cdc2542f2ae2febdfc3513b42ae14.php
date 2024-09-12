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

/* @bundles/CoreBundle/Assets/css/app/less/components/brand.less */
class __TwigTemplate_89fd7721c15574d490d29213187eb565 extends Template
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
// Logo
// --------------------------------------------------

// mautic-brand
.mautic-brand {
  display: block;
  height: @header-height;
  padding-left: 35px;
  padding-right: 32px;
  width: 100%;
  overflow: hidden;

  &.pull-left {
    width: 75%;
  }

  &.minimized {
    background-size: contain;
  }

  // mautic logo figure
  > svg.mautic-logo-figure {
    width: @mautic-logo-figure-width;
    height: @header-height;
    .circle {
      fill: @mautic-logo-figure-circle-fill;
    }
    .m,
    .m-arrow {
      fill: @mautic-logo-figure-m-fill;
    }
  }

  // mautic logo text
  > svg.mautic-logo-text {
    height: @header-height;
    width: @mautic-logo-text-width;
    .m,.a,.u,.t,.i,.c {
      fill: @mautic-logo-text-fill
    }
  }
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/brand.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/brand.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\app\\less\\components\\brand.less");
    }
}
