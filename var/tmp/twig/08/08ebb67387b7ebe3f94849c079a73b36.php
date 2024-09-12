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

/* @MauticUser/Security/login.html.twig */
class __TwigTemplate_9bb9016cb28b05830777506fac04770f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
            'mainContent' => [$this, 'block_mainContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "xmlHttpRequest", [], "any", false, false, false, 1)) ? ("@MauticCore/Default/content.html.twig") : ("@MauticUser/Security/base.html.twig")), "@MauticUser/Security/login.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.auth.header", [], "messages");
    }

    // line 3
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.auth.expired.header", [], "messages");
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "xmlHttpRequest", [], "any", false, false, false, 6)) {
            // line 7
            echo "        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-8 col-md-6 inline-login\">
                ";
            // line 9
            $this->displayBlock("mainContent", $context, $blocks);
            echo "
            </div>
        </div>
    ";
        } else {
            // line 13
            echo "        ";
            $this->displayBlock("mainContent", $context, $blocks);
            echo "
    ";
        }
    }

    // line 17
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "\t<form class=\"form-group login-form\" name=\"login\" data-toggle=\"ajax\" role=\"form\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_logincheck");
        echo "\" method=\"post\">
\t\t<div class=\"input-group mb-md\">

\t\t\t<span class=\"input-group-addon\">
\t\t\t\t<i class=\"ri-user-6-fill\"></i>
\t\t\t</span>
\t\t\t<label for=\"username\" class=\"sr-only\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.auth.form.loginusername", [], "messages");
        echo "</label>
\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control input-lg\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 25, $this->source); })()));
        echo "\" required autofocus placeholder=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.auth.form.loginusername", [], "messages");
        echo "\"/>
\t\t</div>
\t\t<div class=\"input-group mb-md\">
\t\t\t<span class=\"input-group-addon\">
\t\t\t\t<i class=\"fa fa-key\"></i>
\t\t\t</span>
\t\t\t<label for=\"password\" class=\"sr-only\">";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.password", [], "messages");
        echo ":</label>
\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control input-lg\" required placeholder=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.password", [], "messages");
        echo "\"/>
\t\t</div>

\t\t<div class=\"checkbox-inline custom-primary pull-left mb-md\">
\t\t\t<label for=\"remember_me\">
\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"/>
\t\t\t\t<span></span>
\t\t\t\t";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.auth.form.rememberme", [], "messages");
        // line 40
        echo "\t\t\t</label>
\t\t</div>

\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"));
        echo "\"/>
\t\t<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.auth.form.loginbtn", [], "messages");
        echo "</button>

\t\t<div class=\"mt-sm text-right\">
\t\t\t<a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_passwordreset");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.user.passwordreset.link", [], "messages");
        echo "</a>
\t\t</div>
\t</form>
\t";
        // line 50
        if ( !twig_test_empty((isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 50, $this->source); })()))) {
            // line 51
            echo "\t\t<ul class=\"list-group\">
\t\t\t";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sso"]) {
                // line 53
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_sso_login", ["integration" => twig_get_attribute($this->env, $this->source, $context["sso"], "getName", [], "method", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"list-group-item\">
\t\t\t\t\t<img class=\"pull-left mr-xs\" style=\"height: 16px;\" src=\"";
                // line 54
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["sso"], "getIcon", [], "method", false, false, false, 54));
                echo "\">
\t\t\t\t\t<p class=\"list-group-item-text\">";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.integration.sso." . twig_get_attribute($this->env, $this->source, $context["sso"], "getName", [], "method", false, false, false, 55))), "html", null, true);
                echo "</p>
\t\t\t\t</a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sso'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t</ul>
\t";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticUser/Security/login.html.twig";
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
        return array (  183 => 58,  174 => 55,  170 => 54,  165 => 53,  161 => 52,  158 => 51,  156 => 50,  148 => 47,  142 => 44,  138 => 43,  133 => 40,  131 => 39,  121 => 32,  117 => 31,  106 => 25,  102 => 24,  92 => 18,  88 => 17,  80 => 13,  73 => 9,  69 => 7,  66 => 6,  62 => 5,  55 => 3,  48 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticUser/Security/login.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
