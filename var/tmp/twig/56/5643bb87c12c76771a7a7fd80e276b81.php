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

/* @bundles/CoreBundle/Assets/css/app/less/components/scrollbar.less */
class __TwigTemplate_b941885e37b5b5ef7b3c0998edaea9b9 extends Template
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
// Scrollbar
// --------------------------------------------------

// Scrollbar on devices with touch support
.touchevents {
  .scroll-content {
    height: 100%;
    overflow-y: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    -webkit-overflow-scrolling: touch;
  }
}

// Scrollbar on devices with no touch support
.no-touchevents {
  .scroll-wrapper,
  .scroll-wrapper > .scroll-content {
    height: 100%;
  }

  .scroll-wrapper {
    // scroll-rail
    > .scroll-rail {
      display: none !important;
    }

    // scrollbar
    > .scroll-bar {
      //opacity: 0.8 !important;
      background-color: gray !important;
      right: 3px !important;
    }
  }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/scrollbar.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/scrollbar.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\app\\less\\components\\scrollbar.less");
    }
}
