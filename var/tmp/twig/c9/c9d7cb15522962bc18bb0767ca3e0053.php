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

/* @MauticLead/Lead/_list_row.html.twig */
class __TwigTemplate_77da0463f43bdc8e1b1cf16e9cbd1c1b extends Template
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
        $context["fields"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "fields", [], "any", false, false, false, 5);
        // line 6
        echo "<tr class=\"";
        if (array_key_exists("highlight", $context)) {
            echo "warning";
        }
        echo "\">
    <td>
        ";
        // line 8
        $context["hasEditAccess"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 8, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 8), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 8, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 8), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "permissionUser", [], "any", false, false, false, 8));
        // line 9
        echo "        ";
        $context["custom"] = [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "data-toggle" => "ajax", "data-method" => "POST"], "btnText" => "mautic.core.details", "iconClass" => "ri-information-line"]];
        // line 18
        echo "
        ";
        // line 19
        if (((isset($context["hasEditAccess"]) || array_key_exists("hasEditAccess", $context) ? $context["hasEditAccess"] : (function () { throw new RuntimeError('Variable "hasEditAccess" does not exist.', 19, $this->source); })()) &&  !twig_test_empty((isset($context["currentList"]) || array_key_exists("currentList", $context) ? $context["currentList"] : (function () { throw new RuntimeError('Variable "currentList" does not exist.', 19, $this->source); })())))) {
            // line 20
            echo "            ";
            // line 21
            echo "            ";
            $context["custom"] = twig_array_merge((isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new RuntimeError('Variable "custom" does not exist.', 21, $this->source); })()), [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_action", ["objectAction" => "removeLead", "objectId" => twig_get_attribute($this->env, $this->source,             // line 23
(isset($context["currentList"]) || array_key_exists("currentList", $context) ? $context["currentList"] : (function () { throw new RuntimeError('Variable "currentList" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "leadId" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "data-toggle" => "ajax", "data-method" => "POST"], "btnText" => "mautic.lead.lead.remove.fromlist", "iconClass" => "ri-close-line"]]);
            // line 30
            echo "        ";
        }
        // line 31
        echo "
        ";
        // line 32
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 32, $this->source); })()), "core", [], "array", false, false, false, 32), "email", [], "array", false, false, false, 32), "value", [], "array", false, false, false, 32))) {
            // line 33
            echo "            ";
            $context["custom"] = twig_array_merge((isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new RuntimeError('Variable "custom" does not exist.', 33, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.email.send_email.header", ["%email%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 37
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 37, $this->source); })()), "core", [], "array", false, false, false, 37), "email", [], "array", false, false, false, 37), "value", [], "array", false, false, false, 37)]), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => twig_get_attribute($this->env, $this->source,             // line 38
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "objectAction" => "email", "list" => 1])], "btnText" => "mautic.lead.email.send_email", "iconClass" => "ri-mail-send-line"]]);
            // line 43
            echo "        ";
        }
        // line 44
        echo "
        ";
        // line 45
        echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>         // line 46
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "templateButtons" => ["edit" =>         // line 48
(isset($context["hasEditAccess"]) || array_key_exists("hasEditAccess", $context) ? $context["hasEditAccess"] : (function () { throw new RuntimeError('Variable "hasEditAccess" does not exist.', 48, $this->source); })()), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 49
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 49, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 49), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 49, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 49), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })()), "permissionUser", [], "any", false, false, false, 49))], "routeBase" => "contact", "langVar" => "lead.lead", "customButtons" =>         // line 53
(isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new RuntimeError('Variable "custom" does not exist.', 53, $this->source); })())]);
        // line 54
        echo "
    </td>
    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 56, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["column"] => $context["label"]) {
            // line 57
            echo "        ";
            echo twig_include($this->env, $context, [(("@MauticLead/Lead/_list_column_" . $context["column"]) . ".html.twig"), "@MauticLead/Lead/_list_column_default.html.twig"], ["item" =>             // line 58
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 58, $this->source); })()), "fields" =>             // line 59
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 59, $this->source); })()), "label" =>             // line 60
$context["label"], "column" =>             // line 61
$context["column"], "columns" =>             // line 62
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 62, $this->source); })()), "noContactList" =>             // line 63
(isset($context["noContactList"]) || array_key_exists("noContactList", $context) ? $context["noContactList"] : (function () { throw new RuntimeError('Variable "noContactList" does not exist.', 63, $this->source); })()), "class" => ((twig_in_filter(            // line 64
$context["column"], twig_get_array_keys_filter((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 64, $this->source); })())))) ? ("hidden-xs") : (""))]);
            // line 65
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['column'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "</tr>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Lead/_list_row.html.twig";
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
        return array (  135 => 67,  120 => 65,  118 => 64,  117 => 63,  116 => 62,  115 => 61,  114 => 60,  113 => 59,  112 => 58,  110 => 57,  93 => 56,  89 => 54,  87 => 53,  86 => 49,  85 => 48,  84 => 46,  83 => 45,  80 => 44,  77 => 43,  75 => 38,  74 => 37,  72 => 33,  70 => 32,  67 => 31,  64 => 30,  62 => 23,  60 => 21,  58 => 20,  56 => 19,  53 => 18,  51 => 11,  49 => 9,  47 => 8,  39 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Lead/_list_row.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\_list_row.html.twig");
    }
}
