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

/* @MauticLead/Company/list.html.twig */
class __TwigTemplate_4749ad1d094928a145ceaf80319ffdac extends Template
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

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 14
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 14, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticLead/Company/list.html.twig", 14);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 12, $this->source); })()))) ? (true) : (false));
        // line 13
        $context["tmpl"] = "list";
        // line 14
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "company";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.companies.menu.root"), "html", null, true);
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 21, $this->source); })()), "lead:leads:create", [], "array", false, false, false, 21)) {
            // line 22
            yield "      ";
            $context["pageButtons"] = [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_action", ["object" => "companies", "objectAction" => "new"])], "iconClass" => "ri-import-line", "btnText" => "mautic.lead.lead.import"], ["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_index", ["object" => "companies"])], "iconClass" => "ri-history-line", "btnText" => "mautic.lead.lead.import.index"]];
            // line 38
            yield "  ";
        }
        // line 39
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,         // line 40
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 40, $this->source); })()), "lead:leads:create", [], "array", false, false, false, 40)], "routeBase" => "company", "customButtons" => ((        // line 42
array_key_exists("pageButtons", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["pageButtons"]) || array_key_exists("pageButtons", $context) ? $context["pageButtons"] : (function () { throw new RuntimeError('Variable "pageButtons" does not exist.', 42, $this->source); })()), [])) : ([]))]);
        // line 43
        yield "
";
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 47, $this->source); })())) {
            // line 48
            yield "    <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
        ";
            // line 49
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 50
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 50, $this->source); })()), "searchHelp" => "mautic.core.help.searchcommands", "action" =>             // line 52
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 52, $this->source); })())]);
            // line 53
            yield "
        <div class=\"page-list\">
  ";
        }
        // line 56
        yield "
  ";
        // line 57
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 57, $this->source); })())) > 0)) {
            // line 58
            yield "      <div class=\"table-responsive page-list\">
          <table class=\"table table-hover company-list\" id=\"companyTable\">
              <thead>
              <tr>
                  ";
            // line 62
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#companyTable", "routeBase" => "company", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 66
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 66, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 66)]]);
            // line 67
            yield "
                  ";
            // line 68
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.company.name", "class" => "col-company-name", "orderBy" => "comp.companyname"]);
            // line 73
            yield "
                  ";
            // line 74
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.company.email", "class" => "visible-md visible-lg col-company-category", "orderBy" => "comp.companyemail"]);
            // line 79
            yield "
                  ";
            // line 80
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.company.website", "class" => "visible-md visible-lg col-company-website", "orderBy" => "comp.companywebsite"]);
            // line 85
            yield "
                  ";
            // line 86
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.company.score", "class" => "visible-md visible-lg col-company-score", "orderBy" => "comp.score"]);
            // line 91
            yield "
                  ";
            // line 92
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "text" => "mautic.lead.list.thead.leadcount", "class" => "visible-md visible-lg col-leadlist-leadcount"]);
            // line 96
            yield "
                  ";
            // line 97
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "company", "orderBy" => "comp.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-company-id"]);
            // line 102
            yield "
              </tr>
              </thead>
              <tbody>
              ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 106, $this->source); })()));
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
                yield "                  ";
                $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "fields", [], "any", false, false, false, 107);
                // line 108
                yield "                  <tr>
                      <td>
                          ";
                // line 110
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 111
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,                 // line 113
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 113, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 113), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 114
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 114, $this->source); })()), "lead:leads:create", [], "array", false, false, false, 114), "delete" => CoreExtension::getAttribute($this->env, $this->source,                 // line 115
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 115, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 115)], "routeBase" => "company"]);
                // line 118
                yield "
                      </td>
                      <td>
                          <div>
                          ";
                // line 122
                if ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 122, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 122), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 122, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 122), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "createdBy", [], "any", false, false, false, 122))) {
                    // line 123
                    yield "                              <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_company_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 123)]), "html", null, true);
                    yield "\" data-toggle=\"ajax\">
                                ";
                    // line 124
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 124), "companyname", [], "any", true, true, false, 124)) {
                        // line 125
                        yield "                                  ";
                        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 125, $this->source); })()), "core", [], "any", false, false, false, 125), "companyname", [], "any", false, false, false, 125), "value", [], "any", false, false, false, 125));
                        yield "
                                ";
                    }
                    // line 127
                    yield "                              </a>
                          ";
                } else {
                    // line 129
                    yield "                              ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 129), "companyname", [], "any", true, true, false, 129)) {
                        // line 130
                        yield "                                ";
                        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 130, $this->source); })()), "core", [], "any", false, false, false, 130), "companyname", [], "any", false, false, false, 130), "value", [], "any", false, false, false, 130));
                        yield "
                              ";
                    }
                    // line 132
                    yield "                          ";
                }
                // line 133
                yield "                          </div>
                      </td>
                      <td>
                          ";
                // line 136
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 136), "companyemail", [], "any", true, true, false, 136)) {
                    // line 137
                    yield "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 138
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 138, $this->source); })()), "core", [], "any", false, false, false, 138), "companyemail", [], "any", false, false, false, 138), "value", [], "any", false, false, false, 138));
                    yield "</small>
                            </div>
                          ";
                }
                // line 141
                yield "                      </td>

                      <td class=\"visible-md visible-lg\">
                          ";
                // line 144
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 144), "companywebsite", [], "any", true, true, false, 144)) {
                    // line 145
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Mautic\CoreBundle\Helper\InputHelper::url(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 145, $this->source); })()), "core", [], "any", false, false, false, 145), "companywebsite", [], "any", false, false, false, 145), "value", [], "any", false, false, false, 145)), "html", null, true);
                    yield "
                          ";
                }
                // line 147
                yield "                      </td>
                      <td class=\"visible-md visible-lg\">
                          ";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "score", [], "any", false, false, false, 149), "html", null, true);
                yield "
                      </td>
                      <td class=\"visible-md visible-lg\">
                          <a class=\"label label-primary\"
                             href=\"";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.company_id") . ":") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 153))]), "html", null, true);
                yield "\"
                             data-toggle=\"ajax\"
                             ";
                // line 155
                if ((0 == CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadCounts"]) || array_key_exists("leadCounts", $context) ? $context["leadCounts"] : (function () { throw new RuntimeError('Variable "leadCounts" does not exist.', 155, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 155), [], "array", false, false, false, 155))) {
                    yield "disabled=\"disabled\"";
                }
                yield ">
                                  ";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.company.viewleads_count", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadCounts"]) || array_key_exists("leadCounts", $context) ? $context["leadCounts"] : (function () { throw new RuntimeError('Variable "leadCounts" does not exist.', 156, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 156), [], "array", false, false, false, 156)]), "html", null, true);
                yield "
                          </a>
                      </td>
                      <td class=\"visible-md visible-lg\">";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 159), "html", null, true);
                yield "</td>
                  </tr>
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            yield "              </tbody>
          </table>
      </div>
      <div class=\"panel-footer\">
          ";
            // line 166
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 167
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 167, $this->source); })()), "page" =>             // line 168
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 168, $this->source); })()), "limit" =>             // line 169
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 169, $this->source); })()), "menuLinkId" => "mautic_company_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_company_index"), "sessionVar" => "company"]);
            // line 173
            yield "
      </div>
  ";
        } else {
            // line 176
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.company.action.noresults.tip"]);
            yield "
  ";
        }
        // line 178
        yield "
  ";
        // line 179
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 179, $this->source); })())) {
            // line 180
            yield "        </div>
    </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Company/list.html.twig";
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
        return array (  347 => 180,  345 => 179,  342 => 178,  336 => 176,  331 => 173,  329 => 169,  328 => 168,  327 => 167,  326 => 166,  320 => 162,  303 => 159,  297 => 156,  291 => 155,  286 => 153,  279 => 149,  275 => 147,  269 => 145,  267 => 144,  262 => 141,  256 => 138,  253 => 137,  251 => 136,  246 => 133,  243 => 132,  237 => 130,  234 => 129,  230 => 127,  224 => 125,  222 => 124,  217 => 123,  215 => 122,  209 => 118,  207 => 115,  206 => 114,  205 => 113,  204 => 111,  203 => 110,  199 => 108,  196 => 107,  179 => 106,  173 => 102,  171 => 97,  168 => 96,  166 => 92,  163 => 91,  161 => 86,  158 => 85,  156 => 80,  153 => 79,  151 => 74,  148 => 73,  146 => 68,  143 => 67,  141 => 66,  140 => 62,  134 => 58,  132 => 57,  129 => 56,  124 => 53,  122 => 52,  121 => 50,  120 => 49,  117 => 48,  114 => 47,  107 => 46,  101 => 43,  99 => 42,  98 => 40,  96 => 39,  93 => 38,  90 => 22,  87 => 21,  80 => 20,  69 => 18,  58 => 16,  54 => 14,  52 => 13,  50 => 12,  43 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Company/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Company\\list.html.twig");
    }
}
