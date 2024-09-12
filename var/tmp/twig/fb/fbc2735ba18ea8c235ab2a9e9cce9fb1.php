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

/* @bundles/CoreBundle/Assets/css/app/less/layouts/header.less */
class __TwigTemplate_fcf689abc3ca764d29e4375b304672d2 extends Template
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
// Layout Header
// --------------------------------------------------

// animate `app-header` on sidebar-left opened
.csstransforms3d.sidebar-open-ltr {
  #app-header.navbar {
    .translate3d(@sidebar-left-width, 0, 0);
  }
}
.no-csstransforms3d.sidebar-open-ltr {
  #app-header.navbar {
    left: @sidebar-left-width;
  }
}
.csstransforms3d.sidebar-open-rtl {
  #app-header.navbar {
    .translate3d(-@sidebar-right-width, 0, 0);
  }
}
.no-csstransforms3d.sidebar-open-rtl {
  #app-header.navbar {
    left: -@sidebar-right-width;
    right: @sidebar-right-width;
  }
}

// navbar as header
#app-header.navbar {
  .transition(all .3s ease);

  background-color: @header-bg;
  float: left;
  z-index: @header-zindex;
  min-height: @header-height;
  border-width: 0;
  border-radius: 0;
  margin-bottom: 0;
  .box-shadow(0 1px 0 rgba(0,0,0,0.05));

  // fixed header
  .header-fixed & {
    position: fixed;
    right: 0;
    left: 0;
    top: 0;
    //box-shadow: 0 2px 2px rgba(0,0,0,0.05), 0 1px 0 rgba(0,0,0,0.05);
    box-shadow: 0 5px 5px -5px rgba(0,0,0,0.15), 0 1px 0 rgba(0,0,0,0.03);

    // Add top padding to `app-content` if header is fixed
    ~ #app-content {
      > .content-body {
        padding-top: @header-height;
      }
    }
  }

  // reset bootstrap `navbar-nav` style inside `navbar-nocollapse`
  .navbar-nocollapse {
    .clearfix();

    // navbar-header
    // -------------------------
    .navbar-header {
      height: @header-height;

      // navbar-toggle
      .navbar-toggle {
        display: inline-block;
        float: left;
        margin: 0;
        border-width: 0;
        padding: ((@header-height - 12) / 2) 15px;

        .icon-bar {
          margin-left: auto;
          margin-right: auto;
          background-color: fade(contrast(@header-bg), 60%);
          height: 2px;
          width: 18px;
          border-radius: 0;
          + .icon-bar {
            margin-top: 3px;
          }
        }
      }
    }

    // navbar-nav
    // -------------------------
    .navbar-nav {
      //position: relative;
      float: left;
      margin: 0;

      > li {
        float: left;

        // `navbar-nav` anchor
        > a {
          color: fade(contrast(@header-bg), 60%);
          line-height: @header-height;
          padding-top: 0;
          padding-bottom: 0;
          .clearfix();

          // lineicon reset
          .sli {
            top: 1px;
          }

          // avatar
          // -------------------------
          > img,
          > .img-wrapper {
            --width: 28px;
            border-radius: 100%;
            width: var(--width);
            height: var(--width);
            display: inline-block;
            margin-top: -8px;
            margin-bottom: -8px;
          }

          &.user {
              .info {
                transform: translateY(-6%);
                position: relative;
                transition: transform .3s ease;

                > .position {
                  opacity: 0;
                }
              }

            &:hover {
              .info {
                transform: translateY(-20%);

                @keyframes slideDown {
                  from {
                    transform: translateY(-10px);
                  }
                  to {
                    transform: translateY(-5px);
                  }
                }
                      
                > .position {
                  display: flex;
                  animation: fadeIn 0.5s ease-in-out forwards, slideDown 0.5s ease-in-out forwards;
                }
              }
          }

            > .text {
              line-height: 14px;
            }
          }

          // badge & label
          // -------------------------
          > .badge,
          > .label {
            position: absolute;
            z-index: 1;
            top: ((@header-height / 2) - 18);
            right: 8px;
            font-size: 10px;
            padding: 0 4px;
            line-height: 16px;
            height: 16px;
            min-width: 16px;
            border-radius: 16px;
            .box-shadow(0 0 0 2px @header-bg);

            // aligment
            // -------------------------
            &.pull-right {
              left: auto;
              right: 4px;
            }
          }

          // bullet
          // -------------------------
          > .bullet {
            position: absolute;
            z-index: 1;
            top: ((@header-height / 2) - 12);
            right: 15px;
            .box-shadow(0 0 0 2px @header-bg);

            // aligment
            // -------------------------
            &.pull-right {
              left: auto;
              right: 4px;
            }
          }

          // interaction
          // -------------------------
          &:hover {
            color: fade(contrast(@header-bg), 70%);
            background-color: transparent;
          }
          &:active,
          &:focus,
          &.active {
            color: fade(contrast(@header-bg), 70%);
            background-color: darken(@header-bg, 4%);
            outline: 0;
          }
        }
      }

      // dropdown custom
      // -------------------------
      .dropdown-custom {
        position: static;

        // dropdown
        // -------------------------
        .dropdown-menu {
          width: 320px;
          overflow: hidden;

          // reset custom-dropdown to strecth on viewport <= 480
          // -------------------------
          @media (max-width: 480px) {
            width: auto !important;
            left: 15px !important;
            right: 15px !important;
          }
        }
      }

      // open state
      .open {
        // reset default bootstrap `navbar-nav` `dropdown-menu`
        .dropdown-menu {
          position: absolute;
          top: 100%;
          margin-top: 5px;
          left: 15px;
          float: left;
          background-color: @dropdown-bg;
          border: 1px solid @dropdown-fallback-border; // IE8 fallback
          border: 1px solid @dropdown-border;
          .box-shadow(0 3px 6px rgba(0,0,0,.06));
        }

        // `navbar-nav` anchor
        > a {
          color: fade(contrast(@header-bg), 70%);
          background-color: darken(@header-bg, 4%);

          // interaction
          &:hover,
          &:focus {
            color: fade(contrast(@header-bg), 70%);
            background-color: darken(@header-bg, 4%);
          }

          // badge & bullet
          // -------------------------
          > .badge,
          > .bullet,
          > .label {
            .box-shadow(0 0 0 2px darken(@header-bg, 4%));
          }
        }
      }
    }

    // navbar-form
    // -------------------------
    .navbar-form {
      background-color: @header-bg;
      padding-top: 0;
      padding-bottom: 0;
      margin: 0;

      // `navbar-form` mobile style
      position: absolute;
      z-index: @zindex-dropdown;
      top: -100%;
      left: 0;
      right: 0;
      border-width: 0;
      .box-shadow(none);
      .transition(top .3s ease);

      // open state
      &.open {
        top: 0;
        .transition(top .3s ease);
      }

      // `form-group` reset
      .form-group,
      .input-group {
        margin-top: ((@header-height - @input-height-base) / 2);
        margin-bottom: ((@header-height - @input-height-base) / 2);

        // reset fontawesome color
        .fa { color: fade(contrast(@header-bg), 60%); }
      }

      // `form-control` reset
      .form-control {
        background-color: fade(contrast(@header-bg), 8%);
        border-color: transparent;
        .placeholder(fade(contrast(@header-bg), 50%));
      }
    }

    // navbar alignment
    // -------------------------
    .navbar-left {
      float: left !important;

      // dropdown alignment
      .open .dropdown-menu {
        left: 0;
        right: auto;
      }
      // dropdown-custom alignment
      .open.dropdown-custom .dropdown-menu {
        left: 15px;
        right: auto;
      }
    }
    .navbar-right {
      float: right !important;

      .open > a:after {
        z-index: 1003;
        bottom: -7px;
        margin-left: -8px;
        border-width: 0 8px 8px;
        border-color: transparent transparent #fff;
        position: absolute;
        content: \"\";
        left: 50%;
        width: 0;
        height: 0;
        border-style: solid;
      }

      .open > a:before {
        z-index: 1002;
        bottom: -6px;
        margin-left: -9px;
        border-width: 0 9px 9px;
        border-color: transparent transparent @dropdown-border;
        position: absolute;
        content: \"\";
        left: 50%;
        width: 0;
        height: 0;
        border-style: solid;
      }

      // dropdown alignment
      .open .dropdown-menu {
        left: auto;
        right: 0;
      }
      // dropdown-custom alignment
      .open.dropdown-custom .dropdown-menu {
        left: auto;
        right: 15px;
      }
    }
  }
}

// breakpoint screen-sm and up
// -------------------------
@media (min-width: @screen-sm-min) {
  #app-header.navbar {
    // fixed header
    .header-fixed & {
      // Add top padding to `app-sidebar` if header is fixed
      ~ .app-sidebar {
        padding-top: @header-height;
      }
    }

    // minimized state
    .sidebar-minimized & {
      left: @sidebar-left-collapse-width !important;
    }

    .navbar-nocollapse {
      // navbar-form
      // -------------------------
      .navbar-form {
        // `navbar-form` non mobile style
        position: static;
        float: left;
      }
    }
  }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/layouts/header.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/layouts/header.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\app\\less\\layouts\\header.less");
    }
}
