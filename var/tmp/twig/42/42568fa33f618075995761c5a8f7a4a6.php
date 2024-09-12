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

/* @MauticCore/Helper/list_actions.html.twig */
class __TwigTemplate_762309c17ff538473ab8fbfb6e66bd24 extends Template
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
        // line 1
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_LIST_ACTIONS"), Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::TYPE_DROPDOWN"),         // line 4
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()));
        // line 7
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/action_button_helper.html.twig");
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\StorageExtension']->restore($context, "action_button_helper"), "html", null, true);
        yield "

";
        // line 11
        if (((is_iterable((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", true, true, false, 11)) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", true, true, false, 11))) {
            // line 12
            yield "    ";
            [$context["id"], $context["name"]] =             [CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12)];
        } else {
            // line 14
            yield "    ";
            [$context["id"], $context["name"]] =             [CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "getId", [], "method", false, false, false, 14), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), (isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 14, $this->source); })()), [], "any", false, false, false, 14)];
        }
        // line 16
        yield "
<div class=\"input-group input-group-sm\">
    <span class=\"input-group-addon\">
        <input type=\"checkbox\" data-target=\"tbody\" data-toggle=\"selectrow\" class=\"list-checkbox\" name=\"cb";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()));
        yield "\"/>
    </span>

    <div class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle btn-nospin\" data-toggle=\"dropdown\">
            <i class=\"ri-arrow-down-s-line\"></i>
        </button>
        ";
        // line 26
        if ((array_key_exists("tooltip", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 26, $this->source); })())))) {
            yield "<i class=\"ri-question-line\"></i>";
        }
        // line 27
        yield "        <ul class=\"pull-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pull"]) || array_key_exists("pull", $context) ? $context["pull"] : (function () { throw new RuntimeError('Variable "pull" does not exist.', 27, $this->source); })()), "html", null, true);
        yield " page-list-actions dropdown-menu\" role=\"menu\">
            ";
        // line 28
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["templateButtons"] ?? null), "edit", [], "any", true, true, false, 28) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 28, $this->source); })()), "edit", [], "any", false, false, false, 28)))) {
            // line 29
            yield "            ";
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButton(["attr" => Twig\Extension\CoreExtension::merge(            // line 30
(isset($context["editAttr"]) || array_key_exists("editAttr", $context) ? $context["editAttr"] : (function () { throw new RuntimeError('Variable "editAttr" does not exist.', 30, $this->source); })()), ["class" => "hidden-xs btn btn-default btn-sm btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 33
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 33, $this->source); })()), Twig\Extension\CoreExtension::merge(            // line 34
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 34, $this->source); })()), ["objectAction" => "edit", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 34, $this->source); })())])), "data-toggle" =>             // line 36
(isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 36, $this->source); })())]), "iconClass" => "ri-edit-line", "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.edit"), "primary" => true]);
            // line 41
            yield "
            ";
        }
        // line 43
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["templateButtons"] ?? null), "clone", [], "any", true, true, false, 43) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 43, $this->source); })()), "clone", [], "any", false, false, false, 43)))) {
            // line 44
            yield "            ";
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButton(["attr" => Twig\Extension\CoreExtension::merge(            // line 45
(isset($context["editAttr"]) || array_key_exists("editAttr", $context) ? $context["editAttr"] : (function () { throw new RuntimeError('Variable "editAttr" does not exist.', 45, $this->source); })()), ["class" => "hidden-xs btn btn-default btn-sm btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 48
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 48, $this->source); })()), Twig\Extension\CoreExtension::merge(            // line 49
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 49, $this->source); })()), ["objectAction" => "clone", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 49, $this->source); })())])), "data-toggle" => "ajax"]), "iconClass" => "ri-file-copy-line", "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.clone"), "priority" => 200]);
            // line 56
            yield "
            ";
        }
        // line 58
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["templateButtons"] ?? null), "delete", [], "any", true, true, false, 58) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 58, $this->source); })()), "delete", [], "any", false, false, false, 58)))) {
            // line 59
            yield "            ";
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButton(["confirm" => ["btnClass" => false, "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete"), "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((            // line 63
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 63, $this->source); })()) . ".form.confirmdelete"), ["%name%" => ((((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 63, $this->source); })()) . " (") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 63, $this->source); })())) . ")")]), "confirmAction" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 65
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 65, $this->source); })()), Twig\Extension\CoreExtension::merge(            // line 66
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 66, $this->source); })()), ["objectAction" => "delete", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 66, $this->source); })())])), "template" => "delete"], "priority" =>  -1]);
            // line 71
            yield "
            ";
        }
        // line 73
        yield "
            ";
        // line 74
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render();
        yield "
        </ul>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/list_actions.html.twig";
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
        return array (  130 => 74,  127 => 73,  123 => 71,  121 => 66,  120 => 65,  119 => 63,  117 => 59,  114 => 58,  110 => 56,  108 => 49,  107 => 48,  106 => 45,  104 => 44,  101 => 43,  97 => 41,  95 => 36,  94 => 34,  93 => 33,  92 => 30,  90 => 29,  88 => 28,  83 => 27,  79 => 26,  67 => 19,  62 => 16,  58 => 14,  54 => 12,  52 => 11,  47 => 9,  45 => 7,  43 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/list_actions.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\list_actions.html.twig");
    }
}
