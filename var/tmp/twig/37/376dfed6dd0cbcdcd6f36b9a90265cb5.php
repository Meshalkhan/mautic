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

/* @bundles/CoreBundle/Assets/css/libraries/font-awesome/less/larger.less */
class __TwigTemplate_93f6084b36bd7b4d13c80327ffff8de8 extends Template
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
        yield "// Icon Sizes
// -------------------------

/* makes the font 33% larger relative to the icon container */
.@{fa-css-prefix}-lg {
  font-size: (4em / 3);
  line-height: (3em / 4);
  vertical-align: -15%;
}
.@{fa-css-prefix}-2x { font-size: 2em; }
.@{fa-css-prefix}-3x { font-size: 3em; }
.@{fa-css-prefix}-4x { font-size: 4em; }
.@{fa-css-prefix}-5x { font-size: 5em; }
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/larger.less";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/larger.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\libraries\\font-awesome\\less\\larger.less");
    }
}
