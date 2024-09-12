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

/* @bundles/CoreBundle/Assets/css/app/less/components/list-group.less */
class __TwigTemplate_49f4132e3a7c60f99300f51255e5379c extends Template
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
        echo "//
// List groups
// --------------------------------------------------

.list-group-item {
  > a {
    position: relative;
    z-index: 1;
    display: block;
  }
}

// Linked list items
//
// Use anchor elements instead of `li`s or `div`s to create linked list items.
// Includes an extra `.active` modifier class for showing selected items.

a.list-group-item {
  // Hover state
  &:hover,
  &:focus {
    z-index: 2;
  }
}

label.list-group-item {
  color: @list-group-link-color;

  .list-group-item-heading {
    color: @list-group-link-heading-color;
  }

  // Hover state
  &:hover,
  &:focus {
    text-decoration: none;
    color: @list-group-link-hover-color;
    background-color: @list-group-hover-bg;
  }
}

.ds-list-group {
  counter-reset: item;
  list-style-type: none;
  padding-inline-start: 35px;

  > li {
    @list-padding: 10px;
    counter-increment: item;
    position: relative;
    padding: @list-padding 0px;

    &:not(:first-child) {
      border-top: 1px solid var(--border-subtle);
    }

    &:before {
      @marker-size: 16px;
      position: absolute;
      background: var(--layer);
      border-radius: 50%;
      left: -35px;
      width: @marker-size;
      height: @marker-size;
      text-align: center;
      line-height: @marker-size;
      font-size: calc(@marker-size - 5px);
      color: var(--icon-secondary);
      transition: var(--all);
      top: 11.8px;
      vertical-align: middle;
    }

    &:hover:before {
      transform: scale(1.2);
    }
  }
}

.ds-list-alphabet {
  > li:before {
    content: counter(item, upper-alpha);
  }
}

.ds-list-check {
  > li:before {
    content: \"\\EB7B\";
    font-family: 'remixicon';
  }
}

.ds-list-none {
  padding-inline-start: 0;
}

.ds-list-bullet {
  list-style-type: disc;
  padding-inline-start: 18px;
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/list-group.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/list-group.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\app\\less\\components\\list-group.less");
    }
}
