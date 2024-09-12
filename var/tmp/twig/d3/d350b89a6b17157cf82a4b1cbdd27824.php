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

/* @MauticCore/Notification/flashes.html.twig */
class __TwigTemplate_d1036f8aa1b4030b6f11e950168f81c5 extends Template
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
        $context["alertType"] = ((array_key_exists("alertType", $context)) ? (_twig_default_filter((isset($context["alertType"]) || array_key_exists("alertType", $context) ? $context["alertType"] : (function () { throw new RuntimeError('Variable "alertType" does not exist.', 1, $this->source); })()), "growl")) : ("growl"));
        // line 2
        echo "<div id=\"flashes\"";
        if (((isset($context["alertType"]) || array_key_exists("alertType", $context) ? $context["alertType"] : (function () { throw new RuntimeError('Variable "alertType" does not exist.', 2, $this->source); })()) == "growl")) {
            echo " class=\"alert-growl-container\"";
        }
        echo ">
    ";
        // line 3
        echo twig_include($this->env, $context, "@MauticCore/Notification/flash_messages.html.twig", ["dismissable" => (((((        // line 4
array_key_exists("notDismissable", $context)) ? (_twig_default_filter((isset($context["notDismissable"]) || array_key_exists("notDismissable", $context) ? $context["notDismissable"] : (function () { throw new RuntimeError('Variable "notDismissable" does not exist.', 4, $this->source); })()), false)) : (false)) == false)) ? (" alert-dismissable") : ("")), "alertType" =>         // line 5
(isset($context["alertType"]) || array_key_exists("alertType", $context) ? $context["alertType"] : (function () { throw new RuntimeError('Variable "alertType" does not exist.', 5, $this->source); })())]);
        // line 6
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Notification/flashes.html.twig";
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
        return array (  50 => 6,  48 => 5,  47 => 4,  46 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Notification/flashes.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Notification\\flashes.html.twig");
    }
}
