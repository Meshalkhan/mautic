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

/* @MauticForm/Builder/_actions.html.twig */
class __TwigTemplate_8cf29701bb48ba4553d19f71c03a2261 extends Template
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
        $context["route"] = ((array_key_exists("route", $context)) ? (_twig_default_filter((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 8, $this->source); })()), "mautic_formfield_action")) : ("mautic_formfield_action"));
        // line 9
        echo "
<div class=\"form-buttons btn-group\" role=\"group\" aria-label=\"Field options\">
    <button type=\"button\" data-toggle=\"ajaxmodal\" data-target=\"#formComponentModal\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 11, $this->source); })()), ["objectAction" => "edit", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 11, $this->source); })()), "formId" => (isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 11, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-default btn-edit\">
        <i class=\"ri-edit-line text-primary\"></i>
    </button>
    ";
        // line 14
        if (( !array_key_exists("disallowDelete", $context) || (array_key_exists("disallowDelete", $context) && (false == (isset($context["disallowDelete"]) || array_key_exists("disallowDelete", $context) ? $context["disallowDelete"] : (function () { throw new RuntimeError('Variable "disallowDelete" does not exist.', 14, $this->source); })()))))) {
            // line 15
            echo "      <a type=\"button\" data-hide-panel=\"true\" data-toggle=\"ajax\" data-ignore-formexit=\"true\" data-method=\"POST\" data-hide-loadingbar=\"true\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 15, $this->source); })()), ["objectAction" => "delete", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })()), "formId" => (isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 15, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-default\">
          <i class=\"ri-delete-bin-line text-danger\"></i>
      </a>
    ";
        }
        // line 19
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Builder/_actions.html.twig";
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
        return array (  59 => 19,  51 => 15,  49 => 14,  43 => 11,  39 => 9,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Builder/_actions.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Builder\\_actions.html.twig");
    }
}
