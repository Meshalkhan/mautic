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

/* @MauticPlugin/Integration/grid.html.twig */
class __TwigTemplate_960555c86c26beea4bd1d3e2f2fdb993 extends Template
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
        // line 11
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 11, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticPlugin/Integration/grid.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        $context["isIndex"] = ("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 8, $this->source); })()));
        // line 9
        $context["tmpl"] = "list";
        // line 10
        $context["filterValue"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["pluginFilter"] ?? null), "id", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["pluginFilter"] ?? null), "id", [], "any", false, false, false, 10), null)) : (null));
        // line 11
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "integration";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.manage.plugins"), "html", null, true);
        yield " ";
        if ((isset($context["pluginFilter"]) || array_key_exists("pluginFilter", $context) ? $context["pluginFilter"] : (function () { throw new RuntimeError('Variable "pluginFilter" does not exist.', 16, $this->source); })())) {
            yield "- ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pluginFilter"]) || array_key_exists("pluginFilter", $context) ? $context["pluginFilter"] : (function () { throw new RuntimeError('Variable "pluginFilter" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        }
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["customButtons" => [["attr" => ["data-toggle" => "ajax", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_plugin_reload")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.reload.plugins"), "iconClass" => "fa fa-cubes", "tooltip" => "mautic.plugin.reload.plugins.tooltip"]]]);
        // line 32
        yield "
";
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
            yield "    <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
        <div class=\"panel-body\">
            <div class=\"box-layout\">
                <div class=\"row\">
                    <div class=\"col-xs-3 va-m\">
                        <select id=\"integrationFilter\" onchange=\"Mautic.filterIntegrations(true);\"
                                class=\"form-control\"
                                data-placeholder=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.filter.all"), "html", null, true);
            yield "\">
                            <option value=\"\"></option>
                             ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 46, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 47
                yield "                              <option ";
                if (((isset($context["filterValue"]) || array_key_exists("filterValue", $context) ? $context["filterValue"] : (function () { throw new RuntimeError('Variable "filterValue" does not exist.', 47, $this->source); })()) === CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "id", [], "any", false, false, false, 47))) {
                    yield "selected";
                }
                yield " value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "id", [], "any", false, false, false, 47));
                yield "\">";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 48), "html", null, true);
                // line 49
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['plugin'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"page-list\">
  ";
        }
        // line 58
        yield "
  ";
        // line 59
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 59, $this->source); })())) > 0)) {
            // line 60
            yield "      <div class=\"pa-md\">
          <div class=\"row shuffle-integrations native-integrations\">
              ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 62, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 63
                yield "                  ";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "plugin", [], "any", false, false, false, 63), Twig\Extension\CoreExtension::keys((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 63, $this->source); })())))) {
                    // line 64
                    yield "                      ";
                    $context["pluginTitle"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 64, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "plugin", [], "any", false, false, false, 64), [], "array", false, false, false, 64), "name", [], "any", false, false, false, 64) . " - ") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "display", [], "any", false, false, false, 64));
                    // line 65
                    yield "                  ";
                } else {
                    // line 66
                    yield "                      ";
                    $context["pluginTitle"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 66) . " - ") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "display", [], "any", false, false, false, 66));
                    // line 67
                    yield "                  ";
                }
                // line 68
                yield "                  <div class=\"shuffle shuffle-item grid ma-10 pull-left text-center integration plugin";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "plugin", [], "any", false, false, false, 68), "html", null, true);
                yield " integration-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 68), "html", null, true);
                yield " ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["item"], "enabled", [], "any", false, false, false, 68)) {
                    yield "integration-disabled";
                }
                yield "\">
                      <div class=\"panel ovf-h pa-10\">
                          <a href=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isBundle", [], "any", false, false, false, 70)) ? ("mautic_plugin_info") : ("mautic_plugin_config")), ["name" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 70)]), "html", null, true);
                yield "\"
                             ";
                // line 71
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isBundle", [], "any", false, false, false, 71)) {
                    yield "data-footer=\"false\"";
                }
                // line 72
                yield "                             data-prevent-dismiss=\"true\"
                             data-toggle=\"ajaxmodal\"
                             data-target=\"#IntegrationEditModal\"
                             data-header=\"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "display", [], "any", false, false, false, 75), "html", null, true);
                yield "\">
                              <p><img style=\"height: 78px;\" class=\"img img-responsive\" src=\"";
                // line 76
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 76));
                yield "\" /></p>
                              <h5 class=\"mt-20\">
                                  <span class=\"ellipsis\" data-toggle=\"tooltip\" title=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pluginTitle"]) || array_key_exists("pluginTitle", $context) ? $context["pluginTitle"] : (function () { throw new RuntimeError('Variable "pluginTitle" does not exist.', 78, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "display", [], "any", false, false, false, 78), "html", null, true);
                yield "</span>
                              </h5>
                          </a>
                      </div>
                  </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            yield "          </div>
      </div>
      ";
            // line 86
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "IntegrationEditModal", "footerButtons" => true]);
            // line 89
            yield "
  ";
        } else {
            // line 91
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["message" => "mautic.integrations.noresults", "tip" => "mautic.integration.noresults.tip"]);
            // line 94
            yield "
  ";
        }
        // line 96
        yield "
  ";
        // line 97
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 97, $this->source); })())) {
            // line 98
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
        return "@MauticPlugin/Integration/grid.html.twig";
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
        return array (  256 => 98,  254 => 97,  251 => 96,  247 => 94,  244 => 91,  240 => 89,  238 => 86,  234 => 84,  220 => 78,  215 => 76,  211 => 75,  206 => 72,  202 => 71,  198 => 70,  186 => 68,  183 => 67,  180 => 66,  177 => 65,  174 => 64,  171 => 63,  167 => 62,  163 => 60,  161 => 59,  158 => 58,  149 => 51,  142 => 49,  140 => 48,  132 => 47,  128 => 46,  123 => 44,  114 => 37,  111 => 36,  104 => 35,  98 => 32,  96 => 20,  89 => 19,  78 => 16,  71 => 15,  60 => 13,  56 => 11,  54 => 10,  52 => 9,  50 => 8,  43 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPlugin/Integration/grid.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Resources\\views\\Integration\\grid.html.twig");
    }
}
