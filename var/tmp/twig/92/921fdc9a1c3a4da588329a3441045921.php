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

/* @MauticCore/Notification/notification.html.twig */
class __TwigTemplate_e7b92a9b2501092792d67a4102b599db extends Template
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
        yield "<div class=\"media pt-sm pb-sm pr-md pl-md nm bdr-b notification\" id=\"notification";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        yield "\">
    <span class=\"pull-left mt-xs\" style=\"width:36px\">
        ";
        // line 3
        if ((is_string($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 3, $this->source); })()), "iconClass", [], "any", false, false, false, 3)) && is_string($__internal_compile_1 = "img:") && str_starts_with($__internal_compile_0, $__internal_compile_1))) {
            // line 4
            yield "        <span class=\"img-wrapper img-rounded\">
            <img class=\"media-object\" src=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 5, $this->source); })()), "iconClass", [], "any", false, false, false, 5), 4), "html", null, true);
            yield "\" />
        </span>
        ";
        } else {
            // line 8
            yield "        ";
            $context["tooltip"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8)) ? (" data-toggle=\"tooltip\" title=\"{% trans %}mautic.notifications.type.{{ n.type }}{% endtrans %}") : (""));
            // line 9
            yield "        <i class=\"fa fa-2x ";
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 9, $this->source); })()), "iconClass", [], "any", false, false, false, 9)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 9, $this->source); })()), "iconClass", [], "any", false, false, false, 9), "html", null, true)) : (yield "fa-star"));
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 9, $this->source); })()), "html", null, true);
            yield "></i>
        ";
        }
        // line 11
        yield "    </span>
    <a href=\"javascript:void(0);\" class=\"btn btn-default btn-xs btn-nospin pull-right do-not-close\" data-toggle=\"tooltip\" title=\"";
        // line 12
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.notifications.clear", [], "messages");
        yield "\" onclick=\"Mautic.clearNotification(";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield ");\"><i class=\"ri-close-line do-not-close\"></i></a>
    ";
        // line 13
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 13, $this->source); })()), "isRead", [], "any", false, false, false, 13)) {
            // line 14
            yield "        <span class=\"pull-right is-unread text-danger\"><i class=\"fa fa-asterisk\"></i></span>
    ";
        }
        // line 16
        yield "    <div class=\"media-body notification\">
        ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 17, $this->source); })()), "header", [], "any", false, false, false, 17)) {
            // line 18
            yield "            <div class=\"media-heading fw-sb mb-0 text-primary\">";
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_(CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 18, $this->source); })()), "header", [], "any", false, false, false, 18));
            yield "</div>
        ";
        }
        // line 20
        yield "        <div>";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_(CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 20, $this->source); })()), "message", [], "any", false, false, false, 20), "html");
        yield "</div>
        <div class=\"clearfix mt-xs\">
            <span class=\"ri-time-line text-success pull-left mr-xs notification-timer-icon\"></span>
            <span class=\"fs-10 text-muted pull-left\">";
        // line 23
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 23, $this->source); })()), "dateAdded", [], "any", false, false, false, 23));
        yield "</span>
        </div>
    </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Notification/notification.html.twig";
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
        return array (  103 => 23,  96 => 20,  90 => 18,  88 => 17,  85 => 16,  81 => 14,  79 => 13,  73 => 12,  70 => 11,  62 => 9,  59 => 8,  53 => 5,  50 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Notification/notification.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Notification\\notification.html.twig");
    }
}
