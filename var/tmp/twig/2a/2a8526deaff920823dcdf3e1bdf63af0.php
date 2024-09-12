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

/* @MauticLead/Lead/list.html.twig */
class __TwigTemplate_54e3efa98083d45d98fa55f241d426b5 extends Template
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
        // line 7
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 7, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticLead/Lead/list.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 5, $this->source); })()))) ? (true) : (false));
        // line 6
        $context["tmpl"] = "list";
        // line 7
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "lead";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "  ";
        $context["pageButtons"] = [];
        // line 14
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 14, $this->source); })()), "lead:leads:create", [], "array", false, false, false, 14)) {
            // line 15
            yield "      ";
            $context["pageButtons"] = Twig\Extension\CoreExtension::merge((isset($context["pageButtons"]) || array_key_exists("pageButtons", $context) ? $context["pageButtons"] : (function () { throw new RuntimeError('Variable "pageButtons" does not exist.', 15, $this->source); })()), [["attr" => ["class" => "btn btn-default btn-nospin quickadd", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "quickAdd"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.menu.quickadd")], "iconClass" => "ri-flashlight-line", "btnText" => "mautic.lead.lead.menu.quickadd", "primary" => true]]);
            // line 27
            yield "
      ";
            // line 28
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 28, $this->source); })()), "lead:imports:create", [], "array", false, false, false, 28)) {
                // line 29
                yield "          ";
                $context["pageButtons"] = Twig\Extension\CoreExtension::merge((isset($context["pageButtons"]) || array_key_exists("pageButtons", $context) ? $context["pageButtons"] : (function () { throw new RuntimeError('Variable "pageButtons" does not exist.', 29, $this->source); })()), [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_action", ["object" => "contacts", "objectAction" => "new"])], "iconClass" => "ri-import-line", "btnText" => "mautic.lead.lead.import"]]);
                // line 36
                yield "      ";
            }
            // line 37
            yield "
      ";
            // line 38
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 38, $this->source); })()), "lead:imports:view", [], "array", false, false, false, 38)) {
                // line 39
                yield "          ";
                $context["pageButtons"] = Twig\Extension\CoreExtension::merge((isset($context["pageButtons"]) || array_key_exists("pageButtons", $context) ? $context["pageButtons"] : (function () { throw new RuntimeError('Variable "pageButtons" does not exist.', 39, $this->source); })()), [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_index", ["object" => "contacts"])], "iconClass" => "ri-history-line", "btnText" => "mautic.lead.lead.import.index"]]);
                // line 46
                yield "      ";
            }
            // line 47
            yield "  ";
        }
        // line 48
        yield "
  ";
        // line 50
        yield "  ";
        $context["extraHtml"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 51
            yield "  <div class=\"btn-group ml-5 sr-only \">
      <span data-toggle=\"tooltip\" title=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.tooltip.list"), "html", null, true);
            yield "\" data-placement=\"left\">
        <a id=\"table-view\" href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 53, $this->source); })()), "view" => "list"]), "html", null, true);
            yield "\" data-toggle=\"ajax\" class=\"btn btn-default\">
            <i class=\"fa fa-fw fa-table\"></i>
        </a>
      </span>
      <span data-toggle=\"tooltip\" title=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.tooltip.grid"), "html", null, true);
            yield "\" data-placement=\"left\">
        <a id=\"card-view\" href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 58, $this->source); })()), "view" => "grid"]), "html", null, true);
            yield "\" data-toggle=\"ajax\" class=\"btn btn-default\">
          <i class=\"fa fa-fw fa-th-large\"></i>
        </a>
      </span>
  </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "
  ";
        // line 65
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,         // line 66
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 66, $this->source); })()), "lead:leads:create", [], "array", false, false, false, 66)], "routeBase" => "contact", "langVar" => "lead.lead", "customButtons" =>         // line 69
(isset($context["pageButtons"]) || array_key_exists("pageButtons", $context) ? $context["pageButtons"] : (function () { throw new RuntimeError('Variable "pageButtons" does not exist.', 69, $this->source); })()), "extraHtml" =>         // line 70
(isset($context["extraHtml"]) || array_key_exists("extraHtml", $context) ? $context["extraHtml"] : (function () { throw new RuntimeError('Variable "extraHtml" does not exist.', 70, $this->source); })())]);
        // line 71
        yield "
";
        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 75
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Lead/_filter.html.twig");
        yield "
  ";
        // line 76
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Lead/_list.html.twig");
        yield "

  ";
        // line 78
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 78, $this->source); })())) {
            // line 79
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
        return "@MauticLead/Lead/list.html.twig";
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
        return array (  188 => 79,  186 => 78,  181 => 76,  176 => 75,  169 => 74,  163 => 71,  161 => 70,  160 => 69,  159 => 66,  158 => 65,  155 => 64,  145 => 58,  141 => 57,  134 => 53,  130 => 52,  127 => 51,  124 => 50,  121 => 48,  118 => 47,  115 => 46,  112 => 39,  110 => 38,  107 => 37,  104 => 36,  101 => 29,  99 => 28,  96 => 27,  93 => 15,  90 => 14,  87 => 13,  80 => 12,  69 => 10,  58 => 9,  54 => 7,  52 => 6,  50 => 5,  43 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\list.html.twig");
    }
}
