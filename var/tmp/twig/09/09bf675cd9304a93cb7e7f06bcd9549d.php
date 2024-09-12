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

/* @MauticCore/Helper/publishstatus_badge.html.twig */
class __TwigTemplate_a850c808e50ed96f630f327b4179e625 extends Template
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
        ob_start(function () { return ''; });
        // line 2
        if ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 2, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 2) === "published")) {
            // line 3
            echo "success";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 4, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 4) === "unpublished") || (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 4, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 4) === "expired"))) {
            // line 5
            echo "danger";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 6) === "pending")) {
            // line 7
            echo "warning";
        }
        $context["labelColor"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        ob_start(function () { return ''; });
        // line 11
        if ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 11) === "published")) {
            // line 12
            echo "check";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 13) === "unpublished") || (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 13) === "expired"))) {
            // line 14
            echo "close";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 15) === "pending")) {
            // line 16
            echo "more";
        }
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        $context["labelText"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.core.form." . (((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 19) == "published")) ? ("active") : ("inactive"))));
        // line 20
        echo "<span title=\"";
        echo twig_escape_filter($this->env, (isset($context["labelText"]) || array_key_exists("labelText", $context) ? $context["labelText"] : (function () { throw new RuntimeError('Variable "labelText" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, (isset($context["labelText"]) || array_key_exists("labelText", $context) ? $context["labelText"] : (function () { throw new RuntimeError('Variable "labelText" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" class=\"bg-";
        echo twig_escape_filter($this->env, (isset($context["labelColor"]) || array_key_exists("labelColor", $context) ? $context["labelColor"] : (function () { throw new RuntimeError('Variable "labelColor" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " mt-sm publishstatus_pulse\"> </span>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/publishstatus_badge.html.twig";
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
        return array (  71 => 20,  69 => 19,  65 => 16,  63 => 15,  61 => 14,  59 => 13,  57 => 12,  55 => 11,  53 => 10,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/publishstatus_badge.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\publishstatus_badge.html.twig");
    }
}
