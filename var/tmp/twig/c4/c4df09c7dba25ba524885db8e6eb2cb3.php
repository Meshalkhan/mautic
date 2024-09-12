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

/* @themes/sunday/html/email.html.twig */
class __TwigTemplate_8f4370e64ccc5f633f70548d429a9267 extends Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{subject}</title>
    <!-- Designed by https://github.com/kaytcat -->
    <!-- Header image designed by Freepik.com -->


    <style type=\"text/css\">
    /* Take care of image borders and formatting */

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



    </style>

    <style type=\"text/css\" media=\"screen\">
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
    </style>

    <style type=\"text/css\" media=\"only screen and (max-width: 480px)\">
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

            [class=\"mobile-block\"] {
                width: 100% !important;
                display: block !important;
            }

        }
    </style>
</head>
<body offset=\"0\" class=\"body\" style=\"padding: 0;margin: 0;display: block;background: #eeebeb;-webkit-text-size-adjust: none;-webkit-font-smoothing: antialiased;width: 100%;height: 100%;color: #6f6f6f;font-weight: 400;font-size: 18px;\" bgcolor=\"#eeebeb\">
    <div data-section-wrapper==\"1\" align=\"center\" valign=\"top\" style=\"font-family: Arial, sans-serif;border-collapse: collapse;\">
        <center>
            <table data-section=\"1\" style=\"margin: 0 auto;border-collapse: collapse !important;\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\" class=\"w320\">
                <tr>
                    <td data-slot-container=\"1\" style=\"text-align: center;font-family: Arial, sans-serif;border-collapse: collapse;\">
                        <div data-slot=\"image\">
                            <img class=\"w320\" width=\"311\" height=\"83\" src=\"";
        // line 146
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 146, $this->source); })())) . "/img/logo.gif"), null, null, true);
        echo "\" alt=\"company logo\" style=\"max-width: 600px;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;border: none;\">
                        </div>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div data-section-wrapper==\"1\">
        <center>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\" class=\"w320\" style=\"background-color: #3bcdb0;border-collapse: collapse !important;\">
                <tr>
                    <td style=\"font-family: Arial, sans-serif;border-collapse: collapse;\">

                        <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"border-collapse: collapse !important;\">
                            <tr>
                                <td data-slot-container=\"1\" style=\"font-size: 40px;font-weight: 600;color: #ffffff;text-align: center;font-family: Arial, sans-serif;border-collapse: collapse;\" class=\"mobile-spacing\">
                                    <div data-slot=\"text\">
                                        <div class=\"mobile-br\">&nbsp;</div>
                                        Welcome to Awesome Co
                                    </div>
                                <br>
                                </td>
                            </tr>
                            <tr>
                                <td data-slot-container=\"1\" style=\"font-size: 24px;text-align: center;padding: 0 75px;color: #6f6f6f;font-family: Arial, sans-serif;border-collapse: collapse;\" class=\"w320 mobile-spacing\">
                                    <div data-slot=\"text\">
                                        We are happy to meet you and hope you have an amazing time with us.
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"border-collapse: collapse !important;\">
                            <tr>
                                <td data-slot-container=\"1\" style=\"font-family: Arial, sans-serif;border-collapse: collapse;\">
                                    <div data-slot=\"image\">
                                        <img src=\"";
        // line 182
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 182, $this->source); })())) . "/img/workplace.gif"), null, null, true);
        echo "\" style=\"max-width: 100%;display: block;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;\">
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div data-section-wrapper==\"1\">
        <center>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\" class=\"w320\" bgcolor=\"#ffffff\" style=\"border-collapse: collapse !important;background-color: #ffffff;\">
                <tr>
                    <td style=\"font-family: Arial, sans-serif;border-collapse: collapse;\">

                        <table cellspacing=\"0\" cellpadding=\"0\" class=\"force-full-width\" style=\"border-collapse: collapse !important;width: 100% !important;\">
                            <tr>
                                <td width=\"230\" class=\"mobile-hide\" style=\"font-family: Arial, sans-serif;border-collapse: collapse;\">
                                    <table cellspacing=\"0\" cellpadding=\"0\" class=\"force-full-width\" style=\"border-collapse: collapse !important;width: 100% !important;\">
                                        <tr>
                                            <td background=\"";
        // line 204
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 204, $this->source); })())) . "/img/robbonwide.gif"), null, null, true);
        echo "\" width=\"230\" height=\"113\" valign=\"top\" style=\"background-repeat: no-repeat;font-family: Arial, sans-serif;border-collapse: collapse;\">
                                                <!--[if gte mso 9]>
                                                <v:rect xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"true\" stroke=\"false\" style=\"width:230px;height:113px;\">
                                                    <v:fill type=\"frame\" src=\"";
        // line 207
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 207, $this->source); })())) . "/img/robbonwide.gif"), null, null, true);
        echo "\" color=\"#ffffff\" />
                                                    <v:textbox inset=\"0,0,0,0\">
                                                <![endif]-->
                                                <div>
                                                    <table cellspacing=\"0\" cellpadding=\"0\" class=\"force-full-width\" style=\"border-collapse: collapse !important;width: 100% !important;\">
                                                        <tr>
                                                            <td data-slot-container=\"1\" style=\"font-size: 45px;font-weight: 900;color: #ffffff;text-align: right;padding-top: 10px;padding-right: 40px;font-family: Arial, sans-serif;border-collapse: collapse;\">
                                                                <div data-slot=\"text\">
                                                                    50%
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!--[if gte mso 9]>
                                                    </v:textbox>
                                                </v:rect>
                                                <![endif]-->
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width=\"360\" class=\"w320\" style=\"font-family: Arial, sans-serif;border-collapse: collapse;\">
                                    <table cellspacing=\"0\" cellpadding=\"0\" class=\"w280 w100p\" style=\"border-collapse: collapse !important;\">
                                        <tr>
                                            <td data-slot-container=\"1\" class=\"mobile-center activate-now\" style=\"color: #27aa90;font-size: 30px;font-weight: 600;line-height: 30px;text-align: left;font-family: Arial, sans-serif;border-collapse: collapse;\">
                                                <div data-slot=\"text\">
                                                    Activate account now and receive a 50% discount
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>

                        <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"border-collapse: collapse !important;\">
                            <tr>
                                <td data-slot-container=\"1\" style=\"text-align: left;font-family: Arial, sans-serif;border-collapse: collapse;padding: 0 75px;\" class=\"mobile-center body-padding w320\">
                                    <div data-slot=\"text\">
                                        <br>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>Sed do eiusmod tempor ullamco laboris.
                                        Quis nostrud exercitation nisi ut aliquip ex ea commodo!
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <table style=\"margin: 0 auto;border-collapse: collapse !important;\" cellspacing=\"0\" cellpadding=\"10\" width=\"100%\">
                            <tr>
                                <td style=\"text-align: center;margin: 0 auto;font-family: Arial, sans-serif;border-collapse: collapse;\">
                                <br>
                                    <div class=\"button\" data-slot=\"button\" data-param-padding-top=\"5\" data-param-button-size=\"2\" data-param-link-text=\"Activate account\" data-param-href=\"http://\" data-param-float=\"1\" data-param-background-color=\"#f5774e\" data-param-color=\"ffffff\">
                                        <a href=\"#\" target=\"_blank\" style=\"font-size: 16px; color: #ffffff; text-decoration: none; text-decoration: none; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; padding: 12px 18px; background-color: #f5774e; display: inline-block;\">
                                            Activate account
                                        </a>
                                        <div style=\"clear:both\"></div>
                                    </div>
                                    <br>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div data-section-wrapper==\"1\">
        <center>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\" class=\"w320\" bgcolor=\"#363636\" style=\"border-collapse: collapse !important;background-color: #363636;\">
                <tr>
                    <td style=\"font-family: Arial, sans-serif;border-collapse: collapse;\">
                        <table cellspacing=\"0\" cellpadding=\"0\" class=\"force-full-width\" style=\"border-collapse: collapse !important;width: 100% !important;\">
                            <tr>
                                <td data-slot-container=\"1\" style=\"text-align: center;font-family: Arial, sans-serif;border-collapse: collapse;\">
                                <div data-slot=\"text\">
                                    <br>
                                    <br>
                                    <img width=\"62\" height=\"56\" img src=\"";
        // line 285
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 285, $this->source); })())) . "/img/gplus.gif"), null, null, true);
        echo "\" style=\"max-width: 600px;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;\">
                                    <img width=\"68\" height=\"56\" src=\"";
        // line 286
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 286, $this->source); })())) . "/img/facebook.gif"), null, null, true);
        echo "\" style=\"max-width: 600px;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;\">
                                    <img width=\"61\" height=\"56\" src=\"";
        // line 287
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 287, $this->source); })())) . "/img/twitter.gif"), null, null, true);
        echo "\" style=\"max-width: 600px;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;\">
                                    <br>
                                    <br>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-slot-container=\"1\" style=\"color: #f0f0f0;font-size: 14px;text-align: center;padding-bottom: 4px;font-family: Arial, sans-serif;border-collapse: collapse;\">
                                    <div data-slot=\"text\">
                                        © 2014 All Rights Reserved
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-slot-container=\"1\" style=\"color: #27aa90;font-size: 14px;text-align: center;font-family: Arial, sans-serif;border-collapse: collapse;\">
                                    <div data-slot=\"text\">
                                        <a href=\"{webview_url}\" style=\"color: #27aa90;text-decoration: none;\">View in browser</a> | <a href=\"#\" style=\"color: #27aa90;text-decoration: none;\">Contact</a> | <a href=\"{unsubscribe_url}\" style=\"color: #27aa90;text-decoration: none;\">Unsubscribe</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"font-size: 12px;font-family: Arial, sans-serif;border-collapse: collapse;\">
                                    &nbsp;
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </center>
    </div>
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@themes/sunday/html/email.html.twig";
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
        return array (  343 => 287,  339 => 286,  335 => 285,  254 => 207,  248 => 204,  223 => 182,  184 => 146,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@themes/sunday/html/email.html.twig", "C:\\xampp\\htdocs\\mautic\\themes\\sunday\\html\\email.html.twig");
    }
}
