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

/* @MauticLead/Lead/_filter.html.twig */
class __TwigTemplate_3cdd30f0c87633696e1b78d26eb528f6 extends Template
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
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 1, $this->source); })())) {
            // line 2
            yield "    ";
            $context["toolbarButtons"] = [["attr" => ["class" => "hidden-xs btn btn-default btn-sm btn-nospin", "href" => "javascript: void(0)", "onclick" => "Mautic.toggleLiveLeadListUpdate();", "id" => "liveModeButton", "data-toggle" => false, "data-max-id" =>             // line 10
(isset($context["maxLeadId"]) || array_key_exists("maxLeadId", $context) ? $context["maxLeadId"] : (function () { throw new RuntimeError('Variable "maxLeadId" does not exist.', 10, $this->source); })())], "tooltip" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.live_update"), "iconClass" => "ri-refresh-line"]];
            // line 16
            yield "    ";
            if (("list" == (isset($context["indexMode"]) || array_key_exists("indexMode", $context) ? $context["indexMode"] : (function () { throw new RuntimeError('Variable "indexMode" does not exist.', 16, $this->source); })()))) {
                // line 17
                yield "        ";
                $context["toolbarButtons"] = Twig\Extension\CoreExtension::merge((isset($context["toolbarButtons"]) || array_key_exists("toolbarButtons", $context) ? $context["toolbarButtons"] : (function () { throw new RuntimeError('Variable "toolbarButtons" does not exist.', 17, $this->source); })()), [["attr" => ["class" => ("hidden-xs btn btn-default btn-sm btn-nospin" . ((                // line 19
(isset($context["anonymousShowing"]) || array_key_exists("anonymousShowing", $context) ? $context["anonymousShowing"] : (function () { throw new RuntimeError('Variable "anonymousShowing" does not exist.', 19, $this->source); })())) ? (" btn-primary") : (""))), "href" => "javascript: void(0)", "onclick" => "Mautic.toggleAnonymousLeads();", "id" => "anonymousLeadButton", "data-anonymous" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.isanonymous")], "tooltip" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.anonymous_leads"), "iconClass" => "ri-spy-line"]]);
                // line 28
                yield "    ";
            }
            // line 29
            yield "    <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
        ";
            // line 30
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" => ((            // line 31
array_key_exists("searchValue", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 31, $this->source); })()), "")) : ("")), "searchHelp" => "mautic.lead.lead.help.searchcommands", "action" =>             // line 33
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 33, $this->source); })()), "customButtons" =>             // line 34
(isset($context["toolbarButtons"]) || array_key_exists("toolbarButtons", $context) ? $context["toolbarButtons"] : (function () { throw new RuntimeError('Variable "toolbarButtons" does not exist.', 34, $this->source); })())]);
            // line 35
            yield "
        <div class=\"page-list\">
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Lead/_filter.html.twig";
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
        return array (  66 => 35,  64 => 34,  63 => 33,  62 => 31,  61 => 30,  58 => 29,  55 => 28,  53 => 19,  51 => 17,  48 => 16,  46 => 10,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/_filter.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\_filter.html.twig");
    }
}
