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

/* @bundles/CoreBundle/Assets/css/app/less/layouts/sidebar.less */
class __TwigTemplate_8f861ccbddcf4e5c177f18a7e4fb3394 extends Template
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
// Layout Sidebar
// --------------------------------------------------

// animate `app-sidebar` on sidebar-left opened
.csstransforms3d.sidebar-open-ltr {
  .app-sidebar.sidebar-left {
    .translate3d(@sidebar-left-width, 0, 0);
  }
}
.no-csstransforms3d.sidebar-open-ltr {
  .app-sidebar.sidebar-left {
    left: 0;
  }
}
.csstransforms3d.sidebar-open-rtl {
  .app-sidebar.sidebar-right {
    .translate3d(-@sidebar-right-width, 0, 0);
  }
  .app-sidebar.sidebar-left {
    .translate3d(-@sidebar-right-width, 0, 0);
  }
}
.no-csstransforms3d.sidebar-open-rtl {
  .app-sidebar.sidebar-right {
    right: 0;
  }
  .app-sidebar.sidebar-left {
    left: -@sidebar-right-width;
  }
}

// The sidebar itself
.app-sidebar {
  position: fixed;
  z-index: @sidebar-zindex;
  top: 0;
  bottom: 0;

  // sidebar left
  // -------------------------
  &.sidebar-left {
    width: @sidebar-left-width;
    left: -@sidebar-left-width;
    background-color: @sidebar-left-bg;
    box-shadow: inset -1px 0 0 0 rgba(0, 0, 0, 0.05);
    color: fade(contrast(@sidebar-left-bg), 55%);
    .transition(all .3s ease);

    // sidebar header & footer
    .sidebar-header,
    .sidebar-footer {
      .transition(width .3s ease);
      width: @sidebar-left-width;
      background-color: @sidebar-left-header-bg;
    }

    .sidebar-header {
      > .mautic-brand > .mautic-logo-text {
        opacity: 1;
        margin-left: 3px;
        .transition(~\"opacity .3s ease .1s, margin-left 0s ease .2s\");
        .transition(~\"opacity .3s ease .1s, margin-left 0s ease .2s\");
      }
      > .mautic-brand {
        .transition(padding-left .3s ease);
      }
      &.minimized {
        padding-left: 3px;
        padding-right: 3px;
      }
    }

    // sidebar content
    .sidebar-content {
      padding-right: 1px;
    }

    // nav-sidebar color variants
    .nav-sidebar {
      > .nav {
        .nav-sidebar-variants(@sidebar-left-bg);
      }
    }

    .nav.sidebar-left-dark, .nav.sidebar-left-dark > li > a:hover {
      background: @sidebar-left-dark;
    }
  }

  // sidebar right
  // -------------------------
  &.sidebar-right {
    width: @sidebar-right-width;
    right: -@sidebar-right-width;
    background-color: @sidebar-right-bg;
    box-shadow:inset 1px 0 0 0 rgba(0,0,0,0.05);
    color: fade(contrast(@sidebar-right-bg), 55%);
    .transition(all .3s ease);

    // sidebar header & footer
    .sidebar-header,
    .sidebar-footer {
      width: @sidebar-right-width;
      background-color: @sidebar-right-header-bg;
    }

    // sidebar content
    .sidebar-content {
      padding-left: 1px;
      top: @header-height;
    }

    // nav-sidebar color variants
    .nav-sidebar {
      > .nav {
        .nav-sidebar-variants(@sidebar-right-bg);
      }
    }
  }

  // sidebar header
  .sidebar-header {
    z-index: 100;
    height: @header-height;
    padding-left: 15px;
    padding-right: 15px;

    // sidebar header fixed
    .header-fixed & {
      position: absolute;
      top: 0;
      box-shadow: 0 1px 0 0 rgba(0,0,0,0.06);
      //box-shadow: 0 5px 5px -5px rgba(0,0,0,0.15), 0 1px 0 rgba(0,0,0,0.03);
    }

    // add top space to `sidebar-content` if header is present
    ~ .sidebar-content {
      top: @header-height;
    }
  }

  // sidebar footer
  .sidebar-footer {
    position: absolute;
    bottom: 0;
    z-index: 9;
    height: @footer-height;
    padding-left: 15px;
    padding-right: 15px;
    box-shadow: 0 -1px 0 0 rgba(0,0,0,0.07);

    .form-control {
      color: darken(#fff, 40%);
    }

    // add bottom space to `sidebar-content` if footer is present
    ~ .sidebar-content {
      bottom: @footer-height;
    }
  }

  // sidebar content
  .sidebar-content {
    position: absolute;
    top: 0;
    bottom: 0;
    width: 100%;

    // nav tab
    .nav.nav-tabs {
      border-bottom: 1px solid darken(@sidebar-right-bg, 1%);
      box-shadow: none;
      > li {
        margin-bottom: 0;
        > a {
          border-width: 0;
          border-radius: 0;
          margin-right: 0;
          padding-top: 12px;
          padding-bottom: 12px;
          color: fade(contrast(@sidebar-right-bg), 45%);
          background-color: transparent;
          &:hover,
          &:focus {
            color: fade(contrast(@sidebar-right-bg), 85%);
            background-color: transparent;
          }
        }
        &.active > a {
          overflow: visible;
          &,
          &:hover,
          &:focus {
            color: fade(contrast(@sidebar-right-bg), 85%);
            background-color: rgba(0,0,0,0.06);
          }
          &:after {
            top: auto;
            bottom: -1px;
            height: 1px;
          }
        }
      }
    }
  }

  // sidebar nav
  // -------------------------
  .nav-sidebar {
    > .nav {
      > li {
        > a {
          overflow: hidden;
          padding: 12px 20px;
          .transition(all .15s ease);
          .text {
            .transition(~\"opacity .3s ease .1s, margin-left 0s ease .2s\");
            opacity: 1;
            margin-left: 0;
            position: relative;
            top: -1px;
            display: block;
            //font-weight: 600;
          }
          .icon {
            font-weight: normal;
            font-size: 14px;
            min-width: 26px;
            display: block;
          }
          .arrow {
            .transition(~\"opacity .3s ease .1s, margin-left 0s ease .2s\");
            opacity: 1;
            margin-left: 0;
            font-family: 'FontAwesome';
            position: relative;
            top: 1px;
            display: block;
            &:after {
              content: \"\\f0da\";
            }
          }
        }
        // Open and active state
        &.open,
        &.active {
          > a {
            .arrow {
              &:after {
                content: \"\\f0d7\";
              }
            }
            .icon {
              color: @brand-warning;
            }
          }
        }

        // nav-submenu style
        > .nav-submenu {
          position: relative;
          padding-left: 50px;

          // the line
          &:after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 26px;
            z-index: 1;
            width: 1px;
          }

          > li {
            position: relative;
            list-style: none;

            // the dot
            &:after {
              content: '';
              position: absolute;
              z-index: 2;
              top: 11px;
              left: -27px;
              width: 7px;
              height: 7px;
              border-radius: 7px;
            }
            &.active {
              // the dot
              &:after {
                background-color: @brand-warning !important;
              }
            }

            > a {
              display: block;
              padding: 5px 20px 5px 0px;
              .transition(all .15s ease);
            }
          }
        }
      }

      // nav-heading
      .nav-heading {
        text-transform: uppercase;
        padding: 10px 18px;
        &:first-child {
          padding-top: 20px;
        }
      }
    }

    // Sidebar minimizer
    // -------------------------
    .sidebar-minimizer {
      > .direction {
        &:after {
          font-family: 'remixicon';
          font-size: 18px;
          content: '\\EA64';
        }
      }
      &.active {
        .direction {
          &:after {
            content: '\\EA6E';
          }
        }
      }
    }
  }
}

// breakpoint screen-sm and up
// -------------------------
@media (min-width: @screen-sm-min) {
  // sidebar
  // -------------------------
  .app-sidebar {
    // sidebar left
    // -------------------------
    &.sidebar-left {
      left: 0;

      // reset app-header
      ~ #app-header.navbar {
        left: @sidebar-left-width;
      }
      // reset app-content
      ~ #app-content {
        margin-left: @sidebar-left-width;

        // sidebar is on collapse state
        .sidebar-left-collapse & {
          margin-left: @sidebar-left-collapse-width;
        }
      }
      // reset app-footer
      ~ #app-footer {
        margin-left: @sidebar-left-width;

        // reset app-footer on sidebar collapse
        .sidebar-left-collapse & {
          margin-left: @sidebar-left-collapse-width;
        }
      }

      // minimized state
      .sidebar-minimized & {
        width: @sidebar-left-collapse-width;

        // reset `nav-sidebar` style
        .nav-sidebar {
          margin-top: 10px;
          > .nav > li {
            > a {
              padding-top: 12px;
              padding-bottom: 12px;
            }
            &.nav-heading,
            > a .arrow,
            > a .badge,
            > a .text,
            > a .label {
              /* override default margin-left transition as any delay throws Chrome off */
              .transition(none);
              /* hide everything but the icon; using margin and opacity since display can't be transitioned */
              margin-left: -500px;
              opacity: 0;
            }

            > a .icon {
              min-width: 0;
              width: 100%;
              /* text-align: center; */
            }
            > .nav-submenu {
              display: none;
              height: auto !important;
              position: absolute;
              z-index: -1;
              top: 0;
              padding-top: 10px;
              padding-bottom: 10px;
              padding-left: 30px;
              min-width: 180px;
              border-top-right-radius: @border-radius-base;
              border-bottom-right-radius: @border-radius-base;

              // the line
              &:after {
                left: 16px;
              }

              // the dot
              > li:after {
                left: -17px;
              }
            }

            // Open and hover state
            &.hover {
              // Open `nav-submenu` if in `hover` state
              > .nav-submenu {
                display: block;
                left: @sidebar-left-collapse-width;
              }
            }
          }
        }

        // reset sidebar-content
        .sidebar-content {
          > .scroll-wrapper,
          > .scroll-wrapper > .scroll-content {
            overflow: visible !important;
          }
          > .scroll-wrapper > .scroll-bar {
            display: none !important;
          }
        }

        // reset sidebar-header
        .sidebar-header {
          /* padding: 0; */
          width: @sidebar-left-collapse-width;
          > .mautic-brand > .mautic-logo-text {
            opacity: 0;
            margin-left: -500px;
            /* override default margin-left transition as any delay throws Chrome off */
            .transition(none);
          }
          > .mautic-brand {
            padding: 0;
          }
        }
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
        return "@bundles/CoreBundle/Assets/css/app/less/layouts/sidebar.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/layouts/sidebar.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\app\\less\\layouts\\sidebar.less");
    }
}
