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

/* @Integrations/Config/form.html.twig */
class __TwigTemplate_6d7fb3d086b3557ee0a28aa82e8ce211 extends Template
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
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("app/bundles/IntegrationsBundle/Assets/js/integrations.js", "integrationsConfigOnLoad", "integrationsConfigOnLoad");
        yield "
";
        // line 3
        $context["activeTab"] = ((array_key_exists("activeTab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 3, $this->source); })()), "details-container")) : ("details-container"));
        // line 4
        yield "
";
        // line 5
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        yield "
<ul class=\"nav nav-tabs\">
    <!-- Enabled\\Auth -->
    <li class=\"";
        // line 8
        if (("details-container" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 8, $this->source); })()))) {
            yield " active";
        }
        yield "\" id=\"details-tab\">
        <a href=\"#details-container\" role=\"tab\" data-toggle=\"tab\">
            ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.integration.tab.details"), "html", null, true);
        yield "
            ";
        // line 11
        if ((isset($context["hasAuthErrors"]) || array_key_exists("hasAuthErrors", $context) ? $context["hasAuthErrors"] : (function () { throw new RuntimeError('Variable "hasAuthErrors" does not exist.', 11, $this->source); })())) {
            // line 12
            yield "                <i class=\"fa fa-fw fa-warning text-danger\"></i>
            ";
        }
        // line 14
        yield "        </a>
    </li>
    <!-- Enabled\\Auth -->

    <!-- Features -->
    ";
        // line 19
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["showFeaturesTab"]) || array_key_exists("showFeaturesTab", $context) ? $context["showFeaturesTab"] : (function () { throw new RuntimeError('Variable "showFeaturesTab" does not exist.', 19, $this->source); })()))) {
            // line 20
            yield "        <li class=\"\" id=\"features-tab\">
            <a href=\"#features-container\" role=\"tab\" data-toggle=\"tab\">
                ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.integration.tab.features"), "html", null, true);
            yield "
                ";
            // line 23
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["hasFeatureErrors"]) || array_key_exists("hasFeatureErrors", $context) ? $context["hasFeatureErrors"] : (function () { throw new RuntimeError('Variable "hasFeatureErrors" does not exist.', 23, $this->source); })()))) {
                // line 24
                yield "                <i class=\"fa fa-fw fa-warning text-danger\"></i>
                ";
            }
            // line 26
            yield "            </a>
        </li>
    ";
        }
        // line 29
        yield "    <!-- Features -->

    <!-- Field Mapping -->
    ";
        // line 32
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["useSyncFeatures"]) || array_key_exists("useSyncFeatures", $context) ? $context["useSyncFeatures"] : (function () { throw new RuntimeError('Variable "useSyncFeatures" does not exist.', 32, $this->source); })()))) {
            // line 33
            yield "    ";
            $context["objects"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 33, $this->source); })()), "getSyncConfigObjects", [], "method", false, false, false, 33);
            // line 34
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "featureSettings", [], "any", false, false, false, 34), "sync", [], "any", false, false, false, 34), "fieldMappings", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["object"] => $context["objectFieldMapping"]) {
                // line 35
                yield "        <li class=\"";
                if (((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 35, $this->source); })()) == ("field-mapping-" . $context["object"]))) {
                    yield " active";
                }
                yield "\" id=\"fields-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["object"], "html", null, true);
                yield "-tab\">
            <a href=\"#field-mappings-";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["object"], "html", null, true);
                yield "-container\" role=\"tab\" data-toggle=\"tab\">
                ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.sync_field_mapping", ["%object%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 37, $this->source); })()), $context["object"], [], "array", false, false, false, 37))]), "html", null, true);
                yield "
                ";
                // line 38
                if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors($context["objectFieldMapping"])) {
                    // line 39
                    yield "                    <i class=\"fa fa-fw fa-warning text-danger\"></i>
                ";
                }
                // line 41
                yield "            </a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['object'], $context['objectFieldMapping'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "    ";
        }
        // line 45
        yield "    <!-- Field Mapping -->
</ul>

<div class=\"tab-content pa-md\">
    <!-- Enabled\\Auth -->
    <div class=\"tab-pane fade";
        // line 50
        if (("details-container" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 50, $this->source); })()))) {
            yield " in active";
        }
        yield " bdr-w-0\" id=\"details-container\">
        ";
        // line 51
        if (((isset($context["useConfigFormNotes"]) || array_key_exists("useConfigFormNotes", $context) ? $context["useConfigFormNotes"] : (function () { throw new RuntimeError('Variable "useConfigFormNotes" does not exist.', 51, $this->source); })()) && $this->env->getTest('instanceof')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 51, $this->source); })()), "getAuthorizationNote", [], "method", false, false, false, 51), "\\Mautic\\IntegrationsBundle\\DTO\\Note"))) {
            // line 52
            yield "            <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 52, $this->source); })()), "getAuthorizationNote", [], "method", false, false, false, 52), "getType", [], "method", false, false, false, 52), "html", null, true);
            yield "\">
                ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 53, $this->source); })()), "getAuthorizationNote", [], "method", false, false, false, 53), "getNote", [], "method", false, false, false, 53)), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 56
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "isPublished", [], "any", false, false, false, 56), 'row');
        yield "
        ";
        // line 57
        if ($this->env->getTest('instanceof')->getCallable()((isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 57, $this->source); })()), "\\Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormAuthInterface")) {
            // line 58
            yield "        <hr />
        ";
            // line 59
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "apiKeys", [], "any", false, false, false, 59), 'row');
            yield "
            ";
            // line 60
            if ((isset($context["useAuthorizationUrl"]) || array_key_exists("useAuthorizationUrl", $context) ? $context["useAuthorizationUrl"] : (function () { throw new RuntimeError('Variable "useAuthorizationUrl" does not exist.', 60, $this->source); })())) {
                // line 61
                yield "            <div class=\"alert alert-warning\">
                ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 62, $this->source); })()), "getCallbackHelpMessageTranslationKey", [], "method", false, false, false, 62)), "html", null, true);
                yield "
            </div>
            ";
                // line 64
                if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["callbackUrl"]) || array_key_exists("callbackUrl", $context) ? $context["callbackUrl"] : (function () { throw new RuntimeError('Variable "callbackUrl" does not exist.', 64, $this->source); })()))) {
                    // line 65
                    yield "            <div class=\"well well-sm\">
                ";
                    // line 66
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.callbackuri"), "html", null, true);
                    yield "<br/>
                <input type=\"text\" name=\"callback_url\" readonly onclick=\"this.setSelectionRange(0, this.value.length);\" value=\"";
                    // line 67
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["callbackUrl"]) || array_key_exists("callbackUrl", $context) ? $context["callbackUrl"] : (function () { throw new RuntimeError('Variable "callbackUrl" does not exist.', 67, $this->source); })()), "html", null, true);
                    yield "\" class=\"form-control\"/>
            </div>
            ";
                }
                // line 70
                yield "            <div class=\"row\">
                <div class=\"col-xs-12 text-center\">
                    <input type=\"hidden\" id=\"integration_details_in_auth\" name=\"integration_details[in_auth]\" autocomplete=\"false\">
                    <button type=\"button\" id=\"integration_details_authButton\" name=\"integration_details[authButton]\" class=\"btn btn-success btn-lg\" onclick=\"Mautic.authorizeIntegration()\">
                        <i class=\"fa fa-key \"></i>
                        ";
                // line 75
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 75, $this->source); })()), "isAuthorized", [], "method", false, false, false, 75)) {
                    // line 76
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.form.reauthorize"), "html", null, true);
                    yield "
                        ";
                } else {
                    // line 78
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.form.authorize"), "html", null, true);
                    yield "
                        ";
                }
                // line 80
                yield "                    </button>
                </div>
            </div>
            ";
            }
            // line 84
            yield "        ";
        }
        // line 85
        yield "    </div>
    <!-- Enabled\\Auth -->

    <!-- Features -->
    ";
        // line 89
        if ((isset($context["showFeaturesTab"]) || array_key_exists("showFeaturesTab", $context) ? $context["showFeaturesTab"] : (function () { throw new RuntimeError('Variable "showFeaturesTab" does not exist.', 89, $this->source); })())) {
            // line 90
            yield "    <div class=\"tab-pane fade";
            if (("features-container" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 90, $this->source); })()))) {
                yield " in active";
            }
            yield " bdr-w-0\" id=\"features-container\">
        ";
            // line 91
            if (((isset($context["useConfigFormNotes"]) || array_key_exists("useConfigFormNotes", $context) ? $context["useConfigFormNotes"] : (function () { throw new RuntimeError('Variable "useConfigFormNotes" does not exist.', 91, $this->source); })()) && $this->env->getTest('instanceof')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 91, $this->source); })()), "getFeaturesNote", [], "method", false, false, false, 91), "\\Mautic\\IntegrationsBundle\\DTO\\Note"))) {
                // line 92
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 92, $this->source); })()), "getFeaturesNote", [], "method", false, false, false, 92), "getType", [], "method", false, false, false, 92), "html", null, true);
                yield "\">
                ";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 93, $this->source); })()), "getFeaturesNote", [], "method", false, false, false, 93), "getNote", [], "method", false, false, false, 93)), "html", null, true);
                yield "
            </div>
        ";
            }
            // line 97
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "supportedFeatures", [], "any", true, true, false, 97)) {
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "supportedFeatures", [], "any", false, false, false, 97), 'row');
            }
            // line 98
            yield "
        ";
            // line 99
            if (((isset($context["useFeatureSettings"]) || array_key_exists("useFeatureSettings", $context) ? $context["useFeatureSettings"] : (function () { throw new RuntimeError('Variable "useFeatureSettings" does not exist.', 99, $this->source); })()) || (isset($context["useSyncFeatures"]) || array_key_exists("useSyncFeatures", $context) ? $context["useSyncFeatures"] : (function () { throw new RuntimeError('Variable "useSyncFeatures" does not exist.', 99, $this->source); })()))) {
                // line 100
                yield "            <hr />
        ";
            }
            // line 102
            yield "
        ";
            // line 103
            if ((isset($context["useSyncFeatures"]) || array_key_exists("useSyncFeatures", $context) ? $context["useSyncFeatures"] : (function () { throw new RuntimeError('Variable "useSyncFeatures" does not exist.', 103, $this->source); })())) {
                // line 104
                yield "            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "featureSettings", [], "any", false, false, false, 104), "sync", [], "any", false, false, false, 104), "objects", [], "any", false, false, false, 104), 'row');
                yield "
            ";
                // line 106
                yield "
            ";
                // line 107
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "featureSettings", [], "any", false, true, false, 107), "sync", [], "any", false, true, false, 107), "integration", [], "any", true, true, false, 107)) {
                    // line 108
                    yield "                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "featureSettings", [], "any", false, false, false, 108), "sync", [], "any", false, false, false, 108), "integration", [], "any", false, false, false, 108), 'row');
                    yield "
            ";
                }
                // line 110
                yield "
            ";
                // line 111
                if ((isset($context["useFeatureSettings"]) || array_key_exists("useFeatureSettings", $context) ? $context["useFeatureSettings"] : (function () { throw new RuntimeError('Variable "useFeatureSettings" does not exist.', 111, $this->source); })())) {
                    // line 112
                    yield "                <hr />
            ";
                }
                // line 114
                yield "        ";
            }
            // line 115
            yield "
        ";
            // line 116
            if ((isset($context["useFeatureSettings"]) || array_key_exists("useFeatureSettings", $context) ? $context["useFeatureSettings"] : (function () { throw new RuntimeError('Variable "useFeatureSettings" does not exist.', 116, $this->source); })())) {
                // line 117
                yield "            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "featureSettings", [], "any", false, false, false, 117), "integration", [], "any", false, false, false, 117), 'row');
                yield "
        ";
            }
            // line 119
            yield "    </div>
    ";
        }
        // line 121
        yield "    <!-- Features -->

    <!-- Field Mapping -->
    ";
        // line 124
        if ((isset($context["useSyncFeatures"]) || array_key_exists("useSyncFeatures", $context) ? $context["useSyncFeatures"] : (function () { throw new RuntimeError('Variable "useSyncFeatures" does not exist.', 124, $this->source); })())) {
            // line 125
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "featureSettings", [], "any", false, false, false, 125), "sync", [], "any", false, false, false, 125), "fieldMappings", [], "any", false, false, false, 125));
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
            foreach ($context['_seq'] as $context["object"] => $context["objectFieldMapping"]) {
                // line 126
                yield "    <div class=\"tab-pane fade";
                if (((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 126, $this->source); })()) == ("field-mapping-" . $context["object"]))) {
                    yield " in active";
                }
                yield " bdr-w-0\" id=\"field-mappings-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["object"], "html", null, true);
                yield "-container\">
        <div class=\"has-error\">
            ";
                // line 128
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["objectFieldMapping"], 'errors');
                yield "
        </div>

        ";
                // line 131
                if (((isset($context["useConfigFormNotes"]) || array_key_exists("useConfigFormNotes", $context) ? $context["useConfigFormNotes"] : (function () { throw new RuntimeError('Variable "useConfigFormNotes" does not exist.', 131, $this->source); })()) && $this->env->getTest('instanceof')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 131, $this->source); })()), "getFieldMappingNote", [], "method", false, false, false, 131), "\\Mautic\\IntegrationsBundle\\DTO\\Note"))) {
                    // line 132
                    yield "            <div class=\"alert alert-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 132, $this->source); })()), "getFieldMappingNote", [], "method", false, false, false, 132), "getType", [], "method", false, false, false, 132), "html", null, true);
                    yield "\">
                ";
                    // line 133
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 133, $this->source); })()), "getFieldMappingNote", [], "method", false, false, false, 133), "getNote", [], "method", false, false, false, 133)), "html", null, true);
                    yield "
            </div>
        ";
                }
                // line 136
                yield "
        ";
                // line 137
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["objectFieldMapping"], "filter-keyword", [], "array", false, false, false, 137), 'row');
                yield "

        <div id=\"field-mappings-";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["object"], "html", null, true);
                yield "\">";
                // line 140
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@Integrations/Config/field_mapping.html.twig", ["form" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 141
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "featureSettings", [], "any", false, false, false, 141), "sync", [], "any", false, false, false, 141), "fieldMappings", [], "any", false, false, false, 141), $context["object"], [], "array", false, false, false, 141), "integration" => CoreExtension::getAttribute($this->env, $this->source,                 // line 142
(isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 142, $this->source); })()), "getName", [], "method", false, false, false, 142), "object" =>                 // line 143
$context["object"], "page" => 1]);
                // line 146
                yield "</div>
    </div>
    ";
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
            unset($context['_seq'], $context['object'], $context['objectFieldMapping'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            yield "    ";
        }
        // line 150
        yield "    <!-- Field Mapping -->
</div>

";
        // line 153
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), 'form_end');
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Integrations/Config/form.html.twig";
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
        return array (  429 => 153,  424 => 150,  421 => 149,  405 => 146,  403 => 143,  402 => 142,  401 => 141,  400 => 140,  397 => 139,  392 => 137,  389 => 136,  383 => 133,  378 => 132,  376 => 131,  370 => 128,  360 => 126,  342 => 125,  340 => 124,  335 => 121,  331 => 119,  325 => 117,  323 => 116,  320 => 115,  317 => 114,  313 => 112,  311 => 111,  308 => 110,  302 => 108,  300 => 107,  297 => 106,  292 => 104,  290 => 103,  287 => 102,  283 => 100,  281 => 99,  278 => 98,  274 => 97,  268 => 93,  263 => 92,  261 => 91,  254 => 90,  252 => 89,  246 => 85,  243 => 84,  237 => 80,  231 => 78,  225 => 76,  223 => 75,  216 => 70,  210 => 67,  206 => 66,  203 => 65,  201 => 64,  196 => 62,  193 => 61,  191 => 60,  187 => 59,  184 => 58,  182 => 57,  177 => 56,  171 => 53,  166 => 52,  164 => 51,  158 => 50,  151 => 45,  148 => 44,  140 => 41,  136 => 39,  134 => 38,  130 => 37,  126 => 36,  117 => 35,  112 => 34,  109 => 33,  107 => 32,  102 => 29,  97 => 26,  93 => 24,  91 => 23,  87 => 22,  83 => 20,  81 => 19,  74 => 14,  70 => 12,  68 => 11,  64 => 10,  57 => 8,  51 => 5,  48 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Integrations/Config/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Resources\\views\\Config\\form.html.twig");
    }
}
