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

/* @MauticForm/Form/details.html.twig */
class __TwigTemplate_80e3a16fb3c76d2d2b397a7cd06a41b6 extends Template
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
            'actions' => [$this, 'block_actions'],
            'publishStatus' => [$this, 'block_publishStatus'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 16
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticForm/Form/details.html.twig", 16);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "form";
    }

    // line 20
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
    }

    // line 22
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 24
(isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 24, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 26, $this->source); })()), "form:forms:editown", [], "array", false, false, false, 26), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 26, $this->source); })()), "form:forms:editother", [], "array", false, false, false, 26), twig_get_attribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 26, $this->source); })()), "createdBy", [], "any", false, false, false, 26)), "clone" => twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 27, $this->source); })()), "form:forms:create", [], "array", false, false, false, 27), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 28
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 28, $this->source); })()), "form:forms:deleteown", [], "array", false, false, false, 28), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 28, $this->source); })()), "form:forms:deleteother", [], "array", false, false, false, 28), twig_get_attribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 28, $this->source); })()), "createdBy", [], "any", false, false, false, 28)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 29
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 29, $this->source); })()), "form:forms:viewown", [], "array", false, false, false, 29), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 29, $this->source); })()), "form:forms:viewother", [], "array", false, false, false, 29), twig_get_attribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 29, $this->source); })()), "createdBy", [], "any", false, false, false, 29))], "routeBase" => "form", "langVar" => "form", "customButtons" => [["attr" => ["data-toggle" => "", "target" => "_blank", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "preview", "objectId" => twig_get_attribute($this->env, $this->source,         // line 38
(isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)])], "iconClass" => "fa fa-camera", "btnText" => "mautic.form.form.preview", "btnClass" => "btn btn-default btn-nospin"], ["attr" => ["data-toggle" => "ajax", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "results", "objectId" => twig_get_attribute($this->env, $this->source,         // line 47
(isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)])], "iconClass" => "fa fa-database", "btnText" => "mautic.form.form.results"]]]);
        // line 53
        echo "
";
    }

    // line 56
    public function block_publishStatus($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "    ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 57, $this->source); })())]);
        echo "
";
    }

    // line 60
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        $context["showActions"] = twig_length_filter($this->env, (isset($context["activeFormActions"]) || array_key_exists("activeFormActions", $context) ? $context["activeFormActions"] : (function () { throw new RuntimeError('Variable "activeFormActions" does not exist.', 61, $this->source); })()));
        // line 62
        echo "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 bg-white height-auto\">
        <div class=\"bg-auto\">
            <!-- form detail header -->
            <div class=\"pr-md pl-md pt-lg pb-lg\">
                <div class=\"box-layout\">
                    <div class=\"col-xs-10\">
                        <div class=\"text-muted\">";
        // line 71
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 71, $this->source); })()), "description", [], "any", false, false, false, 71));
        echo "</div>
                    </div>
                </div>
            </div>
            <!--/ form detail header -->

            <!-- form detail collapseable -->
            <div class=\"collapse\" id=\"form-details\">
                <div class=\"pr-md pl-md pb-md\">
                    <div class=\"panel shd-none mb-0\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>
                            ";
        // line 83
        echo twig_include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 83, $this->source); })())]);
        echo "
                            <tr>
                                <td width=\"20%\">
                                    <span class=\"fw-b\">";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.stats.submission_counts"), "html", null, true);
        echo "</span>
                                </td>
                                <td>
                                    ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 89, $this->source); })()), "unique", [], "array", false, false, false, 89), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 89, $this->source); })()), "total", [], "array", false, false, false, 89), "html", null, true);
        echo "
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ form detail collapseable -->
        </div>

        <div class=\"bg-auto bg-dark-xs\">
            <!-- form detail collapseable toggler -->
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\"
                      title=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.details.detail"), "html", null, true);
        echo "\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\"
                       data-target=\"#form-details\"><span class=\"caret\"></span> ";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "</a>
                </span>
            </div>
            <!--/ form detail collapseable toggler -->

            <!-- stats -->
            <div class=\"pa-md\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"panel\">
                            <div class=\"panel-body box-layout\">
                                <div class=\"col-xs-6 va-m\">
                                    <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                        <span class=\"ri-download-line\"></span>
                                        ";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.graph.line.submissions"), "html", null, true);
        echo "
                                    </h5>
                                </div>
                                <div class=\"col-xs-6 va-m\">
                                    ";
        // line 124
        echo twig_include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 124, $this->source); })()), "class" => "pull-right"]);
        echo "
                                </div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                ";
        // line 128
        echo twig_include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 128, $this->source); })()), "submissionsInTime", [], "array", false, false, false, 128), "chartType" => "line", "chartHeight" => 300]);
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ stats -->

            ";
        // line 136
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        echo "

            <!-- tabs controls -->
            <ul class=\"nav nav-tabs pr-md pl-md\">
                ";
        // line 140
        if ((isset($context["showActions"]) || array_key_exists("showActions", $context) ? $context["showActions"] : (function () { throw new RuntimeError('Variable "showActions" does not exist.', 140, $this->source); })())) {
            // line 141
            echo "                    <li class=\"active\">
                        <a href=\"#actions-container\" role=\"tab\" data-toggle=\"tab\">";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.tab.actions"), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        // line 145
        echo "                <li class=\"";
        if ( !(isset($context["showActions"]) || array_key_exists("showActions", $context) ? $context["showActions"] : (function () { throw new RuntimeError('Variable "showActions" does not exist.', 145, $this->source); })())) {
            echo "active";
        }
        echo "\">
                    <a href=\"#fields-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.tab.fields"), "html", null, true);
        echo "</a>
                </li>
            </ul>
            <!--/ tabs controls -->
        </div>

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md\">
            ";
        // line 154
        if ((isset($context["showActions"]) || array_key_exists("showActions", $context) ? $context["showActions"] : (function () { throw new RuntimeError('Variable "showActions" does not exist.', 154, $this->source); })())) {
            // line 155
            echo "                <!-- #actions-container -->
                <div class=\"tab-pane active fade in bdr-w-0\" id=\"actions-container\">
                    ";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["activeFormActions"]) || array_key_exists("activeFormActions", $context) ? $context["activeFormActions"] : (function () { throw new RuntimeError('Variable "activeFormActions" does not exist.', 157, $this->source); })()));
            foreach ($context['_seq'] as $context["group"] => $context["groupActions"]) {
                // line 158
                echo "                        <h5 class=\"fw-sb mb-xs\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["group"]), "html", null, true);
                echo "</h5>
                        <ul class=\"list-group\">
                            ";
                // line 161
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["groupActions"]);
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 162
                    echo "                                <li class=\"list-group-item bg-auto bg-light-xs\">
                                    <div class=\"box-layout\">
                                        ";
                    // line 164
                    $context["icon"] = null;
                    // line 165
                    echo "                                        ";
                    if (("lead" == $context["group"])) {
                        // line 166
                        echo "                                          ";
                        $context["icon"] = "ri-user-6-fill";
                        // line 167
                        echo "                                        ";
                    } elseif (("asset" == $context["group"])) {
                        // line 168
                        echo "                                          ";
                        $context["icon"] = "fa-cloud-download";
                        // line 169
                        echo "                                        ";
                    }
                    // line 170
                    echo "                                        ";
                    if ( !twig_test_empty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 170, $this->source); })()))) {
                        // line 171
                        echo "                                            <div class=\"col-md-1 va-m\">
                                                <h3><span class=\"fa ";
                        // line 172
                        echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 172, $this->source); })()), "html", null, true);
                        echo " text-white dark-xs\"></span></h3>
                                            </div>
                                        ";
                    }
                    // line 175
                    echo "                                        <div class=\"col-md-7 va-m\">
                                            <h5 class=\"fw-sb text-primary mb-xs\">";
                    // line 176
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 176), "html", null, true);
                    echo "</h5>
                                            <h6 class=\"text-white dark-sm\">";
                    // line 177
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["action"], "description", [], "any", false, false, false, 177));
                    echo "</h6>
                                        </div>
                                        <div class=\"col-md-4 va-m text-right\">
                                            <em class=\"text-white dark-sm\">";
                    // line 180
                    if (twig_get_attribute($this->env, $this->source, ($context["availableActions"] ?? null), twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 180), [], "array", true, true, false, 180)) {
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["availableActions"]) || array_key_exists("availableActions", $context) ? $context["availableActions"] : (function () { throw new RuntimeError('Variable "availableActions" does not exist.', 180, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 180), [], "array", false, false, false, 180), "label", [], "array", false, false, false, 180)), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 180), "html", null, true);
                    }
                    echo "</em>
                                        </div>
                                    </div>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 185
                echo "                        </ul>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['group'], $context['groupActions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "                </div>
                <!--/ #actions-container -->
            ";
        }
        // line 190
        echo "
            <!-- #fields-container -->
            <div class=\"tab-pane fade ";
        // line 192
        if ( !(isset($context["showActions"]) || array_key_exists("showActions", $context) ? $context["showActions"] : (function () { throw new RuntimeError('Variable "showActions" does not exist.', 192, $this->source); })())) {
            echo "active in";
        }
        echo " bdr-w-0\" id=\"fields-container\">
                <h5 class=\"fw-sb mb-xs\">";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field"), "html", null, true);
        echo "</h5>
                <ul class=\"list-group mb-xs\">
                    ";
        // line 196
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activeFormFields"]) || array_key_exists("activeFormFields", $context) ? $context["activeFormFields"] : (function () { throw new RuntimeError('Variable "activeFormFields" does not exist.', 196, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 197
            echo "                      ";
            if ( !twig_get_attribute($this->env, $this->source, $context["field"], "parent", [], "any", false, false, false, 197)) {
                // line 198
                echo "                      <li class=\"list-group-item bg-auto bg-light-xs mt-10\">
                          ";
                // line 199
                echo twig_include($this->env, $context, "@MauticForm/Form/_details_fields_list.html.twig", ["field" => $context["field"]]);
                echo "
                      </li>
                      ";
            }
            // line 202
            echo "                      ";
            // line 203
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["activeFormFields"]) || array_key_exists("activeFormFields", $context) ? $context["activeFormFields"] : (function () { throw new RuntimeError('Variable "activeFormFields" does not exist.', 203, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["fieldChild"]) {
                // line 204
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->source, $context["fieldChild"], "parent", [], "any", false, false, false, 204) == twig_get_attribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 204))) {
                    // line 205
                    echo "                              <li class=\"list-group-item bg-auto bg-light-xs ml-20\">
                                  ";
                    // line 206
                    echo twig_include($this->env, $context, "@MauticForm/Form/_details_fields_list.html.twig", ["field" => $context["fieldChild"]]);
                    echo "
                              </li>
                          ";
                }
                // line 209
                echo "                      ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldChild'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "                </ul>
            </div>
            <!--/ #fields-container -->
        </div>
        <!--/ end: tab-content -->
    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bg-white bdr-l height-auto\">
        <!-- form HTML -->
        <div class=\"pa-md\">
            <div class=\"panel bg-info bg-light-lg bdr-w-0 mb-0\">
                <div class=\"panel-body\">
                    <h5 class=\"fw-sb mb-sm\">";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.header.copy"), "html", null, true);
        echo "</h5>
                    <p class=\"mb-sm\">";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.landingpages"), "html", null, true);
        echo "</p>
                    <a href=\"#\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#modal-automatic-copy\">";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.header.embedded"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#modal-manual-copy\">";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.header.selfhosted"), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>
        <!--/ form HTML -->

        <hr class=\"hr-w-2\" style=\"width:50%\">

        ";
        // line 237
        echo "        <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mb-0\">
            <!-- recent activity -->
            ";
        // line 239
        echo twig_include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 239, $this->source); })())]);
        echo "
        </div>
    </div>
    <!--/ right section -->

    <!-- #modal-automatic-copy -->
    <div class=\"modal fade\" id=\"modal-automatic-copy\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title fw-sb\">";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.header.embedded"), "html", null, true);
        echo "</h5>
                </div>
                <div class=\"modal-body\">
                    <p>";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.automaticcopy"), "html", null, true);
        echo "</p>
                    <h3>";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.automaticcopy.js"), "html", null, true);
        echo "</h3>
                    <textarea class=\"form-control\" readonly onclick=\"this.setSelectionRange(0, this.value.length);\">&lt;script type=\"text/javascript\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_form_generateform", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 254, $this->source); })()), "id", [], "any", false, false, false, 254)], true), "html", null, true);
        echo "\"&gt;&lt;/script&gt;</textarea>
                    <h3 class=\"pt-lg\">";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.automaticcopy.iframe"), "html", null, true);
        echo "</h3>
                    <textarea class=\"form-control\" readonly onclick=\"this.setSelectionRange(0, this.value.length);\">&lt;iframe src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_form_preview", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 256, $this->source); })()), "id", [], "any", false, false, false, 256)], true), "html", null, true);
        echo "\" width=\"300\" height=\"300\"&gt;&lt;p&gt;Your browser does not support iframes.&lt;/p&gt;&lt;/iframe&gt;</textarea>
                    <i>";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.automaticcopy.iframe.note"), "html", null, true);
        echo "</i>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </div>
    </div>
    <!--/ #modal-automatic-copy -->

    <!-- #modal-manual-copy -->
    <div class=\"modal fade\" id=\"modal-manual-copy\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title fw-sb\">";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.header.selfhosted"), "html", null, true);
        echo "</h5>
                </div>
                <div class=\"panel-body\">
                    <p>";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.selfhosted"), "html", null, true);
        echo "</p>

                    <h4 class=\"mt-sm mb-sm\">";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.selfhosted.script"), "html", null, true);
        echo "</h4>
                    <textarea class=\"form-html form-control\" readonly
                              onclick=\"this.setSelectionRange(0, this.value.length);\">";
        // line 279
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["formScript"]) || array_key_exists("formScript", $context) ? $context["formScript"] : (function () { throw new RuntimeError('Variable "formScript" does not exist.', 279, $this->source); })()));
        echo "</textarea>

                    <h4 class=\"mt-sm mb-sm\">";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.selfhosted.body"), "html", null, true);
        echo "</h4>
                    <textarea class=\"form-html form-control\" readonly
                              onclick=\"this.setSelectionRange(0, this.value.length);\">";
        // line 283
        echo (isset($context["formContent"]) || array_key_exists("formContent", $context) ? $context["formContent"] : (function () { throw new RuntimeError('Variable "formContent" does not exist.', 283, $this->source); })());
        echo "</textarea>
                </div>
                <div class=\"panel-footer text-right\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </div>
    </div>
    <!--/ #modal-manual-copy -->
</div>
<!--/ end: box layout -->

<input type=\"hidden\" name=\"entityId\" id=\"entityId\" value=\"";
        // line 295
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 295, $this->source); })()), "id", [], "any", false, false, false, 295));
        echo "\"/>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Form/details.html.twig";
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
        return array (  587 => 295,  575 => 286,  569 => 283,  564 => 281,  559 => 279,  554 => 277,  549 => 275,  543 => 272,  528 => 260,  522 => 257,  518 => 256,  514 => 255,  510 => 254,  506 => 253,  502 => 252,  496 => 249,  483 => 239,  479 => 237,  468 => 228,  464 => 227,  460 => 226,  456 => 225,  440 => 211,  426 => 210,  412 => 209,  406 => 206,  403 => 205,  400 => 204,  382 => 203,  380 => 202,  374 => 199,  371 => 198,  368 => 197,  350 => 196,  345 => 193,  339 => 192,  335 => 190,  330 => 187,  323 => 185,  308 => 180,  302 => 177,  298 => 176,  295 => 175,  289 => 172,  286 => 171,  283 => 170,  280 => 169,  277 => 168,  274 => 167,  271 => 166,  268 => 165,  266 => 164,  262 => 162,  257 => 161,  251 => 158,  247 => 157,  243 => 155,  241 => 154,  230 => 146,  223 => 145,  217 => 142,  214 => 141,  212 => 140,  205 => 136,  194 => 128,  187 => 124,  180 => 120,  163 => 106,  158 => 104,  138 => 89,  132 => 86,  126 => 83,  111 => 71,  100 => 62,  98 => 61,  94 => 60,  87 => 57,  83 => 56,  78 => 53,  76 => 47,  75 => 38,  74 => 29,  73 => 28,  72 => 27,  71 => 26,  70 => 24,  68 => 23,  64 => 22,  57 => 20,  50 => 18,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Form/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Form\\details.html.twig");
    }
}
