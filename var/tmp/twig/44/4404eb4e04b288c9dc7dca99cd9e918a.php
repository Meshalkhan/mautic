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

/* @MauticFocus/Builder/Bar/collapser.less.twig */
class __TwigTemplate_a781fabacc68d5ce2c835d83e91ad357 extends Template
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
        echo ".mf-bar-collapser {
    position: absolute;
    right: 3px;
    width: 24px;
    height: 24px;
    text-align: center;
    z-index: 21000;

    &.mf-bar-collapser-top {
        top: 0;
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px;

        .mf-bar-collapser-icon svg {
            margin: 2px 0 0 0;
        }
    }

    &.mf-bar-collapser-bottom {
        bottom: 0;
        border-top-right-radius: 4px;
        border-top-left-radius: 4px;

        .mf-bar-collapser-icon svg {
            margin: -2px 0 0 0;
        }
    }

    &.mf-bar-collapser-large {
        width: 40px;
        height: 40px;

        &.mf-bar-collapser-top .mf-bar-collapser-icon svg {
            margin: 4px 0 0 0;
        }

        &.mf-bar-collapser-bottom .mf-bar-collapser-icon svg {
            margin: -4px 0 0 0;
        }
    }

    &.mf-bar-collapser-sticky {
        position: fixed;
    }

    &.mf-bar-collapser-top, &.mf-bar-collapser-bottom {
        &.mf-bar-collapsed .mf-bar-collapser-icon svg {
            margin: 0;
        }
    }

    a.mf-bar-collapser-icon {
        position: relative;
        display: inline-block;

        &:after {
            content: \"\";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFocus/Builder/Bar/collapser.less.twig";
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
        return new Source("", "@MauticFocus/Builder/Bar/collapser.less.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Builder\\Bar\\collapser.less.twig");
    }
}
