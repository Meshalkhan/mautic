<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @MauticLead/Import/_list_row.html.twig */
class __TwigTemplate_8eaea3dbb2ca0ead0a1de51a6c8cacca extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        $context["objectRoute"] = null;
        // line 7
        if (("lead" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()), "object", [], "any", false, false, false, 7))) {
            // line 8
            yield "  ";
            $context["objectRoute"] = "mautic_contact_index";
        }
        // line 10
        yield "<tr>
    <td class=\"col-actions text-center\">
        <span class=\"label label-";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "satusLabelClass", [], "any", false, false, false, 12), "html", null, true);
        yield "\">
            ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.import.status." . CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "status", [], "any", false, false, false, 13))), "html", null, true);
        yield "
        </span>
    </td>
    <td>
        <div>
            ";
        // line 18
        if ((!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "status", [], "any", false, false, false, 18), [Twig\Extension\CoreExtension::constant("FAILED", (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })())), Twig\Extension\CoreExtension::constant("IMPORTED", (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })())), Twig\Extension\CoreExtension::constant("MANUAL", (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()))]) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 18, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 18, $this->source); })()) . ":publish"), [], "array", false, false, false, 18))) {
            // line 19
            yield "              ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "model" => "lead.import"]);
            yield "
            ";
        }
        // line 21
        yield "            ";
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(true, CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 21, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 21, $this->source); })()) . ":viewother"), [], "array", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()), "createdBy", [], "any", false, false, false, 21))) {
            // line 22
            yield "              <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 22, $this->source); })()), ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "object" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", ["object", "contacts"], "method", false, false, false, 22)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">
                ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
            yield "
              </a>
            ";
        } else {
            // line 26
            yield "              ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
            yield "
            ";
        }
        // line 28
        yield "        </div>
    </td>
    <td class=\"visible-md visible-lg\">";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 30, $this->source); })()), "runTime", [], "any", false, false, false, 30)) {
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->formatRange(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 30, $this->source); })()), "runTime", [], "any", false, false, false, 30));
        }
        yield "</td>
    <td class=\"visible-md visible-lg\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "progressPercentage", [], "any", false, false, false, 31), "html", null, true);
        yield "%</td>
    <td class=\"visible-md visible-lg\">
        ";
        // line 33
        if ( !(null === (isset($context["objectRoute"]) || array_key_exists("objectRoute", $context) ? $context["objectRoute"] : (function () { throw new RuntimeError('Variable "objectRoute" does not exist.', 33, $this->source); })()))) {
            // line 34
            yield "            <span class=\"mt-xs label label-primary has-click-event clickable-stat\">
                <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["objectRoute"]) || array_key_exists("objectRoute", $context) ? $context["objectRoute"] : (function () { throw new RuntimeError('Variable "objectRoute" does not exist.', 35, $this->source); })()), ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.import_id") . ":") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35))]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })()), "lineCount", [], "any", false, false, false, 35), "html", null, true);
            yield "</a>
            </span>
        ";
        } else {
            // line 38
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "lineCount", [], "any", false, false, false, 38), "html", null, true);
            yield "
        ";
        }
        // line 40
        yield "    </td>
    <td class=\"visible-md visible-lg\">
        ";
        // line 42
        if ( !(null === (isset($context["objectRoute"]) || array_key_exists("objectRoute", $context) ? $context["objectRoute"] : (function () { throw new RuntimeError('Variable "objectRoute" does not exist.', 42, $this->source); })()))) {
            // line 43
            yield "            <span class=\"mt-xs label label-primary has-click-event clickable-stat\">
                <a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["objectRoute"]) || array_key_exists("objectRoute", $context) ? $context["objectRoute"] : (function () { throw new RuntimeError('Variable "objectRoute" does not exist.', 44, $this->source); })()), ["search" => ((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.import_id") . ":") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)) . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.import_action")) . ":inserted")]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()), "insertedCount", [], "any", false, false, false, 44), "html", null, true);
            yield "</a>
            </span>
        ";
        } else {
            // line 47
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })()), "insertedCount", [], "any", false, false, false, 47), "html", null, true);
            yield "
        ";
        }
        // line 49
        yield "    </td>
    <td class=\"visible-md visible-lg\">
        ";
        // line 51
        if ( !(null === (isset($context["objectRoute"]) || array_key_exists("objectRoute", $context) ? $context["objectRoute"] : (function () { throw new RuntimeError('Variable "objectRoute" does not exist.', 51, $this->source); })()))) {
            // line 52
            yield "            <span class=\"mt-xs label label-primary has-click-event clickable-stat\">
                <a href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["objectRoute"]) || array_key_exists("objectRoute", $context) ? $context["objectRoute"] : (function () { throw new RuntimeError('Variable "objectRoute" does not exist.', 53, $this->source); })()), ["search" => ((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.import_id") . ":") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)) . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.import_action")) . ":updated")]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 53, $this->source); })()), "updatedCount", [], "any", false, false, false, 53), "html", null, true);
            yield "</a>
            </span>
        ";
        } else {
            // line 56
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "updatedCount", [], "any", false, false, false, 56), "html", null, true);
            yield "
        ";
        }
        // line 58
        yield "    </td>
    <td class=\"visible-md visible-lg\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 59, $this->source); })()), "ignoredCount", [], "any", false, false, false, 59), "html", null, true);
        yield "</td>
    <td class=\"visible-md visible-lg\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 60, $this->source); })()), "createdByUser", [], "any", false, false, false, 60), "html", null, true);
        yield "</td>
    <td class=\"visible-md visible-lg\">
        <abbr title=\"";
        // line 62
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 62, $this->source); })()), "dateAdded", [], "any", false, false, false, 62));
        yield "\">
            ";
        // line 63
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "dateAdded", [], "any", false, false, false, 63));
        yield "
        </abbr>
    </td>
    <td class=\"visible-md visible-lg\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66), "html", null, true);
        yield "</td>
</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Import/_list_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  196 => 66,  190 => 63,  186 => 62,  181 => 60,  177 => 59,  174 => 58,  168 => 56,  160 => 53,  157 => 52,  155 => 51,  151 => 49,  145 => 47,  137 => 44,  134 => 43,  132 => 42,  128 => 40,  122 => 38,  114 => 35,  111 => 34,  109 => 33,  104 => 31,  98 => 30,  94 => 28,  88 => 26,  82 => 23,  77 => 22,  74 => 21,  68 => 19,  66 => 18,  58 => 13,  54 => 12,  50 => 10,  46 => 8,  44 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Import/_list_row.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Import\\_list_row.html.twig");
    }
}
