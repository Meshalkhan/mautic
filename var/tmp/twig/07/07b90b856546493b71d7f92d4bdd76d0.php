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

/* @themes/sunday/css/sunday.css */
class __TwigTemplate_509e647cb219cd8cfefbd4d624c08106 extends Template
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
        echo "/* Take care of image borders and formatting */

img { max-width: 600px; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
a img { border: none; }
table { border-collapse: collapse !important; }
#outlook a { padding:0; }
.ReadMsgBody { width: 100%; }
.ExternalClass {width:100%;}
.backgroundTable {margin:0 auto; padding:0; width:100% !important;}
table td {border-collapse: collapse;}
.ExternalClass * {line-height: 115%;}


/* General styling */

td {
    font-family: Arial, sans-serif;
}

body {
    -webkit-font-smoothing:antialiased;
    -webkit-text-size-adjust:none;
    width: 100%;
    height: 100%;
    color: #6f6f6f;
    font-weight: 400;
    font-size: 18px;
}

.panel {
    font-size: 0.9em;
}

h1 {
    margin: 10px 0;
}

a {
    color: #27aa90;
    text-decoration: none;
}

.force-full-width {
    width: 100% !important;
}


.body-padding {
    padding: 0 75px;
}

@media screen {
    @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,900);
    /* Thanks Outlook 2013! */
    body {
        font-family: 'Source Sans Pro', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
    }
    .w280 {
        width: 280px !important;
    }

}

/* Mobile styles */
@media only screen and (max-width: 480px) {

    table[class*=\"w320\"] {
        width: 320px !important;
    }

    td[class*=\"w320\"] {
        width: 280px !important;
        padding-left: 20px !important;
        padding-right: 20px !important;
    }

    img[class*=\"w320\"] {
        width: 250px !important;
        height: 67px !important;
    }

    td[class*=\"mobile-spacing\"] {
        padding-top: 10px !important;
        padding-bottom: 10px !important;
    }

    *[class*=\"mobile-hide\"] {
        display: none !important;
    }

    *[class*=\"mobile-br\"] {
        font-size: 12px !important;
    }

    td[class*=\"mobile-w20\"] {
        width: 20px !important;
    }

    img[class*=\"mobile-w20\"] {
        width: 20px !important;
    }

    td[class*=\"mobile-center\"] {
        text-align: center !important;
    }

    table[class*=\"w100p\"] {
        width: 100% !important;
    }

    td[class*=\"activate-now\"] {
        padding-right: 0 !important;
        padding-top: 20px !important;
    }

}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@themes/sunday/css/sunday.css";
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
        return new Source("", "@themes/sunday/css/sunday.css", "C:\\xampp\\htdocs\\mautic\\themes\\sunday\\css\\sunday.css");
    }
}
