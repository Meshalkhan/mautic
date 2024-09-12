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

/* @MauticCore/Helper/tableheader.html.twig */
class __TwigTemplate_1e9c6657b63f565853e3002914c2d9a7 extends Template
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
        $context["target"] = ((array_key_exists("target", $context)) ? ((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 1, $this->source); })())) : (".page-list"));
        // line 2
        yield "
";
        // line 3
        if ((array_key_exists("checkall", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["checkall"]) || array_key_exists("checkall", $context) ? $context["checkall"] : (function () { throw new RuntimeError('Variable "checkall" does not exist.', 3, $this->source); })())))) {
            // line 4
            yield "    ";
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_BULK_ACTIONS"), Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::TYPE_DROPDOWN"));
            // line 9
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/action_button_helper.html.twig");
            // line 11
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\StorageExtension']->restore($context, "action_button_helper"), "html", null, true);
            yield "

    ";
            // line 13
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["templateButtons"] ?? null), "delete", [], "any", true, true, false, 13) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 13, $this->source); })()), "delete", [], "any", false, false, false, 13)))) {
                // line 14
                yield "        ";
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButton(["confirm" => ["message" => (($this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorHasId((                // line 16
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 16, $this->source); })()) . ".form.confirmbatchdelete"))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((                // line 17
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 17, $this->source); })()) . ".form.confirmbatchdelete"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.confirmbatchdelete"))), "confirmAction" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(                // line 19
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 19, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 19, $this->source); })()), ["objectAction" => "batchDelete"])), "template" => "batchdelete"], "priority" =>  -1]);
                // line 23
                yield "
    ";
            }
            // line 25
            yield "<th class=\"col-actions\" ";
            if ((array_key_exists("tooltip", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 25, $this->source); })())))) {
                yield " data-toggle=\"tooltip\" title=\"\" data-placement=\"top\" data-original-title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 25, $this->source); })())), "html", null, true);
                yield "\"";
            }
            yield ">
    <div class=\"input-group input-group-sm\">
        <span class=\"input-group-addon\">
            <input type=\"checkbox\" id=\"customcheckbox-one0\" value=\"1\" data-toggle=\"checkall\" data-target=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 28, $this->source); })()), "html", null, true);
            yield "\">
        </span>

        <div class=\"input-group-btn\">
            <button type=\"button\" disabled class=\"btn btn-default btn-sm dropdown-toggle btn-nospin\" data-toggle=\"dropdown\">
                <i class=\"ri-arrow-down-s-line\"></i>
            </button>
            <ul class=\"pull-";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pull"]) || array_key_exists("pull", $context) ? $context["pull"] : (function () { throw new RuntimeError('Variable "pull" does not exist.', 35, $this->source); })()), "html", null, true);
            yield " page-list-actions dropdown-menu\" role=\"menu\">
                ";
            // line 36
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render();
            yield "
            </ul>
        </div>
    </div>
</th>
";
        } elseif (( !        // line 41
array_key_exists("sessionVar", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 41, $this->source); })())))) {
            // line 42
            yield "<th";
            if ((array_key_exists("class", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 42, $this->source); })())))) {
                yield " class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 42, $this->source); })()), "html", null, true);
                yield "\"";
            }
            yield ">
    <span>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 43, $this->source); })())), "html", null, true);
            yield "</span>
</th>
";
        } else {
            // line 46
            $context["defaultOrder"] = (((array_key_exists("default", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["default"]) || array_key_exists("default", $context) ? $context["default"] : (function () { throw new RuntimeError('Variable "default" does not exist.', 46, $this->source); })())))) ? ((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 46, $this->source); })())) : (""));
            // line 47
            $context["order"] = ((array_key_exists("order", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 47, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "session", [], "any", false, false, false, 47), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 47, $this->source); })())) . ".orderby"), (isset($context["defaultOrder"]) || array_key_exists("defaultOrder", $context) ? $context["defaultOrder"] : (function () { throw new RuntimeError('Variable "defaultOrder" does not exist.', 47, $this->source); })())], "method", false, false, false, 47))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "session", [], "any", false, false, false, 47), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 47, $this->source); })())) . ".orderby"), (isset($context["defaultOrder"]) || array_key_exists("defaultOrder", $context) ? $context["defaultOrder"] : (function () { throw new RuntimeError('Variable "defaultOrder" does not exist.', 47, $this->source); })())], "method", false, false, false, 47)));
            // line 48
            $context["dir"] = ((array_key_exists("dir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 48, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "session", [], "any", false, false, false, 48), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 48, $this->source); })())) . ".orderbydir"), "ASC"], "method", false, false, false, 48))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "session", [], "any", false, false, false, 48), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 48, $this->source); })())) . ".orderbydir"), "ASC"], "method", false, false, false, 48)));
            // line 49
            $context["filters"] = ((array_key_exists("filters", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 49, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "session", [], "any", false, false, false, 49), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 49, $this->source); })())) . ".filters"), []], "method", false, false, false, 49))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "session", [], "any", false, false, false, 49), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 49, $this->source); })())) . ".filters"), []], "method", false, false, false, 49)));
            // line 50
            $context["tmpl"] = ((array_key_exists("tmpl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 50, $this->source); })()), "list")) : ("list"));
            // line 51
            yield "<th";
            if ((array_key_exists("class", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 51, $this->source); })())))) {
                yield " class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 51, $this->source); })()), "html", null, true);
                yield "\"";
            }
            yield ">
    <div class=\"thead-filter\">
        ";
            // line 53
            if ((array_key_exists("orderBy", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 53, $this->source); })())))) {
                // line 54
                yield "        <a href=\"javascript: void(0);\" onclick=\"Mautic.reorderTableData('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 54, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 54, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 54, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 54, $this->source); })()), "html", null, true);
                yield "'";
                if ((array_key_exists("baseUrl", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 54, $this->source); })())))) {
                    yield ",'";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 54, $this->source); })()), "html", null, true);
                    yield "'";
                }
                yield ");\">
            <span>";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 55, $this->source); })())), "html", null, true);
                yield "</span>
            ";
                // line 56
                if (((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 56, $this->source); })()) == (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 56, $this->source); })()))) {
                    // line 57
                    yield "            <i class=\"fa fa-sort-amount-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 57, $this->source); })())), "html", null, true);
                    yield "\"></i>
            ";
                }
                // line 59
                yield "        </a>
        ";
            } else {
                // line 61
                yield "            <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 61, $this->source); })())), "html", null, true);
                yield "</span>
        ";
            }
            // line 63
            yield "
        ";
            // line 64
            if ((array_key_exists("filterBy", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 64, $this->source); })())))) {
                // line 65
                yield "        ";
                $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), (isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 65, $this->source); })()), [], "array", true, true, false, 65)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 65, $this->source); })()), (isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 65, $this->source); })()), [], "array", false, false, false, 65), "value", [], "any", false, false, false, 65)) : (""));
                // line 66
                yield "        <div class=\"input-group input-group-sm\">
            <input
                type=\"text\"
                placeholder=\"";
                // line 69
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.form.thead.filter", [], "messages");
                yield "\"
                autocomplete=\"false\"
                class=\"form-control input-sm\"
                value=\"";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 72, $this->source); })()));
                yield "\"
                ";
                // line 73
                if ((array_key_exists("dataToggle", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["dataToggle"]) || array_key_exists("dataToggle", $context) ? $context["dataToggle"] : (function () { throw new RuntimeError('Variable "dataToggle" does not exist.', 73, $this->source); })())))) {
                    yield " data-toggle=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dataToggle"]) || array_key_exists("dataToggle", $context) ? $context["dataToggle"] : (function () { throw new RuntimeError('Variable "dataToggle" does not exist.', 73, $this->source); })()), "html", null, true);
                    yield "\"";
                }
                // line 74
                yield "                onchange=\"Mautic.filterTableData('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 74, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 74, $this->source); })()), "html", null, true);
                yield "',this.value,'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 74, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 74, $this->source); })()), "html", null, true);
                yield "'";
                if ((array_key_exists("baseUrl", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 74, $this->source); })())))) {
                    yield ",'";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 74, $this->source); })()), "html", null, true);
                    yield "'";
                }
                yield ");\"
            />
            <span class=\"input-group-btn\">
                <button
                    class=\"btn btn-default btn-xs\"
                    onclick=\"Mautic.filterTableData('";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 79, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 79, $this->source); })()), "html", null, true);
                yield "',";
                yield (((array_key_exists("value", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 79, $this->source); })())))) ? ("'',") : ("mQuery(this).parent().prev().val(),"));
                yield "'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 79, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 79, $this->source); })()), "html", null, true);
                yield "'";
                if ((array_key_exists("baseUrl", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 79, $this->source); })())))) {
                    yield ",'";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 79, $this->source); })()), "html", null, true);
                    yield "'";
                }
                yield ");\"                >
                    <i class=\"fa fa-fw fa-lg ";
                // line 80
                yield (((array_key_exists("value", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 80, $this->source); })())))) ? ("ri-close-line") : ("fa-filter"));
                yield "\"></i>
                </button>
            </span>
        </div>
        ";
            }
            // line 85
            yield "    </div>
</th>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/tableheader.html.twig";
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
        return array (  259 => 85,  251 => 80,  233 => 79,  212 => 74,  206 => 73,  202 => 72,  196 => 69,  191 => 66,  188 => 65,  186 => 64,  183 => 63,  177 => 61,  173 => 59,  167 => 57,  165 => 56,  161 => 55,  144 => 54,  142 => 53,  132 => 51,  130 => 50,  128 => 49,  126 => 48,  124 => 47,  122 => 46,  116 => 43,  107 => 42,  105 => 41,  97 => 36,  93 => 35,  83 => 28,  72 => 25,  68 => 23,  66 => 19,  65 => 17,  64 => 16,  62 => 14,  60 => 13,  54 => 11,  52 => 9,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/tableheader.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\tableheader.html.twig");
    }
}
