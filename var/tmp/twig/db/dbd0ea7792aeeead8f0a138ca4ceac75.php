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

/* @MauticCore/Helper/list_actions.html.twig */
class __TwigTemplate_ece669d5c2b52c5862011a33789e86ed extends Template
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
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(twig_constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_LIST_ACTIONS"), twig_constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::TYPE_DROPDOWN"),         // line 4
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()));
        // line 7
        echo twig_include($this->env, $context, "@MauticCore/Helper/action_button_helper.html.twig");
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\StorageExtension']->restore($context, "action_button_helper"), "html", null, true);
        echo "

";
        // line 11
        if (((is_iterable((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })())) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", true, true, false, 11)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", true, true, false, 11))) {
            // line 12
            echo "    ";
            list($context["id"], $context["name"]) =             [twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12)];
        } else {
            // line 14
            echo "    ";
            list($context["id"], $context["name"]) =             [twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "getId", [], "method", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), (isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 14, $this->source); })()), [], "any", false, false, false, 14)];
        }
        // line 16
        echo "
<div class=\"input-group input-group-sm\">
    <span class=\"input-group-addon\">
        <input type=\"checkbox\" data-target=\"tbody\" data-toggle=\"selectrow\" class=\"list-checkbox\" name=\"cb";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()));
        echo "\"/>
    </span>

    <div class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle btn-nospin\" data-toggle=\"dropdown\">
            <i class=\"ri-arrow-down-s-line\"></i>
        </button>
        ";
        // line 26
        if ((array_key_exists("tooltip", $context) &&  !twig_test_empty((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 26, $this->source); })())))) {
            echo "<i class=\"ri-question-line\"></i>";
        }
        // line 27
        echo "        <ul class=\"pull-";
        echo twig_escape_filter($this->env, (isset($context["pull"]) || array_key_exists("pull", $context) ? $context["pull"] : (function () { throw new RuntimeError('Variable "pull" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " page-list-actions dropdown-menu\" role=\"menu\">
            ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, ($context["templateButtons"] ?? null), "edit", [], "any", true, true, false, 28) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 28, $this->source); })()), "edit", [], "any", false, false, false, 28)))) {
            // line 29
            echo "            ";
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButton(["attr" => twig_array_merge(            // line 30
(isset($context["editAttr"]) || array_key_exists("editAttr", $context) ? $context["editAttr"] : (function () { throw new RuntimeError('Variable "editAttr" does not exist.', 30, $this->source); })()), ["class" => "hidden-xs btn btn-default btn-sm btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 33
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 33, $this->source); })()), twig_array_merge(            // line 34
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 34, $this->source); })()), ["objectAction" => "edit", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 34, $this->source); })())])), "data-toggle" =>             // line 36
(isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 36, $this->source); })())]), "iconClass" => "ri-edit-line", "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.edit"), "primary" => true]);
            // line 41
            echo "
            ";
        }
        // line 43
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["templateButtons"] ?? null), "clone", [], "any", true, true, false, 43) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 43, $this->source); })()), "clone", [], "any", false, false, false, 43)))) {
            // line 44
            echo "            ";
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButton(["attr" => twig_array_merge(            // line 45
(isset($context["editAttr"]) || array_key_exists("editAttr", $context) ? $context["editAttr"] : (function () { throw new RuntimeError('Variable "editAttr" does not exist.', 45, $this->source); })()), ["class" => "hidden-xs btn btn-default btn-sm btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 48
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 48, $this->source); })()), twig_array_merge(            // line 49
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 49, $this->source); })()), ["objectAction" => "clone", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 49, $this->source); })())])), "data-toggle" => "ajax"]), "iconClass" => "ri-file-copy-line", "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.clone"), "priority" => 200]);
            // line 56
            echo "
            ";
        }
        // line 58
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["templateButtons"] ?? null), "delete", [], "any", true, true, false, 58) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 58, $this->source); })()), "delete", [], "any", false, false, false, 58)))) {
            // line 59
            echo "            ";
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButton(["confirm" => ["btnClass" => false, "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete"), "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((            // line 63
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 63, $this->source); })()) . ".form.confirmdelete"), ["%name%" => ((((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 63, $this->source); })()) . " (") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 63, $this->source); })())) . ")")]), "confirmAction" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 65
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 65, $this->source); })()), twig_array_merge(            // line 66
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 66, $this->source); })()), ["objectAction" => "delete", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 66, $this->source); })())])), "template" => "delete"], "priority" =>  -1]);
            // line 71
            echo "
            ";
        }
        // line 73
        echo "
            ";
        // line 74
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render();
        echo "
        </ul>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/list_actions.html.twig";
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
        return array (  125 => 74,  122 => 73,  118 => 71,  116 => 66,  115 => 65,  114 => 63,  112 => 59,  109 => 58,  105 => 56,  103 => 49,  102 => 48,  101 => 45,  99 => 44,  96 => 43,  92 => 41,  90 => 36,  89 => 34,  88 => 33,  87 => 30,  85 => 29,  83 => 28,  78 => 27,  74 => 26,  62 => 19,  57 => 16,  53 => 14,  49 => 12,  47 => 11,  42 => 9,  40 => 7,  38 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/list_actions.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\list_actions.html.twig");
    }
}
