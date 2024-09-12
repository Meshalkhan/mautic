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

/* @Integrations/Auth/authenticated.html.twig */
class __TwigTemplate_08cbc08171e3b5bf656e6fb12c5130ee extends Template
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
        return "@MauticCore/Default/slim.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["alertClass"] = (((isset($context["authenticationError"]) || array_key_exists("authenticationError", $context) ? $context["authenticationError"] : (function () { throw new RuntimeError('Variable "authenticationError" does not exist.', 2, $this->source); })())) ? ("danger") : ("success"));
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/slim.html.twig", "@Integrations/Auth/authenticated.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<style>
    #app-content {margin: 0;}
</style>
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"alert alert-";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["alertClass"]) || array_key_exists("alertClass", $context) ? $context["alertClass"] : (function () { throw new RuntimeError('Variable "alertClass" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " margin\" style=\"margin:20px\" role=\"alert\">
            ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "
        </div>
    </div>
</div>
<div class=\"row text-center\">
    <button type=\"button\" id=\"integration_details_authButton\" name=\"integration_details[authButton]\" class=\"btn btn-success btn-lg\" onclick=\"window.close();\">
        <i class=\"ri-check-line\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.closewindow"), "html", null, true);
        echo "
    </button>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Integrations/Auth/authenticated.html.twig";
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
        return array (  74 => 17,  64 => 10,  60 => 9,  53 => 4,  49 => 3,  44 => 1,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Integrations/Auth/authenticated.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Resources\\views\\Auth\\authenticated.html.twig");
    }
}
