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

/* @bundles/CoreBundle/Assets/css/app/less/layouts/base.less */
class __TwigTemplate_742d8a27ad5cb5afb031d3260b59479a extends Template
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
// Base layout
// --------------------------------------------------

// html + body
html,
body {
  width: 100%;
  height: 100%;
}
body {
  overflow-y: scroll;

  // Wrapper
  > #app-wrapper {
    //overflow-x: hidden;
    overflow: hidden;
    // Keep the screen from bouncing with and without scrollbars
    position: relative;
    height: auto;
    min-height: 100%;
    width: 100%;
  }
}

// Sidebar open class
.sidebar-left-open {
  overflow: hidden;

  body {
    > section#app-wrapper {
      overflow-x: hidden;
    }
  }
}

// breakpoint screen-sm and up
// -------------------------
@media (min-width: @screen-sm-min) {
  body {
    overflow-x: hidden;
  }
}

@media (min-width: @container-desktop) {
  .modal {
   overflow-y: auto;
  }

  .modal-open {
   overflow: auto;
  }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/layouts/base.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/layouts/base.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\app\\less\\layouts\\base.less");
    }
}
