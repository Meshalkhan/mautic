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

/* @bundles/CoreBundle/Assets/css/app/less/components/panels.less */
class __TwigTemplate_88703cc44a07d55fe8eb0dbc2b33a135 extends Template
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
// Panels
// --------------------------------------------------

.panel {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  flex-grow: 1;
  border: 1px solid @panel-default-border;
  .box-shadow(0px 1px 1px darken(@body-bg, 2%));
  //background-clip: padding-box;
}

// Panel heading
// ------------------------
.panel-heading {
  padding: 0 15px;
  .clearfix();

  // Panel title
  .panel-title {
    padding: ((33 - @font-size-base) / 2) 0;
    display: table-cell;
    vertical-align: middle;
    //font-size: inherit;
    font-weight: 600;
  }

  // Panel toolbar
  .panel-toolbar {
    display: table-cell;
    width: 1%;
    vertical-align: middle;
  }
}

// Panel body
.panel-body {
  flex-grow: 1;
}

// Panel group
// ------------------------
.panel-group {
  .panel {
    .box-shadow(none);
  }
}

// Panel footer
.panel-footer {
  overflow: hidden;
  background-color: #fbfbfb;
}

.panel-toolbar-wrapper {
  display: block;
  background-color: #fbfbfb;
  border-bottom: 1px solid #cfd9db;
  padding: 0px 15px;
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/panels.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/panels.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\app\\less\\components\\panels.less");
    }
}
