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

/* @MauticNotification/Notification/preview.html.twig */
class __TwigTemplate_b5c24d0b736c46c8a4f40e6f7f392bcd extends Template
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
        // line 5
        echo "<label>Preview</label>
<div id=\"notification-preview\" class=\"panel panel-default\">
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"icon height-auto text-center\">
                <span class=\"fa fa-bell fs-48\"></span>
            </div>
            <div class=\"text height-auto\">
                <h4>";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 14, $this->source); })()), "heading", [], "any", false, false, false, 14)) {
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 15, $this->source); })()), "heading", [], "any", false, false, false, 15), "html", null, true);
        } else {
            // line 17
            echo "Your notification header";
        }
        // line 19
        echo "</h4>
                <p>";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 21, $this->source); })()), "message", [], "any", false, false, false, 21)) {
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 22, $this->source); })()), "message", [], "any", false, false, false, 22), "html", null, true);
        } else {
            // line 24
            echo "The message body of your notification";
        }
        // line 26
        echo "</p>
                <span>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "server", [], "any", false, false, false, 27), "get", ["HTTP_HOST"], "method", false, false, false, 27), "html", null, true);
        echo "</span>
            </div>
        </div>
        ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 30, $this->source); })()), "url", [], "any", false, false, false, 30) && twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 30, $this->source); })()), "button", [], "any", false, false, false, 30))) {
            // line 31
            echo "            <hr>
            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 32, $this->source); })()), "url", [], "any", false, false, false, 32), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 32, $this->source); })()), "button", [], "any", false, false, false, 32), "html", null, true);
            echo "</a>
        ";
        }
        // line 34
        echo "    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticNotification/Notification/preview.html.twig";
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
        return array (  87 => 34,  80 => 32,  77 => 31,  75 => 30,  69 => 27,  66 => 26,  63 => 24,  60 => 22,  58 => 21,  55 => 19,  52 => 17,  49 => 15,  47 => 14,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticNotification/Notification/preview.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\NotificationBundle\\Resources\\views\\Notification\\preview.html.twig");
    }
}
