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

/* @MauticLead/SubscribedEvents/Timeline/import.html.twig */
class __TwigTemplate_efc622c6c5bfa77dc4b749db3fce0d53 extends Template
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
        // line 6
        $context["import"] = twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 6, $this->source); })()), "extra", [], "array", false, false, false, 6);
        // line 7
        echo "<dl class=\"dl-horizontal\">
";
        // line 8
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 8, $this->source); })()), "user_id", [], "array", false, false, false, 8))) {
            // line 9
            echo "    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.createdby"), "html", null, true);
            echo "</dt>
    <dd>
        <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 11, $this->source); })()), "user_id", [], "array", false, false, false, 11)]), "html", null, true);
            echo "\" data-toggle=\"ajax\">
            ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 12, $this->source); })()), "user_name", [], "array", false, false, false, 12), "html", null, true);
            echo "
        </a>
    </dd>
";
        }
        // line 16
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 16, $this->source); })()), "properties", [], "array", false, false, false, 16), "file", [], "array", false, false, false, 16))) {
            // line 17
            echo "    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.source.file"), "html", null, true);
            echo "</dt>
    <dd>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 18, $this->source); })()), "properties", [], "array", false, false, false, 18), "file", [], "array", false, false, false, 18), "html", null, true);
            echo "</dd>
";
        }
        // line 20
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 20, $this->source); })()), "properties", [], "array", false, false, false, 20), "line", [], "array", false, false, false, 20))) {
            // line 21
            echo "    <dt>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.csv.line.number"), "html", null, true);
            echo "</dt>
    <dd>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 22, $this->source); })()), "properties", [], "array", false, false, false, 22), "line", [], "array", false, false, false, 22), "html", null, true);
            echo "</dd>
";
        }
        // line 24
        echo "</dl>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/SubscribedEvents/Timeline/import.html.twig";
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
        return array (  85 => 24,  80 => 22,  75 => 21,  73 => 20,  68 => 18,  63 => 17,  61 => 16,  54 => 12,  50 => 11,  44 => 9,  42 => 8,  39 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/SubscribedEvents/Timeline/import.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\SubscribedEvents\\Timeline\\import.html.twig");
    }
}
