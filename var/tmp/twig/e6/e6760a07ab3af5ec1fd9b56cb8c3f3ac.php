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

/* @MauticCore/Default/navbar.html.twig */
class __TwigTemplate_bc37dddddaeb4aba7d40a84ef2fb1167 extends Template
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
        echo "<div class=\"loading-bar\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.loading", [], "messages");
        // line 3
        echo "</div>

<div class=\"navbar-nocollapse\">
    <!-- start: left nav -->
    <ul class=\"nav navbar-nav navbar-left\">
        <li class=\"visible-xs\">
            <a href=\"javascript: void(0);\" data-toggle=\"sidebar\" data-direction=\"ltr\">
                <i class=\"fa fa-navicon fs-16\"></i>
            </a>
        </li>
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Mautic\\CoreBundle\\Controller\\DefaultController::globalSearchAction"));
        echo "
    </ul>
    <!--/ end: left nav -->

    <!-- start: right nav -->
    <ul class=\"nav navbar-nav navbar-right\">
        
        ";
        // line 20
        echo twig_include($this->env, $context, "@MauticCore/Menu/profile.html.twig");
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Mautic\\CoreBundle\\Controller\\DefaultController::notificationsAction"));
        echo "
        <li>
            <a href=\"javascript: void(0);\" data-toggle=\"sidebar\" data-direction=\"rtl\">
                <i class=\"ri-settings-5-line ri-xl\"></i>
            </a>
        </li>
    </ul>
    <div class=\"navbar-toolbar pull-right mt-15 mr-10\">
    ";
        // line 29
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(twig_constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_NAVBAR"));
        echo "
    ";
        // line 30
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render();
        echo "
    </div>

    <!--/ end: right nav -->
</div>
<!--/ end: navbar nocollapse -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Default/navbar.html.twig";
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
        return array (  83 => 30,  79 => 29,  68 => 21,  64 => 20,  54 => 13,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Default/navbar.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Default\\navbar.html.twig");
    }
}
