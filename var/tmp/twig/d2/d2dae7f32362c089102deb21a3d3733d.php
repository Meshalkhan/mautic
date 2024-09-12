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

/* @MauticPlugin/Integration/grid.html.twig */
class __TwigTemplate_205b260bfad2d93b54f0fc3401b733fb extends Template
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
        // line 11
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 11, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticPlugin/Integration/grid.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $context["isIndex"] = ("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 8, $this->source); })()));
        // line 9
        $context["tmpl"] = "list";
        // line 10
        $context["filterValue"] = ((twig_get_attribute($this->env, $this->source, ($context["pluginFilter"] ?? null), "id", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["pluginFilter"] ?? null), "id", [], "any", false, false, false, 10), null)) : (null));
        // line 11
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "integration";
    }

    // line 15
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "  ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.manage.plugins"), "html", null, true);
        echo " ";
        if ((isset($context["pluginFilter"]) || array_key_exists("pluginFilter", $context) ? $context["pluginFilter"] : (function () { throw new RuntimeError('Variable "pluginFilter" does not exist.', 16, $this->source); })())) {
            echo "- ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pluginFilter"]) || array_key_exists("pluginFilter", $context) ? $context["pluginFilter"] : (function () { throw new RuntimeError('Variable "pluginFilter" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        }
    }

    // line 19
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["customButtons" => [["attr" => ["data-toggle" => "ajax", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_plugin_reload")], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.reload.plugins"), "iconClass" => "fa fa-cubes", "tooltip" => "mautic.plugin.reload.plugins.tooltip"]]]);
        // line 32
        echo "
";
    }

    // line 35
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "    <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
        <div class=\"panel-body\">
            <div class=\"box-layout\">
                <div class=\"row\">
                    <div class=\"col-xs-3 va-m\">
                        <select id=\"integrationFilter\" onchange=\"Mautic.filterIntegrations(true);\"
                                class=\"form-control\"
                                data-placeholder=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.filter.all"), "html", null, true);
            echo "\">
                            <option value=\"\"></option>
                             ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 46, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 47
                echo "                              <option ";
                if (((isset($context["filterValue"]) || array_key_exists("filterValue", $context) ? $context["filterValue"] : (function () { throw new RuntimeError('Variable "filterValue" does not exist.', 47, $this->source); })()) === twig_get_attribute($this->env, $this->source, $context["plugin"], "id", [], "any", false, false, false, 47))) {
                    echo "selected";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "id", [], "any", false, false, false, 47));
                echo "\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 48), "html", null, true);
                // line 49
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"page-list\">
  ";
        }
        // line 58
        echo "
  ";
        // line 59
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 59, $this->source); })())) > 0)) {
            // line 60
            echo "      <div class=\"pa-md\">
          <div class=\"row shuffle-integrations native-integrations\">
              ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 62, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 63
                echo "                  ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "plugin", [], "any", false, false, false, 63), twig_get_array_keys_filter((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 63, $this->source); })())))) {
                    // line 64
                    echo "                      ";
                    $context["pluginTitle"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 64, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "plugin", [], "any", false, false, false, 64), [], "array", false, false, false, 64), "name", [], "any", false, false, false, 64) . " - ") . twig_get_attribute($this->env, $this->source, $context["item"], "display", [], "any", false, false, false, 64));
                    // line 65
                    echo "                  ";
                } else {
                    // line 66
                    echo "                      ";
                    $context["pluginTitle"] = ((twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 66) . " - ") . twig_get_attribute($this->env, $this->source, $context["item"], "display", [], "any", false, false, false, 66));
                    // line 67
                    echo "                  ";
                }
                // line 68
                echo "                  <div class=\"shuffle shuffle-item grid ma-10 pull-left text-center integration plugin";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "plugin", [], "any", false, false, false, 68), "html", null, true);
                echo " integration-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 68), "html", null, true);
                echo " ";
                if ( !twig_get_attribute($this->env, $this->source, $context["item"], "enabled", [], "any", false, false, false, 68)) {
                    echo "integration-disabled";
                }
                echo "\">
                      <div class=\"panel ovf-h pa-10\">
                          <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((twig_get_attribute($this->env, $this->source, $context["item"], "isBundle", [], "any", false, false, false, 70)) ? ("mautic_plugin_info") : ("mautic_plugin_config")), ["name" => twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\"
                             ";
                // line 71
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isBundle", [], "any", false, false, false, 71)) {
                    echo "data-footer=\"false\"";
                }
                // line 72
                echo "                             data-prevent-dismiss=\"true\"
                             data-toggle=\"ajaxmodal\"
                             data-target=\"#IntegrationEditModal\"
                             data-header=\"";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "display", [], "any", false, false, false, 75), "html", null, true);
                echo "\">
                              <p><img style=\"height: 78px;\" class=\"img img-responsive\" src=\"";
                // line 76
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 76));
                echo "\" /></p>
                              <h5 class=\"mt-20\">
                                  <span class=\"ellipsis\" data-toggle=\"tooltip\" title=\"";
                // line 78
                echo twig_escape_filter($this->env, (isset($context["pluginTitle"]) || array_key_exists("pluginTitle", $context) ? $context["pluginTitle"] : (function () { throw new RuntimeError('Variable "pluginTitle" does not exist.', 78, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "display", [], "any", false, false, false, 78), "html", null, true);
                echo "</span>
                              </h5>
                          </a>
                      </div>
                  </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "          </div>
      </div>
      ";
            // line 86
            echo twig_include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "IntegrationEditModal", "footerButtons" => true]);
            // line 89
            echo "
  ";
        } else {
            // line 91
            echo "      ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["message" => "mautic.integrations.noresults", "tip" => "mautic.integration.noresults.tip"]);
            // line 94
            echo "
  ";
        }
        // line 96
        echo "
  ";
        // line 97
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 97, $this->source); })())) {
            // line 98
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
        return "@MauticPlugin/Integration/grid.html.twig";
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
        return array (  236 => 98,  234 => 97,  231 => 96,  227 => 94,  224 => 91,  220 => 89,  218 => 86,  214 => 84,  200 => 78,  195 => 76,  191 => 75,  186 => 72,  182 => 71,  178 => 70,  166 => 68,  163 => 67,  160 => 66,  157 => 65,  154 => 64,  151 => 63,  147 => 62,  143 => 60,  141 => 59,  138 => 58,  129 => 51,  122 => 49,  120 => 48,  112 => 47,  108 => 46,  103 => 44,  94 => 37,  91 => 36,  87 => 35,  82 => 32,  80 => 20,  76 => 19,  66 => 16,  62 => 15,  55 => 13,  51 => 11,  49 => 10,  47 => 9,  45 => 8,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPlugin/Integration/grid.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Resources\\views\\Integration\\grid.html.twig");
    }
}
