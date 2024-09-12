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

/* @GrapesJsBuilder/Setting/fields.html.twig */
class __TwigTemplate_f38914df32e803eab9ec4fe7be8eac02 extends Template
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
        yield "<div class=\"row hide\">
    <div class=\"form-group col-xs-12 \">
        <div class=\"input-group\">
            <textarea id=\"grapesjsbuilder_customMjml\" class=\"form-control builder-mjml\" name=\"grapesjsbuilder[customMjml]\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["customMjml"]) || array_key_exists("customMjml", $context) ? $context["customMjml"] : (function () { throw new RuntimeError('Variable "customMjml" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "</textarea>
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
        return "@GrapesJsBuilder/Setting/fields.html.twig";
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
        return array (  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@GrapesJsBuilder/Setting/fields.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\GrapesJsBuilderBundle\\Resources\\views\\Setting\\fields.html.twig");
    }
}
