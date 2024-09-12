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

/* @MauticNotification/MobileNotification/preview.html.twig */
class __TwigTemplate_64ede46d8e837325066a5734479d3bd0 extends Template
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
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
            ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 8, $this->source); })()), "heading", [], "any", false, false, false, 8), "html", null, true);
        echo "
            ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 9, $this->source); })()), "url", [], "any", false, false, false, 9)) {
            // line 10
            echo "            <span class=\"pull-right\">
                <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 11, $this->source); })()), "url", [], "any", false, false, false, 11), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"ri-external-link-line\"></span></a>
            </span>
            ";
        }
        // line 14
        echo "        </h3>
    </div>
    <div class=\"panel-body\">
        <p>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 17, $this->source); })()), "message", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
        ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 18, $this->source); })()), "url", [], "any", false, false, false, 18) && twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 18, $this->source); })()), "button", [], "any", false, false, false, 18))) {
            // line 19
            echo "            <br>
            <p><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 20, $this->source); })()), "url", [], "any", false, false, false, 20), "html", null, true);
            echo "\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 20, $this->source); })()), "button", [], "any", false, false, false, 20), "html", null, true);
            echo "</a></p>
        ";
        }
        // line 22
        echo "    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticNotification/MobileNotification/preview.html.twig";
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
        return array (  78 => 22,  71 => 20,  68 => 19,  66 => 18,  62 => 17,  57 => 14,  51 => 11,  48 => 10,  46 => 9,  42 => 8,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticNotification/MobileNotification/preview.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\NotificationBundle\\Resources\\views\\MobileNotification\\preview.html.twig");
    }
}
