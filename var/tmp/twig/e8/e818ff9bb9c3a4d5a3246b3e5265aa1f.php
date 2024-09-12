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

/* @bundles/CoreBundle/Assets/css/app/less/components/alerts.less */
class __TwigTemplate_84ddc4674d81b3cb3b601385de623843 extends Template
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
// Alerts
// --------------------------------------------------

// Dismissible alerts
//
// Expand the right padding and account for the close button's positioning.

.alert-dismissible, // The misspelled .alert-dismissible was deprecated in 3.2.0.
.alert-dismissible {
  // Adjust close link position
  .close {
    top: -1px;
  }
}

.alert-primary {
  background: lighten(@mautic-primary, 30%);
}

.alert-secondary {
  background: lighten(@mautic-secondary, 30%);
}

.alert-tertiary {
  background: lighten(@mautic-tertiary, 30%);
}

.alert-growl {
  background: rgba(0, 0, 0, .8);
  color: #FFFFFF;
  border-radius: 0;
  border-left: 4px solid @mautic-primary;
  border-top: none;
  border-right: none;
  border-bottom: none;

  a {
    font-weight: 700;
    color: lighten(@mautic-primary, 10%);
    &:hover {
      color: lighten(@mautic-primary, 30%);
    }
  }

  &--warning {
    border-left-color: @brand-warning;

    a {
      color: @brand-warning;
      &:hover {
        color: lighten(@brand-warning, 20%);
      }
    }
  }

  &--error {
    border-left-color: @brand-danger;

    a {
      color: @brand-danger;
      &:hover {
        color: lighten(@brand-danger, 20%);
      }
    }
  }
}

.alert-growl-container {
  position: absolute;
  top: 20px;
  right: 20px;
  z-index: 100000;

  &.alert-offset {
    top: 50px;
  }

  .alert-growl {
    margin-bottom: 5px;
  }
}

.alert-growl-buttons {
  margin-top: 10px;

  .btn + .btn {
    margin-left: 5px;
  }
}

.alert-growl .close {
  font-size: (@font-size-base);
  color: #fff;
  margin-left: 10px;
}

.alert .close {
  font-size: (@font-size-base);
  margin-left: 10px;
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/alerts.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/alerts.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\app\\less\\components\\alerts.less");
    }
}
