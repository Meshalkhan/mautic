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

/* @MauticLead/Company/list.html.twig */
class __TwigTemplate_3beb1b000b074a29a258a3cc24b3a6f1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 14
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 14, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticLead/Company/list.html.twig", 14);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 12, $this->source); })()))) ? (true) : (false));
        // line 13
        $context["tmpl"] = "list";
        // line 14
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "company";
    }

    // line 18
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.companies.menu.root"), "html", null, true);
    }

    // line 20
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 21, $this->source); })()), "lead:leads:create", [], "array", false, false, false, 21)) {
            // line 22
            echo "      ";
            $context["pageButtons"] = [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_action", ["object" => "companies", "objectAction" => "new"])], "iconClass" => "ri-import-line", "btnText" => "mautic.lead.lead.import"], ["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_index", ["object" => "companies"])], "iconClass" => "ri-history-line", "btnText" => "mautic.lead.lead.import.index"]];
            // line 38
            echo "  ";
        }
        // line 39
        echo "  ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 40
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 40, $this->source); })()), "lead:leads:create", [], "array", false, false, false, 40)], "routeBase" => "company", "customButtons" => ((        // line 42
array_key_exists("pageButtons", $context)) ? (_twig_default_filter((isset($context["pageButtons"]) || array_key_exists("pageButtons", $context) ? $context["pageButtons"] : (function () { throw new RuntimeError('Variable "pageButtons" does not exist.', 42, $this->source); })()), [])) : ([]))]);
        // line 43
        echo "
";
    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 47, $this->source); })())) {
            // line 48
            echo "    <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
        ";
            // line 49
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 50
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 50, $this->source); })()), "searchHelp" => "mautic.core.help.searchcommands", "action" =>             // line 52
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 52, $this->source); })())]);
            // line 53
            echo "
        <div class=\"page-list\">
  ";
        }
        // line 56
        echo "
  ";
        // line 57
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 57, $this->source); })())) > 0)) {
            // line 58
            echo "      <div class=\"table-responsive page-list\">
          <table class=\"table table-hover company-list\" id=\"companyTable\">
              <thead>
              <tr>
                  ";
            // line 62
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#companyTable", "routeBase" => "company", "templateButtons" => ["delete" => twig_get_attribute($this->env, $this->source,             // line 66
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 66, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 66)]]);
            // line 67
            echo "
                  ";
            // line 68
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.company.name", "class" => "col-company-name", "orderBy" => "comp.companyname"]);
            // line 73
            echo "
                  ";
            // line 74
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.company.email", "class" => "visible-md visible-lg col-company-category", "orderBy" => "comp.companyemail"]);
            // line 79
            echo "
                  ";
            // line 80
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.company.website", "class" => "visible-md visible-lg col-company-website", "orderBy" => "comp.companywebsite"]);
            // line 85
            echo "
                  ";
            // line 86
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.company.score", "class" => "visible-md visible-lg col-company-score", "orderBy" => "comp.score"]);
            // line 91
            echo "
                  ";
            // line 92
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.lead.list.thead.leadcount", "class" => "visible-md visible-lg col-leadlist-leadcount"]);
            // line 96
            echo "
                  ";
            // line 97
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "orderBy" => "comp.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-company-id"]);
            // line 102
            echo "
              </tr>
              </thead>
              <tbody>
              ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 106, $this->source); })()));
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
                // line 107
                echo "                  ";
                $context["fields"] = twig_get_attribute($this->env, $this->source, $context["item"], "fields", [], "any", false, false, false, 107);
                // line 108
                echo "                  <tr>
                      <td>
                          ";
                // line 110
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 111
$context["item"], "templateButtons" => ["edit" => twig_get_attribute($this->env, $this->source,                 // line 113
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 113, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 113), "clone" => twig_get_attribute($this->env, $this->source,                 // line 114
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 114, $this->source); })()), "lead:leads:create", [], "array", false, false, false, 114), "delete" => twig_get_attribute($this->env, $this->source,                 // line 115
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 115, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 115)], "routeBase" => "company"]);
                // line 118
                echo "
                      </td>
                      <td>
                          <div>
                          ";
                // line 122
                if ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 122, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 122), twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 122, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 122), twig_get_attribute($this->env, $this->source, $context["item"], "createdBy", [], "any", false, false, false, 122))) {
                    // line 123
                    echo "                              <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_company_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 123)]), "html", null, true);
                    echo "\" data-toggle=\"ajax\">
                                ";
                    // line 124
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 124), "companyname", [], "any", true, true, false, 124)) {
                        // line 125
                        echo "                                  ";
                        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 125, $this->source); })()), "core", [], "any", false, false, false, 125), "companyname", [], "any", false, false, false, 125), "value", [], "any", false, false, false, 125));
                        echo "
                                ";
                    }
                    // line 127
                    echo "                              </a>
                          ";
                } else {
                    // line 129
                    echo "                              ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 129), "companyname", [], "any", true, true, false, 129)) {
                        // line 130
                        echo "                                ";
                        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 130, $this->source); })()), "core", [], "any", false, false, false, 130), "companyname", [], "any", false, false, false, 130), "value", [], "any", false, false, false, 130));
                        echo "
                              ";
                    }
                    // line 132
                    echo "                          ";
                }
                // line 133
                echo "                          </div>
                      </td>
                      <td>
                          ";
                // line 136
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 136), "companyemail", [], "any", true, true, false, 136)) {
                    // line 137
                    echo "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 138
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 138, $this->source); })()), "core", [], "any", false, false, false, 138), "companyemail", [], "any", false, false, false, 138), "value", [], "any", false, false, false, 138));
                    echo "</small>
                            </div>
                          ";
                }
                // line 141
                echo "                      </td>

                      <td class=\"visible-md visible-lg\">
                          ";
                // line 144
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 144), "companywebsite", [], "any", true, true, false, 144)) {
                    // line 145
                    echo "                            ";
                    echo twig_escape_filter($this->env, Mautic\CoreBundle\Helper\InputHelper::url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 145, $this->source); })()), "core", [], "any", false, false, false, 145), "companywebsite", [], "any", false, false, false, 145), "value", [], "any", false, false, false, 145)), "html", null, true);
                    echo "
                          ";
                }
                // line 147
                echo "                      </td>
                      <td class=\"visible-md visible-lg\">
                          ";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "score", [], "any", false, false, false, 149), "html", null, true);
                echo "
                      </td>
                      <td class=\"visible-md visible-lg\">
                          <a class=\"label label-primary\"
                             href=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.company_id") . ":") . twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 153))]), "html", null, true);
                echo "\"
                             data-toggle=\"ajax\"
                             ";
                // line 155
                if ((0 == twig_get_attribute($this->env, $this->source, (isset($context["leadCounts"]) || array_key_exists("leadCounts", $context) ? $context["leadCounts"] : (function () { throw new RuntimeError('Variable "leadCounts" does not exist.', 155, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 155), [], "array", false, false, false, 155))) {
                    echo "disabled=\"disabled\"";
                }
                echo ">
                                  ";
                // line 156
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.company.viewleads_count", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["leadCounts"]) || array_key_exists("leadCounts", $context) ? $context["leadCounts"] : (function () { throw new RuntimeError('Variable "leadCounts" does not exist.', 156, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 156), [], "array", false, false, false, 156)]), "html", null, true);
                echo "
                          </a>
                      </td>
                      <td class=\"visible-md visible-lg\">";
                // line 159
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 159), "html", null, true);
                echo "</td>
                  </tr>
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
            // line 162
            echo "              </tbody>
          </table>
      </div>
      <div class=\"panel-footer\">
          ";
            // line 166
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 167
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 167, $this->source); })()), "page" =>             // line 168
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 168, $this->source); })()), "limit" =>             // line 169
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 169, $this->source); })()), "menuLinkId" => "mautic_company_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_company_index"), "sessionVar" => "company"]);
            // line 173
            echo "
      </div>
  ";
        } else {
            // line 176
            echo "    ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.company.action.noresults.tip"]);
            echo "
  ";
        }
        // line 178
        echo "
  ";
        // line 179
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 179, $this->source); })())) {
            // line 180
            echo "        </div>
    </div>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Company/list.html.twig";
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
        return array (  327 => 180,  325 => 179,  322 => 178,  316 => 176,  311 => 173,  309 => 169,  308 => 168,  307 => 167,  306 => 166,  300 => 162,  283 => 159,  277 => 156,  271 => 155,  266 => 153,  259 => 149,  255 => 147,  249 => 145,  247 => 144,  242 => 141,  236 => 138,  233 => 137,  231 => 136,  226 => 133,  223 => 132,  217 => 130,  214 => 129,  210 => 127,  204 => 125,  202 => 124,  197 => 123,  195 => 122,  189 => 118,  187 => 115,  186 => 114,  185 => 113,  184 => 111,  183 => 110,  179 => 108,  176 => 107,  159 => 106,  153 => 102,  151 => 97,  148 => 96,  146 => 92,  143 => 91,  141 => 86,  138 => 85,  136 => 80,  133 => 79,  131 => 74,  128 => 73,  126 => 68,  123 => 67,  121 => 66,  120 => 62,  114 => 58,  112 => 57,  109 => 56,  104 => 53,  102 => 52,  101 => 50,  100 => 49,  97 => 48,  94 => 47,  90 => 46,  85 => 43,  83 => 42,  82 => 40,  80 => 39,  77 => 38,  74 => 22,  71 => 21,  67 => 20,  60 => 18,  53 => 16,  49 => 14,  47 => 13,  45 => 12,  38 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Company/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Company\\list.html.twig");
    }
}
