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

/* @MauticLead/Lead/list_rows.html.twig */
class __TwigTemplate_a84935c3e04169737b3d79af171b22c5 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    ";
            $context["fields"] = twig_get_attribute($this->env, $this->source, $context["item"], "fields", [], "any", false, false, false, 2);
            // line 3
            echo "    <tr class=\"";
            if (array_key_exists("highlight", $context)) {
                echo "warning";
            }
            echo "\">
        <td>
            ";
            // line 5
            $context["hasEditAccess"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 5, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 5), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 5, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 5), twig_get_attribute($this->env, $this->source, $context["item"], "permissionUser", [], "any", false, false, false, 5));
            // line 6
            echo "            ";
            $context["custom"] = [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source,             // line 8
$context["item"], "id", [], "any", false, false, false, 8)]), "data-toggle" => "ajax", "data-method" => "POST"], "btnText" => "mautic.core.details", "iconClass" => "ri-information-2-line"]];
            // line 15
            echo "
            ";
            // line 16
            if (((isset($context["hasEditAccess"]) || array_key_exists("hasEditAccess", $context) ? $context["hasEditAccess"] : (function () { throw new RuntimeError('Variable "hasEditAccess" does not exist.', 16, $this->source); })()) &&  !twig_test_empty((isset($context["currentList"]) || array_key_exists("currentList", $context) ? $context["currentList"] : (function () { throw new RuntimeError('Variable "currentList" does not exist.', 16, $this->source); })())))) {
                // line 17
                echo "                ";
                // line 18
                echo "                ";
                $context["custom"] = twig_array_merge((isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new RuntimeError('Variable "custom" does not exist.', 18, $this->source); })()), [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_action", ["objectAction" => "removeLead", "objectId" => twig_get_attribute($this->env, $this->source,                 // line 20
(isset($context["currentList"]) || array_key_exists("currentList", $context) ? $context["currentList"] : (function () { throw new RuntimeError('Variable "currentList" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "leadId" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 20)]), "data-toggle" => "ajax", "data-method" => "POST"], "btnText" => "mautic.lead.lead.remove.fromlist", "iconClass" => "ri-close-line"]]);
                // line 27
                echo "            ";
            }
            // line 28
            echo "
            ";
            // line 29
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 29, $this->source); })()), "core", [], "array", false, false, false, 29), "email", [], "array", false, false, false, 29), "value", [], "array", false, false, false, 29))) {
                // line 30
                echo "                ";
                $context["custom"] = twig_array_merge((isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new RuntimeError('Variable "custom" does not exist.', 30, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.email.send_email.header", ["%email%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 34
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 34, $this->source); })()), "core", [], "array", false, false, false, 34), "email", [], "array", false, false, false, 34), "value", [], "array", false, false, false, 34)]), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => twig_get_attribute($this->env, $this->source,                 // line 35
$context["item"], "id", [], "any", false, false, false, 35), "objectAction" => "email", "list" => 1])], "btnText" => "mautic.lead.email.send_email", "iconClass" => "fa fa-send"]]);
                // line 40
                echo "            ";
            }
            // line 41
            echo "
            ";
            // line 42
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>             // line 43
$context["item"], "templateButtons" => ["edit" =>             // line 45
(isset($context["hasEditAccess"]) || array_key_exists("hasEditAccess", $context) ? $context["hasEditAccess"] : (function () { throw new RuntimeError('Variable "hasEditAccess" does not exist.', 45, $this->source); })()), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,             // line 46
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 46, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 46), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 46, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 46), twig_get_attribute($this->env, $this->source, $context["item"], "permissionUser", [], "any", false, false, false, 46))], "routeBase" => "contact", "langVar" => "lead.lead", "customButtons" =>             // line 50
(isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new RuntimeError('Variable "custom" does not exist.', 50, $this->source); })())]);
            // line 51
            echo "
        </td>
        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 53, $this->source); })()));
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
                // line 54
                echo "            ";
                echo twig_include($this->env, $context, [(("@MauticLead/Lead/_list_column_" . $context["column"]) . ".html.twig"), "@MauticLead/Lead/_list_column_default.html.twig"], ["item" =>                 // line 55
$context["item"], "fields" =>                 // line 56
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 56, $this->source); })()), "label" =>                 // line 57
$context["label"], "column" =>                 // line 58
$context["column"], "columns" =>                 // line 59
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 59, $this->source); })()), "noContactList" =>                 // line 60
(isset($context["noContactList"]) || array_key_exists("noContactList", $context) ? $context["noContactList"] : (function () { throw new RuntimeError('Variable "noContactList" does not exist.', 60, $this->source); })()), "class" => ((twig_in_filter(                // line 61
$context["column"], twig_get_array_keys_filter((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 61, $this->source); })())))) ? ("hidden-xs") : (""))]);
                // line 62
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
            // line 64
            echo "    </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Lead/list_rows.html.twig";
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
        return array (  153 => 64,  138 => 62,  136 => 61,  135 => 60,  134 => 59,  133 => 58,  132 => 57,  131 => 56,  130 => 55,  128 => 54,  111 => 53,  107 => 51,  105 => 50,  104 => 46,  103 => 45,  102 => 43,  101 => 42,  98 => 41,  95 => 40,  93 => 35,  92 => 34,  90 => 30,  88 => 29,  85 => 28,  82 => 27,  80 => 20,  78 => 18,  76 => 17,  74 => 16,  71 => 15,  69 => 8,  67 => 6,  65 => 5,  57 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Lead/list_rows.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\list_rows.html.twig");
    }
}
