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

/* @MauticCore/Update/index.html.twig */
class __TwigTemplate_213dbad3045fa8543a6518f82320cbfc extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticCore/Update/index.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "update";
    }

    // line 11
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.index"), "html", null, true);
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "<div class=\"panel panel-default mnb-5 bdr-t-wdh-0\">
    <div id=\"update-panel\" class=\"panel-body\">
        <div class=\"col-sm-offset-2 col-sm-8\">";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, (isset($context["updateData"]) || array_key_exists("updateData", $context) ? $context["updateData"] : (function () { throw new RuntimeError('Variable "updateData" does not exist.', 17, $this->source); })()), "error", [], "any", false, false, false, 17) || ("mautic.core.updater.running.latest.version" == twig_get_attribute($this->env, $this->source, (isset($context["updateData"]) || array_key_exists("updateData", $context) ? $context["updateData"] : (function () { throw new RuntimeError('Variable "updateData" does not exist.', 17, $this->source); })()), "message", [], "any", false, false, false, 17)))) {
            // line 18
            echo "              <div class=\"alert alert-info\">
                  ";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["updateData"]) || array_key_exists("updateData", $context) ? $context["updateData"] : (function () { throw new RuntimeError('Variable "updateData" does not exist.', 19, $this->source); })()), "message", [], "any", false, false, false, 19)), "html", null, true);
            echo "
              </div>
              <div class=\"text-center\">
                  <a class=\"btn btn-primary\" href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_index");
            echo "\" data-toggle=\"ajax\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.go_to_dashboard"), "html", null, true);
            echo "</a>
              </div>";
        } else {
            // line 25
            echo "              <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                      <h2 class=\"panel-title\">
                          ";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.available"), "html", null, true);
            echo "
                      </h2>
                      <div class=\"panel-body\">
                          <table class=\"table table-hover addon-list\" id=\"updateTable\">
                              <tbody>
                              <tr>
                                  <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.current.version"), "html", null, true);
            echo "</td>
                                  <td>";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["currentVersion"]) || array_key_exists("currentVersion", $context) ? $context["currentVersion"] : (function () { throw new RuntimeError('Variable "currentVersion" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "</td>
                              </tr>
                              <tr>
                                  <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.upgrade.version"), "html", null, true);
            echo "</td>
                                  <td>";
            // line 39
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["updateData"] ?? null), "version", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["updateData"] ?? null), "version", [], "any", false, false, false, 39), "")) : ("")), "html", null, true);
            echo "</td>
                              </tr>
                              <tr>
                                  <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.announcement"), "html", null, true);
            echo "</td>
                                  <td class=\"break-word\"><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["updateData"] ?? null), "announcement", [], "any", true, true, false, 43)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["updateData"] ?? null), "announcement", [], "any", false, false, false, 43), "#")) : ("#")), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["updateData"] ?? null), "announcement", [], "any", true, true, false, 43)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["updateData"] ?? null), "announcement", [], "any", false, false, false, 43), "")) : ("")), "html", null, true);
            echo "</a></td>
                              </tr>
                              <tr>
                                  <td colspan=\"2\" class=\"text-center text-danger\">";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.backup_warning"), "html", null, true);
            echo "</td>
                              </tr>
                              </tbody>
                          </table>";
            // line 50
            if ((isset($context["isComposerEnabled"]) || array_key_exists("isComposerEnabled", $context) ? $context["isComposerEnabled"] : (function () { throw new RuntimeError('Variable "isComposerEnabled" does not exist.', 50, $this->source); })())) {
                // line 51
                echo "                          <div class=\"alert alert-warning text-center\">
                              <strong>";
                // line 52
                echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.composer"));
                echo "</strong>
                          </div>";
            } else {
                // line 55
                echo "                          <div class=\"alert alert-warning text-center\">
                              <strong>";
                // line 56
                echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.ui.deprecated"));
                echo "</strong>
                          </div>
                          <div class=\"text-right\">
                              <button class=\"btn btn-primary\" onclick=\"Mautic.processUpdate('update-panel', 1, '');\">";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.now"), "html", null, true);
                echo "</button>
                          </div>";
            }
            // line 62
            echo "                      </div>
                  </div>";
        }
        // line 65
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Update/index.html.twig";
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
        return array (  168 => 65,  164 => 62,  159 => 59,  153 => 56,  150 => 55,  145 => 52,  142 => 51,  140 => 50,  134 => 46,  126 => 43,  122 => 42,  116 => 39,  112 => 38,  106 => 35,  102 => 34,  93 => 28,  88 => 25,  81 => 22,  75 => 19,  72 => 18,  70 => 17,  66 => 14,  62 => 13,  55 => 11,  48 => 9,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Update/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Update\\index.html.twig");
    }
}
