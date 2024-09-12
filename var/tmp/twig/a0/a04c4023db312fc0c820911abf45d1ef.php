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

/* @MauticForm/Action/_generic.html.twig */
class __TwigTemplate_39123e8a59407f0175986b0fe59ccc80 extends Template
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
        // line 7
        echo "<div class=\"mauticform-row panel ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "settings", [], "any", false, true, false, 7), "allowCampaignForm", [], "any", true, true, false, 7)) {
            echo "action-standalone-only";
        }
        echo "\" id=\"mauticform_action_";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 8
        if (array_key_exists("inForm", $context)) {
            // line 9
            echo "        ";
            echo twig_include($this->env, $context, "@MauticForm/Builder/_actions.html.twig", ["id" =>             // line 10
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 10, $this->source); })()), "route" => "mautic_formaction_action", "actionType" => "action", "formId" =>             // line 13
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 13, $this->source); })())]);
            // line 14
            echo "
    ";
        }
        // line 16
        echo "    <a data-toggle=\"ajaxmodal\" data-target=\"#formComponentModal\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_formaction_action", ["objectAction" => "edit", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 16, $this->source); })()), "formId" => (isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 16, $this->source); })())]), "html", null, true);
        echo "\"><span class=\"action-label\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</span></a>
    ";
        // line 17
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17))) {
            // line 18
            echo "      <span class=\"action-descr\">";
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18));
            echo "</span>
    ";
        }
        // line 20
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Action/_generic.html.twig";
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
        return array (  72 => 20,  66 => 18,  64 => 17,  57 => 16,  53 => 14,  51 => 13,  50 => 10,  48 => 9,  46 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Action/_generic.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Action\\_generic.html.twig");
    }
}
