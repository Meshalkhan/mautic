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

/* @MauticApi/Security/login.html.twig */
class __TwigTemplate_9185867d4e7d9985d6e900258f94cfad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MauticUser/Security/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticUser/Security/base.html.twig", "@MauticApi/Security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.api.oauth.header"), "html", null, true);
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<form class=\"form-group login-form\" name=\"login\" data-toggle=\"ajax\" role=\"form\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 4, $this->source); })()));
        echo "\" method=\"post\">
    <div class=\"input-group mb-md\">
        <span class=\"input-group-addon\"><i class=\"ri-user-6-fill\"></i></span>
        <label for=\"username\" class=\"sr-only\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.auth.form.loginusername"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control input-lg\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\" required autofocus placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.auth.form.loginusername"), "html", null, true);
        echo "\" />
    </div>
    <div class=\"input-group mb-md\">
        <span class=\"input-group-addon\"><i class=\"fa fa-key\"></i></span>
        <label for=\"password\" class=\"sr-only\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.password"), "html", null, true);
        echo ":</label>
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control input-lg\" required placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.password"), "html", null, true);
        echo "\" />
    </div>
    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.auth.form.loginbtn"), "html", null, true);
        echo "</button>
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticApi/Security/login.html.twig";
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
        return array (  87 => 15,  82 => 13,  78 => 12,  69 => 8,  65 => 7,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticApi/Security/login.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
