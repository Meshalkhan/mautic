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

/* @MauticPage/Result/_list.html.twig */
class __TwigTemplate_fccc73c1043e76b284db3b3f2322df0f extends Template
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
        // line 6
        $context["pageId"] = twig_get_attribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6);
        // line 7
        echo "<div class=\"table-responsive table-responsive-force\">
    <table class=\"table table-hover pageresult-list\" id=\"pageResultsTable\">
        <thead>
            <tr>
                ";
        // line 11
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("pageresult." .         // line 12
(isset($context["pageId"]) || array_key_exists("pageId", $context) ? $context["pageId"] : (function () { throw new RuntimeError('Variable "pageId" does not exist.', 12, $this->source); })())), "orderBy" => "s.id", "text" => "mautic.form.report.submission.id", "class" => "col-pageresult-id", "filterBy" => "s.id"]);
        // line 17
        echo "

                ";
        // line 19
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("pageresult." .         // line 20
(isset($context["pageId"]) || array_key_exists("pageId", $context) ? $context["pageId"] : (function () { throw new RuntimeError('Variable "pageId" does not exist.', 20, $this->source); })())), "orderBy" => "s.lead_id", "text" => "mautic.lead.report.contact_id", "class" => "col-pageresult-lead-id", "filterBy" => "s.lead_id"]);
        // line 25
        echo "

                ";
        // line 27
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("pageresult." .         // line 28
(isset($context["pageId"]) || array_key_exists("pageId", $context) ? $context["pageId"] : (function () { throw new RuntimeError('Variable "pageId" does not exist.', 28, $this->source); })())), "orderBy" => "s.form_id", "text" => "mautic.form.report.form_id", "class" => "col-pageresult-form-id", "filterBy" => "s.form_id"]);
        // line 33
        echo "

                ";
        // line 35
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("pageresult." .         // line 36
(isset($context["pageId"]) || array_key_exists("pageId", $context) ? $context["pageId"] : (function () { throw new RuntimeError('Variable "pageId" does not exist.', 36, $this->source); })())), "orderBy" => "s.date_submitted", "text" => "mautic.form.result.thead.date", "class" => "col-pageresult-date", "default" => true, "filterBy" => "s.date_submitted", "dataToggle" => "date"]);
        // line 43
        echo "

                ";
        // line 45
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("pageresult." .         // line 46
(isset($context["pageId"]) || array_key_exists("pageId", $context) ? $context["pageId"] : (function () { throw new RuntimeError('Variable "pageId" does not exist.', 46, $this->source); })())), "orderBy" => "i.ip_address", "text" => "mautic.core.ipaddress", "class" => "col-pageresult-ip", "filterBy" => "i.ip_address"]);
        // line 51
        echo "
            </tr>
        </thead>
        <tbody>
        ";
        // line 55
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 55, $this->source); })())) > 0)) {
            // line 56
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 57
                echo "              <tr>
                  <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 58));
                echo "</td>
                  <td>
                      ";
                // line 60
                if (twig_get_attribute($this->env, $this->source, $context["item"], "leadId", [], "any", true, true, false, 60)) {
                    // line 61
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["item"], "leadId", [], "any", false, false, false, 61)]), "html", null, true);
                    echo "\" data-toggle=\"ajax\">";
                    // line 62
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "leadId", [], "any", false, false, false, 62));
                    // line 63
                    echo "</a>
                      ";
                }
                // line 65
                echo "                  </td>
                  <td>
                      ";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["item"], "formId", [], "any", true, true, false, 67)) {
                    // line 68
                    echo "                      <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["item"], "formId", [], "any", false, false, false, 68)]), "html", null, true);
                    echo "\" data-toggle=\"ajax\">";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "formId", [], "any", false, false, false, 69));
                    // line 70
                    echo "</a>
                      ";
                }
                // line 72
                echo "                  </td>
                  <td>";
                // line 73
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, $context["item"], "dateSubmitted", [], "any", false, false, false, 73), "UTC");
                echo "</td>
                  <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ipAddress", [], "any", false, false, false, 74));
                echo "</td>
              </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "        ";
        } else {
            // line 78
            echo "            <tr>
                <td colspan=\"4\">
                    ";
            // line 80
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
            echo "
                </td>
            </tr>
        ";
        }
        // line 84
        echo "        </tbody>
    </table>
</div>
<div class=\"panel-footer\">
    ";
        // line 88
        echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>         // line 89
(isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 89, $this->source); })()), "page" =>         // line 90
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 90, $this->source); })()), "limit" =>         // line 91
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 91, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_results", ["objectId" => twig_get_attribute($this->env, $this->source,         // line 92
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "sessionVar" => ("pageresult." .         // line 93
(isset($context["pageId"]) || array_key_exists("pageId", $context) ? $context["pageId"] : (function () { throw new RuntimeError('Variable "pageId" does not exist.', 93, $this->source); })()))]);
        // line 94
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPage/Result/_list.html.twig";
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
        return array (  168 => 94,  166 => 93,  165 => 92,  164 => 91,  163 => 90,  162 => 89,  161 => 88,  155 => 84,  148 => 80,  144 => 78,  141 => 77,  132 => 74,  128 => 73,  125 => 72,  121 => 70,  119 => 69,  115 => 68,  113 => 67,  109 => 65,  105 => 63,  103 => 62,  99 => 61,  97 => 60,  92 => 58,  89 => 57,  84 => 56,  82 => 55,  76 => 51,  74 => 46,  73 => 45,  69 => 43,  67 => 36,  66 => 35,  62 => 33,  60 => 28,  59 => 27,  55 => 25,  53 => 20,  52 => 19,  48 => 17,  46 => 12,  45 => 11,  39 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPage/Result/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Resources\\views\\Result\\_list.html.twig");
    }
}
