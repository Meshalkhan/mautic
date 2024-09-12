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

/* @MauticCore/Helper/tableheader.html.twig */
class __TwigTemplate_fa86d1dd1e1ce1b63e89e620ebb9df7d extends Template
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
        $context["target"] = ((array_key_exists("target", $context)) ? ((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 1, $this->source); })())) : (".page-list"));
        // line 2
        echo "
";
        // line 3
        if ((array_key_exists("checkall", $context) &&  !twig_test_empty((isset($context["checkall"]) || array_key_exists("checkall", $context) ? $context["checkall"] : (function () { throw new RuntimeError('Variable "checkall" does not exist.', 3, $this->source); })())))) {
            // line 4
            echo "    ";
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(twig_constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_BULK_ACTIONS"), twig_constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::TYPE_DROPDOWN"));
            // line 9
            echo twig_include($this->env, $context, "@MauticCore/Helper/action_button_helper.html.twig");
            // line 11
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\StorageExtension']->restore($context, "action_button_helper"), "html", null, true);
            echo "

    ";
            // line 13
            if ((twig_get_attribute($this->env, $this->source, ($context["templateButtons"] ?? null), "delete", [], "any", true, true, false, 13) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 13, $this->source); })()), "delete", [], "any", false, false, false, 13)))) {
                // line 14
                echo "        ";
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButton(["confirm" => ["message" => (($this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorHasId((                // line 16
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 16, $this->source); })()) . ".form.confirmbatchdelete"))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((                // line 17
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 17, $this->source); })()) . ".form.confirmbatchdelete"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.confirmbatchdelete"))), "confirmAction" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(                // line 19
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 19, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 19, $this->source); })()), ["objectAction" => "batchDelete"])), "template" => "batchdelete"], "priority" =>  -1]);
                // line 23
                echo "
    ";
            }
            // line 25
            echo "<th class=\"col-actions\" ";
            if ((array_key_exists("tooltip", $context) &&  !twig_test_empty((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 25, $this->source); })())))) {
                echo " data-toggle=\"tooltip\" title=\"\" data-placement=\"top\" data-original-title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 25, $this->source); })())), "html", null, true);
                echo "\"";
            }
            echo ">
    <div class=\"input-group input-group-sm\">
        <span class=\"input-group-addon\">
            <input type=\"checkbox\" id=\"customcheckbox-one0\" value=\"1\" data-toggle=\"checkall\" data-target=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "\">
        </span>

        <div class=\"input-group-btn\">
            <button type=\"button\" disabled class=\"btn btn-default btn-sm dropdown-toggle btn-nospin\" data-toggle=\"dropdown\">
                <i class=\"ri-arrow-down-s-line\"></i>
            </button>
            <ul class=\"pull-";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["pull"]) || array_key_exists("pull", $context) ? $context["pull"] : (function () { throw new RuntimeError('Variable "pull" does not exist.', 35, $this->source); })()), "html", null, true);
            echo " page-list-actions dropdown-menu\" role=\"menu\">
                ";
            // line 36
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render();
            echo "
            </ul>
        </div>
    </div>
</th>
";
        } elseif (( !        // line 41
array_key_exists("sessionVar", $context) || twig_test_empty((isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 41, $this->source); })())))) {
            // line 42
            echo "<th";
            if ((array_key_exists("class", $context) &&  !twig_test_empty((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 42, $this->source); })())))) {
                echo " class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 42, $this->source); })()), "html", null, true);
                echo "\"";
            }
            echo ">
    <span>";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 43, $this->source); })())), "html", null, true);
            echo "</span>
</th>
";
        } else {
            // line 46
            $context["defaultOrder"] = (((array_key_exists("default", $context) &&  !twig_test_empty((isset($context["default"]) || array_key_exists("default", $context) ? $context["default"] : (function () { throw new RuntimeError('Variable "default" does not exist.', 46, $this->source); })())))) ? ((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 46, $this->source); })())) : (""));
            // line 47
            $context["order"] = ((array_key_exists("order", $context)) ? (_twig_default_filter((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 47, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "session", [], "any", false, false, false, 47), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 47, $this->source); })())) . ".orderby"), (isset($context["defaultOrder"]) || array_key_exists("defaultOrder", $context) ? $context["defaultOrder"] : (function () { throw new RuntimeError('Variable "defaultOrder" does not exist.', 47, $this->source); })())], "method", false, false, false, 47))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "session", [], "any", false, false, false, 47), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 47, $this->source); })())) . ".orderby"), (isset($context["defaultOrder"]) || array_key_exists("defaultOrder", $context) ? $context["defaultOrder"] : (function () { throw new RuntimeError('Variable "defaultOrder" does not exist.', 47, $this->source); })())], "method", false, false, false, 47)));
            // line 48
            $context["dir"] = ((array_key_exists("dir", $context)) ? (_twig_default_filter((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 48, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "session", [], "any", false, false, false, 48), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 48, $this->source); })())) . ".orderbydir"), "ASC"], "method", false, false, false, 48))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "session", [], "any", false, false, false, 48), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 48, $this->source); })())) . ".orderbydir"), "ASC"], "method", false, false, false, 48)));
            // line 49
            $context["filters"] = ((array_key_exists("filters", $context)) ? (_twig_default_filter((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 49, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "session", [], "any", false, false, false, 49), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 49, $this->source); })())) . ".filters"), []], "method", false, false, false, 49))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "session", [], "any", false, false, false, 49), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 49, $this->source); })())) . ".filters"), []], "method", false, false, false, 49)));
            // line 50
            $context["tmpl"] = ((array_key_exists("tmpl", $context)) ? (_twig_default_filter((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 50, $this->source); })()), "list")) : ("list"));
            // line 51
            echo "<th";
            if ((array_key_exists("class", $context) &&  !twig_test_empty((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 51, $this->source); })())))) {
                echo " class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 51, $this->source); })()), "html", null, true);
                echo "\"";
            }
            echo ">
    <div class=\"thead-filter\">
        ";
            // line 53
            if ((array_key_exists("orderBy", $context) &&  !twig_test_empty((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 53, $this->source); })())))) {
                // line 54
                echo "        <a href=\"javascript: void(0);\" onclick=\"Mautic.reorderTableData('";
                echo twig_escape_filter($this->env, (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 54, $this->source); })()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 54, $this->source); })()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 54, $this->source); })()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 54, $this->source); })()), "html", null, true);
                echo "'";
                if ((array_key_exists("baseUrl", $context) &&  !twig_test_empty((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 54, $this->source); })())))) {
                    echo ",'";
                    echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 54, $this->source); })()), "html", null, true);
                    echo "'";
                }
                echo ");\">
            <span>";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 55, $this->source); })())), "html", null, true);
                echo "</span>
            ";
                // line 56
                if (((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 56, $this->source); })()) == (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 56, $this->source); })()))) {
                    // line 57
                    echo "            <i class=\"fa fa-sort-amount-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 57, $this->source); })())), "html", null, true);
                    echo "\"></i>
            ";
                }
                // line 59
                echo "        </a>
        ";
            } else {
                // line 61
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 61, $this->source); })())), "html", null, true);
                echo "</span>
        ";
            }
            // line 63
            echo "
        ";
            // line 64
            if ((array_key_exists("filterBy", $context) &&  !twig_test_empty((isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 64, $this->source); })())))) {
                // line 65
                echo "        ";
                $context["value"] = ((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), (isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 65, $this->source); })()), [], "array", true, true, false, 65)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 65, $this->source); })()), (isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 65, $this->source); })()), [], "array", false, false, false, 65), "value", [], "any", false, false, false, 65)) : (""));
                // line 66
                echo "        <div class=\"input-group input-group-sm\">
            <input
                type=\"text\"
                placeholder=\"";
                // line 69
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.form.thead.filter", [], "messages");
                echo "\"
                autocomplete=\"false\"
                class=\"form-control input-sm\"
                value=\"";
                // line 72
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 72, $this->source); })()));
                echo "\"
                ";
                // line 73
                if ((array_key_exists("dataToggle", $context) &&  !twig_test_empty((isset($context["dataToggle"]) || array_key_exists("dataToggle", $context) ? $context["dataToggle"] : (function () { throw new RuntimeError('Variable "dataToggle" does not exist.', 73, $this->source); })())))) {
                    echo " data-toggle=\"";
                    echo twig_escape_filter($this->env, (isset($context["dataToggle"]) || array_key_exists("dataToggle", $context) ? $context["dataToggle"] : (function () { throw new RuntimeError('Variable "dataToggle" does not exist.', 73, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                // line 74
                echo "                onchange=\"Mautic.filterTableData('";
                echo twig_escape_filter($this->env, (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 74, $this->source); })()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, (isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 74, $this->source); })()), "html", null, true);
                echo "',this.value,'";
                echo twig_escape_filter($this->env, (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 74, $this->source); })()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 74, $this->source); })()), "html", null, true);
                echo "'";
                if ((array_key_exists("baseUrl", $context) &&  !twig_test_empty((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 74, $this->source); })())))) {
                    echo ",'";
                    echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 74, $this->source); })()), "html", null, true);
                    echo "'";
                }
                echo ");\"
            />
            <span class=\"input-group-btn\">
                <button
                    class=\"btn btn-default btn-xs\"
                    onclick=\"Mautic.filterTableData('";
                // line 79
                echo twig_escape_filter($this->env, (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 79, $this->source); })()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, (isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 79, $this->source); })()), "html", null, true);
                echo "',";
                echo (((array_key_exists("value", $context) &&  !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 79, $this->source); })())))) ? ("'',") : ("mQuery(this).parent().prev().val(),"));
                echo "'";
                echo twig_escape_filter($this->env, (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 79, $this->source); })()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 79, $this->source); })()), "html", null, true);
                echo "'";
                if ((array_key_exists("baseUrl", $context) &&  !twig_test_empty((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 79, $this->source); })())))) {
                    echo ",'";
                    echo twig_escape_filter($this->env, (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 79, $this->source); })()), "html", null, true);
                    echo "'";
                }
                echo ");\"                >
                    <i class=\"fa fa-fw fa-lg ";
                // line 80
                echo (((array_key_exists("value", $context) &&  !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 80, $this->source); })())))) ? ("ri-close-line") : ("fa-filter"));
                echo "\"></i>
                </button>
            </span>
        </div>
        ";
            }
            // line 85
            echo "    </div>
</th>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/tableheader.html.twig";
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
        return array (  254 => 85,  246 => 80,  228 => 79,  207 => 74,  201 => 73,  197 => 72,  191 => 69,  186 => 66,  183 => 65,  181 => 64,  178 => 63,  172 => 61,  168 => 59,  162 => 57,  160 => 56,  156 => 55,  139 => 54,  137 => 53,  127 => 51,  125 => 50,  123 => 49,  121 => 48,  119 => 47,  117 => 46,  111 => 43,  102 => 42,  100 => 41,  92 => 36,  88 => 35,  78 => 28,  67 => 25,  63 => 23,  61 => 19,  60 => 17,  59 => 16,  57 => 14,  55 => 13,  49 => 11,  47 => 9,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/tableheader.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\tableheader.html.twig");
    }
}
