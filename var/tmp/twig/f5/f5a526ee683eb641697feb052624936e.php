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

/* @MauticForm/Form/details.html.twig */
class __TwigTemplate_1903b78d1608b58d42c7d2fe3c9cf4cb extends Template
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

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'publishStatus' => [$this, 'block_publishStatus'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 16
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticForm/Form/details.html.twig", 16);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "form";
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 24
(isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 24, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 26, $this->source); })()), "form:forms:editown", [], "array", false, false, false, 26), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 26, $this->source); })()), "form:forms:editother", [], "array", false, false, false, 26), CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 26, $this->source); })()), "createdBy", [], "any", false, false, false, 26)), "clone" => CoreExtension::getAttribute($this->env, $this->source,         // line 27
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 27, $this->source); })()), "form:forms:create", [], "array", false, false, false, 27), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 28
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 28, $this->source); })()), "form:forms:deleteown", [], "array", false, false, false, 28), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 28, $this->source); })()), "form:forms:deleteother", [], "array", false, false, false, 28), CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 28, $this->source); })()), "createdBy", [], "any", false, false, false, 28)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 29, $this->source); })()), "form:forms:viewown", [], "array", false, false, false, 29), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 29, $this->source); })()), "form:forms:viewother", [], "array", false, false, false, 29), CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 29, $this->source); })()), "createdBy", [], "any", false, false, false, 29))], "routeBase" => "form", "langVar" => "form", "customButtons" => [["attr" => ["data-toggle" => "", "target" => "_blank", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "preview", "objectId" => CoreExtension::getAttribute($this->env, $this->source,         // line 38
(isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)])], "iconClass" => "fa fa-camera", "btnText" => "mautic.form.form.preview", "btnClass" => "btn btn-default btn-nospin"], ["attr" => ["data-toggle" => "ajax", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "results", "objectId" => CoreExtension::getAttribute($this->env, $this->source,         // line 47
(isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)])], "iconClass" => "fa fa-database", "btnText" => "mautic.form.form.results"]]]);
        // line 53
        yield "
";
        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 57, $this->source); })())]);
        yield "
";
        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 61
        $context["showActions"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["activeFormActions"]) || array_key_exists("activeFormActions", $context) ? $context["activeFormActions"] : (function () { throw new RuntimeError('Variable "activeFormActions" does not exist.', 61, $this->source); })()));
        // line 62
        yield "<!-- start: box layout -->
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
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 71, $this->source); })()), "description", [], "any", false, false, false, 71));
        yield "</div>
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 83, $this->source); })())]);
        yield "
                            <tr>
                                <td width=\"20%\">
                                    <span class=\"fw-b\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.stats.submission_counts"), "html", null, true);
        yield "</span>
                                </td>
                                <td>
                                    ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 89, $this->source); })()), "unique", [], "array", false, false, false, 89), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 89, $this->source); })()), "total", [], "array", false, false, false, 89), "html", null, true);
        yield "
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.details.detail"), "html", null, true);
        yield "\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\"
                       data-target=\"#form-details\"><span class=\"caret\"></span> ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "</a>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.graph.line.submissions"), "html", null, true);
        yield "
                                    </h5>
                                </div>
                                <div class=\"col-xs-6 va-m\">
                                    ";
        // line 124
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 124, $this->source); })()), "class" => "pull-right"]);
        yield "
                                </div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                ";
        // line 128
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 128, $this->source); })()), "submissionsInTime", [], "array", false, false, false, 128), "chartType" => "line", "chartHeight" => 300]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ stats -->

            ";
        // line 136
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

            <!-- tabs controls -->
            <ul class=\"nav nav-tabs pr-md pl-md\">
                ";
        // line 140
        if ((isset($context["showActions"]) || array_key_exists("showActions", $context) ? $context["showActions"] : (function () { throw new RuntimeError('Variable "showActions" does not exist.', 140, $this->source); })())) {
            // line 141
            yield "                    <li class=\"active\">
                        <a href=\"#actions-container\" role=\"tab\" data-toggle=\"tab\">";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.tab.actions"), "html", null, true);
            yield "</a>
                    </li>
                ";
        }
        // line 145
        yield "                <li class=\"";
        if ( !(isset($context["showActions"]) || array_key_exists("showActions", $context) ? $context["showActions"] : (function () { throw new RuntimeError('Variable "showActions" does not exist.', 145, $this->source); })())) {
            yield "active";
        }
        yield "\">
                    <a href=\"#fields-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.tab.fields"), "html", null, true);
        yield "</a>
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
            yield "                <!-- #actions-container -->
                <div class=\"tab-pane active fade in bdr-w-0\" id=\"actions-container\">
                    ";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activeFormActions"]) || array_key_exists("activeFormActions", $context) ? $context["activeFormActions"] : (function () { throw new RuntimeError('Variable "activeFormActions" does not exist.', 157, $this->source); })()));
            foreach ($context['_seq'] as $context["group"] => $context["groupActions"]) {
                // line 158
                yield "                        <h5 class=\"fw-sb mb-xs\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $context["group"]), "html", null, true);
                yield "</h5>
                        <ul class=\"list-group\">
                            ";
                // line 161
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["groupActions"]);
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 162
                    yield "                                <li class=\"list-group-item bg-auto bg-light-xs\">
                                    <div class=\"box-layout\">
                                        ";
                    // line 164
                    $context["icon"] = null;
                    // line 165
                    yield "                                        ";
                    if (("lead" == $context["group"])) {
                        // line 166
                        yield "                                          ";
                        $context["icon"] = "ri-user-6-fill";
                        // line 167
                        yield "                                        ";
                    } elseif (("asset" == $context["group"])) {
                        // line 168
                        yield "                                          ";
                        $context["icon"] = "fa-cloud-download";
                        // line 169
                        yield "                                        ";
                    }
                    // line 170
                    yield "                                        ";
                    if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 170, $this->source); })()))) {
                        // line 171
                        yield "                                            <div class=\"col-md-1 va-m\">
                                                <h3><span class=\"fa ";
                        // line 172
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 172, $this->source); })()), "html", null, true);
                        yield " text-white dark-xs\"></span></h3>
                                            </div>
                                        ";
                    }
                    // line 175
                    yield "                                        <div class=\"col-md-7 va-m\">
                                            <h5 class=\"fw-sb text-primary mb-xs\">";
                    // line 176
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 176), "html", null, true);
                    yield "</h5>
                                            <h6 class=\"text-white dark-sm\">";
                    // line 177
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "description", [], "any", false, false, false, 177));
                    yield "</h6>
                                        </div>
                                        <div class=\"col-md-4 va-m text-right\">
                                            <em class=\"text-white dark-sm\">";
                    // line 180
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["availableActions"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 180), [], "array", true, true, false, 180)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["availableActions"]) || array_key_exists("availableActions", $context) ? $context["availableActions"] : (function () { throw new RuntimeError('Variable "availableActions" does not exist.', 180, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 180), [], "array", false, false, false, 180), "label", [], "array", false, false, false, 180)), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 180), "html", null, true);
                    }
                    yield "</em>
                                        </div>
                                    </div>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 185
                yield "                        </ul>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['group'], $context['groupActions'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            yield "                </div>
                <!--/ #actions-container -->
            ";
        }
        // line 190
        yield "
            <!-- #fields-container -->
            <div class=\"tab-pane fade ";
        // line 192
        if ( !(isset($context["showActions"]) || array_key_exists("showActions", $context) ? $context["showActions"] : (function () { throw new RuntimeError('Variable "showActions" does not exist.', 192, $this->source); })())) {
            yield "active in";
        }
        yield " bdr-w-0\" id=\"fields-container\">
                <h5 class=\"fw-sb mb-xs\">";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field"), "html", null, true);
        yield "</h5>
                <ul class=\"list-group mb-xs\">
                    ";
        // line 196
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activeFormFields"]) || array_key_exists("activeFormFields", $context) ? $context["activeFormFields"] : (function () { throw new RuntimeError('Variable "activeFormFields" does not exist.', 196, $this->source); })()));
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
            yield "                      ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["field"], "parent", [], "any", false, false, false, 197)) {
                // line 198
                yield "                      <li class=\"list-group-item bg-auto bg-light-xs mt-10\">
                          ";
                // line 199
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticForm/Form/_details_fields_list.html.twig", ["field" => $context["field"]]);
                yield "
                      </li>
                      ";
            }
            // line 202
            yield "                      ";
            // line 203
            yield "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activeFormFields"]) || array_key_exists("activeFormFields", $context) ? $context["activeFormFields"] : (function () { throw new RuntimeError('Variable "activeFormFields" does not exist.', 203, $this->source); })()));
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
                yield "                          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldChild"], "parent", [], "any", false, false, false, 204) == CoreExtension::getAttribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 204))) {
                    // line 205
                    yield "                              <li class=\"list-group-item bg-auto bg-light-xs ml-20\">
                                  ";
                    // line 206
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticForm/Form/_details_fields_list.html.twig", ["field" => $context["fieldChild"]]);
                    yield "
                              </li>
                          ";
                }
                // line 209
                yield "                      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['fieldChild'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            yield "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        yield "                </ul>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.header.copy"), "html", null, true);
        yield "</h5>
                    <p class=\"mb-sm\">";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.landingpages"), "html", null, true);
        yield "</p>
                    <a href=\"#\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#modal-automatic-copy\">";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.header.embedded"), "html", null, true);
        yield "</a>
                    <a href=\"#\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#modal-manual-copy\">";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.header.selfhosted"), "html", null, true);
        yield "</a>
                </div>
            </div>
        </div>
        <!--/ form HTML -->

        <hr class=\"hr-w-2\" style=\"width:50%\">

        ";
        // line 237
        yield "        <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mb-0\">
            <!-- recent activity -->
            ";
        // line 239
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 239, $this->source); })())]);
        yield "
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.header.embedded"), "html", null, true);
        yield "</h5>
                </div>
                <div class=\"modal-body\">
                    <p>";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.automaticcopy"), "html", null, true);
        yield "</p>
                    <h3>";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.automaticcopy.js"), "html", null, true);
        yield "</h3>
                    <textarea class=\"form-control\" readonly onclick=\"this.setSelectionRange(0, this.value.length);\">&lt;script type=\"text/javascript\" src=\"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_form_generateform", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 254, $this->source); })()), "id", [], "any", false, false, false, 254)], true), "html", null, true);
        yield "\"&gt;&lt;/script&gt;</textarea>
                    <h3 class=\"pt-lg\">";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.automaticcopy.iframe"), "html", null, true);
        yield "</h3>
                    <textarea class=\"form-control\" readonly onclick=\"this.setSelectionRange(0, this.value.length);\">&lt;iframe src=\"";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_form_preview", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 256, $this->source); })()), "id", [], "any", false, false, false, 256)], true), "html", null, true);
        yield "\" width=\"300\" height=\"300\"&gt;&lt;p&gt;Your browser does not support iframes.&lt;/p&gt;&lt;/iframe&gt;</textarea>
                    <i>";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.automaticcopy.iframe.note"), "html", null, true);
        yield "</i>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close"), "html", null, true);
        yield "</button>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.header.selfhosted"), "html", null, true);
        yield "</h5>
                </div>
                <div class=\"panel-body\">
                    <p>";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.selfhosted"), "html", null, true);
        yield "</p>

                    <h4 class=\"mt-sm mb-sm\">";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.selfhosted.script"), "html", null, true);
        yield "</h4>
                    <textarea class=\"form-html form-control\" readonly
                              onclick=\"this.setSelectionRange(0, this.value.length);\">";
        // line 279
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["formScript"]) || array_key_exists("formScript", $context) ? $context["formScript"] : (function () { throw new RuntimeError('Variable "formScript" does not exist.', 279, $this->source); })()));
        yield "</textarea>

                    <h4 class=\"mt-sm mb-sm\">";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.selfhosted.body"), "html", null, true);
        yield "</h4>
                    <textarea class=\"form-html form-control\" readonly
                              onclick=\"this.setSelectionRange(0, this.value.length);\">";
        // line 283
        yield (isset($context["formContent"]) || array_key_exists("formContent", $context) ? $context["formContent"] : (function () { throw new RuntimeError('Variable "formContent" does not exist.', 283, $this->source); })());
        yield "</textarea>
                </div>
                <div class=\"panel-footer text-right\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close"), "html", null, true);
        yield "</button>
                </div>
            </div>
        </div>
    </div>
    <!--/ #modal-manual-copy -->
</div>
<!--/ end: box layout -->

<input type=\"hidden\" name=\"entityId\" id=\"entityId\" value=\"";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 295, $this->source); })()), "id", [], "any", false, false, false, 295));
        yield "\"/>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Form/details.html.twig";
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
        return array (  611 => 295,  599 => 286,  593 => 283,  588 => 281,  583 => 279,  578 => 277,  573 => 275,  567 => 272,  552 => 260,  546 => 257,  542 => 256,  538 => 255,  534 => 254,  530 => 253,  526 => 252,  520 => 249,  507 => 239,  503 => 237,  492 => 228,  488 => 227,  484 => 226,  480 => 225,  464 => 211,  450 => 210,  436 => 209,  430 => 206,  427 => 205,  424 => 204,  406 => 203,  404 => 202,  398 => 199,  395 => 198,  392 => 197,  374 => 196,  369 => 193,  363 => 192,  359 => 190,  354 => 187,  347 => 185,  332 => 180,  326 => 177,  322 => 176,  319 => 175,  313 => 172,  310 => 171,  307 => 170,  304 => 169,  301 => 168,  298 => 167,  295 => 166,  292 => 165,  290 => 164,  286 => 162,  281 => 161,  275 => 158,  271 => 157,  267 => 155,  265 => 154,  254 => 146,  247 => 145,  241 => 142,  238 => 141,  236 => 140,  229 => 136,  218 => 128,  211 => 124,  204 => 120,  187 => 106,  182 => 104,  162 => 89,  156 => 86,  150 => 83,  135 => 71,  124 => 62,  122 => 61,  115 => 60,  107 => 57,  100 => 56,  94 => 53,  92 => 47,  91 => 38,  90 => 29,  89 => 28,  88 => 27,  87 => 26,  86 => 24,  84 => 23,  77 => 22,  66 => 20,  55 => 18,  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Form/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Form\\details.html.twig");
    }
}
