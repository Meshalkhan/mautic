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

/* @bundles/CoreBundle/Assets/css/app/less/components/maps.less */
class __TwigTemplate_619011047977604923e943324a5c85f1 extends Template
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
        echo ".map-options {
  margin-left: 10px;
  margin-bottom: 10px;

  h5 {
    color: @text-color;
    font-size: 13px;
  }

  &__cointainer {
    display: flex;
    flex-direction: row;
  }
  &__item.active,
  &__item.active:hover {
    color: #fff;
    background-color: #3a7e6f;
  }
  &__item:focus,
  &__item.focus,
  &__item:active,
  &__item.active.focus {
    color: #fff;
    background-color: #3a7e6f;
  }
}

.jvectormap-zoomin, .jvectormap-zoomout {
  width:  30px;
  height: 30px;
  line-height: 30px;
  left: 10px;
  padding: 0;
  background-color: #5bc0de;
  border-radius: 4px;
  box-shadow: 0 -2px 4px 0 rgba(0,0,0,0.04), 0 2px 4px 0 rgba(0,0,0,0.04), 0 6px 12px 0 rgba(0,0,0,0.16);
  font-size: 20px;
}

.jvectormap-zoomin:hover, .jvectormap-zoomout:hover {
  background-color: darken(#5bc0de, 20%);
}

.jvectormap-zoomin {
  top: 16px;
}

.jvectormap-zoomout {
  top: 52px;
}

.jvectormap-tip {
  padding: 8px;
  font-size: 14px;
  border-radius: 4px;
  pointer-events: none;
}

.jvectormap-legend-cnt {
  right: auto;
  left: 0;
}

.jvectormap-legend-cnt-h .jvectormap-legend {
  margin: 0 0 16px 10px;
  padding: 8px;
  &-title {
    font-weight: normal;
  }
}

.jvectormap-legend .jvectormap-legend-inner {
  display: none;
}

.map-options__item.btn {
  &,
  &:active,
  &.focus,
  &:focus,
  &.active,
  &:active:focus,
  &.active:focus {
    outline: 0 !important;
  }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/maps.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/maps.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\app\\less\\components\\maps.less");
    }
}
