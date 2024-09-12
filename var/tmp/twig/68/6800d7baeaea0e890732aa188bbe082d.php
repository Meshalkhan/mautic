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

/* @MauticLead/Lead/_filter.html.twig */
class __TwigTemplate_0bd91fbc7585b6a7188d86049be6d4a5 extends Template
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
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    ";
            $context["toolbarButtons"] = [["attr" => ["class" => "hidden-xs btn btn-default btn-sm btn-nospin", "href" => "javascript: void(0)", "onclick" => "Mautic.toggleLiveLeadListUpdate();", "id" => "liveModeButton", "data-toggle" => false, "data-max-id" =>             // line 10
(isset($context["maxLeadId"]) || array_key_exists("maxLeadId", $context) ? $context["maxLeadId"] : (function () { throw new RuntimeError('Variable "maxLeadId" does not exist.', 10, $this->source); })())], "tooltip" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.live_update"), "iconClass" => "ri-refresh-line"]];
            // line 16
            echo "    ";
            if (("list" == (isset($context["indexMode"]) || array_key_exists("indexMode", $context) ? $context["indexMode"] : (function () { throw new RuntimeError('Variable "indexMode" does not exist.', 16, $this->source); })()))) {
                // line 17
                echo "        ";
                $context["toolbarButtons"] = twig_array_merge((isset($context["toolbarButtons"]) || array_key_exists("toolbarButtons", $context) ? $context["toolbarButtons"] : (function () { throw new RuntimeError('Variable "toolbarButtons" does not exist.', 17, $this->source); })()), [["attr" => ["class" => ("hidden-xs btn btn-default btn-sm btn-nospin" . ((                // line 19
(isset($context["anonymousShowing"]) || array_key_exists("anonymousShowing", $context) ? $context["anonymousShowing"] : (function () { throw new RuntimeError('Variable "anonymousShowing" does not exist.', 19, $this->source); })())) ? (" btn-primary") : (""))), "href" => "javascript: void(0)", "onclick" => "Mautic.toggleAnonymousLeads();", "id" => "anonymousLeadButton", "data-anonymous" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.isanonymous")], "tooltip" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.anonymous_leads"), "iconClass" => "ri-spy-line"]]);
                // line 28
                echo "    ";
            }
            // line 29
            echo "    <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
        ";
            // line 30
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" => ((            // line 31
array_key_exists("searchValue", $context)) ? (_twig_default_filter((isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 31, $this->source); })()), "")) : ("")), "searchHelp" => "mautic.lead.lead.help.searchcommands", "action" =>             // line 33
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 33, $this->source); })()), "customButtons" =>             // line 34
(isset($context["toolbarButtons"]) || array_key_exists("toolbarButtons", $context) ? $context["toolbarButtons"] : (function () { throw new RuntimeError('Variable "toolbarButtons" does not exist.', 34, $this->source); })())]);
            // line 35
            echo "
        <div class=\"page-list\">
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Lead/_filter.html.twig";
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
        return array (  61 => 35,  59 => 34,  58 => 33,  57 => 31,  56 => 30,  53 => 29,  50 => 28,  48 => 19,  46 => 17,  43 => 16,  41 => 10,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Lead/_filter.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\_filter.html.twig");
    }
}
