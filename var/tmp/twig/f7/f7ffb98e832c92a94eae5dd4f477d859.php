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

/* @MauticForm/Result/_list.html.twig */
class __TwigTemplate_c47b0612a12b328ad86ee715662022e0 extends Template
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
        // line 13
        $context["formId"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13);
        // line 14
        echo "<div class=\"table-responsive table-responsive-force\">
    <table class=\"table table-hover formresult-list\" id=\"formResultTable\">
        <thead>
            <tr>
                ";
        // line 18
        if ((isset($context["canDelete"]) || array_key_exists("canDelete", $context) ? $context["canDelete"] : (function () { throw new RuntimeError('Variable "canDelete" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "                  ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#formResultTable", "routeBase" => "form_results", "query" => ["formId" =>             // line 23
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 23, $this->source); })())], "templateButtons" => ["delete" =>             // line 24
(isset($context["canDelete"]) || array_key_exists("canDelete", $context) ? $context["canDelete"] : (function () { throw new RuntimeError('Variable "canDelete" does not exist.', 24, $this->source); })())]]);
            // line 25
            echo "
                ";
        }
        // line 27
        echo "
                ";
        // line 28
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("formresult." .         // line 29
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 29, $this->source); })())), "orderBy" => "s.id", "text" => "mautic.form.report.submission.id", "class" => "col-formresult-id", "filterBy" => "s.id"]);
        // line 34
        echo "

                ";
        // line 36
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("formresult." .         // line 37
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 37, $this->source); })())), "orderBy" => "s.lead_id", "text" => "mautic.lead.report.contact_id", "class" => "col-formresult-lead-id", "filterBy" => "s.lead_id"]);
        // line 42
        echo "

                ";
        // line 44
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("formresult." .         // line 45
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 45, $this->source); })())), "orderBy" => "s.date_submitted", "text" => "mautic.form.result.thead.date", "class" => "col-formresult-date", "default" => true, "filterBy" => "s.date_submitted", "dataToggle" => "date"]);
        // line 52
        echo "

                ";
        // line 54
        echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("formresult." .         // line 55
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 55, $this->source); })())), "orderBy" => "i.ip_address", "text" => "mautic.core.ipaddress", "class" => "col-formresult-ip", "filterBy" => "i.ip_address"]);
        // line 60
        echo "

                ";
        // line 62
        $context["fields"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "fields", [], "any", false, false, false, 62);
        // line 63
        echo "                ";
        $context["fieldCount"] = (((isset($context["canDelete"]) || array_key_exists("canDelete", $context) ? $context["canDelete"] : (function () { throw new RuntimeError('Variable "canDelete" does not exist.', 63, $this->source); })())) ? (4) : (3));
        // line 64
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 64, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 65
            echo "                    ";
            if ((!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 65), (isset($context["viewOnlyFields"]) || array_key_exists("viewOnlyFields", $context) ? $context["viewOnlyFields"] : (function () { throw new RuntimeError('Variable "viewOnlyFields" does not exist.', 65, $this->source); })())) && (true == twig_get_attribute($this->env, $this->source, $context["f"], "saveResult", [], "any", false, false, false, 65)))) {
                // line 66
                echo "                      ";
                echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("formresult." .                 // line 67
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 67, $this->source); })())), "orderBy" => ("r." . twig_get_attribute($this->env, $this->source,                 // line 68
$context["f"], "alias", [], "any", false, false, false, 68)), "text" => twig_get_attribute($this->env, $this->source,                 // line 69
$context["f"], "label", [], "any", false, false, false, 69), "class" => ("col-formresult-field col-formresult-field" . twig_get_attribute($this->env, $this->source,                 // line 70
$context["f"], "id", [], "any", false, false, false, 70)), "filterBy" => ("r." . twig_get_attribute($this->env, $this->source,                 // line 71
$context["f"], "alias", [], "any", false, false, false, 71))]);
                // line 72
                echo "
                      ";
                // line 73
                $context["fieldCount"] = ((isset($context["fieldCount"]) || array_key_exists("fieldCount", $context) ? $context["fieldCount"] : (function () { throw new RuntimeError('Variable "fieldCount" does not exist.', 73, $this->source); })()) + 1);
                // line 74
                echo "                    ";
            }
            // line 75
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 79
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 79, $this->source); })())) > 0)) {
            // line 80
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 80, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 81
                echo "              ";
                $context["item"] = twig_array_merge($context["item"], ["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.results.name", ["%id%" => twig_get_attribute($this->env, $this->source,                 // line 82
$context["item"], "id", [], "any", false, false, false, 82)])]);
                // line 84
                echo "              <tr>
                  ";
                // line 85
                if ((isset($context["canDelete"]) || array_key_exists("canDelete", $context) ? $context["canDelete"] : (function () { throw new RuntimeError('Variable "canDelete" does not exist.', 85, $this->source); })())) {
                    // line 86
                    echo "                  <td>
                      ";
                    // line 87
                    echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                     // line 88
$context["item"], "templateButtons" => ["delete" =>                     // line 89
(isset($context["canDelete"]) || array_key_exists("canDelete", $context) ? $context["canDelete"] : (function () { throw new RuntimeError('Variable "canDelete" does not exist.', 89, $this->source); })())], "route" => "mautic_form_results_action", "langVar" => "form.results", "query" => ["formId" =>                     // line 92
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 92, $this->source); })()), "objectAction" => "delete"]]);
                    // line 93
                    echo "
                  </td>
                  ";
                }
                // line 96
                echo "
                  <td>";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 97));
                echo "</td>
                  <td>
                      ";
                // line 99
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "leadId", [], "any", true, true, false, 99) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "leadId", [], "any", false, false, false, 99)))) {
                    // line 100
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["item"], "leadId", [], "any", false, false, false, 100)]), "html", null, true);
                    echo "\" data-toggle=\"ajax\">
                            ";
                    // line 101
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "leadId", [], "any", false, false, false, 101));
                    echo "
                        </a>
                      ";
                }
                // line 104
                echo "                  </td>
                  <td>";
                // line 105
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, $context["item"], "dateSubmitted", [], "array", false, false, false, 105), "UTC");
                echo "</td>
                  <td>";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ipAddress", [], "array", false, false, false, 106));
                echo "</td>
                  ";
                // line 107
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "results", [], "any", false, false, false, 107));
                foreach ($context['_seq'] as $context["key"] => $context["r"]) {
                    // line 108
                    echo "                      ";
                    $context["isTextarea"] = ("textarea" == twig_get_attribute($this->env, $this->source, $context["r"], "type", [], "any", false, false, false, 108));
                    // line 109
                    echo "                      <td ";
                    if ((isset($context["isTextarea"]) || array_key_exists("isTextarea", $context) ? $context["isTextarea"] : (function () { throw new RuntimeError('Variable "isTextarea" does not exist.', 109, $this->source); })())) {
                        echo "class=\"long-text\"";
                    }
                    echo ">
                          ";
                    // line 110
                    if ((isset($context["isTextarea"]) || array_key_exists("isTextarea", $context) ? $context["isTextarea"] : (function () { throw new RuntimeError('Variable "isTextarea" does not exist.', 110, $this->source); })())) {
                        // line 111
                        echo "                              ";
                        echo twig_escape_filter($this->env, twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "value", [], "any", false, false, false, 111), "html", null, true)));
                        echo "
                          ";
                    } elseif (("file" == twig_get_attribute($this->env, $this->source,                     // line 112
$context["r"], "type", [], "any", false, false, false, 112))) {
                        // line 113
                        echo "                              <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_file_download", ["submissionId" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "array", false, false, false, 113), "field" => $context["key"]]), "html", null, true);
                        echo "\">
                                  ";
                        // line 114
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "value", [], "any", false, false, false, 114));
                        echo "
                              </a>
                          ";
                    } else {
                        // line 117
                        echo "                              ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "value", [], "any", false, false, false, 117));
                        echo "
                          ";
                    }
                    // line 119
                    echo "                      </td>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['r'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "              </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "        ";
        } else {
            // line 124
            echo "            <tr>
                <td colspan=\"";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["fieldCount"]) || array_key_exists("fieldCount", $context) ? $context["fieldCount"] : (function () { throw new RuntimeError('Variable "fieldCount" does not exist.', 125, $this->source); })()), "html", null, true);
            echo "\">
                    ";
            // line 126
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
            echo "
                </td>
            </tr>
        ";
        }
        // line 130
        echo "        </tbody>
    </table>
</div>
<div class=\"panel-footer\">
    ";
        // line 134
        echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>         // line 135
(isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 135, $this->source); })()), "page" =>         // line 136
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 136, $this->source); })()), "limit" =>         // line 137
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 137, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_results", ["objectId" => twig_get_attribute($this->env, $this->source,         // line 138
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138)]), "sessionVar" => ("formresult." .         // line 139
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 139, $this->source); })()))]);
        // line 140
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Result/_list.html.twig";
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
        return array (  314 => 140,  312 => 139,  311 => 138,  310 => 137,  309 => 136,  308 => 135,  307 => 134,  301 => 130,  294 => 126,  290 => 125,  287 => 124,  284 => 123,  269 => 121,  262 => 119,  256 => 117,  250 => 114,  245 => 113,  243 => 112,  238 => 111,  236 => 110,  229 => 109,  226 => 108,  222 => 107,  218 => 106,  214 => 105,  211 => 104,  205 => 101,  200 => 100,  198 => 99,  193 => 97,  190 => 96,  185 => 93,  183 => 92,  182 => 89,  181 => 88,  180 => 87,  177 => 86,  175 => 85,  172 => 84,  170 => 82,  168 => 81,  150 => 80,  148 => 79,  143 => 76,  129 => 75,  126 => 74,  124 => 73,  121 => 72,  119 => 71,  118 => 70,  117 => 69,  116 => 68,  115 => 67,  113 => 66,  110 => 65,  92 => 64,  89 => 63,  87 => 62,  83 => 60,  81 => 55,  80 => 54,  76 => 52,  74 => 45,  73 => 44,  69 => 42,  67 => 37,  66 => 36,  62 => 34,  60 => 29,  59 => 28,  56 => 27,  52 => 25,  50 => 24,  49 => 23,  47 => 19,  45 => 18,  39 => 14,  37 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Result/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Result\\_list.html.twig");
    }
}
