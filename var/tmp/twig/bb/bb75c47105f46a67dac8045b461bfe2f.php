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

/* @MauticForm/Action/_option.html.twig */
class __TwigTemplate_0c391cb9bf42581665fbb5e62f912b3f extends Template
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
        // line 8
        $context["class"] = ((( !twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "allowCampaignForm", [], "any", true, true, false, 8) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 8, $this->source); })()), "allowCampaignForm", [], "any", false, false, false, 8)))) ? ("action-standalone-only") : (""));
        // line 9
        if ((( !twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "allowCampaignForm", [], "any", true, true, false, 9) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 9, $this->source); })()), "allowCampaignForm", [], "any", false, false, false, 9))) &&  !(isset($context["isStandalone"]) || array_key_exists("isStandalone", $context) ? $context["isStandalone"] : (function () { throw new RuntimeError('Variable "isStandalone" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "    ";
            $context["class"] = ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 10, $this->source); })()) . " hide");
        }
        // line 12
        echo "<option id=\"action_";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\"
        class=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\"
        data-toggle=\"ajaxmodal\"
        data-target=\"#formComponentModal\"
        data-href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_formaction_action", ["objectAction" => "new", "type" =>         // line 18
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 18, $this->source); })()), "tmpl" => "action", "formId" =>         // line 20
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 20, $this->source); })())]), "html", null, true);
        // line 21
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 21, $this->source); })()), "label", [], "array", false, false, false, 21)), "html", null, true);
        echo "</option>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Action/_option.html.twig";
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
        return array (  60 => 21,  58 => 20,  57 => 18,  56 => 16,  50 => 13,  45 => 12,  41 => 10,  39 => 9,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Action/_option.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Action\\_option.html.twig");
    }
}
