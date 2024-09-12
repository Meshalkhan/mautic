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

/* @MauticLead/List/_list_row.html.twig */
class __TwigTemplate_2138a3c2ed8e23ba145e1b4d07d00434 extends Template
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
        $context["now"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\DateTimeExtension']->getUtcDateTime();
        // line 6
        $context["hoursSinceLastBuilt"] = null;
        // line 7
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()), "lastBuiltDate", [], "any", false, false, false, 7))) {
            // line 8
            echo "    ";
            $context["lastBuiltDate"] = twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "lastBuiltDate", [], "any", false, false, false, 8), "timestamp", [], "any", false, false, false, 8));
            // line 9
            echo "    ";
            $context["now"] = twig_date_converter($this->env);
            // line 10
            echo "    ";
            $context["diffInSeconds"] = (twig_get_attribute($this->env, $this->source, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 10, $this->source); })()), "timestamp", [], "any", false, false, false, 10) - twig_get_attribute($this->env, $this->source, (isset($context["lastBuiltDate"]) || array_key_exists("lastBuiltDate", $context) ? $context["lastBuiltDate"] : (function () { throw new RuntimeError('Variable "lastBuiltDate" does not exist.', 10, $this->source); })()), "timestamp", [], "any", false, false, false, 10));
            // line 11
            echo "    ";
            $context["hoursSinceLastBuilt"] = ((isset($context["diffInSeconds"]) || array_key_exists("diffInSeconds", $context) ? $context["diffInSeconds"] : (function () { throw new RuntimeError('Variable "diffInSeconds" does not exist.', 11, $this->source); })()) / twig_round(3600));
        }
        // line 13
        $context["mauticTemplateVars"] = twig_array_merge($context, [["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })())]]);
        // line 14
        echo "<tr>
    <td>
        ";
        // line 16
        echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>         // line 17
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 19, $this->source); })()), twig_constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_EDIT_OWN"), [], "array", false, false, false, 19), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 19, $this->source); })()), twig_constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_EDIT_OTHER"), [], "array", false, false, false, 19), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "createdBy", [], "any", false, false, false, 19)), "clone" => (twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 20, $this->source); })()), twig_constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_CREATE"), [], "array", false, false, false, 20) && $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 20, $this->source); })()), twig_constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_VIEW_OWN"), [], "array", false, false, false, 20), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 20, $this->source); })()), twig_constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_VIEW_OTHER"), [], "array", false, false, false, 20), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "createdBy", [], "any", false, false, false, 20))), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 21, $this->source); })()), twig_constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_DELETE_OWN"), [], "array", false, false, false, 21), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 21, $this->source); })()), twig_constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_DELETE_OTHER"), [], "array", false, false, false, 21), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()), "createdBy", [], "any", false, false, false, 21))], "routeBase" => "segment", "langVar" => "lead.list", "custom" => [["attr" => ["data-toggle" => "ajax", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => ((        // line 29
(isset($context["listCommand"]) || array_key_exists("listCommand", $context) ? $context["listCommand"] : (function () { throw new RuntimeError('Variable "listCommand" does not exist.', 29, $this->source); })()) . ":") . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 29, $this->source); })()), "alias", [], "any", false, false, false, 29))])], "icon" => "ri-team-line", "label" => "mautic.lead.list.view_contacts"]]]);
        // line 35
        echo "
    </td>
    <td>
        <div>
            ";
        // line 39
        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 39, $this->source); })()), "model" => "lead.list"]);
        echo "
            ";
        // line 40
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(true, twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 40, $this->source); })()), "lead:lists:editother", [], "array", false, false, false, 40), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 40, $this->source); })()), "createdBy", [], "any", false, false, false, 40))) {
            // line 41
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" data-toggle=\"ajax\">
                  ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "alias", [], "any", false, false, false, 42), "html", null, true);
            echo ")
                </a>
            ";
        } else {
            // line 45
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "alias", [], "any", false, false, false, 45), "html", null, true);
            echo ")
            ";
        }
        // line 47
        echo "            ";
        if (( !twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })()), "isGlobal", [], "any", false, false, false, 47) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47) != twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })()), "createdBy", [], "any", false, false, false, 47)))) {
            // line 48
            echo "                <br/>
                <span class=\"small\">(";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })()), "createdByUser", [], "any", false, false, false, 49), "html", null, true);
            echo ")</span>
            ";
        }
        // line 51
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 51, $this->source); })()), "isGlobal", [], "any", false, false, false, 51)) {
            echo "<i title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.form.isglobal"), "html", null, true);
            echo "\" class=\"ri-group-2-fill\"></i>";
        }
        // line 52
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 52, $this->source); })()), "getFilters", [], "method", false, false, false, 52))) {
            echo "<i title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.filters"), "html", null, true);
            echo "\" class=\"fa fa-fw fa-filter\"></i>";
        }
        // line 53
        echo "            ";
        if (((isset($context["hoursSinceLastBuilt"]) || array_key_exists("hoursSinceLastBuilt", $context) ? $context["hoursSinceLastBuilt"] : (function () { throw new RuntimeError('Variable "hoursSinceLastBuilt" does not exist.', 53, $this->source); })()) >= (isset($context["segmentRebuildWarningThreshold"]) || array_key_exists("segmentRebuildWarningThreshold", $context) ? $context["segmentRebuildWarningThreshold"] : (function () { throw new RuntimeError('Variable "segmentRebuildWarningThreshold" does not exist.', 53, $this->source); })()))) {
            // line 54
            echo "                <label class=\"control-label\" data-toggle=\"tooltip\"
                       data-container=\"body\" data-placement=\"top\" title=\"\"
                       data-original-title=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.form.config.segment_rebuild_time.message", ["%count%" => (isset($context["hoursSinceLastBuilt"]) || array_key_exists("hoursSinceLastBuilt", $context) ? $context["hoursSinceLastBuilt"] : (function () { throw new RuntimeError('Variable "hoursSinceLastBuilt" does not exist.', 56, $this->source); })())]), "html", null, true);
            echo "\">
                    <i class=\"fa text-danger fa-exclamation-circle\"></i></label>
            ";
        }
        // line 59
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 59, $this->source); })()), "lastBuiltTime", [], "any", false, false, false, 59) >= (isset($context["segmentBuildWarningThreshold"]) || array_key_exists("segmentBuildWarningThreshold", $context) ? $context["segmentBuildWarningThreshold"] : (function () { throw new RuntimeError('Variable "segmentBuildWarningThreshold" does not exist.', 59, $this->source); })()))) {
            // line 60
            echo "                <label class=\"control-label\" data-toggle=\"tooltip\"
                       data-container=\"body\" data-placement=\"top\" title=\"\"
                       data-original-title=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.form.config.segment_build_time.message", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 62, $this->source); })()), "lastBuiltTime", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">
                    <i class=\"text-danger ri-time-line\"></i></label>
            ";
        }
        // line 65
        echo "            ";
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("segment.name", (isset($context["mauticTemplateVars"]) || array_key_exists("mauticTemplateVars", $context) ? $context["mauticTemplateVars"] : (function () { throw new RuntimeError('Variable "mauticTemplateVars" does not exist.', 65, $this->source); })()));
        echo "
        </div>
        ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 67, $this->source); })()), "description", [], "any", false, false, false, 67)) {
            // line 68
            echo "            <div class=\"text-muted mt-4\">
                <small>";
            // line 69
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69));
            echo "</small>
            </div>
        ";
        }
        // line 72
        echo "    </td>
    <td class=\"visible-md visible-lg\">
        <a class=\"label label-primary col-count\"
           data-id=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75), "html", null, true);
        echo "\"
           href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.list") . ":") . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 76, $this->source); })()), "alias", [], "any", false, false, false, 76))]), "html", null, true);
        echo "\"
           data-toggle=\"ajax\">";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.viewleads_count", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["leadCounts"]) || array_key_exists("leadCounts", $context) ? $context["leadCounts"] : (function () { throw new RuntimeError('Variable "leadCounts" does not exist.', 77, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77), [], "array", false, false, false, 77)]), "html", null, true);
        echo "</a>
    </td>
    <td class=\"visible-md visible-lg\" title=\"";
        // line 79
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 79, $this->source); })()), "dateAdded", [], "any", false, false, false, 79)) {
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 79, $this->source); })()), "dateAdded", [], "any", false, false, false, 79));
        }
        echo "\">
        ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 80, $this->source); })()), "getDateAdded", [], "any", false, false, false, 80)) {
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 80, $this->source); })()), "dateAdded", [], "any", false, false, false, 80));
        }
        // line 81
        echo "    </td>
    <td class=\"visible-md visible-lg\" title=\"";
        // line 82
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 82, $this->source); })()), "dateModified", [], "any", false, false, false, 82)) {
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 82, $this->source); })()), "dateModified", [], "any", false, false, false, 82));
        }
        echo "\">
        ";
        // line 83
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 83, $this->source); })()), "getDateModified", [], "any", false, false, false, 83)) {
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 83, $this->source); })()), "dateModified", [], "any", false, false, false, 83));
        }
        // line 84
        echo "    </td>
    <td class=\"visible-md visible-lg\">";
        // line 85
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 85, $this->source); })()), "createdByUser", [], "any", false, false, false, 85));
        echo "</td>
    <td class=\"visible-md visible-lg\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86), "html", null, true);
        echo "</td>
</tr>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/List/_list_row.html.twig";
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
        return array (  218 => 86,  214 => 85,  211 => 84,  207 => 83,  201 => 82,  198 => 81,  194 => 80,  188 => 79,  183 => 77,  179 => 76,  175 => 75,  170 => 72,  164 => 69,  161 => 68,  159 => 67,  153 => 65,  147 => 62,  143 => 60,  140 => 59,  134 => 56,  130 => 54,  127 => 53,  120 => 52,  113 => 51,  108 => 49,  105 => 48,  102 => 47,  94 => 45,  86 => 42,  81 => 41,  79 => 40,  75 => 39,  69 => 35,  67 => 29,  66 => 21,  65 => 20,  64 => 19,  63 => 17,  62 => 16,  58 => 14,  56 => 13,  52 => 11,  49 => 10,  46 => 9,  43 => 8,  41 => 7,  39 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/List/_list_row.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\List\\_list_row.html.twig");
    }
}
