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

/* @MauticLead/Auditlog/details.html.twig */
class __TwigTemplate_da6ccfd876c3afda262a5ed4a7f9c855 extends Template
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
        $context["objects"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "details", [], "any", false, true, false, 6), "fields", [], "any", true, true, false, 6)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 6, $this->source); })()), "details", [], "any", false, false, false, 6), "fields", [], "any", false, false, false, 6)) : ([]));
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 7, $this->source); })()), "details", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 8
            echo "    ";
            if (((("fields" != $context["key"]) && ("dateIdentified" != $context["key"])) && ("dateModified" != $context["key"]))) {
                // line 9
                echo "        ";
                $context["objects"] = twig_array_merge((isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 9, $this->source); })()), [$context["key"] => $context["value"]]);
                // line 10
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        if ((twig_length_filter($this->env, (isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 12, $this->source); })())) > 0)) {
            // line 13
            echo "    ";
            if (("create" == twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 13, $this->source); })()), "eventType", [], "any", false, false, false, 13))) {
                // line 14
                echo "        ";
                echo twig_include($this->env, $context, "@MauticLead/Auditlog/_table.html.twig", ["objects" => (isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 14, $this->source); })())]);
                echo "
    ";
            } elseif (("delete" == twig_get_attribute($this->env, $this->source,             // line 15
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 15, $this->source); })()), "eventType", [], "any", false, false, false, 15))) {
                // line 16
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.audit.deleted"), "html", null, true);
                echo "
    ";
            } elseif (("update" == twig_get_attribute($this->env, $this->source,             // line 17
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "eventType", [], "any", false, false, false, 17))) {
                // line 18
                echo "        ";
                echo twig_include($this->env, $context, "@MauticLead/Auditlog/_table.html.twig", ["objects" => (isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 18, $this->source); })())]);
                echo "
    ";
            } elseif (("identified" == twig_get_attribute($this->env, $this->source,             // line 19
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 19, $this->source); })()), "eventType", [], "any", false, false, false, 19))) {
                // line 20
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.audit.identified"), "html", null, true);
                echo "
    ";
            } elseif (("ipadded" == twig_get_attribute($this->env, $this->source,             // line 21
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "eventType", [], "any", false, false, false, 21))) {
                // line 22
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.audit.accessed"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_join_filter(twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "details", [], "any", false, false, false, 22)), ","), "html", null, true);
                echo "
    ";
            } elseif (("merged" == twig_get_attribute($this->env, $this->source,             // line 23
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "eventType", [], "any", false, false, false, 23))) {
                // line 24
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.audit.merged"), "html", null, true);
                echo "
    ";
            }
        }
        // line 27
        echo "<!--
Event Type: \"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 28, $this->source); })()), "eventType", [], "any", false, false, false, 28), "html", null, true);
        echo "\"
";
        // line 29
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 29, $this->source); })()), "details", [], "any", false, false, false, 29), twig_constant("JSON_PRETTY_PRINT"));
        echo "
-->";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Auditlog/details.html.twig";
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
        return array (  112 => 29,  108 => 28,  105 => 27,  98 => 24,  96 => 23,  89 => 22,  87 => 21,  82 => 20,  80 => 19,  75 => 18,  73 => 17,  68 => 16,  66 => 15,  61 => 14,  58 => 13,  56 => 12,  49 => 10,  46 => 9,  43 => 8,  39 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Auditlog/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Auditlog\\details.html.twig");
    }
}
