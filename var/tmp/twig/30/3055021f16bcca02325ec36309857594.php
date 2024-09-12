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

/* @themes/neopolitan/css/neopolitan.css */
class __TwigTemplate_6eaafbcb1ffa7938efc2a957589772da extends Template
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
        echo "@import url(https://fonts.googleapis.com/css?family=Droid+Sans);

/* Take care of image borders and formatting */

img {
    max-width: 600px;
    outline: none;
    text-decoration: none;
    -ms-interpolation-mode: bicubic;
}

a {
    text-decoration: none;
    border: 0;
    outline: none;
    color: #bbbbbb;
}

a img {
    border: none;
}

/* General styling */

td, h1, h2, h3  {
    font-family: Helvetica, Arial, sans-serif;
    font-weight: 400;
}

td {
    text-align: center;
}

body {
    -webkit-font-smoothing:antialiased;
    -webkit-text-size-adjust:none;
    width: 100%;
    height: 100%;
    color: #37302d;
    background: #ffffff;
    font-size: 16px;
}

table {
    border-collapse: collapse !important;
}

.headline {
    color: #ffffff;
    font-size: 36px;
}

.force-full-width {
    width: 100% !important;
}

.force-width-80 {
    width: 80% !important;
}

@media screen {
     /*Thanks Outlook 2013! http://goo.gl/XLxpyl*/
    td, h1, h2, h3 {
        font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
    }
}

/* Mobile styles */
@media only screen and (max-width: 480px) {

    table[class=\"w320\"] {
        width: 320px !important;
    }

    td[class=\"mobile-block\"] {
        width: 100% !important;
        display: block !important;
    }

}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@themes/neopolitan/css/neopolitan.css";
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
        return new Source("", "@themes/neopolitan/css/neopolitan.css", "C:\\xampp\\htdocs\\mautic\\themes\\neopolitan\\css\\neopolitan.css");
    }
}
