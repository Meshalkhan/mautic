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

/* @MauticLead/Lead/_list.html.twig */
class __TwigTemplate_490e2595bd226cd4d5a9c49823ba6afe extends Template
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 1, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 1) || twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 1, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 1))) {
            // line 2
            echo "    ";
            $context["customButtons"] = [["attr" => ["class" => "btn btn-default btn-sm btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_batch_contact_view"), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.lists")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.lists"), "iconClass" => "ri-pie-chart-line"], ["attr" => ["class" => "btn btn-default btn-sm btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "batchStages"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.stages")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.stages"), "iconClass" => "ri-barricade-line flip-vertically"], ["attr" => ["class" => "btn btn-default btn-sm btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_tagmanager_batch_index_action"), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.tagmanager.batch.tags")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.tagmanager.batch.tags"), "iconClass" => "ri-barricade-line flip-vertically"], ["attr" => ["class" => "btn btn-default btn-sm btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "batchCampaigns"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.campaigns")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.campaigns"), "iconClass" => "ri-megaphone-line"], ["attr" => ["class" => "btn btn-default btn-sm btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "batchOwners"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.owner")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.owner"), "iconClass" => "ri-user-2-line"], ["attr" => ["class" => "btn btn-default btn-sm btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "batchDnc"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.dnc")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.batch.dnc"), "iconClass" => "ri-prohibited-line text-danger"]];
        }
        // line 71
        echo "
";
        // line 72
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 72, $this->source); })())) > 0)) {
            // line 73
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-hover\" id=\"leadTable\">
            <thead>
                <tr>
                    ";
            // line 77
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#leadTable", "templateButtons" => ["delete" => (twig_get_attribute($this->env, $this->source,             // line 81
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 81, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 81) || twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 81, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 81))], "customButtons" => ((            // line 83
array_key_exists("customButtons", $context)) ? (_twig_default_filter((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 83, $this->source); })()), [])) : ([])), "langVar" => "lead.lead", "routeBase" => "contact", "tooltip" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.checkall.help")]);
            // line 87
            echo "

                    ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 89, $this->source); })()));
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
            foreach ($context['_seq'] as $context["column"] => $context["label"]) {
                // line 90
                echo "                        ";
                echo twig_include($this->env, $context, [(("@MauticLead/Lead/_list_header_" . $context["column"]) . ".html.twig"), "@MauticLead/Lead/_list_header_default.html.twig"], ["label" =>                 // line 91
$context["label"], "column" =>                 // line 92
$context["column"], "class" => ((twig_in_filter(                // line 93
$context["column"], twig_get_array_keys_filter((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 93, $this->source); })())))) ? ("hidden-xs") : (""))]);
                // line 94
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['column'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                </tr>
            </thead>
            <tbody>
                ";
            // line 99
            echo twig_include($this->env, $context, "@MauticLead/Lead/_list_rows.html.twig", ["items" =>             // line 100
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 100, $this->source); })()), "columns" =>             // line 101
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 101, $this->source); })()), "security" =>             // line 102
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 102, $this->source); })()), "currentList" =>             // line 103
(isset($context["currentList"]) || array_key_exists("currentList", $context) ? $context["currentList"] : (function () { throw new RuntimeError('Variable "currentList" does not exist.', 103, $this->source); })()), "permissions" =>             // line 104
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 104, $this->source); })()), "noContactList" =>             // line 105
(isset($context["noContactList"]) || array_key_exists("noContactList", $context) ? $context["noContactList"] : (function () { throw new RuntimeError('Variable "noContactList" does not exist.', 105, $this->source); })())]);
            // line 106
            echo "
            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">
        ";
            // line 111
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 112
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 112, $this->source); })()), "page" =>             // line 113
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 113, $this->source); })()), "limit" =>             // line 114
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 114, $this->source); })()), "menuLinkId" => "mautic_contact_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index"), "tmpl" =>             // line 117
(isset($context["indexMode"]) || array_key_exists("indexMode", $context) ? $context["indexMode"] : (function () { throw new RuntimeError('Variable "indexMode" does not exist.', 117, $this->source); })()), "sessionVar" => "lead"]);
            // line 119
            echo "
    </div>
";
        } else {
            // line 122
            echo "    ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Lead/_list.html.twig";
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
        return array (  131 => 122,  126 => 119,  124 => 117,  123 => 114,  122 => 113,  121 => 112,  120 => 111,  113 => 106,  111 => 105,  110 => 104,  109 => 103,  108 => 102,  107 => 101,  106 => 100,  105 => 99,  100 => 96,  85 => 94,  83 => 93,  82 => 92,  81 => 91,  79 => 90,  62 => 89,  58 => 87,  56 => 83,  55 => 81,  54 => 77,  48 => 73,  46 => 72,  43 => 71,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Lead/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\_list.html.twig");
    }
}
