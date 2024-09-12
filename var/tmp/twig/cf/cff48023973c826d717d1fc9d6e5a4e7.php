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

/* @MauticCore/Menu/profile.html.twig */
class __TwigTemplate_9b5aac8171c51aa0cadd604e7e6e0bec extends Template
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
        $context["inline"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->menuRender("profile");
        // line 2
        echo "<li class=\"dropdown\">
    <a class=\"dropdown-toggle user\" data-toggle=\"dropdown\" href=\"#\">
        <span class=\"img-wrapper\"><img src=\"";
        // line 4
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\GravatarExtension']->getImage(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "getUser", [], "method", false, false, false, 4), "getEmail", [], "method", false, false, false, 4));
        echo "\"></span>
        <span class=\"flex-column-inline info\">
            <span class=\"text fw-sb ml-xs hidden-xs\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "getUser", [], "method", false, false, false, 6), "getName", [], "method", false, false, false, 6), "html", null, true);
        echo "</span>
            <span class=\"text ml-xs small hidden-xs position\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "getUser", [], "method", false, false, false, 7), "getPosition", [], "method", false, false, false, 7), "html", null, true);
        echo "</span>
        </span>
    </a>
    <ul class=\"dropdown-menu dropdown-menu-right\">
        <li>
            <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_account");
        echo "\" data-toggle=\"ajax\">
                <i class=\"ri-user-smile-line ri-lg\"></i><span>";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.account.settings", [], "messages");
        echo "</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_logout");
        echo "\">
                <i class=\"ri-logout-circle-r-line ri-lg\"></i><span>";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.auth.logout", [], "messages");
        echo "</span>
            </a>
        </li>

        ";
        // line 22
        if ((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "        <li role=\"separator\" class=\"divider\"></li>
        ";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "
        ";
        }
        // line 26
        echo "    </ul>
</li>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Menu/profile.html.twig";
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
        return array (  92 => 26,  87 => 24,  84 => 23,  82 => 22,  75 => 18,  71 => 17,  64 => 13,  60 => 12,  52 => 7,  48 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Menu/profile.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Menu\\profile.html.twig");
    }
}
