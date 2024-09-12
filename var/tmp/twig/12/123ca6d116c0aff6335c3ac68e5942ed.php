<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @themes/goldstar/html/email.html.twig */
class __TwigTemplate_16c2ea353a3e5fe709861199ea727a2a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\"
 xmlns:v=\"urn:schemas-microsoft-com:vml\"
 xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"format-detection\" content=\"date=no\" />
    <meta name=\"format-detection\" content=\"address=no\" />
    <meta name=\"format-detection\" content=\"telephone=no\" />
    <title>{subject}</title>
    

    <style type=\"text/css\" media=\"screen\">
        /* Linked Styles */
        body { padding:0 !important; margin:0 !important; display:block !important; background:#1e1e1e; -webkit-text-size-adjust:none }
        a { color:#a88123; text-decoration:none }
        p { padding:0 !important; margin:0 !important } 

        /* Mobile styles */
        @media only screen and (max-device-width: 480px), only screen and (max-width: 480px) { 
            div[class='mobile-br-5'] { height: 5px !important; }
            div[class='mobile-br-10'] { height: 10px !important; }
            div[class='mobile-br-15'] { height: 15px !important; }
            div[class='mobile-br-20'] { height: 20px !important; }
            div[class='mobile-br-25'] { height: 25px !important; }
            div[class='mobile-br-30'] { height: 30px !important; }

            th[class='m-td'], 
            td[class='m-td'], 
            div[class='hide-for-mobile'], 
            span[class='hide-for-mobile'] { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

            span[class='mobile-block'] { display: block !important; }

            div[class='wgmail'] img { min-width: 320px !important; width: 320px !important; }

            div[class='img-m-center'] { text-align: center !important; }

            div[class='fluid-img'] img,
            td[class='fluid-img'] img { width: 100% !important; max-width: 100% !important; height: auto !important; }

            table[class='mobile-shell'] { width: 100% !important; min-width: 100% !important; }
            td[class='td'] { width: 100% !important; min-width: 100% !important; }
            
            table[class='center'] { margin: 0 auto; }
            
            td[class='column-top'],
            th[class='column-top'],
            td[class='column'],
            th[class='column'] { float: left !important; width: 100% !important; display: block !important; }

            td[class='content-spacing'] { width: 15px !important; }

            div[class='h2'] { font-size: 44px !important; line-height: 48px !important; }
        } 
    </style>
    <style type=\"text/css\" media=\"only screen and (max-width: 480px)\">
        /* Mobile styles */
        @media only screen and (max-width: 480px) {

            [class=\"w320\"] {
                width: 320px !important;
            }

            [class=\"mobile-block\"] {
                width: 100% !important;
                display: block !important;
            }
        }
    </style>
</head>
<body class=\"body\" style=\"padding:0 !important; margin:0 !important; display:block !important; background:#1e1e1e; -webkit-text-size-adjust:none\">
    <div data-section-wrapper=\"1\"  width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#161616\">
        <center>
            <table data-section=\"1\" width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"mobile-shell\">
                <tr>
                    <td class=\"td\" style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; width:600px; min-width:600px; Margin:0\" width=\"600\">
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tr>
                                <td class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                                <td>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"10\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                        <tr>
                                            <td>
                                                <div class=\"text-header\" style=\"color:#666666; font-family:Arial, sans-serif; min-width:auto !important; font-size:12px; line-height:16px; text-align:left\">
                                                    <div data-slot=\"text\">
                                                        <a href=\"{webview_url}‍\" target=\"_blank\" class=\"link-1\" style=\"color:#666666; text-decoration:none\"><span class=\"link-1\" style=\"color:#666666; text-decoration:none\">Web Version</span></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"text-header-1\" style=\"color:#666666; font-family:Arial, sans-serif; min-width:auto !important; font-size:12px; line-height:16px; text-align:right\">
                                                    <div data-slot=\"text\">
                                                        <a href=\"{unsubscribe_url}\" target=\"_blank\" class=\"link-1\" style=\"color:#666666; text-decoration:none\"><span class=\"link-1\" style=\"color:#666666; text-decoration:none\">Unsubscribe</span></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"10\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                </td>
                                <td class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <!-- END Top -->

    <!-- Main -->
    <div data-section-wrapper=\"1\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"mobile-shell\">
        <center>
            <!-- Head -->
            <table data-section=\"1\" width=\"600\" style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; width:600px; min-width:600px; Margin:0\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#d2973b\">
                <tr>
                    <td>
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tr>
                                <td>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                        <tr>
                                            <td class=\"img\" style=\"font-size:0pt; line-height:0pt; text-align:left\" height=\"3\" bgcolor=\"#e6ae57\">&nbsp;</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tr>
                                <td class=\"img\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"3\" bgcolor=\"#e6ae57\"></td>
                                <td class=\"img\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"10\"></td>
                                <td>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"15\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                    <div class=\"h2\" style=\"color:#ffffff; font-family:Georgia, serif; min-width:auto !important; font-size:60px; line-height:64px; text-align:center\" data-slot=\"text\">
                                        <em>Thank you</em>
                                    </div>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"15\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>


                                    <div class=\"h3-2-center\" style=\"color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:20px; line-height:26px; text-align:center; letter-spacing:5px\" data-slot=\"text\">FOR YOUR ORDER!</div>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"35\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                </td>
                                <td class=\"img\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"10\"></td>
                                <td class=\"img\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"3\" bgcolor=\"#e6ae57\"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <!-- END Head -->

    <!-- Body -->
    <div data-section-wrapper=\"1\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"mobile-shell\">
        <center>
            <table data-section=\"1\" width=\"600\" style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; width:600px; min-width:600px; Margin:0\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ffffff\">
                <tr>
                    <td class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                    <td data-slot-container=\"1\">
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"35\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                        <div data-slot=\"text\" class=\"h3-1-center\" style=\"color:#1e1e1e; font-family:Georgia, serif; min-width:auto !important; font-size:20px; line-height:26px; text-align:center\">Feel free to review your invoice below or click the button to view you account.
                        <br>
                        <br>
                        </div>
            
                        <!-- Button -->
                        <div data-slot=\"button\" align=\"center\" data-param-padding-top=\"5\" data-param-button-size=\"1\" data-param-link-text=\"I want this\" data-param-href=\"http://\" data-param-float=\"1\" data-param-background-color=\"#d2973b\" data-param-color=\"ffffff\">
                            <a href=\"#\" target=\"_blank\" style=\"font-family:Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; text-decoration: none; padding: 22px 28px; background-color: #d2973b; display: inline-block;\">
                                MY ACCOUNT
                            </a>
                            <div style=\"clear:both\"></div>
                        </div>
                        <!-- END Button -->
                        <div data-slot=\"text\">
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"40\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>
                        </div>

                        <div data-slot=\"text\">
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tr>
                                <th class=\"column-top\" style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top; Margin:0\" valign=\"top\" width=\"270\">
                                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                            <tr>
                                                <td>
                                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#f4f4f4\">
                                                        <tr>
                                                            <td class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                                                            <td>
                                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"10\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                                                <div class=\"text-1\" style=\"color:#d2973b; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left\">
                                                                    <strong>SHIPPING ADDRESS:</strong>
                                                                </div>
                                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"10\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                                            </td>
                                                            <td class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                                                        </tr>
                                                    </table>
                                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#fafafa\">
                                                        <tr>
                                                            <td class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                                                            <td>
                                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"10\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                                                <div class=\"text\" style=\"color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left\">
                                                                    <strong>Jane Doe</strong>
                                                                    <br />
                                                                    123 Street | Victoria, BC
                                                                    <br />
                                                                    Canada
                                                                    <br />
                                                                    1(250)222-2232
                                                                </div>
                                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"15\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                                            </td>
                                                            <td class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>

                                </th>
                                <th class=\"column-top\" style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top; Margin:0\" valign=\"top\" width=\"20\">
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                        <tr>
                                            <td><div style=\"font-size:0pt; line-height:0pt;\" class=\"mobile-br-15\"></div>
                                            </td>
                                        </tr>
                                    </table>
                                </th>
                                <th class=\"column-top\" style=\"font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top; Margin:0\" valign=\"top\" width=\"270\">
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                        <tr>
                                            <td>
                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#f4f4f4\">
                                                    <tr>
                                                        <td class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                                                        <td>
                                                            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"10\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                                            <div class=\"text-1\" style=\"color:#d2973b; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left\">
                                                                <strong>ORDER NUMBER:</strong> <span style=\"color: #1e1e1e;\">A80SD99</span>
                                                            </div>
                                                            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"10\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                                        </td>
                                                        <td class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                                                    </tr>
                                                </table>
                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"20\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>


                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#f4f4f4\">
                                                    <tr>
                                                        <td class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                                                        <td>
                                                            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"10\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                                            <div class=\"text-1\" style=\"color:#d2973b; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left\">
                                                                <strong>DATE SHIPPED:</strong>
                                                            </div>
                                                            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"10\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                                        </td>
                                                        <td class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                                                    </tr>
                                                </table>
                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#fafafa\">
                                                    <tr>
                                                        <td class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                                                        <td>
                                                            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"10\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                                            <div class=\"text\" style=\"color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left\">
                                                                January 12, 2016 
                                                            </div>
                                                            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"15\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                                        </td>
                                                        <td class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>

                                </th>
                            </tr>
                        </table>
                        </div>
                        <div data-slot=\"text\">
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"40\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>
                        </div>

                        <div data-slot=\"text\">
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tr>
                                <td style=\"border-bottom: 1px solid #f4f4f4;\" class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                                <td style=\"border-bottom: 1px solid #f4f4f4;\" width=\"225\">
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"8\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                    <div class=\"text\" style=\"color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left\"><strong>Item</strong></div>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"8\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                </td>
                                <td style=\"border-bottom: 1px solid #f4f4f4;\" class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                                <td style=\"border-bottom: 1px solid #f4f4f4;\">
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"8\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                    <div class=\"text\" style=\"color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left\"><strong>Qty</strong></div>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"8\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                </td>
                                <td style=\"border-bottom: 1px solid #f4f4f4;\" class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                                <td style=\"border-bottom: 1px solid #f4f4f4;\" width=\"60\">
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"8\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                    <div class=\"text-center\" style=\"color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:center\"><strong>Total</strong></div>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"8\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                </td>
                                <td style=\"border-bottom: 1px solid #f4f4f4;\" class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"8\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                    <div class=\"text\" style=\"color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left\">Double Lapel Blazer</div>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"8\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"8\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                    <div class=\"text\" style=\"color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left\">1</div>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"8\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"8\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                    <div class=\"text-center\" style=\"color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:center\">\$89.90</div>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"8\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"8\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                    <div class=\"text\" style=\"color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left\">Draped Neck Cardigan</div>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"8\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"8\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                    <div class=\"text\" style=\"color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left\">1</div>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"8\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"8\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                    <div class=\"text-center\" style=\"color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:center\">\$22.80</div>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"8\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                </td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                        </div>
                        <div data-slot=\"text\">
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"10\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>


                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tr>
                                <td class=\"img\" style=\"font-size:0pt; line-height:0pt; text-align:left\" height=\"1\" bgcolor=\"#d2973b\">&nbsp;</td>
                            </tr>
                        </table>
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"15\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>
                        </div>
                        <div data-slot=\"text\">
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tr>
                                <td align=\"right\">
                                    <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                        <tr>
                                            <td class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                                            <td>
                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"3\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                                <div class=\"text-right\" style=\"color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:right\">Subtotal:</div>
                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"3\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                            </td>
                                            <td class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                                            <td width=\"50\">
                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"3\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                                <div class=\"text\" style=\"color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left\">\$112.70</div>
                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"3\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                            </td>
                                            <td class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"3\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                                <div class=\"text-right\" style=\"color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:right\">Shipping:</div>
                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"3\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                            </td>
                                            <td>&nbsp;</td>
                                            <td>
                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"3\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                                <div class=\"text\" style=\"color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left\">\$10.00</div>
                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"3\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>
                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"3\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                                <div class=\"text-right\" style=\"color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:right\"><strong>TOTAL:</strong></div>
                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"3\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                            </td>
                                            <td>&nbsp;</td>
                                            <td>
                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"3\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                                <div class=\"text\" style=\"color:#1e1e1e; font-family:Arial, sans-serif; min-width:auto !important; font-size:14px; line-height:20px; text-align:left\"><strong>\$122.70</strong></div>
                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"3\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        </div>
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\"><tr><td height=\"35\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%\">&nbsp;</td></tr></table>

                    </td>
                    <td class=\"content-spacing\" style=\"font-size:0pt; line-height:0pt; text-align:left\" width=\"20\"></td>
                </tr>
            </table>
            <!-- END Body -->
            <!-- END Main -->
        </center>
    </div>

    <!-- Footer -->
    <div data-section-wrapper=\"1\">
        <center>
            <table data-section=\"1\" width=\"600px\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"spacer\" style=\"font-size:0pt; line-height:0pt; text-align:center; width:600px\">
                <tr>
                    <td data-slot-container=\"1\" class=\"text-footer\" style=\"color:#666666; font-family:Arial, sans-serif; min-width:auto !important; font-size:12px; line-height:18px; text-align:center\">
                        <div data-slot=\"text\">
                            <br/>
                            {signature}
                            <br/>
                            <br/>
                        </div>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <!-- END Footer -->

</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/goldstar/html/email.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/goldstar/html/email.html.twig", "C:\\xampp\\htdocs\\mautic\\themes\\goldstar\\html\\email.html.twig");
    }
}
