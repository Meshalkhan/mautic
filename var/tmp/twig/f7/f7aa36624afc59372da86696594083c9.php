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

/* @themes/neopolitan/html/page.html.twig */
class __TwigTemplate_c6f0a27579d0d5721b7ecbde79f80f45 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("@themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 1, $this->source); })())) . "/html/base.html.twig"), "@themes/neopolitan/html/page.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div data-section-wrapper=\"1\">
    <center>
        <table data-section=\"1\" style=\"margin: 0 auto;border-collapse: collapse !important;width: 600px;\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" class=\"w320\">
            <tr>
                <td style=\"font-size: 30px;text-align: center;font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;\" data-slot-container=\"1\">
                    <div data-slot=\"text\">
                        <br>
                            Awesome Co
                        <br>
                        <br>
                    </div>
                </td>
            </tr>
        </table>
    </center>
</div>

<div data-section-wrapper=\"1\">
    <center>
        <table data-section=\"1\" style=\"margin: 0 auto;border-collapse: collapse !important;width: 600px;background-color: #4dbfbf;\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#4dbfbf\" width=\"600\" class=\"w320\">
            <tr>
                <td style=\"font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\" data-slot-container=\"1\">
                    <br>
                    <div data-slot=\"image\">
                        <img src=\"";
        // line 28
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 28, $this->source); })())) . "/img/robomail.gif"), null, null, true);
        echo "\" width=\"224\" height=\"240\" alt=\"robot picture\">
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"headline\" style=\"font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;color: #ffffff;font-size: 36px;\" data-slot-container=\"1\">
                    <div data-slot=\"text\">
                        Good News!
                    </div>
                </td>
            </tr>
            <tr>
                <td style=\"font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\">

                    <center>
                        <table style=\"margin: 0 auto;border-collapse: collapse !important;\" cellpadding=\"0\" cellspacing=\"0\" width=\"60%\">
                            <tr>
                                <td style=\"color: #187272;font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\" data-slot-container=\"1\">
                                    <div data-slot=\"text\">
                                        <br>
                                         Your order has shipped! To track your order or make any changes please click the button below.
                                        <br>
                                        <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </center>

                </td>
            </tr>
            <tr>
                <td style=\"font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\" data-slot-container=\"1\">
                    <div class=\"button\" data-slot=\"button\" data-param-padding-top=\"5\" data-param-button-size=\"1\" data-param-link-text=\"My Order\" data-param-href=\"http://\" data-param-float=\"1\" data-param-background-color=\"#178f8f\" data-param-color=\"ffffff\">
                        <a href=\"#\" target=\"_blank\" style=\"font-size: 16px; color: #ffffff; text-decoration: none; text-decoration: none; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; padding: 15px 66px; background-color: #178f8f; display: inline-block;font-family: Helvetica, Arial, sans-serif;font-size: 16px;font-weight: bold;\">
                            My Order
                        </a>
                        <div style=\"clear:both\"></div>
                    </div>
                    <br>
                    <br>
                </td>
            </tr>
        </table>
    </center>
</div>
<div data-section-wrapper=\"1\">
    <center>
        <table data-section=\"1\" style=\"margin: 0 auto;border-collapse: collapse !important;width: 600px; background-color: #f5774e;\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#f5774e\" width=\"600\" class=\"w320\">
            <tr>
                <td style=\"font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\">

                    <center>
                        <table style=\"margin: 0 auto;border-collapse: collapse !important;width: 80% !important;\" cellspacing=\"0\" cellpadding=\"0\" class=\"force-width-80\">
                            <tr>
                                <td style=\"text-align: left;color: #933f24;font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;\" data-slot-container=\"1\">
                                    <div data-slot=\"text\">
                                        <br>
                                        <br>
                                        <span style=\"color:#ffffff;\">Bob Erlicious</span> <br>
                                        123 Flower Drive <br>
                                        Victoria, BC <br>
                                        V9P 2E8 <br>
                                        1(250)222-2232
                                    </div>
                                </td>
                                <td style=\"text-align: right;vertical-align: top;color: #933f24;font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;\" data-slot-container=\"1\">
                                    <div data-slot=\"text\">
                                        <br>
                                        <br>
                                        <span style=\"color:#ffffff;\">Invoice: 00234</span> <br>
                                        April 3, 2014
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <table style=\"margin: 0 auto;border-collapse: collapse !important;width: 80% !important;\" cellspacing=\"0\" cellpadding=\"0\" class=\"force-width-80\">
                            <tr>
                                <td class=\"mobile-block\" style=\"font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\" data-slot-container=\"1\">
                                    <div data-slot=\"text\">
                                        <br>
                                        <br>

                                        <table cellspacing=\"0\" cellpadding=\"0\" style=\"border-collapse: collapse !important;width: 100% !important;\">
                                            <tr>
                                                <td style=\"color: #ffffff;background-color: #ac4d2f;padding: 10px 0px;font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\">
                                                    Expected Delivery Date
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"color: #933f24;padding: 10px 0px;background-color: #f7a084;font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\">
                                                    Monday, 13th November 2014
                                                </td>
                                            </tr>
                                        </table>

                                        <br>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <table style=\"margin: 0 auto;border-collapse: collapse !important;width: 80% !important;\" cellspacing=\"0\" cellpadding=\"0\" class=\"force-width-80\">
                            <tr>
                                <td style=\"text-align: left;color: #933f24;font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;\" data-slot-container=\"1\">
                                    <div data-slot=\"text\">
                                        <br>
                                        Thank you for your business. Please <a style=\"color: #ffffff;text-decoration: none;border: 0;outline: none;\" href=\"#\">contact us</a> with any questions regarding your order.
                                        <br>
                                        <br>
                                        Awesome Inc
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </center>
                </td>
            </tr>
        </table>
    </center>
</div>

<div data-section-wrapper=\"1\">
    <center>
        <table data-section=\"1\" style=\"margin: 0 auto;border-collapse: collapse !important;width: 600px;background-color: #414141\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#414141\" width=\"600\" class=\"w320\">
            <tr>
                <td style=\"font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\" data-slot-container=\"1\">
                    <div data-slot=\"text\">
                        <br>
                        <br>
                        <img src=\"";
        // line 162
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 162, $this->source); })())) . "/img/gplus.gif"), null, null, true);
        echo "\" alt=\"google+\">
                        <img src=\"";
        // line 163
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 163, $this->source); })())) . "/img/facebook.gif"), null, null, true);
        echo "\" alt=\"facebook\">
                        <img src=\"";
        // line 164
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 164, $this->source); })())) . "/img/twitter.gif"), null, null, true);
        echo "\" alt=\"twitter\">
                        <br>
                        <br>
                    </div>
                </td>
            </tr>
            <tr>
                <td style=\"color: #bbbbbb;font-size: 12px;font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\" data-slot-container=\"1\">
                    <div data-slot=\"text\">
                        <br><br>
                    </div>
                </td>
            </tr>
            <tr>
                <td style=\"color: #bbbbbb;font-size: 12px;font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\" data-slot-container=\"1\">
                    <div data-slot=\"text\">
                        © 2014 All Rights Reserved
                        <br>
                        <br>
                    </div>
                </td>
            </tr>
        </table>
    </center>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@themes/neopolitan/html/page.html.twig";
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
        return array (  220 => 164,  216 => 163,  212 => 162,  75 => 28,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@themes/neopolitan/html/page.html.twig", "C:\\xampp\\htdocs\\mautic\\themes\\neopolitan\\html\\page.html.twig");
    }
}
