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

/* @bundles/CoreBundle/Assets/css/app/less/components/grid.less */
class __TwigTemplate_656c38c8346a3a59e5b59270c75e5897 extends Template
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
// Grid system
// --------------------------------------------------


// Container widths
//
// Set the container width, and override it for fixed navbars in media queries.

.container {
  .container-fixed();

  @media (min-width: @screen-sm-min) {
    width: @container-sm;
  }
  @media (min-width: @screen-md-min) {
    width: @container-md;
  }
  @media (min-width: @screen-lg-min) {
    width: @container-lg;
  }
}


// Fluid container
//
// Utilizes the mixin meant for fixed width containers, but without any defined
// width for fluid, full width layouts.

.container-fluid {
  .container-fixed();
}


// Row
//
// Rows contain and clear the floats of your columns.

.row {
  display: flex;
  flex-wrap: wrap;
  .make-row();
}

.row > * {
  box-sizing: border-box;
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
}

.row-no-gutters {
  margin-right: 0;
  margin-left: 0;

  [class*=\"col-\"] {
    padding-right: 0;
    padding-left: 0;
  }
}


// Columns
//

[class*=\"col-\"] {
  display: flex;
  flex-direction: column;

  label {
    align-self: start;
  }
}
// Common styles for small and large grid columns

.make-grid-columns();


// Extra small grid
//
// Columns, offsets, pushes, and pulls for extra small devices like
// smartphones.

.make-grid(xs);


// Small grid
//
// Columns, offsets, pushes, and pulls for the small device range, from phones
// to tablets.

@media (min-width: @screen-sm-min) {
  .make-grid(sm);
}


// Medium grid
//
// Columns, offsets, pushes, and pulls for the desktop device range.

@media (min-width: @screen-md-min) {
  .make-grid(md);
}


// Large grid
//
// Columns, offsets, pushes, and pulls for the large desktop device range.

@media (min-width: @screen-lg-min) {
  .make-grid(lg);
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/grid.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/grid.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\app\\less\\components\\grid.less");
    }
}
