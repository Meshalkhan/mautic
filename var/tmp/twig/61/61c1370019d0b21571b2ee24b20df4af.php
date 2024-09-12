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

/* @MauticDynamicContent/FormTheme/DynamicContentDecisionList/_dynamiccontentdecision_list_row.html.twig */
class __TwigTemplate_73460fda3d720b8c5fe652acfb82d059 extends Template
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
            '_dynamiccontentdecision_list_row' => [$this, 'block__dynamiccontentdecision_list_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_dynamiccontentdecision_list_row', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__dynamiccontentdecision_list_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "  <div class=\"row\">
      <div class=\"col-xs-8\">
          ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "dynamicContent", [], "any", false, false, false, 4), 'row');
        yield "
      </div>
      <div class=\"col-xs-4 mt-lg\">
          <div class=\"mt-3\">
              ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "newDynamicContentButton", [], "any", false, false, false, 8), 'row');
        yield "
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
        return "@MauticDynamicContent/FormTheme/DynamicContentDecisionList/_dynamiccontentdecision_list_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  65 => 8,  58 => 4,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDynamicContent/FormTheme/DynamicContentDecisionList/_dynamiccontentdecision_list_row.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DynamicContentBundle\\Resources\\views\\FormTheme\\DynamicContentDecisionList\\_dynamiccontentdecision_list_row.html.twig");
    }
}
