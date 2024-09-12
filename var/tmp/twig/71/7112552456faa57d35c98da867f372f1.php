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

/* @MauticUser/Security/base.html.twig */
class __TwigTemplate_53b632ad21d1baa2863ca1f686e4e9a2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'pageTitle' => [$this, 'block_pageTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('pageTitle', $context, $blocks);
        echo "</title>
    <meta name=\"robots\" content=\"noindex, nofollow\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getOverridableUrl("images/favicon.ico");
        echo "\" />
    <link rel=\"apple-touch-icon\" href=\"";
        // line 10
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getOverridableUrl("images/apple-touch-icon.png");
        echo "\" />
    ";
        // line 11
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputSystemStylesheets();
        // line 12
        echo twig_include($this->env, $context, "@MauticCore/Default/script.html.twig");
        // line 13
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputHeadDeclarations();
        echo "
</head>
<body>
<section id=\"main\" role=\"main\">
    <div class=\"container\" style=\"margin-top:100px;\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-lg-offset-4\">
                <div class=\"panel\" name=\"form-login\">
                    <div class=\"panel-body\">
                        <div class=\"mautic-logo img-circle mb-md text-center\">
                            <svg version=\"1.1\" class=\"mautic-logo-figure\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 128 128\" enable-background=\"new 0 0 128 128\" xml:space=\"preserve\">
                            <path class=\"circle\" d=\"M64,119.843c-30.937,0-56.108-25.17-56.108-56.108C7.893,32.799,33.063,7.629,64,7.629
                            c7.474,0,14.734,1.446,21.578,4.301c1.936,0.807,2.85,3.03,2.041,4.964c-0.805,1.937-3.029,2.849-4.963,2.043
                            C76.742,16.472,70.465,15.221,64,15.221c-26.751,0-48.514,21.763-48.514,48.514c0,26.752,21.763,48.516,48.514,48.516
                            c26.751,0,48.513-21.764,48.513-48.516c0-5.735-0.988-11.345-2.939-16.677c-0.723-1.968,0.289-4.149,2.258-4.869
                            c1.971-0.721,4.15,0.291,4.871,2.259c2.258,6.171,3.404,12.661,3.404,19.287C120.107,94.673,94.938,119.843,64,119.843\"/>
                            <polygon class=\"m\" points=\"88.545,57.987 79.807,67.055 84.664,87.332 95.621,87.332 \"/>
                            <polygon class=\"m-arrow\" points=\"84.982,31.157 88.004,34.176 63.933,59.605 43.446,38.475 31.664,87.332 42.621,87.332
                            49.122,60.198 63.933,76.399 95.699,41.815 98.738,44.875 101.75,27.784 \"/>
                            </svg>
                        </div>
                        <div id=\"main-panel-flash-msgs\">";
        // line 35
        echo twig_include($this->env, $context, "@MauticCore/Notification/flashes.html.twig");
        // line 36
        echo "</div>
                        ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "                    </div>
                </div>
            </div>
        </div>
         <div class=\"row\">
            <div class=\"col-lg-4 col-lg-offset-4 text-center text-muted\">
                ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.copyright", ["%date%" => twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, "Y"), "format", ["Y"], "method", false, false, false, 44)]), "html", null, true);
        echo "
            </div>
        </div>
    </div>
</section>
";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->getContext(), "html", null, true);
        echo "
</body>
</html>
";
    }

    // line 6
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mautic";
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticUser/Security/base.html.twig";
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
        return array (  126 => 37,  119 => 6,  111 => 49,  103 => 44,  95 => 38,  93 => 37,  90 => 36,  88 => 35,  64 => 13,  62 => 12,  60 => 11,  56 => 10,  52 => 9,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticUser/Security/base.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Resources\\views\\Security\\base.html.twig");
    }
}
