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

/* @MauticDashboard/Widget/detail.html.twig */
class __TwigTemplate_ccaf7857a46e0b2d338c72ec7030223e extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"card\" style=\"height: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "height", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "height", [], "any", false, false, false, 1), "310")) : ("310")) - 10), "html", null, true);
        yield "px;\">
    <div class=\"card-header\">
        <h4>";
        // line 3
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3));
        yield "</h4>
        ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)) {
            // line 5
            yield "            <div class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"ri-more-2-fill\"></i>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                    <li>
                        <a  href=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_dashboard_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
            yield "\"
                            data-toggle=\"ajaxmodal\"
                            data-target=\"#MauticSharedModal\"
                            data-header=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.header.edit"), "html", null, true);
            yield "\">
                            <i class=\"ri-edit-line\"></i> Edit
                        </a>
                    </li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li  class=\"dropdown-header\">
                        ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.load.time", ["%time%" => Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 20, $this->source); })()), "loadTime", [], "any", false, false, false, 20) * 1000), 1)]), "html", null, true);
            yield "
                    </li>
                    <li  class=\"dropdown-header\">
                        ";
            // line 23
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 23, $this->source); })()), "isCached", [], "any", false, false, false, 23)) {
                // line 24
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.data.loaded.from.cache"), "html", null, true);
                yield "
                        ";
            } else {
                // line 26
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.data.loaded.from.database"), "html", null, true);
                yield "
                        ";
            }
            // line 28
            yield "                    </li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li>
                        <a  href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_dashboard_action", ["objectAction" => "delete", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\"
                            data-header=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.header.delete"), "html", null, true);
            yield "\"
                            class=\"remove-widget\">
                            <i class=\"ri-close-line\"></i> Remove
                        </a>
                    </li>
                </ul>
            </div>
        ";
        }
        // line 40
        yield "    </div>
    <div class=\"card-body\">
        ";
        // line 42
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 42, $this->source); })()), "errorMessage", [], "any", false, false, false, 42)) {
            // line 43
            yield "            <div class=\"alert alert-danger\" role=\"alert\">
                ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 44, $this->source); })()), "errorMessage", [], "any", false, false, false, 44)), "html", null, true);
            yield "
            </div>
        ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 46
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 46, $this->source); })()), "template", [], "any", false, false, false, 46)) {
            // line 47
            yield "            <!-- start: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 47, $this->source); })()), "template", [], "any", false, false, false, 47), "html", null, true);
            yield " -->
            ";
            // line 48
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 48, $this->source); })()), "template", [], "any", false, false, false, 48), CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 48, $this->source); })()), "templateData", [], "any", false, false, false, 48));
            yield "
            <!-- end: ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 49, $this->source); })()), "template", [], "any", false, false, false, 49), "html", null, true);
            yield " -->
        ";
        }
        // line 51
        yield "    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticDashboard/Widget/detail.html.twig";
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
        return array (  147 => 51,  142 => 49,  138 => 48,  133 => 47,  131 => 46,  126 => 44,  123 => 43,  121 => 42,  117 => 40,  106 => 32,  102 => 31,  97 => 28,  91 => 26,  85 => 24,  83 => 23,  77 => 20,  68 => 14,  62 => 11,  54 => 5,  52 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDashboard/Widget/detail.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DashboardBundle\\Resources\\views\\Widget\\detail.html.twig");
    }
}
