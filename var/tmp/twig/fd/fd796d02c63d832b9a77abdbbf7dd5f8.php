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

/* @MauticFocus/Builder/Modal/animations.less.twig */
class __TwigTemplate_77366616a60d6b7b4ea3ac366cde80ad extends Template
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
        echo ".modalTranslate(@x; @y) {
    -webkit-transform: translate(@x, @y);
    -ms-transform: translate(@x, @y);
    transform: translate(@x, @y);
}

.modalAnimate() {
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
    -webkit-animation-duration: 0.3s;
    animation-duration: 0.3s;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
}

.modalAnimateName(@name) {
    -webkit-animation-name: @name;
    animation-name: @name;
}

.modalSlideDownTop() {
    0% {
        margin-top: -100%;
        .modalTranslate(-50%, -150%);
    }
    100% {
        margin-top: 0;
        .modalTranslate(-50%, 0);
    }
}

@-webkit-keyframes mf-modal-slide-down-top {
    .modalSlideDownTop;
}

@keyframes mf-modal-slide-down-top {
    .modalSlideDownTop;
}

.modalSlideDownMiddle() {
    0% {
        margin-top: -100%;
        .modalTranslate(-50%, -150%);
    }
    100% {
        margin-top: 0;
        .modalTranslate(-50%, -50%);
    }
}

@-webkit-keyframes mf-modal-slide-down-middle {
    .modalSlideDownMiddle;
}

@keyframes mf-modal-slide-down-middle {
    .modalSlideDownMiddle;
}

.modalSlideUpBottom() {
    0% {
        margin-bottom: -100%;
        .modalTranslate(-50%, 150%);
    }
    100% {
        margin-bottom: 0;
        .modalTranslate(-50%, 0);
    }
}

@-webkit-keyframes mf-modal-slide-up-bottom {
    .modalSlideUpBottom;
}

@keyframes mf-modal-slide-up-bottom {
    .modalSlideUpBottom;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFocus/Builder/Modal/animations.less.twig";
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
        return new Source("", "@MauticFocus/Builder/Modal/animations.less.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Builder\\Modal\\animations.less.twig");
    }
}
