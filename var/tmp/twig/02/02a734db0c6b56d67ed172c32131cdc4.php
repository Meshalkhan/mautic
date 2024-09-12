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

/* @MauticCore/Update/index.html.twig */
class __TwigTemplate_19853df5f3a6101b38913cb03eb601a5 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 7
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticCore/Update/index.html.twig", 7);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "update";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.index"), "html", null, true);
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "<div class=\"panel panel-default mnb-5 bdr-t-wdh-0\">
    <div id=\"update-panel\" class=\"panel-body\">
        <div class=\"col-sm-offset-2 col-sm-8\">";
        // line 17
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["updateData"]) || array_key_exists("updateData", $context) ? $context["updateData"] : (function () { throw new RuntimeError('Variable "updateData" does not exist.', 17, $this->source); })()), "error", [], "any", false, false, false, 17) || ("mautic.core.updater.running.latest.version" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["updateData"]) || array_key_exists("updateData", $context) ? $context["updateData"] : (function () { throw new RuntimeError('Variable "updateData" does not exist.', 17, $this->source); })()), "message", [], "any", false, false, false, 17)))) {
            // line 18
            yield "              <div class=\"alert alert-info\">
                  ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["updateData"]) || array_key_exists("updateData", $context) ? $context["updateData"] : (function () { throw new RuntimeError('Variable "updateData" does not exist.', 19, $this->source); })()), "message", [], "any", false, false, false, 19)), "html", null, true);
            yield "
              </div>
              <div class=\"text-center\">
                  <a class=\"btn btn-primary\" href=\"";
            // line 22
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_index");
            yield "\" data-toggle=\"ajax\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.go_to_dashboard"), "html", null, true);
            yield "</a>
              </div>";
        } else {
            // line 25
            yield "              <div class=\"panel panel-default\">
                  <div class=\"panel-heading\">
                      <h2 class=\"panel-title\">
                          ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.available"), "html", null, true);
            yield "
                      </h2>
                      <div class=\"panel-body\">
                          <table class=\"table table-hover addon-list\" id=\"updateTable\">
                              <tbody>
                              <tr>
                                  <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.current.version"), "html", null, true);
            yield "</td>
                                  <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentVersion"]) || array_key_exists("currentVersion", $context) ? $context["currentVersion"] : (function () { throw new RuntimeError('Variable "currentVersion" does not exist.', 35, $this->source); })()), "html", null, true);
            yield "</td>
                              </tr>
                              <tr>
                                  <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.upgrade.version"), "html", null, true);
            yield "</td>
                                  <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["updateData"] ?? null), "version", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["updateData"] ?? null), "version", [], "any", false, false, false, 39), "")) : ("")), "html", null, true);
            yield "</td>
                              </tr>
                              <tr>
                                  <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.announcement"), "html", null, true);
            yield "</td>
                                  <td class=\"break-word\"><a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["updateData"] ?? null), "announcement", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["updateData"] ?? null), "announcement", [], "any", false, false, false, 43), "#")) : ("#")), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["updateData"] ?? null), "announcement", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["updateData"] ?? null), "announcement", [], "any", false, false, false, 43), "")) : ("")), "html", null, true);
            yield "</a></td>
                              </tr>
                              <tr>
                                  <td colspan=\"2\" class=\"text-center text-danger\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.backup_warning"), "html", null, true);
            yield "</td>
                              </tr>
                              </tbody>
                          </table>";
            // line 50
            if ((isset($context["isComposerEnabled"]) || array_key_exists("isComposerEnabled", $context) ? $context["isComposerEnabled"] : (function () { throw new RuntimeError('Variable "isComposerEnabled" does not exist.', 50, $this->source); })())) {
                // line 51
                yield "                          <div class=\"alert alert-warning text-center\">
                              <strong>";
                // line 52
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.composer"));
                yield "</strong>
                          </div>";
            } else {
                // line 55
                yield "                          <div class=\"alert alert-warning text-center\">
                              <strong>";
                // line 56
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.ui.deprecated"));
                yield "</strong>
                          </div>
                          <div class=\"text-right\">
                              <button class=\"btn btn-primary\" onclick=\"Mautic.processUpdate('update-panel', 1, '');\">";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.now"), "html", null, true);
                yield "</button>
                          </div>";
            }
            // line 62
            yield "                      </div>
                  </div>";
        }
        // line 65
        yield "            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Update/index.html.twig";
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
        return array (  184 => 65,  180 => 62,  175 => 59,  169 => 56,  166 => 55,  161 => 52,  158 => 51,  156 => 50,  150 => 46,  142 => 43,  138 => 42,  132 => 39,  128 => 38,  122 => 35,  118 => 34,  109 => 28,  104 => 25,  97 => 22,  91 => 19,  88 => 18,  86 => 17,  82 => 14,  75 => 13,  64 => 11,  53 => 9,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Update/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Update\\index.html.twig");
    }
}
