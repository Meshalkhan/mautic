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

/* @MauticFocus/Builder/style.less.twig */
class __TwigTemplate_1cb4e5254aed87bdd9377cc6af9e8730 extends Template
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
        // line 3
        $context["preview"] = ((array_key_exists("preview", $context)) ? (_twig_default_filter((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 3, $this->source); })()), false)) : (false));
        // line 4
        ob_start(function () { return ''; });
        // line 5
        echo ".mf-bar-iframe {
    z-index: 19000;
}

.mf-content {
    line-height: 1.1;

    .mf-inner-container {
        margin-top: 20px;
    }

    a.mf-link, .mauticform-button, .mauticform-pagebreak {
        padding: 5px 15px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        border: none;
    }

    a.mf-link:hover, .mauticform-button:hover, .mauticform-pagebreak:hover {
        opacity: 0.9;
        text-decoration: none;
        border: none;
    }

    .mauticform-pagebreak {
        width: auto !important;
    }
}

.mautic-focus {
    ";
        // line 39
        if ((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 39, $this->source); })())) {
            // line 40
            echo "    .mauticform-row {
        min-height: 0px;
    }
    ";
        }
        // line 44
        echo "
    .mauticform_wrapper form {
        padding: 0;
        margin: 0;
    }

    .mauticform-input, select {
        border-radius: 2px;
        padding: 5px 8px;
        color: #757575;
        border: 1px solid #ababab;
    }

    .mauticform-input:focus, select:focus {
        outline: none;
        border: 1px solid #757575;
    }
}

";
        // line 63
        echo twig_include($this->env, $context, "@MauticFocus/Builder/Bar/style.less.twig", ["preview" =>         // line 64
(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 64, $this->source); })())], false);
        // line 65
        echo "

";
        // line 67
        echo twig_include($this->env, $context, "@MauticFocus/Builder/Modal/style.less.twig", ["preview" =>         // line 68
(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 68, $this->source); })())], false);
        // line 69
        echo "

";
        // line 71
        echo twig_include($this->env, $context, "@MauticFocus/Builder/Notification/style.less.twig", ["preview" =>         // line 72
(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 72, $this->source); })())], false);
        // line 73
        echo "

";
        // line 75
        echo twig_include($this->env, $context, "@MauticFocus/Builder/Page/style.less.twig", ["preview" =>         // line 76
(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 76, $this->source); })())], false);
        // line 77
        echo "
";
        $context["less"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        echo "
";
        // line 80
        $context["css"] = $this->extensions['MauticPlugin\MauticFocusBundle\Twig\Extension\FocusBundleExtension']->compileLess((isset($context["less"]) || array_key_exists("less", $context) ? $context["less"] : (function () { throw new RuntimeError('Variable "less" does not exist.', 80, $this->source); })()));
        // line 81
        echo "
";
        // line 82
        if ((twig_test_empty((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 82, $this->source); })())) && ("dev" === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "environment", [], "any", false, false, false, 82)))) {
            // line 83
            echo "    ";
            $context["css"] = $this->extensions['MauticPlugin\MauticFocusBundle\Twig\Extension\FocusBundleExtension']->minifyCss((isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new RuntimeError('Variable "css" does not exist.', 83, $this->source); })()));
        }
        // line 85
        echo "
";
        // line 86
        echo (isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new RuntimeError('Variable "css" does not exist.', 86, $this->source); })());
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFocus/Builder/style.less.twig";
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
        return array (  151 => 86,  148 => 85,  144 => 83,  142 => 82,  139 => 81,  137 => 80,  134 => 79,  130 => 77,  128 => 76,  127 => 75,  123 => 73,  121 => 72,  120 => 71,  116 => 69,  114 => 68,  113 => 67,  109 => 65,  107 => 64,  106 => 63,  85 => 44,  79 => 40,  77 => 39,  41 => 5,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFocus/Builder/style.less.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Builder\\style.less.twig");
    }
}
