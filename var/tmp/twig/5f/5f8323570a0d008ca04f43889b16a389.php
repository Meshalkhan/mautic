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

/* @MauticLead/Lead/list.html.twig */
class __TwigTemplate_3134879c117b13cf523271f4119cc4fd extends Template
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
        // line 7
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 7, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticLead/Lead/list.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 5, $this->source); })()))) ? (true) : (false));
        // line 6
        $context["tmpl"] = "list";
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "lead";
    }

    // line 10
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
    }

    // line 12
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "  ";
        $context["pageButtons"] = [];
        // line 14
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 14, $this->source); })()), "lead:leads:create", [], "array", false, false, false, 14)) {
            // line 15
            echo "      ";
            $context["pageButtons"] = twig_array_merge((isset($context["pageButtons"]) || array_key_exists("pageButtons", $context) ? $context["pageButtons"] : (function () { throw new RuntimeError('Variable "pageButtons" does not exist.', 15, $this->source); })()), [["attr" => ["class" => "btn btn-default btn-nospin quickadd", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "quickAdd"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.menu.quickadd")], "iconClass" => "ri-flashlight-line", "btnText" => "mautic.lead.lead.menu.quickadd", "primary" => true]]);
            // line 27
            echo "
      ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 28, $this->source); })()), "lead:imports:create", [], "array", false, false, false, 28)) {
                // line 29
                echo "          ";
                $context["pageButtons"] = twig_array_merge((isset($context["pageButtons"]) || array_key_exists("pageButtons", $context) ? $context["pageButtons"] : (function () { throw new RuntimeError('Variable "pageButtons" does not exist.', 29, $this->source); })()), [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_action", ["object" => "contacts", "objectAction" => "new"])], "iconClass" => "ri-import-line", "btnText" => "mautic.lead.lead.import"]]);
                // line 36
                echo "      ";
            }
            // line 37
            echo "
      ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 38, $this->source); })()), "lead:imports:view", [], "array", false, false, false, 38)) {
                // line 39
                echo "          ";
                $context["pageButtons"] = twig_array_merge((isset($context["pageButtons"]) || array_key_exists("pageButtons", $context) ? $context["pageButtons"] : (function () { throw new RuntimeError('Variable "pageButtons" does not exist.', 39, $this->source); })()), [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_index", ["object" => "contacts"])], "iconClass" => "ri-history-line", "btnText" => "mautic.lead.lead.import.index"]]);
                // line 46
                echo "      ";
            }
            // line 47
            echo "  ";
        }
        // line 48
        echo "
  ";
        // line 50
        echo "  ";
        ob_start(function () { return ''; });
        // line 51
        echo "  <div class=\"btn-group ml-5 sr-only \">
      <span data-toggle=\"tooltip\" title=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.tooltip.list"), "html", null, true);
        echo "\" data-placement=\"left\">
        <a id=\"table-view\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 53, $this->source); })()), "view" => "list"]), "html", null, true);
        echo "\" data-toggle=\"ajax\" class=\"btn btn-default\">
            <i class=\"fa fa-fw fa-table\"></i>
        </a>
      </span>
      <span data-toggle=\"tooltip\" title=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.tooltip.grid"), "html", null, true);
        echo "\" data-placement=\"left\">
        <a id=\"card-view\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 58, $this->source); })()), "view" => "grid"]), "html", null, true);
        echo "\" data-toggle=\"ajax\" class=\"btn btn-default\">
          <i class=\"fa fa-fw fa-th-large\"></i>
        </a>
      </span>
  </div>
  ";
        $context["extraHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        echo "
  ";
        // line 65
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 66
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 66, $this->source); })()), "lead:leads:create", [], "array", false, false, false, 66)], "routeBase" => "contact", "langVar" => "lead.lead", "customButtons" =>         // line 69
(isset($context["pageButtons"]) || array_key_exists("pageButtons", $context) ? $context["pageButtons"] : (function () { throw new RuntimeError('Variable "pageButtons" does not exist.', 69, $this->source); })()), "extraHtml" =>         // line 70
(isset($context["extraHtml"]) || array_key_exists("extraHtml", $context) ? $context["extraHtml"] : (function () { throw new RuntimeError('Variable "extraHtml" does not exist.', 70, $this->source); })())]);
        // line 71
        echo "
";
    }

    // line 74
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "  ";
        echo twig_include($this->env, $context, "@MauticLead/Lead/_filter.html.twig");
        echo "
  ";
        // line 76
        echo twig_include($this->env, $context, "@MauticLead/Lead/_list.html.twig");
        echo "

  ";
        // line 78
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 78, $this->source); })())) {
            // line 79
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
        return "@MauticLead/Lead/list.html.twig";
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
        return array (  167 => 79,  165 => 78,  160 => 76,  155 => 75,  151 => 74,  146 => 71,  144 => 70,  143 => 69,  142 => 66,  141 => 65,  138 => 64,  129 => 58,  125 => 57,  118 => 53,  114 => 52,  111 => 51,  108 => 50,  105 => 48,  102 => 47,  99 => 46,  96 => 39,  94 => 38,  91 => 37,  88 => 36,  85 => 29,  83 => 28,  80 => 27,  77 => 15,  74 => 14,  71 => 13,  67 => 12,  60 => 10,  53 => 9,  49 => 7,  47 => 6,  45 => 5,  38 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Lead/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\list.html.twig");
    }
}
