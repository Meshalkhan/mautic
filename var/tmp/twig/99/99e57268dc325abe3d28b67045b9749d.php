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

/* @Integrations/Config/form.html.twig */
class __TwigTemplate_4f0b8e6c20ac8309582ab693720f3f40 extends Template
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
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("app/bundles/IntegrationsBundle/Assets/js/integrations.js", "integrationsConfigOnLoad", "integrationsConfigOnLoad");
        echo "
";
        // line 3
        $context["activeTab"] = ((array_key_exists("activeTab", $context)) ? (_twig_default_filter((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 3, $this->source); })()), "details-container")) : ("details-container"));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
<ul class=\"nav nav-tabs\">
    <!-- Enabled\\Auth -->
    <li class=\"";
        // line 8
        if (("details-container" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 8, $this->source); })()))) {
            echo " active";
        }
        echo "\" id=\"details-tab\">
        <a href=\"#details-container\" role=\"tab\" data-toggle=\"tab\">
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.integration.tab.details"), "html", null, true);
        echo "
            ";
        // line 11
        if ((isset($context["hasAuthErrors"]) || array_key_exists("hasAuthErrors", $context) ? $context["hasAuthErrors"] : (function () { throw new RuntimeError('Variable "hasAuthErrors" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "                <i class=\"fa fa-fw fa-warning text-danger\"></i>
            ";
        }
        // line 14
        echo "        </a>
    </li>
    <!-- Enabled\\Auth -->

    <!-- Features -->
    ";
        // line 19
        if ( !twig_test_empty((isset($context["showFeaturesTab"]) || array_key_exists("showFeaturesTab", $context) ? $context["showFeaturesTab"] : (function () { throw new RuntimeError('Variable "showFeaturesTab" does not exist.', 19, $this->source); })()))) {
            // line 20
            echo "        <li class=\"\" id=\"features-tab\">
            <a href=\"#features-container\" role=\"tab\" data-toggle=\"tab\">
                ";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.integration.tab.features"), "html", null, true);
            echo "
                ";
            // line 23
            if ( !twig_test_empty((isset($context["hasFeatureErrors"]) || array_key_exists("hasFeatureErrors", $context) ? $context["hasFeatureErrors"] : (function () { throw new RuntimeError('Variable "hasFeatureErrors" does not exist.', 23, $this->source); })()))) {
                // line 24
                echo "                <i class=\"fa fa-fw fa-warning text-danger\"></i>
                ";
            }
            // line 26
            echo "            </a>
        </li>
    ";
        }
        // line 29
        echo "    <!-- Features -->

    <!-- Field Mapping -->
    ";
        // line 32
        if ( !twig_test_empty((isset($context["useSyncFeatures"]) || array_key_exists("useSyncFeatures", $context) ? $context["useSyncFeatures"] : (function () { throw new RuntimeError('Variable "useSyncFeatures" does not exist.', 32, $this->source); })()))) {
            // line 33
            echo "    ";
            $context["objects"] = twig_get_attribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 33, $this->source); })()), "getSyncConfigObjects", [], "method", false, false, false, 33);
            // line 34
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "featureSettings", [], "any", false, false, false, 34), "sync", [], "any", false, false, false, 34), "fieldMappings", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["object"] => $context["objectFieldMapping"]) {
                // line 35
                echo "        <li class=\"";
                if (((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 35, $this->source); })()) == ("field-mapping-" . $context["object"]))) {
                    echo " active";
                }
                echo "\" id=\"fields-";
                echo twig_escape_filter($this->env, $context["object"], "html", null, true);
                echo "-tab\">
            <a href=\"#field-mappings-";
                // line 36
                echo twig_escape_filter($this->env, $context["object"], "html", null, true);
                echo "-container\" role=\"tab\" data-toggle=\"tab\">
                ";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.sync_field_mapping", ["%object%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 37, $this->source); })()), $context["object"], [], "array", false, false, false, 37))]), "html", null, true);
                echo "
                ";
                // line 38
                if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors($context["objectFieldMapping"])) {
                    // line 39
                    echo "                    <i class=\"fa fa-fw fa-warning text-danger\"></i>
                ";
                }
                // line 41
                echo "            </a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['object'], $context['objectFieldMapping'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "    ";
        }
        // line 45
        echo "    <!-- Field Mapping -->
</ul>

<div class=\"tab-content pa-md\">
    <!-- Enabled\\Auth -->
    <div class=\"tab-pane fade";
        // line 50
        if (("details-container" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 50, $this->source); })()))) {
            echo " in active";
        }
        echo " bdr-w-0\" id=\"details-container\">
        ";
        // line 51
        if (((isset($context["useConfigFormNotes"]) || array_key_exists("useConfigFormNotes", $context) ? $context["useConfigFormNotes"] : (function () { throw new RuntimeError('Variable "useConfigFormNotes" does not exist.', 51, $this->source); })()) && $this->env->getTest('instanceof')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 51, $this->source); })()), "getAuthorizationNote", [], "method", false, false, false, 51), "\\Mautic\\IntegrationsBundle\\DTO\\Note"))) {
            // line 52
            echo "            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 52, $this->source); })()), "getAuthorizationNote", [], "method", false, false, false, 52), "getType", [], "method", false, false, false, 52), "html", null, true);
            echo "\">
                ";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 53, $this->source); })()), "getAuthorizationNote", [], "method", false, false, false, 53), "getNote", [], "method", false, false, false, 53)), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 56
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "isPublished", [], "any", false, false, false, 56), 'row');
        echo "
        ";
        // line 57
        if ($this->env->getTest('instanceof')->getCallable()((isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 57, $this->source); })()), "\\Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormAuthInterface")) {
            // line 58
            echo "        <hr />
        ";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "apiKeys", [], "any", false, false, false, 59), 'row');
            echo "
            ";
            // line 60
            if ((isset($context["useAuthorizationUrl"]) || array_key_exists("useAuthorizationUrl", $context) ? $context["useAuthorizationUrl"] : (function () { throw new RuntimeError('Variable "useAuthorizationUrl" does not exist.', 60, $this->source); })())) {
                // line 61
                echo "            <div class=\"alert alert-warning\">
                ";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 62, $this->source); })()), "getCallbackHelpMessageTranslationKey", [], "method", false, false, false, 62)), "html", null, true);
                echo "
            </div>
            ";
                // line 64
                if ( !twig_test_empty((isset($context["callbackUrl"]) || array_key_exists("callbackUrl", $context) ? $context["callbackUrl"] : (function () { throw new RuntimeError('Variable "callbackUrl" does not exist.', 64, $this->source); })()))) {
                    // line 65
                    echo "            <div class=\"well well-sm\">
                ";
                    // line 66
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.callbackuri"), "html", null, true);
                    echo "<br/>
                <input type=\"text\" name=\"callback_url\" readonly onclick=\"this.setSelectionRange(0, this.value.length);\" value=\"";
                    // line 67
                    echo twig_escape_filter($this->env, (isset($context["callbackUrl"]) || array_key_exists("callbackUrl", $context) ? $context["callbackUrl"] : (function () { throw new RuntimeError('Variable "callbackUrl" does not exist.', 67, $this->source); })()), "html", null, true);
                    echo "\" class=\"form-control\"/>
            </div>
            ";
                }
                // line 70
                echo "            <div class=\"row\">
                <div class=\"col-xs-12 text-center\">
                    <input type=\"hidden\" id=\"integration_details_in_auth\" name=\"integration_details[in_auth]\" autocomplete=\"false\">
                    <button type=\"button\" id=\"integration_details_authButton\" name=\"integration_details[authButton]\" class=\"btn btn-success btn-lg\" onclick=\"Mautic.authorizeIntegration()\">
                        <i class=\"fa fa-key \"></i>
                        ";
                // line 75
                if (twig_get_attribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 75, $this->source); })()), "isAuthorized", [], "method", false, false, false, 75)) {
                    // line 76
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.form.reauthorize"), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 78
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.form.authorize"), "html", null, true);
                    echo "
                        ";
                }
                // line 80
                echo "                    </button>
                </div>
            </div>
            ";
            }
            // line 84
            echo "        ";
        }
        // line 85
        echo "    </div>
    <!-- Enabled\\Auth -->

    <!-- Features -->
    ";
        // line 89
        if ((isset($context["showFeaturesTab"]) || array_key_exists("showFeaturesTab", $context) ? $context["showFeaturesTab"] : (function () { throw new RuntimeError('Variable "showFeaturesTab" does not exist.', 89, $this->source); })())) {
            // line 90
            echo "    <div class=\"tab-pane fade";
            if (("features-container" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 90, $this->source); })()))) {
                echo " in active";
            }
            echo " bdr-w-0\" id=\"features-container\">
        ";
            // line 91
            if (((isset($context["useConfigFormNotes"]) || array_key_exists("useConfigFormNotes", $context) ? $context["useConfigFormNotes"] : (function () { throw new RuntimeError('Variable "useConfigFormNotes" does not exist.', 91, $this->source); })()) && $this->env->getTest('instanceof')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 91, $this->source); })()), "getFeaturesNote", [], "method", false, false, false, 91), "\\Mautic\\IntegrationsBundle\\DTO\\Note"))) {
                // line 92
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 92, $this->source); })()), "getFeaturesNote", [], "method", false, false, false, 92), "getType", [], "method", false, false, false, 92), "html", null, true);
                echo "\">
                ";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 93, $this->source); })()), "getFeaturesNote", [], "method", false, false, false, 93), "getNote", [], "method", false, false, false, 93)), "html", null, true);
                echo "
            </div>
        ";
            }
            // line 97
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "supportedFeatures", [], "any", true, true, false, 97)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "supportedFeatures", [], "any", false, false, false, 97), 'row');
            }
            // line 98
            echo "
        ";
            // line 99
            if (((isset($context["useFeatureSettings"]) || array_key_exists("useFeatureSettings", $context) ? $context["useFeatureSettings"] : (function () { throw new RuntimeError('Variable "useFeatureSettings" does not exist.', 99, $this->source); })()) || (isset($context["useSyncFeatures"]) || array_key_exists("useSyncFeatures", $context) ? $context["useSyncFeatures"] : (function () { throw new RuntimeError('Variable "useSyncFeatures" does not exist.', 99, $this->source); })()))) {
                // line 100
                echo "            <hr />
        ";
            }
            // line 102
            echo "
        ";
            // line 103
            if ((isset($context["useSyncFeatures"]) || array_key_exists("useSyncFeatures", $context) ? $context["useSyncFeatures"] : (function () { throw new RuntimeError('Variable "useSyncFeatures" does not exist.', 103, $this->source); })())) {
                // line 104
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "featureSettings", [], "any", false, false, false, 104), "sync", [], "any", false, false, false, 104), "objects", [], "any", false, false, false, 104), 'row');
                echo "
            ";
                // line 106
                echo "
            ";
                // line 107
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "featureSettings", [], "any", false, true, false, 107), "sync", [], "any", false, true, false, 107), "integration", [], "any", true, true, false, 107)) {
                    // line 108
                    echo "                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "featureSettings", [], "any", false, false, false, 108), "sync", [], "any", false, false, false, 108), "integration", [], "any", false, false, false, 108), 'row');
                    echo "
            ";
                }
                // line 110
                echo "
            ";
                // line 111
                if ((isset($context["useFeatureSettings"]) || array_key_exists("useFeatureSettings", $context) ? $context["useFeatureSettings"] : (function () { throw new RuntimeError('Variable "useFeatureSettings" does not exist.', 111, $this->source); })())) {
                    // line 112
                    echo "                <hr />
            ";
                }
                // line 114
                echo "        ";
            }
            // line 115
            echo "
        ";
            // line 116
            if ((isset($context["useFeatureSettings"]) || array_key_exists("useFeatureSettings", $context) ? $context["useFeatureSettings"] : (function () { throw new RuntimeError('Variable "useFeatureSettings" does not exist.', 116, $this->source); })())) {
                // line 117
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "featureSettings", [], "any", false, false, false, 117), "integration", [], "any", false, false, false, 117), 'row');
                echo "
        ";
            }
            // line 119
            echo "    </div>
    ";
        }
        // line 121
        echo "    <!-- Features -->

    <!-- Field Mapping -->
    ";
        // line 124
        if ((isset($context["useSyncFeatures"]) || array_key_exists("useSyncFeatures", $context) ? $context["useSyncFeatures"] : (function () { throw new RuntimeError('Variable "useSyncFeatures" does not exist.', 124, $this->source); })())) {
            // line 125
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "featureSettings", [], "any", false, false, false, 125), "sync", [], "any", false, false, false, 125), "fieldMappings", [], "any", false, false, false, 125));
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
                echo "    <div class=\"tab-pane fade";
                if (((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 126, $this->source); })()) == ("field-mapping-" . $context["object"]))) {
                    echo " in active";
                }
                echo " bdr-w-0\" id=\"field-mappings-";
                echo twig_escape_filter($this->env, $context["object"], "html", null, true);
                echo "-container\">
        <div class=\"has-error\">
            ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["objectFieldMapping"], 'errors');
                echo "
        </div>

        ";
                // line 131
                if (((isset($context["useConfigFormNotes"]) || array_key_exists("useConfigFormNotes", $context) ? $context["useConfigFormNotes"] : (function () { throw new RuntimeError('Variable "useConfigFormNotes" does not exist.', 131, $this->source); })()) && $this->env->getTest('instanceof')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 131, $this->source); })()), "getFieldMappingNote", [], "method", false, false, false, 131), "\\Mautic\\IntegrationsBundle\\DTO\\Note"))) {
                    // line 132
                    echo "            <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 132, $this->source); })()), "getFieldMappingNote", [], "method", false, false, false, 132), "getType", [], "method", false, false, false, 132), "html", null, true);
                    echo "\">
                ";
                    // line 133
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 133, $this->source); })()), "getFieldMappingNote", [], "method", false, false, false, 133), "getNote", [], "method", false, false, false, 133)), "html", null, true);
                    echo "
            </div>
        ";
                }
                // line 136
                echo "
        ";
                // line 137
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["objectFieldMapping"], "filter-keyword", [], "array", false, false, false, 137), 'row');
                echo "

        <div id=\"field-mappings-";
                // line 139
                echo twig_escape_filter($this->env, $context["object"], "html", null, true);
                echo "\">";
                // line 140
                echo twig_include($this->env, $context, "@Integrations/Config/field_mapping.html.twig", ["form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 141
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "featureSettings", [], "any", false, false, false, 141), "sync", [], "any", false, false, false, 141), "fieldMappings", [], "any", false, false, false, 141), $context["object"], [], "array", false, false, false, 141), "integration" => twig_get_attribute($this->env, $this->source,                 // line 142
(isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 142, $this->source); })()), "getName", [], "method", false, false, false, 142), "object" =>                 // line 143
$context["object"], "page" => 1]);
                // line 146
                echo "</div>
    </div>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['object'], $context['objectFieldMapping'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "    ";
        }
        // line 150
        echo "    <!-- Field Mapping -->
</div>

";
        // line 153
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), 'form_end');
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Integrations/Config/form.html.twig";
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
        return array (  424 => 153,  419 => 150,  416 => 149,  400 => 146,  398 => 143,  397 => 142,  396 => 141,  395 => 140,  392 => 139,  387 => 137,  384 => 136,  378 => 133,  373 => 132,  371 => 131,  365 => 128,  355 => 126,  337 => 125,  335 => 124,  330 => 121,  326 => 119,  320 => 117,  318 => 116,  315 => 115,  312 => 114,  308 => 112,  306 => 111,  303 => 110,  297 => 108,  295 => 107,  292 => 106,  287 => 104,  285 => 103,  282 => 102,  278 => 100,  276 => 99,  273 => 98,  269 => 97,  263 => 93,  258 => 92,  256 => 91,  249 => 90,  247 => 89,  241 => 85,  238 => 84,  232 => 80,  226 => 78,  220 => 76,  218 => 75,  211 => 70,  205 => 67,  201 => 66,  198 => 65,  196 => 64,  191 => 62,  188 => 61,  186 => 60,  182 => 59,  179 => 58,  177 => 57,  172 => 56,  166 => 53,  161 => 52,  159 => 51,  153 => 50,  146 => 45,  143 => 44,  135 => 41,  131 => 39,  129 => 38,  125 => 37,  121 => 36,  112 => 35,  107 => 34,  104 => 33,  102 => 32,  97 => 29,  92 => 26,  88 => 24,  86 => 23,  82 => 22,  78 => 20,  76 => 19,  69 => 14,  65 => 12,  63 => 11,  59 => 10,  52 => 8,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Integrations/Config/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Resources\\views\\Config\\form.html.twig");
    }
}
