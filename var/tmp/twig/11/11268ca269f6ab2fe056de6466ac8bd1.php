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

/* @themes/oxygen/html/email.html.twig */
class __TwigTemplate_69bd00bc5a0d751ca628fc2a2114e1b8 extends Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>{subject}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
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
    <body style=\"font-family: Helvetica, Arial, sans-serif;color: #676767;width: 100%;margin: 0;\">
        <div data-section-wrapper=\"1\" style=\"width:100%;background-color: #f7f7f7;font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;padding: 20px 0 30px;\" class=\"content-padding\">
            <center>
                <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\" class=\"w320\" style=\"border-collapse: collapse;\">
                    <tr>
                        <td class=\"header-lg\" data-slot-container=\"1\" style=\"font-family: Helvetica, Arial, sans-serif;font-size: 32px;color: #4d4d4d;text-align: center;line-height: normal;border-collapse: collapse;font-weight: 700;padding: 35px 0 0;\">
                            <div data-slot=\"text\">
                                You've received an invitation!
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class=\"free-text\" data-slot-container=\"1\" style=\"font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;border-collapse: collapse;padding: 10px 60px 0px 60px;width: 100%;\">
                            <div data-slot=\"text\">
                                <span><a href=\"\" style=\"color: #ff6f6f;font-weight: bold;text-decoration: none;\">@JaneDoe</a></span> has invited you to join Awesome inc!
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class=\"mini-block-container\" style=\"font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;border-collapse: collapse;padding: 30px 50px;width: 500px;\">
                            <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"border-collapse:separate;\">
                                <tr>
                                    <td class=\"mini-block\" data-slot-container=\"1\" style=\"font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;border-collapse: collapse;background-color: #ffffff;width: 498px;border: 1px solid #cccccc;border-radius: 5px;padding: 45px 75px;\">
                                        <div class=\"user-img\" data-slot=\"text\" style=\"text-align: center;border-radius: 100px;color: #ff6f6f;font-weight: 700;\">
                                            <a href=\"\" style=\"color: #ff6f6f;font-weight: bold;text-decoration: none;\"><img class=\"user-img\" src=\"";
        // line 45
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 45, $this->source); })())) . "/img/profile_pic.jpg"), null, null, true);
        echo "\" alt=\"user img\" style=\"max-width: 600px;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;border: 1px solid #cccccc;text-align: center;border-radius: 5px;color: #ff6f6f;font-weight: 700;width: 130px;\"></a>
                                            <br><a href=\"\" style=\"color: #ff6f6f;font-weight: bold;text-decoration: none;\">@JaneDoe</a>
                                        </div>
                                        <div class=\"user-msg\" data-slot=\"text\" style=\"padding: 10px 0px;font-size: 14px;text-align: center;font-style: italic;\">
                                            \"Hey Bob,
                                            here's your invite! Come check out my profile page when you have a chance. You'll love it!\"
                                        </div>
                                        <div class=\"button\" data-slot=\"button\" data-param-padding-top=\"5\" data-param-button-size=\"1\" data-param-link-text=\"I want this\" data-param-href=\"http://\" data-param-float=\"1\" data-param-background-color=\"#4e5e9e\" data-param-color=\"ffffff\">
                                            <a href=\"#\" target=\"_blank\" style=\"font-size: 16px; color: #ffffff; text-decoration: none; text-decoration: none; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; padding: 12px 18px; background-color: #4e5e9e; display: inline-block;\">
                                                I want this!
                                            </a>
                                            <div style=\"clear:both\"></div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </center>
        </div>
        <div data-section-wrapper=\"1\" style=\"width:100%; background-color: #ffffff;border-top: 1px solid #e5e5e5;border-bottom: 1px solid #e5e5e5;font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;\">
            <center>
                <table data-section=\"1\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" class=\"w320\" style=\"border-collapse: collapse;\">
                    <tr>
                        <td class=\"header-md\" data-slot-container=\"1\" style=\"font-family: Helvetica, Arial, sans-serif;font-size: 24px;color: #4d4d4d;text-align: center;line-height: normal;border-collapse: collapse;font-weight: 700;padding: 35px 0px 0px 0px;\">
                            <div data-slot=\"text\">
                                Come check us out!
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class=\"mini-imgs\" style=\"font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;border-collapse: collapse;padding: 25px 0px 30px 0px;\" data-slot-container=\"1\">
                            <div data-slot=\"text\">
                            <table cellpadding=\"0\" cellspacing=\"0\" width=\"0\" style=\"border-collapse:separate;\">
                                <tr>
                                    <td class=\"mobile-block\" style=\"font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;border-collapse: collapse;\">
                                        <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"border-collapse:separate;\">
                                            <tr>
                                                <td class=\"mini-img\" style=\"font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;border-collapse: collapse;padding: 3px;width: 130px;\">
                                                    <img src=\"";
        // line 85
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 85, $this->source); })())) . "/img/bracelet.jpg"), null, null, true);
        echo "\" alt=\"product\" style=\"max-width: 600px;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;border-radius: 3px;width: 130px;\">
                                                </td>
                                                <td class=\"mini-img\" style=\"font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;border-collapse: collapse;padding: 3px;width: 130px;\">
                                                    <img src=\"";
        // line 88
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 88, $this->source); })())) . "/img/hat.jpg"), null, null, true);
        echo "\" alt=\"product\" style=\"max-width: 600px;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;border-radius: 3px;width: 130px;\">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"mini-img\" style=\"font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;border-collapse: collapse;padding: 3px;width: 130px;\">
                                                    <img src=\"";
        // line 93
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 93, $this->source); })())) . "/img/jacket.jpg"), null, null, true);
        echo "\" alt=\"product\" style=\"max-width: 600px;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;border-radius: 3px;width: 130px;\">
                                                </td>
                                                <td class=\"mini-img\" style=\"font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;border-collapse: collapse;padding: 3px;width: 130px;\">
                                                    <img src=\"";
        // line 96
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 96, $this->source); })())) . "/img/ear_ring.jpg"), null, null, true);
        echo "\" alt=\"product\" style=\"max-width: 600px;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;border-radius: 3px;width: 130px;\">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class=\"mobile-block\" style=\"font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;border-collapse: collapse;\">
                                        <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"border-collapse:separate;\">
                                            <tr>
                                                <td class=\"mini-img\" style=\"font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;border-collapse: collapse;padding: 3px;width: 130px;\">
                                                    <img src=\"";
        // line 105
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 105, $this->source); })())) . "/img/shoes.jpg"), null, null, true);
        echo "\" alt=\"product\" style=\"max-width: 600px;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;border-radius: 3px;width: 130px;\">
                                                </td>
                                                <td class=\"mini-img\" style=\"font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;border-collapse: collapse;padding: 3px;width: 130px;\">
                                                    <img src=\"";
        // line 108
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 108, $this->source); })())) . "/img/ear_ring.jpg"), null, null, true);
        echo "\" alt=\"product\" style=\"max-width: 600px;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;border-radius: 3px;width: 130px;\">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=\"mini-img\" style=\"font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;border-collapse: collapse;padding: 3px;width: 130px;\">
                                                    <img src=\"";
        // line 113
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 113, $this->source); })())) . "/img/jacket.jpg"), null, null, true);
        echo "\" alt=\"product\" style=\"max-width: 600px;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;border-radius: 3px;width: 130px;\">
                                                </td>
                                                <td class=\"mini-img\" style=\"font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;border-collapse: collapse;padding: 3px;width: 130px;\">
                                                    <img src=\"";
        // line 116
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 116, $this->source); })())) . "/img/bracelet.jpg"), null, null, true);
        echo "\" alt=\"product\" style=\"max-width: 600px;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;border-radius: 3px;width: 130px;\">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            </div>
                        </td>
                    </tr>
                </table>
            </center>
        </div>
        <div data-section-wrapper=\"1\" style=\"width:100%; background-color: #f7f7f7;font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;\">
            <center>
                <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\" class=\"w320\" style=\"border-collapse: collapse;\">
                    <tr>
                        <td style=\"padding: 25px 0 25px;font-family: Helvetica, Arial, sans-serif;font-size: 14px;color: #777777;text-align: center;line-height: 21px;border-collapse: collapse;\" data-slot-container=\"1\">
                            <div data-slot=\"text\">
                                <strong>Awesome Inc</strong><br>
                                1234 Awesome St <br>
                                Wonderland <br><br>
                            </div>
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
        return "@themes/oxygen/html/email.html.twig";
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
        return array (  178 => 116,  172 => 113,  164 => 108,  158 => 105,  146 => 96,  140 => 93,  132 => 88,  126 => 85,  83 => 45,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@themes/oxygen/html/email.html.twig", "C:\\xampp\\htdocs\\mautic\\themes\\oxygen\\html\\email.html.twig");
    }
}
