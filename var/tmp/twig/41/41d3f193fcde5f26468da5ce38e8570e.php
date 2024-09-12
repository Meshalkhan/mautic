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

/* @MauticPlugin/Integration/form.html.twig */
class __TwigTemplate_abd316cef0c30c03d1538c40ad525783 extends Template
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
        // line 12
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), (isset($context["formThemes"]) || array_key_exists("formThemes", $context) ? $context["formThemes"] : (function () { throw new RuntimeError('Variable "formThemes" does not exist.', 12, $this->source); })()), true);
        // line 13
        echo "<!-- form themes: ";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["formThemes"]) || array_key_exists("formThemes", $context) ? $context["formThemes"] : (function () { throw new RuntimeError('Variable "formThemes" does not exist.', 13, $this->source); })()), ", "), "html", null, true);
        echo " -->";
        // line 14
        $context["nSupportedFeatures"] = ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "supportedFeatures", [], "any", true, true, false, 14)) ? (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "supportedFeatures", [], "any", false, false, false, 14))) : (0));
        // line 15
        $context["hasSupportedFeatures"] = ((isset($context["nSupportedFeatures"]) || array_key_exists("nSupportedFeatures", $context) ? $context["nSupportedFeatures"] : (function () { throw new RuntimeError('Variable "nSupportedFeatures" does not exist.', 15, $this->source); })()) > 0);
        // line 16
        $context["nFeatureSettings"] = ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "featureSettings", [], "any", true, true, false, 16)) ? (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "featureSettings", [], "any", false, false, false, 16))) : (0));
        // line 17
        $context["hasFields"] = (((twig_get_attribute($this->env, $this->source, ($context["formSettings"] ?? null), "dynamic_contact_fields", [], "any", true, true, false, 17) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["formSettings"]) || array_key_exists("formSettings", $context) ? $context["formSettings"] : (function () { throw new RuntimeError('Variable "formSettings" does not exist.', 17, $this->source); })()), "dynamic_contact_fields", [], "any", false, false, false, 17))) || twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "featureSettings", [], "any", true, true, false, 17)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "featureSettings", [], "any", false, false, false, 17), "leadFields", [], "any", false, false, false, 17)) > 0));
        // line 20
        if ( !(isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 20, $this->source); })())) {
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "featureSettings", [], "any", false, false, false, 20), "leadFields", [], "any", false, false, false, 20), "setRendered", [], "method", false, false, false, 20);
            $context["nFeatureSettings"] = ((isset($context["nFeatureSettings"]) || array_key_exists("nFeatureSettings", $context) ? $context["nFeatureSettings"] : (function () { throw new RuntimeError('Variable "nFeatureSettings" does not exist.', 20, $this->source); })()) - 1);
        }
        // line 21
        $context["hideContactFieldTab"] = ((((isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 21, $this->source); })()) && twig_get_attribute($this->env, $this->source, ($context["formSettings"] ?? null), "dynamic_contact_fields", [], "any", true, true, false, 21)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["formSettings"]) || array_key_exists("formSettings", $context) ? $context["formSettings"] : (function () { throw new RuntimeError('Variable "formSettings" does not exist.', 21, $this->source); })()), "dynamic_contact_fields", [], "any", false, false, false, 21))) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "featureSettings", [], "any", false, false, false, 21), "leadFields", [], "any", false, false, false, 21)) == 0));
        // line 22
        $context["hasFeatureSettings"] = (twig_get_attribute($this->env, $this->source,         // line 23
($context["form"] ?? null), "featureSettings", [], "any", true, true, false, 23) && ((        // line 25
(isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 25, $this->source); })()) && ((isset($context["nFeatureSettings"]) || array_key_exists("nFeatureSettings", $context) ? $context["nFeatureSettings"] : (function () { throw new RuntimeError('Variable "nFeatureSettings" does not exist.', 25, $this->source); })()) > 1)) || ( !        // line 27
(isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 27, $this->source); })()) && ((isset($context["nFeatureSettings"]) || array_key_exists("nFeatureSettings", $context) ? $context["nFeatureSettings"] : (function () { throw new RuntimeError('Variable "nFeatureSettings" does not exist.', 27, $this->source); })()) > 0))));
        // line 30
        if (( !(isset($context["hasFeatureSettings"]) || array_key_exists("hasFeatureSettings", $context) ? $context["hasFeatureSettings"] : (function () { throw new RuntimeError('Variable "hasFeatureSettings" does not exist.', 30, $this->source); })()) && twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "featureSettings", [], "any", true, true, false, 30))) {
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "featureSettings", [], "any", false, false, false, 30), "setRendered", [], "method", false, false, false, 30);
        }
        // line 31
        $context["hasCompanyFields"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "featureSettings", [], "any", false, true, false, 31), "companyFields", [], "any", true, true, false, 31) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "featureSettings", [], "any", false, false, false, 31), "companyFields", [], "any", false, false, false, 31)) > 0));
        // line 32
        $context["companyFieldHtml"] = (((isset($context["hasCompanyFields"]) || array_key_exists("hasCompanyFields", $context) ? $context["hasCompanyFields"] : (function () { throw new RuntimeError('Variable "hasCompanyFields" does not exist.', 32, $this->source); })())) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "featureSettings", [], "any", false, false, false, 32), "companyFields", [], "any", false, false, false, 32), 'row')) : (""));
        // line 33
        $context["fieldHtml"] = (((isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 33, $this->source); })())) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "featureSettings", [], "any", false, false, false, 33), "leadFields", [], "any", false, false, false, 33), 'row')) : (""));
        // line 34
        $context["fieldLabel"] = (((isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 34, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "featureSettings", [], "any", false, false, false, 34), "leadFields", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "label", [], "any", false, false, false, 34)) : (""));
        // line 35
        $context["fieldTabClass"] = ((((isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 35, $this->source); })()) && ((isset($context["hideContactFieldTab"]) || array_key_exists("hideContactFieldTab", $context) ? $context["hideContactFieldTab"] : (function () { throw new RuntimeError('Variable "hideContactFieldTab" does not exist.', 35, $this->source); })()) == false))) ?: ("hide"));
        // line 36
        $context["hasLeadFieldErrors"] = ((isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 36, $this->source); })()) && $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "featureSettings", [], "any", false, false, false, 36), "leadFields", [], "any", false, false, false, 36)));
        // line 37
        $context["hasCompanyFieldErrors"] = ((isset($context["hasCompanyFields"]) || array_key_exists("hasCompanyFields", $context) ? $context["hasCompanyFields"] : (function () { throw new RuntimeError('Variable "hasCompanyFields" does not exist.', 37, $this->source); })()) && $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "featureSettings", [], "any", false, false, false, 37), "companyFields", [], "any", false, false, false, 37)));
        // line 38
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "featureSettings", [], "any", false, true, false, 38), "leadFields", [], "any", true, true, false, 38)) {
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "featureSettings", [], "any", false, false, false, 38), "leadFields", [], "any", false, false, false, 38), "setRendered", [], "method", false, false, false, 38);
        }
        // line 39
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "featureSettings", [], "any", false, true, false, 39), "companyFields", [], "any", true, true, false, 39)) {
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "featureSettings", [], "any", false, false, false, 39), "companyFields", [], "any", false, false, false, 39), "setRendered", [], "method", false, false, false, 39);
        }
        // line 41
        if ( !twig_test_empty((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 41, $this->source); })()))) {
            // line 42
            echo "<div class=\"alert alert-info\">";
            // line 43
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 43, $this->source); })()));
            // line 44
            echo "</div>";
        }
        // line 47
        echo "<!-- tabs controls -->
<ul class=\"nav nav-tabs\">
    <li class=\"";
        // line 49
        if (("details-container" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 49, $this->source); })()))) {
            echo "active";
        }
        echo "\" id=\"details-tab\">
        <a href=\"#details-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.integration.tab.details"), "html", null, true);
        echo "</a>
    </li>";
        // line 53
        if (((isset($context["hasSupportedFeatures"]) || array_key_exists("hasSupportedFeatures", $context) ? $context["hasSupportedFeatures"] : (function () { throw new RuntimeError('Variable "hasSupportedFeatures" does not exist.', 53, $this->source); })()) || (isset($context["hasFeatureSettings"]) || array_key_exists("hasFeatureSettings", $context) ? $context["hasFeatureSettings"] : (function () { throw new RuntimeError('Variable "hasFeatureSettings" does not exist.', 53, $this->source); })()))) {
            // line 54
            echo "<li class=\"\" id=\"features-tab\">
            <a href=\"#features-container\" role=\"tab\" data-toggle=\"tab\">";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.integration.tab.features"), "html", null, true);
            // line 57
            if ((((isset($context["hasSupportedFeatures"]) || array_key_exists("hasSupportedFeatures", $context) ? $context["hasSupportedFeatures"] : (function () { throw new RuntimeError('Variable "hasSupportedFeatures" does not exist.', 57, $this->source); })()) && $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "supportedFeatures", [], "any", false, false, false, 57))) || ((isset($context["hasFeatureSettings"]) || array_key_exists("hasFeatureSettings", $context) ? $context["hasFeatureSettings"] : (function () { throw new RuntimeError('Variable "hasFeatureSettings" does not exist.', 57, $this->source); })()) && $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "featureSettings", [], "any", false, false, false, 57), ["leadFields"])))) {
                // line 58
                echo "<i class=\"fa fa-fw fa-warning text-danger\"></i>";
            }
            // line 60
            echo "</a>
        </li>";
        }
        // line 64
        if ((isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 64, $this->source); })())) {
            // line 65
            echo "<li class=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldTabClass"]) || array_key_exists("fieldTabClass", $context) ? $context["fieldTabClass"] : (function () { throw new RuntimeError('Variable "fieldTabClass" does not exist.', 65, $this->source); })()), "html", null, true);
            echo " ";
            if (("leadFieldsContainer" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 65, $this->source); })()))) {
                echo "active";
            }
            echo "\" id=\"fields-tab\">
            <a href=\"#fields-container\" role=\"tab\" data-toggle=\"tab\">";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.integration.tab.fieldmapping"), "html", null, true);
            // line 68
            if ((isset($context["hasLeadFieldErrors"]) || array_key_exists("hasLeadFieldErrors", $context) ? $context["hasLeadFieldErrors"] : (function () { throw new RuntimeError('Variable "hasLeadFieldErrors" does not exist.', 68, $this->source); })())) {
                // line 69
                echo "<i class=\"fa fa-fw fa-warning text-danger\"></i>";
            }
            // line 71
            echo "</a>
        </li>";
        }
        // line 75
        if ( !twig_test_empty((isset($context["companyFieldHtml"]) || array_key_exists("companyFieldHtml", $context) ? $context["companyFieldHtml"] : (function () { throw new RuntimeError('Variable "companyFieldHtml" does not exist.', 75, $this->source); })()))) {
            // line 76
            echo "<li class=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldTabClass"]) || array_key_exists("fieldTabClass", $context) ? $context["fieldTabClass"] : (function () { throw new RuntimeError('Variable "fieldTabClass" does not exist.', 76, $this->source); })()), "html", null, true);
            echo " ";
            if (("companyFieldsContainer" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 76, $this->source); })()))) {
                echo "active";
            }
            echo "\" id=\"company-fields-tab\">
            <a href=\"#company-fields-container\" role=\"tab\" data-toggle=\"tab\">";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.integration.tab.companyfieldmapping"), "html", null, true);
            // line 79
            if ((isset($context["hasCompanyFieldErrors"]) || array_key_exists("hasCompanyFieldErrors", $context) ? $context["hasCompanyFieldErrors"] : (function () { throw new RuntimeError('Variable "hasCompanyFieldErrors" does not exist.', 79, $this->source); })())) {
                // line 80
                echo "<i class=\"fa fa-fw fa-warning text-danger\"></i>
                ";
            }
            // line 82
            echo "            </a>
        </li>";
        }
        // line 85
        echo "</ul>
<!--/ tabs controls -->";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_start');
        // line 89
        echo "<div class=\"tab-content pa-md\">
    <div class=\"tab-pane fade ";
        // line 90
        if (("details-container" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 90, $this->source); })()))) {
            echo "in active";
        }
        echo " bdr-w-0\" id=\"details-container\">";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "isPublished", [], "any", false, false, false, 91), 'row');
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "virtual", [], "any", true, true, false, 92)) {
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "virtual", [], "any", false, false, false, 92), 'row');
        }
        // line 93
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "apiKeys", [], "any", true, true, false, 93)) {
            // line 94
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "apiKeys", [], "any", false, false, false, 94), 'row');
            // line 95
            if (twig_get_attribute($this->env, $this->source, ($context["formNotes"] ?? null), "authorization", [], "any", true, true, false, 95)) {
                // line 96
                echo "<div class=\"alert alert-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 96, $this->source); })()), "authorization", [], "any", false, false, false, 96), "type", [], "any", false, false, false, 96), "html", null, true);
                echo "\">";
                // line 97
                echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 97, $this->source); })()), "authorization", [], "any", false, false, false, 97), "note", [], "any", false, false, false, 97));
                // line 98
                echo "</div>";
            }
            // line 101
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "apiKeys", [], "any", false, false, false, 101)) > 0) &&  !twig_test_empty((isset($context["callbackUrl"]) || array_key_exists("callbackUrl", $context) ? $context["callbackUrl"] : (function () { throw new RuntimeError('Variable "callbackUrl" does not exist.', 101, $this->source); })())))) {
                // line 102
                echo "<div class=\"well well-sm\">";
                // line 103
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.callbackuri"), "html", null, true);
                echo "<br/>
                    <input type=\"text\" readonly onclick=\"this.setSelectionRange(0, this.value.length);\" value=\"";
                // line 104
                echo twig_escape_filter($this->env, (isset($context["callbackUrl"]) || array_key_exists("callbackUrl", $context) ? $context["callbackUrl"] : (function () { throw new RuntimeError('Variable "callbackUrl" does not exist.', 104, $this->source); })()));
                echo "\" class=\"form-control\"/>
                </div>";
            }
            // line 108
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "authButton", [], "any", true, true, false, 108)) {
                // line 109
                echo "<div class=\"row\">
                    <div class=\"col-xs-12 text-center\">";
                // line 111
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "authButton", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => "btn btn-success btn-lg"]]);
                // line 112
                echo "</div>
                </div>";
            }
        }
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["formNotes"] ?? null), "custom", [], "any", true, true, false, 117)) {
            // line 118
            if ($this->env->getTest('string')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 118, $this->source); })()), "custom", [], "any", false, false, false, 118))) {
                // line 119
                echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 119, $this->source); })()), "custom", [], "any", false, false, false, 119));
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 120
($context["formNotes"] ?? null), "custom", [], "any", false, true, false, 120), "custom", [], "any", true, true, false, 120) && $this->env->getTest('string')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 120, $this->source); })()), "custom", [], "any", false, false, false, 120), "template", [], "any", false, false, false, 120)))) {
                // line 121
                echo "<!-- start: \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 121, $this->source); })()), "custom", [], "any", false, false, false, 121), "template", [], "any", false, false, false, 121), "html", null, true);
                echo "\" -->
                ";
                // line 122
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 122, $this->source); })()), "custom", [], "any", false, false, false, 122), "template", [], "any", false, false, false, 122), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formNotes"] ?? null), "custom", [], "any", false, true, false, 122), "parameters", [], "any", true, true, false, 122)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formNotes"] ?? null), "custom", [], "any", false, true, false, 122), "parameters", [], "any", false, false, false, 122), [])) : ([])), true, true);
                echo "
                <!-- end: \"";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 123, $this->source); })()), "custom", [], "any", false, false, false, 123), "template", [], "any", false, false, false, 123), "html", null, true);
                echo "\" -->";
            }
        }
        // line 126
        echo "</div>";
        // line 128
        if (((isset($context["hasSupportedFeatures"]) || array_key_exists("hasSupportedFeatures", $context) ? $context["hasSupportedFeatures"] : (function () { throw new RuntimeError('Variable "hasSupportedFeatures" does not exist.', 128, $this->source); })()) || (isset($context["hasFeatureSettings"]) || array_key_exists("hasFeatureSettings", $context) ? $context["hasFeatureSettings"] : (function () { throw new RuntimeError('Variable "hasFeatureSettings" does not exist.', 128, $this->source); })()))) {
            // line 129
            echo "<div class=\"tab-pane fade bdr-w-0\" id=\"features-container\">";
            // line 130
            if ((isset($context["hasSupportedFeatures"]) || array_key_exists("hasSupportedFeatures", $context) ? $context["hasSupportedFeatures"] : (function () { throw new RuntimeError('Variable "hasSupportedFeatures" does not exist.', 130, $this->source); })())) {
                // line 131
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "supportedFeatures", [], "any", false, false, false, 131), 'row', ["formSettings" =>                 // line 132
(isset($context["formSettings"]) || array_key_exists("formSettings", $context) ? $context["formSettings"] : (function () { throw new RuntimeError('Variable "formSettings" does not exist.', 132, $this->source); })()), "formNotes" =>                 // line 133
(isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 133, $this->source); })())]);
            }
            // line 137
            if ((isset($context["hasFeatureSettings"]) || array_key_exists("hasFeatureSettings", $context) ? $context["hasFeatureSettings"] : (function () { throw new RuntimeError('Variable "hasFeatureSettings" does not exist.', 137, $this->source); })())) {
                // line 138
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "featureSettings", [], "any", false, false, false, 138), 'row', ["formSettings" =>                 // line 139
(isset($context["formSettings"]) || array_key_exists("formSettings", $context) ? $context["formSettings"] : (function () { throw new RuntimeError('Variable "formSettings" does not exist.', 139, $this->source); })()), "formNotes" =>                 // line 140
(isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 140, $this->source); })())]);
            }
            // line 143
            echo "</div>";
        }
        // line 146
        if ((isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 146, $this->source); })())) {
            // line 147
            echo "<div class=\"tab-pane fade ";
            if (("leadFieldsContainer" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 147, $this->source); })()))) {
                echo "in active";
            }
            echo "  bdr-w-0\" id=\"fields-container\">
            <h4 class=\"mb-sm\">";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["fieldLabel"]) || array_key_exists("fieldLabel", $context) ? $context["fieldLabel"] : (function () { throw new RuntimeError('Variable "fieldLabel" does not exist.', 148, $this->source); })())), "html", null, true);
            echo "</h4>";
            // line 149
            echo (isset($context["fieldHtml"]) || array_key_exists("fieldHtml", $context) ? $context["fieldHtml"] : (function () { throw new RuntimeError('Variable "fieldHtml" does not exist.', 149, $this->source); })());
            // line 150
            echo "</div>";
        }
        // line 153
        if ((isset($context["hasCompanyFields"]) || array_key_exists("hasCompanyFields", $context) ? $context["hasCompanyFields"] : (function () { throw new RuntimeError('Variable "hasCompanyFields" does not exist.', 153, $this->source); })())) {
            // line 154
            echo "<div class=\"tab-pane fade ";
            if (("companyFieldsContainer" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 154, $this->source); })()))) {
                echo "in active";
            }
            echo " bdr-w-0\" id=\"company-fields-container\">
            <h4 class=\"mb-sm\">";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.companyfield_matches"), "html", null, true);
            echo "</h4>";
            // line 156
            echo (isset($context["companyFieldHtml"]) || array_key_exists("companyFieldHtml", $context) ? $context["companyFieldHtml"] : (function () { throw new RuntimeError('Variable "companyFieldHtml" does not exist.', 156, $this->source); })());
            // line 157
            echo "</div>";
        }
        // line 159
        echo "</div>
";
        // line 160
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), 'form_end');
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPlugin/Integration/form.html.twig";
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
        return array (  314 => 160,  311 => 159,  308 => 157,  306 => 156,  303 => 155,  296 => 154,  294 => 153,  291 => 150,  289 => 149,  286 => 148,  279 => 147,  277 => 146,  274 => 143,  271 => 140,  270 => 139,  269 => 138,  267 => 137,  264 => 133,  263 => 132,  262 => 131,  260 => 130,  258 => 129,  256 => 128,  254 => 126,  249 => 123,  245 => 122,  240 => 121,  238 => 120,  236 => 119,  234 => 118,  232 => 117,  227 => 112,  225 => 111,  222 => 109,  220 => 108,  215 => 104,  211 => 103,  209 => 102,  207 => 101,  204 => 98,  202 => 97,  198 => 96,  196 => 95,  194 => 94,  192 => 93,  188 => 92,  186 => 91,  181 => 90,  178 => 89,  176 => 88,  173 => 85,  169 => 82,  165 => 80,  163 => 79,  161 => 78,  152 => 76,  150 => 75,  146 => 71,  143 => 69,  141 => 68,  139 => 67,  130 => 65,  128 => 64,  124 => 60,  121 => 58,  119 => 57,  117 => 56,  114 => 54,  112 => 53,  108 => 50,  102 => 49,  98 => 47,  95 => 44,  93 => 43,  91 => 42,  89 => 41,  85 => 39,  81 => 38,  79 => 37,  77 => 36,  75 => 35,  73 => 34,  71 => 33,  69 => 32,  67 => 31,  63 => 30,  61 => 27,  60 => 25,  59 => 23,  58 => 22,  56 => 21,  51 => 20,  49 => 17,  47 => 16,  45 => 15,  43 => 14,  39 => 13,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPlugin/Integration/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Resources\\views\\Integration\\form.html.twig");
    }
}
