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

/* @MauticCore/Helper/publishstatus_badge.html.twig */
class __TwigTemplate_366953ee9fc6501cf1f5045245e90d23 extends Template
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
        $context["labelColor"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 2, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 2) === "published")) {
                // line 3
                yield "success";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source,             // line 4
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 4, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 4) === "unpublished") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 4, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 4) === "expired"))) {
                // line 5
                yield "danger";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 6
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 6) === "pending")) {
                // line 7
                yield "warning";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 11) === "published")) {
                // line 12
                yield "check";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source,             // line 13
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 13) === "unpublished") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 13) === "expired"))) {
                // line 14
                yield "close";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 15
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 15) === "pending")) {
                // line 16
                yield "more";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        $context["labelText"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.core.form." . (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "getPublishStatus", [], "method", false, false, false, 19) == "published")) ? ("active") : ("inactive"))));
        // line 20
        yield "<span title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["labelText"]) || array_key_exists("labelText", $context) ? $context["labelText"] : (function () { throw new RuntimeError('Variable "labelText" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["labelText"]) || array_key_exists("labelText", $context) ? $context["labelText"] : (function () { throw new RuntimeError('Variable "labelText" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "\" class=\"bg-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["labelColor"]) || array_key_exists("labelColor", $context) ? $context["labelColor"] : (function () { throw new RuntimeError('Variable "labelColor" does not exist.', 20, $this->source); })()), "html", null, true);
        yield " mt-sm publishstatus_pulse\"> </span>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/publishstatus_badge.html.twig";
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
        return array (  78 => 20,  76 => 19,  71 => 16,  69 => 15,  67 => 14,  65 => 13,  63 => 12,  61 => 11,  59 => 10,  54 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/publishstatus_badge.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\publishstatus_badge.html.twig");
    }
}
