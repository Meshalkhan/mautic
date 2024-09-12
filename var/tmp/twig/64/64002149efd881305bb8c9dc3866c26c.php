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

/* @MauticPage/Trackable/click_counts.html.twig */
class __TwigTemplate_27b3be74ecf16b665c16eb69d6c62c5c extends Template
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
        $context["showConversionRate"] = ((array_key_exists("showConversionRate", $context)) ? ((isset($context["showConversionRate"]) || array_key_exists("showConversionRate", $context) ? $context["showConversionRate"] : (function () { throw new RuntimeError('Variable "showConversionRate" does not exist.', 1, $this->source); })())) : (false));
        // line 2
        if ( !twig_test_empty((isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-hover click-list\"
                ";
            // line 5
            if ((isset($context["showConversionRate"]) || array_key_exists("showConversionRate", $context) ? $context["showConversionRate"] : (function () { throw new RuntimeError('Variable "showConversionRate" does not exist.', 5, $this->source); })())) {
                echo " data-conversion-rate-table data-entity-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
                echo "\"";
            }
            echo ">
            <thead>
            <tr>
                <td>";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_url"), "html", null, true);
            echo "</td>
                <td>";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_count"), "html", null, true);
            echo "</td>
                <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_unique_count"), "html", null, true);
            echo "</td>
                ";
            // line 11
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("click_counts_headers", $context);
            echo "
                ";
            // line 12
            if ((isset($context["showConversionRate"]) || array_key_exists("showConversionRate", $context) ? $context["showConversionRate"] : (function () { throw new RuntimeError('Variable "showConversionRate" does not exist.', 12, $this->source); })())) {
                // line 13
                echo "                    <td>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_conversion_rate"), "html", null, true);
                echo "</td>
                ";
            }
            // line 15
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_track_id"), "html", null, true);
            echo "</td>
            </tr>
            </thead>
            <tbody>
                    ";
            // line 19
            $context["totalClicks"] = 0;
            // line 20
            echo "                    ";
            $context["totalUniqueClicks"] = 0;
            // line 21
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 22
                echo "                        ";
                $context["totalClicks"] = ((isset($context["totalClicks"]) || array_key_exists("totalClicks", $context) ? $context["totalClicks"] : (function () { throw new RuntimeError('Variable "totalClicks" does not exist.', 22, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["link"], "hits", [], "any", false, false, false, 22));
                // line 23
                echo "                        ";
                $context["totalUniqueClicks"] = ((isset($context["totalUniqueClicks"]) || array_key_exists("totalUniqueClicks", $context) ? $context["totalUniqueClicks"] : (function () { throw new RuntimeError('Variable "totalUniqueClicks" does not exist.', 23, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["link"], "unique_hits", [], "any", false, false, false, 23));
                // line 24
                echo "                        <tr>
                            <td class=\"long-text\"><a href=\"";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 25), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 25), "html", null, true);
                echo "</a></td>
                            <td class=\"text-center\">";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "hits", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                            <td class=\"text-center\">
                                <span class=\"mt-xs label label-primary has-click-event clickable-stat\">
                        ";
                // line 29
                if ((array_key_exists("channel", $context) && array_key_exists("entity", $context))) {
                    // line 30
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (((((((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.page_source") . ":") . (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 30, $this->source); })())) . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.page_source_id")) . ":") . twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "getId", [], "method", false, false, false, 30)) . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.page_id")) . ":") . twig_get_attribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 30))]), "html", null, true);
                    echo "\"
                                data-toggle=\"tooltip\"
                                title=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.simple.tooltip"), "html", null, true);
                    echo "\">
                                ";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "unique_hits", [], "any", false, false, false, 33), "html", null, true);
                    echo "
                            </a>
                        ";
                } else {
                    // line 36
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "unique_hits", [], "any", false, false, false, 36), "html", null, true);
                    echo "
                        ";
                }
                // line 38
                echo "                        </span>
                            </td>
                            ";
                // line 40
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("click_counts", twig_array_merge($context, ["redirect_id" => twig_get_attribute($this->env, $this->source, $context["link"], "redirect_id", [], "any", false, false, false, 40)]));
                echo "
                            ";
                // line 41
                if ((isset($context["showConversionRate"]) || array_key_exists("showConversionRate", $context) ? $context["showConversionRate"] : (function () { throw new RuntimeError('Variable "showConversionRate" does not exist.', 41, $this->source); })())) {
                    // line 42
                    echo "                                <td data-conversion-rate-cell data-unique-hits=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "unique_hits", [], "any", false, false, false, 42), "html", null, true);
                    echo "\"><div class=\"spinner\"><i class=\"fa fa-spin fa-spinner\"></i></div></td>
                            ";
                }
                // line 44
                echo "                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "redirect_id", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                        </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "
                <tr>
                    <td class=\"long-text\">";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.total_clicks"), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["totalClicks"]) || array_key_exists("totalClicks", $context) ? $context["totalClicks"] : (function () { throw new RuntimeError('Variable "totalClicks" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">
                        <span class=\"mt-xs label label-primary has-click-event clickable-stat\">
                        ";
            // line 53
            if ((array_key_exists("channel", $context) && array_key_exists("entity", $context))) {
                // line 54
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.page_source") . ":") .                 // line 55
(isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 55, $this->source); })())) . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.page_source_id")) . ":") . twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "getId", [], "method", false, false, false, 55))]), "html", null, true);
                echo "\"
                                data-toggle=\"tooltip\"
                                title=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.simple.tooltip"), "html", null, true);
                echo "\">
                                ";
                // line 58
                echo twig_escape_filter($this->env, (isset($context["totalUniqueClicks"]) || array_key_exists("totalUniqueClicks", $context) ? $context["totalUniqueClicks"] : (function () { throw new RuntimeError('Variable "totalUniqueClicks" does not exist.', 58, $this->source); })()), "html", null, true);
                echo "
                            </a>
                        ";
            } else {
                // line 61
                echo "                            ";
                echo twig_escape_filter($this->env, (isset($context["totalUniqueClicks"]) || array_key_exists("totalUniqueClicks", $context) ? $context["totalUniqueClicks"] : (function () { throw new RuntimeError('Variable "totalUniqueClicks" does not exist.', 61, $this->source); })()), "html", null, true);
                echo "
                        ";
            }
            // line 63
            echo "                        </span>
                    </td>
                    ";
            // line 65
            if ((isset($context["showConversionRate"]) || array_key_exists("showConversionRate", $context) ? $context["showConversionRate"] : (function () { throw new RuntimeError('Variable "showConversionRate" does not exist.', 65, $this->source); })())) {
                // line 66
                echo "                        <td data-conversion-rate-total-cell>
                            <div class=\"spinner\"><i class=\"fa fa-spin fa-spinner\"></i></div>
                            <i class=\"ri-question-line\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" data-original-title=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.total_conversion_rate_tooltip"), "html", null, true);
                echo "\"></i>
                        </td>
                    ";
            }
            // line 71
            echo "                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
";
        } else {
            // line 77
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["header" => "mautic.trackable.click_counts.header_none", "message" => "mautic.trackable.click_counts.none"]);
            // line 78
            echo "<div class=\"clearfix\"></div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPage/Trackable/click_counts.html.twig";
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
        return array (  233 => 78,  231 => 77,  223 => 71,  217 => 68,  213 => 66,  211 => 65,  207 => 63,  201 => 61,  195 => 58,  191 => 57,  186 => 55,  184 => 54,  182 => 53,  176 => 50,  172 => 49,  168 => 47,  158 => 44,  152 => 42,  150 => 41,  146 => 40,  142 => 38,  136 => 36,  130 => 33,  126 => 32,  120 => 30,  118 => 29,  112 => 26,  106 => 25,  103 => 24,  100 => 23,  97 => 22,  92 => 21,  89 => 20,  87 => 19,  79 => 15,  73 => 13,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPage/Trackable/click_counts.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Resources\\views\\Trackable\\click_counts.html.twig");
    }
}
