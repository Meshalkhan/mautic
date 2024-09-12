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

/* @bundles/CoreBundle/Assets/css/libraries/other/typeahead.less */
class __TwigTemplate_1cff731206c9a2619cc05aac80c08f1e extends Template
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
        yield "/*
 * typehead.js-bootstrap3.less
 * @version 0.2.3
 * https://github.com/hyspace/typeahead.js-bootstrap3.less
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

//custom mixin for .form-control-validation
.typeahead-form-control(@border-color: #ccc;) {
  border-color: @border-color;
  .box-shadow(inset 0 1px 1px rgba(0,0,0,.075)); // Redeclare so transitions work
  &:focus {
    border-color: darken(@border-color, 10%);
    @shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 6px lighten(@border-color, 20%);
    .box-shadow(@shadow);
  }
}

//main styles for control
.tt-input,
.tt-hint {
  .twitter-typeahead &{
    //validation states
    .has-warning &{
      .typeahead-form-control(@state-warning-text);
    }
    .has-error &{
      .typeahead-form-control(@state-danger-text);
    }
    .has-success &{
      .typeahead-form-control(@state-success-text);
    }
  }

  //border
  .input-group .twitter-typeahead:first-child &{
    .border-left-radius(@border-radius-base);
  }
  .input-group .twitter-typeahead:last-child &{
    .border-right-radius(@border-radius-base);
  }

  //sizing - small:size and border
  .input-group.input-group-sm .twitter-typeahead &{
    .input-size(@input-height-small; @padding-small-vertical; @padding-small-horizontal; @font-size-small; @line-height-small; @border-radius-small);
  }
  .input-group.input-group-sm .twitter-typeahead:not(:first-child):not(:last-child) &{
    border-radius: 0;
  }
  .input-group.input-group-sm .twitter-typeahead:first-child &{
    .border-left-radius(@border-radius-small);
    .border-right-radius(0);
  }
  .input-group.input-group-sm .twitter-typeahead:last-child &{
    .border-left-radius(0);
    .border-right-radius(@border-radius-small);
  }

  //sizing - large:size and border
  .input-group.input-group-lg .twitter-typeahead &{
    .input-size(@input-height-large; @padding-large-vertical; @padding-large-horizontal; @font-size-large; @line-height-large; @border-radius-large);
  }
  .input-group.input-group-lg .twitter-typeahead:not(:first-child):not(:last-child) &{
    border-radius: 0;
  }
  .input-group.input-group-lg .twitter-typeahead:first-child &{
    .border-left-radius(@border-radius-large);
    .border-right-radius(0);
  }
  .input-group.input-group-lg .twitter-typeahead:last-child &{
    .border-left-radius(0);
    .border-right-radius(@border-radius-large);
  }
}

//for wrapper
.twitter-typeahead {
  width: 100%;
  //overwrite `display:inline-block` style
  display: table-cell!important;
  float: left;
}

//particular style for each other
.twitter-typeahead .tt-hint {
  color: @text-muted;//color - hint
}
.twitter-typeahead .tt-input {
  z-index: 2;
  //disabled status
  //overwrite inline styles of .tt-query
  &[disabled],
  &[readonly],
  fieldset[disabled] & {
    cursor: not-allowed;
    //overwirte inline style
    background-color: @input-bg-disabled!important;
  }
}

//dropdown styles
.tt-menu {
  //dropdown menu
  position: absolute;
  top: 100%;
  left: 0;
  z-index: @zindex-dropdown;
  min-width: 160px;
  width: 100%;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: @font-size-base;
  background-color: @dropdown-bg;
  border: 1px solid @dropdown-fallback-border;
  border: 1px solid @dropdown-border;
  border-radius: @border-radius-base;
  .box-shadow(0 6px 12px rgba(0,0,0,.175));
  background-clip: padding-box;
  *border-right-width: 2px;
  *border-bottom-width: 2px;

  .tt-suggestion {
    //item
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: @line-height-base;
    color: @dropdown-link-color;
    white-space: nowrap;

    &.tt-cursor {
      //item selected
      text-decoration: none;
      outline: 0;
      background-color: @dropdown-link-hover-bg;
      color: @dropdown-link-hover-color;
      a {
        //link in item selected
        color: @dropdown-link-hover-color;
      }
    }
    p {
      margin: 0;
    }
  }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/other/typeahead.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/other/typeahead.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\libraries\\other\\typeahead.less");
    }
}
