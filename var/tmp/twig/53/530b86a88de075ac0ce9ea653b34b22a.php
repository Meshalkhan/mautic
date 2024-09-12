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

/* @MauticApi/Authorize/oAuth2/authorize.html.twig */
class __TwigTemplate_ae6e02a62a0fd239ea0d1560bbdc7fdb extends Template
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
        // line 2
        return "@MauticUser/Security/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["name"] = twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 4, $this->source); })()), "getName", [], "method", false, false, false, 4);
        // line 5
        $context["msg"] = ((twig_test_empty((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 5, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.api.oauth.clientnoname")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.api.oauth.clientwithname", ["name" => (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 5, $this->source); })())])));
        // line 2
        $this->parent = $this->loadTemplate("@MauticUser/Security/base.html.twig", "@MauticApi/Authorize/oAuth2/authorize.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "mautic.api.oauth.header";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<h4 class=\"mb-lg\">";
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 7, $this->source); })()));
        echo " </h4>
<form class=\"form-login text-center\" role=\"form\" name=\"fos_oauth_server_authorize_form\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_oauth_server_authorize");
        echo "\" method=\"post\">

<input type=\"submit\" class=\"btn btn-primary btn-accept\" name=\"accepted\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.api.oauth.accept"), "html", null, true);
        echo "\" />
<input type=\"submit\" class=\"btn btn-danger btn-deny\" name=\"rejected\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.api.oauth.deny"), "html", null, true);
        echo "\" />

";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "client_id", [], "any", false, false, false, 13), 'row');
        echo "
";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "response_type", [], "any", false, false, false, 14), 'row');
        echo "
";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "redirect_uri", [], "any", false, false, false, 15), 'row');
        echo "
";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "state", [], "any", false, false, false, 16), 'row');
        echo "
";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "scope", [], "any", false, false, false, 17), 'row');
        echo "
";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'rest');
        echo "
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticApi/Authorize/oAuth2/authorize.html.twig";
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
        return array (  102 => 18,  98 => 17,  94 => 16,  90 => 15,  86 => 14,  82 => 13,  77 => 11,  73 => 10,  68 => 8,  63 => 7,  59 => 6,  52 => 3,  47 => 2,  45 => 5,  43 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticApi/Authorize/oAuth2/authorize.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Resources\\views\\Authorize\\oAuth2\\authorize.html.twig");
    }
}
