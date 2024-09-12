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

/* @MauticLead/Field/list.html.twig */
class __TwigTemplate_818dfeccffa7e1d40ec1820d0addf339 extends Template
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
        // line 19
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 19, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticLead/Field/list.html.twig", 19);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 17, $this->source); })()))) ? (true) : (false));
        // line 18
        $context["tmpl"] = "list";
        // line 19
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "leadfield";
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.header.index"), "html", null, true);
        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => true], "routeBase" => "contactfield", "langVar" => "lead.field"]);
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 36, $this->source); })())) {
            // line 37
            yield "    <div class=\"panel panel-default bdr-t-wdh-0\">
        ";
            // line 38
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 39
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 39, $this->source); })()), "action" =>             // line 40
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 40, $this->source); })())]);
            // line 41
            yield "
        <div class=\"page-list\">
  ";
        }
        // line 44
        yield "
  ";
        // line 45
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 45, $this->source); })())) > 0)) {
            // line 46
            yield "      <div class=\"table-responsive\">
          <table class=\"table table-hover leadfield-list\" id=\"leadFieldTable\" class=\"overflow:auto\">
              <thead>
              <tr>
                  <th class=\"col-leadfield-orderhandle\"></th>
                  ";
            // line 51
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#leadFieldTable", "langVar" => "lead.field", "routeBase" => "contactfield", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 57
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 57, $this->source); })()), "lead:fields:full", [], "array", false, false, false, 57)]]);
            // line 59
            yield "
                  <th class=\"col-leadfield-label\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.label"), "html", null, true);
            yield "</th>
                  <th class=\"visible-md visible-lg col-leadfield-alias\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.alias"), "html", null, true);
            yield "</th>
                  <th class=\"visible-md visible-lg col-leadfield-group\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.object"), "html", null, true);
            yield "</th>
                  <th class=\"visible-md visible-lg col-leadfield-group\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.group"), "html", null, true);
            yield "</th>
                  <th class=\"col-leadfield-type\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.type"), "html", null, true);
            yield "</th>
                  <th class=\"visible-md visible-lg col-leadfield-id\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.id"), "html", null, true);
            yield "</th>
                  <th class=\"visible-sm visible-md visible-lg col-leadfield-statusicons\"></th>
              </tr>
              </thead>
              <tbody>
              ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 70, $this->source); })()));
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
                // line 71
                yield "                  <tr id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 71), "html", null, true);
                yield "\">
                      <td><i class=\"ri-xl ri-draggable text-muted\"></i></td>
                      <td>
                          ";
                // line 74
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 75
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,                 // line 77
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 77, $this->source); })()), "lead:fields:full", [], "array", false, false, false, 77), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 78
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 78, $this->source); })()), "lead:fields:full", [], "array", false, false, false, 78), "delete" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 79
$context["item"], "isFixed", [], "any", false, false, false, 79)) ? (false) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 79, $this->source); })()), "lead:fields:full", [], "array", false, false, false, 79)))], "routeBase" => "contactfield", "langVar" => "lead.field", "pull" => "left"]);
                // line 84
                yield "
                      </td>
                      <td>
                      <span class=\"ellipsis\">
                          ";
                // line 88
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 89
$context["item"], "model" => "lead.field", "disableToggle" => CoreExtension::getAttribute($this->env, $this->source,                 // line 91
$context["item"], "disablePublishChange", [], "any", false, false, false, 91), "aditionalLabel" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 92
$context["item"], "columnIsNotCreated", [], "any", false, false, false, 92)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.being_created_in_background")) : (null))]);
                // line 93
                yield "
                          <a href=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contactfield_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 94)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 94), "html", null, true);
                yield "</a>
                      </span>
                      </td>
                      <td class=\"visible-md visible-lg\">";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "alias", [], "any", false, false, false, 97), "html", null, true);
                yield "</td>
                      <td class=\"visible-md visible-lg\">";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((("mautic." . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "object", [], "any", false, false, false, 98)) . ".") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "object", [], "any", false, false, false, 98))), "html", null, true);
                yield "</td>
                      <td class=\"visible-md visible-lg\">";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "group", [], "any", false, false, false, 99))), "html", null, true);
                yield "</td>
                      <td>";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorConditional(("mautic.core.type." . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 100)), ("mautic.lead.field.type." . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 100))), "html", null, true);
                yield "</td>
                      <td class=\"visible-md visible-lg\">";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 101), "html", null, true);
                yield "</td>
                      <td class=\"visible-sm visible-md visible-lg\">
                          ";
                // line 103
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isRequired", [], "any", false, false, false, 103)) {
                    // line 104
                    yield "                              <i class=\"fa fa-asterisk\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.required"), "html", null, true);
                    yield "\"></i>
                          ";
                }
                // line 106
                yield "                          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isVisible", [], "any", false, false, false, 106)) {
                    // line 107
                    yield "                              <i class=\"ri-eye-line-slash\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.invisible"), "html", null, true);
                    yield "\"></i>
                          ";
                }
                // line 109
                yield "                          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isFixed", [], "any", false, false, false, 109)) {
                    // line 110
                    yield "                              <i class=\"fa fa-lock\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.fixed"), "html", null, true);
                    yield "\"></i>
                          ";
                }
                // line 112
                yield "                          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isListable", [], "any", false, false, false, 112)) {
                    // line 113
                    yield "                              <i class=\"fa fa-list \" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.listable"), "html", null, true);
                    yield "\"></i>
                          ";
                }
                // line 115
                yield "                          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isPubliclyUpdatable", [], "any", false, false, false, 115)) {
                    // line 116
                    yield "                              <i class=\"ri-earth-line text-danger \" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.public"), "html", null, true);
                    yield "\"></i>
                          ";
                }
                // line 118
                yield "                          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isUniqueIdentifer", [], "any", false, false, false, 118)) {
                    // line 119
                    yield "                              <i class=\"fa fa-key \" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.isuniqueidentifer"), "html", null, true);
                    yield "\"></i>
                          ";
                }
                // line 121
                yield "                          ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isIsIndex", [], "any", false, false, false, 121)) {
                    // line 122
                    yield "                              <i class=\"fa fa-key \" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.isindex"), "html", null, true);
                    yield "\"></i>
                          ";
                }
                // line 124
                yield "                      </td>
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
            // line 127
            yield "              </tbody>
          </table>
      </div>
      <div class=\"panel-footer\">
          ";
            // line 131
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 132
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 132, $this->source); })()), "page" =>             // line 133
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 133, $this->source); })()), "limit" =>             // line 134
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 134, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contactfield_index"), "sessionVar" => "leadfield"]);
            // line 137
            yield "
      </div>
  ";
        } else {
            // line 140
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
            yield "
  ";
        }
        // line 142
        yield "
  ";
        // line 143
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 143, $this->source); })())) {
            // line 144
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
        return "@MauticLead/Field/list.html.twig";
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
        return array (  338 => 144,  336 => 143,  333 => 142,  327 => 140,  322 => 137,  320 => 134,  319 => 133,  318 => 132,  317 => 131,  311 => 127,  295 => 124,  289 => 122,  286 => 121,  280 => 119,  277 => 118,  271 => 116,  268 => 115,  262 => 113,  259 => 112,  253 => 110,  250 => 109,  244 => 107,  241 => 106,  235 => 104,  233 => 103,  228 => 101,  224 => 100,  220 => 99,  216 => 98,  212 => 97,  204 => 94,  201 => 93,  199 => 92,  198 => 91,  197 => 89,  196 => 88,  190 => 84,  188 => 79,  187 => 78,  186 => 77,  185 => 75,  184 => 74,  177 => 71,  160 => 70,  152 => 65,  148 => 64,  144 => 63,  140 => 62,  136 => 61,  132 => 60,  129 => 59,  127 => 57,  126 => 51,  119 => 46,  117 => 45,  114 => 44,  109 => 41,  107 => 40,  106 => 39,  105 => 38,  102 => 37,  99 => 36,  92 => 35,  87 => 26,  80 => 25,  69 => 23,  58 => 21,  54 => 19,  52 => 18,  50 => 17,  43 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Field/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Field\\list.html.twig");
    }
}
