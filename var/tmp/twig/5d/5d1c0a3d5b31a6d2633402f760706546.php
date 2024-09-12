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

/* @MauticFocus/Builder/Modal/style.less.twig */
class __TwigTemplate_b776c2d1386a17c20f19c3f662f1a575 extends Template
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
        echo ".mf-modal {
    position: relative;
    opacity: 1;
    z-index: 2000;
    margin: auto;
    padding: 45px;
    border-radius: 4px;
    border-width: 6px 1px 1px 1px;
    border-style: solid;
    background: #fff;
    max-width: 40em;
    text-align: center;

    .mf-content {
        margin-bottom: 30px;

        .mf-headline {
            font-size: 1.6em;
            font-weight: 600;
        }

        .mf-tagline {
            font-size: 1.2em;
            font-weight: normal;
            margin-top: 4px;
        }

        a.mf-link {
            display: block;
            max-width: 70%;
            padding: 10px;
            margin: auto;
            font-size: 1.2em;
        }
    }

    .mf-modal-close {
        position: fixed;
        top: 5px;
        right: 8px;

        a {
            font-size: 1.4em;
            color: #757575;
            opacity: .4;
            text-decoration: none;
        }

        a:hover {
            opacity: .8;
            text-decoration: none;
        }
    }

    .mauticform-input, .mauticform-row select, .mauticform-button, .mauticform-pagebreak {
        width: 75%;
        height: 35px;
        margin-bottom: 5px;
    }
}

.mf-responsive.mf-modal, .mf-responsive .mf-modal {
    width: 90%;
    padding: 10px;
}

";
        // line 67
        if ( !twig_test_empty((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 67, $this->source); })()))) {
            // line 68
            echo twig_include($this->env, $context, "@MauticFocus/Builder/Modal/animations.less.twig", array(), false);
            echo "
";
            // line 69
            echo twig_include($this->env, $context, "@MauticFocus/Builder/Modal/overlay.less.twig", array(), false);
            echo "

.mf-modal, .mf-modal-overlay {
    position: absolute !important;
}

.mf-modal {
    z-index: 1023;
    left: 50%;
    &.mf-animate {
        .modalAnimate();
    }

    &.mf-modal-top {
        top: 10px;
        .modalTranslate(-50%, 0);

        &.mf-animate {
            .modalAnimateName(mf-modal-slide-down-top);
        }
    }

    &.mf-modal-middle {
        top: 50%;
        .modalTranslate(-50%, -50%);

        &.mf-animate {
            .modalAnimateName(mf-modal-slide-down-middle);
        }
    }

    &.mf-modal-bottom {
        bottom: 10px;
        .modalTranslate(-50%, 0);

        &.mf-animate {
            .modalAnimateName(mf-modal-slide-up-bottom);
        }
    }

}

.mf-modal-overlay {
    z-index: 1022;
}
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFocus/Builder/Modal/style.less.twig";
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
        return array (  111 => 69,  107 => 68,  105 => 67,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFocus/Builder/Modal/style.less.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Builder\\Modal\\style.less.twig");
    }
}
