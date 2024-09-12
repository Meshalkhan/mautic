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

/* @MauticFocus/Builder/Notification/parent.less.twig */
class __TwigTemplate_4edd8bb411303eb44084b53a6ed9c2ce extends Template
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
        echo twig_include($this->env, $context, "@MauticFocus/Builder/Notification/animations.less.twig", array(), false);
        echo "

.mf-notification-iframe {
    position: fixed;
    z-index: 21001;
    margin-top: -100%;

    &.mf-loaded {
        margin-top: 0;
        margin-bottom: 0;


        &.mf-animate {
            .notificationAnimate();
        }

        &.mf-notification-iframe-top-left {
            top: 5px;
            left: 5px;

            &.mf-animate {
                .notificationName(mf-notification-slide-right);
            }
        }

        &.mf-notification-iframe-top-right {
            top: 5px;
            right: 5px;

            &.mf-animate {
                .notificationName(mf-notification-slide-left);
            }
        }

        &.mf-notification-iframe-bottom-left {
            bottom: 5px;
            left: 5px;

            &.mf-animate {
                .notificationName(mf-notification-slide-right);
            }
        }

        &.mf-notification-iframe-bottom-right {
            bottom: 5px;
            right: 5px;

            &.mf-animate {
                .notificationName(mf-notification-slide-left);
            }
        }

        &.mf-responsive {
            left: 0 !important;
            right: 0 !important;
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
        return "@MauticFocus/Builder/Notification/parent.less.twig";
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
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFocus/Builder/Notification/parent.less.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Builder\\Notification\\parent.less.twig");
    }
}
