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

/* @MauticPlugin/Auth/auth.html.twig */
class __TwigTemplate_f4fafcca127a820271bbc36929be1245 extends Template
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
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["contentOnly"] = true;
        // line 2
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticPlugin/Auth/auth.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->addScriptDeclaration((((((((((((("Mautic.handleIntegrationCallback(\"" . (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 7, $this->source); })())) . "\", \"") . (isset($context["csrfToken"]) || array_key_exists("csrfToken", $context) ? $context["csrfToken"] : (function () { throw new RuntimeError('Variable "csrfToken" does not exist.', 7, $this->source); })())) . "\", \"") . (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 7, $this->source); })())) . "\", \"") . (isset($context["callbackUrl"]) || array_key_exists("callbackUrl", $context) ? $context["callbackUrl"] : (function () { throw new RuntimeError('Variable "callbackUrl" does not exist.', 7, $this->source); })())) . "\", \"") . (isset($context["clientIdKey"]) || array_key_exists("clientIdKey", $context) ? $context["clientIdKey"] : (function () { throw new RuntimeError('Variable "clientIdKey" does not exist.', 7, $this->source); })())) . "\", \"") . (isset($context["clientSecretKey"]) || array_key_exists("clientSecretKey", $context) ? $context["clientSecretKey"] : (function () { throw new RuntimeError('Variable "clientSecretKey" does not exist.', 7, $this->source); })())) . "\");"), "bodyClose"), "html", null, true);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPlugin/Auth/auth.html.twig";
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
        return array (  61 => 7,  57 => 6,  50 => 4,  45 => 2,  43 => 1,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPlugin/Auth/auth.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Resources\\views\\Auth\\auth.html.twig");
    }
}
