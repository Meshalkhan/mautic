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

/* @MauticFocus/Builder/Bar/parent.less.twig */
class __TwigTemplate_6f38fa50e4a851a41619bb8fc0793f33 extends Template
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
        echo twig_include($this->env, $context, "@MauticFocus/Builder/Bar/animations.less.twig", array(), false);
        echo "

.mf-bar-iframe {
    width: 100%;
    position: static;
    z-index: 20000;
    left: 0;
    right: 0;

    &.mf-animate {
        .barAnimate();
    }

    &.mf-bar-iframe-top {
        top: 0;
        margin-top: -100px;
    }

    &.mf-bar-iframe-bottom {
        bottom: 0;
        margin-bottom: -100px;
    }

    &.mf-bar-iframe-regular {
        body, html {
            min-height: 30px;
        }

        &.mf-bar-iframe-top {
            margin-top: -30px;
        }

        &.mf-bar-iframe-bottom {
            margin-bottom: -30px;
        }
    }

    &.mf-bar-iframe-large {
        body, html {
            min-height: 50px;
        }

        &.mf-bar-iframe-top {
            margin-top: -50px;
        }

        &.mf-bar-iframe-bottom {
            margin-bottom: -50px;
        }
    }

    &.mf-bar-iframe-sticky {
        position: fixed;
    }
}

";
        // line 57
        echo twig_include($this->env, $context, "@MauticFocus/Builder/Bar/shared.less.twig", array(), false);
        echo "
";
        // line 58
        echo twig_include($this->env, $context, "@MauticFocus/Builder/Bar/collapser.less.twig", array(), false);
        echo "

@media only screen and (max-width: 667px) {
    .mf-bar-collapser {
        display: none !important;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFocus/Builder/Bar/parent.less.twig";
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
        return array (  100 => 58,  96 => 57,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFocus/Builder/Bar/parent.less.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Builder\\Bar\\parent.less.twig");
    }
}
