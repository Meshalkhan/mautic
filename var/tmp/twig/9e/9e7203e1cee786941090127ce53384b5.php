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

/* @MauticFocus/Builder/Page/style.less.twig */
class __TwigTemplate_f9a20f30b0ddad2adf936d8e08b42e9a extends Template
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
        echo ".mf-page {
    position: fixed;
    opacity: 1;
    z-index: 20000;
    margin: auto;
    padding: 45px;
    background: #fff;
    border-radius: 2px;
    border-width: 6px 1px 1px 1px;
    border-style: solid;
    top: 1px;
    right: 1px;
    left: 1px;
    bottom: 1px;
    text-align: center;

    .mf-content {
        position: absolute;
        min-width: 75%;
        top: 50%;
        left: 50%;
        right: 0;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        margin-bottom: 30px;

        .mf-headline {
            font-size: 2.5em;
            font-weight: 600;
        }

        .mf-tagline {
            font-size: 1.8em;
            font-weight: normal;
            margin-top: 4px;
        }

        a.mf-link {
            padding: 10px 15px;
            display: block;
            max-width: 50%;
            margin: auto;
            font-size: 1.8em;
        }
    }

    .mf-page-close {
        position: absolute;
        top: 0;
        right: 8px;
        a {
            font-size: 1.8em;
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
        width: 75%;
        height: 40px;
        font-size: 1.6em;
        margin-bottom: 8px;
    }
}

";
        // line 73
        if ( !twig_test_empty((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 73, $this->source); })()))) {
            // line 74
            echo ".mf-page {
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
        return "@MauticFocus/Builder/Page/style.less.twig";
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
        return array (  113 => 74,  111 => 73,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFocus/Builder/Page/style.less.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Builder\\Page\\style.less.twig");
    }
}
