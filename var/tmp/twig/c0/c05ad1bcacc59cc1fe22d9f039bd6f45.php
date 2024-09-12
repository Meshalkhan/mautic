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

/* @MauticFocus/Builder/Bar/style.less.twig */
class __TwigTemplate_1b4e2b27795285729a658e79419643d3 extends Template
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
        echo ".mf-bar {
    width: 100%;
    position: fixed;
    left: 0;
    right: 0;
    display: table;
    padding-left: 5px;
    padding-right: 5px;
    z-index: 20000;

    &.mf-bar-top {
        top: 0;
    }

    &.mf-bar-bottom {
        bottom: 0;
    }

    .mf-bar-collapse {
        width: 100px;
        display: table-cell;
        vertical-align: middle;
        line-height: 13px;
    }

    .mf-content {
        display: table-cell;
        vertical-align: middle;
        text-align: center;

        .mf-link {
            margin-left: 10px;
            padding: 2px 15px;
        }

        .mf-headline {
            display: inline-block;
        }
    }

    &.mf-bar-regular {
        height: 30px;
        font-size: 14px;

        &.mf-bar-top .mf-bar-collapser-icon svg {
            margin: 3px 0 0 0;
        }
        &.mf-bar-bottom .mf-bar-collapser-icon svg {
            margin: -3px 0 0 0;
        }

        .mauticform-input, select, .mauticform-button, .mauticform-pagebreak {
            padding: 3px 6px;
            font-size: 0.9em;
        }
    }

    &.mf-bar-large {
        height: 50px;
        font-size: 17px;

        &.mf-bar-top .mf-bar-collapser-icon svg {
            margin: 5px 0 0 0;
        }
        &.mf-bar-bottom .mf-bar-collapser-icon svg {
            margin: -5px 0 0 0;
        }

        .mf-link {
            font-size: 1em;
        }

        .mauticform-input, select, .mauticform-button, .mauticform-pagebreak {
            font-size: 1em;
        }
    }

    .mauticform-row, .mauticform-checkboxgrp-row, .mauticform-radiogrp-row {
        display: inline-block;
        margin-right: 3px;
    }

    .mauticform-row .mauticform-input, .mauticform-row select {
        color: #000000;
    }

    .mauticform-label {
        display: none;
    }

    .mauticform_wrapper {
        display: inline-block;
    }

    .mf-responsive {
        .mf-bar-collapse, .mf-bar-collapser {
            display: none !important;
        }
    }
}

";
        // line 102
        echo twig_include($this->env, $context, "@MauticFocus/Builder/Bar/collapser.less.twig", array(), false);
        echo "

@media only screen and (max-width: 667px) {
    & .mf-bar-collapse, & .mf-bar-collapser {
        display: none !important;
    }
}

";
        // line 110
        if ( !twig_test_empty((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 110, $this->source); })()))) {
            // line 111
            echo twig_include($this->env, $context, "@MauticFocus/Builder/Bar/animations.less.twig", array(), false);
            echo "
";
            // line 112
            echo twig_include($this->env, $context, "@MauticFocus/Builder/Bar/shared.less.twig", array(), false);
            echo "
.mf-bar {
    &.mf-animate {
        .barAnimate();
    }
}

.mf-bar, .mf-bar-collapser, .mf-bar-collapser-sticky {
    position: absolute !important;
}
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFocus/Builder/Bar/style.less.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  157 => 112,  153 => 111,  151 => 110,  140 => 102,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFocus/Builder/Bar/style.less.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Builder\\Bar\\style.less.twig");
    }
}
