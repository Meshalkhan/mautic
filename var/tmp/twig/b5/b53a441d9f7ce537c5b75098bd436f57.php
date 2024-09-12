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

/* @bundles/CoreBundle/Assets/css/app/less/components/navs.less */
class __TwigTemplate_066b79e507ba6e1b393a39431cf96077 extends Template
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
// Navs
// --------------------------------------------------

// Base class
// --------------------------------------------------

.nav {
  > li {
    > a {
      font-weight: normal;
      //color: @text-color;
      // nav anchor `text` and `icon` behavior
      .text,
      .icon,
      .arrow {
        line-height: @line-height-computed;
      }
    }
  }

  .open {
    > a, > a:hover, > a:focus {
      background-color: transparent;
    }
  }

  // nav divider
  .nav-divider {
    background-color: rgba(0,0,0,0.05);
  }

  // nav-heading
  .nav-heading {
    font-size: 12px;
    font-weight: 600;
    padding: @nav-link-padding;
    padding-bottom: 5px;
    color: @gray-light;
  }
}

// Tabs
// -------------------------
.nav-tabs {
  border-top-right-radius: @nav-pills-border-radius;
  border-top-left-radius: @nav-pills-border-radius;
  //background-color: @body-bg;
  display: flex;
  flex-wrap: wrap;
  text-wrap: nowrap;

  > li {
    > a {
      line-height: 20px;
    }

    // Active state
    &.active > a {
      overflow: hidden;
      border-top-color: transparent;
      &:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background-color: @nav-pills-active-link-hover-bg;
      }
    }
  }
}

@media (min-width: @screen-lg-min) {
  .nav-tabs {
    flex-wrap: nowrap;
  }
}

// Tabs content
// -------------------------
/*
.tab-content {
  > .tab-pane {
    border: 1px solid @nav-tabs-active-link-hover-border-color;
    border-top-width: 0;
    border-bottom-right-radius: @nav-pills-border-radius;
    border-bottom-left-radius: @nav-pills-border-radius;
  }
}
*/

.stats-menu__content.tab-content {
  display: flex;
  justify-content: center;
  align-items: center;
}

.stats-menu__content.tab-content > .tab-pane {
  width: 100%;
}
// Pills
// -------------------------
.nav-pills {
  > li {
    + li {
      margin-left: 5px;
    }
  }
}

.stats-menu {
  display: flex;
  justify-content: space-between;
  flex-wrap: nowrap;

  && .date-range {
    padding: 5px;
    background-color: #ffffff;
    border-top-left-radius: 3px;
  }

  && + div {
    min-height: 410px;
  }
}


";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/navs.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/navs.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\app\\less\\components\\navs.less");
    }
}
