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

/* @MauticLead/Import/progress.html.twig */
class __TwigTemplate_eb225c9ae6eb7f6344bd8fba5def7c0c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 13
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Import/progress.html.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "leadImport";
    }

    // line 17
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "  ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.leads", ["%object%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["objectName"]) || array_key_exists("objectName", $context) ? $context["objectName"] : (function () { throw new RuntimeError('Variable "objectName" does not exist.', 18, $this->source); })()))]), "html", null, true);
        echo "
";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "  ";
        $context["object"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", ["object", "contacts"], "method", false, false, false, 22);
        // line 23
        echo "  ";
        $context["objectName"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["objectName"]) || array_key_exists("objectName", $context) ? $context["objectName"] : (function () { throw new RuntimeError('Variable "objectName" does not exist.', 23, $this->source); })()));
        // line 24
        echo "  ";
        $context["percent"] = twig_get_attribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 24, $this->source); })()), "toPercent", [], "any", false, false, false, 24);
        // line 25
        echo "  ";
        $context["id"] = (((isset($context["complete"]) || array_key_exists("complete", $context) ? $context["complete"] : (function () { throw new RuntimeError('Variable "complete" does not exist.', 25, $this->source); })())) ? ("leadImportProgressComplete") : ("leadImportProgress"));
        // line 26
        echo "  ";
        $context["header"] = (((isset($context["complete"]) || array_key_exists("complete", $context) ? $context["complete"] : (function () { throw new RuntimeError('Variable "complete" does not exist.', 26, $this->source); })())) ? ("mautic.lead.import.success") : ("mautic.lead.import.donotleave"));
        // line 27
        echo "
<div class=\"row ma-lg\" id=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\">
    <div class=\"col-sm-offset-3 col-sm-6 text-center\">
        <div class=\"panel panel-";
        // line 30
        if ((isset($context["complete"]) || array_key_exists("complete", $context) ? $context["complete"] : (function () { throw new RuntimeError('Variable "complete" does not exist.', 30, $this->source); })())) {
            echo "success";
        } else {
            echo "danger";
        }
        echo "\">
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 32, $this->source); })()), ["object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 32, $this->source); })())]), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"panel-body\">
                ";
        // line 35
        if ( !(isset($context["complete"]) || array_key_exists("complete", $context) ? $context["complete"] : (function () { throw new RuntimeError('Variable "complete" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "                    <h4>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.inprogress"), "html", null, true);
            echo "</h4>
                ";
        } else {
            // line 38
            echo "                    <h4>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.stats", ["%merged%" => twig_get_attribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 38, $this->source); })()), "updatedCount", [], "any", false, false, false, 38), "%created%" => twig_get_attribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 38, $this->source); })()), "insertedCount", [], "any", false, false, false, 38), "%ignored%" => twig_get_attribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 38, $this->source); })()), "ignoredCount", [], "any", false, false, false, 38)]), "html", null, true);
            echo "</h4>
                ";
        }
        // line 40
        echo "                <div class=\"progress mt-md\" style=\"height:50px;\">
                    <div class=\"progress-bar-import progress-bar progress-bar-striped ";
        // line 41
        if ( !(isset($context["complete"]) || array_key_exists("complete", $context) ? $context["complete"] : (function () { throw new RuntimeError('Variable "complete" does not exist.', 41, $this->source); })())) {
            echo "active";
        }
        echo "\"
                         role=\"progressbar\"
                         aria-valuenow=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 43, $this->source); })()), "done", [], "any", false, false, false, 43), "html", null, true);
        echo "\"
                         aria-valuemin=\"0\"
                         aria-valuemax=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 45, $this->source); })()), "total", [], "any", false, false, false, 45), "html", null, true);
        echo "\"
                         style=\"width: ";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "%; height: 50px;\"><span class=\"sr-only\">";
        echo twig_escape_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "%</span>
                    </div>
                </div>
            </div>
            ";
        // line 50
        if ( !twig_test_empty((isset($context["failedRows"]) || array_key_exists("failedRows", $context) ? $context["failedRows"] : (function () { throw new RuntimeError('Variable "failedRows" does not exist.', 50, $this->source); })()))) {
            // line 51
            echo "                <ul class=\"list-group\">
                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["failedRows"]) || array_key_exists("failedRows", $context) ? $context["failedRows"] : (function () { throw new RuntimeError('Variable "failedRows" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 53
                echo "                        ";
                $context["lineNumber"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "properties", [], "any", false, true, false, 53), "line", [], "any", true, true, false, 53)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "properties", [], "any", false, true, false, 53), "line", [], "any", false, false, false, 53), "N/A")) : ("N/A"));
                // line 54
                echo "                        ";
                $context["failure"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "properties", [], "any", false, true, false, 54), "error", [], "any", true, true, false, 54)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "properties", [], "any", false, true, false, 54), "error", [], "any", false, false, false, 54), "N/A")) : ("N/A"));
                // line 55
                echo "                        <li class=\"list-group-item text-left\">
                            <a target=\"_new\" class=\"text-danger\">(#";
                // line 56
                echo twig_escape_filter($this->env, (isset($context["lineNumber"]) || array_key_exists("lineNumber", $context) ? $context["lineNumber"] : (function () { throw new RuntimeError('Variable "lineNumber" does not exist.', 56, $this->source); })()), "html", null, true);
                echo ") ";
                echo twig_escape_filter($this->env, (isset($context["failure"]) || array_key_exists("failure", $context) ? $context["failure"] : (function () { throw new RuntimeError('Variable "failure" does not exist.', 56, $this->source); })()), "html", null, true);
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                </ul>
            ";
        }
        // line 61
        echo "            <div class=\"panel-footer\">
                <p class=\"small\"><span class=\"imported-count\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 62, $this->source); })()), "done", [], "any", false, false, false, 62), "html", null, true);
        echo "</span> / <span class=\"total-count\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 62, $this->source); })()), "total", [], "any", false, false, false, 62), "html", null, true);
        echo "</span></p>
                ";
        // line 63
        if ( !(isset($context["complete"]) || array_key_exists("complete", $context) ? $context["complete"] : (function () { throw new RuntimeError('Variable "complete" does not exist.', 63, $this->source); })())) {
            // line 64
            echo "                    <div>
                        <a class=\"btn btn-danger\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_action", ["objectAction" => "cancel", "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 65, $this->source); })())]), "html", null, true);
            echo "\" data-toggle=\"ajax\">
                            ";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"), "html", null, true);
            echo "
                        </a>
                        <a class=\"btn btn-primary\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_action", ["objectAction" => "queue", "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 68, $this->source); })())]), "html", null, true);
            echo "\" data-toggle=\"ajax\">
                            ";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.queue.btn"), "html", null, true);
            echo "
                        </a>
                    </div>
                ";
        } else {
            // line 73
            echo "                    <div>
                        ";
            // line 74
            $context["indexRouteParams"] = twig_array_merge((isset($context["indexRouteParams"]) || array_key_exists("indexRouteParams", $context) ? $context["indexRouteParams"] : (function () { throw new RuntimeError('Variable "indexRouteParams" does not exist.', 74, $this->source); })()), ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.import_id") . ":") . twig_get_attribute($this->env, $this->source,             // line 75
(isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75))]);
            // line 77
            echo "                        <a class=\"btn btn-success\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 77, $this->source); })()), (isset($context["indexRouteParams"]) || array_key_exists("indexRouteParams", $context) ? $context["indexRouteParams"] : (function () { throw new RuntimeError('Variable "indexRouteParams" does not exist.', 77, $this->source); })())), "html", null, true);
            echo "\" data-toggle=\"ajax\">
                            ";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.view", ["%objects%" => (isset($context["objectName"]) || array_key_exists("objectName", $context) ? $context["objectName"] : (function () { throw new RuntimeError('Variable "objectName" does not exist.', 78, $this->source); })())]), "html", null, true);
            echo "
                        </a>
                        <a class=\"btn btn-success\" href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_index", ["object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 80, $this->source); })())]), "html", null, true);
            echo "\" data-toggle=\"ajax\">
                            ";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.view.imports"), "html", null, true);
            echo "
                        </a>
                        <a class=\"btn btn-success\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83), "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 83, $this->source); })())]), "html", null, true);
            echo "\" data-toggle=\"ajax\">
                            ";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.result.info", ["%import%" => twig_get_attribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 84, $this->source); })()), "name", [], "method", false, false, false, 84)]), "html", null, true);
            echo "
                        </a>
                    </div>
                ";
        }
        // line 88
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Import/progress.html.twig";
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
        return array (  253 => 88,  246 => 84,  242 => 83,  237 => 81,  233 => 80,  228 => 78,  223 => 77,  221 => 75,  220 => 74,  217 => 73,  210 => 69,  206 => 68,  201 => 66,  197 => 65,  194 => 64,  192 => 63,  186 => 62,  183 => 61,  179 => 59,  168 => 56,  165 => 55,  162 => 54,  159 => 53,  155 => 52,  152 => 51,  150 => 50,  141 => 46,  137 => 45,  132 => 43,  125 => 41,  122 => 40,  116 => 38,  110 => 36,  108 => 35,  102 => 32,  93 => 30,  88 => 28,  85 => 27,  82 => 26,  79 => 25,  76 => 24,  73 => 23,  70 => 22,  66 => 21,  59 => 18,  55 => 17,  48 => 15,  37 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Import/progress.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Import\\progress.html.twig");
    }
}
