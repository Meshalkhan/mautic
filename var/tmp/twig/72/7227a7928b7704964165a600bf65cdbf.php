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

/* @MauticFocus/Builder/Notification/style.less.twig */
class __TwigTemplate_9725e2eda3c23706e3b7c3a04cd73754 extends Template
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
        echo ".mf-notification {
    position: relative;
    opacity: 1;
    z-index: 2000;
    margin: auto;
    background: #fff;
    border-radius: 4px;
    border-width: 6px 1px 1px 1px;
    border-style: solid;
    min-height: 8em;
    padding: 10px 20px;
    width: 350px;

    .mf-content {
        margin-bottom: 30px;

        .mf-headline {
            font-size: 1.2em;
            font-weight: 600;
        }

        .mf-tagline {
            font-size: 1em;
            font-weight: normal;
            margin-top: 4px;
        }
    }

    .mf-notification-close {
        position: fixed;
        top: 5px;
        right: 8px;

        a {
            font-size: 1em;
            color: #757575;
            opacity: .4;
            text-decoration: none;

            &:hover {
                opacity: .8;
                text-decoration: none;
            }
        }
    }

    .mauticform-input, .mauticform-row select, .mauticform-button, .mauticform-pagebreak {
        width: 100%;
        height: 28px;
        margin-bottom: 2px;
    }
}

.mf-responsive.mf-notification, .mf-responsive .mf-notification {
    width: 90%;
    padding: 10px;
    left: 0;
    right: 0;
}

";
        // line 61
        if ( !twig_test_empty((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 61, $this->source); })()))) {
            // line 62
            echo ".mf-notification {
    position: absolute !important;

    &.mf-animate {
        .notificationAnimate();
    }

    &.mf-notification-top-left {
        top: 5px;
        left: 5px;

        &.mf-animate {
            .notificationName(mf-notification-slide-right);
        }
    }

    &.mf-notification-top-right {
        top: 5px;
        right: 5px;

        &.mf-animate {
            .notificationName(mf-notification-slide-left);
        }
    }

    &.mf-notification-bottom-left {
        bottom: 5px;
        left: 5px;

        &.mf-animate {
            .notificationName(mf-notification-slide-right);
        }
    }

    &.mf-notification-bottom-right {
        bottom: 5px;
        right: 5px;

        &.mf-animate {
            .notificationName(mf-notification-slide-left);
        }
    }
}

";
            // line 106
            echo twig_include($this->env, $context, "@MauticFocus/Builder/Notification/animations.less.twig", array(), false);
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFocus/Builder/Notification/style.less.twig";
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
        return array (  147 => 106,  101 => 62,  99 => 61,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFocus/Builder/Notification/style.less.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Builder\\Notification\\style.less.twig");
    }
}
