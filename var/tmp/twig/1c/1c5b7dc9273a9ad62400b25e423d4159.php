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

/* @MauticLead/Lead/lead_stats.html.twig */
class __TwigTemplate_26bbb8a42dbb4b53ecc96575ccb97b5b extends Template
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
        if (array_key_exists("emailStats", $context)) {
            // line 2
            yield "<div class=\"lead-stats-title\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.stats.email_title"), "html", null, true);
            yield "</div>
<div class=\"lead-stats\">
    <div class=\"lead-stats-el\">
        <span class=\"lead-stats-name\">";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.stats.sent_count"), "html", null, true);
            yield "</span>
        <span class=\"lead-stats-val\">";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["emailStats"]) || array_key_exists("emailStats", $context) ? $context["emailStats"] : (function () { throw new RuntimeError('Variable "emailStats" does not exist.', 6, $this->source); })()), "sent_count", [], "array", false, false, false, 6), "html", null, true);
            yield "</span>
    </div>
    <div>
        <span class=\"lead-stats-name\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.stats.open_rate"), "html", null, true);
            yield "</span>
        <span class=\"lead-stats-val\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["emailStats"]) || array_key_exists("emailStats", $context) ? $context["emailStats"] : (function () { throw new RuntimeError('Variable "emailStats" does not exist.', 10, $this->source); })()), "open_rate", [], "array", false, false, false, 10) * 100), "html", null, true);
            yield "%</span>
    </div>
    <div>
        <span class=\"lead-stats-name\">";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.stats.click_through_rate"), "html", null, true);
            yield "</span>
        <span class=\"lead-stats-val\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["emailStats"]) || array_key_exists("emailStats", $context) ? $context["emailStats"] : (function () { throw new RuntimeError('Variable "emailStats" does not exist.', 14, $this->source); })()), "click_through_rate", [], "array", false, false, false, 14) * 100), "html", null, true);
            yield "%</span>
    </div>
    <div>
        <span class=\"lead-stats-name\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.stats.click_through_open_rate"), "html", null, true);
            yield "</span>
        <span class=\"lead-stats-val\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["emailStats"]) || array_key_exists("emailStats", $context) ? $context["emailStats"] : (function () { throw new RuntimeError('Variable "emailStats" does not exist.', 18, $this->source); })()), "click_through_open_rate", [], "array", false, false, false, 18) * 100), "html", null, true);
            yield "%</span>
    </div>
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
        return "@MauticLead/Lead/lead_stats.html.twig";
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
        return array (  85 => 18,  81 => 17,  75 => 14,  71 => 13,  65 => 10,  61 => 9,  55 => 6,  51 => 5,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/lead_stats.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\lead_stats.html.twig");
    }
}
