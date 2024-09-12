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

/* @MauticLead/Import/_list_row.html.twig */
class __TwigTemplate_901c2d1915c0759bd3254920fc88313d extends Template
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
        $context["objectRoute"] = null;
        // line 7
        if (("lead" == twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()), "object", [], "any", false, false, false, 7))) {
            // line 8
            echo "  ";
            $context["objectRoute"] = "mautic_contact_index";
        }
        // line 10
        echo "<tr>
    <td class=\"col-actions text-center\">
        <span class=\"label label-";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "satusLabelClass", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
            ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.import.status." . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "status", [], "any", false, false, false, 13))), "html", null, true);
        echo "
        </span>
    </td>
    <td>
        <div>
            ";
        // line 18
        if ((!twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "status", [], "any", false, false, false, 18), [twig_constant("FAILED", (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })())), twig_constant("IMPORTED", (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })())), twig_constant("MANUAL", (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()))]) && twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 18, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 18, $this->source); })()) . ":publish"), [], "array", false, false, false, 18))) {
            // line 19
            echo "              ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "model" => "lead.import"]);
            echo "
            ";
        }
        // line 21
        echo "            ";
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(true, twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 21, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 21, $this->source); })()) . ":viewother"), [], "array", false, false, false, 21), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()), "createdBy", [], "any", false, false, false, 21))) {
            // line 22
            echo "              <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 22, $this->source); })()), ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "object" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", ["object", "contacts"], "method", false, false, false, 22)]), "html", null, true);
            echo "\" data-toggle=\"ajax\">
                ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
            echo "
              </a>
            ";
        } else {
            // line 26
            echo "              ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "
            ";
        }
        // line 28
        echo "        </div>
    </td>
    <td class=\"visible-md visible-lg\">";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 30, $this->source); })()), "runTime", [], "any", false, false, false, 30)) {
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->formatRange(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 30, $this->source); })()), "runTime", [], "any", false, false, false, 30));
        }
        echo "</td>
    <td class=\"visible-md visible-lg\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "progressPercentage", [], "any", false, false, false, 31), "html", null, true);
        echo "%</td>
    <td class=\"visible-md visible-lg\">
        ";
        // line 33
        if ( !(null === (isset($context["objectRoute"]) || array_key_exists("objectRoute", $context) ? $context["objectRoute"] : (function () { throw new RuntimeError('Variable "objectRoute" does not exist.', 33, $this->source); })()))) {
            // line 34
            echo "            <span class=\"mt-xs label label-primary has-click-event clickable-stat\">
                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["objectRoute"]) || array_key_exists("objectRoute", $context) ? $context["objectRoute"] : (function () { throw new RuntimeError('Variable "objectRoute" does not exist.', 35, $this->source); })()), ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.import_id") . ":") . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35))]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })()), "lineCount", [], "any", false, false, false, 35), "html", null, true);
            echo "</a>
            </span>
        ";
        } else {
            // line 38
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "lineCount", [], "any", false, false, false, 38), "html", null, true);
            echo "
        ";
        }
        // line 40
        echo "    </td>
    <td class=\"visible-md visible-lg\">
        ";
        // line 42
        if ( !(null === (isset($context["objectRoute"]) || array_key_exists("objectRoute", $context) ? $context["objectRoute"] : (function () { throw new RuntimeError('Variable "objectRoute" does not exist.', 42, $this->source); })()))) {
            // line 43
            echo "            <span class=\"mt-xs label label-primary has-click-event clickable-stat\">
                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["objectRoute"]) || array_key_exists("objectRoute", $context) ? $context["objectRoute"] : (function () { throw new RuntimeError('Variable "objectRoute" does not exist.', 44, $this->source); })()), ["search" => ((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.import_id") . ":") . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)) . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.import_action")) . ":inserted")]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()), "insertedCount", [], "any", false, false, false, 44), "html", null, true);
            echo "</a>
            </span>
        ";
        } else {
            // line 47
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })()), "insertedCount", [], "any", false, false, false, 47), "html", null, true);
            echo "
        ";
        }
        // line 49
        echo "    </td>
    <td class=\"visible-md visible-lg\">
        ";
        // line 51
        if ( !(null === (isset($context["objectRoute"]) || array_key_exists("objectRoute", $context) ? $context["objectRoute"] : (function () { throw new RuntimeError('Variable "objectRoute" does not exist.', 51, $this->source); })()))) {
            // line 52
            echo "            <span class=\"mt-xs label label-primary has-click-event clickable-stat\">
                <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["objectRoute"]) || array_key_exists("objectRoute", $context) ? $context["objectRoute"] : (function () { throw new RuntimeError('Variable "objectRoute" does not exist.', 53, $this->source); })()), ["search" => ((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.import_id") . ":") . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)) . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.import_action")) . ":updated")]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 53, $this->source); })()), "updatedCount", [], "any", false, false, false, 53), "html", null, true);
            echo "</a>
            </span>
        ";
        } else {
            // line 56
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "updatedCount", [], "any", false, false, false, 56), "html", null, true);
            echo "
        ";
        }
        // line 58
        echo "    </td>
    <td class=\"visible-md visible-lg\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 59, $this->source); })()), "ignoredCount", [], "any", false, false, false, 59), "html", null, true);
        echo "</td>
    <td class=\"visible-md visible-lg\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 60, $this->source); })()), "createdByUser", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
    <td class=\"visible-md visible-lg\">
        <abbr title=\"";
        // line 62
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 62, $this->source); })()), "dateAdded", [], "any", false, false, false, 62));
        echo "\">
            ";
        // line 63
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "dateAdded", [], "any", false, false, false, 63));
        echo "
        </abbr>
    </td>
    <td class=\"visible-md visible-lg\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66), "html", null, true);
        echo "</td>
</tr>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Import/_list_row.html.twig";
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
        return array (  191 => 66,  185 => 63,  181 => 62,  176 => 60,  172 => 59,  169 => 58,  163 => 56,  155 => 53,  152 => 52,  150 => 51,  146 => 49,  140 => 47,  132 => 44,  129 => 43,  127 => 42,  123 => 40,  117 => 38,  109 => 35,  106 => 34,  104 => 33,  99 => 31,  93 => 30,  89 => 28,  83 => 26,  77 => 23,  72 => 22,  69 => 21,  63 => 19,  61 => 18,  53 => 13,  49 => 12,  45 => 10,  41 => 8,  39 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Import/_list_row.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Import\\_list_row.html.twig");
    }
}
