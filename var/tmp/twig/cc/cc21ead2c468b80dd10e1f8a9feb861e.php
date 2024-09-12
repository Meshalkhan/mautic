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

/* @MauticFocus/Builder/Modal/parent.less.twig */
class __TwigTemplate_aa91b71982dc37addd2eab0520103fd6 extends Template
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
        echo twig_include($this->env, $context, "@MauticFocus/Builder/Modal/animations.less.twig", array(), false);
        echo "
";
        // line 2
        echo twig_include($this->env, $context, "@MauticFocus/Builder/Modal/overlay.less.twig", array(), false);
        echo "
.mf-modal-iframe {
    position: fixed;
    z-index: 21003;
    left: 50%;

    &.mf-animate {
        .modalAnimate();
    }

    &.mf-modal-iframe-top {
        top: 10px;
        margin-top: -100%;
        .modalTranslate(-50%, 0);

        &.mf-animate {
            .modalAnimateName(mf-modal-slide-down-top);
        }
    }

    &.mf-modal-iframe-middle {
        top: 50%;
        margin-top: -100%;
        .modalTranslate(-50%, -50%);

        &.mf-animate {
            .modalAnimateName(mf-modal-slide-down-middle);
        }
    }

    &.mf-modal-iframe-bottom {
        bottom: 10px;
        margin-bottom: -100%;
        .modalTranslate(-50%, 0);

        &.mf-animate {
            .modalAnimateName(mf-modal-slide-up-bottom);
        }
    }

    &.mf-loaded {
        margin-top: 0;
        margin-bottom: 0;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFocus/Builder/Modal/parent.less.twig";
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
        return array (  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFocus/Builder/Modal/parent.less.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Builder\\Modal\\parent.less.twig");
    }
}
