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

/* @bundles/CoreBundle/Assets/css/app/less/components/colors.less */
class __TwigTemplate_1bfc96f96d6ec80d384126aa21c6efc5 extends Template
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
// Colors
// --------------------------------------------------

.bg-white {
  .bg-color(#fff, @text-color);
}
.bg-auto {
  .bg-color(@body-bg, @text-color);
}
.bg-transparent {
  background-color: transparent !important;
  color: @text-color;
}

// Brand primary
.bg-primary {
  .bg-color(@brand-primary, #fff);
}

// Brand success
.bg-success {
  .bg-color(@brand-success, #fff);
}

// Brand info
.bg-info {
  .bg-color(@brand-info, #fff);
}

// Brand warning
.bg-warning {
  .bg-color(@brand-warning, #fff);
}

// Brand danger
.bg-danger {
  .bg-color(@brand-danger, #fff);
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/colors.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/colors.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\app\\less\\components\\colors.less");
    }
}
