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

/* @MauticLead/Lead/merge.html.twig */
class __TwigTemplate_2070c9246851b0cb9eee3cc169c0d15e extends Template
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
        // line 9
        if (("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "<div class=\"lead-merge-form\">
    ";
            // line 11
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/search.html.twig", ["searchId" => ((            // line 12
array_key_exists("searchId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchId"]) || array_key_exists("searchId", $context) ? $context["searchId"] : (function () { throw new RuntimeError('Variable "searchId" does not exist.', 12, $this->source); })()), null)) : (null)), "searchValue" =>             // line 13
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 13, $this->source); })()), "action" =>             // line 14
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 14, $this->source); })()), "searchHelp" => false, "target" => ".lead-merge-options", "tmpl" => "update"]);
            // line 18
            yield "
    <div class=\"lead-merge-options mt-sm\">
";
        }
        // line 21
        yield "
        ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        yield "

        <div class=\"hide\">
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "buttons", [], "any", false, false, false, 25), 'row');
        yield "
        </div>

        ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
        yield "

";
        // line 30
        if (("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 30, $this->source); })()))) {
            // line 31
            yield "    </div>
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
        return "@MauticLead/Lead/merge.html.twig";
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
        return array (  79 => 31,  77 => 30,  72 => 28,  66 => 25,  60 => 22,  57 => 21,  52 => 18,  50 => 14,  49 => 13,  48 => 12,  47 => 11,  44 => 10,  42 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/merge.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\merge.html.twig");
    }
}
