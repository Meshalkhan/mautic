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

/* @MauticLead/Field/list.html.twig */
class __TwigTemplate_223172241883152519da2244eca5076e extends Template
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
        // line 19
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 19, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticLead/Field/list.html.twig", 19);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 17, $this->source); })()))) ? (true) : (false));
        // line 18
        $context["tmpl"] = "list";
        // line 19
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "leadfield";
    }

    // line 23
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.header.index"), "html", null, true);
    }

    // line 25
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => true], "routeBase" => "contactfield", "langVar" => "lead.field"]);
    }

    // line 35
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "    <div class=\"panel panel-default bdr-t-wdh-0\">
        ";
            // line 38
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 39
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 39, $this->source); })()), "action" =>             // line 40
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 40, $this->source); })())]);
            // line 41
            echo "
        <div class=\"page-list\">
  ";
        }
        // line 44
        echo "
  ";
        // line 45
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 45, $this->source); })())) > 0)) {
            // line 46
            echo "      <div class=\"table-responsive\">
          <table class=\"table table-hover leadfield-list\" id=\"leadFieldTable\" class=\"overflow:auto\">
              <thead>
              <tr>
                  <th class=\"col-leadfield-orderhandle\"></th>
                  ";
            // line 51
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#leadFieldTable", "langVar" => "lead.field", "routeBase" => "contactfield", "templateButtons" => ["delete" => twig_get_attribute($this->env, $this->source,             // line 57
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 57, $this->source); })()), "lead:fields:full", [], "array", false, false, false, 57)]]);
            // line 59
            echo "
                  <th class=\"col-leadfield-label\">";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.label"), "html", null, true);
            echo "</th>
                  <th class=\"visible-md visible-lg col-leadfield-alias\">";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.alias"), "html", null, true);
            echo "</th>
                  <th class=\"visible-md visible-lg col-leadfield-group\">";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.object"), "html", null, true);
            echo "</th>
                  <th class=\"visible-md visible-lg col-leadfield-group\">";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.group"), "html", null, true);
            echo "</th>
                  <th class=\"col-leadfield-type\">";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.type"), "html", null, true);
            echo "</th>
                  <th class=\"visible-md visible-lg col-leadfield-id\">";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.id"), "html", null, true);
            echo "</th>
                  <th class=\"visible-sm visible-md visible-lg col-leadfield-statusicons\"></th>
              </tr>
              </thead>
              <tbody>
              ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 70, $this->source); })()));
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
                echo "                  <tr id=\"field_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 71), "html", null, true);
                echo "\">
                      <td><i class=\"ri-xl ri-draggable text-muted\"></i></td>
                      <td>
                          ";
                // line 74
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 75
$context["item"], "templateButtons" => ["edit" => twig_get_attribute($this->env, $this->source,                 // line 77
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 77, $this->source); })()), "lead:fields:full", [], "array", false, false, false, 77), "clone" => twig_get_attribute($this->env, $this->source,                 // line 78
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 78, $this->source); })()), "lead:fields:full", [], "array", false, false, false, 78), "delete" => ((twig_get_attribute($this->env, $this->source,                 // line 79
$context["item"], "isFixed", [], "any", false, false, false, 79)) ? (false) : (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 79, $this->source); })()), "lead:fields:full", [], "array", false, false, false, 79)))], "routeBase" => "contactfield", "langVar" => "lead.field", "pull" => "left"]);
                // line 84
                echo "
                      </td>
                      <td>
                      <span class=\"ellipsis\">
                          ";
                // line 88
                echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 89
$context["item"], "model" => "lead.field", "disableToggle" => twig_get_attribute($this->env, $this->source,                 // line 91
$context["item"], "disablePublishChange", [], "any", false, false, false, 91), "aditionalLabel" => ((twig_get_attribute($this->env, $this->source,                 // line 92
$context["item"], "columnIsNotCreated", [], "any", false, false, false, 92)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.being_created_in_background")) : (null))]);
                // line 93
                echo "
                          <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contactfield_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 94)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 94), "html", null, true);
                echo "</a>
                      </span>
                      </td>
                      <td class=\"visible-md visible-lg\">";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "alias", [], "any", false, false, false, 97), "html", null, true);
                echo "</td>
                      <td class=\"visible-md visible-lg\">";
                // line 98
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((("mautic." . twig_get_attribute($this->env, $this->source, $context["item"], "object", [], "any", false, false, false, 98)) . ".") . twig_get_attribute($this->env, $this->source, $context["item"], "object", [], "any", false, false, false, 98))), "html", null, true);
                echo "</td>
                      <td class=\"visible-md visible-lg\">";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . twig_get_attribute($this->env, $this->source, $context["item"], "group", [], "any", false, false, false, 99))), "html", null, true);
                echo "</td>
                      <td>";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorConditional(("mautic.core.type." . twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 100)), ("mautic.lead.field.type." . twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 100))), "html", null, true);
                echo "</td>
                      <td class=\"visible-md visible-lg\">";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 101), "html", null, true);
                echo "</td>
                      <td class=\"visible-sm visible-md visible-lg\">
                          ";
                // line 103
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isRequired", [], "any", false, false, false, 103)) {
                    // line 104
                    echo "                              <i class=\"fa fa-asterisk\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.required"), "html", null, true);
                    echo "\"></i>
                          ";
                }
                // line 106
                echo "                          ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isVisible", [], "any", false, false, false, 106)) {
                    // line 107
                    echo "                              <i class=\"ri-eye-line-slash\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.invisible"), "html", null, true);
                    echo "\"></i>
                          ";
                }
                // line 109
                echo "                          ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isFixed", [], "any", false, false, false, 109)) {
                    // line 110
                    echo "                              <i class=\"fa fa-lock\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.fixed"), "html", null, true);
                    echo "\"></i>
                          ";
                }
                // line 112
                echo "                          ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isListable", [], "any", false, false, false, 112)) {
                    // line 113
                    echo "                              <i class=\"fa fa-list \" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.listable"), "html", null, true);
                    echo "\"></i>
                          ";
                }
                // line 115
                echo "                          ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isPubliclyUpdatable", [], "any", false, false, false, 115)) {
                    // line 116
                    echo "                              <i class=\"ri-earth-line text-danger \" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.public"), "html", null, true);
                    echo "\"></i>
                          ";
                }
                // line 118
                echo "                          ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isUniqueIdentifer", [], "any", false, false, false, 118)) {
                    // line 119
                    echo "                              <i class=\"fa fa-key \" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.isuniqueidentifer"), "html", null, true);
                    echo "\"></i>
                          ";
                }
                // line 121
                echo "                          ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isIsIndex", [], "any", false, false, false, 121)) {
                    // line 122
                    echo "                              <i class=\"fa fa-key \" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.tooltip.isindex"), "html", null, true);
                    echo "\"></i>
                          ";
                }
                // line 124
                echo "                      </td>
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
            // line 127
            echo "              </tbody>
          </table>
      </div>
      <div class=\"panel-footer\">
          ";
            // line 131
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 132
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 132, $this->source); })()), "page" =>             // line 133
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 133, $this->source); })()), "limit" =>             // line 134
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 134, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contactfield_index"), "sessionVar" => "leadfield"]);
            // line 137
            echo "
      </div>
  ";
        } else {
            // line 140
            echo "      ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
            echo "
  ";
        }
        // line 142
        echo "
  ";
        // line 143
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 143, $this->source); })())) {
            // line 144
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
        return "@MauticLead/Field/list.html.twig";
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
        return array (  318 => 144,  316 => 143,  313 => 142,  307 => 140,  302 => 137,  300 => 134,  299 => 133,  298 => 132,  297 => 131,  291 => 127,  275 => 124,  269 => 122,  266 => 121,  260 => 119,  257 => 118,  251 => 116,  248 => 115,  242 => 113,  239 => 112,  233 => 110,  230 => 109,  224 => 107,  221 => 106,  215 => 104,  213 => 103,  208 => 101,  204 => 100,  200 => 99,  196 => 98,  192 => 97,  184 => 94,  181 => 93,  179 => 92,  178 => 91,  177 => 89,  176 => 88,  170 => 84,  168 => 79,  167 => 78,  166 => 77,  165 => 75,  164 => 74,  157 => 71,  140 => 70,  132 => 65,  128 => 64,  124 => 63,  120 => 62,  116 => 61,  112 => 60,  109 => 59,  107 => 57,  106 => 51,  99 => 46,  97 => 45,  94 => 44,  89 => 41,  87 => 40,  86 => 39,  85 => 38,  82 => 37,  79 => 36,  75 => 35,  71 => 26,  67 => 25,  60 => 23,  53 => 21,  49 => 19,  47 => 18,  45 => 17,  38 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Field/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Field\\list.html.twig");
    }
}
