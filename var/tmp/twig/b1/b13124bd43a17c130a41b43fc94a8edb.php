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

/* @MauticEmail/FormTheme/EmailSendList/emailsend_list_row.html.twig */
class __TwigTemplate_a5b03168a2067ef80eaa106ae7a3fe10 extends Template
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
            'emailsend_list_row' => [$this, 'block_emailsend_list_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('emailsend_list_row', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_emailsend_list_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "  <div class=\"row\">
      <div class=\"col-xs-";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email_type", [], "any", true, true, false, 3)) {
            yield "7";
        } else {
            yield "12";
        }
        yield "\">
          ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "email", [], "any", false, false, false, 4), 'row');
        yield "
      </div>
      ";
        // line 6
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email_type", [], "any", true, true, false, 6)) {
            // line 7
            yield "          <div class=\"col-xs-5\">
              ";
            // line 8
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "email_type", [], "any", false, false, false, 8), 'row');
            yield "
          </div>
      ";
        }
        // line 11
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "priority", [], "any", true, true, false, 11)) {
            // line 12
            yield "          <div id=\"priority\" class=\"col-xs-5 queue_hide\">
              ";
            // line 13
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "priority", [], "any", false, false, false, 13), 'row');
            yield "
          </div>
      ";
        }
        // line 16
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "attempts", [], "any", true, true, false, 16)) {
            // line 17
            yield "          <div id=\"attempts\" class=\"col-xs-5 queue_hide\">
              ";
            // line 18
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "attempts", [], "any", false, false, false, 18), 'row');
            yield "
          </div>
      ";
        }
        // line 21
        yield "  </div>
  <div class=\"row\">
      <div class=\"col-xs-12 mt-lg\">
          <div class=\"mt-3\">
              ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "newEmailButton", [], "any", false, false, false, 25), 'row');
        yield "
              ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "editEmailButton", [], "any", false, false, false, 26), 'row');
        yield "
              ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "previewEmailButton", [], "any", false, false, false, 27), 'row');
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
        return "@MauticEmail/FormTheme/EmailSendList/emailsend_list_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  119 => 27,  115 => 26,  111 => 25,  105 => 21,  99 => 18,  96 => 17,  93 => 16,  87 => 13,  84 => 12,  81 => 11,  75 => 8,  72 => 7,  70 => 6,  65 => 4,  57 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/FormTheme/EmailSendList/emailsend_list_row.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\FormTheme\\EmailSendList\\emailsend_list_row.html.twig");
    }
}
