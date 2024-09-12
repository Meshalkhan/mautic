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

/* @MauticLead/Import/new.html.twig */
class __TwigTemplate_ad96cc0a561d6d15c9f087046fe88a56 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Import/new.html.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "leadImport";
    }

    // line 15
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "  ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.leads", ["%object%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["objectName"]) || array_key_exists("objectName", $context) ? $context["objectName"] : (function () { throw new RuntimeError('Variable "objectName" does not exist.', 16, $this->source); })()))]), "html", null, true);
        echo "
";
    }

    // line 19
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "  ";
        if ((array_key_exists("step", $context) && (twig_constant("Mautic\\LeadBundle\\Controller\\ImportController::STEP_UPLOAD_CSV") == (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 20, $this->source); })())))) {
            // line 21
            echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["routeBase" => "import", "langVar" => "lead.import", "templateButtons" => ["close" => true], "routeVars" => ["close" => ["object" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 27
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "get", ["object", "contacts"], "method", false, false, false, 27)]]]);
        }
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "  ";
        if ((array_key_exists("step", $context) && (twig_constant("Mautic\\LeadBundle\\Controller\\ImportController::STEP_UPLOAD_CSV") == (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 35, $this->source); })())))) {
            // line 36
            echo "    ";
            echo twig_include($this->env, $context, "@MauticLead/Import/_upload_form.html.twig");
            echo "
  ";
        } else {
            // line 38
            echo "    ";
            echo twig_include($this->env, $context, "@MauticLead/Import/_mapping_form.html.twig");
            echo "
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Import/new.html.twig";
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
        return array (  93 => 38,  87 => 36,  84 => 35,  80 => 34,  75 => 27,  74 => 21,  71 => 20,  67 => 19,  60 => 16,  56 => 15,  49 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Import/new.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Import\\new.html.twig");
    }
}
